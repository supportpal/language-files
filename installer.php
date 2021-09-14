<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Systeemvereisten mislukt",

    // Index
    "supportpal_installer"      => "SupportPal Installer",
    "select_language"           => "Selecteer taal",
    "install_type"              => "installatietype:",
    "install"                   => "Nieuwe installatie",
    "upgrade"                   => "Bestaande installatie upgraden",
    "support"                   => "De licentiecode die voor deze installatie wordt gebruikt, heeft geen geldige ondersteuning &amp; upgrades-abonnement, en als zodanig komt het niet in aanmerking om deze versie van SupportPal te installeren. <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>vernieuw</a> uw steun &amp; updates abonnement of zet uw installatiebestanden terug.",

    // Upgrade
    "successfully_updated"      => "Gefeliciteerd, SupportPal is succesvol geüpgraded.",

    // Install
    // Step 1
    "step_1"                    => "Stap 1 van 7: Accepteer EULA",
    "step_1_desc"               => "Lees onze softwarelicentieovereenkomst hieronder. Door verder te gaan, gaat u akkoord met de licentie.",
    "i_accept_and_continue"     => "Accepteren en doorgaan",

    // Step 2
    "step_2"                    => "Stap 2 van 7: Systeemvereisten",
    "not_available"             => "Niet beschikbaar",
    "php_version"               => "PHP Versie",
    "php_version_not_found"     => "Niet beschikbaar, PHP-versie gevonden: :version",
    "php_extensions"            => "PHP-extensies",
    "file_writeable"            => "Bestandsmachtigingen",
    "file_writeable_desc"       => "Al het onderstaande moet beschrijfbaar zijn door de webserver. We raden aan om 755 bestandsrechten te gebruiken, hoewel sommige systemen 777 nodig hebben als de bestanden geen eigendom zijn van de webservergebruiker. Directory's moeten recursief beschrijfbaar zijn.",

    // Step 3
    "step_3"                    => "Stap 3 van 7: Database",
    "step_3_desc"               => "Voer de gegevens in van de database die u heeft aangemaakt voor SupportPal.",
    "hostname"                  => "Hostname",
    "port"                      => "Poort",
    "port_desc"                 => "(Alleen wijzigen indien niet standaardpoort 3306)",
    "database"                  => "Database",
    "database_not_empty"        => "De database mag geen tabellen bevatten.",

    // Step 4
    "step_4"                    => "Stap 4 van 7: Tabellen aanmaken",
    "step_4_desc"               => "De migratie wordt op de achtergrond uitgevoerd en er wordt een uitgebreid logboek hieronder geschreven. Dit kan enkele minuten duren. Als u klaar bent, klikt u op de knop Doorgaan die verschijnt.",

    // Step 5
    "step_5"                    => "Stap 5 van 7: Operator Account",
    "step_5_desc"               => "SupportPal heeft een geldige licentie nodig om te kunnen functioneren. Voer er hieronder een in.",
    "license_desc"              => "Uw SupportPal-licentiesleutel is 23 tekens lang en begint met SP-",
    "operator_desc"             => "Maak een beheerdersaccount aan voor het bedieningspaneel door alle onderstaande gegevens in te voeren.",
    "validating_license"        => "Licentie valideren...",

    // Step 6
    "step_6"                    => "Stap 6 van 7: Snelle installatie",
    "step_6_desc"               => "Vul hieronder uw bedrijfs- en websitegegevens in.",
    "locale_desc"               => "Stel de landinstellingen voor uw systeem in.",
    "operator_success"          => "Uw beheerdersaccount is aangemaakt.",

    // Step 7
    "step_7"                    => "Stap 7 van 7: Geïnstalleerd!",
    "successfully_installed"    => "Gefeliciteerd, SupportPal is succesvol geïnstalleerd.",
    "operator_panel"            => "Operator Paneel",
    "help_desc"                 => "Mocht u hulp nodig hebben bij het configureren of gebruiken van SupportPal, dan hebben we twee belangrijke informatiebronnen:",
    "submit_a_ticket"           => "Dien een ticket in ",

    /*
     * 2.0.1
     */

    "post_install"              => "Om het systeem goed te laten functioneren, moet er een cronjob worden ingesteld. Lees onze <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>stappen na installatie</a> voor details over deze en andere aanbevolen acties om de functionaliteit en beveiliging te verbeteren.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Je voldoet aan :required van de :total verpichte vereisten.",
    "optional_requirements"     => "Je voldoet aan :optional van de :total optionele vereisten.",
    "both_requirements"         => "Je voldoet aan :required van de  :total_required verpichte vereisten en :optional van de :total_optional optionele vereisten.",
    "php_version_is"            => "Uw PHP-versie is :version.",
    "enabled"                   => "Ingeschakeld",
    "disabled"                  => "Uitgeschakeld",
    "php_settings"              => "PHP Instellingen",
    "ipv6_support"              => "IPv6 Support",
    "memory_limit"              => ">= 128MB Geheugen",
    "memory_limit_error"        => "Uw geheugenlimiet is ':limit'.",
    "permission_denied"         => "Toestemming Geweigerd",
    "writable"                  => "Beschrijfbaar",
    "help_php_version"          => "Neem voor hulp bij het installeren van een nieuwe versie van PHP contact op met uw hostingprovider of serverbeheerder.",
    "help_php_extensions"       => "PHP-extensies verschillen afhankelijk van uw server, uw host en andere systeemvariabele. Neem voor hulp bij het installeren van ontbrekende extensies contact op met uw hostingprovider of serverbeheerder.",
    "help_php_settings"         => "Lees voor aanvullende hulp <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Hulp bij PHP-instellingen</a>.",
    "disabled_functions"        => "Uitgeschakelde functies",
    "help_mysql_version"        => "Neem voor hulp bij het installeren van een nieuwe versie van MySQL contact op met uw hostingprovider of serverbeheerder.",
    "mysql_version"             => "MySQL Versie",
    "mysql_version_not_found"   => "Niet beschikbaar, gevonden MySQL-versie :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Als uw server IPv6-netwerkondersteuning heeft, installeer dan de php-sockets-extensie.",
    "email_address_desc"        => "Voer uw belangrijkste zakelijke e-mailadres in, dit wordt ingesteld als het standaard verzend-e-mailadres en het e-mailadres op uw eerste afdeling. U kunt later andere e-mailadressen toevoegen.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders versie :required of nieuwer vereist. Gevonden: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG Support",
    "allow_url_fopen"           => "'allow_url_fopen' Ingeschakeld ",
    "allow_url_fopen_failure"   => "Schakel 'allow_url_fopen' in uw php.ini-bestand in om Gravatar en andere functies te gebruiken .",
    "allowed_methods"           => "HTTP Allowed Methods",
    "help_allowed_methods"      => "Uw webserver moet alle onderstaande HTTP-methoden toestaan. Raadpleeg onze <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>Nieuwe installatie</a> documentatie voor meer informatie.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Server Versie >= :min",
    "mysql_server_version_desc" => "MySQL :min of nieuwer vereist voor SupportPal. Gevonden: ':version'.",
    "mysql_client_version"      => "Client Versie >= :min (:mysqlnd_min voor MySQLnd)",
    "mysql_client_version_desc" => "MySQL client versie :min of nieuwer (:mysqlnd_min for MySQLnd) vereist voor SupportPal. Gevonden: ':version'.",

    "upgrade_step"              => "Stap :num van :total: ",
    "accept_eula"               => "Accepteer EULA",
    "system_requirements"       => "Systeemvereisten",
    "update_database"           => "Update Database",
    "upgrade_complete"          => "Upgrade Voltooid",

    "upgrade_support"           => "Mocht u problemen tegenkomen of hulp nodig hebben bij het gebruik van de nieuwe functies in SupportPal, lees dan onze documentatie of open een ticket bij ons.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Druk op de onderstaande knop om te beginnen.",
    "locked"                    => "Install/Upgrade Bezig",
    "locked_desc"               => "Een vergrendelingsbestand gedetecteerd(:path).\nControleer of het installatieprogramma niet al actief is.\n\nU kunt dit bestand verwijderen als u zeker weet dat er geen andere installatie of upgrade wordt uitgevoerd.",

    "error_and_empty_database"  => "Er is een fout opgetreden. Mogelijk moet u de database leegmaken voordat u opnieuw begint.",
    "login_with_details"        => "U kunt inloggen met de eerder opgegeven gegevens.",
    "command_not_available"     => "Commando niet beschikbaar. Als u denkt dat dit ten onrechte is voor dan 'php artisan cache:clear' uit en probeer het opnieuw.",
    "read_upgrade_guide"        => "Onze upgradegids bevat nuttige informatie over het doorbreken van wijzigingen en best practices voor upgraden: \nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[WAARSCHUWING] Zorg ervoor dat u een back-up hebt gemaakt van uw SupportPal-database en applicatiebestanden voordat u verder gaat .\nBevestig dat je een back-up hebt gemaakt, hebt geverifieerd dat deze niet corrupt is en klaar bent om verder te gaan.",
    "error_and_revert_database" => "Er is een fout opgetreden. Zet de database terug naar uw back-up voordat u opnieuw begint.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Het databaseconfiguratiebestand bestaat al. Als je zeker weet dat de applicatie nog niet is geïnstalleerd, verwijder dan /config/:environment/database.php en begin opnieuw.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Bedankt voor het kiezen van SupportPal. Controleer of het onderstaande installatietype correct is en klik vervolgens op Doorgaan.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migrating",
    "migrated"                  => "Migrated",
    "database_setup_complete"   => "Database installatie voltooid.",
    "created_repository"        => "':name' repository succesvol aangemaak.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Command unavailable. Please run app:update to download and upgrade to the latest available version: %s.",
    "suggest_run_upgrade"       => "An upgrade is already in progress. Please run app:upgrade instead.",
    "failed_to_download"        => "Failed to download file: :message",
    "backup_failed_abort"       => "Backup failed. Aborting update.",
    "update_failed"             => "System update failed: :message.",
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
);
