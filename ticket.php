<?php

return array(

    "feedback_question"         => "Preguntas que mostrar al usuario.",
    "open_new"                  => "Abrir nuevo Ticket",
    "select_department"         => "Seleccionar un departamento",
    "select_department_desc"    => "Por favor, selecciona el departamento relevante para tu incidencia.",
    "no_departments"            => "No se han encontrado departamentos.",
    "department_user_details"   => "Detalles del departamento y el usuario",
    "enter_your_details"        => "Introduce tus datos",
    "enter_ticket_details"      => "Introducir datos",
    "enter_subject_message"     => "Introducir asunto y mensaje",
    "invalid_user"              => "Por favor, asegúrate que los datos del usuario que has introducido sean válidos para continuar.",

    "registered_users"          => "Solo usuarios registrados",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Asunto",
    "no_subject"                => "Sin asunto",
    "last_action"               => "Última acción",
    "due_time"                  => "Hora de entrega",
    "created_time"              => "Hora de creación",
    "submitted"                 => "Enviado",
    "ticket_reply"              => "Respuesta del ticket",
    "ticket_note"               => "Nota del ticket",
    "ticket_type"               => "Tipo de ticket",

    "user_ticket"               => "Usuario del Ticket",
    "user_ticket_desc"          => "Abrir nuevo ticket en nombre de un usuario nuevo o existente.",
    "existing_user"             => "Usuario existente",
    "new_user"                  => "Usuario nuevo",
    "internal"                  => "Interno",
    "internal_ticket_desc"      => "Abrir un ticket solo para uso interno. Este ticket se vinculará a ti en vez de a un usuario.",
    "ticket_opened"             => "Tu ticket se ha abierto con éxito.",
    "enter_user_details"        => "Por favor, introduce tus datos o inicia sesión con tu cuenta si ya tienes una.",
    "already_have_account"      => "Si ya tienes una cuenta, por favor inicia sesión y abre el ticket. Utiliza la opción olvidar contraseña si no puedes recordarla.",

    "recent_tickets"            => "Tickets recientes",
    "last_message_text"         => "Texto del último mensaje",

    "set_due_time"              => "Establecer una hora de entrega",

    "settings"                  => "Ajustes del Ticket",

    "priority"                  => "Prioridad|Prioridades",

    "channel"                   => "Canal|Canales",
    "account"                   => "Cuenta|Cuentas",

    "assign_operator"           => "Asignar operador",
    "assigned_operator"         => "Operadores asignados",
    "assigned_to"               => "Asignado a",
    "assigned"                  => "Asignado",

    "department"                => "Departamento|Departamentos",
    "change_department_order"   => "Arrastra las filas para cambiar el orden en el que los departamentos se muestran a los usuarios cuando se abre un nuevo ticket.",
    "department_applicable"     => "Departamentos aplicables",
    "department_applicable_desc" => "Los departamentos en los que los usuarios podrán seleccionar la prioridad. Solo se aplica en el frontend. Todas las prioridades estarán disponbiles para los operadores de todos los departamentos.",

    "send_now"                  => "Enviar ahora",

    "tag"                       => "Etiqueta|Etiquetas",

    "track_ticket"              => "Comprobar el estado del Ticket",
    "view_ticket"               => "Ver Ticket",

    // Recent activity
    "recent_activity"           => "Actividad reciente",

    "ticket_number"             => "Número del ticket",
    "ticket_format"             => "Formato del número del ticket",

    // Departments
    "department_public_desc"    => "Si el departamento es visible para los usuarios en la web Help Desk.",
    "department_parent_desc"    => "Si el departamento es un subdepartamento, por favor, selecciona uno principal. Los subdepartamentos están pensados para escalación y administración internas, por lo que al establecer esto se eliminarán algunas de las opciones más abajo.",
    "department_priority"       => "Prioridades del departamento",
    "department_priority_desc"  => "Las prioridades que estarán disponibles para los usuarios cuando abran un ticket en este departamento. Se debe seleccionar al menos una. Por defecto, todas las prioridades estarán disponibles en el departamento.",
    "department_no_format"      => "Opcional. Establécelo solo para reemplazar el formato del número del ticket por defecto. Si no, déjalo en blanco.",
    "department_operator"       => "Operadores del departamento",
    "department_default_assign" => "Asignado por defecto a",
    "dept_default_assign_desc"  => "Usa esto si quieres que los tickets que están abiertos en este departamento se asignen automáticamente a uno o más operadores.",

    // Department emails
    "email_accounts_desc"       => "Configura direcciones de correo electrónico para el departamento. Cualquier correo que reciba estas direcciones abrirá tickets en este departamento. La primera dirección de correo se utiliza como la dirección de remitente por defecto para correo saliente.",
    "department_port"           => "Los valores por defecto son: 110 para el POP3, 995 para el POP3 seguro, 143 para el IMAP, y 993 para el IMAP seguro. Déjalo en blanco para utilizar el valor por defecto.",
    "department_encryption"     => "Algunos proveedores de correo electrónico requieren cifrado SSL o TLS para conectarse. Si no estás seguro, deja este ajuste como Ninguno/a.",
    "department_delete_mail"    => "Si utilizas IMAP, puedes elegir no eliminar correos en el servidor después de que hayan sido importados como tickets.",
    "protocol"                  => "Protocolo",
    "server"                    => "Servidor de correo",
    "port"                      => "Puerto",
    "encryption"                => "Cifrado",
    "delete_downloaded"         => "Eliminar correos descargados",
    "consume_all"               => "Consumir todo",
    "email_download"            => "Descarga de correos",
    "email_piping"              => "Canalización de correos",
    "email_piping_desc"         => "Configura un reenviador de correos como el siguiente. La ruta de acceso ejecutable PHP puede ser diferente en tu servidor.",
    "remote_email_piping"       => "Canalización de correos remota",

    // Department email options
    "email_options"             => "Opciones de correos",
    "email_user_on_email"       => "Mandar correo a los usuarios de tickets abiertos por correo",
    "email_user_on_email_desc"  => "Selecciona si se debería notificar por correo a los usuarios cuando envíen un correo que resulte en la apertura de un nuevo ticket.",
    "email_operators"           => "Notificar operadores",
    "email_operators_desc"      => "Selecciona si quieres reenviar las respuestas del operador a otros operadores. Por defecto, se marca la opción \"enviar correo a los operadores\" en el panel del operador, y se enviará automáticamente un correo de respuestas de los operadores.",
    // Department email templates
    "new_ticket_opened"         => "Nuevo ticket abierto",
    "waiting_for_response"      => "Esperando una respuesta",
    "ticket_auto_closed"        => "Ticket cerrado automáticamente",
    "closed_by_operator"        => "Cerrado por el operador",

    // Feedback
    "feedback"                  => "Valoración",
    "feedback_form"             => "Formulario de valoración|Formularios de valoración",
    "feedback_form_desc"        => "Los formularios de valoración son procesados en el orden en el que aparecen. Arrastra las filas para reorganizar y ajustar la prioridad de los formularios de valoración.",
    "view_feedback"             => "Ver valoración",
    "ticket_feedback"           => "Valoración del ticket",
    "feedback_fields_error"     => "Ha ocurrido un problema intentando obtener los campos de valoración.",
    "time_after_resolved"       => "Tiempo una vez resuelto",
    "time_after_resolved_desc"  => "El tiempo que transcurre después de que un ticket se haya marcado como resuelto para que el formulario de valoración se envíe al usuario.",
    "expires_after"             => "Expira después de",
    "expires_after_desc"        => "El tiempo que transcurre para que un formulario de valoración que ha expirado no se pueda contestar. Aunque nosotros recomendemos establecer 7 días, puedes introducir 0 en todos los campos para no establecer ninguna hora de expiración.",
    "form_conditions"           => "Condiciones del formulario",
    "form_conditions_desc"      => "Define las condiciones del ticket por las que los tickets nuevos resueltos se comprueban para ver si cumplen con este formulario. Si un ticket resuelto cumple con varios formularios se seleccionará en la prioridad del formulario, lo cual se puede modificar a través de la lista de formularios y reorganizándolo.",
    "form_fields"               => "Campos de formulario",
    "rating"                    => "Valoraciones",
    "feedback_desc"             => "Gracias por contactar con nosotros y esperamos haber resuelto tu consulta. Por favor, ¿podrías valorar tu experiencia?.",
    "good_satisfied"            => "Buena, estoy satisfecho/a",
    "bad_not_satisfied"         => "Mala, no estoy satisfecho/a",
    "feedback_not_found"        => "Tu valoración no ha podido ser aceptada. Por favor, abre un ticket con nosotros si quieres compartir tu valoración.",
    "feedback_malformed_token"  => "Tu valoración no ha podido ser aceptada por un problema con el formato del token. Por favor, abre un ticket con nosotros si quieres compartir tu valoración.",
    "feedback_expired"          => "El ticket lleva un tiempo resuelto y, por desgracia, ya no se puede valorar.",
    "feedback_questions"        => "Si tienes unos minutos, por favor, ¿te importaría contestar a las siguientes preguntas para ayudarnos a mejorar la asistencia que ofrecemos?.",
    "feedback_for_ticket"       => "Valoración para el Ticket #:number",
    "feedback_rating_desc"      => "La asistencia recibida en este ticket se ha valorado como <strong>:rating</strong> por el usuario.",

    // Custom fields
    "customfield"               => "Campo personalizado del ticket|Campos personalizados del ticket",
    "customfield_order"         => "Arrastra las filas para cambiar el orden en el que se muestran los campos personalizados a los usuarios al abrir los tickets a través de la web.",

    // Canned responses
    "cannedresponse"            => "Respuesta predefinida|Respuestas predefinidas",

    // Filters
    "filter"                    => "Filtro|Filtros",
    "filter_condition"          => "Condiciones de filtro",
    "filter_condition_desc"     => "Define las condiciones por las que los tickets se alistan con este filtro.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Condiciones del macro",
    "macro_action"              => "Acciones del macro",
    "macro_action_desc"         => "Define las acciones que se llevarán a cabo cuando un macro se ejecute. Por favor, asegúrate de que las acciones son válidas para el departamento en el que se encuentra el ticket, ya que de lo contrario no tendrán ningún efecto.",

    "from"                      => "De",
    "to"                        => "Para",
    "cc"                        => "CC",

    "allowed_files"             => "Tipos de archivos adjuntos permitidos",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> también está viendo el ticket.",
    "draft_saved"               => "Borrador guardado a las :time",
    "save_draft"                => "Guardar borrador",
    "discard_draft"             => "Descartar borrador",

    // Locked
    "error_ticket_locked"       => "Este ticket se ha bloqueado y no se puede actualizar de nuevo. Por favor, abre un ticket nuevo si necesitas más asistencia.",

    // Ticket Followups
    "follow_up"                 => "Seguimiento",
    "follow_up_status_desc"     => "Establece el ticket con un estado diferente hasta la fecha del seguimiento.",
    "exact_date_time"           => "Fecha & hora exacta",
    "time_from_now"             => "Tiempo desde ahora",

    // Schedule
    "schedule"                  => "Horario|Horarios",
    "business_hour"             => "Horario comercial",
    "business_hour_desc"        => "El horario comercial indica las horas en las que el personal está disponible para responder consultas por el horario. Las horas se tienen en cuenta cuando se calculan las horas de entrega del ticket.",

    // Holidays
    "holiday"                   => "Vacaciones|Vacaciones",
    "holiday_or_on_the"         => "o, el",
    "holiday_month_year_desc"   => "El año es opcional si las vacaciones son recurrentes. Selecciona un año solo si las vacaciones ocurren en esta fecha en un año en particular.",

    // SLA Plans
    "sla_plan"                  => "Plan SLA|Planes SLA",
    "specific_schedule"         => "Horarios específicos",
    "calendar_hours_24"         => "Horas del calendario (24 Horas)",
    "resolution_time"           => "Horas de resolución",
    "resolution_time_desc"      => "Establece unas horas límite para las que un ticket debe haber sido respondido y resuelto por prioridad. El tiempo solo se contará durante las horas comerciales basadas en los horarios elegidos. Se pueden utilizar valores decimales.",
    "reply_within"              => "Responder en",
    "resolve_within"            => "Resolver en",
    "plan"                      => "Plan",
    "sla_condition"             => "Condiciones SLA",
    "sla_condition_desc"        => "Define las condiciones del ticket por las que los tickets nuevos se comprueban para ver si cumplen con este plan. Si un nuevo ticket cumple con varios planes SLA, se seleccionará en la prioridad del plan, lo cual se puede modificar a través de una lista de planes y reorganizándolo.",
    "escalation_rule"           => "Reglas de escalación",
    "escalation_rule_desc"      => "Define acciones que se llevan a cabo cuando un ticket bajo este plan SLA está cerca de la fecha de vencimiento o está vencido. Por favor, asegúrate de que las reglas son válidas para el departamento en el que se encuentra el ticket, ya que de lo contrario no tendrán ningún efecto.",
    "condition"                 => "Condición",
    "condition_group"           => "Condiciones del grupo",
    "all_groups"                => "TODOS los grupos deben ser verdaderos",
    "any_group"                 => "CUALQUIER grupo puede ser verdadero",
    "all_conditions"            => "TODAS las condiciones en el grupo deben ser verdaderas",
    "any_condition"             => "CUALQUIER condición en el grupo puede ser verdadera",
    "sla_plan_desc"             => "Los planes SLA son procesados en el orden en el que aparecen. Arrastra las filas para reorganizar y ajustar la prioridad de los planes SLA.",

    // Reply options
    "reply_options"             => "Opciones de respuesta",
    "send_email_to_users"       => "Enviar correo a el/los usuario(s)",
    "send_email_to_operators"   => "Enviar correo a el/los operador(es)",
    "back_to_grid"              => "Volver a la cuadrícula de los tickets",
    "take"                      => "Tomar",
    "take_ownership"            => "Tomar la propiedad",
    "pause_duetime"             => "Pausar la hora de entrega",
    "add_to_canned_responses"   => "Añadir a respuestas predefinidas",
    "visible_to_all_operators"  => "Hacer visible a todos los operadores",
    "set_status"                => "Establecer estado",
    "add_selfservice_link"      => "Añadir link auto-servicio",
    "search_selfservice"        => "Buscar artículo auto-servicio",
    "search_canned"             => "Buscar respuesta predefinida",

    "mark_resolved"             => "Marcar como Resuelto",

    "ticket_signature"          => "Firma del ticket",

    "default_open_status"       => "Estado abierto por defecto",

    "default_resolve_status"    => "Estado resuelto por defecto",
    "default_resolve_status_desc" => "Selecciona el estado por defecto que se utiliza para los tickets que se han resuelto.",

    "waiting_response_time"      => "Esperando una respuesta de correo",
    "waiting_response_time_desc" => "El tiempo que transcurre hasta que los usuarios reciben un correo de tickets inactivos, preguntándoles si consideran que el ticket se ha resuelto. Establécelo a 0 para desactivar este correo.",

    "close_inactive_tickets"    => "Cerrar tickets inactivos",
    "close_inactive_tickets_desc" => "El tiempo que transcurre hasta que los tickets inactivos se cierran automáticamente. Establécelo a 0 para no cerrar nunca los tickets automáticamente.",

    "ticket_reply_order"        => "Orden de respuestas del ticket",
    "ticket_reply_order_desc"   => "Selecciona el orden en el que se muestran los mensajes del ticket, ascendiente, en el que el mensaje más reciente es el último, o descendiente, en el que el mensaje más reciente es el primero.",

    "ticket_notes_position"     => "Posición de las notas del ticket",
    "ticket_notes_position_desc" => "Selecciona dónde se mostrarán las notas del ticket en la vista del ticket.",
    "ticket_notes_top_messages" => "En la parte superior y en mensajes",
    "ticket_notes_top"          => "Solo en la parte superior",
    "ticket_notes_messages"     => "Solo en mensajes",

    "captcha_desc"              => "Cuando el captcha debería mostrarse a los usuarios abriendo nuevos tickets.",
    "unregistered_only"         => "Solo usuarios no registrados",

    "allow_unauth_users"        => "Permitir usuarios sin autenticar",
    "allow_unauth_users_desc"   => "Permite a los usuarios que no están registrados ver y responder a tickets. Si deshabilitas esto, también se eliminará la opción de comprobar el estado del ticket y los usuarios tendrán que estar registrados e iniciar sesión antes de poder acceder a los tickets.",

    "default_department"        => "Departamento por defecto",
    "default_department_desc"   => "El departamento por defecto establecido en todos los tickets entrantes a través de este canal.",

    "show_related_articles"     => "Mostrar artículos relacionados",
    "show_related_articles_desc" => "Cuando el usuario está escribiendo el asunto, puede que se muestren artículos relacionados basados en lo que se ha introducido. Es necesario que la sección de auto-servicio y MySQL 5.6+ estén habilitados.",

    // Email Channel Settings
    "default_priority"          => "Prioridad por defecto",
    "default_priority_desc"     => "La prioridad por defecto establecida en todos los tickets entrantes a través de este canal.",
    "verbose_email_log"         => "Registro de correos detallado",

    "last_reply"                => "Última respuesta",
    "opened_at"                 => "Abierto a las",

    "change_department"         => "Cambiar departamento",
    "change_status"             => "Cambiar estado",
    "no_statuses"               => "No se han encontrado estados. Haz click <a href=':route'>aquí</a> para crear uno.",
    "no_priorities"             => "No se han encontrado prioridades. Haz click <a href=':route'>aquí</a> para crear una.",
    "no_templates"              => "No se han encontrado plantillas de correos personalizadas. Haz click <a href=':route'>aquí</a> para crear una.",
    "no_tags"                   => "No se han encontrado etiquetas del ticket. Haz click <a href=':route'>aquí</a> para crear una.",
    "no_departments_found"      => "No se han encontrado departamentos. Haz click <a href=':route'>aquí</a> para crear uno.",
    "no_operators_found"        => "No se han encontrado operadores. Haz click <a href=':route'>aquí</a> para crear uno.",
    "change_priority"           => "Cambiar prioridad",
    "add_tag"                   => "Añadir etiqueta",

    "unlock"                    => "Desbloquear",
    "merge"                     => "Combinar",
    "merged"                    => "Combinados",
    "unmerge"                   => "Descombinar",
    "close_and_lock"            => "Cerrar & Bloquear",

    "mass_reply"                => "Respuesta masiva",

    "due_today"                 => "Pendiente(s) para hoy",
    "overdue"                   => "Vencido(s)",
    "unassigned"                => "Desasignado(s)",

    "pause_duetime_desc"        => "Si hay un plan SLA activo en este ticket, pausa el tiempo que queda para la entrega hasta después de la fecha del seguimiento. La hora de entrega solo se restablecerá una vez que una respuesta o una nota se hayan añadido al ticket (incluyendo del seguimiento).",

    "add_cc"                    => "Añadir CC",
    "reply_above_line"          => "Por favor, responde por encima de esta línea",

    "email_settings"            => "Ajustes de correo",
    "web_settings"              => "Ajustes de Web",
    "split_selected_replies"    => "Dividir respuestas seleccionadas",

    "track_ticket_not_found"    => "No se ha podido encontrar el ticket con ese número y dirección de correo electrónico.",

    "channel_deactivated"       => "El canal del ticket está actualmente desactivado. No se ha podido publicar la respuesta.",

    "type_in_tags"              => "Escribir en etiquetas",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Una lista de extensiones de archivo, separados por la barra vertical | que se permiten como archivos adjuntos. Por ejemplo: txt|png|jpg. Para permitir todos los archivos adjuntos, introduce: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "No se han encontrado grupos de operadores. Haz click <a href=':route'>aquí</a> para crear uno.",
    "no_user_groups"            => "No se han encontrado grupos de usuarios. Haz click <a href=':route'>aquí</a> para crear uno.",
    "remote_email_piping_desc"  => "Descárgate el <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>script de canalización de correos remotos</a> y sigue la <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>documentación</a> para configurarlo en tu servidor de correo.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Por defecto, SupportPal tiene asistencia de alias de correo electrónico y comprobará el destinatario de los correos entrantes para ver en qué departamento debería abrirse el ticket. El ticket no se abre si no se encuentra el departamento correspondiente. Al habilitar este ajuste, todos los correos sin una dirección de correo de departamento correspondiente se importarán como tickets en este departamento.",
    "default_reply_options"     => "Opciones de respuesta por defecto",
    "default_reply_options_desc" => "Selecciona las opciones de respuesta por defecto que se establezcan cuando se abra o se responda a un ticket. La opción ':reply_option' se basará en el ticket en los ajustes de departamento ':department_option'.",
    "associate_response_tag"    => "Asociar respuesta predefinida con una etiqueta...",
    "canned_response_tags_desc" => "Añadir etiquetas que puedan ayudar a encontrar una respuesta predefinida cuando se conteste a un ticket.",
    "loading_tags"              => "Cargando etiquetas",
    "append_ip_address"         => "Anexar dirección IP",
    "append_ip_address_desc"    => "Anexar la dirección IP de los usuarios a sus mensajes cuando estén abriendo y respondiendo a tickets del frontend.",
    "unassign_operator"         => "Desasignar operador",
    "remove_tag"                => "Eliminar etiqueta",
    "message_clipped"           => "[Mensaje acortado]",
    "view_entire_message"       => "Ver todo el mensaje",
    "no_custom_fields"          => "No se han encontrado campos personalizados. Haz click <a href=':route'>aquí</a> para crear uno.",
    "follow_up_active"          => "Un <a class='view-followup' style='text-decoration: underline;'>seguimiento</a> está actualmente activo en este ticket y se ejecutará <strong>:time</strong>.",
    "disable_user_email_replies" => "Deshabilitar respuestas de correo del usuario",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtro de ticket por defecto",
    "default_ticket_filter_desc" => "El filtro de ticket que se utiliza por defecto al hacer click en el link 'Administrar Tickets'. Se puede establecer a 'Ninguno/a', la opción por defecto, que mostrará todos los tickets sin resolver.",
    "recent_filters"            => "Filtros recientes",
    "inactive_tickets"          => "Tickets inactivos",
    "default_open_status_desc"  => "Selecciona el estado por defecto que se debe establecer automáticamente cuando un usuario abre un ticket nuevo o responde a un ticket sin la respuesta de un operador.",
    "default_reply_status"      => "Estado de la respuesta por defecto",
    "default_reply_status_desc" => "Selecciona el estado por defecto que se debe establecer automáticamente cuando un usuario responde a un ticket. Solo se aplica si un operador ya ha respondido al ticket.",
    "ticket_reply_order_default" => "El sistema por defecto utilizará el valor que esté actualmente seleccionado en los ajustes generales del ticket.",
    "select_a_parent"           => "Selecciona un departamento principal...",
    "select_a_department"       => "Selecciona un departamento...",
    "department_operator_desc"  => "También puedes asignar operadores individuales al departamento. Estos operadores se añadirán además de los grupos asignados arriba.",
    "department_group"          => "Grupos de departamento",
    "department_group_desc"     => "Puedes asignar grupos de operadores completos al departamento, lo cual es recomendable si tu lista de operadores es grande y/o cambia con frecuencia.",
    "ticket_other_brands"       => "Tickets en otras marcas",
    "add_for_department"        => "Añadir para el departamento...",
    "record_order"              => "Arrastra las filas para cambiar el orden de los registros.",
    "reply_all"                 => "Responder a todo",
    "reply_without_cc"          => "Responder (sin CC)",
    "email_accounts"            => "Cuentas de correo",
    "add_another_email"         => "Añadir otra dirección de correo",
    "follow_up_date"            => "Fecha de seguimiento",
    "post_reply"                => "Publicar respuesta",
    "post_note"                 => "Publicar nota",
    "ticket_details"            => "Detalles del ticket",
    "organisation_tickets"      => "Tickets de la organización",
    "manage_tickets"            => "Administrar Tickets",
    "via_channel"               => "a través de :channel",
    "department_parent"         => "Departamento principal",
    "department_brands"         => "Marcas de los departamentos",
    "email_item"                => "Correo :item",
    "from_name"                 => "Del nombre",
    "from_address"              => "De la dirección",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user el :date",
    "prioritise_reply-to"       => "Priorizar Responder a",
    "prioritise_reply-to_desc"  => "Alterna para priorizar la cabecera 'Responder a' en vez de la cabecera 'De'. Al activarse, los tickets abiertos a través del correo electrónico se abrirán en nombre de la dirección y el nombre del Responder a.",
    "note_options"              => "Opciones de notas",
    "escalation_rules_desc"     => "Las reglas de escalación de plan SLA más abajo están programadas para ejecutarse después de las horas que aparecen. Estas horas pueden cambiar o las reglas pueden eliminarse si un operador responde a este ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Usuario no registrado. Los ajustes de canales de correo están establecidos para solo importar correos de usuarios registrados.",
    "display_name"              => "Nombre de correo que se muestra",
    "display_name_desc"         => "Opcional. Establécelo solo para reemplazar el nombre que se muestra usado en correos salientes desde este departamento. Si no, déjalo en blanco.",
    "display_name_options"      => "Las siguientes variables de Twig pueden ser usadas:<br >{{ brand.name }} - Nombre de marca<br />{{ department.name }} - Nombre del departamento<br />{{ department.frontend_name }} - Muestra el nombre del departamento principal si el ticket pertenece a un sub-departamento.<br />{{ operator.formatted_name }} - Nombre del operador<br /><em>EL nombre del operador no siempre estará disponible, así que encapsúlalo en una condición 'not empty', por ejemplo {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Archivo adjunto rechazado",
    "enable_subaddresses"       => "Habilitar sub-direcciones",
    "enable_subaddresses_desc"  => "Alterna para habilitar el uso de sub-direcciones de correo para todos los departamentos. Esto creará una única sub-dirección para cada ticket que se establece como la dirección de 'Responder a' en todo el correo saliente. Tu servidor de correo tiene que poder administrar sub-direcciones. Puede que se requieran pasos adicionales si estás utilizando una canalización de correos para asegurar que los correos se envían correctamente a estas direcciones. Al habilitar esto, podrás eliminar el número del ticket del asunto de las plantillas de correo.",
    "email_replies_disabled"    => "Respuestas de correo desactivadas",
    "disable_user_email_replies_desc" => "Habilita para bloquear respuestas de correos de usuarios, y también eliminar la línea de respuesta de los correos de tickets salientes. Por defecto, el correo se silenciará y se ignorará, pero puedes establecer que se envíe un correo al usuario cambiando la plantilla de correo seleccionada para la opción de 'Respuestas de correo desactivadas' más abajo.",
    "bcc"                       => "CCO",
    "assigned_to_ticket"        => "Asignado al ticket",
    "user_ticket_reply"         => "Respuesta de usuario del ticket",
    "new_internal_ticket"       => "Nuevo ticket interno",
    "department_changed"        => "Departamento cambiado",
    "operator_ticket_reply"     => "Respuesta de operador del ticket",
    "new_ticket_note"           => "Nueva nota del ticket",
    "email_template_desc"       => "Puedes seleccionar una plantilla de correo diferente a la de por defecto para enviar a usuarios u operadores para cualquiera de las acciones más abajo. Esta plantilla se convertirá en la de por defecto solo para este departamento.",
    "create_new_user"           => "Crear nuevo usuario",
    "user_reply_internal_ticket" => "No es un operador. Solo los operadores pueden responder a ticket internos.",
    "enter_email_address"       => "Introducir dirección de correo electrónico...",
    "email_user_frontend"       => "Enviar correo a los usuarios en los tickets abiertos del frontend",
    "email_user_frontend_desc"  => "Selecciona si se debería notificar a los usuarios por correo cuando ellos mismos abren un ticket en el frontend.",
    "department_template_disabled" => "La plantilla de correo del departamento relevante está desactivada, por lo que no se puede enviar este correo.",
    "verbose_email_log_desc"    => "Si la recopilación de correos debería ser almacenada en archivos. Se recomienda mantener desactivado a no ser que se ordene por la asistencia para depurar. Se almacenan cinco días de registros, ya que el sistema eliminará automáticamente archivos de registros que sean más antiguos.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Abrir nuevo ticket en nombre de un usuario existente.",
    "canned_response_tag"       => "Etiqueta de respuestas predefinidas|Etiquetas de respuestas predefinidas",
    "response"                  => "Respuesta|Respuestas",
    "response_desc"             => "La respuesta predefinida se puede escribir en varias lenguas. La respuesta adecuada se utilizará automáticamente basada en la preferencia de lenguas del usuario.",
    "no_slaplans"               => "No se han encontrado planes SLA. Haz click <a href=':route'>aquí</a> para crear uno.",
    "filter_performance"        => "Recomendaciones y consideraciones para el rendimiento",
    "filter_performance_desc"   => "<li>Los filtros que se correspondan con más tickets serán más lentos, en la mayoría de los casos intenta excluir tickets resueltos.</li><li>Los filtros que utilicen las condiciones 'no es' normalmente serán más lentos que los que usan las condiciones 'es'.</li><li>Los filtros que comprueben los valores NULL (por ejemplo, la etiqueta del ticket es Ninguno/a) serán más lentos.</li><li>Evita múltiples condiciones que impliquen comprobar cadenas/palabras, ya que lo hace más complejo.</li><li>Los filtros que utilizan las condiciones 'comienza con' o 'contiene' serán generalmente más lentos que los que utilizan 'equivale a' o 'termina con'.</li><li>Los tickets resueltos se excluyen de los recuentos que se muestran en la barra lateral.</li>",
    "run_macro"                 => "Ejecutar Macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Alterna para solo mostrar el departamento a usuarios con la sesión iniciada y solo aceptar correos de usuarios activamente registrados en el Help Desk. Si está habilitado, se enviará un correo a los usuarios sin registrar que manden correos a este departamento. Para cambiar o deshabilitar el correo, por favor, vea la opción de plantilla de 'Solo usuarios registrados' más abajo.",
    "form_fields_desc"          => "Si te gustaría recopilar información adicional cuando el usuario proporcione su valoración, puedes establecer campos personalizados para que se muestren en el formulario. El campo no se podrá cambiar una vez que el formulario haya sido completado por un usuario.",
    "feedback_ratings"          => "Valoración de la Satisfacción del Cliente (que afecta a tu puntuación de Satisfacción del Cliente)",
    "email_and_other_accounts"  => "Correo y cuentas de otros canales",
    "delete_message"            => "Eliminar mensaje",
    "linked_tickets"            => "Tickets vinculados",
    "add_linked_ticket"         => "Añadir ticket vinculado",
    "create_linked_ticket"      => "Crear ticket vinculado",
    "copy_link"                 => "Copiar link",
    "forward_message"           => "Reenviar este mensaje",
    "forward_from_here"         => "Reenviar ticket desde aquí",
    "forward"                   => "Reenviar",
    "forward_options"           => "Opciones de reenvío",
    "forwarded_to"              => "Reenviado a",
    "new_operator_reply"        => "Nueva respuesta del operador",
    "new_user_reply"            => "Nueva respuesta del usuario",
    "add_bcc"                   => "Añadir CCO",
    "at_least_one_recipient"    => "Por favor, indica al menos un destinatario.",
    "forwarded_message"         => "---------- Mensaje reenviado ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Nota: solo afecta a los tickets que tienen un estado en el que la opción 'Cerrar tickets inactivos' está habilitada.",
    "close_inactive_status_desc" => "Alterna para habilitar/deshabilitar el cierre automático de los tickets inactivos y recordatorios de inactividad de correos (plantillas de 'Esperando una respuesta' y 'Ticket cerrado automáticamente'). Al habilitarlo, el tiempo que transcurre antes de que se manden los recordatorios se puede configurar a través de los ajustes de tickets generales.",
    "from_header_missing"       => "La cabecera De: no se encuentra en el correo.",
    "move_ticket"               => "Mover Ticket",
    "move_ticket_step1"         => "Paso 1: Elige una marca nueva a donde mover el ticket",
    "move_ticket_step2"         => "Paso 2: Elige un departamento de una nueva marca",
    "current_record"            => ":record Actual",
    "new_record"                => "Nuevo :record",
    "department_email"          => "Correo de departamento",
    "select_a_department_email" => "Selecciona un correo de departamento...",
    "record_public_desc"        => "Alterna para que el/la :record sea solamente accesible por ti.",
    "record_group_desc"         => "Si quieres que el/la :record sea visible solo para un determinado grupo de operadores. Déjalo en blanco para hacerlo visible a todos los operadores.",
    "ticket_format_desc"        => "Puede contener caracteres alfanuméricos y caracteres especiales <code>-_.+!*,</code><br />Las siguientes variables también pueden utilizarse: %S para un número secuencial | %N para un número aleatorio | %L para una letra aleatoria<br />Utiliza {number} para repetir <strong>solo</strong> después de %N o %L, Por ejemplo, %N{4} equivale a 4 números aleatorios, %L{3} es igual a 3 letras aleatorias.<br />Los siguientes parámetros <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> prefijados con % Y,y,m,d,j,g,G,h,H,i,s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Alterna para desactivar el macro y evitar que se ejecute automáticamente o se muestre en la interfaz del ticket.",
    "macro_order_drag"          => "Arrastra las filas para cambiar el orden de los macros.",
    "macro_order_processed"     => "Los macros :type son procesados en el orden en el que aparecen.",
    "macro_type"                => "Tipo de macro",
    "macro_type_desc"           => "Hay tres tipos de macros disponibles. Los macros manuales solo se pueden ejecutar desde la vista o cuadrícula de tickets, los macros automáticos se ejecutan cada hora en tickets que no están resueltos, y los macros hook se ejecutan en eventos específicos del ticket. Los macros automáticos y los hook también se pueden establecer para ejecutarse solamente en horarios específicos. Cualquier acción de los macros hook no desencadenará otros macros hook para evitar el riesgo de bucles.",
    "macro_run_at_most"         => "Ejecutar máximo",
    "macro_run_times"           => "veces", // As in '5 times'
    "macro_run_at_most_desc"    => "Limita cuántas veces un macro automático se puede ejecutar en un solo ticket. Déjalo en blanco para que se ejecute sin ningún límite de veces.",
    "macro_events_desc"         => "Selecciona uno o más eventos en los que el macro se debería ejecutar. Las condiciones que se establezcan abajo se comprobarán antes de que se ejecute el macro.",
    "macro_schedules_desc"      => "Por defecto, el macro se ejecutará 24/7, pero tú puedes seleccionar uno o más horarios del Help Desk para que el macro solo esté activo durante esas horas.",
    "macro_condition_desc"      => "Define las condiciones para qué tickets estará disponible este macro. Por defecto, sin condiciones, se aplicará a todos los tickets. Al menos debes definir una condición para los macros automáticos.",
    "add_remove_headers"        => "Añadir/Eliminar cabeceras",
    "webhook_merge_fields"      => "Los campos de combinación se pueden utilizar en la URL y en el campo de contenido, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">saber más</a>.",
    "webhook_ticket_required"   => "Debe existir un ticket para que funcione esta característica.",
    "not_permitted"             => "Lo sentimos, pero no tienes permiso para ver el/los ticket(s) solicitado(s). Si crees que esto es un error, por favor, ponte en contacto con tu administrador.",
    "watch"                     => "Seguir",
    "unwatch"                   => "Dejar de seguir",
    "watching"                  => "Siguiendo",
    "internal_ticket"           => "Ticket Interno|Tickets Internos",

    /*
     * 2.4.1
     */
    "downloading"               => "Descargando...",
    "downloading_desc"          => "Si la descarga no empieza automáticamente en unos segundos, por favor, <a href=':href'>haz click aquí</a> para acceder directamente a la URL de descarga.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Pertenece a :name)",
    "block_user"                => "Bloquear usuario",
    "merge_tickets"             => "Combinar tickets",

    /*
     * 2.5.1
     */
    "channel_account_removed"   => "La cuenta del canal del ticket ha sido desactivada o eliminada, por lo que no se puede publicar una respuesta.",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Seguimientos",
    "follow_up_multiple_active" => "Múltiples <a class='view-followup' style='text-decoration: underline;'>seguimientos</a> se encuentran actualmente activos en este ticket, y el próximo programado se ejecutará <strong>:time</strong>.",
    "follow_up_no_actions"      => "El seguimiento no tiene ninguna acción programada. Por favor, confirma que quieres continuar.",
    "status_after_running"      => "Estado después de la ejecución",
    "older_messages"            => ":count mensajes antiguos",
    "holiday_single_day"        => "Solo un día",
    "holiday_date_range"        => "Intervalo de fechas",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Seleccione un ticket con el que combinarse",
    "search_number_or_subject"  => "Buscar por número del ticket o asunto",
    "im_not_sure"               => "No estoy seguro/a",
    "auto_reply_detected"       => "Auto-respuesta detectada - No se enviará ninguna notificación al usuario/los usuarios.",
    "cc_desc"                   => "Puedes incluir a otras personas en CC en este ticket introduciendo las direcciones de correo electrónico aquí.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> estaba redactando un mensaje",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Configurar manualmente",
    "unresolved"                => "Sin resolver",
    "resolved"                  => "Resuelto",
    "manage_oauth_options"      => "Para añadir o gestionar opciones OAuth, por favor visita la página de <a href=\":route\">Integraciones de terceros</a>.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Se ha guardado tu valoración.",
    "how_was_the_help"          => "¿Qué tal ha sido la ayuda que has recibido?",
    "update_feedback"           => "Actualizar valoración",
    "verify_user"               => "Por favor, verifica la autenticidad del usuario.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets abiertos a través de la interfaz del frontend para usuarios o el panel del operador para operadores.",
    "email_channel_name"        => "Correo electrónico",
    "email_channel_desc"        => "Tickets abiertos desde correo entrante.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets y respuestas publicadas a través de API.",

);
