<?php

return array(

    "user"                          => "Utilisateur|Utilisateurs",
    "user_details"                  => "Détails de l'utilisateur",
    "add_user"                      => "Ajouter un utilisateur",
    "account_active"                => "Compte inactif",
    "account_active_desc"           => "Activer pour autoriser/empêcher l'accès aux sections qui nécessitent une authentification.",

    "op_settings_dept_desc"         => "Départements où l'opérateur peut voir et répondre à des tickets.",

    "organisation"                  => "Organisation|Organisations",
    "members"                       => "Membre|Membres",
    "owner"                         => "Propriétaire",
    "manager"                       => "Manager",
    "access_level"                  => "Niveau d'accès",
    "access_level_desc"             => "Définir le niveau d'accès pour le Client dans les Projets: <br /><strong>Manager</strong> - Peut afficher des tickets ouverts par tous les Clients dans le Projet et la gestion des Clients dans le Projet <br /><strong>Client</strong> - Peut afficher des tickets uniquement ouverts par soi-même",
    "manage_organisation"           => "Gérer organisation",
    "leave_organisation"            => "Quitter organisation",
    "user_membership"               => "Membership de l'utilisateur",
    "transfer_ownership"            => "Transférer propriété",
    "transfer_ownership_desc"       => "Etant le propriétaire actuel de l'organisation, vous ne pouvez pas être supprimé en tant que gestionnaire et vous seul pouvez supprimer l'organisation. Vous pouvez transférer la propriété de l'organisation à quelqu'un d'autre, sachez que cette action ne peut pas être inversée.",
    "transfer_ownership_operator"   => "Seul le propriétaire peut supprimer l'organisation et ne peut pas être retiré de celle-ci. Utilisez cette option pour modifier la propriété à un autre Client dans l'organisation.",
    "start_typing_name"             => "Commencez à taper un nom...",
    "organisation_add_user"         => "Ajouter utilisateur à l'organisation",
    "organisation_desc"             => "Chaque organisation peut avoir des <strong>Managers</strong>, qui peuvent gérer les clients et lire et répondre aux tickets des autres, et <strong>utilisateurs</strong>, qui peuvent ouvrir des tickets, mais ne peuvent pas lire ou répondre à des tickets d'autres utilisateurs.",
    "organisation_operator_desc"    => "Ajouter les utilisateurs existants à cette organisation en cliquant sur - Ajouter clients - et la recherche de leur nom, noter que l'ajout d'un Clients supprime tous les liens qu'ils ont avec une autre Projet.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Peut gérer d'autres clients et répondre aux tickets d'un autre client <br /><strong>Clients</strong> - Peuvent uniquement ouvrir des tickets au sein de cette organisation, et ne peuvent répondre qu'à leurs tickets.",
    "send_password_reset"           => "Envoyer lien de réinitialisation du mot de passe",

    "profile"                       => "Profil",

    "login"                         => "Connexion",
    "remember_me"                   => "Se rappeler de moi",
    "logout"                        => "Déconnexion",
    "return_to_login"               => "Retourner au login",

    "user_register_disabled"        => "Nous sommes désolés, l'enregistrement public des utilisateurs est désactivé.",
    "success_register"              => "Compte enregistré avec succès !",
    "register_now"                  => "M'enregistrer",
    "register"                      => "M'enregistrer",
    "register_account"              => "Enregistrer compte",
    "signed_up"                     => "Enregistré",
    "last_active"                   => "Dernière activité",

    "forgot_password"               => "Mot de passe oublié ?",
    "reset_password"                => "Réinitialiser mot de passe",
    "set_password"                  => "Définir un mot de passe",
    "please_set_password"           => "Veuillez entrer votre nouveau mot de passe ci-dessous.",
    "missing_email_or_reset"        => "E-mail ou jeton de réinitialisation manquants.",

    "firstname"                     => "Prénom",
    "lastname"                      => "Nom de famille",
    "formatted_name"                => "Nom mis en forme",
    "country"                       => "Pays",
    "avatar"                        => "Avatar",
    "confirm_password"              => "Confirmer mot de passe",

    "confirmed"                     => "Confirmé",
    "unconfirmed"                   => "Non confirmé",

    "group"                         => "Groupe d'utilisateur|Groupes d'utilisateurs",
    "group_members"                 => "Membres du groupe",
    "operator_group"                => "Groupe opérateur|Groupes opérateurs",
    "add_group"                     => "Ajouter au groupe",

    "customfield"                   => "Champ utilisateur sur mesure|Champs utilisateurs sur mesure",
    "customfield_order"             => "Faites glisser les blocs pour changer l'ordre des champs personnalisés.",

    "role"                          => "Rôle|Rôles",

    "operator_login_log"            => "Journal des accès opérateur",
    "system_activity_log"           => "Journal des activités système",
    "activity_log"                  => "Journal des activités",

    "mass_email"                    => "Envoyer e-mail de groupe",
    "send_email"                    => "Envoyer e-mail",
    "choose_template"               => "Choisir un template...",

    "ldap_account"                  => "Compte LDAP|Comptes LDAP ",
    "ldap_operator_desc"            => "Recherche d'un opérateur existant, ou en créer un nouveau.",
    "ldap_server"                   => "Serveur LDAP",
    "ldap_server_desc"              => "Le nom d'hôte du serveur. Alternativement, vous pouvez spécifier la pleine LDAP URI. Par exemple: ldaps: //ldap.server: 1234 / se connecter via SSL au port 1234",
    "ldap_username"                 => "Nom utilisateur LDAP",
    "ldap_username_desc"            => "Le nom d'utilisateur que l'opérateur va utiliser pour accéder au service d'assistance.",
    "ldap_rdn"                      => "LDAP RDN ou DN",
    "ldap_rdn_desc"                 => "Le nom unique pour le nom d'utilisateur LDAP, par exemple: cn=Sample Client,ou=personnes,dc=example,dc=com",
    "ldap_details"                  => "LDAP Détails",

    "operator_details"              => "Détails opérateur",

    "email_notifications"           => "Notifications par e-mail",
    "email_notifications_desc"      => "Les notifications par e-mail qui seront reçues à partir du système.",

    "enable_ldap"                   => "Activer LDAP Connexion",
    "enable_ldap_desc"              => "Si vous utilisez LDAP, vous pouvez l'activer pour le login de l'opérateur. Après l'activation, accédez à la page des paramètres de comptes LDAP pour le configurer.",
    "user_reg_enabled"              => "Inscription d'utilisateurs activé",
    "user_reg_enabled_desc"         => "Permettre aux nouveaux utilisateurs d'enregistrer un compte dans le frontend.",
    "user_reg_captcha"              => "Captcha d'inscription utilisateur",
    "user_reg_captcha_desc"         => "Si le captcha doit être montré aux nouveaux utilisateurs inscrits.",
    "user_name_format"              => "Format du nom",
    "first_last"                    => "Prénom Nom",
    "last_first"                    => "Nom Prénom",
    "first_l"                       => "Prénom N.",
    "f_last"                        => "P. Nom",
    "password_length"               => "Longueur du mot de passe",
    "password_length_desc"          => "La longueur minimale de caractères pour le mot de passe lors de l'enregistrement ou la mise à jour d'un compte.",
    "password_strength"             => "Force du mot de passe",
    "password_strength_desc"        => "Sélectionnez les caractères qui seront requis lors de l'enregistrement d'un mot de passe de l'utilisateur.",
    "password_str_must_contain"     => "Doit contenir:",
    "password_str_letters"          => "Au moins un caractère alphabétique.",
    "password_str_digits"           => "Au moins un chiffre.",
    "password_str_case"             => "Majuscule et minuscules.",
    "password_str_symbols"          => "Au moins un caractère spécial.",

    "load_template"                 => "Importer un template",
    "load_template_desc"            => "Le choix d'un template remplacera l'actuel sujet de l'email et le message.",
    "clear_template"                => "Effacer template",

    "personal_settings"             => "Paramètres personnels",
    "personal_settings_desc"        => "Mettre à jour votre propre profil et modifier les paramètres qui se rapportent uniquement à votre compte opérateur",
    "two_fa"                        => "Authentification à deux facteurs",
    "notifications"                 => "Notifications",
    "two_fa_success_disabled"       => "L'authentification à deux facteurs a bien été désactivé.",
    "two_fa_success_enabled"        => "L'authentification à deux facteurs a bien été activé.",
    "two_fa_incorrect"              => "Le code est incorrect, vérifiez que le code saisi est correct et que l'heure du serveur est synchronisé.",
    "two_fa_enabled"                => "2FA activée",
    "two_fa_disable"                => "Pour désactiver 2FA, s'il vous plaît vérifier ci-dessous.",
    "two_fa_enable"                 => "Pour activer 2FA, s'il vous plaît configurer le compte sur votre téléphone en utilisant les détails ci-dessous et de vérifier.",
    "verify_code"                   => "Vérifier le code",
    "verify_and_disable"            => "Vérifier & Désactiver",
    "verify_and_enable"             => "Vérifier & Activer",
    "verify_code_desc"              => "Entrez un code valide pour votre compte 2FA pour désactiver l'authentification 2FA.",
    "qr_code"                       => "QR Code",
    "two_fa_code"                   => "Code de 2FA",
    "two_fa_secret"                 => "2FA Secret",
    "two_fa_secret_desc"            => "Veuillez stocker ceci dans un endroit sûr car vous en aurez besoin pour ajouter de nouveau le compte authentificateur sur votre téléphone, auquel cas, l'accès sera perdu.",
    "display_notifications"         => "Afficher les notifications",
    "display_notifications_desc"    => "Le système enverra une notification pour les nouveaux tickets, les réponses et les autres opérateurs se connectant alors que vous avez le panneau de commande ouvert. Vous pouvez choisir entre les notifications de bureau ou dans le navigateur, ou les désactiver complètement.",
    "desktop_notifications"         => "Notifications sur le bureau",
    "browser_notifications"         => "Notifications sur le navigateur",

    "search_for_user"               => "Rechercher utilisateur...",
    "select_operator"               => "Sélectionner un opérateur...",
    "select_group"                  => "Sélectionner un groupe...",

    "your_ip_has_been_banned"       => "Votre adresse IP a été bannie.",
    "password_reset_success"        => "Mot de passe réinitialisé avec succès!",

    "simpleauth_token_expired"      => "Le jeton d'accès a expiré.",
    "simpleauth_token_invalid"      => "Le jeton d'accès fourni est invalide.",
    "simpleauth_invalid_guard"      => "Impossible de se connecter, utilisateur invalide.",
    "simpleauth_not_allowed"        => "Les opérateurs ne peuvent pas se connecter actuellement avec SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Historique des e-mails",
    "view_email"                    => "Afficher l'e-mail",

    "ban_after_count"               => "Bloquer l'IP après plusieurs tentatives infructueuses de se connecter",
    "ban_after_count_user"          => "Le nombre de connexions échouées après que l'IP du client soit bannie, et le client ne sera plus en mesure de se connecter au frontend pour la quantité de temps configuré. Un réglage 0 désactive le bannisement d'IP.",
    "ban_after_count_operator"      => "Le nombre de connexions échouées après que l'IP du client soit bannie, et le client ne sera plus en mesure de se connecter au panneau de commande ou API pour la quantité de temps configuré. Un réglage 0 désactive le bannisement d'IP.",
    "ban_length"                    => "Durée du bannissement d'IP",
    "ban_length_desc"               => "La durée du bannisement d'IP quand ils atteignent le nombre configuré de tentatives de connexion en une seule journée.",
    "n_failed_logins"               => ":count tenatives infructueuses de connexion dans les dernières 24 heures",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "En pause...",
    "operator_session_expired"      => "Vous avez été inactif pour un moment ou vous vous êtes connecté à partir d'un autre système donc j'ai fait une sieste. Réveillez-moi en vous reconnectant.",
    "log_back_in"                   => "Se reconnecter",
    "all_users"                     => "Tous les utilisateurs",
    "all_operators"                 => "Tous les opérateurs",
    "email_per_batch"               => "Les e-mails groupés",
    "email_per_batch_desc"          => "Le nombre d'e-mails qui sont envoyés ensemble à la fois.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "L'écart entre les batch de Email en quelques minutes, 1 minute est le minimum.",
    "select_user_groups"            => "Sélectionnez les groupes d'utilisateurs / opérateurs ou entrez les adresses e-mail...",
    "mass_email_sending_time"       => "Il faudra environ :time pour envoyer tous les emails",
    "organisations_enabled"         => "Organisations activées",
    "organisations_enabled_desc"    => "Par défaut, les utilisateurs peuvent ajouter une organisation à leur profil et ajouter d'autres utilisateurs à cette orgnaisation. Si vous ne traitez avec les consommateurs, vous pouvez désactiver l'option d'organisation.",
    "manager_notifications"         => "Notifications du manager d'une organisation",
    "manager_notifications_desc"    => "Si les managers des organisations doivent recevoir des mises à jour des tickets ouverts par d'autres utilisateurs dans l'organisation par défaut. Chaque manager aura son propre choix personnel pour cela dans son profil et peut remplacer ce paramètre.",
    "manager_email_notifications_desc" => "Si les managers doivent recevoir des notifications par e-mail des mises à jour de tickets ouverts par d'autres utilisateurs de l'organisation.",
    "organisation_notifications_desc" => "Si vous souhaitez recevoir des notifications par e-mail des mises à jour de tickets ouverts par d'autres utilisateurs de votre organisation.",
    "select_operator_group_desc"    => "Veuillez sélectionner au moins un groupe d'opérateurs pour cet opérateur.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Champ sur mesure organisation|Champs sur mesure organisation",
    "recent_users"                  => "Utilisateurs récents",
    "recent_organisations"          => "Organisations récentes",
    "group_brand_desc"              => "Veuillez sélectionner de quelle marque les opérateurs de ce groupe seront capables de visionner, créer et supprimer (dépendamment des droits) des tickets, et autres contenus.",
    "select_operators"              => "Sélectionner opérateur(s)...",
    "select_groups"                 => "Sélectionner groupe(s)...",
    "group_department_desc"         => "Affecte tous les membres de ce groupe à ce département. Les opérateurs peuvent aussi être affectés individuellement dans les paramètres des départements.",
    "op_settings_group_dept"        => "Assigné via groupes d'opérateurs:",
    "op_settings_group_dept_desc"   => "Ces département héritent automatiquement des groupes d'opérateurs sélectionnés au desssus. Pour d'autres informations, veuillez éditer le groupe d'opérateur, ou visiter les paramètres des départements.",
    "op_settings_individual_dept"   => "Assigné individuellement:",
    "op_settings_individual_dept_desc" => "Ces départements sont en plus des départements pré-assignés à l'opérateur au travers des groupes ci-dessus.",
    "also_registered_other_brand"   => "Cet utilisateur est aussi enregistré dans la marque suivante : :brands.|Cet utilisateur est aussi enregistré dans les marques suivantes : :brands.",
    "signature"                     => "Signature|Signatures",
    "signature_desc"                => "Permet de créer une signature personnelle pour les tickets, avec la possibilité de customiser selon la marque et le département du ticket. La signature par défaut est utilisée lorsqu'un département et/ou une marque ne peut être trouvé.",
    "operator_signature"            => "Signature opérateur|Signatures opérateurs",
    "ticket_signature_desc"         => "La signature par défault d'un ticket par l'opérateur.",
    "operator_signature_desc"       => "D'autres signatures, pour des départements et marques spécifiques peuvent être paramétrés dans la section <a href=':route' target='_blank'>Signatures opérateurs</a>",
    "view_organisation"             => "Afficher organisation",
    "new_owner"                     => "Nouveau propriétaire",
    "operator_role"                 => "Rôle opérateur|Rôles opérateurs",
    "manage_users"                  => "Gérer utilisateurs",
    "manage_organisations"          => "Gérer organisations",
    "manage_operators"              => "Gérer opérateurs",
    "user_profile"                  => "Profil utilisateur",
    "organisation_access_level"     => "Niveau d'accès de l'organisation",
    "organisation_notifications"    => "Notifications de l'organisation",
    "organisation_users"            => "Utilisateurs de l'organisation",
    "organisation_users_ticket"     => "Ci-dessus est présente une liste des managers de l'organisation qui seront aussi contactés par e-mail lorsque ce ticket sera mis à jour.",

    /*
     * 2.1.1
     */
    "change_password"               => "Modifier mot de passe",
    "current_password"              => "Mot de passe actuel",
    "new_password"                  => "Nouveau mot de passe",
    "personal_confirm_password"     => "Veuillez confirmer votre mot de passe actuel.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Rechercher un utilisateur/opérateur...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "Le format utilisé pour afficher les noms d'utilisateurs dans le système.",
    "operator_name_format_desc"     => "Le format utilisé pour afficher les noms d'opérateurs dans le système.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Supprimer de :record?",
    "remove_from_warn"              => "L'utilisateur <strong>:name</strong> sera définitivement supprimé de :record.",

    /*
     * 2.3.1
     */
    "social_login"                  => "Social Login",
    "login_via"                     => "Se connecter via :provider",
    "idp"                           => "IdP",
    "social_linking_login"          => "Veuillez vous connecter afin de compléter la liaison avec votre social account.",
    "social_linking_register"       => "Veuillez remplir les détails ci-dessous pour compléter l'inscription de votre compte. Votre social account sera lié automatiquement.",
    "already_registered"            => "Déjà inscrit ?",
    "linked_accounts"               => "Comptes liés",
    "unlink_account"                => "Délier le compte :record",
    "unlink_account_warning"        => "Délier ce compte signifie que vous ne pourrez plus utiliser ce média pour vous connecter directement à votre compte.",
    "failed_login"                  => "Login échoué|Logins échoués",
    "resend_confirmation"           => "<strong><a href=':link'>Cliquez ici</a></strong> pour obtenir un nouvel e-mail de confirmation.",

    /*
     * 2.4.0
     */
    "must_have_permission"          => "doit posséder la permission \":permission\"",
    "deleted_user"                  => "Utilisateur supprimé",
    "access_level_not_owner"        => "Il est impossible de modifier le niveau d'accès des propriétaires d'organisation. Il faut d'abord transférer le droit de propriété de l'organisation à un autre utilisateur en cliquant sur l'onglet 'Utilisateurs'",

    /*
     * 2.4.1
     */
    "select_or_new_organisation"    => "Selectionnez une organisation existante ou créez en une nouvelle...",

    /*
     * 2.5.0
     */
    "organisation_domain_desc"      => "Veuillez entrer chaque domaine possédé par l'organisation. Les utilisateurs s'inscrivant avec une adresse e-mail correspondant à un des ces domaines seront automatiquement ajoutés à cette organisation. Nous recommendons toutefois de vérifier que l'utilisateur fait bien partie de l'organisation s'il n'a pas confirmé son adresse e-mail.",
    "changing_email_desc"           => "Pour changer l'adresse e-mail, une vérification sera envoyée à la prochaine connexion.",
    "unconfirmed_user_desc"         => "L'utilisateur n'a pas confirmé son adresse e-mail.",
    "unregistered_user_desc"        => "Ce compte a été créé automatiquement sans mot de passe. Vous pouvez envoyer un e-mail de confirmation pour les laisser le paramétrer, ou le paramétrer vous-même ci-dessous.",
    "send_confirmation_email"       => "Envoyer un e-mail de confirmation.",
    "mark_as_confirmed"             => "Marquer comme validé.",
    "password_reset_already"        => "Vous avez déjà validé votre adresse e-mail, vous pouvez désormais vous connecter.",
    "unconfirmed_account"           => "Veuillez vérifier votre adresse e-mail.",
    "success_register_desc"         => "Merci de votre inscription. Veuillez confirmer votre adresse e-mail pour compléter le paramétrage du compte.",
    "resend_confirmation_sent"      => "Un nouvel e-mail de confirmation vous a été envoyé, et arrivera d'ici quelques instants.",
    "register_confirm_desc"         => "Merci d'avoir confirmé votre adresse e-mail, veuillez entrer un mot de passe ci-dessous pour finir le paramétrage de votre compte.",
    "thank_you_confirm"             => "Merci d'avoir confirmé votre adresse e-mail.",
    "use_gravatar"                  => "Utiliser Gravatar",
    "use_gravatar_desc"             => "Gravatar is a service which offers a globally recognised avatar to its registered users. The help desk will automatically send a request to secure.gravatar.com with an MD5 hash of each user email address to assist in displaying an avatar. The MD5 hash may also be publicly visible in the frontend HTML. We recommend to update your privacy policy if enabling this feature.",

    /*
     * 2.6.0
     */
    "updating_email_address"        => "Pour compléter la modification de votre adresse e-mail, veuillez cliquer sur le lien envoyé à :email pour confirmer qu'il s'agit bien de la votre.",
    "confirmation"                  => "Confirmation",
    "confirmation_email_in_use"     => "Cette adresse e-mail est déjà utilisée.",
    "continue_to_login"             => "Veuillez continuer à vous <a href=':route'>connecter</a>.",
    "reset_request_desc"            => "Si le compte a bien été trouvé, un e-mail va vous être envoyé pour réinitialiser votre mot de passe.",
    "password_reset_error"          => "Le lien a peut-être expiré. Si ce lien ne fonctionne pas, veuillez en demander un nouveau.",

    /*
     * 3.0.0
     */
    "ldap_linked_error"             => "Ce compte est lié à un service LDAP. Veuillez vous connecter en utilisant vos identifiants LDAP.",
    "operator_message"              => "Messages opérateur",
    "force_two_fa"                  => "Forcer l'authentification à deux facteurs",
    "force_two_fa_desc"             => "Forcer l'authentification à deux facteurs (2FA) sur tous les comptes. Un compte sans 2FA activée sera guidé vers les étapes de l'activation à sa prochaine connexion.",
    "two_fa_required"               => "L'authentification à deux facteurs (2FA) est requise. Veuillez suivre les informations ci-dessous.",
    "two_fa_user_enable"            => "L'utilisateur peut activer la 2FA sur son compte via les paramètres.",

    /*
     * 3.3.0
     */
    "social_login_desc"             => "Autorise les utilisateurs à s'inscrire et se connecter via leurs comptes de réseaux sociaux.",
    "manage_social_login_options"   => "Pour ajouter ou gérer les options de connexions via les réseaux sociaux, veuillez visiter la page <a href=\":route\">Third-Party Integrations</a>.",

    /*
     * 3.4.0
     */
    "two_fa_verify_desc"            => "Veuillez télécharger et installer une des applications suivantes, et scannez le QR code pour entrer la clé secrète. Cela paramétrera votre compte sur votre appareil. Vous pourrez ensuite voir votre compte, et un code à 6 chiffre sera généré. Vous devrez l'entrer pour compléter le paramétrage. Veuilez entrer votre code avant son expiration.",
    "two_fa_successfully_enabled"   => "L'authentification à deux facteurs (2FA) a bien été activée.",

    /*
     * 3.5.0
     */
    "phone_number"                  => "Numéro de téléphone|Numéros de téléphone",

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

    /**
     * 4.0.0
     */
    "verify_phone_number"           => "Verify Phone Number",
    "verify_phone_method"           => "Select the method you wish to verify your phone number.",
    "verify_phone_code_sent"        => "A verification code has been sent to your phone number, please enter this code below.",
    "verify_phone_code_send_error"  => "An error occurred while sending the verification code. Please try again later.",
    "verify_phone_code_error"       => "Code could not be verified.",
    "logged_in_as"                  => "Logged in as :name",

);
