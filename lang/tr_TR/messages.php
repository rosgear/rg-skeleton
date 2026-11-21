<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Турецкая локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Ev',
    'Message' => 'Mesaj',
    'Warning' => 'Uyarı',
    'Error' => 'Hata',
    'The module cannot be called from the administration panel' => 'Modülü Kontrol Panelinden çağırmak mümkün değil.',
    'Edition' => 'Editoryal',
    'Widget' => 'Widget',
    'Module' => 'Modül',
    'Module extension' => 'Modül genişletme',
    'Extension' => 'Eklenti',
    'Application' => 'Başvuru',
    'Web application' => 'Web uygulaması',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => '"{0}" nesnesi belirlenemiyor.',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'CSRF belirteci uyuşmazlığı',
    'CSRF token is invalid or missing' => 'CSRF jetonu geçersiz veya eksik.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Erişim hatası',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Veritabanı sorgu hatası',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Bağlantı hatası',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => '"{0}" hizmeti başlatılamadı. Hizmet bulunamadı.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => '"{0}" dahili kodlaması ayarlanamadı.',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Modül görünüm modeli için tanımlayıcı yapamıyor.',
    'Controller with name "{0}" not exists' => '"{0}" adlı denetleyici mevcut değil.',
    'You are not allowed to perform this action' => 'Bu eylemi gerçekleştirmenize izin verilmiyor.',
    'Action "{0}" at controller "{1}" not exists' => '"{1}" denetleyicisinin "{0}" eylemi mevcut değil.',
    'Could not define module id' => 'Modül kimliği belirlenemedi.',
    'No permission "{0}" to access the module' => '"{0}" modülüne erişim izni yok.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Geçersiz parametre geçildi.',
    'Invalid parameter specified "{0}"' => 'Geçersiz parametre "{0}".',
    'Parameter "{0}" not specified' => '"{0}" parametresi belirtilmedi.',
    'Parameter passed incorrectly "{0}"' => '"{0}" parametresi yanlış aktarıldı.',
    'The value for parameter "{0}" is missing' => '"{0}" parametre değeri eksik.',
    'Could not defined data model "{0}"' => '"{0}" veri modeli belirlenemedi.',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '"{1}" kimliğine sahip {0} mevcut değil.',
    'File {0} "{1}" not exists' => '{0}, "{1}" dosyasına sahip değil.',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '"{0}" ın yüklenecek "{1}" parametresi yok.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Yetkili olmanız gerekir.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Fabrikanın argüman olarak ilişkisel diziye ihtiyacı var.',
    'Missing "adapter"' => 'Mevcut olmayan "adapter".',
    'Missing "adapter.name"' => 'Mevcut olmayan "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'seçenekler parametresi bir dizi olmalıdır.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Belirtilen {0} biçimi geçerli değil. Desteklenen formatlar: {1}.',
    'The options parameter must be an array or a Traversable' => 'Options parametresi bir dizi veya Geçilebilir olmalıdır.',
    'You must specify a password format' => 'Şifre formatını belirtmelisiniz.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Özeti oluşturmak için bir Kullanıcı Adı ve Yetki Adı (bölge) sağlamanız gerekir.',
    'The APR1 password format is not valid' => 'Geçersiz şifre biçimi APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Özeti doğrulamak için bir Kullanıcı Adı ve Yetki Adı (bölge) sağlamanız gerekir.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'APR1 algoritması için tuz değeri 8 karakter uzunluğunda olmalıdır.',
    'The salt value must be a string in the alphabet' => 'Tuz değeri alfabede bir dize olmalıdır.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument {0} veya {1} veya {2} veya {3} veya {4} olmalıdır, "{5}" verilir.',
    'Argument type should be in array({0})' => 'Bağımsız değişken türü dizide ({1}) olmalıdır.',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'getExpressionData() tarafından bir diziden döndürülen öğeler bir dize veya dizi olmalıdır.',
    'A number of parameters was found that is not supported by this specification' => 'Bu spesifikasyon tarafından desteklenmeyen bir dizi parametre bulunmuştur..',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Bu spesifikasyon tarafından desteklenmeyen bir dizi parametre ({0}) bulundu.',
    'Supplied expression must be a string' => 'Sağlanan ifade bir dize olmalıdır.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'İfade parametreleri bir skaler veya dizi olmalıdır.',
    'The number of replacements in the expression does not match the number of parameters' => 'İfadedeki ikame sayısı parametre sayısına karşılık gelmiyor.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'değerler veya seçim mevcut olmalıdır.',
    'The key {0} was not found in this objects column list' => 'Bu nesne sütunları listesinde {0} anahtarı bulunamadı.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0}, parametrenin {1} tarafından verilen sayısal olmasını bekler.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Tablo bir dize, bir dizi veya TableIdentifier örneği olmalıdır.',
    'Can\'t get Sql string from query builder, unknow result' => 'Sorgu oluşturucudan Sql satırı alınamadı, sonuç bilinmiyor.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Bu SQL nesnesi yalnızca oluşturma sırasında sağlanan "{0}" tablosuyla çalışacak şekilde tasarlanmıştır.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Bu nesne yapıcıdaki bir tablo ve/veya şema kullanılarak oluşturulduğundan salt okunurdur.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table bir dize, bir dizi veya TableIdentifier örneği olmalıdır.',
    'from() expects $table as an array is a single element associative array' => 'from(), bir dizi olarak $table\'ın bir öğenin ilişkisel dizisi olmasını bekler.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Niceleyici DISTINCT, ALL veya ExpressionInterface\'i uygulayan belirli bir platform nesnesinden biri olmalıdır.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Bağlantı yapılandırıcısı bulunamadı.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'SQL sorgusu yürütülemiyor, sorgu boş.',
    'Error executing database query' => 'Veritabanı sorgusu yürütülürken hata oluştu.',
    'Query error: {0}, {1}' => '"{1}" isteği yürütülürken "{0}" hatası.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Veritabanı sunucusuna bağlanırken hata oluştu. ',
    'Connection error: loading {0} character set' => '"{0}" karakter kümesi yüklenirken bağlantı hatası oluştu. ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: geri arama bekleniyor; sağlanmadı.',
    '{0}: сallback function "{1}" not called' => '{0}: "{1}" geri çağırma işlevi çağrılmadı.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'JSON\'un kodu çözülemedi: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Geçersiz veya desteklenmeyen HTTP sürümü: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Oturum açma komut dosyasının yolu belirlenemiyor.',
    'Unable to determine the entry script URL' => 'Oturum açma komut dosyası URL\'si belirlenemiyor.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Geçersiz durum yanıt kodu sağlandı: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Sunucu komut dosyasındaki bir hata nedeniyle istek tamamlanamadı.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Bilinmeyen günlük işleyicisi.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => '"{0}" karşılaştırması için geçersiz parametreler belirtildi.',
    'Уou need a {0} for {1}' => '"{1}" için "{0}" gerekir.',
    'Уou need a {0} version of at least {1}, current version: {2}' => '"{1}"den daha düşük olmayan {0} sürümüne ihtiyacınız var, mevcut sürüm: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => '"{2}" değerinden daha düşük olmayan {0} "{1}" sürümüne ihtiyacınız var, mevcut sürüm: "{3}".',
    'Used for {0} with id {1}' => '"{1}" kimliğine sahip {0}\'a ihtiyacınız var.',
    'Used for {0} with code {1}' => '"{1}" kodlu {0}\'a ihtiyacınız var.',
    'Used for {0} with name {1}' => '"{1}" adlı {0}\'a ihtiyacınız var.',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Kapsayıcıya iletilen ad geçersiz; yalnızca alfanümerik karakterlerden, ters eğik çizgilerden ve alt çizgilerden oluşmalıdır.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Sağlanan yönetici geçersiz; ManagerInterface\'i uygulamalıdır.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Yapılandırma dosyası kaydedilemiyor.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Lütfen konsol uygulamasını çalıştırdığınızda UrlManager::scriptUrl\'u doğru şekilde yapılandırın.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Geçersiz seçenek "{0}".',
    'No message template exists for key "{0}"' => 'Geçersiz parametre "{0}".',
    'No property exists by the name "{0}"' => '"{0}" adında bir özellik yok.',
    'Unknown type' => 'Bilinmeyen tür.',
    'Invalid query parameter' => 'Geçersiz istek parametresi!',
    'File "{0}" not found' => '"{0}" dosyası bulunamadı.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => '"Arasında" doğrulayıcı için "min" veya "maks" seçeneği eksik. Seçenek belirtilmelidir.',
    'The input is not between "%min%" and "%max%", inclusively' => 'alan değeri "%min%" ve "%max%" karakterleri arasında olmalıdır (bunlar dahil).',
    'The input is not strictly between "%min%" and "%max%"' => 'alan değeri "%min%" ve "%max%" karakterleri arasında olmalıdır.',
    'The input must be less "%max%", inclusively' => 'Değer "%max%" (bunlar dahil) değerinden küçük olmalıdır',
    'The input must be greater "%min%", inclusively' => 'Değer "%min%"den büyük olmalıdır (bunlar dahil)',
    'The input must be less "%max%"' => 'Değer "%max%" değerinden küçük olmalıdır',
    'The input must be greater "%min%"' => 'Değer "%min%" den büyük olmalıdır',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'alan değeri zorunludur ve boş olamaz', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Listeden bir eleman seçmeniz gerekiyor (listedeki elemandan farklı bir değere izin verilmez).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Seçenek eksik. "format" veya "mesaj" belirtilmelidir.',
    'You have filled in the field incorrectly' => 'Alanı yanlış doldurdunuz, alan uygun karakterleri içermelidir.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Kodu yanlış girdiniz.',
    'Missing option. "param" have to be given' => '"Captcha" doğrulayıcının "param" seçeneği eksik. Seçenek belirtilmelidir.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Yanlış değer belirtildi',
    'You have incorrectly set the comparison condition' => 'Karşılaştırma koşulunu yanlış ayarladınız',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => '"{0}" takma adı modülü yapılandırma yöneticisi ayarlarında zaten mevcut.',
    'A field with name "{0}" already exists' => 'Modül yapılandırma yöneticisi ayarlarında "{0}" adlı bir alan zaten mevcut.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Modül görüntülenemedi, "{0}" adlı şablon bulunamadı.',
    'Could not render module, template filename "{0}" not exists' => 'Modül görüntülenemedi, şablon dosya adı "{0}" mevcut değil.',
    'Could not load template, file is not accessible "{0}"' => 'Şablon yüklenemedi, "{0}" dosyası mevcut değil.',
    'Could not render module, render with name "{0}" not found' => 'Modül görüntülenemedi, "{0}" modül adı bulunamadı.',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Modül oluşturma işlemi başarısız oldu, şablon (dosya adı) "{0}" bulunamadı veya tanımsız.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'PhpRenderer ile oluşturulamadı, "{0}" şablonu mevcut değil.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Bilinmeyen kısa kod "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => '"{0}" kısa kodunda "{1}" seçeneği yok.',
    'Shortcode "{0}" does not have method "{1}"' => '"{0}" kısa kodunda "{1}" yöntemi yok.',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => '"{0}" dosyası silinemedi',
    'Could not perform directory deletion "{0}"' => '"{0}" dizini silinemedi',
    'File name "{0}" is not a directory' => '"{0}" dosya adı bir dizin değil',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => '"{0}" dizini oluşturulamıyor',
    'Unable to copy file "{0}" to directory "{1}"' => '"{0}" dosyası "{1}" dizinine kopyalanamıyor',
    'I managed to copy only part of the files "{0}"' => '"{0}" dosyalarının yalnızca bir kısmı kopyalanabildi.',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Geçersiz dosya biçimi.',
    'The uploaded file exceeds the size set in the settings' => 'Yüklenen dosya ayarlarda belirlenen boyutu aşıyor.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'Yüklenen dosyanın boyutu, php.ini yapılandırma dosyasının upload_max_filesize yönergesi tarafından belirtilen, izin verilen maksimum boyutu aştı.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'Yüklenen dosya boyutu, HTML formunda belirtilen MAX_FILE_SIZE değerini aştı.',
    'The uploaded file was only partially uploaded' => 'İndirilen dosyanın yalnızca bir kısmı alındı.',
    'No file was uploaded' => 'Dosya yüklenmedi.',
    'Missing a temporary folder' => 'Temp klasörü eksik.',
    'Failed to write file to disk' => 'Dosya diske yazılamadı.',
    'File upload stopped by extension' => 'PHP uzantısı dosya indirmeyi durdurdu.',
    'Unknown upload error' => 'Bilinmeyen indirme hatası.',
    'Invalid file extension' => 'Geçersiz dosya uzantısı.',
    'Missing class or extension PHP: "{0}"' => 'Eksik PHP sınıfı veya uzantısı: "{0}".',
    'Error uploading image file' => 'Resim dosyası yüklenirken (işlenirken) hata oluştu.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Geçersiz etiket adı veya "{0}" etiketi mevcut değil.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Dosya belirtilen "{0}" yolunda mevcut değil.',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Geçersiz güncelleme paketi kimliği biçimi.',
    'The specified update package data format "{0}" does not exist' => 'Belirtilen güncelleme paketi veri biçimi "{0}" mevcut değil.',
    'Unable to create update package file "{0}"' => '"{0}" güncelleme paketi dosyası oluşturulamıyor',
    'Unable to package update package files "{0}"' => '"{0}" hizmet paketi dosyaları paketlenemiyor',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Güncelleme paketi parametresi "{0}" eksik veya yanlış belirtildi.',
    'Your app version is not compatible with the update packages version' => 'Uygulama sürümünüz hizmet paketi sürümüyle uyumlu değil.',
    'Update package with ID "{0}" is missing' => 'Güncelleme paketi kimliği "{0}" eksik.'
];