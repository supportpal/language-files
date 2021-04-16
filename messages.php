<?php

return array(

    "deleted"               => "¡Eliminado/a!",
    "success"               => "Éxito",
    "error"                 => "Error",
    "in_progress"           => "En progreso",

    "save_order"            => "Intentando guardar el orden actualizado de los elementos",

    "show_all_results"      => "Mostrar todos los resultados &raquo;",

    "are_you_sure"          => "¿Estás seguro/a?",
    "yes_im_sure"           => "Sí, estoy seguro/a",

    "success_created"       => "¡Éxito al crear nuevo/a :item!",
    "error_created"         => "Error al intentar crear nuevo/a :item.",

    "success_deleted"       => "¡Éxito al eliminar :item!",
    "error_deleted"         => "Error al intentar eliminar :item.",

    "success_updated"       => "¡Éxito al actualizar :item!",
    "error_updated"         => "Error al intentar actualizar :item.",

    "error_notfound"        => "El/la :item con ese ID no se ha podido encontrar.",
    "error_notfound_name"   => "El/la :item con ese nombre no se ha podido encontrar.",
    "report_notfound"       => "El informe con esa categoría y nombre no se ha podido encontrar.",

    "success_ordering"      => "¡Orden actualizado con éxito!",
    "error_ordering"        => "Error al intentar actualizar el orden.",

    "error_login"           => "Error al intentar iniciar sesión.",
    "success_logout"        => "Sesión cerrada con éxito.",

    "please_correct"        => "Por favor, corrige los siguientes errores e inténtalo de nuevo.",

    "success_settings"      => "¡Ajustes actualizados con éxito!",
    "error_settings"        => "Error al intentar actualizar los ajustes.",

    "success_action"        => "¡Acción llevada a cabo con éxito!",
    "error_action"          => "Error al llevar a cabo la acción.",

    "error_embed_image"     => "Error al intentar subir la imagen.",

    "unauthorised"          => "Sin autorización",
    "not_authorised"        => "No estás autorizado para completar esta acción.",
    "not_permitted"         => "No tienes permiso para ver esta página. Si crees que esto es un error, por favor, habla con tu administrador de la aplicación.",

    "page_not_found"        => "Página no encontrada",
    "cant_find_page"        => "No podemos encontrar la página que estás buscando.",

    "please_report"         => "Por favor, si esto ha sido inesperado, repórtalo a un administrador.",

    "return_to"             => "Volver a :page.",

    "session_expired"       => "Tu sesión ha expirado. Por favor, vuelve a iniciar sesión.",
    "session_refresh"       => "Tu sesión ha expirado. Por favor, actualiza la página e inténtalo de nuevo.",

    "general_error"         => "Ha ocurrido un error. Por favor, inténtalo de nuevo.",

    "no_results"            => "Sin resultados.",

    "assign_incomplete"     => "La acción no se ha podido completar del todo. :names no se han podido asignar a algunos tickets.",

    "maintenance_mode"      => "El modo de mantenimiento está activo. Los usuarios no pueden acceder al Help Desk. Por favor, recuerda desactivar el modo de mantenimiento cuando finalice.",

    "invalid_captcha"       => "El código captcha es inválido o incorrecto. Por favor, inténtalo de nuevo.",
    "blocked_as_spam"       => "Tu petición se ha identificado como spam. Por favor, ponte en contacto con un administrador si consideras que ha sido un error.",
    "account_exists"        => "Ya existe una cuenta activa con esta dirección de correo. Por favor, inicia sesión o utiliza la opción de haber olvidado la contraseña si no puedes recordarla.",
    "error_loading_comments" => "Ha habido un problema al cargar los comentarios.",

    "invalid_auth"          => "Credenciales de autenticación inválidos.",

    "forbidden"             => "Prohibido",

    "not_logged_exception"  => "<strong>¡Ups! Algo no ha ido bien.</strong><br />Por favor, notifícaselo al administrador del sistema si el error persiste.",

    "too_many_ticket_reqs"  => "Demasiadas solicitudes de tickets hechas por :email. El límite son :max en :decay minutos.",

    "not_operator"          => "Algo no ha ido bien. El operador seleccionado no es válido. Por favor, asegúrate de que pertenece a un grupo de operadores y de que el grupo tiene un papel asociado.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>¡Ups! Algo no ha ido bien.</strong><br />Se ha producido un error al cargar los datos de la tabla. Por favor, notifícaselo al administrador del sistema si el error persiste.",

    "missing_extension"     => "Extensión ausente",
    "php_ldap_missing"      => "Se requiere la extensión php-ldap para usar la autenticación LDAP. Por favor, habilítala y actualiza la página.",
    "php_imap_missing"      => "Se requiere la extensión php-imap para utilizar Descarga de correos. Si deseas utilizar Descarga de correos, por favor, habilita la extensión y actualiza la página.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Solo se permiten conexiones SSL. Deberías actualizar tu petición a una conexión segura.",
    "queued_emails"         => "¡Éxito! - Los correos empezarán a ponerse en cola y se enviarán brevemente.",
    "error_loading_message" => "Se ha producido un error al cargar el mensaje. Por favor, inténtalo de nuevo.",
    "please_refresh"        => "Por favor, actualiza la página.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Servicio no disponible en este momento.</strong><br />Imposible conectarse a la base de datos.",
    "category_required"     => "El artículo tiene que pertenecer a una o más categorías.",
    "warning"               => "Advertencia",
    "note"                  => "Nota",
    "brand_invalid_dept"    => "La acción no se ha podido completar del todo. El departamento no ha podido actualizar algunos tickets debido a su marca.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Error al subir el archivo adjunto \":filename\", razón: \":reason\"",
    "upload_max_size"       => "El archivo debe ser más pequeño que :size",
    "upload_wrong_type"     => "No se permite ese tipo de archivo",

    /*
     * 2.3.0
     */
    "delete_record"         => "¿Eliminar :record?",
    "cannot_be_undone"      => "Esta acción no se puede deshacer.",
    "warn_delete"           => "Esto eliminará permanentemente el/la :record <strong>:name</strong> del sistema.",
    "delete_confirm"        => "Sí, eliminar :record",
    "keep_record"           => "No, mantener :record",
    "delete_relations"      => "Al eliminar el/la :record <strong>:name</strong> también se eliminará permanentemente toda esta información relacionada:",
    "please_check"          => "Debes marcar todas las casillas arriba para confirmar que comprendes el resultado de esta acción irreversible.",
    "failed_attachments"    => "Error al adjuntar algunos archivos.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Éxito - el correo se ha enviado.",
    "task_already_running"  => "Las tareas programadas se están actualmente ejecutándo automáticamente. Por favor, inténtalo de nuevo en breve.",
    "linked_account"        => "La cuenta de redes sociales se ha asociado con tu cuenta con total éxito.",
    "already_linked"        => "La cuenta de redes sociales ya está asociada con otra cuenta. Por favor, inicia sesión con la otra cuenta y desasóciala.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "¿Esto está correcto?",
    "no_revert"             => "¡No! Revertir",
    "attachment_not_found"  => "No se ha podido encontrar el archivo adjunto.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Tu cuenta ha sido cerrada. Por favor, ponte en contacto con nosotros si piensas que ha habido un error.",
    "leave_record"          => "¿Dejar :record?",
    "leave_record_warn"     => "Esto te eliminará permanentemente de :record.",
    "success_trashed"       => "Éxito al trasladar el :item a la papelera!",
    "error_trashed"         => "Error al trasladar el :item a la papelera.",
    "blocked_by_rule"       => "La petición se ha bloqueado por la regla de spam ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Tu navegador está bloqueando ventanas emergentes. Por favor, habilita las ventanas emergentes y las redirecciones en esta página web para poder utilizar la característica de vista previa.",
    "error_editing_message" => "Se ha producido un error al intentar editar este mensaje.",

);
