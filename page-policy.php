<?php

/**
Template Name: プライバシーポリシー
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
              <p class="mv_tit Radley">PRIVACY POLICY</p>
              <p class="mv_txt">プライバシーポリシー</p>
            </div>
            <div class="breadcrumbs pc">
              <ol itemscope itemtype="http://schema.org/BreadcrumbList" class="list_area">
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <a itemprop="item" href="<?php echo home_url() ?>"> <span itemprop="name">ホーム</span> </a>
                  <meta itemprop="position" content="1" />
                </li>
                <li itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem"> <span itemprop="name">プライバシーポリシー</span>
                  <meta itemprop="position" content="2" />
                </li>
              </ol>
            </div>
            <!--breadcrumbs-->
          </div>
          <picture class="mv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/add_img/policy/mv_sp.jpg" media="(max-width: 767px)">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/policy/mv.jpg" alt="プライバシーポリシー">
          </picture>
        </section>
      </div>
      <!-- mv -->
      
      <div class="cont_wrap">
      <section id="policy">
        <div class="inner">
          <div class="policy_wrap">
          <p class="intro_txt">当社では「お客さまの個人情報は、お客さまからお預かりしている大切な固有財産である」という認識の立場から、個人情報保護の重要性を鑑み、また、当社に対する地域社会の信頼を向上させるため、個人情報に関する法律（個人情報保護法）その他の関連法令・ガイドライン等を遵守して、お客さまの個人情報を適正に取扱うと共に、安全管理について適切な措置を講じます。<br>当社は、個人情報の取扱いが適切に行われるように社員への教育・指導を徹底し、適正な取扱いが行われるよう取り組んで参ります。また、個人情報の取扱いに関する苦情・相談に迅速に対応し、当社の個人情報の取扱い及び安全管理に係る適切な措置については、適宜見直し、改善いたします。</p>
          
          <dl class="policy_list">
            <dt class="list_tit"><span>個人情報の取得</span></dt>
            <dd class="list_cont">
              <p class="txt">当社は、業務上必要な範囲内で、適法で公正な手段により個人情報を取得します。</p>
            </dd>
            
            <dt class="list_tit"><span>個人情報の利用目的</span></dt>
            <dd class="list_cont">
              <p class="txt">当社は、取得した個人情報を当社業務の遂行に必要な範囲内で利用いたします。<br>当社における具体的な個人情報の利用目的は次の通りです。</p>
              <ol class="inol">
                <li>①ガス機器(厨房、給湯、空調等)・警報器等の機器・住宅設備の販売（リース・レンタル等を含む）、設計、施工、修理・点検、商品開発、アフターサービス</li>
                <li>②ガス機器(厨房、給湯、空調等)の修理・機器診断等の保安活動</li>
                <li>③ガス工事</li>
                <li>④住宅、住宅設備および建材等の増改築、修繕・営繕</li>
                <li>⑤上記各種事業に関するサービス・製品のお知らせ・ＰＲ、調査・データ集積、研究開発</li>
                <li>⑥その他前各号に附随又は関連する一切の業務の実施</li>
              </ol>
              <p class="txt">なお、当社は、上記の業務を円滑に遂行するため、業務の一部を他社に委託することがあります。その際、当社からこれらの業務委託先に必要な範囲で個人情報を提供することがあります。その場合、当社は業務委託先との間で取り扱いに関する契約を結ぶ等、適切な監督を行います。<br>上記の利用目的を変更する場合には、その内容をご本人に対し、原則として書面等により通知し、またはホームページにより公表いたします。</p>
            </dd>
            
            <dt class="list_tit"><span>個人データの安全管理措置</span></dt>
            <dd class="list_cont">
              <p class="txt">当社は、取扱う個人データの漏洩、滅失又は毀損の防止その他の個人データの安全管理のため、取扱規程の整備および実施体制の整備等、十分なセキュリティ対策を講じると共に、利用目的の達成に必要とされる正確性・最新性を確保するために適切な措置を講じます。</p>
            </dd>
            
            <dt class="list_tit"><span>個人情報の共同利用</span></dt>
            <dd class="list_cont">
              <p class="txt">個人情報の一部に限り、次の表のとおり共同利用します。</p>
              <dl class="indl">
                <dt>共同して利用するお客さま情報の項目</dt>
                <dd>お客さまの氏名、年齢※２、性別※２、住所、電話番号、家族構成※２、ご自宅に関する情報※２、ご使用番号、契約番号等お客さま固有の識別番号、エネルギー供給設備・消費機器(附帯設備を含む)および警報器等（以下「ガス機器等」という）に関する販売（リース・レンタル等を含む）情報・施工情報および修理履歴（修理内容・結果、故障原因）、当社または共同利用者がかかわる商品、サービスの契約内容およびご利用状況※２、当社または共同利用者が関わるサービス・機器のご利用状況※２、当社または共同利用者ウェブサイトの利用状況※２、当社または共同利用者が実施する各種アンケート結果※２、当社または共同利用者のお客さまとの通信・訪問履歴※２</dd>
                <dt>共同して利用する者の範囲</dt>
                <dd>大津市企業局・大阪ガス株式会社・大阪ガスマーケティング株式会社・Ｄaigasエナジー株式会社・びわ湖ブルーエナジー株式会社</dd>
                <dt>利用する者の利用目的	</dt>
                <dd>ガス機器等の安全性・品質向上のための情報収集、エネルギー・ガス機器等の販売（リース・レンタル等を含む）、ガス機器等の保証期間内修理その他の修理、保安活動の円滑な遂行、これらに付随する商品サービスの紹介・提案およびエネルギー・ガス機器等に関連して生ずる共同利用者間の債権債務決済業務</dd>
                <dt>お客さま情報の管理について責任を有する者</dt>
                <dd>当社が関わるサービス・機器のご利用状況、当社が実施する各種アンケート結果、当社のお客さまとの通信、訪問履歴：当社※２上記以外の情報：大阪ガス株式会社・びわ湖ブルーエナジー株式会社</dd>
              </dl>
              <p class="note">※２　平成２８年４月１日以降、新たに取得した個人情報の共同利用に関するもの</p>
            </dd>
            
            <dt class="list_tit"><span>個人データの第三者への提供</span></dt>
            <dd class="list_cont">
              <p class="txt">当社は、以下の場合を除き、本人の同意なく第三者に個人データを提供しません。</p>
               <ol class="inol">
                 <li>①法令に基づく場合</li>
                 <li>②人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難であるとき</li>
                 <li>③公衆衛生上の向上又は児童の健全な育成の推進のために特に必要がある場合</li>
                 <li>④国の機関若しくは地方公共団体またはその委託を受けたものが法令の定める事務を遂行することに対して協力する必要がある場合であって、本人の同意を得ることに当該事務の遂行に支障を及ぼすおそれがあるとき</li>
                 <li>⑤前項（４）に掲げるものに対して提供する場合</li>
              </ol>
            </dd>
            
            <dt class="list_tit"><span>個人情報保護法に基づく保有個人データの開示、訂正、利用停止等</span></dt>
            <dd class="list_cont">
              <p class="txt">個人情報保護法に基づく保有個人データの開示、訂正、利用停止等についてのご請求については、ご請求が本人であることをご確認させて頂いた上で、手続きを行います。当社の保有個人データに関し、必要な調査を行った結果、ご本人に関する情報が不正確である場合は、その結果に基づいて正確なものに変更させて頂きます。<br>なお、受託業務に関して取り扱う個人情報については、当社からの回答はできない場合がございます。また、上記の開示等の手続きについては所定の手数料をいただきます。手続きを希望される方は、以下までお申し出下さい。</p>
              
              <address class="contact_info">
                <p class="info_tit">≪お問合せ先≫</p>
                <ul>
                  <li>中央店：〒520-0043　<br class="sp">滋賀県大津市中央三丁目2番3号</li>
                  <li>真野店：〒520-0232　<br class="sp">滋賀県大津市真野四丁目26番23号</li>
                  <li>瀬田店：〒520-2141　<br class="sp">滋賀県大津市大江四丁目18番16号</li>
                </ul>
                <p class="txt">株式会社 大津ガスサービスセンター <br class="sp">（代表）<span class="tel_link">077-523-1112</span><br class="sp">（フリーダイヤル）<span class="tel_link">0120-545-639</span><br>受付時間 平日9時00分～17時00</p>
                </address>
            </dd>
          </dl>
            </div>
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
