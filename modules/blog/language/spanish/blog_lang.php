<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Artículos';
$lang['module_blog_categories'] = 'Categorías';
$lang['module_blog_comments'] = 'Comentarios';
$lang['module_blog_links'] = 'Enlaces';
$lang['module_blog_authors'] = 'Autores';
$lang['module_blog_settings'] = 'Configuración';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Por favor, introduce un comentario.';
$lang['blog_error_invalid_comment_email'] = 'Por favor, introduce una dirección de correo electrónico válida.';
$lang['blog_error_comment_site_submit'] = 'Los comentarios deben ser realizados mediante el formulario en el sitio web.';
$lang['blog_error_comment_already_submitted'] = 'Este comentario ya ha sido enviado.';
$lang['blog_error_consecutive_comments'] = 'Por favor, espera para enviar varios comentarios.';
$lang['blog_error_delete_uncategorized'] = 'No puedes eliminar la categoría "Sin categorizar".';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Archivos';
$lang['blog_authors_list_page_title'] = 'Autores';
$lang['blog_author_posts_page_title'] = '%s Artículos';
$lang['blog_categories_page_title'] = 'Categorías';
$lang['blog_search_page_title'] = '%s Resultados de la búsqueda';

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Artículos %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; Página anterior';
$lang['blog_next_page'] = 'Siguiente página &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


$lang['blog_error_no_posts_to_comment'] = 'No hay artículos que comentar.';
$lang['blog_post_is_not_published'] = 'El artículo asociado a este comentario no ha sido publicado, así que no se enviarán notificaciones en las respuestas.';
$lang['blog_comment_notify_option1'] = 'Todos';
$lang['blog_comment_notify_option2'] = 'Autor del comentario';
$lang['blog_comment_notify_option3'] = 'Nadie';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = 'Formateado';
$lang['form_label_author'] = 'Autor';
$lang['form_label_sticky'] = 'Fijo';
$lang['form_label_allow_comments'] = 'Permitir comentarios';
$lang['form_label_categories'] = 'Categorías';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Se ha añadido un comentario.";
$lang['blog_comment_monitor_msg']= "Se ha añadido un comentario en tu artículo del blog. Para revisarlo, identifícate en FUEL:";
$lang['blog_comment_reply_subject']= "%1s Respuesta al comentario del blog";
$lang['blog_comment_reply_msg']= "%1s ha contestado a tu comentario en el artículo %2s.";

$lang['blog_captcha_text'] = "Introduce el texto que ves en la imagen de abajo. <br />Si no puedes leer el texto prueba a refrescar la página.";

$lang['blog_comment_is_spam'] = "El comentario realizado no se puede enviar porque ha sido marcado como SPAM.";
$lang['blog_error_captcha_mismatch'] = "El texto que has introducido no se corresponde con el de la imagen.";

$lang['blog_email_flagged_as_spam'] = '¡¡¡MARCADO COMO SPAM!!!';
$lang['blog_email_published'] = 'Publicado';
$lang['blog_email_author_name'] = 'Nombre del autor';
$lang['blog_email_author_email'] = 'Correo electrónico del autor';
$lang['blog_email_author_website'] = 'Sitio web';
$lang['blog_email_author_ip'] = 'IP del autor';
$lang['blog_email_content'] = 'Contenido';
$lang['form_label_post_title'] = 'Título del artículo';
$lang['form_label_comment'] = 'Comentario';
$lang['form_label_comment_author_name'] = 'Nombre del autor del comentario';
$lang['form_label_is_spam'] = 'Es spam';
$lang['form_label_post_published'] = 'Artículo publicado';
$lang['form_label_date_submitted'] = 'Fecha enviada';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Respuestas';
$lang['form_label_reply'] = 'Respuesta';
$lang['form_label_commentor'] = 'Autor del comentario';
$lang['form_label_reply_notify'] = 'Notificar';
$lang['form_label_author_ip'] = 'Dirección IP del autor';
$lang['form_label_is_spam'] = 'Es SPAM';
$lang['form_label_author_ip'] = 'Dirección IP del autor';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Localización del tema';
$lang['form_label_theme_layout'] = 'Layout del tema';
$lang['form_label_theme_module'] = 'Módulo del tema';
$lang['form_label_use_cache'] = 'Usar caché';
$lang['form_label_allow_comments'] = 'Permitir comentarios';
$lang['form_label_monitor_comments'] = 'Monitorizar comentarios';
$lang['form_label_use_captchas'] = 'Usar Captchas';
$lang['form_label_save_spam'] = 'Guardar Spam';
$lang['form_label_akismet_api_key'] = 'API Key de Akismet';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Tiempo de espera entre envíos de comentarios';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (en segundos)';
$lang['form_label_comments_time_limit'] = 'Permitir comentarios durante';
$lang['form_label_comments_time_limit_after_html'] = ' después de la fecha del artículo (en días)';
$lang['form_label_cache_ttl'] = 'Guardar caché durante';
$lang['form_label_asset_upload_path'] = 'Ruta para la subida de assets';
$lang['form_label_per_page'] = 'Por página';

/* End of file blog_lang.php */
/* Location: ./modules/blog/language/spanish/blog_lang.php */