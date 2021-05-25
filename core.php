<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Панель оператора",
    "welcome"                   => "Добро пожаловать в SupportPal",
    "welcome_desc"              => "Вы приняли умное решение. Нажмите # Пуск #, чтобы начать краткий обзор наших настроек и функций.",

    // Dashboard
    "submit_ticket"             => "Отправить тикет",
    "submit_ticket_desc"        => "Используйте эту форму, чтобы описать свою проблему и отправить заявку нам.",
    "track_ticket"              => "Отследить тикет",
    "track_ticket_desc"         => "Используйте свой адрес электронной почты и номер тикета, чтобы отслеживать статус вашего тикета, либо авторизуйтесь чтобы просмотреть все ваши тикеты.",
    "my_tickets"                => "Мои тикеты",
    "my_tickets_desc"           => "Отслеживайте свои тикеты. Вы можете найти как активные, так и ранее поданные тикеты здесь.",
    "no_modules"                => "Модули не включены.",
    "search_results"            => "Результаты поиска",
    "found_results"             => "Найдено :total записей по поисковому запросу",

    // Maintenance
    "maintenance"               => "В настоящее время мы проводим техническое обслуживание",
    "maintenance_desc"          => "Наша служба поддержки временно недоступна, так как мы выполняем работы по техническому обслуживанию. Спасибо за ваше терпение, пока мы вносим эти изменения, мы скоро вернемся.",
    "maintenance_active"        => "Режим обслуживания активен.",

    // About
    "license_status"            => "Статус лицензии",
    "license_code"              => "Код лицензии",
    "change_license"            => "Изменить лицензию",
    "license_info"              => "Информация о лицензии",
    "license_owner"             => "Владелец лицензии",
    "license_created"           => "Лицензия создана",
    "license_type"              => "Тип лицензии",
    "branding"                  => "Брендинг",
    "license_expires"           => "Срок действия лицензии истекает",
    "license_valid_ip"          => "Лицензия действительна на IP-адреса",
    "support_status"            => "Статус поддержки",
    "support_expires"           => "Поддержка истекает",
    "version_info"              => "Информация о версии",
    "installed_version"         => "Установленная версия",
    "available_version"         => "Доступная версия",
    "monthly_product"           => "* Дата истечения срока действия будет автоматически корректироваться ежемесячно после оплаты всех неоплаченных счетов.",

    // API Tokens
    "api_token"                 => "API Токен|API Токены",
    "token"                     => "Токен",
    "regenerate_token"          => "Перегенерировать токен",
    "access_level"              => "Уровень доступа",
    "read_write"                => "Читать и писать",
    "read_only"                 => "Только чтение",

    // Spam Rules & Filtering
    "spam_rule"                 => "Спам-правило | Спам-правила",
    "containing_text"           => "Содержащий текст",
    "filter_new_message"        => "Новое сообщение (от пользователя)",
    "filter_new_comment"        => "Новый комментарий самообслуживания (от пользователя)",
    "filter_user_login"         => "Логин пользователя",
    "filter_operator_login"     => "Логин оператора",
    "filter_api_access"         => "API Доступ",
    "content"                   => "Содержание",
    "sender"                    => "Отправитель",
    "content_sender"            => "Содержание и отправитель",

    // Company
    "company"                   => "Компания | Компании",

    // Email
    "default_email_addr"        => "Адрес электронной почты по умолчанию",
    "default_email_addr_desc"   => "Адрес электронной почты, который будет использоваться в поле отправителя в большинстве сообщений, отправляемых системой.",
    "include_operator_name"     => "Включить имя оператора",
    "include_operator_name_desc"=> "Укажите имя оператора в поле # От кого # для писем с ответами на тикеты. Например: От: Алексей ",
    "include_dept_name"         => "Включить название отдела",
    "include_dept_name_desc"    => "Укажите название отдела в поле # От # всех электронных писем, связанных с заявками. Обратите внимание, что это обычно создает новую ветку электронной почты, если данный тикет меняет отделы.",
    "global_email_header"       => "Глобальный заголовок электронной почты",
    "global_email_header_desc"  => "Добавьте заголовок ко всем электронным письмам, отправленным системой. HTML разрешен.",
    "global_email_footer"       => "Глабальный Email Footer",
    "global_email_footer_desc"  => "Добавьте нижний колонтитул ко всем электронным письмам, отправленным системой. HTML принят.",
    "email_template"            => "Шаблон электронной почты | Шаблоны электронной почты",
    "email_log"                 => "Журнал электронной почты",
    "email_queue"               => "Очередь электронной почты",
    "email_queue_desc"          => "Ниже приведены электронные письма, которые стоят в очереди для отправки в ближайшее время (cron) ",
    "email_method"              => "Метод электронной почты",
    "php_mail_function"         => "PHP mail() function",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP хост",
    "smtp_port"                 => "SMTP порт",
    "smtp_encryption"           => "SMTP шифрование",
    "smtp_requires_auth"        => "Требуется аутентификация",
    "smtp_username"             => "SMTP логин",
    "smtp_password"             => "SMTP пароль",
    "ssl"                       => "SSL",
    "tls"                       => "TLS",
    "email_content"             => "Содержимое email",
    "email_content_desc"        => "Введите тему по умолчанию и содержимое электронной почты для этого шаблона, вы также можете написать шаблон на других языках. Если шаблон не установлен на другом языке, он будет использовать данные по умолчанию.",
    "outgoing"                  => "Исходящий",
    "incoming"                  => "Входящий",
    "incoming_spam"             => "Входящий (Отклоненный - Спам)",
    "incoming_throttled"        => "Входящий (Отклоненный  - throttled)",
    "email_subject"             => "Тема Email ",
    "twig_html_warning"         => "Twig не допускается внутри тегов / атрибутов HTML и будет автоматически удален при сохранении.",

    // Modules
    "modules"                   => "Модуль | Модули",
    "modules_desc"              => "Ниже приведен список всех доступных модулей, щелкните значок редактирования, чтобы обновить настройки этого модуля.",
    "module_disable"            => "Отключенные модули будут удалены из интерфейса администратора и интерфейса оператора.",

    // Scheduled tasks
    "scheduled_task"            => "Запланированная задача | Запланированные задачи",
    "interval_desc"             => "Установите, как часто эта задача запускается, например, установка 5 минут будет означать, что задача будет выполняться каждые 5 минут, если cron активен и работает.",
    "cron_settings"             => "Настройки Cron",
    "cron_running"              => "Запущен",
    "cron_not_running"          => "Не запущен",
    "task_ran"                  => "Успешно запустил запланированное задание вручную.",
    "task_failed"               => "Не удалось запустить запланированное задание вручную.",

    // Plugins
    "plugins"                   => "Плагин | Плагины",
    "installed_plugins"         => "Установленные плагины",
    "visit_plugin"              => "Посетить сайт плагина",

    // Messages
    "last_activity"             => "Последняя активность",
    "send_to"                   => "Отправить",
    "inbox"                     => "Входящие",
    "compose"                   => "Составить",

    // Utilities
    "utilities"                 => "Утилиты",

    // System Cleanup
    "system_cleanup"            => "Очистка системы",
    "system_cleanup_desc"       => "Используйте доступные параметры для удаления данных, которые больше не нужны.",
    "files"                     => "Файлы",
    "files_desc"                => "Следующие элементы хранятся в виде файлов в файловой системе.",
    "logs"                      => "Логи",
    "logs_desc"                 => "Следующие элементы хранятся в виде записей в базе данных.",
    "empty"                     => "Пусто",
    "prune"                     => "Удалить",
    "total_records"             => "Всего записей",
    "system_cache"              => "Системный кеш",
    "system_cache_desc"         => "Используется для хранения системных данных, которые не изменяются регулярно для ускорения работы приложения.",
    "template_cache"            => "Кеш шаблона",
    "template_cache_desc"       => "Предварительно скомпилированные версии представлений шаблонов сохраняются для сокращения времени загрузки.",
    "attachments_desc"          => "Вложения тикетов хранятся в файловой системе, но могут занимать место, вы можете удалить файлы вложений до определенной даты.",
    "system_activity_log_desc"  => "Хранит всю активность пользователей, операторов и самой системы, вы можете сократить записи до определенной даты.",
    "email_log_desc"            => "Хранит все входящие и исходящие электронные письма, вы можете удалить записи до определенной даты.",
    "operator_login_log_desc"   => "Хранит каждый раз, когда оператор входит в систему, вы можете обрезать записи до определенной даты.",

    // Captcha
    "captcha"                   => "Капча",
    "show_captcha"              => "Показывать капчу",

    // Widgets
    "dashboard"                 => "Панель",
    "add_remove_widget"         => "Добавить / удалить виджеты",
    "enable_tour"               => "Включить тур по продукту",

    // Product Tour
    "dashboard_desc"            => "Ваша личная панель инструментов. Виджеты могут быть удалены, сведены к минимуму и перемещены!",
    "private_messages"          => "Приватные сообщения",
    "messages_desc"             => "Личные сообщения служат удобным способом общения 1:1 с другими операторами службы поддержки.",
    "configure"                 => "Настройте свою справочную службу",
    "configure_desc"            => "SupportPal содержит ряд параметров, позволяющих настроить службу поддержки по своему усмотрению.",
    "default_email"             => "Адрес электронной почты по умолчанию",
    "default_email_desc"        => "Адрес электронной почты по умолчанию, используемый для всей исходящей корреспонденции пользователей.",
    "dept_settings_desc"        => "Мы понимаем, что отделы в вашей организации работают по-разному. Настройки отдела позволяют вам переопределить глобальные настройки.",
    "department_desc"           => "Отделы такие же, как в вашей организации. Полезно для обеспечения того, чтобы запросы клиентов быстро доставались к нужному персоналу.",
    "department_email"          => "Адреса электронной почты отдела",
    "dept_email_desc"           => "Несколько адресов электронной почты могут быть назначены для данного отдела. Сбор электронной почты выполняется по настроенным адресам, чтобы доставлять электронные письма от ваших клиентов в службу поддержки.",
    "dept_tmpl"                 => "Шаблоны электронной почты отдела",
    "dept_tmpl_desc"            => "Иногда вы можете захотеть изменить или полностью отключить шаблоны электронной почты отдела. Вы можете определить шаблоны электронной почты для конкретного отдела и включить их здесь.",
    "schedule_task_desc"        => "Запланированные задачи используются для автоматизации различных процессов в SupportPal, включая сбор заявок по электронной почте.",
    "schedule_task_2"           => "Запланированные задачи требуют создания задания cron для работы. Интервал для каждой задачи, выполняемой заданием cron, можно настроить с помощью формы редактирования.",
    "schedule_task_cron"        => "Cron работы",
    "schedule_task_3"           => "Создайте задание cron, аналогичное приведенному ниже, на вашем сервере, чтобы запланированные задания выполнялись автоматически.",
    "ticket_channel_desc"       => "Каналы тикетов - это методы создания тикетов. Они могут быть легко расширены, чтобы включать ваши собственные каналы, например, тикеты, открытые через Instagram.",
    "ticket_channel_2"          => "Мы предоставляем ряд каналов по умолчанию. Вы можете активировать и настроить каналы Facebook и Twitter для сбора тикетов, созданных в социальных сетях.",
    "user_desc"                 => "Пользователи, которые взаимодействуют с вашей системой, отображаются здесь. Вы можете добавлять, редактировать и удалять пользователей по мере необходимости.",
    "organisation_desc"         => "Пользователи могут быть назначены организациям, обеспечивающим им доступ к тикетам, открытым другим пользователям в их организации.",
    "operator_desc"             => "Здесь могут быть добавлены другие сотрудники, а также управление, в какие отделы они назначены.",
    "ticket_desc"               => "Тикетная сетка содержит коллекцию всех относящихся к вам тикетов.",
    "ticket_toolbar"            => "Панель инструментов",
    "ticket_desc3"              => "Массовые действия с тикетами можно выполнить с помощью панели инструментов тикетов.",
    "tour_complete"             => "Тур завершен!",
    "tour_complete_desc"        => "Спасибо за использование SupportPal.<br /><br />Теперь мы рекомендуем вам следовать приведенному ниже руководству по началу работы, чтобы настроить службу поддержки.",

    // IP Ban
    "ip_ban_time_desc"          => "Если запрет постоянный или временный.",
    "expiry"                    => "истечение",
    "expired"                   => "Истекший",
    "expiry_time"               => "Время истечения",
    "expiry_time_desc"          => "TВремя истечения срока действия бана, если дата не установлена или в прошлом, будет автоматически установлена на 24 часа.",
    "permanent"                 => "постоянный",

    // Languages
    "no_enabled_languages"      => "Не удалось обновить элемент. По крайней мере, один язык должен быть включен всегда.",

    // General Settings
    "locale"                    => "Место",
    "simpleauth"                => "SimpleAuth аутентификация",
    "admin_folder"              => "Папка администратора",
    "admin_folder_desc"         => "Установите имя папки для панели оператора. Рекомендуется изменить по умолчанию \"admin\" имя с точки зрения безопасности.",
    "enable_ssl"                => "Включить SSL",
    "maintenance_mode"          => "Режим обслуживания",
    "maintenance_mode_desc"     => "Отключает функцию общественной справочной службы и показывает уведомление о техническом обслуживании. Редактировать resources/templates/frontend/[template]/core/maintenance.twig для редактирования сообщение, которое отображается пользователям.",
    "default_user_country"      => "Страна пользователя по умолчанию",
    "default_user_country_desc" => "Страна, которая будет выбрана по умолчанию при регистрации пользователей.",
    "system_timezone"           => "Часовой пояс системы",
    "system_timezone_desc"      => "Часовой пояс по умолчанию, который применяется во всей системе. Операторы могут изменить свой часовой пояс в своих личных настройках.",
    "date_format"               => "Формат даты",
    "date_format_desc"          => "Формат даты, который используется во всей системе.",
    "time_format"               => "Формат времени",
    "time_format_desc"          => "Формат времени, который используется во всей системе.",
    "simpleauth_key"            => "SimpleAuth ключ",
    "simpleauth_key_desc"       => "Ключ для опции единого входа, минимум 16 символов.",
    "simpleauth_operators"      => "Разрешить для операторов",
    "base_url"                  => "Системный URL",
    "base_url_desc"             => "Введите полный веб-адрес вашей установки, используемый для генерации URL-адресов, отправляемых пользователям.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debug Mode",
    "pretty_urls"               => "ЧПУ URLs",
    "pretty_urls_desc"          => "Включение удалит index.php из URL-адресов, включайте, только если у вас есть доступ к панели оператора без index.php. Отключите, если у вас не установлен mod_rewrite, файлы .htaccess не разрешены или не преобразовали правила перезаписи Apache .htaccess для работы с альтернативным веб-сервером.",

    /*
     * 2.0.2
     */
    "cron_makesure"             => "Для помощи в регистрации работы cron, пожалуйста, смотрите <a target='_blank' href='https://docs.supportpal.com/current/New+Installation#CronJob'>Cron Job Help</a>.",
    "widget"                    => "Виджет | Виджеты",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Включение этого заставит весь интерфейс и область оператора использовать безопасные соединения, рекомендуемая настройка. Пожалуйста, убедитесь, что HTTPS работает правильно на вашем сервере перед включением.",
    "unexpected_template_error" => "Произошла непредвиденная ошибка при проверке синтаксиса шаблона. Пожалуйста, попробуйте еще раз.",
    "empty_template_preview"    => "Пожалуйста, предоставьте действительный шаблон для использования функции предварительного просмотра.",
    "no_department_address"     => "Не удалось найти адрес отдела в списке получателей.",
    "email_loop_detected"       => "Обнаружена циклическая отправка - электронное письмо отправлено с адреса отдела.",
    "email_ticket_locked"       => "Тикет заблокирован. Пользователю было предложено открыть новый тикет по электронной почте.",
    "email_no_body"             => "Не удалось определить тело сообщения электронной почты.",
    "email_runtime_error"       => "Произошла ошибка времени выполнения при создании тикета/ответа.",
    "email_reply_disabled"      => "Ответы пользователей по электронной почте отключены для этого отдела.",
    "email_throttled"           => "Слишком много входящих писем от пользователя. Ограничение :max_requests отправляет каждые :decay_time минут.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Отредактируйте настройки, которые применяются ко всем SupportPal. Если вы хотите изменить настройки для определенного раздела, например, Тикеты, откройте раздел на боковой панели, чтобы просмотреть доступные настройки для этого модуля. Настройки, связанные с вашим брендом (ами), можно найти, нажав # Бренды # на боковой панели.",
    "brand"                     => "Бренд | Бренды",
    "brand_desc"                => "Бренд - это ваша индивидуальность в SupportPal, позволяющая использовать несколько каналов связи. Несколько брендов могут работать без проблем под одной единой панелью оператора.",
    "default_brand"             => "Бренд по умолчанию",
    "default_brand_desc"        => "Выберите брен, который будет использоваться по умолчанию, когда посетители посещают внешний интерфейс и не удается найти подходящий бренд.",
    "brand_enabled_desc"        => "Переключите, чтобы включить или отключить бренд. Отключенные бренды не могут быть использованы и не будут считаться частью брендов, разрешенных в вашей лицензии. Отключение может использоваться для временного скрытия бренда и / или сохранения информации. Удаление бренда приведет к удалению всей информации, включая пользователей и тикеты, которые с ней связаны.",
    "inherit_global_setting"    => "Наследовать глобальные настройки",
    "brand_date_format_desc"    => "Формат даты, используемый для внешнего интерфейса этого бренда.",
    "brand_time_format_desc"    => "Формат времени, используемый для внешнего интерфейса этого бренда.",
    "brand_timezone"            => "Бренд - часовой пояс",
    "brand_timezone_desc"       => "Часовой пояс, который используется по умолчанию в интерфейсе этого бренда, пользователи будут иметь возможность выбрать свой часовой пояс.",
    "brand_default_lang_desc"   => "Язык, который используется по умолчанию в интерфейсе этого бренда.",
    "brand_lang_toggle_desc"    => "Если выпадающий список языка должен отображаться на интерфейсе этого бренда.",
    "brand_groups_desc"         => "Операторы в выбранных группах смогут создавать, обновлять и удалять (в зависимости от разрешений ролей) тикеты и другой контент этого бренда.",
    "select_brand"              => "Выберите бренд ...",
    "add_another_language"      => "Добавить другой язык...",
    "mass_email_brand_desc"     => "Пожалуйста, выберите, от какого бренда будет отправлено письмо. Она будет использоваться для установки отправки от имени и адреса, загрузки правильного шаблона электронной почты и в полях слияния. Если вы отправляете сообщение в группу пользователей, то по электронной почте будут отправляться только те пользователи, которые принадлежат к выбранному бренду.",
    "brand_limit_exceeded"      => "Ваша лицензия позволяет использовать только :allowed  бренд(ы) одновременно. Чтобы приобрести дополнительные бренды, пожалуйста, посетите наш клиентский уголок.",
    "additional_brands"         => "Дополнительные бренды",
    "purchase_more"             => "Купить больше",
    "brand_limit_allowed"       => "Ваша лицензия в настоящее время разрешено использовать :allowed бренд одновременно. | Ваша лицензия в настоящее время разрешено использовать :allowed бренды одновременно. ",
    "brand_limit_purchase"      => "Если это неверно, <strong> переиздайте </strong> свою лицензию на нашем <a href='http://www.supportpal.com/manage/' target='_blank'>сайте</a> и посетите <a href=':route'>License Information</a> страницу для синхронизации вашей справочной службы с нашим сервером лицензий. <br /> Для приобретения дополнительных брендов, пожалуйста, <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>обновите вашу лицензию</a>.",
    "support_expiry"            => "Ваша поддержка и подписка на обновления действительны до :date.",
    "support_status_desc"       => "Пожалуйста <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>продлите подписку на поддержку</a> для того, чтобы получить последнюю поддержку и обновления от SupportPal.",
    "ip_ban"                    => "IP Блокировка|IP Блокировки",
    "ip_whitelist"              => "IP Белый список",
    "whitelisted_ip"            => "Белый список IP",
    "license_path"              => "Путь установки",
    "php_info"                  => "PHP Info",
    "log"                       => "Лог|Логи",
    "invalid_department_brand"  => "Отдел не назначен на тикет бренда.",
    "incoming_rejected"         => "Входящий (Отклонено)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Лог менеджера файлов",
    "file_manager_desc"         => "Ниже вы можете скачать или удалить журналы, которые хранятся системой во время работы, их можно использовать для целей отладки. Файлы журнала автоматически циклически сохраняются, сохраняя только последние 5 дней записей.",
    "app_logs"                  => "Журналы приложений",
    "app_logs_desc"             => "Все предупреждения и ошибки от общего использования справочной службы зарегистрированы здесь. Вас могут попросить предоставить один или несколько из этих журналов при запросе поддержки.",
    "email_logs"                => "Email лог",
    "email_logs_desc"           => "Подробная информация о входящих электронных письмах хранится в этих файлах, когда они анализируются и импортируются как тикеты.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Ответить на",
    "and_number_others"         => "и :number другой|и :number другие",
    "user_templates"            => "Пользовательские шаблоны",
    "operator_templates"        => "Шаблоны операторов",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Предел размера совокупного вложения",
    "attachment_size_desc"      => "Максимальный совокупный размер всех вложений, отправляемых в одном письме. Доступные варианты: K (для килобайтов) и M (для мегабайт), все остальное предполагает байты. Пример значения: 5M для 5 мегабайт. Установите 0, чтобы не отправлять вложения по электронной почте и требовать, чтобы пользователи загружали вложения через службу поддержки.",
    "attachment_limit_reached"  => "Накопленный лимит файлов достигнут (:size). Пожалуйста, рассмотрите возможность отправки файлов через другой носитель (например, загрузочный URL).",
    "renew_support"             => "<a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>возобновлять</a>",
    "no_existing_translations"  => "Нет существующих переводов.",
    "add_translation"           => "Добавить перевод",
    "todo_list"                 => "Список дел",
    "version_check"             => "Проверка обновлений",
    "system_overview"           => "Системный Обзор",
    "getting_started"           => "Начиная работу",
    "operator_notes"            => "Примечания оператора",
    "simpleauth_operators_desc" => "Разрешить операторам входить и выходить с помощью SimpleAuth, мы рекомендуем отключить этот параметр, если вы специально не используете его для этой цели.",
    "upgrade_and_reactivate"    => "Обновление и Реактивация",
    "upgrade_pending"           => "Ожидание обновления",
    "locale_in_uri"             => "Включить локаль в URI",
    "locale_in_uri_desc"        => "Отключить удаление локали из URI, например: http://support.mycompany.com/en/announcements становится http://support.mycompany.com/announcements. Может быть отключено только при наличии одного включенного языка в системе.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "В настоящее время это установлено в качестве языка по умолчанию. Отключение языка установит другой включенный язык в качестве языка по умолчанию.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Пожалуйста, включите JavaScript, чтобы использовать эту страницу.",
    "go_to_dashboard"           => "Перейти к панели",
    "brand_colour_desc"         => "Выберите цвет для вашего бренда, он будет использоваться для цветовой схемы как в интерфейсе, так и в шаблоне оператора. Оставьте пустым, чтобы использовать цветовую схему по умолчанию.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Изображение favicon появляется в адресной строке и используется для идентификации вашего сайта. Для достижения наилучших результатов убедитесь, что значок содержит диапазон размеров от 32x32px до 310x310px, квадратный и формат ICO / PNG.",
    "view_original"             => "Посмотреть оригинал",
    "download_original"         => "Скачать оригинал",
    "consume_all"               => "При желании введите адрес электронной почты отдела с включенным \"Consume All\". ",
    "reprocess_email"           => "Повторная обработка электронной почты",
    "reprocess_email_desc"      => "Мы рекомендуем проверить, что изначально заблокировало письмо, и внести необходимые изменения, прежде чем пытаться выполнить повторную обработку.",
    "email_blocked_desc"        => "Не удалось отправить электронное письмо несколько раз, теперь его необходимо отправить вручную.",
    "captcha_type"              => "Тип капчи",
    "captcha_type_desc"         => "Выберите капчу, которая будет использоваться во всей системе. Мы рекомендуем перейти на Google reCAPTCHA, что требует дополнительной настройки.",
    "default_captcha"           => "Капча по умолчанию",
    "recaptcha_site_key"        => "Ключ сайта",
    "recaptcha_secret_key"      => "Секретный ключ",
    "recaptcha_desc"            => "Пожалуйста, зарегистрируйте новый сайт по адресу <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, выберите правильный тип reCAPTCHA и убедитесь, что добавляете каждый домен бренда. Скопируйте сайт и секретный ключ выше.",
    "enter_code"                => "Введите код",
    "export_data"               => "Экспорт данных",
    "export_data_desc"          => "Создайте загружаемый экспорт данных, принадлежащих этому пользователю.",
    "export_data_select"        => "Пожалуйста, выберите, какие данные вы хотите экспортировать.",
    "export_data_scheduled"     => "Экспорт в настоящее время создается, это может занять некоторое время. Мы отправим вам электронное письмо, когда оно будет доступно для загрузки.",
    "database"                  => "База данных",
    "database_desc"             => "Следующие элементы хранятся в базе данных.",
    "prune_users"               => "Неактивные пользовательские записи могут быть автоматически удалены. Пользователь считается неактивным, если он не вошел в систему или не занимался какой-либо другой деятельностью в течение определенного периода времени.",
    "prune_tickets"             => "Неактивные тикеты могут быть автоматически удалены. тикет считается неактивным, если он разрешен и в течение определенного времени не выполнял никаких действий.",
    "prune_organisations"       => "Неактивные организации могут быть автоматически сокращены. Организация считается неактивной, если у нее нет связанных с ней пользователей, и она не выполняла никаких действий в течение определенного периода времени.",
    "prune_export"              => "Экспорт пользовательских данных хранится в файловой системе, но может занимать место, вы можете сократить файлы экспорта, созданные до определенной даты.",
    "automatically_prune"       => "Автоматически удалять",
    "days_after_saved"          => "Записи после",
    "days_after_last_activity"  => "Неактивные записи после",
    "record_permanent_delete"   => "Записи будут навсегда удалены. Это повлияет на отчеты.",
    "record_delete_relations"   => "Записи будут окончательно удалены вместе со следующими связанными данными: :relations. Это повлияет на отчеты.",
    "manually_prune"            => "Вручную удалить записи, созданные ранее",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Если вы включите этот параметр, когда страница загружается неправильно, возможно, вы заблокированы из SupportPal!",
    "verify_frontend_loads"     => "Пожалуйста, убедитесь, что интерфейс загружается правильно ниже.",
    "twig_operator_signature"   => " {{ operator.signature|raw }} Поле слияния будет обработано во время выполнения, поэтому предварительный просмотр может быть неправильным.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Позволяет запускать другие бренды на вашей установке SupportPal.",
    "no_branding"               => "Без брендинга",
    "no_branding_desc"          => "Удаляет брендинг SupportPal с клиентской стороны справочной службы.",
    "multi_ip"                  => "Поддержка нескольких IP",
    "multi_ip_desc"             => "Позволяет заблокировать SupportPal для нескольких внутренних / внешних IP-адресов.",
    "purchase"                  => "покупка",
    "ticket_number_missing"     => "Для тикетов, связанных с тикетами, {{ ticket.number }} поле слияния должно присутствовать в теме письма и должно быть <em>[#{{ ticket.number }}]</em> или <em>(#{{ ticket.number }})</em> для того, чтобы направить ответы на правильный тикет. Если вы хотите удалить номер тикета, рассмотрите возможность включения <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Включите режим отладки для отображения ошибок, используйте только для отладки или если это требуется для службы поддержки. В противном случае ошибки и другие полезные сообщения журналов хранятся в журналах приложений, которые можно загрузить, перейдя в меню # Утилиты # -> # Журналы # -> # Менеджер файлов журналов #.",
    "record_trash_relations"    => "Записи будут перемещены в корзину, а затем навсегда удалены после :number дней вместе со следующими связанными data: :relations. Это повлияет на отчеты.",
    "uninstall_plugable_warning" => "Удаление :plugable удалит все связанные файлы и данные. Вместо этого мы рекомендуем отключить :plugable.",
    "web_settings_desc"         => "Настройки веб-канала применяются к веб-интерфейсу. По умолчанию к тикетам может обратиться любой, кто знает уникальный URL-адрес заявки. Вы можете отключить это и потребовать от пользователей входа в систему, прежде чем они смогут получить доступ к информации о тикетах.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Пожалуйста, введите строку (конкретное слово для запрета или адрес электронной почты), все строки без учета регистра.",
    "spam_is_regex_desc"        => "Правила могут использовать преимущества регулярных выражений; если вы собираетесь это сделать, пожалуйста, включите этот параметр. Вам не нужно включать разделители.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "The file(s) could not uploaded due to a server-side error.",
    "insert_image"              => "Вставить изображение",
    "quote"                     => "Цитата",
    "code"                      => "Код",
    "format"                    => "Format",
    "paragraph"                 => "Paragraph",
    "heading1"                  => "Heading 1",
    "heading2"                  => "Heading 2",
    "heading3"                  => "Heading 3",
    "heading4"                  => "Heading 4",
    "heading5"                  => "Heading 5",
    "heading6"                  => "Heading 6",
    "upload"                    => "Upload",
    "upload_label"              => "Drop files here or click to upload",
    "more_formatting"           => "More Formatting",
    "clearformat"               => "Clear Formatting",
    "bold"                      => "Bold",
    "underline"                 => "Underline",
    "italic"                    => "Italic",
    "strikethrough"             => "Strikethrough",
    "font_color"                => "Font Colour",
    "insert_link"               => "Insert Link",
    "edit_link"                 => "Edit Link",
    "unlink"                    => "Unlink",
    "orderedlist"               => "Ordered List",
    "unorderedlist"             => "Unordered List",
    "outdent"                   => "Outdent",
    "indent"                    => "Indent",
    "lists"                     => "Lists",
    "edit_html"                 => "Edit HTML",
    "sEmptyTable"               => "No data available in table",
    "sInfo"                     => "Showing _START_ to _END_ of _TOTAL_ entries",
    "sInfoEmpty"                => "Showing 0 to 0 of 0 entries",
    "sInfoFiltered"             => "(filtered from _MAX_ total entries)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Show _MENU_ entries",
    "sLoadingRecords"           => "Loading...",
    "sProcessing"               => "Processing...",
    "sSearchPlaceholder"        => "Найти...",
    "sZeroRecords"              => "No matching records found",
    "sSortAscending"            => ": activate to sort column ascending",
    "sSortDescending"           => ": activate to sort column descending",
    "incoming_auto_reply"       => "Incoming (Auto-Reply)",
    "logo_dark_mode"            => "Dark Mode Logo",
    "logo_dark_mode_desc"       => "If your logo was designed to only work on a light background, set a different logo for dark mode. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "template_mode"             => "Template Mode",
    "template_mode_desc"        => "Set a default light or dark theme for the interface. Users will be able to select their own preference in their profile.",
    "light_mode"                => "Light Mode",
    "dark_mode"                 => "Dark Mode",
    "logo"                      => "Logo",
    "logo_desc"                 => "Change the default logo for this brand. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "website_url"               => "Website URL",
    "website_url_desc"          => "Add a link back to your main website in the support portal header.",
    "back_to_website"           => "Back to website",
    "template"                  => "Template",
    "how_can_we_help"           => "Как мы можем помочь вам сегодня?",
    "ticket_desc2"              => "The ticket grid can be ordered adjusted to your preference and filtered as needed.",
    "zip_extension_required"    => "The Zip PHP extension is not installed. Please install it and try again.",
    "zip_file_not_downloaded"   => "The zip file could not download. Verify that you are able to access: :url",
    "plugin_basic_info"         => "Please provide some basic information about your plugin.",
    "plugin_author_name"        => "Author name",
    "plugin_author_uri"         => "Author URI (link to your website)",
    "plugin_vendor_name"        => "Vendor name (name of your company, can be same as author name)",
    "plugin_name"               => "Plugin name",
    "plugin_description"        => "Plugin description",
    "plugin_already_exists"     => "Plugin already exists!",
    "plugin_creating"           => "Creating plugin...",
    "plugin_ready"              => "Plugin ready in :directory! Build something amazing.",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Third-Party Integration|Third-Party Integrations",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Please create authentication credentials via the <a href=\":route\">Third-Party Integration</a> page.",
    "oauth_data_missing"        => "The client ID and/or secret haven't been set and are required. Once you have set it up as per the below instructions, close the pop-up and re-validate.",
    "configure_after_brand_created" => "This may be configured after the brand has been created.",
    "get_access_token"          => "Get Access Token",
    "reset_access_token"        => "Reset Access Token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Brand Name",
    "brand_name_desc"           => "Your brand name is used for all correspondence with users.",
    "supportpal_announcements"  => "SupportPal Announcements",
    "add_selectize"             => "Add <strong>:item</strong>...",
    "plugin_author_uri_short"   => "Author URI",
    "plugin_vendor_name_short"  => "Vendor Name",
    "open_link_in_new_tab"      => "Open link in new tab",
    "general_settings"          => "Configure general settings",
    "configure_brand"           => "Configure brand",
    "configure_department"      => "Configure department",
    "setup_cron"                => "Set-up cron job",
    "channel_settings"          => "Update ticket channel settings",
    "add_user"                  => "Add a new user",
    "open_ticket"               => "Open a new ticket",
    "reply_ticket"              => "Reply to ticket",
    "new_version_available"     => "New Version Available",
    "new_version_desc"          => "A new version of SupportPal has been released, we always recommend to keep your installation up to date.<div class='description'>Acknowledging this notice will hide it until a newer version is released.</div>",
    "download"                  => "Download",
    "acknowledge"               => "Acknowledge",
    "update_available"          => "The latest available version is :version.",
    "running_latest_version"    => "You are running the latest version.",
    "running_prerelease"        => "You are running a prerelease version.",

);
