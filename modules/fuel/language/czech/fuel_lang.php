<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Přihlášený jako:';
$lang['logout'] = 'Odhlásit';
$lang['fuel_developed_by'] = 'FUEL CMS verze %1s byla vyvinuta <a href="https://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> a vybudována na frameworku <a href="https://www.codeigniter.com" target="_blank">CodeIgniter</a>.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. All Rights Reserved.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "K této sekci nemáte přístupová práva.";
$lang['error_missing_module'] = "Chybí modul: %1s.";
$lang['error_invalid_login'] = 'Neplatné přihlášení';
$lang['error_max_attempts'] = 'Omlouváme se, ale vaše přístupové údaje nebyly vloženy správně a byli jste dočasně zablokování. Prosím zkuste to znovu za %s sekund.';
$lang['error_empty_user_pwd'] = 'Prosím, vložte uživatelské jméno a heslo.';
$lang['error_pwd_reset'] = 'Nastala chyba v resetování vašeho hesla.';
$lang['error_invalid_email'] = 'Emailová adresa, kterou jste zadali v systému neexistuje.';
$lang['error_invalid_password_match'] = 'Hesla nesouhlasí.';
$lang['error_empty_email'] = 'Prosím nastavte si emailovou adresu.';
$lang['error_no_permissions'] = 'K dokončení této akce nemáte dostatečná práva.';
$lang['error_page_layout_variable_conflict'] = 'Nastala chyba v tomto layoutu, protože obsahuje jedno nebo více rezervovaných slov: %1';
$lang['error_invalid_export_dir'] = 'Nelze provést export do adresáře %1s. Ujistěte se, že jsou správně nastavena práva zápisu.';
$lang['error_exporting_to_directory'] = 'Nastala chyba při zápisu do jednoho či více adresářů. Zkontrolujte výstup níže pro více informací.';
$lang['error_cache_folder_not_writable'] = 'Prosím nastavte v adresáři cache %1s práva k zápisu.';
$lang['error_exporting_view'] = 'Nastala chyba ve vytváření asociovaného view souboru v umístění: %1s protože jméno proměnné <strong><em>%2s</em></strong> neexistuje.';
$lang['error_no_curl_lib'] = 'Pro použití této funkce musíte mít nainstalováno rozšíření curl pro php.';
$lang['error_inline_page_edit'] = 'Tato proměnná musí být editována v asociovaném poli, které se nachází v souboru: views/_variables';
$lang['error_saving'] = 'Nastala chyba při ukládání.';
$lang['error_cannot_preview'] = 'Nastala chyba při pokusu o zobrazení náhledu této stránky.';
$lang['error_cannot_make_api_call'] = 'Nastala chyba při provádění API volání do %1s.';
$lang['error_sending_email'] = 'Nastala chyba při odesílání emailu: %1s.';
$lang['error_upload'] = 'Nastala chyba při uploadu souboru.';
$lang['error_create_nav_group'] = 'Vytvořte prosím Navigační skupinu.';
$lang['error_requires_string_value'] = 'Jméno pole musí mít hodnotu string.';
$lang['error_missing_params'] = 'Pro zobrazení této stránky chybí parametry.';


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>Striktně doporučejeme abyste si změnili vaše heslo z původního <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Tato položka není publikovaná.';
$lang['warn_not_active'] = '%1s není aktivní.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s je přihlášený";
$lang['logged_out'] = "%s se odhlásil";
$lang['dev_pwd_instructions'] = 'Na této stránce se v současné době pracuje a vzhledem k této skutečnosti vyžaduje k nahlížení heslo';
$lang['login_forgot_pwd'] = 'Zapomněli jste heslo?';
$lang['login_reset_pwd'] = 'Resetovat heslo';
$lang['login_btn'] = 'Login';


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Nástěnka';
$lang['dashboard_intro'] = 'Vítejte ve FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Poslední aktivita';
$lang['dashboard_hdr_latest_news'] = 'Poslední FUEL zprávy';
$lang['dashboard_hdr_modified'] = 'Poslední modifikované stránky';
$lang['dashboard_hdr_site_docs'] = 'Dokumentace webu';
$lang['dashboard_change_pwd'] = 'Změnit heslo';
$lang['dashboard_change_pwd_later'] = 'Změním si heslo později';
$lang['dashboard_subscribe_rss'] = 'Subscribe to the RSS Feed';
$lang['dashboard_view_all_pages'] = 'Zobrazit všechny stránky';
$lang['dashboard_view_all_activity'] = 'Zobrazit všechny aktivity';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Můj profil';
$lang['profile_instructions'] = 'Informace k profilu můžete změnit dole:';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/

