<?php
get_header();
$category = get_the_category();
$cate = $category[0];
$cat_name = $cate->name;
$cat_slu = $cate->slug;
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
              <p class="mv_txt"><?php echo $cat_name; ?></p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name"><?php echo $cat_name; ?></span>
                  <meta itemprop="position" content="2" />
                </li>
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
        <section id="news_detail">
          <div class="inner">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) :
                the_post();
                $postCat = get_the_category();
                $catId = $postCat[0]->term_id;
                $catName = $postCat[0]->name;
                $contents = SCF::get('contents');
              ?>
                <div class="post_head">
                  <p class="category <?php echo $cat_slu;?>">
                    <a href="<?php echo get_category_link($catId); ?>"><?php echo $catName; ?></a>
                  </p>
                  <time class="Radley"><?php the_time('Y.m.d'); ?></time>
                  <h3 class="news_ttl"><?php the_title(); ?></h3>
                </div>
                <?php
                foreach ($contents as $fields) {
                ?>
                  <div class="post_content">
                    <?php if ($fields['title1']) : ?>
                      <h4 class="l_ttl"><?php echo $fields['title1']; ?></h4>
                    <?php endif; ?>
                    <?php if ($fields['title2']) : ?>
                      <h5 class="m_ttl"><?php echo $fields['title2']; ?></h5>
                    <?php endif; ?>
                    <?php if ($fields['title3']) : ?>
                      <h6 class="s_ttl"><?php echo $fields['title3']; ?></h6>
                    <?php endif; ?>
                    <?php if ($fields['text']) : ?>
                      <div class="editar_box"><?php echo $fields['text']; ?></div>
                    <?php endif; ?>
                    <?php if (($fields['large_image']) || ($fields['image_row_1']) || ($fields['image_row_2'])) : ?>
                      <div class="img_box">
                        <?php if ($fields['large_image']) : ?>
                          <figure class="l_img"><?php echo wp_get_attachment_image($fields['large_image'], 'large'); ?></figure>
                        <?php endif; ?>
                        <div class="flex_img">
                          <?php if ($fields['image_row_1']) : ?>
                            <figure class="m_img"><?php echo wp_get_attachment_image($fields['image_row_1'], 'large'); ?></figure>
                          <?php endif; ?>
                          <?php if ($fields['image_row_2']) : ?>
                            <figure class="m_img"><?php echo wp_get_attachment_image($fields['image_row_2'], 'large'); ?></figure>
                          <?php endif; ?>
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if ($fields['text2']) : ?>
                      <div class="editar_box"><?php echo $fields['text2']; ?></div>
                    <?php endif; ?>
                  </div>
              <?php
                }
              endwhile;
              ?>
              </ul>
            <?php endif; ?>
            <a href="/news/"><span class="btn">一覧に戻る</span></a>
          </div>
        </section>

        <section id="news_list_area" class="connection">
          <div class="inner">
            <h3 class="connection_ttl">
              <strong class="Radley">Related article</strong>
              <small>関連記事</small>
            </h3>
            <?php
            $args = array(
              'posts_per_page' => 3,
              'cat' => $catId
            );
            $myposts = new WP_Query($args);
            if ($myposts->have_posts()) :
            ?>
              <ul class="news_list">
                <?php while ($myposts->have_posts()) : $myposts->the_post();
                  $postCat = get_the_category();
                ?>
                  <li class="news_list_item">
                    <a href="<?php the_permalink(); ?>">
                      <div class="news_list_detail">
                        <?php get_template_part('template-parts/arch/arch-img'); ?>
                        <div class="txt_box">
                          <time class="Radley"><?php the_time('Y.m.d'); ?></time>

                          <span class="category <?php echo $cat_slu;?>"><?php echo $catName; ?></span>
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
