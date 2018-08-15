<?php 
$lang['module_backup'] = 'Yedek';

$lang['data_backup_dashboard'] = 'Veritabanınızı periyodik olarak <a href="'.fuel_url('tools/backup').'">yedeklemeyi</a> unutmayın.';
$lang['data_last_backup'] = 'son yedekleme';
$lang['data_backup'] = 'Veri yedeklendi.';
$lang['cron_db_backup'] = "Veritabanı dosya adıyla yedeklendi: %s.";
$lang['cron_db_backup_asset'] = "Veritabanı ve assets klasörü dosya adıyla yedeklendi: %s.";
$lang['cron_db_backed_up_already'] = 'Veritabanı zaten yedeklendi.';
$lang['cron_db_folder_not_writable'] = '%1s dizini yazılabilir değil. Yazılabilir olduğundan emin olun.';
$lang['cron_email'] = 'E-posta gönderildi %1s.';
$lang['cron_email_error'] = 'E-postayı gönderirken bir hata oluştu %1s.';
$lang['cron_email_subject'] = 'Veri yedekleme için cronjob %1s.';

$lang['data_backup_instructions'] = 'Veritabanınızı yedeklemek üzeresiniz. Bu, tarayıcınızdan bilgisayarınıza kaydedebileceğiniz bir gzip dosyası indirir..';
$lang['data_backup_instructions_writable'] = 'Ayrıca dizinde web sunucusunda tarihli bir yedekleme dosyası oluşturacak:';
$lang['data_backup_instructions_not_writable'] = 'Sıkıştırılmış verileri sunucuya kaydetmek için, aşağıdaki dizini yazılabilir hale getirmeli veya fuel yapılandırma dosyasındaki dizini değiştirmelisiniz. <strong> Bu dizinin başkaları tarafından erişilemediğinden ve web kök dizininin üstünde ya da .htaccess ile korunan olduğundan emin olun </strong>:';
$lang['data_backup_not_writable'] = '(yazılabilir değil)';
$lang['data_backup_include_assets'] = 'assets klasörünü dahil et?';
$lang['data_backup_no_backup'] = 'Hayır, yedekleme';
$lang['data_backup_yes_backup'] = 'Evet, yedekle';