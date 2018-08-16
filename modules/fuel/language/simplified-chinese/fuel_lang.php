<?php
/**
 * FUEL CMS v1.4 Chinese Language
 *
 * @author		Andy Low a.k.a [yun] , trlanfeng
 * @license		http://docs.getfuelcms.com/general/license
 * @link		http://www.getfuelcms.com
 */

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = '当前用户：';
$lang['logout'] = '注销';
$lang['fuel_developed_by'] = 'FUEL CMS 版本 %1s 由 <a href="http://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> 使用 <a href="http://www.codeigniter.com" target="_blank">CodeIgniter</a> 框架构建开发。';
$lang['fuel_copyright'] = '%1s Daylight Studio &copy; 版权所有';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = '您无权限访问此页面。 <a href="%1s">请重新登陆</a>.';
$lang['error_missing_module'] = "缺少了 %1s 模块。";
$lang['error_invalid_login'] = '登录无效。';
$lang['error_max_attempts'] = '抱歉，您的登录信息不正确，您的账户暂时被锁定。请 %s 秒后重试。';
$lang['error_empty_user_pwd'] = '请输入用户名和密码。';
$lang['error_pwd_reset'] = '重置密码出错。';
$lang['error_pwd_too_short'] = '密码至少需要 %1s 个字符。';
$lang['error_pwd_too_long'] = '密码最多可有 %1s 个字符。';
$lang['error_pwd_invalid'] = '请使用更复杂的密码，可以加入 %1s 。';
$lang['error_invalid_email'] = '提供的电邮地址不存在。';
$lang['error_invalid_password_match'] = '密码错误.';
$lang['error_empty_email'] = '请输入电子邮箱地址。';
$lang['error_folder_not_writable'] = '%1s 文件夹需要可写权限。';
$lang['error_invalid_folder'] = '无效文件夹 %1s';
$lang['error_file_already_exists'] = '%1s 文件已存在.';
$lang['error_zip'] = '创建压缩文件出错。';
$lang['error_no_permissions'] = '您没有权限来完成此项目。 <a href="%1s">请重新登陆</a>.';
$lang['error_no_lib_permissions'] = '您没有权限执行 %1s 类的函数。';
$lang['error_page_layout_variable_conflict'] = '布局错误，可能布局不存在或布局包含保留变量名: %1s';
$lang['error_no_curl_lib'] = '这些工具需要PHP curl扩展。';
$lang['error_inline_page_edit'] = '此变量必须保存在管理区或编辑于相关联的 views/_variables 文件。';
$lang['error_saving'] = '保存出错。';
$lang['error_cannot_preview'] = '预览页面出错。';
$lang['error_cannot_make_api_call'] = '调用 %1s API出错.';
$lang['error_sending_email'] = '发送电子邮件至 %1s 出错。';
$lang['error_upload'] = '上传文件出错. 请确保服务器上传文件大小设置正确以及文件夹处于可写。';
$lang['error_create_nav_group'] = '请创建导航组';
$lang['error_requires_string_value'] = '名称字段必须是字符串值';
$lang['error_missing_params'] = '查看此页面出错：缺少参数';
$lang['error_invalid_method'] = '无效函数名';
$lang['error_curl_page'] = 'CURL加载页面出错';
$lang['error_class_property_does_not_exist'] = '类属性 %1s 不存在';
$lang['error_class_method_does_not_exist'] = '类函数 %1s 不存在';
$lang['error_could_not_create_folder'] = '无法创建文件夹 %1s';
$lang['error_could_not_create_file'] = '无法创建文件 %1s';
$lang['error_no_build'] = "无生成安装此组件。\n";
$lang['error_invalid_record'] = "此模块记录不存在。";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>强烈建议您更改默认密码 <em>%1s</em></strong>。';
$lang['warn_not_published'] = '此项目还未发布。';
$lang['warn_not_active'] = '%1s 未启用。';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s 已登录";
$lang['logged_out'] = "%s 已注销";
$lang['dev_pwd_instructions'] = '这个网站目前处于开发阶段，需要密码才能查看。';
$lang['login_forgot_pwd'] = '忘记密码?';
$lang['login_reset_pwd'] = '重置密码';
$lang['login_btn'] = '登录';
$lang['logout_restore_original_user'] = '还原用户';

