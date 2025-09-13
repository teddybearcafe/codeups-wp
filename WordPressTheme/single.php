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
    <div class="single-breadcrumb">
      <div class="single-breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
      </div>
    </div><!-- breadcrumb -->




    <div class="blog-body blog-body--single-page">
      <div class="blog-body__inner inner">
        <!-- メイン部分 -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  
        <div class="single-article">
          <div class="single-article__header">
            <time datetime="<?php the_time('c'); ?>" class="single-article__header-time"><?php the_time('Y.m/d'); ?></time>
            <h2 class="single-article__header-title"><?php the_title(); ?></h2>
          </div>
          <div class="single-article__body">
           <picture>
            <?php if (get_the_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
            <?php else : ?>
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/no-img.webp" alt="アイキャッチ画像はありません">
            <?php endif; ?>
            </picture>

            <?php the_content(); ?>


            <?php endwhile; endif; ?>
          </div>


          <!-- pagination -->
           <?php
             $prev_post = get_previous_post();
             if ( ! empty( $prev_post )) {
              $prev_url = esc_url( get_permalink($prev_post->ID));
             }
             $next_post = get_next_post();
             if ( ! empty( $next_post )) {
              $next_url = esc_url( get_permalink($next_post->ID));
             }
           ?>
          <nav class="single-article__pagination">
            <div class="single-article__pagination-inner inner">
              <div class="nav-pagination">
                <ul class="nav-pagination__items">
                <?php if ( ! empty( $prev_post)) : ?>
                  <li class="nav-pagination__item">
                    <a class="nav-pagination__link nav-pagination__link--lt" href="<?php echo $prev_url; ?>">
                      <svg class="nav-pagination__lt-icon" width="10" height="18" viewBox="0 0 10 18" fill="none"
                        xmlns="http://www.w3.org/2000/svg" stroke="#408F95" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M9 1L1 9L9 17" />
                      </svg>
                    </a>
                  </li>
                  <?php endif; ?>
                  <?php if ( ! empty( $next_post)) : ?>
                  <li class="nav-pagination__item">
                    <a class="nav-pagination__link nav-pagination__link--gt" href="<?php echo $next_url; ?>">
                      <svg class="nav-pagination__gt-icon" width="10" height="18" viewBox="0 0 10 18"
                        xmlns="http://www.w3.org/2000/svg" stroke="#408F95" stroke-linecap="round"
                        stroke-linejoin="round" fill="none">
                        <path d="M1 1L9 9L1 17" />
                      </svg>
                    </a>
                  </li>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
          </nav><!-- pagination -->

        </div><!-- メイン部分 -->

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
                <a href="./campaign.html" class="aside__campaign-link">
                  <div class="campaign-card campaign-card--aside">
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
                  </div>
                </a>
              </li>
              <li class="aside__campaign-item">
                <a href="./campaign.html" class="aside__campaign-link">
                  <div class="campaign-card campaign-card--aside">
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
