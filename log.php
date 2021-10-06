<?php

return array(

    // Standard messages
    "item_created"                      => "Nieuwe :item :rel. gemaakt",
    "item_updated"                      => ":item :rel. bijgewerkt",
    "item_deleted"                      => ":item :rel. verwijderd",

    // Custom messages
    "ip_ban_created"                    => "Nieuwe blokkade actief voor ip :rel.",
    "ip_ban_updated"                    => "Blokkade bijgewerkt voor ip :rel.",
    "ip_ban_deleted"                    => "Blokkade verwijderd voor ip :rel.",
    "banned_ip_on_login"                => "IP :rel voor 15 minuten geblokkeerd.",

    "ip_whitelist_created"              => "IP :rel toegevoegd aan whitelist.",
    "ip_whitelist_updated"              => "IP whitelist bijgewerkt voor IP :rel.",
    "ip_whitelist_deleted"              => "IP whitelist verwijderd voor IP :rel.",

    "system_cleanup"                    => "Systeem opschoning uitgevoerd op :rel.",

    "api_failed_login"                  => "IP :rel liet na te autenticeren voor API.",

    "user_successful_login"             => "Ingelogd op servicedesk.",
    "user_failed_login"                 => "Autenticatie mislukt.",
    "user_successful_logout"            => "Uitgelogd uit servicedesk.",

    "user_registered"                   => "Nieuwe gebruiker geregistreerd.",
    "user_confirmed"                    => "Account bevestigd.",
    "user_password_set"                 => "Stel een wachtwoord in voor het account.",
    "user_password_reset"               => "Reset het wachtwoord voor het account.",

    "user_added_to_organisation"        => "Gebruiker :rel toegevoegd aan organisatie :new_value.",
    "user_removed_from_organisation"    => "Gebruiker :rel verwijder uit organisatie :old_value.",
    "user_profile_updated"              => "Gebruikersprofiel bijgewerkt.",
    "user_left_organisation"            => ":rel. heeft de organisatie verlaten",
    "user_organisation_emptied"         => "Alle gebruikers zijn verwijderd uit organisatie :rel.",
    "user_organisation_updated"         => ":rel's organisatietoegangniveau is veranderd van :old_value in :new_value.",
    "organisation_membership_updated"   => "Gebruikerslidmaatschap bijgewerkt voor organisatie :rel.",
    "organisation_profile_updated"      => "Organisatieprofiel bijgewerkt voor :rel.",
    "organisation_owner_updated"        => "Organisatie eigendom gewijzigd van :rel naar :new_value.",

    "mass_email_queued"                 => ":new_value e-mails in wachtrij.",
    "mass_email_sent"                   => ":new_value e-mails verstuurd.",

    "email_queue_deleted"               => "Mail voor :rel. verwijderd",

    "scheduled_task_run"                => "Cron :rel is handmatig uitgevoerd.",

    "selfservice_article_upvoted"       => "Positieve reactie op artikel :rel.",
    "selfservice_article_downvoted"     => "Negatieve reactie op artikel :rel.",
    "selfservice_comment_posted"        => "Nieuw geplaatst :rel.",
    "selfservice_comment_upvoted"       => "Up-vote :rel van :old_value naar :new_value.",
    "selfservice_comment_downvoted"     => "Down-vote :rel van :old_value naar :new_value.",

    "ticket_opened"                     => "Nieuw ticket geopend #:rel.",
    "ticket_opened_on_behalf"           => "Nieuw ticket geopend #:rel uit naam van :new_value.",
    "ticket_opened_email"               => "E-mail geïmporteerd als nieuw ticket #:rel.",

    "ticket_message_reply"              => "Nieuw antwoord op ticket #:rel.",
    "ticket_message_note"               => "Nieuwe notitie op ticket #:rel.",
    "ticket_message_deleted"            => "Verwijderd bericht in ticket #:rel.",

    "ticket_user_updated"               => "Gebruiker bijgewerkte op ticket #:rel van :old_value naar :new_value.",
    "ticket_subject_updated"            => "Onderwerp bijgewerkt van ticket #:rel.",
    "ticket_department_updated"         => "Afdeling bijgewerkt van ticket #:rel van :old_value naar :new_value.",
    "ticket_status_updated"             => "Status bijgewerkt van ticket #:rel van :old_value naar :new_value.",
    "ticket_priority_updated"           => "Prioriteit bijgewerkt van ticket #:rel van :old_value naar :new_value.",
    "ticket_tag_added"                  => "Tag :new_value toegevoegd aan ticket #:rel.",
    "ticket_tag_updated"                => "Tags vanticket #:rel. zijn bijgewerkt",
    "ticket_tag_removed"                => "Tag :new_value verwijder van ticket #:rel.",
    "ticket_slaplan_updated"            => "SLA op ticket #:rel bijgewerkt van :old_value naar :new_value.",
    "ticket_duetime_updated"            => "Deadline op ticket #:rel bijgesteld naar :new_value.",
    "ticket_duetime_paused"             => "Deadline op ticket #:rel gepauzeerd tot nieuw antwoord van gebruiker.",
    "ticket_customfield_updated"        => "Aangepast velden op ticket #:rel. bijgewerkt",
    "ticket_converted_user"             => "Intern ticket #:rel omgezet naar gebruikerticket.",
    "ticket_converted_internal"         => "Gebruiker ticket #:rel omgezet naar intern ticket.",

    "ticket_assigned_operator"          => "Ticket #:rel. op naam gezet van :new_value",
    "ticket_unassigned_operator"        => "Ticket #:rel. staat niet meer op naam van :new_value",
    "ticket_assigned_self"              => "Ticket #:rel. op eigen naam toegewezen",
    "ticket_assigned_updated"           => "Toegewezen operators op ticket #:rel. bijgewerkt",

    "ticket_locked"                     => "Locked ticket #:rel.",
    "ticket_unlocked"                   => "Unlocked ticket #:rel.",
    "ticket_locked_reply"               => "Antwoord kon niet worden toegevoegd aan locked ticket #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value samengevoegd met ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel is gesplist.",

    "ticket_user_blocked"               => "Geblokkeerde e-mail :new_value (van gebruiker op ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel is gesloten.",
    "ticket_inactive_closed"            => "Inactief inactive ticket #:rel geslotenn van status :old_value.",
    "ticket_awaiting_response"          => "Wacht-nog-op-antwoord e-mail verstuurd naar gebruiker van ticket #:rel.",

    "ticket_split_from"                 => "Berichten gesplitst van oud ticket #:rel naar nieuw ticket #:new_value.",
    "ticket_split_to"                   => "Berichten gesplitst van oud ticket #:old_value naar nieuw ticket #:rel.",

    "ticket_attachment_saved"           => "Bijlage toegevoegd aan ticket #:rel.",
    "ticket_attachment_deleted"         => "bijlage verwijderd van ticket #:rel.",

    "ticket_throttled"                  => "Nieuw ticket van :rel geweigerd i.v.m throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Bijlage ':new_value' toegevoegd aan artikel ID :rel.",
    "selfservice_attachment_deleted"    => "bijlaage ':new_value' verwijderd van artikel ID :rel.",
    "ticket_unassigned_self"            => "Toewijzing van ticket #:rel. aan uzelf verwijderd",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "Antwoord kon niet worden toegevoegd omdat het ticket hoort bij een afgesloten merk #:rel.",
    "personal_signatures_updated"       => "Persoonlijke handtekening bijgewerkt.",
    "operator_signatures_updated"       => ":rel's handtekening bijgewerkt.",
    "check_email_failed"                => "Error: Kon geen e-mail downloaden van account :old_value: ':rel'.",
    "ticket_added_cc"                   => "E-mail(s) :new_value toegevoegd aan  CC adreslijst voor ticket #:rel.",
    "ticket_removed_cc"                 => "E-mail(s) :old_value verwijderd uit  CC adresljist voor ticket #:rel.",
    "invalid_department_brand"          => "Kon voor ticket #:rel de afdeling niet instellen op ':new_value' omdat deze afdeling niet bij dit merk hoort.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "E-mail met onderwerp ':extra_rel1' verstuurd naar :rel.",
    "sent_template_email_to"            => "':extra_rel1' e-mail verstuurd naar :rel.",
    "sent_ticket_email_to_user"         => "':extra_rel1' e-mail verstuurd naar gebruiker voor ticket #:rel.",
    "sent_email_to_operators"           => "':extra_rel1' e-mail verstuurd naar operators.",
    "sent_ticket_email_to_operators"    => "':extra_rel1' e-mail verstuurd naar operators voor ticket #:rel.",
    "sent_email_to_operator_group"      => "':extra_rel1' e-mail verstuurd naar operatorgroep ':new_value' voor ticket #:rel.",
    "ticket_macro_applied"              => "De macro ':new_value' is uitgevoerd op ticket #:rel.",
    "ticket_macro_automatic"            => "De macro ':new_value' is automatisch uitgevoerd op ticket #:rel.",
    "email_template_not_found"          => "E-mail template ID ':new_value' niet gevonden, mail wordt niet verstuurd.",
    "ticket_duetime_unset"              => "deadline van ticket #:rel. is verwijderd",
    "private_conversation_started"      => "Een conversatie is gestart met :rel.",
    "private_message_sent"              => "Een bericht is verstuurd naar :rel.",
    "not_imported_replies_disabled"     => "Een e-mail :extra_rel1 was ontvangen voor ticket #:rel, maar was niet geimporteerd omdat emailantwoorden zijn uitgeschakeld.",
    "not_imported_ticket_locked"        => "Een e-mail :extra_rel1 was ontvangen voor ticket #:rel, maar was niet geimporteerd omdat het ticket is gelocked.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Ticket gebruiker is toegevoegd aan gebruikersgroep :new_value.",
    "ticket_user_removed_from_group"    => "Ticket gebruiker is verwijderd uit gebruikersgroep :old_value.",
    "email_on_behalf"                   => ":extra_rel2 doorgestuurd in naam van  ':extra_rel1' in ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Verzonden ':extra_rel1' e-mail naar :new_value, afdeling accepteert geen e-mails van niet-geregistreerde gebruikers. ",
    "deleted_user"                      => ":item ':rel' met e-mail ':email_address' (ID :user_id) is verwijderd.",
    "linked_ticket"                     => "Ticket #:rel is gelinkt aan ticket :extra_rel1.",
    "unlinked_ticket"                   => "Link tussen ticket #:rel met ticket :extra_rel1 verwijderd.",
    "email_queue_attachment_deleted"    => "Bijlage verwijderd ':old_value' van in de wachtrij geplaatste e-mail ':rel'.",
    "forward_ticket_email"              => "Ticket #:rel doorgestuurd naar derde-partij, bekijk ':extra_rel1' e-mail.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => ":rel bijgewerkt door :extra_rel1.",
    "selfservice_comment_status"        => "Gewijzigde status van :rel door :extra_rel1 van :old_value naar :new_value.",
    "selfservice_comment_deleted"       => "Reactie verwijderd door :extra_rel1.",
    "ticket_message_posted"             => "Een nieuwe :extra_rel1 gepost op ticket #:rel.",
    "ticket_message_edited"             => "Heeft een :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Kan e-mail niet verzenden .",
    "ticket_brand_updated"              => "Het merk op van ticket #:rel is bijgewerkt van :old_value naar :new_value.",
    "export_scheduled"                  => "Een export van gebruiker :rel is gepland.",
    "export_generated"                  => "Export :new_value van gebruiker :rel is gegenereerd en opgeslagen op het systeem.",
    "export_deleted"                    => "Export :old_value van gebruiker :rel is uit het systeem verwijderd.",
    "deleted_inactive_records"          => "Automatisch verwijderd :old_value inactief :rel.",
    "deleted_old_records"               => "Oude :rel records zijn automatisch verwijderd.",
    "sent_email_to_user_group"          => "E-mail in wachtrij geplaatst naar gebruikersgroep ':new_value' voor ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Monitort ticket #:rel.",
    "ticket_unwatching"                 => "Monitort ticket #:rel niet meer.",
    "ticket_watch_operator"             => "Laat :new_value ticket #:rel monitoren.",
    "ticket_unwatch_operator"           => "Laat :new_value ticket #:rel niet meer monitoren.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Bevestig eigendom van e-mailadres namens gebruiker :rel.",
    "ticket_department_email_updated"   => "De afdelings-e-mail op ticket #:rel bijgewerkt van :old_value naar :new_value.",
    "ticket_watching_updated"           => "Monitorende operators op ticket #:rel bijgewerkt.",
    "ticket_deleted"                    => "Ticket ':old_value' (#:rel) permanent verwijderd.",
    "ticket_trashed"                    => "Ticket #:rel verplaatst naar de prullenbak.",
    "ticket_restored"                   => "Ticket #:rel herstelt vanuit de prullenbak.",
    "emptied_ticket_trash"              => "Automatisch de ticketprullenbak van ':old_value' records opgeschoond.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Nieuwe follow-up ingesteld op ticket  #:rel.",
    "ticket_followup_updated"           => "Follow-up bijgewerkt op ticket #:rel.",
    "ticket_followup_deleted"           => "follow-up verwijderd op ticket #:rel.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Artikel :rel is neutraal beoordeeld.",

);
