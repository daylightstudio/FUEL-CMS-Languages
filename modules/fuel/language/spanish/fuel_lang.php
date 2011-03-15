<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Identificado como:';
$lang['logout'] = 'Cerrar sesión';
$lang['fuel_developed_by'] = 'FUEL CMS version %1s está desarrollado por <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> y construído sobre el framework <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a>.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. Todos los derechos reservados.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "No tienes acceso a esta página.";
$lang['error_missing_module'] = "Estás perdiendo el módulo %1s.";
$lang['error_invalid_login'] = 'Identificación inválida.';
$lang['error_max_attempts'] = 'Disculpa, pero tus credenciales de identificación son incorrectos y estás temporalmente bloqueado. Por favor, inténtalo en %s segundos.';
$lang['error_empty_user_pwd'] = 'Por favor, introduce tu nombre de usuario y contraseña.';
$lang['error_pwd_reset'] = 'Hubo un error al reestablecer el formulario.';
$lang['error_invalid_email'] = 'La dirección de correo electrónico proporcionada no se encuentra en el sistema.';
$lang['error_invalid_password_match'] = 'Las contraseñas no coinciden';
$lang['error_empty_email'] = 'Por favor, introduce una dirección de correo electrónico.';
$lang['error_no_permissions'] = 'No tienes permisos suficientes para completar esta acción.';
$lang['error_page_layout_variable_conflict'] = 'Hay un error con este layout porque contiene una o mas de las siguientes palabras reservadas: %1s';
$lang['error_invalid_export_dir'] = 'El directorio %1s no es un directorio válido de exportación. Asegúrate de que tiene permisos de escritura.';
$lang['error_exporting_to_directory'] = 'Hubo un error escribiendo en uno o más directorios. Revisa el mensaje de abajo para más información.';
$lang['error_cache_folder_not_writable'] = 'Debes proporcionar permisos de escritura a la carpeta de caché %1s.';
$lang['error_exporting_view'] = 'Hubo un error creando el fichero de vista asociado para la localización %1s porque la variable con el nombre <strong><em>%2s</em></strong> no existe.';
$lang['error_no_curl_lib'] = 'Debes tener la extensión curl php para usar estas herramientas.';
$lang['error_inline_page_edit'] = 'Esta variable debe ser editada en el fichero asociado en views/_variables.';
$lang['error_saving'] = 'Hubo un error guardando.';
$lang['error_cannot_preview'] = 'Hubo un error intentando previsualizar esta página.';
$lang['error_cannot_make_api_call'] = 'Hubo un error realizando una llamada a la API a %1s.';
$lang['error_sending_email'] = 'Hubo un error enviando un correo electrónico a %1s.';
$lang['error_upload'] = 'Hubo un error subiendo el fichero.';
$lang['error_create_nav_group'] = 'Por favor, crea un grupo de navegación';
$lang['error_requires_string_value'] = 'El nombre del fichero debe ser una cadena de texto';
$lang['error_missing_params'] = 'Te faltan parámetros para ver esta página';


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>Es altamente recomendado que cambies tu contraseña por defecto de <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Este elemento no está publicado.';
$lang['warn_not_active'] = 'Este %1s no está activo.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s logueado";
$lang['logged_out'] = "%s deslogueado";
$lang['dev_pwd_instructions'] = 'Este sitio está en desarrollo y necesita de una contraseña para ser visto.';
$lang['login_forgot_pwd'] = '¿Olvidaste la contraseña?';
$lang['login_reset_pwd'] = 'Reestablecer contraseña';
$lang['login_btn'] = 'Identificarme';


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Panel de intrumentos';
$lang['dashboard_intro'] = 'Bienvenido a FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Actividad reciente';
$lang['dashboard_hdr_latest_news'] = 'Últimas noticias de FUEL';
$lang['dashboard_hdr_modified'] = 'Páginas modificadas recientemente';
$lang['dashboard_hdr_site_docs'] = 'Documentación del sitio';
$lang['dashboard_change_pwd'] = 'Cambiar contraseña';
$lang['dashboard_change_pwd_later'] = 'Cambiaré mi contraseña más tarde';
$lang['dashboard_subscribe_rss'] = 'Suscribirse al hilo RSS';
$lang['dashboard_view_all_pages'] = 'Ver todas las páginas';
$lang['dashboard_view_all_activity'] = 'Ver toda la actividad';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Mi perfil';
$lang['profile_instructions'] = 'Cambia tu información de perfil más abajo:';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/

