<?php
$lang['module_validate'] = '验证';

$lang['error_html_validation'] = '检测出HTML错误。';
$lang['error_no_pages_selected'] = '请选择或输入您想验证页面。';
$lang['error_public_accessible_server'] = '链接验证必须在您的网站处于公开访问的服务器上的才能正常验证。';
$lang['error_checking_page_links'] = '检查此页面链接出错。';

$lang['validate_instructions'] = '选择左边的页面验证。然后选择是否要验证HTML或每个页面的链接。
处理时间取决于所选的页面数量。HTML验证方面, 建议您可以 <a href="https://developer.apple.com/internet/opensource/validator.html" target="blank"><strong>设置一个本地验证服务器</strong></a>, 
或者一次只验证少许页面以避免被 w3c.org 暂时禁用。';

$lang['btn_validate_links'] = '验证链接';
$lang['btn_validate_html'] = '验证 HTML';
$lang['btn_view_size_report'] = '查看容量报告';
$lang['btn_reload_all'] = '刷新所有';

$lang['validate_link_back_to_page_selection'] = '返回页面选择';

$lang['validate_pages_input'] = '或者, 自行输入域名对应的页面, 使用【回车键】分隔页面。';

$lang['validate_type_html'] = 'HTML';
$lang['validate_type_links'] = '链接';
$lang['validate_type_size_report'] = '容量报告';

// js localization
include('validate_js_lang'.EXT);

/* End of file validate_lang.php */
/* Location: ./modules/validate/language/english/validate_lang.php */
