<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Казахская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Басты бет',
    'Message' => 'Хабарлама',
    'Warning' => 'Алдын ала жазылу',
    'Error' => 'Қате',
    'The module cannot be called from the administration panel' => 'Басқару тақтасынан модульді шақыру мүмкін емес.',
    'Edition' => 'Редакциялық',
    'Widget' => 'Виджет',
    'Module' => 'Модуль',
    'Module extension' => 'Модуль кеңейтімі',
    'Extension' => 'Кеңейту',
    'Application' => 'Қолданба',
    'Web application' => 'Веб-қосымша',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => '"{0}" нысанын анықтау мүмкін емес.',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'CSRF токенінің сәйкес келмеуі',
    'CSRF token is invalid or missing' => 'CSRF токені жарамсыз немесе жоқ.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Кіру қатесі',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Дерекқорға сұрау қатесі',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Қате подключения',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => '"{0}" қызметін іске қосу мүмкін болмады. Қызмет табылмады.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Ішкі "{0}" кодтауын орнату мүмкін болмады.',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Модуль көрініс моделі үшін идентификатор жасай алмайды.',
    'Controller with name "{0}" not exists' => '"{0}" атты контроллер жоқ.',
    'You are not allowed to perform this action' => 'Бұл әрекетті орындауға рұқсат жоқ.',
    'Action "{0}" at controller "{1}" not exists' => 'Действие "{0}" контроллера "{1}" не существует.',
    'Could not define module id' => 'Модуль идентификаторын анықтау мүмкін болмады.',
    'No permission "{0}" to access the module' => '"{0}" модуліне кіруге рұқсат жоқ.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Жарамсыз параметр берілді.',
    'Invalid parameter specified "{0}"' => '"{0}" параметрі қате көрсетілген.',
    'Parameter "{0}" not specified' => 'Параметр "{0}" не указан.',
    'Parameter passed incorrectly "{0}"' => '"{0}" параметрі қате берілді.',
    'The value for parameter "{0}" is missing' => '"{0}" параметрінің мәні жоқ.',
    'Could not defined data model "{0}"' => '"{0}" деректер үлгісін анықтау мүмкін болмады.',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} идентификаторлар "{1}" жоқ.',
    'File {0} "{1}" not exists' => '{0} файлында "{1}" жоқ.',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} жүктеп салуға арналған "{1}" параметріне ие емес.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Авторизациядан өту қажет.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Зауытқа аргумент ретінде ассоциативті массив қажет.',
    'Missing "adapter"' => 'Адаптер жоқ.',
    'Missing "adapter.name"' => 'Отсутствует "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'опциялар параметрі массив болуы керек.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Көрсетілген {0} пішімі жарамсыз. Қолдау көрсетілетін пішімдер: {1}.',
    'The options parameter must be an array or a Traversable' => 'опциялар параметрі массив немесе Traversable болуы керек..',
    'You must specify a password format' => 'Сіз құпиясөз пішімін көрсетуіңіз керек.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Дайджест құру үшін UserName және AuthName (аймақ) мәндерін көрсетуіңіз керек.',
    'The APR1 password format is not valid' => 'APR1 құпиясөзінің пішімі жарамсыз.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Дайджестті тексеру үшін UserName және AuthName (аймақ) көрсетуіңіз керек.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'APR1 алгоритмі үшін тұз мәнінің ұзындығы 8 таңба болуы керек.',
    'The salt value must be a string in the alphabet' => 'Тұз мәні әліпбидегі жол болуы керек.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument мәні {0}, {1}, {2}, {3} немесе {4} болуы керек, "{5}" берілді.',
    'Argument type should be in array({0})' => 'Аргументтің түрі массив болуы керек ({1}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'getExpressionData() массивінен қайтарылатын элементтер жол немесе массив болуы керек.',
    'A number of parameters was found that is not supported by this specification' => 'Осы сипаттамада қолдау көрсетілмейтін бірқатар параметр табылды.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Осы спецификацияда қолдау көрсетілмейтін бірқатар параметрлер ({0}) табылды.',
    'Supplied expression must be a string' => 'Жеткізілетін мән жол болуы керек.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Өрнек параметрлері скаляр немесе массив болуы керек.',
    'The number of replacements in the expression does not match the number of parameters' => 'Өрнектегі алмастырулар саны параметрлер санына сәйкес келмейді.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'мәндер немесе select болуы керек.',
    'The key {0} was not found in this objects column list' => 'Нысандар бағандарының осы тізімінен {0} кілті табылмады.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} параметрдің сандық болуын күтеді, {1} берілді.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Кесте жол, массив немесе TableIdentifier данасы болуы тиіс.',
    'Can\'t get Sql string from query builder, unknow result' => 'Sql сұрауын құрастырушыдан жолды алу мүмкін болмады, белгісіз нәтиже.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Бұл Sql нысаны тек жасалу кезінде берілген "{0}" кестесімен жұмыс істеуге арналған.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Бұл нысан дизайнердегі кесте және/немесе схеманы пайдаланып жасалғандықтан, ол тек оқуға арналған.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table — жол, массив немесе TableIdentifier данасы болуы керек.',
    'from() expects $table as an array is a single element associative array' => 'from() функциясы $table массиві бір элементтен тұратын ассоциативті массив болуын күтеді.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Квантор DISTINCT, ALL немесе ExpressionInterface іске асыратын платформаға тән нысан болуы керек.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Қосылым конфигураторы табылмады.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'SQL сұрауын орындау мүмкін емес, сұрау бос.',
    'Error executing database query' => 'Дерекқорға сұрау орындалған кезде қате пайда болды.',
    'Query error: {0}, {1}' => '«{0}» сұрауын орындау қатесі «{1}».',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Дерекқор серверіне қосылу кезінде қате орын алды. ',
    'Connection error: loading {0} character set' => '«{0}» таңбалар жинағын жүктеу кезінде қосылым қатесі орын алды. ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: кері шақыру күтілуде; берілмеген.',
    '{0}: сallback function "{1}" not called' => '{0}: "{1}" кері шақыру функциясы шақырылмады.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'JSON декодтау мүмкін болмады: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Жарамсыз немесе қолдау көрсетілмейтін HTTP нұсқасы: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Кіру сценарийі файлының жолын анықтау мүмкін емес.',
    'Unable to determine the entry script URL' => 'Кіру сценарийінің URL мекенжайын анықтау мүмкін емес.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Күй туралы жауап коды жарамсыз: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Сервер сценарийіндегі қате салдарынан сұрауды орындау мүмкін емес.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Журналдың белгісіз өңдегіші.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Салыстыру параметрлері «{0}» үшін қате көрсетілген.',
    'Уou need a {0} for {1}' => 'Сізге "{0}" үшін "{1}" қажет.',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Сізге "{1}" нұсқасынан төмен емес {0} нұсқасы қажет, ағымдағы нұсқасы: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Сізге "{2}" нұсқасынан төмен емес {0} "{1}" нұсқасы қажет, ағымдағы нұсқасы: "{3}".',
    'Used for {0} with id {1}' => 'Сізге "{1}" идентификаторы бар {0} қажет.',
    'Used for {0} with code {1}' => 'Сізге "{1}" кодымен {0} қажет.',
    'Used for {0} with name {1}' => 'Сізге "{1}" атауымен {0} қажет.',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Контейнерге берілген атау жарамсыз; оның құрамында тек әріптік-сандық таңбалар, кері қиғаш сызық және астын сызу таңбасы болуы керек.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Берілген менеджер жарамсыз; ол ManagerInterface интерфейсін іске асыруы керек.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Конфигурация файлын сақтау мүмкін емес.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Консоль қолданбасын іске қосқан кезде UrlManager::scriptUrl параметрін дұрыс конфигурациялаңыз.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Қате опция "{0}".',
    'No message template exists for key "{0}"' => 'Неверный параметр "{0}".',
    'No property exists by the name "{0}"' => '"{0}" деген атаумен қасиет жоқ.',
    'Unknown type' => 'Неизвестный тип.',
    'Invalid query parameter' => 'Сұрау параметрі қате!',
    'File "{0}" not found' => 'Файл "{0}" не найден.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => '«Between» валидаторының «min» немесе «max» опциясы көрсетілмеген. Опцияны көрсету қажет.',
    'The input is not between "%min%" and "%max%", inclusively' => 'мән өрісінің мәні "%min%" және "%max%" таңбаларының арасында, қоса алғанда, болуы керек.',
    'The input is not strictly between "%min%" and "%max%"' => 'значение поля должно быть между "%min%" и "%max%" символами.',
    'The input must be less "%max%", inclusively' => 'Мән "%max%" мәнінен кіші немесе оған тең болуы керек',
    'The input must be greater "%min%", inclusively' => 'Мән "%min%" мәнінен үлкен немесе оған тең болуы керек',
    'The input must be less "%max%"' => 'Мәні "%max%" мәнінен аз болуы керек',
    'The input must be greater "%min%"' => 'Мән "%min%" мәнінен үлкен болуы керек',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'Өріс мәні міндетті және бос болмауы керек', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Тізімнен элементті таңдау қажет (тізімдегі элементтен өзгеше мәнге рұқсат етілмейді).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Опция жетіспейді. «формат» немесе «хабарлама» көрсетілуі керек.',
    'You have filled in the field incorrectly' => 'Сіз өрісті дұрыс толтырмадыңыз, өрісте тиісті таңбалар болуы керек.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Сіз кодты қате енгіздіңіз.',
    'Missing option. "param" have to be given' => '«Captcha» валидаторының «param» опциясы жоқ. Опцияны көрсету қажет.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Неправильно указано значение',
    'You have incorrectly set the comparison condition' => 'Салыстыру шартын дұрыс қоймадыңыз',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => '"{0}" бүркеншік аты бар өріс модуль конфигурациясы менеджерінің параметрлерінде әлдеқашан бар.',
    'A field with name "{0}" already exists' => '«{0}» атауы бар өріс модуль конфигурациясы менеджерінің параметрлерінде бұрыннан бар.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Модульді көрсету мүмкін болмады, "{0}" атауы бар үлгі табылмады.',
    'Could not render module, template filename "{0}" not exists' => 'Модульді көрсету мүмкін болмады, "{0}" үлгі файлының атауы жоқ.',
    'Could not load template, file is not accessible "{0}"' => 'Үлгіні жүктеу мүмкін болмады, "{0}" файлы қолжетімсіз.',
    'Could not render module, render with name "{0}" not found' => 'Модульді көрсету мүмкін болмады: «{0}» атты модуль табылмады.',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Модульді көрсету мүмкін болмады: "{0}" үлгісі (файл атауы) табылмады немесе анықталмаған.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'PhpRenderer арқылы көрсету мүмкін болмады, "{0}" үлгісі жоқ.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Белгісіз қысқа код "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Шорткод "{0}" не имеет опцию "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'Шорткодта "{0}" әдісі "{1}" жоқ.',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => '"{0}" файлын жою мүмкін болмады',
    'Could not perform directory deletion "{0}"' => 'Каталогты "{0}" жою мүмкін болмады',
    'File name "{0}" is not a directory' => '"{0}" файл атауы каталог емес',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => '«{0}» каталогын жасау мүмкін емес',
    'Unable to copy file "{0}" to directory "{1}"' => '"{0}" файлын "{1}" каталогына көшіру мүмкін емес',
    'I managed to copy only part of the files "{0}"' => '"{0}" файлдарының тек бір бөлігін ғана көшіру мүмкін болды.',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Файл пішімі қате.',
    'The uploaded file exceeds the size set in the settings' => 'Жүктелген файл параметрлерде белгіленген өлшемнен асып кетті.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'Жүктелген файлдың өлшемі php.ini конфигурация файлындағы upload_max_filesize директивасында белгіленген рұқсат етілген ең үлкен өлшемнен асып кетті.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'Жүктелетін файл өлшемі HTML пішімінде көрсетілген MAX_FILE_SIZE мәнінен асып кетті.',
    'The uploaded file was only partially uploaded' => 'Жүктелетін файл тек ішінара алынды.',
    'No file was uploaded' => 'Файл жүктелмеді.',
    'Missing a temporary folder' => 'Уақытша қалта жоқ.',
    'Failed to write file to disk' => 'Файлды дискіге жазу мүмкін болмады.',
    'File upload stopped by extension' => 'PHP кеңейтімі файлды жүктеуді тоқтатты.',
    'Unknown upload error' => 'Белгісіз жүктеу қатесі.',
    'Invalid file extension' => 'Файлдың кеңейтімі жарамсыз.',
    'Missing class or extension PHP: "{0}"' => 'PHP класы немесе кеңейтімі жоқ: "{0}".',
    'Error uploading image file' => 'Сурет файлын жүктеу (өңдеу) қатесі.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Жарамсыз тег атауы немесе «{0}» тегі жоқ.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Файл не существует по указанному пути "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Жаңарту пакетінің идентификаторының пішімі қате.',
    'The specified update package data format "{0}" does not exist' => 'Көрсетілген "{0}" жаңарту пакетінің деректер пішімі жоқ.',
    'Unable to create update package file "{0}"' => 'Жаңарту пакетінің "{0}" файлын жасау мүмкін емес',
    'Unable to package update package files "{0}"' => 'Жаңарту бумасының "{0}" файлдарын бумалау мүмкін емес',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Жаңарту пакетінің "{0}" параметрі көрсетілмеген немесе қате көрсетілген.',
    'Your app version is not compatible with the update packages version' => 'Қолданбаңыздың нұсқасы жаңарту пакетінің нұсқасымен үйлесімді емес.',
    'Update package with ID "{0}" is missing' => '"{0}" идентификаторы бар жаңарту бумасы жоқ.'
];