$lang['auth_log_pass_reset_request'] = "'%1s' 发出重置密码请求于 %2s ";
$lang['auth_log_pass_reset'] = "'%1s' 密码重置于 %2s";
$lang['auth_log_cms_pass_reset'] = "'%1s' 密码重置(CMS)于 %2s";
$lang['auth_log_login_success'] = "'%1s' 成功登陆于 %2s";
$lang['auth_log_failed_updating_login_info'] = "'%1s' 更新登录信息出错于 %2s";
$lang['auth_log_failed_login'] = "'%1s' 登录失败于 %2s, 尝试登录次数: %3s";
$lang['auth_log_account_lockout'] = "'%1s' 账户锁定于 %2s";

$lang['pwd_requirements'] = '<p style="text-align: left; margin: 10px 0 5px 0;"><strong>密码必须符合以下规则：</strong></p>';
$lang['pwd_min_length_required'] = '至少 %1s 个字符';
$lang['pwd_max_length_required'] = '最多 %1s 个字符';
$lang['pwd_lowercase_required'] = '至少1个小写字母';
$lang['pwd_uppercase_required'] = '至少1个大写字幕';
$lang['pwd_numbers_required'] = '至少1个数字';
$lang['pwd_symbols_required'] = '至少1个符号';
/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = '仪表盘';
$lang['dashboard_intro'] = '欢迎使用 FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = '最新活动';
$lang['dashboard_hdr_latest_news'] = '最新 FUEL 消息';
$lang['dashboard_hdr_modified'] = '最近修改的页面';
$lang['dashboard_hdr_site_docs'] = '网站文档';
$lang['dashboard_change_pwd'] = '更改密码';
$lang['dashboard_change_pwd_later'] = '稍后更改';
$lang['dashboard_subscribe_rss'] = '订阅RSS';
$lang['dashboard_view_all_pages'] = '查看所有页面';
$lang['dashboard_view_all_activity'] = '查看所有活动';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = '个人资料';
$lang['profile_instructions'] = '更改您的个人资料：';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = '我的组件';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/



$lang['pwd_reset_error'] = '该邮箱没有可用的重置token，请重新获取重置密码链接。';
$lang['pwd_reset_success'] = '您的密码已成功被重置。含有新密码的电邮已经发送到您的邮箱。';
$lang['pwd_reset_error_not_match'] = '密码不匹配。';
$lang['pwd_reset_missing_token'] = 'token丢失或无效。';
$lang['pwd_reset'] = '密码重置邮件已发出';
$lang['pwd_reset_subject'] = "FUEL 管理员密码重置请求";
$lang['pwd_reset_email'] = "点击以下链接确认重置您的 FUEL 密码：\n%1s";
$lang['pwd_reset_subject_success'] = "FUEL 管理员密码重置成功";
$lang['pwd_reset_email_success'] = "您的 FUEL 密码已重置到 %1s. 请用此密码登录到 FUEL CMS 管理区，点击右上角您的登录用户名进入【个人资料】更改密码。";

$lang['cache_cleared'] = "站点缓存清除成功";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = '仪表盘';
$lang['module_pages'] = '页面';
$lang['module_blocks'] = '分块';
$lang['module_navigation'] = '导航';
$lang['module_categories'] = '分类';
$lang['module_tags'] = '标签';
$lang['module_assets'] = '资源';
$lang['module_sitevariables'] = '网站变量';
$lang['module_users'] = '用户';
$lang['module_permissions'] = '权限';
$lang['module_tools'] = '工具';
$lang['module_manage_cache'] = '页面缓存';
$lang['module_manage_activity'] = '活动日志';
$lang['module_manage_settings'] = '设置';
$lang['module_generate'] = '生成';


