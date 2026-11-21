<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Испанская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Hogar',
    'Message' => 'Mensaje',
    'Warning' => 'Advertencia',
    'Error' => 'Error',
    'The module cannot be called from the administration panel' => 'No es posible llamar al módulo desde el Panel de Control.',
    'Edition' => 'Editorial',
    'Widget' => 'Widget',
    'Module' => 'Módulo',
    'Module extension' => 'Ampliación del módulo',
    'Extension' => 'Extensión',
    'Application' => 'Solicitud',
    'Web application' => 'Aplicación web',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'No se puede definir el objeto "{0}".',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'El token CSRF no coincide',
    'CSRF token is invalid or missing' => 'El token CSRF no es válido o falta.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Error de acceso',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Error de consulta de base de datos',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Error de conexión',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'El servicio "{0}" no pudo iniciarse. Servicio no encontrado.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'No se pudo establecer la codificación interna "{0}".',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'El módulo no puede crear un identificador para el modelo de vista.',
    'Controller with name "{0}" not exists' => 'El controlador llamado "{0}" no existe.',
    'You are not allowed to perform this action' => 'No tienes permiso para realizar esta acción.',
    'Action "{0}" at controller "{1}" not exists' => 'La acción "{0}" del controlador "{1}" no existe.',
    'Could not define module id' => 'No se pudo determinar la ID del módulo.',
    'No permission "{0}" to access the module' => 'Sin permiso "{0}" para acceder al módulo.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Se pasó parámetro no válido.',
    'Invalid parameter specified "{0}"' => 'Parámetro no válido "{0}".',
    'Parameter "{0}" not specified' => 'El parámetro "{0}" no está especificado.',
    'Parameter passed incorrectly "{0}"' => 'El parámetro "{0}" se pasó incorrectamente.',
    'The value for parameter "{0}" is missing' => 'Falta el valor del parámetro "{0}".',
    'Could not defined data model "{0}"' => 'No se pudo determinar el modelo de datos "{0}".',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} con ID "{1}" no existe.',
    'File {0} "{1}" not exists' => '{0} no tiene el archivo "{1}".',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} no tiene el parámetro "{1}" para cargar.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Debes estar autorizado.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'La fábrica necesita una matriz asociativa como argumento.',
    'Missing "adapter"' => 'Ausente "adapter".',
    'Missing "adapter.name"' => 'Ausente "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'El parámetro de opciones debe ser una matriz.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'El formato especificado {0} no es válido. Formatos admitidos: {1}.',
    'The options parameter must be an array or a Traversable' => 'El parámetro de opciones debe ser una matriz o Traversable..',
    'You must specify a password format' => 'Debes especificar el formato de la contraseña.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Debe proporcionar un nombre de usuario y un nombre de autenticación (reino) para generar el resumen..',
    'The APR1 password format is not valid' => 'Formato de contraseña no válido APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Debe proporcionar un nombre de usuario y un nombre de autenticación (reino) para validar el resumen.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'El valor de sal para el algoritmo APR1 debe tener 8 caracteres.',
    'The salt value must be a string in the alphabet' => 'El valor de la sal debe ser una cadena en el alfabeto.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument debe ser {0} o {1} o {2} o {3} o {4}, se proporciona "{5}".',
    'Argument type should be in array({0})' => 'El tipo de argumento debe estar en una matriz ({1}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Los elementos devueltos de una matriz por getExpressionData() deben ser una cadena o una matriz.',
    'A number of parameters was found that is not supported by this specification' => 'Se han encontrado varios parámetros que no son compatibles con esta especificación.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Se encontraron varios parámetros ({0}) que no son compatibles con esta especificación.',
    'Supplied expression must be a string' => 'La expresión proporcionada debe ser una cadena.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Los parámetros de expresión deben ser un escalar o una matriz..',
    'The number of replacements in the expression does not match the number of parameters' => 'El número de sustituciones en la expresión no corresponde al número de parámetros..',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'los valores o select deben estar presentes.',
    'The key {0} was not found in this objects column list' => 'La clave {0} no se encontró en esta lista de columnas de objetos.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} espera que el parámetro sea numérico, dado por {1}.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'La tabla debe ser una cadena, una matriz o una instancia de TableIdentifier.',
    'Can\'t get Sql string from query builder, unknow result' => 'No se pudo obtener la fila Sql del generador de consultas, resultado desconocido.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Este objeto Sql está diseñado para funcionar únicamente con la tabla "{0}" proporcionada en el momento de la creación.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Debido a que este objeto se creó utilizando una tabla y/o esquema en el constructor, es de solo lectura.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table debe ser una cadena, una matriz o una instancia de TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() espera que $table como matriz sea una matriz asociativa de un elemento.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'El cuantificador debe ser uno de DISTINCT, ALL o algún objeto de plataforma específico que implemente ExpressionInterface.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'No se pudo encontrar el configurador de conexión.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'No se puede ejecutar la consulta SQL, la consulta está vacía.',
    'Error executing database query' => 'Error al ejecutar la consulta de la base de datos.',
    'Query error: {0}, {1}' => 'Error "{0}" al ejecutar la solicitud "{1}".',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Error al conectarse al servidor de base de datos. ',
    'Connection error: loading {0} character set' => 'Error de conexión al cargar el juego de caracteres "{0}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: esperando devolución de llamada; no proporcionado.',
    '{0}: сallback function "{1}" not called' => '{0}: función de devolución de llamada "{1}" no llamada.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'No se pudo decodificar JSON: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Versión HTTP no válida o no compatible: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'No se puede determinar la ruta del archivo del script de inicio de sesión.',
    'Unable to determine the entry script URL' => 'No se puede determinar la URL del script de inicio de sesión.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Se proporcionó un código de respuesta de estado no válido: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'La solicitud no se pudo completar debido a un error en el script del servidor.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Controlador de registros desconocido.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Parámetros no válidos especificados para la comparación "{0}".',
    'Уou need a {0} for {1}' => 'Necesitas "{0}" para "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Necesita {0} versión no inferior a "{1}", versión actual: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Necesita la versión {0} "{1}" no inferior a "{2}", versión actual: "{3}".',
    'Used for {0} with id {1}' => 'Necesitas {0} con ID "{1}".',
    'Used for {0} with code {1}' => 'Necesitas {0} con el código "{1}".',
    'Used for {0} with name {1}' => 'Necesitas {0} llamado "{1}".',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'El nombre pasado al contenedor no es válido; debe constar únicamente de caracteres alfanuméricos, barras invertidas y guiones bajos.',
    'Manager provided is invalid; must implement ManagerInterface' => 'El administrador proporcionado no es válido; debe implementar ManagerInterface.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'No se puede guardar el archivo de configuración.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Configure UrlManager::scriptUrl correctamente cuando ejecute la aplicación de consola.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Opción no válida "{0}".',
    'No message template exists for key "{0}"' => 'Parámetro no válido "{0}".',
    'No property exists by the name "{0}"' => 'No hay ninguna propiedad llamada "{0}".',
    'Unknown type' => 'Tipo desconocido.',
    'Invalid query parameter' => '¡Parámetro de solicitud no válido!',
    'File "{0}" not found' => 'Archivo "{0}" no encontrado.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Falta la opción "min" o "max" para el validador "Entre". Se debe especificar la opción.',
    'The input is not between "%min%" and "%max%", inclusively' => 'el valor del campo debe estar entre los caracteres "%min%" y "%max%", inclusive.',
    'The input is not strictly between "%min%" and "%max%"' => 'el valor del campo debe estar entre los caracteres "%min%" y "%max%".',
    'The input must be less "%max%", inclusively' => 'El valor debe ser menor que "%max%", inclusive',
    'The input must be greater "%min%", inclusively' => 'El valor debe ser mayor que "%min%", inclusive',
    'The input must be less "%max%"' => 'El valor debe ser menor que "%max%"',
    'The input must be greater "%min%"' => 'El valor debe ser mayor que "%min%"',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'el valor del campo es obligatorio y no puede estar vacío', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Debe seleccionar un elemento de la lista (no se permite un valor diferente al elemento de la lista).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Falta la opción. Se debe especificar "formato" o "mensaje".',
    'You have filled in the field incorrectly' => 'Ha completado el campo incorrectamente, el campo debe contener los caracteres apropiados.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Ingresaste el código incorrectamente.',
    'Missing option. "param" have to be given' => 'Falta la opción "param" del validador "Captcha". Se debe especificar la opción.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Valor incorrecto especificado',
    'You have incorrectly set the comparison condition' => 'Ha configurado la condición de comparación incorrectamente',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'El campo de alias "{0}" ya existe en la configuración del administrador de configuración del módulo.',
    'A field with name "{0}" already exists' => 'Ya existe un campo llamado "{0}" en la configuración del administrador de configuración del módulo.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'No se pudo mostrar el módulo; no se encontró la plantilla denominada "{0}".',
    'Could not render module, template filename "{0}" not exists' => 'No se pudo mostrar el módulo, el nombre de archivo de la plantilla "{0}" no existe.',
    'Could not load template, file is not accessible "{0}"' => 'No se pudo cargar la plantilla, el archivo no está disponible "{0}".',
    'Could not render module, render with name "{0}" not found' => 'No se pudo mostrar el módulo, no se encontró el nombre del módulo "{0}".',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Error de procesamiento del módulo, plantilla (nombre de archivo) "{0}" no encontrada o no definida.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'No se pudo renderizar con PhpRenderer, la plantilla "{0}" no existe.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Código corto desconocido "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'El código corto "{0}" no tiene la opción "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'El código corto "{0}" no tiene el método "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'No se pudo eliminar el archivo "{0}"',
    'Could not perform directory deletion "{0}"' => 'No se pudo eliminar el directorio "{0}"',
    'File name "{0}" is not a directory' => 'El nombre de archivo "{0}" no es un directorio',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'No se puede crear el directorio "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'No se puede copiar el archivo "{0}" al directorio "{1}"',
    'I managed to copy only part of the files "{0}"' => 'Fue posible copiar sólo parte de los archivos "{0}".',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Formato de archivo no válido.',
    'The uploaded file exceeds the size set in the settings' => 'El archivo cargado excede el tamaño establecido en la configuración.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'El tamaño del archivo cargado superó el tamaño máximo permitido, que se especifica en la directiva upload_max_filesize del archivo de configuración php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'El tamaño del archivo cargado superó el valor MAX_FILE_SIZE especificado en el formulario HTML.',
    'The uploaded file was only partially uploaded' => 'El archivo descargado solo se recibió parcialmente.',
    'No file was uploaded' => 'El archivo no fue subido.',
    'Missing a temporary folder' => 'Falta la carpeta temporal.',
    'Failed to write file to disk' => 'No se pudo escribir el archivo en el disco.',
    'File upload stopped by extension' => 'La extensión PHP dejó de descargar el archivo.',
    'Unknown upload error' => 'Error de descarga desconocido.',
    'Invalid file extension' => 'Extensión de archivo no válida.',
    'Missing class or extension PHP: "{0}"' => 'Falta una clase o extensión PHP: "{0}".',
    'Error uploading image file' => 'Error al cargar (procesar) el archivo de imagen.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'El nombre de etiqueta no válido o la etiqueta "{0}" no existe.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'El archivo no existe en la ruta especificada "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Formato de ID del paquete de actualización no válido.',
    'The specified update package data format "{0}" does not exist' => 'El formato de datos del paquete de actualización especificado "{0}" no existe.',
    'Unable to create update package file "{0}"' => 'No se puede crear el archivo del paquete de actualización "{0}"',
    'Unable to package update package files "{0}"' => 'No se pueden empaquetar los archivos del service pack "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Falta el parámetro del paquete de actualización "{0}" o se ha especificado incorrectamente.',
    'Your app version is not compatible with the update packages version' => 'La versión de su aplicación no es compatible con la versión del service pack.',
    'Update package with ID "{0}" is missing' => 'Falta el ID del paquete de actualización "{0}".'
];