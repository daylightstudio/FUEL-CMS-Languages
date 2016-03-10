<?php 
$lang['module_backup'] = '备份';

$lang['data_backup_dashboard'] = '记得定期 <a href="'.fuel_url('tools/backup').'">备份您的数据库</a>';
$lang['data_last_backup'] = '上次备份';
$lang['data_backup'] = '数据已备份。';
$lang['cron_db_backup'] = "数据库已备份，文件名：%s";
$lang['cron_db_backup_asset'] = "数据库和资源文件夹已备份，文件名：%s";
$lang['cron_db_backed_up_already'] = '数据库已备份。';
$lang['cron_db_folder_not_writable'] = '%1s 目录不可写。请确保文件夹目录出去可写权限。';
$lang['cron_email'] = '电邮已发至 %1s';
$lang['cron_email_error'] = '发送电邮至 %1s 出错。';
$lang['cron_email_subject'] = '%1s 数据备份计划任务。';

$lang['data_backup_instructions'] = '您即将备份您的数据库。备份将整合在一个gzip文件让您下载。';
$lang['data_backup_instructions_writable'] = '备份文件也将存放于伺服器中的此目录：';
$lang['data_backup_instructions_not_writable'] = '您必须将以下目录设置可写权限并更改fuel config文件里的目录才能保存压缩备份本件。<strong>切记确保此目录读取权限岂限于root或者使用 .htaccess 保护目录。</strong>:';
$lang['data_backup_not_writable'] = '(不可写)';
$lang['data_backup_include_assets'] = '包括资源文件夹？';
$lang['data_backup_no_backup'] = '不，先别备份。';
$lang['data_backup_yes_backup'] = '是，就备份吧。';