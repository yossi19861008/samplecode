<?php

/**
Template Name: お問い合わせフォーム
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
              <p class="mv_tit Radley">CONTACT</p>
              <p class="mv_txt">お問い合わせ</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">お問い合せ</span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/contact/contact_mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/contact/contact_mv_pc.jpg" alt="大津ガスサービスセンターについて">
          </picture>
        </section>
      </div>
      <!-- mv -->
      <div class="cont_wrap">
        <?php
        if (have_posts()) : while (have_posts()) : the_post();
            the_content();
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </article>
</main>
<!-- #main -->

<?php
get_footer();
