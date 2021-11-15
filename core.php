<?php

return array(

    // SupportPal
    "product_name"              => "SupportPal",
    "operator_panel"            => "Painel do operador",
    "welcome"                   => "Bem-vindo à Central de Atendimento",
    "welcome_desc"              => "Você tomou uma boa decisão. Clique para começar um tour rápido das nossas configurações e recursos.",

    // Dashboard
    "submit_ticket"             => "Enviar ticket",
    "submit_ticket_desc"        => "Use este formulário para enviar um ticket para nossa equipe.",
    "track_ticket"              => "Rastrear um ticket",
    "track_ticket_desc"         => "Não está registrado? Use seu endereço de e-mail e número do ticket para rastrear o status do seu ticket.",
    "my_tickets"                => "Meus Tickets",
    "my_tickets_desc"           => "Monitore seus tickets. Você pode achar seus ticket ativos e os já finalizados aqui.",
    "no_modules"                => "Nenhum módulo está habilitado.",
    "search_results"            => "Resultados da busca",
    "found_results"             => "Encontrado :total de registos para termo de pesquisa",

    // Maintenance
    "maintenance"               => "Estamos atualmente realizando uma manutenção.",
    "maintenance_desc"          => "Nosso atendimento está temporariamente indisponível enquanto realizamos uma manutenção. Agradecemos a sua compreensão enquanto realizamos estas mudanças. Voltaremos em breve.",
    "maintenance_active"        => "O modo de manutenção está ativo",

    // About
    "license_status"            => "Status da licença",
    "license_code"              => "Código da licença",
    "change_license"            => "Alterar licença",
    "license_info"              => "Informações da licença",
    "license_owner"             => "Proprietário da licença",
    "license_created"           => "Licença criada",
    "license_type"              => "Tipo de licença",
    "branding"                  => "Marca",
    "license_expires"           => "Expiração da licença",
    "license_valid_ip"          => "IP(s) válidos",
    "support_status"            => "Status do suporte",
    "support_expires"           => "Expiração do suporte",
    "version_info"              => "Informações da versão",
    "installed_version"         => "Versão instalada",
    "available_version"         => "Versão disponível",
    "monthly_product"           => "* Sua data de expiração irá automaticamente se ajustar mensalmente conforme as faturas forem pagas.",

    // API Tokens
    "api_token"                 => "Token de API|Tokens de API",
    "token"                     => "Token",
    "regenerate_token"          => "Gerar novo token",
    "access_level"              => "Nível de acesso",
    "read_write"                => "Leitura e escrita",
    "read_only"                 => "Apenas leitura",

    // Spam Rules & Filtering
    "spam_rule"                 => "Regra de spam|Regras de spam",
    "containing_text"           => "Contendo o texto",
    "filter_new_message"        => "Nova mensagem de ticket (do usuário)",
    "filter_new_comment"        => "Novo comentário em artigo (do usuário)",
    "filter_user_login"         => "Login do usuário",
    "filter_operator_login"     => "Login do operator",
    "filter_api_access"         => "Acesso da API",
    "content"                   => "Conteúdo",
    "sender"                    => "Remetente",
    "content_sender"            => "Conteúdo e Remetente",

    // Company
    "company"                   => "Empresa|Empresas",

    // Email
    "default_email_addr"        => "Endereço de e-mail padrão",
    "default_email_addr_desc"   => "O e-mail que será usado no campo de remetente na maioria de emails enviados pelo sistema.",
    "include_operator_name"     => "Incluir o nome do operador",
    "include_operator_name_desc" => "Inclua o nome do operador no campo \"De\" do email para receber emails de resposta de ticket. Por exemplo: De: Joe Bloggs (Suporte da sua empresa)",
    "include_dept_name"         => "Incluir nome do departamento",
    "include_dept_name_desc"    => "Inclua o nome do departamento no campo 'De' de qualquer e-mail relacionado ao ticket. Observe que isso normalmente criará um novo segmento de email se um determinado ticket alterar os departamentos.",
    "global_email_header"       => "Cabeçalho global do email",
    "global_email_header_desc"  => "Adiciona um cabeçalho a todos os emails enviados pelo sistema. HTML é aceito.",
    "global_email_footer"       => "Rodapé Global de E-mail",
    "global_email_footer_desc"  => "Adiciona um rodapé a todos os emails enviados pelo sistema. HTML é aceito.",
    "email_template"            => "Template de email|Templates de email",
    "email_log"                 => "Log de Email",
    "email_queue"               => "Fila de Email",
    "email_queue_desc"          => "Abaixo estão os e-mails enfileirados para serem enviados em breve pelo cron.",
    "email_method"              => "Método do e-mail",
    "php_mail_function"         => "PHP mail()",
    "smtp"                      => "SMTP",
    "smtp_host"                 => "Host do SMTP",
    "smtp_port"                 => "Porta do SMTP",
    "smtp_encryption"           => "Criptografia do SMTP ",
    "smtp_requires_auth"        => "Requer autenticação",
    "smtp_username"             => "Nome do usuário SMTP",
    "smtp_password"             => "Senha do usuário SMTP",
    "ssl"                       => "SSL",
    "tls"                       => "TLS",
    "email_content"             => "Conteúdo do e-mail",
    "email_content_desc"        => "Digite um assunto e conteúdo de email padrão para este template. Você também pode escrever em outros idiomas. Se o template não estiver em outro idioma, ele usará as configurações padrão.",
    "outgoing"                  => "Saída",
    "incoming"                  => "Entrada",
    "incoming_spam"             => "Entrada (Rejeitados - Spam)",
    "incoming_throttled"        => "Entrada (Rejeitados - Throttled)",
    "email_subject"             => "Assunto do email",
    "twig_html_warning"         => "O Twig não é permitido dentro de tags / atributos HTML e será removido automaticamente ao salvar.",

    // Modules
    "modules"                   => "Módulo|Módulos",
    "modules_desc"              => "Abaixo está uma lista de todos os módulos disponíveis, clique no ícone de edição para atualizar as configurações desse módulo.",
    "module_disable"            => "Os módulos desativados serão removidos do frontend e da interface do operador.",

    // Scheduled tasks
    "scheduled_task"            => "Tarefa Agendada|Tarefas Agendadas",
    "interval_desc"             => "Defina com que frequência essa tarefa é executada, por exemplo, definir 5 minutos significa que a tarefa será executada a cada 5 minutos se o cron estiver ativo e em execução.",
    "cron_settings"             => "Configurações do Cron",
    "cron_running"              => "Em execução",
    "cron_not_running"          => "Não está em execução",
    "task_ran"                  => "Tarefa agendada executada com êxito manualmente.",
    "task_failed"               => "Falha ao tentar executar a tarefa agendada manualmente.",

    // Plugins
    "plugins"                   => "Plugin|Plugins",
    "installed_plugins"         => "Plugins instalados",
    "visit_plugin"              => "Visite o site do Plugin",

    // Messages
    "last_activity"             => "Última atividade",
    "send_to"                   => "Enviar para",
    "inbox"                     => "Caixa de entrada",
    "compose"                   => "Compose",

    // Utilities
    "utilities"                 => "Utilitários",

    // System Cleanup
    "system_cleanup"            => "Limpeza do sistema",
    "system_cleanup_desc"       => "Use as opções disponíveis para remover dados que podem não ser mais necessários ou desejados.",
    "files"                     => "Arquivos",
    "files_desc"                => "Os seguintes itens são armazenados como arquivos no sistema de arquivos.",
    "logs"                      => "Logs",
    "logs_desc"                 => "Os seguintes itens são armazenados como registros no banco de dados.",
    "empty"                     => "Vazio",
    "prune"                     => "Excluir",
    "total_records"             => "Total de registros",
    "system_cache"              => "Cache do sistema",
    "system_cache_desc"         => "Usado para armazenar dados do sistema que não são alterados regularmente para acelerar o aplicativo.",
    "template_cache"            => "Cache de modelo",
    "template_cache_desc"       => "Versões pré-compiladas das vistas do modelo são armazenados para melhorar o tempo de carga.",
    "attachments_desc"          => "Os anexos de ticket são armazenados no sistema de arquivos, mas podem ocupar espaço; você pode remover os arquivos de anexo antes de uma determinada data.",
    "system_activity_log_desc"  => "Armazena todas as atividades dos usuários, operadores e do próprio sistema, você pode remover registros antes de uma determinada data.",
    "email_log_desc"            => "Armazena todos os e-mails recebidos e enviados, você pode remover registros antes de uma certa data.",
    "operator_login_log_desc"   => "Armazena cada vez que um operador faz login, você pode remover registros antes de uma determinada data.",

    // Captcha
    "captcha"                   => "Captcha",
    "show_captcha"              => "Mostrar Captcha",

    // Widgets
    "dashboard"                 => "Painel de controle",
    "add_remove_widget"         => "Adicionar / remover widgets",
    "enable_tour"               => "Habilitar O Tour Do Produto",

    // Product Tour
    "dashboard_desc"            => "Seu próprio painel pessoal. Os widgets podem ser removidos, minimizados e movidos!",
    "private_messages"          => "Mensagens privadas",
    "messages_desc"             => "As mensagens privadas servem como uma maneira útil para conversas 1: 1 com outros operadores de suporte técnico.",
    "configure"                 => "Configure Your Help Desk",
    "configure_desc"            => "SupportPal contém uma série de configurações que lhe permitem configurar o help desk de acordo com a sua própria preferência.",
    "default_email"             => "Endereço de e-mail padrão",
    "default_email_desc"        => "O endereço de e-mail padrão a ser usado para toda a correspondência enviada aos usuários.",
    "dept_settings_desc"        => "Percebemos que os departamentos da sua organização operam de maneira diferente. As configurações de departamento permitem substituir as configurações globais.",
    "department_desc"           => "Os departamentos são iguais aos da sua organização. Útil para garantir que as consultas dos clientes cheguem rapidamente ao (s) funcionário (s) correto (s).",
    "department_email"          => "Endereços de e-mail do departamento",
    "dept_email_desc"           => "Vários endereços de email podem ser atribuídos a um determinado departamento. A coleta de emails é realizada nos endereços configurados para receber emails de seus clientes no suporte técnico.",
    "dept_tmpl"                 => "Modelos de e-mail do departamento",
    "dept_tmpl_desc"            => "Às vezes, você pode alterar ou desativar completamente os modelos de email do departamento. Você pode definir modelos de email específicos do departamento e habilitá-los aqui.",
    "schedule_task_desc"        => "As tarefas agendadas são usadas para automatizar vários processos no SupportPal, incluindo a coleta de tickets com base em email.",
    "schedule_task_2"           => "Tarefas agendadas exigem que um trabalho cron seja criado para operar. O intervalo para cada tarefa executada pela tarefa cron pode ser ajustado através do formulário de edição.",
    "schedule_task_cron"        => "Cron Job",
    "schedule_task_3"           => "Crie um trabalho cron semelhante ao exemplo fornecido abaixo em seu servidor para que as tarefas agendadas sejam executadas automaticamente.",
    "ticket_channel_desc"       => "Canais de ticket são métodos para criar tickets. Eles podem ser facilmente estendidos para incluir seus próprios canais, por exemplo, ingressos abertos via Instagram.",
    "ticket_channel_2"          => "Fornecemos uma série de canais padrão. Você pode querer ativar e configurar os canais do Facebook e Twitter para coletar bilhetes gerados através das mídias sociais.",
    "user_desc"                 => "Os usuários que interagem com seu sistema são exibidos aqui. Você pode adicionar, editar e excluir usuários, conforme apropriado.",
    "organisation_desc"         => "Os usuários podem ser atribuídos a organizações, permitindo o acesso a tickets abertos por outros usuários em sua organização.",
    "operator_desc"             => "Outros membros da equipe podem ser adicionados como operadores aqui, juntamente com o gerenciamento de quais departamentos eles estão designados.",
    "ticket_desc"               => "A grade de tickets contém uma coleção de todos os tickets relevantes para você.",
    "ticket_toolbar"            => "Barra de ferramentas",
    "ticket_desc3"              => "Ações em massa podem ser executadas em tickets usando a barra de ferramentas do ticket.",
    "tour_complete"             => "Tour Completo!",
    "tour_complete_desc"        => "Obrigado por usar o SupportPal. <br /> <br /> Agora, recomendamos que você siga o guia de introdução abaixo para configurar seu suporte técnico.",

    // IP Ban
    "ip_ban_time_desc"          => "Se a proibição é permanente ou temporária.",
    "expiry"                    => "Validade",
    "expired"                   => "Expirado",
    "expiry_time"               => "Tempo de validade",
    "expiry_time_desc"          => "A hora em que a proibição expirará, se uma data não estiver definida ou no passado, ela será automaticamente definida para 24 horas a partir de agora.",
    "permanent"                 => "Permanente",

    // Languages
    "no_enabled_languages"      => "Falha ao tentar atualizar :item. Pelo menos um idioma deve estar ativado o tempo todo.",

    // General Settings
    "locale"                    => "Localização",
    "simpleauth"                => "SimpleAuth",
    "admin_folder"              => "Pasta do Admin",
    "admin_folder_desc"         => "Defina o nome da pasta para o painel do operador. Recomenda-se alterar o nome padrão \"admin\" do ponto de vista da segurança.",
    "enable_ssl"                => "Habilitar SSL",
    "maintenance_mode"          => "Modo de manutenção",
    "maintenance_mode_desc"     => "Desativa a funcionalidade pública do suporte técnico e mostra um aviso de manutenção. Edite resources / templates / frontend / [template] /core/maintenance.twig para alterar a mensagem que é mostrada aos usuários.",
    "default_user_country"      => "País de usuário padrão",
    "default_user_country_desc" => "O país que será selecionado por padrão quando os usuários estiverem se registrando.",
    "system_timezone"           => "Fuso horário do sistema",
    "system_timezone_desc"      => "O fuso horário padrão aplicado em todo o sistema. Os operadores podem alterar o fuso horário em suas configurações pessoais.",
    "date_format"               => "Formato de data",
    "date_format_desc"          => "O formato da data que é usado globalmente.",
    "time_format"               => "Formato da data",
    "time_format_desc"          => "O formato da hora usado globalmente.",
    "simpleauth_key"            => "SimpleAuth Key",
    "simpleauth_key_desc"       => "A chave para a opção de logon único, no mínimo 16 caracteres.",
    "simpleauth_operators"      => "Permitir aos Operadores",
    "base_url"                  => "URL do sistema",
    "base_url_desc"             => "Digite o endereço da Web completo da sua instalação, usado para gerar os URLs enviados aos usuários.",
    "debug"                     => "Debug",
    "debug_mode"                => "Modo de depuração",
    "pretty_urls"               => "URLs amigáveis",
    "pretty_urls_desc"          => "A ativação removerá o index.php dos URLs, somente será possível se você puder acessar o painel do operador sem o index.php. Desative se você não tiver o mod_rewrite instalado, os arquivos .htaccess não são permitidos ou não converteram as regras de reescrita do Apache .htaccess para trabalhar com seu servidor da Web alternativo.",

    /*
     * 2.0.2
     */
    "widget"                    => "Widget|Widgets",

    /*
     * 2.0.3
     */
    "enable_ssl_desc"           => "A habilitação forçará toda a área frontal e do operador a usar conexões seguras, uma configuração recomendada. Certifique-se de que o HTTPS funciona correctamente no seu servidor antes de o activar.",
    "unexpected_template_error" => "Ocorreu um erro inesperado ao verificar a sintaxe do modelo. Por favor, tente novamente.",
    "empty_template_preview"    => "Forneça um modelo válido para usar a função de visualização.",
    "no_department_address"     => "Falha ao encontrar um endereço de departamento na lista de destinatários.",
    "email_loop_detected"       => "Loop detectado - email enviado de um endereço de departamento.",
    "email_ticket_locked"       => "Ticket bloqueado. O usuário foi solicitado a abrir um novo ticket por e-mail.",
    "email_no_body"             => "Falha ao identificar o corpo da mensagem de email.",
    "email_runtime_error"       => "Ocorreu um erro de tempo de execução ao criar o ticket / resposta.",
    "email_reply_disabled"      => "As respostas de e-mail do usuário foram desativadas para este departamento.",
    "email_throttled"           => "Muitos e-mails recebidos do usuário. O limite é :max_requests e-mails a cada :decay_time minutos.",

    /*
     * 2.1.0
     */
    "generalsetting_desc"       => "Edite as configurações que se aplicam a todo o SupportPal. Se você deseja editar as configurações de uma seção específica, por exemplo, tickets, abra a seção na barra lateral para visualizar as configurações disponíveis para esse módulo. As configurações relacionadas às suas marcas podem ser encontradas clicando em Marcas na barra lateral.",
    "brand"                     => "Marca|Marcas",
    "brand_desc"                => "Uma marca é a sua identidade voltada para o cliente dentro do SupportPal, permitindo vários canais de comunicação. Várias marcas podem ser operadas sem problemas sob um único painel de operador unificado.",
    "default_brand"             => "Marca padrão",
    "default_brand_desc"        => "Selecione a marca que será usada por padrão quando os visitantes visitarem o frontend e uma marca correspondente não puder ser encontrada.",
    "brand_enabled_desc"        => "Alterne para ativar ou desativar a marca. Marcas desativadas não podem ser utilizadas e não contam como parte das marcas permitidas em sua licença. A desativação pode ser usada para ocultar temporariamente uma marca e / ou reter informações. A exclusão de uma marca removerá todas as informações, incluindo usuários e tickets relacionados a ela.",
    "inherit_global_setting"    => "Herdar configuração global",
    "brand_date_format_desc"    => "O formato da data usado para o frontend desta marca.",
    "brand_time_format_desc"    => "O formato de hora usado para o frontend desta marca.",
    "brand_timezone"            => "Fuso horário da marca",
    "brand_timezone_desc"       => "O fuso horário que é usado por padrão no frontend desta marca, os usuários terão a opção de selecionar o seu próprio fuso horário.",
    "brand_default_lang_desc"   => "A linguagem que é usada por padrão no frontend desta marca.",
    "brand_lang_toggle_desc"    => "Se o dropdown de idiomas deve aparecer no frontend desta marca.",
    "brand_groups_desc"         => "Os operadores nos grupos selecionados poderão criar, atualizar e excluir (dependendo das permissões da função) tickets e outros conteúdos desta marca.",
    "select_brand"              => "Selecione uma marca ...",
    "add_another_language"      => "Adicionar outro idioma ...",
    "mass_email_brand_desc"     => "Selecione de qual marca o email será enviado. Será usado para definir o envio do nome e endereço, carregar o modelo de email correto e nos campos de mesclagem. Se você enviar para um grupo de usuários, somente usuários que pertencem à marca selecionada serão enviados por email.",
    "brand_limit_exceeded"      => "Sua licença só pode usar :brands permitida(s) simultaneamente. Para adquirir marcas adicionais, visite nossa área de clientes.",
    "additional_brands"         => "Marcas Adicionais",
    "purchase_more"             => "Compre mais",
    "brand_limit_allowed"       => "Atualmente, sua licença está autorizada a usar :allowed permitida simultaneamente.|Atualmente, sua licença está autorizada a usar :allowed permitidas simultaneamente.",
    "brand_limit_purchase"      => "Se isso estiver incorreto, <strong> reemita </strong> sua licença na nossa <a href='http://www.supportpal.com/manage/' target='_blank'> área do cliente </a> e visite a página <a href=':route'> Informações da licença </a> para sincronizar seu <a href=':route'> com o nosso servidor de licenças. <br /> Para adquirir marcas adicionais, <a href='https://www.supportpal.com/manage/upgrade.php?type=configoptions&id=:id' target='_blank'> atualize sua licença </a> .",
    "support_expiry"            => "Sua assinatura de suporte e atualizações é válida até :date.",
    "support_status_desc"       => "Por favor, <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'>renove sua assinatura de suporte</a> para obter o suporte e as atualizações mais recentes do SupportPal.",
    "ip_ban"                    => "Banimento de IP|Banimentos de IP",
    "ip_whitelist"              => "Lista branca de IP",
    "whitelisted_ip"            => "IP em lista branca",
    "license_path"              => "Caminho de instalação",
    "php_info"                  => "Informações do PHP",
    "log"                       => "Log|Logs",
    "invalid_department_brand"  => "O departamento não está atribuído à marca do ticket.",
    "incoming_rejected"         => "Entrada (Rejeitado)",

    /*
     * 2.1.1
     */
    "file_manager"              => "Gerenciador de arquivos de log",
    "file_manager_desc"         => "Abaixo, você pode baixar ou excluir os logs que são armazenados pelo sistema durante a operação, eles podem ser usados para fins de depuração. Os arquivos de log são ciclados automaticamente, armazenando apenas os últimos 5 dias de entradas.",
    "app_logs"                  => "Logs da Aplicação",
    "app_logs_desc"             => "Todos os avisos e erros de uso geral do help desk são registrados aqui. Você pode ser solicitado a fornecer um ou mais destes registros ao solicitar suporte.",
    "email_logs"                => "Logs de e-mail",
    "email_logs_desc"           => "Os detalhes sobre os emails recebidos são armazenados nesses arquivos quando estão sendo analisados e importados como tickets.",

    /*
     * 2.1.2
     */
    "reply_to"                  => "Responder a",
    "and_number_others"         => "e :number outros|e outros :number",
    "user_templates"            => "Modelos de usuário",
    "operator_templates"        => "Modelos de Operador",

    /*
     * 2.2.0
     */
    "attachment_size"           => "Limite Acumulado de Tamanho do Anexo",
    "attachment_size_desc"      => "O tamanho máximo acumulado de todos os anexos que são enviados em um único e-mail. As opções disponíveis são K (para Kilobytes) e M (para Megabytes), qualquer outra coisa assume bytes. Valor de exemplo: 5M para 5 Megabytes. Defina para 0 para não enviar anexos por e-mail e exija que os usuários façam o download dos anexos através do help desk.",
    "attachment_limit_reached"  => "Limite de arquivo acumulado alcançado (:size). Por favor, considere o envio de arquivos através de outro meio (como uma URL de download).",
    "no_existing_translations"  => "Nenhuma tradução existente.",
    "add_translation"           => "Adicionar tradução",
    "todo_list"                 => "Lista de tarefas",
    "version_check"             => "Verificação de versão",
    "system_overview"           => "Visão geral do sistema",
    "getting_started"           => "Como Começar",
    "operator_notes"            => "Notas do Operador",
    "simpleauth_operators_desc" => "Permita aos operadores entrar e sair com o SimpleAuth, recomendamos manter isso desativado, a menos que você esteja usando-o especificamente para esse fim.",
    "upgrade_and_reactivate"    => "Atualizar e reativar",
    "upgrade_pending"           => "Atualização pendente",
    "locale_in_uri"             => "Incluir local na URL",
    "locale_in_uri_desc"        => "Desative para remover o código do idioma do URI, por exemplo: http://support.mycompany.com/en/announcements torna-se http://support.mycompany.com/announcements. Só pode ser desativado quando há um idioma ativado no sistema.",

    /*
     * 2.3.0
     */
    "disabling_default_language" => "Atualmente, está definido como um idioma padrão. Desativar o idioma definirá outro idioma ativado como o idioma padrão.",

    /*
     * 2.3.1
     */
    "javascript_required"       => "Ative o JavaScript para usar esta página.",
    "go_to_dashboard"           => "Ir para o painel",
    "brand_colour_desc"         => "Selecione uma cor para sua marca, ela será usada para o esquema de cores no modelo de frontend e operador. Deixe em branco para usar o esquema de cores padrão.",
    "favicon"                   => "Favicon",
    "favicon_desc"              => "A imagem favicon aparece na barra de endereço e é usada para identificar seu site. Para obter os melhores resultados, verifique se o ícone contém um intervalo de tamanhos de 32x32px a 310x310px, é quadrado e formato ICO / PNG.",
    "view_original"             => "Ver original",
    "download_original"         => "Baixar Original",
    "consume_all"               => "Opcionalmente, insira um endereço de e-mail do departamento com \"Consumir tudo\" ativado.",
    "reprocess_email"           => "Reprocessar e-mail",
    "reprocess_email_desc"      => "Recomendamos revisar o que originalmente bloqueou o email e fazer as alterações necessárias antes de tentar reprocessar.",
    "email_blocked_desc"        => "O e-mail falhou ao enviar várias vezes, agora deve ser enviado manualmente.",
    "captcha_type"              => "Tipo de Captcha",
    "captcha_type_desc"         => "Select the Captcha to be used throughout the system. We recommend switching to Google reCAPTCHA, which requires additional configuration.",
    "default_captcha"           => "Captcha padrão",
    "recaptcha_site_key"        => "Site Key",
    "recaptcha_secret_key"      => "Secret Key",
    "recaptcha_desc"            => "Registre um novo site em <a target='_blank' href=\"https://www.google.com/recaptcha/admin\"> https://www.google.com/recaptcha/admin </a> , selecione o tipo correto de reCAPTCHA e certifique-se de adicionar cada domínio de marca. Copie o site e a chave secreta acima.",
    "enter_code"                => "Digite o código",
    "export_data"               => "Dados de exportação",
    "export_data_desc"          => "Gerar uma exportação para download de dados pertencentes a este usuário.",
    "export_data_select"        => "Por favor, selecione quais dados você gostaria de exportar.",
    "export_data_scheduled"     => "A exportação está sendo gerada atualmente, isso pode levar algum tempo. Enviaremos um e-mail quando estiver disponível para download.",
    "database"                  => "Banco de dados",
    "database_desc"             => "Os seguintes itens são armazenados no banco de dados.",
    "prune_users"               => "Registros de usuários inativos podem ser removidos automaticamente. Um usuário é considerado inativo se não tiver efetuado login ou tiver qualquer outra atividade por um determinado período de tempo.",
    "prune_tickets"             => "Os tickets inativos podem ser removidos automaticamente. Um ticket é considerado inativo se for resolvido e não tiver nenhuma atividade por um determinado período de tempo.",
    "prune_organisations"       => "As organizações inativas podem ser removidas automaticamente. Uma organização é considerada inativa se não houver usuários vinculados a ela e não tiver nenhuma atividade por um determinado período de tempo.",
    "prune_export"              => "As exportações de dados do usuário são armazenadas no sistema de arquivos, mas podem ocupar espaço; você pode remover os arquivos de exportação gerados antes de uma determinada data.",
    "automatically_prune"       => "Apagar automaticamente",
    "days_after_saved"          => "Registros após",
    "days_after_last_activity"  => "Registros inativos após",
    "record_permanent_delete"   => "Os registros serão excluídos permanentemente. Isso afetará os relatórios.",
    "record_delete_relations"   => "Os registros serão excluídos permanentemente, juntamente com os seguintes dados relacionados:: relações. Isso afetará os relatórios.",
    "manually_prune"            => "Excluir manualmente os registros criados antes",

    /*
     * 2.4.0
     */
    "enable_ssl_warning"        => "Se você habilitar essa configuração quando a página não carregar corretamente, você poderá ficar bloqueado no SupportPal!",
    "verify_frontend_loads"     => "Por favor, verifique se o frontend carrega corretamente abaixo.",
    "twig_operator_signature"   => "O campo de mesclagem {{ operator.signature|raw }} será processado em tempo de execução; portanto, a visualização pode estar incorreta.",

    /*
     * 2.4.1
     */
    "additional_brands_desc"    => "Permite usar outras marcas na sua instalação do SupportPal.",
    "no_branding"               => "Sem marca",
    "no_branding_desc"          => "Remove a marca SupportPal da extremidade voltada para o cliente do suporte técnico.",
    "multi_ip"                  => "Suporte Multi-IP",
    "multi_ip_desc"             => "Permite bloquear o SupportPal para mais de um IP interno / externo.",
    "purchase"                  => "Compra",
    "ticket_number_missing"     => "Para emails relacionados a tickets, o campo de mesclagem {{ticket.number}} deve estar presente no assunto do email e deve ser agrupado <em> [# {{ticket.number}}] </em> ou <em> ( # {{ticket.number}}) </em> para encaminhar as respostas ao ticket correto. Se você deseja remover o número do ticket, considere habilitar o <a href='https://docs.supportpal.com/current/Email+Channel#SubAddressConfiguration' target='_blank'> sub-endereçamento de e-mail </a> .",

    /*
     * 2.5.0
     */
    "debug_mode_desc"           => "Ative o modo de depuração para exibir erros, use apenas para depuração ou se for instruído pelo suporte. Os erros e outras mensagens úteis de log são armazenados nos logs do aplicativo, que podem ser baixados em Utilitários - > Logs - > Log File Manager.",
    "record_trash_relations"    => "The records will be moved to the trash and then permanently deleted after :number dias along with the following related data: :relations. This will impact reports.",
    "uninstall_plugable_warning" => "Desinstalar o :plugable excluirá todos os arquivos e dados associados. Recomendamos desativar o :plugable.",
    "web_settings_desc"         => "As configurações do canal da web se aplicam ao frontend. Por padrão, os tickets podem ser acessados por qualquer pessoa que conheça um URL exclusivo. Você pode desabilitar isso e exigir que os usuários efetuem login antes que possam acessar as informações do ticket.",

    /*
     * 2.6.0
     */
    "containing_text_desc"      => "Digite uma string (palavra específica a ser banida ou endereço de email); todas as strings não diferenciam maiúsculas de minúsculas.",
    "spam_is_regex_desc"        => "Regras podem tirar proveito de expressões regulares; se você pretende fazer isso, ative essa configuração. Você não precisa incluir delimitadores.",

    /*
     * 3.0.0
     */
    "upload_unknown_error"      => "Não foi possível fazer o upload dos arquivos devido a um erro no servidor.",
    "insert_image"              => "Inserir Imagem",
    "quote"                     => "Citar",
    "code"                      => "Código",
    "format"                    => "Formato",
    "paragraph"                 => "Parágrafo",
    "heading1"                  => "Título 1",
    "heading2"                  => "Título 2",
    "heading3"                  => "Título 3",
    "heading4"                  => "Título 4",
    "heading5"                  => "Título 5",
    "heading6"                  => "Título 6",
    "upload"                    => "Envio",
    "upload_label"              => "Solte os arquivos aqui ou clique para fazer o upload",
    "more_formatting"           => "Mais formatação",
    "clearformat"               => "Limpar Formatação",
    "bold"                      => "Negrito",
    "underline"                 => "Sublinhado",
    "italic"                    => "Itálico",
    "strikethrough"             => "Riscado",
    "font_color"                => "Cor da fonte",
    "insert_link"               => "Inserir link",
    "edit_link"                 => "Editar Link",
    "unlink"                    => "Remover link",
    "orderedlist"               => "Lista ordenada",
    "unorderedlist"             => "Lista não ordenada",
    "outdent"                   => "Recuo para a esquerda",
    "indent"                    => "Recuo",
    "lists"                     => "Listas",
    "edit_html"                 => "Editar HTML",
    "sEmptyTable"               => "Sem dados disponíveis na tabela",
    "sInfo"                     => "Mostrando _START_ a _END_ de _TOTAL_ entradas",
    "sInfoEmpty"                => "Mostrando 0 a 0 de 0 entradas",
    "sInfoFiltered"             => "(filtrado do total de _MAX_ entradas)",
    "sInfoPostFix"              => "",
    "sInfoThousands"            => ",",
    "sLengthMenu"               => "Mostrar itens do _MENU_",
    "sLoadingRecords"           => "Carregando...",
    "sProcessing"               => "Em processamento...",
    "sSearchPlaceholder"        => "Busca...",
    "sZeroRecords"              => "Nenhum registro correspondente encontrado",
    "sSortAscending"            => ":activate para classificar a coluna em ordem crescente",
    "sSortDescending"           => ":activate para classificar a coluna em ordem decrescente",
    "incoming_auto_reply"       => "Entrada (Auto-Resposta)",
    "logo_dark_mode"            => "Logotipo do Modo Escuro",
    "logo_dark_mode_desc"       => "Se o seu logotipo foi projetado para funcionar apenas em um plano de fundo claro, defina um logotipo diferente para o modo escuro. O campo pode ser um caminho relativo ao diretório base (recomendamos que você armazene seu logotipo na pasta resources / assets /) ou um URL direto para a imagem.",
    "template_mode"             => "Modo de modelo",
    "template_mode_desc"        => "Defina um tema claro ou escuro padrão para a interface. Os usuários poderão selecionar suas próprias preferências em seu perfil.",
    "light_mode"                => "Modo claro",
    "dark_mode"                 => "Modo escuro",
    "logo"                      => "Logo",
    "logo_desc"                 => "Change the default logo for this brand. The field can either be a path relative to the base directory (we recommend to store your logo in the resources/assets/ folder) or a direct URL to the image.",
    "website_url"               => "Website URL",
    "website_url_desc"          => "Adicione um link ao seu site principal no cabeçalho do portal de suporte.",
    "back_to_website"           => "Voltar ao site",
    "template"                  => "Modelo",
    "how_can_we_help"           => "Como podemos ajudá-lo hoje?",
    "ticket_desc2"              => "A grade do ticket pode ser solicitada ajustada à sua preferência e filtrada conforme necessário.",
    "zip_extension_required"    => "A extensão Zip PHP não está instalada. Instale-o e tente novamente.",
    "zip_file_not_downloaded"   => "Não foi possível fazer o download do arquivo zip. Verifique se você pode acessar: :url",
    "plugin_basic_info"         => "Por favor, forneça algumas informações básicas sobre o seu plugin.",
    "plugin_author_name"        => "Nome do autor",
    "plugin_author_uri"         => "URI do Autor (link para seu site)",
    "plugin_vendor_name"        => "Nome do fornecedor (nome da sua empresa, pode ser igual ao nome do autor)",
    "plugin_name"               => "Nome do Plugin",
    "plugin_description"        => "Descrição do plugin",
    "plugin_already_exists"     => "O Plugin já existe!",
    "plugin_creating"           => "Criando plugin...",
    "plugin_ready"              => "Plugin pronto em :diretory! Construa algo incrível.",

    /*
     * 3.3.0
     */
    "third_party_integrations"  => "Third-Party Integration|Third-Party Integrations",
    "oauth"                     => "OAuth",
    "oauth_data"                => "OAuth Data",
    "client_id"                 => "Client ID",
    "client_secret"             => "Client Secret",
    "create_credentials"        => "Please create authentication credentials via the <a href=\":route\">Third-Party Integration</a> page.",
    "oauth_data_missing"        => "The client ID and/or secret haven't been set and are required. Once you have set it up as per the below instructions, close the pop-up and re-validate.",
    "configure_after_brand_created" => "This may be configured after the brand has been created.",
    "get_access_token"          => "Get Access Token",
    "reset_access_token"        => "Reset Access Token",

    /*
     * 3.4.0
     */
    "brand_name"                => "Brand Name",
    "brand_name_desc"           => "Your brand name is used for all correspondence with users.",
    "supportpal_announcements"  => "SupportPal Announcements",
    "add_selectize"             => "Add <strong>:item</strong>...",
    "plugin_author_uri_short"   => "Author URI",
    "plugin_vendor_name_short"  => "Vendor Name",
    "open_link_in_new_tab"      => "Open link in new tab",
    "general_settings"          => "Configure general settings",
    "configure_brand"           => "Configure brand",
    "configure_department"      => "Configure department",
    "setup_cron"                => "Set-up cron job",
    "channel_settings"          => "Update ticket channel settings",
    "add_user"                  => "Add a new user",
    "open_ticket"               => "Open a new ticket",
    "reply_ticket"              => "Reply to ticket",
    "new_version_available"     => "New Version Available",
    "new_version_desc"          => "A new version of SupportPal has been released, we always recommend to keep your installation up to date.<div class='description'>Acknowledging this notice will hide it until a newer version is released.</div>",
    "acknowledge"               => "Acknowledge",
    "running_latest_version"    => "You are running the latest version.",
    "running_prerelease"        => "You are running a prerelease version.",

    /*
     * 3.6.0
     */
    "results_per_page"          => "Results Per Page",
    "class_name"                => "Class Name",
    "possible_permission_issue" => "You are running the command as \":cli_user\", while \":path\" is owned by \":path_user\", this can lead to file permission issues.",
    "system_update"             => "System Update",
    "system_update_desc"        => "Update SupportPal to the latest version available.",
    "update_available"          => "Update Available",
    "up_to_date"                => "Up to Date",
    "release_notes"             => "Release Notes",
    "about_to_update_to"        => "You are about to update to version <strong>:version</strong>. A full system backup will be taken automatically prior to the update.",
    "waiting_for_update_start"  => "Waiting for the update to start... This may take a few minutes.",
    "binary_paths"              => "Binary Paths",
    "binary_paths_desc"         => "The PATH environment variable is used to find required binaries. If one or more binary cannot be found, you can specify the full path for each binary file.",
    "cron_makesure"             => "Para obter ajuda para registrar o cron job, consulte a <a target='_blank' href='https://docs.supportpal.com/current/Configuring+the+Cron'>Ajuda Cron Job</a>.",
    "cron_must_run_for_update"  => "The cron job must be running to use this function.",
    "support_expired"           => "The support and updates on your license have expired.",
    "update_permitted_version"  => "The license only permits updating to :version.",
    "update_renew_support"      => "To update to the latest version of SupportPal, please renew your support and updates.",
    "renew"                     => "Renew",

    /*
     * 3.7.0
     */
    "background_jobs"           => "Background Jobs",
    "background_jobs_not_processing" => "Background jobs are not currently being processed, view <a target='_blank' href='https://docs.supportpal.com/current/Background+Jobs#Troubleshooting'>troubleshooting steps</a>.",

);
