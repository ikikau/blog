<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
echo "deploy test";
if($_SERVER['SERVER_NAME'] == 'blog.ikikau.com') {

  define('DB_NAME', 'ikikau_blog_production');
  define('DB_USER', 'ikikau_blog_p');
  define('DB_PASSWORD', 'UGUONmt2pInmpBn1b');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

} elseif($_SERVER['SERVER_NAME'] == 'staging-blog.ikikau.com') {

  define('DB_NAME', 'ikikau_blog-staging');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

} else {

  define('DB_NAME', 'ikikau_blog_development');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', '127.0.0.1:3306');
  define('DB_CHARSET', 'utf8');
  define('DB_COLLATE', '');

}

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[#/gNE/)Up5y)2n#+#&U^-mjemQ~MOEB`M|exE8(J(_-zIW<2A@VE+RxGUk]*x((');
define('SECURE_AUTH_KEY',  'ZtiH{^,l[&-V3a&teDbw~LhRk^,H+Kx!bVYmH v1|x~)vT,-`is+2i?fmq?-MwNa');
define('LOGGED_IN_KEY',    '5$lIi`!Cl!PT%VI^wAm*po-!n;&`|;M2$(pN>v]Y!s?sxp&0->a!+5L-Q7M+mR3%');
define('NONCE_KEY',        '0%7qh:Mke>iZrxjq:q1QHoRzg{2`<Z]nNBS:d8<;:{4T+f-BN!zsNi69Ng:l_sa<');
define('AUTH_SALT',        '|+nx)V+RLk f Gv&AF&e DKT]_Dy+#j,YH/=2pj3~[14ar~O2CJcQ(=$ZJ ]tSMF');
define('SECURE_AUTH_SALT', 'p#{->O7Lj&`*{6(tx!|)^wDwM0z.&.Hk$FPAAO88bq,-:kd9<4Jl%D<QG/~FE[x,');
define('LOGGED_IN_SALT',   'S[Y,D;Z*P!PoQt5fDG+~-iM^jb[jWi5uF|?{OeF9ruDg1&#B_[^jSa3bnT^$B7-G');
define('NONCE_SALT',       '(9s+uqFa-I>9k[/J>%K%.=:UAWu07@duYfF,9Lfu{SdQ^lLh?-mZm+e?7|:~vio^');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
