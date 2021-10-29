<?php

/**
Template Name: サービス
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
              <p class="mv_tit Radley">SERVICE MENU</p>
              <p class="mv_txt">サービスメニュー</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">サービスメニュー</span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/service_mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/mv.jpg" alt="サービスメニュー">
          </picture>
        </section>
      </div>
      <!-- mv -->

      <div class="cont_wrap">

        <!-- searvice_wrap -->
        <section id="service_wrap">
          <div class="inner">
            <div class="sec_tit_box02">
              <h2 class="sec_tit02 Radley">PROBLEM</h2>
              <p class="sec_sbtit02">こんな悩みありませんか？</p>
            </div>
          </div>
          <div class="service_content arrow">
            <div class="inner">
              <ul class="problem_list">
                <li class="list_item">
                  <span class="Radley">01</span>
                  コンロが点火しにくい
                </li>
                <li class="list_item">
                  <span class="Radley">02</span>
                  魚を焼いた後の始末が大変
                </li>
                <li class="list_item">
                  <span class="Radley">03</span>
                  焼き網がボロボロ
                </li>
                <li class="list_item">
                  <span class="Radley">04</span>
                  お湯が出ない
                </li>
                <li class="list_item">
                  <span class="Radley">05</span>
                  給湯器の音がうるさい
                </li>
                <li class="list_item">
                  <span class="Radley">06</span>
                  床が冷たい
                </li>
                <li class="list_item">
                  <span class="Radley">07</span>
                  雨の日に洗濯物が乾かない
                </li>
                <li class="list_item">
                  <span class="Radley">08</span>
                  効率的にエネルギーを作りたい
                </li>
                <li class="list_item">
                  <span class="Radley">09</span>
                  キッチンがものであふれている
                </li>
                <li class="list_item">
                  <span class="Radley">10</span>
                  浴室がせまい
                </li>
              </ul>
            </div>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/ploglem01.jpg" alt="こんなお悩みありませんか？">
            </figure>
          </div>
          <span class="arrow"></span>
          <div class="service_content second">
            <h3 class="txt_msg">大津ガスサービスセンターに<br class="pc_hidden">すべてお任せください！</h3>
            <div class="inner">
              <div class="txt_box">
                <p>
                  お客様のライフシーンにピッタリのガス器具を、大阪ガス機器取扱店として豊富な商品ラインナップからお選びいただけます。もちろん、当店にお問い合わせいただきましたら、商品のご説明、その商品を利用するメリットなど、お客様の「知りたいこと」を詳しくご説明致します。
                </p>
                <p>
                  さあ、大阪ガスのガス器具を、賢く選んで、快適な毎日を過ごしてみませんか。
                </p>
              </div>
            </div>
            <figure>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/service_kitchen.jpg" alt="">
            </figure>
          </div>

          <div class="service_desc_box">
            <div class="inner">
              <div class="desc_list">
                <div class="header_ttl Radley Radley">
                  <span class="desc_no">
                    01
                  </span>
                  Kitchen-Dining
                </div>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/kitchen.jpg" alt="">
                </figure>
                <div class="desc_ttl">キッチン・ダイニング</div>
                <p class="desc_txt">
                  今どきキッチンは、キレイに加えて「収納タップリ」「おそうじカンタン」「省エネ設計」つまり“ラク家事”がギューっと詰まった優れもの“おいしい”が聞こえてきませんか？
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('service/kitchen-dining')->ID); ?>" class="line_link"> <span class="btn">詳細はこちら</span></a>
              </div>
              <div class="desc_list">
                <div class="header_ttl Radley">
                  <span class="desc_no">
                    02
                  </span>
                  Bath-Washcloth-Toilet
                </div>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/bath.jpg" alt="">
                </figure>
                <div class="desc_ttl">バス・洗面・トイレ</div>
                <p class="desc_txt">
                  最新機種は、汚れがつきにくい素材を使用していたり勝手におそうじする機能が付いていたり・・・。めんどうなおそうじを助ける機能が盛りだくさん。実は、節水効果や保温効果なども充実しており、省エネ効果も優れています。
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('service/bath-washcloth-toilet')->ID); ?>" class="line_link"> <span class="btn">詳細はこちら</span></a>
              </div>
              <div class="desc_list">
                <div class="header_ttl Radley">
                  <span class="desc_no">
                    03
                  </span>
                  Energy saving
                </div>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/enerugy.jpg" alt="">
                </figure>
                <div class="desc_ttl">省エネ対策</div>
                <p class="desc_txt">
                  自宅で発電される方はどんどん増えています。脱炭素社会に貢献、防災対策、省エネ効果期待など。時代のニーズにマッチしたラインナップをあなたの暮らしに合わせて提案します。
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('service/energy-saving')->ID); ?>" class="line_link"> <span class="btn">詳細はこちら</span></a>
              </div>
              <div class="desc_list">
                <div class="header_ttl Radley">
                  <span class="desc_no">
                    04
                  </span>
                  Service-Other
                </div>
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/service_other.jpg" alt="">
                </figure>
                <div class="desc_ttl">サービス・その他</div>
                <p class="desc_txt">
                  ガスの開閉栓からガス・電気取扱いなどのエネルギーに関するサービス、ガス機器販売やリフォームなど暮らしにまつわる業務を取り扱っております。
                </p>
                <a href="<?php echo get_permalink(get_page_by_path('service/service-other')->ID); ?>" class="line_link"> <span class="btn">詳細はこちら</span></a>
              </div>
            </div>
          </div>
        </section>

        <!-- result -->
        <section class="results_wrap">
          <div class="sec_tit_box02">
            <h2 class="sec_tit02 Radley">RESULTS</h2>
            <p class="sec_sbtit02">たくさんのリフォーム実績がある理由</p>
          </div>
          <div class="inner">
            <div class="result_content_wrap">
              <div class="result_content_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/result01.jpg" alt="">
                  <figcaption class="Radley">Reform results</figcaption>
                </figure>
                <div class="result_txt_box">
                  <h4 class="result_ttl">約38万件の実績</h4>
                  <p class="result_txt">
                    2021年1月時点で累計約38万件の実績が信頼の証です。大阪ガスサービスチェーンが手掛けたリフォームは、累計で約38万件にものぼります。<br />
                    豊富な実績と経験を生かして、皆さまの夢を叶える信頼のリフォームをお届けします。
                  </p>
                </div>
              </div>
              <div class="result_content_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/result02.jpg" alt="">
                  <figcaption class="Radley">Customer satisfaction</figcaption>
                </figure>
                <div class="result_txt_box">
                  <h4 class="result_ttl">約90％の高い満足度</h4>
                  <p class="result_txt">
                    リフォーム完了後のお客様アンケートでは、約9割のお客さまにご満足いただいています。リフォームのご相談からプランニング、工事、アフターケアまで、一つひとつのステップできめ細やかにお応えする大阪ガスサービスチェーンのリフォームは、お客さまにもご好評いただいています。
                  </p>
                  <small>※2020年4月～2021年1月リフォームお客さまアンケート回答総数2,791件</small>
                </div>
              </div>
              <div class="result_content_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/result03.jpg" alt="">
                  <figcaption class="Radley">Community-based</figcaption>
                </figure>
                <div class="result_txt_box">
                  <h4 class="result_ttl">近くて安心</h4>
                  <p class="result_txt">
                    キッチンや浴室をはじめ水まわりを知りつくしたリフォームのプロだからこそ、お客様にぴったりの満足度の高いリフォームプランをお届けすることができます。大津に根ざして、快適な暮らしをサポートしていますので、細やかでていねいなアフターケアをお届けすることができます。
                  </p>
                </div>
              </div>
              <div class="result_content_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/result04.jpg" alt="">
                  <figcaption class="Radley">Polite response</figcaption>
                </figure>
                <div class="result_txt_box">
                  <h4 class="result_ttl">ていねいな対応</h4>
                  <p class="result_txt">
                    リフォームのプロである大阪ガスサービスチェーンが、親切な提案・設計でお客様の夢を確かなカタチに。幅広い最新商品の中からお客様の暮らしにベストフィットな設備機器もお選びいただけます。また、数多くの実績と経験を積んだスタッフによる、高品質な施工と万全のチェック体制でご対応します。地域密着だからこそ、リフォーム後も快適な暮らしを見守り続けます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="reform_wrap">
          <div class="inner">
            <p class="reform_ttl">
              <strong class="Radley">Reform results</strong>
              <small>リフォーム事例はこちら</small>
            </p>
            <div class="reform_list">
              <a href="<?php echo get_permalink(get_page_by_path('service/kitchen-dining')->ID); ?>#reform" class="reform_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/reform01.jpg" alt="">
                  <figcaption class="line_link btn">キッチン・ダイニング</figcaption>
                </figure>
              </a>
              <a href="<?php echo get_permalink(get_page_by_path('service/page-bath-washcloth-toilet')->ID); ?>" class="reform_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/reform02.jpg" alt="">
                  <figcaption class="line_link btn">バス・洗面・トイレ</figcaption>
                </figure>
              </a>
              <a href="<?php echo get_permalink(get_page_by_path('service/energy-saving')->ID); ?>" class="reform_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/reform03.jpg" alt="">
                  <figcaption class="line_link btn">省エネ対策</figcaption>
                </figure>
              </a>
              <a href="<?php echo get_permalink(get_page_by_path('service/other-service')->ID); ?>" class="reform_item">
                <figure>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/service/reform04.jpg" alt="">
                  <figcaption class="line_link btn">サービス・その他</figcaption>
                </figure>
              </a>
            </div>
          </div>
        </section>

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
