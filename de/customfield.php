<?php

return array(

    "customfield"               => "Benutzerdefiniertes Feld|Benutzerdefinierte Felder",

    // Options
    "boolean"                   => "Boolean",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Checklist",
    "date"                      => "Datum",
    "multiple"                  => "Multiple Optionen",
    "options"                   => "Optionen",
    "password"                  => "Passwort",
    "radio"                     => "Radio Buttons",
    "rating"                    => "Bewertung (1 bis 5)",
    "text"                      => "Text",
    "textarea"                  => "Textarea",

    "required_desc"             => "Soll das Feld ein Pflichtfeld sein?.",
    "public"                    => "Öffentlich",
    "public_desc"               => "Soll jeder das Feld sehen können, oder nur die Mitarbeiter?",
    "encrypted"                 => "Verschlüsselt",
    "encrypted_desc"            => "Soll das Feld verschlüsselt in der Datenbank gespeichert werden?",
    "purge"                     => "Löschen",
    "purge_desc"                => "Soll das Ticket gelöscht werden, nachdem es als \"gelöst\" markiert wurde?",
    "locked"                    => "Gesperrt",
    "locked_desc"               => "Soll der Benutzer das Feld nur einmal setzen/bearbeiten können?",
    "department_desc"           => "Welcher Abteilung soll das Feld zur Verfügung stehen?",

    /*
     * 2.0.2
     */
    "please_select"             => "Bitte auswählen...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Hilfstext der unterhalb des Feldes angezeigt wird - kein Pflichtfeld",

    /*
     * 2.1.0
     */
    "brand_desc"                => "In welchen Marken soll das Feld zur Verfügung stehen.",
 /*
     * 2.3.0
     */
    "option_warning"            => "Das löschen existierender Optionen wird alle gespeichert Felder die aktuell diese Option haben löschen",
    "regex_basic_desc"          => "Optional kann die Eingabe mit einer Regular Expression geprüft werden.",
    "regex_desc"                => "Die Regular Expression ist berücksichtigt Groß und Kleinschreibung, es müssen keinen RegEx Trennzeichen benutzt werden., Schrägstriche werden automatisch codiert. Example: ^[a-z0-9_-]{6,18}$ would enforce that the value is 6-18 characters long and contains only a mix of alphanumeric characters, underscores and dashes.",
    "regex_error_message"       => "Überprüfungsfehlermeldung",
    "regex_error_message_desc"  => "Opitonal kann einen Fehlermeldung für disen Fall angegeben werden, ansonsten wird einen Standardmeldung generiert. Die Meldung wird genauso angezeigt wie sie angegeben wird. Deshalb empfehlen wir den Feldnamen mit anzugeben um die Meldung klar zuordnen zu können.",
    "custom_field_values"       => "Benutzerdefinierte Feldwerte",
    "depends_on"                => "hängt ab von",
    "depends_on_desc"           => "Wenn aktiviert wird das Feld nur angezeigt wenn der User den angegbenen Wert ausgewählt hat. Die Marken und Abteilungssicherheit wird vom bezogenen Feld vererbt.",
    "select_option"             => "Wähle eine Option...",
    "purge"                     => "löschen",
    "encrypted_desc"            => "Soll das benutzerdefinierte Feld verschlüsselt in der Datenbank gespeichert werden. Diese Einstellung kann im nachhineinnicht mehr geändert werden.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Muss das benutzerdefinierte Feld ausgfüllt sein. Für checkbox, checklist oder multile Option type, muss der Benutzer mindestens eine option ausgewählt haben.",	  

);
