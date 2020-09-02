<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Prisijungęs kaip:';
$lang['logout'] = 'Atsijungti';
$lang['fuel_developed_by'] = 'FUEL CMS versija %1s sukurta <a href="https://www.thedaylightstudio.com" target="_blank">Daylight Studio</a>, remiantis <a href="https://www.codeigniter.com" target="_blank">CodeIgniter</a> sistema.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. Visos teisės saugomos.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = 'Jūs neturite prieigos prie šio puslapio. <a href="%1s">Bandykite prisijungti dar kartą</a>.';
$lang['error_missing_module'] = "Trūksta modulio %1s.";
$lang['error_invalid_login'] = 'Netinkami prisijungimo duomenys.';
$lang['error_max_attempts'] = 'Atsiprašome, bet jūsų prisijungimo informacija neteisinga ir prisijungimas laikinai blokuojamas. Bandykite dar kartą po %s sek.';
$lang['error_empty_user_pwd'] = 'Įveskite vartotojo vardą ir slaptažodį.';
$lang['error_pwd_reset'] = 'Iš naujo nustatant slaptažodį įvyko klaida.';

$lang['error_pwd_too_short'] = 'Įvestas slaptažodis neatitinka %1s simbolių minimalaus ilgio reikalavimo.';
$lang['error_pwd_too_long'] = 'Įvestas slaptažodis viršija %1s simbolių maksimalaus ilgio reikalavimą.';
$lang['error_pwd_invalid'] = 'Pasirinkite stipresnį slaptažodį. Pabandykite %1s.';


$lang['error_invalid_email'] = 'Nurodyto el. pašto adreso nebuvo sistemoje.';
$lang['error_invalid_password_match'] = 'Slaptažodžiai nesutampa.';
$lang['error_empty_email'] = 'Įveskite el. pašto adresą.';
$lang['error_folder_not_writable'] = 'Aplankas %1s turi būti įrašomas.';
$lang['error_invalid_folder'] = 'Netinkamas aplankas %1s';
$lang['error_file_already_exists'] = 'Failas %1s jau egzistuoja.';
$lang['error_zip'] = 'Kuriant suglaudintą failą įvyko klaida.';
$lang['error_no_permissions'] = 'Neturite teisių atlikti šį veiksmą. <a href="%1s">Bandykite prisijungti dar kartą</a>.';
$lang['error_no_lib_permissions'] = 'Jūs neturite teisės vykdyti metodų %1s klasėje.';
$lang['error_page_layout_variable_conflict'] = 'Yra šio maketo klaida, nes jo nėra arba jame yra vienas ar daugiau iš šių rezervuotų žodžių: %1s';
$lang['error_no_curl_lib'] = 'Norint naudoti šiuos įrankius, būtinas PHP cURL modulis.';
$lang['error_inline_page_edit'] = 'Šis kintamasis turi būti įrašytas administravimo puslapyje arba susijusiame views/_variables faile.';
$lang['error_saving'] = 'Įrašant įvyko klaida.';
$lang['error_cannot_preview'] = 'Bandant peržiūrėti šį puslapį įvyko klaida.';
$lang['error_cannot_make_api_call'] = 'Įvyko klaida vykdant API užklausą į %1s.';
$lang['error_sending_email'] = 'Įvyko klaida siunčiant el. laišką į %1s.';
$lang['error_upload'] = 'Įkeliant jūsų failą įvyko klaida. Įsitikinkite, kad serveris leidžia įkelti tokio dydžio failus, ir aplankai yra įrašomi.';
$lang['error_create_nav_group'] = 'Sukurkite Navigacijos Grupę';
$lang['error_requires_string_value'] = 'Pavadinimo laukas turi būti eilutės ("string") reikšmė';
$lang['error_missing_params'] = 'Šiam puslapiui peržiūrėti trūksta parametrų';
$lang['error_invalid_method'] = 'Neleistinas metodo pavadinimas';
$lang['error_curl_page'] = 'Klaida įkeliant puslapį su CURL';
$lang['error_class_property_does_not_exist'] = 'Klasės savybė %1s neegzistuoja';
$lang['error_class_method_does_not_exist'] = 'Klasės metodas %1s neegzistuoja';
$lang['error_could_not_create_folder'] = 'Nepavyko sukurti aplanko %1s';
$lang['error_could_not_create_file'] = 'Nepavyko sukurti failo %1s';
$lang['error_no_build'] = "Nėra šio modulio komponavimo sąrankos.\n";
$lang['error_invalid_record'] = "Modulio įrašas neegzistuoja.";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>Labai rekomenduojama pakeisti slaptažodį iš numatytojo <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Šis elementas nepaskelbtas.';
$lang['warn_not_active'] = 'Šis %1s yra neaktyvus.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s prisijungė";
$lang['logged_out'] = "%s atsijungė";
$lang['dev_pwd_instructions'] = 'Ši svetainė šiuo metu kuriama ir norint ją peržiūrėti reikia slaptažodžio.';
$lang['login_forgot_pwd'] = 'Pamiršote slaptažodį?';
$lang['login_reset_pwd'] = 'Nustatyti naują slaptažodį';
$lang['login_btn'] = 'Prisijungti';
$lang['logout_restore_original_user'] = 'Atkurti pradinį vartotoją';

