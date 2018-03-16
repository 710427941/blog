<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'esstrong_com');

/** MySQL数据库用户名 */
define('DB_USER', 'esstrong_com');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'cWyawA6aMpZEQnWc');

/** MySQL主机 */
define('DB_HOST', '118.24.3.56');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd{[%vW!{~i}WXW],+*)/k+($7o.jkG5RK)UH^,&zRe8TLW887GTfQAYkI@+y+XY[');
define('SECURE_AUTH_KEY',  'P|s.>b8S!BOU6ieXTO`VDxbb[~ZyDF(IQ#6?UF>*dIzk<[u7qk0/rP8g=3(`Eet)');
define('LOGGED_IN_KEY',    '!SsTftK~u~Z@/Qwm|ZqF:{XU)ohb$upPSZPZ`mep%g*@cR?ltP{fS1^/Lv:0xi?7');
define('NONCE_KEY',        '9:znqQVBxMu _BMt0s=Z<o|&c{B}Q*WBB24Yu&QyzMX6!q5N}]KO|}D}a}7UQ|1X');
define('AUTH_SALT',        'B4zAv]6r~eov^Me%F<<YnYs@IPK8?YYQo%%)fXu`5F%<R/aA#W[dsXJnt0([~c:=');
define('SECURE_AUTH_SALT', 'D7&boyayr2M`o9%a6Qpw@9#T@:e>@KA5Qne+{dDVq.<9vSZ+M8Rn|~jkhp4]?:O#');
define('LOGGED_IN_SALT',   '6@]a{9U6TYO:N3AW%h&tP{pW5vdF%DSs$,..~m}3NP{S{GP=e;JKW2R5p=e&}y(g');
define('NONCE_SALT',       'i((R.*|36.tr<b]qv2%{F,w|V`r0(XTl|)A:th[Unb_j].IJ(Jv0fL2zYU,De2.8');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'bg_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);


define('WP_ALLOW_REPAIR', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
