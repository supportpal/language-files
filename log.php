<?php

return array(

    // Standard messages
    "item_created"                      => "Crée :item :rel.",
    "item_updated"                      => "Mise à jour :item :rel.",
    "item_deleted"                      => "Supprimé :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Crée nouveau interdiction pour IP :rel.",
    "ip_ban_updated"                    => "Mise à jour de l'interdiction pour on IP :rel.",
    "ip_ban_deleted"                    => "Interdiction supprimée pour IP :rel.",
    "banned_ip_on_login"                => "Interdiction pour IP :rel pour 15 minutes.",

    "ip_whitelist_created"              => "IP :rel ajouté à la liste blanche.",
    "ip_whitelist_updated"              => "Mise à jour IP :rel de la liste blanche",
    "ip_whitelist_deleted"              => "IP :rel supprimée de la liste de blanche",

    "system_cleanup"                    => "Exécuter nettoyage du système pour :rel.",

    "api_failed_login"                  => "IP :rel échec d'authentification vers API.",

    "user_successful_login"             => "Connecté au système de ticket.",
    "user_failed_login"                 => "Échec d'authentification.",
    "user_successful_logout"            => "Deconnecté du système de ticket.",

    "user_registered"                   => "Compte enregistré.",
    "user_confirmed"                    => "Compte confirmé.",
    "user_password_set"                 => "Définissez un mot de passe pour le compte.",
    "user_password_reset"               => "Re-définissez un mot de passe pour leur compte.",

    "user_added_to_organisation"        => "Utilisateur :rel ajouté à l'organisation :new_value.",
    "user_removed_from_organisation"    => "Utilisateur :rel enlevé à l'organisation :old_value.",
    "user_profile_updated"              => "Mise à jour du compte utilisateur.",
    "user_left_organisation"            => "L'utilisateur a quitté l'organisation :rel.",
    "user_organisation_emptied"         => "Tous les clients enlevés de l'organisation :rel.",
    "user_organisation_updated"         => ":rel's niveau d'accès de l'organisation a changé de :old_value en :new_value.",
    "organisation_membership_updated"   => "Mise à jour adhésion utilisateur à l'organisation :rel.",
    "organisation_profile_updated"      => "Profil de l'organisation :rel mis à jour.",
    "organisation_owner_updated"        => "Possession de l'organisation transféré de :rel en :new_value.",

    "mass_email_queued"                 => " :new_value e-mails dans file d'attente en lots à envoyer.",
    "mass_email_sent"                   => " :new_value e-mails envoyés dans la file d'attente.",

    "email_queue_deleted"               => "E-mail en queue supprimé à :rel.",

    "scheduled_task_run"                => "Tâche planifiée :rel a été exécutée manuellement.",

    "selfservice_article_upvoted"       => "Article :rel noté positivement.",
    "selfservice_article_downvoted"     => "Article :rel noté négativement.",
    "selfservice_comment_posted"        => "Nouveau :rel posté.",
    "selfservice_comment_upvoted"       => ":rel up-voté, passant de :old_value à :new_value.",
    "selfservice_comment_downvoted"     => ":rel down-voté passant :old_value à :new_value.",

    "ticket_opened"                     => "Nouveau ticket ouvert #:rel.",
    "ticket_opened_on_behalf"           => "Nouveau ticket ouvert #:rel de la part :new_value.",
    "ticket_opened_email"               => "Nouveau ticket crée via email importé #:rel.",

    "ticket_message_reply"              => "Nouvelle réponse posté sur ticket #:rel.",
    "ticket_message_note"               => "Nouvelle note posté sur ticket #:rel.",
    "ticket_message_deleted"            => "message supprimé sur ticket #:rel.",

    "ticket_user_updated"               => "Utilisateur mis à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_subject_updated"            => "Sujet mis à jour sur ticket #:rel.",
    "ticket_department_updated"         => "Département mis à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_status_updated"             => "Statut mis à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_priority_updated"           => "Priorité mise à jour sur ticket #:rel de :old_value à :new_value.",
    "ticket_tag_added"                  => "Tag ajouté :new_value sur ticket #:rel.",
    "ticket_tag_updated"                => "Mise à jour tags sur ticket #:rel.",
    "ticket_tag_removed"                => "Tag enlevé :new_value du ticket #:rel.",
    "ticket_slaplan_updated"            => "Mise à jour Plan SLA sur ticket #:rel de :old_value à :new_value.",
    "ticket_duetime_updated"            => "Echéance mise à jour sur ticket #:rel à :new_value.",
    "ticket_duetime_paused"             => "Mettre en pause l'échéance sur ticket #:rel jusqu'à prochaine réponse de l'utilisateur.",
    "ticket_customfield_updated"        => "Mise à jour champs peronnalisé sur ticket #:rel.",
    "ticket_converted_user"             => "Ticket interne #:rel converti en ticket utilisateur.",
    "ticket_converted_internal"         => "Ticket utilisateur #:rel converti en ticket interne.",

    "ticket_assigned_operator"          => ":new_value attribué sur ticket #:rel.",
    "ticket_unassigned_operator"        => ":new_value des-attribué du ticket #:rel.",
    "ticket_assigned_self"              => "Attribué soi-même le ticket #:rel.",
    "ticket_assigned_updated"           => "Mise à jour des collaborateurs attribués du ticket #:rel.",

    "ticket_locked"                     => "Ticket #:rel verrouillé.",
    "ticket_unlocked"                   => "Ticket #:rel debloqué",
    "ticket_locked_reply"               => "Réponse n'a pas pu être ajouté au ticket verrouillé #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value fusionné(s) en ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel a été defusionné.",

    "ticket_user_blocked"               => "E-mail verrouillé :new_value (par client utilisateur sur ticket #:rel).",

    "ticket_closed"                     => "Ticket #:rel a été fermé.",
    "ticket_inactive_closed"            => "Ticket non actif fermé #:rel du statut :old_value.",
    "ticket_awaiting_response"          => "E-mail en attente d'une réponse envoyé sur ticket #:rel.",

    "ticket_split_from"                 => "Scission des messages de l'ancien ticket #:rel en nouveau ticket #:new_value.",
    "ticket_split_to"                   => "Scission des messages de l'ancien ticket #:old_value en nouveau ticket #:rel.",

    "ticket_attachment_saved"           => "Pièce jointe ajoutée au ticket #:rel.",
    "ticket_attachment_deleted"         => "Pièce jointe retirée du ticket #:rel.",

    "ticket_throttled"                  => "Rejected new ticket from :rel due to throttling.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Pièce jointe ajoutée ':new_value' à l'article :rel.",
    "selfservice_attachment_deleted"    => "Pointe jointe retirée ':new_value' de l'article :rel.",
    "ticket_unassigned_self"            => "Auto retiré du ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "La réponse n'a pas pu être ajoutée car le ticket est lié à une marque désactivée: #:rel",
    "personal_signatures_updated"       => "Signatures personnelles mises à jour.",
    "operator_signatures_updated"       => "Signature :rel mise à jour.",
    "check_email_failed"                => "Erreur: Echec du téléchargement de l'e-mail du compte :old_value: ':rel'.",
    "ticket_added_cc"                   => "Email(s) :new_value ajouté à la liste de CC du ticket #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value supprimé de la liste de CC du ticket #:rel.",
    "invalid_department_brand"          => "Echec du paramétrage du département ':new_value' sur le ticket #:rel, le département n'appartient pas à la marque du ticket",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Envoie un e-mail avc le sujet':extra_rel1' à :rel.",
    "sent_template_email_to"            => "Envoi de ':extra_rel1' e-mail à :rel.",
    "sent_ticket_email_to_user"         => "Envoi de ':extra_rel1' e-mail à l'utilisateur pour le ticket #:rel.",
    "sent_email_to_operators"           => "Envoi de ':extra_rel1' e-mail aux opérateurs.",
    "sent_ticket_email_to_operators"    => "Envoi de ':extra_rel1' e-mail aux opérateurs pour le ticket #:rel.",
    "sent_email_to_operator_group"      => "Envoi de ':extra_rel1' e-mail au groupe d'opérateurs ':new_value' pour le ticket #:rel.",
    "ticket_macro_applied"              => "La macro ':new_value' a été lancée sur le ticket #:rel.",
    "ticket_macro_automatic"            => "La macro ':new_value' a été lancée automatiquement sur le ticket #:rel.",
    "email_template_not_found"          => "E-mail template ':new_value' non trouvé. Envoi de l'email avorté.",
    "ticket_duetime_unset"              => "Echéance du ticket #:rel annulée.",
    "private_conversation_started"      => "Conversation démarrée avec :rel.",
    "private_message_sent"              => "Message envoyé à :rel.",
    "not_imported_replies_disabled"     => "Un email :extra_rel1 a été reçu pour le ticket #:rel, mais n'a pas été importé car les réponses du ticket sont désactivées.",
    "not_imported_ticket_locked"        => "Un email :extra_rel1 a été reçu pour le ticket #:rel, mais n'a pas été importé car le ticket est verrouillé.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Utilisateur du ticket a été ajouté au groupe d'utilisateur :new_value.",
    "ticket_user_removed_from_group"    => "Utilisateur du ticket a été supprimé du groupe d'utilisateur :old_value.",
    "email_on_behalf"                   => "Transfert de :extra_rel2 de la part de ':extra_rel1' dans le ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Envoi de ':extra_rel1' e-mail à :new_value, le département n'accepte pas les utilisateurs non enregistrés.",
    "deleted_user"                      => ":item supprimé ':rel' avec l'e-mail ':email_address' (ID :user_id).",
    "linked_ticket"                     => "Ticket #:rel lié avec le ticket :extra_rel1.",
    "unlinked_ticket"                   => "Ticket #:rel délié avec le ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Pièce jointe supprimée :  ':old_value' des e-mail en queue ':rel'.",
    "forward_ticket_email"              => "ticket #:rel transféré en third-party, voir ':extra_rel1' e-mail.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Mise à jour de :rel par :extra_rel1.",
    "selfservice_comment_status"        => "Statut changé de :rel par :extra_rel1 de :old_value à :new_value.",
    "selfservice_comment_deleted"       => "Commentaire supprimé par :extra_rel1.",
    "ticket_message_posted"             => "Nouveau :extra_rel1 sur le ticket #:rel.",
    "ticket_message_edited"             => "Mise à jour de :extra_rel1 sur le ticket #:rel.",
    "email_send_failed"                 => "Echec de l'envoi de l'e-mail.",
    "ticket_brand_updated"              => "Marque mise à jour sur le ticket #:rel de :old_value à :new_value.",
    "export_scheduled"                  => "L'export de l'utilisateur :rel a été prévu.",
    "export_generated"                  => "L'export :new_value de l'utilisateur :rel a été généré et sauvegardé sur le système.",
    "export_deleted"                    => "L'export :old_value de l'utilisateur :rel a été supprimé du système.",
    "deleted_inactive_records"          => "Automatically deleted :old_value inactive :rel.",
    "deleted_old_records"               => "Automatically deleted old :rel records.",
    "sent_email_to_user_group"          => "Queued email to user group ':new_value' for ticket #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Assigné au ticket #:rel.",
    "ticket_unwatching"                 => "N'est plus assigné au ticket #:rel.",
    "ticket_watch_operator"             => "Opérateur :new_value assigné au ticket #:rel.",
    "ticket_unwatch_operator"           => "Opérateur :new_value n'est plus assigné au ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Adresse e-mail de l'utilisateur :rel confirmée.",
    "ticket_department_email_updated"   => "E-mail du département du ticket #:rel a été mis à jour : De :old_value à :new_value.",
    "ticket_watching_updated"           => "Opérateurs assignés au ticket #:rel mis à jour.",
    "ticket_deleted"                    => "Ticket ':old_value' définitivement supprimé (#:rel).",
    "ticket_trashed"                    => "Tcket #:rel déplacé à la corbeille.",
    "ticket_restored"                   => "Ticket #:rel restauré de la corbeille.",
    "emptied_ticket_trash"              => "La corbeille a été automatiquement vidée de ':old_value' enregistrement.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Un suivi a été défini sur le ticket #:rel.",
    "ticket_followup_updated"           => "Un suivi sur le ticket #:rel a été mis à jour.",
    "ticket_followup_deleted"           => "Un suivi sur le ticket #:rel a été supprimé.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Article :rel noté neutralement.",

);
