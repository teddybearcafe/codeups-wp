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
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv01-sp.jpg" alt="ウミガメが泳ぐ様子" class="loader__image">

      <!-- PC用：左右2枚（CSSで表示を制御） -->
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/image-left.jpg" alt="ウミガメが泳ぐ様子" class="loader__image loader__image--left">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/image-right.jpg" alt="ウミガメが泳ぐ様子" class="loader__image loader__image--right">
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
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv01-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv01-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv02-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv02-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv03-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv03-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv04-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv04-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv01-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv01-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv02-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv02-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv03-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv03-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
        </picture>
        <picture class="swiper-slide">
          <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv04-pc.jpg" media="(min-width: 767px)">
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/mv04-sp.jpg" alt="海中から水面を仰ぐとキラキラした海面のもと海ガメが泳ぐ姿">
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
          <?php
          $args = array(
            'post_type'       => 'campaign', //CPT UI　で作成した投稿タイプ
            'posts_per_page'  => 8,
            'post_status'     => 'publish'
          );
          $campaign_query = new WP_Query($args);

          if ($campaign_query->have_posts()) :
            while ($campaign_query->have_posts()) : $campaign_query->the_post();
              $image              = get_field('image');
              $campaign_text      = get_field('campaign_text');
              $normal_price       = get_field('campaign_normal_price');
              $off_price          = get_field('campaign_off_price'); ?>

              <!-- Slides -->
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__figure">
                    <?php if (!empty($image)) : ?>
                      <img class="campaign-card__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="280" height="188">
                    <?php else : ?>
                      <img class="campaign-card__image" src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.webp')); ?>" alt="画像はありません" width="280" height="188">
                    <?php endif; ?>
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__header">
                      <div class="campaign-card__category">
                        <?php
                        // タクソノミー「campaign_category」に紐づくタームを表示（任意）
                        $terms = get_the_terms(get_the_ID(), 'campaign_category');
                        if ($terms && !is_wp_error($terms)) {
                          foreach ($terms as $term) {
                            echo '<span>' . esc_html($term->name) . '</span>';
                          }
                        }
                        ?>
                      </div>
                      <div class="campaign-card__title">
                        <span><?php the_title(); ?></span>
                      </div>
                    </div>
                    <div class="campaign-card__price">
                      <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                      <div class="campaign-card__prices">
                        <div class="campaign-card__cancell-price">&yen;<?php echo number_format_i18n($normal_price); ?></div>
                        <div class="campaign-card__selling-price">&yen;<?php echo number_format_i18n($off_price); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else : ?>
            <p>現在キャンペーンはありません。</p>
          <?php endif; ?>
        </div><!-- Additional required wrapper -->

      </div>
      <div class="swiper-button-prev md-show"></div>
      <div class="swiper-button-next md-show"></div>

      <!-- <div class="campaign__swiper-controller">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div> -->

      <div class="campaign__button">
        <a href="/campaign" class="button">
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
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about-ocean1-pc.jpg" alt="沖縄の平家屋根に赤瓦とシーサー">
          </div>
          <div class="about__image-right">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/about-ocean2-pc.jpg" alt="浅瀬の海中を泳ぐクラカケチョウウオ">
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
              <a href="/about-us" class="button">
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
          <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/info-img.jpg" alt="珊瑚礁の棚の周りを泳ぐチョウチョウウオ">
        </div>
        <div class="information__body">
          <div class="information__content-title">ライセンス講習</div>
          <div class="information__text">
            <p>当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>
              正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
          </div>
          <div class="information__button">
            <a href="/information" class="button">
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
  <section id="blog" class="top-blog">
    <div class="blog__inner inner">

      <div class="blog__header section-header">
        <div class="section-header__title section-header__title--white">blog</div>
        <h2 class="section-header__subtitle section-header__subtitle--white">ブログ</h2>
      </div>

      <ul class="blog__body blog-cards">
        <?php
        $sticky = get_option('sticky_posts');
        $posts = [];

        // まず sticky を最大3件まで取得
        if (! empty($sticky)) {
          $sticky_query = new WP_Query([
            'post_type'           => 'post',
            'posts_per_page'      => 3,
            'post__in'            => $sticky,
            'orderby'             => 'date',
            'ignore_sticky_posts' => 1,
          ]);
          $posts = $sticky_query->posts;
        }

        // まだ3件未満なら通常記事を追加
        if (count($posts) < 3) {
          $normal_query = new WP_Query([
            'post_type'           => 'post',
            'posts_per_page'      => 3 - count($posts),
            'post__not_in'        => wp_list_pluck($posts, 'ID'), // すでに取得したIDを除外
            'ignore_sticky_posts' => 1,
          ]);
          $posts = array_merge($posts, $normal_query->posts);
        }

        // 出力ループ
        if ($posts) :
          foreach ($posts as $post) :
            setup_postdata($post); ?>
            <li class="blog-cards__item">
              <a href="<?php the_permalink(); ?>" class="blog-card">
                <figure class="blog-card__figure">
                  <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', ['class' => 'blog-card__image']); ?>
                  <?php else : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.png')); ?>" alt="no image" class="blog-card__image">
                  <?php endif; ?>
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__date">
                    <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y/m/d')); ?></time>
                  </div>
                  <div class="blog-card__title">
                    <span><?php the_title(); ?></span>
                  </div>
                  <div class="blog-card__text">
                    <p><?php echo wp_trim_words(get_the_content(), 40, '...'); ?></p>
                  </div>
                </div>
              </a>
            </li>
        <?php
          endforeach;
          wp_reset_postdata();
        endif;
        ?>
      </ul>

      <div class="blog__button">
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="button">
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
        <?php
        $voice_query = new WP_Query([
          'post_type'      => 'voice',
          'posts_per_page' => 2, // 最新2件
        ]);

        if ($voice_query->have_posts()) :
          while ($voice_query->have_posts()) : $voice_query->the_post();
        ?>
            <li class="voice-cards__item">
              <div class="voice-card">
                <div class="voice-card__wrapper">
                  <div class="voice-card__header">
                    <div class="voice-card__header-label">
                      <div class="voice-card__header-label-gender">
                        <?php the_field('age'); ?>(<?php the_field('gender'); ?>)
                      </div>
                      <div class="voice-card__header-label-category">
                        <?php the_terms(get_the_ID(), 'voice_category'); ?>
                      </div>
                    </div>
                    <div class="voice-card__title">
                      <span><?php the_title(); ?></span>
                    </div>
                  </div>
                  <div class="voice-card__figure">
                    <?php $image = get_field('image');
                    if (!empty($image)): ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                  </div>
                </div>
                <div class="voice-card__text">
                  <p><?php the_field('customer-voice'); ?></p>
                </div>
              </div>
            </li>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </ul>
      <div class="voice__button">
        <a href="/voice" class="button">
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
            <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/price-pc.jpg" media="(min-width: 768px)">
            <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/price-sp.jpg" alt="珊瑚礁周辺を群をなして泳ぐ赤い熱帯魚">
          </picture>
        </div>


        <?php
        // 料金ページの固定ページIDを指定
        $price_page_id = 13; // ←実際の固定ページIDに置き換えてください

        $price_groups = [
          'price-certificate' => 'ライセンス講習',
          'price-experience'  => '体験ダイビング',
          'price-fun'         => 'ファンダイビング',
          'price-special'     => 'スペシャルダイビング',
        ];
        ?>

        <div class="price__lists-wrapper">
          <div class="price-lists">
            <?php foreach ($price_groups as $group_key => $group_label) :
              $group_data = SCF::get($group_key, $price_page_id);

              if ($group_data && is_array($group_data)) : ?>
                <div class="price-lists__item">
                  <div class="price-list">
                    <div class="price-list__title"><?php echo esc_html($group_label); ?></div>
                    <dl class="price-list__definition">
                      <?php foreach ($group_data as $row) :
                        $index = $row[$group_key . '-index'] ?? '';
                        $price = $row[$group_key . '-price'] ?? '';
                        if ($index || $price) : ?>
                          <div class="price-list__definition-item">
                            <dt class="price-list__definition-title">
                              <?php echo nl2br(esc_html($index)); ?>
                            </dt>
                            <dd class="price-list__definition-description">
                              &yen;<?php echo number_format_i18n((int) $price); ?>
                            </dd>
                          </div>
                      <?php endif;
                      endforeach; ?>
                    </dl>
                  </div>
                </div>
            <?php endif;
            endforeach; ?>
          </div>
        </div>
      </div>

      <div class="price__button">
        <a href="/price" class="button">
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