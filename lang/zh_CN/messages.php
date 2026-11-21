<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Китайская (традиционная) локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => '首頁',
    'Message' => '資訊',
    'Warning' => '警告',
    'Error' => '錯誤',
    'The module cannot be called from the administration panel' => '無法從控制面板呼叫該模組。',
    'Edition' => '社論',
    'Widget' => '小工具',
    'Module' => '模組',
    'Module extension' => '模組擴充',
    'Extension' => '擴大',
    'Application' => '應用',
    'Web application' => '網路應用程式',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => '無法確定物件「{0}」。',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'CSRF 令牌不匹配',
    'CSRF token is invalid or missing' => 'CSRF 令牌無效或遺失。',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => '存取錯誤',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => '資料庫查詢錯誤',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => '連線錯誤',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => '服務「{0}」啟動失敗。未找到服務。',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => '無法設定內部編碼「{0}」。',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => '此模組無法為視圖模型建立標識符。',
    'Controller with name "{0}" not exists' => '名為「{0}」的控制器不存在。',
    'You are not allowed to perform this action' => '您無權執行此操作。',
    'Action "{0}" at controller "{1}" not exists' => '控制器「{1}」的操作「{0}」不存在。',
    'Could not define module id' => '無法確定模組 ID。',
    'No permission "{0}" to access the module' => '沒有存取該模組的權限「{0}」。',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => '傳遞了無效參數。',
    'Invalid parameter specified "{0}"' => '指定的參數「{0}」無效。',
    'Parameter "{0}" not specified' => '未指定參數「{0}」。',
    'Parameter passed incorrectly "{0}"' => '參數「{0}」傳遞不正確。',
    'The value for parameter "{0}" is missing' => '缺少參數值「{0}」。',
    'Could not defined data model "{0}"' => '無法確定資料模型「{0}」。',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => 'ID 為「{1}」的 {0} 不存在。',
    'File {0} "{1}" not exists' => '{0} 沒有檔案「{1}」。',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} 沒有要載入的「{1}」參數。',

    /** {@see \Ge\User\User} */
    'Login required' => '您必須獲得授權。',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => '工廠需要一個關聯數組作為參數。',
    'Missing "adapter"' => '「適配器」遺失。',
    'Missing "adapter.name"' => '缺少「適配器名稱」。',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'options 參數必須是一個陣列。',
    'The format {0} specified is not valid. The supported formats are: {1}' => '指定的格式 {0} 無效。支援的格式：{1}。',
    'The options parameter must be an array or a Traversable' => 'options 參數必須是陣列或 Traversable。',
    'You must specify a password format' => '您必須指定密碼格式。',
    'You must specify UserName and AuthName (realm) to generate the digest' => '您必須提供 UserName 和 AuthName（領域）才能產生摘要。',
    'The APR1 password format is not valid' => 'APR1 密碼格式無效。',
    'You must specify UserName and AuthName (realm) to verify the digest' => '您必須提供 UserName 和 AuthName（領域）來驗證摘要。',
    'The salt value for APR1 algorithm must be 8 characters long' => 'APR1 演算法的 salt 值必須是 8 個字元長。',
    'The salt value must be a string in the alphabet' => 'salt 值必須是字母表中的字串。',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument 必須是 {0} 或 {1} 或 {2} 或 {3} 或 {4}，給予「{5}」。',
    'Argument type should be in array({0})' => '參數類型必須位於陣列 ({1}) 中。',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'getExpressionData() 從陣列傳回的元素必須是字串或陣列。',
    'A number of parameters was found that is not supported by this specification' => '已發現本規範不支援許多參數。',
    'A number of parameters ({0}) was found that is not supported by this specification' => '發現許多參數 ({0}) 不受此規範支援。',
    'Supplied expression must be a string' => '提供的表達式必須是字串。',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => '表達式參數必須是標量或陣列。',
    'The number of replacements in the expression does not match the number of parameters' => '表達式中的替換數量與參數數量不符。',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'value 或 select 必須存在。',
    'The key {0} was not found in this objects column list' => '在此物件列清單中未找到鍵 {0}。',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} 要求參數為數字，由 {1} 給出。',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => '表格必須是字串、陣列或 TableIdentifier 實例。',
    'Can\'t get Sql string from query builder, unknow result' => '無法從查詢產生器取得 Sql 行，結果未知。',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => '此 Sql 物件設計為僅適用於建立時提供的表格「{0}」。',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => '由於該物件是在建構函數中使用表和/或架構創建的，因此它是唯讀的。',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table 必須是字串、陣列或 TableIdentifier 實例。',
    'from() expects $table as an array is a single element associative array' => 'from() 期望 $table 作為一個數組，是一個元素的關聯數組。',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => '量詞必須是 DISTINCT、ALL 或實作 ExpressionInterface 的某些特定平台物件之一。',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => '我找不到連接配置器。',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => '由於查詢為空，因此無法執行 SQL 查詢。',
    'Error executing database query' => '執行資料庫查詢時發生錯誤。',
    'Query error: {0}, {1}' => '執行請求「{1}」時發生錯誤「{0}」。',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => '連接到資料庫伺服器時發生錯誤。',
    'Connection error: loading {0} character set' => '載入字元集「{0}」時發生連線錯誤。',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}：等待回呼；未提供。',
    '{0}: сallback function "{1}" not called' => '{0}：未呼叫回呼函數「{1}」。',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => '無法解碼 JSON：{0}。',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'HTTP 版本無效或不受支援：{0}。',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => '無法確定登入腳本檔案的路徑。',
    'Unable to determine the entry script URL' => '無法確定登入腳本 URL。',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => '提供的狀態回應代碼無效：「{0}」。',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => '由於伺服器腳本中存在錯誤，請求無法完成。',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => '未知的日誌處理程序。',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => '為比較「{0}」指定的參數不正確。',
    'Уou need a {0} for {1}' => '「{1}」需要「{0}」。',
    'Уou need a {0} version of at least {1}, current version: {2}' => '您至少需要 {0} 版本「{1}」，目前版本：「{2}」。 ',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => '您需要至少為「{2}」的 {0}「{1}」版本，目前版本：「{3}」。',
    'Used for {0} with id {1}' => '您需要 ID 為「{1}」的 {0}。',
    'Used for {0} with code {1}' => '您需要帶有代碼「{1}」的 {0}。',
    'Used for {0} with name {1}' => '您需要一個名為「{1}」的 {0}。',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => '傳遞給容器的名稱無效；必須只包含字母數字字元、反斜線和底線。',
    'Manager provided is invalid; must implement ManagerInterface' => '提供的經理無效；必須實作ManagerInterface。',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => '無法儲存設定檔。',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => '執行控制台應用程式時，請正確配置 UrlManager::scriptUrl。',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => '選項「{0}」無效。',
    'No message template exists for key "{0}"' => '參數「{0}」無效。',
    'No property exists by the name "{0}"' => '沒有名為「{0}」的屬性。',
    'Unknown type' => '未知類型。',
    'Invalid query parameter' => '請求參數無效！',
    'File "{0}" not found' => '未找到檔案「{0}」。',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => '「Between」驗證器缺少「min」或「max」選項。必須指定該選項。',
    'The input is not between "%min%" and "%max%", inclusively' => '此欄位值必須介於「%min%」和「%max%」字元之間（包含「%min%」和「%max%」字元）。',
    'The input is not strictly between "%min%" and "%max%"' => '此欄位值必須介於「%min%」和「%max%」字元之間。',
    'The input must be less "%max%", inclusively' => '該值必須小於「%max%」（含）',
    'The input must be greater "%min%", inclusively' => '該值必須大於「%min%」（含）',
    'The input must be less "%max%"' => '該值必須小於「%max%」',
    'The input must be greater "%min%"' => '該值必須大於「%min%」',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => '此欄位值為必填項，不能為空',
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => '您需要從清單中選擇一個元素（不允許與清單中的元素不同的值）。',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => '選項缺失。必須指定「格式」或「訊息」。',
    'You have filled in the field incorrectly' => '您填寫的欄位不正確，該欄位必須包含適當的字元。',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => '您輸入的代碼不正確。',
    'Missing option. "param" have to be given' => '缺少「Captcha」驗證器的「param」選項。必須指定該選項。',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => '指定的值不正確',
    'You have incorrectly set the comparison condition' => '您設定的比較條件不正確',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => '模組配置管理器設定中已存在別名字段「{0}」。',
    'A field with name "{0}" already exists' => '模組配置管理器設定中已存在名為「{0}」的欄位。',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => '無法顯示模組，未找到名為「{0}」的範本。',
    'Could not render module, template filename "{0}" not exists' => '無法顯示模組，模板檔名「{0}」不存在。',
    'Could not load template, file is not accessible "{0}"' => '無法載入模板，檔案不可用「{0}」。',
    'Could not render module, render with name "{0}" not found' => '無法顯示模組，未找到名為「{0}」的模組。',
    'Could not render module, template (filename) "{0}" not defined or not found' => '模組渲染失敗，模板（檔名）「{0}」未找到或未定義。',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => '無法使用 PhpRenderer 進行渲染，模板「{0}」不存在。',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => '未知的短代碼「{0}」。',
    'Shortcode "{0}" does not have option "{1}"' => '短代碼「{0}」沒有選項「{1}」。',
    'Shortcode "{0}" does not have method "{1}"' => '短代碼「{0}」沒有方法「{1}」。',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => '無法刪除檔案「{0}」',
    'Could not perform directory deletion "{0}"' => '無法刪除目錄「{0}」',
    'File name "{0}" is not a directory' => '檔案名稱「{0}」不是目錄',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => '無法建立目錄「{0}」',
    'Unable to copy file "{0}" to directory "{1}"' => '無法將檔案「{0}」複製到目錄「{1}」',
    'I managed to copy only part of the files "{0}"' => '我們只能複製檔案「{0}」的一部分。',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Неверный формат файла.',
    'The uploaded file exceeds the size set in the settings' => '上傳的檔案超出了設定中設定的大小。',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => '上傳檔案的大小超出了允許的最大大小，該大小由 php.ini 設定檔的 upload_max_filesize 指令指定。',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => '上傳的檔案大小超出了 HTML 表單中指定的 MAX_FILE_SIZE 值。',
    'The uploaded file was only partially uploaded' => '只收到部分下載的檔案。',
    'No file was uploaded' => '文件未上傳。',
    'Missing a temporary folder' => '臨時資料夾遺失。',
    'Failed to write file to disk' => '無法將文件寫入磁碟。',
    'File upload stopped by extension' => 'PHP 擴充功能已停止下載檔案。',
    'Unknown upload error' => '未知的下載錯誤。',
    'Invalid file extension' => '檔案副檔名無效。',
    'Missing class or extension PHP: "{0}"' => '缺少 PHP 類別或擴充：「{0}」。',
    'Error uploading image file' => '載入（處理）圖像檔案時出錯。',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => '標籤名稱無效或標籤「{0}」不存在。',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => '指定路徑「{0}」處不存在該檔案。',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => '更新包標識符格式不正確。',
    'The specified update package data format "{0}" does not exist' => '指定的更新包資料格式「{0}」不存在。',
    'Unable to create update package file "{0}"' => '無法建立更新包檔案「{0}」',
    'Unable to package update package files "{0}"' => '無法打包服務包檔案「{0}」',
    'Update pckage option "{0}" not specified or specified incorrectly' => '更新包參數「{0}」遺失或指定不正確。',
    'Your app version is not compatible with the update packages version' => '您的應用程式版本與服務包版本不相容。',
    'Update package with ID "{0}" is missing' => '缺少 ID 為「{0}」的更新包。'
];