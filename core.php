<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Operator Paneel",
    "welcome"                   => "Welkom bij SupportPal",
    "welcome_desc"              => "Klik om te starten met een snelle rondleiding van onze instellingen en features.",

    // Dashboard
    "submit_ticket"             => "Ticket aanmaken",
    "submit_ticket_desc"        => "Gebruik dit formulier om een ticket aan te maken.",
    "track_ticket"              => "Ticketstatus",
    "track_ticket_desc"         => "Niet geregistreerd? Gebruik je e-mailadres en ticketnummer om de voortgang van het ticket in te zien.",
    "my_tickets"                => "Mijn tickets",
    "my_tickets_desc"           => "Volg hier je openstaande en gesloten tickets.",
    "no_modules"                => "Er zijn geen modules aangezet.",
    "search_results"            => "Zoekresultaten",
    "found_results"             => ":total resultaten gevonden met de zoekterm",

    // Maintenance
    "maintenance"               => "We voeren momenteel onderhoud uit",
    "maintenance_desc"          => "Onze servicedesk is momenteel niet bereikbaar in verband met onderhoud. We zijn zo snel mogelijk weer terug.",
    "maintenance_active"        => "Onderhoudsmodus is actief.",

    // About
    "license_status"            => "Licentiestatus",
    "license_code"              => "Licentiecode",
    "change_license"            => "Licentie Aanpassen",
    "license_info"              => "Licentie-informatie",
    "license_owner"             => "Licentie Eigenaar",
    "license_created"           => "Aanvraagdatum Licentie",
    "license_type"              => "Licentie Type",
    "branding"                  => "Branding",
    "license_expires"           => "Verloopdatum licentie",
    "license_valid_ip"          => "Gokoppelde IP(s)",
    "support_status"            => "Supportstatus",
    "support_expires"           => "Verloopdatum support",
    "version_info"              => "Versieinformatie",
    "installed_version"         => "Geinstalleerde versie",
    "available_version"         => "Beschikbare versie",
    "monthly_product"           => "* De verloopdatum wordt automatisch aangepast naar maandelijks wanneer alle uitstaande facturen zijn betaald.",

    // API Tokens
    "api_token"                 => "API token|API tokens",
    "token"                     => "Token",
    "regenerate_token"          => "Token opnieuw genereren",
    "access_level"              => "Toegangsniveau",
    "read_write"                => "Lezen & Schrijven",
    "read_only"                 => "Alleen Lezen",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spamregel|Spamregels",
    "containing_text"           => "Bevat de tekst",
    "filter_new_message"        => "Nieuw ticketbericht (van gebruiker)",
    "filter_new_comment"        => "Nieuw self-service reactie (van gebruiker)",
    "filter_user_login"         => "Gebruikerlogin",
    "filter_operator_login"     => "Operatorlogin",
    "filter_api_access"         => "API toegang",
    "content"                   => "Inhoud",
    "sender"                    => "Afzender",
    "content_sender"            => "Afzender, Inhoud",

    // Company
    "company"                   => "Bedrijf|Bedrijven",

    // Email
    "default_email_addr"        => "Standaard e-mailadres",
    "default_email_addr_desc"   => "Het e-mailadres dat wordt gebruikt als afzender in de meeste e-mails die door het systeem worden verstuurd.",
    "include_operator_name"     => "Verstuur met operatornaam",
    "include_operator_name_desc" => "Verstuur de e-mail met de naam van de operator in het 'van' veld bij het beantwoorden van tickets via e-mail",
    "include_dept_name"         => "Verstuur met afdelingsnaam",
    "include_dept_name_desc"    => "Verstuur de e-mail met de afdelingsnaam in het 'van' veld bij het beantwoorden van tickets via e-mail. Indien het een andere afdeling betreft wordt er een nieuwe thread van gemaakt.",
    "global_email_header"       => "Globale e-mailheader",
    "global_email_header_desc"  => "Voeg een header toe aan alle e-mails die door het systeem worden verstuurd. HTML wordt geaccepteerd.",
    "global_email_footer"       => "Globale e-mailfooter",
    "global_email_footer_desc"  => "Voeg een footer toe aan alle e-mail die door het systeem worden verstuurd. HTML wordt geaccepteerd.",
    "email_template"            => "E-mailtemplate|E-mailtemplates",
    "email_log"                 => "E-maillog",
    "email_queue"               => "E-mailwachtrij",
    "email_queue_desc"          => "Onderstaand de e-mails die in de wachtrij staan om te worden verstuurd.",
    "email_method"              => "E-mailmethode",
    "php_mail_function"         => "PHP mail() functie",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP server",
    "smtp_port"                 => "SMTP port",
    "smtp_encryption"           => "SMTP encryptie",
    "smtp_requires_auth"        => "Vereist autenticatie",
    "smtp_username"             => "SMTP gebruikersnaam",
    "smtp_password"             => "SMTP wachtwoord",
    "ssl"                       => "SSL",
    "tls"                       => "TLS",
    "email_content"             => "E-mail inhoud",
    "email_content_desc"        => "voer een standaardonderwerp en e-mailinhoud in voor deze sjabloon, de template kan ook in andere talen geschreven worden. Als een template een bepaalde taal niet heeft worden de standaardgegevens gebruikt. ",
    "outgoing"                  => "Uitgaand",
    "incoming"                  => "Inkomend",
    "incoming_spam"             => "Inkomend (Geweigerd - Spam)",
    "incoming_throttled"        => "Incoming (Rejected - Gesmoord)",
    "email_subject"             => "E-mail Onderwerp",
    "twig_html_warning"         => "Twig is niet toegestaan binnen HTML-tags / attributen en wordt automatisch verwijderd bij het opslaan. ",

    // Modules
    "modules"                   => "Module|Modules",
    "modules_desc"              => "Onderstaand is een lijst van alle beschikbare modules, klik het edit icon om de instellingen voor die module bij te werken.",
    "module_disable"            => "Uitgeschakelde modules worden verwijderd van de frontend en de operatorinterface.",

    // Scheduled tasks
    "scheduled_task"            => "Cron|Crons",
    "interval_desc"             => "Stel in hoe vaak deze cron wordt gestart, bijvoorbeeld instellen op 5 minuten betekent dat de cron elke 5 minuten wordt uitgevoerd.",
    "cron_settings"             => "Cron instellingen",
    "cron_running"              => "Cron actief",
    "cron_not_running"          => "Cron inactief",
    "task_ran"                  => "Cron handmatig uitgevoerd.",
    "task_failed"               => "Het is mislukt om de cron handmatig uit te voeren.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "installed_plugins"         => "Geïnstalleerde plugins",
    "visit_plugin"              => "Pluginsite bezoeken",

    // Messages
    "last_activity"             => "Laatste activiteit",
    "send_to"                   => "Stuur naar",
    "inbox"                     => "Inbox",
    "compose"                   => "Opstellen",

    // Utilities
    "utilities"                 => "Tools",

    // System Cleanup
    "system_cleanup"            => "Systeem opschonen",
    "system_cleanup_desc"       => "Gebruik de beschikbare opties om gegevens die niet meer gebruikt worden te verwijderen.",
    "files"                     => "Bestanden",
    "files_desc"                => "De volgende items zijn als bestanden opgeslagen.",
    "logs"                      => "Logs",
    "logs_desc"                 => "De volgende items zijn in de database opgeslagen.",
    "empty"                     => "Leeg",
    "prune"                     => "Opschonen",
    "total_records"             => "Totaal aantal records",
    "system_cache"              => "Systeemcache",
    "system_cache_desc"         => "Slaat systeemdata op die niet vaak veranderd word om SupportPal sneller te maken.",
    "template_cache"            => "Templatecache",
    "template_cache_desc"       => "Voor-gecomplieerde versies van de templates worden opgeslagen om laadtijden te versnellen.",
    "attachments_desc"          => "Ticketbijlages worden opgeslagen als bestanden maar kunnen ruimte innemen, deze bestanden kunnen opgeschoond worden op basis van leeftijd.",
    "system_activity_log_desc"  => "Slaat alle activiteit van gebruiker, operators en het systeem zelf op, deze gegevens kunnen opgeschoond worden op basis van leeftijd.",
    "email_log_desc"            => "Slaat alle inkomende en uitgaande e-mails op in een log, deze log(s) kunnen opgeschoond wordenop basis van leeftijd.",
    "operator_login_log_desc"   => "Slaat elke keer dat een operator inlogt op met ipadres, deze gegevens kunnen opgeschoond worden op basis van leeftijd.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Captcha tonen",

    // Widgets
    "dashboard"                 => "Dashboard",
    "add_remove_widget"         => "Widgets toevoegen/verwijderen",
    "enable_tour"               => "Rondleiding inschakelen",

    // Product Tour
    "dashboard_desc"            => "Je eigen persoonlijke dashboard. Widgets kunnen worden verwijderd, geminimaliseerd en verplaatst! ",
    "private_messages"          => "Privéberichten",
    "messages_desc"             => "Privéberichten zijn een handige manier voor 1: 1-gesprekken met andere helpdeskmedewerkers. ",
    "configure"                 => "Configureer de helpdesk",
    "configure_desc"            => "SupportPal bevat een aantal instellingen waarmee je de helpdesk naar eigen voorkeur kunt instellen. ",
    "default_email"             => "Standaard e-mail adres",
    "default_email_desc"        => "Het standaard e-mailadres dat moet worden gebruikt voor alle uitgaande correspondentie met gebruikers.",
    "dept_settings_desc"        => "We realiseren ons dat afdelingen binnen de organisatie anders opereren. Met afdelingsinstellingen kun je algemene instellingen overschrijven.",
    "department_desc"           => "Afdelingen zijn net als die binnen jou organisatie. Handig om ervoor te zorgen dat vragen van klanten snel bij de juiste medewerker(s) terechtkomen.",
    "department_email"          => "E-mailadres van de afdeling ",
    "dept_email_desc"           => "Er kunnen meerdere e-mailadressen worden toegewezen aan een bepaalde afdeling. E-mailverzameling wordt uitgevoerd op basis van de geconfigureerde adressen om e-mails van klanten naar de helpdesk te halen.",
    "dept_tmpl"                 => "E-mailsjablonen voor afdelingen",
    "dept_tmpl_desc"            => "Soms wil je misschien het e-mailsjablonen van een afdeling wijzigen of volledig uitschakelen. Je kunt afdelingsspecifieke e-mailsjablonen definiëren en deze hier inschakelen.",
    "schedule_task_desc"        => "Geplande taken worden gebruikt om verschillende processen binnen SupportPal te automatiseren, waaronder het verzamelen van tickets via e-mail.",
    "schedule_task_2"           => "Voor geplande taken moet een cron-taak worden gemaakt om te kunnen werken. Het interval voor elke taak die door de cron-taak wordt uitgevoerd, kan worden aangepast via het bewerkingsformulier.",
    "schedule_task_cron"        => "Cron",
    "schedule_task_3"           => "Maak een cron aan die lijkt op het onderstaande voorbeeld zodat de crons automatisch worden uitgevoerd. ",
    "ticket_channel_desc"       => "Ticketkanalen zijn methoden om tickets te maken. Ze kunnen eenvoudig worden uitgebreid met eigen kanalen, bijvoorbeeld tickets die via Instagram worden geopend.",
    "ticket_channel_2"          => "We bieden een aantal standaardkanalen. Mogelijk wilt is het handig om de Facebook- en Twitter-kanalen activeren en configureren om via sociale media gegenereerde tickets te verzamelen.",
    "user_desc"                 => "Gebruikers die met supportpal communiceren, worden hier weergegeven. Je kunt desgewenst gebruikers toevoegen, bewerken en verwijderen.",
    "organisation_desc"         => "Gebruikers kunnen worden toegewezen aan organisaties waardoor ze toegang hebben tot tickets die zijn geopend door andere gebruikers binnen hun organisatie.",
    "operator_desc"             => "Andere personeelsleden kunnen hier als operator worden toegevoegd, samen met het beheer van de afdelingen waaraan ze zijn toegewezen. ",
    "ticket_desc"               => "Het ticket rooster bevat een verzameling van alle voor jou relevante tickets.",
    "ticket_toolbar"            => "Werkbalk",
    "ticket_desc3"              => "Bulkacties kunnen worden uitgevoerd op tickets met behulp van de ticketwerkbalk.",
    "tour_complete"             => "Tour Voltooid!",
    "tour_complete_desc"        => "Bedankt voor het gebruik van SupportPal.<br /><br />We raden aan de onderstaande beknopte handleiding te volgen om de helpdesk te configureren.",

    // IP Ban
    "ip_ban_time_desc"          => "Of de blokkade permanent is of tijdelijk.",
    "expiry"                    => "Verloopt",
    "expired"                   => "Verlopen",
    "expiry_time"               => "Verlooptijd",
    "expiry_time_desc"          => "De tijd waarom de blokkade verloopt. Indien er geen datum in ingsteld komt er automatisch 24 uur bij.",
    "permanent"                 => "Permanent",

    // Languages
    "no_enabled_languages"      => "Kon :item niet bijwerken. Er moet minimaal een beschikbare taal zijn.",

    // General Settings
    "locale"                    => "Taalinstellingen",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Mapnaam operatorpanel",
    "admin_folder_desc"         => "Stel de mapnaam in voor het operatorpanel. Het is aanbevolen deze aan te passen ipv het standaard \"admin\" te gebruiken vanwege veiligsheidsredenen.",
    "enable_ssl"                => "SSL inschakelen",
    "maintenance_mode"          => "Onderhoudsmodus",
    "maintenance_mode_desc"     => "Schakelt de frontend uit en toont een onderhoudsmelding. Bewerk resources/templates/frontend/[template]/core/maintenance.twig om het bericht dat wordt getoond aan de bezoekers te wijzingen.",
    "default_user_country"      => "Land",
    "default_user_country_desc" => "Het land dat standaard wordt ingesteld wanneer een gebruiker zich aanmeldt.",
    "system_timezone"           => "Tijdzone",
    "system_timezone_desc"      => "De tijdzone die van toepassing is op het systeem. Operators kunnen hun tijdzone aanpassen in het persoonlijke instellingen.",
    "date_format"               => "Datumnotatie",
    "date_format_desc"          => "Het datumformaat dat door het systeem wordt gebruikt.",
    "time_format"               => "Tijdnotatie",
    "time_format_desc"          => "Het tijdformaat dat door het systeem wordt gebruikt.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "Deze key is voor onze single sign on optie, minimaal 16 tekens.",
    "simpleauth_operators"      => "Toestaan voor operators",
    "base_url"                  => "Systeem URL",
    "base_url_desc"             => "Vul het volledige webadres van de installatie in, deze wordt gebruikt om de URLs te maken die de gebruikers toegemailed krijgen.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debugmode",
    "pretty_urls"               => "Schone URLs",
    "pretty_urls_desc"          => "Door deze optie inschakelen word index.php uit de URLs verwijderd. Zet dit alleen uit wanneer je ook zonder /index.php bij het operator panel kunt komen. Schakel uit wanneer je niet over mod_rewrite beschikt, .htaccess bestanden niet zijn toegestaan of wanneer de .htaccess bestanden niet nog zijn aangepast aan de server.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Wanneer deze optie is ingeschakeld wordt de gehele frontend en operator gedeelte alleen nog maar bereikbaar met een SSL verbinding. Wees er zeker van dat de http instellingen correct zijn.",
    "unexpected_template_error" => "Een overwachte fout is opgetreden tijdens het controleren van de syntax van de template. Probeer het opnieuw.",
    "empty_template_preview"    => "Om de previewfunctie te gebruiken moet een geldige template worden gekozen.",
    "no_department_address"     => "Kon geen afdelingsadres vinden in de ontvanger(s).",
    "email_loop_detected"       => "Loop gevonden - e-mail is verstuurd vanaf afdelingsadres.",
    "email_ticket_locked"       => "Ticket is gelocked. Gebruiker heeft via e-mail gevraagd het ticket weer te openen.",
    "email_no_body"             => "Kon de inhoud van de e-mail niet vinden.",
    "email_runtime_error"       => "Een runtime error is opgetreden tijdens het maken van het ticket/antwoord.",
    "email_reply_disabled"      => "Gebruiker e-mailantwoorden zijn uitgeschakeld voor deze afdeling.",
    "email_throttled"           => "Er zijn teveel inkomende e-mails van deze gebruiker. Het limiet is :max_requests e-mails per :decay_time minuut.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Bewerk de instellingen die van toepassing zijn op heel SupportPal. Als je de instellingen voor een specifieke sectie wilt bewerken, bijv. Tickets, open het gedeelte in de zijbalk om de beschikbare instellingen voor die module te zien. Instellingen met betrekking alle merk(en) zijn te vinden door op Merken in de zijbalk te klikken.",
    "brand"                     => "Merk|Merken",
    "brand_desc"                => "Een merk is een klantgerichte identiteit binnen SupportPal, waardoor meerdere communicatiekanalen mogelijk zijn. Meerdere merken kunnen naadloos worden bediend onder één enkel bedieningspaneel.",
    "default_brand"             => "Standaard merk",
    "default_brand_desc"        => "Selecteer het merk dat standaard wordt gebruikt wanneer bezoekers de frontend bezoeken en er kan geen passend merk kan worden gevonden. ",
    "brand_enabled_desc"        => "Schakel een merk in of uit. Uitgeschakelde merken kunnen niet worden gebruikt en tellen niet mee als onderdeel van de merken die zijn toegestaan op je licentie. Uitschakelen kan worden gebruikt om tijdelijk een merk te verbergen en / of informatie vast te houden. Als een merk wordt verwijdert zal alle informatie worden verwijderd, inclusief gebruikers en tickets die daarmee verband houden.",
    "inherit_global_setting"    => "Globale instelling overnemen",
    "brand_date_format_desc"    => "De datumnotatie die wordt gebruikt voor de frontend van dit merk. ",
    "brand_time_format_desc"    => "Het tijdformaat dat wordt gebruikt voor de frontend van dit merk. ",
    "brand_timezone"            => "Tijdzone merk",
    "brand_timezone_desc"       => "De tijdzone die standaard wordt gebruikt op de frontend van dit merk, gebruikers hebben de mogelijkheid om hun eigen tijdzone te selecteren.",
    "brand_default_lang_desc"   => "De taal die standaard wordt gebruikt op de frontend van dit merk.",
    "brand_lang_toggle_desc"    => "Als de vervolgkeuzelijst voor talen op de frontend van dit merk moet worden weergegeven.",
    "brand_groups_desc"         => "Operators in de geselecteerde groepen kunnen tickets en andere inhoud van dit merk maken, bijwerken en verwijderen (afhankelijk van de rolrechten).",
    "select_brand"              => "Selecteer een merk...",
    "add_another_language"      => "Nog een taal toevoegen...",
    "mass_email_brand_desc"     => "Selecteer van welk merk de e-mail wordt verzonden. Het wordt gebruikt om het verzenden van naam en adres in te stellen, het juiste e-mailsjabloon te laden en in de samenvoegvelden. Als er naar een gebruikersgroep verzonden worden zullen alleen gebruikers die tot het geselecteerde merk behoren gemaild.",
    "brand_limit_exceeded"      => "Je licentie is momenteel toegestaan om :allowed merk(en) tegelijk te gebruiken. Bezoek ons klantengedeelte om meer merken aan te schaffen. ",
    "additional_brands"         => "Extra merken",
    "purchase_more"             => "Koop meer",
    "brand_limit_allowed"       => "Je licentie is momenteel toegestaan om :allowed merk tegelijkertijd te gebruiken.|Je licentie is momenteel toegestaan om :allowed merken tegelijkertijd te gebruiken",
    "brand_limit_purchase"      => "Indien dit niet correct is, laat de licentie <strong>opnieuw uitgeven</strong> in onze <a href='http://www.supportpal.com/manage/' target='_blank'>klantsectie</a> en bezoek de <a href=':route'>Licentieinformatie</a> pagina om je servicedesk te synchroniseren met onze licentieserver.<br />Om meer merken te gebruiken <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>upgrade licentie</a>.",
    "support_expiry"            => "Het abonnement op ondersteuning en updates is geldig tot :date.",
    "support_status_desc"       => "<a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>verleng het ondersteuningsabonnement </a> om de laatste ondersteuning en updates van SupportPal te krijgen.",
    "ip_ban"                    => "IP Blokkade|IP Blokkades",
    "ip_whitelist"              => "IP Whitelist",
    "whitelisted_ip"            => "Gewhitelist IP",
    "license_path"              => "Installatiepad",
    "php_info"                  => "PHP Informatie",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "Afdeling is niet toegewezen aan het merk van dit ticket.",
    "incoming_rejected"         => "Inkomend (geweigerd)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Logboekbeheer",
    "file_manager_desc"         => "Hieronder kun je de logboeken downloaden of verwijderen die tijdens het gebruik door het systeem zijn opgeslagen, ze kunnen worden gebruikt voor foutopsporingsdoeleinden. De logboekbestanden worden automatisch doorlopen en worden slechts tot de laatste 5 dagen aan gegevens opgeslagen.",
    "app_logs"                  => "Applicatielogs",
    "app_logs_desc"             => "Alle waarschuwingen en fouten van algemeen gebruik van de helpdesk worden hier gelogd. Mogelijk wordt je gevraagd om een of meer van deze logboeken te verstrekken wanneer er ondersteuning gevraagd is.",
    "email_logs"                => "E-maillogs",
    "email_logs_desc"           => "Details over inkomende e-mails worden in deze bestanden opgeslagen wanneer ze worden geparseerd en geïmporteerd als tickets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Antwoord aan",
    "and_number_others"         => "en :number andere|en :number andere",
    "user_templates"            => "Gebruikertemplates",
    "operator_templates"        => "Operatortemplates",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Bestandsgroottelimiet van alle bijlages bij elkaar.",
    "attachment_size_desc"      => "De bestandsgroottelimiet van alle bijlages bij elkaar die worden verzonden in een enkele e-mail. Beschikbare opties zijn K (voor Kilobytes) en M (voor Megabytes), alle andere opgaves worden als bytes aangenomen. Voorbeeld: 5M voor 5 Megabyte. Stel op 0 t om geen bijlages toe te staan en verplicht gebruikers de bijlages via de servicedesk",
    "attachment_limit_reached"  => "Bestandsgroottelimiet van alle bijlages bij elkaar bereikt (:size). Overweeg om bestanden via een ander medium te verzenden (zoals Wetransfer of Google Drive).",
    "no_existing_translations"  => "Geen bestaande vertalingen.",
    "add_translation"           => "Vertaling toevoegen",
    "todo_list"                 => "To-Do Lijst",
    "version_check"             => "Versiecontrole",
    "system_overview"           => "Systeemoverzicht",
    "getting_started"           => "Aan de slag",
    "operator_notes"            => "Operatornotities",
    "simpleauth_operators_desc" => "Sta operators toe in en uit te loggen met SimpleAuth, we raden aan dit niet actief te houden tenzij het specifiek voor deze reden gebruikt.",
    "upgrade_and_reactivate"    => "Upgraden & Heractiveren",
    "upgrade_pending"           => "Upgrade in afwachting",
    "locale_in_uri"             => "Landcode toevoegen aanURI",
    "locale_in_uri_desc"        => "Schakel uit om de landcode uit de URI te verwijderen , bijvoorbeeld: http://support.mycompany.com/en/announcements wordt http://support.mycompany.com/announcements. Kan alleen worden uitgeschakeld als er maar één taal is ingeschakeld in het systeem .",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Dit is momenteel ingesteld als standaardtaal. Als je de taal uitschakelt, wordt in plaats daarvan een andere ingeschakelde taal als standaardtaal ingesteld .",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Schakel JavaScript in om deze pagina te gebruiken.",
    "go_to_dashboard"           => "Ga naar het dashboard",
    "brand_colour_desc"         => "Selecteer een kleur voor het merk, deze wordt gebruikt voor het kleurenschema op zowel de frontend als de operatorpaneel. Laat leeg om het standaardkleurenschema te gebruiken.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "De favicon-afbeelding verschijnt in de adresbalk en wordt gebruikt om de website te identificeren. Voor de beste resultaten zorg je ervoor dat het pictogram een reeks formaten bevat van 32x32px tot 310x310px, is vierkant en in een ICO of PNG-indeling.",
    "view_original"             => "Origineel bekijken",
    "download_original"         => "Origineel downloaden",
    "consume_all"               => "Voer eventueel een afdelings-e-mailadres in met \"Consumeer alle e-mail \" actief.",
    "reprocess_email"           => "E-mail opnieuw verwerken",
    "reprocess_email_desc"      => "We raden aan om te bekijken wat de e-mail oorspronkelijk heeft geblokkeerd en de nodige wijzigingen aan te brengen voordat je probeert deze opnieuw te verwerken.",
    "email_blocked_desc"        => "De e-mail is meerdere keren niet verzonden, deze moet nu handmatig worden verzonden.",
    "captcha_type"              => "Captcha Type",
    "captcha_type_desc"         => "Selecteer de Captcha die in het hele systeem moet worden gebruikt. We raden aan om over te schakelen naar Google reCAPTCHA, waarvoor aanvullende configuratie vereist is.",
    "default_captcha"           => "Standaard Captcha",
    "recaptcha_site_key"        => "Sitesleutel",
    "recaptcha_secret_key"      => "Geheime Sleutel",
    "recaptcha_desc"            => "Registreer een nieuwe site op <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, selecteer het juiste type reCAPTCHA en zorg ervoor dat elk merkdomein toegevoegd is. Kopieer de site en geheime sleutel hierboven.",
    "enter_code"                => "Vul code in",
    "export_data"               => "Data exporteren",
    "export_data_desc"          => "Genereer een downloadbare export van gegevens van deze gebruiker.",
    "export_data_select"        => "Selecteer welke gegevens er geëxporteerd moeten worden.",
    "export_data_scheduled"     => "De export wordt momenteel gegenereerd, dit kan even duren. We sturen een e-mail zodra deze beschikbaar is om te downloaden .",
    "database"                  => "Database",
    "database_desc"             => "De volgende items worden in de database opgeslagen.",
    "prune_users"               => "Inactieve gebruikersrecords kunnen automatisch worden opgeschoond. Een gebruiker wordt als inactief beschouwd als deze gedurende een bepaalde tijd niet heeft ingelogd of geen andere activiteit heeft gehad.",
    "prune_tickets"             => "Inactieve tickets kunnen automatisch worden opgeschoond. Een ticket wordt als inactief beschouwd als het is opgelost en gedurende een bepaalde tijd geen activiteit heeft gehad.",
    "prune_organisations"       => "Inactieve organisaties kunnen automatisch worden opgeschoond. Een organisatie wordt als inactief beschouwd als er geen gebruikers aan zijn gekoppeld en gedurende een bepaalde tijd geen activiteit heeft gehad.",
    "prune_export"              => "Exportbestanden van gebruikersgegevens worden op het bestandssysteem opgeslagen, maar kunnen veel ruimte in beslag nemen. Exportbestanden die vóór een bepaalde datum zijn gegenereerd kunnen opgescchoond worden",
    "automatically_prune"       => "Automatisch verwijderen",
    "days_after_saved"          => "Records na",
    "days_after_last_activity"  => "Inactieve records verwijderen na",
    "record_permanent_delete"   => "De records worden definitief verwijderd. Dit heeft gevolgen voor rapporten.",
    "record_delete_relations"   => "De records worden permanent verwijderd, samen met de volgende gerelateerde gegevens: :relations. Dit heeft gevolgen voor rapporten.",
    "manually_prune"            => "Handmatig records verwijderen die aamgemaakt zijn voor",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Als deze instelling word inschakelt wanneer de pagina niet correct laadt, wordt SupportPal mogelijk onbereikbaar! ",
    "verify_frontend_loads"     => "Controleer of de frontend hieronder correct wordt geladen.",
    "twig_operator_signature"   => "Het {{ operator.signature|raw }} samenvoegveld wordt tijdens runtime verwerkt, waardoor het voorbeeld mogelijk onjuist is.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Hiermee kunt je meerdere merken in SupportPal beheren.",
    "no_branding"               => "Whitelabel",
    "no_branding_desc"          => "Verwijdert de SupportPal-branding van de klantgerichte kant van de helpdesk .",
    "multi_ip"                  => "Multi-IP Support",
    "multi_ip_desc"             => "Maakt het mogelijk om SupportPal te vergrendelen op meer dan één intern of extern IP-adres.",
    "purchase"                  => "kopen",
    "ticket_number_missing"     => "Voor ticketgerelateerde e-mails, zou het {{ ticket.number }} samenvoegveld aanwezig moet zijn in het E-mail onderwerp en moet verpakt zijn in een <em>[#{{ ticket.number }}]</em> of een <em>(#{{ ticket.number }})</em> om antwoorden naar het juiste ticket te leiden. Als je het ticketnummer wilt verwijderen, overweeg dan om <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a> in te schakelen.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Schakel de foutopsporingsmodus in om fouten weer te geven, gebruik deze alleen voor foutopsporing of als hierom wordt gevraagd door de ondersteuning. Fouten en andere nuttige logboekberichten worden anders opgeslagen in de toepassingslogboeken, die kunnen worden gedownload door naar Tools -> Logs -> Logboekbeheer te gaan.",
    "record_trash_relations"    => "De records worden naar de prullenbak verplaatst en vervolgens definitief verwijderd na :number dagen samen met de volgende gerelateerde gegevens: :relations. Dit heeft gevolgen voor rapporten.",
    "uninstall_plugable_warning" => "Het verwijderen van :plugable verwijdert alle bijbehorende bestanden en gegevens. We raden aan om in plaats daarvan de  :plugable uit te schakelen.",
    "web_settings_desc"         => "De webkanaalinstellingen zijn van toepassing op de frontend. Standaard zijn tickets toegankelijk voor iedereen die een unieke ticket-URL kent. Mogelijk wil je dit uitschakelen en gebruikers verplichten in te loggen voordat ze toegang krijgen tot ticketinformatie.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Voer een string in (een bepaald woord om te verbannen of een e-mailadres), alle strings zijn niet hoofdlettergevoelig.",
    "spam_is_regex_desc"        => "Regels kunnen profiteren van reguliere expressies; Schakel deze instelling in als je van plan bent dit te doen. Scheidingstekens zijn niet nodig.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "De bestand(en) konden niet worden geüpload vanwege een fout op de server. ",
    "insert_image"              => "Afbeelding toevoegen",
    "quote"                     => "Quote",
    "code"                      => "Code",
    "format"                    => "Opmaak",
    "paragraph"                 => "Paragraaf",
    "heading1"                  => "Kop 1",
    "heading2"                  => "Kop 2",
    "heading3"                  => "Kop 3",
    "heading4"                  => "Kop 4",
    "heading5"                  => "Kop 5",
    "heading6"                  => "Kop 6",
    "upload"                    => "Upload",
    "upload_label"              => "Sleep bestanden hier of klik om te uploaden",
    "more_formatting"           => "Meer Opmaak",
    "clearformat"               => "Opmaak verwijderen",
    "bold"                      => "Vet",
    "underline"                 => "Onderstrepen",
    "italic"                    => "Cursief",
    "strikethrough"             => "Doorhalen",
    "font_color"                => "Tekstkleur",
    "insert_link"               => "Link toevoegen",
    "edit_link"                 => "Link bewerken",
    "unlink"                    => "Link verwijderen",
    "orderedlist"               => "Geordende List",
    "unorderedlist"             => "Ongeordende List",
    "outdent"                   => "Inspringing verkleinen",
    "indent"                    => "inspringing vergroten",
    "lists"                     => "Lijsten",
    "edit_html"                 => "HTML bewerken",
    "sEmptyTable"               => "geen data gevonden",
    "sInfo"                     => "Toont _START_ - _END_ van de _TOTAL_ resultaten",
    "sInfoEmpty"                => "Toont 0 tot 0 van de 0 resultaten",
    "sInfoFiltered"             => "(gefilterd van _MAX_ totale resultaten)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Toon _MENU_ resultaten",
    "sLoadingRecords"           => "Laden...",
    "sProcessing"               => "Verwerken...",
    "sSearchPlaceholder"        => "Zoeken...",
    "sZeroRecords"              => "Geen overeenkomende records gevonden",
    "sSortAscending"            => ": activeren om oplopend te sorteren ",
    "sSortDescending"           => ": activeren om aflopend te sorteren ",
    "incoming_auto_reply"       => "Inkomend (automatisch antwoord)",
    "logo_dark_mode"            => "Logo donkere modus",
    "logo_dark_mode_desc"       => "Als je logo is ontworpen om alleen op een lichte achtergrond te werken, stel dan een ander logo in voor de donkere modus. Het veld kan een pad zijn ten opzichte van de basismap (we raden aan om uw logo op te slaan in de resources/assets/ map op te slaan) of een directe URL naar de afbeelding.",
    "template_mode"             => "Template Modes",
    "template_mode_desc"        => "Stel een standaard licht of donker thema in voor de interface. Gebruikers kunnen hun eigen voorkeur in hun profiel selecteren.",
    "light_mode"                => "Lichte Modes",
    "dark_mode"                 => "Donkere Modes",
    "logo"                      => "Logo",
    "logo_desc"                 => "Verander het standaardlogo voor dit merk. Het veld kan een pad zijn ten opzichte van de basismap (we raden aan om het logo in de resources/assets/ map op te slaan) of een directe URL naar de afbeelding.",
    "website_url"               => "Website URL",
    "website_url_desc"          => "Voeg een link terug naar je hoofdwebsite toe in de koptekst van de portal.",
    "back_to_website"           => "Terug naar de website",
    "template"                  => "Template",
    "how_can_we_help"           => "Hoe kunnen we helpen?",
    "ticket_desc2"              => "Het ticketoverzicht kan geordend worden naar persoonlijke voorkeur en gefilterd worden waar nodig.",
    "zip_extension_required"    => "ZIP PHP-extensie is niet geïnstalleerd. Installeer de extensie en probeer het opnieuw .",
    "zip_file_not_downloaded"   => "ZIP bestand kan niet worden gedownload. Controleer of je toegang hebt tot: :url",
    "plugin_basic_info"         => "Geef wat basisinformatie over je plugin.",
    "plugin_author_name"        => "Naam auteur",
    "plugin_author_uri"         => "Auteur URI (link naar je website)",
    "plugin_vendor_name"        => "Naam leverancier (naam van je bedrijf, kan hetzelfde zijn als je auteur naam)",
    "plugin_name"               => "Plugin Naam",
    "plugin_description"        => "Plugin omschrijving",
    "plugin_already_exists"     => "Plugin bestaat al!",
    "plugin_creating"           => "Plugin aanmaken...",
    "plugin_ready"              => "Plugin staat klaar in :directory!",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Intergratie met derden|Integraties met derden",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Maak authenticatiegegevens aan via de <a href=\":route\">Integratie met derden</a> pagina.",
    "oauth_data_missing"        => "De client-ID en / of het Client Secret zijn niet ingesteld en zijn vereist. Zodra deze is ingesteld volgens de onderstaande instructies, sluit je de pop-up en valideert je deze opnieuw.",
    "configure_after_brand_created" => "Dit kan worden geconfigureerd nadat het merk is gemaakt.",
    "get_access_token"          => "Toegangstoken opvragen",
    "reset_access_token"        => "Toegangstoken resetten",

    /*
     * 3.4.0
     */
    "brand_name"                => "Merknaam",
    "brand_name_desc"           => "De merknaam wordt gebruikt voor alle correspondentie met gebruikers. ",
    "supportpal_announcements"  => "SupportPal Aankondigingen",
    "add_selectize"             => "<strong>:item</strong> toevoegen...",
    "plugin_author_uri_short"   => "Auteur URI",
    "plugin_vendor_name_short"  => "Naam leverancier",
    "open_link_in_new_tab"      => "Open link in nieuw tabblad",
    "general_settings"          => "Algemene instellingen configureren",
    "configure_brand"           => "Merk configureren",
    "configure_department"      => "Afdeling configureren",
    "setup_cron"                => "Cron instellen",
    "channel_settings"          => "Ticketkanaalinstellingen bijwerken",
    "add_user"                  => "Nieuwe gebruiker toevoegen",
    "open_ticket"               => "Nieuwe ticket openen",
    "reply_ticket"              => "Reageren op ticket",
    "new_version_available"     => "Nieuwe versie beschikbaar",
    "new_version_desc"          => "Er is een nieuwe versie van SupportPal uitgebracht, we raden altijd aan om de installatie up-to-date te houden. <div class='description'>Als je deze melding negeert, wordt deze verborgen totdat er een nieuwere versie wordt uitgebracht.</div>",
    "download"                  => "Download",
    "acknowledge"               => "Negeren",
    "running_latest_version"    => "Je gebruikt de nieuwste versie.",
    "running_prerelease"        => "Je gebruikt een pre-release versie.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Resultaten per pagina",
    "class_name"                => "Klasse Naam",
    "possible_permission_issue" => "Je voert de opdracht uit als  \":cli_user\", terwijl \":path\" eigendom is van \":path_user\", dit kan leiden tot problemen met bestandsrechten.",
    "system_update"             => "Systeem Update",
    "system_update_desc"        => "Update SupportPal naar de nieuwste beschikbare versie.",
    "update_available"          => "Update beschikbaar",
    "up_to_date"                => "Up to Date",
    "release_notes"             => "Release Notities",
    "about_to_update_to"        => "Je staat op het punt bij te werken naar versie <strong>:version</strong>. Voorafgaand aan de update wordt automatisch een volledige systeemback-up gemaakt.",
    "waiting_for_update_start"  => "Update wordt gestart... Dit kan enkele minuten duren.",
    "binary_paths"              => "Systeempaden",
    "binary_paths_desc"         => "De omgevingsvariabele PATH wordt gebruikt om vereiste binaire bestanden te vinden. Als een of meer binaire bestanden niet kunnen worden gevonden, kunt je het volledige pad voor elke binary opgeven.",
    "cron_makesure"             => "Voor hulp met instellen van de cron job, zie <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Cron Job Help</a>.",
    "cron_must_run_for_update"  => "De Cron Job moet actief zijn om deze functie te gebruiken .",
    "support_expired"           => "De ondersteuning en updates van je licentie zijn verlopen.",
    "update_permitted_version"  => "De licentie staat alleen updaten toe naar :version.",
    "update_renew_support"      => "Verleng de ondersteuning en updates om bij te werken naar de nieuwste versie van SupportPal.",
    "renew"                     => "verlengen",

);
