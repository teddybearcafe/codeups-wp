<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex,nofollow">

  <!-- meta情報 -->
  <title>CodeUps</title>
  <meta name="description" content="" />
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
  <link rel="icon" href="./assets/images/favicon.ico" />
  <link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png" sizes="180x180" />
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Gotu&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans+JP:wght@100..900&family=Noto+Serif+JP:wght@200..900&display=swap"
    rel="stylesheet">
  <!-- css -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css?ver=20250329.1900" />
  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script defer src="./assets/js/jquery.inview.min.js"></script>
  <script defer src="./assets/js/script.js"></script>
</head>

<body>
  <header id="header" class="header js-header">
    <div class="header__inner">
      <div class="header__logo">
        <a href="./index.html" class="header__logo-link">
          <img src="./assets/images/CodeUps.svg" alt="CodeUps｜沖縄県那覇市のダイビングショップ">
          <span class="visually-hidden">CodeUps - 沖縄県那覇市のダイビングショップ</span>
        </a>
      </div>
      <nav class="header__nav md-show">
        <ul class="header__items">
          <li class="header__item">
            <a href="./campaign.html" class="header__link">
              <span>Campaign</span>
              <span>キャンペーン</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./about.html" class="header__link">
              <span>About us</span>
              <span>私たちについて</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./information.html" class="header__link">
              <span>Information</span>
              <span>ダイビング情報</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./blog.html" class="header__link">
              <span>Blog</span>
              <span>ブログ</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./voice.html" class="header__link">
              <span>Voice</span>
              <span>お客様の声</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./price.html" class="header__link">
              <span>Price</span>
              <span>料金一覧</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./faq.html" class="header__link">
              <span>FAQ</span>
              <span>よくある質問</span>
            </a>
          </li>
          <li class="header__item">
            <a href="./contact.html" class="header__link">
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
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="#about" class="global-nav__title">私たちについて</a>
                  </div>
                </div><!-- カラム１ 2つ目のブロック -->
              </div><!-- カラム1 -->

              <!-- カラム2 -->
              <div class="global-nav__column global-nav__item2">
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./blog.html" class="global-nav__title">ブログ</a>
                  </div>
                </div><!-- カラム2 2つ目のブロック -->
              </div><!-- カラム2 -->

              <!-- カラム3 -->
              <div class="global-nav__column global-nav__item3">
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="#voice" class="global-nav__title">お客様の声</a>
                  </div>
                </div>

                <!-- カラム3 2つ目のブロック -->
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./faq.html" class="global-nav__title">よくある質問</a>
                  </div>
                </div>
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./privacy.html" class="global-nav__title">プライバシー<br class="md-none">ポリシー</a>
                  </div>
                </div>
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                    <a href="./terms.html" class="global-nav__title">利用規約</a>
                  </div>
                </div>
                <div class="global-nav__block">
                  <div class="global-nav__heading">
                    <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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

  <main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="./assets/images/voice-mv.jpg" media="(min-width: 767px)">
        <img src="./assets/images/voice-mv-sp.jpg" alt="青い海のなか蝶々魚が泳ぐ様子">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">voice</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="voice-breadcrumb">
      <div class="voice-breadcrumb__inner inner">
        <nav class="breadcrumb">
          <ul class="breadcrumb__lists">
            <li class="breadcrumb__list-item"><a href="index.html">TOP</a></li>
            <li class="breadcrumb__separator">&gt;</li>
            <li class="breadcrumb__list-item">お客様の声</li>
          </ul>
        </nav>
      </div>
    </div><!-- breadcrumb -->

    <!-- category-tag -->
    <div class="voice-category-tag">
      <div class="voice-category-tag__inner inner">
        <div class="category-tag">
          <ul class="category-tag__lists">
            <li class="category-tag__list-item category-tag-item"><a
                class="category-tag-item__link category-tag-item__link--active" href="">ALL</a></li>
            <li class="category-tag__list-item category-tag-item"><a class="category-tag-item__link" href="">ライセンス講習</a>
            </li>
            <li class="category-tag__list-item category-tag-item"><a class="category-tag-item__link"
                href="">ファンダイビング</a>
            </li>
            <li class="category-tag__list-item category-tag-item"><a class="category-tag-item__link" href="">体験ダイビング</a>
            </li>
          </ul>
        </div>
      </div>
    </div><!-- category-tag -->

    <div class="page-voice-contents__wrapper">
      <div class="page-voice-contents__inner inner">
        <ul class="page-voice-contents__voice-cards voice-cards voice-cards--subpage-voice">
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">20代(女性)</div>
                    <div class="voice-card__header-label-category">ライセンス取得</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="./assets/images/voice1.jpg" alt="麦わら帽子を被ったTシャツ姿の20代の女性">
                </div>
              </div>
              <div class="voice-card__text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </li>
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">20代(男性)</div>
                    <div class="voice-card__header-label-category">ファンダイビング</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="./assets/images/voice2.jpg" alt="ファンダイビングを体験した20代の男性">
                </div>
              </div>
              <div class="voice-card__text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>

          </li>
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">30代(女性)</div>
                    <div class="voice-card__header-label-category">体験ダイビング</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="./assets/images/voice-card-img3.jpg" alt="女性二人が笑顔で喜びを伝える様子">
                </div>
              </div>
              <div class="voice-card__text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </li>
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">20代(女性)</div>
                    <div class="voice-card__header-label-category">体験ダイビング</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="./assets/images/voice-card-img4.jpg" alt="体験ダイビングを経験した20代女性">
                </div>
              </div>
              <div class="voice-card__text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>

          </li>
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">30代(カップル)</div>
                    <div class="voice-card__header-label-category">ファンダイビング</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="./assets/images/voice-card-img5.jpg" alt="ファンダイビングを体験した30代の男女カップル">
                </div>
              </div>
              <div class="voice-card__text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </li>
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">20代(女性)</div>
                    <div class="voice-card__header-label-category">ライセンス講習</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="./assets/images/voice-card-img6.jpg" alt="ライセンス講習を終えた20代の女性">
                </div>
              </div>
              <div class="voice-card__text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>

          </li>
        </ul>
      </div>
    </div>


    <!-- pagination -->
    <nav class="voice-pagination">
      <div class="voice-pagination__inner inner">
        <div class="nav-pagination">
          <ul class="nav-pagination__items">
            <li class="nav-pagination__item"><a class="nav-pagination__link nav-pagination__link--lt" href="#">
                <svg class="nav-pagination__lt-icon" width="10" height="18" viewBox="0 0 10 18" fill="none"
                  xmlns="http://www.w3.org/2000/svg" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M9 1L1 9L9 17" />
                </svg>
              </a></li>
            <li class="nav-pagination__item"><a class="nav-pagination__link nav-pagination__link--active" href="#">1</a>
            </li>
            <li class="nav-pagination__item"><a class="nav-pagination__link" href="#">2</a></li>
            <li class="nav-pagination__item"><a class="nav-pagination__link" href="#">3</a></li>
            <li class="nav-pagination__item"><a class="nav-pagination__link" href="#">4</a></li>
            <li class="nav-pagination__item nav-pagination__item--md"><a class="nav-pagination__link" href="#">5</a></li>
            <li class="nav-pagination__item nav-pagination__item--md"><a class="nav-pagination__link" href="#">6</a></li>
            <li class="nav-pagination__item"><a class="nav-pagination__link nav-pagination__link--gt" href="#">
                <svg class="nav-pagination__gt-icon" width="10" height="18" viewBox="0 0 10 18"
                  xmlns="http://www.w3.org/2000/svg" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round"
                  fill="none">
                  <path d="M1 1L9 9L1 17" />
                </svg>
              </a></li>
          </ul>
        </div>
      </div>
    </nav><!-- pagination -->


    <!-- Shop-information Section -->
    <div class="shop-info">
      <div class="shop-info__inner inner">
        <div class="shop-info__container">
          <div class="shop-info__body">
            <div class="shop-info__header">
              <img class="shop-info__logo" src="./assets/images/CodeUps-green.svg" alt="CodeUpsロゴ">
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
              <a href="./contact.html" class=" button">
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
      <svg class="return-top__image" width="8" height="42" viewBox="0 0 8 42" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path d="M7 41L7 1L1 8" stroke="#408F95" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a><!-- Button Return to top -->

    <div class="footer__inner inner">
      <!-- ヘッダー部分 -->
      <div class="footer__head">
        <div class="footer__logo">
          <img src="./assets/images/CodeUps.svg" alt="CodeUpsのロゴ">
        </div>
        <div class="footer__sns sns">
          <div class="sns__item">
            <!-- Facebook icon -->
            <img src="./assets/images/fb-icon.svg" alt="Facebookアイコン">
          </div>
          <div class="sns__item">
            <!-- Instagram icon -->
            <img src="./assets/images/instagram-icon.svg" alt="Instagramアイコン">
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
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./about.html" class="global-nav__title">私たちについて</a>
                </div>
              </div><!-- カラム１ 2つ目のブロック -->
            </div><!-- カラム1 -->

            <!-- カラム2 -->
            <div class="global-nav__column global-nav__item2">
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./blog.html" class="global-nav__title">ブログ</a>
                </div>
              </div><!-- カラム2 2つ目のブロック -->
            </div><!-- カラム2 -->

            <!-- カラム3 -->
            <div class="global-nav__column global-nav__item3">
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./voice.html" class="global-nav__title">お客様の声</a>
                </div>
              </div>

              <!-- カラム3 2つ目のブロック -->
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./faq.html" class="global-nav__title">よくある質問</a>
                </div>
              </div>
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./privacy.html" class="global-nav__title">プライバシー<br class="md-none">ポリシー</a>
                </div>
              </div>
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
                  <a href="./terms.html" class="global-nav__title">利用規約</a>
                </div>
              </div>
              <div class="global-nav__block">
                <div class="global-nav__heading">
                  <img src="./assets/images/hitode-icon.png" alt="ヒトデのアイコン" class="global-nav__icon">
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
</body>

</html>