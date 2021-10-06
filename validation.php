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

    "accepted"                  => "De :attribute moet worden geaccepteerd.",
    "active_url"                => "De :attribute is geen geldige URL.",
    "after"                     => "De :attribute moet een datum zijn na :date.",
    "alpha"                     => "De :attribute mag alleen letters bevatten.",
    "alpha_dash"                => "De :attribute mag alleen letters, nummers en hekjes (\#) bevatten.",
    "alpha_num"                 => "De :attribute mag alleen letters en nummers bevatten.",
    "array"                     => "De :attribute moet een array zijn.",
    "before"                    => "De :attribute moet een datum zijn voor :date.",
    "between"                   => array(
        "numeric" => "De :attribute moet een waarde zijn tussen :min en :max.",
        "file"    => "De :attribute moet tussen de :min en :max kilobytes zijn.",
        "string"  => "De :attribute moet tussen de :min en :max tekens lang zijn.",
        "array"   => "De :attribute moet tussen de :min en :max items bevatten.",
    ),
    "boolean"                   => "De :attribute veld moet waar of niet waar zijn.",
    "confirmed"                 => "De :attribute bevestiging matcht niet.",
    "date"                      => "De :attribute is geen geldige datum.",
    "date_format"               => "De :attribute matcht niet met het formaat :format.",
    "different"                 => "De :attribute en :other moeten verschillend zijn.",
    "digits"                    => "De :attribute moet :digits cijfers zijn.",
    "digits_between"            => "De :attribute moet tussen de :min en :max cijfers zijn.",
    "email"                     => "De :attribute moet een geldig emailadres zijn.",
    "exists"                    => "Het geselecteerde :attribute is ongeldig.",
    "image"                     => "De :attribute moet een afbeelding zijn.",
    "in"                        => "De geselecteerde :attribute is ongeldig.",
    "integer"                   => "De :attribute moet een geheel getal zijn.",
    "ip"                        => "De :attribute moet een geldig ipadres zijn.",
    "max"                       => array(
        "numeric" => "De :attribute mag niet groter zijn dan :max.",
        "file"    => "De :attribute mag niet groter zijn dan :max kilobytes.",
        "string"  => "De :attribute mag niet langer zijn dan :max tekens.",
        "array"   => "De :attribute mag niet groter zijn dan :max items.",
    ),
    "mimes"                     => "De :attribute moet van bestandtype :values zijn.",
    "min"                       => array(
        "numeric" => "De :attribute moet minimaal :min zijn.",
        "file"    => "De :attribute moet minstens :min kilobytes zijn.",
        "string"  => "De :attribute moest minstens :min tekens zijn.",
        "array"   => "De :attribute moet miminaal :min items zijn.",
    ),
    "not_in"                    => "De geselecteerde :attribute is ongeldig.",
    "numeric"                   => "De :attribute moet een nummer zijn.",
    "regex"                     => "De :attribute formaat is ongeldig.",
    "required"                  => "Het :attribute veld is required.",
    "required_if"               => "Het :attribute veld is verplicht wanneer :other :value is.",
    "required_with"             => "Het :attribute veld is verplicht wanneer :values is ingesteld.",
    "required_with_all"         => "Het :attribute veld is verplicht wanneer :values is ingesteld.",
    "required_without"          => "Het :attribute veld is verplicht wanneer :values niet is ingesteld.",
    "required_without_all"      => "Het :attribute veld is verplicht wanneer geen van :values is ingesteld.",
    "same"                      => "De :attribute en :other moeten hetzelfde zijn.",
    "size"                      => array(
        "numeric" => "De :attribute moet :size zijn.",
        "file"    => "De :attribute moet :size kilobytes zijn.",
        "string"  => "De :attribute moet :size tekens zijn.",
        "array"   => "De :attribute moet :size items bevatten.",
    ),
    "unique"                    => "Het :attribute is al bezet.",
    "url"                       => "Het :attribute formaat is onjuist.",
    "template_exists"           => "Het geselecteerde :attribute is onjuist.",
    "is_valid_captcha"          => "De ingevoerde captcha-code was ongeldig of onjuist, probeer het opnieuw.",
    "user_password_strength"    => "Het :attribute moet :user_password_strength tekens bevaten.",
    "operator_password_strength" => "Het :attribute moet :operator_password_strength tekens bevatten.",

    /*
     * 2.1.0
     */
    "logo"                      => "Het logo moet wijzen naar een geldige afbeelding (direct URL of relatief pad vanaf base directory).",

    /*
     * 2.1.1
     */
    "old_password"              => "Het :attribute veld is ongeldig.",

    /*
     * 2.2.0
     */
    "required_with_translation" => "De :translation vertaling voor het :attribute veld is verplicht als :values aanwezig zijn.",
    "max_translation"           => "De :translation vertaling voor het :attribute veld mag niet groter zijn dan :max characters tekens.",
    "unique_translation"        => "De :translation vertaling voor het :attribute veld is al bezet.",

    /*
     * 2.3.0
     */
    "required_translation"      => "De :translation vertaling fvoor het :attribute veld is verplicht.",
    "customfield_not_cyclic"    => "Het veld kan niet afhankelijk zijn van een van zijn kinderen.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Het slug-veld mag alleen alfanumerieke tekens bevatten, codeer alstublieft procentuele speciale tekens. ",
    "article_slug_unique"       => "De slug is al in gebruik.",
    "captcha_required"          => "De captcha is vereist.",
    "ticket_number_format"      => "Het formaat van het ticketnummer is ongeldig.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => "De :attribute moet een datum na of gelijk zijn aan :date.",
    "before_or_equal"           => "De :attribute moet een datum voor of gelijk zijn aan :date.",
    "dimensions"                => "De :attribute heeft ongeldige afbeeldingsafmetingen.",
    "distinct"                  => "Het :attribute veld heeft een dubbele waarde.",
    "file"                      => "Het :attribute moet een bestand zijn.",
    "filled"                    => "Het :attribute veld moet een waarde hebben.",
    "gt"                        => array(
        "numeric" => "Het :attribute moet groter zijn dan :value.",
        "file"    => "Het :attribute moet groter zijn dan :value kilobytes.",
        "string"  => "De :attribute moet groter zijn dan :value characters.",
        "array"   => "De :attribute moet groter zijn dan :value items.",
    ),
    "gte"                       => array(
        "numeric" => "Het :attribute moet groter zijn dan of gelijk zijn aan :value.",
        "file"    => "Het :attribute moet groter zijn dan of gelijk zijn aan :value kilobytes.",
        "string"  => "De :attribute moet groter zijn dan of gelijk zijn aan :value characters.",
        "array"   => "De :attribute moet :value items bevatten of meer.",
    ),
    "in_array"                  => "Het :attribute veld bestaat niet in :other.",
    "ipv4"                      => "Het :attribute moet een geldig IPv4 adres zijn.",
    "ipv6"                      => "Het :attribute moet een geldig IPv6 adres zijn.",
    "json"                      => "Het :attribute moet een geldige JSON string zijn.",
    "lt"                        => array(
        "numeric" => "Het :attribute moet kleiner zijn dan :value.",
        "file"    => "Het :attribute moet kleiner zijn dan :value kilobytes.",
        "string"  => "De :attribute moet kleiner zijn dan :value characters.",
        "array"   => "De :attribute moet kleiner zijn dan :value items.",
    ),
    "lte"                       => array(
        "numeric" => "Het :attribute moet kleiner zijn dan of gelijk zijn :value.",
        "file"    => "Het :attribute moet kleiner zijn dan of gelijk zijn :value kilobytes.",
        "string"  => "De :attribute moet kleiner zijn dan of gelijk zijn :value characters.",
        "array"   => "De :attribute moet kleiner zijn dan of gelijk zijn :value items.",
    ),
    "mimetypes"                 => "Het :attribute moet een bestand zijn van type: :values.",
    "not_regex"                 => "Het :attribute formaat is onjuist.",
    "present"                   => "Het :attribute veld moet aanwezig zijn.",
    "required_unless"           => "Het :attribute veld is verplicht, tenzij :other aanwezig is in :values.",
    "string"                    => "Het :attribute moet een string zijn.",
    "timezone"                  => "Het :attribute moet een geldige zone zijn.",
    "uploaded"                  => "Het uploaden van :attribute is mislukt.",

    /*
     * 2.5.0
     */
    "domain"                    => "Een of meer van de domeinnamen zijn niet geldig.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "Het :attribute is ongeldig. Gebruik de 'Preview'-knop voor foutdetails. ",

    /*
     * 3.0.0
     */
    "embed_image"               => "Het :attribute moet een jpeg, png, of gif zijn.",
    "starts_with"               => "Het :attribute moet beginnen met een van de volgende: :values.",

    /*
     * 3.4.0
     */
    "password"                  => "Het wachtwoord is onjuist.",

    /*
     * 3.5.0
     */
    'phone'                     => "Het opgegeven telefoonnummer is onjuist",

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
            "exists" => "De geselecteerde rol is ongeldig.",
        ),
        "category.*.type" => array(
            "required" => "Er moeten een of meer zelfbedieningstypen worden geselecteerd.",
        ),
        "category.*.categories" => array(
            "required" => "Een of meer categorieën zijn vereist wanneer een zelfbedieningstype is geselecteerd .",
            "exists"   => "Een of meer van de geselecteerde categorieën is ongeldig.",
        ),
        "brand.*" => array(
            "exists" => "Het geselecteerde merk is ongeldig.",
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
