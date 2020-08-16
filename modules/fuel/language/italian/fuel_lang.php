<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Loggato come:';
$lang['logout'] = 'Logout';
$lang['fuel_developed_by'] = 'FUEL CMS verisone %1s è sviluppato da <a href="https://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> e costruito sopra il framework <a href="https://www.codeigniter.com" target="_blank">CodeIgniter</a>.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. Tutti i diritti riservati.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = 'Non hai accesso alla pagina. <a href="'.fuel_url().'">Prova a collegarti ancora</a>.';
$lang['error_missing_module'] = "Il seguente modulo è mancante: %1s.";
$lang['error_invalid_login'] = 'Login non corretto.';
$lang['error_max_attempts'] = 'Ci dispiace, ma le tue informazioni di login erano incorrette, sei stato temporaneamente bloccato. Riprova tra %s secondi.';
$lang['error_empty_user_pwd'] = 'Inserisci un nome utente e una passweord.';
$lang['error_pwd_reset'] = 'È successo un errore durante il reset della tua password.';
$lang['error_invalid_email'] = 'L\'e-mail inserito non è nel sistema.';
$lang['error_invalid_password_match'] = 'Le password non corrispondono.';
$lang['error_empty_email'] = 'Inserisci il tuo e-mail.';
$lang['error_folder_not_writable'] = 'Devirendere questa cartella scrivibile: %1s.';
$lang['error_invalid_folder'] = 'Cartella non valida %1s';
$lang['error_file_already_exists'] = 'Il file: %1s esiste già.';
$lang['error_zip'] = 'C\'è stato un errore durante la creazione del file ZIP.';
$lang['error_no_permissions'] = 'Non hai i permessi per completare questa azione. <a href="'.fuel_url().'">Prova a collegarti ancora</a>.';
$lang['error_no_lib_permissions'] = 'Non hai i permssi di eseguire metodi nella classe %1s.';
$lang['error_page_layout_variable_conflict'] = 'C\'è un errore con questo layout perché non esiste o contiene uno o più delle seguenti parole riservate: %1s';
$lang['error_no_curl_lib'] = 'Devi avere l\'estensione curl di php per usare questo tool.';
$lang['error_inline_page_edit'] = 'La variabile deve essere salvata dall\'admin o editata nel relativo file in views/_variables.';
$lang['error_saving'] = 'C\'è stato un errore durante il salvataggio.';
$lang['error_cannot_preview'] = 'È successo un errore durante l\'anteprima del file.';
$lang['error_cannot_make_api_call'] = 'È successo un errore chiamando l\'API di  %1s.';
$lang['error_sending_email'] = 'È successo un errore inviando un email a  %1s.';
$lang['error_upload'] = 'È successo un errore durante l\'upload del file. Assicurati che il server è configurato in modo tale da poter caricare files e la cartella è in scrittura.';
$lang['error_create_nav_group'] = 'Crea un gruppo di navigazione';
$lang['error_requires_string_value'] = 'Il campo del nome deve essere una stringa';
$lang['error_missing_params'] = 'Non hai i permessi necessari a vedere questa pagina';
$lang['error_invalid_method'] = 'Nome del metodo non corretto';
$lang['error_curl_page'] = 'Errore durante il caricamento della pagina con CURL';
$lang['error_class_property_does_not_exist'] = 'La proprietà %1s della classe non esiste';
$lang['error_class_method_does_not_exist'] = 'Il metodo %1s della classe non esiste';
$lang['error_could_not_create_folder'] = 'Non posso creare la cartella %1s';
$lang['error_could_not_create_file'] = 'Non posso creare il file %1s';
$lang['error_no_build'] = "Nessun setup di configurazione per questo modulo.\n";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>È altamente consigliato cambiare la password di default per <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'L\'elemento non è pubblicato.';
$lang['warn_not_active'] = '%1s non è attivo.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s ha fatto il login";
$lang['logged_out'] = "%s ha fatto il logout";
$lang['dev_pwd_instructions'] = 'Questo sito è in sviluppo e richiede una password per la visualizzazione.';
$lang['login_forgot_pwd'] = 'Password dimenticata?';
$lang['login_reset_pwd'] = 'Reset Password';
$lang['login_btn'] = 'Login';
$lang['logout_restore_original_user'] = 'Ripristino utente originale';

