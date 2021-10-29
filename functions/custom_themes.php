<?php 
/* CSSとJavaScriptの読み込み
---------------------------------------------------------- */
if ( !is_admin() ) {
  function custom_theme_scripts() {
     global $post;  
    $dir = get_template_directory_uri();

    //ファイルセット
    //CSS
    
    
    wp_register_style( 'font', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), '', 'all' );
    wp_register_style( 'font2', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@500&display=swap', array('font'), '', 'all' );
    wp_register_style( 'font3', 'https://fonts.googleapis.com/css2?family=Radley:ital@0;1&display=swap', array('font2'), '', 'all' );


    wp_register_style( 'reset', $dir . '/assets/add_css/style_reset.css', array(), '', 'all' );
    wp_register_style( 'base', $dir . '/assets/add_css/base.css', array( 'reset' ), '', 'all' );
    wp_register_style( 'top', $dir . '/assets/add_css/top.css', array( 'base' ), '', 'all' );
    wp_register_style( 'lower', $dir . '/assets/add_css/lower.css', array( 'base' ), '', 'all' );
    wp_register_style( 'aboutus', $dir . '/assets/add_css/about.css', array( 'base' ), '', 'all' );
    wp_register_style( 'company', $dir . '/assets/add_css/company.css', array( 'base' ), '', 'all' );
    wp_register_style( 'service', $dir . '/assets/add_css/service.css', array( 'base' ), '', 'all' );
    wp_register_style( 'kitchen_dining', $dir . '/assets/add_css/kitchen_dining.css', array( 'base' ), '', 'all' );
    wp_register_style( 'contact', $dir . '/assets/add_css/contact.css', array( 'base' ), '', 'all' );
    wp_register_style( 'recruit', $dir . '/assets/add_css/recruit.css', array( 'base' ), '', 'all' );
    wp_register_style( 'works', $dir . '/assets/add_css/works.css', array( 'base' ), '', 'all' );
    wp_register_style( 'policy', $dir . '/assets/add_css/policy.css', array( 'base' ), '', 'all' );
    wp_register_style( 'news', $dir . '/assets/add_css/news.css', array( 'base' ), '', 'all' );

    wp_register_style( 'validation',  $dir . '/assets/add_js/libs/css/validationEngine.jquery.css', array(), '');

    wp_register_style( 'recruitment', $dir . '/assets/add_css/recruitment.css', array( 'base' ), '', 'all' );

    //JS////////////////////////////////////////////////////////////////v
    wp_deregister_script( 'jquery' );
    
    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '', true );
    wp_register_script( 'objFit', $dir . '/assets/add_js/libs/ofi.min.js', array('jquery'), '', true );
    wp_register_script( 'autoKana', $dir . '/assets/add_js/libs/jquery.autoKana.js', array('jquery'), '', true );
    wp_register_script( 'yubinbango', 'https://yubinbango.github.io/yubinbango/yubinbango.js', array(), '', true );
    
    wp_register_script( 'validation_ja',  $dir . '/assets/add_js/libs/languages/jquery.validationEngine-ja.js', array('jquery'), '', true );
    wp_register_script( 'validation',  $dir . '/assets/add_js/libs/jquery.validationEngine.min.js', array('validation_ja'), '', true );
    
    wp_register_script( 'base', $dir . '/assets/add_js/base.js', array( 'jquery' ), '', 'true' );
    wp_register_script( 'top', $dir . '/assets/add_js/top.js', array( 'base' ), '', 'true' );
    wp_register_script( 'news', $dir . '/assets/add_js/news.js', array( 'base' ), '', 'true' );
    wp_register_script( 'form', $dir . '/assets/add_js/form.js', array( 'autoKana','validation'), '', 'true' );
   
    


    //表示処理//////////////////////////////////////

    // 全ページ
    wp_enqueue_style( 'font3' );
    wp_enqueue_style( 'base' );
    
    wp_enqueue_script( 'objFit' );
    wp_enqueue_script( 'base' );
    
    // top
  if ( is_front_page() ):
    wp_enqueue_style( 'top' );
    wp_enqueue_script( 'top' );
    //else:
    else:
      wp_enqueue_style( 'lower' );

   // about
    if(is_page("about")):
    
    wp_enqueue_style( 'aboutus' );
    wp_enqueue_script( 'top' );

  // service
    elseif(is_page( "service" )):
    wp_enqueue_style( 'service' );
    wp_enqueue_script( 'top' );

  //kitchen_dining
    elseif(is_page( array("kitchen-dining","bath-washcloth-toilet","energy-saving","service-other"))):
    wp_enqueue_style( 'kitchen_dining' );
    wp_enqueue_script( 'top' );
    
    // company
    elseif(is_page("company")):
    wp_enqueue_style( 'company' );
    
    // recruit
    elseif(is_page("recruit")):
    wp_enqueue_style( 'recruit' );

    // works
    elseif(is_page("works")):
    wp_enqueue_style( 'works' );

    // contact
    //elseif(is_page("contact")):
    elseif(is_page_template('page-contact.php')):
    wp_enqueue_style( 'validation' );
    wp_enqueue_style( 'contact' );
    if(is_page("contact")):
    wp_enqueue_script( 'yubinbango' );
    //wp_enqueue_script( 'autoKana' );
    wp_enqueue_script( 'form' );
    endif;
    
    // policy
    elseif(is_page("policy")):
    wp_enqueue_style( 'policy' );

    // recruitment
    elseif(is_page("recruitment")):
      wp_enqueue_style( 'recruitment' );

    // news
    elseif(is_home() || is_single() ||is_archive()):
      wp_enqueue_style( 'news' );
      wp_enqueue_script( 'news' );
    
    endif;
  endif;
  }
  add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );
}
/*文字数制限
---------------------------------------------------------- */
function txtCount($txt,$count){
  if(mb_strlen( $txt , 'UTF-8') > $count):
  $title = mb_substr($txt, 0, $count, 'UTF-8').'……';
  else:
  $title = $txt;
    endif;
  echo $title;
}

/*プレーンテキスト
---------------------------------------------------------- */
function planeTxt($editor){
$content = wp_strip_all_tags( $editor );
$planeTxt = strip_shortcodes( $content );
   return $planeTxt;
}



/*カスタムフィールドによる記事数取得（全記事）
---------------------------------------------------------- */
function loopPostCount( $post_meta_key = null ,$post_meta_value = null,$post__not_in = [], $postType = 'post', $post_cat = 'null')
{
   $args = [
      'post_type' => $postType,
      'meta_key' => $post_meta_key,
      'meta_value' => $post_meta_value,
      'posts_per_page' => -1,
      'post__not_in' => $post__not_in
    ];
  if($post_cat != 'null'){
    $args['post_cat'] = $post_cat;
  }
  
    $meta_posts = get_posts($args);
    $count_post = 0;
    foreach ($meta_posts as $post) {
        $count_post++;
    }
    return $count_post;
}

/*カスタムフィールドによる記事数取得（最新記事数任意）
---------------------------------------------------------- */
function pagePostCount( $post_meta_key = null ,$post_meta_value = null, $posts_per_page = -1 ,$post__not_in = [], $postType = 'post', $post_cat = 'null')
{
  $args = [
      'post_type' => $postType,
      'posts_per_page' => $posts_per_page,
      'post__not_in' => $post__not_in
    ];
  
   if($post_cat != 'null'){
     $args['post_cat'] = $post_cat;
//    $args = array(
//      'post_type' => $postType,
//      'posts_per_page' => $posts_per_page,
//      'post_cat' => $post_cat,
//      'post__not_in' => $post__not_in
//    );
   }
//  else{$args = array(
//      'post_type' => $postType,
//      'posts_per_page' => $posts_per_page,
//      'post__not_in' => $post__not_in
//    );
//   }
  
  
    $meta_posts = get_posts($args);
    $count_post = 0;
    foreach ($meta_posts as $post) {
      if( get_post_meta( $post->ID , $post_meta_key, ture) == $post_meta_value){
        $count_post++;
      }
    }
    return $count_post;
  //return $meta_posts;
}

/*logo画像　url
---------------------------------------------------------- */
function logoUrl(){
  $custom_logo_id = get_theme_mod( 'custom_logo' ); 
	 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
	 $mylogo = $image[0]; 
  echo  $mylogo;
}
  
/**
 * お問い合わせフォーム
 * 
 * 募集要項からのリンクで項目にチェックをつける
 * @author 7b / kawai
 */
function my_mwform_value( $value, $name ) {
  if ( $name === '項目' && !empty( $_GET['type'] ) && !is_array( $_GET['type'] ) ) {
      return '採用に関するお問い合わせ';
  }
  return $value;
}
add_filter( 'mwform_value_mw-wp-form-36', 'my_mwform_value', 10, 2 );


// テンプレート変更
function custom_template_include( $template ) {
  if ( is_home()) {
    $new_template = locate_template( array( 'archive.php' ) );
    if ( '' != $new_template ) {
      return $new_template ;
    }
  }
  return $template;
}
add_filter( 'template_include', 'custom_template_include', 99 );


// アイキャッチが設定されていない場合は、記事の1番最初の画像をアイキャッチに設定
function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  $first_img = $matches [1] [0];


  return $first_img;
}


/* 【管理画面】投稿編集画面で不要な項目を非表示にする */
function remove_block_editor_options() {
  remove_post_type_support( 'post', 'editor' ); 
  //remove_post_type_support( 'post', 'author' );              // 投稿者
  //remove_post_type_support( 'post', 'post-formats' );        // 投稿フォーマット
  //remove_post_type_support( 'post', 'revisions' );           // リビジョン
  //remove_post_type_support( 'post', 'thumbnail' );           // アイキャッチ
  //remove_post_type_support( 'post', 'excerpt' );             // 抜粋
  remove_post_type_support( 'post', 'comments' );            // コメント
  remove_post_type_support( 'post', 'trackbacks' );          // トラックバック
  remove_post_type_support( 'post', 'custom-fields' );       // カスタムフィールド
  //unregister_taxonomy_for_object_type( 'category', 'post' ); // カテゴリー
  //unregister_taxonomy_for_object_type( 'post_tag', 'post' ); // タグ
}
add_action( 'init', 'remove_block_editor_options' );