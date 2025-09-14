<?php get_header(); ?>

<main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/blog-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog-mv-sp.jpg" alt="青い海のなか蝶々魚が泳ぐ様子">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">blog</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="blog-breadcrumb">
      <div class="blog-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb') ?>
      </div>
    </div><!-- breadcrumb -->

    <div class="blog-body">
      <div class="blog-body__inner inner">

        <!-- メイン部分 -->
        <div class="blog-article">
          <ul class="blog-article__list">
            <li class="blog-article__list-item">
              <a href="./single.html" class="blog-card">
                <figure class="blog-card__figure">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog1.jpg" alt="ピンク珊瑚" class="blog-card__image">
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__date">
                    <time datetime="2023-11-17">2023.11/17</time>
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
                <?php if (have_posts()):
                  while (have_posts()) : the_post(); ?>
                              <li class="blog-article__list-item">
                    <a href="<?php the_permalink(); ?>" class="blog-card">
                      <figure class="blog-card__figure">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog2.jpg" alt="海ガメがのんびり泳ぐ様子" class="blog-card__image">
                      </figure>
                      <div class="blog-card__body">
                  <div class="blog-card__date">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                  </div>
                  <div class="blog-card__title">
                    <span><?php the_title(); ?></span>
                  </div>
                  <div class="blog-card__text">
                    <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
                  </div>
                </div>
              </a>
              </li>
                <?php endwhile; endif; ?>
          </ul>

          <!-- pagination -->
          <nav class="blog-pagination">
            <div class="blog-pagination__inner inner">
              <?php wp_pagenavi(); ?>
            </div>
          </nav><!-- pagination -->

        </div>

        <!-- サイドコンテンツ -->
        <aside class="blog-aside aside">
          <!-- 人気記事 -->
          <section class="aside__section">
            <div class="aside__section-header aside-title">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-title-icon01.svg" alt="人気記事" class="aside-title__icon">
              <h2 class="aside-title__title">人気記事</h2>
            </div>

            <ul class="aside__article-list">
              <li class="aside__article-item">
                <a href="#" class="aside-article">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-article-01.jpg" alt="ライセンス取得" class="aside-article__image">
                  <div class="aside-article__body">
                    <time datetime="2023-11-17" class="aside-article__date">2023.11/17</time>
                    <h3 class="aside-article__title">ライセンス取得</h3>
                  </div>
                </a>
              </li>
              <li class="aside__article-item">
                <a href="#" class="aside-article">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-article-02.jpg" alt="ウミガメ" class="aside-article__image">
                  <div class="aside-article__body">
                    <time datetime="2023-11-17" class="aside-article__date">2023.11/17</time>
                    <h3 class="aside-article__title">ウミガメと泳ぐ</h3>
                  </div>
                </a>
              </li>
              <li class="aside__article-item">
                <a href="#" class="aside-article">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-article-03.jpg" alt="カクレクマノミ" class="aside-article__image">
                  <div class="aside-article__body">
                    <time datetime="2023-11-17" class="aside-article__date">2023.11/17</time>
                    <h3 class="aside-article__title">カクレクマノミ</h3>
                  </div>
                </a>
              </li>
            </ul>
          </section>

          <!-- 口コミ -->
          <section class="aside__section">
            <div class="aside__section-header aside-title">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-title-icon01.svg" alt="口コミ" class="aside-title__icon">
              <h2 class="aside-title__title">口コミ</h2>
            </div>

            <div class="aside__voice">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-voice-img.jpg" alt="口コミを寄せてくれた男女のカップル" class="aside__voice-image">
              <div class="aside__voice-body">
                <div class="aside__voice-caption">30代(カップル)</div>
                <div class="aside__voice-title">ここにタイトルが入ります。ここにタイトル</div>
              </div>
              <div class="aside__voice-button">
                <a href="./voice.html" class="button button--aside-voice">
                  <span class="button__front">View more</span>
                  <span class="button__arrow">
                    <svg viewBox="0 0 42 8" fill="none">
                      <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </span>
                </a>
              </div>
            </div>
          </section>

          <!-- キャンペーン -->
          <section class="aside__section">
            <div class="aside__section-header aside-title">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-title-icon01.svg" alt="キャンペーン" class="aside-title__icon">
              <h2 class="aside-title__title">キャンペーン</h2>
            </div>

            <ul class="aside__campaign-list">
              <li class="aside__campaign-item">
                <a href="./campaign.html" class="campaign-card campaign-card--aside">

                  <figure class="campaign-card__figure campaign-card__figure--aside">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="青い海のなかで様々な熱帯魚が泳ぐ様子">
                  </figure>
                  <div class="campaign-card__body campaign-card__body--aside">
                    <div class="campaign-card__header">
                      <div class="campaign-card__title campaign-card__title--aside">
                        <span>ライセンス講習</span>
                      </div>
                    </div>
                    <div class="campaign-card__price campaign-card__price--aside">
                      <div class="campaign-card__price-description campaign-card__price-description--aside">
                        全部コミコミ(お一人様)
                      </div>
                      <div class="campaign-card__prices">
                        <div class="campaign-card__cancell-price campaign-card__cancell-price--aside">&yen;56,000
                        </div>
                        <div class="campaign-card__selling-price campaign-card__selling-price--aside">&yen;46,000
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="aside__campaign-item">
                <a href="./campaign.html" class="campaign-card campaign-card--aside">

                  <figure class="campaign-card__figure campaign-card__figure--aside">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" alt="プライベートビーチを彷彿とさせる白い砂浜とエメラルドグリーンの海に浮かぶダイビングボート">
                  </figure>
                  <div class="campaign-card__body campaign-card__body--aside">
                    <div class="campaign-card__header">
                      <div class="campaign-card__title campaign-card__title--aside">
                        <span>貸切体験ダイビング</span>
                      </div>
                    </div>
                    <div class="campaign-card__price campaign-card__price--aside">
                      <div class="campaign-card__price-description campaign-card__price-description--aside">
                        全部コミコミ(お一人様)
                      </div>
                      <div class="campaign-card__prices">
                        <div class="campaign-card__cancell-price campaign-card__cancell-price--aside">&yen;24,000
                        </div>
                        <div class="campaign-card__selling-price campaign-card__selling-price--aside">&yen;18,000
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
              </li>
            </ul>

            <div class="aside__campaign-button">
              <a href="./campaign.html" class="button button--aside-campaign">
                <span class="button__front">View more</span>
                <span class="button__arrow">
                  <svg viewBox="0 0 42 8" fill="none">
                    <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </span>
              </a>
            </div>
          </section>

          <!-- アーカイブ -->
          <section class="aside__section">
            <div class="aside__section-header aside-title">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/aside-title-icon01.svg" alt="アーカイブ" class="aside-title__icon">
              <h2 class="aside-title__title">アーカイブ</h2>
            </div>

            <nav class="aside__archive article-archive">
              <div class="article-archive__item">
                <div class="article-archive__item-btn">
                  <span class="article-archive__toggle-icon"></span>
                  2023
                </div>
                <ul class="article-archive__list">
                  <li class="article-archive__list-item"><a href="" class="article-archive__link">3月</a></li>
                  <li class="article-archive__list-item"><a href="" class="article-archive__link">2月</a></li>
                  <li class="article-archive__list-item"><a href="" class="article-archive__link">1月</a></li>
                </ul>
              </div>

              <div class="article-archive__item">
                <div class="article-archive__item-btn">
                  <span class="article-archive__toggle-icon"></span>2022
                </div>
                <ul class="article-archive__list">
                  <li class="article-archive__list-item"><a href="" class="article-archive__link">12月</a></li>
                  <li class="article-archive__list-item"><a href="" class="article-archive__link">11月</a></li>
                  <li class="article-archive__list-item"><a href="" class="article-archive__link">10月</a></li>
                </ul>
              </div>
            </nav>
          </section>

        </aside>
      </div>
    </div>


<?php get_footer(); ?>