$lang['auth_log_pass_reset_request'] = "Richiesta di reset password per '%1s' da %2s";
$lang['auth_log_pass_reset'] = "Reset password per '%1s' da %2s";
$lang['auth_log_cms_pass_reset'] = "Reset password del CMS per '%1s' da %2s";
$lang['auth_log_login_success'] = "Login effettuato da '%1s' per %2s";
$lang['auth_log_failed_updating_login_info'] = "È successo un errore aggiornando le informazioni per '%1s' da %2s";
$lang['auth_log_failed_login'] = "Login fallito da '%1s' per %2s, tentativi di login: %3s";
$lang['auth_log_account_lockout'] = "Blocco account per '%1s' da %2s";

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Dashboard';
$lang['dashboard_intro'] = 'Benvenuto in FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Ultima attività';
$lang['dashboard_hdr_latest_news'] = 'Ultime news FUEL';
$lang['dashboard_hdr_modified'] = 'Pagine recentemente modificate';
$lang['dashboard_hdr_site_docs'] = 'Documentazione del sito';
$lang['dashboard_change_pwd'] = 'Cambia password';
$lang['dashboard_change_pwd_later'] = 'Cambierò la mia password dopo';
$lang['dashboard_subscribe_rss'] = 'Abbonati al feed RSS';
$lang['dashboard_view_all_pages'] = 'Visualizza tutte le pagine';
$lang['dashboard_view_all_activity'] = 'Visualizza tutte le attività';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Il mio profilo';
$lang['profile_instructions'] = 'Modifica le informazioni del tuo profilo:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'I miei moduli';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
$lang['pwd_reset'] = 'Un email con la conferma del reset della tua password è stata inviata.';
$lang['pwd_reset_subject'] = "Richiesta di reset password admin FUEL";
$lang['pwd_reset_email'] = "Clicca sul seguente link per confermare il reset della password:\n%1s";
$lang['pwd_reset_subject_success'] = "Reset password admin FUEL avvenuto con successo";
$lang['pwd_reset_email_success'] = "La tua nuova password FUEL è  %1s. Per cambiare la tua password, fai il login nel CMS FUEL con questa passowrd e clicca sul tuo nome profilo in alto a destra per accedere alle tua informazioni personali.";
$lang['pwd_reset_success'] = 'La password è stata cambiata con successo e un e-mail è stata mandata al tuo indirizzo.';
$lang['cache_cleared'] = "Cache del sito eliminata volontariamente";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Dashboard';
$lang['module_pages'] = 'Pagine';
$lang['module_blocks'] = 'Blocchi';
$lang['module_navigation'] = 'Navigazione';
$lang['module_categories'] = 'Categorie';
$lang['module_tags'] = 'Tags';
$lang['module_assets'] = 'Assets';
$lang['module_sitevariables'] = 'Variabili del sito';
$lang['module_users'] = 'Utenti';
$lang['module_permissions'] = 'Permessi';
$lang['module_tools'] = 'Strumenti';
$lang['module_manage_cache'] = 'Cache delle pagine';
$lang['module_manage_activity'] = 'Log delle attività';
$lang['module_manage_settings'] = 'Impostazioni';
$lang['module_generate'] = 'Generato';


