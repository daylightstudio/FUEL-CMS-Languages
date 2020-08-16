<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Giriş yaptı:';
$lang['logout'] = 'Çıkış Yap';
$lang['fuel_developed_by'] = 'FUEL CMS versiyon %1s ile geliştirildi by <a href="https://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> ve <a href="https://www.codeigniter.com" target="_blank">CodeIgniter</a> framework ve üzerine inşa edildi.';
$lang['fuel_copyright'] = 'Telif Hakkı &copy; %1s Daylight Studio. Her hakkı saklıdır.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = 'Bu sayfaya erişiminiz yok. <a href="%1s">Tekrar giriş yapmayı deneyin</a>.';
$lang['error_missing_module'] = "Modülü kaçırıyorsun %1s.";
$lang['error_invalid_login'] = 'Geçersiz giriş.';
$lang['error_max_attempts'] = 'Üzgünüz, ancak giriş bilgileriniz yanlıştı ve geçici olarak kilitlendiniz. Lütfen %s saniyede tekrar deneyin..';
$lang['error_empty_user_pwd'] = 'Lütfen bir kullanıcı adı ve şifre girin.';
$lang['error_pwd_reset'] = 'Şifrenizi sıfırlarken bir hata oluştu.';

$lang['error_pwd_too_short'] = 'Girilen şifre %1s karakter minimum uzunluk gereksinimini karşılamıyor.';
$lang['error_pwd_too_long'] = 'Girilen şifre %1 karakter maksimum uzunluk gereksinimini aşıyor.';
$lang['error_pwd_invalid'] = 'Lütfen daha güçlü bir şifre seçin. Bir karışımı deneyin %1s.';


$lang['error_invalid_email'] = 'Sağlanan e-posta adresi sistemde değildi.';
$lang['error_invalid_password_match'] = 'Şifreler eşleşmiyor.';
$lang['error_empty_email'] = 'Lütfen bir e-posta adresi girin.';
$lang['error_folder_not_writable'] = '%1s klasörünü yazılabilir yapmalısınız.';
$lang['error_invalid_folder'] = 'Geçersiz klasör %1s';
$lang['error_file_already_exists'] = '%1 dosyası zaten var.';
$lang['error_zip'] = 'Sıkıştırılmış dosya oluşturulurken bir hata oluştu.';
$lang['error_no_permissions'] = 'Bu eylemi tamamlamak için izinleriniz yok. <a href="%1s"> Tekrar giriş yapmayı deneyin </a>.';
$lang['error_no_lib_permissions'] = '%1s sınıfında yöntemleri yürütme izniniz yok.';
$lang['error_page_layout_variable_conflict'] = 'Bu mizanpajda bir hata var, çünkü mevcut olmayan veya aşağıdaki ayrılmış kelimelerin bir veya daha fazlasını içeriyor:%1s';
$lang['error_no_curl_lib'] = 'Bu araçları kullanmak için curl php uzantısına sahip olmanız gerekir.';
$lang['error_inline_page_edit'] = 'Bu değişkenin yönetici olarak kaydedilmesi veya ilişkili görünümler / _variables dosyasında düzenlenmesi gerekir..';
$lang['error_saving'] = 'Bir hata kaydedildi.';
$lang['error_cannot_preview'] = 'Bu sayfayı önizlemeye çalışırken bir hata oluştu.';
$lang['error_cannot_make_api_call'] = 'API çağrısı%1s yapılırken bir hata oluştu.';
$lang['error_sending_email'] = 'Adresine bir e-posta gönderilirken bir hata oluştu %1s.';
$lang['error_upload'] = 'Dosyanız yüklenirken bir hata oluştu. Lütfen sunucunun bu boyuttaki dosyaları yüklemek için ayarlandığından ve klasörlerin yazılabilir olduğundan emin olun..';
$lang['error_create_nav_group'] = 'Lütfen bir Gezinti Grubu oluşturun';
$lang['error_requires_string_value'] = 'İsim alanı bir dize değeri olmalıdır.';
$lang['error_missing_params'] = 'Bu sayfayı görüntülemek için parametreler eksik';
$lang['error_invalid_method'] = 'Geçersiz yöntem adı';
$lang['error_curl_page'] = 'CURL ile sayfa yüklenirken hata oluştu';
$lang['error_class_property_does_not_exist'] = '%1s sınıfı özelliği mevcut değil';
$lang['error_class_method_does_not_exist'] = '%1s sınıfı yöntemi mevcut değil';
$lang['error_could_not_create_folder'] = '%1s klasörü oluşturulamadı';
$lang['error_could_not_create_file'] = 'Dosya oluşturulamadı %1s';
$lang['error_no_build'] = "Bu modül için kurulum yok.\n";
$lang['error_invalid_record'] = "Modül kaydı mevcut değil.";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>Şifrenizi varsayılan olarak değiştirmeniz önerilir. <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Bu öğe yayınlanmadı.';
$lang['warn_not_active'] = 'Bu %1s aktif değil.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s giriş";
$lang['logged_out'] = "%s çıkış yapıldı";
$lang['dev_pwd_instructions'] = 'Bu site şu anda geliştirilmekte ve görüntülenecek bir şifre gerektirmektedir..';
$lang['login_forgot_pwd'] = 'Parolanızı mı unuttunuz?';
$lang['login_reset_pwd'] = 'Yeni Şifre Belirle';
$lang['login_btn'] = 'Oturum aç';
$lang['logout_restore_original_user'] = 'Orijinal kullanıcıyı geri yükle';

$lang['auth_log_pass_reset_request'] = "%2s'den '%1s' için şifre sıfırlama isteği";
$lang['auth_log_pass_reset'] = "%2s'den '%1s' için şifre sıfırlandı";
$lang['auth_log_cms_pass_reset'] = "%2s'den '%1s' için CMS'den şifre sıfırlandı";
$lang['auth_log_login_success'] = "%2s'den '%1s' ile başarılı giriş";
$lang['auth_log_failed_updating_login_info'] = "Giriş bilgilerinin %2s'den '%1s' ile güncellenmesi sırasında bir hata oluştu.";
$lang['auth_log_failed_login'] = "%2s'den '%1s' ile giriş başarısız, giriş denemeleri:%3s";
$lang['auth_log_account_lockout'] = "%2s'den '%1s' için hesap kilitleme";

$lang['pwd_requirements'] = '<p style="text-align: left; margin: 10px 0 5px 0;"><strong>Şifre olmalı:</strong></p>';
$lang['pwd_min_length_required'] = 'En az %1s karakter';
$lang['pwd_max_length_required'] = 'Maksimum %1s karakter';
$lang['pwd_lowercase_required'] = 'Bir veya daha fazla küçük harf';
$lang['pwd_uppercase_required'] = 'Bir veya daha fazla büyük harf';
$lang['pwd_numbers_required'] = 'Bir veya daha fazla sayı';
$lang['pwd_symbols_required'] = 'Bir veya daha fazla sembol';

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Gösterge Paneli';
$lang['dashboard_intro'] = 'FUEL CMS\'e hoşgeldiniz.';
$lang['dashboard_hdr_latest_activity'] = 'Son Aktivite';
$lang['dashboard_hdr_latest_news'] = 'Son FUEL Haberleri';
$lang['dashboard_hdr_modified'] = 'Son Değiştirilen Sayfalar';
$lang['dashboard_hdr_site_docs'] = 'Site Belgeleri';
$lang['dashboard_change_pwd'] = 'Şifre değiştir';
$lang['dashboard_change_pwd_later'] = 'Şifremi daha sonra değiştireceğim';
$lang['dashboard_subscribe_rss'] = 'RSS Feed\'e abone olun';
$lang['dashboard_view_all_pages'] = 'Tüm sayfaları görüntüle';
$lang['dashboard_view_all_activity'] = 'Tüm etkinlikleri görüntüle';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Benim profilim';
$lang['profile_instructions'] = 'Profil bilgilerinizi aşağıda değiştirin:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'Modüllerim';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
//$lang['pwd_reset'] = 'An email to confirm your password reset is on its way.';
$lang['pwd_reset_error'] = 'Girilen e-posta adresinin aktif bir sıfırlama tokeni yok, lütfen yeni bir sıfırlama bağlantısı almak için sıfırlama şifresini tekrar gönderin.';
$lang['pwd_reset_success'] = 'Şifreniz başarıyla sıfırlandı, lütfen giriş yapın.';

$lang['pwd_reset_error_not_match'] = 'Gönderilen şifreler eşleşmiyor.';

$lang['pwd_reset_missing_token'] = 'Eksik veya geçersiz sıfırlama tokeni.';
$lang['pwd_reset_success'] = 'Şifreniz başarıyla sıfırlandı, lütfen kullanıcı adınız ve şifreniz ile giriş yapın.';
$lang['pwd_reset'] = 'Şifre sıfırlama bağlantınıza sahip bir e-posta gönderildi.';
$lang['pwd_reset_subject'] = "FUEL yönetici şifre sıfırlama isteği";
$lang['pwd_reset_email'] = "FUEL şifrenizi sıfırlamak için aşağıdaki linke tıklayınız.:\n%1s";
$lang['pwd_reset_subject_success'] = "FUEL yönetici şifresi sıfırlama başarısı";
//$lang['pwd_reset_email_success'] = "Your FUEL password has been reset to %1s. To change your password, login to the FUEL CMS admin with this password and click on your login name in the upper right to access your profile information.";
$lang['pwd_reset_email_success'] = 'Şifre sıfırlama bağlantınıza sahip bir e-posta gönderildi.';
$lang['cache_cleared'] = "Site önbelleği açıkça temizlendi";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Gösterge Paneli';
$lang['module_pages'] = 'Sayfalar';
$lang['module_blocks'] = 'Bloklar';
$lang['module_navigation'] = 'Navigasyon';
$lang['module_categories'] = 'Kategoriler';
$lang['module_tags'] = 'Etiketler';
$lang['module_assets'] = 'Assets';
$lang['module_sitevariables'] = 'Site Değişkenleri';
$lang['module_users'] = 'Kullanıcılar';
$lang['module_permissions'] = 'İzinler';
$lang['module_tools'] = 'Araçlar';
$lang['module_manage_cache'] = 'Sayfa Önbelleği';
$lang['module_manage_activity'] = 'Aktivite Kaydı';
$lang['module_manage_settings'] = 'Ayarlar';
$lang['module_generate'] = 'Oluşturmak';


$lang['section_site'] = 'Site';
$lang['section_blog'] = 'Blog';
$lang['section_modules'] = 'Modüller';
$lang['section_manage'] = 'Yönet';
$lang['section_tools'] = 'Araçlar';
$lang['section_settings'] = 'Ayarlar';
$lang['section_recently_viewed'] = 'Son Görüntülenen';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created'] = "%1s öğe <em>%2s </em> oluşturuldu";
$lang['module_edited'] = "%1s öğe <em>%2s</em> düzenlendi";
$lang['module_deleted'] = "%1s öğe for <em>%2s</em> silindi";
$lang['module_multiple_deleted'] = "Çoklu <em>%1s</em> silindi";
$lang['module_restored'] = "Arşivden %1s öğe geri yüklendi";
$lang['module_instructions_default'] = "Burada siteniz için %1’leri yönetebilirsiniz.";
$lang['module_restored_success'] = 'Önceki sürüm başarıyla geri yüklendi.';
$lang['module_replaced_success'] = 'Bu kaydın içeriği başarıyla değiştirildi.';
$lang['module_incompatible'] = 'Bu modülün sürümü, FUEL sürümünün kurulumu ile uyumlu değildir. ' . FUEL_VERSION;

$lang['cannot_determine_module'] = "Modül belirlenemiyor.";
$lang['incorrect_route_to_module'] = "Bu modüle erişmek için yanlış yol.";
$lang['data_saved'] = 'Veri kaydedildi.';
$lang['data_deleted'] = 'Veriler silindi.';
$lang['data_not_deleted'] = 'Bazı veya tüm veriler silinemedi.';
$lang['no_data'] = 'gösterilecek bilgi yok.';
$lang['no_preview_path'] = 'Bu modüle atanan önizleme yolu yok.';
$lang['delete_item_message'] = 'Öğeyi silmek üzeresiniz:';
$lang['replace_item_message'] = 'Değiştirmek istediğiniz listeden bir kayıt seçin. Değiştirmek, verileri bir kayıttan diğerine aktarır ve eski kaydı siler..';

// command line
$lang['module_install'] = "'%1s' modülü başarıyla yüklendi.\n";
$lang['module_install_error'] = "'%1s' modülünü yüklerken bir hata oluştu.\n";

$msg = "%1s modülü FUEL'den kaldırıldı.\n\n";
$msg .= "Bununla birlikte, bir modülü GIT'ten kaldırmak, henüz otomatikleştirmediğimiz biraz daha fazla çalışmadır. Ancak, aşağıdaki adımlar yardımcı olacaktır.\n\n";
$msg .= "1. İlgili bölümü .gitmodules dosyasından silin.\n";
$msg .= "2. İlgili bölümü .git / config dizininden silin.\n";
$msg .= "3. Git rm --cached %2s çalıştırın (slash yok).\n";
$msg .= "4. İzlenmeyen alt modül dosyalarını birleştirme ve silme.\n";
$lang['module_uninstall'] = $msg;

$lang['module_update'] = "%1s modülü FUEL'de güncellendi.\n";

// build
$lang['module_build_asset'] = "%1s optimize edildi ve %2s'ye çıktı\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "Sürüme başarıyla taşındınız %s.\n";
$lang['migrate_nothing_todo'] = "Hiçbir geçiş gerekli değil.\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = 'gelişmiş Arama';
$lang['reset_search'] = 'Aramayı Sıfırla';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'Belirtilen konum, rotalar dosyasında önceden belirtilen şu rotalara sahiptir (%1s):';
$lang['page_controller_assigned'] = 'Bu sayfaya zaten atanmış bir denetleyici yöntemi var..';
$lang['page_updated_view'] = '<Strong>%1s </strong> adresinde güncellenmiş bir görünüm dosyası var. Sayfanızın gövdesine yüklemek isterseniz (varsa)?';
$lang['page_not_published'] = 'Bu sayfa yayınlanmadı.';

$lang['page_no_upload'] = 'Hayır, yükleme';
$lang['page_yes_upload'] = 'Evet, yükle';
$lang['page_information'] = 'Sayfa Bilgisi';
$lang['page_layout_vars'] = 'Düzen Değişkenleri';

$lang['pages_instructions'] = 'Burada sayfa ile ilişkili verileri yönetebilirsiniz.';
$lang['pages_associated_navigation'] = 'İlişkili Gezinme';
$lang['pages_success_upload'] = 'Sayfa görünümü başarıyla yüklendi.';
$lang['pages_upload_instructions'] = 'Bir görünüm dosyası seçin ve aşağıya bir sayfaya yükleyin.';
$lang['pages_select_action'] = 'Seç';

// page specific form fields
$lang['form_label_layout'] = 'Düzen';
$lang['form_label_cache'] = 'Ön Bellek';
$lang['pages_last_updated'] = 'Son güncelleme %1s';
$lang['pages_last_updated_by'] = 'Son güncelleme %1s %2s';
$lang['pages_not_published'] = 'Bu sayfa yayınlanmadı.';
$lang['pages_default_location'] = 'örnek: company/about';

$lang['form_label_page'] = 'sayfa';
$lang['form_label_target'] = 'Hedef';
$lang['form_label_class'] = 'Sınıf';

$lang['navigation_related'] = 'Gezinme oluştur';
$lang['navigation_quick_add'] = 'Bu alan, bu sayfa için hızlı bir gezinme öğesi eklemenize olanak tanır. Sadece sayfa oluşturma sırasında bir navigasyon öğesi oluşturmanıza izin verir. Gezinme öğesini düzenlemek için, soldaki \'Navigasyon\' bağlantısına tıklamalısınız, değiştirmek istediğiniz navigasyon öğesini bulun ve düzenle bağlantısını tıklayın..';

$lang['page_select_pages'] = 'Sayfalar';
$lang['page_select_pdfs'] = 'PDF\'ler';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = '<strong> %1s </strong> adresinde güncellenmiş bir görünüm dosyası var. Almak ister misiniz?';
$lang['blocks_success_upload'] = 'Blok görünümü başarıyla yüklendi.';
$lang['blocks_upload_instructions'] = 'Bir blok görüntüleme dosyası seçin ve aşağıya yükleyin.';

$lang['form_label_view'] = 'Görünüm';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Navigasyonu İçe Aktar';
$lang['navigation_instructions'] = 'Burada sayfanın üst menü öğelerini oluşturup düzenlersiniz.';
$lang['navigation_import_instructions'] = 'Bir gezinme grubu seçin ve aşağıdan içe aktarmak için bir dosya yükleyin. Dosya, aşağıdaki değişken alanında atanan PHP dizi değişkenini içermelidir (ör. <strong> $nav </strong>). Dizi formatının referansı için lütfen <a href="https://docs.getfuelcms.com/general/navigation" target="_blank">Kullanici rehberi</a>.';
$lang['navigation_success_upload'] = 'Gezinme başarıyla yüklendi.';
$lang['form_label_navigation_group'] = 'Gezinme Grubu:';
$lang['form_label_nav_key'] = 'Anahtar';
$lang['form_label_parent_id'] = 'Parent';
$lang['form_label_attributes'] = 'Öznitellikler';
$lang['form_label_selected'] = 'Seçilmiş';
$lang['form_label_hidden'] = 'Gizli';

$lang['error_location_parents_match'] = 'Konum ve Parent eşleşemez.';

// for upload form
$lang['form_label_clear_first'] = 'İlk önce temizle';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Burada yeni varlıkları yükleyebilirsiniz. Aynı ada sahip bir dosyanın üzerine yazmak isterseniz, üzerine yazın.';
$lang['form_label_preview/kb'] = 'Ön izleme/kb';
$lang['form_label_link'] = 'Link';
$lang['form_label_asset_folder'] = 'Öğe klasörü';
$lang['form_label_new_file_name'] = 'Yeni dosya adı';
$lang['form_label_subfolder'] = 'Alt klasör';
$lang['form_label_overwrite'] = 'Üzerine Yaz';
$lang['form_label_create_thumb'] = 'Thumb Oluştur';
$lang['form_label_resize_method'] = 'Yeniden boyutlandırma yöntemi';
$lang['form_label_maintain_ratio'] = 'oranı koru';
$lang['form_label_resize_and_crop'] = 'gerekirse kes';
$lang['form_label_overwrite'] = 'Üzerine Yaz';
$lang['form_label_width'] = 'Genişlik';
$lang['form_label_height'] = 'Yükseklik';
$lang['form_label_alt'] = 'Alt';
$lang['form_label_align'] = 'Hizalama';
$lang['form_label_master_dim'] = 'Ana boyut';
$lang['form_label_unzip'] = 'Zip dosyalarını çıkar';
$lang['assets_upload_action'] = 'Yükle';
$lang['assets_select_action'] = 'Seç';
$lang['assets_comment_asset_folder'] = 'Yüklenecek öğe klasörü';
$lang['assets_comment_filename'] = 'İsim belirtilmemişse, halihazırda var olan dosya adı kullanılır..';
$lang['assets_comment_subfolder'] = 'Varlığınızı yerleştirmek için yeni bir alt klasör oluşturmaya çalışır..';
$lang['assets_comment_overwrite'] = 'Aynı ada sahip bir dosyanın üzerine yaz. İşaretlenmemişse, sonuna eklenen bir sürüm numarasıyla yeni bir dosya yüklenecek.';
$lang['assets_heading_general'] = 'Genel';
$lang['assets_heading_image_specific'] = 'Özel görüntü';
$lang['assets_comment_thumb'] = 'Resmin küçük resmini oluştur.';
$lang['assets_comment_resize_method'] = 'En boy oranını korur veya görüntüyü verilen boyutlara uyacak şekilde yeniden boyutlandırır ve kırpır. "Küçük resim oluştur" seçiliyse, yalnızca küçük resmin boyutunu etkiler.';
$lang['assets_comment_width'] = 'Görüntünün genişliğini istenilen miktara değiştirir. "Küçük resim oluştur" seçiliyse, yalnızca küçük resmin boyutunu etkiler..';
$lang['assets_comment_height'] = 'Bir görüntünün yüksekliğini istenilen miktarda değiştirir. "Küçük resim oluştur" seçiliyse, yalnızca küçük resmin boyutunu etkiler.';
$lang['assets_comment_master_dim'] = 'Yeniden boyutlandırmak için kullanılacak ana boyutu belirtir. Kaynak görüntü boyutu bu boyutlara mükemmel bir şekilde yeniden boyutlandırmaya izin vermiyorsa, bu ayar hangi eksenin sabit değer olarak kullanılacağını belirler. "auto" (Otomatik), görüntünün daha uzun, daha geniş mi yoksa tam tersi mi olduğuna bağlı olarak ekseni otomatik olarak ayarlar.';
$lang['assets_comment_unzip'] = 'Bir zip dosyasını açar';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Burada web siteniz için site değişkenlerini yönetebilirsiniz.';
$lang['sitevariables_scope'] = 'Kapsam';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Burada kullanıcılar için verileri yönetebilirsiniz.';
$lang['permissions_heading'] = 'İzinler';
$lang['form_label_language'] = 'Dil';
$lang['form_label_send_email'] = 'Eposta gönder';
$lang['btn_send_email'] = 'Eposta gönder';
$lang['new_user_email_subject'] = 'FUEL CMS hesabınız oluşturuldu';
$lang['new_user_email'] = 'FUEL CMS hesabınız "%1s" kullanıcı adıyla oluşturulmuştur. FUEL şifrenizi ayarlamak için aşağıdaki linke tıklayınız.: 
%2s';
$lang['new_user_created_notification'] = 'Kullanıcı bilgileri başarıyla kaydedildi ve bir bildirim gönderildi %1s.';
$lang['error_cannot_deactivate_yourself'] = 'Kendini deaktive edemezsin.';

/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Burada FUEL modülleri için izinleri yönetebilir ve daha sonra bunları kullanıcılara atayabilirsiniz..';
$lang['form_label_other_perms'] = 'İlgili basit <br/> modül izinleri oluştur';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'Önbellek temizlendi.';
$lang['cache_instructions'] = 'Sitenin sayfa önbelleğini temizlemek üzeresiniz.';
$lang['cache_no_clear'] = 'Hayır, önbelleği temizleme';
$lang['cache_yes_clear'] = 'Evet, önbelleği temizle';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'Yönetilecek herhangi bir gelişmiş modül için ayar yoktur..';
$lang['settings_manage'] = 'Aşağıdaki gelişmiş modüller için ayarları yönetin:';
$lang['settings_problem'] = 'Gelişmiş modül <strong>%1s </strong> ayarlarında bir sorun oluştu. <br/> <strong> /fuel/modules/%1s/config/%1s.php </strong> yapılandırmasının ayarları işlemek üzere yapılandırıldığını kontrol edin.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'Bu bir CLI talebi değil.';
$lang['error_not_in_dev_mode'] = 'Bu sadece dev modda çalışır.';
$lang['error_missing_generation_files'] = '%1 ler için oluşturulacak üretim dosyası yok.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'DÜZENLE';
$lang['table_action_delete'] = 'SİL';
$lang['table_action_view'] = 'GÖRÜNTÜLE';
$lang['click_to_toggle'] = 'açmak için tıklayın';
$lang['table_action_login_as'] = 'GİRİŞ';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Göstermek:';
$lang['label_language'] = 'Dil:';
$lang['label_restore_from_prev'] = 'Önceki versiyondan geri yükle...';
$lang['label_select_another'] = 'Başka seç...';
$lang['label_select_one'] = 'Birini seç...';
$lang['label_belongs_to'] = 'Ait olmak';
$lang['label_select_a_language'] = 'Bir dil seç...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Liste';
$lang['btn_tree'] = 'Ağaç';
$lang['btn_create'] = 'Oluştur';
$lang['btn_delete_multiple'] = 'Çoklu Sil';
$lang['btn_rearrange'] = 'yeniden düzenleme';
$lang['btn_search'] = 'Ara';
$lang['btn_view'] = 'Göster';
$lang['btn_publish'] = 'Yayınla';
$lang['btn_unpublish'] = 'Yayından Kaldır';
$lang['btn_activate'] = 'Etkinleştir';
$lang['btn_deactivate'] = 'Devre dışı bırak';
$lang['btn_delete'] = 'Sil';
$lang['btn_duplicate'] = 'Kopyala';
$lang['btn_replace'] = 'Değiştir';
$lang['btn_ok'] = 'Tamam';
$lang['btn_upload'] = 'Yükle';
$lang['btn_download'] = 'İndir';
$lang['btn_export_data'] = 'Verileri Dışa Aktar';

$lang['btn_no'] = 'Hayır';
$lang['btn_yes'] = 'Evet';

$lang['btn_no_upload'] = 'Hayır, yükleme';
$lang['btn_yes_upload'] = 'Evet, yükle';

$lang['btn_no_dont_delete'] = 'Hayır, silmeyin';
$lang['btn_yes_dont_delete'] = 'Evet, sil';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'İsim';
$lang['form_label_title'] = 'Başlık';
$lang['form_label_label'] = 'Etiket';
$lang['form_label_location'] = 'Konum';
$lang['form_label_published'] = 'Yayınlanan';
$lang['form_label_active'] = 'Aktif';
$lang['form_label_precedence'] = 'Öncelik';
$lang['form_label_date_added'] = 'Ekleme Tarihi';
$lang['form_label_last_updated'] = 'Son güncelleme';
$lang['form_label_file'] = 'Dosya';
$lang['form_label_value'] = 'Değer';
$lang['form_label_email'] = 'E-Posta';
$lang['form_label_user_name'] = 'Kullanıcı Adı';
$lang['form_label_first_name'] = 'Ad';
$lang['form_label_last_name'] = 'Soyad';
$lang['form_label_super_admin'] = 'Super admin';
$lang['form_label_password'] = 'Şifre';
$lang['form_label_confirm_password'] = 'Şifreyi Doğrula';
$lang['form_label_new_password'] = 'Yeni Şifre';
$lang['form_label_new_invite'] = 'Yeni kullanıcı davetiyesi gönder';
$lang['form_label_description'] = 'Açıklama';
$lang['form_label_entry_date'] = 'Giriş tarihi';
$lang['form_label_message'] = 'Mesaj';
$lang['form_label_image'] = 'Görüntü';
$lang['form_label_upload_image'] = 'Fotoğraf yükle';
$lang['form_label_upload_images'] = 'Resimleri yükle';
$lang['form_label_content'] = 'içerik';
$lang['form_label_excerpt'] = 'Alıntı';
$lang['form_label_permalink'] = 'Kalıcı Bağlantı';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Link';
$lang['form_label_pdf'] = 'PDF';
$lang['form_label_canonical'] = 'Canonical';
$lang['form_label_og_title'] = 'Open Graph başlık';
$lang['form_label_og_description'] = 'Open Graph açıklama';
$lang['form_label_og_image'] = 'Open Graph resim';
$lang['form_label_category_id'] = 'Kategori';


$lang['form_label_group_id'] = 'Grup';
$lang['form_label_or_select'] = 'VEYA seç';

$lang['form_enum_option_yes'] = 'evet';
$lang['form_enum_option_no'] = 'hayır';

$lang['required_text'] = 'Zorunlu Alanlar';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'Siteniz için kullanılacak ana düzen budur.';
$lang['layout_field_page_title'] = 'Sayfa başlığı';
$lang['layout_field_meta_description'] = 'Meta Açıklaması';
$lang['layout_field_meta_keywords'] = 'Anahtar Kelimeler';
$lang['layout_field_body'] = 'Body';
$lang['layout_field_heading'] = 'Heading';
$lang['layout_field_body_description'] = 'Sayfanın ana içeriği';
$lang['layout_field_body_class'] = 'Body class';
$lang['layout_field_redirect_to'] = 'Adresine yönlendir';

$lang['layout_field_301_redirect_copy'] = 'Bu düzen başka bir sayfaya 301 yönlendirme yapacak.';
$lang['layout_field_alias_copy'] = 'Bu düzen, 301 yönlendirmesine benzer, ancak sayfanın konumu değişmez ve sayfa oluşturulduğunda, belirtilen konumdan sayfa içeriği kullanılır..';
$lang['layout_field_sitemap_xml_copy'] = 'Bu düzen bir site haritası oluşturmak için kullanılır. Bu sayfanın görünmesi için sunucuda bir sitemap.xml bulunmamalıdır..';
$lang['layout_field_robots_txt_copy'] = 'Bu düzen bir robots.txt dosyası oluşturmak için kullanılır. Bu sayfanın görünmesi için sunucuda bir robots.txt dosyası bulunmamalıdır..';
$lang['layout_field_none_copy'] = 'Bu düzen, düzen atanmamış olmasıyla eşdeğerdir.';

$lang['layout_field_frequency'] = 'Sıklık';
$lang['layout_field_frequency_always'] = 'her zaman';
$lang['layout_field_frequency_hourly'] = 'saatlik';
$lang['layout_field_frequency_daily'] = 'günlük';
$lang['layout_field_frequency_weekly'] = 'haftalık';
$lang['layout_field_frequency_monthly'] = 'aylık';
$lang['layout_field_frequency_yearly'] = 'yıllık';
$lang['layout_field_frequency_never'] = 'asla';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'Açmak için çift tıklayın';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; İlk';
$lang['pagination_last_link'] = 'Son &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = 'Düzenle';
$lang['action_create'] = 'Oluştur';
$lang['action_delete'] = 'Sil';
$lang['action_upload'] = 'Yükle';
$lang['action_replace'] = 'Değiştir';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = 'Versiyona başarılı veritabanı geçişi %1s';

