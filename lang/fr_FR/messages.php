<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Франзуская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Maison',
    'Message' => 'Message',
    'Warning' => 'Avertissement',
    'Error' => 'Erreur',
    'The module cannot be called from the administration panel' => 'Il n\'est pas possible d\'appeler le module depuis le panneau de contrôle.',
    'Edition' => 'Éditorial',
    'Widget' => 'Widget',
    'Module' => 'Module',
    'Module extension' => 'Extension de modules',
    'Extension' => 'Extension',
    'Application' => 'Application',
    'Web application' => 'Application Web',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'Impossible de déterminer l\'objet "{0}".',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'Incompatibilité de jeton CSRF',
    'CSRF token is invalid or missing' => 'Le jeton CSRF n\'est pas valide ou est manquant.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Erreur d\'accès',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Erreur de requête de base de données',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Erreur de connexion',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'Le service "{0}" n\'a pas pu démarrer. Service introuvable.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Échec de la définition du codage interne "{0}".',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Le module ne peut pas créer d\'identifiant pour le modèle de vue.',
    'Controller with name "{0}" not exists' => 'Le contrôleur nommé "{0}" n\'existe pas.',
    'You are not allowed to perform this action' => 'Vous n\'êtes pas autorisé à effectuer cette action.',
    'Action "{0}" at controller "{1}" not exists' => 'L\'action "{0}" du contrôleur "{1}" n\'existe pas.',
    'Could not define module id' => 'Impossible de déterminer l\'ID du module.',
    'No permission "{0}" to access the module' => 'Aucune autorisation "{0}" pour accéder au module.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Paramètre transmis non valide.',
    'Invalid parameter specified "{0}"' => 'Paramètre "{0}" non valide.',
    'Parameter "{0}" not specified' => 'Le paramètre "{0}" n\'est pas spécifié.',
    'Parameter passed incorrectly "{0}"' => 'Le paramètre "{0}" a été transmis de manière incorrecte.',
    'The value for parameter "{0}" is missing' => 'La valeur du paramètre "{0}" est manquante.',
    'Could not defined data model "{0}"' => 'Échec de la détermination du modèle de données "{0}".',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} avec l\'ID "{1}" n\'existe pas.',
    'File {0} "{1}" not exists' => '{0} n\'a pas de fichier "{1}".',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} n\'a pas de paramètre "{1}" à charger.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Vous devez être autorisé.',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Factory a besoin d\'un tableau associatif comme argument.',
    'Missing "adapter"' => 'Absent "adapter".',
    'Missing "adapter.name"' => 'Absent "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'Le paramètre options doit être un tableau.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Le format spécifié {0} n\'est pas valide. Formats pris en charge: {1}.',
    'The options parameter must be an array or a Traversable' => 'Le paramètre options doit être un tableau ou un Traversable.',
    'You must specify a password format' => 'Vous devez préciser le format du mot de passe.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Vous devez fournir un nom d\'utilisateur et un nom d\'authentification (domaine) pour générer le résumé.',
    'The APR1 password format is not valid' => 'Format de mot de passe invalide APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Vous devez fournir un nom d\'utilisateur et un nom d\'authentification (domaine) pour valider le résumé.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'La valeur du sel pour l\'algorithme APR1 doit comporter 8 caractères.',
    'The salt value must be a string in the alphabet' => 'La valeur du sel doit être une chaîne de l\'alphabet.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument doit être {0} ou {1} ou {2} ou {3} ou {4}, "{5}" est donné.',
    'Argument type should be in array({0})' => 'Le type d\'argument doit être dans un tableau ({1}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Les éléments renvoyés par un tableau par getExpressionData() doivent être une chaîne ou un tableau.',
    'A number of parameters was found that is not supported by this specification' => 'Un certain nombre de paramètres ont été découverts et ne sont pas pris en charge par cette spécification..',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Un certain nombre de paramètres ({0}) ont été trouvés et ne sont pas pris en charge par cette spécification..',
    'Supplied expression must be a string' => 'L\'expression fournie doit être une chaîne.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Les paramètres d\'expression doivent être un scalaire ou un tableau.',
    'The number of replacements in the expression does not match the number of parameters' => 'Le nombre de substitutions dans l\'expression ne correspond pas au nombre de paramètres.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'les valeurs ou select doivent être présentes.',
    'The key {0} was not found in this objects column list' => 'La clé {0} n\'a pas été trouvée dans cette liste de colonnes d\'objet.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} s\'attend à ce que le paramètre soit numérique, donné par {1}.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'La table doit être une chaîne, un tableau ou une instance de TableIdentifier.',
    'Can\'t get Sql string from query builder, unknow result' => 'Échec de l\'obtention de la ligne SQL du générateur de requêtes, résultat inconnu.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Cet objet SQL est destiné à fonctionner uniquement avec la table "{0}" fournie au moment de la création.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Cet objet ayant été créé à l\'aide d\'une table et/ou d\'un schéma dans le constructeur, il est en lecture seule.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table doit être une chaîne, un tableau ou une instance de TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() s\'attend à ce que $table en tant que tableau soit un tableau associatif d\'un élément.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Le quantificateur doit être DISTINCT, ALL ou un objet de plate-forme spécifique qui implémente ExpressionInterface.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Impossible de trouver le configurateur de connexion.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Impossible d\'exécuter la requête SQL, la requête est vide.',
    'Error executing database query' => 'Erreur lors de l\'exécution de la requête de base de données.',
    'Query error: {0}, {1}' => 'Erreur "{0}" lors de l\'exécution de la requête "{1}".',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Erreur de connexion au serveur de base de données. ',
    'Connection error: loading {0} character set' => 'Erreur de connexion lors du chargement du jeu de caractères "{0}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: en attente de rappel; non fourni.',
    '{0}: сallback function "{1}" not called' => '{0}: fonction de rappel "{1}" non appelée.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'Échec du décodage de JSON: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Version HTTP invalide ou non prise en charge: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Impossible de déterminer le chemin du fichier de script de connexion.',
    'Unable to determine the entry script URL' => 'Impossible de déterminer l\'URL du script de connexion.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Code de réponse d\'état non valide fourni: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'La demande n\'a pas pu être complétée en raison d\'une erreur dans le script du serveur.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Gestionnaire de journaux inconnu.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Paramètres non valides spécifiés pour la comparaison "{0}".',
    'Уou need a {0} for {1}' => 'Vous avez besoin de "{0}" pour "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Vous avez besoin d\'une version {0} non inférieure à "{1}", version actuelle: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Vous avez besoin de la version {0} "{1}" non inférieure à "{2}", version actuelle: "{3}".',
    'Used for {0} with id {1}' => 'Vous avez besoin de {0} avec l\'ID "{1}".',
    'Used for {0} with code {1}' => 'Vous avez besoin de {0} avec le code "{1}".',
    'Used for {0} with name {1}' => 'Vous avez besoin de {0} nommé "{1}".',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Le nom transmis au conteneur n\'est pas valide; doit être composé uniquement de caractères alphanumériques, de barres obliques inverses et de traits de soulignement.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Le gestionnaire fourni n\'est pas valide; doit implémenter ManagerInterfac.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Impossible d\'enregistrer le fichier de configuration.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Veuillez configurer UrlManager::scriptUrl correctement lorsque vous exécutez l\'application console.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Option "{0}" non valide.',
    'No message template exists for key "{0}"' => 'Paramètre "{0}" non valide.',
    'No property exists by the name "{0}"' => 'Il n\'y a aucune propriété nommée "{0}".',
    'Unknown type' => 'Type inconnu.',
    'Invalid query parameter' => 'Paramètre de requête invalide!',
    'File "{0}" not found' => 'Fichier "{0}" introuvable.',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Option "min" ou "max" manquante pour le validateur "Entre". L\'option doit être spécifiée.',
    'The input is not between "%min%" and "%max%", inclusively' => 'la valeur du champ doit être comprise entre les caractères "%min%" et "%max%", inclus.',
    'The input is not strictly between "%min%" and "%max%"' => 'la valeur du champ doit être comprise entre les caractères "%min%" et "%max%".',
    'The input must be less "%max%", inclusively' => 'La valeur doit être inférieure à "%max%", inclus',
    'The input must be greater "%min%", inclusively' => 'La valeur doit être supérieure à "%min%", inclus',
    'The input must be less "%max%"' => 'La valeur doit être inférieure à "%max%"',
    'The input must be greater "%min%"' => 'La valeur doit être supérieure à "%min%"',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'la valeur du champ est obligatoire et ne peut pas être videe', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Vous devez sélectionner un élément dans la liste (une valeur différente de l\'élément dans la liste n\'est pas autorisée)te n\'est pas autorisée).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Option manquante. "format" ou "message" doit être précisé',
    'You have filled in the field incorrectly' => 'Vous avez mal rempli le champ, le champ doit contenir les caractères appropriésiés.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Vous avez mal saisi le codeode.',
    'Missing option. "param" have to be given' => 'Option "param" manquante du validateur "Captcha". L\'option doit être spécifiéepécifiée.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Valeur incorrecte spécifiée',
    'You have incorrectly set the comparison condition' => 'Vous avez mal défini la condition de comparaison',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'Le champ alias "{0}" existe déjà dans les paramètres du gestionnaire de configuration du module.',
    'A field with name "{0}" already exists' => 'Un champ nommé "{0}" existe déjà dans les paramètres du gestionnaire de configuration du module.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Impossible d\'afficher le module, le modèle nommé "{0}" est introuvable.',
    'Could not render module, template filename "{0}" not exists' => 'Impossible d\'afficher le module, le nom de fichier modèle "{0}" n\'existe pas.',
    'Could not load template, file is not accessible "{0}"' => 'Impossible de charger le modèle, fichier non disponible "{0}".',
    'Could not render module, render with name "{0}" not found' => 'Échec de l\'affichage du module, le nom du module "{0}" est introuvable.',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Échec du rendu du module, modèle (nom de fichier) "{0}" introuvable ou non défini.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Échec du rendu avec PhpRenderer, le modèle "{0}" n\'existe pas.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Shortcode inconnu "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Le shortcode "{0}" n\'a pas l\'option "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'Le shortcode "{0}" n\'a pas de méthode "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Échec de la suppression du fichier "{0}"',
    'Could not perform directory deletion "{0}"' => 'Échec de la suppression du répertoire "{0}"',
    'File name "{0}" is not a directory' => 'Le nom de fichier "{0}" n\'est pas un répertoire',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Impossible de créer le répertoire "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'Impossible de copier le fichier "{0}" dans le répertoire "{1}"',
    'I managed to copy only part of the files "{0}"' => 'Il a été possible de copier seulement une partie des fichiers "{0}".',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Format de fichier invalide.',
    'The uploaded file exceeds the size set in the settings' => 'Le fichier téléchargé dépasse la taille définie dans les paramètres.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'La taille du fichier téléchargé a dépassé la taille maximale autorisée, spécifiée par la directive upload_max_filesize du fichier de configuration php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'La taille du fichier téléchargé a dépassé la valeur MAX_FILE_SIZE spécifiée dans le formulaire HTML.',
    'The uploaded file was only partially uploaded' => 'Le fichier téléchargé n\'a été que partiellement reçu.',
    'No file was uploaded' => 'Le fichier n\'a pas été téléchargé.',
    'Missing a temporary folder' => 'Le dossier temporaire est manquant.',
    'Failed to write file to disk' => 'Échec de l\'écriture du fichier sur le disque.',
    'File upload stopped by extension' => 'L\'extension PHP a arrêté le téléchargement du fichier.',
    'Unknown upload error' => 'Erreur de téléchargement inconnue.',
    'Invalid file extension' => 'Extension de fichier invalide.',
    'Missing class or extension PHP: "{0}"' => 'Classe ou extension PHP manquante: "{0}".',
    'Error uploading image file' => 'Erreur de chargement (traitement) du fichier image.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Le nom de balise n\'est pas valide ou la balise "{0}" n\'existe pas.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Le fichier n\'existe pas au chemin spécifié "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Format d\'ID de package de mise à jour non valide.',
    'The specified update package data format "{0}" does not exist' => 'Le format de données du package de mise à jour spécifié "{0}" n\'existe pas.',
    'Unable to create update package file "{0}"' => 'Impossible de créer le fichier du package de mise à jour "{0}"',
    'Unable to package update package files "{0}"' => 'Impossible de regrouper les fichiers du Service Pack "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Le paramètre du package de mise à jour "{0}" est manquant ou mal spécifié.',
    'Your app version is not compatible with the update packages version' => 'La version de votre application n\'est pas compatible avec la version du service pack.',
    'Update package with ID "{0}" is missing' => 'L\'ID du package de mise à jour "{0}" est manquant.'
];