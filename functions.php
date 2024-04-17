<?php

/**------------------------------------------
 * テーマの機能を追加する
 * @return void
 *------------------------------------------*/

function my_theme_support()
{
	//titleタグを出力する
	add_theme_support('title-tag');

	// アイキャッチ画像を有効化
	add_theme_support('post-thumbnails');

	//カスタムメニューを作成する
	add_theme_support('menus');

	//HTML5による出力
	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}
add_action('after_setup_theme', 'my_theme_support');

/**------------------------------------------
 * <title>の区切り文字を変更する
 *------------------------------------------*/
function my_document_title_separator($separator)
{
	$separator = '|';
	return $separator;
}
add_filter('document_title_separator', 'my_document_title_separator');

/**------------------------------------------
 * CSS・JavaScript・typekitの読み込み
 *------------------------------------------*/
// function my_scripts_method()
// {

// 	// カスタムスクリプトの登録
// 	wp_enqueue_script(
// 		'custom_script',
// 		get_template_directory_uri() . '/assets/js/main.js',
// 		array(),
// 		true
// 	);

// 	// スクリプトにテンプレートディレクトリの URL を渡す
// 	$script_data = array('templateUrl' => get_template_directory_uri());
// 	wp_localize_script('custom_script', 'themeParams', $script_data);

// 	// Typekitのスクリプトの登録
// 	wp_enqueue_script(
// 		'typekit_script',
// 		get_template_directory_uri() . '/assets/js/typekit.js', // typekit.js のパス
// 		array(),
// 		null,
// 		false // スクリプトはフッターに読み込むように設定（最後に読み込む）
// 	);

// 	// スタイルシートの登録（Typekitのみ）
// 	wp_enqueue_style(
// 		'typekit_fonts',
// 		'https://use.typekit.net/coy3ocg.css',
// 		array(),
// 		null
// 	);

// 	// スタイルシートの登録（SwiperとTypekitに依存）
// 	wp_enqueue_style(
// 		'style-css',
// 		get_template_directory_uri() . '/assets/css/app.css',
// 		array('typekit_fonts') // 'typekit_fonts' に依存
// 	);
// }
// add_action('wp_enqueue_scripts', 'my_scripts_method');

// // Typekitのフォントを読み込む
// function enqueue_typekit_fonts()
// {
// 	wp_enqueue_style('typekit-fonts', 'https://use.typekit.net/coy3ocg.css');
// }
// add_action('wp_enqueue_scripts', 'enqueue_typekit_fonts');

/**------------------------------------------
 * CSS・JavaScript・Googlefontsの読み込み
 *------------------------------------------*/
function my_scripts_method()
{
	// カスタムスクリプトの登録
	wp_enqueue_script(
		'custom_script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		true
	);

	// スクリプトにテンプレートディレクトリの URL を渡す
	$script_data = array('templateUrl' => get_template_directory_uri());
	wp_localize_script('custom_script', 'themeParams', $script_data);

	// Google FontsのCSSを追加
	wp_enqueue_style(
		'google_fonts',
		'https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Shippori+Mincho&display=swap',
		array(),
		null
	);

	// スタイルシートの登録（Swiperに依存しない）
	wp_enqueue_style(
		'style-css',
		get_template_directory_uri() . '/assets/css/app.css',
		array('google_fonts') // 'google_fonts' に依存
	);
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

// ブロックエディタのスタイルにフォントを適用する
function custom_block_editor_styles()
{
	// Google FontsのCSSをブロックエディタにも追加
	wp_enqueue_style(
		'google_fonts_block_editor',
		'https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Shippori+Mincho&display=swap',
		false
	);
}
add_action('enqueue_block_editor_assets', 'custom_block_editor_styles');


/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
		$args['label'] = 'news';
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);
