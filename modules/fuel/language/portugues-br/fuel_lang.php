<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Identificado como:';
$lang['logout'] = 'Fechar a seção';
$lang['fuel_developed_by'] = 'FUEL CMS versão %1s é desenvolvido por <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> e construído sobre o framework <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a>.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. Todos os direitos reservados.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "Não tem acesso a esta página.";
$lang['error_missing_module'] = "Está desperdiçando o módulo %1s.";
$lang['error_invalid_login'] = 'Identificação inválida.';
$lang['error_max_attempts'] = 'Desculpe, mas sua informações de login está incorreta e você está temporariamente desativado. Por favor, tente em %s segundos.';
$lang['error_empty_user_pwd'] = 'Por favor entre com seu nome e sua senha.';
$lang['error_pwd_reset'] = 'Ocorreu um erro ao restabelecer o formulário.';
$lang['error_invalid_email'] = 'O endereço de e-mail informado não está registrado no sistema.';
$lang['error_invalid_password_match'] = 'Senha não encontrada';
$lang['error_empty_email'] = 'Por favor, digite um endereço de e-mail.';
$lang['error_no_permissions'] = 'Você nãotem permissão para executar essa ação.';
$lang['error_page_layout_variable_conflict'] = 'Houve um erro com este layout, porque contém uma ou mais das seguintes palavras-chave: %1s';
$lang['error_invalid_export_dir'] = 'O diretório %1s não é válido para exportação. Confirme se tem permissão de gravação.';
$lang['error_exporting_to_directory'] = 'Houve um erro ao escrever em um ou mais diretórios. Leia as informações abaixo para maiores detalhes.';
$lang['error_cache_folder_not_writable'] = 'Você deve fornecer permissões de gravação para a pasta cache %1s.';
$lang['error_exporting_view'] = 'Houve um erro na criação do arquivo de exibição associado para a localização %1s porque a variável com nome de <strong><em>%2s</em></strong> não existe.';
$lang['error_no_curl_lib'] = 'Você deve ter a extensão curl php para usar estas ferramentas.';
$lang['error_inline_page_edit'] = 'Esta variável deve ser editada no arquivoi associado em views/_variables.';
$lang['error_saving'] = 'Houve um erro ao salvar.';
$lang['error_cannot_preview'] = 'Ocorreu um erro ao tentar visualizar esta páginaa.';
$lang['error_cannot_make_api_call'] = 'Houve um erro em uma chamada para a API %1s.';
$lang['error_sending_email'] = 'ocorreu um erro ao enviar para o e-mail %1s.';
$lang['error_upload'] = 'Houve um erro no arquivo.';
$lang['error_create_nav_group'] = 'Por favor, crie um grupo de navegação';
$lang['error_requires_string_value'] = 'O nome do arquivo deve ser uma string';
$lang['error_missing_params'] = 'Faltam parâmetros para visualizar esta página';


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>É altamente recomendado que você mude sua senha padrão <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Este elemento não está publicado.';
$lang['warn_not_active'] = 'Este %1s no está ativo.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s logado";
$lang['logged_out'] = "%s deslogado";
$lang['dev_pwd_instructions'] = 'Este site está em desenvolvimento e requer uma senha para ser vist.';
$lang['login_forgot_pwd'] = 'Esqueceu sua senha?';
$lang['login_reset_pwd'] = 'Redefinição de senha';
$lang['login_btn'] = 'Login';


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Painel de ferramentas';
$lang['dashboard_intro'] = 'Bemvindo ao FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Atividades rescentes';
$lang['dashboard_hdr_latest_news'] = 'Últimas notícias do FUEL';
$lang['dashboard_hdr_modified'] = 'Páginas modificadas rescentemente';
$lang['dashboard_hdr_site_docs'] = 'Documentação do site';
$lang['dashboard_change_pwd'] = 'Trocar senha';
$lang['dashboard_change_pwd_later'] = 'Trocar minha senha mais tarde';
$lang['dashboard_subscribe_rss'] = 'Inscrever RSS';
$lang['dashboard_view_all_pages'] = 'Ver todas as páginas';
$lang['dashboard_view_all_activity'] = 'Ver todas as atividades';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Meu perfil';
$lang['profile_instructions'] = 'Alterar as informações de perfil abaixo:';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/

