<?php
/**
 * Локализация сообщений пакета компонентов GePanel.
 * 
 * Испанская локализация.
 * 
 * @link https://rosgear.ru
 * @copyright Copyright (c) 2026 RosGear
 * @license https://rosgear.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Sitio web',
    FRONTEND => 'sitio web',
    BACKEND_NAME => 'Panel de control',
    BACKEND => 'panel de control',

    /** {@see \Ge\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'El elemento que seleccionó no existe o ha sido eliminado.',
    'No data to perform action' => 'No hay datos para realizar la acción.',
    'Invalid query method' => 'Método de solicitud no válido.',
    'Invalid request format' => 'Formato de solicitud no válido.',
    'Error filling out form fields: {0}' => 'Error al completar los campos del formulario<br>{0}.',
    'Invalid argument "{0}"' => 'Argumento no válido "{0}".',
    'Could not delete record' => 'No se pudo eliminar la entrada.',
    'Could not save data' => 'No se pudieron guardar los datos.',
    'Could not add data' => 'No se pudieron agregar datos.',

     /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Información sobre el módulo "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'No hay suficiente información para la entrada especificada, es posible que el usuario de esta entrada haya sido eliminado.',

     /** {@see \Ge\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Información sobre la extensión "{0}"',

    /** {@see \Ge\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' =>     
        'De los registros seleccionados "<b>{nSelected}</b>", {deleted, plural, =1{"<b>1</b>" registro fue eliminado} few{"<b>{nDeleted}</b>" registros fueron eliminados} many{"<b>{nDeleted}</b>" registros fueron eliminados} other{"<b>{nDeleted}</b>" registros fueron eliminados}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Los registros se eliminaron parcialmente, {deleted, plural, =1{"<b>1</b>" registro fue eliminado} few{"<b>{nDeleted}</b>" registros fueron eliminados} many{"<b>{nDeleted}</b>" registros fueron eliminados} other{"<b>{nDeleted}</b>" registros fueron eliminados}}, '
        . '{skipped, plural, =1{registro omitido "<b>1</b>"} few{registros omitidos "<b>{nSkipped}</b>"} many{registros omitidos "<b>{nSkipped}</b>"} other{registros omitidos "<b>{nSkipped}</b>"}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'No se puede eliminar {n, plural, =1{registros, registro no accesible} other{"<b>{N}</b>" registros, registros no accesibles}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'No se puede eliminar {n, plural, =1{registros, registro no disponible} few{registros, registros no disponibles} many{registros, registros no disponibles} other{registros, registros no disponibles}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Éxito {n, plural, =1{"<b>1</b>" registro fue eliminado} few{"<b>{N}</b>" registros fueron eliminados} many{"<b>{N}</b>" registros fueron eliminados} other{"<b>{N}</b>" registros fueron eliminados}}.',
    'Deletion' => 'Удаление',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Los archivos se eliminaron parcialmente, {deleted, plural, =1{"<b>1</b>" archivo fue eliminado} few{"<b>{nDeleted}</b>" archivos fueron eliminados} many{"<b>{nDeleted}</b>" archivos fueron eliminados} other{"<b>{nDeleted}</b>" archivos fueron eliminados}}, '
        . '{skipped, plural, =1{archivo "<b>1</b>" omitido} few{archivo "<b>{nSkipped}</b>" omitido} many{archivo "<b>{nSkipped}</b>" omitido} other{archivo "<b>{nSkipped}</b>" omitido}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Los archivos se eliminaron parcialmente, {n, plural, =1{falta el archivo "<b>1</b>"} few{falta el archivo "<b>{N}</b>"} many{faltan los archivos "<b>{N}</b>"} other{faltan los archivos "<b>{N}</b>"}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Los directorios se eliminaron parcialmente, {deleted, plural, =1{"<b>1</b>" directorio fue eliminado} few{"<b>{nDeleted}</b>" directorios fueron eliminados} many{"<b>{nDeleted}</b>" directorios fueron eliminados} other{"<b>{nDeleted}</b>" directorios fueron eliminados}}, '
        . '{skipped, plural, =1{directorio omitido "<b>1</b>"} few{directorios omitidos "<b>{nSkipped}</b>"} many{omitidos directorios "<b>{nSkipped}</b>"} other{omitidos directorios "<b>{nSkipped}</b>"}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Los directorios se eliminaron parcialmente, {n, plural, =1{falta el directorio "<b>1</b>"} few{faltan los directorios "<b>{N}</b>"} many{faltan los directorios "<b>{N}</b>"} other{faltan los directorios "<b>{N}</b>"}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Éxito {n, plural, =1{"<b>1</b>" archivo eliminado} few{"<b>{N}</b>" archivo eliminado} many{"<b>{N}</b>" archivos eliminados} other{"<b>{N}</b>" archivos eliminados}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Éxito {n, plural, =1{"<b>1</b>" directorio eliminado} few{"<b>{N}</b>" directorios eliminados} many{"<b>{N}</b>" directorios eliminados} other{"<b>{N}</b>" directorios eliminados}}.',
    'Files and directories deleted successfully' => 'Los archivos y directorios se eliminaron correctamente.',
    'Files deleted successfully' => 'Archivos eliminados exitosamente.',
    'Directories deleted successfully' => 'Directorios eliminados exitosamente.',
    'Unable to delete files' => 'No se pueden eliminar archivos.',
    'Unable to delete directories' => 'No se pueden eliminar directorios.',

    /** {@see \Ge\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'No se puede eliminar la entrada.',
    'Record successfully deleted' => 'Entrada eliminada exitosamente.',
    'Record successfully added' => 'Entrada agregada exitosamente.',
    'Record successfully update' => 'Entrada modificada exitosamente.',
    'Unable to add record' => 'No se puede agregar la entrada.',
    'Unable to update record' => 'No se puede modificar la entrada.',
    'Update record' => 'Cambiar registros',
    'Adding record' => 'Agregar una entrada',
    'A record with the specified field values already exists' => 'Ya existe un registro con los valores de campo especificados.',

    /** {@see \Ge\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Configurando el módulo "{0}"',
    'Settings successfully changed' => 'La configuración se cambió correctamente.',

    /** {@see \Ge\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Configurando la extensión "{0}"',

    /** {@see \Ge\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'No se pudo cargar la plantilla de formulario ({0}).',

    /** {@see \Ge\Panel\Helper\Ext} */
    'Editing' => 'Edición',
    'Search' => 'Buscar',
    'Columns' => 'columnas',
    'Add' => 'Agregar',
    'Adding a new record' => 'Agregar una nueva entrada',
    'Delete' => 'Borrar',
    'Delete selected records' => 'Eliminar entradas seleccionadas',
    'Are you sure you want to delete posts' => '¿Está seguro de que desea eliminar las entradas? - <b>{0}</b> ?',
    'You need to select records' => 'Necesitas resaltar las entradas..',
    'Edit' => 'Editar',
    'Save' => 'Ahorrar',
    'Clear' => 'Claro',
    'Deleting all records' => 'Eliminar todas las entradas de una lista',
    'Are you sure you want to delete all records' => '¿Realmente desea eliminar todas las entradas?',
    'You are sure of this' => '¿Estás SEGURO de esto?',
    'Select' => 'Selecciona',
    'Selecting entries in the list' => 'Seleccionar entradas en una list',
    'Select all' => 'Seleccionar tod',
    'Remove selection' => 'Eliminar selecció',
    'Invert Selection' => 'Invertir selecció',
    'Refresh' => 'Actualiza',
    'Refresh a list of records' => 'Actualizando la lista de entrada',
    'Profiling' => 'Perfilad',
    'Record profiling' => 'Perfil de registr',
    'Show' => 'Espectáculo',
    'Hide' => 'Esconder',
    'Toggle columns' => 'Mostrar/ocultar columnas',
    'Filter' => 'Filtrar',
    'Filtering records' => 'Filtrar entradas',
    '[None]' => '[ no hay elección ]',
    'Reference' => 'Referencia',
    'This feature is under development' => '¡Esta característica está en desarrollo!',
    'Browse' => 'Elegir',
    'Entry must be selected' => '¡Debes seleccionar una entrada!',
    'Only one entry needs to be selected' => '¡Solo necesitas seleccionar una entrada!',
    'Remove window modality' => 'Eliminar modalidad de ventana',
    /** {@see \Ge\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'editar/añadir entrada',
    'User' => 'Usuario',
    'Date' => 'Fecha',
    'today' => 'hoy', 'yesterday' => 'ayer', 'during the week' => 'por semana', 'per month' => 'por mes', 'in a year' => 'para el año',

    /** {@see \Ge\Panel\View\GridView} */
    'ID' => 'El codigo',
    'Date added' => 'Fecha agregada',
    'Date edit' => 'Editar fecha',

    /** {@see \Ge\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Auditoría de registros "<span>{0}</span>"',
    'Updated record date: {0}' => 'Fecha de edición posterior: {0}',
    'Created record date: {0}' => 'Fecha en que se agregó la entrada: {0}',

    /** {@see \Ge\Panel\View\FormView} */
    'Reset'  => 'Reiniciar',
    'Cancel' => 'Cancelar',
    'Help' => 'Ayuda',
    'Update' => 'Cambiar',
    'About widget' => 'Acerca del widget',

    /** {@see \Ge\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'ACCESO NEGADO para <b>{profile}</b>, al intentar bajo la cuenta de usuario "<b>{user}</b>" ejecutar: {action} del módulo "<b>{module}</b>" el <b>{date}</b> desde la dirección IP <b>{ipaddress}</b>, sistema operativo "<b>{os}</b>" en el navegador "<b>{browser}</b>',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> bajo la cuenta de usuario "<b>{user}</b>" realizó: {action} del módulo "<b>{module}</b>" en <b>{date}</b> desde la dirección IP <b>{ipaddress}</b>, sistema operativo "<b>{os}</b>" en el navegador "<b>{browser}</b>"',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ACCESO PROHIBIDO para <b>{profile}</b> bajo la cuenta de usuario "<b>{user}</b>" realizada(a): {action} del módulo "<b>{module}</b>" c con ID "<b>{id}</b>" <b>{date}</b> en IPID <b>{ipaddress}</b>, del sistema operativo <b>{os}</b> en el navegador <b>{browser}</b>',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> bajo la cuenta de usuario "<b>{user}</b>" realizó: {action} del módulo "<b>{module}</b>" c con el identificador "<b>{id}</b>" en la dirección <b>{date}</b> <b>{ipaddress}</b> c del sistema operativo "<b>{os}</b>" en el navegador "<b>{browser}</b>"',
    '{data action}' => 'ver datos',
    '{update action}' => 'cambiar registros',
    '{add action}' => 'agregando una entrada',
    '{view action}' => 'abrir una pestaña/ventana',
    '<unknown>' => '<desconocido>',
    /** {@see \Ge\Panel\Controller\InfoController} */
    '{view info action}' => 'ver información de auditoría de registros "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\TreeController} */
    '{data tree action}' => 'ver registros de nodos de árbol "<b>{0}</b>"',
    /** {@see \Ge\Panel\Controller\SearchController} */
    '{view search action}' => 'abriendo la ventana de búsqueda de registros',
    '{data search action}' => 'ver valores de búsqueda de registros',
    '{update search action}' => 'aplicar valores establecidos para buscar registros',
    /** {@see \Ge\Panel\Controller\FormController} */
    '{data form action}' => 'ver grabación "<b>{0}</b>"',
    '{update form action}' => 'cambiar registros "<b>{0}</b>"',
    '{add form action}' => 'agregando una entrada "<b>{0}</b>"',
    '{view form action}' => 'abriendo una ventana para ver la grabación "<b>{0}</b>"',
    '{view add form action}' => 'abrir una ventana para agregar una entrada',
    /** {@see \Ge\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'abriendo la ventana de configuración',
    '{data settings action}' => 'ver configuración',
    '{update settings action}' => 'cambiar la configuración',
    /** {@see \Ge\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'abrir una pestaña/ventana para ver información',
    /** {@see \Ge\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'eliminar entradas de la lista',
    '{update grid row(s) action}' => 'cambiando la entrada de la lista "<b>{0}</b>"',
    '{clear grid row(s) action}' => 'eliminando todas las entradas de la lista',
    '{clear action}' => 'eliminando todas las entradas',
    '{expand grid row(s) action}' => 'vista ampliada de la entrada de la lista "<b>{0}</b>"',
    '{view grid row(s) action}' => 'abrir una pestaña para ver una lista de entradas',
    '{filter grid row(s) action}' => 'establecer un filtro de registro',

    /** {@see \Ge\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Información', 'Información del módulo'],
        'settings'   => ['Ajustes', 'Configuración del módulo'],
        'recordRls'  => ['Acceso a nivel de registro', 'Ver y leer solo tus entradas'],
        'writeAudit' => ['Mantener un registro de auditoría', 'Documentar las operaciones realizadas por el usuario.'],
        'viewAudit'  => ['Leer registro de auditoría', 'Ver transacciones realizadas por el usuario']
    ],

    /** {@see \Ge\Panel\Module\ModuleInstaller}, {@see \Ge\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => 'A {0} con el ID especificado le falta "{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} con el identificador especificado "{1}" es el sistema.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} con identificador "{1}" no está en la base de datos.',
    'Missing {0} configuration file "{1}"' => '{0} no tiene el archivo de configuración "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Falta el parámetro "{1}" del archivo de configuración "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'Parámetro especificado incorrectamente "{1}" del archivo de configuración "{0}".',
    '{0} with specified id "{1}" already installed' => '{0} con el ID especificado "{1}" ya está instalado.',
    '{0} with specified parameter "{1}" already installed' => '{0} con el parámetro "{1}" ya está configurado.',
    'Error adding {0} to database' => '{0} no se puede agregar a la base de datos debido a un error.',
    'The {0} with ID "{1}" is not in the registry' => '{0} con ID "{1}" no está en el registro.',
    'The {0} with ID "{1}" not found at database' => '{0} con ID "{1}" no encontrado en la base de datos.',
    'Error saving {0} to database' => '{0} no se puede guardar en la base de datos debido a un error.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} no tiene el archivo de localización "{1}" especificado en las opciones de instalación.',
    /** {@see \Ge\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Para instalar esta extensión, debes instalar el módulo con identificador "{0}".'
];