$lang['pwd_reset'] = 'Email, který potvrzuje resetování vašeho hesla byl odeslán.';
$lang['pwd_reset_subject'] = "FUEL administrace, požadavek na změnu hesla";
$lang['pwd_reset_email'] = "Klikněte na následující link, abyste potvrdili resetování vašeho hesla do administrace:\n%1s";
$lang['pwd_reset_subject_success'] = "Heslo k FUEL administraci bylo úspěšně resetováno.";
$lang['pwd_reset_email_success'] = "Vaše heslo k FUEL administraci bylo resetováno na následující hodnotu: %1s. Pro změnu vašeho hesla se stačí přihlásit do FUEL CMS administrace s tímto heslem a dále kliknout na vaše přihlašovací jméno v horním rohu. Pak už budete moci snadno editovat vaše přistupové údaje.";
$lang['pwd_reset_success'] = 'Vaše heslo bylo úspěšně resetováno a zároveň Vám byl odeslán email s novým heslem.';
$lang['cache_cleared'] = "Cache stránek byla explicitně vyčištěna.";
$lang['module_restored_success'] = 'Předchozí verze byla úspěšně obnovena.';


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Nástěnka';
$lang['module_pages'] = 'Stránky';
$lang['module_blocks'] = 'Bloky';
$lang['module_navigation'] = 'Navigace';
$lang['module_assets'] = 'Knihovna médií';
$lang['module_sitevariables'] = 'Proměné';
$lang['module_users'] = 'Uživatelé';
$lang['module_permissions'] = 'Práva';
$lang['module_manage_cache'] = 'Cache stránky';
$lang['module_manage_activity'] = 'Záznam aktivity';

$lang['section_site'] = 'Website';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Moduly';
$lang['section_manage'] = 'Správa';
$lang['section_tools'] = 'Nástroje';
$lang['section_recently_viewed'] = 'Naposledy prohlédnuté';

/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s položka <em>%2s</em> vytvořena";
$lang['module_edited'] = "%1s položka <em>%2s</em> editována";
$lang['module_deleted'] = "%1s položka pro <em>%2s</em> smazána";
$lang['module_restored'] = "%1s položka obnovena z archivu.";
$lang['module_instructions_default'] = "Zde můžete spravovat %1s pro váš web.";

$lang['cannot_determine_module'] = "Nemohu určit modul.";
$lang['incorrect_route_to_module'] = "Špatná cesta k přistupu k modulu.";
$lang['data_saved'] = 'Data byla uložena.';
$lang['data_deleted'] = 'Data byla smazána.';
$lang['data_not_deleted'] = 'Některá data nemohla být smazána.';
$lang['no_data'] = 'Nejsou k dipozici žádná data k zobrazení.';
$lang['no_preview_path'] = 'K tomuto modulu není nastavena žádná cesta k náhledu.';
$lang['delete_item_message'] = 'Chystáte se smazat následující položku:';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'Specifikované umístění již existuje v souboru s routovacími informacemi. Jedná se o: (%1s):';
$lang['page_controller_assigned'] = 'Název této stránky je shodný s metodou v controlleru.';
$lang['page_updated_view'] = 'Byl nalezen aktualizovaný view soubor, který se nachází v: <strong>%1s</strong>. Chcete tento soubor importovat do těla této stránky?';
$lang['page_not_published'] = 'Tato stránka není publikovaná';
$lang['page_no_import'] = 'Ne, neimportovat';
$lang['page_yes_import'] = 'Ano, importovat';
$lang['page_information'] = 'Informace o stránce';
$lang['page_layout_vars'] = 'Proměné layoutu';

