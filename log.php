<?php

return array(

    // Standard messages
    "item_created"                      => "Nieuwe :item :rel. gemaakt",
    "item_updated"                      => ":item :rel. bijgewerkt",
    "item_deleted"                      => ":item :rel. verwijderd",

    // Custom messages
    "ip_ban_created"                    => "Nieuwe ban ingesteld voor ip :rel.",
    "ip_ban_updated"                    => "Ban bijgewerkt voor ip :rel.",
    "ip_ban_deleted"                    => "Ban verwijderd voor ip :rel.",
    "banned_ip_on_login"                => "IP :rel voor 15 minutes gebanned.",

    "ip_whitelist_created"              => "IP :rel toegevoegd aan whitelist.",
    "ip_whitelist_updated"              => "Updated IP :rel on whitelist.",
    "ip_whitelist_deleted"              => "Deleted IP :rel from whitelist.",

    "system_cleanup"                    => "System cleanup uitgevoerd op :rel.",

    "api_failed_login"                  => "IP :rel liet na te autenticeren voor API.",

    "user_successful_login"             => "Ingelogd op servicedesk.",
    "user_failed_login"                 => "Autenticatie mislukt.",
    "user_successful_logout"            => "Uitgelogd uit servicedesk.",

    "user_registered"                   => "Een account geregistreerd.",
    "user_confirmed"                    => "Account bevestigd.",
    "user_password_set"                 => "Stel een wachtwoord in voor het account.",
    "user_password_reset"               => "Reset het wachtwoord voor het account.",

    "user_added_to_organisation"        => "Gebruiker :rel toegevoegd aan organisatie :new_value.",
    "user_removed_from_organisation"    => "Gebruiker :rel verwijder uit organisatie :old_value.",
    "user_profile_updated"              => "Accountprofiel bijgewerkt.",
    "user_left_organisation"            => ":rel. heeft de organisatie verlaten",
    "user_organisation_emptied"         => "Alle gebruikers zijn verwijderd uit organisatie :rel.",
    "user_organisation_updated"         => ":rel's organisatietoegangniveau is veranderd van :old_value in :new_value.",
    "organisation_membership_updated"   => "Gebruikerslidmaatschap bijgewerkt voor organisatie :rel.",
    "organisation_profile_updated"      => "Bijgewerkt profiel voor organisatie :rel.",
    "organisation_owner_updated"        => "Eigendom organisatie :rel overgezet naar :new_value.",

    "mass_email_queued"                 => ":new_value e-mails in wachtrij.",
    "mass_email_sent"                   => ":new_value e-mails verstuurd.",

    "email_queue_deleted"               => "Mail voor :rel. verwijderd",

    "scheduled_task_run"                => "Geplande taak :rel is handmatig uitgevoerd.",

    "selfservice_article_upvoted"       => "Positieve reactie op artikel :rel.",
    "selfservice_article_downvoted"     => "Negatieve reactie op artikel :rel.",
    "selfservice_comment_posted"        => "Nieuw geplaatst :rel.",
    "selfservice_comment_upvoted"       => "Up-vote :rel van :old_value naar :new_value.",
    "selfservice_comment_downvoted"     => "Down-vote :rel van :old_value naar :new_value.",

    "ticket_opened"                     => "Nieuw ticket geopend #:rel.",
    "ticket_opened_on_behalf"           => "Nieuw ticket geopend #:rel uit naam van :new_value.",
    "ticket_opened_email"               => "E-mail geïmporteerd als nieuw ticket #:rel.",

    "ticket_message_reply"              => "Nieuw antwoord op ticket #:rel.",
    "ticket_message_note"               => "Nieuwe aantekening op ticket #:rel.",
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
    "ticket_duetime_updated"            => "deadline op ticket #:rel bijgesteld naar :new_value.",
    "ticket_duetime_paused"             => "deadline op ticket #:rel gepauzeerd tot nieuw antwoord van gebruiker.",
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

    "ticket_closed"                     => "Ticket #:rel is afgesloten.",
    "ticket_inactive_closed"            => "Inactief inactive ticket #:rel geslotenn van status :old_value.",
    "ticket_awaiting_response"          => "Wacht-nog-op-antwoord e-mail verstuurd naar gebruiker van ticket #:rel.",

    "ticket_split_from"                 => "Berichten gesplitst van oud ticket #:rel naar nieuw ticket #:new_value.",
    "ticket_split_to"                   => "Berichten gesplitst van oud ticket #:old_value naar nieuw ticket #:rel.",

    "ticket_attachment_saved"           => "Bijlage toegevoegd aan ticket #:rel.",
    "ticket_attachment_deleted"         => "bijlage verwijderd van ticket #:rel.",

    "ticket_throttled"                  => "Nieuw ticket van :rel gewijgerd ivm throttling.",

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
    "registered_users_only"             => "Sent ':extra_rel1' email to :new_value, department does not accept emails from unregistered users.",
    "deleted_user"                      => "Deleted :item ':rel' with email ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Linked ticket #:rel with ticket :extra_rel1.",
    "unlinked_ticket"                   => "Unlinked ticket #:rel from ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Deleted attachment ':old_value' from queued email ':rel'.",
    "forward_ticket_email"              => "Forwarded ticket #:rel to third-party, view ':extra_rel1' email.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Updated :rel by :extra_rel1.",
    "selfservice_comment_status"        => "Changed status of :rel by :extra_rel1 from :old_value to :new_value.",
    "selfservice_comment_deleted"       => "Deleted comment by :extra_rel1.",
    "ticket_message_posted"             => "Posted a new :extra_rel1 to ticket #:rel.",
    "ticket_message_edited"             => "Edited a :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Failed to send email.",
    "ticket_brand_updated"              => "Updated the brand on ticket #:rel from :old_value to :new_value.",
    "export_scheduled"                  => "An export of user :rel has been scheduled.",
    "export_generated"                  => "Export :new_value of user :rel has been generated and stored on the system.",
    "export_deleted"                    => "Export :old_value of user :rel has been deleted from the system.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Queued email to user group ':new_value' for ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Watching ticket #:rel.",
    "ticket_unwatching"                 => "No longer watching ticket #:rel.",
    "ticket_watch_operator"             => "Set :new_value to watch ticket #:rel.",
    "ticket_unwatch_operator"           => "Unset :new_value from watching ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Confirmed ownership of email address on behalf of user :rel.",
    "ticket_department_email_updated"   => "Updated the department email on ticket #:rel from :old_value to :new_value.",
    "ticket_watching_updated"           => "Updated watching operators on ticket #:rel.",
    "ticket_deleted"                    => "Permanently deleted ticket ':old_value' (#:rel).",
    "ticket_trashed"                    => "Moved ticket #:rel to trash.",
    "ticket_restored"                   => "Restored ticket #:rel from trash.",
    "emptied_ticket_trash"              => "Automatically cleaned the ticket trash of ':old_value' records.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "A new follow up has been set up on ticket #:rel.",
    "ticket_followup_updated"           => "A follow up on ticket #:rel has been updated.",
    "ticket_followup_deleted"           => "A follow up on ticket #:rel has been deleted.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Neutrally rated article :rel.",

);