$lang['section_site'] = '网站';
$lang['section_blog'] = '博客';
$lang['section_modules'] = '组件';
$lang['section_manage'] = '管理';
$lang['section_tools'] = '工具';
$lang['section_settings'] = '设置';
$lang['section_recently_viewed'] = '近期浏览';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s 项目 <em>%2s</em> 添加成功";
$lang['module_edited'] = "%1s 项目 <em>%2s</em> 修改成功";
$lang['module_deleted'] = "%1s 项目 <em>%2s</em> 删除成功";
$lang['module_multiple_deleted'] = "多个 <em>%1s</em> 删除成功";
$lang['module_restored'] = "%1s 项目从档案中还原";
$lang['module_instructions_default'] = "%1s 组件管理。";
$lang['module_restored_success'] = '以前版本的成功恢复。';
$lang['module_replaced_success'] = '该记录的内容成功被替换。';
$lang['module_incompatible'] = '该组件版本与FUEL版本 '.FUEL_VERSION.' 不兼容';

$lang['cannot_determine_module'] = "无法判断组件。";
$lang['incorrect_route_to_module'] = "访问此组件路由不正确。";
$lang['data_saved'] = '数据已保存。';
$lang['data_deleted'] = '数据已三处。';
$lang['data_not_deleted'] = '部分或所有数据不能被删除。';
$lang['no_data'] = '无数据显示。';
$lang['no_preview_path'] = '此组件无预览路径。';
$lang['delete_item_message'] = '此项目将被删除：';
$lang['replace_item_message'] = '从以下列表选择需替换的记录。更换将从一个记录的数据传送至另一个记录，然后删除旧的记录。';

// command line
$lang['module_install'] = "'%1s' 组件已成功安装。\n";
$lang['module_install_error'] = "'%1s' 组件安装出错。\n";

$msg = "%1s 组件已卸载。\n\n";
$msg .= "然而, 从GIT除去一个组件需要多几个步骤，我们还为完成自动化方案。步骤：\n\n";
$msg .= "1. 从.gitmodules文件中删除相关的章节。\n";
$msg .= "2. Delete the relevant section from .git/config.\n";
$msg .= "2. 从.git/config文件中删除相关的章节。\n";
$msg .= "3. 运行 git rm --cached %2s (无须尾随斜线).\n";
$msg .= "4. 提交并删除现在未跟踪子组件文件。\n";
$lang['module_uninstall'] = $msg;

// build
$lang['module_build_asset'] = "%1s 优化完成，并输出到 %2s\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "您已成功迁移到 %s 版本。\n";
$lang['migrate_nothing_todo'] = "没有迁移是必要的。\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = '高级搜索';
$lang['reset_search'] = '重置搜索';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/
$lang['page_route_warning'] = '指定的位置拥有以下的路线已存在于路由文件中 (%1s):';
$lang['page_controller_assigned'] = '已经有分配给该页面的控制器函数。';
$lang['page_updated_view'] = '有一个更新的视图文件位于 <strong>%1s</strong>。您是否要把它上传到你的页面的正文里（如果有的话）？';
$lang['page_not_published'] = '该页面未公布。';

$lang['page_no_upload'] = '不，别上传！';
$lang['page_yes_upload'] = '是，上传吧~';
$lang['page_information'] = '页面信息';
$lang['page_layout_vars'] = '布局变量';

$lang['pages_instructions'] = '管理与页面相关的数据。';
$lang['pages_associated_navigation'] = '已关联的导航';
$lang['pages_success_upload'] = '页面视图已成功上传。';
$lang['pages_upload_instructions'] = '选择一个视图文件并上传到以下的页面。';
$lang['pages_select_action'] = '选择';

