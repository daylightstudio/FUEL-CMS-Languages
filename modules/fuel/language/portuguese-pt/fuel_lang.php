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
$lang['error_missing_module'] = "You are missing the module %1s.";
$lang['error_invalid_login'] = 'Utilizador Inválido.';
$lang['error_max_attempts'] = 'Sorry, but your login information was incorrect and you are temporarily locked out. Please try again in %s seconds.';
$lang['error_empty_user_pwd'] = 'Please enter in a user name and password.';
$lang['error_pwd_reset'] = 'There was an error in resetting your password.';
$lang['error_invalid_email'] = 'The email address provided was not in the system.';
$lang['error_invalid_password_match'] = 'The passwords don\'t match.';
$lang['error_empty_email'] = 'Please enter in an email address.';
$lang['error_folder_not_writable'] = 'You must make the  %1s folder writable.';
$lang['error_invalid_folder'] = 'Invalid folder %1s';
$lang['error_file_already_exists'] = 'File %1s already exists.';
$lang['error_zip'] = 'There was an error creating the zipped file.';
$lang['error_no_permissions'] = 'You do not have permissions to complete this action.';
$lang['error_no_lib_permissions'] = 'You do not have permission to execute methods on the %1s class.';
$lang['error_page_layout_variable_conflict'] = 'There is an error with this layout because it either doesn\'t exist or contains one or more of the following reserved words: %1s';
$lang['error_no_curl_lib'] = 'You must have the curl php extension to use these tools.';
$lang['error_inline_page_edit'] = 'This variable must either be saved in the admin or edited in the associated views/_variables file.';
$lang['error_saving'] = 'There was an error saving.';
$lang['error_cannot_preview'] = 'There was an error in trying to preview this page.';
$lang['error_cannot_make_api_call'] = 'There was an error making the API call to %1s.';
$lang['error_sending_email'] = 'There was an error sending an email to %1s.';
$lang['error_upload'] = 'There was an error uploading the your file.';
$lang['error_create_nav_group'] = 'Please create a Navigation Group';
$lang['error_requires_string_value'] = 'The name field should be a string value';
$lang['error_missing_params'] = 'You are missing parameters to view this page';
$lang['error_invalid_method'] = 'Invalid method name';
$lang['error_curl_page'] = 'Error loading page with CURL';
$lang['error_class_property_does_not_exist'] = 'Class property %1s does not exist';
$lang['error_class_method_does_not_exist'] = 'Class method %1s does not exist';
$lang['error_could_not_create_folder'] = 'Could not create folder %1s';
$lang['error_could_not_create_file'] = 'Could not create file %1s';


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>It is highly recommend that you change your password from the default of <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'This item is not published.';
$lang['warn_not_active'] = 'This %1s is not active.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s logged in";
$lang['logged_out'] = "%s logged out";
$lang['dev_pwd_instructions'] = 'This site is currently in development and requires a password to view.';
$lang['login_forgot_pwd'] = 'Forgot password?';
$lang['login_reset_pwd'] = 'Reset à Password';
$lang['login_btn'] = 'Login';
$lang['logout_restore_original_user'] = 'Restore original user';


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Dashboard';
$lang['dashboard_intro'] = 'Bem-Vindo ao FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Latest Activity';
$lang['dashboard_hdr_latest_news'] = 'Latest FUEL News';
$lang['dashboard_hdr_modified'] = 'Recently Modified Pages';
$lang['dashboard_hdr_site_docs'] = 'Site Documentation';
$lang['dashboard_change_pwd'] = 'Alterar password';
$lang['dashboard_change_pwd_later'] = 'I\'ll change my password later';
$lang['dashboard_subscribe_rss'] = 'Subscribe to the RSS Feed';
$lang['dashboard_view_all_pages'] = 'Ver todas as páginas';
$lang['dashboard_view_all_activity'] = 'View all activity';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'O Meu Perfil';
$lang['profile_instructions'] = 'Change your profile information below:';


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
$lang['pwd_reset'] = 'An email to confirm your password reset is on its way.';
$lang['pwd_reset_subject'] = "FUEL admin password reset request";
$lang['pwd_reset_email'] = "Click the following link to confirm the reset of your FUEL password:\n%1s";
$lang['pwd_reset_subject_success'] = "FUEL admin password reset success";
$lang['pwd_reset_email_success'] = "Your FUEL password has been reset to %1s. To change your password, login to the FUEL CMS admin with this password and click on your login name in the upper right to access your profile information.";
$lang['pwd_reset_success'] = 'Your password was successfully reset and an email has been sent to you with the new password.';
$lang['cache_cleared'] = "Site cache cleared explicitly";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Dashboard';
$lang['module_pages'] = 'Páginas';
$lang['module_blocks'] = 'Blocks';
$lang['module_navigation'] = 'Navigation';
$lang['module_categories'] = 'Categorias';
$lang['module_tags'] = 'Tags';
$lang['module_assets'] = 'Assets';
$lang['module_sitevariables'] = 'Site Variables';
$lang['module_users'] = 'Utilizadores';
$lang['module_permissions'] = 'Permissões';
$lang['module_tools'] = 'Tools';
$lang['module_manage_cache'] = 'Page Cache';
$lang['module_manage_activity'] = 'Activity Log';
$lang['module_manage_settings'] = 'Settings';
$lang['module_generate'] = 'Generated';


