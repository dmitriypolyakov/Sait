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
define('DB_NAME', 'sait');

/** Имя пользователя MySQL */
define('DB_USER', 'admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '12345678');

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
define('AUTH_KEY',         'MrTd&uk:q)mh!j1IqpyV=FcA0ict~m?y (AM9l2@AaX-ZfaaFCRU0H6SM-|z_/<6');
define('SECURE_AUTH_KEY',  'd9}1pcAtDmoG o7r!K?.AMEL>(DRbtH0tH5Cyb0%[!4js2+eB6FBQ$;{gd(zud$J');
define('LOGGED_IN_KEY',    'kw|.pj/EyDb&WD`Zdy?9e|@5`Q)/*48Ha#=i&5El_ .&8D!6MO8(:?NUj(B;-*9A');
define('NONCE_KEY',        'B5f&Sxm)8->t!#EJ/otk3PhXtB{bZ7~ dJ%oNri3^pFi0u8_$G)u^jCMzd=T^@fl');
define('AUTH_SALT',        'Vd3hQ4jC6wH$FNX=)ER0Wu*RjE|C;eiJgpig,$Lbz]F<-.-r:Ixp*96x5x35Ory<');
define('SECURE_AUTH_SALT', 'Z/?UizAzm7[;DSGl/IP37Kn)=4ajkrGuA8_V1jZRC?d5(ISs`ZcZ8o&I]oX9Xq=^');
define('LOGGED_IN_SALT',   'U$A1l!fA%G@RgE;+@2k{oDp!)Qg24|4wT$&|TZ60FMXH&7)@DH;NZwX.~Jm|B*~5');
define('NONCE_SALT',       'Y)<TF[]x>uteM6R)C?dOe]JYp[D{N6>]D}c_svqSZ{8o4:U6qI(i1N*f`Afp1Me|');

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
