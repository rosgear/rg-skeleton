<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Казахская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Сайт',
    FRONTEND => 'сайт',
    BACKEND_NAME => 'Басқару тақтасы',
    BACKEND => 'басқару тақтасы',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'Сіз таңдаған элемент жоқ немесе жойылған.',
    'No data to perform action' => 'Әрекетті орындау үшін деректер жоқ.',
    'Invalid query method' => 'Жарамсыз сұрау әдісі.',
    'Invalid request format' => 'Жарамсыз сұрау пішімі.',
    'Error filling out form fields: {0}' => 'Форма өрістерін толтыру кезінде қате пайда болды<br>{0}.',
    'Invalid argument "{0}"' => 'Жарамсыз аргумент "{0}".',
    'Could not delete record' => 'Жазба жойылмады.',
    'Could not save data' => 'Деректер сақталмады.',
    'Could not add data' => 'Деректер қосылмады.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => '"{0}" модулі туралы ақпарат',
    'Not enough information on the specified record, the user may have been deleted' => 'Көрсетілген жазба үшін ақпарат жеткіліксіз, бұл жазбаның пайдаланушысы жойылған болуы мүмкін.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => '"{0}" кеңейтімі туралы ақпарат',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Таңдалған жазбалардан «<b>{nSelected}</b>», {deleted, plural, =1{жойылды «<b>1</b>» жазба few{"<b>{nDeleted}</b>" жазбасы жойылды} many{жойылған "<b>{nDeleted}</b>" жазбалары} other{жойылған "<b>{nDeleted}</b>" жазбалары}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Жазбалар ішінара жойылды, {deleted, plural, =1{жойылды «<b>1</b>» жазба few{удалены «<b>{nDeleted}</b>» записи} many{жойылған "<b>{nDeleted}</b>" жазбалары} other{жойылған "<b>{nDeleted}</b>" жазбалары}}, '
      . '{skipped, plural, =1{өткізіп алған «<b>1</b>» жазба few{"<b>{nSkipped}</b>" жазбалары өткізіліп жіберілді} many{п"<b>{nSkipped}</b>" жазбалары жоқ} other{"<b>{nSkipped}</b>" жазбалары өткізіліп жіберілді}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Жою мүмкін емес {n, plural, =1{жазбалар, жазбаға кіруге болмайды} other{"<b>{N}</b>" жазбалары, жазбалар қолжетімді емес}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Жою мүмкін емес {n, plural, =1{жазу, жазу мүмкін емес} few{жазбалар, жазбалар жоқ} many{жазбалар, жазбалар жоқ} other{жазбалар, жазбалар жоқ}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Сәтті {n, plural, =1{жойылды «<b>1</b>» жазба} few{"<b>{N}</b>" жазбалары жойылды} many{"<b>{N}</b>" жазбалары жойылды} other{"<b>{N}</b>" жазбалары жойылды}}.',
    'Deletion' => 'Жою',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Файлдар жартылай жойылды, {deleted, plural, =1{"<b>1</b>" файл жойылды} few{"<b>{nDeleted}</b>" файлдар жойылды} many{"<b>{nDeleted}</b>" файлдар жойылды} other{"<b>{nDeleted}</b>" файлдар жойылды}} '
        . '{skipped, plural, =1{өткізілді "<b>1</b>" файл} few{өткізілді "<b>{nӨткізіп жіберілді}</b>" файл} many{өткізілді "<b>{nӨткізіп жіберілді}</b>" файл} other{өткізілді "<b>{nӨткізіп жіберілді}</b>" файл}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Файлдар ішінара жойылды, {n, plural, =1{"<b>1</b>" файлы жоқ} few{"<b>{N}</b>" файлы жоқ} many{"<b>{N}</b>" файлдары жоқ} other{"<b>{N}</b>" файлдары жоқ}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Каталогтар жартылай жойылды, {deleted, plural, =1{«<b>1</b>» каталог жойылды} few{«<b>{nDeleted}</b>» каталогтар жойылды} many{«<b>{nDeleted}</b>» каталогтар жойылды} other{«<b>{nDeleted}</b>}» каталогтар жойылды}},'
        . '{skipped, plural, =1{өткізілді «<b>1</b>» каталогы} few{өтіп жіберді «<b>{nSkipped}</b>» каталогтар} many{өткізілді «<b>{nSkipped}</b>» каталогтар} other{өткізілді «<b>{nSkipped}</b>» каталогтар}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Каталогтар ішінара жойылды, {n, plural, =1{«<b>1</b>» каталогы жоқ} few{«<b>{N}</b>» каталогтары жоқ} many{«<b>{N}</b>» каталогтары жоқ} other{«<b>{N}</b>» каталогтары жоқ}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Сәтті {n, көпше, =1{«<b>1</b>» файл жойылды} few{«<b>{N}</b>» файл жойылды} many{«<b>{N}</b>» файлдар жойылды} other{«<b>{N}</b>» файлдар жойылды}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Сәтті {n, plural, =1{«<b>1</b>» каталогы жойылды} few{«<b>{N}</b>» каталогтар жойылды} many{жойылған «<b>{N}</b>» каталогтар} other{жойылған "«<b>{N}</b>» каталогтар}}.',
    'Files and directories deleted successfully' => 'Файлдар мен каталогтар сәтті жойылды.',
    'Files deleted successfully' => 'Файлдар сәтті жойылды.',
    'Directories deleted successfully' => 'Каталогтар сәтті жойылды.',
    'Unable to delete files' => 'Файлдарды жою мүмкін емес.',
    'Unable to delete directories' => 'Каталогтарды жою мүмкін емес.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Жазбаны жою мүмкін емес.',
    'Record successfully deleted' => 'Жазба сәтті жойылды.',
    'Record successfully added' => 'Жазба сәтті қосылды.',
    'Record successfully update' => 'Жазба сәтті өзгертілді.',
    'Unable to add record' => 'Жазба қосу мүмкін емес.',
    'Unable to update record' => 'Жазбаны өзгерту мүмкін емес.',
    'Update record' => 'Жазбаларды өзгерту',
    'Adding record' => 'Жазба қосу',
    'A record with the specified field values already exists' => 'Көрсетілген өріс мәндері бар жазба бұрыннан бар.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => '"{0}" модулін конфигурациялау',
    'Settings successfully changed' => 'Параметрлер сәтті өзгертілді.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Кеңейтімді орнату "{0}"',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Пішін үлгісін жүктеу мүмкін болмады ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Өңдеу',
    'Search' => 'Іздеу',
    'Columns' => 'Бағандар',
    'Add' => 'қосу',
    'Adding a new record' => 'Жаңа жазба қосу',
    'Delete' => 'Жою',
    'Delete selected records' => 'Таңдалған жазбаларды жою',
    'Are you sure you want to delete posts' => 'Жазбаны(ларды) жойғыңыз келетініне сенімдісіз бе? - <b>{0}</b> ?',
    'You need to select records' => 'Жазбаларды бөлектеу керек.',
    'Edit' => 'Өңдеу',
    'Save' => 'Сақтау',
    'Clear' => 'Таза',
    'Deleting all records' => 'Тізімнен барлық жазбаларды жою',
    'Are you sure you want to delete all records' => 'Сіз шынымен барлық жазбаларды жойғыңыз келе ме??',
    'You are sure of this' => 'Сіз бұған сенімдісіз бе?',
    'Select' => 'Таңдаңыз',
    'Selecting entries in the list' => 'Тізімдегі жазбаларды таңдау',
    'Select all' => 'Барлығын таңдаңыз',
    'Remove selection' => 'Таңдауды жою',
    'Invert Selection' => 'Таңдауды инверсиялау',
    'Refresh' => 'Жаңарту',
    'Refresh a list of records' => 'Жазбалар тізімін жаңарту',
    'Profiling' => 'Профильдеу',
    'Record profiling' => 'Жазба профилін жасау',
    'Show' => 'Көрсету',
    'Hide' => 'Жасыру',
    'Toggle columns' => 'Бағандарды көрсету/жасыру',
    'Filter' => 'Сүзгі',
    'Filtering records' => 'Жазбаларды сүзу',
    '[None]' => '[ таңдау жоқ ]',
    'Reference' => 'Анықтама',
    'This feature is under development' => 'Бұл мүмкіндік әзірленуде!',
    'Browse' => 'таңдаңыз',
    'Entry must be selected' => 'Жазбаны таңдауыңыз керек!',
    'Only one entry needs to be selected' => 'Тек бір жазба таңдалуы керек!',
    'Remove window modality' => 'Терезе модальділігін жою',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'жазбаны өңдеу/қосу',
    'User' => 'Пайдаланушы',
    'Date' => 'Күн',
    'today' => 'бүгін', 'yesterday' => 'кеше', 'during the week' => 'аптасына', 'per month' => 'айына', 'in a year' => 'жылға арналған',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Код',
    'Date added' => 'Қосылған күні',
    'Date edit' => 'Өңдеу күні',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Аудит записи "<span>{0}</span>"',
    'Updated record date: {0}' => 'Жазбаны өңдеу күні: {0}',
    'Created record date: {0}' => 'Қосылған күні: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Қалпына келтіру',
    'Cancel' => 'Болдырмау',
    'Help' => 'Көмек',
    'Update' => 'Өзгерту',
    'About widget' => 'Виджет туралы',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'Ушін ҚОСУҒА ТЫЙЫМ САЛЫНАДЫ <b>{profile}</b>, пайдаланушы тіркелгісі арқылы әрекет ету кезінде «<b>{user}</b>» орындау: {action} модуль «<b>{module}</b>» в <b>{date}</b> IP мекенжайынан <b>{ipaddress}</b>, браузердегі «<b>{os}</b>» операциялық жүйесі  «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> пайдаланушы тіркелгісі астында «<b>{user}</b>» аяқталды: {action} модуль «<b>{module}</b>» в <b>{date}</b> IP мекенжайынан <b>{ipaddress}</b>, операциялық жүйе  «<b>{os}</b>» браузерде  «<b>{browser}</b>»',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'үшін ҚОСУҒА ТЫЙЫМ САЛЫНАДЫ <b>{profile}</b> пайдаланушы тіркелгісі астында «<b>{user}</b>» аяқталды: {action} модуль «<b>{module}</b>» идентификатормен «<b>{id}</b>» в <b>{date}</b> IP мекенжайынан <b>{ipaddress}</b>, операциялық жүйе  «<b>{os}</b>» браузерде  «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> пайдаланушы тіркелгісі астында «<b>{user}</b>» аяқталды: {action} модуль «<b>{module}</b>» идентификатормен «<b>{id}</b>» в <b>{date}</b> IP мекенжайынан <b>{ipaddress}</b>, операциялық жүйе  «<b>{os}</b>» браузерде  «<b>{browser}</b>»',
    '{data action}' => 'деректерді көру',
    '{update action}' => 'жазбаларды өзгерту',
    '{add action}' => 'жазба қосу',
    '{view action}' => 'қойындыны/терезені ашу',
    '<unknown>' => '<белгісіз>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'жазба аудитінің ақпаратын көруb>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'ағаш түйін жазбаларын қарау"<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'жазбаны іздеу терезесін ашыңызыз',
    '{data search action}' => 'жазба іздеу мәндерін көру',
    '{update search action}' => 'жазбаларды іздеу үшін орнатылған мәндерді қолдану',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'жазбаны көруb>{0}</b>"',
    '{update form action}' => 'жазбаларды өзгерту "<b>{0}</b>"',
    '{add form action}' => 'жазба қосу "<b>{0}</b>"',
    '{view form action}' => 'жазбаны көру үшін терезені ашыңыз "<b>{0}</b>"',
    '{view add form action}' => 'жазба қосу үшін терезені ашу',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'параметрлер терезесін ашу',
    '{data settings action}' => 'параметрлерді көру',
    '{update settings action}' => 'параметрлерді өзгерту',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'ақпаратты көру үшін қойындыны/терезені ашу',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'тізімнен жазба(лар)ды жою',
    '{update grid row(s) action}' => '"<b>{0}</b>" тізім жазбасын өзгерту',
    '{clear grid row(s) action}' => 'тізімнен барлық жазбаларды жою',
    '{clear action}' => 'барлық жазбаларды жою',
    '{expand grid row(s) action}' => '"<b>{0}</b>" тізім жазбасының кеңейтілген көрінісі',
    '{view grid row(s) action}' => 'жазбалар тізімін көру үшін қойындыны ашу',
    '{filter grid row(s) action}' => 'жазба сүзгісін орнату',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Ақпарат', 'Модуль туралы ақпарат'],
        'settings'   => ['Параметрлер', 'Модуль параметрлері'],
        'recordRls'  => ['Жазба деңгейіндегі қолжетімділік', 'Тек жазбаларыңызды қараңыз және оқыңыз'],
        'writeAudit' => ['Аудит ізін сақтаңыз', 'Пайдаланушы орындайтын операцияларды құжаттау'],
        'viewAudit'  => ['Аудит журналын оқыңыз', 'Пайдаланушы орындаған транзакцияларды қарау']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => '{0} көрсетілген идентификатормен қол жетімді емес"{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} көрсетілген идентификатормен "{1}" жүйе болып табылады.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} "{1}" идентификаторы дерекқорда жоқ.',
    'Missing {0} configuration file "{1}"' => '{0} конфигурация файлы жоқ "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => '"{0}" конфигурация файлының "{1}" параметрі жоқ.',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => '"{0}" конфигурация файлының "{1}" параметрі қате көрсетілген.',
    '{0} with specified id "{1}" already installed' => 'Көрсетілген "{1}" идентификаторы бар {0} орнатылған.',
    '{0} with specified parameter "{1}" already installed' => '"{1}" параметрі бар {0} әлдеқашан орнатылған.',
    'Error adding {0} to database' => '{0} қатеге байланысты дерекқорға қосу мүмкін емес.',
    'The {0} with ID "{1}" is not in the registry' => '"{1}" идентификаторы бар {0} тізілімде жоқ.',
    'The {0} with ID "{1}" not found at database' => '"{1}" идентификаторы бар {0} дерекқорда табылмады.',
    'Error saving {0} to database' => '{0} қатеге байланысты дерекқорға сақталуы мүмкін емес.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} орнату опцияларында көрсетілген "{1}" локализация файлы жоқ.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Бұл кеңейтімді орнату үшін "{0}" идентификаторы бар модульді орнату керек.'
];
