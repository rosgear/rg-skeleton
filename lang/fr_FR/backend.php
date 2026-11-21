<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Французская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Site web',
    FRONTEND => 'site web',
    BACKEND_NAME => 'Panneau de contrôle',
    BACKEND => 'panneau de contrôle',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'L\'élément que vous avez sélectionné n\'existe pas ou a été supprimé.',
    'No data to perform action' => 'Il n\'y a pas de données pour effectuer l\'action.',
    'Invalid query method' => 'Méthode de demande invalide.',
    'Invalid request format' => 'Format de demande invalide.',
    'Error filling out form fields: {0}' => 'Erreur lors du remplissage des champs du formulaire<br>{0}.',
    'Invalid argument "{0}"' => 'Argument invalide "{0}".',
    'Could not delete record' => 'Échec de la suppression de l\'entrée.',
    'Could not save data' => 'Échec de l\'enregistrement des données.',
    'Could not add data' => 'Échec de l\'ajout de données.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Informations sur le module "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Il n\'y a pas assez d\'informations pour l\'entrée spécifiée, l\'utilisateur de cette entrée a peut-être été supprimé.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Informations sur l\'extension "{0}"',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Parmi les enregistrements sélectionnés "<b>{nSelected}</b>", {deleted, plural, =1{"<b>1</b>" l\'enregistrement a été supprimé} few{"<b>{nDeleted}</b>" enregistrements ont été supprimés} many{"<b>{nDeleted}</b>" enregistrements ont été supprimés} other{"<b>{nDeleted}</b>" enregistrements ont été supprimés}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
       'Les enregistrements ont été partiellement supprimés, {deleted, plural, =1{"<b>1</b>" enregistrement a été supprimé} few{"<b>{nDeleted}</b>" enregistrements ont été supprimés} many{"<b>{nDeleted}</b>" enregistrements ont été supprimés} other{"<b>{nDeleted}</b>" enregistrements ont été supprimés}}, '
      . '{sauté, pluriel, =1{enregistrement "<b>1</b>" ignoré} few{enregistrements "<b>{nSkipped}</b>" ignorés} many{enregistrements "<b>{nSkipped}</b>" ignorés} other{enregistrements "<b>{nSkipped}</b>" ignorés}}nSkipped}</b>" ignorés}}"<b>{nSkipped}</b>" ignorés}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Impossible de supprimer {n, plural, =1{enregistrements, enregistrement non accessible} other{"<b>{N}</b>" enregistrements, enregistrements non accessibles}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Impossible de supprimer {n, plural, =1{enregistrements, enregistrement non disponible} few{enregistrements, enregistrements non disponibles} many{enregistrements, enregistrements non disponibles} other{enregistrements, enregistrements non disponibles}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Succès {n, plural, =1{"<b>1</b>" l\'enregistrement a été supprimé} many{"<b>{N}</b>" enregistrements ont été supprimés} other{"<b>{N}</b>" enregistrements ont été supprimés} autres{"<b>{N}</b>" enregistrements ont été supprimés}}.',
    'Deletion' => 'Suppression',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Les fichiers ont été partiellement supprimés, {deleted, plural, =1{"<b>1</b>" le fichier a été supprimé} few{"<b>{nDeleted}</b>" fichiers ont été supprimés} many{"<b>{nDeleted}</b>" fichiers ont été supprimés} other{"<b>{nDeleted}</b>" fichiers ont été supprimés}}, '
        . '{skipped, plural, =1{fichier "<b>1</b>" ignoré} few{fichier "<b>{nSkipped}</b>" ignoré} many{fichier "<b>{nSkipped}</b>" ignoré} other{fichier "<b>{nSkipped}</b>" ignoré}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Les fichiers ont été partiellement supprimés, {n, pluriel, =1{fichier "<b>1</b>" manquant} few{fichier "<b>{N}</b>" manquant} many{fichiers "<b>{N}</b>" manquants} other{fichiers "<b>{N}</b>" manquants}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Les répertoires ont été partiellement supprimés, {deleted, plural, =1{"<b>1</b>" le répertoire a été supprimé} few{"<b>{nDeleted}</b>" répertoires ont été supprimés} many{"<b>{nDeleted}</b>" répertoires ont été supprimés} other{"<b>{nDeleted}</b>" répertoires ont été supprimés}}, '
        . '{skipped, plural, =1{répertoire "<b>1</b>" ignoré} few{répertoires "<b>{nSkipped}</b>" ignorés} many{répertoires "<b>{nSkipped}</b>" ignorés} other{répertoires "<b>{nSkipped}</b>" ignorés}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Les répertoires ont été partiellement supprimés, {n, plural, =1{répertoire "<b>1</b>" manquant} few{répertoires "<b>{N}</b>" manquants} many{répertoires "<b>{N}</b>" manquants} other{répertoires "<b>{N}</b>" manquants}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Succès {n, plural, =1{"<b>1</b>" fichier supprimé} few{"<b>{N}</b>" fichier supprimé} many{"<b>{N}</b>" fichiers supprimés} other{"<b>{N}</b>" fichiers supprimés}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Succès {n, plural, =1{"<b>1</b>" répertoire supprimé} few{"<b>{N}</b>" répertoires supprimés} many{"<b>{N}</b>" répertoires supprimés} other{"<b>{N}</b>" répertoires supprimés}}.',
    'Files and directories deleted successfully' => 'Les fichiers et répertoires ont été supprimés avec succès.',
    'Files deleted successfully' => 'Fichiers supprimés avec succès.',
    'Directories deleted successfully' => 'Répertoires supprimés avec succès.',
    'Unable to delete files' => 'Impossible de supprimer des fichiers.',
    'Unable to delete directories' => 'Impossible de supprimer des répertoires.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Impossible de supprimer l\'entrée.',
    'Record successfully deleted' => 'Entrée supprimée avec succès.',
    'Record successfully added' => 'Entrée ajoutée avec succès.',
    'Record successfully update' => 'Entrée modifiée avec succès.',
    'Unable to add record' => 'Impossible d\'ajouter une entrée.',
    'Unable to update record' => 'Impossible de modifier l\'entrée.',
    'Update record' => 'Modifier les enregistrements',
    'Adding record' => 'Ajouter une entrée',
    'A record with the specified field values already exists' => 'Un enregistrement avec les valeurs de champ spécifiées existe déjà.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Configuration des modules "{0}"',
    'Settings successfully changed' => 'Les paramètres ont été modifiés avec succès.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Configuration de l\'extension "{0}"',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Impossible de charger le modèle de formulaire ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Édition',
    'Search' => 'Recherche',
    'Columns' => 'Colonnes',
    'Add' => 'Ajouter',
    'Adding a new record' => 'Ajouter une nouvelle entrée',
    'Delete' => 'Supprimer',
    'Delete selected records' => 'Supprimer les entrées sélectionnées',
    'Are you sure you want to delete posts' => 'Êtes-vous sûr de vouloir supprimer la ou les entrées? - <b>{0}</b> ?',
    'You need to select records' => 'Vous devez mettre en évidence les entrées.',
    'Edit' => 'Modifier',
    'Save' => 'Sauvegarder',
    'Clear' => 'Clair',
    'Deleting all records' => 'Supprimer toutes les entrées d\'une liste',
    'Are you sure you want to delete all records' => 'Voulez-vous vraiment supprimer toutes les entrées?',
    'You are sure of this' => 'Êtes-vous SÛR de cela?',
    'Select' => 'Sélectionner',
    'Selecting entries in the list' => 'Sélection d\'entrées dans une liste',
    'Select all' => 'Tout sélectionner',
    'Remove selection' => 'Supprimer la sélection',
    'Invert Selection' => 'Inverser la sélection',
    'Refresh' => 'Mise à jour',
    'Refresh a list of records' => 'Mise à jour de la liste des entrées',
    'Profiling' => 'Profilage',
    'Record profiling' => 'Profilage des enregistrements',
    'Show' => 'Montrer',
    'Hide' => 'Cacher',
    'Toggle columns' => 'Afficher/Masquer les colonnes',
    'Filter' => 'Filtre',
    'Filtering records' => 'Filtrage des entrées',
    '[None]' => '[ pas de choix ]',
    'Reference' => 'Référence',
    'This feature is under development' => 'Cette fonctionnalité est en cours de développement!',
    'Browse' => 'Choisir',
    'Entry must be selected' => 'Vous devez sélectionner une entrée!',
    'Only one entry needs to be selected' => 'Une seule entrée doit être sélectionnée!',
    'Remove window modality' => 'Supprimer la modalité de fenêtre',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'modifier/ajouter une entrée',
    'User' => 'Utilisateur',
    'Date' => 'Date',
    'today' => 'aujourd\'hui', 'yesterday' => 'hier', 'during the week' => 'par semaine', 'per month' => 'par mois', 'in a year' => 'pour l\'année',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Le code',
    'Date added' => 'Date d\'ajout',
    'Date edit' => 'Modifier la date',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Vérification des dossiers "<span>{0}</span>"',
    'Updated record date: {0}' => 'Date de publication: {0}',
    'Created record date: {0}' => 'Date d\'ajout du message: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Réinitialiser',
    'Cancel' => 'Annuler',
    'Help' => 'Aide',
    'Update' => 'Changement',
    'About widget' => 'À propos du widget',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'L\'ACCÈS EST REFUSÉ pour <b>{profile}</b>, lorsque l\'on tente sous le compte utilisateur «<b>{user}</b>» d\'exécuter: {action} du module «<b>{module}</b» en <b>{date}</b> à partir de l\'adresse IP <b>{ipaddress}</b>, du système d\'exploitation «<b>{os}</b>» dans le navigateur «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> sous le compte utilisateur "<b>{user}</b>" effectué: {action} du module "<b>{module}</b>" le <b>{date}</b> à l\'adresse IP <b>{ipaddress}</b> "<b>{os}</b>" dans le navigateur "<b>{browser}</b>"',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ACCÈS INTERDIT pour <b>{profile}</b> sous le compte utilisateur "<b>{user}</b>" effectué(a): {action} du module "<b>{module}</b>" c avec l\'ID "<b>{id}</b>" en <b>{adresseip}</b>, du système d\'exploitation <b>{os}</b> dans le navigateur "<b>{browser}</b>"',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> sous le compte utilisateur "<b>{user}</b>" réalisé: {action} du module "<b>{module}</b>" c avec l\'identifiant "<b>{id}</b>" dans l\'adresse <b>{ipaddress}</b> <b>{ipaddress}</b> c du système d\'exploitation "<b>{os}</b>" dans le navigateur "<b>{browser}</b>"',
    '{data action}' => 'afficher les données',
    '{update action}' => 'modifier les enregistrements',
    '{add action}' => 'ajouter une entrée',
    '{view action}' => 'ouvrir un onglet/une fenêtre',
    '<unknown>' => '<inconnu>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'afficher les informations d\'audit des enregistrements "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'affichage des enregistrements de nœuds d\'arborescence "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'ouvrir la fenêtre de recherche d\'enregistrement',
    '{data search action}' => 'afficher les valeurs de recherche d\'enregistrement',
    '{update search action}' => 'appliquer des valeurs définies pour rechercher des enregistrements',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'voir l\'enregistrement "<b>{0}</b>"',
    '{update form action}' => 'modifier les enregistrements "<b>{0}</b>"',
    '{add form action}' => 'ajouter une entrée "<b>{0}</b>"',
    '{view form action}' => 'ouvrir une fenêtre pour voir l\'enregistrement "<b>{0}</b>"',
    '{view add form action}' => 'ouvrir une fenêtre pour ajouter une entrée',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'ouvrir la fenêtre des paramètres',
    '{data settings action}' => 'afficher les paramètres',
    '{update settings action}' => 'modifier les paramètres',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'ouvrir un onglet/une fenêtre pour afficher des informations',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'supprimer une ou plusieurs entrées de la liste',
    '{update grid row(s) action}' => 'modifier l\'entrée de liste "<b>{0}</b>"',
    '{clear grid row(s) action}' => 'supprimer toutes les entrées de la liste',
    '{clear action}' => 'supprimer toutes les entrées',
    '{expand grid row(s) action}' => 'vue développée de l\'entrée de liste "<b>{0}</b>"',
    '{view grid row(s) action}' => 'ouvrir un onglet pour afficher une liste d\'entrées',
    '{filter grid row(s) action}' => 'définition d\'un filtre d\'enregistrement',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Informations', 'Informations sur les modules'],
        'settings'   => ['Paramètres', 'Paramètres du module'],
        'recordRls'  => ['Accès au niveau de l\'enregistrement', 'Afficher et lire uniquement vos propres enregistrements'],
        'writeAudit' => ['Conserver un journal d\'audit', 'Documenter les opérations effectuées par l\'utilisateur'],
        'viewAudit'  => ['Lire le journal d\'audit', 'Afficher les opérations effectuées par l\'utilisateur']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => 'Il manque "{1}" à {0} avec l\'ID spécifié.',
    'The {0} with the specified id "{1}" is a system' => '{0} avec l\'identifiant spécifié "{1}" est le système.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} avec l\'identifiant "{1}" n\'est pas dans la base de données.',
    'Missing {0} configuration file "{1}"' => '{0} n\'a pas de fichier de configuration "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Paramètre "{1}" manquant du fichier de configuration "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'Paramètre "{1}" incorrectement spécifié du fichier de configuration "{0}".',
    '{0} with specified id "{1}" already installed' => '{0} avec l\'ID spécifié "{1}" est déjà installé.',
    '{0} with specified parameter "{1}" already installed' => '{0} avec le paramètre "{1}" est déjà installé.',
    'Error adding {0} to database' => '{0} ne peut pas être ajouté à la base de données en raison d\'une erreur.',
    'The {0} with ID "{1}" is not in the registry' => '{0} avec l\'ID "{1}" n\'est pas dans le registre.',
    'The {0} with ID "{1}" not found at database' => '{0} avec l\'ID "{1}" introuvable dans la base de données.',
    'Error saving {0} to database' => '{0} ne peut pas être enregistré dans la base de données en raison d\'une erreur.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} n\'a pas le fichier de localisation "{1}" spécifié dans les options d\'installation.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Pour installer cette extension, vous devez installer le module avec l\'identifiant "{0}".'
];