$lang['pwd_reset'] = 'Se te ha enviado un correo electrónico para confirmar tu contraseña.';
$lang['pwd_reset_subject'] = "Solicitud de reestablecimiento de contraseña de administrador de FUEL";
$lang['pwd_reset_email'] = "Sigue el siguiente enlace para confirmar el reestablecimiento de tu contraseña de FUEL:\n%1s";
$lang['pwd_reset_subject_success'] = "Contraseña de administrador de FUEL reestablecida con éxito";
$lang['pwd_reset_email_success'] = "Tu contraseña de FUEL ha sido reestablecida a %1s. Para cambiarla, entra en el panel de administración de FUEL con esta contraseña y pincha en tu nombre de usuario en la zona superior derecha para acceder a la información de tu perfil";
$lang['pwd_reset_success'] = 'Tu contraseña se ha reestablecido con éxito y se te ha enviado un correo electrónico con la nueva contraseña.';
$lang['cache_cleared'] = "El caché del sitio ha sido borrado explícitamente";
$lang['module_restored_success'] = 'La versión anterior ha sido reestablecida con éxito.';


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Panel de instrumentos';
$lang['module_pages'] = 'Páginas';
$lang['module_blocks'] = 'Bloques';
$lang['module_navigation'] = 'Navegación';
$lang['module_assets'] = 'Assets';
$lang['module_sitevariables'] = 'Variables del sitio';
$lang['module_users'] = 'Usuarios';
$lang['module_permissions'] = 'Permisos';
$lang['module_manage_cache'] = 'Caché de la página';
$lang['module_manage_activity'] = 'Log de la actividad';

$lang['section_site'] = 'Sitio';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Módulos';
$lang['section_manage'] = 'Administrar';
$lang['section_tools'] = 'Herramientas';
$lang['section_recently_viewed'] = 'Visto recientemente';

/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "El elemento %1s <em>%2s</em> ha sido creado";
$lang['module_edited'] = "El elemento %1s <em>%2s</em> ha sido editado";
$lang['module_deleted'] = "El elemento %1s para <em>%2s</em> ha sido borrado";
$lang['module_restored'] = "El elemento %1s ha sido restaurado del archivo";
$lang['module_instructions_default'] = "Aquí puedes administrar %1s para tu sitio.";

$lang['cannot_determine_module'] = "No puedo determinar el módulo.";
$lang['incorrect_route_to_module'] = "Ruta incorrecta para acceder al módulo.";
$lang['data_saved'] = 'Los datos han sido guardados.';
$lang['data_deleted'] = 'Los datos han sido borrados.';
$lang['no_data'] = 'No hay datos para mostrar.';
$lang['no_preview_path'] = 'No hay ruta de previsualización asignada a este módulo.';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'La localización especificada tiene las siguientes rutas también especificadas en el fichero de rutas (%1s):';
$lang['page_controller_assigned'] = 'Hay un método del controlador también asignado a esta página.';
$lang['page_updated_view'] = 'Hay un fichero de vista actualizado, localizado en <strong>%1s</strong>. Quieres importarlo al cuerpo de tu página (si está disponible)?';
$lang['page_not_published'] = 'Esta página no está publicada.';
$lang['page_no_import'] = 'No, no importar';
$lang['page_yes_import'] = 'Sí, importar';
$lang['page_information'] = 'Información de la página';
$lang['page_layout_vars'] = 'Variables de layout';

$lang['pages_instructions'] = 'Aquí puedes administrar los datos asociados a la página.';
$lang['pages_associated_navigation'] = 'Navegación asociada';
$lang['pages_success_upload'] = 'La vista de página se subió correctamente.';
$lang['pages_upload_instructions'] = 'Selecciona un fichero de vista y súbelo a una de las páginas de más abajo.';

// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Caché';
$lang['pages_last_updated_by'] = 'Ultima actualización %1s por %2s';
$lang['pages_not_published'] = 'Esta página no está publicada.';
$lang['pages_default_location'] = 'ejemplo: company/about';


/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Hay un fichero de vista actualizado localizado en <strong>%1s</strong>. ¿Quieres importarlo?';
$lang['form_label_view'] = 'Vista';
$lang['blocks_success_upload'] = 'The block view was successfully uploaded.';
$lang['blocks_upload_instructions'] = 'Selecciona un fichero de vista de bloque y súbelo más abajo.';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_instructions'] = 'Aquí puedes crear y editar los elementos del menú superior de la página.';
$lang['navigation_import_instructions'] = 'Select a navigation group and upload a file to import below. The file should contain the PHP array variable <strong>$nav</strong>. For a reference of the array format, please consult the <a href="http://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank">user guide</a>';
$lang['navigation_import_instructions'] = 'Selecciona un grupo de navegación y sube un fichero de importación más abajo. El fichero debe contener la variable de array PHP <strong>$nav</strong>. Para referencia sobre el formato de array, por favor, consulta la <a href="http://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank">guía de usuario</a>';
$lang['navigation_success_upload'] = 'La navegación ha sido subida correctamente.';
$lang['form_label_navigation_group'] = 'Grupo de navegación';
$lang['form_label_nav_key'] = 'Clave de navegación';
$lang['form_label_parent_id'] = 'Padre';
$lang['form_label_attributes'] = 'Atributos';
$lang['form_label_selected'] = 'Seleccionado';
$lang['form_label_hidden'] = 'Oculto';

