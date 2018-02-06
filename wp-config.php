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
define('DB_NAME', 'wordpressRadioShop');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'E7)Pvbf2_DFOt#nn&O(0d,ljX2EnQU2r@#gM/ZwVHK{c;t#8f:]}m~BRWE^?$Y3j');
define('SECURE_AUTH_KEY',  '9V|?m&KB.;AtXQ<n9!!>oc:QSU`{ge Uzf=>t*OG~NJM)/7~/l.PVIc[`_~@gm^5');
define('LOGGED_IN_KEY',    'ox70-Xp:y=F=,VN^yd3ZtKOW6GgP4dhm$f|&{%{[(|1Pjj:bIU):my-o.s9u2e#q');
define('NONCE_KEY',        '<uiVvOvhv8.GUEh$O3`ddf2?TR.Q1)rhN46 bDW#.~F|P-d*qe]66%!]0Io&u.Ho');
define('AUTH_SALT',        'uUOIqA%IP0aR;ejHy%TJTP~ri>i9,&*^PJK.fAW0y+nXR3,T2P?c{yg7^xqO9@l4');
define('SECURE_AUTH_SALT', 'XMWFH1kLTV<yD-5G+OJ*WTns`}C@d(wlYI6h[,}<vnFzn1^Zyzv(!v3QW/^A?8kN');
define('LOGGED_IN_SALT',   'U3ZZ5,LGR.iE hEi1T<~Vv0-&<J*p:%BD_Ssg:Hyxp|:nj]7E_J)1T|I,[U-l1t$');
define('NONCE_SALT',       '~7#U`2E!{4R$ULPf-l~PI?2MK-o!EN~w[4Yc2DeBAXw(v|/YXqrn^`Y1`0z$6~lg');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
