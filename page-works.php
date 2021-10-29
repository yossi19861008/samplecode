<?php

/**
Template Name: 仕事紹介
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
              <p class="mv_tit Radley">WORKS</p>
              <p class="mv_txt">仕事紹介</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">採用情報</span>
                  <meta itemprop="position" content="2" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">仕事紹介</span>
                  <meta itemprop="position" content="3" />
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

        <div class="page_link_box">
          <ul class="page_link_list">
            <li><a href="#sales_wrap" class="page_link_btn">営業職</a></li>
            <li><a href="#engineer" class="page_link_btn">技術職</a></li>
            <li><a href="#clerical" class="page_link_btn">事務職</a></li>
          </ul>
        </div>
        <!-- page-link -->

        <section id="sales_wrap" class="career_jenre_wrap">
          <div class="sec_img_box">
            <figure>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/add_img/recruit/works/schedule_sp01.jpg;" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/add_img/recruit/works/schedule01.jpg;" alt="">
              </picture>
            </figure>
            <div class="sec_txt_box">
              <p class="sec_txt Radley">SALES POSITION</p>
              <div class="sec_btn_box">
                <a href="">営業職</a>
              </div>
            </div>
          </div>
          <!-- sec_img -->
          <div class="txt_img_box">
            <div class="inner">
              <div class="txt_img_flex flex_box_pc">
                <div class="txt_box">
                  <h2 class="txt_ttl">最前線でお客さまと接する業務<br>暮らしの快適を提案いたします</h2>
                  <p class="txt">
                    営業職は、ガス・電気を通じてお住いの快適を提案し、豊かな暮らしをかたちにします。これは、お客さま一人ひとりの理想をしっかりと共有することができ、技術メンバーとも連携を図ることができなければ実現できません。
                  </p>
                  <p class="txt">
                    行動力とコミュニケーション力をフルに発揮できる大津ガスサービスセンターで共に夢を語りませんか。
                  </p>
                </div>
                <figure class="img_box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule02.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
          <!-- txt_img_box -->

          <div class="schedule_box">
            <div class="schedule_ttl_box">
              <h4 class="schedule_ttl"><strong class="Radley">Schedule</strong><span class="sub_ttl">１日のスケジュール</span></h4>
            </div>
            <p class="works_jenre"> <span class="jenre">営業職</span> 新規開発事業部 大津支店 サブリーダー<br class="sp">（入社2年目）の１日の仕事の流れ</p>
            <div class="schedule_flex_box flex_box_pc">
              <div class="schedule_time">
                <dl>
                  <dt class="time">8:30</dt>
                  <dd class="time_txt">出社・朝礼挨拶の発声・予定確認・本日の予定報告</dd>
                </dl>
                <dl>
                  <dt class="time">9:00</dt>
                  <dd class="time_txt">午前中メールチェック・書類整理・その他事務処理</dd>
                </dl>
                <dl>
                  <dt class="time">10:00</dt>
                  <dd class="time_txt">既存取引先の訪問<br>本社から事前にスケジュールを組んだハウスメーカー、不動産会社へ伺います</dd>
                </dl>
                <dl>
                  <dt class="time">12:00</dt>
                  <dd class="time_txt">ランチ<br>午後の予定に合わせて、社内や訪問先近くのお店で食事をとります</dd>
                </dl>
                <dl>
                  <dt class="time">13:00</dt>
                  <dd class="time_txt">新規開拓営業定期訪問でご紹介いただいた不動産会社やアパートオーナーへご挨拶</dd>
                </dl>
                <dl>
                  <dt class="time">15:00</dt>
                  <dd class="time_txt">打ち合わせ新規建築予定現場で関係業者とガス納入について打ち合わせ</dd>
                </dl>
                <dl>
                  <dt class="time">17:00</dt>
                  <dd class="time_txt">帰社上司に本日の報告をし、明日の準備を済ませます</dd>
                </dl>
                <dl>
                  <dt class="time">17:30</dt>
                  <dd class="time_txt">退社</dd>
                </dl>
              </div>

              <div class="schedule_flow_box">
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule03.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">01</strong>１日の行動計画</p>
                    <p class="schedule_r_txt">
                      予定確認・本日の予定報告<br>
                      メールチェック・書類整理・事務処理
                    </p>
                  </div>
                </div>
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule04.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">02</strong>既存取引先の訪問</p>
                    <p class="schedule_r_txt">
                      要件に応じてプレゼンテーション
                    </p>
                  </div>
                </div>
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule05.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">03</strong>帰社上司に本日の報告</p>
                    <p class="schedule_r_txt">
                      他部署と情報共有し関係業者へ発注など事務整理をし、明日の準備を済ませる
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>



        <section id="engineer" class="career_jenre_wrap">
          <div class="sec_img_box">
            <figure>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/add_img/recruit/works/engineer_sp01.jpg;" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/add_img/recruit/works/engineer01.jpg;" alt="">
              </picture>
            </figure>
            <div class="sec_txt_box">
              <p class="sec_txt Radley">ENGINEER POSITION</p>
              <div class="sec_btn_box">
                <a href="">技術職</a>
              </div>
            </div>
          </div>
          <!-- sec_img -->
          <div class="txt_img_box">
            <div class="inner">
              <div class="txt_img_flex flex_box_pc reverse">
                <div class="txt_box">
                  <h2 class="txt_ttl">縁の下の力持ち<br>暮らしの安心安全はお任せください</h2>
                  <p class="txt type01">
                    技術職は、生活と密接する住まいの設備やリフォームを通じてお客さまに快適を提供いたします。これは、日々の業務をコツコツと積み重ねることがお客さまの笑顔につながります。
                  </p>
                  <p class="txt">
                    また、営業職や事務職との連携が必要なシーンも多くひとつの業務をチームで達成した時は感動も大きい。丁寧な仕事を継続する粘り強さとコミュニケーション力をフルに発揮できる大津ガスサービスセンターで共に夢を語りませんか。
                  </p>
                </div>
                <figure class="img_box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/engineer02.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
          <!-- txt_img_box -->

          <div class="schedule_box">
            <div class="schedule_ttl_box">
              <h4 class="schedule_ttl"><strong class="Radley">Schedule</strong><span class="sub_ttl">１日のスケジュール</span></h4>
            </div>
            <p class="works_jenre"> <span class="jenre">技術職</span> 施工サポート部 大津支店<br class="sp">（入社1年目）の１日の仕事の流れ</p>
            <div class="schedule_flex_box flex_box_pc reverse">
              <div class="schedule_time">
                <dl>
                  <dt class="time">8:30</dt>
                  <dd class="time_txt">出社・朝礼挨拶の発声・予定確認・本日の予定報告</dd>
                </dl>
                <dl>
                  <dt class="time">9:00</dt>
                  <dd class="time_txt">午前中メールチェック・書類整理・その他事務処理</dd>
                </dl>
                <dl>
                  <dt class="time">10:00</dt>
                  <dd class="time_txt">既存取引先の訪問<br>
                  本社から事前にスケジュールを組んだハウスメーカー、不動産会社へ伺います</dd>
                </dl>
                <dl>
                  <dt class="time">12:00</dt>
                  <dd class="time_txt">ランチ<br>午後の予定に合わせて、社内や訪問先近くのお店で食事をとります</dd>
                </dl>
                <dl>
                  <dt class="time">13:00</dt>
                  <dd class="time_txt">新規開拓営業定期訪問でご紹介いただいた不動産会社やアパートオーナーへご挨拶</dd>
                </dl>
                <dl>
                  <dt class="time">15:00</dt>
                  <dd class="time_txt">打ち合わせ新規建築予定現場で関係業者とガス納入について打ち合わせ</dd>
                </dl>
                <dl>
                  <dt class="time">17:00</dt>
                  <dd class="time_txt">帰社上司に本日の報告をし、明日の準備を済ませます</dd>
                </dl>
                <dl>
                  <dt class="time">17:30</dt>
                  <dd class="time_txt">退社</dd>
                </dl>
              </div>
              <div class="schedule_flow_box">
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule03.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">01</strong>１日の行動計画</p>
                    <p class="schedule_r_txt">
                      予定確認・本日の予定報告<br>
                      メールチェック・書類整理・事務処理
                    </p>
                  </div>
                </div>
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule04.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">02</strong>既存取引先の訪問</p>
                    <p class="schedule_r_txt">
                      要件に応じてプレゼンテーション
                    </p>
                  </div>
                </div>
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/schedule05.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">03</strong>帰社上司に本日の報告</p>
                    <p class="schedule_r_txt">
                      他部署と情報共有し関係業者へ発注など事務整理をし、明日の準備を済ませる
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section id="clerical" class="career_jenre_wrap">
          <div class="sec_img_box">
            <figure>
              <picture>
                <source srcset="<?php echo get_template_directory_uri() ?>/assets/add_img/recruit/works/jimu_sp00.jpg;" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri() ?>/assets/add_img/recruit/works/jimu00.jpg;" alt="">
              </picture>
            </figure>
            <div class="sec_txt_box">
              <p class="sec_txt Radley">CLERICAL POSITION</p>
              <div class="sec_btn_box">
                <a href="">事務職</a>
              </div>
            </div>
          </div>
          <!-- sec_img -->
          <div class="txt_img_box">
            <div class="inner">
              <div class="txt_img_flex flex_box_pc">
                <div class="txt_box">
                  <h2 class="txt_ttl">お客さまに笑顔で応対<br>電話問い合わせやショールーム接客<br>社内ナンバー１を目指して</h2>
                  <p class="txt">
                    事務職は、商品の受発注手配からお客さまの接客応対、営業・技術メンバーとの連携業務など幅広く活躍するステージが存在。
                    つまり会社の要的存在になります。
                    スキルアップは、お客さまや会社へ貢献につながります。
                  </p>
                  <p class="txt">
                  コツコツ慎重に積み上げ型？それとも創意工夫を凝らしてアイデアひらめき型？あなたらしさが発揮できる大津ガスサービスセンターで共に夢を語りませんか。
                  </p>
                </div>
                <figure class="img_box">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/jimu01.jpg" alt="">
                </figure>
              </div>
            </div>
          </div>
          <!-- txt_img_box -->

          <div class="schedule_box">
            <div class="schedule_ttl_box">
              <h4 class="schedule_ttl"><strong class="Radley">Schedule</strong><span class="sub_ttl">１日のスケジュール</span></h4>
            </div>
            <p class="works_jenre"> <span class="jenre">事務職</span> 直売業務統括部 都市ガス事務センター<br class="sp">（入社3年目）の１日の仕事の流れ</p>
            <div class="schedule_flex_box flex_box_pc">
              <div class="schedule_time">
                <dl>
                  <dt class="time">8:30</dt>
                  <dd class="time_txt">出社・朝礼挨拶の発声、メールチェック・返信、契約書類のデータ制作、ネット経由の都市ガスの申し込み全般受付・問い合わせ、電話対応</dd>
                </dl>
                <dl>
                  <dt class="time">12:40</dt>
                  <dd class="time_txt">ランチ<br>お昼は問い合わせが特に集中する時間<br>
                  同僚と協力し合い、交代制で休憩します</dd>
                </dl>
                <dl>
                  <dt class="time">13:30</dt>
                  <dd class="time_txt">事務処理・電話応対午前中の業務に加えお客さまの申し込み登録作業</dd>
                </dl>
                <dl>
                  <dt class="time">15:00</dt>
                  <dd class="time_txt">書類戻り・問い合わせ・電話対応など</dd>
                </dl>
                <dl>
                  <dt class="time">17:30</dt>
                  <dd class="time_txt">退社業務の優先順位を見極めて、効率よく仕事を終えます</dd>
                </dl>
              </div>

              <div class="schedule_flow_box">
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/jimu02.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">01</strong>受付対応</p>
                    <p class="schedule_r_txt">
                      ネット経由の都市ガスの申込み、全般受付・問い合わせ、電話対応
                    </p>
                  </div>
                </div>
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/jimu03.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">02</strong>ランチ</p>
                    <p class="schedule_r_txt">
                      お昼は問い合わせが特に集中する時間<br>
                      同僚と協力し合い、交代制で休憩
                    </p>
                  </div>
                </div>
                <div class="schedule_inner_flex">
                  <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/recruit/works/jimu04.jpg" alt=""></figure>
                  <div class="scdule_flow_txt_box">
                    <p class="schedule_r_ttl"><strong class="Radley">03</strong>パソコン業務</p>
                    <p class="schedule_r_txt">
                      事務処理・電話応対午前中の業務に加えお客さまの申し込み登録作業
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


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
                  <a href="">
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
                  <a href="">
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
                <a href="">
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
      </div>


    </div>
  </article>
</main><!-- #main -->

<?php
get_footer();
