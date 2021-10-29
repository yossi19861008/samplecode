<?php

/**
Template Name: 会社概要
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
              <p class="mv_tit Radley">COMPANY PROFILE</p>
              <p class="mv_txt">会社概要</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">会社概要</span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/mv.jpg" alt="会社概要">
          </picture>
        </section>
      </div>
      <!-- mv -->
      <div class="cont_wrap">
        <section id="greeting_wrap">
          <div class="inner">
            <div class="sec_tit_box02">
              <h2 class="sec_tit02 Radley">GREETING</h2>
              <p class="sec_sbtit02">ごあいさつ</p>
            </div>
          </div>
          <div class="two_col_box flex_box_pc">
            <div class="txt_area left_box">
              <div class="tit_txt_box common_txt_area">
                <div class="tit_box">
                  <h3 class="tit">『まちのガス屋さん』</h3>
                </div>
                <p class="txt">
                  大津のお客さまに気軽にお声がけ頂ける『まちのガス屋さん』。私が持ち続けている会社のイメージです。
                  代表取締役の大平浩史です。
                  おかげさまで弊社は今年の６月で創立２８年となり、この地で創業以来、安心・安全を第一に、ガス機器のメンテナンスから販売施工までの一貫した体制と、システムキッチン・システムバスを軸としたリフォームにも力を入れ、地域の皆様に密着した活動を展開しています。
                  どんなに機器が進歩し、また周囲の環境が変化しても、私たちの目指すところは
                  「お客さまに心からよろこんでいただけるサービスがいつでもできるような会社をつくりあげよう」の精神です。
                  この言葉は、初代社長のモットーであり、創業以来、連綿と受け継がれて来ました。
                </p>
              </div>
            </div>
            <div class="img_box right_box">
              <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/greeting_img_sp.jpg" media="(max-width: 767px)">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/greeting_img.jpg" alt="お客様の暮らしを「もっと快適に」「もっと便利に」">
              </picture>
            </div>
          </div>
          <div class="inner">
            <div class="ceo_coment">
              <p class="txt">お客さまのお困りごとに　私たちでしか出来ないことがあります。</p>
              <p class="txt">
                社員一人ひとりが、自分の限界を決めることなく、更なる高みに向けて、チャレンジし、自ら考え行動し、本気で取り組んでいます。
                人とのつながりが薄らいでゆく社会の中で、人のぬくもりが感じられるようにお客さまと向き合った活動を心掛け、冒頭でも申し上げたように、『まちのガス屋さん』を目指しております。
                そして、社員やその家族のみならず、弊社と関わりのあるすべての人たちに、安心感と満足感を与え続けられる会社でありたいと考えています。
                そうあるために、今日、そして明日へと私は勇往邁進してまいります。
              </p>
              <figure class="ceo_sign"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/name.svg" alt="代表取締役社長 大平浩史"></figure>
            </div>
          </div>
        </section>
        <!-- greeting_wrap -->

        <section id="cp_wrap">
          <div class="inner">
            <div class="sec_tit_box02">
              <h2 class="sec_tit02 Radley">COMPANY PROFILE</h2>
              <p class="sec_sbtit02">会社概要</p>
            </div>
            <table class="row_table">
              <tbody>
                <tr>
                  <th>商&emsp;号</th>
                  <td>株式会社大津ガスサービスセンター</td>
                </tr>
                <tr>
                  <th>本社所在地</th>
                  <td>〒520-0043&emsp;滋賀県大津市中央三丁目2番3号</td>
                </tr>
                <tr>
                  <th>フリーダイヤル</th>
                  <td>0120-545-639</td>
                </tr>
                <tr>
                  <th>電話番号</th>
                  <td>077-523-1112（代）</td>
                </tr>
                <tr>
                  <th>FAX番号</th>
                  <td>077-525-7319</td>
                </tr>
                <tr>
                  <th>代表者</th>
                  <td>代表取締役社長&emsp;大平浩史</td>
                </tr>
                <tr>
                  <th>設&emsp;立</th>
                  <td>平成5年6月3日</td>
                </tr>
                <tr>
                  <th>資本金</th>
                  <td>5,000万円</td>
                </tr>
                <tr>
                  <th>業務内容</th>
                  <td>
                    <ul class="content_list">
                      <li>1.ガス器具の販売及び施工</li>
                      <li>2.ガス器具、設備の保守サービス業務</li>
                      <li>3.リフォーム全般</li>
                      <li>4.ガス消費者に対する安全点検業務</li>
                      <li>5.大津市企業局からの委託業務</li>
                      <li>6.びわ湖ブルーエナジーからの業務委託</li>
                      <li>7.大阪ガス電気代理業務</li>
                      <li>8.びわ湖ブルーエナジーガス代理業務</li>
                      <li>9.水道・ガス設備の設計及び施工</li>
                      <li>10.水道・ガス施設（本管・支管・供給管等）の設計</li>
                      <li>11.建築・土木工事の設計及び施工監理の請負</li>
                      <li>12.前各号に附帯関連する一切の業務</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>従業員</th>
                  <td>49人（令和3年7月現在）※嘱託・パート含む</td>
                </tr>
                <tr>
                  <th>登録・許可等</th>
                  <td>
                    <ul class="registration_list">
                      <li>滋賀県知事許可（般-1）第12761号<br class="sp">（建築工事業、管工事業、土木工事業）</li>
                      <!-- <li>滋賀県知事許可（般-27）第12761号（土木工事業）</li> -->
                      <li>大津市指定ガス工事店（第1種）</li>
                      <li>大津市指定給水装置工事事業者</li>
                      <li>大津市下水道排水設備指定工事店</li>
                      <li>大阪ガスエックス施工店</li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <th>各店の所在地</th>
                  <td>
                    <dl class="location_area">
                      <dt>［ 中央店 ］</dt>
                      <dd>〒520-0043　滋賀県大津市中央三丁目2番3号<br>電話：077-523-1112</dd>
                      <dt>［ 瀬田店 ］</dt>
                      <dd>〒520-2141　滋賀県大津市大江四丁目18番16号<br>電話：077-543-4430</dd>
                      <dt>［ 保安部 ］</dt>
                      <dd>〒520-0043　滋賀県大津市中央三丁目7番8号<br>電話：077-523-2866</dd>


                    </dl>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
        <!-- cp_wrap -->


        <section id="service_area_wrap">
          <div class="inner">
            <div class="sec_tit_box02">
              <h2 class="sec_tit02 Radley">SERVICE AREA</h2>
              <p class="sec_sbtit02">サービスエリア 店舗一覧</p>
            </div>
          </div><!-- inner -->
          <div class="map_area">
            <div class="inner">
              <div class="map_box flex_box_pc">
                <picture class="map_img">
                  <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/servce_area_img_sp.svg" media="(max-width: 767px)">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/servce_area_img.svg" alt="サービスエリア 店舗一覧">
                </picture>
                <div class="store_area flex_box_sp">
                  <div class="store_box">
                    <p class="tit"><span class="Radley">Chuo store</span>中央店</p>
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/service_srore_img01.jpg" alt="中央店"></figure>
                    <p class="store_btn chuo_btn"><a href="#chuo">詳細はこちら</a></p>
                  </div>
                  <div class="store_box">
                    <p class="tit"><span class="Radley">Seta store</span>瀬田店</p>
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/service_srore_img02.jpg" alt="瀬田店"></figure>
                    <p class="store_btn seda_btn"><a href="#seta">詳細はこちら</a></p>
                  </div>
                </div>
              </div>
            </div><!-- inner -->
          </div><!-- map_area -->
          <div class="store_content_area" id="chuo">
            <div class="store_content inner">
              <div class="store_tit_box flex_box_pc">
                <h3 class="store_tit Radley">Chuo store</h3>
                <p class="store_sbtit">大津ガスサービスセンター 中央店</p>
              </div>
              <div class="store_img_box flex_box">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/service_srore_img03.jpg" alt="大津ガスサービスセンター 中央店"></figure>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/service_srore_img04.jpg" alt="大津ガスサービスセンター 中央店"></figure>
              </div>
              <table class="row_table">
                <tbody>
                  <tr>
                    <th>所在地</th>
                    <td>滋賀県大津市中央三丁目2番3号</td>
                  </tr>
                  <tr>
                    <th>電話番号</th>
                    <td>077-523-1112</td>
                  </tr>
                  <tr>
                    <th>定休日</th>
                    <td>日、祝&emsp;年末年始</td>
                  </tr>
                  <tr>
                    <th>営業時間</th>
                    <td>9:00〜17:30</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- inner -->
            <div class="g_map_area">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3267.9717622508883!2d135.86557641524047!3d35.00741198035691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60010cf67a15dc01%3A0xb1c38fbabedb2aa6!2z44CSNTIwLTAwNDMg5ruL6LOA55yM5aSn5rSl5biC5Lit5aSu77yT5LiB55uu77yS4oiS77yT!5e0!3m2!1sja!2sjp!4v1623997124583!5m2!1sja!2sjp" width="1600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <!--store_content_area-->
          <div class="store_content_area" id="seta">
            <div class="store_content inner">
              <div class="store_tit_box flex_box_pc">
                <h3 class="store_tit Radley">Seta store</h3>
                <p class="store_sbtit">大津ガスサービスセンター 瀬田店</p>
              </div>
              <div class="store_img_box flex_box">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/service_srore_img05.jpg" alt="大津ガスサービスセンター 瀬田店"></figure>
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/company/service_srore_img06.jpg" alt="大津ガスサービスセンター 瀬田店"></figure>
              </div>
              <table class="row_table">
                <tbody>
                  <tr>
                    <th>所在地</th>
                    <td>滋賀県大津市大江四丁目18番16号</td>
                  </tr>
                  <tr>
                    <th>電話番号</th>
                    <td>077-543-4430</td>
                  </tr>
                  <tr>
                    <th>定休日</th>
                    <td>土、日、祝&emsp;年末年始</td>
                  </tr>
                  <tr>
                    <th>営業時間</th>
                    <td>9:00〜17:30</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- inner -->
            <div class="g_map_area">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6537.944564678718!2d135.925659!3d34.982359!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb37c158fba59b65d!2z5aSn5rSl44Ks44K544K144O844OT44K544K744Oz44K_44O8IOeArOeUsOW6lw!5e0!3m2!1sja!2sjp!4v1624254825720!5m2!1sja!2sjp" width="1600" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
          <!--store_content_area-->
        </section>
        <!--service_area_wrap-->



        <?php
        //$incPart = 'header';
        get_template_part('template-parts/page/contact');
        ?>


      </div>
  </article>
</main><!-- #main -->
</div>

<?php
get_footer();
