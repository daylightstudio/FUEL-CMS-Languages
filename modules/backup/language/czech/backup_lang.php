<?php 
$lang['module_backup'] = 'Zálohování';
$lang['data_last_backup'] = 'Poslední záloha';

$lang['data_backup_dashboard'] = 'Nezapomeňte pravidelně <a href="'.fuel_url('tools/backup').'">zálohovat vaši databázi</a>';
$lang['data_backup'] = 'Data byla zálohována.';
$lang['cron_db_backup'] = "Databáze zálohována do souboru: %s.";
$lang['cron_db_backup_asset'] = "Databáze a knihovna médií zálohována do souboru:: %s.";
$lang['cron_db_backed_up_already'] = 'Databáze již byla zálohována.';
$lang['cron_db_folder_not_writable'] = 'Do adresáře %1s se nedá zapisovat. Ujistěte se, že jsou nastavena potřebná práva pro zápis.';
$lang['cron_email'] = 'Email byl odeslán: %1s';
$lang['cron_email_error'] = 'Nastala chyba při odesílání emailu na adresu: %1s.';
$lang['cron_email_subject'] = 'Cron záloha pro %1s.';

$lang['data_backup_instructions'] = 'Právě se chystáte zálohovat databázi. Váš internetový prohlížeč vám nabídne gzip soubor zálohy ke stažení.';
$lang['data_backup_instructions_writable'] = 'Program zároveň vytvoří soubor se zálohou na straně serveru v nastaveném adresáři.';
$lang['data_backup_instructions_not_writable'] = 'Ujistěte se, že jsou nastavena potřebná práva pro zápis v následujícím adresáři, aby bylo možné uložit zazipovaný soubor se zálohou na server. Buď nastavte adresáři potřebná práva nebo změňte cestu adresáře v config souboru. <strong>Ujistěte se také, že adresář nebude přístupný ostatním návštěvníkům a je buď nad kořenem webu nebo je přistup do něj omezen v souboru .htaccess </strong>:';
$lang['data_backup_not_writable'] = '(není zapisovatelný)';
$lang['data_backup_include_assets'] = 'Chcete zahrnout i knihovnu médií?';
$lang['data_backup_no_backup'] = 'Ne, nezálohovat';
$lang['data_backup_yes_backup'] = 'Ano, zálohovat';

