<?php
/**
 * Локализация сообщений компонентов Ge Framework.
 * 
 * Польская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */

return [
    'Home' => 'Dom',
    'Message' => 'Wiadomość',
    'Warning' => 'Ostrzeżenie',
    'Error' => 'Błąd',
    'The module cannot be called from the administration panel' => 'Nie ma możliwości wywołania modułu z Panelu Sterowania.',
    'Edition' => 'Redakcyjny',
    'Widget' => 'Widżet',
    'Module' => 'Moduł',
    'Module extension' => 'Rozbudowa modułu',
    'Extension' => 'Rozszerzenie',
    'Application' => 'Aplikacja',
    'Web application' => 'Aplikacja internetowa',

    /** {@see \Ge} */
    'Object is not defined "{0}"' => 'Nie można określić obiektu "{0}".',

    /** {@see \Ge\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'Niezgodność tokena CSRF',
    'CSRF token is invalid or missing' => 'Token CSRF jest nieprawidłowy lub go brakuje.',
    /** {@see \Ge\Exception\ForbiddenHttpException} */
    'Access error' => 'Błąd dostępu',
    /** {@see \Ge\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Błąd zapytania do bazy danych',
    /** {@see \Ge\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Błąd połączenia',
    /** {@see \Ge\ServiceManager} */
    'Unable to call service "{0}"' => 'Nie udało się uruchomić usługi "{0}". Nie znaleziono usługi.',

    /** {@see \Ge\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Nie udało się ustawić wewnętrznego kodowania "{0}".',

    /** {@see \Ge\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Moduł nie może utworzyć identyfikatora dla modelu widoku.',
    'Controller with name "{0}" not exists' => 'Kontroler o nazwie "{0}" nie istnieje.',
    'You are not allowed to perform this action' => 'Nie możesz wykonać tej akcji.',
    'Action "{0}" at controller "{1}" not exists' => 'Akcja "{0}" kontrolera "{1}" nie istnieje.',
    'Could not define module id' => 'Nie można określić identyfikatora modułu.',
    'No permission "{0}" to access the module' => 'Brak pozwolenia "{0}" na dostęp do modułu.',

    /** {@see \Ge\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Przekazano nieprawidłowy parametr.',
    'Invalid parameter specified "{0}"' => 'Nieprawidłowy parametr "{0}".',
    'Parameter "{0}" not specified' => 'Nie określono parametru "{0}".',
    'Parameter passed incorrectly "{0}"' => 'Parametr "{0}" został przekazany niepoprawnie.',
    'The value for parameter "{0}" is missing' => 'Brak wartości parametru "{0}".',
    'Could not defined data model "{0}"' => 'Nie udało się określić modelu danych "{0}".',

    /** {@see \Ge\ModuleManager\BaseManager}, {@see \Ge\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} o identyfikatorze "{1}" nie istnieje.',
    'File {0} "{1}" not exists' => '{0} nie ma pliku "{1}".',
    /** {@see \Ge\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} nie ma parametru "{1}" do załadowaniaa.',

    /** {@see \Ge\User\User} */
    'Login required' => 'Musisz mieć autoryzację',

    /** {@see \Ge\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Fabryka potrzebuje tablicy asocjacyjnej jako argumentu',
    'Missing "adapter"' => 'Nieobecny "adapter".',
    'Missing "adapter.name"' => 'Nieobecny "adapter.name".',

    /** {@see \Ge\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'Opcje muszą być tablicą',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Określony format {0} jest nieprawidłowy. Obsługiwane formaty: {1}.',
    'The options parameter must be an array or a Traversable' => 'parametr opcji musi być tablicą lub możliwością przechodzenia.',
    'You must specify a password format' => 'Musisz określić format hasła.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Aby wygenerować podsumowanie, musisz podać nazwę użytkownika i nazwę uwierzytelnienia (dziedzina).',
    'The APR1 password format is not valid' => 'Nieprawidłowy format hasła APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Aby zweryfikować podsumowanie, musisz podać nazwę użytkownika i nazwę uwierzytelnienia (dziedzina).',
    'The salt value for APR1 algorithm must be 8 characters long' => 'Wartość soli dla algorytmu APR1 musi mieć długość 8 znaków.',
    'The salt value must be a string in the alphabet' => 'Wartość soli musi być ciągiem znaków w alfabecie.',

    /** {@see \Ge\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument musi wynosić {0} lub {1} lub {2} lub {3} lub {4}, podano "{5}".',
    'Argument type should be in array({0})' => 'Typ argumentu musi znajdować się w tablicy ({1}).',
    /** {@see \Ge\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Elementy zwrócone z tablicy przez funkcję getExpressionData() muszą być ciągiem znaków lub tablicą.',
    'A number of parameters was found that is not supported by this specification' => 'Znaleziono wiele parametrów, które nie są obsługiwane przez tę specyfikację.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Znaleziono pewną liczbę parametrów ({0}), które nie są obsługiwane przez tę specyfikację.',
    'Supplied expression must be a string' => 'Podane wyrażenie musi być ciągiem.',
    /** {@see \Ge\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Parametry wyrażenia muszą być skalarem lub tablicą.',
    'The number of replacements in the expression does not match the number of parameters' => 'Liczba podstawień w wyrażeniu nie odpowiada liczbie parametrów.',
    /** {@see \Ge\Db\Sql\Insert} */
    'values or select should be present' => 'wartości lub wybierz muszą być obecne.',
    'The key {0} was not found in this objects column list' => 'Na tej liście kolumn obiektów nie znaleziono klucza {0}.',
    /** {@see \Ge\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} oczekuje, że parametr będzie numeryczny, podany przez {1}.',
    /** {@see \Ge\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Tabela musi być ciągiem, tablicą lub instancją TableIdentifier.',
    'Can\'t get Sql string from query builder, unknow result' => 'Nie udało się pobrać wiersza SQL z narzędzia do tworzenia zapytań, nieznany wynik.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Ten obiekt Sql jest przeznaczony do pracy wyłącznie z tabelą "{0}" dostarczoną w czasie tworzenia.',
    /** {@see \Ge\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Ponieważ obiekt ten został utworzony przy użyciu tabeli i/lub schematu w konstruktorze, jest on tylko do odczytu.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table musi być ciągiem znaków, tablicą lub instancją TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() oczekuje, że $table będzie tablicą asocjacyjną zawierającą jeden element.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Kwantyfikator musi być jednym z DISTINCT, ALL lub jakimś konkretnym obiektem platformy, który implementuje ExpressionInterface.',
    /** {@see \Ge\Db\Adapter} */
    'Could find connection config' => 'Nie udało się znaleźć konfiguratora połączenia.',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Nie można wykonać zapytania SQL, zapytanie jest puste.',
    'Error executing database query' => 'Błąd podczas wykonywania zapytania do bazy danych.',
    'Query error: {0}, {1}' => 'Błąd "{0}" podczas wykonywania żądania "{1}".',
    /** {@see \Ge\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Błąd połączenia z serwerem bazy danych. ',
    'Connection error: loading {0} character set' => 'Błąd połączenia podczas ładowania zestawu znaków "{0}". ',

    /** {@see \Ge\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: oczekiwanie na oddzwonienie; nie podano.',
    '{0}: сallback function "{1}" not called' => '{0}: funkcja wywołania zwrotnego "{1}" nie została wywołana.',

    /** {@see \Ge\Helper\Json} */
    'Could not JSON decode: {0}' => 'Nie udało się zdekodować JSON: {0}.',

    /** {@see \Ge\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Nieprawidłowa lub nieobsługiwana wersja HTTP: {0}.',
    /** {@see \Ge\Http\Request} */
    'Unable to determine the entry script file path' => 'Nie można określić ścieżki pliku skryptu logowania.',
    'Unable to determine the entry script URL' => 'Nie można określić adresu URL skryptu logowania.',
    /** {@see \Ge\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Podano nieprawidłowy kod odpowiedzi na stan: "{0}".',
    /** {@see \Ge\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Żądanie nie mogło zostać zrealizowane z powodu błędu w skrypcie serwera.',

    /** {@see \Ge\Log\Log} */
    'Unknow log handler' => 'Nieznany moduł obsługi dziennika.',

    /** {@see \Ge\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Określono nieprawidłowe parametry dla porównania "{0}".',
    'Уou need a {0} for {1}' => 'Potrzebujesz "{0}" dla "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Potrzebujesz wersji {0} nie niższej niż "{1}", aktualna wersja: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Potrzebujesz wersji {0} "{1}" nie niższej niż "{2}", aktualna wersja: "{3}".',
    'Used for {0} with id {1}' => 'Potrzebujesz {0} o identyfikatorze "{1}".',
    'Used for {0} with code {1}' => 'Potrzebujesz {0} z kodem "{1}".',
    'Used for {0} with name {1}' => 'Potrzebujesz {0} o nazwie "{1}".',

    /** {@see \Ge\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Nazwa przekazana do kontenera jest nieprawidłowa; musi składać się wyłącznie ze znaków alfanumerycznych, ukośników odwrotnych i podkreśleń.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Podany menedżer jest nieprawidłowy; musi implementować ManagerInterface.',

    /** {@see \Ge\Stdlib\Serializer} */
    'Unable to save config file' => 'Nie można zapisać pliku konfiguracyjnego.',

    /** {@see \Ge\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Proszę poprawnie skonfigurować UrlManager::scriptUrl podczas uruchamiania aplikacji konsolowej.',

    /** {@see \Ge\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Nieprawidłowa opcja "{0}".',
    'No message template exists for key "{0}"' => 'Nieprawidłowy parametr "{0}".',
    'No property exists by the name "{0}"' => 'Brak właściwości o nazwie "{0}".',
    'Unknown type' => 'Nieznany typ.',
    'Invalid query parameter' => 'Nieprawidłowy parametr żądania!',
    'File "{0}" not found' => 'Nie znaleziono pliku "{0}".',
    /** {@see \Ge\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Brak opcji "min" lub "max" dla walidatora "Pomiędzy". Należy określić opcję.',
    'The input is not between "%min%" and "%max%", inclusively' => 'wartość pola musi zawierać się pomiędzy znakami "%min%" i "%max%" włącznie.',
    'The input is not strictly between "%min%" and "%max%"' => 'wartość pola musi zawierać się pomiędzy znakami "%min%" i "%max%".',
    'The input must be less "%max%", inclusively' => 'Wartość musi być mniejsza niż "%max%" włącznie',
    'The input must be greater "%min%", inclusively' => 'Wartość musi być większa niż "%min%" włącznie',
    'The input must be less "%max%"' => 'Wartość musi być mniejsza niż "%max%"',
    'The input must be greater "%min%"' => 'Wartość musi być większa niż "%min%"',
    /** {@see \Ge\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'wartość pola jest wymagana i nie może być pusta', 
    /** {@see \Ge\Validator\Select} */
    'You need to select an item from the list' => 'Należy wybrać element z listy (niedopuszczalna jest wartość inna niż element na liście).',
    /** {@see \Ge\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Brak opcji. Należy określić "format" lub "wiadomość".',
    'You have filled in the field incorrectly' => 'Źle wypełniłeś pole, pole musi zawierać odpowiednie znaki.',
    /** {@see \Ge\Validator\Captcha} */
    'You entered the code incorrectly' => 'Wpisałeś kod niepoprawnie.',
    'Missing option. "param" have to be given' => 'Brak opcji "param" w walidatorze "Captcha". Należy określić opcję.',
    /** {@see \Ge\Validator\Compare} */
    'Wrong value selected' => 'Określono nieprawidłową wartość',
    'You have incorrectly set the comparison condition' => 'Nieprawidłowo ustawiłeś warunek porównania',

    /** {@see \Ge\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'Pole aliasu "{0}" już istnieje w ustawieniach menedżera konfiguracji modułu.',
    'A field with name "{0}" already exists' => 'Pole o nazwie "{0}" już istnieje w ustawieniach menedżera konfiguracji modułu.',

    /** {@see \Ge\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Nie można wyświetlić modułu, nie znaleziono szablonu o nazwie "{0}".',
    'Could not render module, template filename "{0}" not exists' => 'Nie można wyświetlić modułu, nazwa pliku szablonu "{0}" nie istnieje.',
    'Could not load template, file is not accessible "{0}"' => 'Nie można załadować szablonu, plik niedostępny "{0}".',
    'Could not render module, render with name "{0}" not found' => 'Nie udało się wyświetlić modułu, nie znaleziono modułu o nazwie "{0}".',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Renderowanie modułu nie powiodło się, szablon (nazwa pliku) "{0}" nie został znaleziony lub jest niezdefiniowany.',

    /** {@see \Ge\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Nie udało się renderować za pomocą PhpRenderera, szablon "{0}" nie istnieje.',

    /** {@see \Ge\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Nieznany krótki kod "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Krótki kod "{0}" nie ma opcji "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'Krótki kod "{0}" nie ma metody "{1}".',

    /** {@see \Ge\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Nie udało się usunąć pliku "{0}"',
    'Could not perform directory deletion "{0}"' => 'Nie udało się usunąć katalogu "{0}"',
    'File name "{0}" is not a directory' => 'Nazwa pliku "{0}" nie jest katalogiem',

    /** {@see \Ge\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Nie można utworzyć katalogu "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'Nie można skopiować pliku "{0}" do katalogu "{1}"',
    'I managed to copy only part of the files "{0}"' => 'Można było skopiować tylko część plików "{0}".',

    /** {@see \Ge\Uploader\UploadedFile} */
    'Invalid file format' => 'Nieprawidłowy format pliku.',
    'The uploaded file exceeds the size set in the settings' => 'Przesłany plik przekracza rozmiar ustawiony w ustawieniach.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'Rozmiar przesłanego pliku przekroczył maksymalny dozwolony rozmiar, który jest określony przez dyrektywę upload_max_filesize pliku konfiguracyjnego php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'Rozmiar przesłanego pliku przekroczył wartość MAX_FILE_SIZE określoną w formularzu HTML.',
    'The uploaded file was only partially uploaded' => 'Pobrany plik został odebrany tylko częściowo.',
    'No file was uploaded' => 'Plik nie został przesłany.',
    'Missing a temporary folder' => 'Brak folderu tymczasowego.',
    'Failed to write file to disk' => 'Nie udało się zapisać pliku na dysk.',
    'File upload stopped by extension' => 'Rozszerzenie PHP zatrzymało pobieranie pliku.',
    'Unknown upload error' => 'Nieznany błąd pobierania.',
    'Invalid file extension' => 'Nieprawidłowe rozszerzenie pliku.',
    'Missing class or extension PHP: "{0}"' => 'Brakuje klasy lub rozszerzenia PHP: "{0}".',
    'Error uploading image file' => 'Błąd ładowania (przetwarzania) pliku obrazu.',

    /** {@see \Ge\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Nieprawidłowa nazwa tagu lub tag "{0}" nie istnieje.',
    /** {@see \Ge\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Plik nie istnieje w określonej ścieżce "{0}".',

    /** {@see \Ge\Updates\Package} */
    'Invalid update package identifier format' => 'Nieprawidłowy format identyfikatora pakietu aktualizacji.',
    'The specified update package data format "{0}" does not exist' => 'Określony format danych pakietu aktualizacji "{0}" nie istnieje.',
    'Unable to create update package file "{0}"' => 'Nie można utworzyć pliku pakietu aktualizacji "{0}"',
    'Unable to package update package files "{0}"' => 'Nie można spakować plików dodatku Service Pack "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Brakuje parametru pakietu aktualizacji "{0}" lub jest on nieprawidłowo określony.',
    'Your app version is not compatible with the update packages version' => 'Wersja aplikacji nie jest kompatybilna z wersją dodatku Service Pack.',
    'Update package with ID "{0}" is missing' => 'Brak identyfikatora pakietu aktualizacji "{0}".'
];