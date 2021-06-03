<?php

return array(

    "customfield"               => "Campo customizado|Campos customizados",

    // Options
    "boolean"                   => "Boleano",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Checklist",
    "date"                      => "Data",
    "multiple"                  => "Opções múltiplas",
    "options"                   => "Opções",
    "radio"                     => "Botões de rádio",
    "rating"                    => "Avaliação (1 a 5)",
    "text"                      => "Texto",
    "textarea"                  => "Área de texto",

    "public"                    => "Público",
    "public_desc"               => "Se o campo personalizado é mostrado publicamente no frontend ou for apenas para funcionários.",
    "encrypted"                 => "Encriptado",
    "purge_desc"                => "Se o valor do campo personalizado for removido automaticamente quando o ticket for resolvido.",
    "locked"                    => "Bloqueado",
    "locked_desc"               => "Se o valor do campo personalizado não puder ser alterado pelo usuário, uma vez definido.",
    "department_desc"           => "Choose which departments the field is available in.",

    /*
     * 2.0.2
     */
    "please_select"             => "Por favor, selecione...",

    /*
     * 2.0.3
     */
    "description_desc"          => "O texto de ajuda que aparecerá abaixo do campo personalizado e, opcionalmente, pode ser deixado em branco.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Choose which brands the field is available in.",

    /*
     * 2.3.0
     */
    "option_warning"            => "A exclusão de opções existentes limpará todos os campos salvos que atualmente têm esses valores selecionados.",
    "regex_basic_desc"          => "Opcionalmente, especifique uma expressão regular para validar o valor do campo personalizado.",
    "regex_desc"                => "A regex diferencia maiúsculas de minúsculas, não há necessidade de especificar delimitadores de regex e o uso de barras será automaticamente escapado. Exemplo: ^ [a-z0-9 _-] {6,18} $ aplicaria que o valor tenha de 6 a 18 caracteres e contenha apenas uma mistura de caracteres alfanuméricos, sublinhados e traços.",
    "regex_error_message"       => "Mensagem de erro da validação",
    "regex_error_message_desc"  => "Opcionalmente, especifique uma mensagem de erro personalizada que será mostrada se o valor não corresponder à validação de regex, caso contrário, uma mensagem genérica será mostrada. A mensagem será mostrada exatamente como inserida; portanto, recomendamos incluir o nome do campo personalizado para tornar a mensagem de erro mais óbvia.",
    "custom_field_values"       => "Valores de campos customizados",
    "depends_on"                => "Depende de",
    "depends_on_desc"           => "Se selecionado, este campo será mostrado apenas ao usuário quando o valor do campo especificado for selecionado. A visibilidade da marca e do departamento será herdada automaticamente do campo em que depende.",
    "select_option"             => "Selecione uma opção...",
    "purge"                     => "Limpar",
    "encrypted_desc"            => "Se o valor do campo personalizado for sensível e precisar ser salvo no banco de dados criptografado. Isso não pode ser alterado depois que o campo personalizado tiver sido criado.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Se o campo personalizado precisar ser preenchido. Para a caixa de seleção, lista de verificação ou vários tipos de opções, será necessário que o usuário selecione pelo menos uma opção.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ENCRYPTED **",
);
