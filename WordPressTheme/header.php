<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charaset'); ?>" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex,nofollow">
  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="CodeUps" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="CodeUps" />
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary" />
  <!-- ファビコン -->
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/assets/images/favicon.ico')); ?>" />
  <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri('/assets/images/apple-touch-icon.png')); ?>" sizes="180x180" />
  <!-- フォント -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  -->


  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header id="header" class="header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="/index.html" class="header__logo-link">
          <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/CodeUps.svg" alt="CodeUps｜沖縄県那覇市のダイビングショップ">
          <span class="visually-hidden">CodeUps - 沖縄県那覇市のダイビングショップ</span>
        </a>
      </h1>
      <nav class="header__nav md-show">
        <ul class="header__items">
          <li class="header__item">
            <a href="/campaign" class="header__link">
              <span>Campaign</span>
              <span>キャンペーン</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/about-us" class="header__link">
              <span>About us</span>
              <span>私たちについて</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/information" class="header__link">
              <span>Information</span>
              <span>ダイビング情報</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/blog" class="header__link">
              <span>Blog</span>
              <span>ブログ</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/voice" class="header__link">
              <span>Voice</span>
              <span>お客様の声</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/price" class="header__link">
              <span>Price</span>
              <span>料金一覧</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/faq" class="header__link">
              <span>FAQ</span>
              <span>よくある質問</span>
            </a>
          </li>
          <li class="header__item">
            <a href="/contact" class="header__link">
              <span>Contact</span>
              <span>お問合せ</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="hamburger js-hamburger md-none">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <!-- ドロアーメニュー -->
    <div class="drawer js-drawer">
      <div class="drawer__inner inner">

        <!-- 共通ナビゲーション部分 -->
        <nav class="drawer__nav global-nav">
          <div class="global-nav__content">
            <div class="global-nav__grid">
              <!-- カラム1 -->
              <div class="global-nav__column global-nav__item1">
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="#campaign" class="global-nav__title">キャンペーン</a>
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
                </div>
                <!-- カラム1 2つ目のブロック -->
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="#about" class="global-nav__title">私たちについて</a>
                  </div>
                </div><!-- カラム１ 2つ目のブロック -->
              </div><!-- カラム1 -->

              <!-- カラム2 -->
              <div class="global-nav__column global-nav__item2">
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <span class="global-nav__title">ダイビング情報</span>
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
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./blog" class="global-nav__title">ブログ</a>
                  </div>
                </div><!-- カラム2 2つ目のブロック -->
              </div><!-- カラム2 -->

              <!-- カラム3 -->
              <div class="global-nav__column global-nav__item3">
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="#voice" class="global-nav__title">お客様の声</a>
                  </div>
                </div>

                <!-- カラム3 2つ目のブロック -->
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="#price" class="global-nav__title">料金一覧</a>
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
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./faq.html" class="global-nav__title">よくある質問</a>
                  </div>
                </div>
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./privacy.html" class="global-nav__title">プライバシー<br class="md-none">ポリシー</a>
                  </div>
                </div>
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./terms.html" class="global-nav__title">利用規約</a>
                  </div>
                </div>
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./contact.html" class="global-nav__title">お問い合わせ</a>
                  </div>
                </div>
              </div><!-- カラム4 -->
            </div>
          </div>
        </nav><!-- 共通ナビゲーション部分 -->
      </div>
    </div><!-- ドロアーメニュー -->

  </header>
