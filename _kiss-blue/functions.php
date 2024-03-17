<?php //スキンから親テーマの定義済み関数等をオーバーライドして設定の書き換えが可能
if ( !defined( 'ABSPATH' ) ) exit;
/*
///////////////////////////////////////////
// 設定操作サンプル
// lib\page-settings\内のXXXXX-funcs.phpに書かれている
// 定義済み関数をオーバーライドして設定を上書きできます。
// 関数をオーバーライドする場合は必ず!function_existsで
// 存在を確認してください。
///////////////////////////////////////////
//ヘッダーロゴを「トップメニューにするコードサンプル
if ( !function_exists( 'get_header_layout_type' ) ):
function get_header_layout_type(){
  return 'top_menu';
}
endif;

//メインカラム幅を680pxにするサンプル
if ( !function_exists( 'get_main_column_contents_width' ) ):
function get_main_column_contents_width(){
  return 680;
}
endif;

//エントリーカードの枠線を表示するサンプル
if ( !function_exists( 'is_entry_card_border_visible' ) ):
function is_entry_card_border_visible(){
  return true;
}
endif;

*/

// https://wp-cocoon.com/max-code-row-count/
// ソースコード行番号の最大値（デフォルト：99）
add_filter('max_code_row_count', function ($value){
  return 300; //最大行数を入力
});

//検索結果の「投稿が見つかりませんでした。」の変更
add_filter('posts_not_found_message', function ($message){
  $message = '検索した結果見つかりませんでした。';
  return $message;
}); 

///////////////////////////////////////////
// 自分用
// Googleフォント読み込み
add_action('wp_head', 'adds_head');
function adds_head() {
  echo '<link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap&text=みむねこのーと" rel="stylesheet">'."\n";
}
///////////////////////////////////////////