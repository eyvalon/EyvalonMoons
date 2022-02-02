<?php
// Перевод на русский язык сделал Yaro2709;
// Все права защищены 2020 г.;
// Company 1367.

//НАВИГАЦИЯ:
//{IDs_0001} Генеральные переменные
//{IDs_0002} Вступление
//{IDs_0003} Обновление
//{IDs_0004} Тест на минимальные требования
//{IDs_0005} Подключение к базе данных
//{IDs_0006} Итоги подключения к базе данных
//{IDs_0007} Создание базы данных
//{IDs_0008} Создание учетной записи 
//{IDs_0009} Завершение установки
//{IDs_0010} Итоги установки
//{IDs_0011} Сообщения
//{IDs_0012} Карусели

//{IDs_0001} Генеральные переменные
$LNG['game_name']                                    = 'New-Star';
$LNG['nav_lang']                                     = 'Язык';
$LNG['footer_up']                                    = 'Наверх';
$LNG['back']                                         = 'Назад';
$LNG['continue']                                     = 'Дальше';
$LNG['login']                                        = 'Войти в панель администратора';
$LNG['title_install']                                = 'Установщик';
$LNG['previous']                                     = '';
$LNG['next']                                         = '';
//{IDs_0002} Вступление
$LNG['intro_install']                                = 'Установить';
$LNG['intro_welcome']                                = 'Добро пожаловать в '.$LNG['game_name'].'!';
$LNG['intro_text']                                   = ''.$LNG['game_name'].' - один из лучших движкок веб браузерной стратегии, который основывается на 2Moons v1.8. '.$LNG['game_name'].' является самым стабильным и развивающимся движком на данный момент. Мы надеемся, что '.$LNG['game_name'].' будет лучше, чем Вы ожидаете. Если у Вас будут вопросы, консультируйтесь с нами. '.$LNG['game_name'].' является проектом с открытым кодом и распространяется под лицензией GNU GPL v3. Перед установкой будет запущен небольшой тест на соответствие минимальным требованиям.';
//{IDs_0003} Обновление
$LNG['upgrade_title']                                = 'Обновление';
$LNG['upgrade_header']                               = 'Мастер обновления базы данных.';
$LNG['upgrade_text']                                 = 'Вы уже установили '.$LNG['game_name'].' и просто хотите её обновить? Здесь вы можете обновить старую базу данных с помощью нескольких кликов!';
$LNG['upgrade_success']                              = 'База данных успешно обновлена до ревизии %s.';
$LNG['upgrade_nothingtodo']                          = 'Никаких действий не требуется, база данных имеет состояние ревизии %s.';
$LNG['upgrade_available']                            = 'Обновление доступно. База данных может быть обновлена с текущей ревизии %s до ревизии %s.';
$LNG['upgrade_notavailable']                         = 'Используется самая последняя ревизия %s для базы данных.';
//{IDs_0004} Тест на минимальные требования
$LNG['req_head']                                     = 'Необходимые модули';
$LNG['req_text']                                     = 'Перед продолжением установки '.$LNG['game_name'].' выполнит проверку файлов конфигурации Вашего сервера на соответствие необходимым требованиям использования '.$LNG['game_name'].'. Пожалуйста, прочитайте внимательно результаты и не продолжайте установку, пока проверка не будет пройдена по всем пунктам. Если Вы хотите использовать любую из функций перечисленных ниже модулей, Вы должны убедиться, что проверка пройдена.';
$LNG['req_requirements']                             = 'Требование';
$LNG['req_status']                                   = 'Статус';
$LNG['reg_yes']                                      = 'Да';
$LNG['reg_no']                                       = 'Нет';
$LNG['reg_writable']                                 = '(CHMOD 777)';
$LNG['reg_not_writable']                             = 'Не установлены права на запись';
$LNG['reg_file']                                     = 'Файл «%s» доступен для записи?';
$LNG['reg_dir']                                      = 'Папка «%s» доступна для записи?';
$LNG['req_php_need']                                 = 'Установленная версия «PHP»';
$LNG['req_php_need_desc']                            = 'PHP является серверным языком, на котором написана игра. '.$LNG['game_name'].' работает, используя PHP v5.6-8.0';
$LNG['reg_gd_need']                                  = 'Установленная версия графической библиотеки «gdlib»';
$LNG['reg_gd_desc']                                  = 'Графическая библиотека «gdlib» отвечает за динамическую генерацию изображений. Без этой библиотеки не будет возможна работа некоторых функциональных возможностей программного обеспечения.';
$LNG['reg_pdo_active']                               = 'Поддержка расширения «PDO»';
$LNG['reg_pdo_desc']                                 = 'Вы должны предоставить поддержку PDO в PHP.';
$LNG['reg_json_need']                                = 'Расширение «JSON» доступно?';
$LNG['reg_iniset_need']                              = 'Функция PHP «ini_set» активна?';
$LNG['reg_global_need']                              = 'Параметр «register_globals» отключён?';
$LNG['reg_global_desc']                              = ''.$LNG['game_name'].' будет корректно работать, если этот параметр включён. Тем не менее, рекомендуется по соображениям безопасности, отключить register_globals в настройках PHP.';
$LNG['req_ftp_head']                                 = 'FTP';
$LNG['req_ftp_desc']                                 = 'Пожалуйста, введите Ваши данные FTP, чтобы установщик автоматически исправил ошибки. Кроме того, можно также вручную назначить разрешения на запись.';
$LNG['req_ftp_host']                                 = 'FTP хост';
$LNG['req_ftp_username']                             = 'FTP логин';
$LNG['req_ftp_password']                             = 'FTP пароль';
$LNG['req_ftp_dir']                                  = 'FTP путь к '.$LNG['game_name'].'';
$LNG['req_ftp_send']                                 = 'Установить права CHMOD 777';
$LNG['req_ftp_error_data']                           = 'С предоставленными учетными данными не удалось подключиться к серверу FTP.';
$LNG['req_ftp_error_dir']                            = 'Папка указана неверно.';
//{IDs_0005} Подключение к базе данных
$LNG['step1_head']                                   = 'Настройка доступа к базе данных';
$LNG['step1_text']                                   = ''.$LNG['game_name'].' может быть установлена на Вашем сервере, но Вы должны указать настройки доступа к базе данных. Если Вы не знаете настройки доступа для подключения к базе данных, узнайте их у Вашего хостинг-провайдера или связитесь с технической поддержкой '.$LNG['game_name'].' для консультации. При вводе данных, пожалуйста, проверьте их внимательно, прежде чем продолжить.';
$LNG['step1_mysql_server']                           = 'Имя сервера базы данных';
$LNG['step1_mysql_port']                             = 'Порт сервера базы данных';
$LNG['step1_mysql_dbuser']                           = 'Логин пользователя базы данных';
$LNG['step1_mysql_dbpass']                           = 'Пароль пользователя базы данных';
$LNG['step1_mysql_dbname']                           = 'Название базы данных';
$LNG['step1_mysql_prefix']                           = 'Префикс таблиц';
//{IDs_0006} Итоги подключения к базе данных
$LNG['step2_prefix_invalid']                         = 'Префикс базы данных должен содержать только алфавитно-цифровые символы и знак подчеркивания.';
$LNG['step2_db_no_dbname']                           = 'Имя базы данных не указано.';
$LNG['step2_db_too_long']                            = 'Указанный префикс таблиц слишком длинный. Максимальная длина составляет 36 символов.';
$LNG['step2_db_con_fail']                            = 'Нет соединения с базой данных. Подробная информация указана ниже.';
$LNG['step2_config_exists']                          = 'config.php уже существует.';
$LNG['step2_conf_op_fail']                           = 'Для config.php не были установлены права на запись.';
$LNG['step2_db_done']                                = 'Подключение к базе данных установлено.';
//{IDs_0007} Создание базы данных
$LNG['step3_head']                                   = 'Создание таблиц базы данных';
$LNG['step3_text']                                   = 'Таблицы базы данных созданы и заполнены. Переходите к следующему шагу, чтобы завершить установку '.$LNG['game_name'].'.';
$LNG['step3_db_error']                               = 'Не удалось создать следующие таблицы в базе данных:';
//{IDs_0008} Создание учетной записи 
$LNG['step4_head']                                   = 'Создание учётной записи администратора';
$LNG['step4_text']                                   = 'Для создания учетной записи администратора введите логин, пароль и адрес электронной почты.';
$LNG['step4_admin_name']                             = 'Логин:';
$LNG['step4_admin_name_desc']                        = 'От 3 до 20 символов.';
$LNG['step4_admin_pass']                             = 'Пароль:';
$LNG['step4_admin_pass_desc']                        = 'От 6 до 30 символов.';
$LNG['step4_admin_mail']                             = 'Адрес электронной почты:';
//{IDs_0009} Завершение установки
$LNG['step6_head']                                   = 'Поздравляем! Вы установили '.$LNG['game_name'].' :)';
$LNG['step6_text']                                   = 'Если Вы нажмёте на кнопку ниже, Вы будете перенаправлены в панель администратора. Потратьте некоторое время на ознакомление с доступными настройками. Пожалуйста, удалите файл «includes/ENABLE_INSTALL_TOOL» или переименуйте его, прежде чем использовать игру. Пока этот файл существует, Ваша игра подвергается потенциальному риску взлома!';
$LNG['step8_need_fields']                            = 'Вы должны заполнить все поля.';
//{IDs_0010} Итоги установки
$LNG['sql_close_reason']                             = 'Сервер в данный момент недоступен';
$LNG['sql_welcome']                                  = 'Добро пожаловать в '.$LNG['game_name'].' v';
//{IDs_0011} Сообщения
$LNG['locked_upgrade']                               = 'Требуется обновление базы данных! Чтобы активировать процесс обновления, необходимо создать файл с названием «ENABLE_INSTALL_TOOL» в папке «include». Имя файла должно быть в верхнем регистре. Сам файл может быть пустым.';
$LNG['locked_install']                               = 'Установщик заблокирован! В папке «includes» создайте файл с названием «ENABLE_INSTALL_TOOL». Имя файла должно быть в верхнем регистре. Сам файл должен быть без расширения и может быть пустым. В целях безопасности настоятельно рекомендуется переименовать файл или удалить его, когда установка будет завершена. Для надёжности можно удалить всю папку «install».';
//{IDs_0012} Карусели
$LNG['carousel_project_head']                        = 'Проект.';
$LNG['carousel_project_text']                        = 'Игра основывается на 2Moons v1.8. Мы усовершенствовали его, переписав более 30%!';
$LNG['carousel_mods_head']                           = 'Модификации.';
$LNG['carousel_mods_text']                           = 'Мы разработали более 15 новых модификаций и переписали более 10!';
$LNG['carousel_design_head']                         = 'Адаптивный дизайн.';
$LNG['carousel_design_text']                         = 'Мы используем всем известный bootstrap.';
$LNG['carousel_support_head']                        = 'Активная поддержка.';
$LNG['carousel_support_text']                        = 'Поддержка основывается на форуме 2Moons и на githab проекта.';
$LNG['carousel_version_info_head']                   = 'Что-то новое?';
$LNG['carousel_version_info_text']                   = 'Конечно, да! Но чтобы это узнать, нужно установить игру :)';