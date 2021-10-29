<?php
/**
 * Template Name: 募集要項
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
              <p class="mv_tit Radley">REQUIREMENTS</p>
              <p class="mv_txt">募集要項</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url('recruit/') ?>"> <span itemprop="name">採用情報</span> </a>
                  <meta itemprop="position" content="2" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">募集要項</span>
                  <meta itemprop="position" content="3" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/mv.jpg" alt="">
          </picture>
        </section>
      </div>
      <!-- mv -->

      <?php
      $scfs = SCF::gets();
      ?>
      <div class="cont_wrap recruitment__wrap">
        <?php if(
          empty($scfs['new_graduate_disabled']) 
          || empty($scfs['career_sales_disabled'])
          || empty($scfs['career_engineer_disabled'])
          || empty($scfs['career_clerk_disabled'])){ ?>
        <section id="recruitment__nav">
          <ul class="recruitment__nav flex_box_pc">
            <?php
            if(empty($scfs['new_graduate_disabled'])){ 
              ?>
              <li><a class="flex_box arrow-down" href="#new-graduate">新卒採用の募集要項</a></li>
              <?php
            }
            if(empty($scfs['career_sales_disabled']) 
            || empty($scfs['career_engineer_disabled']) 
            || empty($scfs['career_clerk_disabled'])){
              ?>
              <li><a class="flex_box arrow-down" href="#career">中途採用の募集要項</a></li>
              <?php
            }
            ?>
          </ul>
        </section>
        <?php } ?>

        <?php //新卒採用 ?>
        <section id="new-graduate" class="recruitment__new-graduate">
          <div class="recruitment__title">
            <picture class="recruitment__title__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruitment/new_graduate_sp.jpg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruitment/new_graduate.jpg" alt="">
            </picture>
            <h2 class="Radley">NEW GRADUATE</h2>
            <div class="recruitment__subtitle flex_box">新卒採用</div>
          </div>
          
          <?php
          // 新卒採用 時間など
          if(empty($scfs['new_graduate_disabled'])){
            ?>
            <div class="recruitment__content">
              <?php if(!empty($scfs['new_graduate_entry_limit']) || !empty($scfs['new_graduate_selection'])){ ?>
              <div class="recruitment__time flex_box_pc">
                【 新卒採用 】<br class="sp"><?php
                  if(!empty($scfs['new_graduate_entry_limit'])){
                    echo $scfs['new_graduate_entry_limit'];
                  }
                  if(!empty($scfs['new_graduate_entry_limit']) && !empty($scfs['new_graduate_selection'])){
                    ?><br class="sp"><span class="pc">　／　</span><?php
                  }
                  if(!empty($scfs['new_graduate_selection'])){
                    echo $scfs['new_graduate_selection'];
                  }
                  ?>
              </div>
              <?php
              }

              if(!empty($scfs['new_graduate_recruitments'][0]['new_graduate_recruitment_label'])){
                ?>
                <div class="recruitment__list">
                  <?php
                    foreach($scfs['new_graduate_recruitments'] as $k => $v){
                      ?>
                      <dl>
                        <dt><?php echo esc_html($v['new_graduate_recruitment_label']); ?></dt>
                        <dd><?php echo nl2br(esc_html($v['new_graduate_recruitment_contents'])); ?></dd>
                      </dl>
                      <?php
                    }
                  ?>
                </div>
              <?php } ?>

              <div class="recruitment__contact">
                <div class="contact_area">
                  <picture>
                    <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/contact_img_sp.jpg" media="(max-width: 767px)">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/contact_img.jpg" alt="中途採用">
                  </picture>
                  <div class="txt_area">
                    <a href="<?php echo home_url('contact/'); ?>?type=recruit">
                      <div class="sec_tit_box">
                        <h4 class="sec_tit">採用に関するお問い合わせ</h4>
                      </div>
                      <p class="btn_wrap"><span class="btn">お問い合わせフォームへ</span></p>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php
            } else {
              ?>
              <div class="recruitment__content">
                <p class="recruitment__disabled">現在、新卒採用の募集はしておりません。</p>
              </div>
              <?php
            }
          ?>
        </section>


        <?php //中途採用 ?>
        <section id="career" class="recruitment__career">
          <div class="recruitment__title recruitment__career__title">
            <picture class="recruitment__title__img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruitment/career_sp.jpg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruitment/career.jpg" alt="">
            </picture>
            <h2 class="Radley">MID-CAREER</h2>
            <div class="recruitment__subtitle flex_box">中途採用</div>
          </div>
          
          
          <?php
          if(empty($scfs['career_sales_disabled']) || empty($scfs['career_engineer_disabled']) || empty($scfs['career_clerk_disabled'])){
          if(
            !empty($scfs['career_sales_recruitments'][0]['career_sales_recruitment_label'])
            || !empty($scfs['career_engineer_recruitments'][0]['career_engineer_recruitment_label'])
            || !empty($scfs['career_clerk_recruitments'][0]['career_clerk_recruitment_label'])
          ){
            ?>
          <ul class="recruitment__nav recruitment__career__nav flex_box_pc">
            <?php
            if(!empty($scfs['career_sales_recruitments'][0]['career_sales_recruitment_label']) && empty($scfs['career_sales_disabled'])){
              ?><li><a class="flex_box arrow-down" href="#career-sales">営業職</a></li><?php
            }
            if(!empty($scfs['career_engineer_recruitments'][0]['career_engineer_recruitment_label']) && empty($scfs['career_engineer_disabled'])){
            ?><li><a class="flex_box arrow-down" href="#career-engineer">技術職</a></li><?php
            }
            if(!empty($scfs['career_clerk_recruitments'][0]['career_clerk_recruitment_label']) && empty($scfs['career_clerk_disabled'])){
            ?><li><a class="flex_box arrow-down" href="#career-clerk">事務職</a></li><?php
            } ?>
          </ul>
          
          <div class="recruitment__content recruitment__content__career">
            <?php if(!empty($scfs['career_sales_recruitments'][0]['career_sales_recruitment_label']) && empty($scfs['career_sales_disabled'])){ ?>
              <div id="career-sales" class="recruitment__career__job">
                <h3><span class="Radley">Sales position</span>[ 営業職 ]</h3>
                <div class="recruitment__list">
                  <?php
                    foreach($scfs['career_sales_recruitments'] as $k => $v){
                      ?>
                      <dl>
                        <dt><?php echo esc_html($v['career_sales_recruitment_label']); ?></dt>
                        <dd><?php echo nl2br(esc_html($v['career_sales_recruitment_contents'])); ?></dd>
                      </dl>
                      <?php
                    }
                  ?>
                </div>
              </div>
            <?php } ?>

            <?php if(!empty($scfs['career_engineer_recruitments'][0]['career_engineer_recruitment_label']) && empty($scfs['career_engineer_disabled'])){ ?>
              <div id="career-engineer" class="recruitment__career__job">
                <h3><span class="Radley">Engineer position</span>[ 技術職 ]</h3>
                <div class="recruitment__list">
                  <?php
                    foreach($scfs['career_engineer_recruitments'] as $k => $v){
                      ?>
                      <dl>
                        <dt><?php echo esc_html($v['career_engineer_recruitment_label']); ?></dt>
                        <dd><?php echo nl2br(esc_html($v['career_engineer_recruitment_contents'])); ?></dd>
                      </dl>
                      <?php
                    }
                  ?>
                </div>
              </div>
            <?php } ?>

            <?php if(!empty($scfs['career_clerk_recruitments'][0]['career_clerk_recruitment_label']) && empty($scfs['career_clerk_disabled'])){ ?>
              <div id="career-clerk" class="recruitment__career__job">
                <h3><span class="Radley">Clerical position</span>[ 事務職 ]</h3>
                <div class="recruitment__list">
                  <?php
                    foreach($scfs['career_clerk_recruitments'] as $k => $v){
                      ?>
                      <dl>
                        <dt><?php echo esc_html($v['career_clerk_recruitment_label']); ?></dt>
                        <dd><?php echo nl2br(esc_html($v['career_clerk_recruitment_contents'])); ?></dd>
                      </dl>
                      <?php
                    }
                  ?>
                </div>
              </div>
            <?php
              }
            }
            ?>

            <div class="recruitment__contact">
              <div class="contact_area">
                <picture>
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/contact_img_sp.jpg" media="(max-width: 767px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/contact_img.jpg" alt="中途採用">
                </picture>
                <div class="txt_area">
                  <a href="<?php echo home_url('contact/'); ?>?type=recruit">
                    <div class="sec_tit_box">
                      <h4 class="sec_tit">採用に関するお問い合わせ</h4>
                    </div>
                    <p class="btn_wrap"><span class="btn">お問い合わせフォームへ</span></p>
                  </a>
                </div>
              </div>
            </div>

          </div>
          <?php } else { ?>
            <div class="recruitment__content recruitment__content__career">
              <p class="recruitment__disabled">現在、中途採用の募集はしておりません。</p>
            </div>
          <?php } ?>
        </section>

      </div>

    </div>
  </article>
</main><!-- #main -->

<?php
get_footer();