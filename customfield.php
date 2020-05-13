<?php

return array(

    "customfield"               => "Campo personalizado|Campos personalizados",

    // Options
    "boolean"                   => "Booleano",
    "checkbox"                  => "Casilla",
    "checklist"                 => "Lista de comprobación",
    "date"                      => "Fecha",
    "multiple"                  => "Múltiples opciones",
    "options"                   => "Opciones",
    "password"                  => "Contraseña",
    "radio"                     => "Botones de opción",
    "rating"                    => "Valoración (de 1 a 5)",
    "text"                      => "Texto",
    "textarea"                  => "Área de texto",

    "public"                    => "Público",
    "public_desc"               => "Si el campo personalizado se muestra públicamente en el frontend o es solo visible para el personal.",
    "encrypted"                 => "Encriptado",
    "purge_desc"                => "Si el valor del campo personalizado debería ser automáticamente eliminado cuando se resuelve el ticket.",
    "locked"                    => "Bloqueado",
    "locked_desc"               => "Si el valor del campo personalizado no puede cambiar una vez establecido por el usuario.",
    "department_desc"           => "Selecciona en qué departamentos está disponible el campo.",

    /*
     * 2.0.2
     */
    "please_select"             => "Por favor, selecciona...",

    /*
     * 2.0.3
     */
    "description_desc"          => "El texto de ayuda que aparece debajo del campo personalizado y puede, opcionalmente, dejarse en blanco.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Selecciona en qué marcas está disponible el campo.",
    
    /*
     * 2.3.0
     */
    "option_warning"            => "Al eliminar opciones existentes se borrarán los campos guardados que actualmente tienen esos valores seleccionados.",
    "regex_basic_desc"          => "Opcionalmente, especifica una expresión regular para validar el valor del campo personalizado.",
    "regex_desc"                => "Las expresiones regulares (regex) hacen distinción entre mayúsculas y minúsculas, no es necesario especificar los delimitadores de la expresión regular, y las barras (/) se escapan de manera automática. Por ejemplo: ^[a-z0-9_-]{6,18}$ implicaría que el valor tuviera una longitud de 6 a 18 caracteres y contuviera solo una mezcla de caracteres alfanuméricos, guiones bajos y rayas.",
    "regex_error_message"       => "Mensaje de error de validación",
    "regex_error_message_desc"  => "Opcionalmente, especifica un mensaje de error personalizado que se mostrará si el valor no corresponde con la validación de expresiones regulares. Si no, se mostrará un mensaje genérico. El mensaje se mostrará exactamente como se introduzca, por lo que recomendamos incluir el nombre del campo personalizado para hacer el mensaje de error más obvio.",
    "custom_field_values"       => "Valores del campo personalizado",
    "depends_on"                => "Depende de",
    "depends_on_desc"           => "Si se selecciona, este campo solo se mostrará al usuario cuando el valor del campo específico se seleccione. La visibilidad del campo y el departamento se heredarán automáticamente del campo del que dependen.",
    "select_option"             => "Selecciona una opción...",
    "purge"                     => "Eliminar",
    "encrypted_desc"            => "Si el valor del campo personalizado es confidencial y debería guardarse en la base de datos encriptada. Esto no se puede cambiar una vez que el campo personalizado haya sido creado.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Si el campo personalizado se debe rellenar. Para la casilla, la lista de comprobación o los tipos de múltiples opciones, se requerirá que el usuario seleccione al menos una opción.",

);
