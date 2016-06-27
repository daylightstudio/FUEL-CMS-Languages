<?php
/*
|--------------------------------------------------------------------------
| Module Names
|--------------------------------------------------------------------------
*/
$lang['module_blog_posts'] = '文章';
$lang['module_blog_categories'] = '分类';
$lang['module_blog_comments'] = '评论';
$lang['module_blog_links'] = '链接';
$lang['module_blog_authors'] = '作者';
$lang['module_blog_settings'] = '设定';

/*
|--------------------------------------------------------------------------
| Errors
|--------------------------------------------------------------------------
*/
$lang['blog_error_blank_comment'] = '请输入评论。';
$lang['blog_error_invalid_comment_email'] = '请输入有效的电邮地址。';
$lang['blog_error_comment_site_submit'] = '评论必须透过网站的评论表格提交。';
$lang['blog_error_comment_already_submitted'] = '此评论已提交。';
$lang['blog_error_consecutive_comments'] = '请稍后提交后续评论。';
$lang['blog_error_delete_uncategorized'] = '您不能删除未分类的类别。';

/*
|--------------------------------------------------------------------------
| Page Titles
|--------------------------------------------------------------------------
*/
$lang['blog_archives_page_title'] = '档案';
$lang['blog_authors_list_page_title'] = '作者';
$lang['blog_author_posts_page_title'] = '%s 文章';
$lang['blog_categories_page_title'] = '分类';
$lang['blog_search_page_title'] = '%s 搜索结果';

/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['blog_page_num_title'] = '文章 %1s-%2s';
$lang['blog_prev_page'] = '&lt;&lt; 上一页';
$lang['blog_next_page'] = '下一页 &gt;&gt;';
$lang['blog_first_link'] = '';
$lang['blog_last_link'] = '';


$lang['blog_error_no_posts_to_comment'] = '无文章可评论。';
$lang['blog_post_is_not_published'] = '此评论关联的文章未发布，所以此评论答复将无通知发出。';
$lang['blog_comment_notify_option1'] = '全部';
$lang['blog_comment_notify_option2'] = '评论者';
$lang['blog_comment_notify_option3'] = '毫无';



/***************************************************************************
IMPORTANT: SEVERAL FORM FIELD LABELS ALREADY EXIST IN THE fuel language file
***************************************************************************/

/*
|--------------------------------------------------------------------------
| Posts (several fields are in the main form_label_ common)
|--------------------------------------------------------------------------
*/
$lang['form_label_formatting'] = '格式化';
$lang['form_label_author'] = '作者';
$lang['form_label_sticky'] = '黏贴';
$lang['form_label_allow_comments'] = '允许评论';
$lang['form_label_categories'] = '分类';


/*
|--------------------------------------------------------------------------
| Comments 
|--------------------------------------------------------------------------
*/
$lang['blog_comment_monitor_subject']= "%s: 已添加一个新评论。";
$lang['blog_comment_monitor_msg']= "您的部落文章有一个新评论。查看评论请登录至管理区:";
$lang['blog_comment_reply_subject']= "%1s 回复部落评论";
$lang['blog_comment_reply_msg']= "%1s 回复了您的评论，文章：%2s.";

$lang['blog_captcha_text'] = "请输入图像里显示的文字。 <br />如果您无法阅读文字，请刷新页面。";

$lang['blog_comment_is_spam'] = "系统测试到这是垃圾评论，评论无法提交。";
$lang['blog_error_captcha_mismatch'] = "输入的文字与图像不相符。";

$lang['blog_email_flagged_as_spam'] = '标记为垃圾邮件!!!';
$lang['blog_email_published'] = '已发布';
$lang['blog_email_author_name'] = '作者名称';
$lang['blog_email_author_email'] = '作者电邮';
$lang['blog_email_author_website'] = '网站';
$lang['blog_email_author_ip'] = '作者IP';
$lang['blog_email_content'] = '内容';
$lang['form_label_post_title'] = '文章标题';
$lang['form_label_comment'] = '评论';
$lang['form_label_comment_author_name'] = '评论者名称';
$lang['form_label_is_spam'] = '标记垃圾';
$lang['form_label_post_published'] = '文章已发布';
$lang['form_label_date_submitted'] = '提交日期';
$lang['form_label_ip_host'] = 'IP/主机';
$lang['form_label_replies'] = '答复';
$lang['form_label_reply'] = '答复';
$lang['form_label_commentor'] = '评论者';
$lang['form_label_reply_notify'] = '通知';
$lang['form_label_author_ip'] = '作者IP地址';


/*
|--------------------------------------------------------------------------
| Settings 
|--------------------------------------------------------------------------
*/
$lang['form_label_uri'] = 'URI';
$lang['form_label_theme_path'] = '主题路径';
$lang['form_label_theme_layout'] = '主题布局';
$lang['form_label_theme_module'] = '主题组件';
$lang['form_label_use_cache'] = '使用缓存';
$lang['form_label_allow_comments'] = '允许评论';
$lang['form_label_monitor_comments'] = '监视评论';
$lang['form_label_use_captchas'] = '使用Captchas';
$lang['form_label_save_spam'] = '保存垃圾';
$lang['form_label_akismet_api_key'] = 'Akismet钥匙';
$lang['form_label_multiple_comment_submission_time_limit'] = '提交评论时间限制';
$lang['form_label_multiple_comment_submission_time_limit_after_html'] = ' (秒)';
$lang['form_label_comments_time_limit'] = '允许多长时间评论';
$lang['form_label_comments_time_limit_after_html'] = ' 发布日期后 (天)';
$lang['form_label_cache_ttl'] = '缓存生存时间';
$lang['form_label_asset_upload_path'] = '资源上传路径';
$lang['form_label_per_page'] = '每页';