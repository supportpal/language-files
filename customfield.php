<?php

return array(

    "customfield"               => "Eigen veld|Eigen Velden velden",

    // Options
    "boolean"                   => "Boolean",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Checklist",
    "date"                      => "Datum",
    "multiple"                  => "Meerdere Opties",
    "options"                   => "Opties",
    "radio"                     => "Radio Knoppen",
    "rating"                    => "Beoordeling (1 tot 5)",
    "text"                      => "Tekst",
    "textarea"                  => "Tekstveld",

    "public"                    => "Openbaar",
    "public_desc"               => "Als het aangepaste veld openbaar wordt weergegeven op de frontend of alleen voor personeel is.",
    "encrypted"                 => "Versleuteld",
    "purge_desc"                => "Of de aangepaste veldwaarde automatisch moet worden verwijderd wanneer het ticket is opgelost.",
    "locked"                    => "Vergrendeld",
    "locked_desc"               => "Als de aangepaste veldwaarde niet kan worden gewijzigd door de gebruiker nadat deze is ingesteld.",
    "department_desc"           => "Kies in welke afdelingen het veld beschikbaar is.",

    /*
     * 2.0.2
     */
    "please_select"             => "Maak een keuze...",

    /*
     * 2.0.3
     */
    "description_desc"          => "De hulptekst wordt onder het veld getoond en kan desgewenst leeggelaten worden.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Kies voor welke merken het veld beschikbaar is.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Als je bestaande opties verwijdert, worden alle opgeslagen velden gewist waarin die waarden momenteel zijn geselecteerd.",
    "regex_basic_desc"          => "Geef optioneel een reguliere expressie op om de aangepaste veldwaarde te valideren.",
    "regex_desc"                => "De regex is hoofdlettergevoelig, het is niet nodig om regex-scheidingstekens op te geven, en het gebruik van schuine strepen wordt automatisch overgeslagen. Voorbeeld: ^[a-z0-9_-]{6,18}$ zou afdwingen dat de waarde 6-18 tekens lang is en alleen een combinatie van alfanumerieke tekens, onderstrepingstekens en streepjes bevat.",
    "regex_error_message"       => "Validatiefoutbericht",
    "regex_error_message_desc"  => "Optionally specify a custom error message that will be shown if the value does not match the regex validation, otherwise a generic message will be shown. The message will be shown exactly as entered, therefore we recommend to include the custom field name to make the error message more obvious.",
    "custom_field_values"       => "Aangepaste veldwaarden",
    "depends_on"                => "Afhankelijk Van",
    "depends_on_desc"           => "Indien geselecteerd, wordt dit veld alleen aan de gebruiker getoond wanneer de opgegeven veldwaarde is geselecteerd. De zichtbaarheid van het merk en de afdeling wordt automatisch overgenomen van het veld waarvan het afhankelijk is. ",
    "select_option"             => "Selecteer een optie...",
    "purge"                     => "Opschonen",
    "encrypted_desc"            => "Als de aangepaste veldwaarde gevoelig is en versleuteld in de database moet worden opgeslagen. Dit kan niet meer worden gewijzigd nadat het aangepaste veld is gemaakt.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Als het aangepaste veld moet worden ingevuld. Voor het selectievakje, de checklist of meerdere typen opties moet de gebruiker ten minste één optie selecteren.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** VERSLEUTELD **",
);
