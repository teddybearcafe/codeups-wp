<?php get_header(); ?>

  <main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/blog-mv-sp.jpg" alt="青い海のなか蝶々魚が泳ぐ様子">
      </picture>
      <?php
      global $post;
      $slug = $post->post_name; // 現在のページのスラッグを取得

      // 変数を準備
      $heading = '共通見出し'; // デフォルト値

      // スラッグごとに代入
      if ( $slug === 'privacypolicy' ) {
        $heading = 'Privacy Policy';
      } elseif ( $slug === 'terms-of-service' ) {
        $heading = 'Terms of Service';
      } elseif ( $slug === 'sitemap' ) {
        $heading = 'SiteMap';
      }
      ?>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title"><?php echo esc_html( $heading ); ?></h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="page-breadcrumb">
      <div class="page-breadcrumb__inner inner">
        <?php get_template_part('parts/breadcrumb'); ?>
      </div>
    </div><!-- breadcrumb -->

    <div class="page-body">
      <div class="page-body__inner inner">
        <div class="page-body__container">
          <div class="page-content">
            <?php the_content(); ?>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>