$lang['auth_log_pass_reset_request'] = "Slaptažodžio nustatymo iš naujo užklausa '%1s' iš %2s";
$lang['auth_log_pass_reset'] = "Vartotojo '%1s' slaptažodis pakeistas iš %2s";
$lang['auth_log_cms_pass_reset'] = "Vartotojo '%1s' slaptažodis pakeistas per TVS iš %2s";
$lang['auth_log_login_success'] = "Sėkmingas vartotojo '%1s' prisijungimas iš %2s";
$lang['auth_log_failed_updating_login_info'] = "Įvyko klaida atnaujinant vartotojo '%1s' informaciją iš %2s";
$lang['auth_log_failed_login'] = "Nepavykęs vartojo '%1s' prisijungimas iš %2s, prisijungimo bandymų: %3s";
$lang['auth_log_account_lockout'] = "Paskyros blokavimas vartotojui '%1s' iš %2s";

$lang['pwd_requirements'] = '<p style="text-align: left; margin: 10px 0 5px 0;"><strong>Slaptažodis turi būti:</strong></p>';
$lang['pwd_min_length_required'] = 'Ne mažiau kaip %1s simbolių';
$lang['pwd_max_length_required'] = 'Ne daugiau kaip %1s simbolių';
$lang['pwd_lowercase_required'] = 'Viena ar daugiau mažųjų raidžių';
$lang['pwd_uppercase_required'] = 'Viena ar daugiau didžiųjų raidžių';
$lang['pwd_numbers_required'] = 'Vienas ar daugiau numerių';
$lang['pwd_symbols_required'] = 'Vienas ar daugiau simbolių';

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Prietaisų Skydelis';
$lang['dashboard_intro'] = 'Sveiki atvykę į FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Naujausia Veikla';
$lang['dashboard_hdr_latest_news'] = 'Paskutinės FUEL Naujienos';
$lang['dashboard_hdr_modified'] = 'Vėliausiai Modifikuoti Puslapiai';
$lang['dashboard_hdr_site_docs'] = 'Svetainės Dokumentacija';
$lang['dashboard_change_pwd'] = 'Keisti slaptažodį';
$lang['dashboard_change_pwd_later'] = 'Pakeisiu slaptažodį vėliau';
$lang['dashboard_subscribe_rss'] = 'Prenumeruoti RSS';
$lang['dashboard_view_all_pages'] = 'Peržiūrėti visus puslapius';
$lang['dashboard_view_all_activity'] = 'Peržiūrėti visą veiklą';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Mano Profilis';
$lang['profile_instructions'] = 'Žemiau pakeiskite savo profilio informaciją:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'Mano Moduliai';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
//$lang['pwd_reset'] = 'An email to confirm your password reset is on its way.';
$lang['pwd_reset_error'] = 'Įvestas el. pašto adresas neturi aktyvaus atstatymo rakto. Norėdami gauti naują nuorodą iš naujo, pateikite naujo slaptažodžio nustatymo formą.';
$lang['pwd_reset_success'] = 'Jūsų slaptažodis buvo sėkmingai nustatytas iš naujo, prašome prisijungti.';

$lang['pwd_reset_error_not_match'] = 'Pateikti slaptažodžiai nesutampa.';

