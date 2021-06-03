<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    "accepted"                  => "O campo :attribute deve ser aceito.",
    "active_url"                => "O campo :attribute não é uma URL válida.",
    "after"                     => "O campo :attribute deve ser uma data depois de :date.",
    "alpha"                     => "O campo :attribute só pode conter letras.",
    "alpha_dash"                => "O campo :attribute só pode conter letras, números, traços e underscore (_).",
    "alpha_num"                 => "O campo :attribute só pode conter letras e números.",
    "array"                     => "O campo :attribute deve ser uma array.",
    "before"                    => "O campo :attribute deve ser uma data antes de :date.",
    "between"                   => array(
        "numeric" => "O campo :attribute deve estar entre :min and :max.",
        "file"    => "O campo :attribute deve estar entre :min and :max kilobytes.",
        "string"  => "O campo :attribute deve estar entre :min and :max caracteres.",
        "array"   => "O campo :attribute deve estar entre :min and :max itens.",
    ),
    "boolean"                   => "O campo :attribute deve ser verdadeiro ou falso.",
    "confirmed"                 => "A confirmação do campo :attribute não é válida.",
    "date"                      => "O campo :attribute não é uma data válida.",
    "date_format"               => "O campo :attribute não está no formato :format.",
    "different"                 => "O campo :attribute e :other devem ser diferentes.",
    "digits"                    => "O campo :attribute deve ter :digits dígitos.",
    "digits_between"            => "O campo :attribute deve estar entre :min and :max dígitos.",
    "email"                     => "O campo :attribute deve ser um email válido.",
    "exists"                    => "O campo selected :attribute é inválido.",
    "image"                     => "O campo :attribute deve ser uma imagem.",
    "in"                        => "O campo selected :attribute é inválido.",
    "integer"                   => "O campo :attribute deve ser um inteiro.",
    "ip"                        => "O campo :attribute deve ser um endereço de IP válido.",
    "max"                       => array(
        "numeric" => "O campo :attribute não pode ser maior que :max.",
        "file"    => "O campo :attribute não pode ser maior que :max kilobytes.",
        "string"  => "O campo :attribute não pode ser maior que :max caracteres.",
        "array"   => "O campo :attribute não pode ter mais que :max itens.",
    ),
    "mimes"                     => "O campo :attribute deve ser um arquivo do tipo: :values.",
    "min"                       => array(
        "numeric" => "O campo :attribute deve ser no mínimo :min.",
        "file"    => "O campo :attribute deve ser no mínimo :min kilobytes.",
        "string"  => "O campo :attribute deve ser no mínimo :min caracteres.",
        "array"   => "O campo :attribute deve ter have no mínimo :min itens.",
    ),
    "not_in"                    => "O campo selected :attribute é inválido.",
    "numeric"                   => "O campo :attribute deve ser a number.",
    "regex"                     => "O campo :attribute format é inválido.",
    "required"                  => "O campo :attribute é obrigatório.",
    "required_if"               => "O campo :attribute é obrigatório quando :other for :value.",
    "required_with"             => "O campo :attribute é obrigatório quando :values estiver presente.",
    "required_with_all"         => "O campo :attribute é obrigatório quando :values estiverem presentes.",
    "required_without"          => "O campo :attribute é obrigatório quando :values não estiver presente.",
    "required_without_all"      => "O campo :attribute é obrigatório quando nenhum de :values estiverem presentes.",
    "same"                      => "O campo :attribute e :other deve ser iguais.",
    "size"                      => array(
        "numeric" => "O campo :attribute deve ser :size.",
        "file"    => "O campo :attribute deve ser :size kilobytes.",
        "string"  => "O campo :attribute deve ser :size caracteres.",
        "array"   => "O campo :attribute deve conter :size itens.",
    ),
    "unique"                    => "O campo :attribute já está em uso.",
    "url"                       => "O formato de :attribute inválido.",
    "template_exists"           => "O :attribute selecionado é inválido.",
    "is_valid_captcha"          => "O captcha informado foi inválido. Tente novamente, por favor.",
    "user_password_strength"    => "O campo :attribute deve content_url :user_password_strength.",
    "operator_password_strength" => "O campo :attribute deve conter :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "O logo deve apontar para uma imagem válida (URL direta ou caminho relativo).",

    /*
     * 2.1.1
     */
    "old_password"              => "O campo :attribute é inválido.",

    /*
     * 2.2.0
     */
    "required_with_translation" => "A tradução :translation para :attribute é obrigatória quando :values estiver presente.",
    "max_translation"           => "A tradução :translation para :attribute não pode ser maior query :max caracteres.",
    "unique_translation"        => "A tradução :translation para :attribute já está em uso.",

    /*
     * 2.3.0
     */
    "required_translation"      => "A tradução :translation para :attribute é obrigatória.",
    "customfield_not_cyclic"    => "O campo não pode depender de um de seus filhos.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "O slug só pode conter caracteres alfanuméricos, use encode com % para caracteres especiais.",
    "article_slug_unique"       => "O slug já está em uso.",
    "captcha_required"          => "O captcha é obrigatório.",
    "ticket_number_format"      => "O formato do número do ticket é inválido.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "O campo :attribute deve ser uma data depois ou igual a :date.",
    "before_or_equal"           => "O campo :attribute deve ser uma date antes ou igual a :date.",
    "dimensions"                => "O campo :attribute tem dimensões inválidas.",
    "distinct"                  => "O campo :attribute tem um valor duplicado.",
    "file"                      => "O campo :attribute deve ser a file.",
    "filled"                    => "O campo :attribute deve ter um valor.",
    "gt"                        => array(
        "numeric" => "O campo :attribute deve ser maior que :value.",
        "file"    => "O campo :attribute deve ser maior que :value kilobytes.",
        "string"  => "O campo :attribute deve ser maior que :value caracteres.",
        "array"   => "O campo :attribute deve ter mais que :value itens.",
    ),
    "gte"                       => array(
        "numeric" => "O campo :attribute deve ser maior ou igual a :value.",
        "file"    => "O campo :attribute deve ser maior ou igual a :value kilobytes.",
        "string"  => "O campo :attribute deve ser maior ou igual a :value caracteres.",
        "array"   => "O campo :attribute deve ter :value itens ou mais.",
    ),
    "in_array"                  => "O campo :attribute field does not exist in :other.",
    "ipv4"                      => "O campo :attribute deve ser um endereço IPv4 válido",
    "ipv6"                      => "O campo :attribute deve ser um endereço IPv6 válido.",
    "json"                      => "O campo :attribute deve ser uma string JSON válida.",
    "lt"                        => array(
        "numeric" => "O campo :attribute deve ser menos que :value.",
        "file"    => "O campo :attribute deve ser menos que :value kilobytes.",
        "string"  => "O campo :attribute deve ser menos que :value caracteres.",
        "array"   => "O campo :attribute deve ter menos que :value itens.",
    ),
    "lte"                       => array(
        "numeric" => "O campo :attribute deve ser menor ou igual a :value.",
        "file"    => "O campo :attribute deve ser menor ou igual a :value kilobytes.",
        "string"  => "O campo :attribute deve ser menor ou igual a :value caracteres.",
        "array"   => "O campo :attribute não deve ter mais que :value itens.",
    ),
    "mimetypes"                 => "O campo :attribute deve ser um arquivo do tipo: :values.",
    "not_regex"                 => "O campo :attribute tem um formato inválido.",
    "present"                   => "O campo :attribute deve estar presente.",
    "required_unless"           => "O campo :attribute é requerido a menos que :other esteja em :values.",
    "string"                    => "O campo :attribute deve ser uma string.",
    "timezone"                  => "O campo :attribute deve ser uma zona válida.",
    "uploaded"                  => "O campo :attribute falhou ao fazer upload.",

    /*
     * 2.5.0
     */
    "domain"                    => "Um ou mais dos nomes de domínio é inválido.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "O campo :attribute é inválido. Por favor, use o botão de pré-visualização para detalhes do erro.",

    /*
     * 3.0.0
     */
    "embed_image"               => "O campo :attribute deve ser um tipo de arquivo: jpeg, png, or gif.",
    "starts_with"               => "O campo :attribute deve iniciar com um dos seguintes: :values.",

    /*
     * 3.4.0
     */
    "password"                  => "The password is incorrect.",

    /*
     * 3.5.0
     */
    'phone'                     => "The supplied phone number is invalid.",

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    "custom" => array(
        "roles.*" => array(
            "exists" => "A função selecionada é inválido.",
        ),
        "category.*.type" => array(
            "required" => "Um ou mais artigos devem ser selecionados..",
        ),
        "category.*.categories" => array(
            "required" => "Uma ou mais categorias são requeridas quando um tipo de artigo foi selecionado.",
            "exists"   => "Uma ou mais das categorias selecionadas é(são) inválida(s).",
        ),
        "brand.*" => array(
            "exists" => "A marca selecionada é inválida.",
        ),
    ),

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as Email Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    "attributes" => array(),

);
