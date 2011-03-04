<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Příspěvky';
$lang['module_blog_categories'] = 'Kategorie';
$lang['module_blog_comments'] = 'Komentáře';
$lang['module_blog_links'] = 'Linky';
$lang['module_blog_authors'] = 'Autoři';
$lang['module_blog_settings'] = 'Nastavení';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Prosím vepište komentář.';
$lang['blog_error_invalid_comment_email'] = 'Prosím vyplňte platnou emailovou adresu.';
$lang['blog_error_comment_site_submit'] = 'Komentáře musí být odeslány skrz formulář na stránkách';
$lang['blog_error_comment_already_submitted'] = 'Tento komentář již byl odeslán.';
$lang['blog_error_consecutive_comments'] = 'K zaslání více komentářů za sebou je potřeba chvíli vyčkat.';
$lang['blog_error_delete_uncategorized'] = 'Nemůžete smazat kategorii: Nezařazené';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Archivy';
$lang['blog_authors_list_page_title'] = 'Autoři';
$lang['blog_author_posts_page_title'] = '%s Příspěvky';
$lang['blog_categories_page_title'] = 'Kategorie';
$lang['blog_search_page_title'] = '%s Výsledky hledání';

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Příspěvky %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; Předchozí stránka';
$lang['blog_next_page'] = 'Další stránka &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


$lang['blog_error_no_posts_to_comment'] = 'Nejsou žádné příspevky ke komentování.';
$lang['blog_post_is_not_published'] = 'Příspěvek, který souvisí s tímto komentářem není publikován a pro to nebudou zasílány žádné notifikace odpovědím na tento komentář.';
$lang['blog_comment_notify_option1'] = 'Všichni';
$lang['blog_comment_notify_option2'] = 'Komentující';
$lang['blog_comment_notify_option3'] = 'Nikdo';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = 'Formátování';
$lang['form_label_author'] = 'Autor';
$lang['form_label_sticky'] = 'Sticky';
$lang['form_label_allow_comments'] = 'Povolit komentáře';
$lang['form_label_categories'] = 'Kategorie';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Komentář byl přidán.";
$lang['blog_comment_monitor_msg']= "K příspěvku ve vašem blogu byl přidán komentář. K revidování tohoto komentáře se přihlašte do FUEL administrace.";
$lang['blog_comment_reply_subject']= "Blog: %1s, odpověď na příspěvek";
$lang['blog_comment_reply_msg']= "%1s právě odpověděl na váš komentář ve článku %2s.";

$lang['blog_captcha_text'] = "Opište text který vidíte na obrázku ve formuláři dole. <br />Jestliže text nemůžete přečíst, proveďte refresh stránky.";

$lang['blog_comment_is_spam'] = "Komentář nemůže být v dané podobě odeslán, protože byl označen jako spam.";
$lang['blog_error_captcha_mismatch'] = "Text který jste opsali nesouhlasí s textem na obrázku.";

$lang['blog_email_flagged_as_spam'] = 'OZNAČENO JAKO SPAM!!!';
$lang['blog_email_published'] = 'Publikováno';
$lang['blog_email_author_name'] = 'Autorovo jméno';
$lang['blog_email_author_email'] = 'Autorův Email';
$lang['blog_email_author_website'] = 'Web';
$lang['blog_email_author_ip'] = 'Autorova IP adresa';
$lang['blog_email_content'] = 'Obsah';
$lang['form_label_post_title'] = 'Titulek příspěvku';
$lang['form_label_comment'] = 'Komentář';
$lang['form_label_comment_author_name'] = 'Jméno autora komentáře';
$lang['form_label_is_spam'] = 'Je Spam';
$lang['form_label_post_published'] = 'Příspěvek publikován';
$lang['form_label_date_submitted'] = 'Datum odeslání';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Odpovědi';
$lang['form_label_reply'] = 'Odpověď';
$lang['form_label_commentor'] = 'Autor komentáře';
$lang['form_label_reply_notify'] = 'Upozornit';
$lang['form_label_author_ip'] = 'Autorova IP Adresa';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Umístění vzhledu';
$lang['form_label_theme_layout'] = 'Layout vzhledu';
$lang['form_label_theme_module'] = 'Modul vzhledu';
$lang['form_label_use_cache'] = 'Používat Cache';
$lang['form_label_allow_comments'] = 'Povolit komentáře';
$lang['form_label_monitor_comments'] = 'Monitorovat komentáře';
$lang['form_label_use_captchas'] = 'Použít Captchu';
$lang['form_label_save_spam'] = 'Ukládat Spam';
$lang['form_label_akismet_api_key'] = 'Akismet Klíč';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Časový limit pro odeslání více komentářů';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (v sekundách)';
$lang['form_label_comments_time_limit'] = 'Na jak dlouho povodlit komentáře';
$lang['form_label_comments_time_limit_after_html'] = ' po přidání příspevku (ve dnech)';
$lang['form_label_cache_ttl'] = 'Cache Time to Live';
$lang['form_label_asset_upload_path'] = 'Cesta pro nahrávání multimédií';
$lang['form_label_per_page'] = 'Na stránku';