$lang['pwd_reset_missing_token'] = 'Trūksta arba neteisingas atstatymo raktas.';
$lang['pwd_reset_success'] = 'Jūsų slaptažodis buvo sėkmingai nustatytas iš naujo, prašome prisijungti su savo vartotojo vardu ir slaptažodžiu.';
$lang['pwd_reset'] = 'Išsiųstas el. laiškas su slaptažodžio nustatymo iš naujo nuoroda.';
$lang['pwd_reset_subject'] = "FUEL administratoriaus slaptažodžio nustatymo iš naujo užklausa";
$lang['pwd_reset_email'] = "Spustelėkite šią nuorodą, kad iš naujo nustatytumėte FUEL slaptažodį:\n%1s";
$lang['pwd_reset_subject_success'] = "FUEL administratoriaus slaptažodis iš naujo nustatytas sėkmingai";
//$lang['pwd_reset_email_success'] = "Your FUEL password has been reset to %1s. To change your password, login to the FUEL CMS admin with this password and click on your login name in the upper right to access your profile information.";
$lang['pwd_reset_email_success'] = 'Išsiųstas el. laiškas su slaptažodžio nustatymo iš naujo nuoroda.';
$lang['cache_cleared'] = "Svetainės talpykla išvalyta";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Prietaisų Skydelis';
$lang['module_pages'] = 'Puslapiai';
$lang['module_blocks'] = 'Blokai';
$lang['module_navigation'] = 'Navigacija';
$lang['module_categories'] = 'Kategorijos';
$lang['module_tags'] = 'Žymos';
$lang['module_assets'] = 'Failai';
$lang['module_sitevariables'] = 'Svetainės Kintamieji';
$lang['module_users'] = 'Vartotojai';
$lang['module_permissions'] = 'Leidimai';
$lang['module_tools'] = 'Įrankiai';
$lang['module_manage_cache'] = 'Puslapių Talpykla';
$lang['module_manage_activity'] = 'Veiklos Žurnalas';
$lang['module_manage_settings'] = 'Nustatymai';
$lang['module_generate'] = 'Sugeneruota';


$lang['section_site'] = 'Svetainė';
$lang['section_blog'] = 'Tinklaraštis';
$lang['section_modules'] = 'Moduliai';
$lang['section_manage'] = 'Tvarkyti';
$lang['section_tools'] = 'Įrankiai';
$lang['section_settings'] = 'Nustatymai';
$lang['section_recently_viewed'] = 'Neseniai Žiūrėta';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s elementas <em>%2s</em> sukurtas";
$lang['module_edited'] = "%1s elementas <em>%2s</em> redaguotas";
$lang['module_deleted'] = "%1s elementas <em>%2s</em> ištrintas";
$lang['module_multiple_deleted'] = "Keletas <em>%1s</em> ištrinti";
$lang['module_restored'] = "%1s elementas atkurtas iš archyvo";
$lang['module_instructions_default'] = "Čia galite tvarkyti %1s savo svetainei.";
$lang['module_restored_success'] = 'Ankstesnė versija sėkmingai atkurta.';
$lang['module_replaced_success'] = 'Šio įrašo turinys buvo sėkmingai pakeistas.';
$lang['module_incompatible'] = 'Šio modulio versija nesuderinama su įdegta FUEL versija '.FUEL_VERSION;

$lang['cannot_determine_module'] = "Nepavyko nustatyti modulio.";
$lang['incorrect_route_to_module'] = "Neteisingas maršrutas norint patekti į šį modulį.";
$lang['data_saved'] = 'Duomenys išsaugoti.';
$lang['data_deleted'] = 'Duomenys ištrinti.';
$lang['data_not_deleted'] = 'Kai kurių ar visų duomenų nepavyko ištrinti.';
$lang['no_data'] = 'Nėra duomenų, kuriuos būtų galima rodyti.';
$lang['no_preview_path'] = 'Šiam moduliui nėra priskirtas peržiūros kelias.';
$lang['delete_item_message'] = 'Ketinate ištrinti elementą:';
$lang['replace_item_message'] = 'Žemiau pateiktame sąraše pasirinkite įrašą, kurį norite pakeisti. Duomenys bus perkelti iš vieno įrašo į kitą ir senas įrašas ištrintas.';
$lang['error_select_replacement'] = 'Keičiant modulio įrašą įvyko klaida.';

