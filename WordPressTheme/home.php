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

            <?php if (have_posts()):
            while (have_posts()) : the_post(); ?>
            <li class="blog-article__list-item">
                    <a href="<?php echo esc_url(the_permalink()); ?>" class="blog-card">
                      <figure class="blog-card__figure">
                        <?php if (get_the_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像">
                          <?php else : ?>
                          <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/no-img.webp')); ?>" alt="アイキャッチ画像はありません">
                        <?php endif; ?>
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
                <?php endwhile; else : ?>
                  <p>記事はありません。</p>
                  <?php endif; ?>
          </ul>

          <!-- pagination -->
          <nav class="blog-pagination">
            <div class="blog-pagination__inner inner">
              <?php wp_pagenavi(); ?>
            </div>
          </nav><!-- pagination -->

        </div>

        <!-- サイドコンテンツ -->
        <aside class="blog-aside">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>


<?php get_footer(); ?>