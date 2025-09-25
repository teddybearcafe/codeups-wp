<?php get_header(); ?>

  <main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog-mv-sp.jpg" alt="青い海のなか蝶々魚が泳ぐ様子">
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
              <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/common/no-img.webp" alt="アイキャッチ画像はありません">
            <?php endif; ?>
            </picture>

            <?php the_content(); ?>


            <?php endwhile; else : ?>
              <p>記事はありません</p>
              <?php endif; ?>
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
        <aside class="blog-aside">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
    <?php get_footer(); ?>
