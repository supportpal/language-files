<?php

return array(

    "customfield"               => "Namensko polje|Namenska polja",

    // Options
    "boolean"                   => "Boolean",
    "checkbox"                  => "Polje za potvrdu",
    "checklist"                 => "Lista",
    "date"                      => "Datum",
    "multiple"                  => "Više opcija",
    "options"                   => "Opcije",
    "radio"                     => "Radio dugme",
    "rating"                    => "Ocena (1 do 5)",
    "text"                      => "Tekst",
    "textarea"                  => "Polje za tekst",

    "public"                    => "Javno",
    "public_desc"               => "Namensko polje je javno prikazano na frontend-u ili je namenjeno samo osoblju.",
    "encrypted"                 => "Enkriptovano",
    "purge_desc"                => "Vrednost namenskog polja treba automatski očistiti kada se tiket reši.",
    "locked"                    => "Zaključano",
    "locked_desc"               => "Vrednost namenskog polja se ne može promeniti nakon što je podešeno.",
    "department_desc"           => "Izaberite u kojim odeljenjima je polje dostupno.",

    /*
     * 2.0.2
     */
    "please_select"             => "Molimo izaberite...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Tekst za pomoć koji će se pojaviti ispod namenskog polja i po želji može da ostane prazan.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Izaberite za koje brendove je polje dostupno.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Brisanje postojećih opcija će ukloniti već sačuvana polja sa podešenim vrednostima.",
    "regex_basic_desc"          => "Opciono dodajte regularni izraz za validaciju vrednosti namenskog polja.",
    "regex_desc"                => "Regularni izraz razlikuje velika i mala slova, nema potrebe za određivanjem graničnika regularnih izraza, a upotreba kose crte unapred biće automatski izbegnuta. Primer: ^ [a-z0-9 _-] {6,18} $ bi značio da vrednost ima 6-18 znakova i da sadrži samo kombinaciju alfanumeričkih znakova, donjih crta i crtica.",
    "regex_error_message"       => "Poruka o grešci",
    "regex_error_message_desc"  => "Po želji navedite prilagođenu poruku o grešci koja će biti prikazana ako se vrednost ne podudara sa proverom regularnog izraza, u suprotnom će biti prikazana generička poruka. Poruka će biti prikazana tačno onako kako ste je uneli, pa preporučujemo da uključite namensko ime polja kako bi poruka o grešci bila očiglednija.",
    "custom_field_values"       => "Vrednosti namenskog polja",
    "depends_on"                => "zavise od",
    "depends_on_desc"           => "Ako je izabrano, ovo polje će se prikazati korisniku samo kada je izabrana navedena vrednost polja. Vidljivost brend i odeljenja automatski će se naslediti sa polja od kojeg zavisi.",
    "select_option"             => "Molimo izaberite...",
    "purge"                     => "Očisti",
    "encrypted_desc"            => "Vrednost namenskog polja osetljiva i treba je sačuvati u šifrovanoj bazi podataka. Ovo se ne može promeniti nakon što se kreira namensko polje.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Namensko polje mora biti popuneno. Birajući između polja, liste ili više opcija, korisnik će morati da izabere makar jednu opciju.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** ENKRIPTOVANO **",
);
