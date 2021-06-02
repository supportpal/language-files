<?php

return array(

    "customfield"               => "Özel Alan|Özel Alanlar",

    // Options
    "boolean"                   => "Boolean",
    "checkbox"                  => "Onay Kutusu",
    "checklist"                 => "Kontrol Listesi",
    "date"                      => "Tarih",
    "multiple"                  => "Çoklu Seçenekler",
    "options"                   => "Seçenekler",
    "radio"                     => "Radyo Düğmeleri",
    "rating"                    => "Derecelendirme (1 ila 5)",
    "text"                      => "Metin",
    "textarea"                  => "Metin Alanı",

    "public"                    => "Açık",
    "public_desc"               => "Özel alan kullanıcı arayüzünde herkese açık olarak gösteriliyorsa veya yalnızca personel içindir.",
    "encrypted"                 => "Şifreli",
    "purge_desc"                => "Talep çözüldüğünde özel alan değerinin otomatik olarak temizlenmesi gerekiyorsa.",
    "locked"                    => "Kitli",
    "locked_desc"               => "Özel alan değeri ayarlandıktan sonra kullanıcı tarafından değiştirilemez.",
    "department_desc"           => "Alanın hangi bölümlerde kullanılabileceğini seçin.",

    /*
     * 2.0.2
     */
    "please_select"             => "Lütfen Seçin...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Özel alanın altında görünecek ve isteğe bağlı olarak boş bırakılabilecek yardım metni.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Alanın hangi markalarda bulunduğunu seçin.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Mevcut seçeneklerin silinmesi, o anda bu değerlerin seçili olduğu kaydedilmiş alanları temizler.",
    "regex_basic_desc"          => "İsteğe bağlı olarak, özel alan değerini doğrulamak için normal bir ifade belirtin.",
    "regex_desc"                => "Normal ifade büyük / küçük harfe duyarlıdır, normal ifade sınırlayıcılarını belirtmeye gerek yoktur ve eğik çizgi kullanımı otomatik olarak kaçar. Örnek: ^ [a-z0-9 _-] {6,18} $, değerin 6-18 karakter uzunluğunda olmasını ve yalnızca alfasayısal karakterler, alt çizgiler ve tire karışımlarını içermesini zorunlu kılar.",
    "regex_error_message"       => "Doğrulama Hata Mesajı",
    "regex_error_message_desc"  => "İsteğe bağlı olarak, değer normal ifade doğrulamasıyla eşleşmezse gösterilecek özel bir hata iletisi belirtin, aksi takdirde genel bir ileti gösterilir. İleti tam olarak girildiği şekilde gösterilecektir, bu nedenle hata iletisini daha belirgin hale getirmek için özel alan adını eklemenizi öneririz.",
    "custom_field_values"       => "Özel Alan Değerleri",
    "depends_on"                => "Bağlandı",
    "depends_on_desc"           => "Seçilirse, bu alan yalnızca belirtilen alan değeri seçildiğinde kullanıcıya gösterilir. Marka ve departman görünürlüğü, bağlı olduğu alandan otomatik olarak devralınacaktır.",
    "select_option"             => "Bir seçenek seçin...",
    "purge"                     => "Temizle",
    "encrypted_desc"            => "Özel alan değeri hassassa ve şifrelenmiş veritabanına kaydedilmesi gerekiyorsa. Özel alan oluşturulduktan sonra bu değiştirilemez.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Özel alanın doldurulması gerekiyorsa. Onay kutusu, kontrol listesi veya birden fazla seçenek türü için kullanıcının en az bir seçenek seçmesi gerekir.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ENCRYPTED **",
);
