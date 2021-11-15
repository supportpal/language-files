<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Exigences de système non valides",

    // Index
    "supportpal_installer"      => "SupportPal Installation",
    "select_language"           => "Choisir la langue :",
    "install_type"              => "Type d'installation",
    "install"                   => "Nouvelle Installation",
    "upgrade"                   => "Mise à niveau l'installation existante",
    "support"                   => "Le code de licence utilisé pour cette installation n'a pas de souscription valide pour support et mise à jour, et en tant que tel, il n'est pas possible à installer cette version de SupportPal. S'il vous plaît <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renouveler</a> votre souscription.",

    // Upgrade
    "successfully_updated"      => "Félicitations, SupportPal a été mis à jour avec succès.",

    // Install
    // Step 1
    "step_1"                    => "Etape 1 sur 7: Accepter EULA",
    "step_1_desc"               => "S'il vous plaît lire notre accord de licence de logiciel ci-dessous. En continuant, vous acceptez la licence.",
    "i_accept_and_continue"     => "J'accepte et continue",

    // Step 2
    "step_2"                    => "Etape 2 sur 7: Configuration requise",
    "not_available"             => "Indisponible",
    "php_version"               => "PHP Version",
    "php_version_not_found"     => "Non disponible, version PHP trouvé :version",
    "php_extensions"            => "Extensions PHP",
    "file_writeable"            => "Autorisations de fichier",
    "file_writeable_desc"       => "Tous les ci-dessous devrait être accessible en écriture par le serveur web. Nous vous recommandons d'utiliser 755 permissions de fichiers, bien que certains systèmes peuvent nécessiter 777 si les fichiers ne sont pas la propriété de l'utilisateur du serveur web. Repertoires devraient être récursive inscriptible.",

    // Step 3
    "step_3"                    => "Etape 3 sur 7: Base de données",
    "step_3_desc"               => "S'il vous plaît entrer les détails de la base de données que vous avez mis en place pour SupportPal.",
    "hostname"                  => "Hostname",
    "port"                      => "Port",
    "port_desc"                 => "(à modifiez seulement si il ne s'agit pas du port de défaut 3306)",
    "database"                  => "Base de données",
    "database_not_empty"        => "La base de données ne doit pas contenir des tables.",

    // Step 4
    "step_4"                    => "Etape 4 sur 7: Créer des tables",
    "step_4_desc"               => "La migration sera effectuée en arrière-plan et un journal détaillé écrit ci-dessous, cela peut prendre plusieurs minutes. Une fois terminé, s'il vous plaît cliquez sur le bouton qui apparaîtra pour continuer.",

    // Step 5
    "step_5"                    => "Étape 5 de 7: Compte Opérateur",
    "step_5_desc"               => "SupportPal nécessite une licence valide pour fonctionner, s'il vous plaît entrer une ci-dessous.",
    "license_desc"              => "Votre clé de licence SupportPal est de 23 caractères et commence par SP-",
    "operator_desc"             => "S'il vous plaît créer un compte d'administrateur pour le panneau de commande en saisissant tous les détails ci-dessous.",
    "validating_license"        => "Licence en validation ...",

    // Step 6
    "step_6"                    => "Etape 6 sur 7: Paramétrage rapide",
    "step_6_desc"               => "Entrez votre entreprise et les détails du site Web ci-dessous.",
    "locale_desc"               => "Définissez les paramètres régionaux de votre système.",
    "operator_success"          => "Your administrator account has been created.",

    // Step 7
    "step_7"                    => "Etape 7 sur 7: Installé !",
    "successfully_installed"    => "Félicitations, SupportPal a été installé avec succès.",
    "operator_panel"            => "Panneau de commande",
    "help_desc"                 => "Si vous avez besoin d'aide pour configurer ou utiliser SupportPal, nous avons trois principales sources d'information:",
    "submit_a_ticket"           => "Soumettre un ticket",

    /*
     * 2.0.1
     */

    "post_install"              => "Pour que le système fonctionne correctement, une tâche cron doit être mis en place. S'il vous plaît lire notre <a href='http://docs.supportpal.com/display/DOCS/New+Installation#NewInstallation-PostInstallationSteps'> après les étapes d'installation </a> pour plus de détails à ce sujet et d'autres recommander des mesures pour améliorer la fonctionnalité et la sécurité.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "You meet :required of :total required requirements.",
    "optional_requirements"     => "You meet :optional of :total optional requirements.",
    "both_requirements"         => "You meet :required of :total_required required requirements and :optional of :total_optional optional requirements.",
    "php_version_is"            => "Votre version de PHP est :version.",
    "enabled"                   => "Activée",
    "disabled"                  => "Désactivé",
    "php_settings"              => "Paramètres PHP",
    "ipv6_support"              => "Prise en charge IPv6",
    "memory_limit"              => ">= 128Mo de mémoir",
    "memory_limit_error"        => "otre limite de mémoire est ':limit'.",
    "permission_denied"         => "Permission refusée",
    "writable"                  => "Inscriptible",
    "help_php_version"          => "Pour obtenir une aide afin d'installer une nouvelle version de PHP s'il vous plaît contacter votre fournisseur d'hébergement ou de l'administrateur du serveur.",
    "help_php_extensions"       => "Les extensions PHP diffèrent en fonction de votre serveur, votre hôte et d'autres variables du système. Pour obtenir une assistance installation d'extensions manquantes, s'il vous plaît contacter votre fournisseur d'hébergement ou de l'administrateur du serveur.",
    "help_php_settings"         => "Pour une assistance supplémentaire, s'il vous plaît lire <a target=\"_blank\" href=\"http://docs.supportpal.com/display/DOCS/System+Requirements#SystemRequirements-PHPSettingsPHPSettings\">PHP Settings Help</a>.",
    "disabled_functions"        => "Fonctions desactivées",
    "help_mysql_version"        => "For assistance installing a new version of MySQL please contact your hosting provider or server administrator.",
    "mysql_version"             => "MySQL Version",
    "mysql_version_not_found"   => "Not available, found MySQL version: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "If your server has IPv6 networking support, please install the php-sockets extension.",
    "email_address_desc"        => "Enter your main company email address, this will be set up as the default sending email address and the email address on your first department. You will be able to add other email addresses later.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders version :required or greater required. Found: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG Support",
    "allow_url_fopen"           => "'allow_url_fopen' Enabled",
    "allow_url_fopen_failure"   => "Enable 'allow_url_fopen' in your php.ini file to use Gravatar and other features.",
    "allowed_methods"           => "HTTP Allowed Methods",
    "help_allowed_methods"      => "Your web server must permit all of the below HTTP methods. Please check our <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>New Installation</a> documentation for more information.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Server Version >= :min",
    "mysql_server_version_desc" => "MySQL :min or greater is required to run SupportPal. Found: ':version'.",
    "mysql_client_version"      => "Client Version >= :min (:mysqlnd_min for MySQLnd)",
    "mysql_client_version_desc" => "MySQL client version :min or greater (:mysqlnd_min for MySQLnd) is required to run SupportPal. Found: ':version'.",

    "upgrade_step"              => "Step :num of :total: ",
    "accept_eula"               => "Accept EULA",
    "system_requirements"       => "System Requirements",
    "update_database"           => "Update Database",
    "upgrade_complete"          => "Upgrade Complete",

    "upgrade_support"           => "Should you find any problems or need any help using the new features in SupportPal, please read our documentation or open a ticket with us.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Please press the button below to start.",
    "locked"                    => "Install/Upgrade In-Progress",
    "locked_desc"               => "Detected a lock file (:path).\nPlease check that the installer is not already running.\n\nYou can delete this file when you're certain that another installation or upgrade is not in progress.",

    "error_and_empty_database"  => "There was an error. You may need to empty the database before starting again.",
    "login_with_details"        => "You can login using the details specified earlier.",
    "command_not_available"     => "Command unavailable. If you think this has been shown in error, please run 'php artisan cache:clear' and then rerun this command.",
    "read_upgrade_guide"        => "Our Upgrade Guide contains useful information regarding breaking changes and best practices for upgrading:\nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[WARNING] Ensure you have taken a backup of your SupportPal database and application files before proceeding any further.\nPlease confirm you have taken a backup, verified it's not corrupt and are ready to proceed.",
    "error_and_revert_database" => "There was an error. Please revert the database to your backup before starting again.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "The database configuration file already exists. If you are sure the application is not already installed, please delete /config/:environment/database.php and start again.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Thank you for choosing SupportPal. Please verify the installation type below is correct and then click continue.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migrating",
    "migrated"                  => "Migrated",
    "database_setup_complete"   => "Database setup complete.",
    "created_repository"        => "Created ':name' repository successfully.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Command unavailable. Please run app:update to download and upgrade to the latest available version: %s.",
    "suggest_run_upgrade"       => "An upgrade is already in progress. Please run app:upgrade instead.",
    "failed_to_download"        => "Failed to download file: :message",
    "backup_failed_abort"       => "Backup failed. Aborting update.",
    "command_failed"            => "Command :command, failed with output: :message.",
    "already_latest_version"    => "You are already running the latest version (:version).",
    "update_not_supported"      => "Automatic update to latest version (:version) is not supported.",
    "current_and_new_version"   => "You have version :current_version. Latest version available is :new_version.",
    "update_to_version"         => "You have version :current_version. Would you like to update to :new_version?",
    "downloading_version"       => "Downloading version :version to :path...",
    "checksum_not_matched"      => "The downloaded file failed checksum verification.",

    "check_readiness"           => "Checking if the application is able to upgrade...",
    "read_only"                 => "The filesystem at \":path\" is read only. Updates cannot be applied against a read only file system.",
    "file_ownership"            => "File \":path\" is owned by \":owner\" but PHP is running as \":actual\". The file owner and PHP user must be the same during an update for all application files.",
    "minimum_disk_space"        => "Directory \":path\" has insufficient space. There must be at least :space megabytes free.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Docker deployment detected. To upgrade, follow https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Get troubleshooting tips",
);