// command line
$lang['module_install'] = "The '%1s' module has successfully been installed.\n";
$lang['module_install_error'] = "There was an error installing the '%1s' module.\n";

$msg = "The module %1s has been uninstalled in FUEL.\n\n";
$msg .= "However, removing a module from GIT is a little more work that we haven't automated yet. However, the below steps should help.\n\n";
$msg .= "1. Delete the relevant section from the .gitmodules file.\n";
$msg .= "2. Delete the relevant section from .git/config.\n";
$msg .= "3. Run git rm --cached %2s (no trailing slash).\n";
$msg .= "4. Commit and delete the now untracked submodule files.\n";
$lang['module_uninstall'] = $msg;

$lang['module_update'] = "The module %1s has been updated in FUEL.\n";

// build
$lang['module_build_asset'] = "%1s optimized and output to %2s\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "You have successfully migrated to version %s.\n";
$lang['migrate_nothing_todo'] = "No migrations were necessary.\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = 'Išplėstinė paieška';
$lang['reset_search'] = 'Iš naujo nustatyti paiešką';
$lang['num_items'] = 'item'; // TODO Using English here as \Module::items appends an "s" during pluralization

/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'Nurodyta vieta turi šiuos maršrutus, kurie jau nurodyti maršrutų faile (%1s):';
$lang['page_controller_assigned'] = 'Šiam puslapiui jau priskirtas valdiklio metodas.';
$lang['page_updated_view'] = 'Yra atnaujintas rodinio failas, esantis <strong>%1s</strong>. Ar norite įkelti jį į savo puslapio tekstą (jei yra)?';
$lang['page_not_published'] = 'Šis puslapis nepaskelbtas.';

$lang['page_no_upload'] = 'Ne, neįkelti';
$lang['page_yes_upload'] = 'Taip, įkelti';
$lang['page_information'] = 'Puslapio informacija';
$lang['page_layout_vars'] = 'Maketo kintamieji';

$lang['pages_instructions'] = 'Čia galite tvarkyti su puslapiu susietus duomenis.';
$lang['pages_associated_navigation'] = 'Susieta navigacija';
$lang['pages_success_upload'] = 'Puslapio rodinys sėkmingai įkeltas.';
$lang['pages_upload_instructions'] = 'Pasirinkite peržiūros failą ir įkelkite į žemiau esantį puslapį.';
$lang['pages_select_action'] = 'Pasirinkti';

// page specific form fields
$lang['form_label_layout'] = 'Maketas';
$lang['form_label_cache'] = 'Talpykla';
$lang['pages_last_updated'] = 'Paskutinį kartą atnaujinta %1s';
$lang['pages_last_updated_by'] = 'Paskutinį kartą atnaujinta %1s vartotojo %2s';
$lang['pages_not_published'] = 'Šis puslapis nepublikuojamas.';
$lang['pages_default_location'] = 'pavyzdys: company/about';

$lang['form_label_page'] = 'Puslapis';
$lang['form_label_target'] = 'Taikinys';
$lang['form_label_class'] = 'Klasė';

$lang['navigation_related'] = 'Sukurti navigaciją';
$lang['navigation_quick_add'] = 'Šis laukas leidžia greitai įtraukti naršymo elementą šiam puslapiui. Naršymo elementą sukurti leidžiama tik kuriant puslapį. Norėdami redaguoti naršymo elementą, turite spustelėti nuorodą "Navigacija" kairėje, rasti norimą pakeisti naršymo elementą ir spustelėti redagavimo nuorodą.';

$lang['page_select_pages'] = 'Puslapiai';
$lang['page_select_pdfs'] = 'PDF failai';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Yra atnaujintas rodinio failas, esantis <strong>%1s</strong>. Ar norite jį importuoti?';
$lang['blocks_success_upload'] = 'Bloko rodinys sėkmingai įkeltas.';
$lang['blocks_upload_instructions'] = 'Pasirinkite bloko rodinio failą ir įkelkite jį žemiau.';

