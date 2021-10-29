<?php
get_header();
$curCatId = get_query_var('cat');
$curCatName = single_cat_title("", false);
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
              <p class="mv_tit Radley">NEWS</p>
              <?php if (is_home()) : ?>
                <p class="mv_txt">お知らせ一覧</p>
              <?php else : ?>
                <p class="mv_txt"><?php echo $curCatName; ?></p>
              <?php endif; ?>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
                  <?php if (is_home()) : ?>
                    <span itemprop="name">お知らせ一覧</span>
                  <?php else : ?>
                    <a itemprop="item" href="/news/"> <span itemprop="name">お知らせ一覧</span> </a>
                    <?php endif; ?>
                    <meta itemprop="position" content="2" />
                </li>
                <?php if(is_category()==true): ?>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name"><?php echo $curCatName; ?></span>
                  <meta itemprop="position" content="2" />
                </li>
                <?php endif;?>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/news/mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/news/mv.jpg" alt="お知らせ">
          </picture>
        </section>
      </div>
      <!-- mv -->

      <div class="cont_wrap">

        <section class="news_nav_box">
          <div class="inner">
            <ul class="news_nav_list">
              <li class="news_nav_item <?php if (is_home()) echo 'current'; ?>"><a href="<?php echo get_post_type_archive_link('post'); ?>">全て</a></li>
              <?php
              $categories = get_categories();
              echo '<!-- <pre>';
              var_dump($categories);
              echo '</pre> -->';

              foreach ($categories as $cat) {
                $catId = $cat->term_id;
              ?>
                <li class="news_nav_item <?php echo ($curCatId === $catId) ? 'current' : ''; ?>"><a href="<?php echo get_category_link($catId); ?>"><?php echo $cat->name; ?></a></li>
              <?php
              }
              ?>
            </ul>
          </div>
        </section>

        <section id="news_list_area">
          <div class="inner">
            <?php if (have_posts()) : ?>
              <ul class="news_list">
                <?php while (have_posts()) :
                  the_post();
                  $postCat = get_the_category();
                ?>
                  <li class="news_list_item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="news_list_detail">
                        <?php get_template_part('template-parts/arch/arch-img'); ?>
                        <div class="txt_box">
                          <time class="Radley"><?php the_time('Y.m.d'); ?></time>

                          <span class="category <?php echo $postCat[0]->category_nicename; ?>"><?php echo $postCat[0]->name; ?></span>
                          <p class="news_ttl"><?php the_title(); ?></p>
                          <span class="btn">詳細を見る</span>
                        </div>
                      </div>
                    </a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
            <?php if (function_exists("wp_pagenavi")) wp_pagenavi(); ?>
          </div>
        </section>

        <?php
        get_template_part('template-parts/page/contact');
        ?>
      </div>

    </div>
  </article>
</main><!-- #main -->

<?php
get_footer();
