<?php
/*
|--------------------------------------------------------------------------
| Login/
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s angemeldet";
$lang['logged_out'] = "%s abgemeldet";
$lang['dev_pwd_instructions'] = 'Diese Webseite wird gerade überarbeitet und deswegen passwortgeschützt.';

/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s Artikel %2s erstellt";
$lang['module_edited'] = "%1s Artikel %2s bearbeitet";
$lang['module_deleted'] = "%1s Artikel für %2s gelöscht";
$lang['module_restored'] = "%1s Artikel aus Archiv wiederhergestellt";
$lang['module_instructions_default'] = "Hier können Sie die %1s für diese Seite bearbeiten.";

$lang['cannot_determine_module'] = "Modul wird nicht gefunden.";
$lang['incorrect_route_to_module'] = "Falsche Pfadangabe für dieses Modul";
$lang['data_saved'] = 'Daten wurden gespeichert.';
$lang['data_deleted'] = 'Daten wurden gelöscht.';
$lang['no_data'] = 'Keine Daten zur Anzeige vorhanden.';
$lang['no_preview_path'] = 'Diesem Modul wurde kein Pfad zur Vorschau zugeordnet.';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/

$lang['pwd_reset'] = 'Eine E-Mail zur Bestätigung Ihres Passwortes wurde gerade an Sie versandt.';
$lang['pwd_reset_subject'] = "FUEL-Admin-Passwort zurücksetzen";
$lang['pwd_reset_email'] = "Klicken Sie auf den folgenden Link um Ihr FUEL Passwort zurückzusetzen:\n%1s";
$lang['pwd_reset_subject_success'] = "Zurücksetzen des FUEL-Admin-Passwort war erfolgreich.";
$lang['pwd_reset_email_success'] = "Ihr FUEL-Passwort wurde geändert auf %1s.";
$lang['pwd_reset_success'] = 'Erfolgreich! Wir haben Ihnen gerade ein neues Passwort an die hinterlegte E-Mail-Adresse zugesandt.';
$lang['cache_cleared'] = "Seitenspeicher wurde bereinigt.";
$lang['module_restored_success'] = 'Vorherige Version erfolgreich wiederhergestellt.';


/*
|--------------------------------------------------------------------------
| Nav Menu Titles
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Übersicht';
$lang['module_pages'] = 'Seiten';
$lang['module_blocks'] = 'Blöcke';
$lang['module_navigation'] = 'Navigation';
$lang['module_assets'] = 'Dateien';
$lang['module_sitevariables'] = 'Gestaltung';
$lang['module_users'] = 'Benutzer';
$lang['module_permissions'] = 'Berechtigungen';
$lang['module_manage/cache'] = 'Seitenspeicher';
$lang['module_manage/activity'] = 'Logbuch';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "Keine ausreichenden Zugangsrechte für diese Seite.";
$lang['error_missing_module'] = "Ihnen fehlt das Modul %1s.";
$lang['error_invalid_login'] = 'Fehler bei der Anmeldung';
$lang['error_max_attempts'] = 'Die Anmeldeangaben waren nicht korrekt und Ihr Konto ist kurzfristig gesperrt. Bitte versuchen Sie es in %s Sekunden erneut.';
$lang['error_empty_user_pwd'] = 'Bitte geben Sie Benutzername und Passwort ein.';
$lang['error_pwd_reset'] = 'Es gab einen Fehler beim Zurücksetzen des Passwort.';
$lang['error_invalid_email'] = 'Die angegebene E-Mail-Adresse ist uns nicht bekannt.';
$lang['error_invalid_password_match'] = 'Passwort passen nicht zueinander.';
$lang['error_empty_email'] = 'Bitte geben Sie eine E-Mail-Adresse ein.';
$lang['error_no_permissions'] = 'Für diesen Schritt benötigen Sie andere Userrechte.';
$lang['error_page_layout_variable_conflict'] = 'Ein Fehler bei diesem Layout weil es ein vorbelegtes Word enthält: %1s';
$lang['error_invalid_export_dir'] = 'Das Verzeichnis %1s ist kein zulässiges Export-Verzeichnis. Stellen Sie sicher, dass es beschreibbar ist..';
$lang['error_exporting_to_directory'] = 'Es ist ein Fehler beim Speichern aufgetreten. Beachten Sie bitte unbedingt den folgenden Text:';
$lang['error_cache_folder_not_writable'] = 'Sie müssen den Ordner %1s auf beschreibbar stellen.';
$lang['error_exporting_view'] = 'Es gab einen Fehler mit der zugeordneten View-Datei fü %1s weil die Variable mit dem Namen %2s nicht existiert.';
$lang['error_no_curl_lib'] = 'Um diese Werkzeuge zu nutzen müssen curl php extension installiert sein.';
$lang['error_inline_page_edit'] = 'Diese Variable muss in der zugehörigen Views/_variables-Datei bearbeitet werden.';
$lang['error_saving'] = 'Beim Speichern ist ein Fehler aufgetreten.';
$lang['error_cannot_preview'] = 'Es gab einen Fehler beim Erzeugen der Vorschau dieser Seite.';
$lang['error_cannot_make_api_call'] = 'Es gab einen Fehler beim API-Aufruf zu %1s.';
$lang['error_sending_email'] = 'Es gab einen Fehler beim E-Mail-Versand an %1s.';
$lang['error_nav_upload'] = 'Es gab einen Fehler beim Hochladen der Navigationsdatei.';
$lang['error_create_nav_group'] = 'Bitte erstellen Sie eine Navigationsgruppe';
$lang['error_requires_string_value'] = 'Das Feld Name sollte einen String enthalten';
$lang['error_missing_params'] = 'Es fehlen einige Angaben zum Aufbau dieser Seite.';

/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = 'Es wird dringend empfohlen das Passwort zu ändern für %1s.';
$lang['warn_not_published'] = 'Dieser Artikel ist nicht öffentlich.';
$lang['warn_not_active'] = 'Dieser %1s is nicht aktiv.';


/*
|--------------------------------------------------------------------------
| H2 Values
|--------------------------------------------------------------------------
*/
$lang['section_pages'] = 'Seiten';
$lang['section_navigation'] = 'Navigation';
$lang['section_blocks'] = 'Blöcke';
$lang['section_assets'] = 'Dateien';
$lang['section_sitevariables'] = 'Gestaltung';

