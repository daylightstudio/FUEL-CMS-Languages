<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Autenticado como:';
$lang['logout'] = 'Sair';
$lang['fuel_developed_by'] = 'FUEL CMS versão %1s é devenvolvido por <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> e  desenvolvido sobre a framework <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a>.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. Todos os Direitos Reservados.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "Não tem acesso a esta página.";
$lang['error_missing_module'] = "Está faltando o módulo %1s.";
$lang['error_invalid_login'] = 'Utilizador Inválido.';
$lang['error_max_attempts'] = 'Desculpe, mas a informação de login estava incorreta e a conta está temporariamente bloqueado. Por favor tente novamente em %s segundos.';
$lang['error_empty_user_pwd'] = 'Por favor insira o nome de Utilizador e password.';
$lang['error_pwd_reset'] = 'Houve um erro ao fazer reset é password.';
$lang['error_invalid_email'] = 'O endereço de email indicado não está no sistema.';
$lang['error_invalid_password_match'] = 'As passwords não coincidem.';
$lang['error_empty_email'] = 'Por favor, insira um endereço de email.';
$lang['error_folder_not_writable'] = 'Deve conceder ao diretório %1s permissões de escrita.';
$lang['error_invalid_folder'] = ' O diretório %1s é inválido';
$lang['error_file_already_exists'] = 'O ficheiro %1s já existe.';
$lang['error_zip'] = 'Ocorreu um erro ao criar o ficheiro zip.';
$lang['error_no_permissions'] = 'Não tem permissões para concluir esta acção.';
$lang['error_no_lib_permissions'] = 'Não tem permissões para executar métodos da classe %1s.';
$lang['error_page_layout_variable_conflict'] = 'Ocorreu um erro com este layout , ou este não existe ou contém uma ou mais palavras reservadas: %1s';
$lang['error_no_curl_lib'] = 'Tem de ter a extensão curl php para usar estas ferramentas.';
$lang['error_inline_page_edit'] = 'Esta variável deve ser gravada como admin ou editada em associação com o ficheiro views/_variables.';
$lang['error_saving'] = 'Ocorreu um erro ao gravar.';
$lang['error_cannot_preview'] = 'Ocorreu um erro ao tentar pré-visualizar esta página.';
$lang['error_cannot_make_api_call'] = 'ocorreu um erro ao fazer a chamada da API para %1s.';
$lang['error_sending_email'] = 'ocorreu um erro ao enviar um email para %1s.';
$lang['error_upload'] = 'Ocorreu um erro ao enviar o ficheiro.';
$lang['error_create_nav_group'] = 'Por favor, crie um Grupo de Navegação';
$lang['error_requires_string_value'] = 'O nome do campo deve ser um valor string.';
$lang['error_missing_params'] = 'Faltam parâmetros para visualizar esta página';
$lang['error_invalid_method'] = 'Nome do método inválido';
$lang['error_curl_page'] = 'Erro ao carregar página com CURL';
$lang['error_class_property_does_not_exist'] = 'A Propriedade da Classe %1s não existe';
$lang['error_class_method_does_not_exist'] = 'O Método da Classe %1s não existe';
$lang['error_could_not_create_folder'] = 'Não é possivel criar diretório %1s';
$lang['error_could_not_create_file'] = 'Não é possivel criar ficheiro %1s';


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>É recomendado que altere a password por defeito de <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Este item não está publicado.';
$lang['warn_not_active'] = '%1s não está ativo.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s entrou";
$lang['logged_out'] = "%s saiu";
$lang['dev_pwd_instructions'] = 'Este Website está em desenvolvimento e requer uma password para visualizar.';
$lang['login_forgot_pwd'] = 'Esqueceu a password?';
$lang['login_reset_pwd'] = 'Reset à Password';
$lang['login_btn'] = 'Entrar';
$lang['logout_restore_original_user'] = 'Restaurar utilizador original';


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Painel';
$lang['dashboard_intro'] = 'Bem-Vindo ao FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Últimas Atividades';
$lang['dashboard_hdr_latest_news'] = 'Últimas notícias do FUEL';
$lang['dashboard_hdr_modified'] = 'Páginas Recentemente Modificadas';
$lang['dashboard_hdr_site_docs'] = 'Documentação';
$lang['dashboard_change_pwd'] = 'Alterar password';
$lang['dashboard_change_pwd_later'] = 'Mudo a minha password mais tarde';
$lang['dashboard_subscribe_rss'] = 'Subscrever RSS';
$lang['dashboard_view_all_pages'] = 'Ver todas as páginas';
$lang['dashboard_view_all_activity'] = 'Ver todas as atividades';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'O Meu Perfil';
$lang['profile_instructions'] = 'Alterar a informação de perfil:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'Os Meus Módulos';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
$lang['pwd_reset'] = 'Foi enviado um email para confirmar o reset á password.';
$lang['pwd_reset_subject'] = "pedido de reset á password de Admin do FUEL";
$lang['pwd_reset_email'] = "Click no seguinte link para confirmr o reset da sua password:\n%1s";
$lang['pwd_reset_subject_success'] = "Reset da password de Admin do FUEL efetuada com sucesso";
$lang['pwd_reset_email_success'] = "A password fi alterada para %1s. Para alterar a password, entre no FUEL CMS admin com esta password e click no nome de utilizador no campo superior direito para aceder á informação de perfil.";
$lang['pwd_reset_success'] = 'A password foi alterada com sucesso e um email foi enviado com a nova password.';
$lang['cache_cleared'] = "Cache do Website limpa.";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Painel';
$lang['module_pages'] = 'Páginas';
$lang['module_blocks'] = 'Blocos';
$lang['module_navigation'] = 'Navegação';
$lang['module_categories'] = 'Categorias';
$lang['module_tags'] = 'Etiquetas';
$lang['module_assets'] = 'Anexos';
$lang['module_sitevariables'] = 'Variáveis do Site';
$lang['module_users'] = 'Utilizadores';
$lang['module_permissions'] = 'Permissões';
$lang['module_tools'] = 'Ferramentas';
$lang['module_manage_cache'] = 'Cache de Página';
$lang['module_manage_activity'] = 'Relatório de Atividade';
$lang['module_manage_settings'] = 'Configurações';
$lang['module_generate'] = 'Gerado';


