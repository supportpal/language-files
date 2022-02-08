<?php

return array(

    // Standard messages
    "item_created"                      => "Utworzono nowy :item :rel.",
    "item_updated"                      => "Zaktualizowano :item :rel.",
    "item_deleted"                      => "Usunięto :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Utworzono nowy zakaz na IP :rel.",
    "ip_ban_updated"                    => "Zaktualizowano zakaz na IP :rel.",
    "ip_ban_deleted"                    => "Usunięto zakaz na IP :rel.",
    "banned_ip_on_login"                => "Zbanowany adres IP :rel na 15 minut.",

    "ip_whitelist_created"              => "Dodano adres IP :rel do białej listy.",
    "ip_whitelist_updated"              => "Zaktualizowano adres IP :rel na białej liście.",
    "ip_whitelist_deleted"              => "Usunięto adres IP :rel z białej listy.",

    "system_cleanup"                    => "Uruchomiono czyszczenie systemu na :rel.",

    "api_failed_login"                  => "IP :rel nie udało się uwierzytelnić w API.",

    "user_successful_login"             => "Zalogowany do helpdesku.",
    "user_failed_login"                 => "Nie udało się uwierzytelnić.",
    "user_successful_logout"            => "Wylogowano z działu pomocy.",

    "user_registered"                   => "Zarejestrowane konto.",
    "user_confirmed"                    => "Potwierdził swoje konto.",
    "user_password_set"                 => "Ustaw hasło do swojego konta.",
    "user_password_reset"               => "Zresetuj hasło do swojego konta.",

    "user_added_to_organisation"        => "Użytkownik :rel dodany do organizacji :new_value.",
    "user_removed_from_organisation"    => "Użytkownik :rel usunięty z organizacji :old_value.",
    "user_profile_updated"              => "Zaktualizowany profil konta.",
    "user_left_organisation"            => "Opuścił organizację :rel.",
    "user_organisation_emptied"         => "Usunięto wszystkich użytkowników z organizacji :rel.",
    "user_organisation_updated"         => "Zmieniono poziom dostępu organizacji :rel z :old_value na :new_value.",
    "organisation_membership_updated"   => "Zaktualizowano członkostwo użytkowników w organizacji :rel.",
    "organisation_profile_updated"      => "Zaktualizowany profil organizacji :rel.",
    "organisation_owner_updated"        => "Przeniesiono własność organizacji :rel do :new_value.",

    "mass_email_queued"                 => "W kolejce :new_value wiadomości e-mail w partiach do wysłania.",
    "mass_email_sent"                   => "Wysłano :new_value wiadomości e-mail w kolejce.",

    "email_queue_deleted"               => "Usunięto wiadomość e-mail z kolejki do :rel.",

    "scheduled_task_run"                => "Zaplanowane zadanie :rel zostało uruchomione ręcznie.",

    "selfservice_article_upvoted"       => "Pozytywnie oceniony artykuł :rel.",
    "selfservice_article_downvoted"     => "Artykuł z oceną negatywną :rel.",
    "selfservice_comment_posted"        => "Wysłano nowy :rel.",
    "selfservice_comment_upvoted"       => "Podwyższona ocena :rel od :old_value do :new_value.",
    "selfservice_comment_downvoted"     => "Obniżona ocena :rel od :old_value do :new_value.",

    "ticket_opened"                     => "Otwarto nowe zgłoszenie #:rel.",
    "ticket_opened_on_behalf"           => "Otwarto nowe zgłoszenie #:rel w imieniu :new_value.",
    "ticket_opened_email"               => "Zaimportowany e-mail jako nowe zgłoszenie #:rel.",

    "ticket_message_reply"              => "Wysłał nową odpowiedź na zgłoszenie #:rel.",
    "ticket_message_note"               => "Wysłał nową notatkę do zgłoszenia #:rel.",
    "ticket_message_deleted"            => "Usunięto wiadomość ze zgłoszenia #:rel.",

    "ticket_user_updated"               => "Zaktualizowano użytkownika w zgłoszeniu #:rel z :old_value na :new_value.",
    "ticket_subject_updated"            => "Zaktualizowano temat w zgłoszeniu #:rel.",
    "ticket_department_updated"         => "Zaktualizowano dział zgłoszenia #:rel z :old_value na :new_value.",
    "ticket_status_updated"             => "Zaktualizowano status zgłoszenia #:rel z :old_value na :new_value.",
    "ticket_priority_updated"           => "Zaktualizowano priorytet zgłoszenia #:rel z :old_value na :new_value.",
    "ticket_tag_added"                  => "Dodano etykietę :new_value do zgłoszenia #:rel.",
    "ticket_tag_updated"                => "Zaktualizowano etykiety zgłoszenia #:rel.",
    "ticket_tag_removed"                => "Usunięto etykiety :new_value ze zgłoszenia #:rel.",
    "ticket_slaplan_updated"            => "Zaktualizowano plan SLA w zgłoszeniu #:rel z :old_value na :new_value.",
    "ticket_duetime_updated"            => "Zaktualizowano termin na zgłoszeniu #:rel do :new_value.",
    "ticket_duetime_paused"             => "Wstrzymano termin na zgłoszeniu #:rel do następnej odpowiedzi użytkownika.",
    "ticket_customfield_updated"        => "Zaktualizowano pola niestandardowe w zgłoszeniu #:rel.",
    "ticket_converted_user"             => "Przekonwertowano zgłoszenie wewnętrzne #:rel na zgłoszenie użytkownika.",
    "ticket_converted_internal"         => "Przekonwertowano zgłoszenie użytkownika #:rel na zgłoszenie wewnętrzne.",

    "ticket_assigned_operator"          => "Przypisano :new_value do zgłoszenia #:rel.",
    "ticket_unassigned_operator"        => "Odłączono :new_value ze zgłoszenia #:rel.",
    "ticket_assigned_self"              => "Przypisany do zgłoszenia #:rel.",
    "ticket_assigned_updated"           => "Zaktualizowano przypisanych operatorów w zgłoszeniu #:rel.",

    "ticket_locked"                     => "Zgłoszenie zablokowane #:rel.",
    "ticket_unlocked"                   => "Zgłoszenie odblokowane #:rel.",
    "ticket_locked_reply"               => "Nie można dodać odpowiedzi do zablokowanego zgłoszenia #:rel.",

    "ticket_merged"                     => "Zgłoszenie(a) :new_value połączył(y) się ze zgłoszeniem #:rel.",
    "ticket_unmerged"                   => "Zgłoszenie :rel został rozłączone.",

    "ticket_user_blocked"               => "Zablokowany e-mail :new_value (od użytkownika w zgłoszeniu #:rel).",

    "ticket_closed"                     => "Zgłoszenie #:rel zostało zamknięte.",
    "ticket_inactive_closed"            => "Zamknięte nieaktywne zgłoszenie #:rel od statusu :old_value.",
    "ticket_awaiting_response"          => "Wysłane w oczekiwaniu na wiadomość e-mail z odpowiedzią do użytkownika w zgłoszeniu #:rel.",

    "ticket_split_from"                 => "Wiadomości rozdzielone ze starego zgłoszenia #:rel na nowe zgłoszenie #:new_value.",
    "ticket_split_to"                   => "Wiadomości rozdzielają się ze starego zgłoszenia #:old_value na nowe zgłoszenie #:rel.",

    "ticket_attachment_saved"           => "Dodano załącznik do zgłoszenia #:rel.",
    "ticket_attachment_deleted"         => "Usunięto załącznik z zgłoszenia #:rel.",

    "ticket_throttled"                  => "Odrzucono nowe zgłoszenie z :rel z powodu throttlingu.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Dodano załącznik ':new_value' do identyfikatora artykułu :rel.",
    "selfservice_attachment_deleted"    => "Usunięto załącznik ':new_value' z artykułu o ID :rel.",
    "ticket_unassigned_self"            => "Usunięto siebie ze zgłoszenia #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Nie można dodać odpowiedzi, ponieważ zgłoszenie należy do wyłączonej marki #:rel.",
    "personal_signatures_updated"       => "Zaktualizowano podpisy osobiste.",
    "operator_signatures_updated"       => "Zaktualizowano podpisy :rel.",
    "check_email_failed"                => "Błąd: nie udało się pobrać wiadomości e-mail z konta :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(e): new_value dodany do listy adresów CC dla zgłoszenia #:rel.",
    "ticket_removed_cc"                 => "E-mail(e) :old_value usunięto z listy adresów CC dla zgłoszenia #:rel.",
    "invalid_department_brand"          => "Nie udało się ustawić działu na ':new_value' na bilecie #:rel, dział nie należy do marki zgłoszenia.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Wysłano e-mail z tematem ':extra_rel1' na :rel.",
    "sent_template_email_to"            => "Wysłano ':extra_rel1' e-mail na :rel.",
    "sent_ticket_email_to_user"         => "Wysłano e-mail ':extra_rel1' do użytkownika dla zgłoszenia #:rel.",
    "sent_email_to_operators"           => "Wysłano e-mail „:extra_rel1” do operatorów.",
    "sent_ticket_email_to_operators"    => "Wysłano ':extra_rel1' e-mail do operatorów dla zgłoszenia #:rel.",
    "sent_email_to_operator_group"      => "Wysłano ':extra_rel1' e-mail do grupy operatorów ':new_value' dla zgłoszenia #:rel.",
    "ticket_macro_applied"              => "Makro ':new_value' zostało uruchomione na bilecie #:rel.",
    "ticket_macro_automatic"            => "Makro ':new_value' zostało automatycznie uruchomione na bilecie #:rel.",
    "email_template_not_found"          => "Nie znaleziono identyfikatora szablonu wiadomości e-mail „:new_value”, przerwano wysyłanie wiadomości e-mail.",
    "ticket_duetime_unset"              => "Usuń ustawienie terminu na bilecie nr:rel.",
    "private_conversation_started"      => "Rozpoczął rozmowę z :rel.",
    "private_message_sent"              => "Wyślij wiadomość do :rel.",
    "not_imported_replies_disabled"     => "Otrzymano wiadomość e-mail :extra_rel1 dla zgłoszenia #:rel, ale nie została ona zaimportowana, ponieważ odpowiedzi na wiadomości e-mail dotyczące biletów są wyłączone.",
    "not_imported_ticket_locked"        => "Wiadomość e-mail :extra_rel1 została odebrana dla zgłoszenia #:rel, ale nie została zaimportowana, ponieważ zgłoszenie jest zablokowany.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Użytkownik zgłoszenia dodany do grupy użytkowników :new_value.",
    "ticket_user_removed_from_group"    => "Użytkownik zgłoszenia usunięty z grupy użytkowników :old_value.",
    "email_on_behalf"                   => "Przekazano :extra_rel2 w imieniu ':extra_rel1' w zgłoszeniu #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Wysłano e-mail ':extra_rel1' na adres :new_value, dział nie przyjmuje e-maili od niezarejestrowanych użytkowników.",
    "deleted_user"                      => "Usunięto :item ':rel' z adresem e-mail ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Połączono zgłoszenie #:rel ze zgłoszeniem :extra_rel1.",
    "unlinked_ticket"                   => "Odłączono zgłoszenie #:rel od zgłoszenia :extra_rel1.",
    "email_queue_attachment_deleted"    => "Usunięto załącznik ':old_value' z wiadomości e-mail w kolejce ':rel'.",
    "forward_ticket_email"              => "Przekazany zgłoszenie #:rel do strony trzeciej, zobacz e-mail „:extra_rel1”.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Zaktualizowano :rel przez :extra_rel1.",
    "selfservice_comment_status"        => "Zmieniono status :rel przez :extra_rel1 z :old_value na :new_value.",
    "selfservice_comment_deleted"       => "Usunięto komentarz przez :extra_rel1.",
    "ticket_message_posted"             => "Wysłano nowy :extra_rel1 do zgłoszenia #:rel.",
    "ticket_message_edited"             => "Edytowano :extra_rel1 w zgłoszeniu #:rel.",
    "email_send_failed"                 => "Nie udało się wysłać e-maila.",
    "ticket_brand_updated"              => "Zaktualizowano markę w zgłoszeniu #:rel z :old_value na :new_value.",
    "export_scheduled"                  => "Zaplanowano eksport użytkownika :rel.",
    "export_generated"                  => "Export :new_value użytkownika :rel został wygenerowany i zapisany w systemie.",
    "export_deleted"                    => "Export :old_value użytkownika :rel został usunięty z systemu.",
    "deleted_inactive_records"          => "Automatycznie usunięto :old_value nieaktywny :rel.",
    "deleted_old_records"               => "Automatycznie usunięto stare rekordy :rel.",
    "sent_email_to_user_group"          => "E-mail w kolejce do grupy użytkowników ':new_value' dla zgłoszenia #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Oglądanie zgłoszenia #:rel.",
    "ticket_unwatching"                 => "Nie oglądam już zgłoszenia #:rel.",
    "ticket_watch_operator"             => "Ustaw :new_value, aby obejrzeć zgłoszenie #:rel.",
    "ticket_unwatch_operator"           => "Usuń :new_value z oglądania zgłoszenia #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Potwierdzone prawo własności do adresu e-mail w imieniu użytkownika :rel.",
    "ticket_department_email_updated"   => "Zaktualizowano e-mail działu w zgłoszeniu #:rel z :old_value na :new_value.",
    "ticket_watching_updated"           => "Zaktualizowano operatorów oglądania na bilecie #:rel.",
    "ticket_deleted"                    => "Trwale usunięte zgłoszenie ':old_value' (#:rel).",
    "ticket_trashed"                    => "Przeniesiono zgłoszenie #:rel do kosza.",
    "ticket_restored"                   => "Przywrócono zgłoszenie #:rel z kosza.",
    "emptied_ticket_trash"              => "Automatycznie wyczyszczono kosz po zgłoszeniach z rekordów „:old_value”.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "W zgłoszeniu #:rel ustanowiono nową kontynuację.",
    "ticket_followup_updated"           => "Kontynuacja zgłoszenia #:rel została zaktualizowana.",
    "ticket_followup_deleted"           => "Kontynuacja zgłoszenia #:rel została usunięta.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Artykuł oceniony neutralnie :rel.",

);