$lang['pages_instructions'] = 'Zde můžete spravovat veškerá data, která souvisí se stránkou.';
$lang['pages_associated_navigation'] = 'Přidružená navigace';
$lang['pages_success_upload'] = 'Šablona stránky byla úspěšně nahrána.';
$lang['pages_upload_instructions'] = 'Vyberte šablonu stránky a nahrajte pro stránku níže.';


// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Cache';
$lang['pages_last_updated_by'] = 'Poslední aktualizace proběhla: %1s Aktualizaci provedl: %2s';
$lang['pages_not_published'] = 'Stránka není publikovaná.';
$lang['pages_default_location'] = 'příklad: spolecnost/o_nas';


/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Byl nalezen aktualizovaný soubor šablony, který se nachází v: <strong>%1s</strong>. Chcete tento soubor importovat?';
$lang['blocks_success_upload'] = 'Soubor šablony pro blok byl úspěšně nahrán.';
$lang['blocks_upload_instructions'] = 'Vyberte soubor šablony pro blok a nahrajte jej níže.';

$lang['form_label_view'] = 'View';


/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_instructions'] = 'Zde můžete vytvářet a editovat položky horního menu.';
$lang['navigation_import_instructions'] = 'Označte skupinu navigace a nahrajte soubor k importu. Soubor by měl obsahovat PHP proměnnou typu pole <strong>$nav</strong>. Bližší informace o správném tvaru tohoto pole můžete najít v <a href="https://www.getfuelcms.com/user_guide/modules/fuel/navigation" target="_blank">uživatelské příručce</a>';
$lang['navigation_success_upload'] = 'Navigace byla úspěšně nahrána.';
$lang['form_label_navigation_group'] = 'Skupina navigace';
$lang['form_label_nav_key'] = 'Nav Klíč';
$lang['form_label_parent_id'] = 'Rodič';
$lang['form_label_attributes'] = 'Atributy';
$lang['form_label_selected'] = 'Vybráný';
$lang['form_label_hidden'] = 'Skrytý';

// for upload form
$lang['form_label_clear_first'] = 'Clear First';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'V této části můžete nahrávat média. V případě, že chcete nechat přepisovat soubory se stejným jménem, zvolte zaškrtávací možnost "přepsat". ';
$lang['form_label_preview/kb'] = 'Náhled/kb';
$lang['form_label_link'] = 'Cesta';
$lang['form_label_asset_folder'] = 'Adresář';
$lang['form_label_new_file_name'] = 'Nové jméno souboru';
$lang['form_label_subfolder'] = 'Podadresář';
$lang['form_label_overwrite'] = 'Přepsat';
$lang['assets_upload_action'] = 'Nahrát';


/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Zde můžete spravovat proměnné pro vaše stránky.';
$lang['sitevariables_scope'] = 'Rozsah';

/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Zde můžete spravovat uživatelská data.';
$lang['permissions_heading'] = 'Práva';
$lang['form_label_language'] = 'Jazyk';
$lang['form_label_send_email'] = 'Zaslat email';
$lang['btn_send_email'] = 'Odeslat email';
$lang['new_user_email_subject'] = 'Váš účet ve FUEL CMS byl úspěšně vytvořen.';
$lang['new_user_email'] = 'Váš účet ve FUEL CMS byl úspěšně vytvořen. Můžete se přihlásit s následujícími údaji:
Adresa pro přihlášení:'.site_url('fuel/login').'
Přihlašovací jméno: %1s
Heslo: %2s';
$lang['new_user_created_notification'] = 'Byl vytvořen nový uživatel a zároveň úspěšně odeslána notifikace na:  %1s.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'V této části můžete spravovat práva pro jednotlivé FUEL moduly a dále je přiřazovat uživatelům.';

