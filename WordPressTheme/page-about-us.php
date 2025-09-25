<?php get_header(); ?>

  <main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aboutus-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/aboutus-mv-sp.jpg" alt="青い海のなか蝶々魚が泳ぐ様子">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">about us</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="about-breadcrumb">
      <div class="about-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    </div><!-- breadcrumb -->

    <!-- About media Section -->
    <section class="about-header">
      <div class="about-header__inner inner">
        <div class="about-header__contents">
          <div class="about-header__images">
            <div class="about-header__image-left">
              <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/about-ocean1-pc.jpg" alt="沖縄の平家屋根に赤瓦とシーサー">
            </div>
            <div class="about-header__image-right">
              <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/about-ocean2-pc.jpg" alt="浅瀬の海中を泳ぐクラカケチョウウオ">
            </div>
          </div>
          <div class="about-header__body">
            <div class="about-header__body-title"><span>d</span>ive into<br>the <span>o</span>cean</div>
            <div class="about-header__body-contents">
              <div class="about-header__body-text">
                <p>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- About media Section -->


    <section class="about-gallery">
      <div class="about-gallery__inner inner">
        <div class="about-gallery__section-header">
          <div class="section-header">
            <div class="section-header__title">gallery</div>
            <h2 class="section-header__subtitle">フォト</h2>
          </div>
        </div>

        <div class="about-gallery__body gallery">
          <!-- モーダルは1つだけ用意 -->
          <div class="gallery-modal micromodal-slide" id="modal-gallery" aria-hidden="true">
            <div class="gallery-modal__overlay" tabindex="-1" data-micromodal-close>
              <div class="gallery-modal__container" role="dialog" aria-modal="true"
                aria-labelledby="gallery-modal-title" data-micromodal-close>
                <header class="gallery-modal__header">
                  <button class="gallery-modal__close" aria-label="閉じる" data-micromodal-close></button>
                </header>
                <div class="gallery-modal__content">
                  <img class="gallery__image-lg" src="" alt="" id="modal-gallery-img" data-micromodal-close>
                </div>
              </div>
            </div>
          </div>


        <?php
        // Smart Custom Fields の繰り返しフィールドを取得
        $gallery = SCF::get('about-us_gallery');
        if ( $gallery ) : ?>

          <div class="gallery__items">
            <?php foreach ( $gallery as $item ) : ?>
                <?php
                $image_id = $item['about-us_gallery-image']; // サブフィールド名
                $image_url = wp_get_attachment_image_url( $image_id, 'full' ); // サイズ指定
                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                ?>
                <div class="gallery__item">
                  <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>"
                    loading="lazy" data-micromodal-trigger="modal-gallery" data-img="<?php echo esc_url($image_url); ?>"
                    data-alt="<?php echo esc_attr($image_alt); ?>">
                </div>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
        </div>
      </div>
    </section>
<?php get_footer(); ?>