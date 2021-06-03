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

    "accepted"                  => ":attribute måste accepteras.",
    "active_url"                => ":attribute är inte en giltig URL.",
    "after"                     => ":attribute måste vara ett datum efter :date.",
    "alpha"                     => ":attribute får bara innehålla bokstäver.",
    "alpha_dash"                => ":attribute får bara innehålla bokstäver, siffror och streck.",
    "alpha_num"                 => ":attribute får bara innehålla bokstäver och siffror.",
    "array"                     => ":attribute måste vara en array.",
    "before"                    => ":attribute måste vara ett datum före :date.",
    "between"                   => array(
        "numeric" => ":attribute måste vara mellan :min och :max.",
        "file"    => ":attribute måste vara mellan :min och :max kilobyte.",
        "string"  => ":attribute måste vara mellan :min och :max tecken.",
        "array"   => ":attribute måste ha mellan :min och :max objekt.",
    ),
    "boolean"                   => ":attributefältet måste vara sant eller falskt.",
    "confirmed"                 => ":attributebekräftelsen stämmer inte.",
    "date"                      => ":attribute är inte ett giltigt datum.",
    "date_format"               => ":attribute matchar inte formatet :format.",
    "different"                 => ":attribute och :other måste vara olika.",
    "digits"                    => ":attribute måste vara :digits siffror.",
    "digits_between"            => ":attribute måste vara mellan :min och :max siffror.",
    "email"                     => ":attribute måste vara en giltig e-postadress.",
    "exists"                    => "valda :attribute är ogiltig.",
    "image"                     => ":attribute måste vara en bild.",
    "in"                        => "valda :attribute är ogiltig.",
    "integer"                   => ":attribute måste vara ett heltal.",
    "ip"                        => ":attribute måste vara en giltig IP-adress.",
    "max"                       => array(
        "numeric" => ":attribute får inte vara större än :max.",
        "file"    => ":attribute får inte vara större än :max kilobyte.",
        "string"  => ":attribute får inte vara större än :max tecken.",
        "array"   => ":attribute får inte ha fler än :max objekt.",
    ),
    "mimes"                     => ":attribute måste vara av filtypen: :values.",
    "min"                       => array(
        "numeric" => ":attribute måste åtminstone vara :min.",
        "file"    => ":attribute måste åtminstone vara :min kilobyte.",
        "string"  => ":attribute måste åtminstone vara :min tecken.",
        "array"   => ":attribute måste åtminstone ha :min objekt.",
    ),
    "not_in"                    => "Valda :attribute är ogiltig.",
    "numeric"                   => ":attribute måste vara en siffra.",
    "regex"                     => ":attributeformatet är ogiltig.",
    "required"                  => ":attributefältet krävs.",
    "required_if"               => ":attributefältet krävs när :other är :value.",
    "required_with"             => ":attributefältet krävs när :values finns.",
    "required_with_all"         => ":attributefältet krävs när :values finns.",
    "required_without"          => ":attributefältet krävs när :values inte finns.",
    "required_without_all"      => ":attributefältet krävs när inget av :values finns.",
    "same"                      => ":attribute och :other måste matcha.",
    "size"                      => array(
        "numeric" => ":attribute måste vara :size.",
        "file"    => ":attribute måste vara :size kilobyte.",
        "string"  => ":attribute måste vara :size tecken.",
        "array"   => ":attribute måste innehålla :size objekt.",
    ),
    "unique"                    => ":attribute har redan tagits.",
    "url"                       => ":attributeformatet är ogiltigt.",
    "template_exists"           => "det valda :attribute är ogiltig.",
    "is_valid_captcha"          => "den inskrivna captcha-koden är ogiltig, försök igen.",
    "user_password_strength"    => ":attribute måste innehålla: :user_password_strength.",
    "operator_password_strength" => ":attribute måste innehålla: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Loggan måste peka mot en giltig bildfil (URL eller relativ filsökväg utifrån basmappen).",

    /*
     * 2.1.1
     */
    "old_password"              => ":attributefältet är ogiltigt.",

    /*
     * 2.2.0
     */
    "required_with_translation" => ":translation översättningen av :attribute fältet krävs när :values finns.",
    "max_translation"           => ":translation översättningen av :attribute fältet får inte vara större än :max tecken.",
    "unique_translation"        => ":translation översättningen av :attribute field har redan använts.",

    /*
     * 2.3.0
     */
    "required_translation"      => ":translation översättningen av :attribute fältet krävs.",
    "customfield_not_cyclic"    => "Fältet kan inte bero på sitt eget under fält.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "The slug field can only contain alphanumeric characters, please percent encode any special characters.",
    "article_slug_unique"       => "The slug has already been taken.",
    "captcha_required"          => "The captcha is required.",
    "ticket_number_format"      => "The ticket number format is invalid.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "The :attribute must be a date after or equal to :date.",
    "before_or_equal"           => "The :attribute must be a date before or equal to :date.",
    "dimensions"                => "The :attribute has invalid image dimensions.",
    "distinct"                  => "The :attribute field has a duplicate value.",
    "file"                      => "The :attribute must be a file.",
    "filled"                    => "The :attribute field must have a value.",
    "gt"                        => array(
        "numeric" => "The :attribute must be greater than :value.",
        "file"    => "The :attribute must be greater than :value kilobytes.",
        "string"  => "The :attribute must be greater than :value characters.",
        "array"   => "The :attribute must have more than :value items.",
    ),
    "gte"                       => array(
        "numeric" => "The :attribute must be greater than or equal :value.",
        "file"    => "The :attribute must be greater than or equal :value kilobytes.",
        "string"  => "The :attribute must be greater than or equal :value characters.",
        "array"   => "The :attribute must have :value items or more.",
    ),
    "in_array"                  => "The :attribute field does not exist in :other.",
    "ipv4"                      => "The :attribute must be a valid IPv4 address.",
    "ipv6"                      => "The :attribute must be a valid IPv6 address.",
    "json"                      => "The :attribute must be a valid JSON string.",
    "lt"                        => array(
        "numeric" => "The :attribute must be less than :value.",
        "file"    => "The :attribute must be less than :value kilobytes.",
        "string"  => "The :attribute must be less than :value characters.",
        "array"   => "The :attribute must have less than :value items.",
    ),
    "lte"                       => array(
        "numeric" => "The :attribute must be less than or equal :value.",
        "file"    => "The :attribute must be less than or equal :value kilobytes.",
        "string"  => "The :attribute must be less than or equal :value characters.",
        "array"   => "The :attribute must not have more than :value items.",
    ),
    "mimetypes"                 => "The :attribute must be a file of type: :values.",
    "not_regex"                 => "The :attribute format is invalid.",
    "present"                   => "The :attribute field must be present.",
    "required_unless"           => "The :attribute field is required unless :other is in :values.",
    "string"                    => "The :attribute must be a string.",
    "timezone"                  => "The :attribute must be a valid zone.",
    "uploaded"                  => "The :attribute failed to upload.",

    /*
     * 2.5.0
     */
    "domain"                    => "One or more of the domain names are not valid.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "The :attribute is invalid. Please use the 'Preview' button for error details.",

    /*
     * 3.0.0
     */
    "embed_image"               => "The :attribute must be a file of type: jpeg, png, or gif.",
    "starts_with"               => "The :attribute must start with one of the following: :values.",

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
            "exists" => "Den valda rollen är ogiltig.",
        ),
        "category.*.type" => array(
            "required" => "Ett ämne krävs för varje e-post.",
        ),
        "category.*.categories" => array(
            "required" => "Innehållsfältet krävs för varje e-post.",
            "exists"   => "En eller flera av de valda kategorierna är ogiltga.",
        ),
        "brand.*" => array(
            "exists" => "Det valda varumärket är ogiltigt.",
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
