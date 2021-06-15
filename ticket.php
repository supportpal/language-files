<?php

return array(

    "feedback_question"         => "Pitanje koje će biti prikazano korisniku.",
    "open_new"                  => "Otvorite novi tiket",
    "select_department"         => "Izaberite odeljenje",
    "select_department_desc"    => "Kliknite na odeljenje koje je relevantno za vaš zahtev u nastavku.",
    "no_departments"            => "Odeljenja nisu pronađena.",
    "department_user_details"   => "Detalji o odeljenju i korisniku",
    "enter_your_details"        => "Unesite svoje podatke",
    "enter_ticket_details"      => "Unesite podatke",
    "enter_subject_message"     => "Unesite naslov i poruku",
    "invalid_user"              => "Proverite da li su uneti važeći korisnički podaci da biste nastavili.",

    "registered_users"          => "Samo registrovani korisnici",

    "tickets"                   => "Tiketi(i)",
    "ticket"                    => "Tiket|Tiketi",
    "subject"                   => "Nalov",
    "no_subject"                => "Bez naslova",
    "last_action"               => "Poslednja akcija",
    "due_time"                  => "Rok",
    "created_time"              => "Vreme kreiranja",
    "submitted"                 => "Postavljeno",
    "ticket_reply"              => "Odgovor",
    "ticket_note"               => "Beleška",
    "ticket_type"               => "Tip",

    "user_ticket"               => "Tiketi korisnika",
    "user_ticket_desc"          => "Otvorite novi tiket u ime postojećeg ili novog korisnika.",
    "existing_user"             => "Postojeći korisnik",
    "new_user"                  => "Novi korisnik",
    "internal"                  => "Interno",
    "internal_ticket_desc"      => "Otvorite tiket samo za internu upotrebu. Tiket će biti povezan sa vama, a ne sa korisnikom.",
    "ticket_opened"             => "Vaš tiket je uspešno otvoren.",
    "enter_user_details"        => "Molimo unesite svoje podatke u nastavku ili se prijavite na svoj nalog ako ga imate.",
    "already_have_account"      => "Već imate nalog, prijavite se i otvorite tiket. Koristite funkciju zaboravljene lozinke ako ste zaboravili svoju lozinku.",

    "recent_tickets"            => "Skorašnji tiketi",
    "last_message_text"         => "Tekst poslednje poruke",

    "set_due_time"              => "Postavi rok",

    "settings"                  => "Podešavanje tiketa",

    "priority"                  => "Prioritet|Prioriteti",

    "channel"                   => "Kanal|Kanali",
    "account"                   => "Nalog|Nalozi",

    "assign_operator"           => "Dodeli  agenta",
    "assigned_operator"         => "Dodeljeni agenti",
    "assigned_to"               => "Dodeljeno",
    "assigned"                  => "Dodeljen",

    "department"                => "Odeljenje|Odeljenja",
    "change_department_order"   => "Prevucite da biste promenili redosled prikazivanja odeljenja prilikom otvaranja novog tiketa.",
    "department_applicable"     => "Odeljenja na koja se primenjuje",
    "department_applicable_desc" => "Odeljenja u kojima će korisnici moći da izaberu prioritet. Odnosi se samo na frontend, svi ostali prioriteti biće dostupni operaterima za sva odeljenja.",

    "send_now"                  => "Pošalji sada",

    "tag"                       => "Tag|Tagovi",

    "track_ticket"              => "Prati tiket",
    "view_ticket"               => "Pogledaj tiket",

    // Recent activity
    "recent_activity"           => "Skorašnja aktivnost",

    "ticket_number"             => "Broj tiketa",
    "ticket_format"             => "Format broja tiketa",

    // Departments
    "department_public_desc"    => "Odeljenje je vidljivo korisnicima online.",
    "department_parent_desc"    => "Ako je odeljenje pododeljenje, odaberite parent odeljenje. Pododeljenja su namenjena internoj eskalaciji i upravljanju, pa će ovo podešavanje ukloniti neke od opcija u nastavku.",
    "department_priority"       => "Prioriteti odeljenja",
    "department_priority_desc"  => "Prioriteti koji će biti dostupni korisnicima prilikom otvaranja tiketa (treba da bude izabran najmanje jedan). Podrazumevano će svi prioriteti biti dostupni u odeljenju.",
    "department_no_format"      => "Opciono, podesite samo ako želite da zamenite podrazumevani format broja tiketa, u suprotnom, ostavite prazno.",
    "department_operator"       => "Agenti u okviru odeljenja",
    "department_default_assign" => "Podrazumevano dodeljeno",
    "dept_default_assign_desc"  => "Koristite ovu opciju ako želite da se svi tiketi otvoreni u ovom odeljenju automatski dodeljuju jednom ili više agenata.",

    // Department emails
    "email_accounts_desc"       => "Podesite email adrese povezane sa odeljenjem, sve dolazne poruke ka ovim email adresama će otvoriti tiket u okviru odeljenja. Prva email adresa koristi se kao podrazumevani pošiljalac za slanje poruka.",
    "department_port"           => "Podrazumevane vrednosti su: 110 za POP3, 995 za secure POP3, 143 za IMAP i 993 za secure IMAP. Ostavite prazno da biste koristili podrazumevanu vrednost.",
    "department_encryption"     => "Neki email provajderi zahtevaju SSL ili TLS enkripciju da bi se povezali, ako niste sigurni, ovu postavku ostavite kao None.",
    "department_delete_mail"    => "Ako koristite IMAP, možete da odlučite da ne brišete poruke na serveru nakon što su uvezene kao tiketi.",
    "protocol"                  => "Protokol",
    "server"                    => "Mail Server",
    "port"                      => "Port",
    "encryption"                => "Enkripcija",
    "delete_downloaded"         => "Obriši preuzete emailove",
    "consume_all"               => "Preuzmisve mejlove",
    "email_download"            => "Email preuzimanje",
    "email_piping"              => "Email Piping",
    "email_piping_desc"         => "Podesite email prosleđivanje na sledeći način, PHP executable path se može razlikovati na vašem serveru.",
    "remote_email_piping"       => "Udaljeni Email Piping",

    // Department email options
    "email_options"             => "Email opcije",
    "email_user_on_email"       => "Email korisnici na tiketima otvorenim putem emaila",
    "email_user_on_email_desc"  => "Izaberite da li korisnici treba da budu obavešteni email porukom kada zahtev koju pošalju rezultira otvaranjem novog tiketa.",
    "email_operators"           => "Obavesti agente",
    "email_operators_desc"      => "Izaberite da li ćete prosleđivati odgovore agenta drugim agentima. Podrazumevano, odaberite \"email operators\" opciju u panelu i automatski pošaljite email kada agent odgovori na tiket.",
    // Department email templates
    "new_ticket_opened"         => "Otvoren novi tiket",
    "waiting_for_response"      => "Čeka na odgovor",
    "ticket_auto_closed"        => "Automatski zatvoren",
    "closed_by_operator"        => "Zatvoren od strane agenta",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Feedback forma|Feedback forme",
    "feedback_form_desc"        => "Feedback forme se obrađuju redosledom kojim se pojavljuju. Prevucite da biste preuredili i podesili prioritet feedback formi.",
    "view_feedback"             => "Pogledaj Feedback",
    "ticket_feedback"           => "Feedback na tiket",
    "feedback_fields_error"     => "Došlo je do problema pri preuzimanju feedback polja.",
    "time_after_resolved"       => "Vreme slanja feedback forme",
    "time_after_resolved_desc"  => "Vreme nakon kojeg je tiket označen kao rešen i kada se feedback šalje korisniku.",
    "expires_after"             => "Isticanje",
    "expires_after_desc"        => "Vreme nakon kojeg je rok za davanje feedback-a istekao i više se ne može odgovoriti. Iako preporučujemo podešavanje od 7 dana, u sva polja možete uneti 0 što znači bez podešavanja vremena.",
    "form_conditions"           => "Uslovi",
    "form_conditions_desc"      => "Definišite uslove po kojima se sveže rešeni tiketi proveravaju da li spadaju u ovu formu. Ako rešeni tiket odgovara većem broju formi, forma će biti izabrana po prioritetu. Prioritet se može promeniti pregledom liste formi.",
    "form_fields"               => "Polja forme",
    "rating"                    => "Ocena",
    "feedback_desc"             => "Hvala vam što ste nas kontaktirali i nadamo se da smo rešili vaš zahtev. Molimo vas da ocenite svoje iskustvo u nastavku.",
    "good_satisfied"            => "Odlično, zadovoljan sam",
    "bad_not_satisfied"         => "Loše, nisam zadovoljan",
    "feedback_not_found"        => "Vaš feedback ne može biti prihvaćen, otvorite tiket ako želite da ostavite feedback.",
    "feedback_malformed_token"  => "Vaš feedback nije privhaćen zbog pogrešnog tokena. Otvorite tiket ako želite da ostavite feedback.",
    "feedback_expired"          => "Tiket je rešen već neko vreme i nažalost više ne može biti ocenjen.",
    "feedback_questions"        => "Ukoliko možete da odvojite nekoliko trenutaka, odgovorite na sledeća pitanja kako biste nam pomogli da dodatno poboljšamo podršku koju nudimo.",
    "feedback_for_ticket"       => "Feedback za tiket #:number",
    "feedback_rating_desc"      => "Tiket je ocenjen sa <strong>:rating</strong> od strane korisnika.",

    // Custom fields
    "customfield"               => "Prilagođeno polje|Prilagođena polja",
    "customfield_order"         => "Prevucite da biste promenili redosled prikazivanja prilagođenih polja prilikom otvaranja tiketa.",

    // Canned responses
    "cannedresponse"            => "Predefinisani odgovor|Predefinisani odgovori",

    // Filters
    "filter"                    => "Filter|Filteri",
    "filter_condition"          => "Uslovi",
    "filter_condition_desc"     => "Definišite uslove za filtriranje.",

    // Macros
    "macro"                     => "Makro|Makroi",
    "macro_condition"           => "Uslovi makro-a",
    "macro_action"              => "Makro akcije",
    "macro_action_desc"         => "Definišite akcije koje se izvršavaju kada se izvrši makro. Uverite se da akcije važe za odeljenje u kome se nalazi tiket, u suprotnom biće ignorisati.",

    "from"                      => "Od",
    "to"                        => "Za",
    "cc"                        => "CC",

    "allowed_files"             => "Dozvoljeni tipovi fajlova",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> takođe gleda tiket.",
    "draft_saved"               => "Draft sačuvan u :time",
    "save_draft"                => "Sačuvaj draft",
    "discard_draft"             => "Obriši draft",

    // Locked
    "error_ticket_locked"       => "Ovaj tiket je zaključan i ne može se ponovo ažurirati, otvorite novi tiket ako vam je potrebna dodatna podrška.",

    // Ticket Followups
    "follow_up"                 => "Follow-up",
    "follow_up_status_desc"     => "Promenite status tiketa do datuma za follow-up.",
    "exact_date_time"           => "Tačan datum & vreme",
    "time_from_now"             => "Vreme od sada",

    // Schedule
    "schedule"                  => "Raspored|Rasporedi",
    "business_hour"             => "Radno vreme",
    "business_hour_desc"        => "Radno vreme označava vreme kada je osoblje na raspolaganju da odgovori na upite. Sati se uzimaju u obzir prilikom izračunavanja roka tiketa.",

    // Holidays
    "holiday"                   => "Praznik|Praznici",
    "holiday_or_on_the"         => "ili, na",
    "holiday_month_year_desc"   => "Godina nije obavezna ako se praznik ponavlja. Izaberite godinu samo ako se praznik događa na taj datum u određenoj godini.",

    // SLA Plans
    "sla_plan"                  => "SLA plan|SLA planovi",
    "specific_schedule"         => "Određeni rasporedi",
    "calendar_hours_24"         => "Sati (24 sata)",
    "resolution_time"           => "Vreme rešavanja",
    "resolution_time_desc"      => "Odredite vreme za koje se mora odgovoriti na tiket i rešiti isti po prioritetu. Vreme će se računati samo tokom radnog vremena na osnovu izabranih rasporeda, mogu se koristiti decimalne vrednosti.",
    "reply_within"              => "Odgovori u roku",
    "resolve_within"            => "Rešiti u roku",
    "plan"                      => "Plan",
    "sla_condition"             => "SLA uslovi",
    "sla_condition_desc"        => "Definišite uslove pod kojima se proverava da li tiketi spadaju u ovaj plan. Ako novi tiket odgovara u  više SLA planova, plan će biti izabran po prioritetu, prioritet se se može izmeniti odlaskom na listu planova.",
    "escalation_rule"           => "Pravila za eskalaciju",
    "escalation_rule_desc"      => "Definišite akcije koje se sprovode kada je tiket prema ovom SLA planu blizu roku ili je rok za rešavanje prošao. Uverite se da pravila važe za odeljenje u kome se nalazi tiket, u suprotnom će biti ignorisano.",
    "condition"                 => "Uslov",
    "condition_group"           => "Grupa uslova",
    "all_groups"                => "SVE grupe moraju biti tačne",
    "any_group"                 => "BILO KOJA grupa može biti tačna",
    "all_conditions"            => "SVI uslovi u grupi moraju biti tačni",
    "any_condition"             => "BILO KOJI uslov u grupi može biti tačan",
    "sla_plan_desc"             => "SLA planovi se obrađuju redosledom kojim se pojavljuju. Prevucite da biste preuredili i podesili prioritet SLA planova.",

    // Reply options
    "reply_options"             => "Opcije odgovora",
    "send_email_to_users"       => "Pošalji email korisniku",
    "send_email_to_operators"   => "Pošalji email agentu",
    "back_to_grid"              => "Vrati se na listu tiketa",
    "take"                      => "Preuzimanje",
    "take_ownership"            => "Preuzmi vlasništvo",
    "pause_duetime"             => "Pauziraj rok rešavanja",
    "add_to_canned_responses"   => "Dodaj u predefinisane odgovore",
    "visible_to_all_operators"  => "Učinite vidljivim svim operaterima",
    "set_status"                => "Postavi status",
    "add_selfservice_link"      => "Dodaj Self-Service link",
    "search_selfservice"        => "Traži self-service članak",
    "search_canned"             => "Traži predefinisani odgovor",

    "mark_resolved"             => "Označi kao rešeno",

    "ticket_signature"          => "Potpisi",

    "default_open_status"       => "Podrazumevani otvoreni status",

    "default_resolve_status"    => "Pozdrazumevani status za rešavanje",
    "default_resolve_status_desc" => "Izaberite podrazumevani status koji se koristi za tikete koji su rešeni.",

    "waiting_response_time"      => "Čekanje na odgovor",
    "waiting_response_time_desc" => "Vreme nakon kojeg se korisnicima sa neaktivnim tiketom šalje email sa pitanjem da li smatraju da je zahtev rešen. Postavite na 0 da biste onemogućili ovu poruku.",

    "close_inactive_tickets"    => "Zatvaranje neaktivnih tiketa",
    "close_inactive_tickets_desc" => "Vreme nakon kojeg se neaktivni tiketi automatski zatvaraju, postavite na 0 da se tiketi nikada ne zatvaraju automatski.",

    "ticket_reply_order"        => "Redosled odgovora na tiket",
    "ticket_reply_order_desc"   => "Izaberite redosled prikazivanja tiket poruka, uzlazno tamo gde je poslednja poruka poslednja ili silazno tamo gde je najnovija poruka prva.",

    "ticket_notes_position"     => "Pozicija beleški",
    "ticket_notes_position_desc" => "Izaberite gde će se u prikazu tiketa prikazivati beleške o tiketu.",
    "ticket_notes_top_messages" => "Na vrhu i u poruci",
    "ticket_notes_top"          => "Samo na vrhu",
    "ticket_notes_messages"     => "Samo u poruci",

    "captcha_desc"              => "Kada se captcha kod prikazuje korisnicima koji otvaraju nove tikete.",
    "unregistered_only"         => "Samo neregistrovanim korisnicima",

    "allow_unauth_users"        => "Dozvoli neovlašćene korisnike",
    "allow_unauth_users_desc"   => "Omogućite korisnicima koji nisu prijavljeni da pregledaju tikete i odgovore na njih. Ako ovo onemogućite, ukloniće se i funkcija praćenja tiketa, a korisnici će morati da se registruju i prijave pre nego što mogu da pristupe tiketu.",

    "default_department"        => "Podrazumevano odeljenje",
    "default_department_desc"   => "Podrazumevano odeljenje za sve dolazne tikete preko ovog kanala.",

    "show_related_articles"     => "Prikaz povezanih članaka",
    "show_related_articles_desc" => "Kada korisnik kuca reči, mogu mu se prikazati povezani članci na osnovu onoga što je uneo. Zahteva da se omogući samoposlužni modul i MiSKL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Podrazumevani prioritet",
    "default_priority_desc"     => "Podrazumevani prioritet postavljen za sve dolazne tikete putem ovog kanala.",
    "verbose_email_log"         => "Verbose email Log",

    "last_reply"                => "Poslednji odgovor",
    "opened_at"                 => "Otvoreno u",

    "change_department"         => "Promeni odeljenje",
    "change_status"             => "Promeni status",
    "no_statuses"               => "Nije pronađen nijedan status. Klikni <a href=':route'>ovde</a> da kreiraš.",
    "no_priorities"             => "Nije pronađen nijedan prioritet. Klikni <a href=':route'>ovde</a> da kreiraš.",
    "no_templates"              => "Nije pronađen nijedan obrazac e-pošte. Klikni <a href=':route'>ovde</a> da kreiraš jedan.",
    "no_tags"                   => "Nije pronađen nijedan tag. Klikni <a href=':route'>ovde</a> da kreiraš jedan.",
    "no_departments_found"      => "Nije pronađeno nijedano odeljenje. Klikni <a href=':route'>ovde</a> da kreiraš jedno.",
    "no_operators_found"        => "Nije pronađen nijedan agent. Klikni <a href=':route'>ovde</a> da kreiraš.",
    "change_priority"           => "Promena prioriteta",
    "add_tag"                   => "Dodavanje taga",

    "unlock"                    => "Otključaj",
    "merge"                     => "Spoji",
    "merged"                    => "Spojeno",
    "unmerge"                   => "Razdvoji",
    "close_and_lock"            => "Zatvori & Zaključj",

    "mass_reply"                => "Masovni odgovor",

    "due_today"                 => "Rok je danas",
    "overdue"                   => "Rok je prošao",
    "unassigned"                => "Nije dodeljeno",

    "pause_duetime_desc"        => "Ako na ovom tiketu postoji aktivni SLA plan, pauzirajte preostali rok za rešavanje do datuma za follow up. Rok za rešavanje počinje ponovo kada se tiketu doda odgovor ili beleška (uključujući i follow up).",

    "add_cc"                    => "Dodaj CC",
    "reply_above_line"          => "Odgovorite iznad ove linije",

    "email_settings"            => "Email podešavanja",
    "web_settings"              => "Web podešavanja",
    "split_selected_replies"    => "Podelite odabrane odgovore",

    "track_ticket_not_found"    => "Tiket sa navedenim brojem i email adresom ne može biti pronađen.",

    "channel_deactivated"       => "Tiket kanal je trenutno deaktiviran, odgovor se ne može objaviti.",

    "type_in_tags"              => "Ukucajte tagove",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Spisak fajl ekstenzija, odvojenih znakom ’|’ koje su dozvoljene kao prilozi. Na primer: tkt|png|jpg. Da biste dozvolili sve priloge, unesite: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Nije pronađena nijedna grupa agenata. Kliknite <a href=':route'>ovde</a> da napravite novu.",
    "no_user_groups"            => "Nije pronađena nijedna grupa korisnika. Kliknite <a href=':route'>ovde</a> da napravite novu.",
    "remote_email_piping_desc"  => "Preuzmite <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>udaljenju email piping skriptu</a> i pratite <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'>dokumentaciju</a> za podešavanje na svom mail serveru.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Podrazumevano, SupportPal pruža podršku za email alias-e i na osnovu ”ZA” polja u dolaznim porukama utvrdiće u kom odeljenju tiket treba da bude otvoren. Tiket se neće otvoriti ukoliko se email adresa ne podudara za odeljenjem.  Omogućavanje ovog podešavanja znači da su sve email poruke bez odgovarajuće email adrese uvezene kao tiketi u ovom odeljenju.",
    "default_reply_options"     => "Podrazumevane opcije za odgovor",
    "default_reply_options_desc" => "Izaberite podrazumevane opcije za odgovor prilikom otvaranja ili odgovaranja na tiket. Opcija ':reply_option' će biti označena na osnovu podešavanja odeljenja ':department_option'.",
    "associate_response_tag"    => "Povežite predefinisani odgovor sa tagom...",
    "canned_response_tags_desc" => "Dodajte tagove koje mogu pomoći u pronalasku predefinisanog odgovora kada odgovarate na tiket.",
    "loading_tags"              => "Učitavanje tagova",
    "append_ip_address"         => "Dodaj IP adresu",
    "append_ip_address_desc"    => "Dodajte IP adresu korisnika u njihovim porukama prilikom otvaranja i odgovaranja na tikete sa fontenda.",
    "unassign_operator"         => "Ukloni agenta",
    "remove_tag"                => "Ukloni tag",
    "message_clipped"           => "[Poruka je isečena]",
    "view_entire_message"       => "Pogledaj celu poruku",
    "no_custom_fields"          => "Nije pronađeno nijedno prilagođeno polje. Klikni <a href=':route'>ovde</a> da kreiraš jedno.",
    "follow_up_active"          => "<a class='view-followup' style='text-decoration: underline;'>Follow up</a> je trenutno aktivan na ovom tiketu i biće pokrenut za <strong>:time</strong>.",
    "disable_user_email_replies" => "Onemogući odgovore korisnika putem emaila",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Podrazumevani filter",
    "default_ticket_filter_desc" => "Podrazumevana filtracija tiketa kada se klikne na ”Upravljaj tiketima”. Može biti podešeno na 'None' kada će prikazati sve aktivne tikete.",
    "recent_filters"            => "Skorašnji filteri",
    "inactive_tickets"          => "Neaktivni tiketi",
    "default_open_status_desc"  => "Izaberite podrazumevani status koji će se automatski postaviti kada korisnik otvori novi ili odgovori na tiket, a još uvek nije dobio dogovor agenta.",
    "default_reply_status"      => "Podrazumevani status za odgovor",
    "default_reply_status_desc" => "Izaberite podrazumevani status koji koji će se automatski postaviti kada korisnik odgovori na tiket, primenjuje se samo nakon što operater odgovori na tiket.",
    "ticket_reply_order_default" => "Podrazumevano, sistem će koristiti vrednost koja je izabrana u opštem podešavanju tiketa.",
    "select_a_parent"           => "Izaberi parent odeljenje...",
    "select_a_department"       => "Izaberi odeljenje...",
    "department_operator_desc"  => "Odeljenju možete dodeliti i pojedinačne agente. Ovi operatori će biti dodatak svim gore navedenim grupama.",
    "department_group"          => "Grupe u okviru odeljenja",
    "department_group_desc"     => "Odeljenju možete dodeliti čitave grupe agenata, preporučljivo ako je lista agenata velika i/ili se često menja.",
    "ticket_other_brands"       => "Tiketi u ostalim brendovima",
    "add_for_department"        => "Dodaj u odeljenje ...",
    "record_order"              => "Prevucite da biste promenili redosled zapisa.",
    "reply_all"                 => "Odgovori svima",
    "reply_without_cc"          => "Odgovori (bez CC)",
    "email_accounts"            => "Email nalozi",
    "add_another_email"         => "Dodaj drugi email nalog",
    "follow_up_date"            => "Datum za follow-up",
    "post_reply"                => "Postavi odgovor",
    "post_note"                 => "Postavi belešku",
    "ticket_details"            => "Detalji o tiketu",
    "organisation_tickets"      => "Tiketi organizacije",
    "manage_tickets"            => "Upravljaj tiketima",
    "via_channel"               => "preko :channel",
    "department_parent"         => "Parent odeljenja",
    "department_brands"         => "Brendovi odeljenja",
    "email_item"                => "Email :item",
    "from_name"                 => "Naziv",
    "from_address"              => "Adresa",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user :date",
    "prioritise_reply-to"       => "Prioritizuj Reply-to",
    "prioritise_reply-to_desc"  => "Prebacite da biste dali prioritet zaglavlju Reply-to u odnosu na zaglavlje From. Ako je omogućeno, tiketi otvoreni putem emaila otvoriće se u ime Reply-to i adrese.",
    "note_options"              => "Opcije beleški",
    "escalation_rules_desc"     => "Sledeća pravila za eskalaciju SLA plana bi trebalo da se izvršavaju nakon navedenog vremena. Ova vremena se mogu promeniti ili se pravila mogu ukloniti ako agent odgovori na ovaj tiket.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Korisnik nije registrovan. Podešavanja su postavljena tako da prijavataju email poruke samo od registrovanih korisnika.",
    "display_name"              => "Ime za prikazivanje",
    "display_name_desc"         => "Opciono, postavite samo ako želite da promenite ime za prikaz koji se koristi u odlazim email porukama u okviru ovog odeljenja, u suprotnom ostavite prazno.",
    "display_name_options"      => "Mogu se koristiti sledeće Twig promenljive:<br >{{ brand.name }} - Brend<br />{{ department.name }} - Odeljenje<br />{{ department.frontend_name }} - Ukoliko tiket pripada pododeljenjum prikazuje ime parent odeljenja.<br />{{ operator.formatted_name }} - Ime agenta<br /><em>Ime agenta neće uvek biti dostupno, stoga ga iskoristite ’not empty” uslov na primer {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Prilog je odbijen",
    "enable_subaddresses"       => "Omogući sub-adrese",
    "enable_subaddresses_desc"  => "Uključite opciju da biste omogućili korišćenje sub-dresiranja za sva odeljenja. Ovo će stvoriti jedinstvenu sub-adresu za svaki tiket koji je postavljen kao Reply-to adresa na svim odlaznim email porukama. Vaš mail server mora biti u stanju da obrađuje subadresiranje, možda će biti potrebni dodatni koraci ako koristite email piping kako biste bili sigurni da se poruke na ove adrese pravilno prosleđuju. Omogućavanjem opcije ćete moći da uklonite broj tiketa iz naslova šablona.",
    "email_replies_disabled"    => "Onemogući email odgovore",
    "disable_user_email_replies_desc" => "Blokiranje korisničkih odgovora putem emaila. Podrazumevano, email poruka će biti ignorisana, ali se može podesiti email koji će se slati korisniku promenom email šablona ispod.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Dodat na tiket",
    "user_ticket_reply"         => "Odgovor korisnika",
    "new_internal_ticket"       => "Novi interni tiket",
    "department_changed"        => "Promenjeno odeljenje",
    "operator_ticket_reply"     => "Odgovor agenta",
    "new_ticket_note"           => "Nova beleška o tiketu",
    "email_template_desc"       => "Možete odabrati email šablon koji nije podrazumevan i koji će se poslati korisniku ili agentima za bilo koju od dolenavedenih radnji. Ovaj šablon postaće podrazumevani samo za ovo odeljenje.", 
    "create_new_user"           => "Kreiraj novog korisnika",
    "user_reply_internal_ticket" => "Niste agent. Samo agenti mogu odgovarati na interne tikete.",
    "enter_email_address"       => "Unesi email adresu...",
    "email_user_frontend"       => "Obavestite korisnike email porukom",
    "email_user_frontend_desc"  => "Izaberite da li korisnici treba da budu obavešteni mejlom kada sami otvore tiket na frontend-u.",
    "department_template_disabled" => "Šablon povezan sa ovim odeljenjem je onemogućen, tako da ovaj email nije moguće poslati.",
    "verbose_email_log_desc"    => "Ukoliko se primanje mejlova loguje u okviru fajla, preporučujemo da ova opcija bude onemogućena, osim u slučajevima kada podrška zahteva kako bi uklonila eventualne greške. Logovi se čuvaju 5 dana, stariji logovi će sistem automatski očistiti.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Otvori novi tiket u ime postojećeg korisnika.",
    "canned_response_tag"       => "Tag predefinisanog odgovora|Tagovi predefinisanog odgovora",
    "response"                  => "Odgovor|Odgovori",
    "response_desc"             => "Pripremljeni odgovor može se napisati na nekoliko jezika. Odgovarajući odgovor koristiće se automatski na osnovu jezičkih preferencija korisnika.",
    "no_slaplans"               => "Nije pronađen SLA plan. Klikni <a href=':route'>ovde</a> da kreiraš jedan.",
    "filter_performance"        => "Razmatranje učinka i preporuke",
    "filter_performance_desc"   => "<li>Filteri koji odgovaraju većem broju tiketa biće sporiji, stoga izuzmite već rešene tikete.</li><li>Filteri koji koriste ”nije” uslov će uglavnom biti sporiji od filtera koji koriste ”jeste” filter.</li><li>Filteri koji proveravaju NULL vredbist (npr. tag tiketa je None) biće sporiji.</li><li>Izbegavajte više uslova koji uključuju proveru nizova/reči jer oni unose veću složenost.</li><li>Filteri koji koriste 'počinje sa' ili 'sadrži' uslove će biti sporiji od 'jednako' ili 'završava sa' uslovima.</li><li>Rešeni tiketi su izuzeti iz brojeva prikazanih u sidebar-u.</li>",
    "run_macro"                 => "Pokreni makro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Prevucite za prikaz odeljenja samo prijavljenim korisnicima i prihvatanje email poruka samo od registrovanih korisnik. Kada je omogućeno, bounce email će biti poslat neregistrovanim korisnicima koji pošalju email ovom odeljenju. Za promenu ili isključivanje ovog mejla, pogledajte ”Samo registrovani korisnici” šablon ispod.",
    "form_fields_desc"          => "Ako želite da prikupite dodatne informacije kada korisnik ostavi feedback, možete da podesite prilagođena polja koja će se prikazivati u obrascu. Polje će se zaključati kada korisnik popuni obrazac.",
    "feedback_ratings"          => "Stepen zadovoljstva korisnika (Utiče na vašu ocenu zadovoljstva korisnika)",
    "email_and_other_accounts"  => "Email nalozi i nalozi ostalih kanala",
    "delete_message"            => "Obriši poruku",
    "linked_tickets"            => "Povezani tiketi",
    "add_linked_ticket"         => "Dodaj povezan tiket",
    "create_linked_ticket"      => "Kreiraj povezani tiket",
    "copy_link"                 => "Kopiraj link",
    "forward_message"           => "Prosledi ovu poruku",
    "forward_from_here"         => "Prosledi poruku odavde",
    "forward"                   => "Prosleđivanje",
    "forward_options"           => "Opcije prosleđivanja",
    "forwarded_to"              => "Prosleđeno na",
    "new_operator_reply"        => "Novi odgovor agenta",
    "new_user_reply"            => "Novi odogvor korisnka",
    "add_bcc"                   => "Dodaj BCC",
    "at_least_one_recipient"    => "Odaberite makar jednog primaoca.",
    "forwarded_message"         => "---------- Prosleđena poruka ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Napomena: utiče samo na tikete koje imaju statusu sa omogućenom opcijom „Zatvori neaktivne tikete“",
    "close_inactive_status_desc" => "Prevucite da omogućite/onemogućite automatsko zatvaranje neaktivnih tiketa i podsetnika (”Čekanje na odgovor” i ”Tiket automatski zatvoren” šabloni). Kada je omogućeno, vreme pre slanja podsetnika može biti podešeno u opštim podešavanjima tiketa.",
    "from_header_missing"       => "Od: nedostaje zaglavlje.",
    "move_ticket"               => "Premesti tiket",
    "move_ticket_step1"         => "Korak 1: Odaberi brend da premestiš tiket.",
    "move_ticket_step2"         => "Korak 2: Odaberi odeljenje da premestiš tiket",
    "current_record"            => "Trenutni :record",
    "new_record"                => "Novi :record",
    "department_email"          => "Email odeljenja",
    "select_a_department_email" => "Odaberi email odeljenja...",
    "record_public_desc"        => "Prevucite da omogućite da :record bude omogućen.",
    "record_group_desc"         => "Odaberite ako želite da :record bude vidljiv samo određenim grupama agenata. Ostavite prazno da bi bio vidljiv svim operaterima.",
    "ticket_format_desc"        => "Može da sadrži alfanumeričke i posebne karaktere <code>-_.+!*,</code><br />Sledeće varijable takođe mogu biti korišćene: %S za redni broj | %N za nasumični broj| %L za nasumični slovo<br />Koristi {number} za ponavljanje <strong>samo</strong> nakon %N ili %L, npr. %N{4} jednako je 4 nasumičnih brojeva, %L{3} jednako je tri nasumičnih slova<br />Sledeći <a href='http://php.net/manual/en/function.date.php' target='_blank'>PHP Date</a> parametri sa prefiksom % Y,y,m,d,j,g,G,h,H,i,s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Prevucite da biste onemogućili makro i sprečili njegovo automatsko pokretanje ili prikazivanje u interfejsu tiketa.",
    "macro_order_drag"          => "Prevucite redove da biste promenili redosled makro-a.",
    "macro_order_processed"     => ":type makroi se obrađuju redom kojim se pojavljuju.",
    "macro_type"                => "Tip makroa",
    "macro_type_desc"           => "Postoje tri makro tipa na raspolaganja. Manuelni makroi mogu biti pokrenuti samo iz pregleda tiketa (view ili grid), automatski makroi se pokreću svakog sata na narešenim tiketima i hook makroi se pokreću sa određenim promenama u okviru tiketa. Automatski i hook makroi se mogu podesiti da se pokreću samo u definisanim rasporedima. Takođe, bilo koji hook makro neće pokrenuti druge hook makroe kako bi se smanjio rizik od loop-a.",
    "macro_run_at_most"         => "Pokreni najviše",
    "macro_run_times"           => "puta", // As in '5 times'
    "macro_run_at_most_desc"    => "Ograničite koliko puta se automatski makro može pokrenuti na jednom tiketu, ostavite prazno da se pokreće neograničen broj puta.",
    "macro_events_desc"         => "Izaberite jedan ili više događaja na kojima bi makro trebalo da se pokreće. Dole postavljeni uslovi biće provereni pre pokretanja makroa.",
    "macro_schedules_desc"      => "Podrazumevano, makro se pokreće 24/7, ali možete odabrati jedan ili više rasporeda, tako da makro bude aktivan samo u to vreme.",
    "macro_condition_desc"      => "Definišite tikete za koje će makro biti dostupan. Podrazumevano, bez podešenih uslova, makroi će se pokretati na svim tiketima. Najmanje jedan uslov mora biti definisan da bi se automatski makro pokrenuo.",
    "add_remove_headers"        => "Dodaj/Ukloni zaglavlje",
    "webhook_merge_fields"      => "Polje za objedinjavanje može se koristiti u URL i sadržaj polju, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">Saznaj više</a>.",
    "webhook_ticket_required"   => "Za ovu funkciju neophodno je da postoji makar jedan tiket.",
    "not_permitted"             => "Nažalost, pregled ovog tiketa nije moguć. Ukoliko mislite da je došlo do greške, kontaktirajte administratora.",
    "watch"                     => "Gledati",
    "unwatch"                   => "Prekini gledanje",
    "watching"                  => "Gleda",
    "internal_ticket"           => "Interni tiket|Interni tiketi",

    /*
     * 2.4.1
     */
    "downloading"               => "Preuzimanje...",
    "downloading_desc"          => "Ako preuzimanje ne započne automatski za nekoliko sekundi, molimo vas <a href=':href'>kliknite ovde</a> za pristup direktnom linku za preuzimanje.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Pripada :name)",
    "block_user"                => "Blokiraj korisnika",
    "merge_tickets"             => "Spoji tikete",

    /*
     * 2.5.1
     */
    "channel_account_removed"   => "Tiket kanal je deaktiviran ili uklonjen, odgovor se ne može objaviti.",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Follow-ups",
    "follow_up_multiple_active" => "Više različitih <a class='view-followup' style='text-decoration: underline;'>follow ups-a</a> je trenutno aktivno na ovom tiketu i sledeće zakazno slanje biće pokrenuto za <strong>:time</strong>.",
    "follow_up_no_actions"      => "Follow up nema nijednu akciju podešenu, potvrdite ako želite da nastavite.",
    "status_after_running"      => "Status nakon pokretanja",
    "older_messages"            => ":count starije poruke",
    "holiday_single_day"        => "Jedan dan",
    "holiday_date_range"        => "Period",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Izaberite tiket za spajanje",
    "search_number_or_subject"  => "Pretražite po broju tiketa ili naslovu",
    "im_not_sure"               => "Nisam siguran",
    "auto_reply_detected"       => "Automatski odgovor pronađen - obaveštenje neće biti poslato korisniku.",
    "cc_desc"                   => "Možete dodati druge ljude u CC ovog tiketa upisivanjem email adrese ovde.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> je sačuvao poruku kao draft",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Manuelno podešavanje",
    "unresolved"                => "Nije rešeno",
    "resolved"                  => "Rešeno",
    "manage_oauth_options"      => "Za dodavanje i upravljanje OAuth opcijama, molimo posetite sledeću stranicu <a href=\":route\">Third-Party integracije</a> .",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "Sačuvali smo  Vaš feedback.",
    "how_was_the_help"          => "Kako ste zadovoljni pruženom korisničkom podrškom?",
    "update_feedback"           => "Ažurirajte svoj odgovor",
    "verify_user"               => "Molimo proverite autentičnost korisnika.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tiketi otvoreni preko interfejsa za korisnike ili agent panela za agente.",
    "email_channel_name"        => "Email",
    "email_channel_desc"        => "Tiketi otvoreni od dolaznih emailova.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Karte i odgovori postavljeni putem API-ja.",

);
