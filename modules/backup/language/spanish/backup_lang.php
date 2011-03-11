<?php 
$lang['module_backup'] = 'Copia de seguridad';

$lang['data_backup_dashboard'] = 'Recuerda <a href="'.fuel_url('tools/backup').'">hacer copias de seguridad</a> periódicamente';
$lang['data_last_backup'] = 'última copia de seguridad';
$lang['data_backup'] = 'Copia de seguridad guardada correctamente.';
$lang['cron_db_backup'] = "Copia de seguridad de la base de datos guardada con el nombre: %s.";
$lang['cron_db_backup_asset'] = "Se ha realizado una copia de la base de datos y los assets con el nombre: %s.";
$lang['cron_db_backed_up_already'] = 'Ya se ha realizado copia de seguridad de la base de datos.';
$lang['cron_db_folder_not_writable'] = 'El directorio %1s no tiene permisos de escritura. Comprueba que puedes escribir en ese directorio.';
$lang['cron_email'] = 'Correo electrónico enviado a %1s.';
$lang['cron_email_error'] = 'Hubo un error enviando el correo electrónico a %1s.';
$lang['cron_email_subject'] = 'Cronjob de la copia de seguridad para %1s.';
$lang['data_backup_instructions'] = 'Vas a realizar una copia de seguridad de la base de datos. Esto descargará un archivo zip desde el navegador que podrás guardar en tu equipo.';
$lang['data_backup_instructions_writable'] = 'También se creará un fichero con la copia de seguridad en el directorio:';
$lang['data_backup_instructions_not_writable'] = 'Para guardar los datos comprimidos en el servidor, debes dar permisos de escritura al siguiente directorio o cambiar el directorio por defecto en la configuración de fuel. <strong>Comprueba que este directorio no es accesible por otros y que está debajo del directorio raíz o está protegido por un fichero .htaccess</strong>:';
$lang['data_backup_not_writable'] = '(sin permisos de escritura)';
$lang['data_backup_include_assets'] = '¿Incluir el directorio de assets?';
$lang['data_backup_no_backup'] = 'No, No hacer copia de seguridad';
$lang['data_backup_yes_backup'] = 'Sí, hacer copia de seguridad';