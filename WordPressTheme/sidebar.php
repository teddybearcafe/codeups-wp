          <div class="aside">
            <!-- 人気記事 -->
            <section class="aside__section">
              <div class="aside__section-header aside-title">
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-title-icon01.svg" alt="人気記事" class="aside-title__icon">
                <h2 class="aside-title__title">人気記事</h2>
              </div>
              <ul class="aside__article-list">
                <li class="aside__article-item">
                  <a href="#" class="aside-article">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-article-01.jpg" alt="ライセンス取得" class="aside-article__image">
                    <div class="aside-article__body">
                      <time datetime="2023-11-17" class="aside-article__date">2023.11/17</time>
                      <h3 class="aside-article__title">ライセンス取得</h3>
                    </div>
                  </a>
                </li>
                <li class="aside__article-item">
                  <a href="#" class="aside-article">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-article-02.jpg" alt="ウミガメ" class="aside-article__image">
                    <div class="aside-article__body">
                      <time datetime="2023-11-17" class="aside-article__date">2023.11/17</time>
                      <h3 class="aside-article__title">ウミガメと泳ぐ</h3>
                    </div>
                  </a>
                </li>
                <li class="aside__article-item">
                  <a href="#" class="aside-article">
                    <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-article-03.jpg" alt="カクレクマノミ" class="aside-article__image">
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
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-title-icon01.svg" alt="口コミ" class="aside-title__icon">
                <h2 class="aside-title__title">口コミ</h2>
              </div>

              <?php 
                $voice = new WP_Query([
                  'post_type'      => 'voice',
                  'posts_per_page' => 1,
                ]);

                if ( $voice->have_posts() ) :
                while ( $voice->have_posts() ) : $voice->the_post(); ?>

              <div class="aside__voice">
                <?php $image = get_field('image'); if( !empty($image) ): ?>
                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
                <div class="aside__voice-body">
                  <div class="aside__voice-caption"><?php the_field('age'); ?>(<?php the_field('gender'); ?>)</div>
                  <div class="aside__voice-title"><?php the_title(); ?></div>
                </div>
                <div class="aside__voice-button">
                  <a href="/voice" class="button button--aside-voice">
                    <span class="button__front">View more</span>
                    <span class="button__arrow">
                      <svg viewBox="0 0 42 8" fill="none">
                        <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span>
                  </a>
                </div>
              </div>
              <?php endwhile;
                wp_reset_postdata();
              endif; ?>
            </section>

            <!-- キャンペーン -->
            <section class="aside__section">
              <div class="aside__section-header aside-title">
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-title-icon01.svg" alt="キャンペーン" class="aside-title__icon">
                <h2 class="aside-title__title">キャンペーン</h2>
              </div>
              <ul class="aside__campaign-list">
              <?php
                $campaign = new WP_Query([
                  'post_type'      => 'campaign',
                  'posts_per_page' => 2,
                ]);
              if ( $campaign->have_posts() ) :
              while ( $campaign->have_posts() ) : $campaign->the_post(); ?>

                <li class="aside__campaign-item">
                  <a href="./campaign.html" class="campaign-card campaign-card--aside">
                    <figure class="campaign-card__figure campaign-card__figure--aside">
                     <?php $image = get_field('image'); if( !empty($image) ): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>



                      <!-- <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/campaign1.jpg" alt="青い海のなかで様々な熱帯魚が泳ぐ様子"> -->
                    </figure>
                    <div class="campaign-card__body campaign-card__body--aside">
                      <div class="campaign-card__header">
                        <div class="campaign-card__title campaign-card__title--aside">
                          <span><?php the_title(); ?></span>
                        </div>
                      </div>
                      <div class="campaign-card__price campaign-card__price--aside">
                        <div class="campaign-card__price-description campaign-card__price-description--aside">
                          全部コミコミ(お一人様)
                        </div>
                        <div class="campaign-card__prices">
                          <div class="campaign-card__cancell-price campaign-card__cancell-price--aside">&yen;<?php echo get_field('campaign_normal_price') ?>
                          </div>
                          <div class="campaign-card__selling-price campaign-card__selling-price--aside">&yen;<?php echo get_field('campaign_off_price') ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <?php endwhile;
                  wp_reset_postdata();
                endif; ?>
              </ul>

              <div class="aside__campaign-button">
                <a href="/campaign" class="button button--aside-campaign">
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
                <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aside-title-icon01.svg" alt="アーカイブ" class="aside-title__icon">
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
          </div>
