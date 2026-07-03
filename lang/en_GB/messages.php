<?php
/**
 * Этот файл является частью пакета Ge Framework.
 * 
 * Сообщения (пакет английской (британской) локализации).
 * 
 * @link https://rosgear.ru/framework/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Home',
    'Message' => 'Message',
    'Warning' => 'Warning',
    'Error' => 'Error',
    'The module cannot be called from the administration panel' => 'The module cannot be called from the administration panel.',
    'Edition' => 'Edition',
    'Widget' => 'Widget',
    'Module' => 'Module',
    'Module extension' => 'Module extension',
    'Extension' => 'Extension',
    'Application' => 'Application',
    'Web application' => 'Web application',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'CSRF token mismatch',
    'CSRF token is invalid or missing' => 'CSRF token is invalid or missing.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Access error',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Database query error',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Connection error',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'Unable to call service "{0}".',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Could not set internal encoding "{0}".',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Module could not make id for view model.',
    'Controller with name "{0}" not exists' => 'Controller with name "{0}" not exists.',
    'You are not allowed to perform this action' => 'You are not allowed to perform this action.',
    'Action "{0}" at controller "{1}" not exists' => 'Action "{0}" at controller "{1}" not exists.',
    'Could not define module id' => 'Could not define module id.',
    'No permission "{0}" to access the module' => 'No permission "{0}" to access the module.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Invalid parameter passed.',
    'Invalid parameter specified "{0}"' => 'Invalid parameter specified "{0}".',
    'Parameter "{0}" not specified' => 'Parameter "{0}" not specified.',
    'Parameter passed incorrectly "{0}"' => 'Parameter passed incorrectly "{0}".',
    'The value for parameter "{0}" is missing' => 'Значение параметра "{0}" отсутствует.',
    'Could not defined data model "{0}"' => 'Could not defined data model "{0}".',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} with id "{1}" not exists.',
    'File {0} "{0}" not exists' => 'File {0} "{0}" not exists.',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => 'Missing "{1}" in options to load {0}.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Login required.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'The factory needs an associative array as an argument.',
    'Missing "adapter"' => 'Missing "adapter".',
    'Missing "adapter.name"' => 'Missing "adapter.name.',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'The options parameter must be an array.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'The format {0} specified is not valid. The supported formats are: {1}.',
    'The options parameter must be an array or a Traversable' => 'The options parameter must be an array or a Traversable.',
    'You must specify a password format' => 'You must specify a password format.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'You must specify UserName and AuthName (realm) to generate the digest.',
    'The APR1 password format is not valid' => 'The APR1 password format is not valid.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'You must specify UserName and AuthName (realm) to verify the digest.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'The salt value for APR1 algorithm must be 8 characters long.',
    'The salt value must be a string in the alphabet' => 'The salt value must be a string in the alphabet.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given.',
    'Argument type should be in array({0})' => 'Argument type should be in array({0}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Elements returned from getExpressionData() array must be a string or array.',
    'A number of parameters was found that is not supported by this specification' => 'A number of parameters was found that is not supported by this specification.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'A number of parameters ({0}) was found that is not supported by this specification.',
    'Supplied expression must be a string' => 'Supplied expression must be a string.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Expression parameters must be a scalar or array.',
    'The number of replacements in the expression does not match the number of parameters' => 'The number of replacements in the expression does not match the number of parameters.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'values or select should be present.',
    'The key {0} was not found in this objects column list' => 'The key {0} was not found in this objects column list.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} expects parameter to be numeric, "{1}" given.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Table must be a string, array or instance of TableIdentifie.',
    'Can\'t get Sql string from query builder, unknow result' => 'Can\'t get Sql string from query builder, unknow result.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'This Sql object is intended to work with only the table "{0}" provided at construction time.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Since this object was created with a table and/or schema in the constructor, it is read only.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table must be a string, array, or an instance of TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() expects $table as an array is a single element associative array.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Could not find connection configurator.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Can not execute SQL request, query is empty.',
    'Error executing database query' => 'Error executing database query.',
    'Query error: {0}, {1}' => 'Eror «{0}» database query «{1}».',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Connection error: when making a connection to the server. ',
    'Connection error: loading {0} character set' => 'Connection error while loading character set "{1}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: expects a callback; none provided.',
    '{0}: сallback function "{1}" not called' => '{0}: сallback function "{1}" not called.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'Could not JSON decode: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Not valid or not supported HTTP version: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Unable to determine the entry script file path.',
    'Unable to determine the entry script URL' => 'Unable to determine the entry script URL.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Invalid status response code provided: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Unable to complete request due to error in server script.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Unknow log handler.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Parameters for "{0}" comparison are incorrect.',
    'Уou need a {0} for {1}' => 'Уou need a "{0}" for "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Уou need a {0} version of at least "{1}", current version: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Уou need a {0} for "{1}" version of at least "{2}", current version: "{3}".',
    'Used for {0} with id {1}' => 'Used for "{0}" with id "{1}".',
    'Used for {0} with code {1}' => 'Used for "{0}" with code "{1}".',
    'Used for {0} with name {1}' => 'Used for "{0}" with name "{1}".',
    
    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Manager provided is invalid; must implement ManagerInterface.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Unable to save config file.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Please configure UrlManager::scriptUrl correctly as you are running a console application.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Invalid option "{0}".',
    'No message template exists for key "{0}"' => 'No message template exists for key "{0}".',
    'No property exists by the name "{0}"' => 'No property exists by the name "{0}".',
    'Unknown type' => 'Unknown type.',
    'Invalid query parameter' => 'Invalid query parameter!',
    'File "{0}" not found' => 'File "{0}" not found.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Missing option. "min" and "max" have to be given.',
    'The input is not between "%min%" and "%max%", inclusively' => 'the input is not between "%min%" and "%max%", inclusively.',
    'The input is not strictly between "%min%" and "%max%"' => 'the input is not strictly between "%min%" and "%max%".',
    'The input must be less "%max%", inclusively' => 'The input must be less "%max%", inclusively.',
    'The input must be greater "%min%", inclusively' => 'The input must be greater "%min%", inclusively.',
    'The input must be less "%max%"' => 'The input must be less "%max%".',
    'The input must be greater "%min%"' => 'The input must be greater "%min%".',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'field value is required and cannot be empty', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'You need to select an item from the list (a value other than an item in the list is not allowed).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => "Missing option. 'format' or 'message' have to be given.",
    'You have filled in the field incorrectly' => 'You have filled in the field incorrectly.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'You entered the code incorrectly.',
    'Missing option. "param" have to be given' => 'Missing option. "param" have to be given.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Wrong value selected',
    'You have incorrectly set the comparison condition' => 'You have incorrectly set the comparison condition',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases {0} already exists' => 'The field with aliases "{0}" already exists in the settings of the module configuration manager.',
    'A field with name {0} already exists' => 'A field with the name "{0}" already exists in the settings of the module configuration manager.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Could not display module, template named "{0}" not found.',
    'Could not render module, template filename "{0}" not exists' => 'Could not display module, template file name "{0}" does not exist.',
    'Could not load template, file is not accessible "{0}"' => 'Could not load template, file not available "{0}".',
    'Could not render module, render with name "{0}" not found' => 'Could not display module, could not find module named "{0}".',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Could not render module, template (filename) "{0}" not defined or not found.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Could not render by PhpRenderer, template "{0}" not exists.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Unknown shortcode "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Shortcode "{0}" does not have option "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'Shortcode "{0}" does not have method "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Could not perform file deletion "{0}',
    'Could not perform directory deletion "{0}"' => 'Could not perform directory deletion "{0}"',
    'File name "{0}" is not a directory' => 'File name "{0}" is not a directory',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Unable to create directory "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'Unable to copy file "{0}" to directory "{1}"',
    'I managed to copy only part of the files "{0}"' => 'I managed to copy only part of the files "{0}".',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Invalid file format.',
    'The uploaded file exceeds the size set in the settings' => 'The uploaded file exceeds the size set in the settings.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    'The uploaded file was only partially uploaded' => 'The uploaded file was only partially uploaded.',
    'No file was uploaded' => 'No file was uploaded.',
    'Missing a temporary folder' => 'Missing a temporary folder.',
    'Failed to write file to disk' => 'Failed to write file to disk.',
    'File upload stopped by extension' => 'File upload stopped by extension.',
    'Unknown upload error' => 'Unknown upload error.',
    'Invalid file extension' => 'Invalid file extension.',
    'Missing class or extension PHP: "{0}"' => 'Missing class or extension PHP: "{0}".',
    'Error uploading image file' => 'Error uploading image file.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Invalid tag name or tag "{0}" does not exist.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'File does not exist at path "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Invalid update package identifier format.',
    'The specified update package data format "{0}" does not exist' => 'The specified update package data format "{0}" does not exist.',
    'Unable to create update package file "{0}"' => 'Unable to create update package file "{0}".',
    'Unable to package update package files "{0}"' => 'Unable to package update package files "{0}".',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Update pckage option "{0}" not specified or specified incorrectly.',
    'Your app version is not compatible with the update packages version' => 'Your app version is not compatible with the update packages version.',
    'Update package with ID "{0}" is missing' => 'Update package with ID "{0}" is missing.',
];
