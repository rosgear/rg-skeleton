<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Итальянска локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Casa',
    'Message' => 'Messaggio',
    'Warning' => 'Avvertimento',
    'Error' => 'Errore',
    'The module cannot be called from the administration panel' => 'Non è possibile chiamare il modulo dalla Centrale.',
    'Edition' => 'Editoriale',
    'Widget' => 'Widget',
    'Module' => 'Modulo',
    'Module extension' => 'Espansione del modulo',
    'Extension' => 'Estensione',
    'Application' => 'Applicazione',
    'Web application' => 'Applicazione Web',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'Impossibile definire l\'oggetto "{0}".',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'Mancata corrispondenza del token CSRF',
    'CSRF token is invalid or missing' => 'Il token CSRF non è valido o manca.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Errore di accesso',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Errore nell\'interrogazione del database',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Errore di connessione',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'Impossibile avviare il servizio "{0}". Servizio non trovato.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Impossibile impostare la codifica interna "{0}".',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Il modulo non può creare un identificatore per il modello di visualizzazione.',
    'Controller with name "{0}" not exists' => 'Il controller denominato "{0}" non esiste.',
    'You are not allowed to perform this action' => 'Non sei autorizzato a eseguire questa azione.',
    'Action "{0}" at controller "{1}" not exists' => 'L\'azione "{0}" del controller "{1}" non esiste.',
    'Could not define module id' => 'Impossibile determinare l\'ID del modulo.',
    'No permission "{0}" to access the module' => 'Nessuna autorizzazione "{0}" per accedere al modulo.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'È stato passato un parametro non valido.',
    'Invalid parameter specified "{0}"' => 'Parametro "{0}" non valido.',
    'Parameter "{0}" not specified' => 'Il parametro "{0}" non è specificato.',
    'Parameter passed incorrectly "{0}"' => 'Il parametro "{0}" è stato passato in modo errato.',
    'The value for parameter "{0}" is missing' => 'Manca il valore del parametro "{0}".',
    'Could not defined data model "{0}"' => 'Impossibile determinare il modello dati "{0}".',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} con ID "{1}" non esiste.',
    'File {0} "{1}" not exists' => '{0} non ha il file "{1}".',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} non dispone del parametro "{1}" da caricare.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Devi essere autorizzato.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'La fabbrica necessita di un array associativo come argomento.',
    'Missing "adapter"' => 'Manca l\'"adattatore"..',
    'Missing "adapter.name"' => 'Assente "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'il parametro opzioni deve essere un array.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Il formato specificato {0} non è valido. Formati supportati: {1}.',
    'The options parameter must be an array or a Traversable' => 'Il parametro opzioni deve essere un array o Traversable.',
    'You must specify a password format' => 'È necessario specificare il formato della password.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'È necessario specificare un UserName e un AuthName (realm) per generare il digest.',
    'The APR1 password format is not valid' => 'Formato password non valido APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'È necessario fornire un UserName e un AuthName (realm) per convalidare il digest.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'Il valore salt per l\'algoritmo APR1 deve essere lungo 8 caratteri.',
    'The salt value must be a string in the alphabet' => 'Il valore salt deve essere una stringa nell\'alfabeto.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument deve essere {0} o {1} o {2} o {3} o {4}, viene fornito "{5}".',
    'Argument type should be in array({0})' => 'Il tipo di argomento deve essere nell\'array ({1}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Gli elementi restituiti da un array da getExpressionData() devono essere una stringa o un array.',
    'A number of parameters was found that is not supported by this specification' => 'Sono stati rilevati numerosi parametri che non sono supportati da questa specifica..',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Sono stati trovati numerosi parametri ({0}) che non sono supportati da questa specifica.',
    'Supplied expression must be a string' => 'L\'espressione fornita deve essere una stringa.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'I parametri di espressione devono essere uno scalare o un array.',
    'The number of replacements in the expression does not match the number of parameters' => 'Il numero di sostituzioni nell\'espressione non corrisponde al numero di parametri.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'valori o select devono essere presenti.',
    'The key {0} was not found in this objects column list' => 'Impossibile trovare la chiave {0} in questo elenco di colonne di oggetti.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} prevede che il parametro sia numerico, fornito da {1}.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'La tabella deve essere una stringa, un array o un\'istanza TableIdentifier.',
    'Can\'t get Sql string from query builder, unknow result' => 'Impossibile ottenere la riga SQL dal generatore di query, risultato sconosciuto.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Questo oggetto SQL è destinato a funzionare solo con la tabella "{0}" fornita al momento della creazione.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Poiché questo oggetto è stato creato utilizzando una tabella e/o uno schema nel costruttore, è di sola lettura.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table deve essere una stringa, un array o un\'istanza di TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() si aspetta che $table come array sia un array associativo di un elemento.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Il quantificatore deve essere uno tra DISTINCT, ALL o un oggetto specifico della piattaforma che implementa ExpressionInterface.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Impossibile trovare il configuratore di connessione.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Impossibile eseguire la query SQL, la query è vuota.',
    'Error executing database query' => 'Errore durante l\'esecuzione della query sul database.',
    'Query error: {0}, {1}' => 'Errore "{0}" durante l\'esecuzione della richiesta "{1}".',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Errore di connessione al server del database. ',
    'Connection error: loading {0} character set' => 'Errore di connessione durante il caricamento del set di caratteri "{0}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: in attesa di richiamata; non fornito.',
    '{0}: сallback function "{1}" not called' => '{0}: funzione di callback "{1}" non chiamata.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'Impossibile decodificare JSON: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Versione HTTP non valida o non supportata: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Impossibile determinare il percorso del file dello script di accesso.',
    'Unable to determine the entry script URL' => 'Impossibile determinare l\'URL dello script di accesso.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'È stato fornito un codice di risposta di stato non valido: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Non è stato possibile completare la richiesta a causa di un errore nello script del server.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Gestore di log sconosciuto.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Parametri non validi specificati per il confronto "{0}".',
    'Уou need a {0} for {1}' => 'Hai bisogno di "{0}" per "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'È necessaria la versione {0} non inferiore a "{1}", versione corrente: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'È necessaria la versione {0} "{1}" non inferiore a "{2}", versione corrente: "{3}".',
    'Used for {0} with id {1}' => 'Hai bisogno di {0} con ID "{1}".',
    'Used for {0} with code {1}' => 'Hai bisogno di {0} con il codice "{1}".',
    'Used for {0} with name {1}' => 'Hai bisogno di {0} denominato "{1}".',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Il nome passato al contenitore non è valido; deve essere composto solo da caratteri alfanumerici, barre rovesciate e trattini bassi.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Il gestore fornito non è valido; deve implementare ManagerInterface.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Impossibile salvare il file di configurazione.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Configurare correttamente UrlManager::scriptUrl quando si esegue l\'applicazione console.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Opzione sbagliata "{0}".',
    'No message template exists for key "{0}"' => 'Parametro non valido "{0}".',
    'No property exists by the name "{0}"' => 'Non c\'è nessuna proprietà nominata "{0}".',
    'Unknown type' => 'Tipo sconosciuto.',
    'Invalid query parameter' => 'Parametro di richiesta non valido!',
    'File "{0}" not found' => 'File "{0}" non trovato.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Opzione "min" o "max" mancante per il validatore "Tra". L\'opzione deve essere specificata.',
    'The input is not between "%min%" and "%max%", inclusively' => 'Il valore del campo deve essere compreso tra i caratteri "%min%" e "%max%" inclusi.',
    'The input is not strictly between "%min%" and "%max%"' => 'Il valore del campo deve essere compreso tra i caratteri "%min%" e "%max%"..',
    'The input must be less "%max%", inclusively' => 'Il valore deve essere inferiore a "%max%", compreso',
    'The input must be greater "%min%", inclusively' => 'Il valore deve essere maggiore di "%min%", compreso',
    'The input must be less "%max%"' => 'Il valore deve essere inferiore a "%max%"',
    'The input must be greater "%min%"' => 'Il valore deve essere maggiore di "%min%"',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'Il valore del campo è obbligatorio e non può essere vuoto', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'È necessario selezionare un elemento dalla lista (non è consentito un valore diverso dall\'elemento della lista).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Opzione mancante. È necessario specificare "formato" o "messaggio".',
    'You have filled in the field incorrectly' => 'Hai compilato il campo in modo errato, il campo deve contenere i caratteri appropriati.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Hai inserito il codice in modo errato.',
    'Missing option. "param" have to be given' => 'Opzione "param" mancante del validatore "Captcha". L\'opzione deve essere specificata.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'È stato specificato un valore errato',
    'You have incorrectly set the comparison condition' => 'Hai impostato la condizione di confronto in modo errato',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'Il campo alias "{0}" esiste già nelle impostazioni del gestore di configurazione del modulo.',
    'A field with name "{0}" already exists' => 'Un campo denominato "{0}" esiste già nelle impostazioni del gestore di configurazione del modulo.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Impossibile visualizzare il modulo, modello denominato "{0}" non trovato.',
    'Could not render module, template filename "{0}" not exists' => 'Impossibile visualizzare il modulo, il nome file del modello "{0}" non esiste.',
    'Could not load template, file is not accessible "{0}"' => 'Impossibile caricare il modello, file non disponibile "{0}".',
    'Could not render module, render with name "{0}" not found' => 'Impossibile visualizzare il modulo, nome modulo "{0}" non trovato.',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Rendering del modulo non riuscito, modello (nome file) "{0}" non trovato o non definito.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Impossibile eseguire il rendering con PhpRenderer, il modello "{0}" non esiste.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Codice breve "{0}" sconosciuto.',
    'Shortcode "{0}" does not have option "{1}"' => 'Lo shortcode "{0}" non ha l\'opzione "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'Lo shortcode "{0}" non ha il metodo "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Impossibile eliminare il file "{0}"',
    'Could not perform directory deletion "{0}"' => 'Impossibile eliminare la directory "{0}"',
    'File name "{0}" is not a directory' => 'Il nome file "{0}" non è una directory',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Impossibile creare la directory "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'Impossibile copiare il file "{0}" nella directory "{1}"',
    'I managed to copy only part of the files "{0}"' => 'Siamo riusciti a copiare solo una parte dei file "{0}".',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Formato file non valido.',
    'The uploaded file exceeds the size set in the settings' => 'Il file caricato supera la dimensione impostata nelle impostazioni.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'La dimensione del file caricato ha superato la dimensione massima consentita, specificata dalla direttiva upload_max_filesize del file di configurazione php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'La dimensione del file caricato supera il valore MAX_FILE_SIZE specificato nel modulo HTML.',
    'The uploaded file was only partially uploaded' => 'Il file scaricato è stato ricevuto solo parzialmente.',
    'No file was uploaded' => 'Il file non è stato caricato.',
    'Missing a temporary folder' => 'Manca la cartella temporanea.',
    'Failed to write file to disk' => 'Impossibile scrivere il file su disco.',
    'File upload stopped by extension' => 'L\'estensione PHP ha interrotto il download del file.',
    'Unknown upload error' => 'Errore di download sconosciuto.',
    'Invalid file extension' => 'Estensione file non valida.',
    'Missing class or extension PHP: "{0}"' => 'Classe o estensione PHP mancante: "{0}".',
    'Error uploading image file' => 'Errore durante il caricamento (elaborazione) del file immagine.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Il nome tag non valido o il tag "{0}" non esiste.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Il file non esiste nel percorso specificato "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Formato ID pacchetto di aggiornamento non valido.',
    'The specified update package data format "{0}" does not exist' => 'Il formato dei dati del pacchetto di aggiornamento specificato "{0}" non esiste.',
    'Unable to create update package file "{0}"' => 'Impossibile creare il file del pacchetto di aggiornamento "{0}"',
    'Unable to package update package files "{0}"' => 'Impossibile creare il pacchetto dei file del service pack "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Il parametro del pacchetto di aggiornamento "{0}" manca o è specificato in modo errato.',
    'Your app version is not compatible with the update packages version' => 'La versione dell\'applicazione non è compatibile con la versione del service pack.',
    'Update package with ID "{0}" is missing' => 'Manca l\'ID pacchetto di aggiornamento "{0}".'
];