$lang['form_label_view'] = 'Rodinys';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Importuoti Navigaciją';
$lang['navigation_instructions'] = 'Čia galite sukurti ir redaguoti puslapio viršutinio meniu elementus.';
$lang['navigation_import_instructions'] = 'Žemiau galite importuoti savo <code>views/_variables/nav.php</code> failą, arba JSON failą su navigacijos masyvu. Norėdami daugiau informacijos apie masyvo formatą, kreipkitės į <a href="https://docs.getfuelcms.com/general/navigation" target="_blank">vartotojo vadovą</a>.';
$lang['navigation_import_file_comment'] = 'Jei joks failas nėra įkeltas, bus naudojamas views/_variables/nav.php. Failas turi būti JSON formato';
$lang['navigation_success_upload'] = 'Navigacija sėkmingai įkelta.';
$lang['form_label_navigation_group'] = 'Navigacijos grupė:';
$lang['form_label_nav_key'] = 'Raktas';
$lang['form_label_parent_id'] = 'Pirminis';
$lang['form_label_attributes'] = 'Atributai';
$lang['form_label_selected'] = 'Pasirinktas';
$lang['form_label_hidden'] = 'Paslėptas';

$lang['error_location_parents_match'] = 'Vieta ir pirminė vieta negali sutapti.';

// for upload form
$lang['form_label_clear_first'] = 'Pirma išvalyti';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Čia galite įkelti naujus failus. Pasirinkite "Perrašyti", jei norite perrašyti failą tokiu pačiu pavadinimu.';
$lang['form_label_preview/kb'] = 'Peržiūra/kb';
$lang['form_label_link'] = 'Nuoroda';
$lang['form_label_asset_folder'] = 'Failų aplankas';
$lang['form_label_new_file_name'] = 'Naujas failo vardas';
$lang['form_label_subfolder'] = 'Poaplankis';
$lang['form_label_overwrite'] = 'Perrašyti';
$lang['form_label_create_thumb'] = 'Sukurti miniatūrą';
$lang['form_label_resize_method'] = 'Dydžio keitimo metodas';
$lang['form_label_maintain_ratio'] = 'išlaikyti santykį';
$lang['form_label_resize_and_crop'] = 'apkarpyti, jei reikia';
$lang['form_label_overwrite'] = 'Perrašyti';
$lang['form_label_width'] = 'Plotis';
$lang['form_label_height'] = 'Aukštis';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'Lygiavimas';
$lang['form_label_master_dim'] = 'Pagrindinė dimensija';
$lang['form_label_unzip'] = 'Išpakuoti zip failus';
$lang['assets_upload_action'] = 'Įkelti';
$lang['assets_select_action'] = 'Pasirinkti';
$lang['assets_comment_asset_folder'] = 'Katalogas, į kurį bus įkeliamas failas';
$lang['assets_comment_filename'] = 'Jei nenurodytas joks vardas, bus naudojamas esamo failo vardas.';
$lang['assets_comment_subfolder'] = 'Bandys sukurti naują poaplankį jūsų failo įkėlimui.';
$lang['assets_comment_overwrite'] = 'Perrašyti failą tuo pačiu pavadinimu. Jei nepažymėta, bus įkeltas naujas failas su versijos numeriu pavadinimo gale.';
$lang['assets_heading_general'] = 'Bendri';
$lang['assets_heading_image_specific'] = 'Nuotraukų';
$lang['assets_comment_thumb'] = 'Sukurti paveikslėlio miniatiūrą.';
$lang['assets_comment_resize_method'] = 'Išlaiko nuotraukos proporcijas arba keičia vaizdo dydį ir apkarpo vaizdą, kad jis atitiktų pateiktus matmenis. Jei pasirinkta "Kurti miniatiūrą", tai turės įtakos tik miniatiūros dydžiui.';
$lang['assets_comment_width'] = 'Pakeis vaizdo plotį į norimą reikšmę. Jei pasirinkta "Kurti miniatiūrą", tai turės įtakos tik miniatiūros dydžiui.';
$lang['assets_comment_height'] = 'Pakeis vaizdo aukštį į norimą reikšmę. Jei pasirinkta "Kurti miniatiūrą", tai turės įtakos tik miniatiūros dydžiui.';
$lang['assets_comment_master_dim'] = 'Nurodo pagrindinę dimensiją, naudotiną keičiant vaizdo dydį. "auto" nustato ašį automatiškai, atsižvelgiant į tai, ar vaizdas yra aukštesnis nei platesnis, ar atvirkščiai.';
$lang['assets_comment_unzip'] = 'Išpakuoja ZIP failą';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Čia galite valdyti svetainės kintamuosius.';
$lang['sitevariables_scope'] = 'Taikymo sritis';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Čia galite tvarkyti vartotojų duomenis.';
$lang['permissions_heading'] = 'Leidimai';
$lang['form_label_language'] = 'Kalba';
$lang['form_label_send_email'] = 'Siųsti el. laišką';
$lang['btn_send_email'] = 'Siųsti el. laišką';
$lang['new_user_email_subject'] = 'Jūsų FUEL CMS paskyra sukurta';
$lang['new_user_email'] = 'Jūsų FUEL CMS paskyra buvo sukurta su vartotojo vardu "%1s". Spustelėkite šią nuorodą, kad nustatytumėte FUEL slaptažodį: 
%2s';
$lang['new_user_account_email'] = 'Jūsų FUEL CMS paskyra buvo sukurta su vartotojo vardu "%2s" ir slaptažodžiu "%3s". 
Spustelėkite šią nuorodą, norėdami prisijungti: %1s';
$lang['new_user_created_notification'] = 'Vartotojo informacija sėkmingai įrašyta ir pranešimas buvo išsiųstas %1s.';
$lang['error_cannot_deactivate_yourself'] = 'Negalite deaktyvuoti savęs.';