// page specific form fields
$lang['form_label_layout'] = '布局';
$lang['form_label_cache'] = '缓存';
$lang['pages_last_updated'] = '最近更新时间 %1s';
$lang['pages_last_updated_by'] = '最近更新时间 %1s (%2s)';
$lang['pages_not_published'] = '该页面未公布。';
$lang['pages_default_location'] = '例子: company/about';

$lang['form_label_page'] = '页面';
$lang['form_label_target'] = '目标(Hedef)';
$lang['form_label_class'] = '类(Class)';

$lang['navigation_related'] = '创建导航';
$lang['navigation_quick_add'] = '该区域让您快速添加此页到导航项目。它只在页面创建后创建一个导航项目。若要编辑的导航项目，则必须点击左边的\'导航\'链接，找到您要更改的导航项目，然后单击编辑链接。';

$lang['page_select_pages'] = '页面';
$lang['page_select_pdfs'] = 'PDFs';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = '有一个位于 <strong>%1s</strong> 视图文件更新了。你想导入吗？';
$lang['blocks_success_upload'] = '该分块视图已成功上传。';
$lang['blocks_upload_instructions'] = '选择一个分块视图文件并上传。';

$lang['form_label_view'] = '视图';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = '导入导航';
$lang['navigation_instructions'] = '创建和编辑页面顶部的菜单项。';
$lang['navigation_import_instructions'] = '选择一个导航组，并将文件上传用于导入。 该文件必须包含 PHP 数组变量分配于以下列表的变量字段(e.g. <strong>$nav</strong>). 对于数组格式的参考, 请查阅<a href="http://docs.getfuelcms.com/general/navigation" target="_blank">用户手册</a>。';
$lang['navigation_success_upload'] = '导航已成功上传。';
$lang['form_label_navigation_group'] = '导航组';
$lang['form_label_nav_key'] = '钥';
$lang['form_label_parent_id'] = '上线';
$lang['form_label_attributes'] = '属性(Attributes)';
$lang['form_label_selected'] = '已选';
$lang['form_label_hidden'] = '隐藏';

$lang['error_location_parents_match'] = '位置与上线不符。';