$lang['section_site'] = 'Site';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Módulos';
$lang['section_manage'] = 'Gerir';
$lang['section_tools'] = 'Tools';
$lang['section_settings'] = 'Settings';
$lang['section_recently_viewed'] = 'Recently Viewed';
$lang['section_settings'] = 'Settings';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s item <em>%2s</em> created";
$lang['module_edited'] = "%1s item <em>%2s</em> edited";
$lang['module_deleted'] = "%1s item for <em>%2s</em> deleted";
$lang['module_multiple_deleted'] = "Multiple <em>%1s</em> deleted";
$lang['module_restored'] = "%1s item restored from archive";
$lang['module_instructions_default'] = "Here you can manage the %1s for your site.";
$lang['module_restored_success'] = 'Previous version successfully restored.';
$lang['module_replaced_success'] = 'The contents of this record were successfully replaced.';
$lang['module_incompatible'] = 'The version of this module is not compatible with the install FUEL version of '.FUEL_VERSION;

$lang['cannot_determine_module'] = "Cannot determine module.";
$lang['incorrect_route_to_module'] = "Incorrect route to access this module.";
$lang['data_saved'] = 'Data has been saved.';
$lang['data_deleted'] = 'Data has been deleted.';
$lang['data_not_deleted'] = 'Some or all data couldn\'t be deleted.';
$lang['no_data'] = 'No data to display.';
$lang['no_preview_path'] = 'There is no preview path assigned to this module.';
$lang['delete_item_message'] = 'You are about to delete the item:';
$lang['replace_item_message'] = 'Select a record from the list below that you would like to replace. Replacing will transfer the data from one record to the other and then delete the old record.';

// command line
$lang['module_install'] = "The '%1s' module has successfully been installed.\n";
$lang['module_install_error'] = "There was an error installing the '%1s' module.\n";

$msg = "The module %1s has been uninstalled in FUEL.\n\n";
$msg .= "However, removing a module from GIT is a little more work that we haven't automated yet. However, the below steps should help.\n\n";
$msg .= "1. Delete the relevant section from the .gitmodules file.\n";
$msg .= "2. Delete the relevant section from .git/config.\n";
$msg .= "3. Run git rm --cached %2s (no trailing slash).\n";
$msg .= "4. Commit and delete the now untracked submodule files.\n";
$lang['module_uninstall'] = $msg;


/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "You have successfully migrated to version %s.\n";
$lang['migrate_nothing_todo'] = "No migrations were necessary.\n";


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'The location specified has the following routes already specified in the routes file (%1s):';
$lang['page_controller_assigned'] = 'There is a controller method already assigned to this page.';
$lang['page_updated_view'] = 'There is an updated view file located at <strong>%1s</strong>. Would you like to upload it into the body of your page (if available)?';
$lang['page_not_published'] = 'This page is not published.';

$lang['page_no_upload'] = 'No, don\'t upload';
$lang['page_yes_upload'] = 'Sim, enviar';
$lang['page_information'] = 'Page Information';
$lang['page_layout_vars'] = 'Layout Variables';

$lang['pages_instructions'] = 'Here you can manage the data associated with the page.';
$lang['pages_associated_navigation'] = 'Associated Navigation';
$lang['pages_success_upload'] = 'The page view was successfully uploaded.';
$lang['pages_upload_instructions'] = 'Select a view file and upload to a page below.';
$lang['pages_select_action'] = 'Seleccione';

// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Cache';
$lang['pages_last_updated'] = 'Last updated %1s';
$lang['pages_last_updated_by'] = 'Last updated %1s by %2s';
$lang['pages_not_published'] = 'This page is not published.';
$lang['pages_default_location'] = 'example: company/about';

$lang['form_label_page'] = 'Página';
$lang['form_label_target'] = 'Destino';
$lang['form_label_class'] = 'Classe';

$lang['navigation_related'] = 'Create navigation';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'There is an updated view file located at <strong>%1s</strong>. Would you like to import?';
$lang['blocks_success_upload'] = 'The block view was successfully uploaded.';
$lang['blocks_upload_instructions'] = 'Select a block view file and upload it below.';

$lang['form_label_view'] = 'Ver';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Import Navigation';
$lang['navigation_instructions'] = 'Here you create and edit the top menu items of the page.';
$lang['navigation_import_instructions'] = 'Select a navigation group and upload a file to import below. The file should contain the PHP array variable assigned in the variable field below (e.g. <strong>$nav</strong>). For a reference of the array format, please consult the <a href="http://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank">user guide</a>.';
$lang['navigation_success_upload'] = 'The navigation was successfully uploaded.';
$lang['form_label_navigation_group'] = 'Navigation Group:';
$lang['form_label_nav_key'] = 'Nav Key';
$lang['form_label_parent_id'] = 'Parent';
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
$lang['assets_instructions'] = 'Here you can upload new assets. Select overwrite if you would like to overwrite a file with the same name.';
$lang['form_label_preview/kb'] = 'Preview/kb';
$lang['form_label_link'] = 'Link';
$lang['form_label_asset_folder'] = 'Asset folder';
$lang['form_label_new_file_name'] = 'New file name';
$lang['form_label_subfolder'] = 'Subfolder';
$lang['form_label_overwrite'] = 'Overwrite';
$lang['form_label_create_thumb'] = 'Create thumb';
$lang['form_label_resize_method'] = 'Resize method';
$lang['form_label_maintain_ratio'] = 'maintain ratio';
$lang['form_label_resize_and_crop'] = 'crop if needed';
$lang['form_label_overwrite'] = 'Overwrite';
$lang['form_label_width'] = 'Width';
$lang['form_label_height'] = 'Height';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'Align';
$lang['form_label_master_dim'] = 'Master dimension';
$lang['form_label_unzip'] = 'Unzip zip files';
$lang['assets_upload_action'] = 'Enviar';
$lang['assets_select_action'] = 'Seleccionar';
$lang['assets_comment_asset_folder'] = 'The asset folder that it will be uploaded to';
$lang['assets_comment_filename'] = 'If no name is provided, the filename that already exists will be used.';
$lang['assets_comment_subfolder'] = 'Will attempt to create a new subfolder to place your asset.';
$lang['assets_comment_overwrite'] = 'Overwrite a file with the same name. If unchecked, a new file will be uploaded with a version number appended to the end of it.';
$lang['assets_heading_general'] = 'General';
$lang['assets_heading_image_specific'] = 'Image Specific';
$lang['assets_comment_thumb'] = 'Create a thumbnail of the image.';
$lang['assets_comment_resize_method'] = 'Maintains the aspect ratio or resizes and crops the image to fit the provided dimensions. If "Create thumbnail" is selected, it will only effect the size of the thumbnail.';
$lang['assets_comment_width'] = 'Will change the width of an image to the desired amount. If "Create thumbnail" is selected, then it will only effect the size of the thumbnail.';
$lang['assets_comment_height'] = 'Will change the height of an image to the desired amount. If "Create thumbnail" is selected, it will only effect the size of the thumbnail.';
$lang['assets_comment_master_dim'] = 'Specifies the master dimension to use for resizing. If the source image size does not allow perfect resizing to those dimensions, this setting determines which axis should be used as the hard value. "auto" sets the axis automatically based on whether the image is taller then wider, or vice versa.';
$lang['assets_comment_unzip'] = 'Unzips a zip file';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Here you can manage the site variables for your website.';
$lang['sitevariables_scope'] = 'Scope';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Here you can manage the data for users.';
$lang['permissions_heading'] = 'Permissões';
$lang['form_label_language'] = 'Idioma';
$lang['form_label_send_email'] = 'Enviar Email';
$lang['btn_send_email'] = 'Enviar Email';
$lang['new_user_email_subject'] = 'Your FUEL CMS account has been created';
$lang['new_user_email'] = 'Your FUEL CMS account has been created. You can login with the following information:
Login URL:'.site_url('fuel/login').'
Nome de Utilizador: %1s
Password: %2s';
$lang['new_user_created_notification'] = 'The user information was successfully saved and a notification was sent to %1s.';
$lang['error_cannot_deactivate_yourself'] = 'You cannot deactivate yourself.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Here you can manage the permissions for FUEL modules and later assign them to users.';


