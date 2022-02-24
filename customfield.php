<?php

return array(

    "customfield"               => "Champ personnalisé|Champs personnalisés",

    // Options
    "boolean"                   => "Booléen",
    "checkbox"                  => "Checkbox",
    "checklist"                 => "Cases à cocher",
    "date"                      => "Date",
    "multiple"                  => "Selection multiple",
    "options"                   => "Options",
    "radio"                     => "Boutons radio",
    "rating"                    => "Évaluation (1 à 5)",
    "text"                      => "Texte",
    "textarea"                  => "Zone de texte",

    "public"                    => "Public",
    "public_desc"               => "Si le champ sur mesure est visible au public ou si c'est seulement pour le staff.",
    "encrypted"                 => "Chiffré",
    "purge_desc"                => "Si le champ sur mesure doit être supprimé dès que le ticket est résolu.",
    "locked"                    => "Verrouillé",
    "locked_desc"               => "Si le champ sur mesure ne peut pas être modifié par un utilisateur une fois enregistré.",
    "department_desc"           => "Sélectionnez le département où ce champ doit être disponible.",

    /*
     * 2.0.2
     */
    "please_select"             => "Veuillez sélectionner...",

    /*
     * 2.0.3
     */
    "description_desc"          => "Le texte d'aide apparaissant sous le champ sur mesure. Ce champ peut rester vide.",

    /*
     * 2.1.0
     */
    "brand_desc"                => "Choisir les marques où ce champ doit être disponible.",

    /*
     * 2.3.0
     */
    "option_warning"            => "Supprimer des options déjà existantes va supprimer les champs déjà enregistrés possédant ces valeurs.",
    "regex_basic_desc"          => "Veuillez spécifier une expression régulière pour valider le champ sur mesure (optionnel).",
    "regex_desc"                => "L'expression régulière est sensible à la casse : Il n'y a pas besoin de mettre de délimiteurs, et les / seront ignorés. Exemple : ^[a-z0-9_-]{6,18}$ forcerait le champ à être entre 6 et 18 caractères de long, contenant un mix de caractères alphanumériques, des tirets et des tirets du bas.",
    "regex_error_message"       => "Message d'erreur de validation",
    "regex_error_message_desc"  => "Veuillez spécifier un message d'erreur spécialisé qui sera affiché si la valeur ne respecte pas l'expression régulière choisie (optionnel). Si aucun message n'est choisi, un message par défaut sera affiché.",
    "custom_field_values"       => "Valeurs des champs sur mesure",
    "depends_on"                => "Depend de",
    "depends_on_desc"           => "Si sélectionné, ce champ ne sera montré à l'utilisateur que si la valeur spécifique d'un chat est selectionnée.",
    "select_option"             => "Selectionnez une option...",
    "purge"                     => "Purge",
    "encrypted_desc"            => "Si la valeur du champ sur mesure est sensible et devrait être sauvegardée chiffrée dans la base de donneés. Cette information ne peut plus être changée une fois le champ créé.",

    /*
     * 2.3.1
     */
    "required_desc"             => "Si le champ sur mesure est obligatoire. Pour les checkbox, checklist, le fait d'en cocher une minimum sera requis.",

    /*
     * 3.3.0
     */
    "encrypted_value"           => "** CHIFFREE **",
);
