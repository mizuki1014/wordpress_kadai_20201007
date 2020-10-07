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
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
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
define( 'DB_NAME', 'wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'HeMIYf[gkf(r`A9sY*5P0Q nlwW,7!G#IpgKl;#T$D94n#k4>@dj^qjrM9b-DQ?U' );
define( 'SECURE_AUTH_KEY',  'lPV0G`3IcpTGk$T=edx<;b>g9||8yGOWm~Iylh= 3._Z0X>sAh3Li1 %TIHAV@Y2' );
define( 'LOGGED_IN_KEY',    '42>98dxax+R~%rPp;J32FkZsnm:`6ga}?5PPaqDU^qP7z_Dnb=rYfcY#5^Ib(FRv' );
define( 'NONCE_KEY',        'bh,}esLo,!ZdAGWnN^mFi#>zfm. wE4h;CUE3]pWd)$v?`z+MNJ96/#J4aXRcog ' );
define( 'AUTH_SALT',        ')g5~%D#@b)R^D9~xC5wfC5XK<ZOdx5^LBZM~rLEZe2Ognw(Qcd&cUI;,FOZ/0L*a' );
define( 'SECURE_AUTH_SALT', 'nc;pA9ymWp4iO9o/ 7pk+w*Zg2_Z$&{`%}OZ$RuX+yfnj.]idV(3r&NfR=DSWT)W' );
define( 'LOGGED_IN_SALT',   '5=K<Kv3jtNi0Xs0Jh@;OXKyIrt}PQ}2xn6Z{AN@$.f]iOc/xd[p{!fZn|`?f>h[(' );
define( 'NONCE_SALT',       '&}q)o90Fy )]<v1o=Pw-=oW^RDY;cY8G;;5)AIv&N :imu&<NB}!{mr.mvNYU10@' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_3';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
