<?php

return array(

    "deleted"               => "Effacé!",
    "success"               => "Succès",
    "error"                 => "Erreur",
    "in_progress"           => "En progrès",

    "save_order"            => "Tentative de sauvegarder le tri des items",

    "show_all_results"      => "Afficher tous les résultats &raquo;",

    "are_you_sure"          => "Êtes-vous certain ?",
    "yes_im_sure"           => "Oui, je suis certain",

    "success_created"       => "Créé avec succès : :item!",
    "error_created"         => "Échec lors de la tentative de création de :item.",

    "success_deleted"       => "Effacé : :item!",
    "error_deleted"         => "Échec, n'a pas été effacé : :item.",

    "success_updated"       => "Item mis à jour : :item!",
    "error_updated"         => "Échec lors de la mise à jour de : :item.",

    "error_notfound"        => "L'item :item avec l'ID fourni n'a pas été trouvé.",
    "error_notfound_name"   => "L'item :item avec le nom fourni n'a pas été trouvé.",
    "report_notfound"       => "Le rapport avec la catégorie fournie n'a pas été trouvé.",

    "success_ordering"      => "Tri complété !",
    "error_ordering"        => "Echec du tri.",

    "error_login"           => "Connexion échouée.",
    "success_logout"        => "Déconnexion complétée.",

    "please_correct"        => "Veuillez corriger les erreurs ci-dessous et essayer à nouveau.",

    "success_settings"      => "Pramètres mis à jour !",
    "error_settings"        => "Erreur lors de la mise à jour des paramètres.",

    "success_action"        => "Succès !",
    "error_action"          => "Erreur, action non complétée.",

    "success_sending"       => "Envoyé avec succès : :item!",
    "error_sending"         => "Erreur lors de l'envoi de :item.",

    "error_embed_image"     => "Erreur lors du téléchargement de l'image.",

    "unauthorised"          => "Non autorisé",
    "not_authorised"        => "Non autorisé à compléter cette action.",
    "not_permitted"         => "Vous n'avez pas accès à cette page. Contactez votre admnistrateur si vous estime que c'est une erreur.",

    "page_not_found"        => "Page introuvable",
    "cant_find_page"        => "Impossible de trouver la page recherchée.",

    "please_report"         => "Veuillez informer un administrateur si cette erreur n'était pas prévue.",

    "return_to"             => "Retour à :page.",

    "session_expired"       => "Votre session a expiré, veuillez vous connecter à nouveau.",
    "session_refresh"       => "Votre session a expiré, veuillez recharger la page et tenter à nouveau.",

    "general_error"         => "Une erreur s'est produite. Veuillez tenter à nouveau.",

    "mailer_error"          => "Une erreur s'est produite en envoyant le courriel avec le sujet : ':subject'.",

    "no_results"            => "Aucun résultat.",

    "assign_incomplete"     => "Cette action ne peut pas être complétée. :names ne peut pas être assigné à certains billets.",

    "maintenance_mode"      => "Le mode Maintenance est activé. Le support est présentement inaccessible aux usagers, veuillez désactiver le mode maintenance une fois que vous aurez terminé.",

    "invalid_captcha"       => "Le code captcha entré est incorrect, veuillez tenter à nouveau.",
    "blocked_as_spam"       => "Votre requête a été détectée comme spam. Veuillez contacter un administrateur si vous estimez que c'est une erreur.",
    "account_exists"        => "Un compte actif existe déjà avec cette adresse courriel. Veuillez vous connecter ou utiliser la fonction 'Mot de passe oublié'.",
    "error_loading_comments" => "Une erreur s'est produite en chargeant les commentaires.",

    "invalid_auth"          => "Nom d'usager et/ou mot de passe invalides.",

    "forbidden"             => "Interdit",

    "uncaught_exception"    => "<strong>Oops! Une erreur s'est produite.</strong><br />L'erreur a été enregistrée. Veuillez notifier l'administrateur système si cette erreur persiste.",

    "not_logged_exception"  => "<strong>Oops! Une erreur s'est produite.</strong><br />Veuillez notifier l'administrateur système si cette erreur persiste.",

    "too_many_ticket_reqs"  => "Trop de billets soumis à :email. La limite est de :max dans un délai de :decay minutes.",

    "error_close_open"      => "Erreur, veuillez fermer et ouvrir à nouveau.",

    "not_operator"          => "Une erreur s'est produite. L'opérateur sélectionné est invalide, veuillez vous assurer qu'ils appartiennent à un groupe d'opérateurs et que ce groupe est associé à un rôle.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Whoops! Something went wrong.</strong><br />An error occurred while loading table data. Please notify your system administrator if the error persists.",

    "missing_extension"     => "Extension manquante",
    "php_ldap_missing"      => "The php-ldap extension is required to use LDAP authentication. Please enable it and refresh the page.",
    "php_imap_missing"      => "The php-imap extension is required to use Email Download. If you wish to use Email Download, please enable the extension and refresh the page.",

    /*
     * 2.0.3
     */
    "warn_delete"           => "Une fois cet enregistrement effacé, il ne peut pas être récupéré. Effacer cet enregistrement peut aussi affecter d'autres zones du système où cet enregistrement est présentement utilisé.",
    "only_ssl_connections"  => "Seules les connexions SSL sont autorisées.",
    "queued_emails"         => "Succès - Les courriels commenceront à être envoyés sous peu.",
    "error_loading_message" => "Une erreur s'est produite en chargeant ce message. Merci d'essayer à nouveau.",
    "please_refresh"        => "Merci de recharger cette page.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Service présentement non disponible.</strong><br />Impossible de se connecter à la base de données.",
    "category_required"     => "Cet article doit appartenir à une ou plusieurs catégories.",
    "warning"               => "Avertissement",
    "note"                  => "Note",
    "brand_invalid_dept"    => "Cette action n'a pas pu être complétée. The department could not be updated on some tickets due to their brand.",
    "template_subject_req"  => "Le sujet par défaut du courriel est requis.",
    "template_contents_req" => "Le contenu par défaut du courriel est requis.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Erreur lors du chargement du fichier joint \":filename\", reason: \":reason\"",
    "upload_max_size"       => "Le fichier doit être plus petit que :size",
    "upload_wrong_type"     => "Ce type de fichier n'est pas accepté",

    /*
     * 2.3.0
     */
    "delete_record"         => "Delete :record?",
    "cannot_be_undone"      => "This action cannot be undone.",
    "warn_delete"           => "This will permanently delete the <strong>:name</strong> :record from the system.",
    "delete_confirm"        => "Yes, Delete :record",
    "keep_record"           => "No, Keep :record",
    "delete_relations"      => "Deleting the <strong>:name</strong> :record will also permanently delete all of the following related data:",
    "please_check"          => "You must check all of the boxes above to confirm you understand the result of this irreversible action.",
    "failed_attachments"    => "Failed to attach some files.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Success - the email has been sent.",
    "task_already_running"  => "Scheduled task is running automatically currently, please try again shortly.",
    "linked_account"        => "The social account has successfully been linked with your account.",
    "already_linked"        => "The social account is already linked with another account. Please login to the other account and unlink it.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Does this look correct?",
    "no_revert"             => "No! Revert",
    "attachment_not_found"  => "The attachment was not found.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Your account has been closed. Please contact us if you think this has been done in error.",
    "leave_record"          => "Leave :record?",
    "leave_record_warn"     => "This will permanently remove you from the :record.",
    "success_trashed"       => "Successfully moved the :item to trash!",
    "error_trashed"         => "Failed trying to move the :item to trash.",
    "blocked_by_rule"       => "The request was blocked by spam rule ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Your browser is blocking popup windows. Please enable popups and redirects on this website in order to use the preview feature.",
    "error_editing_message" => "There was an error while trying to edit this message.",

);