$lang['section_site'] = 'Site';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Módulos';
$lang['section_manage'] = 'Gerir';
$lang['section_tools'] = 'Ferramentas';
$lang['section_settings'] = 'Configurações';
$lang['section_recently_viewed'] = 'Visualizado Recentemente';
$lang['section_settings'] = 'Configurações';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "O item %1s <em>%2s</em>foi criado.";
$lang['module_edited'] = "O item %1s item <em>%2s</em> foi editado.";
$lang['module_deleted'] = "O item %1s <em>%2s</em> foi eliminado.";
$lang['module_multiple_deleted'] = "Múltiplos <em>%1s</em> eliminados";
$lang['module_restored'] = "O item %1s foi restaurado";
$lang['module_instructions_default'] = "Aqui pode gerir o %1s para o seu site.";
$lang['module_restored_success'] = 'Versão anterior restaurada com sucesso.';
$lang['module_replaced_success'] = 'Os conteúdos deste registo foram subtituídos com sucesso.';
$lang['module_incompatible'] = 'A versão deste módulo não é compativel com a versão do FUEL instalada'.FUEL_VERSION;

$lang['cannot_determine_module'] = "Não é possivel determinar o módulo.";
$lang['incorrect_route_to_module'] = "Caminho incorreto para aceder a este módulo.";
$lang['data_saved'] = 'Os dados foram gravados.';
$lang['data_deleted'] = 'Os dados foram eliminados.';
$lang['data_not_deleted'] = 'Alguns ou todos os ddos não podeream ser eliminados.';
$lang['no_data'] = 'Sem dados para visualizar.';
$lang['no_preview_path'] = 'Não há caminho de visualização atribuído a este módulo.';
$lang['delete_item_message'] = 'Está prestes a eliminar este item:';
$lang['replace_item_message'] = 'Selecione um registro da lista abaixo que gostaria de substituir. A substituição irá transferir os dados de um registro para o outro e, em seguida, eliminar o registro antigo.';

// command line
$lang['module_install'] = "O módulo '%1s' foi instalado com sucesso.\n";
$lang['module_install_error'] = "Ocorreu um erro ao instalar o módulo '%1s'.\n";

$msg = "O módulo %1s foi desinstalado do FUEL.\n\n";
$msg .= "No entanto, a remoção de um módulo do GIT requer um pouco mais de trabalho que não temos ainda automatizado. Contudo, os passos abaixo devem ajudar.\n\n";
$msg .= "1. Elimine a seção relevante do ficheiro .gitmodules.\n";
$msg .= "2. Elimine a seção relevante do .git/config.\n";
$msg .= "3. Execute git rm --cached %2s (sem barra).\n";
$msg .= "4. Submeter e excluir os arquivos do submódulo agora não monitorados.\n";
$lang['module_uninstall'] = $msg;