// permissions
$lang['perm_assets'] = 'Knihovna médií';
$lang['perm_blocks'] = 'Správa bloků';
$lang['perm_blog/categories'] = 'Blog - Kategorie';
$lang['perm_blog/comments'] = 'Blog - Komentáře';
$lang['perm_blog/links'] = 'Blog - Linky';
$lang['perm_blog/posts'] = 'Blog - Příspěvky';
$lang['perm_blog/settings'] = 'Blog - Nastavení';
$lang['perm_blog/users'] = 'Blog Autoři';
$lang['perm_google_analytics'] = 'Google Analytics';
$lang['perm_manage'] = 'Zobrazit nastavení nástěnky';
$lang['perm_manage/activity'] = 'Zobrazit záznamy aktivit';
$lang['perm_manage/cache'] = 'Spravovat cache';
$lang['perm_myPHPadmin'] = 'myPHPadmin';
$lang['perm_navigation'] = 'Správa navigace';
$lang['perm_pages'] = 'Správa stránek';
$lang['perm_pages_delete'] = 'Schopnost mazat stránky';
$lang['perm_pages_publish'] = 'Schopnost publikovat stránky';
$lang['perm_permissions'] = 'Spravovat práva';
$lang['perm_projects'] = 'Projekty';
$lang['perm_projects_delete'] = 'Smazat projekty';
$lang['perm_projects_publish'] = 'Publikovat projekty';
$lang['perm_quotes'] = 'Citace';
$lang['perm_site_docs'] = 'Dokumentace stránek';
$lang['perm_sitevariables'] = 'Proměnné';
$lang['perm_tools'] = 'Spravovat nástroje';
$lang['perm_tools/backup'] = 'Spravovat zálohu databáze';
$lang['perm_tools/cronjobs'] = 'Cron joby';
$lang['perm_tools/seo'] = 'Analýza přístupů (SEO)';
$lang['perm_tools/seo/google_keywords'] = 'Google Keywords';
$lang['perm_tools/tester'] = 'Testovací modul';
$lang['perm_tools/user_guide'] = 'přístup k uživatelské příručce';
$lang['perm_tools/validate'] = 'Validace';
$lang['perm_users'] = 'Správa uživatelů';


/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_instructions'] = 'Právě se chystáte smazat cache stránek..';
$lang['cache_no_clear'] = 'Ne, nemazat cache';
$lang['cache_yes_clear'] = 'Ano, smazat cache';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'EDITOVAT';
$lang['table_action_delete'] = 'SMAZAT';
$lang['table_action_view'] = 'ZOBRAZIT';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Zobraz:';
$lang['label_restore_from_prev'] = 'Obnovit předešlou verzi...';
$lang['label_select_another'] = 'Vybrat jiný...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Seznam';
$lang['btn_tree'] = 'Strom';
$lang['btn_create'] = 'Vytvořit';
$lang['btn_delete_multiple'] = 'Smazat více položek';
$lang['btn_rearrange'] = 'Přeskupit';
$lang['btn_search'] = 'Hledat';
$lang['btn_view'] = 'Zobrazit';
$lang['btn_publish'] = 'Publikovat';
$lang['btn_unpublish'] = 'Nepublikovat';
$lang['btn_activate'] = 'Aktivovat';
$lang['btn_deactivate'] = 'Deaktivovat';
$lang['btn_delete'] = 'Smazat';
$lang['btn_duplicate'] = 'Duplikovat';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Nahrát soubor';

$lang['btn_no'] = 'Ne';
$lang['btn_yes'] = 'Ano';

