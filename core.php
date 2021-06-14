<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Korisnička podrška",
    "welcome"                   => "Dobrodošli u SupportPal",
    "welcome_desc"              => "Doneli ste pametnu odluku. Kliknite na start da biste započeli pregled platforme kroz naša podešavanja i funkcije.",

    // Dashboard
    "submit_ticket"             => "Pošalji tiket",
    "submit_ticket_desc"        => "Koristite ovaj obrazac da biste poslali tiket za podršku našem timu.",
    "track_ticket"              => "Praćenje tiketa",
    "track_ticket_desc"         => "Niste registrovani? Koristite svoju email adresu i broj tiketa da biste pratili status tiketa.",
    "my_tickets"                => "Moji tiketi",
    "my_tickets_desc"           => "Pregled svih tiketa. Ovde možete pronaći i aktivne i prethodno otvorene tikete.",
    "no_modules"                => "Nijedan modul nije aktivan.",
    "search_results"            => "Pretraži",
    "found_results"             => "Pronađeno :total rezultata",

    // Maintenance
    "maintenance"               => "Trenutno vršimo održavanje",
    "maintenance_desc"          => "Naš portal za podršku je privremeno nedostupan usled radova na održavanju. Hvala vam na strpljenju, uskoro se vraćamo.",
    "maintenance_active"        => "Mod održavanja je aktivan.",

    // About
    "license_status"            => "Status licence",
    "license_code"              => "Licencni kod",
    "change_license"            => "Promeni licencu",
    "license_info"              => "Informacije o licenci",
    "license_owner"             => "Vlasnik licence",
    "license_created"           => "Licenca kreirana",
    "license_type"              => "Tip licence",
    "branding"                  => "Brend",
    "license_expires"           => "Licenca ističe",
    "license_valid_ip"          => "Važeće IP adrese",
    "support_status"            => "Status podrške",
    "support_expires"           => "Podrška ističe",
    "version_info"              => "Verzija",
    "installed_version"         => "Instalirana verzija",
    "available_version"         => "Dostupna verzija",
    "monthly_product"           => "* Nakon plaćanja svih dospelih predračuna, datum isteka će se prilagoditi na mesečnom nivou.",

    // API Tokens
    "api_token"                 => "API token|API tokeni",
    "token"                     => "Token",
    "regenerate_token"          => "Ponovo generiši token",
    "access_level"              => "Nivo pristupa",
    "read_write"                => "Pregled & Izmena",
    "read_only"                 => "Samo pregled",

    // Spam Rules & Filtering
    "spam_rule"                 => "Spam pravilo|Spam pravila",
    "containing_text"           => "Sadrži tekst",
    "filter_new_message"        => "Novi tiket (od korisnika)",
    "filter_new_comment"        => "Novi samouslužni komentar (od korisnika)",
    "filter_user_login"         => "Prijava za korisnike",
    "filter_operator_login"     => "Prijava za agente",
    "filter_api_access"         => "API pristup",
    "content"                   => "Sadržaj",
    "sender"                    => "Pošiljalac",
    "content_sender"            => "Sadržaj & Pošiljalac",

    // Company
    "company"                   => "Kompanija|Kompanije",

    // Email
    "default_email_addr"        => "Podrazumevana email adresa",
    "default_email_addr_desc"   => "Email adresa koja će se koristiti kao primarna adresa za slanje poruka od strane sistema.",
    "include_operator_name"     => "Prkaži ime agenta podrške",
    "include_operator_name_desc" => "Uključite ime agenta u email polje „Od“ prilikom slanja odgovora na tiket. Na primer: Od: Petar Petrović (agent podrške)",
    "include_dept_name"         => "Prikaži odeljenje",
    "include_dept_name_desc"    => "Uključite ime odeljenja u polje „Od“. Imajte na umu da će ovo obično stvoriti novi niz poruka ako dat tiket promeni odeljenje.",
    "global_email_header"       => "Globalno zaglavlje elektronske pošte",
    "global_email_header_desc"  => "Dodajte zaglavlje svim email porukama koje je sistem poslao. HTML je prihvaćen.",
    "global_email_footer"       => "Globalni footer elektronske pošte",
    "global_email_footer_desc"  => "Dodajte footer svim email porukama koje je sistem poslao. HTML je prihvaćen.",
    "email_template"            => "Email šablon|Email šabloni",
    "email_log"                 => "Email log",
    "email_queue"               => "Email na čekanju",
    "email_queue_desc"          => "Ispod se nalaze email poruke koje biti uskoro poslate od strane cron-a.",
    "email_method"              => "Email metod",
    "php_mail_function"         => "PHP mail() funkcija",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "SMTP Host",
    "smtp_port"                 => "SMTP Port",
    "smtp_encryption"           => "SMTP enkripcija",
    "smtp_requires_auth"        => "Obavezna autentifikacija",
    "smtp_username"             => "SMTP korisničko ime",
    "smtp_password"             => "SMTP lozinka",
    "ssl"                       => "SSL",
    "tls"                       => "TLS",
    "email_content"             => "Sadržaj emaila",
    "email_content_desc"        => "Unesite podrazumevani naslov i email adresu za ovaj šablon, a šablon možete napisati i na drugim jezicima. Ako šablon nije postavljen na drugom jeziku, koristiće podrazumevane podatke.",
    "outgoing"                  => "Odlazni",
    "incoming"                  => "Dolazni",
    "incoming_spam"             => "Dolazni (Odbijeno - Spam)",
    "incoming_throttled"        => "Dolazni (Odbijeno - Throttled)",
    "email_subject"             => "Naslov emaila",
    "twig_html_warning"         => "Twig nije dozvoljen unutar HTML oznaka / atributa i automatski će se ukloniti prilikom čuvanja.",

    // Modules
    "modules"                   => "Modul|Moduli",
    "modules_desc"              => "Ispod je lista svih dostupnih modula, kliknite ikonu za uređivanje da biste ažurirali postavke za modul.",
    "module_disable"            => "Onemogućeni moduli biće uklonjeni sa glavnog interfejsa i interfejsa agenata.",

    // Scheduled tasks
    "scheduled_task"            => "Planirani task|Planirani taskovi",
    "interval_desc"             => "Podesite koliko često će se ovaj zadatak izvoditi, na primer podešavanje od 5 minuta znači da će se zadatak pokretati svakih 5 minuta ako je cron aktivan i radi.",
    "cron_settings"             => "Cron podešavanja",
    "cron_running"              => "Uključen",
    "cron_not_running"          => "Nije uključen",
    "task_ran"                  => "Zakazani zadatak je uspešno ručno pokrenut.",
    "task_failed"               => "Pokušaj ručnog pokretanja zakazanog zadatka nije uspeo.",

    // Plugins
    "plugins"                   => "Dodatak|Dodaci",
    "installed_plugins"         => "Instalirani dodaci",
    "visit_plugin"              => "Poseti sajt",

    // Messages
    "last_activity"             => "Poslednja aktivnost",
    "send_to"                   => "Pošalji na",
    "inbox"                     => "Inbox",
    "compose"                   => "Nova poruka",

    // Utilities
    "utilities"                 => "Utilities",

    // System Cleanup
    "system_cleanup"            => "Sistemsko čišćenje",
    "system_cleanup_desc"       => "Koristite dostupne opcije za brisanje podataka koji možda više nisu potrebni ili željeni.",
    "files"                     => "Fajlovi",
    "files_desc"                => "Sledeće stavke se čuvaju kao fajlovi u fajl sistemu.",
    "logs"                      => "Logovi",
    "logs_desc"                 => "Sledeće stavke se čuvaju kao zapisi u bazi podataka.",
    "empty"                     => "Prazno",
    "prune"                     => "Očisti",
    "total_records"             => "ukupno zapisa",
    "system_cache"              => "Sistemska keš memorija",
    "system_cache_desc"         => "Koristi se za čuvanje sistemskih podataka koji se ne menjaju redovno kako bi se aplikacija ubrzala.",
    "template_cache"            => "Keš memorija šablona",
    "template_cache_desc"       => "Prethodno kompajlirane verzije šablona čuvaju se radi poboljšanja vremena učitavanja.",
    "attachments_desc"          => "Prilozi tiketa se čuvaju u fajlu sistemu, ali mogu zauzimati prostor, možete počistiti ove fajlove pre određenog datuma.",
    "system_activity_log_desc"  => "Čuva sve aktivnosti korisnika, agenata i samog sistema, možete da počistite zapise pre određenog datuma.",
    "email_log_desc"            => "Čuva sve dolazne i odlazne email poruke, možete da počistite zapise pre određenog datuma.",
    "operator_login_log_desc"   => "Čuva podatke svaki put kada se agent prijavi, možete počistiti zapise pre određenog datuma.",

    // Captcha
    "captcha"                   => "Captcha kod",
    "show_captcha"              => "Prikaži Captcha",

    // Widgets
    "dashboard"                 => "Glavna strana",
    "add_remove_widget"         => "Dodaj / Ukloni vidžet",
    "enable_tour"               => "Omogući pregled aplikacije",

    // Product Tour
    "dashboard_desc"            => "Tvoja lična početna strana. Vidžeti se mogu premeštati, smanjiti ili ukloniti!",
    "private_messages"          => "Privatne poruke",
    "messages_desc"             => "Privatne poruke su koristan način za razgovore 1 na 1 sa drugim agentima podrške.",
    "configure"                 => "Konfigurišite sistem za podršku",
    "configure_desc"            => "SupportPal sadrži brojna podešavanja koja vam omogućavaju da konfigurišete svoj sistem za podršku.",
    "default_email"             => "Podrazumevana email adresa",
    "default_email_desc"        => "Podrazumevana email adresa koja se koristi za odlaznu komunikaciju sa korisnicima.",
    "dept_settings_desc"        => "Shvatamo da odeljenja unutar vaše organizacije funkcionišu drugačije. Podešavanja odeljenja omogućavaju vam da zamenite globalna podešavanja.",
    "department_desc"           => "Odeljenja su slična onima u vašoj organizaciji. Ovo je korisno ukoliko želite da upiti korisnika brzo dođu do tačnog osoblja.",
    "department_email"          => "Email adrese odeljenja",
    "dept_email_desc"           => "Datom odeljenju može se dodeliti više email adresa. Prikupljanje email adresa izvršava se prema konfigurisanim adresama da bi se email poruke vaših kupaca povukle u korisnički sistem.",
    "dept_tmpl"                 => "Email šabloni za odeljenja",
    "dept_tmpl_desc"            => "Ponekad ćete možda želeti da promenite ili potpuno onemogućite email šablone za odeljenja. Možete definisati email predloge za određene odeljenja i omogućiti ih ovde.",
    "schedule_task_desc"        => "Planirani taskovi se koriste za automatizaciju različitih procesa unutar SupportPal-a, uključujući prikupljanje tiketa zasnovanih na email adresi.",
    "schedule_task_2"           => "Zakazani taskovi zahtevaju da se kreira cron da bi mogli da funkcionišu. Interval za svaki zadatak koji izvršava cron može se prilagoditi putem obrasca za uređivanje.",
    "schedule_task_cron"        => "Cron",
    "schedule_task_3"           => "Napravite cron na vašem serveru sličan primeru dole, da bi se planirani zadaci automatski pokretali.",
    "ticket_channel_desc"       => "Tiket kanali su metod kreiranja tiketa. Oni se lako mogu proširiti tako da uključuju vaše kanale, na primer tikete otvorene putem Instagrama.",
    "ticket_channel_2"          => "SupportPal nudi listu podrazumevanih kanala. Ukoliko želite, možete konfigurisati i aktivirati Facebook i Twitter kanale za prikupljanje tiketa generisanih putem društvenih mreža",
    "user_desc"                 => "Ovde se prikazuju korisnici koji komuniciraju sa sistemom. Možete da dodajete, uređujete i brišete korisnike po potrebi.",
    "organisation_desc"         => "Korisnici se mogu dodeliti organizacijama što im omogućava pristup tiketima koje su otvorili drugi korisnici u njihovoj organizaciji.",
    "operator_desc"             => "Ostali članovi se mogu ovde dodati kao agenti, zajedno sa podešavanjem odeljenja u kojem su raspoređeni.",
    "ticket_desc"               => "Spisak relevantnih tiketa.",
    "ticket_toolbar"            => "Alatke",
    "ticket_desc3"              => "Grupne radnje se mogu izvoditi na tiketima pomoću trake sa alatkama.",
    "tour_complete"             => "Tura je završena!",
    "tour_complete_desc"        => "Hvala što koristite SupportPal.<br /><br />Sada vam preporučujemo da sledite donji vodič kako biste konfigurisali svoj sistem korisničke podrške .",

    // IP Ban
    "ip_ban_time_desc"          => "Zabrana je trajna ili privremena.",
    "expiry"                    => "Ističe",
    "expired"                   => "Istekao",
    "expiry_time"               => "Ističe za",
    "expiry_time_desc"          => "Vreme kada zabrana ističe, ako datum nije postavljen ili je u prošlosti, automatski će biti postavljeno na 24 sata od sada.",
    "permanent"                 => "Trajno",

    // Languages
    "no_enabled_languages"      => "Neuspešno promena :item. U svakom trenutku mora biti omogućen najmanje jedan jezik.",

    // General Settings
    "locale"                    => "Lokalizacija",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Admin folder",
    "admin_folder_desc"         => "Podesite ime foldera za panel agenata za podršku. Set the folder name for the operator panel. Preporučuje se promena sa podrazumevane vrednosti \"admin\".",
    "enable_ssl"                => "Omogući SSL",
    "maintenance_mode"          => "Mod održavanja",
    "maintenance_mode_desc"     => "Onemogućava korisničku podršku i prikazuje obaveštenje o održavanju. Uredite resources / templates / frontend / [template] /core/maintenance.tvig da biste promenili poruku koja se prikazuje korisnicima.",
    "default_user_country"      => "Podrazumevana zemlja korisnika",
    "default_user_country_desc" => "Država koja će biti izabrana kada se korisnici registruju.",
    "system_timezone"           => "Sistemska vremenska zona",
    "system_timezone_desc"      => "Podrazumevana vremenska zona koja se primenjuje u celom sistemu. Agenti mogu da promene vremensku zonu u svojim ličnim podešavanjima.",
    "date_format"               => "Format datuma",
    "date_format_desc"          => "Format datuma koji se koristi globalno.",
    "time_format"               => "Format vremena",
    "time_format_desc"          => "Format vremena koji se koristi globalno.",
    "simpleauth_key"            => "SimpleAuth ključ",
    "simpleauth_key_desc"       => "Ključ za opciju single-on, najmanje 16 znakova.",
    "simpleauth_operators"      => "Omogući za agente",
    "base_url"                  => "Sistemski URL",
    "base_url_desc"             => "Unesite punu veb adresu vaše instalacije koja se koristi za generisanje URL-ova koji se šalju korisnicima.",
    "debug"                     => "Debug",
    "debug_mode"                => "Debug mod",
    "pretty_urls"               => "Pretty URLs",
    "pretty_urls_desc"          => "Omogućavanje će ukloniti index.php iz URL-ova, omogućite samo ako ste u mogućnosti da pristupite korisničkoj tabli bez index.php. Onemogućite ako nemate instaliran mod_revrite ili ako .htaccess datoteke nisu dozvoljene ili nisu pretvorile Apache .htaccess pravila prepisivanja za rad sa vašim alternativnim veb serverom.",

    /*
     * 2.0.2
     */
    "cron_makesure"             => "Za pomoć pri registraciji cron-a, molimo pogledajte <a target='_blank' href='https://docs.supportpal.com/current/New+Installation#CronJob'>Cron Job Pomoć</a>.",
    "widget"                    => "Vidžet|Vidžeti",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "Omogućavanje ove funkcije znači da će čitav sistem morati da koristi sigurnu vezu kao preporučeno podešavanje. Pre omogućavanja, osigurajte da HTTPS na vašem serveru ispravno funkcioniše .",
    "unexpected_template_error" => "Došlo je do neočekivane greške pri sintaksnoj proveri štablona. Pokušajte ponovo.",
    "empty_template_preview"    => "Navedite važeći šablon da biste koristili funkciju pregleda.",
    "no_department_address"     => "Pronalaženje adrese odeljenja na listi primalaca nije uspelo.",
    "email_loop_detected"       => "Otkrivena petlja - email poslat sa adrese odeljenja.",
    "email_ticket_locked"       => "Tiket je zaključan. Korisnik je zamoljen da otvori novi tiket putem emaila.",
    "email_no_body"             => "Identifikacija sadržaja email poruke nije uspela.",
    "email_runtime_error"       => "Došlo je do greške prilikom kreiranja tiketa/odgovora.",
    "email_reply_disabled"      => "Odgovori korisnika putem emaila su onemogućeni za ovo odeljenje.",
    "email_throttled"           => "Previše dolaznih email poruka od korisnika. Granica je :max_requests poruka na svakih :decay_time minuta.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Uredite podešavanja koja se primenjuju na čitav SupportPal. Ako želite da promenite podešavanja za određeni odeljak, npr. Tiketi, otvorite odeljak u sidebar-u da biste videli dostupna podešavanja za taj modul. Postavke vezane za vaše brendove možete pronaći klikom na Brendovi u sidebar-u",
    "brand"                     => "Brend|Brendovi",
    "brand_desc"                => "Brend je vaš identitet kojim se predstavljte korisnicima u okviru SupportPal-a, omogućavajući tako nekoliko kanala komunikacije. Jedinstveni  korisnički panel pruža mogućnost upravljanja sa više brednova u isto vreme.",
    "default_brand"             => "Podrazumevani brend",
    "default_brand_desc"        => "Izaberite brend koji će se podrazumevano koristiti kada posetioci posete korisnički sistem ili kada drugi brend nije moguće pronaći.",
    "brand_enabled_desc"        => "Prebacite da biste omogućili ili onemogućili brend. Onemogućeni brendovi se ne mogu koristiti i neće se računati kao deo brendova dozvoljenih na vašoj licenci, onemogućavanje se može koristiti za privremeno skrivanje brenda i/ili zadržavanje informacija. Brisanjem brenda ukloniće se sve informacije, uključujući korisnike i tikete koje su povezane s njim.",
    "inherit_global_setting"    => "Nasledi globalno podešavanje",
    "brand_date_format_desc"    => "Format datuma koji se koristi za ovaj brend.",
    "brand_time_format_desc"    => "Format vremena koji se koristi za ovaj brend.",
    "brand_timezone"            => "Vremenska zona",
    "brand_timezone_desc"       => "Vremenska zona koja se podrazumevano koristi na interfejsu, korisnici će imati mogućnost da sami odaberu svoju vremensku zonu.",
    "brand_default_lang_desc"   => "Jezik koji se podrazumevano koristi na interfejsu.",
    "brand_lang_toggle_desc"    => "Jezik koji se nalazi na interfejsu.",
    "brand_groups_desc"         => "Agenti u izabranim grupama moći će da kreiraju, ažuriraju i brišu (u zavisnosti od dozvola uloga) tikete i drugi sadržaj ovog brenda.",
    "select_brand"              => "Odaberi brend...",
    "add_another_language"      => "Dodaj drugi jezik...",
    "mass_email_brand_desc"     => "Izaberite koji brend će slati email poruke. Podešavanje će se koristiti za kreiranje imena i email adrese, učitavanje ispavnog šablona email poruka i u poljima za objedinjavanje. Ako pošaljete email korisničkog grupi, samo korisnici koji pripadaju izabranom brendu će dobiti email.",
    "brand_limit_exceeded"      => "Vaša licenca dozvoljava upotrebu samo :allowed brendova istovremeno. Da biste kupili dokupili brend, posetite našu klijentsku zonu.",
    "additional_brands"         => "Dodatni brend",
    "purchase_more"             => "Kupi",  
    "brand_limit_allowed"       => "Vaša licenca dozvoljava upotrebu samo :allowed brendova istovremeno.|Vaša licenca dozvoljava upotrebu samo :allowed brendova istovremeno.",
    "brand_limit_purchase"      => "Ukoliko je došlo do greške molimo <strong>izvršite reizdavanje</strong> licence u okviru <a href='http://www.supportpal.com/manage/' target='_blank'>klijentske zone</a> i posetite adresu <a href=':route'>Informacije o licenci</a> page da biste sinhronizovali vaš sistem podrške sa našim serverom licenci.<br />Za kupoivinu dodatnih brendova <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'>kliknite ovde</a>.",
    "support_expiry"            => "Vaša pretplata za podršku i ažuriranja važi do :date.",
    "support_status_desc"       => "Molimo <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>obnovite svoju pretplatu</a> kako biste imali pristup podršci i ažuriranim verzijama.",
    "ip_ban"                    => "IP ban|IP Ban",
    "ip_whitelist"              => "IP Bela lista",
    "whitelisted_ip"            => "IP adrese na beloj listi",
    "license_path"              => "Putanja instalacije",
    "php_info"                  => "PHP informacije",
    "log"                       => "Log|Logovi",
    "invalid_department_brand"  => "Odeljenje nije dodeljeno brendu.",
    "incoming_rejected"         => "Dolazni (Odbijeni)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Log fajl menadžer",
    "file_manager_desc"         => "Ispod možete da preuzmete ili izbrišete logove koje sistem skladišti tokom rada, a koji se mogu koristiti u svrhu otklanjanja grešaka. Log fajlovi se automatski prebacuju i čuvaju samo poslednjih 5 dana.",
    "app_logs"                  => "Logovi aplikacije",
    "app_logs_desc"             => "Sva upozorenja i greške usled korišćenja korisničkog servisa prijavljuju se ovde. Od vas će se možda zatražiti da navedete jedan ili više ovih logova kada zahtevate podršku.",
    "email_logs"                => "Email logovi",
    "email_logs_desc"           => "Detalji o dolaznoj elektronskoj pošti čuvaju se u ovim fajlovima kada se raščlanjuju i uvezuju kao tiketi.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Odgovori",
    "and_number_others"         => "i :number |i :number",
    "user_templates"            => "Korisnički šabloni",
    "operator_templates"        => "Šabloni agenata",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Veličina  priloga",
    "attachment_size_desc"      => "Maksimalna kumulativna veličina svih priloga koji se šalju u jednoj email poruci. Dostupne opcije su K (za kilobajte) i M (za megabajte), sve ostalo podrazumeva bajtove. Primer vrednosti: 5M za 5 megabajta. Podesite na 0 ukoliko ne želite da šaljete priloge putem emaila i zahtevate od korisnika da preuzimaju priloge.",
    "attachment_limit_reached"  => "Dosegnut je limit fajla (:size). Razmislite o slanju fajlova putem drugog medija (kao što je URL za preuzimanje).",
    "renew_support"             => "<a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>Obnova</a>",
    "no_existing_translations"  => "Nema postojećih prevoda.",
    "add_translation"           => "Dodaj prevod",
    "todo_list"                 => "To-Do lista",
    "version_check"             => "Provera verzije",
    "system_overview"           => "Pregled sistema",
    "getting_started"           => "Početak",
    "operator_notes"            => "Beleške agenta",
    "simpleauth_operators_desc" => "Dozvolite operaterima da se prijave i odjavljuju pomoću SimpleAuth-a. Preporučujemo da ovo ostane onemogućeno, osim ako je posebno ne koristite u tu svrhu.",
    "upgrade_and_reactivate"    => "Nadogradite i ponovo aktivirajte",
    "upgrade_pending"           => "Nadogradnja na čekanju",
    "locale_in_uri"             => "Uključi lokalizaciju u URI",
    "locale_in_uri_desc"        => "Onemogućite uklanjanje lokalizacije iz URI-ja, na primer: http://support.micompani.com/en/announcements postaje http://support.micompani.com/announcements. Može se onemogućiti samo ako u sistemu postoji jedan omogućeni jezik.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Ovaj jezik je trenutno postavljen kao podrazumevani jezik. Onemogućavanje će postaviti drugi omogućeni jezik kao podrazumevani jezik.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Omogućite JavaScript da biste koristili ovu stranicu.",
    "go_to_dashboard"           => "Idi na početnu",
    "brand_colour_desc"         => "Izaberite boju za svoj brend, ona će se koristiti kao šema boja na početnoj stranici i šablonima agenata. Ostavite prazno da biste koristili podrazumevanu šemu boja.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "Favicon slika se pojavljuje se u traci za adresu i koristi se za identifikaciju vašeg sajta. Za najbolje rezultate, uverite se da ikona sadrži niz veličina od 32x32px do 310x310px, da je kvadratna i u ICO/PNG formatu.",
    "view_original"             => "Pogledaj original",
    "download_original"         => "Peuzmi original",
    "consume_all"               => "Opciono unestie email adresu odeljenja sa omogućenim \"Consume All\" .",
    "reprocess_email"           => "Ponovo obradite poštu",
    "reprocess_email_desc"      => "Preporučujemo da pre pokušaja ponovne obrade pregledate šta je prvobitno blokiralo e-poštu i izvršite sve neophodne promene.",
    "email_blocked_desc"        => "Email poruka nije uspela da se pošalje nekoliko puta, mora da bude poslata ručno.",
    "captcha_type"              => "Tip captcha kadm5_modify_principal(handle, principal, options)",
    "captcha_type_desc"         => "Izaberite Captcha koji će se koristiti u celom sistemu. Preporučujemo prelazak na Google reCAPTCHA, koji zahteva dodatnu konfiguraciju.",
    "default_captcha"           => "Podrazumevani Captcha kod",
    "recaptcha_site_key"        => "Site ključ",
    "recaptcha_secret_key"      => "Tajni ključ",
    "recaptcha_desc"            => "Registrujte novi sajt na <a target='_blank' href=\"https://www.google.com/recaptcha/admin\">https://www.google.com/recaptcha/admin</a>, odaberite reCaptcha kod i dodajte domen brenda. Kopirajte sajt i tajni ključ gore.",
    "enter_code"                => "Unesi kod",
    "export_data"               => "Izvezi podatke",
    "export_data_desc"          => "Generišite export podataka koji pripadaju ovom korisniku.",
    "export_data_select"        => "Izaberite koje podatke želite da izvezete.",
    "export_data_scheduled"     => "Trenutno se generiše export, što može potrajati. Poslaćemo vam email poruku kada bude podaci budu dostupni za preuzimanje.",
    "database"                  => "Baza podataka",
    "database_desc"             => "Sledeće stavke se čuvaju u bazi podataka.",
    "prune_users"               => "Neaktivni korisnički zapisi mogu se automatski obrezati (prune). Korisnik se smatra neaktivnim ako se nije prijavio ili ima bilo kakvu drugu aktivnost određeno vreme.",
    "prune_tickets"             => "Neaktivni tiketi se mogu automatski obrezati. Tiket se smatra neaktivnim ako je rešen i nije imao aktivnost tokom određenog vremenskog perioda.",
    "prune_organisations"       => "Neaktivne organizacije mogu se automatski obrezati. Organizacija se smatra neaktivnom ako sa njom nije povezan nijedan korisnik i nije imala nijednu aktivnost određeno vreme.",
    "prune_export"              => "Export korisničkih podataka čuva se u fajl sistemu, ali može zauzimati prostor, možete da obrežete (prune) fajlove za export koji su generisani pre određenog datuma.",
    "automatically_prune"       => "Automatski obriši",
    "days_after_saved"          => "Zapisi nakon",
    "days_after_last_activity"  => "Neaktivni zapisi posle",
    "record_permanent_delete"   => "Zapisi će biti trajno izbrisani. Ovo će uticati na izveštaje.",
    "record_delete_relations"   => "Zapisi će biti trajno izbrisani zajedno sa sledećim povezanim podacima: :relations. Ovo može uticati na izveštaje.",
    "manually_prune"            => "Ručno izbrišite zapise kreirane ranije",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Ako omogućite ovo podešavanje, kada se stranica ne učita pravilno možete izgubiti pristup SupportPalu!",
    "verify_frontend_loads"     => "Molimo proverite da li se fontend pravilno učitava.",
    "twig_operator_signature"   => "{{ operator.signature|raw }} Polje za objedinjavanje biće obrađeno tokom izvođenja, pa pregled možda ne bude ispravan.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Omogućava postojanje drugih brendova na vašoj SupportPal instalaciji.",
    "no_branding"               => "Bez brendiranja",
    "no_branding_desc"          => "Uklanja oznaku SupportPal sa korisničkog sistema koji je vidljiv korisnicima.",
    "multi_ip"                  => "Multi-IP podrška",
    "multi_ip_desc"             => "Omogućava blokadu pristupa SupportPal-u sa više od jedne interne ili eksterne IP adrese.",
    "purchase"                  => "Kupovina",
    "ticket_number_missing"     => "Za email adrese povezane sa tiketima, polje objedinjavanja {{ ticket.number }} treba da bude prisutno u naslovu emaila i mora biti ili u formatu <em>[#{{ ticket.number }}]</em> ili <em>(#{{ ticket.number }})</em> da bi se odgovori preusmerili na ispravan tiket. Ako želite da uklonite broj tiketa, razmislite o omogućavanju <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'>email sub-addressing</a>.",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Omogućite debug mod za prikazivanje grešaka koji se može koristiti za otklanjanje grešaka ili ako je to naložila podršk. Greške i druge log poruke se inače čuvaju u logovima aplikacije, a njih možete preuzeti na ruti Utilities -> Logs -> Log File Manager.",
    "record_trash_relations"    => "Zapisi će biti premešteni u otpad, a zatim trajno izbrisani nakon :number dana, zajedno sa sledećim povezanim podacima: :relation. Ovo će uticati na izveštaje.",
    "uninstall_plugable_warning" => "Deinstalacija :plugable izbrisaće sve povezane datoteke i podatke. Preporučujemo da deinstalirate :plugable umesto toga.",
    "web_settings_desc"         => "Podešavanja support kanala se primenjuju na frontendu. Podrazumevano, tiketima može pristupiti svako ko zna jedinstveni URL tiketa. Možda ćete želeti da ovo onemogućite i zahtevate od korisnika da se prijave pre nego što pristupe informacijama iz tiketa.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Unesite niz (određenu reč za zabranu ili adresu e-pošte), svi nizovi ne razlikuju velika i mala slova.",
    "spam_is_regex_desc"        => "Pravila mogu koristiti regularne izraze; ako to nameravate da omogućite, omogućite ovo podešvanje. Ne morate da uključite graničnike.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Fajlovi nisu podignuti zbog greške na serveru.",
    "insert_image"              => "Ubaci sliku",
    "quote"                     => "Citat",
    "code"                      => "Kod",
    "format"                    => "Format",
    "paragraph"                 => "Paragraf",
    "heading1"                  => "Naslov 1",
    "heading2"                  => "Naslov 2",
    "heading3"                  => "Naslov 3",
    "heading4"                  => "Naslov 4",
    "heading5"                  => "Naslov 5",
    "heading6"                  => "Naslov 6",
    "upload"                    => "Dodaj",
    "upload_label"              => "Prevuci fajlove ovde ili klikni na Dodaj",
    "more_formatting"           => "Više formatiranja",
    "clearformat"               => "Obriši formatiranje",
    "bold"                      => "Bold",
    "underline"                 => "Underline",
    "italic"                    => "Italic",
    "strikethrough"             => "Strikethrough",
    "font_color"                => "Boja slova",
    "insert_link"               => "Dodaj link",
    "edit_link"                 => "Promeni link",
    "unlink"                    => "Ukloni link",
    "orderedlist"               => "Lista po redu",
    "unorderedlist"             => "Neuređena lista",
    "outdent"                   => "Outdent",
    "indent"                    => "Indent",
    "lists"                     => "Liste",
    "edit_html"                 => "Uredi HTML",
    "sEmptyTable"               => "Nema podataka u tabeli",
    "sInfo"                     => "Prikaz _START_ do _END_ od _TOTAL_ unosa",
    "sInfoEmpty"                => "Prikaz 0 do 0 od 0 unosa",
    "sInfoFiltered"             => "(filtrirano od _MAX_ ukupnih unosa)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Prikazivanje _MENU_ unosa",
    "sLoadingRecords"           => "Učitavanje...",
    "sProcessing"               => "Obrada...",
    "sSearchPlaceholder"        => "Pretraži...",
    "sZeroRecords"              => "Nije pronađen nijedan odgovarajući zapis",
    "sSortAscending"            => ": aktivirajte za sortiranje kolone uzlazno",
    "sSortDescending"           => ": aktivirajte za sortiranje kolone silazno",
    "incoming_auto_reply"       => "Dolazni (Auto-odgovor)",
    "logo_dark_mode"            => "Tamni režim Logotip",
    "logo_dark_mode_desc"       => "Ako je vaš logotip dizajniran da radi samo na svetloj pozadini, postavite drugi logotip za tamni režim. Polje može biti smešten na putanji u odnosu na osnovni direktorijum (preporučujemo da logotip smestite u resources/assets/folder) ili kao direktnu URL adresu slike.",
    "template_mode"             => "Šablon",
    "template_mode_desc"        => "Postavite podrazumevanu svetlu ili tamnu temu za interfejs. Korisnici će moći da odaberu sopstvene preference u svom profilu.",
    "light_mode"                => "Svetli režim",
    "dark_mode"                 => "Tamni režim",
    "logo"                      => "Logotip",
    "logo_desc"                 => "Promenite podrazumevani logotip za ovaj brend.. Logotip može biti smešten na putanji u odnosu na osnovni direktorijum (preporučujemo da logotip smestite u resources/assets/folder) ili kao direktnu URL adresu slike.",
    "website_url"               => "Adresa sajta",
    "website_url_desc"          => "Dodajte link ka svom sajtu pri vrhu portala za podršku.",
    "back_to_website"           => "Povratak na sajt",
    "template"                  => "Šablon",
    "how_can_we_help"           => "Kako vam možemo pomoći?",
    "ticket_desc2"              => "Tikete možete prikazati prema svojim željama i filtrirati po potrebi.",
    "zip_extension_required"    => "Zip PHP dodatak nije instaliran. Instalirajte ga i pokušajte ponovo.",
    "zip_file_not_downloaded"   => "Zip fajl nije mogao da se preuzme. Proverite da li ste u mogućnosti da pristupite::url",
    "plugin_basic_info"         => "Navedite neke osnovne informacije o vašem dodatku.",
    "plugin_author_name"        => "Ima autora",
    "plugin_author_uri"         => "URL autora (link ka sajtu)",
    "plugin_vendor_name"        => "Ime dobavljača (naziv vaše kompanije, može biti isto kao ime autora)",
    "plugin_name"               => "Naziv alatke ",
    "plugin_description"        => "Opis alatke",
    "plugin_already_exists"     => "Alatka već postoji!",
    "plugin_creating"           => "Kreiranje alatke...",
    "plugin_ready"              => "Alatka se nalazi u :directory!",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Third-Party integracija|Third-Party integracije",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth podaci",
    "client_id"                 => "ID klijenta",
    "client_secret"             => "Tajno pitanje",
    "create_credentials"        => "Molimo kreirajte kredencijale za potvrdu identiteta putem <a href=\":route\">Third-Party integracija</a> stranice.",
    "oauth_data_missing"        => "ID klijenta i / ili tajno pitanje nisu postavljeni, a potrebni su. Kada ih podesite prema uputstvima u nastavku, zatvorite iskačući prozor i ponovo potvrdite.",
    "configure_after_brand_created" => "Ovo se može konfigurisati nakon kreiranja brenda.",
    "get_access_token"          => "Nabavite pristupni token",
    "reset_access_token"        => "Resetujte token pristup",

    /*
     * 3.4.0
     */
    "brand_name"                => "Ime brenda",
    "brand_name_desc"           => "Ime vašeg brenda koristi se za svu prepisku sa korisnicima.",
    "supportpal_announcements"  => "SupportPal obaveštenja",
    "add_selectize"             => "Dodaj <strong>:item</strong>...",
    "plugin_author_uri_short"   => "URI autora",
    "plugin_vendor_name_short"  => "Ime prodavca",
    "open_link_in_new_tab"      => "Otvori link u novoj kartici",
    "general_settings"          => "Opšta podešavanja",
    "configure_brand"           => "Konfiguriši brend",
    "configure_department"      => "Konfiguriši odeljenje",
    "setup_cron"                => "Podesi cron job",
    "channel_settings"          => "Ažuriraj podešavanja odeljenja",
    "add_user"                  => "Dodaj novog korisnika",
    "open_ticket"               => "Otvori novi tiket",
    "reply_ticket"              => "Odgovori na tiket",
    "new_version_available"     => "Nova verzija je dostupna",
    "new_version_desc"          => "Objavljena je nova verzija SupportPal-a, uvek preporučujemo da ažurirate svoju instalaciju.<div class='description'>Prihvatanjem ovog obaveštenja skrivaćete isti dok ne izađe novija verzija.</div>",
    "download"                  => "Preuzmi",
    "acknowledge"               => "Priznanja",
    "update_available"          => "Najnovija dostupna verzija je :version.",
    "running_latest_version"    => "Koristite najnoviju verziju.",
    "running_prerelease"        => "Koristite verziju pre izdavanja.",

);
