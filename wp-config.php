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
define('DB_NAME', "practsdal");
/** Имя пользователя MySQL */
define('DB_USER', "root");
/** Пароль к базе данных MySQL */
define('DB_PASSWORD', "root");
/** Имя сервера MySQL */
define('DB_HOST', "localhost");
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
define('AUTH_KEY',         'NQ>5(cmT][DmT$[Jii]Dju&<#X2k-U_P{W!e*1H}&ac+Ck[c[}+fnCeI2c@*{XWp');
define('SECURE_AUTH_KEY',  ')+aCbMj$C96DG?1PrM8rGzY:bc+/B2B4rWJ{T.,zOn5xAU(_]&D*LHQTPt#?jU{A');
define('LOGGED_IN_KEY',    'Fn3aGG zi((@qhKS-fcO`[RO!Hq^]hdyQY T0qR62ab@*2@axrO=J$V(;0gkyY4e');
define('NONCE_KEY',        'fu>Xo*zW@*|ohY{Hn-,wCz[`jd1-%fZO4.9I1t2pCOJ%+BK#&6PEg31I$,jhlbHS');
define('AUTH_SALT',        'qfuI6lPF2o1KQW|Gsm4rZ~Dc;`Xh^F6-=TbNJ%8xgo,i*SkBdGZD[Am8NpzuMeTT');
define('SECURE_AUTH_SALT', '=d]dti4<D<Zf#m9HAKd}|SW_9P@8T<exy(}-LV&?vAh8@AB(B]Gi#8wS^{:qZa J');
define('LOGGED_IN_SALT',   'NUN;W$D]b2aECn>xqsl5Z3gh{YOH3n)>e:G6&@06D>hX4nAx;l(c#qt!5ucm?KQ#');
define('NONCE_SALT',       '3 Wh-Ri. JEXd^ib8i:6(I?i~)mxuS@7iehuk3^g*G@@J]%z4]Q :,`u@(|Dnc;*');
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
define( 'WP_DEBUG', false );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );



define('WP_MAIL_FROM', 'infol@praktikusdal.ru');
define('WP_MAIL_FROM_NAME', 'ПрактикуСдал');

/* Это всё, дальше не редактируем. Успехов! */
/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
