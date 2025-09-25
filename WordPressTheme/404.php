<?php get_header(); ?>

  <main class="main-wrapper">

    <!-- breadcrumb -->
    <div class="page404-breadcrumb">
      <div class="page404-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb') ?>
      </div>
    </div>

    <section class="page404-contents">
      <div class="page404-contents__inner inner">
        <img class="page404-contents__image" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/page-404error-bg.svg" alt="背景画像">
        <div class="page404-contents__wrapper">
          <div class="page404-contents__message">404</div>
          <div class="page404-contents__sub-text">
            申し訳ありません。<br>
            お探しのページが見つかりません。
          </div>
          <div class="page404-contents__button">
            <a href="<?php echo esc_url( home_url()); ?>" class="button button--white">
              <span class="button__front button__front--white">Page TOP</span>
              <span class="button__arrow button__arrow--white">
                <svg viewBox="0 0 42 8" fill="none">
                  <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>
  <?php get_footer(); ?>