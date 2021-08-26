<?php

return array(

    "user"                          => "Användare",
    "user_details"                  => "Användardetaljer",
    "add_user"                      => "Lägg till användare",
    "account_active"                => "Konto aktivt",
    "account_active_desc"           => "Växla för att aktivera eller avaktivera tillgång till autentiserade sektioner.",

    "op_settings_dept_desc"         => "Välj vilka avdelningar operatören kan titta och svara på ärenden i",

    "organisation"                  => "Organisation|Organisationer",
    "members"                       => "Medlem|Medlemmar",
    "owner"                         => "Ägare",
    "manager"                       => "Chef",
    "access_level"                  => "Åtkomstnivå",
    "access_level_desc"             => "Definiera åtkomstnivån för användaren i organisationen baserat på följande schema:<br /><strong>Chef</strong> - Kan titta på ärenden öppnade av alla användare i organisationen och hantera användare i organisationen<br /><strong>Användare</strong> - Kan enbart titta på ärenden öppnade av sig själv",
    "manage_organisation"           => "Hantera organisation",
    "leave_organisation"            => "Lämna organisation",
    "user_membership"               => "Användarmedlemskap",
    "transfer_ownership"            => "Flytta ägarskap",
    "transfer_ownership_desc"       => "Som den nuvarande ägaren av organisationen kan du inte tas bort som chef och bara du kan ta bort organisationen. Du kan flytta ägarskapet till någon annan men var uppmärksam på att du inte kan ångra handlingen.",
    "transfer_ownership_operator"   => "Bara ägaren kan ta bort organisationen och kan inte tas bort från den. Använd detta val för att ge ägarskapet till en annan användare inom organisationen.",
    "start_typing_name"             => "Börja skriva ett namn...",
    "organisation_add_user"         => "Lägg till användare till organisation",
    "organisation_desc"             => "Varje organisation kan ha <strong>chefer</strong> som kan hantera användare och läsa och svara andras ärenden och <strong>användare</strong> som kan öppna ärenden men inte läsa eller svara på andra ärenden.",
    "organisation_operator_desc"    => "Lägg till existerande användare till denna organisation genomn att klicka på \"Lägg till användare\" och sök efter deras namn. Notera att skapandet av en användare tar bort kopplingar de kan ha med en annan organisation.",
    "organisation_user_desc"        => "<strong>Chef</strong> - kan hantera andra användare och läsa och svara andra användares ärenden.<br /><strong>Användare</strong> - kan bara öppna ärenden på uppdrag av organisationen och svara på egna ärenden.",
    "send_password_reset"           => "Skicka lösenordåterställningslänk",

    "profile"                       => "Profil",

    "login"                         => "Logga in",
    "remember_me"                   => "Kom ihåg mig",
    "logout"                        => "Logga ut",
    "return_to_login"               => "Tillbaka till login",

    "user_register_disabled"        => "Publik användarregistrering är för närvarande avaktiverad.",
    "success_register"              => "Konto registrerat!",
    "register_now"                  => "Registrera nu",
    "register"                      => "Registrera",
    "register_account"              => "Registrera konto",
    "signed_up"                     => "Anmäld",
    "last_active"                   => "Senast aktiv",

    "forgot_password"               => "Glömt lösenord?",
    "reset_password"                => "Återställ lösenord",
    "set_password"                  => "Sätt ett lösenord",
    "please_set_password"           => "Skriv in ditt nya lösenord här nedan.",
    "missing_email_or_reset"        => "E-postadressen saknas eller har ingen återställningstoken.",

    "firstname"                     => "Förnamn",
    "lastname"                      => "Efternamn",
    "formatted_name"                => "Formaterat namn",
    "country"                       => "Land",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Bekräfta lösenord",

    "confirmed"                     => "Bekräftat",
    "unconfirmed"                   => "Obekräftat",

    "group"                         => "Användargrupp|Användargrupper",
    "group_members"                 => "Gruppmedlemmar",
    "operator_group"                => "Operatörsgrupp|Operatörsgrupper",
    "add_group"                     => "Lägg till grupp",

    "customfield"                   => "Användarskräddarsytt fält|Användarskräddarsydda fält",
    "customfield_order"             => "Dra raderna för att ändra ordningen som de skräddarsydda fältet visas för användare.",

    "role"                          => "Roll|Roller",

    "operator_login_log"            => "Operatörinloggningslog",
    "system_activity_log"           => "Systemaktivitetslog",
    "activity_log"                  => "Aktivitetslog",

    "mass_email"                    => "Skicka masse-post",
    "send_email"                    => "Skicka e-post",
    "choose_template"               => "Välj mall...",

    "ldap_account"                  => "LDAP-konto|LDAP-konton",
    "ldap_operator_desc"            => "Söker efter en existerande operatör eller skapar en ny.",
    "ldap_server"                   => "LDAP-server",
    "ldap_server_desc"              => "Serverns hostnamn. Alternativt kan du specifiera den fulla LDAP-URI:n. Exempel: ldaps://ldap.server:1234/ kommer ansluta via SSL till porten 1234.",
    "ldap_username"                 => "LDAP-användarnamn",
    "ldap_username_desc"            => "Användarnamnet som operatören kommer använda för att logga in till helpdesken (deras LDAP-användarnamn).",
    "ldap_rdn"                      => "LDAP RDN eller DN",
    "ldap_rdn_desc"                 => "Det distingerade för LDAP-användarnamnet, till exempel: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP-detaljer",

    "operator_details"              => "Operatördetaljer",

    "email_notifications"           => "E-postnotifikationer",
    "email_notifications_desc"      => "E-postnotifikationerna som kommer mottas från systemet.",

    "enable_ldap"                   => "Tillåt LDAP-inloggning",
    "enable_ldap_desc"              => "Om du använder LDAP kan du aktivera det för operatörsinloggning. Efter att det har aktiverats kan du gå till LDAP-kontoinställningssidan för konfiguration.",
    "user_reg_enabled"              => "Användarregistrering tillåten",
    "user_reg_enabled_desc"         => "Tillåt nya användare att registrera ett konto i framsidan.",
    "user_reg_captcha"              => "Användarregistreringscaptcha",
    "user_reg_captcha_desc"         => "Om captchan ska synas för nya användare vid registrering.",
    "user_name_format"              => "Namnformat",
    "first_last"                    => "För efter",
    "last_first"                    => "Efter för",
    "first_l"                       => "För e.",
    "f_last"                        => "F. efter",
    "password_length"               => "Lösenordslängd",
    "password_length_desc"          => "Den minsta teckenlängden för lösenord vid skapande eller uppdaterande av konto.",
    "password_strength"             => "Lösenordsstyrka",
    "password_strength_desc"        => "Välj vilka tecken som krävs vid registrering av ett nytt användarkonto.",
    "password_str_must_contain"     => "Måste innehålla:",
    "password_str_letters"          => "Åtminstone en bokstav.",
    "password_str_digits"           => "Åtminstone en siffra.",
    "password_str_case"             => "Både stora och små bokstäver.",
    "password_str_symbols"          => "Åtminstone en symbol.",

    "load_template"                 => "Ladda mall",
    "load_template_desc"            => "Vid val av mall ersätts det för närvarande använda ämnet och meddelandet för e-post.",
    "clear_template"                => "Rensa mall",

    "personal_settings"             => "Personliga inställningar",
    "personal_settings_desc"        => "Uppdatera din profil och ändra inställningar som berör ditt egna operatörskonto.",
    "two_fa"                        => "Tvåfaktorsautensiering",
    "notifications"                 => "Notifikationer",
    "two_fa_success_disabled"       => "Tvåfaktorsautensiering har avaktiverats.",
    "two_fa_success_enabled"        => "Tvåfaktorsautensiering har aktiverats.",
    "two_fa_incorrect"              => "Koden är inkorrekt. Se till att koden du skrev in är korrekt och att servertiden är synkroniserad.",
    "two_fa_enabled"                => "2FA aktiverat",
    "two_fa_disable"                => "För att avaktivera 2FA, verifiera här nedan.",
    "two_fa_enable"                 => "För att aktivera 2FA, sätt upp kontot på din telefon med detaljer här nedanför och verifiera.",
    "verify_code"                   => "Verifiera kod",
    "verify_and_disable"            => "Verifiera & avaktivera",
    "verify_and_enable"             => "Verifiera & aktivera",
    "verify_code_desc"              => "Skriv in en giltig kod för ditt 2FA-konto för att avaktivera 2FA-autentisering.",
    "qr_code"                       => "QR-kod",
    "two_fa_code"                   => "2FA-kod",
    "two_fa_secret"                 => "2FA-hemlighet",
    "two_fa_secret_desc"            => "Förvara detta på en säker plats då du kommer att behöva detta för att lägga in autentiseringskontot igen om du skulle förlora åtkomst.",
    "display_notifications"         => "Visa notifikationer",
    "display_notifications_desc"    => "Systemet kommer polla nya ärenden, svar och andra operatörer som loggar in medan du har operatörspanel öppen. Du kan välja mellan skrivbordsnotifieringar, webbläsarnotifieringar och att avaktivera det helt.",
    "desktop_notifications"         => "Skrivbordsnotifikationer",
    "browser_notifications"         => "Webbläsarnotifikationer",

    "search_for_user"               => "Sök efter användare...",
    "select_operator"               => "Välj en operatör...",
    "select_group"                  => "Välj en grupp...",

    "your_ip_has_been_banned"       => "Din IP har bannlysts.",
    "password_reset_success"        => "Lösenord återställt!",

    "simpleauth_token_expired"      => "Tillgångstoken har utgått.",
    "simpleauth_token_invalid"      => "Den tillhandahållna tillgångstoken är ogiltig.",
    "simpleauth_invalid_guard"      => "Kan inte logga in som en ickegiltig användare.",
    "simpleauth_not_allowed"        => "Operatörer kan för närvarande inte logga in med SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "E-posthistorik",
    "view_email"                    => "Visa e-post",

    "ban_after_count"               => "Bannlys IP efter misslyckade inloggning",
    "ban_after_count_user"          => "Antalet misslyckade inloggningar som krävs för att användarens IP ska bannlysas och de inte längre kan logga in till framsidan under den konfigurerade tiden. Om den sätts till 0 avaktiveras IP-bannlysningar helt.",
    "ban_after_count_operator"      => "Antalet misslyckade inloggningar som krävs för att användarens IP ska bannlysas och de inte längre kan logga in till operatörspanelen eller API:et under den konfigurerade tiden. Om den sätts till 0 avaktiveras IP-bannlysningar helt.",
    "ban_length"                    => "IP-bannlysningens längd",
    "ban_length_desc"               => "Längden på IP-bannlysningen när de uppnår det konfigurerade antalet misslyckade inloggningar på en dag.",
    "n_failed_logins"               => ":count misslyckade inloggningar under 24 timmar",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Tar en paus...",
    "operator_session_expired"      => "Du var inaktiv ett eller loggade in på en annan enhet så jag tog en tupplur. Väck mig genom att logga in igen.",
    "log_back_in"                   => "Logga in igen",
    "all_users"                     => "Alla användare",
    "all_operators"                 => "Alla operatörer",
    "email_per_batch"               => "E-post per sats",
    "email_per_batch_desc"          => "Antal e-post som skickas tillsammans vid varje tillfälle.",
    "batch_interval"                => "Satsintervaller",
    "batch_interval_desc"           => "Skillnaden mellan e-postsatser i minuter, 1 minut är minimum.",
    "select_user_groups"            => "Välj användar-/operatörsgrupper eller skriv in e-postadresser...",
    "mass_email_sending_time"       => "Det kommer ta ungefär :time att skicka all e-post.",
    "organisations_enabled"         => "Organisationer aktiverade",
    "organisations_enabled_desc"    => "Användare kan lägga till en organisation till sin profil och lägga till andra användare till den som standard. Om du bara hanterar konsumenter kan du avaktivera organisationsinställningen och gömma den från gränssnittet.",
    "manager_notifications"         => "Notifikationer för organisationschefer",
    "manager_notifications_desc"    => "Om organisationschefer ska få e-postnotifikationer när ärenden öppnade av andra användare i organisationen uppdateras som standard. Varje chef kan skriva över detta genom att ändra i sin egen profil.",
    "manager_email_notifications_desc" => "Om de ska ta emot e-postnotifikationer när ärenden öppnade av andra användare i din organisation uppdateras.",
    "organisation_notifications_desc" => "Om du vill ta emot e-postnotifikationer när ärenden öppnade av andra användare i din organisation uppdateras.",
    "select_operator_group_desc"    => "Välj åtminstone en operatörsgrupp för denna operatör.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisationskräddarsytt fält|Organisationskräddarsydda fält",
    "recent_users"                  => "Senaste användare",
    "recent_organisations"          => "Senaste organisationer",
    "group_brand_desc"              => "Välj vilka varumärken som operatörerna i denna grupp kommer att kunna se, skapa och ta bort (beroende på tillåtelser) ärenden och annat innehåll.",
    "select_operators"              => "Välj operatörer...",
    "select_groups"                 => "Välj grupper...",
    "group_department_desc"         => "Tilldela alla medlemmar av denna grupp till avdelningar, operatörer kanoperators can also be assigned individually in the department settings.",
    "op_settings_group_dept"        => "Tilldelad via operatörsgrupper:",
    "op_settings_group_dept_desc"   => "Dessa avdelningar är ärvda automatiskt från operatörsgrupperna valda ovan. För att tilldela via en operatörgrupp: ändra operatörgruppen eller avdelningsinställningar.",
    "op_settings_individual_dept"   => "Tilldelade individuellt:",
    "op_settings_individual_dept_desc" => "Dessa avdelningar är extra till eventuella avdelningar operatören är tilldelad via sina grupper ovan.",
    "also_registered_other_brand"   => "Denna användare är också registrerad i varumärket :brands.|Denna användare är också registrerad i varumärkena :brands.",
    "signature"                     => "Signatur|Signaturer",
    "signature_desc"                => "Skapa personliga ärendesignaturer med valmöjligheten att skräddarsy beroende på varumärket/avdelningen av ärendet. Standardsignaturen används när en signatur för en specifik avdelning och/eller varumärke inte kan hittas.",
    "operator_signature"            => "Operatörssignatur|Operatörssignaturer",
    "ticket_signature_desc"         => "Sätt operatörens standardärendesignatur.",
    "operator_signature_desc"       => "Ytterliggare signaturer för specifika avdelningar och/eller varumärken kan sättas i <a href=':route' target='_blank'>operatörssignatursektionen</a>.",
    "view_organisation"             => "Visa Organisationer",
    "new_owner"                     => "Ny ägare",
    "operator_role"                 => "Operatörsroll|Operatörsroller",
    "manage_users"                  => "Hantera användare",
    "manage_organisations"          => "Hantera organisationer",
    "manage_operators"              => "Hantera operatörer",
    "user_profile"                  => "Användarprofil",
    "organisation_access_level"     => "Organisationåtkomstnivåer",
    "organisation_notifications"    => "Organisationnotifieringar",
    "organisation_users"            => "Organisationanvändare",
    "organisation_users_ticket"     => "Här ovanför finns en lista över din organisations chefer som också kommer att bli e-postadeuppdateringar gällande detta ärende.",

    /*
     * 2.1.1
     */
    "change_password"               => "Ändra lösenord",
    "current_password"              => "Nuvarande lösenord",
    "new_password"                  => "Nytt lösenord",
    "personal_confirm_password"     => "Bekräfta nuvarande lösenord för att sätta ett nytt.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Sök efter användare/operatör...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Formatet som används för att visa användarens namn i applikationen.",
    "operator_name_format_desc"     => "Formatet som används för att visa operatörens namn i applikationen.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Ta bort Från :record?",
    "remove_from_warn"              => "Detta kommer permanent ta bort <strong>:name</strong> användaren från :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social Login",
    "login_via"                     => "Log in via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Please log in to complete linking of your social account.",
    "social_linking_register"       => "Please fill in the details below to complete registration of your account. Your social account will be automatically linked.",
    "already_registered"            => "Already registered?",
    "linked_accounts"               => "Linked Accounts",
    "unlink_account"                => "Unlink :record Account",
    "unlink_account_warning"        => "Unlinking the social account will mean it can no longer be used to log in directly to the account.",
    "failed_login"                  => "Failed Login|Failed Logins",
    "resend_confirmation"           => "<strong><a href=':link'>Click here</a></strong> to be sent a new confirmation email.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "must have \":permission\" permission",
    "deleted_user"                  => "Deleted User",
    "access_level_not_owner"        => "It is not possible to change the access level of organisation owners. Transfer organisation ownership to another user first by viewing the organisation and clicking the 'Users' tab.",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Select an existing or enter a new organisation...",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Enter each domain owned by the organisation. Users who register with an email address which belongs to one of those domains will be automatically added to the organisation. We recommend to verify the user is genuinely part of the organisation if they have not confirmed ownership of their email address.",
    "changing_email_desc"           => "Changing the email address will require the user to confirm ownership of their email address when they next login.",
    "unconfirmed_user_desc"         => "User has not confirmed ownership of this email address.",
    "unregistered_user_desc"        => "This account was created automatically without a password. You can send a confirmation email to let them set up their own account or set a password for them below.",
    "send_confirmation_email"       => "Send Confirmation Email",
    "mark_as_confirmed"             => "Mark as Confirmed",
    "password_reset_already"        => "You have already confirmed ownership of this email address, you may proceed to login.",
    "unconfirmed_account"           => "Please check your email to confirm ownership of this email address.",
    "success_register_desc"         => "Thank you for registering an account. Please check your email to complete the account setup.",
    "resend_confirmation_sent"      => "A new confirmation email has been sent and should arrive in a few minutes.",
    "register_confirm_desc"         => "Thank you for confirming ownership of your email, please enter a password below to finish your account set up.",
    "thank_you_confirm"             => "Thank you for confirming ownership of your email address.",
    "use_gravatar"                  => "Use Gravatar",
    "use_gravatar_desc"             => "Gravatar is a service which offers a globally recognised avatar to its registered users. The help desk will automatically send a request to secure.gravatar.com with an MD5 hash of each user email address to assist in displaying an avatar. The MD5 hash may also be publicly visible in the frontend HTML. We recommend to update your privacy policy if enabling this feature.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "To complete the update of your email address, please click on the link sent to :email to confirm ownership of the new email address.",
    "confirmation"                  => "Confirmation",
    "confirmation_email_in_use"     => "The email address is already in use by another account.",
    "continue_to_login"             => "Please continue to <a href=':route'>login</a>.",
    "reset_request_desc"            => "If a matching account was found, an email will be sent to you shortly to allow you to reset your password.",
    "password_reset_error"          => "The link may have expired. If your link isn't working for any reason, please request a new one.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Account is linked to an LDAP service. Please log in using your LDAP username and password.",
    "operator_message"              => "Operator Messages",
    "force_two_fa"                  => "Force 2FA",
    "force_two_fa_desc"             => "Force two-factor authentication (2FA) on all accounts. Any account without 2FA enabled will be taken through the steps to set it up when they next login.",
    "two_fa_required"               => "Two-factor authentication (2FA) is required. Please follow the information below to proceed.",
    "two_fa_user_enable"            => "The user can enable 2FA on their account in their settings.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Allow users to register and log in using their social account.",
    "manage_social_login_options"   => "To add or manage social login options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Download and install one of the following applications and scan the QR code or enter the secret key. This will set up your account on your device, you will then be able to view the account and it will generate a 6 digit code that you must enter to verify and complete the set up. Please ensure to click verify before the code expires. Your server time will need to be in sync with an NTP server to function properly.",
    "two_fa_successfully_enabled"   => "Two-factor authentication (2FA) has been successfully enabled.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Phone Number|Phone Numbers",

    /*
     * 3.6.0
     */
    "security_settings"             => "Security Settings",
    "security_settings_desc"        => "Update your password, enable 2FA and manage other security related settings for your account.",
    "active_sessions"               => "Active Sessions",
    "active_sessions_desc"          => "This is a list of devices that have logged into your account, you may revoke any sessions that you do not recognise.",
    "current_session"               => "Current Session",
    "logged_in"                     => "Logged In",
    "revoke_session_desc"           => "Revoking a session will log the device out of the operator panel. It will also revoke all remember me tokens for other devices.",

);
