<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = 'Yazılar';
$lang['module_blog_categories'] = 'Kategoriler';
$lang['module_blog_comments'] = 'Yorumlar';
$lang['module_blog_links'] = 'Linkler';
$lang['module_blog_authors'] = 'Yazarlar';
$lang['module_blog_settings'] = 'Ayarlar';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = 'Lütfen yorum yazınız.';
$lang['blog_error_invalid_comment_email'] = 'Lütfen geçerli bir e-posta adresi giriniz.';
$lang['blog_error_comment_site_submit'] = 'Yorumlar web sitesindeki form aracılığıyla gönderilmelidir..';
$lang['blog_error_comment_already_submitted'] = 'Bu yorum zaten gönderildi.';
$lang['blog_error_consecutive_comments'] = 'Lütfen ardarda yorum göndermek için bekleyin.';
$lang['blog_error_delete_uncategorized'] = 'Kategorize edilmemiş kategoriyi silemezsiniz.';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = 'Arşivler';
$lang['blog_authors_list_page_title'] = 'Yazarlar';
$lang['blog_author_posts_page_title'] = '%s Yazılar';
$lang['blog_categories_page_title'] = 'Kategoriler';
$lang['blog_search_page_title'] = '%s Arama Sonuçları';

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = 'Yazılar %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; Önceki sayfa';
$lang['blog_next_page'] = 'Sonraki sayfa &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


$lang['blog_error_no_posts_to_comment'] = 'Yorum yazılacak hiç ileti yok.';
$lang['blog_post_is_not_published'] = 'Bu yorumla ilişkilendirilen yazı yayınlanmadı ve bu nedenle yorum yanıtlarında hiçbir bildirim gönderilmeyecek.';
$lang['blog_comment_notify_option1'] = 'Tümü';
$lang['blog_comment_notify_option2'] = 'Yorumcu';
$lang['blog_comment_notify_option3'] = 'Yok';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = 'Biçimlendirme';
$lang['form_label_author'] = 'Yazar';
$lang['form_label_sticky'] = 'Yapışkan';
$lang['form_label_allow_comments'] = 'Yorumlara izin ver';
$lang['form_label_categories'] = 'Kategoriler';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: Bir yorum eklendi.";
$lang['blog_comment_monitor_msg']= "Blog yayınınıza bir yorum eklendi. Yorum incelemek için FUEL'e giriş yapın :";
$lang['blog_comment_reply_subject']= "%1s cevap";
$lang['blog_comment_reply_msg']= "%1s makalede yorumunuzu yanıtladı %2s.";

$lang['blog_captcha_text'] = "Yukarıdaki form alanında görüntüde gördüğünüz metni girin. <br/> Metni okuyamıyorsanız, sayfayı yenileyin.";

$lang['blog_comment_is_spam'] = "Gönderilen yorum, spam olarak işaretlendiği için gönderilemez.";
$lang['blog_error_captcha_mismatch'] = "Resim ile metin eşleşmedi.";

$lang['blog_email_flagged_as_spam'] = 'SPAM OLARAK İŞARETLENDİ!!!';
$lang['blog_email_published'] = 'Yayınlanan';
$lang['blog_email_author_name'] = 'Yazar adı';
$lang['blog_email_author_email'] = 'Yazar E-postası';
$lang['blog_email_author_website'] = 'Website';
$lang['blog_email_author_ip'] = 'Yazar IP';
$lang['blog_email_content'] = 'İçerik';
$lang['form_label_post_title'] = 'Yazı başlığı';
$lang['form_label_comment'] = 'Yorum';
$lang['form_label_comment_author_name'] = 'Yorum Yazar Adı';
$lang['form_label_is_spam'] = 'Spam mı';
$lang['form_label_post_published'] = 'Yayınlanan Yazı';
$lang['form_label_date_submitted'] = 'İletilen Tarih';
$lang['form_label_ip_host'] = 'IP/Host';
$lang['form_label_replies'] = 'Cevaplar';
$lang['form_label_reply'] = 'Cevap';
$lang['form_label_commentor'] = 'Yorumcu';
$lang['form_label_reply_notify'] = 'Bildir';
$lang['form_label_author_ip'] = 'Yazar IP Adresi';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = 'Tema Yeri';
$lang['form_label_theme_layout'] = 'Tema Düzeni';
$lang['form_label_theme_module'] = 'Tema modülü';
$lang['form_label_use_cache'] = 'Önbellek kullan';
$lang['form_label_allow_comments'] = 'Yorumlara izin ver';
$lang['form_label_monitor_comments'] = 'Yorumları İzleyin';
$lang['form_label_use_captchas'] = 'Captcha kullan';
$lang['form_label_save_spam'] = 'Spam\'i koru';
$lang['form_label_akismet_api_key'] = 'Akismet Key';
$lang['form_label_multiple_comment_submission_time_limit'] = 'Yorum Gönderme Süresi Sınırı';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (saniyeler içinde)';
$lang['form_label_comments_time_limit'] = 'Yorumlara ne kadar süre izin verilecek';
$lang['form_label_comments_time_limit_after_html'] = ' yazı tarihinden sonra (gün olarak)';
$lang['form_label_cache_ttl'] = 'Cache Tutulacak Süre';
$lang['form_label_asset_upload_path'] = 'Öğe Yükleme Yolu';
$lang['form_label_per_page'] = 'Sayfa başına';