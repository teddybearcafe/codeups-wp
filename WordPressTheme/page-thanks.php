<?php get_header(); ?>

  <main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/contact-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/contact-mv-sp.jpg" alt="砂浜に波が寄せる様子">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">contact</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="thanks-breadcrumb">
      <div class="thanks-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
    </div>
    </div><!-- breadcrumb -->
    
    <section class="thanks">
      <div class="thanks__inner inner">
        <p class="thanks__text">お問い合わせ内容を送信完了しました。</p>
        <p class="thanks__text">
          このたびは、お問い合わせ頂き<br class="md-none">誠にありがとうございます。<br>
          お送り頂きました内容を確認の上、<br class="md-none">3営業日以内に折り返しご連絡させて頂きます。<br>
          また、ご記入頂いたメールアドレスへ、<br class="md-none">自動返信の確認メールをお送りしております。
        </p>

      </div>
    </section>
    <?php get_footer(); ?>