$lang['pwd_reset'] = 'Foi enviado um e-mail para confirmar a sua senha.';
$lang['pwd_reset_subject'] = "Pedido de restauração do gerenciador de senhas FUEL";
$lang['pwd_reset_email'] = "Siga o link para confirmar a sua senha de restauração FUEL:\n%1s";
$lang['pwd_reset_subject_success'] = "Senha do administrador do FUEL reestabelecida com êxito";
$lang['pwd_reset_email_success'] = "Sue senha foi restabelecida com %1s. Para trocá-la, entre no painel de administração do FUEL com esta senha e coloque seu nome de uusário n azona superior direita para atualizar seu perfil";
$lang['pwd_reset_success'] = 'Sua senha foi restaurado com sucesso e foi enviado um e-mail com sua nova senha';
$lang['cache_cleared'] = "O cache do site foi excluído";
$lang['module_restored_success'] = 'A versão anterior foi restabelecida com êxito.';


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Panel de ferramentas';
$lang['module_pages'] = 'Páginas';
$lang['module_blocks'] = 'Blocos';
$lang['module_navigation'] = 'Navegação';
$lang['module_assets'] = 'Assets';
$lang['module_sitevariables'] = 'Variáveis do site';
$lang['module_users'] = 'Usuários';
$lang['module_permissions'] = 'Permissões';
$lang['module_manage_cache'] = 'Cache de página';
$lang['module_manage_activity'] = 'Log das atividades';

$lang['section_site'] = 'Site';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Módulos';
$lang['section_manage'] = 'Administrar';
$lang['section_tools'] = 'Ferramentas';
$lang['section_recently_viewed'] = 'Visto rescentemente';

/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "O elemento %1s <em>%2s</em> foi criado";
$lang['module_edited'] = "O elemento %1s <em>%2s</em> foi editado";
$lang['module_deleted'] = "O elemento %1s para <em>%2s</em> foi excluído";
$lang['module_restored'] = "O elemento %1s foi restaurado do aquivo";
$lang['module_instructions_default'] = "Aqui você pode administrar %1s teu site.";

$lang['cannot_determine_module'] = "Eu não posso determinar o módulo.";
$lang['incorrect_route_to_module'] = "Caminho incorreto para acessar o módulo.";
$lang['data_saved'] = 'Os dados foram salvos.';
$lang['data_deleted'] = 'Os dados foram apagados.';
$lang['no_data'] = 'Não há dados para mostrar.';
$lang['no_preview_path'] = 'Não há caminho de previsualização deste módulo.';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'O local especificado tem as seguintes rotas já especificado no arquivo de rotas (%1s):';
$lang['page_controller_assigned'] = 'Existe um método do controlador também atribuído a esta página.';
$lang['page_updated_view'] = 'Há um arquivo de exibição atualizada localizado em <strong>%1s</strong>. Quer importá-lo para o corpo de sua página (se disponível)?';
$lang['page_not_published'] = 'Esta página não está publicada.';
$lang['page_no_import'] = 'Não, não importar';
$lang['page_yes_import'] = 'Sim, importar';
$lang['page_information'] = 'Informação da página';
$lang['page_layout_vars'] = 'Variáveis de layout';

$lang['pages_instructions'] = 'Aqui você pode gerenciar os dados associados à página.';
$lang['pages_associated_navigation'] = 'Navegação associada';
$lang['pages_success_upload'] = 'Modo de exibição de página subiu corretamente.';
$lang['pages_upload_instructions'] = 'Selecione um arquivo e enviá-lo para ver as páginas abaixo.';

// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Cache';
$lang['pages_last_updated_by'] = 'Última atualização %1s por %2s';
$lang['pages_not_published'] = 'Esta página não está publicada.';
$lang['pages_default_location'] = 'exemplo: company/about';


/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Há um arquivo de visualização atualizado localizado em <strong>%1s</strong>. Quer importá-lo?';
$lang['form_label_view'] = 'Visualização';
$lang['blocks_success_upload'] = 'A visualização do bloco foi carregada com sucesso.';
$lang['blocks_upload_instructions'] = 'Selecionar um arquivo de visualização e fazer o upload abaixo.';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_instructions'] = 'Aqui você pode criar e editar itens no menu no topo da página.';
$lang['navigation_import_instructions'] = 'Selecione um grupo de navegação e upload de um arquivo a ser importado abaixo. O arquivo PHP devem conter a matriz <strong> variável $ nav </ strong>. Para uma referência do formato de array, consulte o guia do usuário <a href="http://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank"> </ a>';
$lang['navigation_import_instructions'] = 'Selecionar um grupo de navegação e importação upload de um arquivo abaixo. O arquivo deve conter o <strong> variável PHP array $ nav </ strong>. Para referência no formato de array, consulte o guia do usuário <a href="http://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank"></a>';
$lang['navigation_success_upload'] = 'A navegação foi carregada corretamente.';
$lang['form_label_navigation_group'] = 'Grupo de navegação';
$lang['form_label_nav_key'] = 'Tecla de Navegação';
$lang['form_label_parent_id'] = 'Paarente';
$lang['form_label_attributes'] = 'Atributos';
$lang['form_label_selected'] = 'Selecionado';
$lang['form_label_hidden'] = 'Oculto';