/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "Migrou de versão com sucesso %s.\n";
$lang['migrate_nothing_todo'] = "Não foram necessárias migrações.\n";


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'A localização especificada já tem a  respetiva rota especificada  no ficheiro de rotas (%1s):';
$lang['page_controller_assigned'] = 'Já existe um método controlador designado a esta página.';
$lang['page_updated_view'] = 'Existe um ficheiro de atualização da visualização em <strong>%1s</strong>. Quer enviar para o corpoda página (se disponível)?';
$lang['page_not_published'] = 'Esta página não está publicada.';

$lang['page_no_upload'] = 'Não, não enviar.';
$lang['page_yes_upload'] = 'Sim, enviar.';
$lang['page_information'] = 'Informação da Página';
$lang['page_layout_vars'] = 'Variáveis do Layout';

$lang['pages_instructions'] = 'Aqui pode gerir os dados associados com a página.';
$lang['pages_associated_navigation'] = 'Navegação associada';
$lang['pages_success_upload'] = 'A página de visualização foi enviada com sucesso.';
$lang['pages_upload_instructions'] = 'Selecione um ficheiro de visualização e envie para ver a página abaixo.';
$lang['pages_select_action'] = 'Seleccione';

// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Cache';
$lang['pages_last_updated'] = 'Última atualização a %1s';
$lang['pages_last_updated_by'] = 'Última atualização a %1s por %2s';
$lang['pages_not_published'] = 'Esta página não está publicada.';
$lang['pages_default_location'] = 'exemplo: empresa/sobre';

$lang['form_label_page'] = 'Página';
$lang['form_label_target'] = 'Destino';
$lang['form_label_class'] = 'Classe';

$lang['navigation_related'] = 'Criar navegação';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Existe um ficheiro de atualização da visualização em <strong>%1s</strong>. Quer importar?';
$lang['blocks_success_upload'] = 'A visualizaão do bloco foi enviada com sucesso.';
$lang['blocks_upload_instructions'] = 'Selecione um ficheiro de visualização do bloco e envie-o.';

$lang['form_label_view'] = 'Ver';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Importar Navigação';
$lang['navigation_instructions'] = 'Aqui pode criar e editar os itens do menu de topo da página.';
$lang['navigation_import_instructions'] = 'Select a navigation group and upload a file to import below. The file should contain the PHP array variable assigned in the variable field below (e.g. <strong>$nav</strong>). For a reference of the array format, please consult the <a href="http://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank">user guide</a>.';
$lang['navigation_success_upload'] = 'A navegação foi enviada com sucesso.';
$lang['form_label_navigation_group'] = 'Grupo de Navegação:';
$lang['form_label_nav_key'] = 'Tecla de Navegação';
$lang['form_label_parent_id'] = 'Parente';
$lang['form_label_attributes'] = 'Atributos';
$lang['form_label_selected'] = 'Seleccionado';
$lang['form_label_hidden'] = 'Escondido';