$lang['section_site'] = 'Sito';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Moduli';
$lang['section_manage'] = 'Amministrazione';
$lang['section_tools'] = 'Strumenti';
$lang['section_settings'] = 'Impostazioni';
$lang['section_recently_viewed'] = 'Visto recentemente';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s elemento <em>%2s</em> creato";
$lang['module_edited'] = "%1s elemento <em>%2s</em> modificato";
$lang['module_deleted'] = "%1s elemento per <em>%2s</em> eliminato";
$lang['module_multiple_deleted'] = "Multipli <em>%1s</em> eliminati";
$lang['module_restored'] = "%1s elemento recuperato dall'archivio";
$lang['module_instructions_default'] = "Qui puoi modificare le %1s per il tuo sito.";
$lang['module_restored_success'] = 'Versione precedente correttamente ripristinata.';
$lang['module_replaced_success'] = 'I contenuti di questo record sono stati correttamente modificati.';
$lang['module_incompatible'] = 'La versione di questo modulo non è compatibile con la corrente versione di FUEL '.FUEL_VERSION;

$lang['cannot_determine_module'] = "Non riesco a determianre il modulo.";
$lang['incorrect_route_to_module'] = "Intradamento incorretto per questo modulo.";
$lang['data_saved'] = 'I dati sono stati salvati.';
$lang['data_deleted'] = 'I dati sono stati eliminati.';
$lang['data_not_deleted'] = 'Alcuni o tutti i dati non possono essere eliminati.';
$lang['no_data'] = 'Nessun dato da mostrare.';
$lang['no_preview_path'] = 'Nessuna path di preview assegnata a questo modulo.';
$lang['delete_item_message'] = 'Stai per eliminare l\'elemento:';
$lang['replace_item_message'] = 'Select a record from the list below that you would like to replace. Replacing will transfer the data from one record to the other and then delete the old record.';

// command line
$lang['module_install'] = "Il modulo '%1s'è stato correttamente installato.\n";
$lang['module_install_error'] = "È successo un errore durante l'installazione del modulo: '%1s'.\n";

$msg = "Il modulo %1s è stato disinstallato da FUEL.\n\n";
$msg .= "Tuttavia, la rimozione di un modulo da GIT è un po 'più di lavoro che non abbiamo ancora automatizzato. Tuttavia, i passaggi seguenti dovrebbero aiutare.\n\n";
$msg .= "1. Elimina la sezione relativa dal .gitmodules file.\n";
$msg .= "2. Elimina la sezione relativa da .git/config.\n";
$msg .= "3. Run git rm --cached %2s (senza slash).\n";
$msg .= "4. Commit ed elimina i files ora untracked.\n";
$lang['module_uninstall'] = $msg;

// build
$lang['module_build_asset'] = "%1s ottimizzato e ouput a %2s\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "Hai migrato con successo alla versione %s.\n";
$lang['migrate_nothing_todo'] = "Nessuna migrazione necessaria.\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = 'Ricerca avanzata';
$lang['reset_search'] = 'Reset ricerca';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'La destinazione specificata ha le seguenti routes già specificate nel routes file (%1s):';
$lang['page_controller_assigned'] = 'Esiste giâ un controller method assengnato a questa pagina.';
$lang['page_updated_view'] = 'Esiste un view file aggiornato qui: <strong>%1s</strong>. Vuoi caricarlo nel body della tua pagina (se possibile)?';
$lang['page_not_published'] = 'La pagina non è pubblicata.';

$lang['page_no_upload'] = 'No, non caricare';
$lang['page_yes_upload'] = 'Si, carica';
$lang['page_information'] = 'Informazioni della pagina';
$lang['page_layout_vars'] = 'Variabili dei layouts';

$lang['pages_instructions'] = 'Qui puoi modificare i dati associati alla pagina.';
$lang['pages_associated_navigation'] = 'Navigazione associata';
$lang['pages_success_upload'] = 'La pagina view è stata caricata con successo.';
$lang['pages_upload_instructions'] = 'Seleziona un file view e caricalo su una pagina sottostante.';
$lang['pages_select_action'] = 'Seleziona';

// page specific form fields
$lang['form_label_layout'] = 'Layout';
$lang['form_label_cache'] = 'Cache';
$lang['pages_last_updated'] = 'Ultima modifica %1s';
$lang['pages_last_updated_by'] = 'Ultima modifica %1s da %2s';
$lang['pages_not_published'] = 'Questa pagina non è pubblicata.';
$lang['pages_default_location'] = 'esempio: company/about';

