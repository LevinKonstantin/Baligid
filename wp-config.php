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
define( 'DB_NAME', 'baligid' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'baligid' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ALj489ju@8ff28h' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'KrsRopf[v.jw-M/9_$fR^DXV&[,zb:=o,*/uPq@79T@6v}Ud6w9}EoPrW<0m5K8M' );
define( 'SECURE_AUTH_KEY',  'bO[ZYI@fh)H=TLbuqIFr^<.{/c8ufg>k5$HgLAO{|/==Z+lJNH<|#B :VFH_W#pM' );
define( 'LOGGED_IN_KEY',    'iKMdm_ua4}2@B/l([rJ9QC9NxKg0<,Z[Ow2zkWQJ;tXErBhgaDS^vdf0?pa[A|xn' );
define( 'NONCE_KEY',        'b6K?_5@>DV(bMaC!SElb@HZMB7%*ve!ZRIn@6D*u5nY>&rD@~$GGkt-|>tyVe>p!' );
define( 'AUTH_SALT',        'z+mpW[r%Hb6R3|o+X>*5rF_%EgS]KUHl*O8WT5Mf5y#`Wty[U7()@qgSX6w5=ea`' );
define( 'SECURE_AUTH_SALT', 'D:uP2Jb6jML1V, r=up`i9T{%bIIXx&SPSw6Q}d!h1}0;(|B6xJYG#07NiExC4xf' );
define( 'LOGGED_IN_SALT',   '~4UWvP>,@r$^xA.R&:sdvXe>r8kP8aM!rqdwmM%D21Ik]Vh:4ui.=F(Zw_VXoxms' );
define( 'NONCE_SALT',       '!oFMw?2j.U;Qd&o I569PH)&Q`$J0X]c6H9n41Ndk4j79&)<hZ9eCTE|3dpPB:W$' );

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