// for upload form
$lang['form_label_clear_first'] = 'Limpar Primeiro';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Aqui pode enviar novos anexos. Selecione substituir se quiser substituir o ficheiro com o mesmo nome.';
$lang['form_label_preview/kb'] = 'Pré-Visualizar/kb';
$lang['form_label_link'] = 'Link';
$lang['form_label_asset_folder'] = 'Diretório de Anexos';
$lang['form_label_new_file_name'] = 'Nome do novo ficheiro';
$lang['form_label_subfolder'] = 'Sub-Diretório';
$lang['form_label_overwrite'] = 'Substituir';
$lang['form_label_create_thumb'] = 'Criar miniatura';
$lang['form_label_resize_method'] = 'Método de Redimensionamento';
$lang['form_label_maintain_ratio'] = 'Manter as proporções';
$lang['form_label_resize_and_crop'] = 'Cortar se necessário';
$lang['form_label_overwrite'] = 'Sustituir';
$lang['form_label_width'] = 'Largura';
$lang['form_label_height'] = 'Altura';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'Alinhar';
$lang['form_label_master_dim'] = 'Dimensão Principal';
$lang['form_label_unzip'] = 'Unzip ficheiros zip';
$lang['assets_upload_action'] = 'Enviar';
$lang['assets_select_action'] = 'Selecionar';
$lang['assets_comment_asset_folder'] = 'O diretório para onde o anexo será enviado';
$lang['assets_comment_filename'] = 'Se nenhum nome for providenciado, será usado o nome do ficheiro que já existe.';
$lang['assets_comment_subfolder'] = 'Tentar criar um sub-diretório para colocar os anexos.';
$lang['assets_comment_overwrite'] = 'Substituir um ficheiro com o msmo nome. Se  desmarcado, o novo ficheiro será gravado com o número da versão no final do nome.';
$lang['assets_heading_general'] = 'Geral';
$lang['assets_heading_image_specific'] = 'Especificar Imagem';
$lang['assets_comment_thumb'] = 'Criar uma miniatura da imagem.';
$lang['assets_comment_resize_method'] = 'Manter as dimensões, redimensionar ou cortar a imagem para as dimensões providenciadas. Se "Criar Miniaturas" estiver selecionada, vai apenas afetar o tamanho das miniaturas.';
$lang['assets_comment_width'] = 'Mudará a largura da imagem para o valor desejado. Se "Criar miniaturas" estiver selecionada, vai apenas afetar a largura das miniaturas.';
$lang['assets_comment_height'] = 'Mudará a altura da imagem para o valor desejado. Se "Criar miniaturas" estiver selecionada, vai apenas afetar a altura das miniaturas.';
$lang['assets_comment_master_dim'] = 'Especifica a dimensão principal para usar no redimensionamento. Se a imagem original não permitir o redimensionamento perfeito para estas dimensões, este ajuste determina qual o eixo que deve ser utilizado como valor obrigatório. "auto" define o eixo automaticamente com base em se a imagem é mais alta do que larga, ou vice-versa.';
$lang['assets_comment_unzip'] = 'Unzips um ficheiro zip';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Aqui pode gerir as variaveis do Website.';
$lang['sitevariables_scope'] = 'Âmbito';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Aqui pode gerir os dados dos uilizadores.';
$lang['permissions_heading'] = 'Permissões';
$lang['form_label_language'] = 'Idioma';
$lang['form_label_send_email'] = 'Enviar Email';
$lang['btn_send_email'] = 'Enviar Email';
$lang['new_user_email_subject'] = 'A sua conta FUEL CMS foi criada';
$lang['new_user_email'] = 'A sua conta FUEL CMS foi criada. Pode fazer login com a seguinte informação:
Login URL:'.site_url('fuel/login').'
Nome de Utilizador: %1s
Password: %2s';
$lang['new_user_created_notification'] = 'A informação de utilizador foi gravada com sucesso e uma notificação foi enviada para %1s.';
$lang['error_cannot_deactivate_yourself'] = 'Não pode desativar-se a si mesmo.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Aqui pode gerir as permissões para os módulos do FUEL e depois atribui-las aos utilizadores.';


/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'A cache foi limpa.';
$lang['cache_instructions'] = 'Vai limpar a cache de páginas do Website.';
$lang['cache_no_clear'] = 'Não, não impar a cache';
$lang['cache_yes_clear'] = 'Sim, limpar cache';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'Não existem definições de módulos avançados para gerir.';
$lang['settings_manage'] = 'Gerir as definições dos seguintes módulos avançados:';
$lang['settings_problem'] = 'Existe um problema com as definições para o módulo avançado <strong>%1s</strong>. <br />Check that <strong>/fuel/modules/%1s/config/%1s.php</strong> config is configured to handle settings.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'Este não é um pedido CLI.';
$lang['error_not_in_dev_mode'] = 'Isto não vai executar em modo dev.';
$lang['error_missing_generation_files'] = 'Não existem ficheiros de produção para criar %1s.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'EDITAR';
$lang['table_action_delete'] = 'APAGAR';
$lang['table_action_view'] = 'VER';
$lang['click_to_toggle'] = 'click para mudar';
$lang['table_action_login_as'] = 'LOGIN AS';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Mostrar:';
$lang['label_language'] = 'Idioma:';
$lang['label_restore_from_prev'] = 'Restaurar uma versão anterior...';
$lang['label_select_another'] = 'Seleccione outro...';
$lang['label_select_one'] = 'Seleccione um...';
$lang['label_belongs_to'] = 'Pertence a';
$lang['label_select_a_language'] = 'Seleccione o idioma...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Lista';
$lang['btn_tree'] = 'Árvore';
$lang['btn_create'] = 'Criar';
$lang['btn_delete_multiple'] = 'Eliminar Multiplos';
$lang['btn_rearrange'] = 'Rearranjar';
$lang['btn_search'] = 'Pesquisar';
$lang['btn_view'] = 'Ver';
$lang['btn_publish'] = 'Publicar';
$lang['btn_unpublish'] = 'Despublicar';
$lang['btn_activate'] = 'Activar';
$lang['btn_deactivate'] = 'Desactivar';
$lang['btn_delete'] = 'Apagar';
$lang['btn_duplicate'] = 'Duplicar';
$lang['btn_replace'] = 'Substituir';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Enviar';
$lang['btn_export_data'] = 'Exportar Dados';