$lang['form_label_page'] = 'Pagina';
$lang['form_label_target'] = 'Target';
$lang['form_label_class'] = 'Classe';

$lang['navigation_related'] = 'Crea navigazione';
$lang['navigation_quick_add'] = 'Questo campo permette di aggiungere velocemente un elemento di navigazione per questa pagina. Ti permette solamente di creare un elemento di navigazione durante la creazione della pagina. Per modificare l\'elemento di navigazione, devi cliccare sul link \'Navigazione\' a sinistra, trovare l\'elemento che vuoi cambiare e cliccare sul link di modifica.';

$lang['page_select_pages'] = 'Pagine';
$lang['page_select_pdfs'] = 'PDFs';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Esiste un file view più recente a <strong>%1s</strong>. Vuoi importarlo?';
$lang['blocks_success_upload'] = 'Il blocco view è stato caricato con successo.';
$lang['blocks_upload_instructions'] = 'Seleziona un file blocco view e caricalo qui.';

$lang['form_label_view'] = 'View';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Importa navigazione';
$lang['navigation_instructions'] = 'Qui puoi creare e modificare gli elementi top menu della pagina.';
$lang['navigation_import_instructions'] = 'Seleziona un gruppo di navigazione e carica un file per importarlo qui sotto. Il file deve contenere un array PHP assegnata alla variabile qua sotto (es. <strong>$nav</strong>). Come referenza per il formato dell\'array consulta la <a href="https://docs.getfuelcms.com/general/navigation" target="_blank">guida utente</a>.';
$lang['navigation_success_upload'] = 'La navigation è stata caricata con successo.';
$lang['form_label_navigation_group'] = 'Gruppo di Navigation:';
$lang['form_label_nav_key'] = 'Chiave';
$lang['form_label_parent_id'] = 'Padre';
$lang['form_label_attributes'] = 'Attributi';
$lang['form_label_selected'] = 'Selezionato';
$lang['form_label_hidden'] = 'Nascosto';

$lang['error_location_parents_match'] = 'Destinazione e padre non corrispondono.';

