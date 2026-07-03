<?php
if (!isset($exceptions) || !isset($handler)) return;

if (!$withContent) : ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>RG: errors</title>
    <meta name="charset" content="utf-8" />

    <link rel="shortcut icon" href="<?= BASE_URL . PUBLIC_BASE_URL ?>/vendors/rg/ico/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="<?= BASE_URL . PUBLIC_BASE_URL ?>/vendors/rg/css/rg.css" type="text/css" />
</head>
<body>
<?php else : ?>
<link rel="shortcut icon" href="<?= BASE_URL . PUBLIC_BASE_URL ?>/vendors/rg/ico/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?= BASE_URL . PUBLIC_BASE_URL ?>/vendors/rg/css/rg.css" type="text/css" />
<?php endif ?>
<?php
    foreach($exceptions as $error) :
        $severity = method_exists($error, 'getSeverity') ? $handler->getSeverity($error->getSeverity()) : null;
        $message  = method_exists($error, 'getDispatch') ? $error->getDispatch() : $error->getMessage();
?>
<div class="rg-stick rg-stick-<?= $severity === null ? 'none' : $severity[0]; ?>">
    <div class="rg-stick-head">
        <div>
            <span class="rg-stick-name"><?= $severity === null ? 'Exception' : $severity[1]; ?></span> <span class="rg-stick-exception">&mdash; <?= get_class($error) ?></span>
        </div>
    </div>
    <div class="rg-stick-body">
        <div class="rg-stick-msg"><?= $message ?></div>
        <div class="rg-stick-file">
            <span class="file-letter">in</span> <?= $error->getFile() ?><span class="file-line"><span class="file-letter">at line</span> <?= $error->getLine() ?></span>
        </div>
<?php if (GE_DEBUG) : ?>
        <div class="rg-stick-trace">
            <ol>
<?php foreach($error->getTrace() as $trace) : ?>
                <li>
                    <div class="target">
<? if (isset($trace['class'])) : ?>
                        <span class="target-class"><?= $trace['class'] ?></span><span class="target-type"><?= $trace['type'] ?></span>
<? endif ?>
                        <span class="target-func"><?= $trace['function'] ?> (<span class="target-func-args"><?= $handler->argumentsToString($trace['args'] ?? []) ?></span>)</span>
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

<?php endforeach ?>
</body>
</html>