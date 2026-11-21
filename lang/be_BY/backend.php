<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Белорусская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Сайт',
    FRONTEND => 'сайт',
    BACKEND_NAME => 'Панэль кіравання',
    BACKEND => 'панэль кіравання',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'Абраны вамі элемент не існуе ці быў выдалены.',
    'No data to perform action' => 'Няма дадзеных для выканання дзеяння.',
    'Invalid query method' => 'Няправільны метад запыту.',
    'Invalid request format' => 'Няправільны фармат запыту.',
    'Error filling out form fields: {0}' => 'Памылка запаўнення палёў формы<br>{0}.',
    'Invalid argument "{0}"' => 'Недапушчальны аргумент "{0}".',
    'Could not delete record' => 'Не атрымалася выдаліць запіс.',
    'Could not save data' => 'Не ўдалося захаваць дадзеныя.',
    'Could not add data' => 'Не атрымалася дадаць дадзеныя.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Інфармацыя аб модулі "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Недастаткова інфармацыі па ўказаным запісе, магчыма карыстальнік гэтага запісу быў выдалены.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Інфармацыя аб пашырэнні "{0}"',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'З выбраных запісаў «<b>{nSelected}</b>», {deleted, plural, =1{удалена «<b>1</b>» запис} few{выдаленае «<b>{nDeleted}</b>» запісы} many{выдаленае «<b>{nDeleted}</b>» запісаў} other{выдаленае «<b>{nDeleted}</b>» запісаў}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Запісы былі часткова выдалены, {deleted, plural, =1{выдалены «<b>1</b>» запіс} few{выдаленыя «<b>{nDeleted}</b>» запісы} many{выдаленае «<b>{nDeleted}</b>» запісаў} other{выдаленае «<b>{nDeleted}</b>» запісаў}}, '
      . '{skipped, plural, =1{прапушчана «<b>1</b>» запіс} few{«<b>{nSkipped}</b>» запісаў прапушчана} many{прапушчана «<b>{nSkipped}</b>» запісаў} other{прапушчана «<b>{nSkipped}</b>» запісаў}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Немагчыма выканаць выдаленне {n, plural, =1{запісы, запіс не доступу} other{«<b>{N}</b>» запісаў, запісы не доступы}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Немагчыма выканаць выдаленне {n, plural, =1{запісы, запіс не даступна} few{запісы, запісы не даступныя} many{запісаў, запісы не даступныя} other{запісаў, запісы не даступныя}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Паспяхова {n, plural, =1{выдалены «<b>1</b>» запіс} few{выдаленыя «<b>{N}</b>» запісы} many{выдаленае «<b>{N}</b>» запісаў} other{выдаленае «<b>{N}</b>» запісаў}}.',
    'Deletion' => 'Выдаленне',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Файлы были частично удалены, {deleted, plural, =1{удалён «<b>1</b>» файл} few{удалены «<b>{nDeleted}</b>» файлы} many{удалено «<b>{nDeleted}</b>» файлов} other{удалено «<b>{nDeleted}</b>» файлов}}, '
     . '{skipped, plural, =1{пропущен «<b>1</b>» файл} few{пропущено «<b>{nSkipped}</b>» файла} many{пропущено «<b>{nSkipped}</b>» файлов} other{пропущено «<b>{nSkipped}</b>» файлов}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Файлы были частично удалены, {n, plural, =1{пропущен «<b>1</b>» файл} few{пропущено «<b>{N}</b>» файла} many{пропущено «<b>{N}</b>» файлов} other{пропущено «<b>{N}</b>» файлов}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Каталоги были частично удалены, {deleted, plural, =1{удалён «<b>1</b>» каталог} few{удалены «<b>{nDeleted}</b>» каталога} many{удалено «<b>{nDeleted}</b>» каталогов} other{удалено «<b>{nDeleted}</b>» каталогов}}, '
     . '{skipped, plural, =1{пропущен «<b>1</b>» каталог} few{пропущено «<b>{nSkipped}</b>» каталога} many{пропущено «<b>{nSkipped}</b>» каталогов} other{пропущено «<b>{nSkipped}</b>» каталогов}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Каталоги были частично удалены, {n, plural, =1{пропущен «<b>1</b>» каталог} few{пропущено «<b>{N}</b>» каталога} many{пропущено «<b>{N}</b>» каталогов} other{пропущено «<b>{N}</b>» каталогов}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Успешно {n, plural, =1{удалён «<b>1</b>» файл} few{удалены «<b>{N}</b>» файла} many{удалено «<b>{N}</b>» файлов} other{удалено «<b>{N}</b>» файлов}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Успешно {n, plural, =1{удалён «<b>1</b>» каталог} few{удалены «<b>{N}</b>» каталога} many{удалено «<b>{N}</b>» каталогов} other{удалено «<b>{N}</b>» каталогов}}.',
    'Files and directories deleted successfully' => 'Файлы и каталоги успешно удалены.',
    'Files deleted successfully' => 'Файлы успешно удалены.',
    'Directories deleted successfully' => 'Каталоги успешно удалены.',
    'Unable to delete files' => 'Невозможно удалить файлы.',
    'Unable to delete directories' => 'Невозможно удалить каталоги.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Немагчыма выканаць выдаленне запісу.',
    'Record successfully deleted' => 'Запіс паспяхова выдалены.',
    'Record successfully added' => 'Запіс паспяхова дададзена.',
    'Record successfully update' => 'Запіс паспяхова зменены.',
    'Unable to add record' => 'Немагчыма выканаць даданне запісу.',
    'Unable to update record' => 'Немагчыма выканаць змену запісу.',
    'Update record' => 'Змяненне запісу',
    'Adding record' => 'Даданне запісу',
    'A record with the specified field values already exists' => 'Запіс з названымі значэннямі палёў ужо існуе.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Настройка модуля "{0}"',
    'Settings successfully changed' => 'Налады паспяхова зменены.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Настройка пашырэння "{0}"',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Не ўдалося загрузіць шаблон формы ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Рэдагаванне',
    'Search' => 'Пошук',
    'Columns' => 'Стоўбцы',
    'Add' => 'Дадаць',
    'Adding a new record' => 'Даданне новага запісу',
    'Delete' => 'Выдаліць',
    'Delete selected records' => 'Выдаленне выдзеленых запісаў',
    'Are you sure you want to delete posts' => 'Вы ўпэўнены, што жадаеце выдаліць запіс(ь)і - <b>{0}</b> ?',
    'You need to select records' => 'Вам неабходна вылучыць запісы.',
    'Edit' => 'Праўка',
    'Save' => 'Захаваць',
    'Clear' => 'Ачысціць',
    'Deleting all records' => 'Выдаленне ўсіх запісаў са спісу',
    'Are you sure you want to delete all records' => 'Вы сапраўды хочаце выдаліць усе запісы?',
    'You are sure of this' => 'Вы ўпэўнены ў гэтым?',
    'Select' => 'Вылучыць',
    'Selecting entries in the list' => 'Вылучэнне запісаў у спісе',
    'Select all' => 'Вылучыць усё',
    'Remove selection' => 'Прыбраць вылучэнне',
    'Invert Selection' => 'Інвертаваць выдзяленне',
    'Refresh' => 'Абнавіць',
    'Refresh a list of records' => 'Абнаўленне спісу запісаў',
    'Profiling' => 'Прафіляванне',
    'Record profiling' => 'Прафіляванне запісу',
    'Show' => 'Паказаць',
    'Hide' => 'Схаваць',
    'Toggle columns' => 'Паказаць / схаваць слупкі',
    'Filter' => 'Фільтр',
    'Filtering records' => 'Фільтраванне запісаў',
    '[None]' => '[ без выбару ]',
    'Reference' => 'Даведка',
    'This feature is under development' => 'Гэтая функцыя ў працэсе распрацоўкі!',
    'Browse' => 'Выбраць',
    'Entry must be selected' => 'Неабходна абраць запіс!',
    'Only one entry needs to be selected' => 'Неабходна абраць толькі адзін запіс!',
    'Remove window modality' => 'Убрать модальность окна',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'праўка / даданне запісу',
    'User' => 'Карыстальнік',
    'Date' => 'Дата',
    'today' => 'сёння', 'yesterday' => 'учора', 'during the week' => 'за тыдзень', 'per month' => 'за месяц', 'in a year' => 'за год',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Код',
    'Date added' => 'Дата дадання',
    'Date edit' => 'Дата праўкі',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Аўдыт запісу "<span>{0}</span>"',
    'Updated record date: {0}' => 'Дата праўкі запісу: {0}',
    'Created record date: {0}' => 'Дата дадання запісу: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Скінуць',
    'Cancel' => 'Адмена',
    'Help' => 'Дапамога',
    'Update' => 'Змяніць',
    'About widget' => 'Аб віджэце',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'ДОСТУП ЗАБАРОНЕНЫ для <b>{profile}</b>, пры спробе пад уліковым запісам карыстальніка «<b>{user}</b>» выканаць: {action} модуля «<b>{module}</b>» у <b>{date}</b> з IP-адрасы <b>{ipaddress}</b></b></b></b></b> "<b>{browser}</b>"',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> пад уліковым запісам карыстальніка «<b>{user}</b>» выканаў(а): {action} модуля «<b>{module}</b>» у <b>{date}</b> c IP-адрасы <b>{ipaddress}</b>, аперацыйнай сістэмы «<b>{os} "<b>{browser}</b>"',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ДОСТУП ЗАБАРОНЕНЫ для <b>{profile}</b> пад уліковым запісам «<b>{user}</b>»; выкананае дзеянне: {action} у модулі «<b>{module}</b>» (ID: «da») з IP-адраса <b>{ipaddress}</b>, у аперацыйнай сістэме <b>{os}</b> і браўзеры <b>{browser}</b>',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> пад уліковым запісам «<b>{user}</b>» выканаў(-ла): {action} модуля «<b>{module}</b>» з ідэнтыфікатарам «<b>{id}</b>» у аперацыйнай сістэме «<b>{os}</b>» праз браўзер «<b>{browser}</b>»',
    '{data action}' => 'прагляд дадзеных',
    '{update action}' => 'змена запісу',
    '{add action}' => 'даданне запісу',
    '{view action}' => 'адкрыццё ўкладкі/акна',
    '<unknown>' => '<невядома>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'прагляд інфармацыі аўдыту запісу "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'прагляд запісаў вузла дрэва "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'адкрыццё акна пошуку запісаў',
    '{data search action}' => 'прагляд значэнняў пошуку запісаў',
    '{update search action}' => 'прымяненне ўстаноўленых значэнняў для пошуку запісаў',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'прагляд запісу "<b>{0}</b>"',
    '{update form action}' => 'змена запісу "<b>{0}</b>"',
    '{add form action}' => 'даданне запісу "<b>{0}</b>"',
    '{view form action}' => 'адкрыццё акна для прагляду запісу "<b>{0}</b>"',
    '{view add form action}' => 'адкрыццё акна для дадання запісу',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'адкрыццё акна налад',
    '{data settings action}' => 'прагляд настроек',
    '{update settings action}' => 'змена налад',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'адкрыццё ўкладкі/акна для прагляду інфармацыі',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'выдаленне запісу(яў) са спісу',
    '{update grid row(s) action}' => 'змена запісу "<b>{0}</b>" спісу',
    '{clear grid row(s) action}' => 'выдаленне ўсіх запісаў са спісу',
    '{clear action}' => 'выдаленне ўсіх запісаў',
    '{expand grid row(s) action}' => 'разгорнуты прагляд запісу "<b>{0}</b>" спісу',
    '{view grid row(s) action}' => 'адкрыццё ўкладкі для прагляду спісу запісаў',
    '{filter grid row(s) action}' => 'усталёўка фільтра запісаў',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Інфармацыя', 'Інфармацыя аб модулі'],
        'settings'   => ['Налады', 'Настройкі модуля'],
        'recordRls'  => ['Доступ на ўзроўні запісаў', 'Прагляд і чытанне толькі сваіх запісаў'],
        'writeAudit' => ['Весці Часопіс аўдыту', 'Дакументаванне аперацый, якія здзяйсняюцца карыстальнікам'],
        'viewAudit'  => ['Чытаць Часопіс аўдыту', 'Прагляд аперацый, якія здзяйсняюцца карыстальнікам']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => '{0} з указаным ідэнтыфікатарам адсутнічае "{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} з указаным ідэнтыфікатарам "{1}" з\'яўляецца сістэмным.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} з ідэнтыфікатарам "{1}" у базе дадзеных адсутнічае.',
    'Missing {0} configuration file "{1}"' => '{0} не мае файл канфігурацыі "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Адсутнічае параметр "{1}" канфігурацыі файла "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'Няправільна паказаны параметр "{1}" канфігурацыі файла "{0}".',
    '{0} with specified id "{1}" already installed' => '{0} з указаным ідэнтыфікатарам "{1}" ужо ўсталяваны.',
    '{0} with specified parameter "{1}" already installed' => '{0} з параметрам "{1}" ужо ўсталяваны.',
    'Error adding {0} to database' => '{0} немагчыма дадаць у базу дадзеных з-за ўзніклай памылкі.',
    'The {0} with ID "{1}" is not in the registry' => '{0} з ідэнтыфікатарам "{1}" адсутнічае ў рэестры.',
    'The {0} with ID "{1}" not found at database' => '{0} з ідэнтыфікатарам "{1}" не знойдзены ў базе дадзеных.',
    'Error saving {0} to database' => '{0} немагчыма захаваць у базу дадзеных з-за ўзніклай памылкі.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} не мае файл лакалізацыі "{1}", указаны ў параметрах усталёўкі.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Для ўсталявання гэтага пашырэння, неабходна ўсталяваць модуль з ідэнтыфікатарам "{0}".'
];
