<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0040810-yourls');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0040810');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'ky73gz');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql102.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w`7V6vSjRnL^e/)8eLXG|`st7BrxGJwld$VpO=Kp@ts|4eK#BAfTG3P#P7r[^GB8');
define('SECURE_AUTH_KEY',  'X?6z+}_[p_GIhrEXILXdL4cIMfhw_i5:3Gh+gFcT(zS/ZUJ!}+.6gnu9=Rl4F][V');
define('LOGGED_IN_KEY',    'B{)h&v.btEX%j/iWt8mVx?U@xd*.e0)z9enu8mz*:A ]8R]5MOi!{B!zkh_xDXm)');
define('NONCE_KEY',        'rk5wD?PjBSN/F?4~.KX|q+jz<.M[vYTH?D4m$F_M|%:)I]#uN,?=FKntuF/:Y)Ua');
define('AUTH_SALT',        '^BINY;O^~,(l|W]<bT2c3N=gMSraX n&2_Wi[Fkge<O#pdYBV`w9*Sl9Qg>EyJ0_');
define('SECURE_AUTH_SALT', '_J6)6@jA.O5qv0vLmkA&j/cPn09Z2Y)KOs(enR!8u&6%_h]ZwEY/se8-~;`UI<P4');
define('LOGGED_IN_SALT',   '*pM9Rgzs oG{{og!VVwS,%f?>z!Ib!&ME}{O84F$o|PHH@Oskd4:Rl23qDR4ZmSA');
define('NONCE_SALT',       'I4Rb Wkj`6#opbgQ.9V;7(R3~q~QM$C]m@gTEo>qFi.6ypxxe+A;Dc^<4wSIuHSI');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wpjob_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
