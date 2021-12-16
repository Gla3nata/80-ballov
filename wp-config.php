<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '80-ballov' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Lp.+@YLVKpMs75d,A|V=T:<gfA5/SzOU?JYu:C_ }q6LvP4/)}jQg~U;V_A|kKA;' );
define( 'SECURE_AUTH_KEY',  '#Sds}*!@1XbTZk_2*`pvU[wf:<r)Xb.(q^nR^T`;I0?^/bAC2Z,DUF%{63!_)b#%' );
define( 'LOGGED_IN_KEY',    '1N%Vfv.kbQfN};Q>#T5XG|)JI1zBY-I$]VW<#Pee:JhhToDir7+jRx#eNY[xhJQ-' );
define( 'NONCE_KEY',        '>H4V$tCGaP<gr#Xj<x.D{6|sc5^in<1^bg<w26p?YZN2s5Hr/ZNr40IqLsF4RtRd' );
define( 'AUTH_SALT',        'xGN+TG==hlUL>=!G5@:t 4;b9Jr!=!Fi{_7[d>@>f.A`-Dw##-a%Rl;Ef={VVFNc' );
define( 'SECURE_AUTH_SALT', 'Q9_G^y*4I/lkN>q?xno6q}{&l_d.*tX|MW`ke~A/w.n=NldS^a#k1KiW!o2?_u;4' );
define( 'LOGGED_IN_SALT',   '~3oNHt}ai# 7C2L[YmUHpB]Jy0=pasbLrnbnRO&q_!k9Ra:R3[QH/hK4b*]q:4Kg' );
define( 'NONCE_SALT',       'z(P6VN/1!z$.yxTMyV&%yK5JXO[Y6qK!D+plrN)t{yAW!$7*0_|:7|R@QA|2]D;2' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
