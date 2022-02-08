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

    "accepted"                  => ":attribute musi być zaakceptowany.",
    "active_url"                => ":attribute nie jest prawidłowym adresem URL.",
    "after"                     => "Wpis :attribute musi być datą po :date.",
    "alpha"                     => "Pole :attribute może zawierać tylko litery.",
    "alpha_dash"                => "Pole :attribute może zawierać tylko litery, cyfry, myślniki i podkreślenia.",
    "alpha_num"                 => ":attribute może zawierać tylko litery i cyfry.",
    "array"                     => ":attribute musi być tablicą.",
    "before"                    => "Wpis :attribute musi być datą przed :date.",
    "between"                   => array(
        "numeric" => "Pole :attribute musi być między :min a :max.",
        "file"    => "Wartość :attribute musi zawierać się w przedziale od :min do :max kilobajtów.",
        "string"  => "Element :attribute musi zawierać się między :min a :max znakami.",
        "array"   => "Element :attribute musi zawierać elementy od :min do :max.",
    ),
    "boolean"                   => "Pole :attribute musi być prawdą lub fałszem.",
    "confirmed"                 => "Potwierdzenie :attribute nie pasuje.",
    "date"                      => ":attribute nie jest poprawną datą.",
    "date_format"               => ":attribute nie pasuje do formatu :format.",
    "different"                 => ":attribute i :other muszą być różne.",
    "digits"                    => ":attribute musi składać się z :digits cyfr.",
    "digits_between"            => ":attribute musi zawierać się między cyframi :min i :max.",
    "email"                     => ":attribute musi być poprawnym adresem e-mail.",
    "exists"                    => "Wybrany :attribute jest nieprawidłowy.",
    "image"                     => ":attribute musi być obrazem.",
    "in"                        => "Wybrany :attribute jest nieprawidłowy.",
    "integer"                   => ":attribute musi być liczbą całkowitą.",
    "ip"                        => ":attribute musi być poprawnym adresem IP.",
    "max"                       => array(
        "numeric" => "Pole :attribute nie może być większe niż :max.",
        "file"    => "Wartość :attribute nie może być większa niż :max kilobajtów.",
        "string"  => "Ilość :attribute nie może być większa niż :max znaków.",
        "array"   => "W :attribute nie może być więcej niż :max elementów.",
    ),
    "mimes"                     => "Plik :attribute musi być plikiem typu: :values.",
    "min"                       => array(
        "numeric" => "Pole :attribute musi mieć co najmniej :min.",
        "file"    => ":attribute musi mieć co najmniej :min kilobajtów.",
        "string"  => "Element :attribute musi mieć co najmniej :min znaków.",
        "array"   => "Pole :attribute musi zawierać co najmniej :min elementów.",
    ),
    "not_in"                    => "Wybrany :attribute jest nieprawidłowy.",
    "numeric"                   => ":attribute musi być liczbą.",
    "regex"                     => "Format :attribute jest nieprawidłowy.",
    "required"                  => "Pole :attribute jest wymagane.",
    "required_if"               => "Pole :attribute jest wymagane, gdy :other ma wartość :value.",
    "required_with"             => "Pole :attribute jest wymagane, gdy występuje :values.",
    "required_with_all"         => "Pole :attribute jest wymagane, gdy występuje :values.",
    "required_without"          => "Pole :attribute jest wymagane, gdy nie ma :values.",
    "required_without_all"      => "Pole :attribute jest wymagane, gdy nie ma żadnego z :values.",
    "same"                      => ":attribute i :other muszą pasować.",
    "size"                      => array(
        "numeric" => "Pole :attribute musi być :size.",
        "file"    => "Wartość :attribute musi mieć :size kilobajtów.",
        "string"  => "Element :attribute musi składać się ze :size znaków.",
        "array"   => "Pole :attribute musi zawierać :size elementy.",
    ),
    "unique"                    => ":attribute został już zajęty.",
    "url"                       => "Format :attribute jest nieprawidłowy.",
    "template_exists"           => "Wybrany :attribute jest nieprawidłowy.",
    "is_valid_captcha"          => "Wprowadzony kod captcha jest nieprawidłowy lub niepoprawny, spróbuj ponownie.",
    "user_password_strength"    => "Pole :attribute musi zawierać: :user_password_strength.",
    "operator_password_strength" => "Pole :attribute musi zawierać: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Logo musi wskazywać na prawidłowy plik obrazu (bezpośredni adres URL lub względna ścieżka pliku do katalogu podstawowego).",

    /*
     * 2.1.1
     */
    "old_password"              => "Pole :attribute jest nieprawidłowe.",

    /*
     * 2.2.0
     */
    "required_with_translation" => "Tłumaczenie :translation pola :attribute jest wymagane, gdy występuje :values.",
    "max_translation"           => "Tłumaczenie :translation dla pola :attribute nie może być większe niż :max znaków.",
    "unique_translation"        => "Tłumaczenie :translation pola :attribute zostało już zajęte.",

    /*
     * 2.3.0
     */
    "required_translation"      => "Tłumaczenie :translation dla pola :attribute jest wymagane.",
    "customfield_not_cyclic"    => "Pole nie może zależeć od jednego ze swoich dzieci.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Pole Slug może zawierać tylko znaki alfanumeryczne, proszę zakodować procentowo wszelkie znaki specjalne.",
    "article_slug_unique"       => "Slug jest już używany",
    "captcha_required"          => "Captcha jest wymagana.",
    "ticket_number_format"      => "Format numeru zgłoszenia jest nieprawidłowy.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => ":attribute musi być datą po lub równą :date.",
    "before_or_equal"           => "Wartość :attribute musi być datą wcześniejszą lub równą :date.",
    "dimensions"                => ":attribute ma nieprawidłowe wymiary obrazu.",
    "distinct"                  => "Pole :attribute ma zduplikowaną wartość.",
    "file"                      => ":attribute musi być plikiem.",
    "filled"                    => "Pole :attribute musi mieć wartość.",
    "gt"                        => array(
        "numeric" => "Ilość :attribute musi być większa niż :value.",
        "file"    => "Wartość :attribute musi być większa niż :value kilobajtów.",
        "string"  => "Element :attribute musi mieć więcej niż :value znaków.",
        "array"   => "Element :attribute musi mieć więcej niż :value pozycji.",
    ),
    "gte"                       => array(
        "numeric" => "Wartość :attribute musi być większa lub równa :value.",
        "file"    => "Wartość :attribute musi być większa lub równa :value kilobajtów.",
        "string"  => "Element :attribute musi być większy lub równy :value znaków.",
        "array"   => "Element :attribute musi mieć elementy :value lub więcej.",
    ),
    "in_array"                  => "Pole :attribute nie istnieje w :other.",
    "ipv4"                      => ":attribute musi być poprawnym adresem IPv4.",
    "ipv6"                      => ":attribute musi być poprawnym adresem IPv6.",
    "json"                      => ":attribute musi być prawidłowym formatem JSON.",
    "lt"                        => array(
        "numeric" => "Pole :attribute musi być mniejsze niż :value.",
        "file"    => "Element :attribute musi być mniejszy niż :value kilobajtów.",
        "string"  => "Element :attribute musi być mniejszy niż :value znaków.",
        "array"   => "Element :attribute musi mieć mniej niż :value pozycji.",
    ),
    "lte"                       => array(
        "numeric" => "Wartość :attribute musi być mniejsza lub równa :value.",
        "file"    => "Element :attribute musi być mniejszy lub równy :value kilobajtów.",
        "string"  => "Element :attribute musi być mniejszy lub równy :value znaków.",
        "array"   => "W :attribute nie może być więcej niż :value elementów.",
    ),
    "mimetypes"                 => ":attribute musi być plikiem typu: :values.",
    "not_regex"                 => "Format :attribute jest nieprawidłowy.",
    "present"                   => "Pole :attribute musi być teraźniejsze.",
    "required_unless"           => "Pole :attribute jest wymagane, chyba że :other jest w :values.",
    "string"                    => ":attribute musi być ciągiem znaków.",
    "timezone"                  => ":attribute musi być prawidłową strefą.",
    "uploaded"                  => "Przesłanie :attribute nie powiodło się.",

    /*
     * 2.5.0
     */
    "domain"                    => "Co najmniej jedna nazwa domeny jest nieprawidłowa.",

    /*
     * 2.5.1
     */
    "valid_twig"                => "Pole :attribute jest nieprawidłowe. Użyj przycisku 'Podgląd' w celu uzyskania szczegółów błędu.",

    /*
     * 3.0.0
     */
    "embed_image"               => "Plik :attribute musi być plikiem typu: jpeg, png lub gif.",
    "starts_with"               => "Pole :attribute musi zaczynać się jednym z następujących: :values.",

    /*
     * 3.4.0
     */
    "password"                  => "Hasło jest nieprawidłowe.",

    /*
     * 3.5.0
     */
    'phone'                     => "Podany numer telefonu jest nieprawidłowy.",

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
            "exists" => "Wybrana rola jest nieprawidłowa.",
        ),
        "category.*.type" => array(
            "required" => "Należy wybrać co najmniej jeden typ samoobsługi.",
        ),
        "category.*.categories" => array(
            "required" => "Po wybraniu typu samoobsługi wymagana jest co najmniej jedna kategoria.",
            "exists"   => "Co najmniej jedna z wybranych kategorii jest nieprawidłowa.",
        ),
        "brand.*" => array(
            "exists" => "Wybrana marka jest nieprawidłowa.",
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
