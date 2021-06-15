<?php

return array(

    "deleted"               => "Obrisano!",
    "success"               => "Uspešno",
    "error"                 => "Greška",
    "in_progress"           => "U toku",

    "save_order"            => "Pokušaj čuvanja ažurirarnih stavki",

    "show_all_results"      => "Prikaži sve rezultate &raquo;",

    "are_you_sure"          => "Da li ste sigurni?",
    "yes_im_sure"           => "Da, siguran sam",

    "success_created"       => "Novi :item je uspešno kreiran!",
    "error_created"         => "Kreiranje novog :item neuspešno.",

    "success_deleted"       => ":item je obrisan!",
    "error_deleted"         => "Pokušaj brisanja :item nije uspeo.",

    "success_updated"       => ":item je ažuriran!",
    "error_updated"         => "Pokušaj izmene :item nije uspeo.",

    "error_notfound"        => ":item sa datim ID-om nije pronađena.",
    "error_notfound_name"   => ":item sa datim imenom nije pronađen.",
    "report_notfound"       => "Izveštaj sa navedenom kategorijom i imenom nije pronađen.",

    "success_ordering"      => "Redosled stavki je ažuriran!",
    "error_ordering"        => "Pokušaj ažuriranja nije uspeo.",

    "error_login"           => "Neuspešan pokušaj prijave.",
    "success_logout"        => "Uspešno ste se prijavili.",

    "please_correct"        => "Ispravite sledeće greške i pokušajte ponovo.",

    "success_settings"      => "Podešavanja su uspešno ažurirana!",
    "error_settings"        => "Pokušaj promene podešavanja nije uspeo.",

    "success_action"        => "Uspešno!",
    "error_action"          => "Neuspešno.",

    "error_embed_image"     => "Pokušaj dodavanje slike nije uspeo.",

    "unauthorised"          => "Nije odobreno",
    "not_authorised"        => "Niste ovlašćeni da izvršite ovu radnju.",
    "not_permitted"         => "Nije vam dozvoljeno da vidite ovu stranicu. Ako mislite da je ovo greška, obratite se administratoru aplikacije.",

    "page_not_found"        => "Stranica nije pronađena",
    "cant_find_page"        => "Stranica koju tražite nije pronađena.",

    "please_report"         => "Prijavite administratoru.",

    "return_to"             => "Povratak na :page.",

    "session_expired"       => "Vaša sesija je istekla, prijavite se ponovo.",
    "session_refresh"       => "Vaša sesija je istekla, osvežite stranicu i pokušajte ponovo.",

    "general_error"         => "Došlo je do greške. Molimo pokušajte ponovo.",

    "no_results"            => "Nema rezultata.",

    "assign_incomplete"     => "Zahtev nije završen u potpunosti. :names ne mogu da se dodele tiketima.",

    "maintenance_mode"      => "Režim redovnog održavanja je aktivan. Korisnici trenutno ne mogu pristupiti portalu za podršku, ne zaboravite da isključite režim održavanja kada završite.",

    "invalid_captcha"       => "Uneti Captcha kod je nevažeći ili netačan, pokušajte ponovo.",
    "blocked_as_spam"       => "Vaš zahtev je prijavljen kao neželjena pošta. Kontaktirajte administratora ako smatrate da je došlo do greške.",
    "account_exists"        => "Nalog sa navedenom email adresom već postoji u našem sistemu. Prijavite se ili zatražite ponovno slanje lozinke ako se ne možete setiti lozinke.",
    "error_loading_comments" => "Došlo je do problema pri učitavanju komentara.",

    "invalid_auth"          => "Nevažeći kredencijali za potvrdu identiteta.",

    "forbidden"             => "Zabranjen pristup",

    "not_logged_exception"  => "<strong>Ups! Nešto nije u redu.</strong><br />Obavestite administratora sistema ako se greška i dalje javlja.",

    "too_many_ticket_reqs"  => "Previše tiketa od :email. TLimit je :max u :decay minuta.",

    "not_operator"          => "Došlo je do greške. Označeni agent nije validan, uverite se da agenti pripadaju grupi agenata i da imaju dodeljenu ulogu.",

    // The error message is appended using JavaScript...
    "datatable_error"       => "<strong>Ups! Došlo je do greške.</strong><br />Došlo je do greške prilikom učitavanja tabele. Obavestite administratora sistema ako se greška i dalje javlja.",

    "missing_extension"     => "Nedostaje dodatak",
    "php_ldap_missing"      => "Dodatak php-ldap je potreban da bi se koristila LDAP potvrda identiteta. Omogućite dodatak i osvežite stranicu.",
    "php_imap_missing"      => "Dodatak php-ldap je potreban da bi se koristio Email Download. Ukoliko želite da koristite Email Download, omogućite dodatak i osvežite stranicu.",

    /*
     * 2.0.3
     */
    "only_ssl_connections"  => "Dozvoljene su samo SSL konkecije, neophodno je da pređete na sigurnu konekciju.",
    "queued_emails"         => "Uspešno - Email poruke će uskoro biti poslate.",
    "error_loading_message" => "Došlo je do greške prilikom učitavanja poruke. Molim vas, pokušajte ponovo.",
    "please_refresh"        => "Osvežite stranicu.",

    /*
     * 2.1.0
     */
    "unable_to_connect_db"  => "<strong>Usluga trenutno nije dostupna.</strong><br />Povezivanje sa bazom podataka nije uspelo.",
    "category_required"     => "Članak mora pripadati jednoj ili više kategorija.",
    "warning"               => "Upozorenje",
    "note"                  => "Beleška",
    "brand_invalid_dept"    => "Zahtev nije realizovan u potpunosti. Odeljenje tiketa ne može biti ažurirano zbog brenda.",

    /*
     * 2.1.1
     */
    "upload_error"          => "Dodavanje priloga nije uspelo \":filename\", razlog: \":reason\"",
    "upload_max_size"       => "Fajl mora biti manji od :size",
    "upload_wrong_type"     => "Tip datoteke nije dozvoljen",

    /*
     * 2.3.0
     */
    "delete_record"         => "Obriši :record?",
    "cannot_be_undone"      => "Ova radnja se ne može opozvati.",
    "warn_delete"           => "Ovim ćete trajno izbrisati <strong>:name</strong> :record iz sistema.",
    "delete_confirm"        => "Da, obriši :record",
    "keep_record"           => "Ne, ostavi :record",
    "delete_relations"      => "Brisanje <strong>:name</strong> :record takođe će trajno izbrisati sve sledeće povezane podatke:",
    "please_check"          => "Morate da potvrdite sva polja iznad.",
    "failed_attachments"    => "Dodavanje određenih fajlova nije uspelo.",

    /*
     * 2.3.1
     */
    "sent_email"            => "Email je uspešno poslat.",
    "task_already_running"  => "Zakazani task je u toku, pokušajte ponovo uskoro.",
    "linked_account"        => "Nalog na društvenim mrežama je uspešno povezan sa vašim nalogom.",
    "already_linked"        => "Nalog na društvenim mrežama je već povezan sa drugim nalogom. Molimo vas da se prijavite na drugi nalog i uklonite link.",

    /*
     * 2.4.0
     */
    "does_look_correct"     => "Da li je ovo tačno?",
    "no_revert"             => "Ne! Vrati se nazad",
    "attachment_not_found"  => "Prilog nije pronađen.",

    /*
     * 2.5.0
     */
    "account_closed"        => "Vaš nalog je zatvoren. Molimo da nas kontaktirate ako mislite da je došlo do greške.",
    "leave_record"          => "Ostavi :record?",
    "leave_record_warn"     => "Ovo će vas trajno ukloniti iz :record.",
    "success_trashed"       => "Uspešno ste premestili :item u korpu!",
    "error_trashed"         => "Neuspešno prebacivanje :item u korpu.",
    "blocked_by_rule"       => "Zahtev je blokiran zbog spam pravila ':text'.",

    /*
     * 3.0.0
     */
    "popup_blocked"         => "Vaš web pregledač blokira pop-up prozore. Omogućite pop-up prozore i ponovo se vratite na ovu stranicu.",
    "error_editing_message" => "Došlo je do greške prilikom uređivanja ove poruke.",

);
