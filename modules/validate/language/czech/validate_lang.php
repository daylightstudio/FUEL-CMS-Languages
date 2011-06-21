<?php
$lang['module_validate'] = 'Validace';

$lang['error_html_validation'] = 'Vyskytla se jedna či více chyb v HTML';
$lang['error_no_pages_selected'] = 'Vyberte nebo vložte stránky, která byste chtěli prověřit';
$lang['error_public_accessible_server'] = 'Váš web musí být na veřejně dostupném serveru pro správné ověření funkčních odkazů.';
$lang['error_checking_page_links'] = 'Vyskytla se chyba při prověřování odkazů na této stránce';

$lang['validate_instructions'] = 'Vyberte nalevo stránky, které chcete prověřit. Pak vyberte zda chcete na vybraných stránkách prověřit HTML nebo odkazy.
	Doba zpracování může trvat několik vteřin až minut podle počtu vybraných stránek.
	Pro prověření HTML je doporučeno buď <a href="http://developer.apple.com/internet/opensource/validator.html" target="blank"><strong>použít lokální validační server</strong></a>
	nebo prověřovat pouze několik stránek zároveň, aby se předešlo dočasné blokaci na w3c.org.';

$lang['btn_validate_links'] = 'Prověření odkazů';
$lang['btn_validate_html'] = 'Prověření HTML';
$lang['btn_view_size_report'] = 'Prohlédnout výsledky prověření velikosti';
$lang['btn_reload_all'] = 'Načíst znovu';

$lang['validate_link_back_to_page_selection'] = 'Zpět na výběr stránky';

$lang['validate_pages_input'] = 'NEBO vložte stránky ručně pomocí relativní adresy vůči této doméně, oddělujte je Enterem';

$lang['validate_type_html'] = 'HTML';
$lang['validate_type_links'] = 'Odkazy';
$lang['validate_type_size_report'] = 'Prověření velikosti';

// js localization
include('validate_js_lang'.EXT);

/* End of file validate_lang.php */
/* Location: ./modules/validate/language/czech/validate_lang.php */
