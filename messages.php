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

    "success_settings"      => "Paramètres mis à jour !",
    "error_settings"        => "Erreur lors de la mise à jour des paramètres.",

    "success_action"        => "Succès !",
    "error_action"          => "Erreur, action non complétée.",

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

    "no_results"            => "Aucun résultat.",

    "assign_incomplete"     => "Cette action ne peut pas être complétée. :names ne peut pas être assigné à certains billets.",

    "maintenance_mode"      => "Le mode Maintenance est activé. Le support est présentement inaccessible aux usagers, veuillez désactiver le mode maintenance une fois que vous aurez terminé.",

    "invalid_captcha"       => "Le code captcha entré est incorrect, veuillez tenter à nouveau.",
    "blocked_as_spam"       => "Votre requête a été détectée comme spam. Veuillez contacter un administrateur si vous estimez que c'est une erreur.",
    "account_exists"        => "Un compte actif existe déjà avec cette adresse courriel. Veuillez vous connecter ou utiliser la fonction 'Mot de passe oublié'.",
    "error_loading_comments" => "Une erreur s'est produite en chargeant les commentaires.",

    "invalid_auth"          => "Nom d'usager et/ou mot de passe invalides.",

    "forbidden"             => "Interdit",

    "not_logged_exception"  => "<strong>Oops! Une erreur s'est produite.</strong><br />Veuillez notifier l'administrateur système si cette erreur persiste.",

    "too_many_ticket_reqs"  => "Trop de billets soumis à :email. La limite est de :max dans un délai de :decay minutes.",

    "not_operator"          => "Une erreur s'est produite. L'opérateur sélectionné est invalide, veuillez vous assurer qu'ils appartiennent à un groupe d'opérateurs et que ce groupe est associé à un rôle.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Oops! Une erreur s'est produite.</strong><br />Une erreur s'est produite lors du chargement de la base de données. Veuillez prévenir l'administrateur système si l'erreur persiste.",

    "missing_extension"     => "Extension manquante",
    "php_ldap_missing"      => "L'extension php-ldap est requis pour utiliser l'authentification LDAP. Veuillez l'activer et rafraîchir la page.",
    "php_imap_missing"      => "L'extension php-imap est requis pour utiliser 'Email Download'. Veuillez l'activer et rafraîchir la page.",

    /*
     * 2.0.3
     */
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
    "brand_invalid_dept"    => "Cette action n'a pas pu être complétée. Le départmeent n'a pas pu être mis à jour sur certains tickets à cause de sa marque.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Erreur lors du chargement du fichier joint \":filename\", reason: \":reason\"",
    "upload_max_size"       => "Le fichier doit être plus petit que :size",
    "upload_wrong_type"     => "Ce type de fichier n'est pas accepté",

    /*
     * 2.3.0
     */
    "delete_record"         => "Supprimer :record?",
    "cannot_be_undone"      => "Cette action ne peut être annulée.",
    "warn_delete"           => "<strong>:name</strong> :record sera définitivement supprimé du système.",
    "delete_confirm"        => "Oui, supprimer :record",
    "keep_record"           => "Non, conserver :record",
    "delete_relations"      => "Supprimer <strong>:name</strong> :record impactera aussi les autres données liées:",
    "please_check"          => "Vérifiez toutes les informations ci-dessus pour confirmer que vous comprenez que ces actions sont irréversibles.",
    "failed_attachments"    => "Ajout des pièces jointes échoué.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Succès - l'e-mail a été envoyé.",
    "task_already_running"  => "La tâche planifiée est actuellement en cours, veuillez réessayez sous peu.",
    "linked_account"        => "Le compte social a bien été lié à votre compte.",
    "already_linked"        => "Ce compte social est déjà lié à un autre compte. Veuillez vous connecter à cet autre compte pour le dé-lier.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Le résultat est-il correct ?",
    "no_revert"             => "Non ! J'annule",
    "attachment_not_found"  => "La pièce jointe n'a pas été trouvée.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Votre compte a été fermé. Veuillez nous contacter si vous pensez que c'est une erreur.",
    "leave_record"          => "Quitter :record?",
    "leave_record_warn"     => "Vous allez définitivement quitter :record.",
    "success_trashed"       => ":item déplacé à la corbeille avec succès !",
    "error_trashed"         => "Echec du déplacement de :item à la corbeille.",
    "blocked_by_rule"       => "La requête a été bloquée par la règle de spam : ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Votre navigateur bloque les pop-up. Veuillez les pop-ups et actualiser cette page pour que les fonctionnalités soient actives.",
    "error_editing_message" => "Une erreur s'est produite lors de l'édition du message.",

);
