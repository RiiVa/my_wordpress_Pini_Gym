<?php
/**
* Основные параметры WordPress.
*
* Скрипт для создания wp-config.php использует этот файл в процессе
* установки. Необязательно использовать веб-интерфейс, можно
* скопировать файл в "wp-config.php" и заполнить значения вручную.
*
* Этот файл содержит следующие параметры:
*
* * Настройки MySQL
* * Секретные ключи
* * Префикс таблиц базы данных
* * ABSPATH
*
* @link https://codex.wordpress.org/Editing_wp-config.php
*
* @package WordPress
*/
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');
/** Имя пользователя MySQL */
define('DB_USER', 'root');
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');
/** Имя сервера MySQL */
define('DB_HOST', '');
/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');
/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
/**#@+
* Уникальные ключи и соли для аутентификации.
*
* Смените значение каждой константы на уникальную фразу.
* Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
* Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
*
* @since 2.6.0
*/
define('AUTH_KEY', '57dRKpmK7YRWpoyRGPffuc+fKuetiPouoDil05FORr28S4DHIq6b/dSNiYzALTvP');
define('SECURE_AUTH_KEY', 'vY/cDrJSy44zgVoo093XNwuj+bEFbtXsK4VzZFl0t6DHep2jrETZrL/ITnDuZIfM');
define('LOGGED_IN_KEY', 'n9AYaDf0eO4yK3TkMjkUT4wYetlt5XqodK3Hmv1eItK6kxkBNhK+x2t8+hN+hiwG');
define('NONCE_KEY', 'dHTgqUZ0OPTP1mtrALj+cyVtKijs4SiIOQRYd55ErSr5ivSR9LzFrtOJP5jOjwUB');
define('AUTH_SALT', '1NO9/Pw9DhdnuiwOgQ1GLQNOt1azzrF03w6zEB9RdwPgRoEduC1OxeqNk7Lo42ds');
define('SECURE_AUTH_SALT', 'Dl1E18cWliTnTMjktQY5Eqb5wL0y3Hu1mC2MsagdiuX04VpSsufNgv5jlKXRqHWE');
define('LOGGED_IN_SALT', '2Pay8KzoY9STChG8GH7X4vkpHuoY47T2TzzMvCfysoCPutZdNb4tMVs+cIzp8UAw');
define('NONCE_SALT', 'DvSPt0E9qDJn76QoA1XZPx32ZccNApL8d8J5/0pE6rOTyor480NHX9OcpwD/58uG');
/**#@-*/
/**
* Префикс таблиц в базе данных WordPress.
*
* Можно установить несколько сайтов в одну базу данных, если использовать
* разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
*/
$table_prefix = 'se34fh_';
/**
* Для разработчиков: Режим отладки WordPress.
*
* Измените это значение на true, чтобы включить отображение уведомлений при разработке.
* Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
* в своём рабочем окружении.
*
* Информацию о других отладочных константах можно найти в Кодексе.
*
* @link https://codex.wordpress.org/Debugging_in_WordPress
*/
define('WP_DEBUG', false);
/* Это всё, дальше не редактируем. Успехов! */
/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');
/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');