$lang['section_manage'] = 'Management';
$lang['section_tools'] = 'Werkzeuge';

$lang['module_activty'] = 'Aktivitäten';
$lang['module_page_cache'] = 'Seitenspeicher';
$lang['module_my_modules'] = 'Meine Module';


/*
|--------------------------------------------------------------------------
| Instructions
|--------------------------------------------------------------------------
*/
$lang['cache_instructions'] = 'Sie sind dabei den Seitenspeicher komplett zurückzusetzen.';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'Warnung: Diese Pfadangaben werden bereits in der Routerdatei verwendet (%1s):';
$lang['page_controller_assigned'] = 'Dieser Seite ist bereits eine Controllerfunktion zugeordnet.';
$lang['page_updated_view'] = 'Aktualisierte View-Datei gefunden unter %1s. Soll es in den Seiteninhalt importiert werden (wenn möglich)?';
$lang['page_not_published'] = 'Diese Seite ist nicht veröffentlicht.';
$lang['page_no_import'] = 'Nein, nicht importieren';
$lang['page_yes_import'] = 'Ja, importieren';
$lang['page_information'] = 'Seiteninformationen';
$lang['page_layout_vars'] = 'Gestaltungsfaktoren';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Aktualisierte View-Datei gefunden unter %1s. Möchten Sie importieren?';


/*
|--------------------------------------------------------------------------
| Modal
|--------------------------------------------------------------------------
*/
$lang['btn_no'] = 'Nein';
$lang['btn_yes'] = 'Ja';


/*
|--------------------------------------------------------------------------
| Misc
|--------------------------------------------------------------------------
*/
$lang['navigation_success_upload'] = 'Die navigation wurde erfolgreich hochgeladen.';

include('fuel_lang_new.php');



/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/german/fuel_lang.php */