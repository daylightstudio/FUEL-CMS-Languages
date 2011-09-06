<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Artigos';
$lang['module_blog_categories'] = 'Categorias';
$lang['module_blog_comments'] = 'Comentários';
$lang['module_blog_links'] = 'Links';
$lang['module_blog_authors'] = 'Autores';
$lang['module_blog_settings'] = 'Configuração';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Por favor, digite seu comentário.';
$lang['blog_error_invalid_comment_email'] = 'Por favor, digite um endereço de e-mail válido.';
$lang['blog_error_comment_site_submit'] = 'Los comentarios deben ser realizados mediante el formulario en el sitio web.';
$lang['blog_error_comment_already_submitted'] = 'Este comentário já foi enviado.';
$lang['blog_error_consecutive_comments'] = 'Por favor, aguarde para enviar vários comentários.';
$lang['blog_error_delete_uncategorized'] = 'Não pode eliminar a categoria "Sem reorganizar".';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Arquivos';
$lang['blog_authors_list_page_title'] = 'Autores';
$lang['blog_author_posts_page_title'] = '%s Artigos';
$lang['blog_categories_page_title'] = 'Categorias';
$lang['blog_search_page_title'] = '%s Resultados da pesquisa';

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Artigos %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; Página anterior';
$lang['blog_next_page'] = 'Próxima página &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


$lang['blog_error_no_posts_to_comment'] = 'Não há artigos para comentar.';
$lang['blog_post_is_not_published'] = 'O artigo associado com este comentário não foi publicado, então não serão enviadas notificações de respostas.';
$lang['blog_comment_notify_option1'] = 'Todos';
$lang['blog_comment_notify_option2'] = 'Autor deste comentário';
$lang['blog_comment_notify_option3'] = 'Ninguém';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = 'Formatado';
$lang['form_label_author'] = 'Autor';
$lang['form_label_sticky'] = 'Fixo';
$lang['form_label_allow_comments'] = 'Permitir comentários';
$lang['form_label_categories'] = 'Categorias';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Adicionou um comentário.";
$lang['blog_comment_monitor_msg']= "Adicionou um comentário em seu blog. Para rever, faça o login FUEL:";
$lang['blog_comment_reply_subject']= "%1s Resposta ao comentário do blog";
$lang['blog_comment_reply_msg']= "%1s respondeu ao seu comentário sobre o artigo %2s.";

$lang['blog_captcha_text'] = "Digite o texto que você vê na imagem abaixo. <br />Se você não consegue ler o texto atualize a página.";

$lang['blog_comment_is_spam'] = "O comentário não pode ser enviado porque foi marcado como SPAM.";
$lang['blog_error_captcha_mismatch'] = "O texto digitado não corresponde à imagem.";

$lang['blog_email_flagged_as_spam'] = '¡¡¡MARCADO COMO SPAM!!!';
$lang['blog_email_published'] = 'Publicado';
$lang['blog_email_author_name'] = 'Nome do autor';
$lang['blog_email_author_email'] = 'E-mail do autor';
$lang['blog_email_author_website'] = 'Website';
$lang['blog_email_author_ip'] = 'IP do autor';
$lang['blog_email_content'] = 'Conteúdo';
$lang['form_label_post_title'] = 'Título do artigo';
$lang['form_label_comment'] = 'Comentário';
$lang['form_label_comment_author_name'] = 'Nome do autor deste comentário';
$lang['form_label_is_spam'] = 'É um spam';
$lang['form_label_post_published'] = 'Artigo publicado';
$lang['form_label_date_submitted'] = 'Data de envio';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Respostas';
$lang['form_label_reply'] = 'Resposta';
$lang['form_label_commentor'] = 'Autor do comentário';
$lang['form_label_reply_notify'] = 'Notificar';
$lang['form_label_author_ip'] = 'Direção do IP do autor';
$lang['form_label_is_spam'] = 'É SPAM';
$lang['form_label_author_ip'] = 'Direção do IP do autor';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Localização do tema';
$lang['form_label_theme_layout'] = 'Layout do tema';
$lang['form_label_theme_module'] = 'Módulo do tema';
$lang['form_label_use_cache'] = 'Usar cache';
$lang['form_label_allow_comments'] = 'Permitir comentários';
$lang['form_label_monitor_comments'] = 'Monitorar comentários';
$lang['form_label_use_captchas'] = 'Usar Captchas';
$lang['form_label_save_spam'] = 'Guardar Spam';
$lang['form_label_akismet_api_key'] = 'API Key de Akismet';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Tempo de espera entre envios de comentários';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (em segundos)';
$lang['form_label_comments_time_limit'] = 'Permitir comentários durante';
$lang['form_label_comments_time_limit_after_html'] = ' após a data do artigo (em dias)';
$lang['form_label_cache_ttl'] = 'Guardar cache durante';
$lang['form_label_asset_upload_path'] = 'Caminho para o envio dos ativos';
$lang['form_label_per_page'] = 'Por pagina';

/* End of file blog_lang.php */
/* Location: ./modules/blog/language/spanish/blog_lang.php */