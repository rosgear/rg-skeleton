<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Немецкая локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Webseite',
    FRONTEND => 'webseite',
    BACKEND_NAME => 'Bedienfeld',
    BACKEND => 'bedienfeld',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'Das von ihnen ausgewählte eeement existiert nicht oder wurde gelöscht.',
    'No data to perform action' => 'Es sind keine daten zum ausführen der aation vorhanden.',
    'Invalid query method' => 'Ungültige anfragemethode.',
    'Invalid request format' => 'Ungültiges anfrageformat.',
    'Error filling out form fields: {0}' => 'Fehler beim ausfüllen der formularfelder<br>{0}.',
    'Invalid argument "{0}"' => 'Ungültiges argument "{0}".',
    'Could not delete record' => 'Eintrag konnte nicht gelöscht werden.',
    'Could not save data' => 'Daten konnten nicht gespeichert werden.',
    'Could not add data' => 'Daten konnten nicht hinzugefügt werden.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Informationen zur modulin "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Für den angegebenen eintrag sind nicht genügend Informationen vorhanden. Der benutzer dieses eintrags wurde möglicherweise gelöscht.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Informationen zur erweiterung "{0}"',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Von den ausgewählten datensätzen "<b>{nSelected}</b>", {deleted, plural, =1{"<b>1</b>" datensatz wurde gelöscht} wenige{"<b>{nDeleted}</b>" datensätze wurden gelöscht} viele{"<b>{nDeleted}</b>" datensätze wurden gelöscht} andere{"<b>{nDeleted}</b>" datensätze wurden gelöscht}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Die datensätze wurden teilweise gelöscht, {deleted, plural, =1{"<b>1</b>" datensatz wurde gelöscht} few{"<b>{nDeleted}</b>" datensätze wurden gelöscht} many{"<b>{nDeleted}</b>" datensätze wurden gelöscht} other{"<b>{nDeleted}</b>" datensätze wurden gelöscht}}, '
        . '{skipped, plural, =1{skipped "<b>1</b>" datensätze} few{skipped "<b>{nSkipped}</b>" datensätze} many{skipped "<b>{nSkipped}</b>" records} other{skipped "<b>{nSkipped}</b>" records}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        '{n, plural, =1{Datensätze, Datensatz nicht zugänglich} other{"<b>{N}</b>" Datensätze, Datensätze nicht zugänglich} können nicht gelöscht werden.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        '{n, plural, =1{Datensätze, Datensatz nicht verfügbar} konnte nicht gelöscht werden few{Datensätze, Datensätze nicht verfügbar} many{Datensätze, Datensätze nicht verfügbar} other{Datensätze, Datensätze nicht verfügbar}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Erfolgreich {n, plural, =1{"<b>1</b>" datensatz wurde gelöscht} few{"<b>{N}</b>" datensätze wurden gelöscht} many{"<b>{N}</b>" datensätze wurden gelöscht} other{"<b>{N}</b>" datensätze wurden gelöscht}}.',
    'Deletion' => 'Entfernung',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Die dateien wurden teilweise gelöscht, {deleted, plural, =1{"<b>1</b>" datei wurde gelöscht} few{"<b>{nDeleted}</b>" dateien wurden gelöscht} many{"<b>{nDeleted}</b>" dateien wurden gelöscht} other{"<b>{nDeleted}</b>" dateien wurden gelöscht}}, '
        . '{skipped, plural, =1{skipped "<b>1</b>" file} few{skipped "<b>{nSkipped}</b>" file} many{skipped "<b>{nSkipped}</b>" file} other{skipped "<b>{nSkipped}</b>" file}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Die Dateien wurden teilweise gelöscht, {n, plural, =1{fehlende "<b>1</b>"-datei} few{fehlende "<b>{N}</b>"-datei} many{fehlende "<b>{N}</b>"-dateien} other{fehlende "<b>{N}</b>"-dateien}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Verzeichnisse wurden teilweise gelöscht, {deleted, plural, =1{"<b>1</b>"-verzeichnis wurde gelöscht} few{"<b>{nDeleted}</b>"-verzeichnisse wurden gelöscht} many{"<b>{nDeleted}</b>"-verzeichnisse wurden gelöscht} other{"<b>{nDeleted}</b>"-verzeichnisse wurden gelöscht}}, '
        . '{skipped, plural, =1{übersprungenes verzeichnis "<b>1</b>"} few{übersprungene verzeichnisse "<b>{nSkipped}</b>"} many{übersprungene verzeichnisse "<b>{nSkipped}</b>"} other{übersprungene verzeichnisse "<b>{nSkipped}</b>"}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Verzeichnisse wurden teilweise entfernt, {n, plural, =1{fehlendes "<b>1</b>"-verzeichnis} few{fehlende "<b>{N}</b>"-verzeichnisse} many{fehlende "<b>{N}</b>"-Verzeichnisse} other{fehlende "<b>{N}</b>"-verzeichnisse}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Erfolgreich {n, plural, =1{"<b>1</b>" datei gelöscht} few{"<b>{N}</b>" datei gelöscht} many{"<b>{N}</b>" dateien gelöscht} other{"<b>{N}</b>" dateien gelöscht}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Erfolgreich {n, plural, =1{"<b>1</b>" verzeichnis gelöscht} few{"<b>{N}</b>" verzeichnisse gelöscht} many{"<b>{N}</b>" verzeichnisse gelöscht} other{"<b>{N}</b>" verzeichnisse gelöscht}}.',
    'Files and directories deleted successfully' => 'Dateien und verzeichnisse wurden erfolgreich gelöscht.',
    'Files deleted successfully' => 'Dateien erfolgreich gelöscht.',
    'Directories deleted successfully' => 'Verzeichnisse erfolgreich gelöscht.',
    'Unable to delete files' => 'Dateien können nicht gelöscht werden.',
    'Unable to delete directories' => 'Verzeichnisse können nicht gelöscht werden.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Eintrag konnte nicht gelöscht werden.',
    'Record successfully deleted' => 'Eintrag erfolgreich gelöscht.',
    'Record successfully added' => 'Eintrag erfolgreich hinzugefügt.',
    'Record successfully update' => 'Eintrag erfolgreich geändert.',
    'Unable to add record' => 'Eintrag konnte nicht hinzugefügt werden.',
    'Unable to update record' => 'Eintrag konnte nicht geändert werden.',
    'Update record' => 'Datensätze ändern',
    'Adding record' => 'Eintrag hinzufügen',
    'A record with the specified field values already exists' => 'Ein Datensatz mit den angegebenen feldwerten ist bereits vorhanden.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Modul "{0}" wird konfiguriert',
    'Settings successfully changed' => 'Einstellungen erfolgreich geändert.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Erweiterung "{0}" wird eingerichtet',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Formularvorlage ({0}) konnte nicht geladen werden.',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Bearbeitung',
    'Search' => 'Suchenn',
    'Columns' => 'Spalten',
    'Add' => 'Hinzufügenen',
    'Adding a new record' => 'Einen neuen eintrag hinzufügenzufügen',
    'Delete' => 'Löschen',
    'Delete selected records' => 'Ausgewählte einträge löschenn',
    'Are you sure you want to delete posts' => 'Sind sie sicher, dass sie den/die eintrag(e) löschen möchteng(e) löschen möchten - <b>{0}</b>?',
    'You need to select records' => 'Sie müssen die einträge markieren.',
    'Edit' => 'Bearbeiteniten',
    'Save' => 'Speichern',
    'Clear' => 'Klar', 
    'Deleting all records' => 'Alle einträge aus einer liste entfernenntfernen',
    'Are you sure you want to delete all records' => 'Sind sie sicher, dass Sie alle einträge löschen möchten?',
    'You are sure of this' => 'Sind sie sich dessen SICHER?',
    'Select' => 'Wählen',
    'Selecting entries in the list' => 'Auswählen von einträgen in einer liste',
    'Select all' => 'Alles auswählen',
    'Remove selection' => 'Auswahl entfernen',
    'Invert Selection' => 'Auswahl umkehren',
    'Refresh' => 'Aktualisieren',
    'Refresh a list of records' => 'Aktualisierung der eintragsliste',
    'Profiling' => 'Profilierung',
    'Record profiling' => 'Profilerstellung aufzeichnen',
    'Show' => 'Zeigen',
    'Hide' => 'Verstecken',
    'Toggle columns' => 'Spalten ein-/ausblenden',
    'Filter' => 'Filter',
    'Filtering records' => 'Einträge filtern',
    '[None]' => '[ keine wahl ]',
    'Reference' => 'Referenz',
    'This feature is under development' => 'Diese funktion befindet sich in der entwicklung!',
    'Browse' => 'Wählen',
    'Entry must be selected' => 'Sie müssen einen eintrag auswählen!',
    'Only one entry needs to be selected' => 'Es muss nur ein eintrag ausgewählt werden!',
    'Remove window modality' => 'Fenstermodalität entfernen',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'Eintrag bearbeiten/hinzufügen',
    'User' => 'Benutzer',
    'Date' => 'Datum',
    'today' => 'heute', 'yesterday' => 'gestern', 'during the week' => 'pro woche', 'per month' => 'pro monat', 'in a year' => 'für das jahr',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Code',
    'Date added' => 'Datum hinzugefügt',
    'Date edit' => 'Datum bearbeiten',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Aufzeichnungsprüfung "<span>{0}</span>"',
    'Updated record date: {0}' => 'Bearbeitungsdaten aufzeichnen: {0}',
    'Created record date: {0}' => 'Datum, an dem der Eintrag hinzugefügt wurde: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Zurücksetzen',
    'Cancel' => 'Stornieren',
    'Help' => 'Helfen',
    'Update' => 'Ändern',
    'About widget' => 'Über das widget',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'Der zugriff für <b>{profile}</b> wird verweigert, wenn unter dem benutzerkonto "<b>{user}</b>" versucht wird, folgendes auszuführen: {action} des moduls "<b>{module}</b>" in <b>{date}</b> von der IP-Adresse <b>{ipaddress}</b>, betriebssystem "<b>{os}</b>" im browser "<b>{browser}</b>"',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> unter dem benutzerkonto "<b>{user}</b>" durchgeführt: {action} des moduls "<b>{module}</b>" im <b>{date}</b> von der IP-Adresse <b>{ipaddress}</b>, betriebssystem "<b>{os}</b>" im Browser "<b>{browser}</b>"',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ZUGRIFF VERBOTEN für <b>{profile}</b> unter dem benutzerkonto "<b>{user}</b>" durchgeführt(a): {action} des Moduls "<b>{module}</b>" c mit ID "<b>{id}</b>" in  <b>{ipaddress}</b>, des betriebssystems <b>{os}</b> im browser <b>{browser}</b>',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> unter dem benutzerkonto "<b>{user}</b>" durchgeführt: {action} des moduls "<b>{module}</b>" c mit der kennung "<b>{id}</b>" in der <b>{ip}</b> IP-adresse <b>{date}</b> c des betriebssystems "<b>{os}</b>" im Browser "<b>{browser}</b>"',
    '{data action}' => 'daten ansehen',
    '{update action}' => 'datensätze ändern',
    '{add action}' => 'einen eintrag hinzufügen',
    '{view action}' => 'Öffnen eines tabs/fensters',
    '<unknown>' => '<unbekannt>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'prüfinformationen für datensatz "<b>{0}</b>" anzeigen',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'baumknotendatensätze "<b>{0}</b>" anzeigen',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'offnen des datensatzsuchfensters',
    '{data search action}' => 'datensatzsuchwerte anzeigen',
    '{update search action}' => 'anwenden festgelegter Werte, um nach datensätzen zu suchen',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'eintrag "<b>{0}</b>" anzeigen',
    '{update form action}' => 'eintrag "<b>{0}</b>" ändern',
    '{add form action}' => 'eintrag "<b>{0}</b>" hinzufügen',
    '{view form action}' => 'offnen eines fensters zur anzeige des eintrags "<b>{0}</b>"',
    '{view add form action}' => 'offnen eines Fensters zum hinzufügen eines eintrags',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'offnen des einstellungsfensters',
    '{data settings action}' => 'einstellungen anzeigen',
    '{update settings action}' => 'einstellungen ändern',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'offnen einer registerkarte/eines Fensters, um informationen anzuzeigen',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'eintrag(e) aus der liste entfernen',
    '{update grid row(s) action}' => 'andern des listeneintrags "<b>{0}</b>"',
    '{clear grid row(s) action}' => 'entfernen aller einträge aus der liste',
    '{clear action}' => 'löschen aller einträge',
    '{expand grid row(s) action}' => 'erweiterte ansicht des listeneintrags "<b>{0}</b>"',
    '{view grid row(s) action}' => 'offnen einer registerkarte, um eine liste der einträge anzuzeigen',
    '{filter grid row(s) action}' => 'festlegen eines datensatzfilters',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Information', 'Modulinformationen'],
        'settings'   => ['Einstellungen', 'Moduleinstellungen'],
        'recordRls'  => ['Zugriff auf Datensatzebene', 'Sehen und lesen sie nur ihre einträge'],
        'writeAudit' => ['Führen Sie einen Prüfpfad', 'Dokumentation der vom benutzer durchgeführten vorgänge'],
        'viewAudit'  => ['Audit-Protokoll lesen', 'Anzeigen der vom benutzer durchgeführten transaktionen']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => '{0} mit der angegebenen ID fehlt "{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} mit der angegebenen Kennung "{1}" ist system.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} mit der kennung "{1}" ist nicht in der datenbank.',
    'Missing {0} configuration file "{1}"' => '{0} verfügt nicht über die konfigurationsdatei "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Fehlender parameter "{1}" der konfigurationsdatei "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'Falsch angegebener parameter "{1}" der konfigurationsdatei "{0}".',
    '{0} with specified id "{1}" already installed' => '{0} mit der angegebenen ID "{1}" ist bereits installiert.',
    '{0} with specified parameter "{1}" already installed' => '{0} mit parameter "{1}" ist bereits festgelegt.',
    'Error adding {0} to database' => '{0} kann aufgrund eines fehlers nicht zur datenbank hinzugefügt werden.',
    'The {0} with ID "{1}" is not in the registry' => '{0} mit der ID "{1}" ist nicht in der registrierung.',
    'The {0} with ID "{1}" not found at database' => '{0} mit der ID "{1}" wurde in der datenbank nicht gefunden.',
    'Error saving {0} to database' => '{0} kann aufgrund eines fehlers nicht in der datenbank gespeichert werden.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => 'Für {0} ist in den installationsoptionen nicht die lokalisierungsdatei "{1}" angegeben.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Um diese erweiterung zu installieren, müssen sie das modul mit der kennung "{0}" installieren.'
];