// for upload form
$lang['form_label_clear_first'] = 'Pulisci prima';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Qui puoi caricare dei nuovi assets. Seleziona Sovrascrivi se vuoi sovrascrivere un file con lo stesso nome.';
$lang['form_label_preview/kb'] = 'Anteprima/kb';
$lang['form_label_link'] = 'Link';
$lang['form_label_asset_folder'] = 'Cartella Asset';
$lang['form_label_new_file_name'] = 'Nuovo nome del file';
$lang['form_label_subfolder'] = 'Sottocartella';
$lang['form_label_overwrite'] = 'Sovrascrivi';
$lang['form_label_create_thumb'] = 'Crea thumb';
$lang['form_label_resize_method'] = 'Ridimensiona';
$lang['form_label_maintain_ratio'] = 'mantieni ratio';
$lang['form_label_resize_and_crop'] = 'taglia se necessario';
$lang['form_label_overwrite'] = 'Sovrascrivi';
$lang['form_label_width'] = 'Larghezza';
$lang['form_label_height'] = 'Altezza';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'Align';
$lang['form_label_master_dim'] = 'Master dimensione';
$lang['form_label_unzip'] = 'Unzip zip files';
$lang['assets_upload_action'] = 'Carica';
$lang['assets_select_action'] = 'Seleziona';
$lang['assets_comment_asset_folder'] = 'La cartella dove gli Asset verranno caricati';
$lang['assets_comment_filename'] = 'Se non viene specificato un nome, il nome che esiste già verrà usato.';
$lang['assets_comment_subfolder'] = 'Tentativo di creare una sottocartella dove piazzare i tuoi assets.';
$lang['assets_comment_overwrite'] = 'Sovrascrivere un file con lo stesso nome. Se non selezionato, un nuovo file verrà caricato con un numero versione in fondo al nome.';
$lang['assets_heading_general'] = 'Generale';
$lang['assets_heading_image_specific'] = 'Specifiche dell\'immagine';
$lang['assets_comment_thumb'] = 'Crea una thumbnail dell\'immagine.';
$lang['assets_comment_resize_method'] = 'Mantieni un aspect ratio o ridimensiona e taglia l\'immagine per adattarsi alle misure fornite. Se "Crea Thumbnail" è selezionato, questo inciderà solo sulle dimensioni della thumbnail.';
$lang['assets_comment_width'] = 'Cambia la larghezza dell\'immagine alla cifra desiderata. Se "Crea Thumbnail" è selezionato, questo inciderà solo sulle dimensioni della thumbnail.';
$lang['assets_comment_height'] = 'Cambia l\'altezza dell\'immagine alla cifra desiderata. Se "Crea Thumbnail" è selezionato, questo inciderà solo sulle dimensioni della thumbnail.';
$lang['assets_comment_master_dim'] = 'Specifies the master dimension to use for resizing. If the source image size does not allow perfect resizing to those dimensions, this setting determines which axis should be used as the hard value. "auto" sets the axis automatically based on whether the image is taller then wider, or vice versa.';
$lang['assets_comment_unzip'] = 'Unzips a zip file';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Qui puoi amministrare le variabili relative al sito.';
$lang['sitevariables_scope'] = 'Scope';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Qui puoi amministrare i dati degli utenti.';
$lang['permissions_heading'] = 'Permessi';
$lang['form_label_language'] = 'Lingua';
$lang['form_label_send_email'] = 'Invia e-mail';
$lang['btn_send_email'] = 'Invia e-mail';
$lang['new_user_email_subject'] = 'Il tuo account per il CMS FUEL è stato creato';
$lang['new_user_email'] = 'Il tuo account per il CMS FUEL è stato creato. Puoi accedere con i seguenti dati:
Login URL: %1s
User name: %2s
Password: %3s';
$lang['new_user_created_notification'] = 'Le informazioni dell\'utente sono state salvate correttamente e una notifica è stata mandata a %1s.';
$lang['error_cannot_deactivate_yourself'] = 'Non puoi deattivare te stesso.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Qui puoi amministrare i permessi dei moduli di FUEL e quindi assegnarli agli utenti.';
$lang['form_label_other_perms'] = 'Genera i relativi semplici<br />permessi dei moduli ';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'La cache è stata liberata.';
$lang['cache_instructions'] = 'Stai per eliminare la cache del sito.';
$lang['cache_no_clear'] = 'No, non eliminare la cache';
$lang['cache_yes_clear'] = 'Si, elimina cache';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'Non ci sono impostazioni per nessuno dei moduli avanzati da amministrare.';
$lang['settings_manage'] = 'Amministra le impostazioni per i seguenti moduli avanzati:';
$lang['settings_problem'] = 'È successo un problema con le impostazioni per il modulo avanzato <strong>%1s</strong>. <br />Controlla queste configurazioni <strong>/fuel/modules/%1s/config/%1s.php</strong> per risolvere il problema.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'Questa non è una richiesta CLI.';
$lang['error_not_in_dev_mode'] = 'Sarà eseguito solo in dev mode.';
$lang['error_missing_generation_files'] = 'Non ci sono genertion files da crere per %1s.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'EDITA';
$lang['table_action_delete'] = 'ELIMINA';
$lang['table_action_view'] = 'VEDI';
$lang['click_to_toggle'] = 'clicca per cambiare';
$lang['table_action_login_as'] = 'LOGIN COME';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Mostra:';
$lang['label_language'] = 'Lingua:';
$lang['label_restore_from_prev'] = 'Recupera da una vecchia versione...';
$lang['label_select_another'] = 'Seleziona un altro...';
$lang['label_select_one'] = 'Seleziona uno...';
$lang['label_belongs_to'] = 'Appartiene a ';
$lang['label_select_a_language'] = 'Seleziona una lingua...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Lista';
$lang['btn_tree'] = 'Albero';
$lang['btn_create'] = 'Crea';
$lang['btn_delete_multiple'] = 'Elimina multipli';
$lang['btn_rearrange'] = 'Riarrangia';
$lang['btn_search'] = 'Cerca';
$lang['btn_view'] = 'Vedi';
$lang['btn_publish'] = 'Pubblica';
$lang['btn_unpublish'] = 'Non pubblica';
$lang['btn_activate'] = 'Attiva';
$lang['btn_deactivate'] = 'Disattiva';
$lang['btn_delete'] = 'Elimina';
$lang['btn_duplicate'] = 'Duplica';
$lang['btn_replace'] = 'Sostituisci';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Carica';
$lang['btn_download'] = 'Scarica';
$lang['btn_export_data'] = 'Esporta dati';