// for upload form
$lang['form_label_clear_first'] = 'Borrar primero';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Aquí puedes subir nuevos assets. Selecciona sobreescribir si deseas sobreescribir ficheros con el mismo nombre.';
$lang['form_label_preview/kb'] = 'Previsualizar/kb';
$lang['form_label_link'] = 'Enlace';
$lang['form_label_asset_folder'] = 'Carpeta de assets';
$lang['form_label_new_file_name'] = 'Nombre del nuevo fichero';
$lang['form_label_subfolder'] = 'Subfichero';
$lang['form_label_overwrite'] = 'Sobreescribir';
$lang['assets_upload_action'] = 'Subir';


/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Aquí puedes administrar las variables de sitio para tu sitio web.';
$lang['sitevariables_scope'] = 'Ámbito de aplicación';

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Aquí puedes administrar los datos de los usuarios.';
$lang['permissions_heading'] = 'Permisos';
$lang['form_label_language'] = 'Idioma';
$lang['form_label_send_email'] = 'Enviar correo electrónico';
$lang['btn_send_email'] = 'Enviar correo';
$lang['new_user_email_subject'] = 'Tu cuenta de FUEL CMS ha sido creada';
$lang['new_user_email'] = 'Tu cuenta de FUEL CMS ha sido creada. Puedes identificarte con la siguiente información:
URL de identificación:'.site_url('fuel/login').'
Nombre de usuario: %1s
Contraseña: %2s';
$lang['new_user_created_notification'] = 'Se ha creado un nuevo usuario y se ha enviado una notificación a %1s.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Aquí puedes administrar los servicios para los móduloes de FUEL y asignarlos posteriormente a los usuarios.';

// permissions
$lang['perm_assets'] = 'Assets';
$lang['perm_blocks'] = 'Administrar bloques';
$lang['perm_blog/categories'] = 'Categorías del blog';
$lang['perm_blog/comments'] = 'Comentarios del blog';
$lang['perm_blog/links'] = 'Enlaces del blog';
$lang['perm_blog/posts'] = 'Artículos del blog';
$lang['perm_blog/settings'] = 'Configuración del blog';
$lang['perm_blog/users'] = 'Autores del blog';
$lang['perm_google_analytics'] = 'Google Analytics';
$lang['perm_manage'] = 'Ver la página del panel de instrumentos';
$lang['perm_manage/activity'] = 'Ver los logs de actividad';
$lang['perm_manage/cache'] = 'Administrar el caché de página';
$lang['perm_myPHPadmin'] = 'myPHPadmin';
$lang['perm_navigation'] = 'Administrar navegación';
$lang['perm_pages'] = 'Administrar páginas';
$lang['perm_pages_delete'] = 'Posibilidad de borrar páginas';
$lang['perm_pages_publish'] = 'Posibilidad de publicar páginas';
$lang['perm_permissions'] = 'Administrar permisos';
$lang['perm_projects'] = 'Proyectos';
$lang['perm_projects_delete'] = 'Borrar proyectos';
$lang['perm_projects_publish'] = 'Publicar proyectos';
$lang['perm_quotes'] = 'Comillas';
$lang['perm_site_docs'] = 'Documentación del sitio';
$lang['perm_sitevariables'] = 'Variables de sitio';
$lang['perm_tools'] = 'Administrar herramientas';
$lang['perm_tools/backup'] = 'Administrar copia de seguridad de la base de datos';
$lang['perm_tools/cronjobs'] = 'Tareas programadas';
$lang['perm_tools/seo'] = 'Análisis de páginas';
$lang['perm_tools/seo/google_keywords'] = 'Google Keywords';
$lang['perm_tools/tester'] = 'Módulo de pruebas';
$lang['perm_tools/user_guide'] = 'Acceder a la guía de usuario';
$lang['perm_tools/validate'] = 'Validar';
$lang['perm_users'] = 'Administrar usuarios';


