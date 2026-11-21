<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Индийская (хинди) локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'होम पेज',
    'Message' => 'संदेश',
    'Warning' => 'चेतावनी',
    'Error' => 'गलती',
    'The module cannot be called from the administration panel' => 'कंट्रोल पैनल से मॉड्यूल को कॉल करना संभव नहीं है।',
    'Edition' => 'संपादकीय',
    'Widget' => 'विजेट',
    'Module' => 'मॉड्यूल',
    'Module extension' => 'मॉड्यूल विस्तार',
    'Extension' => 'विस्तार',
    'Application' => 'आवेदन',
    'Web application' => 'वेब अनुप्रयोग',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'वस्तु "{0}" निर्धारित करने में असमर्थ।',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'सीएसआरएफ टोकन बेमेल',
    'CSRF token is invalid or missing' => 'सीएसआरएफ टोकन अमान्य या अनुपलब्ध है।',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'प्रवेश त्रुटि',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'डेटाबेस क्वेरी त्रुटि',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'संपर्क त्रुटि',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'सेवा "{0}" प्रारंभ होने में विफल रही. सेवा नहीं मिली।',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'आंतरिक एन्कोडिंग "{0}" सेट करने में विफल।',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'मॉड्यूल दृश्य मॉडल के लिए पहचानकर्ता नहीं बना सकता है।',
    'Controller with name "{0}" not exists' => '"{0}" नामक नियंत्रक मौजूद नहीं है।',
    'You are not allowed to perform this action' => 'आपको यह क्रिया करने की अनुमति नहीं है।',
    'Action "{0}" at controller "{1}" not exists' => 'नियंत्रक "{1}" की क्रिया "{0}" मौजूद नहीं है।',
    'Could not define module id' => 'मॉड्यूल आईडी निर्धारित नहीं किया जा सका।',
    'No permission "{0}" to access the module' => 'मॉड्यूल तक पहुंचने के लिए "{0}" की कोई अनुमति नहीं है।',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'एक अमान्य पैरामीटर पारित किया गया था।',
    'Invalid parameter specified "{0}"' => 'अमान्य पैरामीटर "{0}" निर्दिष्ट।',
    'Parameter "{0}" not specified' => 'पैरामीटर "{0}" निर्दिष्ट नहीं है।',
    'Parameter passed incorrectly "{0}"' => 'पैरामीटर "{0}" गलत तरीके से पारित किया गया था।',
    'The value for parameter "{0}" is missing' => 'पैरामीटर मान "{0}" गुम है।',
    'Could not defined data model "{0}"' => 'डेटा मॉडल "{0}" निर्धारित करने में विफल।',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} आईडी "{1}" के साथ मौजूद नहीं है।',
    'File {0} "{1}" not exists' => '{0} के पास फ़ाइल "{1}" नहीं है।',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} में लोड करने के लिए "{1}" पैरामीटर नहीं है।',

    /** {@see \Ge\User\User} */
    'Login required' => 'आपको अधिकृत होना चाहिए।',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'फ़ैक्टरी को तर्क के रूप में एक सहयोगी सरणी की आवश्यकता है।',
    'Missing "adapter"' => '"एडेप्टर" गायब है।',
    'Missing "adapter.name"' => '"एडेप्टर.नाम" गायब है।',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'विकल्प पैरामीटर एक सरणी होना चाहिए।',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'निर्दिष्ट प्रारूप {0} मान्य नहीं है. समर्थित प्रारूप: {1}।',
    'The options parameter must be an array or a Traversable' => 'विकल्प पैरामीटर एक सरणी या ट्रैवर्सेबल होना चाहिए।',
    'You must specify a password format' => 'आपको पासवर्ड प्रारूप निर्दिष्ट करना होगा।',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'डाइजेस्ट उत्पन्न करने के लिए आपको एक उपयोगकर्ता नाम और प्रामाणिक नाम (क्षेत्र) प्रदान करना होगा।',
    'The APR1 password format is not valid' => 'Недопустимый формат пароля APR1।',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'डाइजेस्ट को सत्यापित करने के लिए आपको एक उपयोगकर्ता नाम और प्रामाणिक नाम (क्षेत्र) प्रदान करना होगा।',
    'The salt value for APR1 algorithm must be 8 characters long' => 'APR1 एल्गोरिथम के लिए नमक मान 8 वर्ण लंबा होना चाहिए।',
    'The salt value must be a string in the alphabet' => 'नमक का मान वर्णमाला में एक स्ट्रिंग होना चाहिए।',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$तर्क {0} या {1} या {2} या {3} या {4} होना चाहिए, "{5}" दिया गया है।',
    'Argument type should be in array({0})' => 'तर्क प्रकार सरणी ({1}) में होना चाहिए।',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'GetExpressionData() द्वारा किसी सरणी से लौटाए गए तत्व एक स्ट्रिंग या एक सरणी होने चाहिए।',
    'A number of parameters was found that is not supported by this specification' => 'ऐसे कई पैरामीटर पाए गए हैं जो इस विनिर्देश द्वारा समर्थित नहीं हैं।',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'कई पैरामीटर ({0}) पाए गए जो इस विनिर्देश द्वारा समर्थित नहीं हैं।',
    'Supplied expression must be a string' => 'प्रदत्त अभिव्यक्ति एक स्ट्रिंग होनी चाहिए।',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'अभिव्यक्ति पैरामीटर एक अदिश या एक सरणी होना चाहिए।',
    'The number of replacements in the expression does not match the number of parameters' => 'अभिव्यक्ति में प्रतिस्थापन की संख्या पैरामीटर की संख्या से मेल नहीं खाती है।',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'मान या चयन मौजूद होना चाहिए।',
    'The key {0} was not found in this objects column list' => 'ऑब्जेक्ट कॉलम की इस सूची में कुंजी {0} नहीं मिली।',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} को उम्मीद है कि पैरामीटर संख्यात्मक होगा, जो कि {1} द्वारा दिया गया है।',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'तालिका एक स्ट्रिंग, एक सरणी, या एक TableIdentifier उदाहरण होनी चाहिए।',
    'Can\'t get Sql string from query builder, unknow result' => 'क्वेरी बिल्डर से एसक्यूएल पंक्ति प्राप्त करने में विफल, अज्ञात परिणाम।',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'यह एसक्यूएल ऑब्जेक्ट केवल निर्माण के समय प्रदान की गई तालिका "{0}" के साथ काम करने के लिए डिज़ाइन किया गया है।',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'चूँकि यह ऑब्जेक्ट कंस्ट्रक्टर में एक तालिका और/या स्कीमा का उपयोग करके बनाया गया था, यह केवल-पढ़ने के लिए है।',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table एक स्ट्रिंग, एक सरणी, या एक TableIdentifier उदाहरण होना चाहिए।',
    'from() expects $table as an array is a single element associative array' => 'from() एक सरणी के रूप में $table से एक तत्व की सहयोगी सरणी होने की अपेक्षा करता है।',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'क्वांटिफ़ायर DISTINCT, ALL, या कुछ विशिष्ट प्लेटफ़ॉर्म ऑब्जेक्ट में से एक होना चाहिए जो ExpressionInterface लागू करता है।',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'मुझे कनेक्शन विन्यासकर्ता नहीं मिला।',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'SQL क्वेरी निष्पादित नहीं की जा सकती क्योंकि क्वेरी खाली है।',
    'Error executing database query' => 'डेटाबेस क्वेरी निष्पादित करते समय एक त्रुटि उत्पन्न हुई।',
    'Query error: {0}, {1}' => 'त्रुटि "{0}" अनुरोध निष्पादित करने में "{1}"।',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'डेटाबेस सर्वर से कनेक्ट करने में त्रुटि। ',
    'Connection error: loading {0} character set' => 'कैरेक्टर सेट "{0}" लोड करने में कनेक्शन त्रुटि।',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: कॉलबैक की प्रतीक्षा में; उपलब्ध नहीं कराया।',
    '{0}: сallback function "{1}" not called' => '{0}: कॉलबैक फ़ंक्शन "{1}" को कॉल नहीं किया गया है।',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'JSON को डीकोड करने में विफल: {0}।',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'अमान्य या असमर्थित HTTP संस्करण: {0}।',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'लॉगिन स्क्रिप्ट फ़ाइल का पथ निर्धारित नहीं किया जा सका।',
    'Unable to determine the entry script URL' => 'लॉगिन स्क्रिप्ट URL निर्धारित नहीं किया जा सका।',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'अमान्य स्थिति प्रतिक्रिया कोड प्रदान किया गया: "{0}"।',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'सर्वर स्क्रिप्ट में त्रुटि के कारण अनुरोध पूरा नहीं किया जा सका।',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'अज्ञात लॉग हैंडलर।',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'तुलना के लिए निर्दिष्ट पैरामीटर "{0}" गलत हैं।',
    'Уou need a {0} for {1}' => 'आपको "{1}" के लिए "{0}" की आवश्यकता है।',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'आपको कम से कम {0} संस्करण की आवश्यकता है "{1}", वर्तमान संस्करण: "{2}"।',
