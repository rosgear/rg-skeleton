<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Немецкая локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Heim',
    'Message' => 'Nachricht',
    'Warning' => 'Warnung',
    'Error' => 'Fehler',
    'The module cannot be called from the administration panel' => 'Es ist nicht möglich, das modul über die systemsteuerung aufzurufen.',
    'Edition' => 'Leitartikel',
    'Widget' => 'Widget',
    'Module' => 'Modul',
    'Module extension' => 'Modulerweiterung',
    'Extension' => 'Verlängerung',
    'Application' => 'Anwendung',
    'Web application' => 'Webanwendung',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'Objekt kann nicht definiert werden "{0}".',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'CSRF-Token stimmt nicht überein',
    'CSRF token is invalid or missing' => 'Das CSRF-Token ist ungültig oder fehlt.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Zugriffsfehler',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Fehler bei der datenbankabfrage',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Verbindungsfehler',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'Dienst "{0}" konnte nicht gestartet werden. Dienst nicht gefunden.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Die interne Codierung "{0}" konnte nicht festgelegt werden.',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Das Modul kann keine Kennung für das ansichtsmodell erstellen.',
    'Controller with name "{0}" not exists' => 'Der Controller mit dem Namen "{0}" existiert nicht.',
    'You are not allowed to perform this action' => 'Sie dürfen diese aktion nicht ausführen.',
    'Action "{0}" at controller "{1}" not exists' => 'Aktion "{0}" von controller "{1}" existiert nicht.',
    'Could not define module id' => 'Modul-ID konnte nicht ermittelt werden.',
    'No permission "{0}" to access the module' => 'Keine Berechtigung "{0}" für den zugriff auf das modul.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Ungültiger parameter übergeben.',
    'Invalid parameter specified "{0}"' => 'Ungültiger parameter "{0}".',
    'Parameter "{0}" not specified' => 'Der Parameter "{0}" ist nicht angegeben.',
    'Parameter passed incorrectly "{0}"' => 'Der Parameter "{0}" wurde falsch übergeben.',
    'The value for parameter "{0}" is missing' => 'Der parameterwert "{0}" fehlt.',
    'Could not defined data model "{0}"' => 'Datenmodell "{0}" konnte nicht ermittelt werden.',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} mit der ID "{1}" existiert nicht.',
    'File {0} "{1}" not exists' => '{0} hat die datei "{1}" nicht.',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} verfügt nicht über den zu ladenden parameter "{1}".',

    /** {@see \Ge\User\User} */
    'Login required' => 'Sie müssen autorisier se.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Factory benötigt ein assoziatives array als arume.',
    'Missing "adapter"' => 'Abese "adapter".',
    'Missing "adapter.name"' => 'Abese "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'Der optionsparameter muss ein array sein.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Das angegebene format {0} ist ungültig. Unterstützte Formate: {1}.',
    'The options parameter must be an array or a Traversable' => 'Der Optionsparameter muss ein array oder Traversable sein.',
    'You must specify a password format' => 'Sie müssen das passwortformat angeben.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Sie müssen einen benutzernamen und einen AuthNamen (Bereich) angeben, um den Digest zu generieren.',
    'The APR1 password format is not valid' => 'Ungültiges Passwortformat APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Sie müssen einen Benutzernamen und einen AuthNamen (Bereich) angeben, um den Digest zu validieren.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'Der Salt-Wert für den APR1-Algorithmus muss 8 Zeichen lang sein.',
    'The salt value must be a string in the alphabet' => 'Der Salt-Wert muss eine zeichenfolge im alphabet sein.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument muss {0} oder {1} oder {2} oder {3} oder {4} sein, "{5}" wird angegeben.',
    'Argument type should be in array({0})' => 'Der argumenttyp muss im array ({1}) liegen.',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Die von getExpressionData() aus einem Array zurückgegebenen Elemente müssen ein String oder ein array sein.',
    'A number of parameters was found that is not supported by this specification' => 'Es wurden eine Reihe von Parametern gefunden, die von dieser Spezifikation nicht unterstützt werden.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Es wurden eine Reihe von Parametern ({0}) gefunden, die von dieser spezifikation nicht unterstützt werden.',
    'Supplied expression must be a string' => 'Der angegebene Ausdruck muss eine zeichenfolge sein.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Ausdrucksparameter müssen ein skalar oder ein array sein.',
    'The number of replacements in the expression does not match the number of parameters' => 'Die Anzahl der ersetzungen im ausdruck entspricht nicht der anzahl der parameter.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'werte oder auswahl müssen vorhanden sein.',
    'The key {0} was not found in this objects column list' => 'Der schlüssel {0} wurde in dieser Liste von objektspalten nicht gefunden.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} erwartet, dass der Parameter numerisch ist, gegeben durch {1}.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Die Tabelle muss eine zeichenfolge, ein array oder eine TableIdentifier-Instanz sein.',
    'Can\'t get Sql string from query builder, unknow result' => 'SQL-Zeile konnte nicht vom abfrage-builder abgerufen werden, unbekanntes ergebnis.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Dieses SQL-objekt soll nur mit der zum Zeitpunkt der erstellung bereitgestellten tabelle "{0}" funktionieren.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Da dieses objekt mithilfe einer tabelle und/oder eines schemas im Konstruktor erstellt wurde, ist es schreibgeschützt.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table muss ein String, ein array oder eine tableIdentifier-instanz sein.',
    'from() expects $table as an array is a single element associative array' => 'from() erwartet, dass $table als Array ein assoziatives Array aus einem Element ist.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Der Quantifizierer muss DISTINCT, ALL oder ein bestimmtes Plattformobjekt sein, das ExpressionInterface implementiert.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Verbindungskonfigurator konnte nicht gefunden werden.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Die SQL-Abfrage kann nicht ausgeführt werden, die abfrage ist leer.',
    'Error executing database query' => 'Fehler beim ausführen der datenbankabfrage.',
    'Query error: {0}, {1}' => 'Fehler "{0}" beim ausführen der anfrage "{1}".',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Fehler beim Herstellen der verbindung zum datenbankserver. ',
    'Connection error: loading {0} character set' => 'Verbindungsfehler beim laden des zeichensatzes "{0}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: Warte auf Rückruf; nicht vorgesehen.',
    '{0}: сallback function "{1}" not called' => '{0}: Rückruffunktion "{1}" nicht aufgerufen.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'JSON konnte nicht dekodiert werden: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Ungültige oder nicht unterstützte HTTP-Version: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Der dateipfad für das anmeldeskript konnte nicht ermittelt werden.',
    'Unable to determine the entry script URL' => 'Die URL des anmeldeskripts konnte nicht ermittelt werden.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Ungültiger statusantwortcode angegeben: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Die Anfrage konnte aufgrund eines fehlers im serverskript nicht abgeschlossen werden.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Unbekannter protokollhandler.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Für den vergleich "{0}" wurden ungültige parameter angegeben..',
    'Уou need a {0} for {1}' => 'Sie benötigen "{0}" für "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Sie benötigen {0} version nicht niedriger als "{1}", aktuelle Version: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Sie benötigen version {0} "{1}", nicht niedriger als "{2}", aktuelle version: "{3}".',
    'Used for {0} with id {1}' => 'Sie benötigen {0} mit der ID "{1}".',
    'Used for {0} with code {1}' => 'Sie benötigen {0} mit dem code "{1}".',
    'Used for {0} with name {1}' => 'Sie benötigen {0} mit dem namen "{1}".',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Der an den container übergebene Name ist ungültig. darf nur aus alphanumerischen zeichen, backslashes und unterstrichen bestehen.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Der angegebene Manager ist ungültig; muss ManagerInterface implementieren.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Konfigurationsdatei kann nicht gespeichert werden.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Bitte konfigurieren Sie UrlManager::scriptUrl korrekt, wenn Sie die konsolenanwendung ausführen.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Ungültige Option "{0}".',
    'No message template exists for key "{0}"' => 'Ungültiger parameter "{0}".',
    'No property exists by the name "{0}"' => 'Es gibt keine eigenschaft mit dem namen "{0}".',
    'Unknown type' => 'Unbekannter typ.',
    'Invalid query parameter' => 'Ungültiger Anforderungsparameter!',
    'File "{0}" not found' => 'Datei "{0}" nicht gefundenfundenfunden.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Fehlende option "min" oder "max" für den validator "Between". Option muss angegeben werdeneben werden.',
    'The input is not between "%min%" and "%max%", inclusively' => 'der Feldwert muss zwischen den Zeichen "%min%" und "%max%" (einschließlich) liegen.',
    'The input is not strictly between "%min%" and "%max%"' => 'der Feldwert muss zwischen den Zeichen "%min%" und "%max%" liegen.',
    'The input must be less "%max%", inclusively' => 'Der Wert muss kleiner als "%max%" (einschließlich) sein',
    'The input must be greater "%min%", inclusively' => 'Der Wert muss größer als "%min%" (einschließlich) sein',
    'The input must be less "%max%"' => 'Der Wert muss kleiner als "%max%" sein.',
    'The input must be greater "%min%"' => 'Der Wert muss größer als "%min%" sein.',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'der Feldwert ist erforderlich und darf nicht leer sein', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Sie müssen ein Element aus der liste auswählen (ein anderer Wert als das Element in der Liste ist nicht zulässig).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Option fehlt. Es muss "Format" oder "Nachricht" angegeben werden.',
    'You have filled in the field incorrectly' => 'Sie haben das Feld falsch ausgefüllt, das Feld muss die entsprechenden Zeichen enthalten.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Sie haben den Code falsch eingegeben.',
    'Missing option. "param" have to be given' => 'Fehlende "param"-Option des "Captcha"-Validators. Option muss angegeben werden.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Falscher wert angegeben',
    'You have incorrectly set the comparison condition' => 'Sie haben die vergleichsbedingung falsch eingestellt',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'Das Aliasfeld "{0}" ist bereits in den einstellungen des modulkonfigurationsmanagers vorhanden.',
    'A field with name "{0}" already exists' => 'In den Einstellungen des Modulkonfigurationsmanagers ist bereits ein feld mit dem Namen "{0}" vorhanden.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Modul konnte nicht angezeigt werden, vorlage mit dem Namen "{0}" nicht gefunden.',
    'Could not render module, template filename "{0}" not exists' => 'Modul konnte nicht angezeigt werden, vorlagendateiname "{0}" existiert nicht.',
    'Could not load template, file is not accessible "{0}"' => 'Vorlage konnte nicht geladen werden, datei nicht verfügbar "{0}".',
    'Could not render module, render with name "{0}" not found' => 'Modul konnte nicht angezeigt werden, modulname "{0}" nicht gefunden.',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Das Rendern des Moduls ist fehlgeschlagen, die vorlage (Dateiname) "{0}" wurde nicht gefunden oder ist nicht definiert.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Das rendern mit PhpRenderer ist fehlgeschlagen, vorlage "{0}" existiert nicht.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Unbekannter shortcode "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Shortcode "{0}" hat keine option "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'Der Shortcode "{0}" verfügt nicht über die methode "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Datei "{0}" konnte nicht gelöscht werden',
    'Could not perform directory deletion "{0}"' => 'Das verzeichnis "{0}" konnte nicht gelöscht werden.',
    'File name "{0}" is not a directory' => 'Dateiname "{0}" ist kein verzeichnis',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Das verzeichnis "{0}" kann nicht erstellt werden. erstellt werden.',
    'Unable to copy file "{0}" to directory "{1}"' => 'Die datei "{0}" kann nicht in das verzeichnis "{1}" kopiert werden.werden.',
    'I managed to copy only part of the files "{0}"' => 'Es konnte nur ein Teil der Dateien "{0}" kopiert werden.ert werden.',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Ungültiges Dateiformat.',
    'The uploaded file exceeds the size set in the settings' => 'Die hochgeladene datei überschreitet die in den einstellungen festgelegte Größe.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'Die Größe der hochgeladenen datei hat die maximal zulässige Größe überschritten, die in der Anweisung "upload_max_filesize" der konfigurationsdatei php.ini angegeben ist.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'Die hochgeladene dateigröße hat den im HTML-Formular angegebenen Wert MAX_FILE_SIZE überschritten.',
    'The uploaded file was only partially uploaded' => 'Die heruntergeladene datei wurde nur teilweise empfangen.',
    'No file was uploaded' => 'Die Datei wurde nicht hochgeladen.',
    'Missing a temporary folder' => 'Der temp-ordner fehlt.',
    'Failed to write file to disk' => 'Die datei konnte nicht auf die festplatte geschrieben werden.',
    'File upload stopped by extension' => 'Die PHP-Erweiterung hat das herunterladen der datei gestoppt.',
    'Unknown upload error' => 'Unbekannter downloadfehler.',
    'Invalid file extension' => 'Ungültige dateierweiterung.',
    'Missing class or extension PHP: "{0}"' => 'Fehlende PHP-Klasse oder erweiterung: "{0}".',
    'Error uploading image file' => 'Fehler beim laden (verarbeiten) der bilddatei.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Ungültiger tag-name oder tag "{0}" existiert nicht.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Die datei existiert nicht im angegebenen pfad "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Ungültiges update-paket-id-format.',
    'The specified update package data format "{0}" does not exist' => 'Das angegebene updatepaket-datenformat "{0}" existiert nicht.',
    'Unable to create update package file "{0}"' => 'Die Update-Paketdatei "{0}" kann nicht erstellt werden',
    'Unable to package update package files "{0}"' => 'Die Service Pack-Dateien "{0}" können nicht gepackt werden',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Der update-paketparameter "{0}" fehlt oder ist falsch angegeben.',
    'Your app version is not compatible with the update packages version' => 'Ihre anwendungsversion ist nicht mit der service pack-version kompatibel.',
    'Update package with ID "{0}" is missing' => 'Die aktualisierungspaket-ID "{0}" fehlt.'
];