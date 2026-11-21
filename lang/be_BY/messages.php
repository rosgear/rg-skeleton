<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Белорусская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Галоўная',
    'Message' => 'Паведамленне',
    'Warning' => 'Папярэджанне',
    'Error' => 'Памылка',
    'The module cannot be called from the administration panel' => 'Выклік модуля з Панэлі кіравання немагчымы.',
    'Edition' => 'Рэдакцыя',
    'Widget' => 'Віджэт',
    'Module' => 'Модуль',
    'Module extension' => 'Пашырэнне модуля',
    'Extension' => 'Пашырэнне',
    'Application' => 'Прыкладанне',
    'Web application' => 'Вэб-дадатак',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'Немагчыма вызначыць аб\'ект "{0}".',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'Несупадзенне токена CSRF',
    'CSRF token is invalid or missing' => 'CSRF токен несапраўдны або адсутнічае.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Памылка доступу',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Памылка запыту да базы даных',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Памылка падключэння',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'Не атрымалася запусціць службу "{0}". Служба не знойдзена.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Не атрымалася ўсталяваць унутраную кадоўку "{0}".',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Модуль не можа зрабіць ідэнтыфікатар для мадэлі падання.',
    'Controller with name "{0}" not exists' => 'Кантролер з імем "{0}" не існуе.',
    'You are not allowed to perform this action' => 'Вам не дазволена выконваць гэта дзеянне.',
    'Action "{0}" at controller "{1}" not exists' => 'Дзеянне "{0}" кантролера "{1}" не існуе.',
    'Could not define module id' => 'Не атрымалася вызначыць ідэнтыфікатар модуля.',
    'No permission "{0}" to access the module' => 'Няма дазволу "{0}" для доступу да модуля.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Перададзены няправільны параметр.',
    'Invalid parameter specified "{0}"' => 'Няправільны параметр "{0}".',
    'Parameter "{0}" not specified' => 'Параметр "{0}" не пазначаны.',
    'Parameter passed incorrectly "{0}"' => 'Няправільна перададзены параметр "{0}".',
    'The value for parameter "{0}" is missing' => 'Значэнне параметра "{0}" адсутнічае.',
    'Could not defined data model "{0}"' => 'Не атрымалася вызначыць мадэль дадзеных "{0}".',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} з ідэнтыфікатарам "{1}" не існуе.',
    'File {0} "{1}" not exists' => '{0} не мае файл "{1}".',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} не мае параметр "{1}" для загрузкі.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Неабходна прайсці аўтарызацыю.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Фабрыцы патрэбен асацыятыўны масіў у якасці аргументу.',
    'Missing "adapter"' => 'Адсутнічае "adapter".',
    'Missing "adapter.name"' => 'Адсутнічае "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'Параметр options павінен быць масівам.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Указаны фармат {0} недапушчальны. Падтрымліваюцца фарматы: {1}.',
    'The options parameter must be an array or a Traversable' => 'Параметр options павінен быць масівам ці Traversable.',
    'You must specify a password format' => 'Вы павінны пазначыць фармат пароля.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Вы павінны пазначыць UserName і AuthName (вобласць) для генерацыі дайджэсту.',
    'The APR1 password format is not valid' => 'Недапушчальны фармат пароля APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Вы павінны пазначыць UserName і AuthName (вобласць) для праверкі дайджэсту.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'Значэнне солі для алгарытму APR1 павінна быць даўжынёй 8 сімвалаў.',
    'The salt value must be a string in the alphabet' => 'Значэнне солі павінна быць радком у алфавіце.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument павінен быць {0} або {1} або {2} або {3} або {4}, "{5}" дадзены.',
    'Argument type should be in array({0})' => 'Тып аргумента павінен быць у масіве ({1}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Элементы, якія вяртаюцца з масіва getExpressionData(), павінны быць радком або масівам.',
    'A number of parameters was found that is not supported by this specification' => 'Быў знойдзены шэраг параметраў, якія не падтрымліваюцца гэтай спецыфікацыяй.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Быў знойдзены шэраг параметраў ({0}), якія не падтрымліваюцца гэтай спецыфікацыяй.',
    'Supplied expression must be a string' => 'Які пастаўляецца выраз павінен быць радком.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Параметры выражэння павінны быць скалярам або масівам.',
    'The number of replacements in the expression does not match the number of parameters' => 'Колькасць замен у выразе не адпавядае колькасці параметраў.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'значэння або select павінны прысутнічаць.',
    'The key {0} was not found in this objects column list' => 'Ключ {0} не быў знойдзены ў гэтым спісе слупкоў аб\'ектаў.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} чакае, што параметр будзе лікавым, зададзена {1}.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Табліца павінна быць радком, масівам або асобнікам TableIdentifier.',
    'Can\'t get Sql string from query builder, unknow result' => 'Не ўдалося атрымаць радок Sql ад будаўніка запытаў, невядомы вынік.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Гэты аб\'ект Sql прызначаны для працы толькі з табліцай "{0}", прадстаўленай падчас стварэння.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Паколькі гэты аб\'ект быў створаны з дапамогай табліцы і / або схемы ў канструктару, ён даступны толькі для чытання.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table павінен быць радком, масівам ці асобнікам TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() чакае, што $table як масіў з\'яўляецца асацыятыўным масівам з аднаго элемента.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Квантыфікатар павінен быць адным з DISTINCT, ALL або нейкага канкрэтнага платформеннага аб\'екта, які рэалізуе ExpressionInterface.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Не змог знайсці канфігуратар злучэння.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Немагчыма выканаць запыт SQL, запыт пусты.',
    'Error executing database query' => 'Памылка пры выкананні запыту да базы даных.',
    'Query error: {0}, {1}' => 'Памылка "{0}" выканання запыту "{1}".',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Памылка пры падлучэнні да сервера базы дадзеных. ',
    'Connection error: loading {0} character set' => 'Памылка падключэння пры загрузцы набору сімвалаў "{0}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: чакае зваротнага выкліку; не прадастаўлена.',
    '{0}: сallback function "{1}" not called' => '{0}: функцыя зваротнага выкліку "{1}" не выклікана.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'Не ўдалося дэкадаваць JSON: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Недапушчальная ці не падтрымліваемая версія HTTP: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Немагчыма вызначыць шлях да файла сцэнара ўваходу.',
    'Unable to determine the entry script URL' => 'Немагчыма вызначыць URL сцэнара ўваходу.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Прадастаўлены няправільны код адказу аб статусе: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Немагчыма выканаць запыт з-за памылкі ў сцэнары сервера.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Невядомы апрацоўшчык часопіса.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Няправільна пазначаны параметры для параўнання "{0}".',
    'Уou need a {0} for {1}' => 'Вам неабходна "{0}" для "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Вам неабходны {0} версіяй не ніжэй "{1}", бягучая версія: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Вам неабходная версія {0} "{1}" не ніжэй за "{2}", бягучая версія: "{3}".',
    'Used for {0} with id {1}' => 'Вам неабходна {0} з ідэнтыфікатарам "{1}".',
    'Used for {0} with code {1}' => 'Вам неабходна {0} з кодам "{1}".',
    'Used for {0} with name {1}' => 'Вам неабходна {0} з імем "{1}".',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Імя, перададзенае ў кантэйнер, несапраўднае; павінен складацца толькі з літарна-лічбавых знакаў, зваротнай касой рысы і падкрэсліванні.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Прадастаўлены менеджэр несапраўдны; павінен рэалізаваць ManagerInterface.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Немагчыма захаваць файл канфігурацыі.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Калі ласка, наладзьце UrlManager::scriptUrl правільна, калі вы запускаеце кансольнае дадатак.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Няправільная опцыя "{0}".',
    'No message template exists for key "{0}"' => 'Няправільны параметр "{0}".',
    'No property exists by the name "{0}"' => 'Не існуе ўласцівасці з імем "{0}".',
    'Unknown type' => 'Невядомы тып.',
    'Invalid query parameter' => 'Няправільны параметр запыту!',
    'File "{0}" not found' => 'Файл "{0}" не знойдзены.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Прапушчана опцыя "мін" ці "макс" валідатара "Between". Опцыя павінна быць зададзена.',
    'The input is not between "%min%" and "%max%", inclusively' => 'значэнне поля павінна быць паміж "%min%" і "%max%" сімваламі, уключна.',
    'The input is not strictly between "%min%" and "%max%"' => 'значэнне поля павінна быць паміж "%min%" і "%max%" сімваламі.',
    'The input must be less "%max%", inclusively' => 'Значэнне павінна быць менш "%max%", уключна',
    'The input must be greater "%min%", inclusively' => 'Значэнне павінна быць больш "%min%", уключна',
    'The input must be less "%max%"' => 'Значэнне павінна быць менш "%max%"',
    'The input must be greater "%min%"' => 'Значэнне павінна быць больш "%min%"',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'значэнне поля з\'яўляецца абавязковым і не можа быць пустым', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Вам неабходна абраць са спісу элемент (не дапушчаецца значэнне выдатнае ад элемента ў спісе).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Прапушчана опцыя. "фармат" або "паведамленне" павінны быць указаны.',
    'You have filled in the field incorrectly' => 'Вы няправільна запоўнілі поле, поле павінна змяшчаць адпаведныя сімвалы.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Вы няправільна ўвялі код.',
    'Missing option. "param" have to be given' => 'Прапушчана опцыя "param" валідатара "Captcha". Опцыя павінна быць зададзена.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Няправільна пазначана значэнне',
    'You have incorrectly set the comparison condition' => 'Вы няправільна задалі ўмову параўнання',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'Поле з псеўданімаў "{0}" ужо існуе ў наладах мэнэджара канфігурацыі модуля.',
    'A field with name "{0}" already exists' => 'Поле з імем "{0}" ужо існуе ў наладах мэнэджара канфігурацыі модуля.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Не ўдалося адлюстраваць модуль: шаблон з назвай "{0}" не знойдзены.',
    'Could not render module, template filename "{0}" not exists' => 'Не ўдалося адлюстраваць модуль: імя файла шаблона "{0}" не існуе.',
    'Could not load template, file is not accessible "{0}"' => 'Не ўдалося загрузіць шаблон, файл "{0}" недаступны.',
    'Could not render module, render with name "{0}" not found' => 'Не ўдалося адлюстраваць модуль, не знойдзены модуль з імем "{0}".',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Не атрымалася выканаць рэндэр модуля, шаблон (імя файла) "{0}" не знойдзены або нявызначаны.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Не атрымалася адлюстраваць з дапамогай PhpRenderer, шаблон "{0}" не існуе.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Невядомы шорткод "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Шорткод "{0}" не мае опцыі "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'У шорткода "{0}" няма метаду "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Не атрымалася выканаць выдаленне файла "{0}"',
    'Could not perform directory deletion "{0}"' => 'Не атрымалася выканаць выдаленне каталога "{0}"',
    'File name "{0}" is not a directory' => 'Імя файла "{0}" не з\'яўляецца каталогам',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Немагчыма стварыць каталог "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'Немагчыма выканаць капіраванне файла "{0}" у каталог "{1}"',
    'I managed to copy only part of the files "{0}"' => 'Удалося скапіяваць толькі частку файлаў "{0}".',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Неверный формат файла.',
    'The uploaded file exceeds the size set in the settings' => 'Загружаны файл перавышае памер, усталяваны ў наладах.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'Памер загружанага файла перавысіў максімальна дапушчальны памер, які зададзены дырэктывай upload_max_filesize канфігурацыйнага файла php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'Памер загружанага файла перавысіў значэнне MAX_FILE_SIZE, паказанае ў HTML-форме.',
    'The uploaded file was only partially uploaded' => 'Загружаны файл быў атрыманы толькі часткова.',
    'No file was uploaded' => 'Файл не быў загружаны.',
    'Missing a temporary folder' => 'Адсутнічае часовая тэчка.',
    'Failed to write file to disk' => 'Не атрымалася запісаць файл на дыск.',
    'File upload stopped by extension' => 'PHP-пашырэнне спыніла загрузку файла.',
    'Unknown upload error' => 'Невядомая памылка загрузкі.',
    'Invalid file extension' => 'Недапушчальнае пашырэнне файла.',
    'Missing class or extension PHP: "{0}"' => 'Адсутнічае клас або пашырэнне PHP: "{0}".',
    'Error uploading image file' => 'Памылка загрузкі (апрацоўкі) файла выявы.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Несапраўднае імя тэга ці тэг "{0}" не існуе.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Файл не існуе па ўказаным шляху "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Няправільны фармат ідэнтыфікатара пакета абнаўленняў.',
    'The specified update package data format "{0}" does not exist' => 'Указаны фармат "{0}" дадзеных пакета абнаўленняў не існуе.',
    'Unable to create update package file "{0}"' => 'Немагчыма стварыць файл пакета абнаўленняў "{0}"',
    'Unable to package update package files "{0}"' => 'Немагчыма спакаваць файлы пакета абнаўленняў "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Не пазначаны або няправільна паказаны параметр "{0}" пакета абнаўленняў.',
    'Your app version is not compatible with the update packages version' => 'Версія вашага прыкладання не сумяшчальная з версіяй пакета абнаўленняў.',
    'Update package with ID "{0}" is missing' => 'Адсутнічае пакет абнаўленняў з ідэнтыфікатарам "{0}".',
];