'आपको {0} के लिए {1} संस्करण की आवश्यकता है, कम से कम {2}, वर्तमान संस्करण: {3}' => 'आपको कम से कम {0} "{1}" के संस्करण की आवश्यकता है "{2}", वर्तमान संस्करण: "{3}"।',
    'Used for {0} with id {1}' => 'आपको आईडी "{1}" के साथ {0} की आवश्यकता है।',
    'Used for {0} with code {1}' => 'आपको कोड "{1}" के साथ {0} की आवश्यकता है।',
    'Used for {0} with name {1}' => 'आपको "{1}" नामक एक {0} की आवश्यकता है।',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'कंटेनर को दिया गया नाम अमान्य है; इसमें केवल अल्फ़ान्यूमेरिक वर्ण, बैकस्लैश और अंडरस्कोर शामिल होने चाहिए।',
    'Manager provided is invalid; must implement ManagerInterface' => 'प्रदत्त प्रबंधक अमान्य है; मैनेजरइंटरफ़ेस को लागू करना होगा।',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'कॉन्फ़िगरेशन फ़ाइल सहेजी नहीं जा सकी।',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'जब आप कंसोल एप्लिकेशन चलाते हैं तो कृपया UrlManager::scriptUrl को सही ढंग से कॉन्फ़िगर करें।',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'अमान्य विकल्प "{0}"।',
    'No message template exists for key "{0}"' => 'अमान्य पैरामीटर "{0}"।',
    'No property exists by the name "{0}"' => '"{0}" नाम की कोई संपत्ति नहीं है।',
    'Unknown type' => 'अज्ञात प्रकार।',
    'Invalid query parameter' => 'अमान्य अनुरोध पैरामीटर!',
    'File "{0}" not found' => 'फ़ाइल "{0}" नहीं मिली।',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => '"बीच" सत्यापनकर्ता के लिए "न्यूनतम" या "अधिकतम" विकल्प गुम है। विकल्प निर्दिष्ट होना चाहिए।',
    'The input is not between "%min%" and "%max%", inclusively' => 'फ़ील्ड मान "%min%" और "%max%" वर्णों सहित, के बीच होना चाहिए।',
    'The input is not strictly between "%min%" and "%max%"' => 'फ़ील्ड मान "%min%" और "%max%" वर्णों के बीच होना चाहिए।',
    'The input must be less "%max%", inclusively' => 'मान सम्मिलित रूप से "%max%" से कम होना चाहिए',
    'The input must be greater "%min%", inclusively' => 'मान सम्मिलित रूप से "%min%" से अधिक होना चाहिए',
    'The input must be less "%max%"' => 'मान "%max%" से कम होना चाहिए',
    'The input must be greater "%min%"' => 'मान "%min%" से अधिक होना चाहिए',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'फ़ील्ड मान आवश्यक है और खाली नहीं हो सकता', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'आपको सूची से एक तत्व का चयन करना होगा (सूची में तत्व से भिन्न मान की अनुमति नहीं है)।',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'विकल्प गायब. "प्रारूप" या "संदेश" निर्दिष्ट किया जाना चाहिए।',
    'You have filled in the field incorrectly' => 'आपने फ़ील्ड ग़लत भर दी है, फ़ील्ड में उपयुक्त वर्ण होने चाहिए।',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'आपने कोड ग़लत दर्ज किया है।',
    'Missing option. "param" have to be given' => '"कैप्चा" सत्यापनकर्ता का "परम" विकल्प गुम है। विकल्प निर्दिष्ट होना चाहिए।',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'ग़लत मान निर्दिष्ट किया गया',
    'You have incorrectly set the comparison condition' => 'आपने तुलना शर्त ग़लत ढंग से निर्धारित की है',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'उपनाम फ़ील्ड "{0}" मॉड्यूल कॉन्फ़िगरेशन प्रबंधक सेटिंग्स में पहले से मौजूद है।',
    'A field with name "{0}" already exists' => 'मॉड्यूल कॉन्फ़िगरेशन प्रबंधक सेटिंग्स में "{0}" नामक फ़ील्ड पहले से मौजूद है।',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'मॉड्यूल प्रदर्शित नहीं हो सका, "{0}" नामक टेम्पलेट नहीं मिला।',
    'Could not render module, template filename "{0}" not exists' => 'मॉड्यूल प्रदर्शित नहीं किया जा सका, टेम्पलेट फ़ाइल नाम "{0}" मौजूद नहीं है।',
    'Could not load template, file is not accessible "{0}"' => 'टेम्प्लेट लोड नहीं हो सका, फ़ाइल उपलब्ध नहीं है "{0}"।',
    'Could not render module, render with name "{0}" not found' => 'मॉड्यूल प्रदर्शित नहीं किया जा सका, "{0}" नामक मॉड्यूल नहीं मिला।',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'मॉड्यूल रेंडरिंग विफल, टेम्प्लेट (फ़ाइल नाम) "{0}" नहीं मिला या अपरिभाषित है।',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'PhpRenderer के साथ प्रस्तुत करने में विफल, टेम्पलेट "{0}" मौजूद नहीं है।',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'अज्ञात शॉर्टकोड "{0}"।',
    'Shortcode "{0}" does not have option "{1}"' => 'शॉर्टकोड "{0}" में "{1}" विकल्प नहीं है।',
    'Shortcode "{0}" does not have method "{1}"' => 'शॉर्टकोड "{0}" में विधि "{1}" नहीं है।',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'फ़ाइल "{0}" को हटाने में विफल',
    'Could not perform directory deletion "{0}"' => 'निर्देशिका "{0}" को हटाने में विफल',
    'File name "{0}" is not a directory' => 'फ़ाइल नाम "{0}" कोई निर्देशिका नहीं है',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'निर्देशिका "{0}" नहीं बना सकते',
    'Unable to copy file "{0}" to directory "{1}"' => 'फ़ाइल "{0}" को निर्देशिका "{1}" में कॉपी करने में असमर्थ',
    'I managed to copy only part of the files "{0}"' => 'हम "{0}" फ़ाइलों का केवल एक भाग ही कॉपी कर पाए।',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'अमान्य फाइल प्रारूप।',
    'The uploaded file exceeds the size set in the settings' => 'अपलोड की गई फ़ाइल सेटिंग्स में निर्धारित आकार से अधिक है।',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'अपलोड की गई फ़ाइल का आकार अधिकतम अनुमत आकार से अधिक है, जो php.ini कॉन्फ़िगरेशन फ़ाइल के upload_max_filesize निर्देश द्वारा निर्दिष्ट है।',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'अपलोड की गई फ़ाइल का आकार HTML फॉर्म में निर्दिष्ट MAX_FILE_SIZE मान से अधिक हो गया है।',
    'The uploaded file was only partially uploaded' => 'डाउनलोड की गई फ़ाइल केवल आंशिक रूप से प्राप्त हुई थी।',
    'No file was uploaded' => 'फ़ाइल अपलोड नहीं की गई थी।',
    'Missing a temporary folder' => 'अस्थायी फ़ोल्डर गुम है।',
    'Failed to write file to disk' => 'डिस्क पर फ़ाइल लिखने में विफल।',
    'File upload stopped by extension' => 'PHP एक्सटेंशन ने फ़ाइल डाउनलोड करना बंद कर दिया है।',
    'Unknown upload error' => 'अज्ञात डाउनलोड त्रुटि।',
    'Invalid file extension' => 'अमान्य फ़ाइल एक्सटेंशन।',
    'Missing class or extension PHP: "{0}"' => 'गुम PHP वर्ग या एक्सटेंशन: "{0}"।',
    'Error uploading image file' => 'छवि फ़ाइल लोड (प्रसंस्करण) करने में त्रुटि।',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'अमान्य टैग नाम या टैग "{0}" मौजूद नहीं है।',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'फ़ाइल निर्दिष्ट पथ "{0}" पर मौजूद नहीं है।',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'अद्यतन पैकेज पहचानकर्ता प्रारूप गलत है।',
    'The specified update package data format "{0}" does not exist' => 'निर्दिष्ट अद्यतन पैकेज डेटा प्रारूप "{0}" मौजूद नहीं है।',
    'Unable to create update package file "{0}"' => 'अद्यतन पैकेज़ फ़ाइल "{0}" बनाने में असमर्थ',
    'Unable to package update package files "{0}"' => 'सर्विस पैक फ़ाइलों को पैकेज करने में असमर्थ "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'अद्यतन पैकेज पैरामीटर "{0}" अनुपलब्ध है या गलत तरीके से निर्दिष्ट है।',
    'Your app version is not compatible with the update packages version' => 'आपका एप्लिकेशन संस्करण सर्विस पैक संस्करण के साथ संगत नहीं है।',
    'Update package with ID "{0}" is missing' => 'आईडी "{0}" वाला अपडेट पैकेज गायब है।'
];