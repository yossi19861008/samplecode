<?php
/**
Template Name: front-page
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
        <section id="mv">
        <div class="inner">
          <h1 class="mv_logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/mv_logo.svg" alt="<?php bloginfo('name')?>"></h1>
          <p class="mv_txt01"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/mv_txt01.svg" alt="お客様の暮らしを"></p>
          <div class="mv_txt_list flex_box">
            <p class="mv_txt02"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/mv_txt02.svg" alt="もっと快適に"></p>
            <p class="mv_txt03"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/mv_txt03.svg" alt="もっと便利に"></p>
          </div>
        </div>
        <p class="scroll_btn_wrap Radley">
          <a href="#important" class="scroll_btn"><span>SCROLL DOWN</span></a>
        </p>
         <figure class="mv_img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/mv_img_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/mv_img.jpg" alt="">
          </picture>
        </figure>
      </section>
      </div>
      <!-- mv -->
      <div class="cont_wrap">
        <section id="important" class="news_area">
        <?php 
        $args = array(
          'posts_per_page' => 2,
          'cat' => 2
        );
        $myposts = new WP_Query($args);
        if($myposts->have_posts()):
        ?>
        <div class="inner flex_box_pc">
          <div class="sec_tit_box">
            <h2 class="sec_tit">重要なお知らせ</h2>
            <p class="sec_subtit Radley">IMPORTANT</p>
          </div>
          <ul class="important_list news_list">
             <?php
            while($myposts->have_posts()): $myposts->the_post();
            $terms = get_the_terms($post->ID, 'category');
//            echo '<pre>';
//            print_r($terms);
//            echo '</pre>';
            ?>
            <li>
              <div class="post_head flex_box">
                <ul class="cat_list flex_box">
                  <?php foreach($terms as $term){ ?>
                  <li class="cat_<?php echo $term->slug; ?>"><a href="<?php echo get_category_link( $term->term_id ); ?>"><?php echo $term->name; ?></a></li>
                  <?php } ?>
                </ul>
                <p class="date Radley"><?php the_time('Y.m.d')?></p>
              </div>
              <p class="post_tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php endif; ?>
      </section>
        <!-- important -->
        
        <section id="intro">
        <div class="intro_area">
          <div class="inner">
            <div class="txt_area">
              <h2 class="intro_tit">お客さま満足最優先！<br>快適な暮らしをお届けします。</h2>
              <p class="intro_txt">様々な生活様式や暮らし方に応じて、みなさまにより良いご提案をし続けるため<br>エネルギー会社として、地元大津市の企業として、地域のパートナーとして<br>みなさまに寄り添い日々の活動に精進いたします。</p>
              
              <p class="btn_wrap"><a href="" class="btn"><span>詳細はこちら</span></a></p>
            </div>
            <figure class="intro_bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/intro_bg.svg" alt=""></figure>
          </div>
        </div>
        <figure class="intro_img">
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/intro_img_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/intro_img.jpg" alt="">
          </picture>
        </figure>
      </section>
        
        <section id="service">
        <?php 
        $serviceMenuArr = [
          'kitchen-dining' =>[
            'jaTit' => 'キッチン・ダイニング',
            'enTit' => 'KITCHEN-DINING',
            'txt' => [
              '今どきのキッチンは、キレイに加えて「収納タップリ」「おそうじカンタン」「省エネ設計」<br>つまり“ラク家事”がギューっと詰まった優れもの。スタイリッシュな生活を手に入れませんか？',
              'ご存知ですか？キッチンの取替目安は約15〜20年。お気軽にご相談ください。'
              ]
          ],
          'bath-washcloth-toilet' =>[
            'jaTit' => 'バス・洗面・トイレ',
            'enTit' => 'BATH-WASHCLOTH-TOILET',
            'txt' => [
              '水回りは特に清潔にしておきたい場所ナンバー１<br>最新機種は、汚れがつきにくい素材を使用していたり勝手におそうじする機能が付いていたり・・・。<br>めんどうなおそうじを助ける機能が盛りだくさん。<br>実は、節水効果や保温効果なども充実した省エネ効果も優れています。',
              'ご存知ですか？システムバスの取替目安は約15〜20年。トイレや洗面化粧台の取替目安は約15年。<br>寿命以外に省エネ効果を期待して入替される方も多いですよ。'
            ]
          ],
          'energy-saving' =>[
            'jaTit' => '省エネ対策',
            'enTit' => 'ENERGY SAVING',
            'txt' => [
              '自宅で発電される方はどんどん広がっています。<br>脱炭素社会に貢献、防災対策、省エネ効果期待など。<br>時代のニーズにマッチしたラインナップはあなたの暮らしに合わせてフィットします。',
              'ご存知ですか？発電する給湯器エネファームは停電時に約500w発電しシャワーも使えるんです。'
            ]
          ],
          'service-other' =>[
            'jaTit' => 'サービス・その他',
            'enTit' => 'SERVICE-OTHER',
            'txt' => [
              'ガスの開閉栓から電気取扱いなどエネルギーに関するサービスから、<br>ガス機器販売やリフォームなど暮らしにまつわる業務を取り扱っております。',
              'ご存知ですか？地域密着型サービスとして、お電話1本で直ちに駆けつけて一次対応いたします。<br>（申込時間によっては翌日となる場合有）'
            ]
          ],
        ];
        foreach($serviceMenuArr as $slug => $serviceMenu){ ?>
        <div class="service_box <?php echo $slug?>_box">
          <div class="inner">
            <div class="tit_box">
              <h3 class="service_tit"><?php echo $serviceMenu['jaTit']; ?></h3>
              <p class="service_subtit Radley"><?php echo $serviceMenu['enTit']; ?></p>
            </div>
            <div class="txt_area aco_cont" id="<?php echo $slug?>_txt">
              <div class="txt_box">
                <?php foreach($serviceMenu['txt'] as $txt){ ?>
                <p class="txt"><?php echo $txt; ?></p>
                <?php } ?>
              </div>
              <p class="btn_wrap"><a href="<?php echo get_permalink( get_page_by_path( 'service/'.$slug )->ID ); ?>" class="btn">詳細はこちら</a></p>
            </div>
            <a href="#<?php echo $slug?>_txt" class="aco_btn open_btn">
              <span></span>
              <span></span>
            </a>
            <a href="#<?php echo $slug?>_txt" class="aco_btn close_btn">
              <span></span>
              <span></span>
            </a>
          </div>
          <figure class="service_img <?php echo $slug?>_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/<?php echo $slug?>_bg.jpg" alt="<?php echo $serviceMenu['jaTit']; ?>">
          </figure>
        </div>
        <?php } ?>
      </section>
        
        <div class="sec_wrap flex_box_pc">
        <section id="company">
          <div class="txt_area">
            <a href="<?php echo get_permalink( get_page_by_path( 'company' )->ID ); ?>" >
            <div class="sec_tit_box">
              <h2 class="sec_tit">会社概要</h2>
              <p class="sec_subtit Radley">COMPANY</p>
            </div>
            <p class="txt pc">創業以来「安心」「安全」を第一に<br>地域密着で寄り添います。<br>これからも選ばれ続けるための<br>努力は惜しみません。</p>
            <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
            </a>
          </div>
           <figure class="bg_img company_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company_bg.jpg" alt="会社概要">
          </figure>
        </section>
        <section id="recruit">
          <div class="txt_area">
            <a href="<?php echo get_permalink( get_page_by_path( 'recruit' )->ID ); ?>">
            <div class="sec_tit_box">
              <h2 class="sec_tit">採用情報</h2>
              <p class="sec_subtit Radley">RECRUIT</p>
            </div>
            <p class="txt pc">お客さまの要望に応えるために<br>様々な職種を募集しています。<br>各募集詳細や選考の流れにつきましては<br>こちらよりご覧ください。</p>
              <p class="btn_wrap"><span class="btn">詳細はこちら</span></p>
              </a>
          </div>
           <figure class="bg_img recruit_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit_bg.jpg" alt="採用情報">
          </figure>
        </section>
      </div>
        <section id="news" class="news_area second">
        <?php 
        $args = array(
          'posts_per_page' => 5,
          'category__not_in' => [2]
        );
        $myposts = new WP_Query($args);
        if($myposts->have_posts()):
        ?>
        <div class="inner flex_box_pc">
          <div class="sec_tit_box">
            <h2 class="sec_tit">お知らせ</h2>
            <p class="sec_subtit Radley">NEWS</p>
            <p class="btn_wrap"><a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn">一覧を見る</a></p>
          </div>
          <ul class="news_list">
             <?php
            while($myposts->have_posts()): $myposts->the_post();
            $terms = get_the_terms($post->ID, 'category');
            ?>
            <li>
              <div class="post_head flex_box">
                <ul class="cat_list flex_box">
                  <?php foreach($terms as $term){ ?>
                  <li class="cat_<?php echo $term->slug; ?>"><a href="<?php echo get_category_link( $term->term_id ); ?>"><?php echo $term->name; ?></a></li>
                  <?php } ?>
                </ul>
                <p class="date Radley"><?php the_time('Y.m.d')?></p>
              </div>
              <p class="post_tit"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </li>
            <?php endwhile; ?>
          </ul>
        </div>
        <?php endif; ?>
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
