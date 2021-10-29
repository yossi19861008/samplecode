<?php

/**
Template Name: 採用情報
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
        get_template_part('template-parts/page/header', 'nav');
        ?>
        <section id="mv" class="under_mv">
          <div class="inner">
            <h1 class="mv_logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/lower_logo.svg" alt="<?php bloginfo('name') ?>"></h1>
            <div class="mv_txt_area">
              <p class="mv_tit Radley">RECRUIT</p>
              <p class="mv_txt">採用情報</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">採用情報</span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/mv.jpg" alt="大津ガスサービスセンターについて">
          </picture>
        </section>
      </div>
      <!-- mv -->

      <div class="cont_wrap">

        <section id="philosophy_wrap">
          <div class="sec_tit_box02">
            <h2 class="sec_tit02 Radley">PHILOSOPHY</h2>
            <p class="sec_sbtit02">経営理念</p>
          </div>
          <div class="two_col_box flex_box_pc">
            <div class="txt_area left_box">
              <div class="tit_txt_box common_txt_area">
                <div class="tit_box">
                  <h3 class="tit">お客様の暮らしを<br>「もっと快適に」「もっと便利に」</h3>
                </div>
                <p class="txt">創業以来“安心・安全”を第一に、ガス機器のメンテナンスから販売施工まで一貫した体制で地域のみなさまに密着した活動を展開しております。<br><br class="pc">また、お客さま一人ひとりのライフスタイルに合ったご提案で、快適な暮らしをサポートいたします。そうすることで、「お客さまに心からよろこんでいただけるサービスがいつでもできる会社」をつくり上げるよう活動いたします。</p>
              </div>
            </div>
            <div class="img_box right_box">
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/philosophy_img.jpg" alt="お客様の暮らしを「もっと快適に」「もっと便利に」"></figure>
            </div>
          </div>
        </section>
        <!-- philosophy_wrap -->


        <section id="t_person_wrap" class="img_ex_wrap lower_img_ex">
          <div class="service_box">
            <picture class="service_img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/type_of_person_img_sp.jpg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/type_of_person_img.jpg" alt="求める人物像">
            </picture>
          </div>
          <div class="inner">
            <div class="sec_tit_box02 flex_box_pc">
              <h2 class="sec_tit02 Radley">TYPE OF PERSON</h2>
              <p class="sec_sbtit02 no_line">求める人物像</p>
            </div>
            <div class="col_area_box flex_box_pc">
              <div class="col_cont_box">
                <div class="content_txt">
                  <div class="tit_no_box flex_box_sp">
                    <p class="tit Radley">Promise</p>
                    <p class="tit_no Radley"><strong>01</strong></p>
                  </div>
                  <div class="txt_box">
                    <p class="txt">安心安全</p>
                  </div>
                </div>
                <div class="col_txt_box">
                  <p class="txt">ガス・電気といったライフラインを担います。地域のお客さまの暮らしに寄り添い安心安全をお届けできる方。</p>
                </div>
              </div>

              <div class="col_cont_box">
                <div class="content_txt">
                  <div class="tit_no_box flex_box_sp">
                    <p class="tit Radley">Promise</p>
                    <p class="tit_no Radley"><strong>02</strong></p>
                  </div>
                  <div class="txt_box">
                    <p class="txt">お客さま第一</p>
                  </div>
                </div>
                <div class="col_txt_box">
                  <p class="txt">お客さまのニーズに耳を傾けること、トレンドを把握しご提案が行える。満足度を高める活動ができる方。</p>
                </div>
              </div>

              <div class="col_cont_box">
                <div class="content_txt">
                  <div class="tit_no_box flex_box_sp">
                    <p class="tit Radley">Promise</p>
                    <p class="tit_no Radley"><strong>03</strong></p>
                  </div>
                  <div class="txt_box">
                    <p class="txt">プロ意識</p>
                  </div>
                </div>
                <div class="col_txt_box">
                  <p class="txt">もっと快適に、もっと便利に。あらゆる要望にお応えできるよう日々精進できる方。</p>
                </div>
              </div>

              <div class="col_cont_box">
                <div class="content_txt">
                  <div class="tit_no_box flex_box_sp">
                    <p class="tit Radley">Promise</p>
                    <p class="tit_no Radley"><strong>04</strong></p>
                  </div>
                  <div class="txt_box">
                    <p class="txt">チームワーク</p>
                  </div>
                </div>
                <div class="col_txt_box">
                  <p class="txt">各セクションのプロ集団が集合して大津ガスサービスセンターになります。チームで力を発揮でき、皆をけん引する力も持ち合わせている方。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- t_person_wrap -->

        <section id="works_wrap">
          <div class="inner">
            <div class="sec_tit_box02">
              <h2 class="sec_tit02 Radley">WORKS</h2>
              <p class="sec_sbtit02">仕事紹介</p>
            </div>
          </div>
          <div class="three_col_box flex_box_pc">
            <div class="col_box">
              <picture class="works_img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works_img01_sp.jpg" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works_img01.jpg" alt="営業職">
              </picture>
              <div class="txt_area">
                <a href="<?php echo get_permalink(get_page_by_path('recruit/works')->ID); ?> #sales_wrap">
                  <div class="sec_tit_box">
                    <h3 class="sec_tit">営業職</h3>
                    <p class="sec_subtit Radley">SALES POSITION</p>
                  </div>
                  <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
                </a>
              </div>
            </div>
            <div class="col_box">
              <picture class="works_img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works_img02_sp.jpg" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works_img02.jpg" alt="">
              </picture>
              <div class="txt_area">
                <a href="<?php echo get_permalink(get_page_by_path('recruit/works')->ID); ?> #engineer">
                  <div class="sec_tit_box">
                    <h3 class="sec_tit">技術職</h3>
                    <p class="sec_subtit Radley">ENGINEER POSITION</p>
                  </div>
                  <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
                </a>
              </div>
            </div>
            <div class="col_box">
              <picture class="works_img">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works_img03_sp.jpg" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works_img03.jpg" alt="">
              </picture>
              <div class="txt_area">
                <a href="<?php echo get_permalink(get_page_by_path('recruit/works')->ID); ?> #clerical">
                  <div class="sec_tit_box">
                    <h3 class="sec_tit">事務職</h3>
                    <p class="sec_subtit Radley">CLERICAL POSITION</p>
                  </div>
                  <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- works_wrap -->

        <section id="requirements_wrap">
          <div class="inner">
            <div class="sec_tit_box02">
              <h2 class="sec_tit02 Radley">REQUIREMENTS</h2>
              <p class="sec_sbtit02">募集要項</p>
            </div>
            <div class="img_area flex_box">
              <div class="img_box">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/requirements_img01_sp.jpg" media="(max-width: 767px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/requirements_img01.jpg" alt="新卒採用">
                </picture>
                <div class="txt_area">
                  <a href="<?php echo get_permalink(get_page_by_path('recruit/recruitment')->ID);?>#new-graduate">
                    <div class="sec_tit_box">
                      <h4 class="sec_tit">新卒採用</h4>
                    </div>
                    <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
                  </a>
                </div>
              </div>
              <div class="img_box">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/requirements_img02_sp.jpg" media="(max-width: 767px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/requirements_img02.jpg" alt="中途採用">
                </picture>
                <div class="txt_area">
                  <a href="<?php echo get_permalink(get_page_by_path('recruit/recruitment')->ID);?>#career">
                    <div class="sec_tit_box">
                      <h4 class="sec_tit">中途採用</h4>
                    </div>
                    <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
                  </a>
                </div>
              </div>
            </div>
            <!--img_area-->
            <div class="contact_area">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/contact_img_sp.jpg" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/contact_img.jpg" alt="中途採用">
              </picture>
              <div class="txt_area">
                <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">
                  <div class="sec_tit_box">
                    <h4 class="sec_tit">採用に関するお問い合わせ</h4>
                  </div>
                  <p class="btn_wrap"><span class="btn">お問い合わせフォームへ</span></p>
                </a>
              </div>
            </div>
          </div>
        </section>
        <!-- requirements_wrap -->

        <?php
        //$incPart = 'header';
        get_template_part('template-parts/page/contact');
        ?>

  </article>
</main><!-- #main -->
</div>
</div>

<?php
get_footer();
