<?php

return array(

    "feedback_question"         => "Ticket à afficher à l'utilisateur.",
    "open_new"                  => "Ouvrir un ticket",
    "select_department"         => "Choisir un département",
    "select_department_desc"    => "Veuillez choisir le département en lien avec votre ticket.",
    "no_departments"            => "Aucun département trouvé.",
    "department_user_details"   => "Détails du département et de l'utilisateur",
    "enter_your_details"        => "Entrez vos informations",
    "enter_ticket_details"      => "Entrez informations",
    "enter_subject_message"     => "Entrez sujet et message",
    "invalid_user"              => "Assurez-vous d'entrer des données valides avant de poursuivre.",

    "registered_users"          => "Utilisateurs enregistrés uniquement",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Sujet",
    "no_subject"                => "Aucun sujet",
    "last_action"               => "Dernière action",
    "due_time"                  => "Dû à",
    "created_time"              => "Ajouté à",
    "submitted"                 => "Soumis",
    "ticket_reply"              => "Réponse à un ticket",
    "ticket_note"               => "Note sur un ticket",
    "ticket_type"               => "Type de ticket",

    "user_ticket"               => "Ticket d'utilisateur",
    "user_ticket_desc"          => "Ouvrir un ticket pour un nouvel utilisateur ou un utilisateur existant.",
    "existing_user"             => "Utilisateur existant",
    "new_user"                  => "Nouvel utilisateur",
    "internal"                  => "Interne",
    "internal_ticket_desc"      => "Ajouter un ticket pour un usage interne seulement. Ce ticket vous sera associé et non pas à un utilisateur.",
    "ticket_opened"             => "Votre ticket a été ajouté.",
    "enter_user_details"        => "Veuillez entrer vos détails ci-desosus, ou vous connecter à votre compte si vous en avez un.",
    "already_have_account"      => "Vous avez déjà un compte, veuillez vous connecter et ouvrir la question. Veuillez utiliser la fonction 'Mot de passe oublié' au besoin.",

    "recent_tickets"            => "Tickets récents",
    "last_message_text"         => "Dernier message",

    "set_due_time"              => "Dû pour",

    "settings"                  => "Paramètres du ticket",

    "priority"                  => "Priorité|Priorités",

    "channel"                   => "Canal|Canaux",
    "account"                   => "Compte|Comptes",

    "assign_operator"           => "Assigner opérateur",
    "assigned_operator"         => "Opérateurs assignés",
    "assigned_to"               => "Assigné à",
    "assigned"                  => "Assigné",

    "department"                => "Département|Départements",
    "change_department_order"   => "Faites glisser les lignes pour modifier l'ordre que les Départements sont présentés aux clients lors de l'ouverture d'un nouveau ticket.",
    "department_applicable"     => "Départements applicables",
    "department_applicable_desc" => "Les départements dans lesquels la priorité sera disponible pour les clients de sélectionner. Valable uniquement pour le frontend, toutes les priorités seront disponibles aux opérateurs pour tous les ministères.",

    "send_now"                  => "Envoyer maintenant",

    "tag"                       => "Libellé|Libellés",

    "track_ticket"              => "Suivre le ticket",
    "view_ticket"               => "Voir le ticket",

    // Recent activity
    "recent_activity"           => "Activité récente",

    "ticket_number"             => "No du ticket",
    "ticket_format"             => "Format du no du ticket",

    // Departments
    "department_public_desc"    => "Si le département est visible pour les clients sur le Web Help Desk.",
    "department_parent_desc"    => "Si le département est un sous-département, s'il vous plaît sélectionner un parent. Les rayons auxiliaires sont destinés à l'escalade et la gestion interne, donc la définition de cette supprimera certaines des options ci-dessous.",
    "department_priority"       => "Priorités de Département",
    "department_priority_desc"  => "Les priorités qui seront disponibles pour les clients lors de l'ouverture d'un ticket dans ce département, au moins un doit être sélectionné. Par défaut, toutes les priorités seront disponibles dans le département.",
    "department_no_format"      => "En option, uniquement mettre pour remplacer le format de numéro de ticket par défaut, laissez en blanc autrement.",
    "department_operator"       => "Département de l'opérateur",
    "department_default_assign" => "Par défaut attribué à",
    "dept_default_assign_desc"  => "Utilisez cette option si vous souhaitez des tickets qui sont ouverts dans ce département pour être automatiquement affecté à un ou plusieurs opérateurs.",

    // Department emails
    "email_accounts_desc"       => "Utilisez cette option si vous souhaitez des tickets qui sont ouverts dans ce département pour être automatiquement affecté à un ou plusieurs opérateurs.",
    "department_port"           => "Les valeurs par défaut sont: 110 pour POP3, 995 pour POP3 sécurisé, 143 pour IMAP, et 993 pour IMAP sécurisé. Laissez vide pour utiliser la valeur par défaut.",
    "department_encryption"     => "Certains fournisseurs de messagerie exigent SSL ou TLS pour se connecter, si vous n'êtes pas sûr de laisser ce paramètre sur Aucun.",
    "department_delete_mail"    => "Si vous utilisez IMAP, vous pouvez choisir de ne pas supprimer les e-mails sur le serveur après qu'ils ont été importés en tant que tickets.",
    "protocol"                  => "Protocole",
    "server"                    => "Serveur d'e-mail",
    "port"                      => "Port",
    "encryption"                => "Cryptage",
    "delete_downloaded"         => "Effacer e-mails téléchargés",
    "consume_all"               => "Consommez tout e-mail",
    "email_download"            => "E-mail Téléchargement",
    "email_piping"              => "E-mail Piping",
    "email_piping_desc"         => "Mettre en place un e-mail expéditeur comme le suivant, le chemin exécutable PHP peut être différent sur votre serveur.",
    "remote_email_piping"       => "Distance E-mail Piping",

    // Department email options
    "email_options"             => "Options e-mails",
    "email_user_on_email"       => "Envoyer un e-mail aux utilisateur quand un ticket est ouvert par e-mail",
    "email_user_on_email_desc"  => "Sélectionnez si les utilisateurs doivent être informés par e-mail lorsqu'un e-mail qu'ils ont envoyé ouvre un nouveau ticket.",
    "email_operators"           => "Notifier opérateurs",
    "email_operators_desc"      => "Indiquez si vous souhaitez transmettre les réponses de l'opérateur à d'autres opérateurs. Vérifie par défaut les opérateurs de messagerie option dans le panneau de commande, et enverra automatiquement un e-mail pour les réponses par courriel par les opérateurs.",
    // Department email templates
    "new_ticket_opened"         => "Nouveau ticket ouvert",
    "waiting_for_response"      => "En attente d'une réponse",
    "ticket_auto_closed"        => "Tickets fermés automatiquement",
    "closed_by_operator"        => "Fermé par l'opérateur",

    // Feedback
    "feedback"                  => "Retour",
    "feedback_form"             => "Formulaire de retour|Formulaires de retour",
    "feedback_form_desc"        => "Des formulaires de retour sont traités dans l'ordre où ils apparaissent. Faites glisser les lignes à réorganiser et ajuster la priorité des formulaires de retour.",
    "view_feedback"             => "Afficher retour",
    "ticket_feedback"           => "Retour sur le ticket",
    "feedback_fields_error"     => "Il y avait un problème de la récupération des champs de Feedback.",
    "time_after_resolved"       => "Durée de temps après la résolution",
    "time_after_resolved_desc"  => "Le temps après lequel un ticket est marqué comme résolu que le formulaire de retour est envoyé au client.",
    "expires_after"             => "Expire après",
    "expires_after_desc"        => "Le temps après lequel un formulaire de retour a expiré et auquel on ne peut plus répondre. Bien que nous recommandons la durée de 7 jours, vous pouvez entrer 0 dans tous les champs pour ne pas fixer de date d'expiration.",
    "form_conditions"           => "Conditions du formulaire",
    "form_conditions_desc"      => "Définir les conditions de tickets pour lesquels des tickets nouvellement résolus sont vérifiés pour voir si ils tombent sous cette forme. Si un ticket résolu correspond à des formes multiples, il sera sélectionné sur la priorité de la forme, qui peut être modifié en allant à la liste des formulaires et réordonnancement.",
    "form_fields"               => "Champs du formulaire",
    "rating"                    => "Évaluation",
    "feedback_desc"             => "Merci de nous avoir contactés. Nous espérons avoir répondre à votre demande à votre entière satisfaction. Pourriez-vous évaluer votre expérience ci-dessous ?",
    "good_satisfied"            => "Bien, je suis satisfait-e",
    "bad_not_satisfied"         => "Mauvais, je ne suis pas satisfait-e",
    "feedback_not_found"        => "Votre commentaire ne pouvait être accepté, veuillez ouvrir un ticket avec nous si vous souhaitez partager vos commentaires.",
    "feedback_malformed_token"  => "Votre commentaire ne pouvait être accepté en raison d'un jeton malformé. Veuillez ouvrir un ticket avec nous si vous souhaitez partager vos commentaires.",
    "feedback_expired"          => "Le ticket a été résolu pendant un certain temps, et il ne peut malheureusement plus être classé.",
    "feedback_questions"        => "Si vous pouviez prendre quelques instants, veuillez répondre aux questions suivantes pour nous aider à améliorer encore le soutien que nous offrons.",
    "feedback_for_ticket"       => "Retour pour le ticket #:number",
    "feedback_rating_desc"      => "Le retour reçu sur ce ticket a été classé comme <strong>:rating</strong> par le client.",

    // Custom fields
    "customfield"               => "Champ sur mesure du ticket|Champ sur mesure du ticket",
    "customfield_order"         => "Faites glisser les lignes à modifier l'ordre des champs personnalisés sont présentés aux utilisateurs lors de l'ouverture des tickets via le web.",

    // Canned responses
    "cannedresponse"            => "Réponses pré-enregistrée|Réponses pré-enregistrées",

    // Filters
    "filter"                    => "Filtre|Filtres",
    "filter_condition"          => "Conditions des filtres",
    "filter_condition_desc"     => "Définir les conditions de tickets pour lesquels les tickets sont répertoriés sous ce filtre.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Conditions des macros",
    "macro_action"              => "Actions des macros",
    "macro_action_desc"         => "Définir des actions qui sont exécutées quand une macro est effectuée. S'il vous plaît assurer que les mesures sont valables pour le département du ticket est ou bien ils seront ignorés.",

    "from"                      => "De",
    "to"                        => "À",
    "cc"                        => "CC",

    "allowed_files"             => "Types de fichiers autorisés pour les pièces jointes",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> regarde aussi ce ticket.",
    "draft_saved"               => "Brouillon enregistré à :time",
    "save_draft"                => "Enregistrer le brouillon",
    "discard_draft"             => "Supprimer le brouillon",

    // Locked
    "error_ticket_locked"       => "Ce ticket a été verrouillé et ne peut pas être mis à jour à nouveau, veuillez ouvrir un nouveau ticket si vous avez besoin d'aide.",

    // Ticket Followups
    "follow_up"                 => "Suivre",
    "follow_up_status_desc"     => "Réglez le ticket pour un statut différent jusqu'à la date de suivi.",
    "exact_date_time"           => "Date et temps exacte",
    "time_from_now"             => "Temps à partir de maintenant",

    // Schedule
    "schedule"                  => "Horaire|Horaires",
    "business_hour"             => "Heures de travail",
    "business_hour_desc"        => "Les heures de travail indiquent le temps auquel le personnel est disponible pour répondre aux requêtes. Les heures sont pris en considération par le calcul de temps de résolution du ticket.",

    // Holidays
    "holiday"                   => "Jour férié|Jours fériés",
    "holiday_or_on_the"         => "ou bien, au ",
    "holiday_month_year_desc"   => "L'année est facultative si le jour férié est récurrent. Sélectionnez une année seulement si le jour férié se produit à cette date dans une année donnée.",

    // SLA Plans
    "sla_plan"                  => "Entente SLA|Ententes SLA",
    "specific_schedule"         => "Horaires spécifiques",
    "calendar_hours_24"         => "Heures du calendrier (24 heures)",
    "resolution_time"           => "Temps de résolution",
    "resolution_time_desc"      => "Temps auquel ticket doit être répondu et résolu par priorité. Le temps sera compté que pendant les heures d'affaires basées sur l'horaire choisi (s), les valeurs décimales peuvent être utilisées.",
    "reply_within"              => "Réponse dans un délai de",
    "resolve_within"            => "Résolutions dans un délai de",
    "plan"                      => "Plan",
    "sla_condition"             => "Conditions de l'entente SLA",
    "sla_condition_desc"        => "Définir les conditions de tickets pour lesquels de nouveaux tickets sont vérifiés pour voir si elles tombent sous ce régime. Si un nouveau ticket correspond à plusieurs plans SLA, il sera sélectionné sur la priorité du plan, qui peut être modifié en allant à la liste des plans et réordonnancement.",
    "escalation_rule"           => "Règles d'escalade",
    "escalation_rule_desc"      => "Définir les actions qui sont effectuées lorsqu'un ticket en vertu de ce plan SLA est proche ou est devenu en retard. S'il vous plaît assurer que les règles sont valables pour le département du ticket est ou bien ils seront ignorés.",
    "condition"                 => "Condition",
    "condition_group"           => "Groupe de conditions",
    "all_groups"                => "Tous les groupes doivent être vrai",
    "any_group"                 => "Tout groupe peut être vrai",
    "all_conditions"            => "TOUTES les conditions dans le groupe doivent être vrai",
    "any_condition"             => "TOUT état dans le groupe peut être vrai",
    "sla_plan_desc"             => "Les plans SLA sont traités dans leur ordre d'apparition. Faites glisser les lignes à réorganiser et ajuster la priorité des plans SLA.",

    // Reply options
    "reply_options"             => "Options de réponses",
    "send_email_to_users"       => "Envoyer e-mail à/aux utilisateur(s)",
    "send_email_to_operators"   => "Envoyer e-mail à/aux opérateur(s)",
    "back_to_grid"              => "Retour à la grille des tickets",
    "take"                      => "Prendre",
    "take_ownership"            => "Prendre la propriété",
    "pause_duetime"             => "Pauser l'échéance",
    "add_to_canned_responses"   => "Ajouter aux réponses pré-enregistrées",
    "visible_to_all_operators"  => "Rendre visible à tous les opérateurs",
    "set_status"                => "Définir statut",
    "add_selfservice_link"      => "Ajouter lien self-service",
    "search_selfservice"        => "Recherche d'article self-service",
    "search_canned"             => "Recherche de réponse pré-enregistrée",

    "mark_resolved"             => "Identifier comme résolu",

    "ticket_signature"          => "Signature de ticket",

    "default_open_status"       => "Statut d'ouverture par défaut",

    "default_resolve_status"    => "Statut non résolu par défaut",
    "default_resolve_status_desc" => "Sélectionnez l'état par défaut qui est utilisé pour les tickets qui ont été résolus.",

    "waiting_response_time"      => "En attente de réponse e-mail",
    "waiting_response_time_desc" => "Le temps après lequel les clients reçoivent un e-mail sur les tickets inactifs, en demandant si ils considèrent le ticket comme résolu. Mettre à 0 pour désactiver cet e-mail. ",

    "close_inactive_tickets"    => "Fermer les tickets inactifs",
    "close_inactive_tickets_desc" => "Le temps au bout duquel les tickets inactifs sont automatiquement fermés, mis à 0 pour ne jamais fermer automatiquement des tickets.",

    "ticket_reply_order"        => "Ordre de réponse des tickets",
    "ticket_reply_order_desc"   => "Sélectionnez l'ordre dans lequel les messages de tickets sont présentés, par ordre croissant, où le dernier message est le dernier ou descendant où le dernier message est le premier.",

    "ticket_notes_position"     => "Ticket Position des Remarques",
    "ticket_notes_position_desc" => "Sélectionnez où dans le ticket ces notes sont affichées.",
    "ticket_notes_top_messages" => "En haut et dans les messages",
    "ticket_notes_top"          => "En haut seulement",
    "ticket_notes_messages"     => "Dans les messages seulement",

    "captcha_desc"              => "Lorsque le captcha doit être affiché aux utilisateurs qui ouvrent de nouveaux tickets.",
    "unregistered_only"         => "Utilisateurs non enregistrés seulement",

    "allow_unauth_users"        => "Autoriser utilisateurs non identifiés",
    "allow_unauth_users_desc"   => "Autoriser les utilisateurs qui ne sont pas connectés à afficher et répondre aux tickets. La désactivation de cette option supprimera également la fonction de ticketterie de la piste et les utilisateurs devront être enregistrés et vous connecter avant de pouvoir accéder à des tickets.",

    "default_department"        => "Département par défaut",
    "default_department_desc"   => "Le service par défaut défini sur tous les tickets entrants via ce canal.",

    "show_related_articles"     => "Afficher articles reliés",
    "show_related_articles_desc" => "Lorsque l'utilisateur tape le sujet, ils peuvent figurer des articles connexes sur la base de ce qu'ils sont entrés. Nécessite le module self-service doit être activé et MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Priorité par défaut",
    "default_priority_desc"     => "La priorité par défaut définie pour tous les tickets entrants via ce canal.",
    "verbose_email_log"         => "Tout l'historique e-mail",

    "last_reply"                => "Dernière réponse",
    "opened_at"                 => "Ouvert à",

    "change_department"         => "Changer département",
    "change_status"             => "Changer statut",
    "no_statuses"               => "Aucun statut trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_priorities"             => "Aucune priorité trouvée. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_templates"              => "Aucun modèle personnalisé d'email trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_tags"                   => "Pas de tag de ticket trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_departments_found"      => "Aucun département trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_operators_found"        => "Aucun collaborateur trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "change_priority"           => "Changer priorité",
    "add_tag"                   => "Ajouter libellé",

    "unlock"                    => "Débloquer",
    "merge"                     => "Fusionner",
    "merged"                    => "Fusionné",
    "unmerge"                   => "Défusionner",
    "close_and_lock"            => "Fermer et bloquer",

    "mass_reply"                => "Réponse de groupe",

    "due_today"                 => "Dû aujourd'hui",
    "overdue"                   => "En retard",
    "unassigned"                => "Non assigné",

    "pause_duetime_desc"        => "S'il y a un plan SLA actif sur ce ticket, mettre en pause le temps restant dû qu'après la date de suivi. Le temps voulu ne commencera à nouveau une fois une réponse ou une note a été ajoutée au ticket (y compris du suivi).",

    "add_cc"                    => "Ajouter CC",
    "reply_above_line"          => "Veuillez répondre au-dessus de cette ligne",

    "email_settings"            => "Paramètres e-mail",
    "web_settings"              => "Paramètres web",
    "split_selected_replies"    => "Séparer les réponses sélectionnées",

    "track_ticket_not_found"    => "Impossible de trouver ticket avec numéro de ticket et adresse e-mail du client indiquée.",

    "channel_deactivated"       => "Le canal de tickets est actuellement désactivée, une réponse ne peut pas être affichée.",

    "type_in_tags"              => "Entrer libellés",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Une liste des extensions de fichiers, séparés par le caractère | , qui sont autorisés en tant que pièces jointes. Par exemple: txt|png|jpg. Pour autoriser TOUTES les pièces jointes, veuillez écrire : ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Aucun groupe d'opérateurs trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "no_user_groups"            => "Aucun groupe d'utilisateurs trouvé. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "remote_email_piping_desc"  => "Téléchargez le <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>Remote email piping script</a> et suivez la <a href = 'http://docs.supportpal.com/display/DOCS/Remote+Email+Piping' target ='_blank'>documentation</a> sur la configuration sur votre serveur de messagerie.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Par défaut, SupportPal a un support email alias et vérifie l'adresse de destination sur l'e-mail entrant pour voir dans quel département le ticket doit être ouvert, un ticket n'est pas ouvert si une adresse e-mail du service correspondant ne peut être trouvé. L'activation de ce paramètre signifie tous les e-mails sans adresse email département correspondant sont importés comme des tickets dans ce département.",
    "default_reply_options"     => "Options de réponses par défaut",
    "default_reply_options_desc" => "Sélectionnez les options de réponse par défaut lors de l'ouverture ou réponse à un ticket. Le ':reply_option' option sera cochée sur la base du ':department_option'. paramètre département",
    "associate_response_tag"    => "Réponse pré-enregistrée associée à un tag ...",
    "canned_response_tags_desc" => "Ajouter des tags qui peuvent aider à trouver une réponse pré-enregistrée lors de la réponse à un ticket.",
    "loading_tags"              => "Activer tags",
    "append_ip_address"         => "Ajouter adresse IP",
    "append_ip_address_desc"    => "Ajoutez l'adresse IP des utilisateurs à leurs messages quand ils ouvrent et répondent aux tickets à partir du frontend.",
    "unassign_operator"         => "Détacher opérateur",
    "remove_tag"                => "Enlever le tag",
    "message_clipped"           => "[Message attaché]",
    "view_entire_message"       => "Voir message entier",
    "no_custom_fields"          => "Aucun champs personnalisés trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "follow_up_active"          => "Un <a class='view-followup' style='text-decoration :underline;'>suivi</a> est actuellement actif sur ce ticket et se déroulera peu après <strong>:time </strong>",
    "disable_user_email_replies" => "Désactiver les réponses de l'utilisateur",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtre des tickets par défaut",
    "default_ticket_filter_desc" => "Le filtre de ticket qui est utilisé par défaut lorsque vous cliquez sur le lien 'Gérer les tickets'. Il peut être défini sur 'Aucun', l'option par défaut, qui affichera tous les tickets non résolus.",
    "recent_filters"            => "Filtres récents",
    "inactive_tickets"          => "Tickets inactifs",
    "default_open_status_desc"  => "Sélectionnez le statut par défaut qui doit être automatiquement défini lorsqu'un utilisateur ouvre un nouveau ticket ou répond à un ticket sans qu'un opérateur ait encore répondu.",
    "default_reply_status"      => "Statut par défaut des réponses",
    "default_reply_status_desc" => "Sélectionnez le statut par défaut qui doit être automatiquement défini lorsqu'un utilisateur répond à un ticket. Ce statut ne s'applique qu'après qu'un opérateur ait répondu au ticket.",
    "ticket_reply_order_default" => "La valeur par défaut du système sera celle qui est actuellement sélectionnée dans les paramètres généraux du ticket.",
    "select_a_parent"           => "Selectionnez un département parent...",
    "select_a_department"       => "Choisir un département...",
    "department_operator_desc"  => "Vous pouvez également affecter des opérateurs individuels au service. Ces opérateurs s'ajouteront à tous les groupes assignés ci-dessus.",
    "department_group"          => "Groupes de départements",
    "department_group_desc"     => "Vous pouvez attribuer des groupes entiers d'opérateurs au département, ce qui est recommandé si votre liste d'opérateurs est importante et/ou change fréquemment.",
    "ticket_other_brands"       => "Tickets dans les autres marques",
    "add_for_department"        => "Ajouter pour le département...",
    "record_order"              => "Faites glisser les enregistrements pour modifier l'ordre.",
    "reply_all"                 => "Répondre à tous",
    "reply_without_cc"          => "Répondre (sans CC)",
    "email_accounts"            => "Comptes courriel",
    "add_another_email"         => "Ajouter une autre adresse courriel",
    "follow_up_date"            => "Date de suivi",
    "post_reply"                => "Répondre",
    "post_note"                 => "Ajouter une note",
    "ticket_details"            => "Détails du ticket",
    "organisation_tickets"      => "Tickets de l'organisation",
    "manage_tickets"            => "Gérer les tickets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Département parent",
    "department_brands"         => "Marques du département",
    "email_item"                => "E-mail :item",
    "from_name"                 => "De (nom)",
    "from_address"              => "De (adresse)",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user le :date",
    "prioritise_reply-to"       => "Prioriser répondre à",
    "prioritise_reply-to_desc"  => "Basculez pour donner la priorité à l'en-tête 'Répondre à' sur l'en-tête 'De'. Si cette option est activée, les tickets ouverts par e-mail seront ouverts au nom du nom et de l'adresse du destinataire de la réponse.",
    "note_options"              => "Options des notes",
    "escalation_rules_desc"     => "Les règles d'escalade du plan SLA ci-dessous sont programmées pour être exécutées après les heures indiquées. Ces heures peuvent changer ou les règles peuvent être supprimées si un opérateur répond à ce ticket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Pas un utilisateur enregistré. Les paramètres du canal de messagerie sont configurés pour importer uniquement les e-mails des utilisateurs enregistrés.",
    "display_name"              => "Nom d'affichage de l'e-mail",
    "display_name_desc"         => "Optionnel, à définir uniquement pour remplacer le nom d'affichage utilisé dans les e-mails sortants de ce département, sinon laissez vide.",
    "display_name_options"      => "Les variables Twig suivantes peuvent être utilisées :<br >{{ brand.name }} - Nom de la marque<br />{{ department.name }} - Nom du département<br />{{ department.frontend_name }} - Montre le nom du parent du département, si le ticket appartient à un sous-département.<br />{{ operator.formatted_name }} - Nom de l'opérateur<br /><em>Le nom de l'opérateur ne sera pas toujours disponible, il faut donc l'inclure dans une condition 'not empty', exemple : {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Pièce jointe rejetée",
    "enable_subaddresses"       => "Activer les sous-adresses",
    "enable_subaddresses_desc"  => "TActivez l'utilisation de la sous-adresse électronique pour tous les services. Cela créera une sous-adresse unique pour chaque ticket, qui sera définie comme l'adresse de réponse de tous les e-mails sortants. Votre serveur de messagerie doit être capable de gérer le sous-adressage, des étapes supplémentaires peuvent être nécessaires si vous utilisez le piping d'e-mails pour vous assurer que les e-mails à ces adresses soient transférés correctement. L'activation de cette option vous permettra de supprimer le numéro de ticket de l'objet des modèles d'e-mail.",
    "email_replies_disabled"    => "Réponses e-mail désactivées",
    "disable_user_email_replies_desc" => "Cette option permet de bloquer les réponses aux e-mails des utilisateurs et de supprimer la ligne d'écrêtage de réponse des e-mails de tickets sortants. Par défaut, l'e-mail est ignoré, mais vous pouvez envoyer un e-mail à l'utilisateur en modifiant le modèle d'e-mail sélectionné pour l'option 'Réponses aux e-mails désactivées' ci-dessous..",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Assigné au ticket",
    "user_ticket_reply"         => "Réponse utilisateur au ticket",
    "new_internal_ticket"       => "Nouveau ticket interne",
    "department_changed"        => "Département changé",
    "operator_ticket_reply"     => "Réponse opérateur au ticket",
    "new_ticket_note"           => "Nouvelle note sur le ticket",
    "email_template_desc"       => "Vous pouvez sélectionner un modèle d'e-mail autre que celui par défaut à envoyer à l'utilisateur ou aux opérateurs pour l'une des actions ci-dessous. Ce modèle deviendra le modèle par défaut pour ce département uniquement..",
    "create_new_user"           => "Créer un nouvel utilisateur",
    "user_reply_internal_ticket" => "Vous n'êtes pas un opérateur. Seuls les opérateurs peuvent répondre aux tickets internes",
    "enter_email_address"       => "Entrer l'adresse e-mail...",
    "email_user_frontend"       => "Envoyer un e-mail aux utilisateurs sur les tickets ouverts dans le Frontend",
    "email_user_frontend_desc"  => "Choisissez si les utilisateurs doivent être notifiés par e-mail lorsqu'ils ouvrent eux-mêmes un ticket sur le frontend.",
    "department_template_disabled" => "Le modèle d'e-mail du département concerné est désactivé, cet e-mail ne peut donc pas être envoyé..",
    "verbose_email_log_desc"    => "Si la collecte d'e-mails doit être enregistrée dans le fichier, il est recommandé de la laisser désactivée, sauf si le support technique l'exige pour le débogage. Cinq jours de logs sont stockés, les fichiers logs les plus anciens seront purgés automatiquement par le système..",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Ouvrir un nouveau ticket au nom d'un utilisateur existant.",
    "canned_response_tag"       => "Libellé de la réponse pré-enregistrée|Libellés de la réponse pré-enregistrée",
    "response"                  => "Réponse|Réponses",
    "response_desc"             => "La réponse pré-enregistrée peut être rédigée en plusieurs langues. La réponse appropriée sera utilisée automatiquement en fonction de la langue préférée de l'utilisateur.",
    "no_slaplans"               => "Pas de plans SLA trouvés. Cliquez <a href=':route'>ici</a> pour en créer un.",
    "filter_performance"        => "Considérations sur les performances et recommandations",
    "filter_performance_desc"   => "<li>Les filtres qui correspondent à un plus grand nombre de tickets seront plus lents, dans la plupart des cas, essayez d'exclure les tickets résolus.</li><li>Les filtres utilisant des conditions 'is not' seront généralement plus lents que ceux utilisant des conditions 'is'.</li><li>Les filtres vérifiant les valeurs NULL (par exemple, le tag Ticket est None) seront plus lents. </li><li>Évitez les conditions multiples qui impliquent la vérification de chaînes de caractères/mots, car elles introduisent plus de complexité.</li><li>Les filtres utilisant des conditions 'begins with' ou 'contains' seront généralement plus lents que ceux utilisant des conditions 'equals' ou 'ends with'.</li><li>Les tickets résolus sont exclus des décomptes affichés dans la barre latérale.</li>",
    "run_macro"                 => "Exécuter la macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Activez pour n'afficher le département qu'aux utilisateurs connectés et n'accepter que les e-mails des utilisateurs activement enregistrés dans le service d'assistance. Si cette option est activée, un e-mail de retour sera envoyé aux utilisateurs non enregistrés qui envoient un e-mail à ce service. Pour modifier ou désactiver cet e-mail, veuillez consulter l'option de modèle 'Utilisateurs enregistrés uniquement' ci-dessous.",
    "form_fields_desc"          => "Si vous souhaitez recueillir des informations supplémentaires lorsque l'utilisateur donne son avis, vous pouvez définir ici des champs personnalisés à afficher sur le formulaire. Le type de champ sera verrouillé une fois que le formulaire aura été rempli par un utilisateur.",
    "feedback_ratings"          => "Notations de la satisfaction des clients (affectant votre score de satisfaction des clients)",
    "email_and_other_accounts"  => "Comptes de messagerie et autres canaux",
    "delete_message"            => "Supprimer le messages",
    "linked_tickets"            => "Tickets liés",
    "add_linked_ticket"         => "Ajoute des tickets liés",
    "create_linked_ticket"      => "Créer un ticket lié",
    "copy_link"                 => "Copier le lien",
    "forward_message"           => "Transférer ce message",
    "forward_from_here"         => "Transférer ce ticket depuis ici",
    "forward"                   => "Transférer",
    "forward_options"           => "Options de transfert",
    "forwarded_to"              => "Transféré à",
    "new_operator_reply"        => "Nouvelle réponse opérateur",
    "new_user_reply"            => "Nouvelle réponse utilisateur",
    "add_bcc"                   => "Add BCC",
    "at_least_one_recipient"    => "Veuillez spécifier au moins un receveur.",
    "forwarded_message"         => "---------- Message transféré ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Note: Affecte uniquement les tickets possédant le statut 'Fermer le ticket inactif' activé.",
    "close_inactive_status_desc" => "Activez pour activer/désactiver la fermeture automatique des tickets inactifs et les rappels d'inactivité par e-mail (modèles 'Waiting For Response' et 'Ticket Auto Closed'). Si cette option est activée, le délai avant l'envoi des rappels peut être configuré via les paramètres généraux du ticket..",
    "from_header_missing"       => "From : en-tête manquant dans l'e-mail.",
    "move_ticket"               => "Déplacer le ticket",
    "move_ticket_step1"         => "Etape 1: Choisir une nouvelle marque où déplacer le ticket",
    "move_ticket_step2"         => "Etape 2: Choisir un département dans cette nouvelle marque",
    "current_record"            => "Actuel :record",
    "new_record"                => "Nouveau :record",
    "department_email"          => "E-mail du département",
    "select_a_department_email" => "Choisir un e-mail de département...",
    "record_public_desc"        => "Activez pour que le :record soit accessible pour d'autres opérateurs.",
    "record_group_desc"         => "Si vous souhaitez que :record ne soit visible que pour certains groupes d'opérateurs. Laissez le champ vide pour que tous les opérateurs puissent le voir.",
    "ticket_format_desc"        => "Peut contenir des caractères alphanumériques et des caractères spéciaux <code>-_.+!*,</code><br />Les variables suivantes peuvent également être utilisées : %S pour un numéro séquentiel | %N pour un numéro aléatoire | %L pour une lettre aléatoire<br />Utiliser {number} pour répéter <strong>uniquement</strong> après %N ou %L, par exemple %N{4} équivaut à 4 numéros aléatoires, %L{3} équivaut à 3 lettres aléatoires<br />Les paramètres suivants <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> sont préfixés par % Y,y,m,d,j,g,G,h,H,i,s.",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Activer pour désactiver la macro et empêcher son exécution automatique ou son affichage dans l'interface du ticket..",
    "macro_order_drag"          => "Faites glisser les enregistrements pour changer l'ordre des macros.",
    "macro_order_processed"     => ":type macros sont lancées dans l'ordre dans lequel elles apparaissent.",
    "macro_type"                => "Type de macro",
    "macro_type_desc"           => "Il y a trois types de macros disponibles. Les macros manuelles ne peuvent être exécutées qu'à partir de la vue ou de la grille du ticket, les macros automatiques s'exécutent sur les tickets non résolus toutes les heures, et les macros hook s'exécutent sur des événements spécifiques du ticket. Les macros automatiques et les macros hook peuvent également être configurées pour ne s'exécuter que dans le cadre d'horaires spécifiques. Les actions d'une macro hook ne déclencheront pas d'autres macros hook pour éviter le risque de boucles.",
    "macro_run_at_most"         => "Lancer le plus possible",
    "macro_run_times"           => "times", // As in '5 times'
    "macro_run_at_most_desc"    => "Limiter le nombre de fois qu'une macro automatique peut être exécutée sur un seul ticket, laisser vide pour la laisser s'exécuter un nombre illimité de fois.",
    "macro_events_desc"         => "Sélectionnez un ou plusieurs événements sur lesquels la macro doit s'exécuter. Les conditions définies ci-dessous seront vérifiées avant l'exécution de la macro..",
    "macro_schedules_desc"      => "Par défaut, la macro fonctionnera 24 heures sur 24 et 7 jours sur 7, mais vous pouvez sélectionner un ou plusieurs horaires de service d'assistance afin que la macro ne soit active que pendant ces périodes.",
    "macro_condition_desc"      => "Définissez les conditions pour lesquelles cette macro sera disponible pour les tickets. Par défaut, sans conditions, elle s'appliquera à tous les tickets. Au moins une condition doit être définie pour les macros automatiques..",
    "add_remove_headers"        => "Ajouter / Supprimer les en-tête",
    "webhook_merge_fields"      => "Les champs fusionnés peuvent être utiliser dans l'URL, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">en savoir plus</a>.",
    "webhook_ticket_required"   => "Le ticket doit exister pour que cette fonctionnalité puisse marcher.",
    "not_permitted"             => "Désolé, vous n'avez pas la permission de visionner le(s) ticket(s). Veuillez contacter votre administrateur s'il s'agit d'une erreur.",
    "watch"                     => "Surveiller",
    "unwatch"                   => "Ne plus surveiller",
    "watching"                  => "En surveillance",
    "internal_ticket"           => "Ticket interne|Tickets internes",

    /*
     * 2.4.1
     */
    "downloading"               => "Téléchargement en cours...",
    "downloading_desc"          => "Si le téléchargement ne commence pas automatiquement sous quelques secondes, veuillez <a href=':href'>cliquer ici</a> pour démarrer le téléchargement manuellement.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Appartient à :name)",
    "block_user"                => "Bloquer l'utilisateur",
    "merge_tickets"             => "Fusionner les tickets",

    /*
     * 2.5.1
     */
    "channel_account_removed"   => "Ce canal de tickets a été désactivé supprimé, il est donc impossible d'y répondre.",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Suivis",
    "follow_up_multiple_active" => "Plusieurs <a class='view-followup' style='text-decoration: underline;'>suivis</a> sont actifs sur ce ticket, le prochain sera <strong>:time</strong>.",
    "follow_up_no_actions"      => "Le suivi n'a pas d'action paramétrée, veuillez confirmer si vous souhaitez continuer.",
    "status_after_running"      => "Statut après démarrage",
    "older_messages"            => ":count anciens messages",
    "holiday_single_day"        => "Jour unique",
    "holiday_date_range"        => "Plage de dates",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Selectionnez le ticket à fusionner",
    "search_number_or_subject"  => "Rechercher par numéro ou sujet de ticket",
    "im_not_sure"               => "Je ne suis pas sûr",
    "auto_reply_detected"       => "Réponse automatique détectée - Aucune notification ne sera envoyée à l'utilisateur.",
    "cc_desc"                   => "Vous pouvez mettre en CC d'autres personnes sur ce ticket en entrant les adresses e-mail ici.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> était en train d'écrire un message",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Paramétrer manuellement",
    "unresolved"                => "Non résolu",
    "resolved"                  => "Résolu",
    "manage_oauth_options"      => "Pour ajouter ou configurer les options OAuth, veuillez visiter la page <a href=\":route\">Third-Party Integrations</a>.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Votre retour a été sauvegardé.",
    "how_was_the_help"          => "Comment avez-vous trouvé notre aide ?",
    "update_feedback"           => "Mettre à jour le retour",
    "verify_user"               => "Veuillez vérifier l'authenticité de l'utilisateur.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Les tickets ouverts sur l'interface front-end pour les utilisateurs, ou le panneau opérateurs pour les opérateurs.",
    "email_channel_name"        => "E-mail",
    "email_channel_desc"        => "Les tickets ouverts par e-mail.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Les tickets et réponses postés depuis l'API.",

);