$lang['btn_no'] = 'No';
$lang['btn_yes'] = 'Si';

$lang['btn_no_upload'] = 'No, non caricare';
$lang['btn_yes_upload'] = 'Si, carica';

$lang['btn_no_dont_delete'] = 'No, non cancellare';
$lang['btn_yes_dont_delete'] = 'Si, cancella';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Nome';
$lang['form_label_title'] = 'Titolo';
$lang['form_label_label'] = 'Etichetta';
$lang['form_label_location'] = 'Posizione';
$lang['form_label_published'] = 'Pubblcato';
$lang['form_label_active'] = 'Attivo';
$lang['form_label_precedence'] = 'Precedenza';
$lang['form_label_date_added'] = 'Data di aggiunta';
$lang['form_label_last_updated'] = 'Ultimo aggiornamento';
$lang['form_label_file'] = 'File';
$lang['form_label_value'] = 'Valore';
$lang['form_label_email'] = 'Email';
$lang['form_label_user_name'] = 'User name';
$lang['form_label_first_name'] = 'Nome';
$lang['form_label_last_name'] = 'Cognome';
$lang['form_label_super_admin'] = 'Super admin';
$lang['form_label_password'] = 'Password';
$lang['form_label_confirm_password'] = 'Conferma password';
$lang['form_label_new_password'] = 'Nuova password';
$lang['form_label_description'] = 'Descrizione';
$lang['form_label_entry_date'] = 'Data di aggiunta';
$lang['form_label_message'] = 'Messaggio';
$lang['form_label_image'] = 'Immagine';
$lang['form_label_upload_image'] = 'Carica immagine';
$lang['form_label_upload_images'] = 'Carica immagini';
$lang['form_label_content'] = 'Contenuto';
$lang['form_label_excerpt'] = 'Estratto';
$lang['form_label_permalink'] = 'Permalink';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Link';
$lang['form_label_pdf'] = 'PDF';
$lang['form_label_canonical'] = 'Canonical';
$lang['form_label_og_title'] = 'Titolo Open Graph';
$lang['form_label_og_description'] = 'Descrizione Open Graph';
$lang['form_label_og_image'] = 'Immagine Open Graph';
$lang['form_label_category_id'] = 'Categoria';


$lang['form_label_group_id'] = 'Gruppo';
$lang['form_label_or_select'] = 'O seleziona';

$lang['form_enum_option_yes'] = 'si';
$lang['form_enum_option_no'] = 'no';

$lang['required_text'] = 'campi richiesti';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'Questo è il layout principale usato per il tuo sito.';
$lang['layout_field_page_title'] = 'Titolo della pagina';
$lang['layout_field_meta_description'] = 'Meta description';
$lang['layout_field_meta_keywords'] = 'Meta keywords';
$lang['layout_field_body'] = 'Corpo';
$lang['layout_field_heading'] = 'Intestazione';
$lang['layout_field_body_description'] = 'Contenuto principale della pagina';
$lang['layout_field_body_class'] = 'Classe del corpo';
$lang['layout_field_redirect_to'] = 'Redirect a';

