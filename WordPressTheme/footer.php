    <!-- Shop-information Section -->
    <div class="shop-info shop-info--subpage-information">
      <div class="shop-info__inner inner">
        <div class="shop-info__container">
          <div class="shop-info__body">
            <div class="shop-info__header">
              <img class="shop-info__logo" src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUps-green.svg" alt="CodeUpsロゴ">
            </div>
            <div class="shop-info__address">
              <div class="shop-info__text">
                <span>沖縄県那覇市1-1</span>
                <span>TEL:0120-000-0000</span>
                <span>営業時間:8:30-19:00</span>
                <span>定休日:毎週火曜日</span>
              </div>
              <div class="shop-info__map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12963.312118305756!2d139.7671248!3d35.6812362!3m2!1i1024!2i768!4f5!3m3!1m2!1s0x0%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1673104195684!5m2!1sja!2sjp"
                  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                  class="shop-info__iframe"></iframe>
              </div>
            </div>
          </div>
          <div class="shop-info__contact">
            <div class="contact-header">
              <div class="contact-header__title">contact</div>
              <h2 class="contact-header__subtitle text-shadow md-show">お問い合わせ</h2>
              <h2 class="contact-header__subtitle text-shadow md-none">お問合せ</h2>
            </div>
            <div class="shop-info__contact-text">
              <span>ご予約・お問い合わせはコチラ</span>
            </div>
            <div class="shop-info__button">
              <a href=" ./contact.html" class=" button">
                <span class="button__front">Contact us</span>
                <span class="button__arrow">
                  <svg viewBox="0 0 42 8" fill="none">
                    <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Shop-information Section -->
  </main>

<footer class="footer" id="footer">
    <!-- Button Return to top -->
    <a class="return-top js-top" href="#" id="page-top">
      <svg class="return-top__image" width="8" height="42" viewBox="0 0 8 42" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 41L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a><!-- Button Return to top -->

    <div class="footer__inner inner">
      <!-- ヘッダー部分 -->
      <div class="footer__head">
        <div class="footer__logo">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/CodeUps.svg" alt="CodeUpsのロゴ">
        </div>
        <div class="footer__sns sns">
          <div class="sns__item">
            <!-- Facebook icon -->
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/fb-icon.svg" alt="Facebookアイコン">
          </div>
          <div class="sns__item">
            <!-- Instagram icon -->
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/instagram-icon.svg"" alt=" Instagramアイコン">
          </div>
        </div>
      </div><!-- ヘッダー部分 -->

      <!-- 共通ナビゲーション部分 -->
      <nav class="footer__nav global-nav">
        <div class="global-nav__content">
          <div class="global-nav__grid">
            <!-- カラム1 -->
            <div class="global-nav__column global-nav__item1">
              <!-- カラム1 1つ目のブロック -->
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./campaign.html" class="global-nav__title">キャンペーン</a>
                </div>
                <ul class="global-nav__list">
                  <li class="global-nav__list-item">
                    <a href="#" class="global-nav__link">ライセンス取得</a>
                  </li>
                  <li class="global-nav__list-item">
                    <a href="#" class="global-nav__link">貸切体験ダイビング</a>
                  </li>
                  <li class="global-nav__list-item">
                    <a href="#" class="global-nav__link">ナイトダイビング</a>
                  </li>
                </ul>
              </div> <!-- カラム1 1つ目のブロック -->
              <!-- カラム1 2つ目のブロック -->
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./about.html" class="global-nav__title">私たちについて</a>
                </div>
              </div><!-- カラム１ 2つ目のブロック -->
            </div><!-- カラム1 -->

            <!-- カラム2 -->
            <div class="global-nav__column global-nav__item2">
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./information.html" class="global-nav__title">ダイビング情報</a>
                </div>
                <ul class="global-nav__list">
                  <li class="global-nav__list-item">
                    <a href="./information.html?active-tab=tab-license" class="global-nav__link">ライセンス講習</a>
                  </li>
                  <li class="global-nav__list-item">
                    <a href="./information.html?active-tab=tab-diving" class="global-nav__link">体験ダイビング</a>
                  </li>
                  <li class="global-nav__list-item">
                    <a href="./information.html?active-tab=tab-fundiving" class="global-nav__link">ファンダイビング</a>
                  </li>
                </ul>
              </div>
              <!-- カラム2 2つ目のブロック -->
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./blog.html" class="global-nav__title">ブログ</a>
                </div>
              </div><!-- カラム2 2つ目のブロック -->
            </div><!-- カラム2 -->

            <!-- カラム3 -->
            <div class="global-nav__column global-nav__item3">
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./voice.html" class="global-nav__title">お客様の声</a>
                </div>
              </div>

              <!-- カラム3 2つ目のブロック -->
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./price.html" class="global-nav__title">料金一覧</a>
                </div>
                <ul class="global-nav__list">
                  <li class="global-nav__list-item">
                    <a href="#" class="global-nav__link">ライセンス講習</a>
                  </li>
                  <li class="global-nav__list-item">
                    <a href="#" class="global-nav__link">体験ダイビング</a>
                  </li>
                  <li class="global-nav__list-item">
                    <a href="#" class="global-nav__link">ファンダイビング</a>
                  </li>
                </ul>
              </div><!-- カラム3 2つ目のブロック -->

            </div><!-- カラム3 -->

            <!-- カラム4 -->
            <div class="global-nav__column global-nav__item4">
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./faq.html" class="global-nav__title">よくある質問</a>
                </div>
              </div>
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./privacy.html" class="global-nav__title">プライバシー<br class="md-none">ポリシー</a>
                </div>
              </div>
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./terms.html" class="global-nav__title">利用規約</a>
                </div>
              </div>
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./contact.html" class="global-nav__title">お問い合わせ</a>
                </div>
              </div>
            </div><!-- カラム4 -->

          </div>
        </div>
      </nav><!-- 共通ナビゲーション部分 -->

      <small class="footer__copyright">
        Copyright &copy; 2021 - 2023 <a href="https://codeups.jp/">CodeUps LLC.</a> All Rights Reserved.
      </small>
    </div>
  </footer>
  
  <?php wp_footer(); ?>
</body>

</html>