// for upload form
$lang['form_label_clear_first'] = '清除首个';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = '资源管理，用于上传新资源. 若想覆盖具有相同名称的文件可以选择【覆盖】选项。';
$lang['form_label_preview/kb'] = '预览/kb';
$lang['form_label_link'] = '链接';
$lang['form_label_asset_folder'] = '资源文件夹';
$lang['form_label_new_file_name'] = '新文件名';
$lang['form_label_subfolder'] = '子文件夹';
$lang['form_label_overwrite'] = '覆盖';
$lang['form_label_create_thumb'] = '创建缩略图';
$lang['form_label_resize_method'] = '调整方法';
$lang['form_label_maintain_ratio'] = '保持比例';
$lang['form_label_resize_and_crop'] = '裁剪模式';
$lang['form_label_overwrite'] = '重写';
$lang['form_label_width'] = '宽度';
$lang['form_label_height'] = '高度';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = '对齐(Align)';
$lang['form_label_master_dim'] = '主尺寸';
$lang['form_label_unzip'] = '解压文件';
$lang['assets_upload_action'] = '上传';
$lang['assets_select_action'] = '选择';
$lang['assets_comment_asset_folder'] = '将被上传到资源的文件夹';
$lang['assets_comment_filename'] = '如果没有提供的名称，将使用已经现有文件名。';
$lang['assets_comment_subfolder'] = '将试图创建一个新的子文件夹用于存放资源。';
$lang['assets_comment_overwrite'] = '覆盖具有相同名称的文件。如果勾选，新的文件名将追加结束版本号。';
$lang['assets_heading_general'] = '通便';
$lang['assets_heading_image_specific'] = '图像特定';
$lang['assets_comment_thumb'] = '创建图像缩略图。';
$lang['assets_comment_resize_method'] = '保留纵横比或者调整大小和裁剪图像以达到所提供的尺寸。若有【创建缩略图】选项，只有缩略图的大小受影响。';
$lang['assets_comment_width'] = '将图像的宽度调整到所需值。若有【创建缩略图】选项，只有缩略图的大小受影响。';
$lang['assets_comment_height'] = '将图像的高度调整到所需值。若有【创建缩略图】选项，只有缩略图的大小受影响。';
$lang['assets_comment_master_dim'] = '指定主尺寸用于调整。如果源图像大小不允许完美尺寸调整到主尺寸，此设置决定哪个轴应作为硬价值。 “auto”设置自动根据图像垂直水平来决定轴';
$lang['assets_comment_unzip'] = '解压zip文件';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = '管理您的网站的站点变量。';
$lang['sitevariables_scope'] = '范围';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = '用户数据管理。';
$lang['permissions_heading'] = '权限';
$lang['form_label_language'] = '语言';
$lang['form_label_send_email'] = '发电邮';
$lang['btn_send_email'] = '发电邮';
$lang['new_user_email_subject'] = '您的 FUEL 管理区帐户已创建';
$lang['new_user_email'] = '您的 FUEL 管理区帐户已创建。请用以下信息登录:
登录链: %1s
账户名: %2s
密码: %3s';
$lang['new_user_created_notification'] = '用户信息保存成功，电邮通知已发送至 %1s。';
$lang['error_cannot_deactivate_yourself'] = '您无法禁用自己。';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = '管理 FUEL 组件的权限，并可将其分配给用户。';
$lang['form_label_other_perms'] = '生成相关的简约<br /> 组件的权限';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = '缓存已被清除。';
$lang['cache_instructions'] = '即将清除该网站的页面缓存。';
$lang['cache_no_clear'] = '不，别清除！';
$lang['cache_yes_clear'] = '是，清除吧~';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = '没有任何高级组件的设置。';
$lang['settings_manage'] = '管理以下高级组件的设置：';
$lang['settings_problem'] = '高级组件<strong>%1s</strong>设置出错. <br />检查 <strong>/fuel/modules/%1s/config/%1s.php</strong> config 被配置成处理的设置。';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = '这不是一个 CLI 请求。';
$lang['error_not_in_dev_mode'] = '这只能运行于开发模式。';
$lang['error_missing_generation_files'] = '缺少生成文件用于 %1s 创建';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = '编辑';
$lang['table_action_delete'] = '删除';
$lang['table_action_view'] = '查看';
$lang['click_to_toggle'] = '切换';
$lang['table_action_login_as'] = '登录为';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = '显示:';
$lang['label_language'] = '语言:';
$lang['label_restore_from_prev'] = '从以前的版本恢复...';
$lang['label_select_another'] = '选择另一个...';
$lang['label_select_one'] = '选择一个...';
$lang['label_belongs_to'] = '属于';
$lang['label_select_a_language'] = '选择一个语言...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = '目录';
$lang['btn_tree'] = '树';
$lang['btn_create'] = '创建';
$lang['btn_delete_multiple'] = '多重删除';
$lang['btn_rearrange'] = '改编';
$lang['btn_search'] = '搜索';
$lang['btn_view'] = '查看';
$lang['btn_publish'] = '发布';
$lang['btn_unpublish'] = '取消发布';
$lang['btn_activate'] = '启用';
$lang['btn_deactivate'] = '停用';
$lang['btn_delete'] = '删除';
$lang['btn_duplicate'] = '复制';
$lang['btn_replace'] = '更换';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = '上传';
$lang['btn_download'] = '下载';
$lang['btn_export_data'] = '导出数据';

$lang['btn_no'] = '不是';
$lang['btn_yes'] = '是';

$lang['btn_no_upload'] = '不，别上传！';
$lang['btn_yes_upload'] = '是，上传吧~';

