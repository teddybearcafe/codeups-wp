<?php get_header(); ?>

  <main>
    <div class="mv-individual">
      <?php
      // コンテキストに応じて画像とタイトルを出し分け（CPT/タクソノミー対応）
      $mv_image_pc = '';
      $mv_image_sp = '';
      $mv_title = '';
      $mv_alt = '';

      if ( is_post_type_archive('voice') || is_tax('voice_category') ) {
        $mv_image_pc = 'voice-mv.jpg';
        $mv_image_sp = 'voice-mv-sp.jpg';
        $mv_title = 'voice';
        $mv_alt = '青い海のなかダイビングをする様子';
      } elseif ( is_post_type_archive('campaign') || is_tax('campaign_category') ) {
        $mv_image_pc = 'campaign-mv.jpg';
        $mv_image_sp = 'campaign-mv-sp.jpg';
        $mv_title = 'campaign';
        $mv_alt = '青い海の中を泳ぐ蝶々魚';
      } else {
        // デフォルト（アーカイブページ）
        $mv_image_pc = 'voice-mv.jpg';
        $mv_image_sp = 'voice-mv-sp.jpg';
        $mv_title = 'voice';
        $mv_alt = '青い海のなかダイビングをする様子';
      }
      ?>
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/<?php echo $mv_image_pc; ?>" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/<?php echo $mv_image_sp; ?>" alt="<?php echo $mv_alt; ?>">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title"><?php echo $mv_title; ?></h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="archive-breadcrumb">
      <div class="archive-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
      </div>
    </div><!-- breadcrumb -->


  <?php
  // 投稿タイプごとに使うタクソノミーを切り替え
  if ( is_post_type_archive('voice') || is_tax('voice_category') ) {
    $taxonomy = 'voice_category';
    $archive_link = get_post_type_archive_link('voice');
  } elseif ( is_post_type_archive('campaign') || is_tax('campaign_category') ) {
    $taxonomy = 'campaign_category';
    $archive_link = get_post_type_archive_link('campaign');
  }
  // タームを取得してボタン表示
  if ( isset($taxonomy) ) :
    $terms = get_terms([
      'taxonomy'   => $taxonomy,
      'hide_empty' => true,
    ]);

    if ( $terms && ! is_wp_error($terms) ) : ?>

  <!-- category-tag -->
  <div class="archive-category-tag">
    <div class="archive-category-tag__inner inner">
      <div class="category-tag">
        <ul class="category-tag__lists">
          <li class="category-tag__list-item category-tag-item">
            <!-- すべて -->
            <a class="category-tag-item__link <?php if ( is_post_type_archive(get_post_type()) ) echo 'category-tag-item__link--active'; ?>" 
               href="<?php echo esc_url( $archive_link ); ?>">
              ALL
            </a>
          </li>
          <?php foreach ( $terms as $term ) : ?>
          <li class="category-tag__list-item category-tag-item">
            <a href="<?php echo esc_url( get_term_link($term) ); ?>"
               class="category-tag-item__link <?php if ( is_tax($taxonomy, $term->slug) ) echo 'category-tag-item__link--active'; ?>">
              <?php echo esc_html( $term->name ); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  <?php endif;
  endif;
  ?>
    <!-- category-tag -->


    <div class="page-voice-contents__wrapper">
      <div class="page-voice-contents__inner inner">
      <?php if ( is_post_type_archive('voice') || is_tax('voice_category') ) : ?>
        <?php get_template_part('parts/voice-cards'); ?>
      <?php elseif ( is_post_type_archive('campaign') || is_tax('campaign_category') ) : ?>
        <?php get_template_part('parts/campaign-cards'); ?>
      <?php endif; ?>
      </div>
    </div>


    <!-- pagination -->
    <nav class="voice-pagination">
      <div class="voice-pagination__inner inner">
              <?php wp_pagenavi(); ?>
      </div>
    </nav><!-- pagination -->
<?php get_footer(); ?>