$lang['btn_no_upload'] = 'Ne, nenahrát.';
$lang['btn_yes_upload'] = 'Ano, nahrát';

$lang['btn_no_dont_delete'] = 'Ne, nemazat';
$lang['btn_yes_dont_delete'] = 'Ano, smazat';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Jméno';
$lang['form_label_title'] = 'Titulek';
$lang['form_label_label'] = 'Štítek';
$lang['form_label_location'] = 'Umístění';
$lang['form_label_published'] = 'Publikován';
$lang['form_label_active'] = 'Aktivní';
$lang['form_label_precedence'] = 'Priorita';
$lang['form_label_date_added'] = 'Přidáno dne';
$lang['form_label_last_updated'] = 'Naposledy upraveno';
$lang['form_label_file'] = 'Soubor';
$lang['form_label_value'] = 'Hodnota';
$lang['form_label_email'] = 'Email';
$lang['form_label_user_name'] = 'Uživatelské jméno';
$lang['form_label_first_name'] = 'Jméno';
$lang['form_label_last_name'] = 'Příjmení';
$lang['form_label_super_admin'] = 'Super Admin';
$lang['form_label_password'] = 'Heslo';
$lang['form_label_confirm_password'] = 'Potvrďte heslo';
$lang['form_label_new_password'] = 'Nové heslo';
$lang['form_label_description'] = 'Popis';
$lang['form_label_entry_date'] = 'Datum příspěvku';
$lang['form_label_message'] = 'Zpráva';
$lang['form_label_image'] = 'Nahrát obrázek';
$lang['form_label_upload_image'] = 'Nahrát obrázek';
$lang['form_label_upload_images'] = 'Nahrát obrázky';
$lang['form_label_content'] = 'Obsah';
$lang['form_label_excerpt'] = 'Výtah';
$lang['form_label_permalink'] = 'Permalink';
$lang['form_label_slug'] = 'Titulek';
$lang['form_label_url'] = 'URL';
$lang['form_label_group_id'] = 'Skupina';

$lang['form_enum_option_yes'] = 'ano';
$lang['form_enum_option_no'] = 'ne';

$lang['required_text'] = 'povinná pole';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_fiel_main_copy'] = 'Toto je hlavní layout, který využívají vaše stránky.';
$lang['layout_field_page_title'] = 'Titulek stránky';
$lang['layout_field_meta_description'] = 'Meta popis';
$lang['layout_field_meta_keywords'] = 'Meta klíčová slova';
$lang['layout_field_body'] = 'Tělo';
$lang['layout_field_body_description'] = 'Hlavní obsah stránky';
$lang['layout_field_body_class'] = 'HTML Třída těla';
$lang['layout_field_redirect_to'] = 'Přesměrovat do';

$lang['layout_field_301_redirect_copy'] = 'Tento layout provede přesměrování (301 redirect) na jinou stránku.';
$lang['layout_field_sitemap_xml_copy'] = 'Tento layout je využíván ke generování mapy stránek (soubor sitemap).';
$lang['layout_field_none_copy'] = 'This layout is the equivalent of having no layout assigned.';

$lang['layout_field_main_copy'] = 'Toto je hlavní layout, který využívají vaše stránky.';
$lang['layout_field_frequency'] = 'Frekvence';
$lang['layout_field_frequency_always'] = 'vždy';
$lang['layout_field_frequency_hourly'] = 'každou hodinu';
$lang['layout_field_frequency_daily'] = 'denně';
$lang['layout_field_frequency_weekly'] = 'týdně';
$lang['layout_field_frequency_monthly'] = 'měsíčně';
$lang['layout_field_frequency_yearly'] = 'ročně';
$lang['layout_field_frequency_never'] = 'nikdy';


/*
|--------------------------------------------------------------------------
| MISC
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; První';
$lang['pagination_last_link'] = 'Poslední &rsaquo;';

$lang['action_edit'] = 'Editovat';
$lang['action_create'] = 'Vytvořit';


// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */