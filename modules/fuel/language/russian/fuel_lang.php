<?php

/*
|--------------------------------------------------------------------------
| General
|--------------------------------------------------------------------------
*/
$lang['fuel_page_title'] = 'FUEL CMS';
$lang['logged_in_as'] = 'Вы вошли как:';
$lang['logout'] = 'Выйти';
$lang['fuel_developed_by'] = 'FUEL CMS версия %1s разработана <a href="https://www.thedaylightstudio.com" target="_blank">Daylight Studio</a> и построена на <a href="https://www.codeigniter.com" target="_blank">CodeIgniter</a> framework.';
$lang['fuel_copyright'] = 'Copyright &copy; %1s Daylight Studio. All Rights Reserved.';


/*
|--------------------------------------------------------------------------
| Error Messages
|--------------------------------------------------------------------------
*/
$lang['error_no_access'] = "Вы не имеете доступа к этой странице.";
$lang['error_missing_module'] = "У вас не хватает модуля %1s.";
$lang['error_invalid_login'] = 'Неверный Логин.';
$lang['error_max_attempts'] = 'Извините, но Ваша информация была неправильно заполнена, и вы временно заблокированы. Пожалуйста, попробуйте еще раз через %s секунд.';
$lang['error_empty_user_pwd'] = 'Пожалуйста, введите имя пользователя, и пароль.';
$lang['error_pwd_reset'] = 'Произошла ошибка при смене пароля.';
$lang['error_invalid_email'] = 'Указанный электронный адрес не в системе.';
$lang['error_invalid_password_match'] = 'Пароли не совпадают.';
$lang['error_empty_email'] = 'Пожалуйста, введите адресе электронной почты.';
$lang['error_folder_not_writable'] = 'Вы должны сделать %1s папку доступной для записи.';
$lang['error_invalid_folder'] = 'Неверная папка %1s';
$lang['error_file_already_exists'] = 'Фаил %1s уже существует.';
$lang['error_zip'] = 'Произошла ошибка при создании архивного файла.';
$lang['error_no_permissions'] = 'Вы не имеете прав для выполнения этого действия.';
$lang['error_no_lib_permissions'] = 'Вы не имеете разрешения на выполнение метода %1s класса.';
$lang['error_page_layout_variable_conflict'] = 'Произошла ошибка в этом макете, поскольку он либо не существует или содержит один или несколько из следующих зарезервированных слов: %1s';
$lang['error_no_curl_lib'] = 'You must have the curl php extension to use these tools.';
$lang['error_inline_page_edit'] = 'Эта переменная должна быть либо сохранена в админке или отредактирована в связанных с ней views/_variables файлом.';
$lang['error_saving'] = 'Произошла ошибка при сохранении.';
$lang['error_cannot_preview'] = 'Произошла ошибка при попытке просмотреть эту страницу.';
$lang['error_cannot_make_api_call'] = 'There was an error making the API call to %1s.';
$lang['error_sending_email'] = 'Произошла ошибка при отправке электронной почты - %1s.';
$lang['error_upload'] = 'Произошла ошибка загрузки файла.';
$lang['error_create_nav_group'] = 'Пожалуйста, создайте Навигационную Группу';
$lang['error_requires_string_value'] = 'Имя поля должно быть строчным';
$lang['error_missing_params'] = 'Вам не хватает параметров для просмотра этой страницы';
$lang['error_invalid_method'] = 'Неверное имя метода';
$lang['error_curl_page'] = 'Error loading page with CURL';
$lang['error_class_property_does_not_exist'] = 'Class property %1s does not exist';
$lang['error_class_method_does_not_exist'] = 'Class method %1s does not exist';
$lang['error_could_not_create_folder'] = 'Не удалось создать папку %1s';
$lang['error_could_not_create_file'] = 'Не удалось создать файл %1s';
$lang['error_no_build'] = "No build setup for this module.\n";


/*
|--------------------------------------------------------------------------
| Warnings
|--------------------------------------------------------------------------
*/
$lang['warn_change_default_pwd'] = '<strong>Настоятельно рекомендуем Вам изменить ваш пароль по умолчанию <em>%1s</em></strong>.';
$lang['warn_not_published'] = 'Эта запись не опубликована.';
$lang['warn_not_active'] = 'Эта запись %1s не активирована.';


/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/
$lang['logged_in'] = "%s зарегестрирован";
$lang['logged_out'] = "%s не зарегестрирован";
$lang['dev_pwd_instructions'] = 'Сайт в разработке и требует пароля для просмотра.';
$lang['login_forgot_pwd'] = 'Забыли пароль?';
$lang['login_reset_pwd'] = 'Сбросить пароль';
$lang['login_btn'] = 'Войти';
$lang['logout_restore_original_user'] = 'Восстановить первоначального пользователя';

$lang['auth_log_pass_reset_request'] = "Запрос для сброса пароля на '%1s' от %2s";
$lang['auth_log_pass_reset'] = "Пароль восстановлен для '%1s' от %2s";
$lang['auth_log_cms_pass_reset'] = "Восстановление пароля от CMS для '%1s' от %2s";
$lang['auth_log_login_success'] = "Успешный вход с '%1s' для %2s";
$lang['auth_log_failed_updating_login_info'] = "Произошла ошибка обновления регистрационной информации для '%1s' по %2s";
$lang['auth_log_failed_login'] = "Ошибка входа для '%1s' от %2s, попытки входа: %3s";
$lang['auth_log_account_lockout'] = "Блокировка учетной записи '%1s' на %2s";

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
$lang['section_dashboard'] = 'Панель';
$lang['dashboard_intro'] = 'Добро пожаловать в FUEL CMS.';
$lang['dashboard_hdr_latest_activity'] = 'Последние действия';
$lang['dashboard_hdr_latest_news'] = 'Последние новости FUEL';
$lang['dashboard_hdr_modified'] = 'Недавно измененные страницы';
$lang['dashboard_hdr_site_docs'] = 'Документация по сайту';
$lang['dashboard_change_pwd'] = 'Изменить пароль';
$lang['dashboard_change_pwd_later'] = 'Я изменю свой пароль позже.';
$lang['dashboard_subscribe_rss'] = 'Подписаться на ленту RSS';
$lang['dashboard_view_all_pages'] = 'Просмотреть все страницы';
$lang['dashboard_view_all_activity'] = 'Просмотреть всю активность';


/*
|--------------------------------------------------------------------------
| My Profile
|--------------------------------------------------------------------------
*/
$lang['section_my_profile'] = 'Мой профиль';
$lang['profile_instructions'] = 'Изменить информацию своего профиля:';


/*
|--------------------------------------------------------------------------
| My Modules
|--------------------------------------------------------------------------
*/
$lang['section_my_modules'] = 'Мои модули';


/*
|--------------------------------------------------------------------------
| Login/Password Reset
|--------------------------------------------------------------------------
*/
$lang['pwd_reset'] = 'Почта для подтверждения сброса Вашего пароля.';
$lang['pwd_reset_subject'] = "Запрос на изменение пароля FUEL администратора";
$lang['pwd_reset_email'] = "Нажмите на ссылку, чтобы подтвердить сброс вашего FUEL пароля:\n%1s";
$lang['pwd_reset_subject_success'] = "Успешный сброс пароля FUEL администратора";
$lang['pwd_reset_email_success'] = "Ваш FUEL пароль был изменен на %1s. Для изменения пароля, войдите в FUEL CMS админку с этим паролем и нажмите на имени пользователя в правом верхнем углу, чтобы получить доступ к информации по Вашему профилю.";
$lang['pwd_reset_success'] = 'Ваш пароль был успешно изменен и отправлено Вам в e-mail сообщение.';
$lang['cache_cleared'] = "Кэш сайта очищен точно";


/*
|--------------------------------------------------------------------------
| Menu Titles / Sections
|--------------------------------------------------------------------------
*/

$lang['module_dashboard'] = 'Панель';
$lang['module_pages'] = 'Страницы';
$lang['module_blocks'] = 'Блоки';
$lang['module_navigation'] = 'Навигация';
$lang['module_categories'] = 'Категории';
$lang['module_tags'] = 'Ключевые слова';
$lang['module_assets'] = 'Активы';
$lang['module_sitevariables'] = 'Переменные';
$lang['module_users'] = 'Пользователи';
$lang['module_permissions'] = 'Разрешения';
$lang['module_tools'] = 'Инструменты';
$lang['module_manage_cache'] = 'Кэш страниц';
$lang['module_manage_activity'] = 'Логи';
$lang['module_manage_settings'] = 'Настройки';
$lang['module_generate'] = 'Генерация';


$lang['section_site'] = 'Сайт';
$lang['section_blog'] = 'Блог';
$lang['section_modules'] = 'Модули';
$lang['section_manage'] = 'Управление';
$lang['section_tools'] = 'Инструменты';
$lang['section_settings'] = 'Настройки';
$lang['section_recently_viewed'] = 'Недавно просмотренные';


/*
|--------------------------------------------------------------------------
| Generic Module
|--------------------------------------------------------------------------
*/
$lang['module_created']= "%1s запись <em>%2s</em> создана";
$lang['module_edited'] = "%1s запись <em>%2s</em> изменена";
$lang['module_deleted'] = "%1s запись for <em>%2s</em> удалена";
$lang['module_multiple_deleted'] = "Множественные <em>%1s</em> удалены";
$lang['module_restored'] = "%1s запись восстановла из архива";
$lang['module_instructions_default'] = "Здесь вы можете управлять %1s Вашего сайта.";
$lang['module_restored_success'] = 'Предыдущая версия успешно восстановлена.';
$lang['module_replaced_success'] = 'Содержимое этой записи были успешно заменено.';
$lang['module_incompatible'] = 'Версия этого модуля не совместима с установленой версией FUEL '.FUEL_VERSION;

$lang['cannot_determine_module'] = "Невозможно определить модуль.";
$lang['incorrect_route_to_module'] = "Неправильный маршрут для открытия модуля.";
$lang['data_saved'] = 'Данные были сохранены.';
$lang['data_deleted'] = 'Данные были удалены.';
$lang['data_not_deleted'] = 'Некоторые или все записи не могут быть удалены.';
$lang['no_data'] = 'Нет данных для отображения.';
$lang['no_preview_path'] = 'Нет путь для предварительного просмотра этого модуля.';
$lang['delete_item_message'] = 'Вы собираетесь удалить запись:';
$lang['replace_item_message'] = 'Выберите запись из списка ниже, которую Вы хотели бы заменить. Замена будет передавать данные от одной записи к другой, а затем удалять старую запись.';

// command line
$lang['module_install'] = "Модуль '%1s' был успешно установлен.\n";
$lang['module_install_error'] = "Произошла ошибка при установке '%1s' модуля.\n";

$msg = "Модуль %1s был удален из FUEL.\n\n";
$msg .= "However, removing a module from GIT is a little more work that we haven't automated yet. However, the below steps should help.\n\n";
$msg .= "1. Delete the relevant section from the .gitmodules file.\n";
$msg .= "2. Delete the relevant section from .git/config.\n";
$msg .= "3. Run git rm --cached %2s (no trailing slash).\n";
$msg .= "4. Commit and delete the now untracked submodule files.\n";
$lang['module_uninstall'] = $msg;

// build
$lang['module_build_asset'] = "%1s optimized and ouput to %2s\n";

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['migrate_success'] = "Успешная миграция на версию %s.\n";
$lang['migrate_nothing_todo'] = "No migrations were necessary.\n";

/*
|--------------------------------------------------------------------------
| List View
|--------------------------------------------------------------------------
*/
$lang['adv_search'] = 'Расширенный поиск';
$lang['reset_search'] = 'Сбросить Поиск';


/*
|--------------------------------------------------------------------------
| Pages
|--------------------------------------------------------------------------
*/

$lang['page_route_warning'] = 'Такой роутинг уже существует (%1s):';
$lang['page_controller_assigned'] = 'Существует метод контроллера, уже назначеного для этой страницы.';
$lang['page_updated_view'] = 'Существует обновленный файл Представления, расположенный в <strong>%1s</strong>. Хотите загрузить его в тело страницы (если возможно)?';
$lang['page_not_published'] = 'Эта страница не опубликована.';

$lang['page_no_upload'] = 'Нет, не загружать';
$lang['page_yes_upload'] = 'Да, загружать';
$lang['page_information'] = 'Информация о странице';
$lang['page_layout_vars'] = 'Переменные макета';

$lang['pages_instructions'] = 'Здесь вы можете управлять данными, связанными со страницей.';
$lang['pages_associated_navigation'] = 'Связанный с навигациией';
$lang['pages_success_upload'] = 'Представление страницы было успешно загружено.';
$lang['pages_upload_instructions'] = 'Выберите файл представления и загрузите на странице ниже.';
$lang['pages_select_action'] = 'Выбрать';

// page specific form fields
$lang['form_label_layout'] = 'Макет';
$lang['form_label_cache'] = 'Кэш';
$lang['pages_last_updated'] = 'Последнее обновление %1s';
$lang['pages_last_updated_by'] = 'Последнее обновление %1s - %2s';
$lang['pages_not_published'] = 'Эта страница не опубликована.';
$lang['pages_default_location'] = 'Пример: company/about';

$lang['form_label_page'] = 'Страница';
$lang['form_label_target'] = 'Цель';
$lang['form_label_class'] = 'Класс';

$lang['navigation_related'] = 'Создать навигацию';
$lang['navigation_quick_add'] = 'Это поле позволяет быстро добавить пункт навигации для этой страницы. Это позволяет создать элемент навигации только при создании страницы. Для редактирования элемента навигации, вы должны нажать на ссылку \'Навигация\' слева, найдите пункт навигации который вы хотите изменить и нажмите на ссылку для редактирования.';

$lang['page_select_pages'] = 'Страницы';
$lang['page_select_pdfs'] = 'PDFы';

/*
|--------------------------------------------------------------------------
| Blocks
|--------------------------------------------------------------------------
*/
$lang['blocks_updated_view'] = 'Существует обновленный файл Представления, расположенный в <strong>%1s</strong>. Would you like to import?';
$lang['blocks_success_upload'] = 'Представление блока было успешно загруженно.';
$lang['blocks_upload_instructions'] = 'Выберите файл представления для блока и загрузите его ниже.';

$lang['form_label_view'] = 'Представления';

/*
|--------------------------------------------------------------------------
| Navigation
|--------------------------------------------------------------------------
*/
$lang['navigation_import'] = 'Импорт Навигации';
$lang['navigation_import_instructions'] = 'Выберите навигационную группу и загрузите файл для импорта. Файл должен содержать PHP массив переменных назначеных в поле переменных ниже (например <strong>$nav</strong>).';
$lang['navigation_instructions'] = 'Здесь можно создавать и редактировать пункты главного меню.';
$lang['navigation_success_upload'] = 'Навигация успешно загруженна.';
$lang['form_label_navigation_group'] = 'Навигационная Группа:';
$lang['form_label_nav_key'] = 'Ключ';
$lang['form_label_parent_id'] = 'Родитель';
$lang['form_label_attributes'] = 'Атрибуты';
$lang['form_label_selected'] = 'Выбранные';
$lang['form_label_hidden'] = 'Спрятанные';

$lang['error_location_parents_match'] = 'Место и родители не могут сравниться.';

// for upload form
$lang['form_label_clear_first'] = 'Очистить первый';


/*
|--------------------------------------------------------------------------
| Assets
|--------------------------------------------------------------------------
*/
$lang['assets_instructions'] = 'Здесь вы можете загружать новые активы. Выберите перезаписи, если вы хотите перезаписать файл с таким же именем.';
$lang['form_label_preview/kb'] = 'Просмотр/kb';
$lang['form_label_link'] = 'Ссылка';
$lang['form_label_asset_folder'] = 'Папка активов';
$lang['form_label_new_file_name'] = 'Новое имя файла';
$lang['form_label_subfolder'] = 'Подпапка';
$lang['form_label_overwrite'] = 'Перезаписать';
$lang['form_label_create_thumb'] = 'Создать миниатюру';
$lang['form_label_resize_method'] = 'Метод изменения размера';
$lang['form_label_maintain_ratio'] = 'Сохранить пропорции';
$lang['form_label_resize_and_crop'] = 'обрезать, если необходимо';
$lang['form_label_overwrite'] = 'Перезаписать';
$lang['form_label_width'] = 'Ширина';
$lang['form_label_height'] = 'Высота';
$lang['form_label_alt'] = 'Альтенатива';
$lang['form_label_align'] = 'Выравнивание';
$lang['form_label_master_dim'] = 'Ведущая пропоршия';
$lang['form_label_unzip'] = 'Распаковать файлы Zip';
$lang['assets_upload_action'] = 'Загрузить';
$lang['assets_select_action'] = 'Выбрать';
$lang['assets_comment_asset_folder'] = 'Папка активов в которую будет загружено';
$lang['assets_comment_filename'] = 'Если не указать имя, будет использоватся имя файла, которое уже существует.';
$lang['assets_comment_subfolder'] = 'Будет попытка создать новую подпапку для размещения актива.';
$lang['assets_comment_overwrite'] = 'Переписать файл с таким же именем. Если флажок не установлен, новый файл будет загружен с номером версии, прилагаемой к концу этого.';
$lang['assets_heading_general'] = 'Главные';
$lang['assets_heading_image_specific'] = 'Характерные для изображений';
$lang['assets_comment_thumb'] = 'Создать миниатюру изоражения.';
$lang['assets_comment_resize_method'] = 'Сохранение соотношения сторон или изменить и обрезает изображение в соответствии установленных размеры. Если "Создать миниатюру", то это повлияет только на размер миниатюры.';
$lang['assets_comment_width'] = 'Будет изменена ширина изображения до нужного размера. Если выбрано "Создать миниатюру", то это повлияет только на размер миниатюры.';
$lang['assets_comment_height'] = 'Будет изменена высота изображения до нужного размера. Если выбрано "Создать миниатюру", то это повлияет только на размер миниатюры.';
$lang['assets_comment_master_dim'] = 'Определяет главное измерение, чтобы использовать для изменения размера. Если размер исходного изображения не позволяет идеально измененить размер, этот параметр определяет, какие оси должны быть использованы в качестве жесткого значения. "авто" устанавливает ось автоматически на основе того, выше изображение или шире.';
$lang['assets_comment_unzip'] = 'Разархивировать zip файл';

/*
|--------------------------------------------------------------------------
| Site Variables
|--------------------------------------------------------------------------
*/
$lang['sitevariables_instructions'] = 'Здесь вы можете управлять переменными Вашего сайта.';
$lang['sitevariables_scope'] = 'Рамки/сфера';


/*
|--------------------------------------------------------------------------
| Users
|--------------------------------------------------------------------------
*/
$lang['users_instructions'] = 'Здесь вы можете управлять данными пользователей.';
$lang['permissions_heading'] = 'Разрешения';
$lang['form_label_language'] = 'Язык';
$lang['form_label_send_email'] = 'Отправить e-mail';
$lang['btn_send_email'] = 'Отправить e-mail';
$lang['new_user_email_subject'] = 'Ваш аккаут FUEL CMS был создан';
$lang['new_user_email'] = 'Ваш аккаут FUEL CMS был создан. Вы можете авторизоваться, используя следующую информацию:
Логин URL: %1s
Имя пользователя: %2s
Пароль: %3s';
$lang['new_user_created_notification'] = 'Информация о пользователе была успешно сохранена и было направлено уведомление на %1s.';
$lang['error_cannot_deactivate_yourself'] = 'Вы не можете отключить самого себя.';


/*
|--------------------------------------------------------------------------
| Permissions
|--------------------------------------------------------------------------
*/
$lang['permissions_instructions'] = 'Здесь вы можете управлять разрешениями для FUEL модулей и позже назначить их пользователям.';
$lang['form_label_other_perms'] = 'Создать связанный простой<br /> доступ к модулю';

/*
|--------------------------------------------------------------------------
| Manage Cache
|--------------------------------------------------------------------------
*/
$lang['cache_cleared'] = 'Кэш очищен!.';
$lang['cache_instructions'] = 'Вы собираетесь очистить кэш страницы.';
$lang['cache_no_clear'] = 'Нет, не очищать кэш';
$lang['cache_yes_clear'] = 'Да, очистить кэш';


/*
|--------------------------------------------------------------------------
| Settings
|--------------------------------------------------------------------------
*/
$lang['settings_none'] = 'Нет настроек для управления продвинутых модулей.';
$lang['settings_manage'] = 'Управление настройками для следующих продвинутых модулей:';
$lang['settings_problem'] = 'Возникла проблема с настройками для продвинутого модуля <strong>%1s</strong>. <br />проверьте здесь <strong>/fuel/modules/%1s/config/%1s.php</strong> настройте для обработки параметров.';


/*
|--------------------------------------------------------------------------
| Generate
|--------------------------------------------------------------------------
*/
$lang['error_not_cli_request'] = 'Это не запрос CLI.';
$lang['error_not_in_dev_mode'] = 'This will only run in dev mode.';
$lang['error_missing_generation_files'] = 'There are no generation files to create for %1s.';


/*
|--------------------------------------------------------------------------
| Table Actions
|--------------------------------------------------------------------------
*/
$lang['table_action_edit'] = 'РЕДАКТИРОВАТЬ';
$lang['table_action_delete'] = 'УДАЛИТЬ';
$lang['table_action_view'] = 'ПРОСМОТРЕТЬ';
$lang['click_to_toggle'] = 'нажмите для переключения';
$lang['table_action_login_as'] = 'Вошел как: ';


/*
|--------------------------------------------------------------------------
| Labels
|--------------------------------------------------------------------------
*/
$lang['label_show'] = 'Показать:';
$lang['label_language'] = 'Язык:';
$lang['label_restore_from_prev'] = 'Восстановлено предыдущую версию...';
$lang['label_select_another'] = 'Выберите другую...';
$lang['label_select_one'] = 'Выберите одну...';
$lang['label_belongs_to'] = 'Относится к';
$lang['label_select_a_language'] = 'Выберите язык...';


/*
|--------------------------------------------------------------------------
| Buttons
|--------------------------------------------------------------------------
*/
$lang['btn_list'] = 'Лист';
$lang['btn_tree'] = 'Дерево';
$lang['btn_create'] = 'Создать';
$lang['btn_delete_multiple'] = 'Удаление нескольких';
$lang['btn_rearrange'] = 'Порядок';
$lang['btn_search'] = 'Поиск';
$lang['btn_view'] = 'Вид';
$lang['btn_publish'] = 'Опубликовать';
$lang['btn_unpublish'] = 'Не опубликовано';
$lang['btn_activate'] = 'Активировать';
$lang['btn_deactivate'] = 'Деактивировать';
$lang['btn_delete'] = 'Удалить';
$lang['btn_duplicate'] = 'Дублировать';
$lang['btn_replace'] = 'Заменить';
$lang['btn_ok'] = 'OK';
$lang['btn_upload'] = 'Загрузить';
$lang['btn_download'] = 'Скачать';
$lang['btn_export_data'] = 'Экспорт данных';

$lang['btn_no'] = 'Нет';
$lang['btn_yes'] = 'Да';

$lang['btn_no_upload'] = 'Нет, не загружать';
$lang['btn_yes_upload'] = 'Да, загрузить';

$lang['btn_no_dont_delete'] = 'Нет, не удалять';
$lang['btn_yes_dont_delete'] = 'Да, удалить';


/*
|--------------------------------------------------------------------------
| Common Form Labels
|--------------------------------------------------------------------------
*/
$lang['form_label_name'] = 'Имя';
$lang['form_label_title'] = 'Титул';
$lang['form_label_label'] = 'Метка';
$lang['form_label_location'] = 'Расположение';
$lang['form_label_published'] = 'Опубликованно';
$lang['form_label_active'] = 'Активировано';
$lang['form_label_precedence'] = 'Порядок';
$lang['form_label_date_added'] = 'Дата добавления';
$lang['form_label_last_updated'] = 'Последнее обновление';
$lang['form_label_file'] = 'Файл';
$lang['form_label_value'] = 'Значение';
$lang['form_label_email'] = 'Email';
$lang['form_label_user_name'] = 'Имя пользователя';
$lang['form_label_first_name'] = 'Имя';
$lang['form_label_last_name'] = 'Фамилия';
$lang['form_label_super_admin'] = 'Super admin';
$lang['form_label_password'] = 'Пароль';
$lang['form_label_confirm_password'] = 'Подтвердите пароль';
$lang['form_label_new_password'] = 'Новый пароль';
$lang['form_label_description'] = 'Описание';
$lang['form_label_entry_date'] = 'Дата появления';
$lang['form_label_message'] = 'Сообщение';
$lang['form_label_image'] = 'Изображение';
$lang['form_label_upload_image'] = 'Загрузить изображение';
$lang['form_label_upload_images'] = 'Загрузить изображения';
$lang['form_label_content'] = 'Содержание';
$lang['form_label_excerpt'] = 'Выдержка';
$lang['form_label_permalink'] = 'Постоянная ссылка';
$lang['form_label_slug'] = 'Slug';
$lang['form_label_url'] = 'URL';
$lang['form_label_link'] = 'Ссылка';
$lang['form_label_pdf'] = 'PDF';

$lang['form_label_group_id'] = 'Группа';
$lang['form_label_or_select'] = 'ИЛИ выберите';

$lang['form_enum_option_yes'] = 'да';
$lang['form_enum_option_no'] = 'нет';

$lang['required_text'] = 'Обязательные для заполнения поля';


/*
|--------------------------------------------------------------------------
| Layouts
|--------------------------------------------------------------------------
*/
$lang['layout_field_main_copy'] = 'Это главный макет для вашего сайта.';
$lang['layout_field_page_title'] = 'Титул страницы';
$lang['layout_field_meta_description'] = 'Мета описание';
$lang['layout_field_meta_keywords'] = 'Мета ключевые слова';
$lang['layout_field_body'] = 'Тело';
$lang['layout_field_heading'] = 'Заголовок';
$lang['layout_field_body_description'] = 'Основное содержание страницы';
$lang['layout_field_body_class'] = 'Класс тела';
$lang['layout_field_redirect_to'] = 'Перенаправить на';

$lang['layout_field_301_redirect_copy'] = 'Этот макет будет делать 301 редирект на другую страницу.';
$lang['layout_field_alias_copy'] = 'Этот макет похож на 301 редиректа, но расположение на странице не меняется и <br />содержание этой страницы из указаного места используется для отображения страницы.';
$lang['layout_field_sitemap_xml_copy'] = 'This layout is used to generate a sitemap. For this page to appear, a sitemap.xml must not exist on the server.';
$lang['layout_field_robots_txt_copy'] = 'This layout is used to generate a robots.txt file. For this page to appear, a robots.txt must not exist on the server.';
$lang['layout_field_none_copy'] = 'This layout is the equivalent of having no layout assigned.';

$lang['layout_field_frequency'] = 'Частота';
$lang['layout_field_frequency_always'] = 'постоянно';
$lang['layout_field_frequency_hourly'] = 'ежечасно';
$lang['layout_field_frequency_daily'] = 'ежедневно';
$lang['layout_field_frequency_weekly'] = 'еженедельно';
$lang['layout_field_frequency_monthly'] = 'ежемесячно';
$lang['layout_field_frequency_yearly'] = 'ежегодно';
$lang['layout_field_frequency_never'] = 'никогда';


/*
|--------------------------------------------------------------------------
| Tooltips
|--------------------------------------------------------------------------
*/
$lang['tooltip_dbl_click_to_open'] = 'Дважды кликните, чтобы открыть';


/*
|--------------------------------------------------------------------------
| Pagination
|--------------------------------------------------------------------------
*/

$lang['pagination_prev_page'] = '&lt;';
$lang['pagination_next_page'] = '&gt;';
$lang['pagination_first_link'] = '&lsaquo; Первоя';
$lang['pagination_last_link'] = 'Последняя &rsaquo;';


/*
|--------------------------------------------------------------------------
| Actions
|--------------------------------------------------------------------------
*/
$lang['action_edit'] = 'Редактировать';
$lang['action_create'] = 'Создать';
$lang['action_delete'] = 'Удалить';
$lang['action_upload'] = 'Загрузить';
$lang['action_replace'] = 'Переместить';

/*
|--------------------------------------------------------------------------
| Migrations
|--------------------------------------------------------------------------
*/
$lang['database_migration_success'] = 'Успешная миграции базы данных до версии %1s';

//$lang['import'] = 'Import';
/*
|--------------------------------------------------------------------------
| Installation
|--------------------------------------------------------------------------
*/
$lang['install_cli_intro'] = "Установщик FUEL CMS упрощает установку CMS с общими настройками. Установщик будет делать следующее:\n";
$lang['install_cli_intro'] .= "1) Автоматически сгенерирует ключ шифрования в fuel/application/config/config.php.\n";
$lang['install_cli_intro'] .= "2) Включит админку CMS, изменив значение 'admin_enabled' в конфиге fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "3) Изменит значение 'fuel_mode' в конфиге fuel/application/config/MY_fuel.php для разрешения страниц, созданных в CMS.\n";
$lang['install_cli_intro'] .= "4) Изменит значение 'site_name' в fuel/application/config/MY_fuel.php.\n";
$lang['install_cli_intro'] .= "5) Установит окружения в fuel/application/config/environments.php.\n";
$lang['install_cli_intro'] .= "6) Сделает папки fuel/application/logs, fuel/application/cache и assets/images доступными для записи.\n";
$lang['install_cli_intro'] .= "7) Обновит файл fuel/application/config/database.php с введенным значениям.\n";
$lang['install_cli_intro'] .= "8) Создаст базы данных и установит fuel_schema.sql файл, используя локальное подключение MySQL.\n";
$lang['install_site_name'] = 'Как бы Вы хотели назвать сайт для текущей установки FUEL CMS?';
$lang['install_environments_testing'] = 'Каковы названия доменнов для вашего ТЕСТОВОГО окружения (например: myserver.com *.mystagingserver.com)?';
$lang['install_environments_production'] = 'Каковы названия доменнов для вашего РАБОЧЕГО окружения (например: myserver.com *.myserver.com)?';
$lang['install_permissions'] = 'Какие права вы хотите задать для своих записываемых папок (например: 0755, 0775, 0777)?';
$lang['install_db_name'] = 'Как назвать Вашу базу данных?';
$lang['install_db_user'] = 'Какое имя пользователя для базы данных?';
$lang['install_db_pwd'] = 'Какой пароль для этого пользователя?';
$lang['install_success'] = 'Установка FUEL CMS завершена!';
$lang['install_success_with_errors'] = "Установка FUEL CMS завершена, но произошли такие ОШИБКИ:\n%1s";
$lang['install_further_info'] = "Чтобы войти в админку FUEL CMS, перейдите в папку с установкой в Вашем браузере и введите '/fuel' (например: localhost/fuel) в адресной строке.\n";
$lang['install_further_info'] .= "Для дополнительных опций конфигурации, перейдите https://docs.getfuelcms.com/installation/configuration.\n";
$lang['install_further_info'] .= "По вопросам или сообщения об ошибке, обращайтесь https://github.com/daylightstudio/FUEL-CMS/issues или посетите нас на https://forums.getfuelcms.com.\n";

// now include the Javascript specific ones since there is some crossover
include('fuel_js_lang.php');

/* End of file fuel_lang.php */
/* Location: ./modules/fuel/language/english/fuel_lang.php */