// for upload form
$lang['form_label_clear_first'] = 'Remover primeiro';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Aqui você pode enviar novos ativos. Selecione Substituir se você quiser sobrescrever arquivos com o mesmo nome.';
$lang['form_label_preview/kb'] = 'Previsualizar/kb';
$lang['form_label_link'] = 'Link';
$lang['form_label_asset_folder'] = 'Pastas de ativos';
$lang['form_label_new_file_name'] = 'Nome do novo arquivo';
$lang['form_label_subfolder'] = 'Subarquivo';
$lang['form_label_overwrite'] = 'Sobreescrever';
$lang['assets_upload_action'] = 'Subir';


/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Aqui você pode gerenciar as variáveis ​​de espaço para seu site.';
$lang['sitevariables_scope'] = 'Escopo';

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Aqui você pode gerenciar os dados dos usuários.';
$lang['permissions_heading'] = 'Permissões';
$lang['form_label_language'] = 'Idioma';
$lang['form_label_send_email'] = 'Enviar e-mail';
$lang['btn_send_email'] = 'Enviar e-mail';
$lang['new_user_email_subject'] = 'Sua conta no FUEL CMS foi criada';
$lang['new_user_email'] = 'Sua conta no FUEL CMS foi criada. Por favor faça o login com as seguintes informações:
URL de identificação:'.site_url('fuel/login').'
Usuário: %1s
Senha: %2s';
$lang['new_user_created_notification'] = 'Foi criado um novo usuário e enviado uma notificação para %1s.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Aqui você pode gerenciar os módulos de serviços para o FUEL CMS e, posteriormente atribuídas aos usuários.';

// permissions
$lang['perm_assets'] = 'Assets';
$lang['perm_blocks'] = 'Administrar blocosq';
$lang['perm_blog/categories'] = 'Categorias do blog';
$lang['perm_blog/comments'] = 'Comentários do blog';
$lang['perm_blog/links'] = 'Links do blog';
$lang['perm_blog/posts'] = 'Artigos do blog';
$lang['perm_blog/settings'] = 'Configuração do blog';
$lang['perm_blog/users'] = 'Autores do blog';
$lang['perm_google_analytics'] = 'Google Analytics';
$lang['perm_manage'] = 'Ver a página do painél de ferramentas';
$lang['perm_manage/activity'] = 'Ver logs de atividades';
$lang['perm_manage/cache'] = 'Administrar o cache de página';
$lang['perm_myPHPadmin'] = 'myPHPadmin';
$lang['perm_navigation'] = 'Administrar navegação';
$lang['perm_pages'] = 'Administrar páginas';
$lang['perm_pages_delete'] = 'Capacidade de eliminar páginas';
$lang['perm_pages_publish'] = 'Possibilidade de publicar páginas';
$lang['perm_permissions'] = 'Administrar permissões';
$lang['perm_projects'] = 'Projetos';
$lang['perm_projects_delete'] = 'Eliminr projetos';
$lang['perm_projects_publish'] = 'Publicar projetos';
$lang['perm_quotes'] = 'Citações';
$lang['perm_site_docs'] = 'Documentação do Site';
$lang['perm_sitevariables'] = 'Variáveis do site';
$lang['perm_tools'] = 'Administrar ferramentas';
$lang['perm_tools/backup'] = 'Administrar backup do banco de dados';
$lang['perm_tools/cronjobs'] = 'Tarefas programadas';
$lang['perm_tools/seo'] = 'Análise de páginas';
$lang['perm_tools/seo/google_keywords'] = 'Google Keywords';
$lang['perm_tools/tester'] = 'Módulo de teste';
$lang['perm_tools/user_guide'] = 'Acessar o gui de usuário';
$lang['perm_tools/validate'] = 'Validar';
$lang['perm_users'] = 'Administrar usuários';


