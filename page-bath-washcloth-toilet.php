<?php

/**
Template Name: バス・洗面・トイレ
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
              <p class="mv_tit Radley">BATH-WASHCLOTH-TOILET</p>
              <p class="mv_txt">バス・洗面・トイレ</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">サービス</span>
                  <meta itemprop="position" content="2" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">バス・洗面・トイレ</span>
                  <meta itemprop="position" content="3" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath_washcloth_toilet/bath_washcloth_toilet_sp_mv.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath_washcloth_toilet/bath_washcloth_toilet_mv.jpg" alt="">
          </picture>
        </section>
      </div>
      <!-- mv -->
      <div class="cont_wrap">

        <div class="msg">
          理想のバス・洗面・トイレをプランニングいたします。間取りやスペースに応じるだけではなく、理想や夢をドンドン語ってください。スタッフはあなたと一緒に考えご提案いたします。理想きっと叶います。共にリフォームしてみませんか。
        </div>

        <section class="gas_appliances_wrap">
          <div class="sec_tit_box02">
            <h2 class="sec_tit02 Radley">BATH-WASHCLOTH-TOILET</h2>
            <p class="sec_sbtit02">バス・洗面・トイレのガス機器について</p>
          </div>
          <div class="inner">
            <div class="content_wrap flex_box_pc">
              <div class="content_item">

                <figure class="product_img type02">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath_washcloth_toilet/gas_image01.png" alt="">
                  <figcaption class="Radley sub_ttl">Water Heater</figcaption>
                </figure>
                <dl class="txt_wrap">
                  <dt>給湯器</dt>
                  <dd>従来は捨てていた燃焼ガスの熱をお湯作りに再利用。省エネルギーだから、光熱費もおトクで、CO₂削減、地球温暖化防止にも貢献。</dd>
                </dl>
              </div>
              <div class="content_item">
                <figure class="product_img type02">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath_washcloth_toilet/gas_image02.png" alt="">
                  <figcaption class="Radley sub_ttl">Bathroom Heater Dryer</figcaption>
                </figure>
                <dl class="txt_wrap">
                  <dt>浴室暖房乾燥機（カワック）</dt>
                  <dd>衣類乾燥、浴室乾燥、浴室暖房、涼風もできる1台4役の「カワック」があれば、寒い冬も、梅雨の時も、浴室はいつだって安心快適。</dd>
                </dl>
              </div>
            </div>
            <div class="content_wrap flex_box_pc">
              <div class="content_item">

                <figure class="product_img type02">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath_washcloth_toilet/gas_image03.png" alt="">
                  <figcaption class="Radley sub_ttl">Mist Kawak</figcaption>
                </figure>
                <dl class="txt_wrap">
                  <dt>ミストカワック</dt>
                  <dd>「カワック」より、さらにワンランク上の快適をお求めなら「ミストカワック」を。自宅のお風呂でいつでもエステ気分。</dd>
                </dl>
              </div>
              <div class="content_item">
                <figure class="product_img type02">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath_washcloth_toilet/gas_image04.png" alt="">
                  <figcaption class="Radley sub_ttl">Dressing Room Heating</figcaption>
                </figure>
                <dl class="txt_wrap">
                  <dt>脱衣場暖房</dt>
                  <dd>「ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。ここに本文が入ります。」</dd>
                </dl>
              </div>
            </div>

          </div>
        </section>

        <div class="bnr_box">
          <div class="inner">
            <div class="bnr_txt_box">
              <p class="msg_ttl">ガス機器に関することも<br class="sp">お気軽にお問い合わせください</p>
              <strong class="bnr_ttl">株式会社大津ガスサービスセンター</strong>
            </div>
            <div class="bnr_content_box">
              <div class="tel_box">
                <figure class="product_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/tel.png" alt="">
                </figure>
                <p>
                  <span class="Radley fs_italic tel_no">0120-545-639</span>
                  <small>受付時間／平日9:00-17:30</small>
                </p>
              </div>
              <div class="contact_btn_wrap">
                <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" class="contact_btn">
                  <span class="btn"><strong class="Radley">WEB</strong>でのお問い合わせ</span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- <section class="reform_results" id="reform">
          <div class="sec_tit_box02">
            <h2 class="sec_tit02 Radley">
              REFORM RESULTS
            </h2>
            <p class="sec_sbtit02">
              キッチンダイニングのリフォーム事例
            </p>
          </div>
          <div class="msg">
            <p class="ttl">夏は涼しく、冬は暖かく快適で、<br class="sp">収納豊富なキッチン</p>
            築30年のお宅にお住まいのお客様より「キッチンに作業スペースや収納がなく、ごちゃごちゃしてしまう。夏は暑くて、冬は寒い…」とご相談いただき、収納たっぷりの最新システムキッチンにリフォームさせていただきました。
          </div>
          <div class="inner">
            <div class="card_box">
              <div class="left_content">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform01" alt="">
                  <figcaption class="before">リフォーム前</figcaption>
                </figure>
                <div class="txt_box">
                  <span class="top_txt Radley">Problem point　］</span>
                  <ul class="no_list_item">
                    <li><span class="Radley">01</span>
                      作業スペースが無い
                    </li>
                    <li><span class="Radley">02</span>
                      夏は暑くて、冬は寒い
                    </li>
                    <li><span class="Radley">03</span>
                      収納がなく片付かない
                    </li>
                  </ul>
                </div>
              </div>
              <div class="right_content">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform02" alt="">
                  <figcaption class="after">リフォーム後</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="no_box">
            <div class="inner">
              <p class="point_txt Radley">
                Reform point　］
              </p>
              <ul class="no_list_bottom">
                <li class="list_bottom_item"><strong class="Radley">01</strong> <span>作業台を中央に設置し、<br class="pc">
                    お料理しやすい空間に</span>
                </li>
                <li class="list_bottom_item"><strong class="Radley">02</strong><span>家電収納棚と初期棚で<br class="pc">
                    片付けやすい</span>
                </li>
                <li class="list_bottom_item"><strong class="Radley">03</strong><span>天井エアコンと床暖房で<br class="pc">
                    年中快適な空間に</span>
                </li>
              </ul>
            </div>
          </div>
          <div class="msg no_p">
            キッチン中央に作業スペースをつくり、両サイドに家電専用の収納棚と食器棚を設置することで、すっきりと収納しながらも家事の導線を邪魔しない使い勝手の良い空間に。そして天井エアコンと床暖房を設置し、夏は涼しく、冬は暖かく、いつでも快適にお料理できるキッチンへ生まれ変わりました。
          </div>
        </section> -->

        <!-- <section id="problem_wrap" class="img_ex_wrap">
          <div class="service_box">
            <picture class="service_img">
              <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/reform_wide.jpg" media="(max-width: 767px)">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/reform_wide.jpg" alt="">
            </picture>
          </div>
          <div class="inner">
            <div class="sec_tit_box02 flex_box_pc">
              <h2 class="sec_tit02 Radley">PROBLEM</h2>
              <p class="sec_sbtit02 no_line">キッチンリフォームの「お悩みBEST3」</p>
            </div>
            <div class="problem_content flex_box_pc">
              <div class="content_txt">
                <div class="tit_no_box flex_box_sp">
                  <p class="tit Radley">problem</p>
                  <p class="tit_no Radley"><strong>01</strong></p>
                </div>
                <div class="txt_box">
                  <p class="txt">収納がない！</p>
                </div>
              </div>

              <div class="content_txt">
                <div class="tit_no_box flex_box_sp">
                  <p class="tit Radley">problem</p>
                  <p class="tit_no Radley"><strong>02</strong></p>
                </div>
                <div class="txt_box">
                  <p class="txt">油汚れが<br class="pc">ひどい！</p>
                </div>
              </div>

              <div class="content_txt">
                <div class="tit_no_box flex_box_sp">
                  <p class="tit Radley">problem</p>
                  <p class="tit_no Radley"><strong>03</strong></p>
                </div>
                <div class="txt_box">
                  <p class="txt">作業スペース<br class="pc">がない！</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="before_after_wrap">
          <p class="before_after_ttl">プロのリフォームで<br class="sp">お悩みを解決します！</p>
          <div class="inner">
            <div class="two_column_wrap">
              <div class="before_after_flex_wrap">
                <p class="before_after_txt "><span class="Radley">Before</span><small>リフォーム前</small></p>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform03.jpg" alt="">
                  <figcaption>sample</figcaption>
                </figure>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform04.jpg" alt="">
                  <figcaption>sample</figcaption>
                </figure>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform05.jpg" alt="">
                  <figcaption>sample</figcaption>
                </figure>
              </div>
              <div class="before_after_flex_wrap">
                <p class="before_after_txt "><span class="Radley">After</span><small>リフォーム後</small></p>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform06.jpg" alt="">
                  <figcaption>sample</figcaption>
                </figure>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform07.jpg" alt="">
                  <figcaption>sample</figcaption>
                </figure>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/kitchen_reform08.jpg" alt="">
                  <figcaption>sample</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <div class="no_box">
            <div class="inner">
              <p class="point_txt Radley">
                Reform point　］
              </p>
              <ul class="no_list_bottom">
                <li class="list_bottom_item"><strong class="Radley">01</strong><span>汚れのつきにくい<br class="pc">
                    キッチンパネル</span>
                </li>
                <li class="list_bottom_item"><strong class="Radley">02</strong>引き出し式の収納で<br class="pc">
                  スペースも充実！</span>
                </li>
                <li class="list_bottom_item"><strong class="Radley">03</strong><span>作業スペース設置で<br class="pc">
                    快適にお料理できる</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="bnr_box">
          <div class="inner">
            <div class="bnr_txt_box">
              <p class="msg_ttl">リフォームに関することも<br class="sp">お気軽にお問い合わせください</p>
              <strong class="bnr_ttl">株式会社大津ガスサービスセンター</strong>
            </div>
            <div class="bnr_content_box">
              <div class="tel_box">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/kitchen_dining/tel.png" alt="">
                </figure>
                <p>
                  <span class="Radley fs_italic tel_no">0120-545-639</span>
                  <small>受付時間／平日9:00-17:30</small>
                </p>
              </div>
              <div class="contact_btn_wrap">
                <a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>" class="contact_btn">
                  <span class="btn"><strong class="Radley">WEB</strong>でのお問い合わせ</span>
                </a>
              </div>
            </div>
          </div>
        </div> -->
        <?php
        //$incPart = 'header';
        get_template_part('template-parts/page/contact');
        ?>
      </div>


    </div>
  </article>
</main><!-- #main -->

<?php
get_footer();
