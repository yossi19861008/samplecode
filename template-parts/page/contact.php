<section id="contact">
        <div class="inner">
          <div class="sec_tit_box">
            <h2 class="sec_tit">お問い合わせ</h2>
            <p class="sec_subtit Radley">CONTACT</p>
          </div>
          <div class="bottom_contact_list flex_box_pc">
            <div class="tel_box bottom_contact_box">
              <a href="tel:0120545639" class="sp_btn">
               <p class="tit_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/tel_txt.svg" alt="お電話でのお問い合わせ"></p>
                <p class="tel_no Radley fs_italic">0120-545-639</p>
                <p class="btn sp">ここをタップで電話発信</p>
                <p class="note">受付時間／平日9:00-17:30</p>
              </a>
              <figure class="bg_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/tel_bg.png" alt="お電話でのお問い合わせ">
              </figure>
            </div>
            
            <div class="contact_box bottom_contact_box">
              <a href="<?php echo get_permalink( get_page_by_path( 'contact' )->ID ); ?>" class="">
               <p class="tit_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/contact_txt.svg" alt="WEBでのご予約"></p>
                <p class="btn">お問い合わせフォームへ</p>
                <p class="note">受付時間／24時間365日</p>
              </a>
            </div>
            <div class="form_box bottom_contact_box">
              <a href="<?php echo get_permalink( get_page_by_path( 'event_form' )->ID ); ?>" class="">
               <p class="tit_img"><img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/form_txt.svg" alt="WEBでのご予約"></p>
                <p class="btn">イベント予約・まごころ診断予約フォームへ</p>
                <p class="note">受付時間／24時間365日</p>
              </a>
              <figure class="bg_img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/add_img/form_bg.png" alt="WEBでのご予約">
              </figure>
            </div>
          </div>
        </div>
      </section>