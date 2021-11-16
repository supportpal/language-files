<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Systeem voldoet niet aan systeemvereisten",

    // Index
    "supportpal_installer"      => "SupportPal Installer",
    "select_language"           => "Selecteer taal",
    "install_type"              => "installatietype:",
    "install"                   => "Nieuwe installatie",
    "upgrade"                   => "Bestaande installatie upgraden",
    "support"                   => "De licentiecode die voor deze installatie wordt gebruikt, heeft geen geldige ondersteuning &amp; upgrades-abonnement, en als zodanig komt het niet in aanmerking om deze versie van SupportPal te installeren. <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>vernieuw</a> de steun &amp; updates abonnement of zet uw installatiebestanden terug.",

    // Upgrade
    "successfully_updated"      => "Gefeliciteerd, SupportPal is succesvol geüpgraded.",

    // Install
    // Step 1
    "step_1"                    => "Stap 1 van 7: Accepteer EULA",
    "step_1_desc"               => "Lees onze softwarelicentieovereenkomst hieronder. Door verder te gaan, ga je akkoord met de softwarelicentieovereenkomst.",
    "i_accept_and_continue"     => "EULA accepteren en doorgaan",

    // Step 2
    "step_2"                    => "Stap 2 van 7: Systeemvereisten",
    "not_available"             => "Niet beschikbaar",
    "php_version"               => "PHP Versie",
    "php_version_not_found"     => "Niet beschikbaar, PHP-versie gevonden: :version",
    "php_extensions"            => "PHP-extensies",
    "file_writeable"            => "Bestandsrechten",
    "file_writeable_desc"       => "Al het onderstaande moet beschrijfbaar zijn door de webserver. We raden aan om 755 bestandsrechten te gebruiken, hoewel sommige systemen 777 nodig hebben als de bestanden geen eigendom zijn van de webservergebruiker. Directory's moeten recursief beschrijfbaar zijn.",

    // Step 3
    "step_3"                    => "Stap 3 van 7: Database",
    "step_3_desc"               => "Voer de gegevens in van de database die je hebt aangemaakt voor SupportPal.",
    "hostname"                  => "Hostname",
    "port"                      => "Poort",
    "port_desc"                 => "(Alleen wijzigen indien niet standaardpoort 3306)",
    "database"                  => "Database",
    "database_not_empty"        => "De database moet leeg zijn.",

    // Step 4
    "step_4"                    => "Stap 4 van 7: Tabellen aanmaken",
    "step_4_desc"               => "De migratie wordt op de achtergrond uitgevoerd en er wordt een uitgebreid logboek hieronder geschreven. Dit kan enkele minuten duren. Als je klaar bent, klik je op de knop Doorgaan die verschijnt.",

    // Step 5
    "step_5"                    => "Stap 5 van 7: Operatoraccount",
    "step_5_desc"               => "SupportPal heeft een geldige licentie nodig om te kunnen functioneren. Voer er hieronder een in.",
    "license_desc"              => "De SupportPal-licentiesleutel is 23 tekens lang en begint met SP-",
    "operator_desc"             => "Maak een beheerdersaccount aan voor het bedieningspaneel door alle onderstaande gegevens in te voeren.",
    "validating_license"        => "Licentie valideren...",

    // Step 6
    "step_6"                    => "Stap 6 van 7: Snelle installatie",
    "step_6_desc"               => "Vul hieronder de bedrijfs- en websitegegevens in.",
    "locale_desc"               => "Stel de landinstellingen voor het systeem in.",
    "operator_success"          => "Beheerdersaccount is aangemaakt.",

    // Step 7
    "step_7"                    => "Stap 7 van 7: Installatie succesvol!",
    "successfully_installed"    => "Gefeliciteerd, SupportPal is succesvol geïnstalleerd.",
    "operator_panel"            => "Operatorpanel",
    "help_desc"                 => "Mocht je hulp nodig hebben bij het configureren of gebruiken van SupportPal, dan hebben we twee belangrijke informatiebronnen:",
    "submit_a_ticket"           => "Ticket indienen",

    /*
     * 2.0.1
     */

    "post_install"              => "Om het systeem goed te laten functioneren, moet er een cron worden ingesteld. Lees onze <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>stappen na installatie</a> voor details over deze en andere aanbevolen acties om de functionaliteit en beveiliging te verbeteren.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Server voldoet aan :required van de :total verpichte vereisten.",
    "optional_requirements"     => "Server voldoet aan :optional van de :total optionele vereisten.",
    "both_requirements"         => "Server voldoet aan :required van de  :total_required verpichte vereisten en :optional van de :total_optional optionele vereisten.",
    "php_version_is"            => "De PHP-versie is :version.",
    "enabled"                   => "Ingeschakeld",
    "disabled"                  => "Uitgeschakeld",
    "php_settings"              => "PHP Instellingen",
    "ipv6_support"              => "IPv6 Support",
    "memory_limit"              => ">= 128MB Geheugen",
    "memory_limit_error"        => "Het PHP geheugenlimiet is ':limit'.",
    "permission_denied"         => "Toestemming Geweigerd",
    "writable"                  => "Beschrijfbaar",
    "help_php_version"          => "Neem voor hulp bij het installeren van een nieuwe versie van PHP contact op met jw hostingprovider of serverbeheerder.",
    "help_php_extensions"       => "PHP-extensies verschillen afhankelijk van de server, hosting en andere systeemvariabele. Neem voor hulp bij het installeren van ontbrekende extensies contact op met uw hostingprovider of serverbeheerder.",
    "help_php_settings"         => "Lees voor aanvullende hulp <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Hulp bij PHP-instellingen</a>.",
    "disabled_functions"        => "Uitgeschakelde functies",
    "help_mysql_version"        => "Neem voor hulp bij het installeren van een nieuwe versie van MySQL contact op met je hostingprovider of serverbeheerder.",
    "mysql_version"             => "MySQL Versie",
    "mysql_version_not_found"   => "Niet beschikbaar, gevonden MySQL-versie :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Als de server IPv6-netwerkondersteuning heeft, installeer dan de php-sockets-extensie.",
    "email_address_desc"        => "Voer de belangrijkste zakelijke e-mailadres in, dit wordt ingesteld als het standaard verzend-e-mailadres en het e-mailadres op uw eerste afdeling. Er kunnen later andere e-mailadressen toegevoegd worden.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube versie :required of nieuwer vereist. Gevonden: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG Support",
    "allow_url_fopen"           => "'allow_url_fopen' Ingeschakeld ",
    "allow_url_fopen_failure"   => "Schakel 'allow_url_fopen' in het php.ini-bestand in om Gravatar en andere functies te gebruiken .",
    "allowed_methods"           => "HTTP Allowed Methods",
    "help_allowed_methods"      => "De webserver moet alle onderstaande HTTP-methoden toestaan. Raadpleeg onze <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>Nieuwe installatie</a> documentatie voor meer informatie.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Server Versie >= :min",
    "mysql_server_version_desc" => "MySQL :min of nieuwer vereist voor SupportPal. Gevonden: ':version'.",
    "mysql_client_version"      => "Client Versie >= :min (:mysqlnd_min voor MySQLnd)",
    "mysql_client_version_desc" => "MySQL client versie :min of nieuwer (:mysqlnd_min for MySQLnd) vereist voor SupportPal. Gevonden: ':version'.",

    "upgrade_step"              => "Stap :num van :total: ",
    "accept_eula"               => "EULA accepteren",
    "system_requirements"       => "Systeemvereisten",
    "update_database"           => "Update Database",
    "upgrade_complete"          => "Upgrade Voltooid",

    "upgrade_support"           => "Mocht je problemen tegenkomen of hulp nodig hebben bij het gebruik van de nieuwe functies in SupportPal, lees dan onze documentatie of open een ticket bij ons.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Druk op de onderstaande knop om te beginnen.",
    "locked"                    => "Install/Upgrade Bezig",
    "locked_desc"               => "Een vergrendelingsbestand gedetecteerd(:path).\nControleer of het installatieprogramma niet al actief is.\n\nDit bestand kan verwijderd worden als je zeker weet dat er geen andere installatie of upgrade wordt uitgevoerd.",

    "error_and_empty_database"  => "Er is een fout opgetreden. Mogelijk moet de database eerst leeggemaakt worden voordat je opnieuw begint.",
    "login_with_details"        => "Je kunt inloggen met de eerder opgegeven gegevens.",
    "command_not_available"     => "Commando niet beschikbaar. Als je denkt dat dit ten onrechte is voor dan 'php artisan cache:clear' uit en probeer het opnieuw.",
    "read_upgrade_guide"        => "Onze upgradegids bevat nuttige informatie over het doorbreken van wijzigingen en best practices voor upgraden: \nhttps://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[WAARSCHUWING] Zorg ervoor dat je een back-up hebt gemaakt van de SupportPal-database en bestanden voordat je verder gaat .\nBevestig dat je een back-up hebt gemaakt, hebt geverifieerd dat deze niet corrupt is en klaar bent om verder te gaan.",
    "error_and_revert_database" => "Er is een fout opgetreden. Zet de database terug naar een eerdere versie uit de back-up voordat je opnieuw begint.",

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
    "suggest_run_update"        => "Commando niet beschikbaar. Voer alsjeblieft app:update om te upgraden naar de nieuwste beschikbare versie %s.",
    "suggest_run_upgrade"       => "Er wordt al een upgrade uitgevoerd. Voer alsjeblieft app:upgrade uit.",
    "failed_to_download"        => "Kon bestand niet downloaden :message",
    "backup_failed_abort"       => "Back-up mislukt. Update wordt afgebroken.",
    "command_failed"            => "Commando :command, mislukt met output: :message.",
    "already_latest_version"    => "Je gebruikt al de nieuwste versie (:version).",
    "update_not_supported"      => "Automatische update naar de nieuwste versie (:version) wordt niet ondersteund.",
    "current_and_new_version"   => "Je hebt versie :current_version. De nieuwste beschikbare versie is  :new_version.",
    "update_to_version"         => "Je hebt versie :current_version. Wil je upgraden naar :new_version?",
    "downloading_version"       => "Versie :version wordt gedownload naar :path...",
    "checksum_not_matched"      => "De checksum van het gedownloade bestand klopt niet.",

    "check_readiness"           => "Controleren of SupportPal geupgrade kan worden... ",
    "read_only"                 => "Het bestandssysteem \":path\" is alleen-lezen. Updates kunnen niet worden toegepast op een alleen-lezen bestandssysteem. ",
    "file_ownership"            => "Bestand \":path\" is eigendom van \":owner\" maar PHP draait als  \":actual\". De bestandseigenaar en PHP-gebruiker moeten dezelfde zijn tijdens een update voor alle applicatiebestanden. ",
    "minimum_disk_space"        => "Map \":path\" heeft te weinig vrije ruimte. Er moet op zijn minst :space megabytes vrij zijn.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Docker installatie gedetecteerd. Om te upgraden, volg  https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Tips voor het oplossen van problemen ",
);
