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
define('DB_NAME', 'nemironl_wp1');
/** Имя пользователя MySQL */
define('DB_USER', 'nemironl_wp1');
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Bvl1kGtrd');
/** Имя сервера MySQL */
define('DB_HOST', 'localhost');
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
define('AUTH_KEY',         '^+%QzsOQPx,p5=rfY()z+KhC%So;3]SV/t6{BJ%3Si@ld7{E>}.Z0zCU<24)~HC`');
define('SECURE_AUTH_KEY',  '5vY~H.HGz{RsDKS~n(dGLCU+j{GT2tZ+Kxls$CEDCyN(y,;C7:+~2?3Dvt|!?Rxh');
define('LOGGED_IN_KEY',    '~u(S*LG~Gc&0kjqi#NQ>v(3ymZ`83b3mxHCIW!hTTD@K,(|qqcr;.f^HNgys qcy');
define('NONCE_KEY',        '%d4ISu?t`rgu8${x>]OlCdh_Is/I#7EBbNxE]:WK7Y{?Bp3q`W5HU4CXXd! MpHt');
define('AUTH_SALT',        'T{uSi[|B>,Vz=7g@y/ZjNC:~e])N%M$M`CK-#pxkWX3M B=YH%a,J.}rF9LMs*s@');
define('SECURE_AUTH_SALT', 'zO`b^T7dC 3:]RkE0wcbIfrIE9{#H=&cX&$!5{m7zLd4?bYII|=+p6<*sFZU!xE.');
define('LOGGED_IN_SALT',   'N1JFj]Bw!wG!@Z5PqnA1!P}cqcfg-Dbgg8!`$2}eIX p~*?/S7y&`|P,Nrs$XWWK');
define('NONCE_SALT',       '!ZHXn4tZq 9/E6R$MgHLk?0a#j/GTXu B&p@OI<Q|T^Q=J=_Lp{fE@*RfnXLu Co');
/**#@-*/
/**
* Префикс таблиц в базе данных WordPress.
*
* Можно установить несколько сайтов в одну базу данных, если использовать
* разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
*/
$table_prefix  = 'se34fh_';
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