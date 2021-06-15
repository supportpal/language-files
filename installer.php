<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Sistemski zahtevi nisu uspeli",

    // Index
    "supportpal_installer"      => "SupportPal instalacija",
    "select_language"           => "Izaberite jezik",
    "install_type"              => "Tip instalacije",
    "install"                   => "Nova instalacija",
    "upgrade"                   => "Nadogradnja postojeće instalacije",
    "support"                   => "Kod licence koji se koristi za ovu instalaciju nema podršku &amp; mogućnosti za nadogradnju, i kao takav, ne ispunjava uslove za instalaciju ove verzije SupportPal-a. Molimo <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>obnovite</a> verziju ili vratite svoje instalacione fajlove.",

    // Upgrade
    "successfully_updated"      => "Čestitamo, SupportPal je uspešno nadograđen.",

    // Install
    // Step 1
    "step_1"                    => "Korak 1 od 7: Prihvati EULA",
    "step_1_desc"               => "Molimo pročitajte naš ugovor o licenci i korišćenju u nastavku. Ako nastavite, pristajete na isti.",
    "i_accept_and_continue"     => "Prihvatam, nastavi dalje",

    // Step 2
    "step_2"                    => "Korak 2 od 7: Sistemski zahtevi",
    "not_available"             => "Nije dostupno",
    "php_version"               => "PHP verzija",
    "php_version_not_found"     => "Pronađena PHP verzija :version nije dostupna",
    "php_extensions"            => "PHP ekstenzije",
    "file_writeable"            => "Dozvole",
    "file_writeable_desc"       => "Sve dole navedeno bi trebalo da bude zapisano na veb serveru. Preporučujemo upotrebu 755 dozvole za fajlove, iako neki sistemi mogu zahtevati 777 ako fajlovi nisu u vlasništvu korisnika veb servera. Direktorijumi bi se trebali rekurzivno pisati",

    // Step 3
    "step_3"                    => "Korak 3 od 7: Baza podataka",
    "step_3_desc"               => "Unesite detalje baze podataka koju ste postavili za SupportPal.",
    "hostname"                  => "Hostname",
    "port"                      => "Port",
    "port_desc"                 => "(Promenite samo ako nije podrazumevani port 3306)",
    "database"                  => "Baza podataka",
    "database_not_empty"        => "Baza podataka ne sme sadržati nikakve tabele.",

    // Step 4
    "step_4"                    => "Korak 4 od 7: Kreiranje tabela",
    "step_4_desc"               => "Migracija će se izvršiti u pozadini i detaljnom dnevniku napisanom u nastavku, što može potrajati nekoliko minuta. Kada se proces završi, kliknite na dugme za nastavak.",

    // Step 5
    "step_5"                    => "Korak 5 od 7: Nalog agenta podrške",
    "step_5_desc"               => "SupportPal za svoj rad zahteva važeću licencu, unesite je ispod.",
    "license_desc"              => "Vaš SupportPal licencni ključ ima 23 karaktera i počinje sa SP-",
    "operator_desc"             => "Otvorite administratorski nalog za korisnički panel tako što ćete uneti sve detalje u nastavku.",
    "validating_license"        => "Validacija licence...",

    // Step 6
    "step_6"                    => "korak 6 od 7: Brzo podešavanje",
    "step_6_desc"               => "Unesite detalje o svojoj kompaniji i veb sajtu u nastavku.",
    "locale_desc"               => "Postavite lokalna podešavanja za vaš sistem.",
    "operator_success"          => "Vaš administratorski nalog je kreiran.",

    // Step 7
    "step_7"                    => "Korak 7 od 7: Instalacija uspešna!",
    "successfully_installed"    => "Čestitamo, SupportPal je uspešno instaliran.",
    "operator_panel"            => "Panel agenata podrške",
    "help_desc"                 => "Ako vam treba bilo kakva pomoć u konfigurisanju ili korišćenju SupportPal-a, imamo dva glavna izvora informacija:",
    "submit_a_ticket"           => "Pošalji tiket",

    /*
     * 2.0.1
     */

    "post_install"              => "Da bi sistem pravilno funkcionisao, mora se podesiti cron job. Molimo pročitajte ove <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'>korake nakon instalacije</a> za detalje o ovom i drugim preporučenim radnjama za poboljšanje funkcionalnosti i sigurnosti.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Ispunili ste :required od :total obaveznih zahteva.",
    "optional_requirements"     => "Ispunili ste :optional od :total opcionalnih zahteva.",
    "both_requirements"         => "Ispunili ste :required od :total_required obaveznih zahteva i :optional od :total_optional opcionalnih zahteva.",
    "php_version_is"            => "PHP verzija je :version.",
    "enabled"                   => "Uključeno",
    "disabled"                  => "Isključeno",
    "php_settings"              => "PHP podešavanja",
    "ipv6_support"              => "IPv6 podrška",
    "memory_limit"              => ">= 128MB memorije",
    "memory_limit_error"        => "Memorijski limit ':limit'.",
    "permission_denied"         => "Pristup odbijen",
    "writable"                  => "Otvoreno za pisanje",
    "help_php_version"          => "Za pomoć pri instaliranju nove verzije PHP-a obratite se svom hosting provajderu ili administratoru servera.",
    "help_php_extensions"       => "PHP ekstenzije se razlikuju u zavisnosti od vašeg servera, vašeg hosting provajdera i drugih sistemskih promenljiva. Za pomoć prilikom instaliranja dodataka koji nedostaju kontaktirajte hosting provajdera ili administratora servera.",
    "help_php_settings"         => "Za dodatnu pomoć, pročitajte <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Pomoć PHP podešavanja</a>.",
    "disabled_functions"        => "Onemogućene funkcije",
    "help_mysql_version"        => "Za pomoć pri instaliranju nove verzije MySQL-a obratite se svom hosting provajderu ili administratoru servera.",
    "mysql_version"             => "MySQL verzija",
    "mysql_version_not_found"   => "Nije dostupno, pronađena sledeća MySQL verzija :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Ako vaš server ima podršku za IPv6 umrežavanje, instalirajte ekstenziju php-sockets.",
    "email_address_desc"        => "Unesite svoju glavnu email adresu kompanije, ona će biti postavljena kao zadata email adresa za slanje i email adresa u vašem prvom odeljenju. Kasnije ćete moći da dodate druge email adrese.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "ionCube Loaders verzija :required ili novija verzija. Pronađena: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "PNG & JPEG podrška",
    "allow_url_fopen"           => "'allow_url_fopen' omogućeno",
    "allow_url_fopen_failure"   => "Omogući 'allow_url_fopen' u php.ini fajlu za korišćenje Gravatara i drugih funkcionalnosti.",
    "allowed_methods"           => "HTTP dozvoljene metode",
    "help_allowed_methods"      => "Vaš veb server mora dozvoliti sve dole navedene HTTP metode. Molimo proverite stranicu <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'>Nova instalacija</a> za više informacija.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Verzija servera >= :min",
    "mysql_server_version_desc" => "MySQL :min ili nova verzija je neophodna za funkcionisanje SupportPal. Pronađena: ':version'.",
    "mysql_client_version"      => "Klijentska verzija >= :min (:mysqlnd_min za MySQLnd)",
    "mysql_client_version_desc" => "MySQL klijentska verzija :min ili novija (:mysqlnd_min za MySQLnd) je neophodna za funkcionisanje SupportPal. Pronađena: ':version'.",

    "upgrade_step"              => "Korak :num od :total: ",
    "accept_eula"               => "Prihvati EULA",
    "system_requirements"       => "Sistemski zahtevi",
    "update_database"           => "Ažuriraj bazu podataka",
    "upgrade_complete"          => "Uspešno",

    "upgrade_support"           => "Ako imate problema ili vam zatreba pomoć u korišćenju novih funkcija u SupportPal-u, pročitajte našu dokumentaciju ili otvorite novi tiket.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Pritisnite dugme ispod za početak.",
    "locked"                    => "Instalacija u toku",
    "locked_desc"               => "Pronađen zaključan fajl (:path).\nProverite da li instalacioni program već nije pokrenut.\n\nOvaj fajl možete izbrisati kada budete sigurni da druga instalacija ili nadogradnja nije u toku.",

    "possible_permission_issue" => "[UPOZORENJE] Izgleda da ovu komandu pokrećete kao root ili kao drugi korisnik. Komandu mora da izvrši pravi korisnik da bi veb server imao mogućnost čitanja i pisanja u sistemu nakon toga.",
    "error_and_empty_database"  => "Došlo je do greške. Možda će biti neophodno da ispraznite bazu podataka pre ponovnog pokretanja.",
    "login_with_details"        => "Možete se prijaviti koristeći ranije navedene detalje.",
    "command_not_available"     => "Komanda nije dostupna. Ako mislite da je došlo do greške, pokrenite „php artisan cache: clear“, a zatim ponovo pokrenite ovu komandu.",
    "read_upgrade_guide"        => "Naš vodič za nadogradnju sadrži korisne informacije o promenama i najboljim praksama za nadogradnju: \nhttps: //docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[UPOZORENJE] Uverite se da ste napravili rezervnu kopiju Support baze podataka i fajlova pre nego što nastavite dalje. \nPotvrdite da posedujte rezervnu kopiju, da nije oštećena i da ste spremni da nastavite.",
    "error_and_revert_database" => "Došlo je do greške. Vratite bazu podataka nazad u rezervnu kopiju pre nego što počnete ponovo.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "Fajl za konfiguraciju baze podataka već postoji. Ako ste sigurni da aplikacija još nije instalirana, izbrišite /config/:environment/database.php i pokrenite ponovo.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Hvala vam što ste izabrali SupportPal. Proverite da li je tip instalacije tačan, a zatim kliknite na Nastavi.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migracija u toku",
    "migrated"                  => "Migracija završena",
    "database_setup_complete"   => "Postavljanje baze podataka je završeno.",
    "created_repository"        => "':name'repozitorijum uspešno kreiran.",
    "wish_to_continue"          => "Otkažite odmah ako ne razumete dalje implikacije! Komanda će se automatski nastaviti u suprotnom...",

);
