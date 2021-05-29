<?php

return array(

    "feedback_question"         => "Vraag die aan de gebruiker wordt getoond.",
    "open_new"                  => "Open nieuw ticket",
    "select_department"         => "Selecteer een afdeling",
    "select_department_desc"    => "Klik onderstaand op de relevante afdeling voor uw issue.",
    "no_departments"            => "Geen afdelingen gevonden.",
    "department_user_details"   => "Gegevens van afdeling en gebruiker",
    "enter_your_details"        => "Vul uw gegevens in",
    "enter_ticket_details"      => "Vul gegevens in",
    "enter_subject_message"     => "Geef onderwerp en bericht op",
    "invalid_user"              => "Controleer of ingevulde gegevens correct zijn.",

    "registered_users"          => "Alleen voor geregistreerde gebruikers",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Onderwerp",
    "no_subject"                => "Geen onderwerp",
    "last_action"               => "Laatste actie",
    "due_time"                  => "Deadline",
    "created_time"              => "Tijd aangemaakt:",
    "submitted"                 => "Ingediend",
    "ticket_reply"              => "Ticket antwoord",
    "ticket_note"               => "Ticket aantekening",
    "ticket_type"               => "Ticket type",

    "user_ticket"               => "Gebruiker ticket",
    "user_ticket_desc"          => "Open nieuwe ticket uit naam van nieuwe of bestaande gebruiker.",
    "existing_user"             => "Bestaande gebruiker",
    "new_user"                  => "Nieuwe gebruiker",
    "internal"                  => "Intern",
    "internal_ticket_desc"      => "Open een ticket alleen voor intern gebruik. Dit ticket wordt aangemaakt op jouw naam, niet van een gebruiker.",
    "ticket_opened"             => "Uw ticket is geopend.",
    "enter_user_details"        => "Vul uw gegevens in of login op uw account.",
    "already_have_account"      => "U hebt reeds een account. Log in en open dan een ticket. Of gebruik de wachtwoord vergeten optie.",

    "recent_tickets"            => "Recente tickets",
    "last_message_text"         => "Tekst laatste bericht",

    "set_due_time"              => "Stel deadline in",

    "settings"                  => "Ticketinstellingen",

    "priority"                  => "Prioriteit|Prioriteiten",

    "channel"                   => "Kanaal|Kanalen",
    "account"                   => "Account|Accounts",

    "assign_operator"           => "Operator toewijzen",
    "assigned_operator"         => "Toegewezen operator",
    "assigned_to"               => "Toegewezen aan",
    "assigned"                  => "Toegewezen",

    "department"                => "Afdeling|Afdelingen",
    "change_department_order"   => "Sleep de regels om de volgorde van de afdelingen te veranderen die gebruikers te zien krijgen wanneer een nieuw ticket wordt geopend.",
    "department_applicable"     => "Toepasselijke afdelingen",
    "department_applicable_desc" => "De afdelingen in de volgorde waarop deze voor de gebruikers beschikaar zijn om te selecteren. Alleen van toepassing op frontend, alle prioriteiten zijn beschikbaar voor alle operators van alle afdelingen.",

    "send_now"                  => "Verstuur nu",

    "tag"                       => "Tag|Tags",

    "track_ticket"              => "Track Ticket",
    "view_ticket"               => "Bekijk Ticket",

    // Recent activity
    "recent_activity"           => "Recente activiteit",

    "ticket_number"             => "Ticketnummers",
    "ticket_format"             => "Ticketnumberformaat",

    // Departments
    "department_public_desc"    => "Wanneer de afdeling zichtbaat is voor gebruikers op de servicedesksite.",
    "department_parent_desc"    => "Wanneer de afdeling een onderafdeling is, begin dan met de parent. Onderafdelingen zijn voor interne escalaties en management, daarom verwdijnen bij het instellen enkele opties hieronder..",
    "department_priority"       => "Afdelingsprioriteiten",
    "department_priority_desc"  => "Van de prioriteiten die beschikbaar zijn voor gebruikers wanneer ze voor deze afdeling een ticket aanmaken moet er minstens 1 worden geselecteerd. Standaard worden alle prioriteiten beschikbaar gesteld per afdeling.",
    "department_no_format"      => "Optioneel, alleen instellen op het standaard formaat van het ticketnummer aan te passen. Laat anders blank.",
    "department_operator"       => "Afdelingsoperators",
    "department_default_assign" => "Standaard toewijzen aan",
    "dept_default_assign_desc"  => "Gebruik dit wanneer nieuwe tickets voor deze afdeling standaard moeten worden toegewezen aan een of meer operators.",

    // Department emails
    "email_accounts_desc"       => "Stel een e-mailadres per afdeling in. Elke inkomende e-mail zal worden aangemaakt als ticket voor deze afdeling. Het eerste adres zal standaard worden gebruikt als verzendadres",
    "department_port"           => "Standaard porten zijn:110 voor POP3, 995 voor beveiligde POP3, 143 voor IMAP, en 993 voor beveiligde IMAP. Laat leeg voor standaard poort.",
    "department_encryption"     => "Sommige e-mailproviders hebben SSL- of TLS-codering nodig om verbinding te maken. Als u het niet zeker weet, laat u deze instelling op geen staan .",
    "department_delete_mail"    => "Wanneer IMAP gebruikt wordt is het mogelijk te kiezen om de e-mail niet uit de mailbox te verwijderen wanneer ze zijn geimporteerd als tickets.",
    "protocol"                  => "Protocol",
    "server"                    => "Mail Server",
    "port"                      => "Poort",
    "encryption"                => "Encryption",
    "delete_downloaded"         => "Verwijder gedownloade e-mail",
    "consume_all"               => "Consumeer alle e-mail",
    "email_download"            => "E-mail Download",
    "email_piping"              => "E-mail Piping",
    "email_piping_desc"         => "Stel een e-mailforwarder in zoals hieronder, het PHP-uitvoerbare pad kan op uw server anders zijn. ",
    "remote_email_piping"       => "Remote E-mail Piping",

    // Department email options
    "email_options"             => "E-mail Opties",
    "email_user_on_email"       => "E-mail gebruikers wanneer ze een ticket openen via e-mail",
    "email_user_on_email_desc"  => "Selecteer wanneer gebruikers een e-mail moeten krijgen wanneer een e-mail die ze sturen wordt opgenomen als ticket.",
    "email_operators"           => "Bericht operators",
    "email_operators_desc"      => "Selecteer wanneer antwoorden van operators moeten worden doorgestuurd naar andere operators. Standaard wordt de \"e-mail operators\" optie in het operator panel gezet, en stuurt dan automatisch een e-mail bij e-mail reacties van operators.",
    // Department email templates
    "new_ticket_opened"         => "Nieuw Ticket Geopend",
    "waiting_for_response"      => "Wachtend op Antwoord",
    "ticket_auto_closed"        => "Ticket automatisch gesloten",
    "closed_by_operator"        => "Gesloten door Operator",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Feedbackformulier|Feedbackformulieren",
    "feedback_form_desc"        => "Feedbackformulieren worden verwerkt in de volgorde waarin ze verschijnen. Door te slepen kan de volgorde worden veranderd.",
    "view_feedback"             => "Bekijk feedback",
    "ticket_feedback"           => "Ticket feedback",
    "feedback_fields_error"     => "Er was een probleem bij ophalen van de feedbackvelden.",
    "time_after_resolved"       => "Tijd na oplossing",
    "time_after_resolved_desc"  => "De tijd vanaf dat een ticket is gemarkeerd als opgelost totdat het feedbackformulier naar de gebruiker is verstuurd.",
    "expires_after"             => "Verloopt na",
    "expires_after_desc"        => "De tijd waarna een feedbackformulier niet meer kan worden gebruikt. Aanbevolen instelling is 7 dagen, maar wanneer 0 wordt ingevuld in alle velden verloopt het formulier nooit.",
    "form_conditions"           => "Formuliervoorwaarden",
    "form_conditions_desc"      => "Definieer de voorwaarden voor zojuist opgeloste tickets om vast te stellen of ze onder dit formulier vallen. Wanneer een ticket onder meerder formulieren valt wordt er gekeken naar prioriteit welke kan worden aangepast door de volgorde van de formulieren te veranderen.",
    "form_fields"               => "Formuliervelden",
    "rating"                    => "Rating",
    "feedback_desc"             => "Bedankt! Dat u contact met ons op hebt genomen en we hopen uw vraag te hebben beantwoord. U kunt uw ervaring beoordelen...",
    "good_satisfied"            => "Goed, ik ben tevreden",
    "bad_not_satisfied"         => "Slecht, ik ben niet tevreden",
    "feedback_not_found"        => "Uw feedback kon niet worden geaccepteerd, indien u de feedback alsnog wilt delen kunt u hier een ticket voor openen.",
    "feedback_malformed_token"  => "Uw feedback kon niet worden geaccepteerd vanwege een foutieve token. Indien u de feedback alsnog wilt delen kunt u hier een ticket voor openen.",
    "feedback_expired"          => "Dit ticket is al enige tijd opgelost, de periode voor feedback is reeds verlopen.",
    "feedback_questions"        => "Als u even de tijd heeft, beantwoord dan de volgende vragen om ons te helpen de ondersteuning die we bieden verder te verbeteren.",
    "feedback_for_ticket"       => "Feedback voor Ticket #:number",
    "feedback_rating_desc"      => "De ondersteuning die op dit ticket wordt ontvangen, is beoordeeld als <strong>:rating</strong> door de klant.",

    // Custom fields
    "customfield"               => "Ticket aangepast veld|Ticket aangepaste velden",
    "customfield_order"         => "Sleep de regels om de volgorde van de aangepast velden te veranderen waarin deze worden getoond aan de gebruiker wanneer ze via de website een ticket openen.",

    // Canned responses
    "cannedresponse"            => "Standaard antwoord|Standaard antwoorden",

    // Filters
    "filter"                    => "Filter|Filters",
    "filter_condition"          => "Filtervoorwaarden",
    "filter_condition_desc"     => "Definieer de voorwaarden waaronder tickets onder dit filter worden getoond.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Macro voorwaarden",
    "macro_action"              => "Macro Acties",
    "macro_action_desc"         => "Definieer de acties welke worden uitgvoerd wanneer een macro word tt uitgevoerd. Zorg wel dat de acties geldig zijn voor de afdeling waar het ticket is anders worden ze genegeerd.",

    "from"                      => "Van",
    "to"                        => "Aan",
    "cc"                        => "CC",

    "allowed_files"             => "Toegestande bijlagen",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> bekijkt dit ticket ook.",
    "draft_saved"               => "Concept opgeslagen op :time",
    "save_draft"                => "Bewaar concept",
    "discard_draft"             => "Concept verwijderen",

    // Locked
    "error_ticket_locked"       => "Dit ticket is gelocked en kan niet worden bijgewerkt, indien u verdere ondersteuning nodig hebt kunt u een nieuw ticket openen.",

    // Ticket Followups
    "follow_up"                 => "Opvolging",
    "follow_up_status_desc"     => "Verander de status van een ticket totdat er opvolging plaatsvindt.",
    "exact_date_time"           => "Exacte datum en tijd",
    "time_from_now"             => "Voorlopige tijd",

    // Schedule
    "schedule"                  => "Planning|Planningen",
    "business_hour"             => "Kantoortijden",
    "business_hour_desc"        => "Kantoortijden geven de tijd aan waarin servicedeskmedewerkers beschikbaar zijn. Deze tijden worden meegereked met de bepaling van de deadline (deadline)..",

    // Holidays
    "holiday"                   => "Feestdag/Feestdagen",
    "holiday_or_on_the"         => "of, op de",
    "holiday_month_year_desc"   => "Jaar is optioneel wanneer een feestdag herhaald wordt. Selecteer alleen eenjaar wanneer de feestdag slechts op deze specifieke datum plaatsvindt.",

    // SLA Plans
    "sla_plan"                  => "SLA|SLA",
    "specific_schedule"         => "Specifieke planningen",
    "calendar_hours_24"         => "Kalendaruren (24 uurs)",
    "resolution_time"           => "Oplostijden",
    "resolution_time_desc"      => "Stek de tijden in waarbinnen een ticket moet worden beantwoord en opgelost per prioriteit. De tijd telt alleen binnen de werktijden van de planning, decimale waarden kunnen worden gebruikt.",
    "reply_within"              => "Beantwoord binnen",
    "resolve_within"            => "Oplossen binnen",
    "plan"                      => "SLA",
    "sla_condition"             => "SLA voorwaarden",
    "sla_condition_desc"        => "Defininieer de ticketvoorwaarden voor controle of nieuwe tickets vallen onder deze SLA. Wanneer een ticket onder meerdere SLAs valt wordt er gekozen naar prioriteit. Deze prioteit kan worden aagepast in de lijst van SLAs.",
    "escalation_rule"           => "Escalatieregels",
    "escalation_rule_desc"      => "Definieer acties die worden uitgevoerd wanneer een ticket met dit SLA over tijd dreigt te gaan. Zorg er wel voor dat de regels gelden voor de afdeling van het ticket, anders worden deze acties genegeerd.",
    "condition"                 => "Voorwaarde",
    "condition_group"           => "Voorwaardegroep",
    "all_groups"                => "ALLE groepen moeten waar zijn",
    "any_group"                 => "EEN groep hoeft slechts waar te zijn",
    "all_conditions"            => "ALLE voorwaarden binnen de groep moeten waar zijn",
    "any_condition"             => "EEN voorwaarde binnen de groep hoeft slects waar te zijn",
    "sla_plan_desc"             => "SLAs worden verwerkt in de volgorde waarop ze getoond worden. Verplaats de regels om de prioteit aan te passen.",

    // Reply options
    "reply_options"             => "Antwoord opties",
    "send_email_to_users"       => "Stuur E-mail naar gebruiker(s)",
    "send_email_to_operators"   => "Stuur E-mail naar operator(s)",
    "back_to_grid"              => "Ga terug naar ticket veld",
    "take"                      => "Neem",
    "take_ownership"            => "Neem eigendom",
    "pause_duetime"             => "Pauzeer de verwachte tijd",
    "add_to_canned_responses"   => "Toevoegen aan standaardantwoorden",
    "visible_to_all_operators"  => "Maak zichtbaar voor alle operator(s)",
    "set_status"                => "Zet Status",
    "add_selfservice_link"      => "Voeg Self-Service Link toe",
    "search_selfservice"        => "Zoek naar een self-service artikel",
    "search_canned"             => "Zoek voor een autoantwoord",

    "mark_resolved"             => "Markeer als opgelost",

    "ticket_signature"          => "Ticket handtekening",

    "default_open_status"       => "Standaard open status",

    "default_resolve_status"    => "Standaard opgeloste status",
    "default_resolve_status_desc" => "Kies de standaard status dat gebruikt wordt voor opgeloste tickets",

    "waiting_response_time"      => "Wachten voor antwoord mail",
    "waiting_response_time_desc" => "De tijd nadat gebruikers een mail krijgen op inactieve tickets, met de vraag of zij het ticket opgelost beschouwen. Zet op 0 om uit te zetten.",

    "close_inactive_tickets"    => "Sluit inactieve tickets",
    "close_inactive_tickets_desc" => "De tijd waarin inactive tickets automatisch gesloten worden, zet op 0 om ze nooit automatisch te laten sluiten",

    "ticket_reply_order"        => "Ticket beantwoord volgorde",
    "ticket_reply_order_desc"   => "Selecteer de volgorde waarin tickets lopen, oplopend waarin het laatste bericht als laatste staat of aflopend waarin het laatste bericht bovenaan staat",

    "ticket_notes_position"     => "Ticket notitie positie",
    "ticket_notes_position_desc" => "Selecteer waar in het ticket de betreffende notitie moet komen",
    "ticket_notes_top_messages" => "Boven en in het bericht",
    "ticket_notes_top"          => "Alleen boven",
    "ticket_notes_messages"     => "Alleen in het bericht",

    "captcha_desc"              => "Wanneer de Captcha zich laat zien bij nieuwe gebruikers die een nieuwe ticket openen",
    "unregistered_only"         => "Alleen ongeregistreerde gebruikers",

    "allow_unauth_users"        => "Sta ongeverifieerde gebruikers toe",
    "allow_unauth_users_desc"   => "Sta gebruikers die niet ingelogd zijn toe om tickets te bekijken en te beantwoorden. Als u dit uitschakelt, wordt ook de track ticket functie verwijderd en moeten gebruikers zich  registreren en inloggen voordat ze toegang kunnen krijgen tot tickets. ",

    "default_department"        => "standaard afdeling",
    "default_department_desc"   => "De standaardafdeling die op alle inkomende tickets is ingesteld via dit kanaal.",

    "show_related_articles"     => "Laat gerelateerde artikelen zien",
    "show_related_articles_desc" => "Wanneer de gebruiker het onderwerp aan het typen is, kunnen deze gerelateerde artikelen worden getoond op basis van wat ze hebben ingevoerd. Vereist dat de selfservicemodule wordt ingeschakeld en MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Standaard prioriteit",
    "default_priority_desc"     => "De standaard prioriteit op alle inkomende tickets via dit kanaal.",
    "verbose_email_log"         => "Uitgebreid e-maillogboek",

    "last_reply"                => "Laatste antwoord",
    "opened_at"                 => "Geopend om",

    "change_department"         => "Verander afdeling",
    "change_status"             => "Verander status",
    "no_statuses"               => "Geen status gevonden. Klik <a href=':route'>hier</a> om aan te maken",
    "no_priorities"             => "Geen prioriteiten gevonden. Klik <a href=':route'>hier</a> om aan te maken",
    "no_templates"              => "Geen aangepaste e-mailsjablonen gevondend. Klik <a href=':route'>hier</a> om aan te maken",
    "no_tags"                   => "Geen ticket tags gevonden. Klik <a href=':route'>hier</a> om aan te maken",
    "no_departments_found"      => "Geen afdelingen gevonden. Klik <a href=':route'>hier</a> om aan te maken",
    "no_operators_found"        => "Geen operators gevonden. Klik <a href=':route'>hier</a> om aan te maken",
    "change_priority"           => "Wijzig prioriteit",
    "add_tag"                   => "Voeg tag toe",

    "unlock"                    => "Openen",
    "merge"                     => "Samenvoegen",
    "merged"                    => "Samengevoegd",
    "unmerge"                   => "Samenvoegen opheffen",
    "close_and_lock"            => "Sluiten en op slot doen",

    "mass_reply"                => "Massa beantwoorden",

    "due_today"                 => "Uiterlijk vandaag",
    "overdue"                   => "Achterstallig",
    "unassigned"                => "Niet-toegewezen",

    "pause_duetime_desc"        => "Als er een actieve SLA op dit ticket is, pauzeert u dan de resterende tijd tot na de opvolgende datum. De uiterlijke datum begint pas weer als een antwoord of notitie aan het ticket is toegevoegd (inclusief de opvolgende)",

    "add_cc"                    => "Voeg CC toe",
    "reply_above_line"          => "Antwoord u boven deze lijn alstublieft",

    "email_settings"            => "E-mail Instellingen",
    "web_settings"              => "Web Instellingen",
    "split_selected_replies"    => "Splits Selecteerde antwoorden",

    "track_ticket_not_found"    => "Kon het ticket met ticketnummer en e-mailadres van de gebruiker niet vinden",

    "channel_deactivated"       => "Het ticket kanaal is momenteel gesloten, een antwoord kan niet geplaatst worden.",

    "type_in_tags"              => "Type in tags",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Een lijst met bestandsextensies, gescheiden door de pipe | karakter, die zijn toegestaan als bijlagen. Bijvoorbeeld: txt | png | jpg. Om alle bijlagen toe te staan, voer in: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Geen operator groupen gevonden. Klik <a href=':route'>here</a> om een aan te maken.",
    "no_user_groups"            => "Geen gebruiker groepen gevonden. Klik <a href=':route'>here</a> om een aan te maken.",
    "remote_email_piping_desc"  => "Download the <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'>remote email piping script</a> and follow the <a href='http://docs.supportpal.com/display/DOCS/Remote+Email+Piping' target='_blank'>documentation</a> on configuring it on your mail server.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "SupportPal heeft standaard ondersteuning voor e-mailalias en controleert het AAN-adres bij binnenkomende e-mail om te zien op welke afdeling het ticket moet worden geopend. Een ticket wordt niet geopend als het e-mailadres van een overeenkomende afdeling niet kan worden gevonden. Wanneer u deze instelling inschakelt worden alle e-mails zonder e-mailadres van een overeenkomende afdeling als tickets in deze afdeling geïmporteerd.",
    "default_reply_options"     => "Standaard Antwoord Opties",
    "default_reply_options_desc" => "Selecteer de standaardantwoordopties die moeten worden ingesteld bij het openen of beantwoorden van een ticket. De optie ': reply_option' wordt aangevinkt op basis van de instelling ': department_option'.",
    "associate_response_tag"    => "Associeer standaardantwoord met een label...",
    "canned_response_tags_desc" => "Labels toevoegen die kunnen helpen bij het vinden van een standaardantwoord bij het beantwoorden van een ticket.",
    "loading_tags"              => "Labels laden",
    "append_ip_address"         => "Voeg IP Adres toe",
    "append_ip_address_desc"    => "Voeg het IP-adres van gebruikers toe aan hun berichten wanneer ze openen en antwoord geven op tickets van de frontend.",
    "unassign_operator"         => "Operator ongedaan maken",
    "remove_tag"                => "Verwijder Label",
    "message_clipped"           => "[Bericht Geknipt]",
    "view_entire_message"       => "Volledige Bericht Inlezen",
    "no_custom_fields"          => "Geen aangepaste velden gevonden. Klik <a href=':route'>here</a> om een aan te maken.",
    "follow_up_active"          => "A <a class='view-followup' style='text-decoration: underline;'>follow up</a> is currently active on this ticket and will run <strong>:time</strong>.",
    "disable_user_email_replies" => "Verwijder Gebruiker E-mail Antwoorden",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Standaard Ticket Filter",
    "default_ticket_filter_desc" => "Het ticketfilter dat standaard wordt gebruikt bij het klikken op de link 'Tickets beheren'. Kan worden ingesteld op 'Geen', de standaardoptie, die alle onopgeloste tickets toont.",
    "recent_filters"            => "Recente Filters",
    "inactive_tickets"          => "Inactieve Tickets",
    "default_open_status_desc"  => "Selecteer de standaardstatus die automatisch moet worden ingesteld wanneer een gebruiker een nieuw ticket opent of antwoordt op een ticket, wanneer een operator nog niet gereageeerd heeft.",
    "default_reply_status"      => "Standaard Antwoord Status",
    "default_reply_status_desc" => "Selecteer de standaardstatus die automatisch moet worden ingesteld wanneer een gebruiker op een ticket antwoordt, is alleen van toepassing nadat een operator op het ticket heeft geantwoord.",
    "ticket_reply_order_default" => "Systeemstandaard gebruikt de waarde die momenteel is geselecteerd in de algemene ticketinstellingen.",
    "select_a_parent"           => "Selecteer een bovenliggende afdeling...",
    "select_a_department"       => "Selecteer een afdeling...",
    "department_operator_desc"  => "U kunt ook individuele operators aan de afdeling toewijzen. Deze operators komen bovenop de groepen die hierboven zijn toegewezen.",
    "department_group"          => "Afdeling Groepen",
    "department_group_desc"     => "U kunt hele groepen operatoren toewijzen aan de afdeling, aanbevolen als uw lijst met operators groot is en / of regelmatig wordt gewijzigd.",
    "ticket_other_brands"       => "Tickets in Andere Merken",
    "add_for_department"        => "Toevoegen voor afdeling...",
    "record_order"              => "Versleep de rijen om de volgorde van records te wijzigen.",
    "reply_all"                 => "Alle Beantwoorden",
    "reply_without_cc"          => "Beantwoord (zonder CC)",
    "email_accounts"            => "E-mail Accounts",
    "add_another_email"         => "Een ander e-mailadres toevoegen",
    "follow_up_date"            => "Opvolgende datum",
    "post_reply"                => "Reageer",
    "post_note"                 => "Bericht",
    "ticket_details"            => "Ticket Details",
    "organisation_tickets"      => "Organisatie Tickets",
    "manage_tickets"            => "Beheer Tickets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Bovenliggende Afdeling",
    "department_brands"         => "Afdeling Soorten",
    "email_item"                => "E-mail :item",
    "from_name"                 => "Van Naam",
    "from_address"              => "Van Adres",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user op :date",
    "prioritise_reply-to"       => "Prioritiseer Reply-To",
    "prioritise_reply-to_desc"  => "Schakel in om de Reply-To header prioriteit te geven over de From header. Wanneer ingesteld zullen tickets die via mail zijn aangemaakt worden geopend op naam van de Reply-To.",
    "note_options"              => "Notitie Opties",
    "escalation_rules_desc"     => "Onderstaand SLA escalatieregels zijn ingesteld om uitgevoerd te worden op de vermelde tijden. Deze tijden kunnen worden aangepast en de regels kunnen worden verwijderd indien een operator op het ticket antwoord.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Geen geregistreerde gebruiker. Dit kanaal accepteerd alleen e-mails van geregistreerde gebruikers.",
    "display_name"              => "Stuur e-mail aan getoonde naam",
    "display_name_desc"         => "Optioneel, gebruik alleen wanneer de getoonde naam in uitgaande e-mail moet worden aangepast, anders laat blank.",
    "display_name_options"      => "De volgende Twig variabelen kunnen worden gebruikt:<br >{{ brand.name }} - Merknaam<br />{{ department.name }} - Afdelingsnaam<br />{{ department.frontend_name }} - Toont naam van de gehele afdeling mits het ticket toebehoort aan een subafdeling.<br />{{ operator.formatted_name }} - Operatornaam<br /><em>De operatornaam zal niet altijd beschikbaar zijn, gebruik dus een 'not empty' voorwaarde zoals {% if operator is not empty %}{{ operator.formatted_name }}{% endif %}</em>",
    "attachment_rejected"       => "Bijlage geweigerd",
    "enable_subaddresses"       => "Sta Sub-adressen toe",
    "enable_subaddresses_desc"  => "Schakelt het gebruik van sub-adressen in voor alle afdelingen. Dit creeert een uniek sub-adress voor elk ticket welke als Reply-To adress wordt gebruikt op uitgaande e-mail. De gebruikte mailserver moet natuurlijk wel het gebruik van sub-adressen ondersteunen. Er kunnen extra stappen nodig zijn wanneer u gebruik maakt van email piping om ervoor te zorgen dat deze adressen correct worden doorgestuurd. Het inschakelen van deze functie stelt u in staat het ticketnummer uit de onderwerpregel te verwijderen.",
    "email_replies_disabled"    => "E-mail Reacties uitgeschakeld",
    "disable_user_email_replies_desc" => "Schakel dit in om antwoorden per e-mail van gebruikers niet te accepteren, en verwijderd ook de reply clipping regel in uitgaande e-mails. Standaard worden de antwoorden stilletjes genegeerd, maar u kunt ook een e-mail laten sturen naar de gebruiker dat antwoorden per email niet worden gebruikt middels de 'Email Replies Disabled'-teplate.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Toegewezen aan ticket",
    "user_ticket_reply"         => "Antwoord op ticket van gebruiker",
    "new_internal_ticket"       => "Nieuw intern ticket",
    "department_changed"        => "Afdeling veranderd",
    "operator_ticket_reply"     => "Antwoord op operator ticket",
    "new_ticket_note"           => "Nieuwe notitie voor ticket",
    "email_template_desc"       => "U kunt een e-mailtemplate selecteren welke gebruikt zal worden ipv de standaard om verzonden te worden naar de gebruiker of operators voor elke van de onderstaande acties. Deze template zal alleen voor deze afdeling standaard worden.",
    "create_new_user"           => "Maak nieuwe gebruiker",
    "user_reply_internal_ticket" => "Geen operator. Alleen operators kunnen een intern ticket beantwoorden.",
    "enter_email_address"       => "Vul het e-mailadress in...",
    "email_user_frontend"       => "E-mail gebruikers bij tickets die worden geopend op de frontend",
    "email_user_frontend_desc"  => "Selecteer of gebruikers een e-mail moeten krijgen wanneer ze op de frontend een ticket aanmaken.",
    "department_template_disabled" => "De afdelingstemplate in kwestie is uitgeschakeld, deze e-mail kan niet worden verstuurd.",
    "verbose_email_log_desc"    => "Indien e-mailcollectie wordt gelogd is het aanbevolen dit alleen te gebruiken indien support dit nodig heeft voor debugging. Vijf dagen aan logs worden bewaard, oudere logs worden automatisch verwijderd.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Open een ticket in naam van een bestaande gebruiker.",
    "canned_response_tag"       => "Standaard antwoord tag|Standaard antwoorden tags",
    "response"                  => "Antwoord|Antwoorden",
    "response_desc"             => "Het standaard antwoord kan in verschillende talen worden geschreven. Het passende antwoord zal automatisch de door de gebruiker ingestelde taal gebruiken.",
    "no_slaplans"               => "Geen SLA gevonden. Klik <a href=':route'>hier</a> om er een aan te maken.",
    "filter_performance"        => "Prestatieoverwegingen en -aanbevelingen",
    "filter_performance_desc"   => "<li>Filters die meerdere tickets bestrijken zullen langzamer zijn. Probeer zoveel mogelijk opgeloste tickets uit te sluiten.</li><li>Filters met een 'is not'-voorwaarde zijn langzamer dan met een  'is'-voorwaarde.</li><li>Filters die checken voor NULL waardes (zoals ticket tag is None) zijn langzamer.</li><li>Beperk gebruik van meerdere voorwaardes die strings/woorden checken omdat dit meer complexiteit brengt.</li><li>Filters met 'begint met' of 'bevat' voorwaardes zijn langzamer dan 'is gelijk' of 'eindigt op'.</li><li>Opgelost tickets worden niet meegeteld in de sidebar.</li>",
    "run_macro"                 => "Voer macro uit",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Toggle om de afdeling alleen te tonen aan ingelogde gebruikers en alleen e-mails te accepteren van gebruikers die actief zijn geregistreerd bij de helpdesk. Indien ingeschakeld, wordt een teruggestuurde e-mail verzonden naar niet-geregistreerde gebruikers die deze afdeling e-mailen. Om de e-mail te wijzigen of uit te schakelen, zie de sjabloonoptie 'Alleen geregistreerde gebruikers' hieronder.",
    "form_fields_desc"          => "Als u aanvullende informatie wilt verzamelen wanneer de gebruiker feedback geeft, kunt u aangepaste velden instellen om hier op het formulier weer te geven. Het veldtype wordt vergrendeld zodra het formulier is ingevuld door een gebruiker.",
    "feedback_ratings"          => "Klanttevredenheidsscore (dit heeft invloed op uw klanttevredenheidsscore) ",
    "email_and_other_accounts"  => "E-mail en andere ticket kanalen",
    "delete_message"            => "Verwijder bericht",
    "linked_tickets"            => "Gekoppelde Tickets",
    "add_linked_ticket"         => "Gekoppelde ticket toevoegen",
    "create_linked_ticket"      => "gekoppelde ticket aanmaken",
    "copy_link"                 => "Kopieer link",
    "forward_message"           => "Bericht doorsturen",
    "forward_from_here"         => "Bericht doorsturen vanaf hier",
    "forward"                   => "Doorsturen",
    "forward_options"           => "Doorstuur opties",
    "forwarded_to"              => "Doorsturen naar",
    "new_operator_reply"        => "Nieuw Operator Antwoord",
    "new_user_reply"            => "Nieuw Gebrukers Antwoord",
    "add_bcc"                   => "BCC Toevoegen",
    "at_least_one_recipient"    => "Geef ten minste één ontvanger op.",
    "forwarded_message"         => "---------- Doorgestuurd bericht ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Let op: heeft alleen betrekking op tickets die behoren tot een status waarvoor 'Inactieve tickets sluiten' is ingeschakeld.",
    "close_inactive_status_desc" => "Schakelen om automatische sluiting van inactieve tickets en e-mailherinneringen voor inactiviteit in / uit te schakelen (sjablonen 'Waiting For Response' en 'Ticket Auto Closed'). Indien ingeschakeld, kan de tijd voordat herinneringen worden verzonden, worden geconfigureerd via de algemene instellingen van het ticket.",
    "from_header_missing"       => "Van: koptekst ontbreekt in e-mail.",
    "move_ticket"               => "Ticket verplaatsen",
    "move_ticket_step1"         => "Stap 1: Kies een nieuw merk om het ticket naar te verplaatsen.",
    "move_ticket_step2"         => "Stap 2: Kies een afdeling van een nieuw merk.",
    "current_record"            => "Huidig :record",
    "new_record"                => "Nieuw :record",
    "department_email"          => "Afdeling E-mail",
    "select_a_department_email" => "Selecteer een afdelings-e-mailadres...",
    "record_public_desc"        => "Schakel in om deze :record alleen toegankelijk maken voor u zelf.",
    "record_group_desc"         => "Als u het :record alleen zichtbaar wilt maken voor bepaalde gebruikersgroepen. Laat leeg om zichtbaar te maken voor alle operators.",
    "ticket_format_desc"        => "Kan alfanumerieke tekens en speciale tekens bevatten <code> -_. +! *, </code> <br /> De volgende variabelen kunnen ook worden gebruikt: %S voor een volgnummer | %N voor een willekeurig getal | %L voor een willekeurige letter <br /> Gebruik {nummer} om <strong> alleen </strong> te herhalen na %N of %L, bijv. %N{4} staat gelijk aan 4 willekeurige getallen, %L{3} staat gelijk aan 3 willekeurige letters <br /> Het volgende <a href = 'http: //php.net/manual/en/function.date.php' target = '_ blank'> PHP-datum </a> Parameters voorafgegaan door %Y, y, m, d, j, g, G, h, H, i, s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Toggle om de macro uit te schakelen en te voorkomen dat deze automatisch wordt uitgevoerd of wordt weergegeven in de ticketinterface.",
    "macro_order_drag"          => "Versleep de rijen om de volgorde van de macro's te wijzigen.",
    "macro_order_processed"     => ":type macro's worden verwerkt in de volgorde waarin ze verschijnen .",
    "macro_type"                => "Macro Type",
    "macro_type_desc"           => "Er zijn drie soorten macro's beschikbaar. Handmatige macro's kunnen alleen worden uitgevoerd vanuit de ticketweergave of het raster, automatische macro's worden elk uur uitgevoerd op onopgeloste tickets en hookmacro's kunnen worden uitgevoerd op specifieke ticketgebeurtenissen. Automatische macro's en hook-macro's kunnen ook worden ingesteld om alleen binnen specifieke schema's te worden uitgevoerd. Alle hook-macro-acties zullen geen andere hook-macro's activeren om het risico van lussen te vermijden .",
    "macro_run_at_most"         => "Draai maximaal",
    "macro_run_times"           => "keer", // As in '5 times'
    "macro_run_at_most_desc"    => "Beperk het aantal keren dat een automatische macro op een enkel ticket kan worden uitgevoerd, laat leeg om het een onbeperkt aantal keren te laten draaien.",
    "macro_events_desc"         => "Selecteer een of meer gebeurtenissen waarop de macro moet worden uitgevoerd. De onderstaande voorwaarden worden gecontroleerd voordat de macro wordt uitgevoerd.",
    "macro_schedules_desc"      => "Standaard draait de macro 24/7, maar u kunt een of meer helpdeskschema's selecteren zodat de macro alleen op die tijden actief is.",
    "macro_condition_desc"      => "Definieer de voorwaarden waarvoor tickets deze macro beschikbaar zal zijn. Standaard is het zonder voorwaarden van toepassing op alle tickets. Er moet ten minste één voorwaarde zijn gedefinieerd voor automatische macro's.",
    "add_remove_headers"        => "Headers Toevoegen / Verwijderen",
    "webhook_merge_fields"      => "Samenvoegvelden kunnen worden gebruikt in het URL- en inhoudveld, <a href=\"https://docs.supportpal.com/current/Merge+Fields\">leer meer</a>.",
    "webhook_ticket_required"   => "Er moet een ticket zijn om deze functionaliteit te laten werken.",
    "not_permitted"             => "Sorry, het is niet toegestaan om de gevraagde ticket (s) te bekijken. Als u denkt dat dit ten onrechte is weergegeven, neem dan contact op met uw beheerder.",
    "watch"                     => "Monitoren",
    "unwatch"                   => "Unmonitor",
    "watching"                  => "Gemonitord",
    "internal_ticket"           => "Interne Ticket|Interne Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Downloaden...",
    "downloading_desc"          => "Als de download niet binnen een paar seconden automatisch start, gelieve <a href=':href'>hier te klikken</a> om rechtstreeks toegang te krijgen tot de download-URL.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Behorend bij :name)",
    "block_user"                => "Blokeer Gebruiker",
    "merge_tickets"             => "Tickets Samenvoegen",

    /*
     * 2.5.1
     */
    "channel_account_removed"   => "Het ticketkanaalaccount is gedeactiveerd of verwijderd, er kan geen reactie worden geplaatst.",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Follow-ups",
    "follow_up_multiple_active" => "Meerdere <a class='view-followup' style='text-decoration: underline;'>follow-ups</a> zijn momenteel actief op dit ticket en de volgende geplande wordt uitgevoerd op <strong>:time</strong>.",
    "follow_up_no_actions"      => "Er zijn geen acties ingesteld voor de follow-up. Bevestig of u wilt doorgaan.",
    "status_after_running"      => "Status na uitvoering",
    "older_messages"            => ":count oudere berichten ",
    "holiday_single_day"        => "Enkele dag",
    "holiday_date_range"        => "Datumbereik",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Selecteer ticket om mee samen te voegen",
    "search_number_or_subject"  => "Zoek op ticketnummer of onderwerp",
    "im_not_sure"               => "Ik weet het niet zeker",
    "auto_reply_detected"       => "Automatisch antwoord gedetecteerd - er wordt geen melding naar de gebruiker (s) gestuurd.",
    "cc_desc"                   => "Je kunt andere mensen naar dit ticket sturen door hier e-mailadressen in te voeren.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> was een bericht aan het opstellen ",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Handmatig instellen",
    "unresolved"                => "Niet opgelost",
    "resolved"                  => "Opgelost",
    "manage_oauth_options"      => "Om OAuth-opties toe te voegen of te beheren, gaat u naar de <a href=\":route\">Integraties van derden</a> pagina.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "We hebben uw feedback opgeslagen.",
    "how_was_the_help"          => "Hoe was de hulp die u heeft gekregen? ",
    "update_feedback"           => "Update Feedback",
    "verify_user"               => "Controleer de authenticiteit van de gebruiker.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets die worden geopend via de frontend-interface voor gebruikers of het bedieningspaneel voor operators.",
    "email_channel_name"        => "E-mail",
    "email_channel_desc"        => "Tickets geopend na het verwerken van inkomende e-mail.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets en antwoorden gepost via de API.",

);