<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Итальянская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Sito web',
    FRONTEND => 'sito web',
    BACKEND_NAME => 'Pannello di controllo',
    BACKEND => 'pannello di controllo',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'L\'elemento selezionato non esiste o è stato eliminato.',
    'No data to perform action' => 'Non sono presenti dati per eseguire l\'azione.',
    'Invalid query method' => 'Metodo di richiesta non valido.',
    'Invalid request format' => 'Formato della richiesta non valido.',
    'Error filling out form fields: {0}' => 'Errore durante la compilazione dei campi del modulo<br>{0}.',
    'Invalid argument "{0}"' => 'Argomento "{0}" non valido.',
    'Could not delete record' => 'Impossibile eliminare la voce.',
    'Could not save data' => 'Impossibile salvare i dati.',
    'Could not add data' => 'Impossibile aggiungere dati.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Informazioni sul modulo "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Non ci sono informazioni sufficienti per la voce specificata, l\'utente di questa voce potrebbe essere stato eliminato.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Informazioni sull\'estensione "{0}"',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Dalle voci selezionate «<b>{nSelected}</b>», {deleted, plural, =1{voce "<b>1</b>" eliminata} few{voce "<b>{nDeleted}</b>" eliminata} many{record "<b>{nDeleted}</b>" eliminati} other{record "<b>{nDeleted}</b>" eliminati}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Le voci sono state parzialmente cancellate, {deleted, plural, =1{voce "<b>1</b>" eliminata} few{voci "<b>{nDeleted}</b>" eliminate} many{record "<b>{nDeleted}</b>" eliminati} other{record "<b>{nDeleted}</b>" eliminati}}, '
      . '{skipped, plural, =1{voce "<b>1</b>" mancante} few{le voci "<b>{nSkipped}</b>" sono state saltate} many{le voci "<b>{nSkipped}</b>" sono state saltate} other{le voci "<b>{nSkipped}</b>" sono state saltate}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Impossibile eliminare {n, plural, =1{record, record non accesso} other{Record "<b>{N}</b>", record non accessibili}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Impossibile eliminare {n, plural, =1{registrazione, registrazione non disponibile} few{voci, voci non disponibili} many{documenti, documenti non disponibili} other{documenti, documenti non disponibili}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Con successo {n, plural, =1{voce "<b>1</b>" eliminata} few{voci "<b>{N}</b>" eliminate} many{voci "<b>{N}</b>" eliminate} other{voci "<b>{N}</b>" eliminate}}.',
    'Deletion' => 'Rimozione',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'I file sono stati parzialmente eliminati, {deleted, plural, =1{file "<b>1</b>" eliminato} few{file "<b>{nDeleted}</b>" eliminato} many{i file "<b>{nDeleted}</b>" sono stati eliminati} other{i file "<b>{nDeleted}</b>" sono stati eliminati}}, '
     . '{skipped, plural, =1{file "<b>1</b>" mancante} few{Il file "<b>{nSkipped}</b>" è stato ignorato} many{I file "<b>{nSkipped}</b>" sono stati ignorati} other{I file "<b>{nSkipped}</b>" sono stati ignorati}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'I file sono stati parzialmente eliminati, {n, plural, =1{file "<b>1</b>" mancante} few{Il file "<b>{N}</b>" viene ignoratognorato} many{I file "<b>{N}</b>" vengono ignorati} other{I file "<b>{N}</b>" vengono ignorati}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Le directory sono state parzialmente rimosse, {deleted, plural, =1{directory "<b>1</b>" eliminatainata}directory "<b>{nDeleted}</b>" eliminataliminatdirectory "<b>{nDeleted}</b>" eliminate eliminadirectory "<b>{nDeleted}</b>" eliminate>" eliminate}}, '
     . '{skipped, plural, =1{directory "<b>1</b>" mancantete} fela directory "<b>{nSkipped}</b>" è stata saltatatata saLe directory "<b>{nSkipped}</b>" vengono saltate</b>" veLe directory "<b>{nSkipped}</b>" vengono saltatenSkipped}</b>" vengono saltate}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Le directory sono state parzialmente rimosse, {n, plural, =1{directory "<b>1</b>" mancante} few{Manca la directory "<b>{N}</b>".} many{Le directory "<b>{N}</b>" vengono saltate} other{Le directory "<b>{N}</b>" vengono saltate}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Con successo {n, plural, =1{file "<b>1</b>" eliminato} few{file "<b>{N}</b>" eliminato} many{file "<b>{N}</b>" eliminati} other{file "<b>{N}</b>" eliminati}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Con successo {n, plural, =1{directory "<b>1</b>" eliminata} few{directory "<b>{N}</b>" eliminata} many{rimosse le directory "<b>{N}</b>".} other{rimosse le directory "<b>{N}</b>".}}.',
    'Files and directories deleted successfully' => 'File e directory sono stati eliminati con successo.',
    'Files deleted successfully' => 'File eliminati con successo.',
    'Directories deleted successfully' => 'Directory eliminate con successo.',
    'Unable to delete files' => 'Impossibile eliminare i file.',
    'Unable to delete directories' => 'Impossibile eliminareтCiao.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Impossibile eliminare la voce.',
    'Record successfully deleted' => 'Voce eliminata con successo.',
    'Record successfully added' => 'Voce aggiunta con successo.',
    'Record successfully update' => 'Voce modificata con successo.',
    'Unable to add record' => 'Impossibile aggiungere la voce.',
    'Unable to update record' => 'Impossibile modificare la voce.',
    'Update record' => 'Cambia record',
    'Adding record' => 'Aggiunta di una voce',
    'A record with the specified field values already exists' => 'Esiste già un record con i valori del campo specificati.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Configurazione del modulo "{0}"',
    'Settings successfully changed' => 'Le impostazioni sono state modificate con successo.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Configurazione dell\'estensione "{0}"',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Impossibile caricare il modello del modulo ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Modifica',
    'Search' => 'Ricerca',
    'Columns' => 'Colonne',
    'Add' => 'Aggiungere',
    'Adding a new record' => 'Aggiunta di una nuova voce',
    'Delete' => 'Eliminare',
    'Delete selected records' => 'Eliminazione delle voci selezionate',
    'Are you sure you want to delete posts' => 'Sei sicuro di voler eliminare le voci? - <b>{0}</b> ?',
    'You need to select records' => 'È necessario evidenziare le voci.',
    'Edit' => 'Modificare',
    'Save' => 'Salva',
    'Clear' => 'Chiaro',
    'Deleting all records' => 'Rimozione di tutte le voci da un elenco',
    'Are you sure you want to delete all records' => 'Sei sicuro di voler eliminare tutte le voci?',
    'You are sure of this' => 'Ne sei sicuro?',
    'Select' => 'Selezionare',
    'Selecting entries in the list' => 'Selezione di voci in un elenco',
    'Select all' => 'Seleziona tutto',
    'Remove selection' => 'Rimuovi la selezione',
    'Invert Selection' => 'Inverti la selezione',
    'Refresh' => 'Aggiornamento',
    'Refresh a list of records' => 'Aggiornamento dell\'elenco delle voci',
    'Profiling' => 'Profilazione',
    'Record profiling' => 'Profilazione dei record',
    'Show' => 'Spettacolo',
    'Hide' => 'Nascondere',
    'Toggle columns' => 'Mostra/Nascondi colonne',
    'Filter' => 'Filtro',
    'Filtering records' => 'Filtraggio delle voci',
    '[None]' => '[ nessuna scelta ]',
    'Reference' => 'Riferimento',
    'This feature is under development' => 'Questa funzionalità è in fase di sviluppo!',
    'Browse' => 'Scegliere',
    'Entry must be selected' => 'È necessario selezionare una voce!',
    'Only one entry needs to be selected' => 'È necessario selezionare una sola voce!',
    'Remove window modality' => 'Rimuovi la modalità finestra',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'modificare/aggiungere voce',
    'User' => 'Utente',
    'Date' => 'Data',
    'today' => 'Oggi', 'yesterday' => 'Ieri', 'during the week' => 'a settimana', 'per month' => 'al mese', 'in a year' => 'per l\'anno',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Il codice',
    'Date added' => 'Data aggiunta',
    'Date edit' => 'Modifica data',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Controllo dei registri "<span>{0}</span>"',
    'Updated record date: {0}' => 'Registra i dati di modifica: {0}',
    'Created record date: {0}' => 'Data in cui è stata aggiunta la voce: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Reset',
    'Cancel' => 'Cancellare',
    'Help' => 'Aiuto',
    'Update' => 'Modifica',
    'About widget' => 'Informazioni sul widget',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'ACCESSO NEGATO per <b>{profile}</b>, quando si tenta con l\'account utente "<b>{user}</b>" di eseguire: {action} del modulo "<b>{module}</b>" in <b>{date}</b> dall\'indirizzo IP <b>{ipaddress}</b>, sistema operativo "<b>{os}</b>" nel browser "<b>{browser}</b>"',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> con l\'account utente "<b>{user}</b>" ha eseguito: {action} del modulo "<b>{module}</b>" in <b>{date}</b> dall\'indirizzo IP <b>{ipaddress}</b>, sistema operativo "<b>{os}</b>" nel browser "<b>{browser}</b>"',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ACCESSO PROIBITO per <b>{profile}</b> con l\'account utente "<b>{user}</b>" eseguito(a): {action} del modulo "<b>{module}</b>" c con "<b>{id}</b>" <b>{ipaddress}</b>, del sistema operativo <b>{os}</b> nel browser <b>{browser}</b>',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> con l\'account utente "<b>{user}</b>" ha eseguito: {action} del modulo "<b>{module}</b>" c con l\'identificatore "<b>{id}</b>" nell\'indirizzo <b>{b>date}</b> c del sistema operativo "<b>{os}</b>" nel browser "<b>{browser}</b>"',
    '{data action}' => 'visualizzare i dati',
    '{update action}' => 'modificare i record',
    '{add action}' => 'aggiungendo una voce',
    '{view action}' => 'aprire una scheda/finestra',
    '<unknown>' => '<sconosciuto>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'visualizzare le informazioni di controllo dei record "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'visualizzazione dei record dei nodi dell\'albero "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'aprendo la finestra di ricerca dei record',
    '{data search action}' => 'visualizzare i valori di ricerca dei record',
    '{update search action}' => 'applicando valori impostati per la ricerca di record',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'visualizzare la registrazione "<b>{0}</b>"',
    '{update form action}' => 'modificare i record "<b>{0}</b>"',
    '{add form action}' => 'aggiungendo una voce "<b>{0}</b>"',
    '{view form action}' => 'aprendo una finestra per visualizzare la registrazione"<b>{0}</b>"',
    '{view add form action}' => 'aprire una finestra per aggiungere una voce',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'aprendo la finestra delle impostazioni',
    '{data settings action}' => 'visualizzare le impostazioni',
    '{update settings action}' => 'modificare le impostazioni',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'aprire una scheda/finestra per visualizzare le informazioni',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'rimuovere le voci dall\'elenco',
    '{update grid row(s) action}' => 'modificando la voce dell\'elenco "<b>{0}</b>"',
    '{clear grid row(s) action}' => 'rimuovendo tutte le voci dall\'elenco',
    '{clear action}' => 'cancellando tutte le voci',
    '{expand grid row(s) action}' => 'visualizzazione estesa della voce dell\'elenco "<b>{0}</b>"',
    '{view grid row(s) action}' => 'aprendo una scheda per visualizzare un elenco di voci',
    '{filter grid row(s) action}' => 'impostazione di un filtro di registrazione',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Informazioni', 'Informazioni sul modulo'],
        'settings'   => ['Impostazioni', 'Impostazioni del modulo'],
        'recordRls'  => ['Accesso a livello di record', 'Visualizza e leggi solo le tue voci'],
        'writeAudit' => ['Mantenere una traccia di controllo', 'Documentare le operazioni eseguite dall\'utente'],
        'viewAudit'  => ['Leggi il registro di controllo', 'Visualizzazione delle transazioni eseguite dall\'utente']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => '{0} con l\'ID specificato manca "{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} con l\'identificatore specificato "{1}" è di sistema.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} con identificatore "{1}" non è nel database.',
    'Missing {0} configuration file "{1}"' => '{0} non dispone del file di configurazione "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Parametro "{1}" mancante del file di configurazione "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'Parametro "{1}" specificato in modo errato del file di configurazione "{0}".',
    '{0} with specified id "{1}" already installed' => '{0} con l\'ID specificato "{1}" è già installato.',
    '{0} with specified parameter "{1}" already installed' => '{0} con il parametro "{1}" è già impostato.',
    'Error adding {0} to database' => 'Impossibile aggiungere {0} al database a causa di un errore.',
    'The {0} with ID "{1}" is not in the registry' => '{0} con ID "{1}" non è presente nel registro.',
    'The {0} with ID "{1}" not found at database' => '{0} con ID "{1}" non trovato nel database.',
    'Error saving {0} to database' => 'Impossibile salvare {0} nel database a causa di un errore.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} non ha il file di localizzazione "{1}" specificato nelle opzioni di installazione.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Per installare questa estensione, devi installare il modulo con identificatore "{0}".'
];