$lang['layout_field_301_redirect_copy'] = 'Questo layout farà un redirect ad un altra pagina.';
$lang['layout_field_alias_copy'] = 'Qeusto layout è simile al 301 redirect ma l\'URL della pagina non cambierà e <br />il contenuto della pagina sarà usato per fare il render della pagina.';
$lang['layout_field_sitemap_xml_copy'] = 'Questo layout è usato per generare la sitemap. Per mostrare questa pagina, un sitemap.xml non deve esistere sul server.';
$lang['layout_field_robots_txt_copy'] = 'Questo layout è usato per generare un file robots.txt. Per mostrare questa pagina, un robots.txt non deve esistere sul server.';
$lang['layout_field_none_copy'] = 'Questo layout equivale a non avere un layout assegnato.';

$lang['layout_field_frequency'] = 'Frequenza';
$lang['layout_field_frequency_always'] = 'sempre';
$lang['layout_field_frequency_hourly'] = 'orario';
$lang['layout_field_frequency_daily'] = 'giornaliero';
$lang['layout_field_frequency_weekly'] = 'settimanale';
$lang['layout_field_frequency_monthly'] = 'mensile';
$lang['layout_field_frequency_yearly'] = 'annuale';
$lang['layout_field_frequency_never'] = 'mai';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'Doppio click per aprire';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; Primo';
$lang['pagination_last_link'] = 'Ultimo &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = 'Edita';
$lang['action_create'] = 'Crea';
$lang['action_delete'] = 'Elimina';
$lang['action_upload'] = 'Carica';
$lang['action_replace'] = 'Sostituisci';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = 'Migrazione del database avvenuta con successo a %1s';

//$lang['import'] = 'Import';

/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "L\'installazione del CMS FUEL è molto semplice da configuare. I passi da seguire sono questi:\n";
$lang['install_cli_intro'] .= "1) Genera una chiave di criptazione in fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "2) Abilita l\'admin CMS cambiando il valore di 'admin_enabled' in fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "3) Cambia il valore di 'fuel_mode' in fuel/application/config/MY_fuel.php per abilitare la creazione di pagine nel CMS.\n";
$lang['install_cli_intro'] .= "4) Cambia il valore di 'site_name' in the fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "5) Cambia le impostazioni in fuel/application/config/environments.php.\n";
$lang['install_cli_intro'] .= "6) Rendi le cartelle fuel/application/logs, fuel/application/cache and assets/images scrivibili.\n";
$lang['install_cli_intro'] .= "7) Aggiorna il file fuel/application/config/database.php.\n";
$lang['install_cli_intro'] .= "8) Crea un database e installa il file fuel_schema.sql la tua connessione locale al server MYSQL.\n";

$lang['install_site_name'] = 'Come vuoi chiamare il tuo sito per questa installazione del CMS FUEL?';
$lang['install_environments_testing'] = 'Quali sono i domini per il tuo sistema di TESTING (es. myserver.com *.mystagingserver.com)?';
$lang['install_environments_production'] = 'Quali sono i domini per il tuo sistema di PRODUCTION (es. myserver.com *.myserver.com)?';
$lang['install_permissions'] = 'Quali permessi vuoi dare alle tue cartelle in scrittura (es. 0755, 0775, 0777)?';
$lang['install_db_name'] = 'Come vuoi chiamare il database?';
$lang['install_db_user'] = 'Quale è il nome utente per la connessione al database?';
$lang['install_db_pwd'] = 'Quale è la password per l\'utente?';

$lang['install_success'] = 'La tua installazione del CMS FUEL è completa!';
$lang['install_success_with_errors'] = "La tua installazione del CMS FUEL è completa ma sono occorsi i seguenti ERRORI:\n%1s";
$lang['install_further_info'] = "Ora, per accedere al CMS di FUEL, naviga nel browser fino alla tua cartella di installazione e aggiungi '/fuel' (es. localhost/fuel).\n";
$lang['install_further_info'] .= "Per configuazioni addizionali, visita https://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "Per domande, bug reports, visita https://github.com/daylightstudio/FUEL-CMS/issues o visitaci a https://forums.getfuelcms.com.\n";

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */