<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Польская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Strona internetowa',
    FRONTEND => 'strona internetowa',
    BACKEND_NAME => 'Panel sterowania',
    BACKEND => 'panelu sterowania',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'Wybrany element nie istnieje lub został usunięty.',
    'No data to perform action' => 'Brak danych do wykonania akcji.',
    'Invalid query method' => 'Nieprawidłowa metoda żądania.',
    'Invalid request format' => 'Nieprawidłowy format żądania.',
    'Error filling out form fields: {0}' => 'Błąd podczas wypełniania pól formularza<br>{0}.',
    'Invalid argument "{0}"' => 'Nieprawidłowy argument "{0}".',
    'Could not delete record' => 'Nie udało się usunąć wpisu.',
    'Could not save data' => 'Nie udało się zapisać danych.',
    'Could not add data' => 'Nie udało się dodać danych.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Informacje o module "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Nie ma wystarczających informacji dla określonego wpisu, użytkownik tego wpisu mógł zostać usunięty.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Informacje o rozszerzeniu "{0}"',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Z wybranych rekordów "<b>{nSelected</b>", {deleted, plural, =1{"<b>1</b>" rekord został usunięty} few{"<b>{nDeleted</b>" rekordów zostało usuniętych} many{"<b>{nDeleted</b>" rekordów zostało usuniętych} other{"<b>{nDeleted</b>" rekordy zostały usunięte}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Rekordy zostały częściowo usunięte, {deleted, plural, =1{"<b>1</b>" rekord został usunięty} few{"<b>{nDeleted</b>" rekordów zostało usuniętych} many{"<b>{nDeleted</b>" rekordy zostały usunięte} other{"<b>{nDeleted</b>" rekordy zostały usunięte}},'
        . '{pominięte, plural, =1{pominięte rekordy "<b>1</b>"} few{pominiętych rekordów "<b>{nSkipped</b>"} many{pominiętych rekordów "<b>{nSkipped</b>"} other{pominięte rekordy "<b>{nSkipped</b>"}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Nie można usunąć {n, plural, =1{rekordy, rekord niedostępny} other{"<b>{N</b>" rekordy, rekordy niedostępne}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Nie można usunąć {n, plural, =1{rekordy, rekordy niedostępne} few{rekordy, rekordy niedostępne} many{rekordy, rekordy niedostępne} other{rekordy, rekordy niedostępne}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Sukces {n, plural, =1{usunięto rekord "<b>1</b>"} few{"<b>{N}</b>" rekordów} many{"<b>{N}</b>" usunięto rekordy} other{"<b>{N}</b>" rekordy zostały usunięte}}.',
    'Deletion' => 'Usuwanie',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Pliki zostały częściowo usunięte, {deleted, plural, =1{"<b>1</b>" plik został usunięty} few{"<b>{nDeleted</b>" plików zostało usuniętych} many{"<b>{nDeleted</b>" plików zostało usuniętych} other{"<b>{nDeleted</b>" pliki zostały usunięte}},'
        . '{skipped, plural, =1{pominięty plik "<b>1</b>"} few{pominięty plik "<b>{nSkipped</b>"} many{pominiętych plików "<b>{nSkipped</b>"} other{pominięte pliki "<b>{nPominięte</b>"}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Pliki zostały częściowo usunięte, {n, plural, =1{brakujący plik "<b>1</b>"} few{brakujący plik "<b>{N</b>"} many{brakujące pliki "<b>{N</b>"} other{brakujące pliki "<b>{N}</b>"}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Katalogi zostały częściowo usunięte, {deleted, plural, =1{"<b>1</b>" katalog został usunięty} few{"<b>{nDeleted</b>" katalogów zostało usuniętych} many{"<b>{nDeleted</b>" katalogi zostały usunięte} other{"<b>{nDeleted</b>" katalogi zostały usunięte}},'
        . '{pominięte, plural, =1{pominięte katalogi "<b>1</b>"} few{pominiętych katalogów "<b>{nSkipped</b>"} many{pominiętych katalogów "<b>{nSkipped</b>"} other{pominięte katalogi "<b>{nSkipped</b>"}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Katalogi zostały częściowo usunięte, {n, plural, =1{brakujący katalog "<b>1</b>"} few{brakujących katalogów "<b>{N}</b>"} many{brakujące katalogi "<b>{N}</b>"} other{brakujące katalogi "<b>{N}</b>"}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Sukces {n, plural, =1{usunięto plik "<b>1</b>"} few{usunięto plik "<b>{N}</b>"} many{usunięto pliki "<b>{N}</b>"} other{"<b>{N}</b>" usunięto pliki}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Sukces {n, plural, =1{usunięto katalog "<b>1</b>"} few{usunięto katalogi "<b>{N}</b>"} many{usunięto katalogi "<b>{N}</b>"} other{usunięto katalogi "<b>{N}</b>"}}.',
    'Files and directories deleted successfully' => 'Pliki i katalogi zostały pomyślnie usunięte.',
    'Files deleted successfully' => 'Pliki zostały pomyślnie usunięte.',
    'Directories deleted successfully' => 'Katalogi zostały pomyślnie usunięte.',
    'Unable to delete files' => 'Nie można usunąć plików.',
    'Unable to delete directories' => 'Nie można usunąć katalogów.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Nie można usunąć wpisu.',
    'Record successfully deleted' => 'Wpis został pomyślnie usunięty.',
    'Record successfully added' => 'Wpis dodano pomyślnie.',
    'Record successfully update' => 'Wpis został pomyślnie zmodyfikowany.',
    'Unable to add record' => 'Nie można dodać wpisu.',
    'Unable to update record' => 'Nie można zmodyfikować wpisu.',
    'Update record' => 'Zmień zapisy',
    'Adding record' => 'Dodanie wpisu',
    'A record with the specified field values already exists' => 'Rekord z określonymi wartościami pól już istnieje.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Konfigurowanie modułu "{0}"',
    'Settings successfully changed' => 'Ustawienia zostały pomyślnie zmienione.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Konfigurowanie rozszerzenia "{0}"',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Nie można załadować szablonu formularza ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Redagowanie',
    'Search' => 'Szukaj',
    'Columns' => 'Kolumny',
    'Add' => 'Dodać',
    'Adding a new record' => 'Dodanie nowego wpisu',
    'Delete' => 'Usuwać',
    'Delete selected records' => 'Usuwanie wybranych wpisów',
    'Are you sure you want to delete posts' => 'Czy na pewno chcesz usunąć wpis(y) - <b>{0}</b> ?',
    'You need to select records' => 'Należy zaznaczyć wpisy.',
    'Edit' => 'Redagować',
    'Save' => 'Ratować',
    'Clear' => 'Jasne',
    'Deleting all records' => 'Usuwanie wszystkich wpisów z listy',
    'Are you sure you want to delete all records' => 'Czy na pewno chcesz usunąć wszystkie wpisy?',
    'You are sure of this' => 'Czy jesteś tego pewien??',
    'Select' => 'Wybierać',
    'Selecting entries in the list' => 'Wybieranie wpisów na liście',
    'Select all' => 'Zaznacz wszystko',
    'Remove selection' => 'Usuń zaznaczenie',
    'Invert Selection' => 'Odwróć wybór',
    'Refresh' => 'Aktualizacja',
    'Refresh a list of records' => 'Aktualizacja listy wpisów',
    'Profiling' => 'Profilowy',
    'Record profiling' => 'Profilowanie rekordów',
    'Show' => 'Pokazywać',
    'Hide' => 'Ukrywać',
    'Toggle columns' => 'Pokaż/ukryj kolumny',
    'Filter' => 'Filtr',
    'Filtering records' => 'Filtrowanie wpisów',
    '[None]' => '[ nie ma wyboru ]',
    'Reference' => 'Odniesienie',
    'This feature is under development' => 'Ta funkcja jest w fazie rozwoju!',
    'Browse' => 'Wybierać',
    'Entry must be selected' => 'Musisz wybrać wpis!',
    'Only one entry needs to be selected' => 'Musisz wybrać tylko jeden wpis!',
    'Remove window modality' => 'Usuń modalność okna',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'edytuj/dodaj wpis',
    'User' => 'Użytkownik',
    'Date' => 'Data',
    'today' => 'dzisiaj', 'yesterday' => 'wczoraj', 'during the week' => 'za tydzień', 'per month' => 'na miesiąc', 'in a year' => 'na rok',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'Kod',
    'Date added' => 'Data dodana',
    'Date edit' => 'Edytuj datę',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Audyt nagrań "<span>{0}</span>"',
    'Updated record date: {0}' => 'Data edycji posta: {0}',
    'Created record date: {0}' => 'Data datę wpisu: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Nastawić',
    'Cancel' => 'Anulować',
    'Help' => 'Pomoc',
    'Update' => 'Zmiana',
    'About widget' => 'Informacje o widżecie',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'ZABRONIONY DOSTĘP dla <b>{profile}</b>, podczas próby wykonania z konta użytkownika "<b>{user}</b>": {action} modułu "<b>{module}</b>" w <b>{date}</b> z adresu IP <b>{ipaddress}</b>, systemu operacyjnego "<b>{os}</b>" w przeglądarce "<b>{browser}</b>"',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> w ramach konta użytkownika "<b>{user}</b>" wykonał: {action} modułu "<b>{module}</b>" w <b>{date}</b> z adresu IP <b>{ipaddress}</b>, systemu operacyjnego "<b>{os}</b>" w przeglądarce "<b>{browser}</b>"',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ZABRONIONY DOSTĘP dla <b>{profile}</b> w ramach konta użytkownika "<b>{user}</b>" wykonano(a): {action} modułu "<b>{module}</b>" c o identyfikatorze "<b>{id}</b>" w <b>{date}</b> z IP <b>{ipaddress}</b>, systemu operacyjnego <b>{os}</b> w przeglądarce <b>{browser}</b>',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> w ramach konta użytkownika "<b>{user}</b>" wykonał: {action} modułu "<b>{module}</b>" c o identyfikatorze "<b>{id}</b>" w adresie  <b>{ipaddress}</b> <b>{date}</b> c systemu operacyjnego "<b>{os</b>" w przeglądarce "<b>{browser}</b>"',
    '{data action}' => 'przeglądać dane',
    '{update action}' => 'zmienić zapisy',
    '{add action}' => 'dodanie wpisu',
    '{view action}' => 'otwarcie karty/okna',
    '<unknown>' => '<nieznany>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'wyświetl informacje audytowe dla rekordu "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'przeglądanie rekordów węzłów drzewa "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'otwarcie okna wyszukiwania rekordów',
    '{data search action}' => 'przeglądaj wartości wyszukiwania rekordów',
    '{update search action}' => 'zastosowanie ustawionych wartości do wyszukiwania rekordów',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'wyświetl wpis "<b>{0}</b>"',
    '{update form action}' => 'zmiana wpisu "<b>{0}</b>"',
    '{add form action}' => 'dodanie wpisu "<b>{0}</b>"',
    '{view form action}' => 'otwieranie okna w celu wyświetlenia wpisu "<b>{0}</b>"',
    '{view add form action}' => 'otwarcie okna w celu dodania wpisu',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'otwarcie okna ustawień',
    '{data settings action}' => 'zobacz ustawienia',
    '{update settings action}' => 'zmienić ustawienia',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'otwarcie karty/okna w celu wyświetlenia informacji',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'usunięcie wpisu(ów) z listy',
    '{update grid row(s) action}' => 'zmiana wpisu na liście "<b>{0}</b>"',
    '{clear grid row(s) action}' => 'usunięcie wszystkich wpisów z listy',
    '{clear action}' => 'usunięcie wszystkich wpisów',
    '{expand grid row(s) action}' => 'rozszerzony widok wpisu listy "<b>{0}</b>"',
    '{view grid row(s) action}' => 'otwarcie zakładki umożliwiającej przeglądanie listy wpisów',
    '{filter grid row(s) action}' => 'ustawienie filtra rekordów',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Informacja', 'Informacje o module'],
        'settings'   => ['Ustawienia', 'Ustawienia modułu'],
        'recordRls'  => ['Dostęp na poziomie rekordu', 'Przeglądaj i czytaj tylko swoje wpisy'],
        'writeAudit' => ['Utrzymuj ścieżkę audytu', 'Dokumentowanie operacji wykonywanych przez użytkownika'],
        'viewAudit'  => ['Przeczytaj dziennik audytu', 'Przeglądanie transakcji wykonanych przez użytkownika']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => 'brakuje elementu {0} o podanym identyfikatorze "{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} o określonym identyfikatorze "{1}" to system.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} o identyfikatorze "{1}" nie ma w bazie danych.',
    'Missing {0} configuration file "{1}"' => '{0} nie ma pliku konfiguracyjnego "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'brakujący parametr "{1}" pliku konfiguracyjnego "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'nieprawidłowo określony parametr "{1}" pliku konfiguracyjnego "{0}".',
    '{0} with specified id "{1}" already installed' => 'aplikacja {0} o określonym identyfikatorze "{1}" jest już zainstalowana.',
    '{0} with specified parameter "{1}" already installed' => 'wartość {0} z parametrem "{1}" jest już ustawiona.',
    'Error adding {0} to database' => 'nie można dodać elementu {0} do bazy danych z powodu błędu.',
    'The {0} with ID "{1}" is not in the registry' => '{0} o identyfikatorze "{1}" nie znajduje się w rejestrze.',
    'The {0} with ID "{1}" not found at database' => 'w bazie danych nie znaleziono elementu {0} o identyfikatorze "{1}".',
    'Error saving {0} to database' => 'nie można zapisać pliku {0} w bazie danych z powodu błędu.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} nie ma pliku lokalizacyjnego "{1}" określonego w opcjach instalacji.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Aby zainstalować to rozszerzenie, musisz zainstalować moduł o identyfikatorze "{0}".'
];