/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Čia galite valdyti FUEL modulių leidimus ir vėliau priskirti juos vartotojams.';
$lang['form_label_other_perms'] = 'Generuoti susijusius paprastų<br /> modulių leidimus';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'Talpykla išvalyta.';
$lang['cache_instructions'] = 'Ketinate išvalyti svetainės talpyklą.';
$lang['cache_no_clear'] = 'Ne, nevalyti talpyklos';
$lang['cache_yes_clear'] = 'Taip, išvalyti talpyklą';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'Nėra jokių nustatymų, skirtų išplėstiniams moduliams, kuriuos būtų galima valdyti.';
$lang['settings_manage'] = 'Tvarkyti šių išplėstinių modulių nustatymus:';
$lang['settings_problem'] = 'Kilo problema dėl išplėstinio modulio <strong>%1s</strong> nustatymų. <br />Patikrinkite, jog <strong>/fuel/modules/%1s/config/%1s.php</strong> konfigūracija leidžia apdoroti nustatymus.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'This is not a CLI request.';
$lang['error_not_in_dev_mode'] = 'This will only run in dev mode.';
$lang['error_missing_generation_files'] = 'There are no generation files to create for %1s.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'REDAGUOTI';
$lang['table_action_delete'] = 'IŠTRINTI';
$lang['table_action_view'] = 'RODYTI';
$lang['click_to_toggle'] = 'perjungti';
$lang['table_action_login_as'] = 'PRISIJUNGTI KAIP';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Rodyti:';
$lang['label_language'] = 'Kalba:';
$lang['label_restore_from_prev'] = 'Atkurti iš ankstesnės versijos...';
$lang['label_select_another'] = 'Pasirinkite kitą...';
$lang['label_select_one'] = 'Pasirinkite vieną...';
$lang['label_belongs_to'] = 'Priklauso';
$lang['label_select_a_language'] = 'Pasirinkite kalbą...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Sąrašas';
$lang['btn_tree'] = 'Medis';
$lang['btn_create'] = 'Sukurti';
$lang['btn_delete_multiple'] = 'Ištrinti kelis';
$lang['btn_rearrange'] = 'Pertvarkyti';
$lang['btn_search'] = 'Ieškoti';
$lang['btn_view'] = 'Rodyti';
$lang['btn_publish'] = 'Paskelbti';
$lang['btn_unpublish'] = 'Atšaukti paskelbimą';
$lang['btn_activate'] = 'Aktyvinti';
$lang['btn_deactivate'] = 'Išjungti';
$lang['btn_delete'] = 'Ištrinti';
$lang['btn_duplicate'] = 'Daryti kopiją';
$lang['btn_replace'] = 'Pakeisti';
$lang['btn_ok'] = 'Gerai';
$lang['btn_upload'] = 'Įkelti';
$lang['btn_download'] = 'Parsisiųsti';
$lang['btn_export_data'] = 'Eksportuoti duomenis';

$lang['btn_no'] = 'Ne';
$lang['btn_yes'] = 'Taip';

$lang['btn_no_upload'] = 'Ne, neįkelkite jo';
$lang['btn_yes_upload'] = 'Taip, įkelkite jį';

