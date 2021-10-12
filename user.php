<?php

return array(

    "user"                          => "Gebruiker|Gebruikers",
    "user_details"                  => "Gebruikerdetails",
    "add_user"                      => "Voeg gebruiker toe",
    "account_active"                => "Account actief",
    "account_active_desc"           => "Schakel toegang tot geautenticeerde sectie in of uit.",

    "op_settings_dept_desc"         => "Selecteer welke afdelingen de operator kan zien en tickets in kan behandelen.",

    "organisation"                  => "Organisatie|Organisaties",
    "members"                       => "Lid|Leden",
    "owner"                         => "Eigenaar",
    "manager"                       => "Manager",
    "access_level"                  => "Toegangsniveau",
    "access_level_desc"             => "Definieer het toegangsniveau van de gebruiker in de organisatie gebaseerd op het volgende schema:<br /><strong>Manager</strong> - Kan tickets opened van alle gebruikers in de oranisatie inzien en gebruikers beheren<br /><strong>Gebruiker</strong> - Kan alleen eigen tickets inzien",
    "manage_organisation"           => "Organisatie beheren",
    "leave_organisation"            => "Organisatie verlaten",
    "user_membership"               => "Gebruikerlidmaatschap",
    "transfer_ownership"            => "Eigendom overdragen",
    "transfer_ownership_desc"       => "Als huidige eigenaar van de organisatie kun je niet worden verwijderd als manager en alleen jij kunt de organisatie verwijderen. je kunt eigendom van de organisatie wel overdragen aan iemand anders. Deze actie kan niet ongedaan worden.",
    "transfer_ownership_operator"   => "Alleen de eigenaar kan de organisatie verwijderen en eruit verwijderen. Gebruik deze optie om eigendom over te zetten naar een andere gebruiker in de organisatie.",
    "start_typing_name"             => "Start met tikken van een naam...",
    "organisation_add_user"         => "Gebruiker toevoegen aan organisatie",
    "organisation_desc"             => "Elke organisatie kan <strong>managers</strong>hebben welke gebruikers kunnen beheren en andermans tickets kunnen beheren en <strong>gebruikers</strong>, elke tickets kunnen openen maar geen toegang tot andermans tickets hebben.",
    "organisation_operator_desc"    => "Voeg bestaande gebruikers toe aan deze organisatie door op \"Voeg gebruiker toe\" te klikken en te zoeken op hun naam. Let wel op dat het toevoegen van een gebruiker hun link naar een andere organisatie zal verwijderen.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Kan andere gebruikersbeheren en andermans tickets inzien.<br /><strong>Gebruiker</strong> - Kan alleen tickets voor de organisatie inzien en op eigen tickets antwoorden",
    "send_password_reset"           => "Stuur link om wachtwoord opnieuw in te stellen",

    "profile"                       => "Profiel",

    "login"                         => "Inloggen",
    "remember_me"                   => "Onthouden",
    "logout"                        => "Uitloggen",
    "return_to_login"               => "Terug naar inlogpagina",

    "user_register_disabled"        => "Registeren is op dit moment niet mogelijk.",
    "success_register"              => "Je account is aangemaakt!",
    "register_now"                  => "Registreer nu",
    "register"                      => "Registreer",
    "register_account"              => "Registreer account",
    "signed_up"                     => "Account aangemaakt",
    "last_active"                   => "Laatst actief",

    "forgot_password"               => "Wachtwoord vergeten?",
    "reset_password"                => "Wachtwoord resetten",
    "set_password"                  => "Stel wachtwoord in",
    "please_set_password"           => "Stel hier je wachtwoord opnieuw in.",
    "missing_email_or_reset"        => "E-mailadres of reset-token mist.",

    "firstname"                     => "Voornaam",
    "lastname"                      => "Achternaam",
    "formatted_name"                => "Opgemaakte Naam",
    "country"                       => "Land",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Bevestig wachtwoord",

    "confirmed"                     => "Bevestigd",
    "unconfirmed"                   => "Onbevestigd",

    "group"                         => "Gebruikersgroep|Gebruikersgroepen",
    "group_members"                 => "Groepsleden",
    "operator_group"                => "Operatorgroep|Operatorgroepen",
    "add_group"                     => "Toevoegen aan groep",

    "customfield"                   => "Eigen veld voor gebruiker|Eigen velden voor gebruiker",
    "customfield_order"             => "Sleep de regels om de volgorde aan te passen.",

    "role"                          => "Rol|Rollen",

    "operator_login_log"            => "Operator aanmeldingslogboek",
    "system_activity_log"           => "Systeem logboek",
    "activity_log"                  => "Activiteiten logboek",

    "mass_email"                    => "Bulk e-mail versturen",
    "send_email"                    => "E-mail versturen",
    "choose_template"               => "Template kiezen...",

    "ldap_account"                  => "LDAP Account|LDAP Accounts",
    "ldap_operator_desc"            => "Zoek naar een bestaande operator, of maak een nieuwe.",
    "ldap_server"                   => "LDAP Server",
    "ldap_server_desc"              => "De server hostname. Je kunt ook de volledige LDAP URI invulen, zoals ldaps://ldap.server:1234/ welke via SSL verbinding maakt met port 1234.",
    "ldap_username"                 => "LDAP Gebruikersnaam",
    "ldap_username_desc"            => "De gebruikersnaam met welke de operator inlogt op de heldesk).",
    "ldap_rdn"                      => "LDAP RDN of DN",
    "ldap_rdn_desc"                 => "De distinguished name voor de LDAP gebruikersnaam, zoals: cn=Sample Gebruiker,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP Details",

    "operator_details"              => "Operatordetails",

    "email_notifications"           => "E-mailmeldingen",
    "email_notifications_desc"      => "De e-mailmeldingen die zijn ontvangen door het systeem.",

    "enable_ldap"                   => "Schakel LDAP Login in",
    "enable_ldap_desc"              => "Indien je LDAP gebruikt, kun je deze inschakkelen zodat operators hiermee kunnen inloggen. Na het inschakelen, ga naar de LDAP Accounts instellingen om het in te stellen.",
    "user_reg_enabled"              => "Gebruikersregistratie",
    "user_reg_enabled_desc"         => "Nieuwe gebruikersregistratie via frontend inschakelen.",
    "user_reg_captcha"              => "Captcha gebruikersregistratie",
    "user_reg_captcha_desc"         => "Moet er een captcha worden gebruikt tijdens registratie?",
    "user_name_format"              => "Naam formaat",
    "first_last"                    => "Voornaam Achternaam",
    "last_first"                    => "Achternaam Voornaam",
    "first_l"                       => "Voornaam L.",
    "f_last"                        => "F. Achternaam",
    "password_length"               => "Wachtwoordlengte",
    "password_length_desc"          => "De minimale lengte in tekens voor het wachtwoord tijdens gebruikersregistratie of account update.",
    "password_strength"             => "Wachtwoordsterkte",
    "password_strength_desc"        => "Selecteer welke tekens verplicht zijn bij het instellen van een wachtwoord.",
    "password_str_must_contain"     => "Moet bevatten:",
    "password_str_letters"          => "Minstens een letter",
    "password_str_digits"           => "Minstens een cijfer.",
    "password_str_case"             => "Zowel hoofd- als kleine letters.",
    "password_str_symbols"          => "Een teken.",

    "load_template"                 => "Template laden",
    "load_template_desc"            => "Kies een template welke de huige onderwerp en bericht zal vervangen.",
    "clear_template"                => "Lege template",

    "personal_settings"             => "Persoonlijke instellingen",
    "personal_settings_desc"        => "Werk je profiel bij en wijzig instellingen die alleen van toepassing zijn op je eigen operatoraccount.",
    "two_fa"                        => "Tweefactorauthenticatie (2FA)",
    "notifications"                 => "Meldingen",
    "two_fa_success_disabled"       => "Tweefactorauthenticatie (2FA) is uitgeschakeld.",
    "two_fa_success_enabled"        => "Tweefactorauthenticatie (2FA) is ingeschakeld.",
    "two_fa_incorrect"              => "De code was niet correct, controleer of de ingevulde code correct is en of de servertijd klopt.",
    "two_fa_enabled"                => "Tweefactorauthenticatie (2FA)",
    "two_fa_disable"                => "Om tweefactorauthenticatie (2FA) uit te schakelen, vul je hieronder een tweefactorauthenticatie (2FA) code in.",
    "two_fa_enable"                 => "Om tweefactorauthenticatie (2FA) in te schakelen, zorg dat je account op je telefoon onderstaande details gebruikt en bevestig.",
    "verify_code"                   => "tweefactorauthenticatie (2FA) code",
    "verify_and_disable"            => "tweefactorauthenticatie (2FA) uitschakelen",
    "verify_and_enable"             => "tweefactorauthenticatie (2FA inschakelen)",
    "verify_code_desc"              => "Vul een geldige tweefactorauthenticatie (2FA) code in om deze uit te schakelen.",
    "qr_code"                       => "QR Code",
    "two_fa_code"                   => "tweefactorauthenticatie (2FA) code",
    "two_fa_secret"                 => "tweefactorauthenticatie (2FA) secret",
    "two_fa_secret_desc"            => "Bewaar dit op een veilige plaats, want je hebt dit nodig om het authenticator-account opnieuw aan je telefoon toe te voegen als je de toegang verliest.",
    "display_notifications"         => "Meldingen tonen",
    "display_notifications_desc"    => "Het systeem zal waarschuwen wanneer er nieuwe tickets of antwoorden worden aangemaakt, of wanneer andere operators inloggen. Je kunt kiezen tussen bureaubladmeldingen of meldingen in de browser, of deze volledig uitschakelen.",
    "desktop_notifications"         => "Desktopmeldingen",
    "browser_notifications"         => "Browsermeldingen",

    "search_for_user"               => "Zoek naar gebruiker...",
    "select_operator"               => "Zoek naar operator...",
    "select_group"                  => "Zoek naar groep...",

    "your_ip_has_been_banned"       => "Je IP is geblokkeerd.",
    "password_reset_success"        => "Wachtwoord succesvol gereset! ",

    "simpleauth_token_expired"      => "Het toegangstoken is verlopen.",
    "simpleauth_token_invalid"      => "Het opgegeven toegangstoken is ongeldig.",
    "simpleauth_invalid_guard"      => "Kan niet inloggen omdat er geen geldige gebruiker is.",
    "simpleauth_not_allowed"        => "Operators kunnen momenteel niet inloggen met SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "E-mail historie",
    "view_email"                    => "Bekijk E-mail",

    "ban_after_count"               => "Blokkeer IP na mislukte inlogpogingen",
    "ban_after_count_user"          => "Het aantal mislukte inlogpogingen na welke het ipadres van de gebruiker wordt geblokkeerd en zij gedurende de ingestelde tijd niet meer in kunnen loggen op de frontend. Wanneer deze op 0 wordt ingesteld wordt er niet geblokkeerd.",
    "ban_after_count_operator"      => "Het aantal mislukte inlogpogingen na welke het ipadres van de gebruiker wordt geblokkeerd en zij gedurende de ingestelde tijd niet meer in kunnen loggen op het controllerpanel of de API. Wanneer deze op 0 wordt ingesteld wordt er niet geblokkeerd.",
    "ban_length"                    => "Lengte van de IP blokkade",
    "ban_length_desc"               => "De lengte van de ip blokkade wanneer het ingestelde maximum aan inlogpogingen per dag wordt bereikt.",
    "n_failed_logins"               => ":count mislukte inlogpogingen in 24 uur",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Even pauze...",
    "operator_session_expired"      => "Je was inactief of er is vanaf een ander apparaat ingelogd dus doen we even de ogen dicht. Door opnieuw in te loggen wordt deze sessie weer actief.",
    "log_back_in"                   => "Opnieuw inloggen",
    "all_users"                     => "Alle gebruikers",
    "all_operators"                 => "Alle operators",
    "email_per_batch"               => "E-mails per batch",
    "email_per_batch_desc"          => "Aantal e-mails dat tegelijkertijd kan worden verstuurd.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "De pauze tussen de e-mailbatches in minuten, 1 minuut is het minimum.",
    "select_user_groups"            => "Selecteer gebruiker/operatorgroepen of type het e-mailadres in...",
    "mass_email_sending_time"       => "Het zal ongeveer :time duren om alle e-mails te versturen.",
    "organisations_enabled"         => "Organisaties ingesteld",
    "organisations_enabled_desc"    => "Gebruikers kunnen een organisatie toevoegen aan hun profiel en andere gebruikers toevoegen aan deze organisatie. Wanneer je alleen met losse klanten werkt kun je deze optie uitschakkelen",
    "manager_notifications"         => "Organisatie Manager meldingen",
    "manager_notifications_desc"    => "Wanneer managers of organisaties e-mailupdates moeten ontvangen or tickets geopend kunnen worden door andere gebruikers in de organisatie. Elke manager heeft een eigen optie hiervoor in het profiel maar met deze instelling kan dat worden overschreven.",
    "manager_email_notifications_desc" => "Indien ze meldingen moeten krijgen van updates op tickets die geopend zijn door andere gebruikers in de organisatie.",
    "organisation_notifications_desc" => "Indien je meldingen wilt krijgen van updates op tickets die geopend zijn door andere gebruikers in de organisatie.",
    "select_operator_group_desc"    => "Selecteer ten minste een operatorgroep voor deze operator.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Eigen veld voor organisatie veld|Eigen velden voor organisatie",
    "recent_users"                  => "Recente gebruikers",
    "recent_organisations"          => "Recente organisaties",
    "group_brand_desc"              => "Selecteer welke merken de operators in deze group kunnen bekijken, maken en verwijderen (afhankelijk van rechten) tickets en andere content.",
    "select_operators"              => "Selecteer operator(s)...",
    "select_groups"                 => "Selecteer groep(en)...",
    "group_department_desc"         => "Voeg alle gebruikers uit deze groep toe aan afdelingen, operators kunnen individueel worden toegevoegd in de instellingen van de afdeling.",
    "op_settings_group_dept"        => "Toegewezen via operatorgroepen:",
    "op_settings_group_dept_desc"   => "Deze afdelingen zijn automatisch overgezet vanaf de bovenstaande operatorgroepen. Om ze toe te wijzen via een operatorgroep, bewerk de operatorgroep or afgelinginstelligen.",
    "op_settings_individual_dept"   => "Individueel toegewezen:",
    "op_settings_individual_dept_desc" => "Deze afdelingen komen mee wanneer een operator is toegevoegd aan een bovenstaand afdeling.",
    "also_registered_other_brand"   => "Deze gebruiker is ook geregistreerd bij het merk :brands brand.|Deze gebruiker is ook geregistreerd bij de merken :brands.",
    "signature"                     => "Handtekening|Handtekeningen",
    "signature_desc"                => "Maak persoonlijke handtekeningen voor tickets, met de optie om tickets aan de hand van merk/afdeling aan te passen. De standaard ondertekening wordt gebruikt wanneer een ondertekening voor een specifieke afdeling of merk niet gevonden kan worden.",
    "operator_signature"            => "Operator handtekeningen|Operator handtekeningen",
    "ticket_signature_desc"         => "Stel de standaard handtekeningen van de operator in.",
    "operator_signature_desc"       => "Andere handtekeningen voor de specifieke afdelingen en/of merken kunnen worden ingesteld in de <a href=':route' target='_blank'>Operator Signatures</a> sectie.",
    "view_organisation"             => "Bekijk organisatie",
    "new_owner"                     => "Nieuwe eigenaar",
    "operator_role"                 => "Operatorrol|Operatorrollen",
    "manage_users"                  => "Gebruikers beheren",
    "manage_organisations"          => "Organisaties beheren",
    "manage_operators"              => "Operators beheren ",
    "user_profile"                  => "Gebruikersprofiel",
    "organisation_access_level"     => "Organisatie toegangsniveau",
    "organisation_notifications"    => "Organisatie meldingen",
    "organisation_users"            => "Organisatie gebruikers",
    "organisation_users_ticket"     => "Bovenstaand is een lijst van de organisatie's managers die ook worden gemailed wanneer er updates zijn op dit ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Wachtwoord veranderen",
    "current_password"              => "Huidig wachtwoord",
    "new_password"                  => "Nieuw wachtwoord",
    "personal_confirm_password"     => "Bevestig je nieuwe wachtwoord middels het oude wachtwoord.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Zoek naar gebruiker/operator...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "De indeling die wordt gebruikt om gebruikersnamen in het hele systeem weer te geven .",
    "operator_name_format_desc"     => "De indeling die wordt gebruikt om namen van operators in het hele systeem weer te geven.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Verwijderen van :record?",
    "remove_from_warn"              => "<Hiermee wordt de gebruiker strong>:name</strong>  definitief verwijderd uit :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social media Login",
    "login_via"                     => "Inloggen via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Log in om het koppelen van je social media account te voltooien. ",
    "social_linking_register"       => "Vul de onderstaande gegevens in om de registratie van je account te voltooien. De sociale account wordt automatisch gekoppeld .",
    "already_registered"            => "Al geregistreerd?",
    "linked_accounts"               => "Gelinkte Accounts",
    "unlink_account"                => ":record account loskoppelen ",
    "unlink_account_warning"        => "Als je social media account loskoppelt, kan deze niet langer worden gebruikt om rechtstreeks op het account in te loggen .",
    "failed_login"                  => "Misluke login|Misluke logins",
    "resend_confirmation"           => "<strong><a href=':link'>Klik hier</a></strong> om een nieuwe bevestigingsmail te sturen.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "Je moet de  \":permission\" permissie hebben om dit te kunnen doen",
    "deleted_user"                  => "Verwijderde gebruiker",
    "access_level_not_owner"        => "Het is niet mogelijk om het toegangsniveau van organisatie-eigenaren te wijzigen. Draag eerst het eigendom van de organisatie over aan een andere gebruiker door de organisatie te bekijken en op het tabblad 'Gebruikers' te klikken.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Selecteer een bestaande of voer een nieuwe organisatie in... ",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Voer elk domein in dat eigendom is van de organisatie. Gebruikers die zich registreren met een e-mailadres dat tot een van die domeinen behoort, worden automatisch aan de organisatie toegevoegd. We raden aan om te verifiëren dat de gebruiker echt deel uitmaakt van de organisatie als hij niet heeft bevestigd dat hij eigenaar is van zijn e-mailadres.",
    "changing_email_desc"           => "Als je het e-mailadres wijzigt, moet de gebruiker het eigendom van zijn e-mailadres bevestigen wanneer hij de volgende keer inlogt.",
    "unconfirmed_user_desc"         => "De gebruiker heeft het eigendom van dit e-mailadres niet bevestigd. ",
    "unregistered_user_desc"        => "Deze account is automatisch gemaakt zonder wachtwoord. Je kunt een bevestigingsmail sturen om een eigen account te laten aanmaken of hieronder een wachtwoord voor in te stellen.",
    "send_confirmation_email"       => "Bevestigingsmail sturen",
    "mark_as_confirmed"             => "Markeer als bevestigd",
    "password_reset_already"        => "Je heeft al bevestigd dat je eigenaar bent van dit e-mailadres inloggen is nu mogelijk.",
    "unconfirmed_account"           => "Controleer je e-mail om te bevestigen dat je eigenaar bent van dit e-mailadres.",
    "success_register_desc"         => "Bedankt voor het registreren van een account. Controleer je e-mail om de accountconfiguratie te voltooien.",
    "resend_confirmation_sent"      => "Er is een nieuwe bevestigings-e-mail verzonden die binnen enkele minuten aankomt.",
    "register_confirm_desc"         => "Bedankt voor het bevestigen van het eigendom van je e-mail. Voer hieronder een wachtwoord in om het instellen van je account te voltooien .",
    "thank_you_confirm"             => "Bedankt voor het bevestigen van het eigendom van je e-mailadres. ",
    "use_gravatar"                  => "Gravatar gebruiken",
    "use_gravatar_desc"             => "Gravatar is een service die een wereldwijd erkende avatar biedt aan zijn geregistreerde gebruikers. De helpdesk stuurt automatisch een verzoek naar secure.gravatar.com met een MD5-hash van elk e-mailadres van de gebruiker om te helpen bij het weergeven van een avatar. De MD5-hash kan ook publiekelijk zichtbaar zijn in de frontend-HTML. We raden aan om uw privacybeleid bij te werken als je deze functie inschakelt.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "Om de aanpassing van je e-mailadres te voltooien, klik je op de link die is verzonden naar :email om het eigendom van het nieuwe e-mailadres te bevestigen.",
    "confirmation"                  => "Bevestiging",
    "confirmation_email_in_use"     => "Het e-mailadres wordt al gebruikt door een andere account.",
    "continue_to_login"             => "Ga verder naar <a href=':route'>login</a>.",
    "reset_request_desc"            => "Als er een account is gevonden, ontvangt je binnenkort een e-mail waarmee je wachtwoord opnieuw kunt instellen.",
    "password_reset_error"          => "De link is mogelijk verlopen. Als je link om wat voor reden dan ook niet werkt, vraag dan een nieuwe aan.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Account is gekoppeld aan een LDAP-service. Log in met je LDAP-gebruikersnaam en wachtwoord.",
    "operator_message"              => "Operatorberichten",
    "force_two_fa"                  => "Tweefactorauthenticatie (2FA) forceren",
    "force_two_fa_desc"             => "Forceer tweefactorauthenticatie (2FA) voor alle accounts. Elk account zonder 2FA ingeschakeld, wordt door de stappen geleid om het in te stellen wanneer ze de volgende keer inloggen. ",
    "two_fa_required"               => "Tweefactorauthenticatie (2FA) is vereist. Volg de onderstaande informatie om door te gaan.",
    "two_fa_user_enable"            => "De gebruiker kan tweefactorauthenticatie (2FA) inschakelen op zijn account in zijn instellingen.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Sta gebruikers toe zich te registreren en in te loggen met hun sociale media account(s).",
    "manage_social_login_options"   => "Ga naar de pagina <a href=\":route\"> Integraties van derden </a> om opties voor sociaal inloggen toe te voegen of te beheren.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Download en installeer een van de volgende applicaties en scan de QR-code of voer de geheime sleutel in. Hiermee wordt je account op het apparaat ingesteld, kun je het account bekijken en wordt een 6-cijferige code gegenereerd die je moet invoeren om de installatie te verifiëren en te voltooien. Zorg ervoor dat je op verifiëren klikt voordat de code verloopt. De servertijd moet gesynchroniseerd zijn met een NTP-server om goed te kunnen functioneren.",
    "two_fa_successfully_enabled"   => "Tweefactorauthenticatie (2FA) is succesvol ingeschakeld.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Telefoonnummer|Telefoonnummers",

    /*
     * 3.6.0
     */
    "security_settings"             => "Veiligheidsinstellingen",
    "security_settings_desc"        => "Werk je wachtwoord bij, schakel tweefactorauthenticatie (2FA) in en beheer andere beveiligingsgerelateerde instellingen voor je account. ",
    "active_sessions"               => "Actieve sessies",
    "active_sessions_desc"          => "Dit is een lijst met apparaten die zijn ingelogd op je account, de sessies die je niet herkend kunnen ingetrokken worden. ",
    "current_session"               => "huidige sessie",
    "logged_in"                     => "Ingelogd",
    "revoke_session_desc"           => "Als je een sessie intrekt, wordt het apparaat afgemeld.",

);