/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'A cache foi limpa.';
$lang['cache_instructions'] = 'You are about to clear the page cache of the site.';
$lang['cache_no_clear'] = 'Não, não impar a cache';
$lang['cache_yes_clear'] = 'Sim, limpar cache';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'There are no settings for any advanced modules to manage.';
$lang['settings_manage'] = 'Manage the settings for the following advanced modules:';
$lang['settings_problem'] = 'There was a problem with the settings for the advanced module <strong>%1s</strong>. <br />Check that <strong>/fuel/modules/%1s/config/%1s.php</strong> config is configured to handle settings.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'This is not a CLI request.';
$lang['error_not_in_dev_mode'] = 'Isto não vai executar em modo dev.';
$lang['error_missing_generation_files'] = 'There are no generation files to create for %1s.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'EDITAR';
$lang['table_action_delete'] = 'APAGAR';
$lang['table_action_view'] = 'VER';
$lang['click_to_toggle'] = 'click to toggle';
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
$lang['form_label_label'] = 'Label';
$lang['form_label_location'] = 'Localização';
$lang['form_label_published'] = 'Publicado';
$lang['form_label_active'] = 'Activo';
$lang['form_label_precedence'] = 'Precedence';
$lang['form_label_date_added'] = 'Date added';
$lang['form_label_last_updated'] = 'Last updated';
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
$lang['form_label_entry_date'] = 'Entry date';
$lang['form_label_message'] = 'Mensagem';
$lang['form_label_image'] = 'Imagem';
$lang['form_label_upload_image'] = 'Enviar imagem';
$lang['form_label_upload_images'] = 'Enviar imagens';
$lang['form_label_content'] = 'Conteúdo';
$lang['form_label_excerpt'] = 'Excerpt';
$lang['form_label_permalink'] = 'Permalink';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Link';
$lang['form_label_pdf'] = 'PDF';

$lang['form_label_group_id'] = 'Grupo';
$lang['form_label_or_select'] = 'OU seleccione';

$lang['form_enum_option_yes'] = 'sim';
$lang['form_enum_option_no'] = 'não';

$lang['required_text'] = 'campos obrigatórios';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'This is the main layout to be used for your site.';
$lang['layout_field_page_title'] = 'Título da Página';
$lang['layout_field_meta_description'] = 'Meta description';
$lang['layout_field_meta_keywords'] = 'Meta keywords';
$lang['layout_field_body'] = 'Body';
$lang['layout_field_heading'] = 'Heading';
$lang['layout_field_body_description'] = 'Main content of the page';
$lang['layout_field_body_class'] = 'Body class';
$lang['layout_field_redirect_to'] = 'Redireccionar para';

$lang['layout_field_301_redirect_copy'] = 'This layout will do a 301 redirect to another page.';
$lang['layout_field_alias_copy'] = 'This layout is similar to a 301 redirect but the location of the page does not change and <br />the page content from the specifiec location is used to render the page.';
$lang['layout_field_sitemap_xml_copy'] = 'This layout is used to generate a sitemap. For this page to appear, a sitemap.xml must not exist on the server.';
$lang['layout_field_robots_txt_copy'] = 'This layout is used to generate a robots.txt file. For this page to appear, a robots.txt must not exist on the server.';
$lang['layout_field_none_copy'] = 'This layout is the equivalent of having no layout assigned.';

$lang['layout_field_frequency'] = 'Frequência';
$lang['layout_field_frequency_always'] = 'sempre';
$lang['layout_field_frequency_hourly'] = 'hora a hora';
$lang['layout_field_frequency_daily'] = 'diário';
$lang['layout_field_frequency_weekly'] = 'semnalmente';
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