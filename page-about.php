<?php
/**
Template Name: 大津ガスサービスセンターについて
 */
global $incPart;
get_header();
?>

<main id="primary" class="site-main">
  <article id="main">
    
    <div id="wrapper">
      <div class="mv_wrap">
        
      <?php 
      //$incPart = 'header';
      get_template_part('template-parts/page/header','nav');
      ?>
        <section id="mv" class="under_mv">
        <div class="inner">
          <h1 class="mv_logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/lower_logo.svg" alt="<?php bloginfo('name')?>"></h1>
          <div class="mv_txt_area">
            <p class="mv_tit Radley">ABOUT</p>
            <p class="mv_txt">大津ガスサービスセンターについて</p>
          </div>
          <div class="breadcrumbs pc">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
              <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                <meta itemprop="position" content="1" />
              </li>
              <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">大津ガスサービスセンターについて</span>
                <meta itemprop="position" content="2" />
              </li>
            </ol>
          </div>
          <!--breadcrumbs-->
        </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/mv.jpg" alt="大津ガスサービスセンターについて">
          </picture>
      </section>
      </div>
      <!-- mv -->
      
       <div class="cont_wrap">
      <section id="reason_wrap">
        <div class="inner">
          <div class="sec_tit_box02">
            <h2 class="sec_tit02 Radley">REASON</h2>
            <p class="sec_sbtit02">選ばれる理由</p>
          </div>
          <div class="reason_content flex_box_pc">
            <div class="img_txt_box">
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/reason_img01.jpg" alt="愛され、信頼され約30年"></figure>
              <div class="tit_no_box">
                <p class="tit_no Radley">Reason<strong>01</strong></p>
              </div>
              <dl class="txt_box">
                <dt>愛され、信頼され約30年</dt>
                <dd>私たちは、創業以来、約30年にわたり、大津市企業局出資会社・大阪ガス機器取扱店・びわ湖ブルーエナジーガス代理店として、地域のお客様にご愛顧いただいております。</dd>
              </dl>
            </div>
            
            <div class="img_txt_box">
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/reason_img02.jpg" alt="確かな技術で"></figure>
              <div class="tit_no_box">
                <p class="tit_no Radley">Reason<strong>02</strong></p>
              </div>
              <dl class="txt_box">
                <dt>確かな技術で</dt>
                <dd>大津市及び大阪ガス等から認定を受けた経験豊かな専門スタッフが施工・点検等を行います。また、継続的に研修を行っており、常に必要な知識と技術を取得しています。</dd>
              </dl>
            </div>
            
            <div class="img_txt_box">
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/reason_img03.jpg" alt="何でもお任せください！"></figure>
              <div class="tit_no_box">
                <p class="tit_no Radley">Reason<strong>03</strong></p>
              </div>
              <dl class="txt_box">
                <dt>何でもお任せください！</dt>
                <dd>ガス機器はもとより、リフォームやエネルギーのこと等お困り事があれば、何でもお気軽にご相談ください。<br>っと快適に、もっと便利に、もっと安全に、お客様の暮らしをサポートします。</dd>
              </dl>
            </div>
          </div>
        </div>
      </section>
      <!-- reason_wrap -->

      <section id="promise_wrap" class="img_ex_wrap lower_img_ex">
        <div class="service_box">
          <picture class="service_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/promise_img_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/promise_img.jpg" alt="">
          </picture>
        </div>
        <div class="inner">
          <div class="sec_tit_box02 flex_box_pc">
            <h2 class="sec_tit02 Radley">PROMISE</h2>
            <p class="sec_sbtit02 no_line">お約束</p>
          </div>
          <div class="promise_content col_area_box flex_box_pc">
            <div class="content_txt">
              <div class="tit_no_box flex_box_sp">
                <p class="tit Radley">Promise</p>
                <p class="tit_no Radley"><strong>01</strong></p>
              </div>
              <div class="txt_box">
                <p class="txt">お客様の暮らしを<br>「もっと快適に」<br>「もっと便利に」</p>
              </div>
            </div>
            
            <div class="content_txt">
              <div class="tit_no_box flex_box_sp">
                <p class="tit Radley">Promise</p>
                <p class="tit_no Radley"><strong>02</strong></p>
              </div>
              <div class="txt_box">
                <p class="txt">お客様ひとりひとりのライフスタイルに合ったご提案で、<br>快適な暮らしを<br>サポートいたします</p>
              </div>
            </div>
            
            <div class="content_txt">
              <div class="tit_no_box flex_box_sp">
                <p class="tit Radley">Promise</p>
                <p class="tit_no Radley"><strong>03</strong></p>
              </div>
              <div class="txt_box">
                <p class="txt">お客様に<br>選ばれ続けるために、<br>邁進してまいります</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- promise_wrap -->
      
      <section id="gsc_pride_wrap">
        <div class="inner">
          <div class="sec_tit_box02">
            <h2 class="sec_tit02 Radley">OUR PRIDE</h2>
            <p class="sec_sbtit02">私たちのプライド</p>
          </div>
        </div>
        <div class="two_col_box flex_box_pc">
          <div class="img_box left_box">
            <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/about/gsc_pride_img.jpg" alt="GSCプライド"></figure>
          </div>
          <div class="txt_area right_box">
            <div class="tit_txt_box common_txt_area">
              <div class="tit_box">
                <p class="sb_tit">［&ensp;基本理念&ensp;］</p>
                <h3 class="tit">お客様に心からよろこんでいただけるサービスがいつでもできるような会社をつくり上げよう</h3>
              </div>
              <p class="txt">創業以来、安心・安全を第一に、ガス機器のメンテナンスから販売施工まで一貫した体制と、暮らしのインフラ整備を行い、地域のみなさまに密着した活動を展開し、地域一番店を目指します。</p>
            </div>
          </div>
        </div>
      </section>
      <!-- gsc_pride_wrap -->
      
      <?php 
      get_template_part('template-parts/page/contact');
      ?>
      </div>
      
    </div>
  </article>
</main><!-- #main -->

<?php
get_footer();