/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_instructions'] = 'Estás a punto de limpiar el caché de página del sitio.';
$lang['cache_no_clear'] = 'No, no limpiar caché';
$lang['cache_yes_clear'] = 'Sí, limpiar caché';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'EDITAR';
$lang['table_action_delete'] = 'BORRAR';
$lang['table_action_view'] = 'VER';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Mostrar:';
$lang['label_restore_from_prev'] = 'Restaurar de versión previa...';
$lang['label_select_another'] = 'Seleccionar otro...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Lista';
$lang['btn_tree'] = 'Árbol';
$lang['btn_create'] = 'Crear';
$lang['btn_delete_multiple'] = 'Borrado múltiple';
$lang['btn_rearrange'] = 'Reordenar';
$lang['btn_search'] = 'Buscar';
$lang['btn_view'] = 'Ver';
$lang['btn_publish'] = 'Publicar';
$lang['btn_unpublish'] = 'Despublicar';
$lang['btn_activate'] = 'Activar';
$lang['btn_deactivate'] = 'Desactivar';
$lang['btn_delete'] = 'Borrar';
$lang['btn_duplicate'] = 'Duplicar';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Subir';

$lang['btn_no'] = 'No';
$lang['btn_yes'] = 'Sí';

$lang['btn_no_upload'] = 'No, no subirlo';
$lang['btn_yes_upload'] = 'Sí, subirlo';

$lang['btn_no_dont_delete'] = 'No, no borrarlo';
$lang['btn_yes_dont_delete'] = 'Sí, borrarlo';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Nombre';
$lang['form_label_title'] = 'Título';
$lang['form_label_label'] = 'Etiqueta';
$lang['form_label_location'] = 'Localización';
$lang['form_label_published'] = 'Publicado';
$lang['form_label_active'] = 'Activo';
$lang['form_label_precedence'] = 'Precedencia';
$lang['form_label_date_added'] = 'Fecha de creación';
$lang['form_label_last_updated'] = 'Última actualización';
$lang['form_label_file'] = 'Fichero';
$lang['form_label_value'] = 'Valor';
$lang['form_label_email'] = 'Correo electrónico';
$lang['form_label_user_name'] = 'Nombre de usuario';
$lang['form_label_first_name'] = 'Nombre';
$lang['form_label_last_name'] = 'Apellidos';
$lang['form_label_super_admin'] = 'Super Administrador';
$lang['form_label_password'] = 'Contraseña';
$lang['form_label_confirm_password'] = 'Confirmar Contraseña';
$lang['form_label_new_password'] = 'Nueva contraseña';
$lang['form_label_description'] = 'Descripción';
$lang['form_label_entry_date'] = 'Fecha de la entrada';
$lang['form_label_message'] = 'Mensaje';
$lang['form_label_image'] = 'Subir imagen';
$lang['form_label_upload_image'] = 'Subir imagen';
$lang['form_label_upload_images'] = 'Subir imágenes';
$lang['form_label_content'] = 'Contenido';
$lang['form_label_excerpt'] = 'Enradilla';
$lang['form_label_permalink'] = 'Enlace permanente';
$lang['form_label_slug'] = 'URL amigable';
$lang['form_label_url'] = 'URL';

$lang['form_label_group_id'] = 'Grupo';
$lang['form_enum_option_yes'] = 'sí';
$lang['form_enum_option_no'] = 'no';

$lang['required_text'] = 'campos requeridos';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_fiel_main_copy'] = 'Este es el layout principal para ser usado en tu sitio.';
$lang['layout_field_page_title'] = 'Título de la página';
$lang['layout_field_meta_description'] = 'Meta description';
$lang['layout_field_meta_keywords'] = 'Meta keywords';
$lang['layout_field_body'] = 'Cuerpo';
$lang['layout_field_body_description'] = 'Contenido principal de la página';
$lang['layout_field_body_class'] = 'Clase CSS para body>';
$lang['layout_field_redirect_to'] = 'Redirigir a';

$lang['layout_field_301_redirect_copy'] = 'Este layout hará una redirección 301 a una página.';
$lang['layout_field_sitemap_xml_copy'] = 'Este layout será usado para generar un sitemap.';
$lang['layout_field_none_copy'] = 'Este layout es el equivalente a no tener ninguno asignado.';

$lang['layout_field_main_copy'] = 'Este es el layout principal para ser usado en tu sitio.';
$lang['layout_field_frequency'] = 'Frecuencia';
$lang['layout_field_frequency_always'] = 'siempre';
$lang['layout_field_frequency_hourly'] = 'a la hora';
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
$lang['action_create'] = 'Crear';


// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/spanish/fuel_lang.php */