//$lang['import'] = 'Import';

/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "FUEL CMS yükleyici, CMS'yi ortak konfigürasyonlarla kurmanın kolay bir yoludur. Aşağıdaki yapacaktır:\n";
$lang['install_cli_intro'] .= "1) Bir şifreleme anahtarını otomatik olarak oluştur fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "2) Oturum kaydetme yolu fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "3) 'admin_enabled' yapılandırma değerini değiştirerek CMS yöneticisini etkinleştirin. fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "4) İçindeki 'fuel_mode' yapılandırma değerini değiştirin CMS'de sayfaların oluşturulmasına izin vermek için fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "5) 'site_name' yapılandırma değerini değiştirin. fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "6) Ortamlarınızı kurun fuel/application/config/environments.php.\n";
$lang['install_cli_intro'] .= "7) Klasörleri yazılabilir yapın fuel/application/logs, fuel/application/cache and assets/images.\n";
$lang['install_cli_intro'] .= "8) Dosyayı girilen değerler ile güncelle fuel/application/config/database.php .\n";
$lang['install_cli_intro'] .= "9) Bir veritabanı oluşturun ve yerel MySQL bağlantınızı kullanarak fuel_schema.sql dosyasını yükleyin.\n";

$lang['install_session_path'] = 'Varsayılan olarak, FUEL CMS varsayılan "dosya" ayarını kullanarak oturumları kaydeder.fuel/application/config/config.php . Oturum dosyalarının nerede depolanmasını istersiniz (varsayılan değer olarak saklamak için boş bırakın)?';
$lang['install_site_name'] = 'Bu FUEL CMS yüklemesi için site adının ne olmasını isterdiniz??';
$lang['install_environments_testing'] = 'TEST ortamınızın alanları nelerdir? (e.g. myserver.com *.mystagingserver.com)?';
$lang['install_environments_production'] = 'PRODUCTION ortamınızın alanları nelerdir? (e.g. myserver.com *.myserver.com)?';
$lang['install_permissions'] = 'Yazılabilir klasörleriniz için hangi izinleri istiyorsunuz? (e.g. 0755, 0775, 0777)?';
$lang['install_db_name'] = 'Veritabanınızın adının ne olmasını istiyorsunuz??';
$lang['install_db_user'] = 'Veritabanınıza bağlanmak için kullanıcı adı nedir?';
$lang['install_db_pwd'] = 'Bu kullanıcı için şifre nedir?';

$lang['install_success'] = 'FUEL CMS kurulumunuz tamamlandı!';
$lang['install_success_with_errors'] = "FUEL CMS kurulumunuz tamamlandı ancak ERRORS takip edildi:\n%1s";
$lang['install_further_info'] = "Şimdi, FUEL CMS yöneticisine erişmek için tarayıcınızın girdiği kurulum klasörüne göz atın. '/fuel' (e.g. localhost/fuel) konum çubuğundan.\n";
$lang['install_further_info'] .= "Ek yapılandırma seçenekleri için https://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "Sorularınız veya hata raporları için https://github.com/daylightstudio/FUEL-CMS/issues ya da bizi ziyaret edin https://forums.getfuelcms.com.\n";

$lang['update_cli_intro'] = "FUEL CMS 1.4x, CodeIgniter 3'te yerleşiktir. 1.3x veya daha önceki sürümlerden yükseltme yapıyorsanız, bu güncelleyici, güncellemeyi de içeren bazı yaygın sorunların düzeltilmesine yardımcı olacaktır.:\n";
$lang['update_cli_intro'] .= "1) Modeller, kütüphaneler ve kontrolör dosya isimleri için ilk harf büyük.\n";
$lang['update_cli_intro'] .= "2) Model dosyaları içinde Base_module_model.php için büyük harfli ortak referanslar olacak.\n";
$lang['update_cli_intro'] .= "3) Form_fields, _common_query gibi modellerde ve kitaplıklarda ortak yöntem imzalarını güncelleyin ve ebeveynlerinin imzasını eşleştirmek için başlangıç durumuna getirin..\n";
$lang['update_cli_intro'] .= "UYARI: Geri sarmanız gerekiyorsa GIT kullanıyorsanız, bunu SADECE çalıştırın!\n";
$lang['update_cli_intro'] .= "Devam etmek istiyormusunuz (y/n)";
$lang['update_success'] = 'Güncelleme tamamlandı!';

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */
