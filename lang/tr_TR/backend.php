<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Турецкая локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Web sitesi',
    FRONTEND => 'web sitesi',
    BACKEND_NAME => 'Kontrol Paneli',
    BACKEND => 'kontrol Paneli',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'Seçtiğiniz öğe mevcut değil veya silinmiş.',
    'No data to perform action' => 'İşlemi gerçekleştirecek veri yok.',
    'Invalid query method' => 'Geçersiz istek yöntemi.',
    'Invalid request format' => 'Geçersiz istek biçimi.',
    'Error filling out form fields: {0}' => 'Form alanları doldurulurken hata oluştu<br>{0}.',
    'Invalid argument "{0}"' => 'Geçersiz bağımsız değişken "{0}".',
    'Could not delete record' => 'Giriş silinemedi.',
    'Could not save data' => 'Veriler kaydedilemedi.',
    'Could not add data' => 'Veri eklenemedi.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => '"{0}" modülü hakkında bilgi',
    'Not enough information on the specified record, the user may have been deleted' => 'Belirtilen giriş için yeterli bilgi yok, bu girişin kullanıcısı silinmiş olabilir.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => '"{0}" uzantısı hakkında bilgi',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Seçilen kayıtlardan "<b>{nSelected}</b>", {deleted, plural, =1{"<b>1</b>" kayıt silindi} few{"<b>{nDeleted}</b>" kayıt silindi} many{"<b>{nDeleted}</b>" kayıt silindi} other{"<b>{nDeleted}</b>" kayıtlar silindi}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Kayıtlar kısmen silindi, {deleted, plural, =1{"<b>1</b>" kayıt silindi} few{"<b>{nDeleted}</b>" kayıt silindi} many{"<b>{nDeleted}</b>" kayıt silindi} other{"<b>{nDeleted}</b>" kayıtlar silindi}}, '
      . '{skipped, plural, =1{atlanan "<b>1</b>" kayıt} few{atlanan "<b>{nSkipped}</b>" kayıt} many{atlanan "<b>{nSkipped}</b>" kayıt} other{atlanan "<b>{nSkipped}</b>" kayıtlar}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        '{n, plural, =1{kayıtlar, kayda erişilemiyor} diğer{"<b>{N}</b>" kayıtlar, kayıtlara erişilemiyor}} silinemiyor.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Silinemiyor {n, plural, =1{kayıtlar, kayıt mevcut değil} few{kayıt, kayıt mevcut değil} many{kayıt, kayıt mevcut değil} other{kayıtlar, kayıtlar mevcut değil}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Başarılı {n, plural, =1{"<b>1</b>" kayıt silindi} few{"<b>{N}</b>" kayıt silindi} many{"<b>{N}</b>" kayıt silindi} other{"<b>{N}</b>" kayıtlar silindi}}.',
    'Deletion' => 'Kaldırma',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Dosyalar kısmen silindi, {deleted, plural, =1{"<b>1</b>" dosya silindi} few{"<b>{nDeleted}</b>" dosya silindi} many{"<b>{nDeleted}</b>" dosya silindi} other{"<b>{nDeleted}</b>" dosyalar silindi}}, '
        . '{skipped, plural, =1{atlanan "<b>1</b>" dosyası} few{atlanan "<b>{nSkipped}</b>" dosyası} many{atlanan "<b>{nSkipped}</b>" dosyası}other{atlanan "<b>{nSkipped}</b>" dosyaları}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Dosyalar kısmen silindi, {n, plural, =1{eksik "<b>1</b>" dosyası} few{eksik "<b>{N}</b>" dosyası} many{eksik "<b>{N}</b>" dosyası} other{eksik "<b>{N}</b>" dosyası}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Dizinler kısmen silindi, {deleted, plural, =1{"<b>1</b>" dizin silindi} few{"<b>{nDeleted}</b>" dizinler silindi} many{"<b>{nDeleted}</b>" dizinler silindi} other{"<b>{nDeleted}</b>" dizinler silindi}}, '
        . '{skipped, plural, =1{atlanan "<b>1</b>" dizini} few{atlanan "<b>{nSkipped}</b>" dizinleri} many{atlanan "<b>{nSkipped}</b>" dizinleri} other{atlanan "<b>{nSkipped}</b>" dizinleri}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Dizinler kısmen kaldırıldı, {n, plural, =1{eksik "<b>1</b>" dizini} few{eksik "<b>{N}</b>" dizinleri} many{eksik "<b>{N}</b>" dizinleri} other{eksik "<b>{N}</b>" dizinleri}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Başarılı {n, plural, =1{"<b>1</b>" dosya silindi} birkaç{"<b>{N}</b>" dosya silindi} çok sayıda{"<b>{N}</b>" dosya silindi} diğer{"<b>{N}</b>" dosya silindi}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Başarılı {n, plural, =1{"<b>1</b>" dizin silindi} few{"<b>{N}</b>" dizin silindi} many{"<b>{N}</b>" dizin silindi} other{"<b>{N}</b>" dizinler silindi}}.',
    'Files and directories deleted successfully' => 'Dosyalar ve dizinler başarıyla silindi.',
    'Files deleted successfully' => 'Dosyalar başarıyla silindi.',
    'Directories deleted successfully' => 'Dizinler başarıyla silindi.',
    'Unable to delete files' => 'Dosyalar silinemiyor.',
    'Unable to delete directories' => 'Dizinler silinemiyor.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Giriş silinemiyor.',
    'Record successfully deleted' => 'Giriş başarıyla silindi.',
    'Record successfully added' => 'Giriş başarıyla eklendi.',
    'Record successfully update' => 'Giriş başarıyla değiştirildi.',
    'Unable to add record' => 'Giriş eklenemiyor.',
    'Unable to update record' => 'Giriş değiştirilemiyor.',
    'Update record' => 'Kayıtları değiştir',
    'Adding record' => 'Giriş ekleme',
    'A record with the specified field values already exists' => 'Belirtilen alan değerlerine sahip bir kayıt zaten mevcut.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => '"{0}" modülünü yapılandırma',
    'Settings successfully changed' => 'Ayarlar başarıyla değiştirildi.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => '"{0}" uzantısı kuruluyor',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Form şablonu yüklenemedi ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Düzenleme',
    'Search' => 'Aramak',
    'Columns' => 'Sütunlar',
    'Add' => 'Eklemek',
    'Adding a new record' => 'Yeni bir giriş ekleme',
    'Delete' => 'Silmek',
    'Delete selected records' => 'Seçilen girişlerin silinmesi',
    'Are you sure you want to delete posts' => 'Girişleri (girişleri) silmek istediğinizden emin misiniz - <b>{0}</b>?',
    'You need to select records' => 'Girişleri vurgulamanız gerekiyor.',
    'Edit' => 'Düzenlemek',
    'Save' => 'Kaydetmek',
    'Clear' => 'Temizlemek',
    'Deleting all records' => 'Listedeki tüm girişleri kaldırma',
    'Are you sure you want to delete all records' => 'Tüm girişleri silmek istediğinizden emin misiniz?',
    'You are sure of this' => 'Bundan emin misin?',
    'Select' => 'Seçme',
    'Selecting entries in the list' => 'Listedeki girişleri seçme',
    'Select all' => 'Tümünü seç',
    'Remove selection' => 'Seçimi kaldır',
    'Invert Selection' => 'Seçimi tersine çevir',
    'Refresh' => 'Güncelleme',
    'Refresh a list of records' => 'Giriş listesinin güncellenmesi',
    'Profiling' => 'Profil oluşturma',
    'Record profiling' => 'Kayıt profili oluşturma',
    'Show' => 'Göstermek',
    'Hide' => 'Saklamak',
    'Toggle columns' => 'Sütunları Göster/Gizle',
    'Filter' => 'Filtre',
    'Filtering records' => 'Girişleri filtreleme',
    '[None]' => '[ seçenek yok ]',
    'Reference' => 'Referans',
    'This feature is under development' => 'Bu özellik geliştirilme aşamasındadır!',
    'Browse' => 'Seçmek',
    'Entry must be selected' => 'Bir giriş seçmelisiniz!',
    'Only one entry needs to be selected' => 'Yalnızca bir giriş seçmeniz gerekiyor!',
    'Remove window modality' => 'Pencere modunu kaldır',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'girişi düzenle/ekle',
    'User' => 'Kullanıcı',
    'Date' => 'Tarih',
    'today' => 'bugün', 'yesterday' => 'düDünduring', 'the week' => 'hafthaftadar', 'month' => 'aylık', 'in a year' => 'yıl için\'yıl için',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Kod',
    'Date added' => 'Eklenme tarihi',
    'Date edit' => 'Tarihi düzenle',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Girişini denetleyin "<span>{0}</span>"',
    'Updated record date: {0}' => 'Düzenleme tarihi: {0}',
    'Created record date: {0}' => 'Eklenme tarihi: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Sıfırla',
    'Cancel' => 'İptal etmek',
    'Help' => 'Yardım',
    'Update' => 'Değiştirmek',
    'About widget' => 'Widget hakkında',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => '"<b>{user}</b>" kullanıcı hesabı altında aşağıdakileri yürütmeye çalışırken <b>{profile}</b> için ERİŞİM REDDEDİLDİ: "<b>{ipaddress}</b> IP adresinden, "<b>{browser}</b>" tarayıcısındaki "<b>{os}</b>" işletim sisteminden <b>{date}</b> içindeki "<b>{module}</b>" modülünün {action}\'ı.',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '"<b>{user}</b>" kullanıcı hesabı altında <b>{profile}</b> gerçekleştirildi: "<b>{browser}</b>" tarayıcısındaki "<b>{os}</b>" işletim sistemi, <b>{ipaddress}</b> IP adresinden <b>{date}</b> içindeki "<b>{module}</b>" modülünün {action}\'ı',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => '"<b>{user}</b>" kullanıcı hesabı altındaki <b>{profile}</b> için ERİŞİM YASAKLANMIŞTIR: <b>{browser}</b> tarayıcısındaki <b>{os}</b> işletim sisteminin {id} <b>{ipaddress}</b>\'inde "<b>{date}</b>" c{add} kimliğine sahip "<b>{module}</b>" c modülünün {action}\'ı gerçekleştirildi(a)',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '"<b>{user}</b>" kullanıcı hesabı altında <b>{profile}</b> gerçekleştirildi: "<b>{module}</b>" modülünün {action}\'ı "<b>{id}</b>" tanımlayıcısına sahip ve "<b>{browser}</b>" tarayıcısındaki <b>{date}</b> c işletim sistemi "<b>{os}</b>" adresinde',
    '{data action}' => 'verileri görüntüle',
    '{update action}' => 'kayıtları değiştir',
    '{add action}' => 'giriş ekleme',
    '{view action}' => 'bir sekme/pencere açma',
    '<unknown>' => '<bilinmiyor>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'kayıt denetim bilgilerini görüntüle "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'ağaç düğümü kayıtlarını görüntüleme "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'kayıt arama penceresini açma',
    '{data search action}' => 'kayıt arama değerlerini görüntüle',
    '{update search action}' => 'Kayıtları aramak için ayarlanan değerleri uygulama',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'kaydı görüntüle "<b>{0}</b>"',
    '{update form action}' => 'kayıtları değiştir "<b>{0}</b>"',
    '{add form action}' => 'giriş ekleme "<b>{0}</b>"',
    '{view form action}' => 'kaydı görüntülemek için bir pencere açma "<b>{0}</b>"',
    '{view add form action}' => 'giriş eklemek için bir pencere açma',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'ayarlar penceresini aç',
    '{data settings action}' => 'ayarları görüntüle',
    '{update settings action}' => 'ayarları değiştir',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'bilgileri görüntülemek için bir sekme/pencere açma',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'giriş(ler)in listeden kaldırılması',
    '{update grid row(s) action}' => '"<b>{0}</b>" liste girişini değiştirme',
    '{clear grid row(s) action}' => 'listedeki tüm girişlerin kaldırılması',
    '{clear action}' => 'tüm girişlerin silinmesi',
    '{expand grid row(s) action}' => '"<b>{0}</b>" liste girişinin genişletilmiş görünümü',
    '{view grid row(s) action}' => 'girişlerin listesini görüntülemek için bir sekme açma',
    '{filter grid row(s) action}' => 'kayıt filtresi ayarlama',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Bilgi', 'Modül bilgisi'],
        'settings'   => ['Ayarlar', 'Modül ayarları'],
        'recordRls'  => ['Kayıt düzeyinde erişim', 'Yalnızca girişlerinizi görüntüleyin ve okuyun'],
        'writeAudit' => ['Bir denetim izini sürdürün', 'Kullanıcı tarafından gerçekleştirilen işlemlerin belgelenmesi'],
        'viewAudit'  => ['Denetim Günlüğünü Oku', 'Kullanıcının gerçekleştirdiği işlemleri görüntüleme']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => 'Belirtilen kimliğe sahip {0}\'da "{1}" eksik.',
    'The {0} with the specified id "{1}" is a system' => 'Belirtilen "{1}" tanımlayıcısına sahip {0}, sistemdir.',
    'The {0} with the identifier "{1}" is missing in the database' => '"{1}" tanımlayıcısına sahip {0} veritabanında yok.',
    'Missing {0} configuration file "{1}"' => '{0}, "{1}" yapılandırma dosyasına sahip değil.',
    'Missing file "{0}" configuration parameter "{1}"' => '"{1}" parametresi eksik "{0}" yapılandırma dosyası.',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => '"{0}" yapılandırma dosyasının "{1}" parametresi yanlış belirtildi.',
    '{0} with specified id "{1}" already installed' => 'Belirtilen "{1}" kimliğine sahip {0} zaten yüklü.',
    '{0} with specified parameter "{1}" already installed' => '"{1}" parametreli {0} zaten ayarlı.',
    'Error adding {0} to database' => 'Bir hata nedeniyle {0} veritabanına eklenemiyor.',
    'The {0} with ID "{1}" is not in the registry' => '"{1}" kimliğine sahip {0} kayıt defterinde değil.',
    'The {0} with ID "{1}" not found at database' => '"{1}" kimliğine sahip {0} veritabanında bulunamadı.',
    'Error saving {0} to database' => '{0} bir hata nedeniyle veritabanına kaydedilemiyor.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0}, yükleme seçeneklerinde belirtilen "{1}" yerelleştirme dosyasına sahip değil.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Bu uzantıyı yüklemek için "{0}" tanımlayıcısına sahip modülü yüklemelisiniz.'
];
