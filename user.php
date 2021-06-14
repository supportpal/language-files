<?php

return array(

    "user"                          => "Korisnik|Korisnici",
    "user_details"                  => "Detalji o korisniku",
    "add_user"                      => "Dodaj korisnika",
    "account_active"                => "Aktivan nalog",
    "account_active_desc"           => "Prebacite da biste omogućili i onemogućili pristup sekciji za autentifikaciju.",

    "op_settings_dept_desc"         => "Izaberite u kojim odeljenjima agent može da pregleda i odgovara na tikete.",

    "organisation"                  => "Organizacija|Organizacije",
    "members"                       => "Član|Članovi",
    "owner"                         => "Vlasnik",
    "manager"                       => "Menadžer",
    "access_level"                  => "Nivo pristupa",
    "access_level_desc"             => "Definišite nivo korisničkog pristupa u organizaciji na osnovu sledećih informacija:<br /><strong>Manadžer</strong> - Može da pregleda tikete koje su otvorili svi korisnici u organizaciji i upravlja korisnicima<br /><strong>Korisnik</strong> - Možete pregledati tikete koje je lično otvorio",
    "manage_organisation"           => "Upravljaj organizacijom",
    "leave_organisation"            => "Napusti organizaciju",
    "user_membership"               => "Korisničko članstvo",
    "transfer_ownership"            => "Prenos vlasništva",
    "transfer_ownership_desc"       => "Kao trenutni vlasnik organizacije, ne možete biti uklonjeni kao menadžer i samo vi možete izbrisati organizaciju. Možete preneeti vlasništvo nad organizacijom na nekog drugog, ali imajte na umu da se ova radnja ne može poništiti.",
    "transfer_ownership_operator"   => "Samo vlasnik može izbrisati organizaciju i ne može biti uklonjen iz nje. Koristite ovu opciju da biste dodelili vlasništvo drugom korisniku u organizaciji.",
    "start_typing_name"             => "Počnite da kucate ime...",
    "organisation_add_user"         => "Dodaj korisnika",
    "organisation_desc"             => "Svaka organizacija može imati <strong>menadžere</strong>, koji mogu da upravljaju korisnicima i čitaju i odgovaraju na svoje i tuđe tikete i <strong>korisnike</strong>, koji mogu otvoriti tikete, ali ne mogu čitati ili odgovarati na tuđe tikete.",
    "organisation_operator_desc"    => "Dodajte postojeće korisnike u ovu organizaciju klikom na \"Add User\", imajte na umu da će dodavanje korisnika ukloniti sve veze koje je korisnik imao sa drugom organizacijom.",
    "organisation_user_desc"        => "<strong>Menadžer</strong> - Može da upravlja drugim korisnicima i pregleda&amp; odgovor na tikete drugog korisnika.<br /><strong>Korisnik</strong> - Ulaznice može otvoriti samo u ime organizacije i odgovoriti samo na svoje ulaznice.",
    "send_password_reset"           => "Pošalji link za resetovanje lozinke",

    "profile"                       => "Profil",
    "phone"                         => "Broj telefona",

    "login"                         => "Prijava",
    "remember_me"                   => "Zapamti me",
    "logout"                        => "Odjava",
    "return_to_login"               => "Vrati se na prijavljivanje",

    "user_register_disabled"        => "Žao nam je, registracija korisnika je trenutno onemogućena.",
    "success_register"              => "Nalog je uspešno registrovan!",
    "register_now"                  => "Registruj se sada",
    "register"                      => "Registracija",
    "register_account"              => "Registrujte nalog",
    "signed_up"                     => "Prijava",
    "last_active"                   => "Poslednji put aktivan",

    "forgot_password"               => "Zaboravljena lozinka?",
    "reset_password"                => "Ponovno slanje lozinke",
    "set_password"                  => "Generiši lozinku",
    "please_set_password"           => "Molimo generišite novu lozinku u nastavku.",
    "missing_email_or_reset"        => "Nedostaje email adresa ili token.",

    "firstname"                     => "Ime",
    "lastname"                      => "Prezime",
    "formatted_name"                => "Ime (formatirano)",
    "country"                       => "Država",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Potvrdi lozinku",

    "confirmed"                     => "Potvrđeno",
    "unconfirmed"                   => "Nije potvrđeno",

    "group"                         => "Korisnička grupa|Korisničke grupe",
    "group_members"                 => "Članovi",
    "operator_group"                => "Grupa agenata|Grupe agenata",
    "add_group"                     => "Dodaj u grupu",

    "customfield"                   => "Korisničko prilagođeno polje|Korisnička prilagođena polja",
    "customfield_order"             => "Prevucite da biste promenili redosled prilagođenih polja koja se prikazuju korisnicima.",

    "role"                          => "Uloga|Uloge",

    "operator_login_log"            => "Logovi prijava agenata",
    "system_activity_log"           => "Aktivnost sistema",
    "activity_log"                  => "Aktivnosti",

    "mass_email"                    => "Pošalji masovni email",
    "send_email"                    => "Pošalji email",
    "choose_template"               => "Odaberi šablon...",

    "ldap_account"                  => "LDAP nalog|LDAP nalozi",
    "ldap_operator_desc"            => "Pretraži postojeće agente ili kreiraj novog.",
    "ldap_server"                   => "LDAP server",
    "ldap_server_desc"              => "Hostname servera. Možete i da navedete pun LDAP URI. Na primer: ldaps://ldap.server:1234/ povezaće se preko SSL-a na port 1234 .",
    "ldap_username"                 => "LDAP korisničko ime",
    "ldap_username_desc"            => "Korisničko ime koje će agent koristiti za prijavu (njihovo LDAP korisničko ime.)",
    "ldap_rdn"                      => "LDAP RDN ili DN",
    "ldap_rdn_desc"                 => "Istaknuti nazivi za LDAP korisničko ime, npr: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP detalji",

    "operator_details"              => "Detalji o agentu",

    "email_notifications"           => "Email obaveštenja",
    "email_notifications_desc"      => "Email obaveštenja primljena od sistema.",

    "enable_ldap"                   => "Omogući LDAP prijavu ",
    "enable_ldap_desc"              => "Ako koristite LDAP, možete ga omogućiti za prijavu agenata. Nakon aktivacije, idite na stranicu sa podešavanjima biste konfigurisali LDAP prijavu.",
    "user_reg_enabled"              => "Registracija korisnika omogućena",
    "user_reg_enabled_desc"         => "Dozvolite novim korisnicima da registruju nalog u interfejsu.",
    "user_reg_captcha"              => "Captcha za registraciju korisnika",
    "user_reg_captcha_desc"         => "Odaberite opciju kao želite da se Captcha kod koristi prilikom registracije.",
    "user_name_format"              => "Format imena",
    "first_last"                    => "Prvo prezime",
    "last_first"                    => "Prvo ime",
    "first_l"                       => "Prvo L.",
    "f_last"                        => "F. poslednje",
    "password_length"               => "Dužina lozinke",
    "password_length_desc"          => "Minimalna dužina lozinke prilikom registracije ili ažuriranja naloga.",
    "password_strength"             => "Jačina lozinke",
    "password_strength_desc"        => "Izaberite neophodne znakove za lozinku.",
    "password_str_must_contain"     => "Mora sadržati:",
    "password_str_letters"          => "Barem jedno slovo.",
    "password_str_digits"           => "Barem jednu cifru.",
    "password_str_case"             => "I velika i mala slova.",
    "password_str_symbols"          => "Barem jedan simbol.",

    "load_template"                 => "Učitaj šablon",
    "load_template_desc"            => "Izborom šablona zamenićete trenutni naslov emaila i sadržaj.",
    "clear_template"                => "Obriši šablon",

    "personal_settings"             => "Lična podešavanja",
    "personal_settings_desc"        => "Ažurirajte svoj profil i izmenite podešavanja koja se odnose samo na vaš nalog.",
    "two_fa"                        => "Two-Factor autentifikacija",
    "notifications"                 => "Obaveštenja",
    "two_fa_success_disabled"       => "Two-factor autentifikacija je uspešno onemogućena.",
    "two_fa_success_enabled"        => "Two-factor autentifikacija je uspešno omogućena.",
    "two_fa_incorrect"              => "Kod je netačan, uverite se da je kod koji ste uneli tačan i da je vreme servera sinhronizovano.",
    "two_fa_enabled"                => "2FA omogućena",
    "two_fa_disable"                => "Da biste isključili 2FA, izvršite verifikaciju ispod.",
    "two_fa_enable"                 => "Da biste omogućili 2FA, podesite nalog na telefonu koristeći dolenavedene detalje i izvršite verifikaciju.",
    "verify_code"                   => "Potvrdi kod",
    "verify_and_disable"            => "Potvrdi i onemogući",
    "verify_and_enable"             => "Potvrdi i omogući",
    "verify_code_desc"              => "Unesite važeći kod za svoj 2FA nalog da biste onemogućili 2FA potvrdu identiteta.",
    "qr_code"                       => "QR kod",
    "two_fa_code"                   => "2FA kod",
    "two_fa_secret"                 => "2FA secret",
    "two_fa_secret_desc"            => "Sačuvajte ovaj kod negde na sigurnom, jer će vam trebati za ponovnu registraciju ukolko izgubite pristup.",
    "display_notifications"         => "Prikaži obaveštenja",
    "display_notifications_desc"    => "Sistem će vas obavestiti kada se kreiraju novi tiketi, dodaju novi odgovori ili kada se drugi agenti prijave. Možete da birate između obaveštenja na desktopu, obaveštenja u web pregledaču ili da ih u potpunosti onemogućite.",
    "desktop_notifications"         => "Desktop notifikacije",
    "browser_notifications"         => "Browser notifikacije",

    "search_for_user"               => "Traži korisnika...",
    "select_operator"               => "Označi agenta...",
    "select_group"                  => "Označi grupu...",

    "your_ip_has_been_banned"       => "Tvoja IP adresa je banovana.",
    "password_reset_success"        => "Lozinka je uspešno resetovana!",

    "simpleauth_token_expired"      => "Token za pristup je istekao.",
    "simpleauth_token_invalid"      => "Token za pristup nije ispravan.",
    "simpleauth_invalid_guard"      => "Neuspela prijava.",
    "simpleauth_not_allowed"        => "Operateri se trenutno ne mogu prijaviti pomoću SimpleAuth-a.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Email istorija",
    "view_email"                    => "Pogledaj email",

    "ban_after_count"               => "Banuj IP adresu nakon više neuspelih prijava",
    "ban_after_count_user"          => "Broj neuspelih prijava nakon kojih se IP adresa korisnika banuje. Nakon toga, oni više nisu u mogućnosti da se prijave na nalog tokom podešenog vremenskog perioda. Postavljanje na 0 će potpuno onemogućiti zabranu IP-a.",
    "ban_after_count_operator"      => "Broj neuspelih prijava nakon kojih se IP adresa korisnika banuje. Nakon toga, oni više nisu u mogućnosti da se prijave na nalog i API tokom podešenog vremenskog perioda. Postavljanje na 0 će potpuno onemogućiti zabranu IP-a.",
    "ban_length"                    => "Dužina zabrane IP adrese",
    "ban_length_desc"               => "Dužina zabrane IP-a nakon dostizanja određenog broja neuspelih prijava u jednom danu.",
    "n_failed_logins"               => ":count neuspele prijave u roku od 24 sata",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Pauza...",
    "operator_session_expired"      => "Neko vreme ste bili neaktivni ili ste se prijavili na drugi uređaj, pa je aktiviran mod pauze. Prijavite se ponovo.",
    "log_back_in"                   => "Prijavi se nazad",
    "all_users"                     => "Svi korisnici",
    "all_operators"                 => "Svi agenti",
    "email_per_batch"               => "Paket emailova",
    "email_per_batch_desc"          => "Broj email poruka koji se istovremeno šalju zajedno.",
    "batch_interval"                => "Interval",
    "batch_interval_desc"           => "Razmak između email poruka. Minimum je 1 minut.",
    "select_user_groups"            => "Izaberite grupe korisnika/agenata ili unesite adrese e-pošte...",
    "mass_email_sending_time"       => "Biće potrebno :time za slanje svih emailova.",
    "organisations_enabled"         => "Odobrene organizacije",
    "organisations_enabled_desc"    => "Podrazumevano, korisnici mogu dodati organizaciju u svoj profil i dodati druge korisnike. Ako imate posla samo sa potrošačima, možete onemogućiti ovu opciju i sakriti je sa interfejsa.",
    "manager_notifications"         => "Obaveštenja za menadžere organizacije",
    "manager_notifications_desc"    => "Podrazumevano, menadžeri organizacija mogu primati nova obaveštenja o tiketima koje su otvorili drugi korisnici organizacije. Svaki menadžer može u svom profilu poništiti ovu postavku.",
    "manager_email_notifications_desc" => "Primaj nova obaveštenja o tiketima koje su otvorili drugi korisnici organizacije.",
    "organisation_notifications_desc" => "Odaberite ako želite da primate nova obaveštenja o tiketima koje su otvorili drugi korisnici organizacije.",
    "select_operator_group_desc"    => "Izaberite najmanje jednu grupu agenata za ovog agenta.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Prilagođeno polje organizacije|Prilagođena polja organizacije",
    "recent_users"                  => "Nedavni korisnici",
    "recent_organisations"          => "Nedavne organizacije",
    "group_brand_desc"              => "Izaberite brendove u kojima će agenti iz grupe imati dozvolu za pristup.",
    "select_operators"              => "Izaberi agenta/e...",
    "select_groups"                 => "Izaberi grupu/e...",
    "group_department_desc"         => "Dodajte sve članove grupe u odeljenje, a agenti se takođe mogu pojedinačno dodati u podešavanjima odeljenja.",
    "op_settings_group_dept"        => "Dodato preko grupe agenata:",
    "op_settings_group_dept_desc"   => "Ova odeljenja su automatski nasleđena iz grupe agenata označenih gore. Da biste dodali agente iz druge grupe preko grupe agenata izmenite podešavanja grupe  ili odeljenja.",
    "op_settings_individual_dept"   => "Dodato individualno:",
    "op_settings_individual_dept_desc" => "Ova odeljenja su dodatak svim odeljenjima kojima je agent dodeljen preko grupa agenata gore.",
    "also_registered_other_brand"   => "Ovaj korisnik je takođe registrovan u :brands.|Ovaj korisnik je takođe registrovan u :brands.",
    "signature"                     => "Potpis|Potpisi",
    "signature_desc"                => "Kreirajte lične potpise za tikete, uz mogućnost prilagođavanja na osnovu brenda/odeljenja. Podrazumevani potpis će se koristi kada nije moguće pronaći potpis za određeno odeljenje i/ili brend.",
    "operator_signature"            => "Potpis agenta|Potpisi agenata",
    "ticket_signature_desc"         => "Podesi podrazumevani potpis agenta.",
    "operator_signature_desc"       => "Naredni potpisi za određena odeljenja i/ili brendove mogu biti podešeni u sekciji <a href=':route' target='_blank'>Potpisi agenata</a>.",
    "view_organisation"             => "Pregled organizacije",
    "new_owner"                     => "Novi vlasnik",
    "operator_role"                 => "Uloga agenta|Uloga agenata",
    "manage_users"                  => "Upravljaj korisnicima",
    "manage_organisations"          => "Upravljaj organizacijom",
    "manage_operators"              => "Upravljaj agentima",
    "user_profile"                  => "Korisnički profil",
    "organisation_access_level"     => "Nivo pristupa - organizacija",
    "organisation_notifications"    => "Obaveštenja - organizacija",
    "organisation_users"            => "Korisnici - organizacija",
    "organisation_users_ticket"     => "Iznad je spisak menadžera vaše organizacije koji će takođe biti obavešteni o tiketima.",

    /*
     * 2.1.1  
     */
    "change_password"               => "Promena lozinke",
    "current_password"              => "Trenutna lozinka",
    "new_password"                  => "Nova lozinka",
    "personal_confirm_password"     => "Molimo upišite trenutnu lozinku da biste generisali novu.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Pretraga korisnika/agenata...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Format koji se koristi za prikazivanje korisničkih imena u celom sistemu.",
    "operator_name_format_desc"     => "Format koji se koristi za prikazivanje imena agenata u celom sistemu.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Ukloni iz :record?",
    "remove_from_warn"              => "Ova akcija će trajno ukloniti <strong>:name</strong> korisnika iz :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Prijava preko društvenih mreža",
    "login_via"                     => "Prijavi se preko :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Prijavite se da biste dovršili povezivanje naloga na društvenim mrežama.",
    "social_linking_register"       => "Molimo vas da popunite detalje u nastavku da biste dovršili registraciju svog naloga. Vaš nalog na društvenim mrežama će biti automatski povezan.",
    "already_registered"            => "Već imaš nalog?",
    "linked_accounts"               => "Povezani nalozi",
    "unlink_account"                => "Ukloni :record nalog",
    "unlink_account_warning"        => "Uklanjanje naloga na društvenim mrežama znači da se više ne može koristiti za direktno prijavljivanje na nalog.",
    "failed_login"                  => "Neuspela prijava|Neuspele prijave",
    "resend_confirmation"           => "<strong><a href=':link'>Klikni ovde</a></strong> za slanje novog mejla za potvrdu.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "mora imati \":permission\" dozvolu",
    "deleted_user"                  => "Obrisan korisnik",
    "access_level_not_owner"        => "Nije moguće promeniti nivo pristupa vlasnika organizacije. Prvo prenesite vlasništvo nad organizacijom na drugog korisnika tako što ćete pregledati organizaciju i kliknuti na karticu „Korisnici“.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Označi postojeću ili dodaj novu organizaciju...",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Unesite svaki domen koji je u vlasništvu organizacije. Korisnici koji se registruju sa adresom e-pošte koja pripada jednom od tih domena biće automatski dodati u organizaciju. Preporučujemo da proverite da li je korisnik zaista deo organizacije ako nije potvrdio vlasništvo nad svojom email adresom.",
    "changing_email_desc"           => "Promena email adrese zahtevaće od korisnika da potvrdi vlasništvo nad adresom prilikom sledeće prijave.",
    "unconfirmed_user_desc"         => "Korisnik nije potvrdio vlasništvo nad ovom email adresom.",
    "unregistered_user_desc"        => "Ovaj nalog je kreiran automatski i bez lozinke. Možete poslati verifikacioni email, kako bi omogućili korisnicima da otvore svoj nalog ili možete kreirati lozinku za njih u nastavku.",
    "send_confirmation_email"       => "Pošalji verfikacioni email",
    "mark_as_confirmed"             => "Označi kao potvrđeno",
    "password_reset_already"        => "Vlasništvo nad ovom email adresom je već potvrđeno, možete nastaviti sa prijavljivanjem.",
    "unconfirmed_account"           => "Proverite svoj email kako biste potvrdili vlasništvo nad ovom email adresom.",
    "success_register_desc"         => "Hvala vam što ste registrovali nalog. Proverite svoj email da biste dovršili podešavanje naloga.",
    "resend_confirmation_sent"      => "Poslat je novi email sa potvrdom i trebalo bi da stigne za nekoliko minuta.",
    "register_confirm_desc"         => "Hvala vam što ste potvrdili vlasništvo nad vašom email adresom, unesite lozinku ispod da biste dovršili podešavanje naloga.",
    "thank_you_confirm"             => "Hvala vam što ste potvrdili vlasništvo nad vašom email adresom.",
    "use_gravatar"                  => "Kporisti Gravatar",
    "use_gravatar_desc"             => "Gravatar je usluga koja svojim registrovanim korisnicima nudi globalno priznati avatar. Korisnička podrška će automatski poslati zahtev na secure.gravatar.com sa MD5 hešom svake korisničke email adrese kako bi pomogla u prikazivanju avatara. MD5 heš takođe može biti javno vidljiv u frontend HTML-u. Preporučujemo da ažurirate svoju politiku privatnosti ako omogućavate ovu funkciju.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "Da biste dovršili ažuriranje svoje email adrese, kliknite na link poslat na :email da biste potvrdili vlasništvo nad novom adresom.",
    "confirmation"                  => "Potvrda",
    "confirmation_email_in_use"     => "Email adresa već se koristi na drugom nalogu.",
    "continue_to_login"             => "Molimo nastavite na <a href=':route'>prijava</a>.",
    "reset_request_desc"            => "Ako nalog postoji, uskoro će vam biti poslat email koji će vam omogućiti da resetujete lozinku.",
    "password_reset_error"          => "Link je možda istekao. Ako vaš link iz bilo kog razloga ne radi, zatražite novi.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Nalog je povezan preko LDAP. Molimo vas da se prijavite koristeći svoje LDAP korisničko ime i lozinku.",
    "operator_message"              => "Poruke agenata",
    "force_two_fa"                  => "Forsiraj 2FA",
    "force_two_fa_desc"             => "Forsiraj dvofaktorsku autentifikaciju (2FA) na svim nalozima. Nalog bez omogućene 2FA će prilikom sledećeg prijavljivanja morati da podesi 2FA.",
    "two_fa_required"               => "Two-factor autentifikacija (2FA) je obavezna. Pratite informacije ispod za nastavak.",
    "two_fa_user_enable"            => "Korisnik može da omogući 2FA u nalogu u svojim podešavanjima.",

    /*
     * 3.3.0
     */
    "remove_avatar"                 => "ukloni avatar",
    "social_login_desc"             => "Omogućite korisnicima da se registruju i prijave pomoću svog naloga na društvenim mrežama.",
    "manage_social_login_options"   => "Da biste dodali ili upravljali opcijama za prijavu preko društvenih mreža, posetite <a href=\":route\">Third-Party integracije</a> page.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Preuzmite i instalirajte jednu od sledećih aplikacija i skenirajte QR kod ili unesite tajni ključ. Ovo će podesiti vaš nalog na uređaju i generisaće šestocifreni kod koji morate uneti da biste verifikovali i dovršili podešavanje. Obavezno kliknite na potvrdu pre isteka koda. Vreme vašeg servera mora biti sinhronizovano sa NTP serverom da bi pravilno funkcionisalo.",
    "two_fa_successfully_enabled"   => "Two-factor atentifikacija (2FA) je uspešno uključena.",

);