$lang['btn_no_dont_delete'] = '不，别删除！';
$lang['btn_yes_dont_delete'] = '是，删除吧~';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = '名称';
$lang['form_label_title'] = '标题';
$lang['form_label_label'] = '标签';
$lang['form_label_location'] = '位置';
$lang['form_label_published'] = '已发布';
$lang['form_label_active'] = '现行';
$lang['form_label_precedence'] = '位次';
$lang['form_label_date_added'] = '添加日期';
$lang['form_label_last_updated'] = '更新时间';
$lang['form_label_file'] = '文件';
$lang['form_label_value'] = '值';
$lang['form_label_email'] = '电邮';
$lang['form_label_user_name'] = '用户名';
$lang['form_label_first_name'] = '名字';
$lang['form_label_last_name'] = '姓';
$lang['form_label_super_admin'] = '超级管理员';
$lang['form_label_password'] = '密码';
$lang['form_label_confirm_password'] = '确认密码';
$lang['form_label_new_password'] = '新密码';
$lang['form_label_new_invite'] = '发送新用户邀请';
$lang['form_label_description'] = '描述';
$lang['form_label_entry_date'] = '输入日期';
$lang['form_label_message'] = '信息';
$lang['form_label_image'] = '图像';
$lang['form_label_upload_image'] = '上传图片';
$lang['form_label_upload_images'] = '上传多个图片';
$lang['form_label_content'] = '内容';
$lang['form_label_excerpt'] = '摘抄';
$lang['form_label_permalink'] = '永久链接';
$lang['form_label_slug'] = '铅条';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = '链接';
$lang['form_label_pdf'] = 'PDF';
$lang['form_label_canonical'] = '典范';
$lang['form_label_og_title'] = 'Open Graph 标题';
$lang['form_label_og_description'] = 'Open Graph 描述';
$lang['form_label_og_image'] = 'Open Graph 图像';
$lang['form_label_category_id'] = '类别';


$lang['form_label_group_id'] = '组';
$lang['form_label_or_select'] = '或 选择';

$lang['form_enum_option_yes'] = '是';
$lang['form_enum_option_no'] = '不是';

$lang['required_text'] = '必填字段';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = '这是用于您的网站的主要布局。';
$lang['layout_field_page_title'] = '页面标题';
$lang['layout_field_meta_description'] = 'Meta 描述';
$lang['layout_field_meta_keywords'] = 'Meta 关键字';
$lang['layout_field_body'] = 'Body';
$lang['layout_field_heading'] = '标题';
$lang['layout_field_body_description'] = '页面的主要内容';
$lang['layout_field_body_class'] = 'Body class';
$lang['layout_field_redirect_to'] = '重定向到';

$lang['layout_field_301_redirect_copy'] = '这种布局会做301重定向到另一个页面。';
$lang['layout_field_alias_copy'] = '这种布局是类似于301重定向但网页的位置不改变<br/>并且用于从指定的位置的页面内容来呈现页面。';
$lang['layout_field_sitemap_xml_copy'] = '此布局用于生成网站地图。使用此页面，sitemap.xml一定不能存在于服务器上。';
$lang['layout_field_robots_txt_copy'] = '此布局用于生成robots.txt文件。使用此页面，robots.txt一定不能在于服务器上。';
$lang['layout_field_none_copy'] = '此布局同等不布局使用。';

$lang['layout_field_frequency'] = '频率';
$lang['layout_field_frequency_always'] = '总是';
$lang['layout_field_frequency_hourly'] = '每小时';
$lang['layout_field_frequency_daily'] = '每天';
$lang['layout_field_frequency_weekly'] = '每周';
$lang['layout_field_frequency_monthly'] = '每月';
$lang['layout_field_frequency_yearly'] = '每年';
$lang['layout_field_frequency_never'] = '从不';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = '双击打开';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/
$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; 第一页';
$lang['pagination_last_link'] = '最尾页 &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = '编辑';
$lang['action_create'] = '创建';
$lang['action_delete'] = '删除';
$lang['action_upload'] = '上传';
$lang['action_replace'] = '更换';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = '成功将数据库迁移到 %1s 版本';

