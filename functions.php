<?php
/* カスタム投稿タイプを追加 */
add_action( 'init', 'create_post_type' );
add_theme_support( 'post-thumbnails' );
function create_post_type() {

  // ***********************PLAYERS*************************** //
    register_post_type( 'players', //カスタム投稿タイプ名を指定
        array(
            'labels' => array(
            'name' => __( '選手' ),
            'singular_name' => __( '選手' )
        ),
        'public' => true,
        'has_archive' => true, /* アーカイブページを持つ */
        'menu_position' =>5, //管理画面のメニュー順位
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );
/* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
  register_taxonomy(
    'players_cat', /* タクソノミーの名前 */
    'players', /* 使用するカスタム投稿タイプ名 */
    array(
      'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
      'update_count_callback' => '_update_post_term_count',
      'label' => '選手カテゴリ',
      'singular_label' => '選手カテゴリ',
      'public' => true,
      'show_ui' => true
    )
  );


    // ***********************STAFF*************************** //

    register_post_type( 'staff', //カスタム投稿タイプ名を指定
    array(
        'labels' => array(
        'name' => __( 'staff' ),
        'singular_name' => __( 'staff' )
    ),
    'public' => true,
    'has_archive' => true, /* アーカイブページを持つ */
    'menu_position' =>5, //管理画面のメニュー順位
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
    )
    );
  /* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
    register_taxonomy(
    'staff_cat', /* タクソノミーの名前 */
    'staff', /* 使用するカスタム投稿タイプ名 */
    array(
      'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
      'update_count_callback' => '_update_post_term_count',
      'label' => 'staff category',
      'singular_label' => 'staff category',
      'public' => true,
      'show_ui' => true
    )
    );


     // ***********************NEWS*************************** //
    register_post_type( 'news', //カスタム投稿タイプ名を指定
    array(
        'labels' => array(
        'name' => __( 'news' ),
        'singular_name' => __( 'news' )
    ),
    'public' => true,
    'has_archive' => true, /* アーカイブページを持つ */
    'menu_position' =>5, //管理画面のメニュー順位
    'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
    )
    );
    /* カテゴリタクソノミー(カテゴリー分け)を使えるように設定する */
    register_taxonomy(
    'news_cat', /* タクソノミーの名前 */
    'news', /* 使用するカスタム投稿タイプ名 */
    array(
    'hierarchical' => true, /* trueだと親子関係が使用可能。falseで使用不可 */
    'update_count_callback' => '_update_post_term_count',
    'label' => 'news category',
    'singular_label' => 'news category',
    'public' => true,
    'show_ui' => true
    )
    );
  
    // register_taxonomy(
    // 'news_tag', 
    // 'news', 
    // array(
    // 'hierarchical' => false,
    // 'update_count_callback' => '_update_post_term_count',
    // 'label' => 'News Tags',
    // 'singular_label' => 'News Tags',
    // 'public' => true,
    // 'show_ui' => true
    // )
    // );
}


function handle_contact_form_submission() {
  $name = sanitize_text_field( $_POST['name'] );
  $email = sanitize_email( $_POST['email'] );
  $message = sanitize_textarea_field( $_POST['message'] );
  
  $to = 'gibotajada@gmail.com';
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";
  
  wp_mail( $to, $subject, $body );
  
  wp_redirect( home_url( '/thank-you/' ) );
  exit;
}
add_action( 'admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission' );
add_action( 'admin_post_submit_contact_form', 'handle_contact_form_submission' );


global $wp_rewrite;
$wp_rewrite->flush_rules();



