<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Panneau de contrôle de l'opérateur",
    "welcome"                   => "Bienvenue à l'Accès Client Le Droit Chemin",
    "welcome_desc"              => "Cliquez pour démarrer un tour guidé des fonctionnalités du système.",

    // Dashboard
    "submit_ticket"             => "Poser une question",
    "submit_ticket_desc"        => "Utilisez ce formulaire pour soumettre une question.",
    "track_ticket"              => "Faire le suivi d'une question",
    "track_ticket_desc"         => "Utilisez votre email et no de question pour faire le suivi du statut de votre question.",
    "my_tickets"                => "Mes questions",
    "my_tickets_desc"           => "Faites le suivi de vos questions. Vous trouverez vos questions ouvertes et passées ici.",
    "no_modules"                => "Aucun module n'est activé.",
    "search_results"            => "Résultats de la recherche",
    "found_results"             => "Trouvé :enregistrements totaux pour le-s- mots-clé-s recherchés",

    // Maintenance
    "maintenance"               => "Une maintenance est en court",
    "maintenance_desc"          => "L'Accès Client est temporairement inaccessible. Merci de votre patience pendant que apportons des améliorations au système. Nous serons de retour sous peu",
    "maintenance_active"        => "Le mode de maintenance est actif.",

    // About
    "license_status"            => "Statut licence",
    "license_code"              => "Code licence",
    "change_license"            => "Changer licence",
    "license_info"              => "Info licence",
    "license_owner"             => "Propriétaire licence",
    "license_created"           => "Licence créée",
    "license_type"              => "Type licence",
    "branding"                  => "Marque",
    "license_expires"           => "Expiration licence",
    "license_valid_ip"          => "Licence valide pour IP(s)",
    "support_status"            => "Statut du support",
    "support_expires"           => "Support expire",
    "version_info"              => "Version",
    "installed_version"         => "Version installée",
    "available_version"         => "Version disponible",
    "monthly_product"           => "* Your expiration date will automatically adjust on a monthly basis once any outstanding invoices are paid.",

    // API Tokens
    "api_token"                 => "Jeton API|Jetons API",
    "token"                     => "Jeton",
    "regenerate_token"          => "Regénérer jeton",
    "access_level"              => "Niveau d'accès",
    "read_write"                => "Lecture &amp; écriture",
    "read_only"                 => "Lecture uniquement",

    // Spam Rules & Filtering
    "spam_rule"                 => "Règle anti-spam|Règles anti-spam",
    "containing_text"           => "Contient texte",
    "filter_new_message"        => "Nouvelle question (d'un usager)",
    "filter_new_comment"        => "Nouveau commentaire libre-service (d'un usager)",
    "filter_user_login"         => "Login usager",
    "filter_operator_login"     => "Login opérateur",
    "filter_api_access"         => "Accès API",
    "content"                   => "Contenu",
    "sender"                    => "Envoyeur",
    "content_sender"            => "Contenu & Envoyeur",

    // Company
    "company"                   => "Compagnie|Compagnies",

    // Email
    "default_email_addr"        => "Adresse courriel par défaut",
    "default_email_addr_desc"   => "Ce courriel sera utilisé dans le champ De: et dans la plupart des courriels envoyés par le système.",
    "include_operator_name"     => "Inclure nom de l'opérateur",
    "include_operator_name_desc" => "Inclure nom de l'opérateur dans le champ 'De' pour les courriels de réponse aux questions. Exemple: De: Me Isabelle Tremblay (Le Droit Chemin)",
    "include_dept_name"         => "Inclure nom du département",
    "include_dept_name_desc"    => "Inclure le nom du service dans le champ 'From' de tous les e-mails de tickets liés. Notez que un nouveau thread e-mail est créé si un ticket change le département.",
    "global_email_header"       => "Email En-tête globale",
    "global_email_header_desc"  => "Ajouter un en-tête à tous les e-mails envoyés par le système. HTML est accepté.",
    "global_email_footer"       => "Email Pied de page global",
    "global_email_footer_desc"  => "Ajouter un pied de page à tous les e-mails envoyés par le système. HTML est accepté.",
    "email_template"            => "Gabarit courriel|Gabarits courriels",
    "email_log"                 => "Journal courriels",
    "email_queue"               => "File d'attente courriels",
    "email_queue_desc"          => "Voici les e-mails qui sont en attente d'être envoyés prochainement par le cron.",
    "email_method"              => "Méthode courriels",
    "php_mail_function"         => "PHP mail() function",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "Hôte SMTP",
    "smtp_port"                 => "Port SMTP",
    "smtp_encryption"           => "Encryptage SMTP",
    "smtp_requires_auth"        => "Requiert authentification",
    "smtp_username"             => "Usager SMTP",
    "smtp_password"             => "Mot de passe SMTP",
    "ssl"                       => "SSL",
    "tls"                       => "TLS",
    "email_content"             => "Contenu courriel",
    "email_content_desc"        => "Entrez un sujet par défaut et le contenu des emails pour ce modèle, vous pouvez aussi écrire le modèle dans d'autres langues. Si un modèle ne soit pas dans une autre langue, il utilisera les données par défaut.",
    "outgoing"                  => "Sortant",
    "incoming"                  => "Entrat",
    "incoming_spam"             => "Entrant (Rejeté - Spam)",
    "incoming_throttled"        => "Entrant (Rejeté - Throttled)",
    "email_subject"             => "Sujet courriel",
    "twig_html_warning"         => "Twig n'est pas permis à l'intérieur des balises HTML / attributs et sera automatiquement supprimé lors de l'enregistrement.",

    // Modules
    "modules"                   => "Module|Modules",
    "modules_desc"              => "Voici une liste de tous les modules disponibles, cliquez sur l'icône de modification pour mettre à jour les paramètres de ce module.",
    "module_disable"            => "Modules désactivés seront supprimés de l'interface et de l'interface de l'opérateur.",

    // Scheduled tasks
    "scheduled_task"            => "Tâches prévue|Tâches prévues",
    "interval_desc"             => "Définissez la fréquence d'exécution pour une tâche. p.ex. 5 minutes signifie que la tâche est exécutée toutes les 5 minutes si le cron est actif.",
    "cron_settings"             => "Paramètres CRON",
    "cron_running"              => "En exécution",
    "cron_not_running"          => "Pas en exécution",
    "task_ran"                  => "Succès d'éxecution de la tâche planifiée manuellement.",
    "task_failed"               => "Échec tentative d'exécution de tâche planifiée manuellement.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "installed_plugins"         => "Plugins installés",
    "visit_plugin"              => "Accéder sites du plugin",

    // Messages
    "last_activity"             => "Dernière activité",
    "send_to"                   => "Envoyer à",
    "inbox"                     => "Boîte de réception",
    "compose"                   => "Composer",

    // Utilities
    "utilities"                 => "Utilitaires",

    // System Cleanup
    "system_cleanup"            => "Nettoyage système",
    "system_cleanup_desc"       => "Utilisez les options disponibles pour supprimer les données qui ne sont plus nécessaires ou voulaient.",
    "files"                     => "Fichiers",
    "files_desc"                => "Les éléments suivants sont stockés sous forme de fichiers sur le système de fichiers.",
    "logs"                      => "Journaux",
    "logs_desc"                 => "Les éléments suivants sont stockés sous forme d'enregistrements dans la base de données.",
    "empty"                     => "Vide",
    "prune"                     => "Vider",
    "total_records"             => "Enregistrements",
    "system_cache"              => "Cache système",
    "system_cache_desc"         => "Utilisé pour les données du système de stockage qui ne change pas régulièrement pour accélérer l'application.",
    "template_cache"            => "Cache gabarit",
    "template_cache_desc"       => "Pré-compilées versions des vues de modèle sont stockées pour améliorer les temps de chargement.",
    "attachments_desc"          => "les pièces jointes de tickets sont stockés sur le système de fichiers, mais ils peuvent prendre de la place, vous pouvez tailler les fichiers joints avant une certaine date. ",
    "system_activity_log_desc"  => "Stocke toutes les activités des utilisateurs, opérateurs et du système, Vous pouvez tailler les enregistrements avant une certaine date. ",
    "email_log_desc"            => "Stocke tous les e-mails entrants et sortants. Vous pouvez tailler les enregistrements avant une certaine date. ",
    "operator_login_log_desc"   => "Stocke chaque fois qu'un login opérateur avec son IP. Vous pouvez tailler les enregistrements avant une certaine date. ",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Afficher Captcha",

    // Widgets
    "dashboard"                 => "Panneau de contrôle",
    "add_remove_widget"         => "Ajouter / Retirer Widgets",
    "enable_tour"               => "Activer le tour guidé",

    // Product Tour
    "dashboard_desc"            => "Votre panneau de contrôle personnalisé. Les widgets peuvent être retirés, minimisés et déplacés !",
    "private_messages"          => "Messages privés",
    "messages_desc"             => "Les messages privés permettent une conversation 1:1 avec d'autres opérateurs.",
    "configure"                 => "Configurer votre Accès Client",
    "configure_desc"            => "Notre plateforme contient plusieurs paramètres qui vous permettent de configurer le système selon vos préférences.",
    "default_email"             => "Adresse de courriel par défaut",
    "default_email_desc"        => "L'adresse courriel par défaut à utiliser pour toute correspondance avec les usagers.",
    "dept_settings_desc"        => "Les départements de votre organisation fonctionnent différemment. Les paramètres départementaux vous permettent d'outre-passer les paramètres globaux.",
    "department_desc"           => "Les départements fonctionnent comme dans votre entreprise. Ils sont utiles pour assurer que les demandes des usagers se rendent rapidement aux personnes qualifiées pour y répondre.",
    "department_email"          => "Adresses courriel du département",
    "dept_email_desc"           => "Plusieurs adresses courriel peuvent être assignées par département. Email collection is performed against the configured addresses to pull e-mails from your customers into the help desk.",
    "dept_tmpl"                 => "Gabarits de courriels des départements",
    "dept_tmpl_desc"            => "Vous pouvez changer ou désactiver les modèles e-mail du département. Vous pouvez définir modèles spécifique et les activer ici.",
    "schedule_task_desc"        => "Tâches planifiées sont utilisés pour automatiser divers processus au sein de SupportPal y compris la collecte des tickets par email.",
    "schedule_task_2"           => "Tâches planifiées nécessitent une tâche cron pour être créé pour fonctionner. L'intervalle pour chaque tâche effectuée par la tâche cron peut être réglée via le formulaire de modification.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Créer une tâche cron similaire à l'exemple fourni ci-dessous sur votre serveur pour les tâches planifiées soit exécutéss automatiquement.",
    "ticket_channel_desc"       => "Les canaux Ticket sont des méthodes pour créer des tickets. Ils peuvent être facilement étendus pour inclure vos propres canaux, par exemple des tickets ouverts via Instagram.",
    "ticket_channel_2"          => "Nous fournissons un certain nombre de canaux par défaut. Vous pouvez activer et configurer les canaux Facebook et Twitter pour recueillir des tickets générés via les médias sociaux.",
    "user_desc"                 => "Les utilisateurs qui interagissent avec votre système sont affichés ici. Vous pouvez ajouter, modifier et supprimer des clients.",
    "organisation_desc"         => "Les utilisateurs peuvent être affectés à des organisations leur permettant l'accès aux tickets ouverts par d'autres utilisateurs au sein de leur organisation.",
    "operator_desc"             => "D'autres membres du personnel peuvent être ajoutés en tant qu'opérateurs ici.",
    "ticket_desc"               => "Le tableau de tickets contient tous les tickets pertinents pour vous.",
    "ticket_toolbar"            => "Barre d'outils",
    "ticket_desc3"              => "Actions en vrac peuvent être effectuées sur des tickets en utilisant la barre d'outils de tickets.",
    "tour_complete"             => "Tour de visite complète!",
    "tour_complete_desc"        => "Merci d'utiliser SupportPal. <br /> <br /> Nous vous recommandons maintenant que vous suivez le guide de démarrage ci-dessous pour configurer votre service d'assistance.",

    // IP Ban
    "ip_ban_time_desc"          => "Blocage permanent ou temporaire.",
    "expiry"                    => "Expiration",
    "expired"                   => "Expiré",
    "expiry_time"               => "Heure d'expiration",
    "expiry_time_desc"          => "Le moment où l'interdiction expirera, si une date est pas définie ou dans le passé, il sera automatiquement réglé sur 24 heures à partir de maintenant.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Échec de mise à jour le :item. Au moins une langue doit être activé à tout moment.",

    // General Settings
    "locale"                    => "Langue",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Dossier Admin",
    "admin_folder_desc"         => "Définissez le nom du dossier à visiter pour le panneau de commande. Il est recommandé de changer la valeur par défaut \admin\ d'un point de vue de la sécurité. ",
    "enable_ssl"                => "Activer SSL",
    "maintenance_mode"          => "Mode de Maintenance",
    "maintenance_mode_desc"     => "Désactive la fonctionnalité du help desk publique et montre un message de maintenance. Modifier les ressources / templates / frontend / [modèle] /core/maintenance.twig changer le message qui est affiché aux utilisateurs.",
    "default_user_country"      => "Pays par défaut du client",
    "default_user_country_desc" => "Le pays qui sera sélectionné par défaut lorsque les client enregistrent.",
    "system_timezone"           => "Fuseau horaire du Système",
    "system_timezone_desc"      => "Le fuseau horaire qui est appliqué dans tout le système par défaut. Les opérateurs peuvent changer leur fuseau horaire dans leurs paramètres personnels.",
    "date_format"               => "Format de date",
    "date_format_desc"          => "Le format de date qui est utilisée dans le monde.",
    "time_format"               => "Format de l'heure",
    "time_format_desc"          => "Le format de l'heure global.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "La clé pour notre authentification (single sign on option), minimum de 16 caractères.",
    "simpleauth_operators"      => "Autoriser pour les opérateurs",
    "base_url"                  => "Système URL",
    "base_url_desc"             => "Entrez l'adresse Web complète de votre installation, utilisé pour générer les URL qui sont envoyés aux utilisateurs.",
    "debug"                     => "Déboguer",
    "debug_mode"                => "Mode débogage",
    "pretty_urls"               => "Pretty URLs",
    "pretty_urls_desc"          => "Activation va supprimer index.php des URL. Activez seulement si vous êtes en mesure d'accéder au panneau de commande sans index.php. Désactivez si vous n'avez pas mod_rewrite installé, les fichiers .htaccess ne sont pas autorisés ou ne sont pas converties aux Apache .htaccess règles de réécriture pour travailler avec votre serveur web alternative.",

    /*
     * 2.0.2
     */
    "cron_makesure"             => "Pour l'aide en enregistrement de cron job voir <a target='_blank' href='http://docs.supportpal.com/display/DOCS/New+Installation#NewInstallation-CronJob'>Cron Job Help</a>.",
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "L'activation forcera l'ensemble frontend et backend à utiliser des connexions sécurisées, un réglage recommandé. S'il vous plaît assurer des fonctions HTTPS correctement sur votre serveur avant d'activer. ",
    "unexpected_template_error" => "Une erreur inattendue est survenue lors de vérification de la syntaxe du modèle. Veuillez réessayer.",
    "empty_template_preview"    => "S'il vous plaît fournir un modèle valide pour pouvoir utiliser la fonction de prévisualisation.",
    "no_department_address"     => "Impossible de trouver une adresse de service dans la liste des destinataires.",
    "email_loop_detected"       => "Boucle détectée - e-mail envoyé à partir d'une adresse de département",
    "email_ticket_locked"       => "Ticket verrouillé. L'utilisateur a été invité à ouvrir un nouveau ticket par e-mail.",
    "email_no_body"             => "Impossible d'identifier le corps du message.",
    "email_runtime_error"       => "Une erreur d'exécution (runtime error) est survenue lors de la création de la réponse du ticket / réponse.",
    "email_reply_disabled"      => "Les réponses email de l'utilisateur ont été désactivés pour ce département.",
    "email_throttled"           => "Trop de courriels provenant utilisateur. La limite est :max_requests emails tous les :decay_time minutes.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Edit the settings that apply to all of SupportPal. If you wish to edit settings for a specific section, e.g. Tickets, open the section in the sidebar to view available settings for that module. Settings related to your brand(s) can be found by clicking Brands in the sidebar.",
    "brand"                     => "Marque|Marques",
    "brand_desc"                => "A brand is your customer-facing identity within SupportPal, allowing several channels of communication. Several brands can be operated seamlessly under a single, unified operator panel.",
    "default_brand"             => "Marque par défaut",
    "default_brand_desc"        => "Select the brand that will be used by default when visitors visit the frontend and a matching brand cannot be found.",
    "brand_enabled_desc"        => "Toggle to enable or disable the brand. Disabled brands cannot be utilised and won't count as part of the brands allowed on your license, disabling can be used to temporarily hide a brand and/or retain information. Deleting a brand will remove all information including users and tickets that are related to it.",
    "inherit_global_setting"    => "Hériter paramètres globaux",
    "brand_date_format_desc"    => "The date format used for this brand's frontend.",
    "brand_time_format_desc"    => "The time format used for this brand's frontend.",
    "brand_timezone"            => "Fuseau horaire de la marque",
    "brand_timezone_desc"       => "The timezone that is used by default on this brand's frontend, users will have the option to select their own timezone.",
    "brand_default_lang_desc"   => "The language that is used by default on this brand's frontend.",
    "brand_lang_toggle_desc"    => "If the language dropdown should show on this brand's frontend.",
    "brand_groups_desc"         => "Operators in the selected groups will be able to create, update and delete (depending on role permissions) tickets and other content in this brand.",
    "select_brand"              => "Choisir une marque...",
    "add_another_language"      => "Ajouter une autre langue...",
    "mass_email_brand_desc"     => "Please select which brand the email will be sent from. It will be used to set the sending from name and address, load the correct email template and in the merge fields. If you send to a user group, only users who belong to the selected brand will be emailed.",
    "brand_limit_exceeded"      => "Your license is only permitted to use :allowed brand(s) simultaneously. To purchase additional brands please visit our client area.",
    "additional_brands"         => "Marques additionnelles",
    "purchase_more"             => "Acheter autre",
    "brand_limit_allowed"       => "Your license is currently permitted to use :allowed brand simultaneously.|Your license is currently permitted to use :allowed brands simultaneously.",
    "brand_limit_purchase"      => "If this is incorrect, please <strong>reissue</strong> your license at our <a href='http://www.supportpal.com/manage/' target='_blank'>client area</a> and visit the <a href=':route'>License Information</a> page to synchronise your help desk with our license server.<br />To purchase additional brands, please <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgrade your license</a>.",
    "support_expiry"            => "Your support and updates subscription is valid until :date.",
    "support_status_desc"       => "Please <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renew your support subscription</a> in order to get the latest support and updates from SupportPal.",
    "ip_ban"                    => "Blocage IP|Blocages IP",
    "ip_whitelist"              => "Liste blanche d'IP",
    "whitelisted_ip"            => "IP autorisés",
    "license_path"              => "Chemin d'installation",
    "php_info"                  => "Information PHP",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "Département non assigné à une marque.",
    "incoming_rejected"         => "Entrant(Rejeté)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Gestionnaire du journal",
    "file_manager_desc"         => "Below you can download or delete the logs that are stored by the system during operation, they can be used for debugging purposes. The log files are automatically cycled, storing only up to the latest 5 days of entries.",
    "app_logs"                  => "Journal de l'application",
    "app_logs_desc"             => "All warnings and errors from general usage of the help desk are logged here. You may be asked to provide one or more of these logs when requesting support.",
    "email_logs"                => "Journal des courriels",
    "email_logs_desc"           => "Details about incoming emails are stored in these files when they are being parsed and imported as tickets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Reply To",
    "and_number_others"         => "and :number other|and :number others",
    "user_templates"            => "User Templates",
    "operator_templates"        => "Operator Templates",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Cumulative Attachment Size Limit",
    "attachment_size_desc"      => "The maximum cumulative size of all attachments that are sent in a single email. Available options are K (for Kilobytes) and M (for Megabytes), anything else assumes bytes. Example value: 5M for 5 Megabytes. Set to 0 to not send any attachments by email and require users to download attachments via the help desk.",
    "attachment_limit_reached"  => "Cumulative file limit reached (:size). Please consider sending files via another medium (such as a download URL).",
    "renew_support"             => "<a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>Renew</a>",
    "no_existing_translations"  => "No existing translations.",
    "add_translation"           => "Add Translation",
    "todo_list"                 => "To Do List",
    "version_check"             => "Version Check",
    "system_overview"           => "System Overview",
    "getting_started"           => "Getting Started",
    "operator_notes"            => "Operator Notes",
    "simpleauth_operators_desc" => "Allow operators to log in and out with SimpleAuth, we recommend to keep this disabled unless you are specifically using it for this purpose.",
    "upgrade_and_reactivate"    => "Upgrade & Reactivate",
    "upgrade_pending"           => "Upgrade Pending",
    "locale_in_uri"             => "Include Locale in URI",
    "locale_in_uri_desc"        => "Disable to remove the locale from the URI, for example: http://support.mycompany.com/en/announcements becomes http://support.mycompany.com/announcements. Can only be disabled when there's one enabled language in the system.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "This is currently set as a default language. Disabling the language will set another enabled language as the default language instead.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Please enable JavaScript in order to use this page.",
    "go_to_dashboard"           => "Go to dashboard",
    "brand_colour_desc"         => "Select a colour for your brand, it will be used for the colour scheme on both the frontend and operator template. Leave blank to use the default colour scheme.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "The favicon image appears in the address bar and is used to identify your website. For the best results, ensure the icon contains a range of sizes from 32x32px to 310x310px, is square and ICO/PNG format.",
    "view_original"             => "View Original",
    "download_original"         => "Download Original",
    "consume_all"               => "Optionally enter a department email address  with \"Consume All\" enabled.",
    "reprocess_email"           => "Reprocess Email",
    "reprocess_email_desc"      => "We recommend to review what originally blocked the email and make any necessary changes before attempting to reprocess.",
    "email_blocked_desc"        => "The email failed to send several times, it must now be manually sent.",
    "captcha_type"              => "Captcha Type",
    "captcha_type_desc"         => "Select the Captcha to be used throughout the system. We recommend switching to Google reCAPTCHA, which requires additional configuration.",
    "default_captcha"           => "Default Captcha",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Please register a new site at <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, select the correct type of reCAPTCHA and ensure to add each brand domain. Copy the site and secret key above.",
    "enter_code"                => "Enter code",
    "export_data"               => "Export Data",
    "export_data_desc"          => "Generate a downloadable export of data belonging to this user.",
    "export_data_select"        => "Please select what data you would like to export.",
    "export_data_scheduled"     => "The export is currently being generated, this may take some time. We will e-mail you when it's available to download.",
    "database"                  => "Database",
    "database_desc"             => "The following items are stored in the database.",
    "prune_users"               => "Inactive user records can be automatically pruned. A user is considered inactive if they have not logged in or have any other activity for a given amount of time.",
    "prune_tickets"             => "Inactive tickets can be automatically pruned. A ticket is considered inactive if it is resolved and has not had any activity for a given amount of time.",
    "prune_organisations"       => "Inactive organisations can be automatically pruned. An organisation is considered inactive if it has no users linked with it and has not had any activity for a given amount of time.",
    "prune_export"              => "User data exports are stored on the file system but may take up room, you can prune export files generated before a certain date.",
    "automatically_prune"       => "Automatically delete",
    "days_after_saved"          => "Records after",
    "days_after_last_activity"  => "Inactive records after",
    "record_permanent_delete"   => "The records will be permanently deleted. This will impact reports.",
    "record_delete_relations"   => "The records will be permanently deleted along with the following related data: :relations. This will impact reports.",
    "manually_prune"            => "Manually delete records created before",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "If you enable this setting when the page doesn't load correctly, you may be locked out of SupportPal!",
    "verify_frontend_loads"     => "Please verify that the frontend loads correctly below.",
    "twig_operator_signature"   => "The {{ operator.signature|raw }} merge field will be processed at runtime hence the preview may be incorrect.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Allows running other brands on your SupportPal installation.",
    "no_branding"               => "No Branding",
    "no_branding_desc"          => "Removes SupportPal branding from the client-facing end of the help desk.",
    "multi_ip"                  => "Multi-IP Support",
    "multi_ip_desc"             => "Allows locking SupportPal to more than one internal/external IP.",
    "purchase"                  => "Purchase",
    "ticket_number_missing"     => "For ticket related emails, the {{ ticket.number }} merge field should be present in the email subject and must be wrapped in either <em>[#{{ ticket.number }}]</em> or <em>(#{{ ticket.number }})</em> in order to route replies to the correct ticket. If you would like to remove the ticket number, please consider enabling <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Enable debug mode to display errors, only use for debugging or if instructed by support. Errors and other useful logging messages are otherwise stored in the application logs, which can be downloaded by going to Utilities -> Logs -> Log File Manager.",
    "record_trash_relations"    => "The records will be moved to the trash and then permanently deleted after :number days along with the following related data: :relations. This will impact reports.",
    "uninstall_plugable_warning" => "Uninstalling the :plugable will delete all associated files and data. We recommend to deactivate the :plugable instead.",
    "web_settings_desc"         => "The web channel settings apply to the frontend. By default tickets can be accessed by anyone who knows a unique ticket URL. You may wish to disable this and require users to login before they can access ticket information.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Please enter a string (particular word to ban or email address), all strings are case-insensitive.",
    "spam_is_regex_desc"        => "Rules can take advantage of regular expressions; if you intend to do so please enable this setting. You do not need to include delimiters.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "The file(s) could not uploaded due to a server-side error.",
    "insert_image"              => "Insert Image",
    "quote"                     => "Quote",
    "code"                      => "Code",
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
    "sSearchPlaceholder"        => "Search...",
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
    "how_can_we_help"           => "How can we help you today?",
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