/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_instructions'] = 'Você está prestes a limpar o cache de página do site.';
$lang['cache_no_clear'] = 'Não, não limpar o cache';
$lang['cache_yes_clear'] = 'Sim, limpar o cache';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'EDITAR';
$lang['table_action_delete'] = 'APAGAR';
$lang['table_action_view'] = 'VISIUALIZAR';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Mostrar:';
$lang['label_restore_from_prev'] = 'Restaurar de versão prévia...';
$lang['label_select_another'] = 'Selecionar outro...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Listar';
$lang['btn_tree'] = 'Árvore';
$lang['btn_create'] = 'Criar';
$lang['btn_delete_multiple'] = 'Excluir múltiplas';
$lang['btn_rearrange'] = 'Reordenar';
$lang['btn_search'] = 'Buscar';
$lang['btn_view'] = 'Visualizar';
$lang['btn_publish'] = 'Publicar';
$lang['btn_unpublish'] = 'Despublicar';
$lang['btn_activate'] = 'Ativar';
$lang['btn_deactivate'] = 'Desativar';
$lang['btn_delete'] = 'Apagar';
$lang['btn_duplicate'] = 'Duplicar';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Enviar';

$lang['btn_no'] = 'Não';
$lang['btn_yes'] = 'Sim';

$lang['btn_no_upload'] = 'Não, não enviar';
$lang['btn_yes_upload'] = 'Sim, enviar';

$lang['btn_no_dont_delete'] = 'Não, não apagar';
$lang['btn_yes_dont_delete'] = 'Sim, apagar';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Nome';
$lang['form_label_title'] = 'Titulo';
$lang['form_label_label'] = 'Etiqueta';
$lang['form_label_location'] = 'Localização';
$lang['form_label_published'] = 'Publicado';
$lang['form_label_active'] = 'Ativo';
$lang['form_label_precedence'] = 'Precedência';
$lang['form_label_date_added'] = 'Data de criação';
$lang['form_label_last_updated'] = 'Última atualização';
$lang['form_label_file'] = 'Arquivo';
$lang['form_label_value'] = 'Valor';
$lang['form_label_email'] = 'E-mail';
$lang['form_label_user_name'] = 'Usuário';
$lang['form_label_first_name'] = 'Nome';
$lang['form_label_last_name'] = 'Sobrenome';
$lang['form_label_super_admin'] = 'Super Administrador';
$lang['form_label_password'] = 'Senha';
$lang['form_label_confirm_password'] = 'Confirmar senha';
$lang['form_label_new_password'] = 'Nova senha';
$lang['form_label_description'] = 'Descrição';
$lang['form_label_entry_date'] = 'Data de entrada';
$lang['form_label_message'] = 'Mensagem';
$lang['form_label_image'] = 'Enviar imagem';
$lang['form_label_upload_image'] = 'Enviar imagem';
$lang['form_label_upload_images'] = 'Enviar imagens';
$lang['form_label_content'] = 'Conteúdo';
$lang['form_label_excerpt'] = 'Exeção';
$lang['form_label_permalink'] = 'Link permanente';
$lang['form_label_slug'] = 'URL amigável';
$lang['form_label_url'] = 'URL';

$lang['form_label_group_id'] = 'Grupo';
$lang['form_enum_option_yes'] = 'sim';
$lang['form_enum_option_no'] = 'não';

$lang['required_text'] = 'campos requeridos';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_fiel_main_copy'] = 'Este é o layout principal para ser usado em seu site.';
$lang['layout_field_page_title'] = 'Título da página';
$lang['layout_field_meta_description'] = 'Meta description';
$lang['layout_field_meta_keywords'] = 'Meta keywords';
$lang['layout_field_body'] = 'Corpo';
$lang['layout_field_body_description'] = 'Conteúdo principal da página';
$lang['layout_field_body_class'] = 'Clase CSS para body>';
$lang['layout_field_redirect_to'] = 'Redirecionar para';

$lang['layout_field_301_redirect_copy'] = 'Este layout vai fazer um redirecionamento 301 para uma página.';
$lang['layout_field_sitemap_xml_copy'] = 'Este layout será usado para gerar um mapa de site.';
$lang['layout_field_none_copy'] = 'Este layout é equivalente a ter nenhum usuário.';

$lang['layout_field_main_copy'] = 'Este é o layout principal para ser usado em seu site.';
$lang['layout_field_frequency'] = 'Frequência';
$lang['layout_field_frequency_always'] = 'sempre';
$lang['layout_field_frequency_hourly'] = 'de hora em hora';
$lang['layout_field_frequency_daily'] = 'diariamente';
$lang['layout_field_frequency_weekly'] = 'semanalmente';
$lang['layout_field_frequency_monthly'] = 'mensalmente';
$lang['layout_field_frequency_yearly'] = 'anualmente';
$lang['layout_field_frequency_never'] = 'nunca';


/*
|--------------------------------------------------------------------------
| MISC
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; Primero';
$lang['pagination_last_link'] = 'Último &rsaquo;';

$lang['action_edit'] = 'Editar';
$lang['action_create'] = 'Criar';


// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/spanish/fuel_lang.php */