<?php

return array(

    "feedback_question"         => "Pergunta a ser mostrada ao usuário.",
    "open_new"                  => "Abrir novo ticket",
    "select_department"         => "Selecione um departamento",
    "select_department_desc"    => "Clique no departamento relevante para o seu problema abaixo.",
    "no_departments"            => "Nenhum departamento encontrado.",
    "department_user_details"   => "Detalhes do departamento e do usuário",
    "enter_your_details"        => "Insira seus detalhes",
    "enter_ticket_details"      => "Insira os detalhes",
    "enter_subject_message"     => "Digite o assunto e a mensagem",
    "invalid_user"              => "Certifique-se de que os detalhes de usuário válidos foram inseridos para continuar.",

    "registered_users"          => "Registered Users Only",

    "tickets"                   => "Ticket(s)",
    "ticket"                    => "Ticket|Tickets",
    "subject"                   => "Subject",
    "no_subject"                => "Sem assunto",
    "last_action"               => "Última Ação",
    "due_time"                  => "Prazo de entrega",
    "created_time"              => "Hora de criação",
    "submitted"                 => "Enviado",
    "ticket_reply"              => "Resposta ao ticket",
    "ticket_note"               => "Nota de Ticket",
    "ticket_type"               => "Tipo de ticket",

    "user_ticket"               => "Ticket de Usuário",
    "user_ticket_desc"          => "Abra um novo ticket em nome de um usuário novo ou existente.",
    "existing_user"             => "Usuário existente",
    "new_user"                  => "Novo usuário",
    "internal"                  => "Internal",
    "internal_ticket_desc"      => "Abra um ticket apenas para uso interno. Este tíquete será associado a você, e não a um usuário.",
    "ticket_opened"             => "Your ticket has successfully been opened.",
    "enter_user_details"        => "Por favor, insira seus dados abaixo, ou faça login em sua conta, se tiver uma.",
    "already_have_account"      => "Você já tem uma conta, faça o login e abra o ticket. Por favor, use o recurso de senha esquecida se você não se lembra do seu login.",

    "recent_tickets"            => "Tickets Recentes",
    "last_message_text"         => "Última Mensagem de Texto",

    "set_due_time"              => "Set a due time",

    "settings"                  => "Ticket Settings",

    "priority"                  => "Priority|Priorities",

    "channel"                   => "Channel|Channels",
    "account"                   => "Account|Accounts",

    "assign_operator"           => "Assign Operator",
    "assigned_operator"         => "Assigned Operators",
    "assigned_to"               => "Atribuído a",
    "assigned"                  => "Atribuído",

    "department"                => "Department|Departments",
    "change_department_order"   => "Arraste as linhas para alterar a ordem em que os departamentos são mostrados aos usuários ao abrir um novo ticket.",
    "department_applicable"     => "Departamentos aplicáveis",
    "department_applicable_desc" => "Os departamentos em que a prioridade estará disponível para os usuários selecionarem. Aplica-se apenas ao front-end; todas as prioridades estarão disponíveis para os operadores de todos os departamentos.",

    "send_now"                  => "Enviar agora",

    "tag"                       => "Tag|Tags",

    "track_ticket"              => "Track Ticket",
    "view_ticket"               => "Ver ticket",

    // Recent activity
    "recent_activity"           => "Atividade recente",

    "ticket_number"             => "Ticket Number",
    "ticket_format"             => "Formato do número do ticket",

    // Departments
    "department_public_desc"    => "Se o departamento estiver visível para os usuários na central de suporte da web.",
    "department_parent_desc"    => "Se o departamento for um subdepartamento, selecione um pai. Os subdepartamentos destinam-se à escalação e gerenciamento internos, portanto, defini-lo removerá algumas das opções abaixo.",
    "department_priority"       => "Prioridades de Departamento",
    "department_priority_desc"  => "As prioridades que estarão disponíveis aos usuários ao abrir um ticket neste departamento, pelo menos uma precisa ser selecionada. Por padrão, todas as prioridades estarão disponíveis no departamento.",
    "department_no_format"      => "Opcional, configure apenas para substituir o formato padrão do número do ticket, deixe em branco caso contrário.",
    "department_operator"       => "Operadores de departamento",
    "department_default_assign" => "Padrão atribuído a",
    "dept_default_assign_desc"  => "Use-o se desejar que os tickets abertos neste departamento sejam atribuídos automaticamente a um ou mais operadores.",

    // Department emails
    "email_accounts_desc"       => "Configure endereços de email para o departamento, qualquer email recebido para esses endereços abrirá tickets nesse departamento. O primeiro endereço de email é usado como o endereço de email do remetente padrão para o email de saída.",
    "department_port"           => "Os valores padrão são: 110 para POP3, 995 para POP3 seguro, 143 para IMAP e 993 para IMAP seguro. Deixe em branco para usar o valor padrão.",
    "department_encryption"     => "Alguns provedores de email exigem criptografia SSL ou TLS para se conectar, se você não tiver certeza, deixe essa configuração como Nenhuma.",
    "department_delete_mail"    => "Se você estiver usando o IMAP, poderá optar por não excluir e-mails no servidor depois que eles forem importados como tickets.",
    "protocol"                  => "Protocolo",
    "server"                    => "Servidor de e-mail",
    "port"                      => "Port",
    "encryption"                => "Criptografia",
    "delete_downloaded"         => "Excluir email baixado",
    "consume_all"               => "Consume All Email",
    "email_download"            => "Baixar e-mail",
    "email_piping"              => "Email Piping",
    "email_piping_desc"         => "Configure um encaminhador de e-mail como o seguinte, o caminho do executável PHP pode ser diferente em seu servidor.",
    "remote_email_piping"       => "Piping de e-mail remoto",

    // Department email options
    "email_options"             => "Opções de Email",
    "email_user_on_email"       => "Usuários de e-mail em tickets abertos por e-mail",
    "email_user_on_email_desc"  => "Selecione se os usuários devem ser notificados por e-mail quando um e-mail que eles enviam resultar na abertura de um novo ticket.",
    "email_operators"           => "Notify Operators",
    "email_operators_desc"      => "Selecione se deseja encaminhar as respostas do operador para outros operadores. Por padrão, verifica a opção \"operadores de e-mail\" no painel do operador e enviará automaticamente um e-mail para respostas de e-mail dos operadores.",
    // Department email templates
    "new_ticket_opened"         => "Novo ticket aberto",
    "waiting_for_response"      => "Esperando pela Resposta",
    "ticket_auto_closed"        => "Ticket fechado automaticamente",
    "closed_by_operator"        => "Fechado pelo operador",

    // Feedback
    "feedback"                  => "Feedback",
    "feedback_form"             => "Formulário de feedback|Formulários de feedback",
    "feedback_form_desc"        => "Os formulários de feedback são processados na ordem em que aparecem. Arraste as linhas para reordenar e ajustar a prioridade dos formulários de feedback.",
    "view_feedback"             => "Ver feedback",
    "ticket_feedback"           => "Feedback sobre o ticket",
    "feedback_fields_error"     => "Ocorreu um problema ao obter os campos de feedback.",
    "time_after_resolved"       => "Tempo depois de resolvido",
    "time_after_resolved_desc"  => "O tempo após o qual um ticket é marcado como resolvido para que o formulário de feedback seja enviado ao usuário.",
    "expires_after"             => "Expira após",
    "expires_after_desc"        => "O tempo após o qual um formulário de feedback expirou não pode mais ser respondido. Embora recomendamos definir 7 dias, você pode inserir 0 em todos os campos para definir o tempo de expiração.",
    "form_conditions"           => "Condições do formulário",
    "form_conditions_desc"      => "Defina as condições do ticket para as quais os tickets resolvidos recentemente são verificados para ver se eles se enquadram neste formulário. Se um ticket resolvido cabe em vários formulários, ele será selecionado na prioridade do formulário, que pode ser modificada indo para a lista de formulários e reordenando.",
    "form_fields"               => "Campos do Formulário",
    "rating"                    => "Rating",
    "feedback_desc"             => "Obrigado por entrar em contato conosco e esperamos ter resolvido sua consulta. Por favor, você poderia classificar sua experiência abaixo.",
    "good_satisfied"            => "Bom, eu estou satisfeito",
    "bad_not_satisfied"         => "Mau, estou insatisfeito",
    "feedback_not_found"        => "Seu feedback não foi aceito, por favor, abra um ticket conosco se você deseja compartilhar seu feedback.",
    "feedback_malformed_token"  => "Não foi possível aceitar seu feedback devido a um token malformado. Por favor, abra um tíquete conosco se você deseja compartilhar seus comentários.",
    "feedback_expired"          => "O tíquete foi resolvido por um tempo e, infelizmente, não pode mais ser avaliado.",
    "feedback_questions"        => "Se você puder dispensar alguns minutos, responda às seguintes perguntas para nos ajudar a melhorar ainda mais o suporte que oferecemos.",
    "feedback_for_ticket"       => "Feedback para o ticket #:number",
    "feedback_rating_desc"      => "O suporte recebido neste ticket foi classificado como <strong>:rating</strong> pelo usuário.",

    // Custom fields
    "customfield"               => "Ticket Custom Field|Ticket Custom Fields",
    "customfield_order"         => "Arraste as linhas abaixo para mudar a ordem com que os campos customizados aparecem para os usuários.",

    // Canned responses
    "cannedresponse"            => "Canned Response|Canned Responses",

    // Filters
    "filter"                    => "Filter|Filters",
    "filter_condition"          => "Condições de Filtro",
    "filter_condition_desc"     => "Defina as condições para as quais os tickets são listados neste filtro.",

    // Macros
    "macro"                     => "Macro|Macros",
    "macro_condition"           => "Condições Macro",
    "macro_action"              => "Ações macro",
    "macro_action_desc"         => "Defina as ações que são executadas quando uma macro é executada. Certifique-se de que as ações são válidas para o departamento em que o tíquete se encontra, ou então elas serão ignoradas.",

    "from"                      => "From",
    "to"                        => "To",
    "cc"                        => "CC",

    "allowed_files"             => "Tipos de arquivos de anexos permitidos",

    // Drafts
    "also_viewing"              => "<strong>:name</strong> também visualizando ticket.",
    "draft_saved"               => "Draft saved at :time",
    "save_draft"                => "Save Draft",
    "discard_draft"             => "Descartar rascunho",

    // Locked
    "error_ticket_locked"       => "Este ticket foi bloqueado e não pode ser atualizado. Por favor, abra um novo ticket se ainda precisar de atendimento.",

    // Ticket Followups
    "follow_up"                 => "Follow Up",
    "follow_up_status_desc"     => "Defina o ticket com um status diferente até a data de acompanhamento.",
    "exact_date_time"           => "Data e hora exatas",
    "time_from_now"             => "Tempo a partir de agora",

    // Schedule
    "schedule"                  => "Schedule|Schedules",
    "business_hour"             => "Horário de Funcionamento",
    "business_hour_desc"        => "O Horário Comercial indica os horários em que o pessoal está disponível para responder a consultas para o horário. As horas são levadas em consideração ao calcular os horários de entrada e saída.",

    // Holidays
    "holiday"                   => "Holiday|Holidays",
    "holiday_or_on_the"         => "or, on the",
    "holiday_month_year_desc"   => "O ano é opcional se o feriado for recorrente. Selecione um ano apenas se o feriado acontecer nesta data em um ano específico.",

    // SLA Plans
    "sla_plan"                  => "Plano SLA|Planos SLA",
    "specific_schedule"         => "Horários Específicos",
    "calendar_hours_24"         => "Horário de Funcionamento (24 Horas)",
    "resolution_time"           => "Tempos de Resolução",
    "resolution_time_desc"      => "Defina os horários em que um tíquete deve ser respondido e resolvido por prioridade. O tempo será contado apenas durante o horário comercial com base na (s) programação (ões) escolhida (s), podem ser usados valores decimais.",
    "reply_within"              => "Responder dentro de",
    "resolve_within"            => "Resolver dentro",
    "plan"                      => "Plano",
    "sla_condition"             => "Condições do SLA",
    "sla_condition_desc"        => "Defina as condições do ticket para as quais os novos tíquetes são verificados para ver se eles se enquadram neste plano. Se um novo ticket se adequar a vários planos de SLA, ele será selecionado na prioridade do plano, que pode ser modificada indo para a lista de planos e reordenando.",
    "escalation_rule"           => "Regras de Escalonamento",
    "escalation_rule_desc"      => "Defina as ações a serem realizadas quando um tíquete de acordo com esse plano de SLA estiver próximo ou vencido. Certifique-se de que as regras sejam válidas para o departamento em que o tíquete se encontra, caso contrário, elas serão ignoradas.",
    "condition"                 => "Condição",
    "condition_group"           => "Grupo de condições",
    "all_groups"                => "TODOS os grupos devem ser verdadeiros",
    "any_group"                 => "QUALQUER grupo pode ser verdadeiro",
    "all_conditions"            => "TODAS as condições em grupo devem ser verdadeiras",
    "any_condition"             => "QUALQUER condição no grupo pode ser verdadeira",
    "sla_plan_desc"             => "Os planos de SLA são processados na ordem em que aparecem. Arraste as linhas para reordenar e ajustar a prioridade dos Planos de SLA.",

    // Reply options
    "reply_options"             => "Opções de Resposta",
    "send_email_to_users"       => "Enviar e-mail ao(s) usuário(s)",
    "send_email_to_operators"   => "Enviar e-mail ao(s) operador(es)",
    "back_to_grid"              => "Voltar à grade de tickets",
    "take"                      => "Tomar",
    "take_ownership"            => "Assumir a propriedade",
    "pause_duetime"             => "Pausar tempo de entrega",
    "add_to_canned_responses"   => "Adicionar às respostas prontas",
    "visible_to_all_operators"  => "Tornar visível para todos os operadores",
    "set_status"                => "Definir status",
    "add_selfservice_link"      => "Adicionar link de artigo",
    "search_selfservice"        => "Procurar por um artigo de auto-serviço",
    "search_canned"             => "Pesquise uma resposta predeterminada",

    "mark_resolved"             => "Marcar como resolvido",

    "ticket_signature"          => "Assinatura do ticket",

    "default_open_status"       => "Status aberto padrão",

    "default_resolve_status"    => "Status resolvido padrão",
    "default_resolve_status_desc" => "Selecione o status padrão usado para tickets que foram resolvidos.",

    "waiting_response_time"      => "Aguardando e-mail de resposta",
    "waiting_response_time_desc" => "O tempo após o qual os usuários recebem um e-mail sobre tickets inativos, perguntando se eles consideram o ticket resolvido. Defina como 0 para desativar este e-mail.",

    "close_inactive_tickets"    => "Fechar tickets inativos",
    "close_inactive_tickets_desc" => "O tempo após o qual os tickets inativos são fechados automaticamente, defina como 0 para nunca fechar os tickets automaticamente.",

    "ticket_reply_order"        => "Ordem de resposta do ticket",
    "ticket_reply_order_desc"   => "Selecione a ordem em que as mensagens do ticket são mostradas, ascendendo onde a última mensagem é a última ou descendente onde a última mensagem é a primeira.",

    "ticket_notes_position"     => "Posição das notas do ticket",
    "ticket_notes_position_desc" => "Selecione onde na visualização do ticket as notas do ticket são mostradas.",
    "ticket_notes_top_messages" => "No topo e nas mensagens",
    "ticket_notes_top"          => "Apenas no topo",
    "ticket_notes_messages"     => "Somente em mensagens",

    "captcha_desc"              => "Quando o captcha deve ser mostrado aos usuários que abrem novos tickets.",
    "unregistered_only"         => "Apenas usuários não registrados",

    "allow_unauth_users"        => "Permitir usuários não autenticados",
    "allow_unauth_users_desc"   => "Permita que os usuários que não estão logados visualizem e respondam aos tickets. Desativar isso também removerá o recurso de monitoramento de ticket e os usuários precisarão ser registrados e fazer login antes de poder acessar os tickets.",

    "default_department"        => "Departamento padrão",
    "default_department_desc"   => "O departamento padrão definido em todos os tickets recebidos por esse canal.",

    "show_related_articles"     => "Mostrar artigos relacionados",
    "show_related_articles_desc" => "Quando o usuário está digitando o assunto, podem ser exibidos artigos relacionados com base no que inseriu. Requer que o módulo de autoatendimento esteja habilitado e o MySQL 5.6+.",

    // Email Channel Settings
    "default_priority"          => "Prioridade padrão",
    "default_priority_desc"     => "A prioridade padrão definida em todos os tickets recebidos por esse canal.",
    "verbose_email_log"         => "Log de Email Verbose",

    "last_reply"                => "Última Resposta",
    "opened_at"                 => "Aberto em",

    "change_department"         => "Mudar departamento",
    "change_status"             => "Alterar status",
    "no_statuses"               => "Nenhum status encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "no_priorities"             => "Nenhuma prioridade encontrada. Clique <a href=':route'> aqui </a> para criar um.",
    "no_templates"              => "Nenhum modelo de e-mail personalizado encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "no_tags"                   => "Nenhuma etiqueta de ingresso encontrada. Clique <a href=':route'> aqui </a> para criar um.",
    "no_departments_found"      => "Nenhum departamento encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "no_operators_found"        => "Nenhum operador encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "change_priority"           => "Alterar Prioridade",
    "add_tag"                   => "Add tag",

    "unlock"                    => "Desbloquear",
    "merge"                     => "Mesclar",
    "merged"                    => "Mesclado",
    "unmerge"                   => "Desvincular",
    "close_and_lock"            => "Fechar e Bloquear",

    "mass_reply"                => "Resposta em massa",

    "due_today"                 => "Vencimento hoje",
    "overdue"                   => "Overdue",
    "unassigned"                => "Não atribuído",

    "pause_duetime_desc"        => "Se houver um plano de SLA ativo neste ticket, pause o tempo de vencimento restante até após a data de acompanhamento. O prazo de entrega só começará novamente depois que uma resposta ou observação for adicionada ao tíquete (inclusive do acompanhamento).",

    "add_cc"                    => "Add CC",
    "reply_above_line"          => "Por favor responda acima desta linha",

    "email_settings"            => "Configurações de e-mail",
    "web_settings"              => "Configurações da web",
    "split_selected_replies"    => "Dividir Respostas Selecionadas",

    "track_ticket_not_found"    => "Não foi possível encontrar o ticket com o número do tíquete e o endereço de e-mail do usuário inseridos.",

    "type_in_tags"              => "Digite as tags",

    /*
     * 2.0.1
     */
    "allowed_files_desc"        => "Uma lista de extensões de arquivo, separadas pelo caractere pipe |, que são permitidas como anexos. Por exemplo: txt|png|jpg. Para permitir todos os anexos, introduza: ?.*",

    /*
     * 2.0.2
     */
    "no_operator_groups"        => "Nenhum grupo de operadores encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "no_user_groups"            => "Nenhum grupo de usuários encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "remote_email_piping_desc"  => "Faça download do <a href='http://www.supportpal.com/manage/dl.php?type=d&id=8' target='_blank'> script de tubulação de e-mail remoto </a> e siga o <a href='https://docs.supportpal.com/current/Remote+Email+Piping' target='_blank'> documentação </a> sobre como configurá-lo em seu servidor de e-mail.",

    /*
     * 2.0.3
     */
    "department_consume_all"    => "Por padrão, o SupportPal tem suporte para alias de e-mail e verificará o endereço TO no e-mail recebido para ver em qual departamento o ticket deve ser aberto; um ticket não será aberto se um endereço de e-mail de departamento correspondente não puder ser encontrado. A ativação dessa configuração significa que todos os emails sem um endereço de email do departamento correspondente são importados como tickets neste departamento.",
    "default_reply_options"     => "Opções de resposta padrão",
    "default_reply_options_desc" => "Selecione as opções de resposta padrão a serem definidas ao abrir ou responder a um ticket. A opção ':reply_option' será marcada com base na configuração do departamento ':department_option'.",
    "associate_response_tag"    => "Associar resposta pronta a uma tag ...",
    "canned_response_tags_desc" => "Adicione tags que possam ajudar a encontrar uma resposta pronta ao responder a um ticket.",
    "append_ip_address"         => "Anexar endereço IP",
    "append_ip_address_desc"    => "Anexe o endereço IP dos usuários às suas mensagens quando eles estiverem abrindo e respondendo aos tickets do frontend.",
    "unassign_operator"         => "Unassign Operator",
    "remove_tag"                => "Remove Tag",
    "message_clipped"           => "[Mensagem cortada]",
    "view_entire_message"       => "Ver a mensagem inteira",
    "no_custom_fields"          => "Nenhum campo personalizado encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "follow_up_active"          => "Um <a class='view-followup' style='text-decoration: underline;'>follow up</a> está atualmente activo neste bilhete e irá decorrer <strong>:time</strong>.",
    "disable_user_email_replies" => "Desativar respostas de e-mail do usuário",

    /*
     * 2.1.0
     */
    "default_ticket_filter"     => "Filtro de ticket padrão",
    "default_ticket_filter_desc" => "O filtro de ticket usado por padrão ao clicar no link 'Gerenciar tickets'. Pode ser definido como 'Nenhum', a opção padrão, que mostrará todos os tickets não resolvidos.",
    "recent_filters"            => "Filtros Recentes",
    "inactive_tickets"          => "Tickets Inativos",
    "default_open_status_desc"  => "Selecione o status padrão que deve ser definido automaticamente quando um usuário abre um novo ticket ou responde a um ticket sem uma resposta do operador ainda.",
    "default_reply_status"      => "Status de resposta padrão",
    "default_reply_status_desc" => "Selecione o status padrão que deve ser definido automaticamente quando um usuário responder a um ticket, somente se aplica depois que um operador responder ao ticket.",
    "ticket_reply_order_default" => "O padrão do sistema usará o valor atualmente selecionado nas configurações gerais do tíquete.",
    "select_a_parent"           => "Selecione um departamento principal ...",
    "select_a_department"       => "Selecione um departamento ...",
    "department_operator_desc"  => "Você também pode atribuir operadores individuais ao departamento. Esses operadores serão além de quaisquer grupos atribuídos acima.",
    "department_group"          => "Grupos de Departamento",
    "department_group_desc"     => "Você pode atribuir grupos inteiros de operadores ao departamento, recomendados se a sua lista de operadores for grande e / ou mudar frequentemente.",
    "ticket_other_brands"       => "Tickets em outras marcas",
    "add_for_department"        => "Adicionar para o departamento...",
    "record_order"              => "Arraste as linhas para alterar a ordem dos registros.",
    "reply_all"                 => "Responder a todos",
    "reply_without_cc"          => "Responder (sem CC)",
    "email_accounts"            => "Contas de e-mail",
    "add_another_email"         => "Adicionar outro endereço de email",
    "follow_up_date"            => "Data do Follow Up",
    "post_reply"                => "Responder",
    "post_note"                 => "Postar nota",
    "ticket_details"            => "Detalhes do ticket",
    "organisation_tickets"      => "Tickets de Organização",
    "manage_tickets"            => "Gerenciar Tickets",
    "via_channel"               => "via :channel",
    "department_parent"         => "Departamento Pai",
    "department_brands"         => "Marcas de departamento",
    "email_item"                => "Email :item",
    "from_name"                 => "Nome do remetente",
    "from_address"              => "A partir do endereço",

    /*
     * 2.1.1
     */
    "edited_message"            => ":user às :date",
    "prioritise_reply-to"       => "Priorizar Responder a",
    "prioritise_reply-to_desc"  => "Toggle to prioritise the Reply-To header over the From header. If enabled, tickets opened via email will be opened on behalf of the Reply-To name and address.",
    "note_options"              => "Opções de notas",
    "escalation_rules_desc"     => "As regras de escalonamento do plano de SLA abaixo estão programadas para execução após os horários listados. Esses horários podem mudar ou as regras podem ser removidas se um operador responder a este tíquete.",

    /*
     * 2.1.2
     */
    "not_registered_user"       => "Não é um usuário registrado. As configurações do canal de email são definidas para importar apenas emails de usuários registrados.",
    "display_name"              => "Nome de exibição do email",
    "display_name_desc"         => "Opcional, defina apenas para substituir o nome de exibição usado em e-mails enviados deste departamento, caso contrário, deixe em branco.",
    "display_name_options"      => "As seguintes variáveis Twig podem ser usadas: <br > {{brand.name}} - Nome da marca <br /> {{department.name}} - Nome do departamento <br /> {{department.frontend_name}} - Mostra o pai nome do departamento, se o ticket pertencer a um subdepartamento. <br /> {{operator.formatted_name}} - Nome do operador <br /> <em> O nome do operador nem sempre estará disponível, então envolva-o em um condicional 'não vazio', ou seja, {% if operator is not empty% } {{operator.formatted_name}} {% endif%} </em>",
    "attachment_rejected"       => "Anexo rejeitado",
    "enable_subaddresses"       => "Habilitar sub-endereços",
    "enable_subaddresses_desc"  => "Alterne para habilitar o subendereço de e-mail para todos os departamentos. Isso criará um subendereço exclusivo para cada tíquete definido como o endereço Responder a em todos os e-mails de saída. Seu servidor de e-mail deve ser capaz de lidar com o sub-endereçamento; etapas adicionais podem ser necessárias se você estiver usando o encanamento de e-mail para garantir que os e-mails para esses endereços sejam encaminhados corretamente. Habilitar isso permitirá que você remova o número do tíquete do assunto dos modelos de e-mail.",
    "email_replies_disabled"    => "Respostas de e-mail desativadas",
    "disable_user_email_replies_desc" => "Ative para bloquear respostas de email de usuários e também remover a linha de recorte de resposta de emails de tíquetes de saída. Por padrão, o e-mail será ignorado silenciosamente, mas você pode definir um e-mail a ser enviado ao usuário alterando o modelo de e-mail selecionado para a opção 'Respostas de e-mail desativadas' abaixo.",
    "bcc"                       => "BCC",
    "assigned_to_ticket"        => "Atribuído ao ticket",
    "user_ticket_reply"         => "Resposta do ticket do usuário",
    "new_internal_ticket"       => "Novo ticket interno",
    "department_changed"        => "Departamento alterado",
    "operator_ticket_reply"     => "Resposta ao ticket do operador",
    "new_ticket_note"           => "Nova Nota de ticket",
    "email_template_desc"       => "Você pode selecionar um modelo de e-mail diferente do padrão para ser enviado ao usuário ou operadores para qualquer uma das ações abaixo. Este modelo se tornará o padrão apenas para este departamento.",
    "create_new_user"           => "Criar novo usuário",
    "user_reply_internal_ticket" => "Não é um operador. Apenas os operadores podem responder a tickets internos.",
    "enter_email_address"       => "Insira o endereço de e-mail...",
    "email_user_frontend"       => "Usuários de e-mail em tickets abertos no front-end",
    "email_user_frontend_desc"  => "Selecione se os usuários devem ser notificados por e-mail quando eles abrirem um ticket no front-end.",
    "department_template_disabled" => "O modelo de email do departamento relevante está desativado, portanto, este email não pode ser enviado.",
    "verbose_email_log_desc"    => "Se a coleta de e-mail tiver que ser registrada em arquivo, é recomendável mantê-la desativada, a menos que instruído pelo suporte para depuração. Cinco dias de registros são armazenados, os arquivos de registro mais antigos serão eliminados automaticamente pelo sistema.",

    /*
     * 2.2.0
     */
    "user_ticket_existing_desc" => "Abra um novo ticket em nome de um usuário existente.",
    "canned_response_tag"       => "Tag de resposta pronta|Tags de respostas prontas",
    "response"                  => "Resposta|Respostas",
    "response_desc"             => "A resposta automática pode ser escrita em vários idiomas. A resposta apropriada será usada automaticamente com base na preferência de idioma do usuário.",
    "no_slaplans"               => "Nenhum plano SLA encontrado. Clique <a href=':route'> aqui </a> para criar um.",
    "filter_performance"        => "Considerações e recomendações de desempenho",
    "filter_performance_desc"   => "<li> Filtros que correspondem a mais tickets serão mais lentos; na maioria dos casos, tentam excluir tickets resolvidos. </li> <li> Filtros usando condições 'não é' geralmente serão mais lentos do que usando condições 'é'. </li> <li> verificação de filtros para valores NULL (por exemplo, a tag do ticket é nenhum) será mais lenta. </li> <li> Evite várias condições que envolvam a verificação de strings / palavras, pois elas apresentam mais complexidade. </li> <li> Filtros que usam as condições 'começa com' ou 'contém' geralmente são mais lentos do que as condições 'igual' ou 'termina com'. </li> <li> Tickets resolvidos são excluídos das contagens mostradas na barra lateral. </li>",
    "run_macro"                 => "Executar Macro",
    "run_macro_desc"            => "<strong>:macro</strong><br /><em>:description</em>",

    /*
     * 2.3.0
     */
    "registered_users_desc"     => "Toggle to only show the department to logged in users and only accept emails from users actively registered in the help desk. If enabled, a bounce back email will be sent to unregistered users who email this department, to change or disable the email please see the 'Registered Users Only' template option below.",
    "form_fields_desc"          => "Se desejar coletar informações adicionais quando o usuário fornecer seus comentários, você pode configurar campos personalizados para serem exibidos no formulário aqui. O tipo de campo será bloqueado assim que o formulário for preenchido por um usuário.",
    "feedback_ratings"          => "Classificações de satisfação do cliente (afetando sua pontuação de satisfação do cliente)",
    "email_and_other_accounts"  => "E-mail e outras contas de canal",
    "delete_message"            => "Apagar mensagem",
    "linked_tickets"            => "Tickets vinculados",
    "add_linked_ticket"         => "Adicionar ticket vinculado",
    "create_linked_ticket"      => "Criar ticket vinculado",
    "copy_link"                 => "Copiar link",
    "forward_message"           => "Encaminhar esta mensagem",
    "forward_from_here"         => "Encaminhar ticket a partir daqui",
    "forward"                   => "Encaminhar",
    "forward_options"           => "Opções de encaminhamento",
    "forwarded_to"              => "Encaminhado para",
    "new_operator_reply"        => "Nova resposta do operador",
    "new_user_reply"            => "Resposta de novo usuário",
    "add_bcc"                   => "Adicionar BCC",
    "at_least_one_recipient"    => "Por favor, especifique pelo menos um destinatário.",
    "forwarded_message"         => "---------- mensagem encaminhada ----------",

    /*
     * 2.3.1
     */
    "inactive_ticket_note"      => "Nota: afeta apenas os tickets pertencentes a um status com 'Fechar tickets inativos' habilitado.",
    "close_inactive_status_desc" => "Alterne para ativar / desativar o fechamento automático de tickets inativos e lembretes por email de inatividade (modelos 'Aguardando resposta' e 'Ticket fechado automaticamente'). Se ativado, o tempo antes do envio dos lembretes pode ser configurado através das configurações gerais do ticket.",
    "from_header_missing"       => "De: cabeçalho ausente no e-mail.",
    "move_ticket"               => "Mover Ticket",
    "move_ticket_step1"         => "Etapa 1: Escolha uma nova marca para a qual mover o tíquete",
    "move_ticket_step2"         => "Etapa 2: escolha um departamento da nova marca",
    "current_record"            => "Atual :record",
    "new_record"                => "Novo :record",
    "department_email"          => "Department Email",
    "select_a_department_email" => "Selecione um e-mail de departamento ...",
    "record_public_desc"        => "Alterne para que o :record seja acessível apenas por si mesmo.",
    "record_group_desc"         => "Se você deseja tornar o: registro visível apenas para determinados grupos de operadores. Deixe em branco para tornar visível a todos os operadores.",
    "ticket_format_desc"        => "Pode conter caracteres alfanuméricos e caracteres especiais <code> -_. +! *, </code> <br /> As seguintes variáveis também podem ser usadas:% S para um número seqüencial | % N para um número aleatório | % L para uma letra aleatória <br /> Use {number} para repetir <strong> apenas </strong> após% N ou% L, por exemplo,% N {4} equivale a 4 números aleatórios,% L {3} equivale a 3 letras aleatórias <br /> Os seguintes <a href='http://php.net/manual/en/function.date.php' target='_blank'> PHP Date </a> Parâmetros prefixados com% Y, y, m, d, j, g, G, h, H, i, s",

    /*
     * 2.4.0
     */
    "macro_enabled_desc"        => "Alterne para desativar a macro e evitar que seja executada automaticamente ou exibida na interface do ticket.",
    "macro_order_drag"          => "Arraste as linhas para alterar a ordem das macros.",
    "macro_order_processed"     => "Macros :type de tipo são processadas na ordem em que aparecem.",
    "macro_type"                => "Tipo de Macro",
    "macro_type_desc"           => "Existem três tipos de macros disponíveis. As macros manuais podem ser executadas apenas na exibição ou grade do ticket, as macros automáticas são executadas em tickets não resolvidos a cada hora e as macros hook são executadas em eventos de ticket especificados. As macros automáticas e de gancho também podem ser definidas para serem executadas apenas dentro de agendamentos específicos. Qualquer ação de macro de gancho não acionará outras macros de gancho para evitar o risco de loops.",
    "macro_run_at_most"         => "Executar no máximo",
    "macro_run_times"           => "vezes", // As in '5 times'
    "macro_run_at_most_desc"    => "Limite quantas vezes uma macro automática pode ser executada em um único ticket, deixe em branco para que seja executada um número ilimitado de vezes.",
    "macro_events_desc"         => "Selecione um ou mais eventos nos quais a macro deve ser executada. As condições definidas abaixo serão verificadas antes da macro ser executada.",
    "macro_schedules_desc"      => "Por padrão, a macro funcionará 24 horas por dia, 7 dias por semana, mas você pode selecionar um ou mais horários do help desk para que a macro só esteja ativa durante esses horários.",
    "macro_condition_desc"      => "Defina as condições para as quais os tickets para esta macro estarão disponíveis. Por padrão, sem condições, será aplicado a todos os tickets. Pelo menos uma condição deve ser definida para macros automáticas.",
    "add_remove_headers"        => "Adicionar / remover cabeçalhos",
    "webhook_merge_fields"      => "Os campos de mesclagem podem ser usados no campo URL e conteúdo, <a href=\"https://docs.supportpal.com/current/Merge+Fields\"> saiba mais </a> .",
    "webhook_ticket_required"   => "Um ticket deve existir para que essa funcionalidade funcione.",
    "not_permitted"             => "Sorry, you're not permitted to view the requested ticket(s). If you think this has been shown in error, please contact your administrator.",
    "watch"                     => "Monitorar",
    "unwatch"                   => "Deixar de monitorar",
    "watching"                  => "Monitorando",
    "internal_ticket"           => "Internal Ticket|Internal Tickets",

    /*
     * 2.4.1
     */
    "downloading"               => "Baixando...",
    "downloading_desc"          => "Se o download não iniciar automaticamente em alguns segundos, <a href=':href'> clique aqui </a> para acessar o URL de download diretamente.",

    /*
     * 2.5.0
     */
    "belonging_to"              => "(Pertence a :name)",
    "block_user"                => "Block User",
    "merge_tickets"             => "Mesclar tickets",

    /*
     * 2.6.0
     */
    "follow_ups"                => "Follow Ups",
    "follow_up_multiple_active" => "Vários <a class='view-followup' style='text-decoration: underline;'>follow ups</a> estão ativos no momento neste ticket e a próxima execução será <strong>:time</strong> .",
    "follow_up_no_actions"      => "O acompanhamento não tem ações definidas. Confirme se você deseja continuar.",
    "status_after_running"      => "Status após execução",
    "older_messages"            => ":count mensagens antigas",
    "holiday_single_day"        => "Único dia",
    "holiday_date_range"        => "Período específico",

    /*
     * 3.0.0
     */
    "merge_tickets_into"        => "Selecionar ticket para mesclar",
    "search_number_or_subject"  => "Pesquise por número de ticket ou assunto",
    "im_not_sure"               => "Não tenho certeza",
    "auto_reply_detected"       => "Resposta automática detectada - nenhuma notificação será enviada ao (s) usuário (s).",
    "cc_desc"                   => "Você pode enviar CC para outras pessoas a esse ticket digitando endereços de email aqui.",

    /*
     * 3.2.0
     */
    "drafting_message"          => "<strong>:name</strong> was drafting a message",

    /*
     * 3.3.0
     */
    "email_setup_manually"      => "Set Up Manually",
    "unresolved"                => "Unresolved",
    "resolved"                  => "Resolved",
    "manage_oauth_options"      => "To add or manage OAuth options, please visit the <a href=\":route\">Third-Party Integrations</a> page.",

    /*
     * 3.4.0
     */
    "feedback_saved"            => "We've saved your feedback.",
    "how_was_the_help"          => "How was the help you received?",
    "update_feedback"           => "Update Feedback",
    "verify_user"               => "Please verify the authenticity of the user.",
    "web_channel_name"          => "Web",
    "web_channel_desc"          => "Tickets opened through the frontend interface for users or operator panel for operators.",
    "email_channel_name"        => "Email",
    "email_channel_desc"        => "Tickets opened from processing incoming email.",
    "api_channel_name"          => "API",
    "api_channel_desc"          => "Tickets and replies posted through the API.",

    /*
     * 4.0.0
     */
    "on_behalf_of"              => "Created on behalf of",
    "reply_canned_be_posted"    => "It is not currently possible to reply to this ticket; the channel or channel account may be disabled.",

);
