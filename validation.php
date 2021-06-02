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

    "accepted"                  => "از :ویژگی مورد پذیرش قرار گرفت.",
    "active_url"                => "ز: این ویژگی یک آدرس معتبر نمی باشد..",
    "after"                     => "The :attribute must be a date after :date.",
    "alpha"                     => "از: ویژگی ممکن است تنها شامل حروف باشد.",
    "alpha_dash"                => "از: صفت تنها می تواند شامل حروف، اعداد، و خط تیره باشد.",
    "alpha_num"                 => "از: صفت تنها می تواند شامل حروف و اعداد باشد.",
    "array"                     => "از: ویژگی باید یک آرایه باشد.",
    "before"                    => "The :attribute must be a date before :date.",
    "between"                   => array(
        "numeric" => "The :attribute must be between :min and :max.",
        "file"    => "The :attribute must be between :min and :max kilobytes.",
        "string"  => "The :attribute must be between :min and :max characters.",
        "array"   => "The :attribute must have between :min and :max items.",
    ),
    "boolean"                   => "از: ویژگی باید درست یا غلط باشد..",
    "confirmed"                 => "از: تایید ویژگی مطابقت ندارد.",
    "date"                      => "از: صفت یک تاریخ معتبر نمی باشد.",
    "date_format"               => "The :attribute does not match the format :format.",
    "different"                 => "از: ویژگی و: دیگر باید متفاوت باشد.",
    "digits"                    => "از: ویژگی باید: رقم رقم.",
    "digits_between"            => "از: ویژگی باید درمیان:کوچکترین:و بزرگترین باشد.",
    "email"                     => "از: ویژگی باید یک آدرس ایمیل معتبر باشد.",
    "exists"                    => "انتخاب: ویژگی نامعتبر است.",
    "image"                     => "از: ویژگی باید یک تصویر باشد.",
    "in"                        => "انتخاب: ویژگی نامعتبر است.",
    "integer"                   => "از: ویژگی باید عدد صحیح باشد.",
    "ip"                        => "از: ویژگی باید یک آدرس IP معتبر باشد.",
    "max"                       => array(
        "numeric" => "از: ویژگی ممکن است بیشتر از: حداکثر.",
        "file"    => "از: ویژگی ممکن است بیشتر از: کیلوبایت حداکثر.",
        "string"  => "از: ویژگی ممکن است بیشتر از: حداکثر کاراکتر.",
        "array"   => "The :attribute may not have more than :max items.",
    ),
    "mimes"                     => "از: ویژگی باید یک فایل از این نوع باشد:: ارزش.",
    "min"                       => array(
        "numeric" => "از: ویژگی باید حداقل: دقیقه.",
        "file"    => "از: ویژگی باید حداقل: کیلوبایت دقیقه.",
        "string"  => "The :attribute must be at least :min characters.",
        "array"   => "The :attribute must have at least :min items.",
    ),
    "not_in"                    => "انتخاب: ویژگی نامعتبر است.",
    "numeric"                   => "از: ویژگی باید یک عدد باشد.",
    "regex"                     => "از: فرمت ویژگی نامعتبر است.",
    "required"                  => "از: فیلد ویژگی نیاز است.",
    "required_if"               => "The :attribute field is required when :other is :value.",
    "required_with"             => "The :attribute field is required when :values is present.",
    "required_with_all"         => "The :attribute field is required when :values is present.",
    "required_without"          => "The :attribute field is required when :values is not present.",
    "required_without_all"      => "The :attribute field is required when none of :values are present.",
    "same"                      => "The :attribute and :other must match.",
    "size"                      => array(
        "numeric" => "از: ویژگی باید: اندازه.",
        "file"    => "از: ویژگی باید: کیلوبایت اندازه.",
        "string"  => "از: ویژگی باید: اندازه کارکتر.",
        "array"   => "از: ویژگی باید شامل: موارد اندازه.",
    ),
    "unique"                    => "از: صفت حال حاضر گرفته شده.",
    "url"                       => "از: فرمت ویژگی نامعتبر است.",
    "template_exists"           => "انتخاب: ویژگی نامعتبر است.",
    "is_valid_captcha"          => "کد تصویر امنیتی وارد شده نامعتبر یا نادرست بود، لطفا مجددا تلاش کنید.",
    "user_password_strength"    => "The :attribute must contain: :user_password_strength.",
    "operator_password_strength" => "The :attribute must contain: :operator_password_strength.",

    /*
     * 2.1.0
     */
    "logo"                      => "The logo must point to a valid image file (direct URL or relative file path to base directory).",

    /*
     * 2.1.1
     */
    "old_password"              => "The :attribute field is invalid.",

    /*
     * 2.2.0
     */
    "required_with_translation" => "The :translation translation for the :attribute field is required when :values is present.",
    "max_translation"           => "The :translation translation for the :attribute field may not be greater than :max characters.",
    "unique_translation"        => "The :translation translation for the :attribute field has already been taken.",

    /*
     * 2.3.0
     */
    "required_translation"      => "The :translation translation for the :attribute field is required.",
    "customfield_not_cyclic"    => "The field cannot depend on one of its children.",

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
    "json"                      => "The :attribute must be valid JSON.",
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
    "timezone"                  => "از: ویژگی باید یک منطقه معتبر باشد.",
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
            "exists" => "The selected role is invalid.",
        ),
        "category.*.type" => array(
            "required" => "A subject is required for each provided email.",
        ),
        "category.*.categories" => array(
            "required" => "The content field is required for each provided email.",
            "exists"   => "One or more of the selected categories is invalid.",
        ),
        "brand.*" => array(
            "exists" => "The selected brand is invalid.",
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