$lang['btn_no'] = 'Não';
$lang['btn_yes'] = 'Sim';

$lang['btn_no_upload'] = 'Não, não enviar';
$lang['btn_yes_upload'] = 'Sim, enviar';

$lang['btn_no_dont_delete'] = 'Não, não eliminar';
$lang['btn_yes_dont_delete'] = 'Sim,  eliminar';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Nome';
$lang['form_label_title'] = 'Tĩtulo';
$lang['form_label_label'] = 'Etiqueta';
$lang['form_label_location'] = 'Localização';
$lang['form_label_published'] = 'Publicado';
$lang['form_label_active'] = 'Activo';
$lang['form_label_precedence'] = 'Precedence';
$lang['form_label_date_added'] = 'Adicionado em';
$lang['form_label_last_updated'] = 'Última atualização a ';
$lang['form_label_file'] = 'Ficheiro';
$lang['form_label_value'] = 'Valor';
$lang['form_label_email'] = 'Email';
$lang['form_label_user_name'] = 'Nome do Utilizador';
$lang['form_label_first_name'] = 'Primeiro nome';
$lang['form_label_last_name'] = 'Último Nome';
$lang['form_label_super_admin'] = 'Super admin';
$lang['form_label_password'] = 'Password';
$lang['form_label_confirm_password'] = 'Confirme a password';
$lang['form_label_new_password'] = 'Nova password';
$lang['form_label_description'] = 'Descrição';
$lang['form_label_entry_date'] = 'Data de entrada';
$lang['form_label_message'] = 'Mensagem';
$lang['form_label_image'] = 'Imagem';
$lang['form_label_upload_image'] = 'Enviar imagem';
$lang['form_label_upload_images'] = 'Enviar imagens';
$lang['form_label_content'] = 'Conteúdo';
$lang['form_label_excerpt'] = 'Excerto';
$lang['form_label_permalink'] = 'Link permanente';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Link';
$lang['form_label_pdf'] = 'PDF';

$lang['form_label_group_id'] = 'Grupo';
$lang['form_label_or_select'] = 'OU seleccione';

$lang['form_enum_option_yes'] = 'Sim';
$lang['form_enum_option_no'] = 'Não';

$lang['required_text'] = 'Campos obrigatórios.';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'Este é o layout principal a ser usado no Website.';
$lang['layout_field_page_title'] = 'Título da Página';
$lang['layout_field_meta_description'] = 'Descrição';
$lang['layout_field_meta_keywords'] = 'Palavras-Chave';
$lang['layout_field_body'] = 'Corpo';
$lang['layout_field_heading'] = 'Cabeçalho';
$lang['layout_field_body_description'] = 'Conteúdo principal da página';
$lang['layout_field_body_class'] = 'Classe do Corpo';
$lang['layout_field_redirect_to'] = 'Redireccionar para';

$lang['layout_field_301_redirect_copy'] = 'Este layout vai fazer um redirecionamento 301 para outra página.';
$lang['layout_field_alias_copy'] = 'Este layout é similar ao redirecionmento 301 mas a localização da página não muda e  <br />o conteúdo da página especificada é usada para visualizar a página.';
$lang['layout_field_sitemap_xml_copy'] = 'Este layout é usado para gerar o mapa do Website. Para esta página aparecer, o ficheiro sitemap.xml tem de existir no servidor.';
$lang['layout_field_robots_txt_copy'] = 'Este layout é usado para gerar o ficheiro robots.txt. Para esta página aparecer, o ficheiro robots.txt tem de existir no servidor.';
$lang['layout_field_none_copy'] = 'Este layout é equivalente a não ter nenhum layout designado.';

$lang['layout_field_frequency'] = 'Frequência';
$lang['layout_field_frequency_always'] = 'sempre';
$lang['layout_field_frequency_hourly'] = 'hora a hora';
$lang['layout_field_frequency_daily'] = 'diário';
$lang['layout_field_frequency_weekly'] = 'semanalmente';
$lang['layout_field_frequency_monthly'] = 'mensalmente';
$lang['layout_field_frequency_yearly'] = 'anualmente';
$lang['layout_field_frequency_never'] = 'nunca';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'Duplo click para abrir';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; Primeiro';
$lang['pagination_last_link'] = 'Último &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = 'Editar';
$lang['action_create'] = 'Criar';
$lang['action_delete'] = 'Eliminar';
$lang['action_upload'] = 'Enviar';
$lang['action_replace'] = 'Substituir';

//$lang['import'] = 'Import';

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */