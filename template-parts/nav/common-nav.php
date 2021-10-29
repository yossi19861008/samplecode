<?php 
global $incPart;

if($incPart == 'header'){ ?>
<li class="logo_box flex_box_sp sp">
  <p class="h_nav_logo"><img src="<?php logoUrl(); ?>" alt="<?php bloginfo('bloginfo');?>"></p>
  <p class="logo_txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/site_tit.svg" alt="大津市企業局出資会社・大阪ガス機器取扱店 （株）大津ガスサービスセンター"></p>
</li>
<?php } ?>
<li><a href="<?php echo home_url('/') ?>">ホーム</a></li>
<li><a href="<?php echo get_permalink( get_page_by_path( 'about' )->ID ); ?>">選ばれる理由</a></li>
<li><a href="<?php echo get_permalink( get_page_by_path( 'service' )->ID ); ?>">サービスメニュー</a></li>
<li><a href="<?php echo get_permalink( get_page_by_path( 'company' )->ID ); ?>">会社概要</a></li>
<li><a href="<?php echo get_permalink( get_page_by_path( 'recruit' )->ID ); ?>">採用情報</a></li>
<li><a href="<?php echo get_post_type_archive_link( 'post' ); ?>">お知らせ</a></li>
<li><a href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>">お問い合わせ</a></li>
<?php if($incPart == 'footer'){ ?>
<li><a href="<?php echo get_permalink( get_page_by_path( 'policy' )->ID ); ?>">プライバシーポリシー</a></li>
<?php } ?>