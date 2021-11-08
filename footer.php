<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ogsc
 */
global $incPart;
//$custom_logo_id = get_theme_mod( 'custom_logo' ); 
//	 $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
//	echo $mylogo = $image[0]; 
?>
<!--01-->
	<footer>
    <div class="inner flex_box_pc">
      <div class="logo_box">
        <p class="f_logo"><img src="<?php logoUrl(); ?>" alt="<?php bloginfo('bloginfo');?>"></p>
        <p class="logo_txt"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/site_tit.svg" alt="大津市企業局出資会社・大阪ガス機器取扱店 （株）大津ガスサービスセンター"></p>
      </div>
      <nav class="fnav">
       <ul class="flex_box fnav_list">
        <?php 
        $incPart = 'footer';
        get_template_part('template-parts/nav/common','nav');
        ?>
        </ul>
        <p class="copyright Radley">© 2021 Otsu Gas Service Center Co., Ltd.</p>
      </nav>
      <figure class="globalSign_wrap">
        <?php
        $root = ( empty( $_SERVER["HTTPS"] ) ? "http://" : "https://" ) . $_SERVER["HTTP_HOST"];
        if($root == 'https://www.ogsc.co.jp/'){
        ?>
        <span id="ss_img_wrapper_115-57_flash_ja">
          <a href="https://jp.globalsign.com/" target=_blank> <img alt="SSLグローバルサインのサイトシール" border=0 id="ss_img" src="https://seal.globalsign.com/SiteSe al/images/gs_noscript_115-57_ja.gif" style=" width: auto;"></a>
        </span>
        <script type="text/javascript" src="//seal.globalsign.com/SiteSeal/gs_flash_115-57_ja.js"></script>
        <?php }else{ ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/globalsign_dmy.png" alt="dmy">
        <?php }?>
      </figure>
      <figure class="f_line pc"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/f_line.svg" alt="LINE"></figure>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
