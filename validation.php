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

    "accepted"                  => ":attribute mora biti prihvaćen.",
    "active_url"                => ":attribute nije validan URL.",
    "after"                     => ":attribute mora biti datum nakon :date.",
    "alpha"                     => ":attribute može sadržati samo slova.",
    "alpha_dash"                => ":attribute može sadržati samo slova, brojeve, crtice i donje crte.",
    "alpha_num"                 => ":attribute može sadržati samo slova i brojeve.",
    "array"                     => ":attribute mora biti niz.",
    "before"                    => ":attribute mora biti datum pre :date.",
    "between"                   => array(
        "numeric" => ":attribute mora biti između :min i :max.",
        "file"    => ":attribute mora biti između :min i :max kilobajta.",
        "string"  => ":attribute mora biti između :min i :max karaktera.",
        "array"   => ":attribute mora imati između :min i :max predmeta.",
    ),
    "boolean"                   => ":attribute mora biti tačno ili netačno.",
    "confirmed"                 => ":attribute potvrda se ne podudara.",
    "date"                      => ":attribute nije validan datum.",
    "date_format"               => ":attribute ne odgovara formatu :format.",
    "different"                 => ":attribute i :other se moraju razlikovati.",
    "digits"                    => ":attribute mora imati :digits cifre.",
    "digits_between"            => ":attribute mora biti između :min i :max cifara.",
    "email"                     => ":attribute mora biti validna email adresa.",
    "exists"                    => "Označeni :attribute nije validan.",
    "image"                     => ":attribute mora biti slika.",
    "in"                        => "Označeni :attribute je nevažeći.",
    "integer"                   => ":attribute mora biti ceo broj.",
    "ip"                        => ":attribute mora biti važeća IP adresa.",
    "max"                       => array(
        "numeric" => ":attribute ne može biti veći od :max.",
        "file"    => ":attribute ne može biti veći od :max kilobajta.",
        "string"  => ":attribute ne može biti veći od :max karaktera.",
        "array"   => ":attribute ne može imati više od :max stavki.",
    ),
    "mimes"                     => ":attribute mora biti fajl tipa: :values.",
    "min"                       => array(
        "numeric" => ":attribute treba da bude najmanje :min.",
        "file"    => ":attribute treba da ima manje od :min kilobajta.",
        "string"  => ":attribute treba da ima manje od :min karaktera.",
        "array"   => ":attribute treba da ima najmanje :min stavki.",
    ),
    "not_in"                    => "Označeni :attribute je nevažeći.",
    "numeric"                   => ":attribute mora biti broj.",
    "regex"                     => ":attribute format je nevažeći.",
    "required"                  => ":attribute polje je obavezno.",
    "required_if"               => ":attribute polje je obavezno kada :other je :value.",
    "required_with"             => ":attribute polje je obavezno kada :values je present.",
    "required_with_all"         => ":attribute polje je obavezno kada :values je present.",
    "required_without"          => ":attribute polje je obavezno kada :values je not present.",
    "required_without_all"      => ":attribute polje je obavezno kada kada nije prisutna nijedna od :values.",
    "same"                      => ":attribute i :other se moraju podudarati.",
    "size"                      => array(
        "numeric" => ":attribute mora biti :size.",
        "file"    => ":attribute mora biti :size kilobajta.",
        "string"  => ":attribute mora imati :size karaktera.",
        "array"   => ":attribute mora sadržati :size stavki.",
    ),
    "unique"                    => ":attribute je već zauzet.",
    "url"                       => ":attribute format nije važeći.",
    "template_exists"           => "Označeni :attribute nije važeći.",
    "is_valid_captcha"          => "Uneti captcha kod je nevažeći ili netačan, pokušajte ponovo.",
    "user_password_strength"    => ":attribute mora sadržati: :user_password_strength.",
    "operator_password_strength" => ":attribute mora sadržati: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Logotip mora da usmerava na važeću fajl slike (direktni URL ili relativni put do osnovnog direktorijuma).",

    /*
     * 2.1.1
     */
    "old_password"              => ":attribute polje nije važeće.",

    /*
     * 2.2.0
     */
    "required_with_translation" => ":translation prevod za :attribute polje je obavezno kada su :values prisutne.",
    "max_translation"           => ":translation prevod za :attribute polje ne može biti veće od :max karaktera.",
    "unique_translation"        => ":translation prevod za :attribute polje je već zauzeto.",

    /*
     * 2.3.0
     */
    "required_translation"      => ":translation prevod za :attribute polje je obavezno.",
    "customfield_not_cyclic"    => "Polje ne može zavisiti od jednog od subpolja.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Slug polje može sadržati samo alfanumeričke karaktere.",
    "article_slug_unique"       => "Slug je već zauzet.",
    "captcha_required"          => "Captcha kod je obavezan.",
    "ticket_number_format"      => "Format broja tiketa nije nevažeći.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => ":attribute mora biti datum posle ili jednak :date.",
    "before_or_equal"           => ":attribute mora biti datum pre ili jednak :date.",
    "dimensions"                => ":attribute ima nevažeću dimenziju slike.",
    "distinct"                  => ":attribute polje ima dupliranu vrednost.",
    "file"                      => ":attribute mora biti fajl.",
    "filled"                    => ":attribute polje mora imati vrednost.",
    "gt"                        => array(
        "numeric" => ":attribute mora biti veći od :value.",
        "file"    => ":attribute mora biti veći od :value kilobajta.",
        "string"  => ":attribute mora imati više od :value karaktera.",
        "array"   => ":attribute mora imati više od :value stavki.",
    ),
    "gte"                       => array(
        "numeric" => ":attribute mora biti veći ili jednak od :value.",
        "file"    => ":attribute mora biti veći ili jednak od :value kilobajta.",
        "string"  => ":attribute mora imat i više ili jednako :value karaktera.",
        "array"   => ":attribute mora imati :value stavki ili više.",
    ),
    "in_array"                  => ":attribute polje ne postoji u :other.",
    "ipv4"                      => ":attribute mora biti validna IPv4 adresa.",
    "ipv6"                      => ":attribute mora biti validna IPv6 adresa.",
    "json"                      => ":attribute mora biti validan JSON string.",
    "lt"                        => array(
        "numeric" => ":attribute mora biti manji :value.",
        "file"    => ":attribute mora biti manji :value kilobajta.",
        "string"  => ":attribute mora imati manje od :value karaktera.",
        "array"   => ":attribute mora imati manje od :value stavki.",
    ),
    "lte"                       => array(
        "numeric" => ":attribute mora biti manji ili jednak od :value.",
        "file"    => ":attribute mora biti manji ili jednak od :value kilobajta.",
        "string"  => ":attribute mora imati manje ili jednako :value karaktera.",
        "array"   => ":attribute mora imati manje ili jednako :value stavki.",
    ),
    "mimetypes"                 => ":attribute mora biti tip fajla: :values.",
    "not_regex"                 => ":attribute format nije važeći.",
    "present"                   => ":attribute polje mora postojati.",
    "required_unless"           => ":attribute polje je obavezno osim ako je :other  :values.",
    "string"                    => ":attribute mora biti string.",
    "timezone"                  => ":attribute mora biti validna zona.",
    "uploaded"                  => ":attribute otpremanje nije uspelo.",

    /*
     * 2.5.0
     */
    "domain"                    => "Jedan ili više imena domena nisu važeći.",

    /*
     * 2.5.1
     */
    "valid_twig"                => ":attribute nije validan. Molimo koristite 'Preview' dugme za više detalja.",

    /*
     * 3.0.0
     */
    "embed_image"               => ":attribute mora biti fajl tipa: jpeg, png ili gif.",
    "starts_with"               => ":attribute mora početi sa nekom od sledećih vrednosti: :values.",

    /*
     * 3.4.0
     */
    "password"                  => "Lozinka je netačna.",

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
            "exists" => "Označena uloga nije validna.",
        ),
        "category.*.type" => array(
            "required" => "Mora se odabrati jedan ili više tipova samoposluživanja.",
        ),
        "category.*.categories" => array(
            "required" => "Kada je izabrana vrsta samoposluživanja, potrebna je jedna ili više kategorija.",
            "exists"   => "Jedna ili više izabranih kategorija su nevažeće.",
        ),
        "brand.*" => array(
            "exists" => "Označeni brend nije validan.",
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
