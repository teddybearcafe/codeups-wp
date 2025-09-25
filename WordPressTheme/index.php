<?php get_header(); ?>

  <main>
    <!-- Loading -->
    <div class="loader">
      <!-- キャッチコピー -->
      <div class="loader__message--in mv__body">
        <div class="mv__title">diving</div>
        <div class="mv__subtitle">into the ocean</div>
      </div>

      <div class="loader__images">
        <!-- SP用 -->
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv01-sp.jpg" alt="ウミガメが泳ぐ様子" class="loader__image">

        <!-- PC用：左右2枚（CSSで表示を制御） -->
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/image-left.jpg" alt="ウミガメが泳ぐ様子" class="loader__image loader__image--left">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/image-right.jpg" alt="ウミガメが泳ぐ様子" class="loader__image loader__image--right">
      </div>

      <!-- 再表示キャッチコピー -->
      <div class="loader__message--final mv__body">
        <div class="mv__title">diving</div>
        <div class="mv__subtitle">into the ocean</div>
      </div>
    </div>

    <!-- main view -->
    <div class="mv">
      <!-- Slider main container -->
      <div class="swiper js-mv">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv01-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv01-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv02-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv02-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv03-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv03-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv04-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv04-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv01-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv01-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv02-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv02-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv03-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv03-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
          <picture class="swiper-slide">
            <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv04-pc.jpg" media="(min-width: 767px)">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/mv04-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
          </picture>
        </div>
      </div>
      <div class="mv__body mv__body--display">
        <div class="mv__title">diving</div>
        <div class="mv__subtitle">into the ocean</div>
      </div>
    </div>

    <!-- Campaign Section -->
    <section id="campaign" class="campaign">
      <div class="campaign__inner inner">
        <div class="campaign__header section-header">
          <div class="section-header__title">campaign</div>
          <h2 class="section-header__subtitle">キャンペーン</h2>
        </div>

        <div class="swiper js-campaign campaign__cards">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper campaign__wrapper">

            <!-- Slides -->
            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img class="campaign-card__image" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign1.jpg" alt="青い海のなかで様々な熱帯魚が泳ぐ様子" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">                      
                      <span>ライセンス講習</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>ライセンス講習</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;56,000</div>
                      <div class="campaign-card__selling-price">&yen;46,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign2.jpg" alt="プライベートビーチを彷彿とさせる白い砂浜とエメラルドグリーンの海に浮かぶダイビングボート" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>体験ダイビング</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>貸切体験ダイビング</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;24,000</div>
                      <div class="campaign-card__selling-price">&yen;18,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign3.jpg" alt="夜の海を泳ぐクラゲの様子" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>体験ダイビング</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>ナイトダイビング</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;10,000</div>
                      <div class="campaign-card__selling-price">&yen;8,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign4.jpg" alt="複数のダイバーが水面に顔を出して浮かぶ様子" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>ファンダイビング</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>貸切ファンダイビング</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;20,000</div>
                      <div class="campaign-card__selling-price">&yen;16,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign1.jpg" alt="青い海のなかで様々な熱帯魚が泳ぐ様子" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>ライセンス講習</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>ライセンス講習</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;56,000</div>
                      <div class="campaign-card__selling-price">&yen;46,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign2.jpg" alt="プライベートビーチを彷彿とさせる白い砂浜とエメラルドグリーンの海に浮かぶダイビングボート" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>体験ダイビング</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>貸切体験ダイビング</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;24,000</div>
                      <div class="campaign-card__selling-price">&yen;18,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign3.jpg" alt="夜の海を泳ぐクラゲの様子" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>体験ダイビング</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>ナイトダイビング</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;10,000</div>
                      <div class="campaign-card__selling-price">&yen;8,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide campaign__slide">
              <div class="campaign-card">
                <figure class="campaign-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign4.jpg" alt="複数のダイバーが水面に顔を出して浮かぶ様子" width="280" height="188">
                </figure>
                <div class="campaign-card__body">
                  <div class="campaign-card__header">
                    <div class="campaign-card__category">
                      <span>ファンダイビング</span>
                    </div>
                    <div class="campaign-card__title">
                      <span>貸切ファンダイビング</span>
                    </div>
                  </div>
                  <div class="campaign-card__price">
                    <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                    <div class="campaign-card__prices">
                      <div class="campaign-card__cancell-price">&yen;20,000</div>
                      <div class="campaign-card__selling-price">&yen;16,000</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div><!-- Additional required wrapper -->

        </div>
        <div class="swiper-button-prev md-show"></div>
        <div class="swiper-button-next md-show"></div>

        <!-- <div class="campaign__swiper-controller">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div> -->

        <div class="campaign__button">
          <a href="./campaign.html" class="button">
            <span class="button__front">View more</span>
            <span class="button__arrow">
              <svg viewBox="0 0 42 8" fill="none">
                <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section><!-- Campaign Section -->

    <!-- About Section -->
    <section id="about" class="about">
      <div class="about__inner inner">
        <div class="about__header">
          <div class="section-header">
            <div class="section-header__title">about us</div>
            <h2 class="section-header__subtitle">私たちについて</h2>
          </div>
        </div>

        <div class="about__contents-wrapper">
          <div class="about__images">
            <div class="about__image-left">
              <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/about-ocean1-pc.jpg" alt="沖縄の平家屋根に赤瓦とシーサー">
            </div>
            <div class="about__image-right">
              <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/about-ocean2-pc.jpg" alt="浅瀬の海中を泳ぐクラカケチョウウオ">
            </div>
          </div>
          <div class="about__body">
            <div class="about__body-title"><span>d</span>ive into<br>the <span>o</span>cean</div>
            <div class="about__body-contents">
              <div class="about__body-text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
              <div class="about__button">
                <a href="./about.html" class="button">
                  <span class="button__front">View more</span>
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

      </div>
    </section><!-- About Section -->

    <!-- Information Section -->
    <section id="information" class="information">
      <div class="information__inner inner">
        <div class="information__header">
          <div class="section-header">
            <div class="section-header__title">information</div>
            <h2 class="section-header__subtitle">ダイビング情報</h2>
          </div>
        </div>
        <div class="information__wrapper">
          <div class="information__image">
            <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/info-img.jpg" alt="珊瑚礁の棚の周りを泳ぐチョウチョウウオ">
          </div>
          <div class="information__body">
            <div class="information__content-title">ライセンス講習</div>
            <div class="information__text">
              <p>当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
                正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
            </div>
            <div class="information__button">
              <a href="./information.html" class="button">
                <span class="button__front">View more</span>
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
    </section><!-- Information Section -->

    <!-- Blog Section -->
    <section id="blog" class="blog">
      <div class="blog__inner inner">

        <div class="blog__header section-header">
          <div class="section-header__title section-header__title--white">blog</div>
          <h2 class="section-header__subtitle section-header__subtitle--white">ブログ</h2>
        </div>

        <ul class="blog__body blog-cards">
          <li class="blog-cards__item">
            <a href="./single.html" class="blog-card">
              <figure class="blog-card__figure">
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog1.jpg" alt="ピンク珊瑚" class="blog-card__image">
              </figure>
              <div class="blog-card__body">
                <div class="blog-card__date">
                  <time datetime="2023-01-17">2023/1/17</time>
                </div>
                <div class="blog-card__title">
                  <span>ライセンス取得</span>
                </div>
                <div class="blog-card__text">
                  <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-cards__item">
            <a href="./single.html" class="blog-card">
              <figure class="blog-card__figure">
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog2.jpg" alt="海ガメがのんびり泳ぐ様子" class="blog-card__image">
              </figure>
              <div class="blog-card__body">
                <div class="blog-card__date">
                  <time datetime="2023-01-17">2023/1/17</time>
                </div>
                <div class="blog-card__title">
                  <span>ウミガメと泳ぐ</span>
                </div>
                <div class="blog-card__text">
                  <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </li>

          <li class="blog-cards__item">
            <a href="./single.html" class="blog-card">
              <figure class="blog-card__figure">
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog3.jpg" alt="カクレクマノミがイソギンチャクの間から顔を出す様子" class="blog-card__image">
              </figure>
              <div class="blog-card__body">
                <div class="blog-card__date">
                  <time datetime="2023-01-17">2023/1/17</time>
                </div>
                <div class="blog-card__title">
                  <span>カクレクマノミ</span>
                </div>
                <div class="blog-card__text">
                  <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                </div>
              </div>
            </a>
          </li>
        </ul>

        <div class="blog__button">
          <a href="./blog.html" class="button">
            <span class="button__front">View more</span>
            <span class="button__arrow">
              <svg viewBox="0 0 42 8" fill="none">
                <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section><!-- blog Section -->

    <!-- Voice Section -->
    <section id="voice" class="voice">
      <div class="voice__inner inner">

        <div class="voice__header section-header">
          <div class="section-header__title">voice</div>
          <h2 class="section-header__subtitle">お客様の声</h2>
        </div>

        <ul class="voice__body voice-cards">
          <li class="voice-cards__item">
            <div class="voice-card">
              <div class="voice-card__wrapper">
                <div class="voice-card__header">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">20代(女性)</div>
                    <div class="voice-card__header-label-category">ライセンス取得</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/voice1.jpg" alt="麦わら帽子を被ったTシャツ姿の20代の女性">
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
            <div class="voice-card">
              <div class="voice-card__wrapper">
                <div class="voice-card__header">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender">20代(男性)</div>
                    <div class="voice-card__header-label-category">ファンダイビング</div>
                  </div>
                  <div class="voice-card__title">
                    <span>ここにタイトルが入ります。ここにタイトル</span>
                  </div>
                </div>

                <div class="voice-card__figure">
                  <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/voice2.jpg" alt="ファンダイビングを体験した20代の男性">
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

        <div class="voice__button">
          <a href="./voice.html" class="button">
            <span class="button__front">View more</span>
            <span class="button__arrow">
              <svg viewBox="0 0 42 8" fill="none">
                <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section><!-- Voice Section -->

    <!-- Price Section -->
    <section id="price" class="price">
      <div class="price__inner inner">
        <div class="price__header section-header">
          <div class="section-header__title">price</div>
          <h2 class="section-header__subtitle">料金一覧</h2>
        </div>

        <div class="price__body">
          <div class="price__header-image">
            <picture>
              <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-pc.jpg" media="(min-width: 768px)">
              <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-sp.jpg" alt="珊瑚礁周辺を群をなして泳ぐ赤い熱帯魚">
            </picture>
          </div>

          <div class="price__lists-wrapper">
            <div class="price-lists">
              <div class="price-lists__item">
                <div class="price-list">
                  <div class="price-list__title">ライセンス講習</div>
                  <dl class="price-list__definition">
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">オープンウォーターダイバーコース</dt>
                      <dd class="price-liset__definition-description">¥50,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">アドバンスドオープンウォーターコース</dt>
                      <dd class="price-liset__definition-description">¥60,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">レスキュー＋EFRコース</dt>
                      <dd class="price-liset__definition-description">¥70,000</dd>
                    </div>
                  </dl>
                </div>
              </div>
              <div class="price-lists__item">
                <div class="price-list">
                  <div class="price-list__title">体験ダイビング</div>
                  <dl class="price-list__definition">
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ビーチ体験ダイビング(半日)</dt>
                      <dd class="price-liset__definition-description">¥7,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ビーチ体験ダイビング(1日)</dt>
                      <dd class="price-liset__definition-description">¥14,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ボート体験ダイビング(半日)</dt>
                      <dd class="price-liset__definition-description">¥10,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ボート体験ダイビング(1日)</dt>
                      <dd class="price-liset__definition-description">¥18,000</dd>
                    </div>
                  </dl>
                </div>
              </div>
              <div class="price-lists__item">
                <div class="price-list">
                  <div class="price-list__title">ファンダイビング</div>
                  <dl class="price-list__definition">
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ビーチダイビング(2ダイブ)</dt>
                      <dd class="price-liset__definition-description">¥14,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ボートダイビング(2ダイブ)</dt>
                      <dd class="price-liset__definition-description">¥18,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">スペシャルダイビング(2ダイブ)</dt>
                      <dd class="price-liset__definition-description">¥24,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">ナイトダイビング(1ダイブ)</dt>
                      <dd class="price-liset__definition-description">¥10,000</dd>
                    </div>
                  </dl>
                </div>
              </div>
              <div class="price-lists__item">
                <div class="price-list">
                  <div class="price-list__title">スペシャルダイビング</div>
                  <dl class="price-list__definition">
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">貸切ダイビング(2ダイブ)</dt>
                      <dd class="price-liset__definition-description">¥24,000</dd>
                    </div>
                    <div class="price-list__definition-item">
                      <dt class="price-list__definition-title">1日ダイビング(3ダイブ)</dt>
                      <dd class="price-liset__definition-description">¥32,000</dd>
                    </div>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="price__button">
          <a href="./price.html" class="button">
            <span class="button__front">View more</span>
            <span class="button__arrow">
              <svg viewBox="0 0 42 8" fill="none">
                <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </span>
          </a>
        </div>
      </div>
    </section><!-- Price Section -->

  <?php get_footer(); ?>