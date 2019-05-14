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
define( 'DB_NAME', 'test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'test' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'db' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'YPL-duUEcxpkYDm#T# Zi^KX->A,~=S~:#`M_}VFBQ}yx 0];?Pyx:]ti=,3.E{P' );
define( 'SECURE_AUTH_KEY',  '+gA$6DLAkv-gdz,Yb?543S3bC$gkjp4j9p+FhHo$+#HXHs(@V ?kU@[^r+aX8o6l' );
define( 'LOGGED_IN_KEY',    'f&-P{J%=GlNq_ervy2j!Awg>35Utm2{.6Y}ayB~XezH>4Rzaqzm;#u|H8{hQRCo*' );
define( 'NONCE_KEY',        '@C)+QzTqVIj}*N;,zC3BwT<QwdQ65TQwwO3r1$Z`{.4kBR0)v V|h_t~bV))mO&T' );
define( 'AUTH_SALT',        'ai[XycvSZ*y[wS;Yr<!RB-K#4-ghP<eWHir2OxXr(,_7+!<ZCLpI-N`/WF%?!L|Y' );
define( 'SECURE_AUTH_SALT', 't:xm@eaiT]X3ID*l /k0o4K:=R}xU7N/1gy0|K4)a[+)n0|eS>1KcB;QaN_{69eB' );
define( 'LOGGED_IN_SALT',   'f_aQ{9yu]9?K[vsTqE2`s+*D/Xvowd2(&XU<w!DI{qE|Ch9XR*d7+OWd5{^?-Gft' );
define( 'NONCE_SALT',       'u{?&g</5Xg]M.r(GD:[ou,=N?Dmk*NF{v~}jr>Ew(l58]@].zq?RW1LJZ;7[, vb' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
