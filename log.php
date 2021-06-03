<?php

return array(

    // Standard messages
    "item_created"                      => "Criado novo :item :rel.",
    "item_updated"                      => "Atualizado :item :rel.",
    "item_deleted"                      => "Excluído :item :rel.",

    // Custom messages
    "ip_ban_created"                    => "Criada nova proibição de IP :rel.",
    "ip_ban_updated"                    => "Proibição atualizada do IP :rel.",
    "ip_ban_deleted"                    => "Proibição excluída do IP :rel.",
    "banned_ip_on_login"                => "Proibido IP :rel durante 15 minutos.",

    "ip_whitelist_created"              => "Adicionado o IP :rel à lista branca.",
    "ip_whitelist_updated"              => "IP atualizado :rel na lista branca.",
    "ip_whitelist_deleted"              => "IP excluído :rel da lista branca.",

    "system_cleanup"                    => "Ran system cleanup on :rel.",

    "api_failed_login"                  => "IP :rel falhou ao autenticar na API.",

    "user_successful_login"             => "Logado no help desk.",
    "user_failed_login"                 => "Falha ao autenticar.",
    "user_successful_logout"            => "Saiu do help desk.",

    "user_registered"                   => "Registrou uma conta.",
    "user_confirmed"                    => "Confirmou a conta.",
    "user_password_set"                 => "Definiu uma senha para a conta.",
    "user_password_reset"               => "Redefiniu a senha para a conta deles.",

    "user_added_to_organisation"        => "Usuário :rel adicionado à organização :new_value.",
    "user_removed_from_organisation"    => "Usuário :rel removido da organização :old_value.",
    "user_profile_updated"              => "Atualizou perfil da conta",
    "user_left_organisation"            => "Saiu da organização :rel.",
    "user_organisation_emptied"         => "Todos os usuários removidos da organização :rel.",
    "user_organisation_updated"         => "O nível de acesso da organização de :rel mudou de :old_value para :new_value.",
    "organisation_membership_updated"   => "Associação atualizada do usuário da organização :rel.",
    "organisation_profile_updated"      => "Perfil atualizado da organização :rel.",
    "organisation_owner_updated"        => "Organização transferida :rel propriedade para :new_value.",

    "mass_email_queued"                 => "Em fila: novos e-mails com valores em lotes a serem enviados.",
    "mass_email_sent"                   => "Enviado :new_value e-mails na fila.",

    "email_queue_deleted"               => "Email na fila excluído para :rel.",

    "scheduled_task_run"                => "Tarefa programada :rel foi executado manualmente.",

    "selfservice_article_upvoted"       => "Artigo classificado positivamente :rel.",
    "selfservice_article_downvoted"     => "Artigo avaliado negativamente :rel.",
    "selfservice_comment_posted"        => "Lançado um novo :rel.",
    "selfservice_comment_upvoted"       => "Classificação de \"rel\" de :old_value para :new_value.",
    "selfservice_comment_downvoted"     => "Classificação de :old_value para :new_value.",

    "ticket_opened"                     => "Aberto um novo ticket #:rel.",
    "ticket_opened_on_behalf"           => "Aberto novo ticket #:rel em nome de :new_value.",
    "ticket_opened_email"               => "E-mail importado como novo ticket #:rel.",

    "ticket_message_reply"              => "Postado uma nova resposta ao ticket #:rel.",
    "ticket_message_note"               => "Postada uma nova nota para ticket #:rel.",
    "ticket_message_deleted"            => "Apagada uma mensagem no ticket #:rel.",

    "ticket_user_updated"               => "Atualizado o usuário no ticket #:rel de :old_value para :new_value.",
    "ticket_subject_updated"            => "Atualizado o assunto no ticket #:rel.",
    "ticket_department_updated"         => "Atualizado o departamento no ticket #:rel de :old_value para :new_value.",
    "ticket_status_updated"             => "Atualizado o status no ticket #:rel de :old_value para :new_value.",
    "ticket_priority_updated"           => "Atualizada a prioridade no ticket #:rel de :old_value para :new_value.",
    "ticket_tag_added"                  => "Adicionada tag: new_value ao ticket #:rel.",
    "ticket_tag_updated"                => "Tags atualizadas no ticket #:rel.",
    "ticket_tag_removed"                => "Tag :new_value removida do ticket #:rel.",
    "ticket_slaplan_updated"            => "Atualizado o plano de SLA no ticket #:rel de :old_value para :new_value.",
    "ticket_duetime_updated"            => "Atualizado o prazo de entrega no ticket #:rel para :new_value.",
    "ticket_duetime_paused"             => "Pausado o prazo de entrega no ticket  #:rel até a próxima resposta do usuário.",
    "ticket_customfield_updated"        => "Atualizado campos personalizados no ticket #:rel.",
    "ticket_converted_user"             => "Convertido ticket interno #:rel para ticket de usuário.",
    "ticket_converted_internal"         => "Número de ticket do usuário convertido #:rel para ticket interno.",

    "ticket_assigned_operator"          => "Atribuído :new_value para ticket #:rel.",
    "ticket_unassigned_operator"        => "Removido :new_value do ticket #:rel.",
    "ticket_assigned_self"              => "Auto atribuído ao ticket #:rel.",
    "ticket_assigned_updated"           => "Atualizado operadores atribuídos no ticket #:rel.",

    "ticket_locked"                     => "Locked ticket #:rel.",
    "ticket_unlocked"                   => "Ticket #:rel desbloqueado.",
    "ticket_locked_reply"               => "A resposta não pôde ser adicionada ao ticket bloqueado #:rel.",

    "ticket_merged"                     => "Ticket(s) :new_value merged into ticket #:rel.",
    "ticket_unmerged"                   => "Ticket :rel foi separado.",

    "ticket_user_blocked"               => "E-mail bloqueado :new_value (do usuário no ticket #:rel).",

    "ticket_closed"                     => "O ticket #:rel foi fechado.",
    "ticket_inactive_closed"            => "Fechado ticket inativo #:rel do status :old_value.",
    "ticket_awaiting_response"          => "Enviado à espera de resposta por e-mail ao utilizador no ticket #:rel.",

    "ticket_split_from"                 => "Mensagens divididas do antigo ticket #:rel para o novo ticket #:new_value.",
    "ticket_split_to"                   => "Mensagens divididas do antigo ticket #:old_value para o novo ticket #:rel.",

    "ticket_attachment_saved"           => "Anexo adicionado ao ticket #:rel.",
    "ticket_attachment_deleted"         => "Anexo excluído do ticket #:rel.",

    "ticket_throttled"                  => "Ticket de :rel rejeitado devido a limitação.",

    /*
     * 2.0.3
     */
    "selfservice_attachment_saved"      => "Adicionado o anexo ':new_value' ao ID do artigo :rel.",
    "selfservice_attachment_deleted"    => "Apagado o anexo ':new_value' de à ID do artigo :rel.",
    "ticket_unassigned_self"            => "Auto-removido do ticket #:rel.",

    /*
     * 2.1.0
     */
    "ticket_brand_disabled_reply"       => "A resposta não pôde ser adicionada devido a um bilhete pertencente a uma marca deficiente #:rel.",
    "personal_signatures_updated"       => "Assinaturas pessoais atualizadas.",
    "operator_signatures_updated"       => "Atualizado assinaturas de :rel.",
    "check_email_failed"                => "Erro: Falha no download do e-mail da conta :old_value: ':rel'.",
    "ticket_added_cc"                   => "E-mail(s) :new_value adicionado à lista de endereços CC para bilhete #:rel.",
    "ticket_removed_cc"                 => "Email(s) :old_value removido da lista de endereços do CC para o ticket #:rel.",
    "invalid_department_brand"          => "Failed to set department to ':new_value' on ticket #:rel, department does not belong to ticket brand.",

    /*
     * 2.1.2
     */
    "sent_email_to"                     => "Enviou um e-mail com o assunto ':extra_rel1' para :rel.",
    "sent_template_email_to"            => "Enviado ':extra_rel1' email para :rel.",
    "sent_ticket_email_to_user"         => "Enviado ':extra_rel1' email ao usuário para ticket #:rel.",
    "sent_email_to_operators"           => "Enviado ':extra_rel1' email aos operadores.",
    "sent_ticket_email_to_operators"    => "Enviado ':extra_rel1' email aos operadores para o bilhete #:rel.",
    "sent_email_to_operator_group"      => "Enviado ':extra_rel1' email para o grupo de operadores ':new_value' para o ticket #:rel.",
    "ticket_macro_applied"              => "A macro ':new_value' foi veiculada no ticket #:rel.",
    "ticket_macro_automatic"            => "A macro ':new_value' foi automaticamente veiculada ao ticket #:rel.",
    "email_template_not_found"          => "ID do modelo de email ':new_value' não encontrado, cancelado o envio de email.",
    "ticket_duetime_unset"              => "Redefinir o prazode entrega no ticket #:rel.",
    "private_conversation_started"      => "Começou uma conversa com \"rel\".",
    "private_message_sent"              => "Enviou uma mensagem para :rel.",
    "not_imported_replies_disabled"     => "Um email :extra_rel1 foi recebido para o ticket #:rel, mas não foi importado, pois as respostas por email do ticket estão desativadas.",
    "not_imported_ticket_locked"        => "Um email :extra_rel1 foi recebido para o ticket #:rel, mas não foi importado, pois o ticket está bloqueado.",

    /*
     * 2.2.0
     */
    "ticket_user_added_to_group"        => "Usuário do ticket adicionado ao grupo de usuários :new_value.",
    "ticket_user_removed_from_group"    => "Ticket user removed from user group :old_value.",
    "email_on_behalf"                   => "Encaminhado :extra_rel2 em nome de ':extra_rel1' no ticket #:rel.",

    /*
     * 2.3.0
     */
    "registered_users_only"             => "Enviado ':extra_rel1' email para :new_value, o departamento não aceita emails de utilizadores não registrados.",
    "deleted_user"                      => "Usuário apagado",
    "linked_ticket"                     => "Ticket vinculado #:rel com ticket :extra_rel1.",
    "unlinked_ticket"                   => "Ticket #:rel desvinculado do ticket :extra_rel1.",
    "email_queue_attachment_deleted"    => "Apagado o anexo ':old_value' do e-mail enfileirado ':rel'.",
    "forward_ticket_email"              => "Ticket encaminhado #:rel a terceiros, visualize o email ':extra_rel1'.",

    /*
     * 2.3.1
     */
    "selfservice_comment_updated"       => "Atualizado :rel por :extra_rel1.",
    "selfservice_comment_status"        => "Alterado o status de :rel por :extra_rel1 de :old_value para :new_value.",
    "selfservice_comment_deleted"       => "Comentário apagado por :extra_rel1.",
    "ticket_message_posted"             => "Postado um novo :extra_rel1 para ticket #:rel.",
    "ticket_message_edited"             => "Editado um :extra_rel1 in ticket #:rel.",
    "email_send_failed"                 => "Falha ao enviar email.",
    "ticket_brand_updated"              => "A marca foi atualizada no ticket #:rel de :old_value para :new_value.",
    "export_scheduled"                  => "Uma exportação de usuário :rel foi agendada.",
    "export_generated"                  => "Exportação :new_value do usuário :rel foi gerado e armazenado no sistema.",
    "export_deleted"                    => "Exportação :old_value do usuário :rel foi excluído do sistema.",
    "deleted_inactive_records"          => "Excluído automaticamente :old_value inativa :rel.",
    "deleted_old_records"               => "Registros antigos :rel excluídos automaticamente.",
    "sent_email_to_user_group"          => "Email enfileirado para o grupo de utilizadores ':new_value' para o bilhete #:rel.",

    /*
     * 2.4.0
     */
    "ticket_watching"                   => "Monitorando o ticket #:rel.",
    "ticket_unwatching"                 => "Não mais monitorando o ticket #:rel.",
    "ticket_watch_operator"             => "Definir :new_value para monitorar o ticket #:rel.",
    "ticket_unwatch_operator"           => "Redefinido :new_value de monitorar o ticket #:rel.",

    /*
     * 2.5.0
     */
    "marked_user_as_confirmed"          => "Propriedade confirmada do endereço de e-mail em nome do usuário :rel.",
    "ticket_department_email_updated"   => "Atualizado o e-mail do departamento no ticket #:rel de :old_value para :new_value.",
    "ticket_watching_updated"           => "Atualizado operadores monitorando o ticket #:rel.",
    "ticket_deleted"                    => "Ticket permanentemente apagado ':old_value' (#:rel).",
    "ticket_trashed"                    => "Ticket #:rel movido para a lixeira.",
    "ticket_restored"                   => "Ticket #:rel restaurado da lixeira.",
    "emptied_ticket_trash"              => "Limpo automaticamente o lixo dos registros de ':old_value'.",

    /*
     * 2.6.0
     */
    "ticket_followup_set"               => "Um novo acompanhamento foi criado no ticket #:rel.",
    "ticket_followup_updated"           => "Um acompanhamento do ticket #:rel foi atualizado.",
    "ticket_followup_deleted"           => "Um acompanhamento no ticket #:rel foi excluído.",

    /*
     * 3.0.0
     */
    "selfservice_article_neutral"       => "Artigo avaliado neutramente :rel.",

);
