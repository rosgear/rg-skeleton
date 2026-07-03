<?php
if (!isset($exception) || !isset($handler)) return;

$name    = method_exists($exception, 'getName') ? $exception->getName() : 'Unknow Exception';
$message = method_exists($exception, 'getDispatch') ? $exception->getDispatch() : $exception->getMessage();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>RG: <?= $name ?></title>
    <meta name="charset" content="utf-8" />

    <link rel="shortcut icon" href="<?= BASE_URL . PUBLIC_BASE_URL?>/vendors/rg/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_BASE_URL?>/vendors/rg/css/rg.css" type="text/css" />
</head>
<body>
<div class="rg-stick rg-stick-error">
    <div class="rg-stick-head">
        <div>
            <span class="rg-stick-name"><?= $name ?></span>
<?php if (GE_MODE_DEV) : ?>
            <span class="rg-stick-exception">&mdash; <?= get_class($exception) ?></span>
<?php endif ?>
        </div>
    </div>
    <div class="rg-stick-body">
        <div class="rg-stick-msg"><?= $message ?></div>
<?php if (GE_MODE_DEV) : ?>
        <div class="rg-stick-file">
            <span class="file-letter">in</span> <?= $exception->getFile() ?><span class="file-line"><span class="file-letter">at line</span> <?= $exception->getLine() ?></span>
        </div>
<?php endif ?>
<?php if (GE_DEBUG && GE_MODE_DEV) : ?>
        <div class="rg-stick-trace">
            <ol>
<?php foreach ($exception->getTrace() as $trace) : $args = $trace['args'] ?? []; ?>
                <li>
                    <div class="target">
<? if (isset($trace['class'])) : ?>
                        <span class="target-class"><?= $trace['class'] ?></span><span class="target-type"><?= $trace['type'] ?></span>
<? endif ?>
                        <span class="target-func"><?= $trace['function'] ?> (<span class="target-func-args"><?= $handler->argumentsToString($args) ?></span>)</span>
                    </div>
<? if (!(empty($trace['file']) || empty($trace['line']))) : ?>
                    <div class="target-file">
                        <span class="file-letter">called at [</span><span class="file-name"><?= $trace['file'] ?></span><span class="file-sp">:</span><span class="file-line"><?= $trace['line'] ?></span><span class="file-letter">]</span>
                    </div>
<? endif ?>
                </li>
<?php endforeach ?>
                </ol>
            </div>
<?php endif ?>
        </div>
    </div>
</body>
</html>