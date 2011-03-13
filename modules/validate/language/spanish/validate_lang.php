<?php
$lang['module_validate'] = 'Validar';

$lang['error_html_validation'] = 'Hay uno o más errores HTML detectados.';
$lang['error_no_pages_selected'] = 'Por favor, selecciona o introduce las páginas que deseas validar.';
$lang['error_public_accessible_server'] = 'Tu sitio debe estar en un servidor accesible públicamente para que la validación de enlaces funcione correctamente.';
$lang['error_checking_page_links'] = 'Hubo un error probando los enlaces de la página';

$lang['validate_instructions'] = 'Selecciona las páginas a validar en la izquierda. Entonces selecciona si deseas validar el HTML o los enlaces para cada página. 
El tiempo de proceso puede validar de algunos segundos a varios minutos dependiendo del número de páginas seleccionadas.
Para la validación de HTML, es recomendable que bien <a href="http://developer.apple.com/internet/opensource/validator.html" target="blank"><strong>configures un servidor de validación local</strong></a>, 
o valides pocas a la vez para evitar ser bloqueado en w3c.org.';

$lang['btn_validate_links'] = 'Validar enlaces';
$lang['btn_validate_html'] = 'Validar HTML';
$lang['btn_view_size_report'] = 'Ver el informe del tamaño';
$lang['btn_reload_all'] = 'Recargar todos';

$lang['validate_link_back_to_page_selection'] = 'Volver a la selección de página';

$lang['validate_pages_input'] = 'O introduce la(s) página(s) manualmente relativas a este dominio, separadas por un salto de línea';

$lang['validate_type_html'] = 'HTML';
$lang['validate_type_links'] = 'Enlaces';
$lang['validate_type_size_report'] = 'Informe de tamaño';

// js localization
include('validate_js_lang'.EXT);

/* End of file validate_lang.php */
/* Location: ./modules/validate/language/spanish/validate_lang.php */
