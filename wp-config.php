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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'practsdal' );
/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );
/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );
/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'rF@8T; d}J}`cZpdw0wfN3NfH%_b6CqV]DuKiz)Pw)#NeK{c>]Y&:$|C^#P>&a/e' );
define( 'SECURE_AUTH_KEY',  '7.s0z}q8N|Pn/zGfKyN1<:+;}Sx?e_FM9bi&KAs&wl9|WqESlwQng;xX+LkZH:uN' );
define( 'LOGGED_IN_KEY',    '/;bHQ1$ho#~JG0k!k!-,%N>k]VI5wk#L!1QX/;t5[Bm68*`!<vX|!6y%n3]1~tAw' );
define( 'NONCE_KEY',        '!BD5E>9&D|@p#Gp@%Zeg-AsZ.34C5N<Q)gB;}~NN`;Q]u~iQ{FwD63qrus!jiyS[' );
define( 'AUTH_SALT',        'I4u5}@q+><i_OI?LjK[<sbIA*.A8R>Q!o;:4o)_O1.{&OuqUF_J~(`@Cus?8orKz' );
define( 'SECURE_AUTH_SALT', ' _~cbj_OV1x@r%#5OhS/EeYJ,ap,d=H.QnBOO^/Mml{`iF_fbMimz)sQIwJIbZb*' );
define( 'LOGGED_IN_SALT',   'nD2qPe`}fpyn_m$[W3u1$51z;r$ZZ!vs4dUX_u B0r/Pbc~wq3lZ/&~JV=*^UB-w' );
define( 'NONCE_SALT',       '|^4b4wHBs8,8^Jm0DsYlum61^WX~x4;2+o1c.iC}V1r:J@jT-Td>= T059n#g68P' );
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