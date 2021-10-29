<?php
global $incPart;
?>
<header>
  <nav class="hnav flex_box nav_wrap" >
    <a href="#" class="nav_btn sp">
      <span></span>
      <span></span>
      <span></span>
    </a>
    <ul class="hnav_list flex_box_pc fw_medium">
      <?php 
      $incPart = 'header';
      get_template_part('template-parts/nav/common','nav');
      ?>
    </ul>
    <ul class="contact_list flex_box">
      <li class="tel">
        <a href="tel:0120545639" class="sp_btn tel_btn">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/h_tel_btn_sp.svg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/h_tel_btn.svg" alt="0120-545-639 ｜受付時間／平日9:00-17:30｜">
            </picture>
          </a>
        </li>
        <li class="contact mega_btn">
          <a href="#" class="contact_btn sp_btn noScroll">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/h_contact_btn_sp.svg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/h_contact_btn.svg" alt="WEB予約 ｜イベント予約／まごころ診断｜">
            </picture>
          </a>
          <ul class="mega_cont">
            <li><a href="https://airrsv.net/gsc-reserve/calendar?schdlId=s000055ED4" class="btn"><span>イベント予約</span></a></li>
            <li><a href="https://airrsv.net/gsc-reserve/calendar?schdlId=s000055EF4" class="btn"><span>まごころ診断</span></a></li>
            <li><a href="https://airrsv.net/an-ten/calendar" class="btn"><span>ガス設備安全点検</span></a></li>
            <!-- <li><a href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>" class="btn"><span>総合お問い合わせ</span></a></li> -->
          </ul>
        </li>
      <li class="line">
        <a href="" class="sp_btn line_btn" target="_blank">
            <picture>
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/h_line_btn_sp.svg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/h_line_btn.svg" alt="line">
            </picture>
          </a>
      </li>
      </ul>
    </nav>
	</header><!-- #masthead -->