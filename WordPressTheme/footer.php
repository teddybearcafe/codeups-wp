<?php if (! is_page('thanks') && ! is_404() && ! is_page('contact')) : ?>
  <?php get_template_part('parts/shop-info'); ?>
<?php endif; ?>
</main>

<footer class="footer<?php echo is_404() ? ' page404-footer' : ''; ?>" id="footer">
  <!-- Button Return to top -->
  <a class="return-top js-top" href="#" id="page-top">
    <svg class="return-top__image" width="8" height="42" viewBox="0 0 8 42" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M7 41L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </a><!-- Button Return to top -->

  <div class="footer__inner inner">
    <!-- ヘッダー部分 -->
    <div class="footer__head">
      <div class="footer__logo">
        <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/CodeUps.svg" alt="CodeUpsのロゴ">
      </div>
      <div class="footer__sns sns">
        <div class="sns__item">
          <!-- Facebook icon -->
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/fb-icon.svg" alt="Facebookアイコン">
        </div>
        <div class="sns__item">
          <!-- Instagram icon -->
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/instagram-icon.svg"" alt=" Instagramアイコン">
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
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/campaign" class="global-nav__title">キャンペーン</a>
              </div>
              <ul class="global-nav__list">
                <li class="global-nav__list-item">
                  <a href="/campaign_category/certification/" class="global-nav__link">ライセンス取得</a>
                </li>
                <li class="global-nav__list-item">
                  <a href="/campaign_category/experience/" class="global-nav__link">貸切体験ダイビング</a>
                </li>
                <li class="global-nav__list-item">
                  <a href="/campaign_category/experience/" class="global-nav__link">ナイトダイビング</a>
                </li>
              </ul>
            </div> <!-- カラム1 1つ目のブロック -->
            <!-- カラム1 2つ目のブロック -->
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/about-us" class="global-nav__title">私たちについて</a>
              </div>
            </div><!-- カラム１ 2つ目のブロック -->
          </div><!-- カラム1 -->

          <!-- カラム2 -->
          <div class="global-nav__column global-nav__item2">
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/information" class="global-nav__title">ダイビング情報</a>
              </div>
              <ul class="global-nav__list">
                <li class="global-nav__list-item">
                  <a href="/information?active-tab=tab-license" class="global-nav__link">ライセンス講習</a>
                </li>
                <li class="global-nav__list-item">
                  <a href="/information?active-tab=tab-diving" class="global-nav__link">体験ダイビング</a>
                </li>
                <li class="global-nav__list-item">
                  <a href="/information?active-tab=tab-fundiving" class="global-nav__link">ファンダイビング</a>
                </li>
              </ul>
            </div>
            <!-- カラム2 2つ目のブロック -->
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/blog" class="global-nav__title">ブログ</a>
              </div>
            </div><!-- カラム2 2つ目のブロック -->
          </div><!-- カラム2 -->

          <!-- カラム3 -->
          <div class="global-nav__column global-nav__item3">
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/voice" class="global-nav__title">お客様の声</a>
              </div>
            </div>

            <!-- カラム3 2つ目のブロック -->
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/price" class="global-nav__title">料金一覧</a>
              </div>
              <ul class="global-nav__list">
                <li class="global-nav__list-item">
                  <a href="/price" class="global-nav__link">ライセンス講習</a>
                </li>
                <li class="global-nav__list-item">
                  <a href="/price" class="global-nav__link">体験ダイビング</a>
                </li>
                <li class="global-nav__list-item">
                  <a href="/price" class="global-nav__link">ファンダイビング</a>
                </li>
              </ul>
            </div><!-- カラム3 2つ目のブロック -->

          </div><!-- カラム3 -->

          <!-- カラム4 -->
          <div class="global-nav__column global-nav__item4">
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/faq" class="global-nav__title">よくある質問</a>
              </div>
            </div>
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/privacy" class="global-nav__title">プライバシー<br class="md-none">ポリシー</a>
              </div>
            </div>
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/terms" class="global-nav__title">利用規約</a>
              </div>
            </div>
            <div class="global-nav__block">
              <div class="global-nav__heading">
                <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                <a href="/contact" class="global-nav__title">お問い合わせ</a>
              </div>
            </div>
          </div><!-- カラム4 -->

        </div>
      </div>
    </nav><!-- 共通ナビゲーション部分 -->

    <small class="footer__copyright">
      Copyright &copy; 2021 - 2023 <?php bloginfo('name'); ?> All Rights Reserved.
    </small>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>