$lang['btn_no_dont_delete'] = 'Ne, neištrinkite jo';
$lang['btn_yes_dont_delete'] = 'Taip, ištrinkite jį';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Vardas';
$lang['form_label_title'] = 'Antraštė';
$lang['form_label_label'] = 'Etiketė';
$lang['form_label_location'] = 'Vieta';
$lang['form_label_published'] = 'Paskelbtas';
$lang['form_label_active'] = 'Aktyvus';
$lang['form_label_precedence'] = 'Eiliškumas';
$lang['form_label_date_added'] = 'Įtraukimo data';
$lang['form_label_last_updated'] = 'Paskutinį kartą atnaujinta';
$lang['form_label_file'] = 'Failas';
$lang['form_label_value'] = 'Reikšmė';
$lang['form_label_email'] = 'El. paštas';
$lang['form_label_user_name'] = 'Vartotojo vardas';
$lang['form_label_first_name'] = 'Vardas';
$lang['form_label_last_name'] = 'Pavardė';
$lang['form_label_super_admin'] = 'Super administratorius';
$lang['form_label_password'] = 'Slaptažodis';
$lang['form_label_confirm_password'] = 'Patvirtinti slaptažodį';
$lang['form_label_new_password'] = 'Naujas slaptažodis';
$lang['form_label_new_invite'] = 'Siųsti naują vartotojo kvietimą';
$lang['form_label_description'] = 'Aprašymas';
$lang['form_label_entry_date'] = 'Įrašo data';
$lang['form_label_message'] = 'Žinutė';
$lang['form_label_image'] = 'Vaizdas';
$lang['form_label_upload_image'] = 'Įkelti vaizdą';
$lang['form_label_upload_images'] = 'Įkelti vaizdus';
$lang['form_label_content'] = 'Turinys';
$lang['form_label_excerpt'] = 'Ištrauka';
$lang['form_label_permalink'] = 'Nuolatinė nuoroda';
$lang['form_label_slug'] = 'Šliužas';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Nuoroda';
$lang['form_label_pdf'] = 'PDF';
$lang['form_label_canonical'] = 'Canonical';
$lang['form_label_og_title'] = 'Open Graph antraštė';
$lang['form_label_og_description'] = 'Open Graph aprašymas';
$lang['form_label_og_image'] = 'Open Graph vaizdas';
$lang['form_label_category_id'] = 'Kategorija';
$lang['form_label_context'] = 'Kontekstas';

$lang['form_label_group_id'] = 'Grupė';
$lang['form_label_or_select'] = 'ARBA pasirink';

$lang['form_enum_option_yes'] = 'taip';
$lang['form_enum_option_no'] = 'ne';

$lang['required_text'] = 'privalomi laukai';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'Tai pagrindinis jūsų svetainės maketas.';
$lang['layout_field_page_title'] = 'Puslapio pavadinimas';
$lang['layout_field_meta_description'] = 'Meta aprašymas';
$lang['layout_field_meta_keywords'] = 'Meta raktažodžiai';
$lang['layout_field_body'] = 'Tekstas';
$lang['layout_field_heading'] = 'Antraštė';
$lang['layout_field_body_description'] = 'Pagrindinis puslapio turinys';
$lang['layout_field_body_class'] = 'Teksto klasė';
$lang['layout_field_redirect_to'] = 'Peradresuoti į';
$lang['layout_field_alias'] = 'Aliasas';

$lang['layout_field_301_redirect_copy'] = 'Šis maketas atliks 301 peradresavimą į kitą puslapį.';
$lang['layout_field_alias_copy'] = 'Šis maketas panašus į 301 peradresavimą, tačiau puslapio nuoroda nesikeičia, o <br />puslapio turinys iš nurodytos vietos naudojamas puslapiui generuoti.';
$lang['layout_field_sitemap_xml_copy'] = 'Šis maketas naudojamas svetainės schemai generuoti. Kad šis puslapis būtų rodomas, serveryje neturi būti sitemap.xml.';
$lang['layout_field_robots_txt_copy'] = 'Šis maketas naudojamas robots.txt failui generuoti. Kad šis puslapis būtų rodomas, serveryje neturi būti robots.txt.';
$lang['layout_field_none_copy'] = 'Šis maketas reiškia "nenaudoti maketo".';

