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
define( 'DB_NAME', 'PW' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'PW' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'PW' );

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
define( 'AUTH_KEY',         'Xyy3UZjwXGK s]R29zkkt4m/nXuNp`~oDt}Q)*, C!:D_{W@lH$MdQ.lr:btpQeF' );
define( 'SECURE_AUTH_KEY',  '%;+wG&B](/pGZR3j,dNRk`x%hEeSxsIt:RbI!gcO& wR5Ucd4]/`c`u)q[>dAzCW' );
define( 'LOGGED_IN_KEY',    'WI3Z@2zn)~VwTH]!nU^gA-$)/TZ,Z4rnUrcL^v?0>eFW2V>M{<#ozQBqC0i>aTqT' );
define( 'NONCE_KEY',        'gFUT]5^Jn][&^)/eBI{|5&{EtK|*F5LYwMp*;J?z]DCB:F`~,Tq!4$QG1|3Sp*99' );
define( 'AUTH_SALT',        '%(ok[(FvR*$F[a}lT/A+GOB?cdZ)=X61RG6.W>lf4:7A&|~,e92c#cy+JE7ct7MA' );
define( 'SECURE_AUTH_SALT', '_9uqj0tYHW-wkM+_=;nqC|_L;RX0+ U:q^u~1F4W<>LX5_0;<+{MPA10ljVd2p&-' );
define( 'LOGGED_IN_SALT',   '@p5);Y([=FNP1N}k[8`H.:.Rl(DN;.;2`r>~?terD0CqG`$EeU#^)G3NP=j4%]YY' );
define( 'NONCE_SALT',       'HrmzG#2YE})UUh3mxYddQwzL<NqBv:MD[rjQ*0?zpCZi;?.iKBz9q;YbyL6~z35p' );

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
