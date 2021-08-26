<?php

return array(

    "user"                          => "کاربر|کاربران",
    "user_details"                  => "جزئیات کاربر",
    "add_user"                      => "افزودن کاربر",
    "account_active"                => "حساب فعال",
    "account_active_desc"           => "Toggle to enable and disable access to authenticated sections.",

    "op_settings_dept_desc"         => "Select which departments the operator can view and reply to tickets in.",

    "organisation"                  => "سازمان | سازمان ها",
    "members"                       => "کاربر | کاربران",
    "owner"                         => "مالک",
    "manager"                       => "مدیر",
    "access_level"                  => "سطح دسترسی",
    "access_level_desc"             => "Define the access level for the user in the organisation, based on the following schedule:<br /><strong>Manager</strong> - Can view tickets opened by all users in the organisation and manage users in the organisation<br /><strong>User</strong> - Can view tickets only opened by self",
    "manage_organisation"           => "مدیریت سازمان",
    "leave_organisation"            => "ترک سازمان",
    "user_membership"               => "عضویت کاربر",
    "transfer_ownership"            => "انتقال مالکیت",
    "transfer_ownership_desc"       => "As the current owner of the organisation, you cannot be removed as a manager and only you can delete the organisation. You may transfer the ownership of the organisation to someone else, be aware that this action cannot be reversed.",
    "transfer_ownership_operator"   => "Only the owner can delete the organisation and cannot be removed from it. Use this option to change the ownership to another user in the organisation.",
    "start_typing_name"             => "شروع به تایپ نام ...",
    "organisation_add_user"         => "اضافه کردن کاربر به سازمان",
    "organisation_desc"             => "Each organisation can have <strong>managers</strong>, who can manage users and read and reply to other's tickets, and <strong>users</strong>, who can open tickets, but can't read or reply to other's tickets.",
    "organisation_operator_desc"    => "Add existing users to this organisation by clicking \"Add User\" and searching for their name, note that adding a user will remove any links they have with another organisation.",
    "organisation_user_desc"        => "<strong>Manager</strong> - Can manage other users and view &amp; reply to other user's tickets.<br /><strong>User</strong> - Can only open tickets on behalf of organisation and reply to own tickets.",
    "send_password_reset"           => "ارسال لینک کلمه عبور",

    "profile"                       => "مشخصات",

    "login"                         => "ورود",
    "remember_me"                   => "مرا به خاطر بسپار",
    "logout"                        => "خارج شدن",
    "return_to_login"               => "بزگشت برای ورود",

    "user_register_disabled"        => "با عرض پوزش، ثبت نام کاربر عمومی حال حاضر غیر فعال می باشد.",
    "success_register"              => "حساب با موفقیت ثبت شد!",
    "register_now"                  => "اکنون ثبت نام کنید",
    "register"                      => "ثبت نام",
    "register_account"              => "ثبت نام حساب کاربری",
    "signed_up"                     => "ثبت نام",
    "last_active"                   => "آخرین فعالیت",

    "forgot_password"               => "رمز عبور خود را فراموش کرده اید?",
    "reset_password"                => "تنظیم مجدد رمز عبور",
    "set_password"                  => "تنظیم رمز عبور",
    "please_set_password"           => "لطفا رمز عبور جدید خود را تنظیم کنید.",
    "missing_email_or_reset"        => "Missing email address or reset token.",

    "firstname"                     => "نام",
    "lastname"                      => "نام خانوادگی",
    "formatted_name"                => "نام فرمت",
    "country"                       => "کشور",
    "avatar"                        => "آواتار",
    "confirm_password"              => "تکرار رمز عبور",

    "confirmed"                     => "تایید شده",
    "unconfirmed"                   => "تایید نشده",

    "group"                         => "گروه کاربری | گروه های کاربری",
    "group_members"                 => "اعضای گروه",
    "operator_group"                => "اپراتور گروه | اپراتور گروه",
    "add_group"                     => "اضافه کردن به گروه",

    "customfield"                   => "فیلد سفارشی کاربر|فیلد های سفارشی کاربر",
    "customfield_order"             => "Drag the rows to change the order custom fields appear to users.",

    "role"                          => "نقش | نقش ها",

    "operator_login_log"            => "لاگ ورود اپراتور",
    "system_activity_log"           => "لاگ فعالیت سیستم",
    "activity_log"                  => "لاگ فعالیت",

    "mass_email"                    => "Send Mass Email",
    "send_email"                    => "Send Email",
    "choose_template"               => "Choose template...",

    "ldap_account"                  => "اکانتLDAP|اکانت های LDAP",
    "ldap_operator_desc"            => "جستجو برای یک اپراتور موجود، و یا ایجاد یک اپراتور جدید.",
    "ldap_server"                   => "LDAP سرور",
    "ldap_server_desc"              => "The server hostname. Alternatively, you can specify the full LDAP URI. For example: ldaps://ldap.server:1234/ will connect via SSL to the port 1234.",
    "ldap_username"                 => "LDAP نام کاربری",
    "ldap_username_desc"            => "نام کاربری که کاربر برای ورود به میز کار استفاده خواهد کرد (به غیر از نام کاربری LDAP.)",
    "ldap_rdn"                      => "LDAP RDN یا DN",
    "ldap_rdn_desc"                 => "نام برجسته برای نام کاربری LDAP, برای مثال: cn=Sample User,ou=people,dc=example,dc=com",
    "ldap_details"                  => "LDAP جزئیات",

    "operator_details"              => "جزئیات اپراتور",

    "email_notifications"           => "اطلاع رسانی ایمیل",
    "email_notifications_desc"      => "اطلاعیه ایمیل هایی که از طریق سیستم دریافت می شود.",

    "enable_ldap"                   => "فعالسازی ورورد از طریق اکانت LDAP",
    "enable_ldap_desc"              => "If you use LDAP, you can enable it for operator login. After enabling, go to the LDAP Accounts settings page to configure it.",
    "user_reg_enabled"              => "امکان ثبت نام کاربر فعال گردید",
    "user_reg_enabled_desc"         => "کاربران جدید بتوانند به طور مستقیم ثبت نام کنند.",
    "user_reg_captcha"              => "کپچا ثبت نام کاربر",
    "user_reg_captcha_desc"         => "تصویر امینتی برای کاربرانی که به تازگی ثبت نام میکنند نمایش داده شود.",
    "user_name_format"              => "فرمت نام",
    "first_last"                    => "اول آخر",
    "last_first"                    => "آخر اول",
    "first_l"                       => "اول L.",
    "f_last"                        => "F. آخر",
    "password_length"               => "طول رمز عبور",
    "password_length_desc"          => "The minimum length in characters for the password when registering or updating an account.",
    "password_strength"             => "قدرت رمز عبور",
    "password_strength_desc"        => "در زمان ثبت نام کاراکتر مورد نظر خود را انتخاب کنید.",
    "password_str_must_contain"     => "فرض دارابودن:",
    "password_str_letters"          => "حداقل یک حرف الفبا.",
    "password_str_digits"           => "حداقل یک رقم.",
    "password_str_case"             => "هر دو شخصیت بزرگ و کوچک.",
    "password_str_symbols"          => "حداقل یک نماد.",

    "load_template"                 => "باز کردن قالب",
    "load_template_desc"            => "Choosing a template will replace the current email subject and message.",
    "clear_template"                => "پاک سازی قالب",

    "personal_settings"             => "تنظیمات شخصی",
    "personal_settings_desc"        => "Update your own profile and modify settings that relate only to your operator account.",
    "two_fa"                        => "تایید هویت دومرحله ای",
    "notifications"                 => "اطلاع رسانی",
    "two_fa_success_disabled"       => "Two-factor authentication has successfully been disabled.",
    "two_fa_success_enabled"        => "Two-factor authentication has successfully been enabled.",
    "two_fa_incorrect"              => "The code was incorrect, ensure that the code you entered is correct and that the server time is in sync.",
    "two_fa_enabled"                => "2FA Enabled",
    "two_fa_disable"                => "To disable 2FA, please verify below.",
    "two_fa_enable"                 => "To enable 2FA, please set up the account on your phone using the details below and verify.",
    "verify_code"                   => "کد احراظ هویت",
    "verify_and_disable"            => "بررسی و غیر فعال کردن",
    "verify_and_enable"             => "بررسی و فعال کردن",
    "verify_code_desc"              => "Enter a valid code for your 2FA account to disable 2FA authentication.",
    "qr_code"                       => "QR Code",
    "two_fa_code"                   => "2FA Code",
    "two_fa_secret"                 => "2FA Secret",
    "two_fa_secret_desc"            => "Please store this somewhere safe as you will need this to re-add the authenticator account to your phone should you lose access.",
    "display_notifications"         => "نمایش اطلاعیه",
    "display_notifications_desc"    => "The system will poll for new tickets, replies and other operators logging in while you have the operator panel open. You can choose between desktop notifications or in-browser notifications, or disabling it completely.",
    "desktop_notifications"         => "اعلان های دسک تاپ",
    "browser_notifications"         => "اطلاعیه های مرورگر",

    "search_for_user"               => "جستجو برای کاربر...",
    "select_operator"               => "انتخاب اپراتور...",
    "select_group"                  => "انتخاب گروه...",

    "your_ip_has_been_banned"       => "IP شما ممنوع شده.",
    "password_reset_success"        => "رمز عبور با موفقیت بازنشانی شد!",

    "simpleauth_token_expired"      => "دسترسی به توکن منقضی شده است.",
    "simpleauth_token_invalid"      => "نشانه دسترسی ارائه شده معتبر نیست.",
    "simpleauth_invalid_guard"      => "می تواند به عنوان یک کاربر معتبر وارد شود.",
    "simpleauth_not_allowed"        => "Operators cannot currently login with SimpleAuth.",

    /*
     * 2.0.2
     */

    "email_history"                 => "Email History",
    "view_email"                    => "View Email",

    "ban_after_count"               => "Ban IP after Failed Logins",
    "ban_after_count_user"          => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the frontend for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_after_count_operator"      => "The number of failed logins after which the user IP is banned, and they are no longer able to login to the operator panel or API for the configured amount of time. Setting to 0 will disable IP bans completely.",
    "ban_length"                    => "Length of IP Ban",
    "ban_length_desc"               => "The length of the IP ban when they reach the configured number of failed logins in a single day.",
    "n_failed_logins"               => ":count failed logins within 24 hours",

    /*
     * 2.0.3
     */
    "taking_a_break"                => "Taking a break...",
    "operator_session_expired"      => "You were inactive for a while or logged in on another device so I took a quick nap. Please wake me up by logging back in.",
    "log_back_in"                   => "Log Back In",
    "all_users"                     => "All Users",
    "all_operators"                 => "All Operators",
    "email_per_batch"               => "Emails Per Batch",
    "email_per_batch_desc"          => "The number of emails that are sent together at a time.",
    "batch_interval"                => "Batch Interval",
    "batch_interval_desc"           => "The gap between the email batches in minutes, 1 minute is the minimum.",
    "select_user_groups"            => "Select user/operator groups or type in email addresses...",
    "mass_email_sending_time"       => "It will take approximately :time to send all emails.",
    "organisations_enabled"         => "Organisations Enabled",
    "organisations_enabled_desc"    => "By default, users can add an organisation to their profile and add other users to that organisation. If you are only dealing with consumers, you can disable the organisation option and hide it from the interface.",
    "manager_notifications"         => "Organisation Manager Notifications",
    "manager_notifications_desc"    => "If managers of organisations should receive email updates of tickets opened by other users in the organisation by default. Each manager will have their own personal option for this in their profile and can override this setting.",
    "manager_email_notifications_desc" => "If they should receive email notifications of updates to tickets opened by other users in the organisation.",
    "organisation_notifications_desc" => "If you'd like to receive email notifications of updates to tickets opened by other users in your organisation.",
    "select_operator_group_desc"    => "Please select at least one operator group for this operator.",

    /*
     * 2.1.0
     */
    "organisation_customfield"      => "Organisation Custom Field|Organisation Custom Fields",
    "recent_users"                  => "Recent Users",
    "recent_organisations"          => "Recent Organisations",
    "group_brand_desc"              => "Select which brands the operators in this group will be able to view, create and delete (depending on permissions) tickets and other content.",
    "select_operators"              => "Select operator(s)...",
    "select_groups"                 => "Select group(s)...",
    "group_department_desc"         => "Assign all members of this group to departments, operators can also be assigned individually in the department settings.",
    "op_settings_group_dept"        => "Assigned to via operator groups:",
    "op_settings_group_dept_desc"   => "These departments are inherited automatically from the operator groups selected above. To assign via an operator group, edit the operator group or department settings.",
    "op_settings_individual_dept"   => "Assigned to individually:",
    "op_settings_individual_dept_desc" => "These departments are in addition to any departments the operator is assigned to via their groups above.",
    "also_registered_other_brand"   => "This user is also registered in the :brands brand.|This user is also registered in the :brands brands.",
    "signature"                     => "Signature|Signatures",
    "signature_desc"                => "Create personal ticket signatures, with the option to customise based on the brand/department of the ticket. The default signature is used when a signature for a specific department and/or brand cannot be found.",
    "operator_signature"            => "Operator Signature|Operator Signatures",
    "ticket_signature_desc"         => "Set the operator's default ticket signature.",
    "operator_signature_desc"       => "Further signatures for specific departments and/or brands can be set in the <a href=':route' target='_blank'>Operator Signatures</a> section.",
    "view_organisation"             => "View Organisation",
    "new_owner"                     => "New Owner",
    "operator_role"                 => "Operator Role|Operator Roles",
    "manage_users"                  => "Manage Users",
    "manage_organisations"          => "Manage Organisations",
    "manage_operators"              => "Manage Operators",
    "user_profile"                  => "User Profile",
    "organisation_access_level"     => "Organisation Access Level",
    "organisation_notifications"    => "Organisation Notifications",
    "organisation_users"            => "Organisation Users",
    "organisation_users_ticket"     => "Above is a list of your organisation's managers that will be also emailed updates about this ticket.",

    /*
     * 2.1.1
     */
    "change_password"               => "Change Password",
    "current_password"              => "Current Password",
    "new_password"                  => "New Password",
    "personal_confirm_password"     => "Please confirm your current password to set a new password.",

    /*
     * 2.1.2
     */
    "search_for_user_operator"      => "Search for user/operator...",

    /*
     * 2.2.0
     */
    "user_name_format_desc"         => "The format that is used to display user names throughout the system.",
    "operator_name_format_desc"     => "The format that is used to display operator names throughout the system.",

    /*
     * 2.3.0
     */
    "remove_from"                   => "Remove From :record?",
    "remove_from_warn"              => "This will permanently remove the <strong>:name</strong> user from the :record.",

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
