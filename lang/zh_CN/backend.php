<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Китайская (традиционная) локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => '網站',
    FRONTEND => '網站',
    BACKEND_NAME => '控制面板',
    BACKEND => '控制面板',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => '您選擇的項目不存在或已刪除。',
    'No data to perform action' => '沒有資料來執行該操作。',
    'Invalid query method' => '請求方法無效。',
    'Invalid request format' => '請求格式無效。',
    'Error filling out form fields: {0}' => '填寫表單欄位時出錯<br>{0}。',
    'Invalid argument "{0}"' => '參數「{0}」無效。',
    'Could not delete record' => '刪除條目失敗。',
    'Could not save data' => '保存資料失敗。',
    'Could not add data' => '新增資料失敗。',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => '有關模組「{0}」的信息',
    'Not enough information on the specified record, the user may have been deleted' => '指定條目的資訊不足；該條目的使用者可能已被刪除。',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => '有關擴充功能「{0}」的信息',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'The records were partially deleted, from the selected «<b>{nSelected}</b>», deleted «<b>{nDeleted}</b>» {deleted, plural, one{record} other{records}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Records have been partially deleted, «<b>{nDeleted}</b>» deleted, «<b>{nSkipped}</b>» {skipped, plural, =1{record} other{records}} skipped',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Unable to delete «<b>{N}</b>» {n, plural, =1{record} other{records}}, no records are available',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Successfully deleted «<b>{N}</b>» {n, plural, =1{record} other{records}}.',
    'Deletion' => 'Deletion',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Files have been partially deleted, {deleted, plural, =1{deleted «<b>1</b>» file} few{deleted «<b>{nDeleted}</b>» files} many{deleted «<b>{nDeleted}</b>» files} other{deleted «<b>{nDeleted}</b>» files}}, '
     . '{skipped, plural, =1{skipped «<b>1</b>» file} few{skipped «<b>{nSkipped}</b>» file} many{skipped «<b>{nSkipped}</b>» files} other{skipped «<b>{nSkipped}</b>» files}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Files have been partially deleted, {n, plural, =1{skipped «<b>1</b>» file} few{skipped «<b>{N}</b>» file} many{skipped «<b>{N}</b>» files} other{skipped «<b>{N}</b>» files}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Directories have been partially deleted, {deleted, plural, =1{deleted «<b>1</b>» directory} few{deleted «<b>{nDeleted}</b>» directory} many{deleted «<b>{nDeleted}</b>» directories} other{deleted «<b>{nDeleted}</b>» directories}}, '
     . '{skipped, plural, =1{skipped «<b>1</b>» directory} few{skipped «<b>{nSkipped}</b>» directory} many{skipped «<b>{nSkipped}</b>» directories} other{skipped «<b>{nSkipped}</b>» directories}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Directories have been partially deleted, {n, plural, =1{skipped «<b>1</b>» directory} few{skipped «<b>{N}</b>» directory} many{skipped «<b>{N}</b>» directories} other{skipped «<b>{N}</b>» directories}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Successfully {n, plural, =1{deleted «<b>1</b>» file} few{deleted «<b>{N}</b>» file} many{deleted «<b>{N}</b>» files} other{deleted «<b>{N}</b>» files}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Successfully {n, plural, =1{deleted «<b>1</b>» directory} few{deleted «<b>{N}</b>» directory} many{deleted «<b>{N}</b>» directories} other{deleted «<b>{N}</b>» directories}}.',
    'Files and directories deleted successfully' => '檔案和目錄已成功刪除。',
    'Files deleted successfully' => '文件已成功刪除。',
    'Directories deleted successfully' => '目錄已成功刪除。',
    'Unable to delete files' => '無法刪除檔案。',
    'Unable to delete directories' => '無法刪除目錄。',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => '該條目無法刪除。',
    'Record successfully deleted' => '該條目已成功刪除。',
    'Record successfully added' => '該條目已成功新增。',
    'Record successfully update' => '該條目已成功修改。',
    'Unable to add record' => '無法新增條目。',
    'Unable to update record' => '無法修改該條目。',
    'Update record' => '變更記錄',
    'Adding record' => '新增條目',
    'A record with the specified field values already exists' => '具有指定欄位值的記錄已存在。',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => '配置模組「{0}」',
    'Settings successfully changed' => '設定已成功更改。',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => '設定擴充功能「{0}」',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => '無法載入表單範本 ({0})。',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => '編輯',
    'Search' => '搜尋',
    'Columns' => '專欄',
    'Add' => '添加',
    'Adding a new record' => '新增條目',
    'Delete' => '刪除',
    'Delete selected records' => '刪除選定的條目',
    'Are you sure you want to delete posts' => '您確定要刪除條目 - <b>{0}</b> 嗎？',
    'You need to select records' => '您需要突出顯示條目。',
    'Edit' => '編輯',
    'Save' => '節省',
    'Clear' => '清除',
    'Deleting all records' => '從清單中刪除所有條目',
    'Are you sure you want to delete all records' => '您確定要刪除所有條目嗎？',
    'You are sure of this' => '您確定嗎？',
    'Select' => '選擇',
    'Selecting entries in the list' => '選擇清單中的條目',
    'Select all' => '選擇全部',
    'Remove selection' => '刪除選擇',
    'Invert Selection' => '反轉選擇',
    'Refresh' => '更新',
    'Refresh a list of records' => '更新條目列表',
    'Profiling' => '分析',
    'Record profiling' => '記錄分析',
    'Show' => '展示',
    'Hide' => '隱藏',
    'Toggle columns' => '顯示/隱藏列',
    'Filter' => '篩選',
    'Filtering records' => '過濾條目',
    '[None]' => '[ 別無選擇 ]',
    'Reference' => '參考',
    'This feature is under development' => '該功能正在開發中！',
    'Browse' => 'Выбрать',
    'Entry must be selected' => '您必須選擇一個條目！',
    'Only one entry needs to be selected' => '您只需選擇一項即可！',
    'Remove window modality' => '刪除視窗模式',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => '編輯/新增條目',
    'User' => '使用者',
    'Date' => '日期',
    'today' => '今天', 'yesterday' => '昨天', 'during the week' => '每週', 'per month' => '每月', 'in a year' => '今年',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => '程式碼',
    'Date added' => '新增日期',
    'Date edit' => '編輯日期',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => '審核條目「<span>{0}</span>」',
    'Updated record date: {0}' => '貼文編輯日期：{0}',
    'Created record date: {0}' => '新增日期：{0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => '重置',
    'Cancel' => '取消',
    'Help' => '幫助',
    'Update' => '改變',
    'About widget' => '關於小部件',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'FORBIDDEN ACCESS for <b>{profile}</b>, when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» at <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» at <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    'Forbidden access for {profile} at user account {user} performed: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'FORBIDDEN ACCESS form <b>{profile}</b> when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» with identifier «<b>{id}</b>» в <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» with identifier «<b>{id}</b>» at <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    '{data action}' => '查看數據',
    '{update action}' => '變更記錄',
    '{add action}' => '新增條目',
    '{view action}' => '打開選項卡/視窗',
    '<unknown>' => '<未知>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => '查看記錄「<b>{0}</b>」的審核資訊',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => '查看樹節點記錄「<b>{0}</b>」',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => '開啟記錄搜尋視窗',
    '{data search action}' => '查看記錄搜尋值',
    '{update search action}' => '應用設定值來搜尋記錄',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => '檢視條目「<b>{0}</b>」',
    '{update form action}' => '更改條目「<b>{0}</b>」',
    '{add form action}' => '新增條目「<b>{0}</b>」',
    '{view form action}' => '打開一個視窗以查看條目「<b>{0}</b>」',
    '{view add form action}' => '打開一個視窗以新增條目',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => '開啟設定視窗',
    '{data settings action}' => '查看設定',
    '{update settings action}' => '更改設定',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => '打開選項卡/視窗以查看訊息',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => '從清單中刪除條目',
    '{update grid row(s) action}' => '更改清單條目「<b>{0}</b>」',
    '{clear grid row(s) action}' => '從清單中刪除所有條目',
    '{clear action}' => '刪除所有條目',
    '{expand grid row(s) action}' => '清單項目「<b>{0}</b>」的展開視圖',
    '{view grid row(s) action}' => '打開選項卡以查看條目列表',
    '{filter grid row(s) action}' => '設定記錄過濾器',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['資訊', '模組資訊'],
        'settings'   => ['設定', '模組設定'],
        'recordRls'  => ['記錄級訪問', '查看並只讀您的條目'],
        'writeAudit' => ['維護審計追蹤', '記錄使用者執行的操作'],
        'viewAudit'  => ['讀取審核日誌', '查看用戶執行的交易']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => '指定 ID 的 {0} 缺少「{1}」。',
    'The {0} with the specified id "{1}" is a system' => '具有指定識別碼「{1}」的 {0} 是系統識別碼。',
    'The {0} with the identifier "{1}" is missing in the database' => '標識符為“{1}”的 {0} 不在資料庫中。',
    'Missing {0} configuration file "{1}"' => '{0} 沒有設定檔「{1}」。',
    'Missing file "{0}" configuration parameter "{1}"' => '檔案「{0}」的設定參數「{1}」遺失。',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => '設定檔「{0}」的參數「{1}」指定不正確。',
    '{0} with specified id "{1}" already installed' => '已安裝具有指定 ID「{1}」的 {0}。',
    '{0} with specified parameter "{1}" already installed' => '已安裝帶有參數「{1}」的 {0}。',
    'Error adding {0} to database' => '由於錯誤，無法將 {0} 新增至資料庫。',
    'The {0} with ID "{1}" is not in the registry' => 'ID 為「{1}」的 {0} 不在登錄中。',
    'The {0} with ID "{1}" not found at database' => '在資料庫中找不到 ID 為「{1}」的 {0}。',
    'Error saving {0} to database' => '由於錯誤，無法將 {0} 儲存到資料庫中。',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} 沒有在安裝選項中指定本地化檔案「{1}」。',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => '要安裝此擴展，您必須安裝標識符為「{0}」的模組。'
];
