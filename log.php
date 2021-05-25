<?php

return array(

    // Standard messages
    "item_created"                      => "Создано новое :item :rel.",
    "item_updated"                      => "Обновленный :item :rel.",
    "item_deleted"                      => "Удаленный :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Создан новый запрет на IP :rel.",
    "ip_ban_updated"                    => "Обновленный запрет на IP :rel.",
    "ip_ban_deleted"                    => "Удален запрет на IP :rel.",
    "banned_ip_on_login"                => "Запрещенный IP :rel в течение 15 минут.",

    "ip_whitelist_created"              => "Добавлен IP :rel в белый список.",
    "ip_whitelist_updated"              => "Обновлен IP :rel включен белый список.",
    "ip_whitelist_deleted"              => "Удаленный IP :rel из белого списка.",

    "system_cleanup"                    => "Запустил очистку системы на :rel.",

    "api_failed_login"                  => "IP :rel не удалось пройти проверку подлинности в API.",

    "user_successful_login"             => "Вошел в службу.",
    "user_failed_login"                 => "Не удалось пройти проверку подлинности.",
    "user_successful_logout"            => "Вышел из службы поддержки.",

    "user_registered"                   => "Зарегистрировал учетную запись.",
    "user_confirmed"                    => "Подтвердил аккаунт.",
    "user_password_set"                 => "Установите пароль для своей учетной записи.",
    "user_password_reset"               => "Сбросил пароль для своей учетной записи.",

    "user_added_to_organisation"        => "Пользователь :rel добавлен в организацию :new_value.",
    "user_removed_from_organisation"    => "Пользователь :rel удален из организации :old_value.",
    "user_profile_updated"              => "Обновлен профиль учетной записи.",
    "user_left_organisation"            => "Другие организации :rel.",
    "user_organisation_emptied"         => "Удалены все пользователи из организации :rel.",
    "user_organisation_updated"         => ":rel's уровень доступа организации изменился с :old_value до :new_value.",
    "organisation_membership_updated"   => "Обновление членства в организации :rel.",
    "organisation_profile_updated"      => "Обновленный профиль организации :rel.",
    "organisation_owner_updated"        => "Переданных организацией :rel право собственности на :new_value.",

    "mass_email_queued"                 => "Поставленный в очередь :new_value электронные письма в пакетах для отправки.",
    "mass_email_sent"                   => "Отправил :new_value emails в очередях.",

    "email_queue_deleted"               => "Удаленное письмо из очереди на адрес :rel.",

    "scheduled_task_run"                => "Запланированное задание :rel был запущен вручную.",

    "selfservice_article_upvoted"       => "Положительную оценку статьи :rel.",
    "selfservice_article_downvoted"     => "Статья с отрицательной оценкой :rel.",
    "selfservice_comment_posted"        => "Выложил новый :rel.",
    "selfservice_comment_upvoted"       => "Голосуют :rel рейтинг от :old_value к :new_value.",
    "selfservice_comment_downvoted"     => "Голосовали против :rel рейтинг от :old_value к :new_value.",

    "ticket_opened"                     => "Открылся новый тикет #:rel.",
    "ticket_opened_on_behalf"           => "Открылся новый тикет #:rel от имени :new_value.",
    "ticket_opened_email"               => "Импортированная электронная почта как новый тикет #:rel.",

    "ticket_message_reply"              => "Опубликовал новый ответ на тикет #:rel.",
    "ticket_message_note"               => "Выложил новую заметку в тикет #:rel.",
    "ticket_message_deleted"            => "Удалено сообщение в тикете #:rel.",

    "ticket_user_updated"               => "Обновлено имя пользователя в тикете #:rel с :old_value на :new_value.",
    "ticket_subject_updated"            => "Обновлена тема по тикету #:rel.",
    "ticket_department_updated"         => "Обновлен отдел по продаже тикетов #:rel from :old_value to :new_value.",
    "ticket_status_updated"             => "Обновил статус на тикет #:rel с :old_value на :new_value.",
    "ticket_priority_updated"           => "Обновлен приоритет по тикету #:rel с :old_value на :new_value.",
    "ticket_tag_added"                  => "Добавлен тег :new_value к #:rel.",
    "ticket_tag_updated"                => "Обновленные теги на тикете #:rel.",
    "ticket_tag_removed"                => "Удален тег :new_value из тикета #:rel.",
    "ticket_slaplan_updated"            => "Обновлен план SLA по тикету #:rel с :old_value до :new_value.",
    "ticket_duetime_updated"            => "Обновлено время по тикету #:rel до :new_value.",
    "ticket_duetime_paused"             => "Остановил положенное время на тикете #:rel до следующего ответа пользователя.",
    "ticket_customfield_updated"        => "Обновленные пользовательские поля в тикете #:rel.",
    "ticket_converted_user"             => "Конвертированный внутренний тикет #:rel к пользовательскому тикету.",
    "ticket_converted_internal"         => "Преобразованный пользовательский тикет #:rel к внутреннему тикету.",

    "ticket_assigned_operator"          => "Назначенный :new_value к тикету #:rel.",
    "ticket_unassigned_operator"        => "Неназначенный :new_value из тикета #:rel.",
    "ticket_assigned_self"              => "Назначенный самостоятельно тикет #:rel.",
    "ticket_assigned_updated"           => "Обновленные назначенные операторы по тикету #:rel.",

    "ticket_locked"                     => "Заблокированный тикет #:rel.",
    "ticket_unlocked"                   => "Разблокированный тикет #:rel.",
    "ticket_locked_reply"               => "Ответ не может быть добавлен к заблокированному тикету #:rel.",

    "ticket_merged"                     => "Тикет(ы) :new_value слились в тикет #:rel.",
    "ticket_unmerged"                   => "Тикет :rel has been unmerged.",

    "ticket_user_blocked"               => "Заблокированный email :new_value (от пользователя по тикету #:rel).",

    "ticket_closed"                     => "Тикет #:rel был закрытый.",
    "ticket_inactive_closed"            => "Закрытый неактивный тикет #:rel от статуса :old_value.",
    "ticket_awaiting_response"          => "Отправлено ожидание ответа по электронной почте пользователю на тикете #:rel.",

    "ticket_split_from"                 => "Сообщения отделились от старого тикета #:rel к новому тикету #:new_value.",
    "ticket_split_to"                   => "Сообщения разделяются от старого тикета #:old_value к новому тикету #:rel.",

    "ticket_attachment_saved"           => "Добавлено приложение к тикету #:rel.",
    "ticket_attachment_deleted"         => "Удаленное вложение из тикета #:rel.",

    "ticket_throttled"                  => "Отклонен новый тикет от :rel из за спама. ",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Добавлено приложение ':new_value' к тикету ID :rel.",
    "selfservice_attachment_deleted"    => "Удалить вложение ':new_value' от тикета к тикету ID :rel.",
    "ticket_unassigned_self"            => "Неназначенные от тикета #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Ответ не может быть добавлен из-за того, что тикет принадлежит бренду с ограниченными возможностями #:rel.",
    "personal_signatures_updated"       => "Обновленные личные подписи.",
    "operator_signatures_updated"       => "Обновленный :rel's подписывание.",
    "check_email_failed"                => "Ошибка: не удалось загрузить электронную почту из учетной записи :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(s) :new_value добавлено в список адресов CC для тикета #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value удален из списка CC обращаются за тикет #:rel.",
    "invalid_department_brand"          => "Не удалось установить отдел на ':new_value' на тикет #:rel, отдел не принадлежит к марке тикетов.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Отправлено письмо с темой письма ':extra_rel1' на :rel.",
    "sent_template_email_to"            => "Отправлено ':extra_rel1' email на :rel.",
    "sent_ticket_email_to_user"         => "Отправлено ':extra_rel1' email пользователю для получения тикета #:rel.",
    "sent_email_to_operators"           => "Отправлено ':extra_rel1' email для операторов.",
    "sent_ticket_email_to_operators"    => "Отправлено ':extra_rel1' email для оператораторов по тикету #:rel.",
    "sent_email_to_operator_group"      => "Отправлено ':extra_rel1' электронная почта в группу операторов ':new_value' для тикета #:rel.",
    "ticket_macro_applied"              => "Макрос ':new_value' переведен на тикет #:rel.",
    "ticket_macro_automatic"            => "Макрос ':new_value' автоматически запускается на тикете #:rel.",
    "email_template_not_found"          => "Email шаблон ID ':new_value' не найден, Прервана отправка электронной почты.",
    "ticket_duetime_unset"              => "Сбросить время в тикете #:rel.",
    "private_conversation_started"      => "Начался разговор с :rel.",
    "private_message_sent"              => "Отправил сообщение :rel.",
    "not_imported_replies_disabled"     => "email :extra_rel1 был получен за тикет #:rel, но не был импортирован, так как ответы на электронную почту тикетов отключены.",
    "not_imported_ticket_locked"        => "email :extra_rel1 был получен для тикета #:rel , но не был импортирован, так как тикет заблокирован.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Пользователь добавлен в группу пользователей  :new_value.",
    "ticket_user_removed_from_group"    => "Пользователь удален из группы пользователей  :old_value.",
    "email_on_behalf"                   => "Пересылаются :extra_rel2 от имени ':extra_rel1' в тикете #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Отправлено ':extra_rel1' email на :new_value, департамент не принимает электронные письма от незарегистрированных пользователей.",
    "deleted_user"                      => "Удаленный :item ':rel' с email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Связанный тикет #:rel с тикетами :extra_rel1.",
    "unlinked_ticket"                   => "Несвязанный тикет #:rel из тикета :extra_rel1.",
    "email_queue_attachment_deleted"    => "Удалено вложение ':old_value' из очереди email ':rel'.",
    "forward_ticket_email"              => "Переадресованный тикет #:rel для третьих лиц, просмотр ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Обновленный :rel для :extra_rel1.",
    "selfservice_comment_status"        => "Измененный статус объекта :rel для :extra_rel1 from :old_value to :new_value.",
    "selfservice_comment_deleted"       => "Удалил комментарий :extra_rel1.",
    "ticket_message_posted"             => "Выложил новый :extra_rel1 к #:rel.",
    "ticket_message_edited"             => "Отредактировано :extra_rel1 в #:rel.",
    "email_send_failed"                 => "Не удалось отправить электронное письмо.",
    "ticket_brand_updated"              => "Обновленный бренд по продаже тикетов #:rel с :old_value на :new_value.",
    "export_scheduled"                  => "Экспорт пользователя :rel был запланирован заранее.",
    "export_generated"                  => "Экспорт :new_value от пользователя :rel был сгенерирован и сохранен в системе.",
    "export_deleted"                    => "Экспорт :old_value от пользователя :rel был удален из системы.",
    "deleted_inactive_records"          => "Автоматически удалять :old_value неактивный :rel.",
    "deleted_old_records"               => "Автоматически удаляются старые :rel записи.",
    "sent_email_to_user_group"          => "Электронная почта в очереди для группы пользователей ':new_value' на тикеты #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Наблюдаю за тикетом #:rel.",
    "ticket_unwatching"                 => "Больше не смотрю тикет #:rel.",
    "ticket_watch_operator"             => "Установил :new_value чтобы посмотреть тикет #:rel.",
    "ticket_unwatch_operator"           => "Убрал :new_value от просмотра тикета #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Подтвержденное право собственности на адрес электронной почты от имени пользователя :rel.",
    "ticket_department_email_updated"   => "Обновлена электронная почта отдела по тикетам #:rel с :old_value на :new_value.",
    "ticket_watching_updated"           => "Обновлено наблюдение операторов за тикетом #:rel.",
    "ticket_deleted"                    => "Безвозвратно удаленный тикет ':old_value' (#:rel).",
    "ticket_trashed"                    => "Тикет #:rel удален.",
    "ticket_restored"                   => "Восстановленный #:rel из корзины.",
    "emptied_ticket_trash"              => "Автоматически очищенный мусор тикета ':old_value' записи.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "На тикете было установлено новое наблюдение #:rel.",
    "ticket_followup_updated"           => "Была обновлена последующая информация по тикету #:rel.",
    "ticket_followup_deleted"           => "Последующая информация по тикету #:rel была удалена.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrally rated article :rel.",

);
