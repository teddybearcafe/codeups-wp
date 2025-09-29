<?php get_header(); ?>
<main>
  <div class="mv-individual">
    <picture class="mv-individual__img">
      <source srcset="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/appendix-mv.jpg" media="(min-width: 767px)">
      <img src="<?php echo esc_url(get_theme_file_uri()); ?>/assets/images/appendix-mv-sp.jpg" alt="カラフルな熱帯魚たちがサンゴ礁のまわりを泳ぐ美しい海中の様子">
    </picture>
    <div class="mv-individual__body">
      <h1 class="mv-individual__title">contact</h1>
    </div>
  </div>

  <!-- breadcrumb -->
  <div class="contact-breadcrumb">
    <div class="contact-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
  </div><!-- breadcrumb -->

  <!-- contact main section -->
  <section class="contact-body">
    <div class="contact-body__inner inner">
      <div class="contact-body__contact-form">
        <div class="contact">
          <div class="contact__content">
            <?php echo do_shortcode('[contact-form-7 id="8f9d464" title="お問い合わせ"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer(); ?>