//$lang['import'] = 'Import';

/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "FUEL CMS 安装器是用基本配置安装此管理系统，自动化包括：\n";
$lang['install_cli_intro'] .= "1) 自动生成一个加密钥于 fuel/application/config/config.php。\n";
$lang['install_cli_intro'] .= "2) 开启 CMS 管理区，设置 'admin_enabled' 于 fuel/application/config/MY_fuel.php。\n";
$lang['install_cli_intro'] .= "3) 更换 fuel/application/config/MY_fuel.php 里的 'fuel_mode' 开启 CMS 管理页面。\n";
$lang['install_cli_intro'] .= "4) 更改 fuel/application/config/MY_fuel.php 文件中的 'fuel_mode' 来允许CMS创建页面。\n";
$lang['install_cli_intro'] .= "5) 更改网站名 'site_name' 于 fuel/application/config/MY_fuel.php。\n";
$lang['install_cli_intro'] .= "6) 设置 fuel/application/config/environments.php 里的环境。\n";
$lang['install_cli_intro'] .= "7) 将 fuel/application/logs, fuel/application/cache 和 assets/images 文件夹可写化.\n";
$lang['install_cli_intro'] .= "8) 更新 fuel/application/config/database.php 文件。\n";
$lang['install_cli_intro'] .= "9) 用本地MySQL连接创建一个数据库并安装 fuel_schema.sql。\n";
$lang['install_session_path'] = '默认情况下， FUEL CMS 使用 fuel/application/config/config.php file 文件中的 "file"  来设置SESSION的存储位置。（默认情况下留空）';
$lang['install_site_name'] = '您想设置的网站名？';
$lang['install_environments_testing'] = '您用于 TESTING 环境的域名 (e.g. myserver.com *.mystagingserver.com)？';
$lang['install_environments_production'] = '您用于 PRODUCTION 环境的域名 (e.g. myserver.com *.myserver.com)?';
$lang['install_permissions'] = '那个文件夹权限设置您想设置给可写文件夹 (e.g. 0755, 0775, 0777)？';
$lang['install_db_name'] = '您想要的数据库名称？';
$lang['install_db_user'] = '连接数据库的用户名是什么 (e.g. root)？';
$lang['install_db_pwd'] = '请输入密码';

$lang['install_success'] = 'FUEL CMS 安装完成！';
$lang['install_success_with_errors'] = "FUEL CMS 安装完成。但出现了一下错误:\n%1s";
$lang['install_further_info'] = "访问 FUEL CMS 管理区, 开启浏览器在地址栏里输入您的安装文件夹并加入 '/fuel' (e.g. localhost/fuel) 浏览。\n";
$lang['install_further_info'] .= "其他配置选项请查阅 http://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "如有问题，或者错误报告, 请到 https://github.com/daylightstudio/FUEL-CMS/issues 或者访问 http://forums.getfuelcms.com.\n";

$lang['update_cli_intro'] = "FUEL CMS 1.4x 基于 CodeIgniter 3 构建。如果你是从 1.3x 或更早的版本升级，这次升级修复了很多以前存在的问题：\n";
$lang['update_cli_intro'] .= "1) 模型、库、控制器的文件名首字母大写。\n";
$lang['update_cli_intro'] .= "2) 模型文件的公共引用 Base_module_model.php 专为大写。\n";
$lang['update_cli_intro'] .= "3) 模型和类库中的公共函数签名将匹配父类的签名，例如 form_fields, _common_query 和 initialize。\n";
$lang['update_cli_intro'] .= "警告：仅在使用GIT且需要会回滚时进行此操作！\n";
$lang['update_cli_intro'] .= "要继续吗？ (y/n)";
$lang['update_success'] = '更新完成！';
// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */