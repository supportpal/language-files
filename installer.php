<?php

return array(

    // Pre installation check
    "requirements_failed"       => "Falha nos requisitos do sistema",

    // Index
    "supportpal_installer"      => "Instalador do SupportPal",
    "select_language"           => "Selecione o idioma",
    "install_type"              => "Tipo de instalação",
    "install"                   => "Instalação nova",
    "upgrade"                   => "Atualizar instalação existente",
    "support"                   => "O código de licença usado para esta instalação não possui um suporte válido & atualizações de assinatura e, como tal, não é elegível para instalar esta versão do SupportPal. Por favor, <a href='https://www.supportpal.com/manage/cart.php?gid=addons' target='_blank'> renove </a> seu suporte & atualiza a assinatura ou reverte seus arquivos de instalação.",

    // Upgrade
    "successfully_updated"      => "Parabéns, o SupportPal foi atualizado com sucesso.",

    // Install
    // Step 1
    "step_1"                    => "Etapa 1 de 7: aceite o EULA",
    "step_1_desc"               => "Leia nosso contrato de licença de software abaixo. Ao continuar, você concorda com a licença.",
    "i_accept_and_continue"     => "Eu aceito e continuo",

    // Step 2
    "step_2"                    => "Etapa 2 de 7: Requisitos do sistema",
    "not_available"             => "Não disponível",
    "php_version"               => "Versão do PHP",
    "php_version_not_found"     => "Não disponível, encontrei a versão PHP: :version",
    "php_extensions"            => "Extensões PHP",
    "file_writeable"            => "Permissões de arquivo",
    "file_writeable_desc"       => "Todos os itens abaixo devem ser graváveis pelo servidor da web. Recomendamos o uso de permissões de arquivo 755, embora alguns sistemas possam exigir 777 se os arquivos não pertencerem ao usuário do servidor da web. Os diretórios devem ser recursivamente graváveis.",

    // Step 3
    "step_3"                    => "Etapa 3 de 7: Banco de Dados",
    "step_3_desc"               => "Digite os detalhes do banco de dados que você configurou para o SupportPal.",
    "hostname"                  => "Hostname",
    "port"                      => "Porta",
    "port_desc"                 => "(Altere apenas se não for a porta 3306 padrão)",
    "database"                  => "Database",
    "database_not_empty"        => "O banco de dados não deve conter nenhuma tabela.",

    // Step 4
    "step_4"                    => "Etapa 4 de 7: Criar tabelas",
    "step_4_desc"               => "A migração será executada em segundo plano e um log detalhado escrito abaixo, isso pode levar alguns minutos. Depois de concluído, clique no botão Continuar que aparecerá.",

    // Step 5
    "step_5"                    => "Passo 5 de 7: Conta do operador",
    "step_5_desc"               => "O SupportPal requer uma licença válida para funcionar, por favor insira uma abaixo.",
    "license_desc"              => "Sua chave de licença do SupportPal tem 23 caracteres e começa com SP-",
    "operator_desc"             => "Please create an administrator account for the operator panel by entering all of the details below.",
    "validating_license"        => "Validando licença ...",

    // Step 6
    "step_6"                    => "Etapa 6 de 7: Configuração rápida",
    "step_6_desc"               => "Digite abaixo os detalhes da sua empresa e do seu site.",
    "locale_desc"               => "Defina as configurações do local para o sistema.",
    "operator_success"          => "Sua conta de administrador foi criada.",

    // Step 7
    "step_7"                    => "Passo 7 de 7: Instalado!",
    "successfully_installed"    => "Parabéns, o SupportPal foi instalado com sucesso.",
    "operator_panel"            => "Operator Panel",
    "help_desc"                 => "Se você precisar de ajuda para configurar ou usar o SupportPal, temos duas fontes principais de informações:",
    "submit_a_ticket"           => "Enviar um ticket",

    /*
     * 2.0.1
     */

    "post_install"              => "Para que o sistema funcione corretamente, uma tarefa cron deve ser configurada. Leia nossas <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps'> etapas de pós-instalação </a> para obter detalhes sobre esta e outras ações recomendadas para melhorar a funcionalidade e a segurança.",

    /*
     * 2.0.2
     */
    "required_requirements"     => "Você atende :required de :total requisitos necessários.",
    "optional_requirements"     => "Você atende a :optional de :total requisitos opcionais.",
    "both_requirements"         => "Você atende :required of :total_required requisitos exigidos e :opcional de :total_optional requisitos opcionais.",
    "php_version_is"            => "A sua versão PHP é :version.",
    "enabled"                   => "Enabled",
    "disabled"                  => "Disabled",
    "php_settings"              => "Configurações do PHP",
    "ipv6_support"              => "Suporte IPv6",
    "memory_limit"              => "> = 128MB de memória",
    "memory_limit_error"        => "O seu limite de memória é ':limit'.",
    "permission_denied"         => "Permissão negada",
    "writable"                  => "Gravável",
    "help_php_version"          => "Para obter ajuda na instalação de uma nova versão do PHP, entre em contato com seu provedor de hospedagem ou administrador de servidor.",
    "help_php_extensions"       => "As extensões PHP diferem dependendo do servidor, do host e de outras variáveis do sistema. Para obter ajuda na instalação de extensões ausentes, entre em contato com o seu provedor de hospedagem ou administrador do servidor.",
    "help_php_settings"         => "Para obter assistência adicional, por favor leia a <a target=\"_blank\" href=\"https://docs.supportpal.com/current/System+Requirements#PHPSettings\">Ajuda das Configurações do PHP</a>.",
    "disabled_functions"        => "Funções desativadas",
    "help_mysql_version"        => "Para obter ajuda na instalação de uma nova versão do MySQL, entre em contato com seu provedor de hospedagem ou administrador de servidor.",
    "mysql_version"             => "Versão do MySQL",
    "mysql_version_not_found"   => "Não disponível, versão MySQL encontrada: :version",

    /*
     * 2.1.0
     */
    "ipv6_failure"              => "Se o seu servidor tiver suporte para rede IPv6, instale a extensão php-sockets.",
    "email_address_desc"        => "Digite o endereço de e-mail da empresa principal, este será configurado como o endereço de e-mail de envio padrão e o endereço de e-mail no seu primeiro departamento. Você poderá adicionar outros endereços de email posteriormente.",

    /*
     * 2.2.0
     */
    "ioncube_version"           => "Versão do ionCube Loaders :required ou superior. Encontrado: ':version'.",

    /*
     * 2.3.0
     */
    "png_jpg_support"           => "Suporte PNG e JPEG",
    "allow_url_fopen"           => "'allow_url_fopen' ativado",
    "allow_url_fopen_failure"   => "Habilite 'allow_url_fopen' no seu arquivo php.ini para usar o Gravatar e outros recursos.",
    "allowed_methods"           => "Métodos permitidos por HTTP",
    "help_allowed_methods"      => "Seu servidor da web deve permitir todos os métodos HTTP abaixo. Verifique nossa <a href='https://docs.supportpal.com/current/New+Installation#PostInstallationSteps' target='_blank'> nova documentação de instalação </a> para obter mais informações.",

    /*
     * 2.4.0
     */
    "mysql_server_version"      => "Versão do servidor > =:min",
    "mysql_server_version_desc" => "MySQL :mínimo ou superior é necessário para executar o SupportPal. Encontrado: ':version'.",
    "mysql_client_version"      => "Versão do cliente > = :min (:mysqlnd_min for MySQLnd)",
    "mysql_client_version_desc" => "Versão do cliente MySQL :min ou superior (:mysqlnd_min for MySQLnd) é necessária para executar o SupportPal. Encontrado: ':version'.",

    "upgrade_step"              => "Passo :num de :total: ",
    "accept_eula"               => "Aceitar o EULA",
    "system_requirements"       => "Requisitos de sistema",
    "update_database"           => "Atualizar o banco de dados",
    "upgrade_complete"          => "Atualização concluída",

    "upgrade_support"           => "Se você encontrar algum problema ou precisar de ajuda para usar os novos recursos do SupportPal, leia nossa documentação ou abra um ticket conosco.",

    /*
     * 2.5.0
     */
    "press_to_begin"            => "Por favor, pressione o botão abaixo para começar.",
    "locked"                    => "Install/Upgrade In-Progress",
    "locked_desc"               => "Detected a lock file (:path).\nPlease check that the installer is not already running.\n\nYou can delete this file when you're certain that another installation or upgrade is not in progress.",

    "error_and_empty_database"  => "Havia um erro. Pode ser necessário esvaziar o banco de dados antes de iniciar novamente.",
    "login_with_details"        => "Você pode fazer login usando os detalhes especificados anteriormente.",
    "command_not_available"     => "Comando indisponível. Se você acha que isso foi mostrado por engano, execute 'php artisan cache: clear' e execute novamente este comando.",
    "read_upgrade_guide"        => "Nosso Guia de atualização contém informações úteis sobre alterações recentes e práticas recomendadas para atualização: \n https://docs.supportpal.com/current/Upgrade+Guide",
    "confirm_backup_taken"      => "[AVISO] Verifique se você fez um backup do banco de dados do SupportPal e dos arquivos do aplicativo antes de prosseguir. \n Confirme que você fez um backup, verificou que não está corrompido e está pronto para prosseguir.",
    "error_and_revert_database" => "Havia um erro. Reverta o banco de dados para seu backup antes de iniciar novamente.",

    /*
     * 2.6.0
     */
    "database_config_exists"    => "O arquivo de configuração do banco de dados já existe. Se você tem certeza de que o aplicativo ainda não está instalado, exclua /config/:environment/database.php e inicie novamente.",

    /*
     * 3.0.0
     */
    "index_desc"                => "Obrigado por escolher o SupportPal. Verifique se o tipo de instalação abaixo está correto e clique em continuar.",

    /*
     * 3.4.0
     */
    "seeding"                   => "Seeding",
    "seeded"                    => "Seeded",
    "migrating"                 => "Migrating",
    "migrated"                  => "Migrated",
    "database_setup_complete"   => "Database setup complete.",
    "created_repository"        => "Created ':name' repository successfully.",

    /*
     * 3.6.0
     */
    "suggest_run_update"        => "Command unavailable. Please run app:update to download and upgrade to the latest available version: %s.",
    "suggest_run_upgrade"       => "An upgrade is already in progress. Please run app:upgrade instead.",
    "failed_to_download"        => "Failed to download file: :message",
    "backup_failed_abort"       => "Backup failed. Aborting update.",
    "command_failed"            => "Command :command, failed with output: :message.",
    "already_latest_version"    => "You are already running the latest version (:version).",
    "update_not_supported"      => "Automatic update to latest version (:version) is not supported.",
    "current_and_new_version"   => "You have version :current_version. Latest version available is :new_version.",
    "update_to_version"         => "You have version :current_version. Would you like to update to :new_version?",
    "downloading_version"       => "Downloading version :version to :path...",
    "checksum_not_matched"      => "The downloaded file failed checksum verification.",

    "check_readiness"           => "Checking if the application is able to upgrade...",
    "read_only"                 => "The filesystem at \":path\" is read only. Updates cannot be applied against a read only file system.",
    "file_ownership"            => "File \":path\" is owned by \":owner\" but PHP is running as \":actual\". The file owner and PHP user must be the same during an update for all application files.",
    "minimum_disk_space"        => "Directory \":path\" has insufficient space. There must be at least :space megabytes free.",

    /*
     * 3.6.1
     */
    "upgrade_via_docker"        => "Docker deployment detected. To upgrade, follow https://docs.supportpal.com/current/Upgrade+Guide#docker",

    /*
     * 3.7.0
     */
    "troubleshooting_tips"      => "Get troubleshooting tips",
);
