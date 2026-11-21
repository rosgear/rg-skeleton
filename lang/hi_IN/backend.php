<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Индийская (хинди) локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'वेबसाइट',
    FRONTEND => 'वेबसाइट',
    BACKEND_NAME => 'कंट्रोल पैनल',
    BACKEND => 'कंट्रोल पैनल',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'आपके द्वारा चयनित आइटम मौजूद नहीं है या हटा दिया गया है।',
    'No data to perform action' => 'कार्रवाई करने के लिए कोई डेटा नहीं है।',
    'Invalid query method' => 'अमान्य अनुरोध विधि।',
    'Invalid request format' => 'अमान्य अनुरोध प्रारूप।',
    'Error filling out form fields: {0}' => 'फ़ॉर्म फ़ील्ड भरने में त्रुटि<br>{0}।',
    'Invalid argument "{0}"' => 'अमान्य तर्क "{0}"।',
    'Could not delete record' => 'प्रविष्टि हटाने में विफल।',
    'Could not save data' => 'डेटा सहेजने में विफल।',
    'Could not add data' => 'डेटा जोड़ने में विफल।',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'मॉड्यूल "{0}" के बारे में जानकारी',
    'Not enough information on the specified record, the user may have been deleted' => 'निर्दिष्ट प्रविष्टि के लिए पर्याप्त जानकारी नहीं है; हो सकता है कि इस प्रविष्टि का उपयोगकर्ता हटा दिया गया हो।',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'एक्सटेंशन "{0}" के बारे में जानकारी',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'The records were partially deleted, from the selected «<b>{nSelected}</b>», deleted «<b>{nDeleted}</b>» {deleted, plural, one{record} other{records}}।',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Records have been partially deleted, «<b>{nDeleted}</b>» deleted, «<b>{nSkipped}</b>» {skipped, plural, =1{record} other{records}} skipped',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Unable to delete «<b>{N}</b>» {n, plural, =1{record} other{records}}, no records are available',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Successfully deleted «<b>{N}</b>» {n, plural, =1{record} other{records}}।',
    'Deletion' => 'हटाना',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Files have been partially deleted, {deleted, plural, =1{deleted «<b>1</b>» file} few{deleted «<b>{nDeleted}</b>» files} many{deleted «<b>{nDeleted}</b>» files} other{deleted «<b>{nDeleted}</b>» files}}, '
     . '{skipped, plural, =1{skipped «<b>1</b>» file} few{skipped «<b>{nSkipped}</b>» file} many{skipped «<b>{nSkipped}</b>» files} other{skipped «<b>{nSkipped}</b>» files}}।',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Files have been partially deleted, {n, plural, =1{skipped «<b>1</b>» file} few{skipped «<b>{N}</b>» file} many{skipped «<b>{N}</b>» files} other{skipped «<b>{N}</b>» files}}।',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Directories have been partially deleted, {deleted, plural, =1{deleted «<b>1</b>» directory} few{deleted «<b>{nDeleted}</b>» directory} many{deleted «<b>{nDeleted}</b>» directories} other{deleted «<b>{nDeleted}</b>» directories}}, '
     . '{skipped, plural, =1{skipped «<b>1</b>» directory} few{skipped «<b>{nSkipped}</b>» directory} many{skipped «<b>{nSkipped}</b>» directories} other{skipped «<b>{nSkipped}</b>» directories}}।',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Directories have been partially deleted, {n, plural, =1{skipped «<b>1</b>» directory} few{skipped «<b>{N}</b>» directory} many{skipped «<b>{N}</b>» directories} other{skipped «<b>{N}</b>» directories}}।',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Successfully {n, plural, =1{deleted «<b>1</b>» file} few{deleted «<b>{N}</b>» file} many{deleted «<b>{N}</b>» files} other{deleted «<b>{N}</b>» files}}।',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Successfully {n, plural, =1{deleted «<b>1</b>» directory} few{deleted «<b>{N}</b>» directory} many{deleted «<b>{N}</b>» directories} other{deleted «<b>{N}</b>» directories}}।',
    'Files and directories deleted successfully' => 'फ़ाइलें और निर्देशिकाएँ सफलतापूर्वक हटा दी गईं।',
    'Files deleted successfully' => 'फ़ाइलें सफलतापूर्वक हटा दी गईं।',
    'Directories deleted successfully' => 'निर्देशिकाएँ सफलतापूर्वक हटा दी गईं।',
    'Unable to delete files' => 'फ़ाइलें हटा नहीं सकते।',
    'Unable to delete directories' => 'निर्देशिकाएँ हटा नहीं सकते।',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'प्रविष्टि को हटाया नहीं जा सकता।',
    'Record successfully deleted' => 'प्रविष्टि सफलतापूर्वक हटा दी गई।',
    'Record successfully added' => 'प्रविष्टि सफलतापूर्वक जोड़ दी गई।',
    'Record successfully update' => 'प्रविष्टि सफलतापूर्वक संशोधित कर दी गई है।',
    'Unable to add record' => 'प्रविष्टि जोड़ने में असमर्थ।',
    'Unable to update record' => 'प्रविष्टि को संशोधित नहीं किया जा सकता।',
    'Update record' => 'रिकॉर्ड बदलें',
    'Adding record' => 'एक प्रविष्टि जोड़ रहा हूँ',
    'A record with the specified field values already exists' => 'निर्दिष्ट फ़ील्ड मान वाला एक रिकॉर्ड पहले से मौजूद है।',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'मॉड्यूल "{0}" को कॉन्फ़िगर करना',
    'Settings successfully changed' => 'सेटिंग्स सफलतापूर्वक बदल दी गई हैं।',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'एक्सटेंशन "{0}" सेट अप करना',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'प्रपत्र टेम्पलेट लोड नहीं किया जा सका ({0})।',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'संपादन',
    'Search' => 'खोज',
    'Columns' => 'कॉलम',
    'Add' => 'जोड़ना',
    'Adding a new record' => 'एक नई प्रविष्टि जोड़ी जा रही है',
    'Delete' => 'मिटाना',
    'Delete selected records' => 'चयनित प्रविष्टियाँ हटाना',
    'Are you sure you want to delete posts' => 'क्या आप वाकई प्रविष्टि(प्रविष्टियों) को हटाना चाहते हैं? - <b>{0}</b> ?',
    'You need to select records' => 'आपको प्रविष्टियों को हाइलाइट करना होगा।',
    'Edit' => 'संपादन करना',
    'Save' => 'बचाना',
    'Clear' => 'स्पष्ट',
    'Deleting all records' => 'किसी सूची से सभी प्रविष्टियाँ हटाना',
    'Are you sure you want to delete all records' => 'क्या आप वाकई सभी प्रविष्टियाँ हटाना चाहते हैं?',
    'You are sure of this' => 'क्या आप इस बारे में आश्वस्त हैं?',
    'Select' => 'चुनना',
    'Selecting entries in the list' => 'किसी सूची में प्रविष्टियों का चयन करना',
    'Select all' => 'सबका चयन करें',
    'Remove selection' => 'चयन हटाएँ',
    'Invert Selection' => 'उलट चयन',
    'Refresh' => 'अद्यतन',
    'Refresh a list of records' => 'प्रविष्टियों की सूची अद्यतन की जा रही है',
    'Profiling' => 'रूपरेखा',
    'Record profiling' => 'प्रोफ़ाइलिंग रिकॉर्ड करें',
    'Show' => 'दिखाओ',
    'Hide' => 'छिपाना',
    'Toggle columns' => 'कॉलम दिखाएँ/छिपाएँ',
    'Filter' => 'फ़िल्टर',
    'Filtering records' => 'प्रविष्टियों को फ़िल्टर करना',
    '[None]' => '[ कोई विकल्प नहीं ]',
    'Reference' => 'संदर्भ',
    'This feature is under development' => 'यह सुविधा विकासाधीन है!',
    'Browse' => 'चुनना',
    'Entry must be selected' => 'आपको एक प्रविष्टि का चयन करना होगा!',
    'Only one entry needs to be selected' => 'आपको केवल एक प्रविष्टि का चयन करना होगा!',
    'Remove window modality' => 'विंडो मोडैलिटी हटाएं',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'प्रविष्टि संपादित करें/जोड़ें',
    'User' => 'उपयोगकर्ता',
    'Date' => 'तारीख',
    'today' => 'आज', 'yesterday' => 'कल', 'during the week' => 'एक सप्ताह में', 'per month' => 'एक महीने में', 'in a year' => 'एक साल में',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'कोड',
    'Date added' => 'तिथि जोड़ी',
    'Date edit' => 'संशोधन की तारीख',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'रिकॉर्ड "<span>{0}</span>" का ऑडिट',
    'Updated record date: {0}' => 'रिकॉर्ड संपादन की तिथि: {0}',
    'Created record date: {0}' => 'वह तारीख जब प्रविष्टि जोड़ी गई: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'रीसेट',
    'Cancel' => 'रद्द करना',
    'Help' => 'मदद',
    'Update' => 'परिवर्तन',
    'About widget' => 'विजेट के बारे में',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => '<b>{profile}</b> के लिए एक्सेस अस्वीकार कर दिया गया है, जब उपयोगकर्ता खाते "<b>{user}</b>" के अंतर्गत निष्पादित करने का प्रयास किया जाता है: मॉड्यूल "<b>{action}</b>" का {क्रिया} <b>{date}</b> में आईपी पते से <b>{ipaddress}</b>, ऑपरेटिंग सिस्टम "<b>{os}</b>" ब्राउज़र में "<b>{browser}</b>"',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> उपयोगकर्ता खाते के अंतर्गत "<b>{user}</b>" ने प्रदर्शन किया: मॉड्यूल "<b>{action}</b>" की <b>{date}</b> में आईपी पते से <b>{ipaddress}</b>, ऑपरेटिंग सिस्टम "<b>{os}</b>" ब्राउज़र में "<b>{browser}</b>" की {कार्रवाई}',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'उपयोगकर्ता खाते "<b>{user}</b>" के अंतर्गत <b>{profile}</b> के लिए पहुंच निषिद्ध है (a): मॉड्यूल "<b>{module}</b>" c की {action} आईडी "<b>{id}</b>" के साथ {date} <b>{ipaddress}</b> में, ऑपरेटिंग सिस्टम <b>{os}</b> के ब्राउज़र में <b>{browser}</b>',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> उपयोगकर्ता खाते के अंतर्गत "<b>{user}</b>" ने प्रदर्शन किया: मॉड्यूल "<b>{module}</b>" की {क्रिया} पहचानकर्ता "<b>{id}</b>" के साथ <b>{date}</b> पता c ऑपरेटिंग सिस्टम "<b>{os}</b>" ब्राउज़र में "<b>{browser}</b>"',
    '{data action}' => 'डेटा देखना',
    '{update action}' => 'रिकॉर्ड बदलें',
    '{add action}' => 'एक प्रविष्टि जोड़ना',
    '{view action}' => 'एक टैब/विंडो खोलना',
    '<unknown>' => '<अज्ञात>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'रिकॉर्ड "<b>{0}</b>" के लिए ऑडिट जानकारी देखें',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'ट्री नोड रिकॉर्ड देखना "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'रिकॉर्ड खोज विंडो खोलना',
    '{data search action}' => 'रिकॉर्ड खोज मान देखें',
    '{update search action}' => 'अभिलेखों की खोज के लिए निर्धारित मान लागू करना',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'प्रविष्टि "<b>{0}</b>" देखें',
    '{update form action}' => 'प्रविष्टि "<b>{0}</b>" बदल रही है',
    '{add form action}' => 'प्रविष्टि "<b>{0}</b>" जोड़ना',
    '{view form action}' => 'प्रविष्टि "<b>{0}</b>" देखने के लिए एक विंडो खोलना',
    '{view add form action}' => 'एक प्रविष्टि जोड़ने के लिए एक विंडो खोलना',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'सेटिंग्स विंडो खोलना',
    '{data settings action}' => 'सेटिंग्स देखें',
    '{update settings action}' => 'सेटिंग्स परिवर्तित करना',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'जानकारी देखने के लिए एक टैब/विंडो खोलना',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'सूची से प्रविष्टियाँ हटाना',
    '{update grid row(s) action}' => 'सूची प्रविष्टि "<b>{0}</b>" बदलना',
    '{clear grid row(s) action}' => 'सूची से सभी प्रविष्टियाँ हटा रहा हूँ',
    '{clear action}' => 'सभी प्रविष्टियाँ हटाना',
    '{expand grid row(s) action}' => 'सूची प्रविष्टि "<b>{0}</b>" का विस्तारित दृश्य',
    '{view grid row(s) action}' => 'प्रविष्टियों की सूची देखने के लिए एक टैब खोलना',
    '{filter grid row(s) action}' => 'रिकॉर्ड फ़िल्टर सेट करना',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['जानकारी', 'मॉड्यूल जानकारी'],
        'settings'   => ['सेटिंग्स', 'मॉड्यूल सेटिंग्स'],
        'recordRls'  => ['रिकॉर्ड-स्तरीय पहुंच', 'केवल अपनी प्रविष्टियाँ देखें और पढ़ें'],
        'writeAudit' => ['एक ऑडिट ट्रेल बनाए रखें', 'उपयोगकर्ता द्वारा किए गए दस्तावेज़ीकरण कार्य'],
        'viewAudit'  => ['ऑडिट लॉग पढ़ें', 'उपयोगकर्ता द्वारा किए गए लेनदेन देखना']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => 'निर्दिष्ट आईडी के साथ {0} में "{1}" गुम है।',
    'The {0} with the specified id "{1}" is a system' => 'निर्दिष्ट पहचानकर्ता "{1}" के साथ {0} एक सिस्टम है।',
    'The {0} with the identifier "{1}" is missing in the database' => 'पहचानकर्ता "{1}" वाला {0} डेटाबेस में नहीं है।',
    'Missing {0} configuration file "{1}"' => '{0} में कॉन्फ़िगरेशन फ़ाइल "{1}" नहीं है।',
    'Missing file "{0}" configuration parameter "{1}"' => 'फ़ाइल "{0}" का कॉन्फ़िगरेशन पैरामीटर "{1}" गुम है।',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'कॉन्फ़िगरेशन फ़ाइल "{0}" का पैरामीटर "{1}" गलत तरीके से निर्दिष्ट है।',
    '{0} with specified id "{1}" already installed' => 'निर्दिष्ट आईडी "{1}" के साथ {0} पहले से ही स्थापित है।',
    '{0} with specified parameter "{1}" already installed' => 'पैरामीटर "{1}" के साथ {0} पहले से ही स्थापित है।',
    'Error adding {0} to database' => 'किसी त्रुटि के कारण {0} को डेटाबेस में नहीं जोड़ा जा सका।',
    'The {0} with ID "{1}" is not in the registry' => '{0} आईडी "{1}" के साथ रजिस्ट्री में नहीं है।',
    'The {0} with ID "{1}" not found at database' => '{0} आईडी "{1}" के साथ डेटाबेस में नहीं मिला।',
    'Error saving {0} to database' => 'किसी त्रुटि के कारण {0} को डेटाबेस में सहेजा नहीं जा सका।',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} के पास इंस्टॉलेशन विकल्पों में निर्दिष्ट स्थानीयकरण फ़ाइल "{1}" नहीं है।',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'इस एक्सटेंशन को स्थापित करने के लिए, आपको पहचानकर्ता "{0}" के साथ मॉड्यूल स्थापित करना होगा।'
];