$lang['layout_field_frequency'] = 'Dažnumas';
$lang['layout_field_frequency_always'] = 'visada';
$lang['layout_field_frequency_hourly'] = 'kas valandą';
$lang['layout_field_frequency_daily'] = 'kasdien';
$lang['layout_field_frequency_weekly'] = 'kas savaitę';
$lang['layout_field_frequency_monthly'] = 'kas mėnesį';
$lang['layout_field_frequency_yearly'] = 'kas metus';
$lang['layout_field_frequency_never'] = 'niekada';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'Dukart spustelėkite, kad atidarytumėte';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; Pirmas';
$lang['pagination_last_link'] = 'Paskutinis &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = 'Redaguoti';
$lang['action_create'] = 'Sukurti';
$lang['action_delete'] = 'Ištrinti';
$lang['action_upload'] = 'Įkelti';
$lang['action_replace'] = 'Pakeisti';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = 'Sėkminga duomenų bazės migracija į versiją %1s';

//$lang['import'] = 'Import';

/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "The FUEL CMS installer is an easy way to setup the CMS with common configurations. It will do the following:\n";
$lang['install_cli_intro'] .= "1) Automatically generate an encryption key in fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "2) Set the session save path in fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "3) Enable the CMS admin by changing the 'admin_enabled' config value in fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "4) Change the 'fuel_mode' config value in in fuel/application/config/MY_fuel.php to allow for pages to be created in the CMS.\n";
$lang['install_cli_intro'] .= "5) Change the 'site_name' config value in the fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "6) Setup your environments fuel/application/config/environments.php.\n";
$lang['install_cli_intro'] .= "7) Will make the fuel/application/logs, fuel/application/cache and assets/images folders writable.\n";
$lang['install_cli_intro'] .= "8) Update the fuel/application/config/database.php file with the inputted values.\n";
$lang['install_cli_intro'] .= "9) Create a database and install the fuel_schema.sql file using your local MySQL connection.\n";

$lang['install_session_path'] = 'By default, FUEL CMS saves sessions using the default "file" setting in the fuel/application/config/config.php file. Where would you like the session files be stored (leave blank to keep it as the default)?';
$lang['install_site_name'] = 'What would you like the site name to be for this FUEL CMS installation?';
$lang['install_environments_testing'] = 'What are the domains for your TESTING environment (e.g. myserver.com *.mystagingserver.com)?';
$lang['install_environments_production'] = 'What are the domains for your PRODUCTION environment (e.g. myserver.com *.myserver.com)?';
$lang['install_permissions'] = 'What permissions do you want for your writable folders (e.g. 0755, 0775, 0777)?';
$lang['install_db_name'] = 'What do you want the name of your database to be?';
$lang['install_db_user'] = 'What is the user name to connect to your database?';
$lang['install_db_pwd'] = 'What is the password for that user?';

$lang['install_success'] = 'Your FUEL CMS installation is complete!';
$lang['install_success_with_errors'] = "Your FUEL CMS installation is complete but the follow ERRORS did occur:\n%1s";
$lang['install_further_info'] = "Now, to access the FUEL CMS admin, browse to your installation folder in your browser enter '/fuel' (e.g. localhost/fuel) in your location bar.\n";
$lang['install_further_info'] .= "For additional configuration options, go to https://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "For questions, or bug reports, go to https://github.com/daylightstudio/FUEL-CMS/issues or visit us at https://forums.getfuelcms.com.\n";

$lang['update_cli_intro'] = "FUEL CMS 1.4x is built on CodeIgniter 3. If you are upgrading from 1.3x or earlier, this updater will help fix some of the common issues when upgrading including:\n";
$lang['update_cli_intro'] .= "1) Upper-case first letter for models, libraries and controller file names.\n";
$lang['update_cli_intro'] .= "2) Will upper case common references to Base_module_model.php within model files.\n";
$lang['update_cli_intro'] .= "3) Update common method signatures in models and libraries like form_fields, _common_query and initialize to match their parent's signature.\n";
$lang['update_cli_intro'] .= "WARNING: Run this ONLY if you are using GIT in case you need to roll back!\n";
$lang['update_cli_intro'] .= "Do you wish to continue (y/n)";
$lang['update_success'] = 'Update complete!';

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */
