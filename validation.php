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

    "accepted"                  => " :attribute должен быть принят.",
    "active_url"                => " :attribute не является допустимым URL.",
    "after"                     => " :attribute должен быть датой после :date.",
    "alpha"                     => " :attribute может содержать только буквы.",
    "alpha_dash"                => " :attribute может содержать только буквы, цифры и тире.",
    "alpha_num"                 => " :attribute может содержать только буквы и цифры.",
    "array"                     => " :attribute должен быть массивом.",
    "before"                    => " :attribute должен быть датой до :date.",
    "between"                   => array(
        "numeric" => " :attribute должно быть между :min и :max.",
        "file"    => " :attribute должно быть между :min и :max килобайт.",
        "string"  => " :attribute должно быть между :min и :max символы.",
        "array"   => " :attribute должно быть между :min и :max значением. ",
    ),
    "boolean"                   => " :attribute должно быть истинным или ложным.",
    "confirmed"                 => " :attribute не совпадает.",
    "date"                      => " :attribute не является допустимой датой.",
    "date_format"               => " :attribute не соответствует формату :format.",
    "different"                 => " :attribute и :other должен быть другим.",
    "digits"                    => " :attribute должно быть :digits цифрой.",
    "digits_between"            => " :attribute должно быть между :min и :max цифрой.",
    "email"                     => " :attribute Адрес эл. почты должен быть действительным.",
    "exists"                    => " :attribute является недействительным.",
    "image"                     => " :attribute должен быть изображением. ",
    "in"                        => " :attribute  является недействительным.",
    "integer"                   => " :attribute должно быть целым числом",
    "ip"                        => " :attribute должен быть действительный IP-адрес.",
    "max"                       => array(
        "numeric" => " :attribute не может быть больше чем :max.",
        "file"    => " :attribute не может быть больше чем :max килобайт.",
        "string"  => " :attribute не может быть больше чем :max символы.",
        "array"   => " :attribute не может быть больше чем :max обьекты.",
    ),
    "mimes"                     => " :attribute должен быть файл типа: :values.",
    "min"                       => array(
        "numeric" => " :attribute должен быть не менее :min.",
        "file"    => " :attribute должен быть не менее :min килобайт.",
        "string"  => " :attribute должен быть не менее :min символов.",
        "array"   => " :attribute должен быть не менее :min предметы.",
    ),
    "not_in"                    => "Выбранный :attribute недейтвителен.",
    "numeric"                   => " :attribute должен быть числом.",
    "regex"                     => " :attribute формат неверен.",
    "required"                  => " :attribute поле, обязательное для заполнения.",
    "required_if"               => " :attribute поле обязательно для заполнения, когда :other имеет значение :value.",
    "required_with"             => " :attribute поле обязательно для заполнения, когда :values # true #.",
    "required_with_all"         => " :attribute поле обязательно для заполнения, когда :values  # true #.",
    "required_without"          => " :attribute поле обязательно для заполнения, когда :values # false #.",
    "required_without_all"      => " :attribute поле обязательно для заполнения, когда ни один из :values не присутствует.",
    "same"                      => " :attribute и :other должен совпадать.",
    "size"                      => array(
        "numeric" => " :attribute должен быть :size.",
        "file"    => " :attribute должен быть :size килобайт.",
        "string"  => " :attribute должен быть :size символов.",
        "array"   => " :attribute должен содержать :size.",
    ),
    "unique"                    => " :attribute уже принято.",
    "url"                       => " :attribute формат неверен.",
    "template_exists"           => " Выбранный :attribute является недействительным.",
    "is_valid_captcha"          => " Введенный код был неверен или неверен, пожалуйста, попробуйте еще раз.",
    "user_password_strength"    => " :attribute должен содержать: :user_password_strength.",
    "operator_password_strength" => " :attribute должен содержать: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "Логотип должен указывать на действительный файл изображения (прямой URL-адрес или относительный путь к базовому каталогу).",

    /*
     * 2.1.1
     */
    "old_password"              => " :attribute поле неверно. ",

    /*
     * 2.2.0
     */
    "required_with_translation" => " :translation перевод для поля: атрибут обязателен, когда присутствует :values ",
    "max_translation"           => " :translation перевод для поля: атрибута не может быть больше, чем :max символов.",
    "unique_translation"        => " :translation перевод для :attribute поле уже занят.",

    /*
     * 2.3.0
     */
    "required_translation"      => " :translation перевод для :attribute поле, обязательное для заполнения.",
    "customfield_not_cyclic"    => "Поле не может зависеть от одного из своих дочерних полей.",

    /*
     * 2.3.1
     */
    "is_slug"                   => "Поле slug может содержать только буквенно-цифровые символы, пожалуйста, указывайте в процентах любые специальные символы.",
    "article_slug_unique"       => " slug уже указан.",
    "captcha_required"          => "Капча обязательна.",
    "ticket_number_format"      => "Формат номера тикета является недопустимым.",

    /*
     * 2.4.0
     */
    "after_or_equal"            => " :attribute должна быть дата после или равная :date.",
    "before_or_equal"           => " :attribute должна быть дата, предшествующая или равная :date.",
    "dimensions"                => " :attribute имеет недопустимые размеры изображения.",
    "distinct"                  => " :attribute поле имеет повторяющееся значение.",
    "file"                      => " :attribute должно быть, это файл.",
    "filled"                    => " :attribute поле должно иметь значение.",
    "gt"                        => array(
        "numeric" => " :attribute должно быть больше, чем :value.",
        "file"    => " :attribute должно быть больше, чем :value килобайты.",
        "string"  => " :attribute должно быть больше, чем :value символов.",
        "array"   => " :attribute должно быть больше чем :value штук.",
    ),
    "gte"                       => array(
        "numeric" => " :attribute должно быть больше или равно :value.",
        "file"    => " :attribute должно быть больше или равно :value килобайт.",
        "string"  => " :attribute должно быть больше или равно :value символов.",
        "array"   => " :attribute должно быть :value штук или больше.",
    ),
    "in_array"                  => " :attribute поле не существует в :other.",
    "ipv4"                      => " :attribute должен быть действительным IPv4-адресом.",
    "ipv6"                      => " :attribute должен быть действительным адресом IPv6.",
    "json"                      => " :attribute должна быть допустимой строкой JSON.",
    "lt"                        => array(
        "numeric" => " :attribute должно быть меньше чем :value.",
        "file"    => " :attribute должно быть меньше чем :value килобайт.",
        "string"  => " :attribute должно быть меньше чем :value символов.",
        "array"   => " :attribute должно быть меньше чем :value штук.",
    ),
    "lte"                       => array(
        "numeric" => " :attribute должно быть меньше или равно :value.",
        "file"    => " :attribute должно быть меньше или равно :value килобайт.",
        "string"  => " :attribute должно быть меньше или равно :value символов.",
        "array"   => " :attribute должно быть меньше или равно :value штук.",
    ),
    "mimetypes"                 => " :attribute должен быть файл типа: :values.",
    "not_regex"                 => " :attribute формат неверен.",
    "present"                   => " :attribute поле должно присутствовать.",
    "required_unless"           => " :attribute поле обязательно для заполнения, если :other в :values.",
    "string"                    => " :attribute должен быть строкой.",
    "timezone"                  => " :attribute должна быть действительной зоной.",
    "uploaded"                  => " :attribute не удалось загрузить.",

    /*
     * 2.5.0
     */
    "domain"                    => "Одно или несколько доменных имен недействительны.",

    /*
     * 2.5.1
     */
    "valid_twig"                => " :attribute является недействительным. Пожалуйста, используйте кнопку # Просмотр # для получения подробной информации об ошибке.",

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
            "exists" => "Выбранная роль является недопустимой.",
        ),
        "category.*.type" => array(
            "required" => "Необходимо выбрать один или несколько типов самообслуживания.",
        ),
        "category.*.categories" => array(
            "required" => "При выборе типа самообслуживания требуется наличие одной или нескольких категорий.",
            "exists"   => "Одна или несколько выбранных категорий являются недопустимыми.",
        ),
        "brand.*" => array(
            "exists" => "Выбранный бренд является недействительным.",
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
