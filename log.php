<?php

return array(

    // Standard messages
    "item_created"                      => "Kreiran novi :item :rel.",
    "item_updated"                      => "Ažuriran :item :rel.",
    "item_deleted"                      => "Obrisan :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Banovana IP adresa :rel.",
    "ip_ban_updated"                    => "Ažurirana IP adresa :rel.",
    "ip_ban_deleted"                    => "Obrisana IP adresa :rel.",
    "banned_ip_on_login"                => "IP adresa banovana :rel na 15 minuta.",

    "ip_whitelist_created"              => "IP adresa dodata :rel dodata na belu listu.",
    "ip_whitelist_updated"              => "Ažurirana IP adresa :rel na beloj listi.",
    "ip_whitelist_deleted"              => "IP adresa :rel obrisana sa bele liste.",

    "system_cleanup"                    => "Pokreni sistemsko čišćenje :rel.",

    "api_failed_login"                  => "IP adresa :rel se nije autentifikovala sa API-jem.",

    "user_successful_login"             => "Prijavljen na sistem podrške.",
    "user_failed_login"                 => "Provera autentičnosti nije uspela.",
    "user_successful_logout"            => "Odjavljeni iz sistema podrške.",

    "user_registered"                   => "Registrovan nalog.",
    "user_confirmed"                    => "Potvrđen nalog.",
    "user_password_set"                 => "Postavite lozinku za nalog.",
    "user_password_reset"               => "Resetujte lozinku za nalog.",

    "user_added_to_organisation"        => "Korisnik :rel je dodao organizaciji :new_value.",
    "user_removed_from_organisation"    => "Korisnik: rel je uklonjen iz organizacije :old_value.",
    "user_profile_updated"              => "Profil naloga je ažuriran.",
    "user_left_organisation"            => "Napustio orgnizaciju :rel.",
    "user_organisation_emptied"         => "Svi korisnici su uklonjeni iz organizacije :rel.",
    "user_organisation_updated"         => ":rel nivo pristupa organizacije promenjen je iz :old_value u :new_value.",
    "organisation_membership_updated"   => "Ažurirano članstvo organizacije :rel.",
    "organisation_profile_updated"      => "Ažuriran profil organizacije :rel.",
    "organisation_owner_updated"        => "Vlasništvno nad organizacijom :rel preneseno na :new_value.",

    "mass_email_queued"                 => ":new_value email poruke čekaju na slanje.",
    "mass_email_sent"                   => "Poslate :new_value email porke u queue.",

    "email_queue_deleted"               => "Obrisane poruke :rel.",

    "scheduled_task_run"                => "Planirani task :rel je pokrenut manuelno.",

    "selfservice_article_upvoted"       => "Članak pozitivno ocenjen :rel.",
    "selfservice_article_downvoted"     => "Članak negativno ocenjen :rel.",
    "selfservice_comment_posted"        => "Postavljen novi :rel.",
    "selfservice_comment_upvoted"       => "Rejting pozitivnih glasova :rel od :old_value do :new_value.",
    "selfservice_comment_downvoted"     => "Rejting negativnih glasova :rel od :old_value do :new_value.",

    "ticket_opened"                     => "Otvoren novi tiket #:rel.",
    "ticket_opened_on_behalf"           => "Otvoren novi tiket #:rel u ime :new_value.",
    "ticket_opened_email"               => "Email poruka importovana kao tiket #:rel.",

    "ticket_message_reply"              => "Stigao je novi odgovor na tiket #:rel.",
    "ticket_message_note"               => "Postavljena je nova beleška na tiket #:rel.",
    "ticket_message_deleted"            => "Obrisana poruka u tiketu #:rel.",

    "ticket_user_updated"               => "Ažuriran korisnik na tiketu #:rel sa :old_value na :nev_value.",
    "ticket_subject_updated"            => "Ažuriran naslov tiketa #:rel.",
    "ticket_department_updated"         => "Ažurirano odeljenje na tiketu #:rel sa :old_value na :new_value.",
    "ticket_status_updated"             => "Ažuriran status tiketa #:rel sa :old_value na :nev_value.",
    "ticket_priority_updated"           => "Ažuriran prioritet tiketa #:rel sa :old_value na :nev_value.",
    "ticket_tag_added"                  => "Dodat tag :new_value na tiket #:rel.",
    "ticket_tag_updated"                => "Ažuriran tag na tiketu #:rel.",
    "ticket_tag_removed"                => "Uklonjen tag :new_value sa tiketa #:rel.",
    "ticket_slaplan_updated"            => "Ažuriran SLA plan na tiketu #:rel sa :old_value na :nev_value.",
    "ticket_duetime_updated"            => "Ažuriran rok tiketa #:rel na :new_value.",
    "ticket_duetime_paused"             => "Pauziran rok za rešenje tiketa #:rel do sledećeg odgovora.",
    "ticket_customfield_updated"        => "Ažurirana prilagođena polja na tiketu #:rel.",
    "ticket_converted_user"             => "Interni tiketi #:rel su konvertovatni u korisničke tikete.",
    "ticket_converted_internal"         => "Korisnički tiketi #:rel konvertovani su interne tikete",

    "ticket_assigned_operator"          => "Dodeljen :new_value na tiket #:rel.",
    "ticket_unassigned_operator"        => "Uklonjen :new_value sa tiketa #:rel.",
    "ticket_assigned_self"              => "Dodeleljen tiket #:rel.",
    "ticket_assigned_updated"           => "Ažurirani dodeljeni agenti na tiketu #:rel.",

    "ticket_locked"                     => "Zaključan tiket #:rel.",
    "ticket_unlocked"                   => "Otključan tiket #:rel.",
    "ticket_locked_reply"               => "Nije moguće dodati odgovor na zaključan tiket #:rel.",

    "ticket_merged"                     => ":new_value tiket spojen u tiket #:rel.",
    "ticket_unmerged"                   => "Tiket :rel je odvojen.",

    "ticket_user_blocked"               => "Blokirana email adresa :new_value (od korisnika na tiketu #:rel).",

    "ticket_closed"                     => "Tiket #:rel je zatvoren.",
    "ticket_inactive_closed"            => "Zatvoren neaktivan tiket #:rel status :old_value.",
    "ticket_awaiting_response"          => "Poslat email ’awaiting to response’ korisniku na tiket #:rel.",

    "ticket_split_from"                 => "Podeljene poruke sa starog tiketa #:rel na novi tiket #:new_value.",
    "ticket_split_to"                   => "Podeljene poruke sa starog tiketa #:old_value na novi tiket #:rel.",

    "ticket_attachment_saved"           => "Dodati prilozi na tiket #:rel.",
    "ticket_attachment_deleted"         => "Uklonjeni prilozi sa tiketa #:rel.",

    "ticket_throttled"                  => "Obijeni novi tiketi :rel usled zagušenja.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Dodat prilog':new_value' na članak :rel.",
    "selfservice_attachment_deleted"    => "Obrisan prilog ':new_value' sa članka :rel.",
    "ticket_unassigned_self"            => "Ukloni sebe iz tiketa #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Nije moguće dodati odgovor jer tiketa pripada brendu koji je ugašen #:rel.",
    "personal_signatures_updated"       => "Ažurirani potpisi.",
    "operator_signatures_updated"       => "Ažuriran :rel potpisi.",
    "check_email_failed"                => "Greška: Preuzimanje e-pošte sa naloga nije uspelo :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email :new_value dodat u CC listu adresa za tiket #:rel.",
    "ticket_removed_cc"                 => "Email :old_value uklonjen sa CC liste adresa za tiket #:rel.",
    "invalid_department_brand"          => "Nije moguće dodati odeljenje ':new_value' na tiket #:rel, odeljenje se ne slaže sa brendom kojem pripada tiket.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Poslat email sa naslovom ':extra_rel1' na :rel.",
    "sent_template_email_to"            => "Poslat ':extra_rel1' email na :rel.",
    "sent_ticket_email_to_user"         => "Poslat ':extra_rel1' email korisniku na tiketu #:rel.",
    "sent_email_to_operators"           => "Poslat ':extra_rel1' email agentima.",
    "sent_ticket_email_to_operators"    => "Poslat ':extra_rel1' email agentima za tiket #:rel.",
    "sent_email_to_operator_group"      => "Poslat ':extra_rel1' email grupi agenata ':new_value' za tiket #:rel.",
    "ticket_macro_applied"              => "Makro ':new_value' je pokrenut na tiketu #:rel.",
    "ticket_macro_automatic"            => "Makro ':new_value' automatski je pokrenut na tiketu #:rel.",
    "email_template_not_found"          => "ID templejta ':new_value' nije pronađen, slanje poruka prekinuto.",
    "ticket_duetime_unset"              => "Poništi rok na tiketu #:rel.",
    "private_conversation_started"      => "Započeta konverzacija sa :rel.",
    "private_message_sent"              => "Poslata poruka na :rel.",
    "not_imported_replies_disabled"     => "Primljen email :extra_rel1 za tiket #:rel, ali nije uvučen zato što su odgovori na tiket mejlove onemogućeni.",
    "not_imported_ticket_locked"        => "Primljen email :extra_rel1 za tiket #:rel, ali nije uvučen zato što je tiket zaključan.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Korisnik je dodat u korisničku grupu :new_value.",
    "ticket_user_removed_from_group"    => "Korisnik je uklonjen iz korisničke grupe :old_value.",
    "email_on_behalf"                   => "Prosleđen :extra_rel2 u ime ':extra_rel1' u tiketu #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Poslat ':extra_rel1' email na :new_value, odeljenje ne prihvata email poruke od neregistrovanih korisnika.",
    "deleted_user"                      => "Obrisan :item ':rel' sa email adresom ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Povezan tiket #:rel sa tiketom :extra_rel1.",
    "unlinked_ticket"                   => "Uklonjena veza #:rel sa tiketa :extra_rel1.",
    "email_queue_attachment_deleted"    => "Obrisan prilog ':old_value' iz email poruka na čekanju ':rel'.",
    "forward_ticket_email"              => "Prosleđen email #:rel na third-party, pogledaj':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Ažuriran :rel sa :extra_rel1.",
    "selfservice_comment_status"        => "Promenjen status :rel od strane :extra_rel1 sa :old_value na :new_value.",
    "selfservice_comment_deleted"       => "Obrisan komentar od strane :extra_rel1.",
    "ticket_message_posted"             => "Postavljen novi :extra_rel1 na tiket #:rel.",
    "ticket_message_edited"             => "Promenjen :extra_rel1 u tiketu #:rel.",
    "email_send_failed"                 => "Neuspelo slanje mejlova.",
    "ticket_brand_updated"              => "Ažuriran brend na tiketu #:rel sa :old_value na :nev_value.",
    "export_scheduled"                  => "Export korisnika :rel je zakazan.",
    "export_generated"                  => "Export :new_value korisnika :rel je generisan i sačuvan u sistemu.",
    "export_deleted"                    => "Export :old_value korisnika :rel je obrisan iz sistema.",
    "deleted_inactive_records"          => "Automatski obriši neaktivne :old_value :rel.",
    "deleted_old_records"               => "Automatski obriši neaktivne zapise :rel.",
    "sent_email_to_user_group"          => "Email poruke na čekanju za korisnike ':new_value' za tiket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Gleda tiket #:rel.",
    "ticket_unwatching"                 => "Više ne gleda tiket #:rel.",
    "ticket_watch_operator"             => "Postavi :new_value za gledanje tiketa #:rel.",
    "ticket_unwatch_operator"           => "Ukloni :new_value sa tiketa #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Potvrđeno vlasništvo nad e-adresom u ime korisnika:rel.",
    "ticket_department_email_updated"   => "Ažuriran email odeljenjenja na tiketu #:rel sa :old_value na :nev_value.",
    "ticket_watching_updated"           => "Ažurirani agenti koji gledaju tiket #:rel.",
    "ticket_deleted"                    => "Trajno izbrisan tiket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Tiket prebačen #:rel u korpu.",
    "ticket_restored"                   => "Tiket vraćen #:rel iz korpe.",
    "emptied_ticket_trash"              => "Automatski očisti tikete od ':old_value' zapisa.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Podešen follow-up na tiketu #:rel.",
    "ticket_followup_updated"           => "Follow-up na tiketu #:rel je ažuriran.",
    "ticket_followup_deleted"           => "Follow-up na tiketu #:rel je obrisan.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutralno ocenjen članak :rel.",

);
