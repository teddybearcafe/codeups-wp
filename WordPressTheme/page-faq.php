<?php get_header(); ?>

  <main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/faq-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/faq-mv-sp.jpg" alt="白い砂浜とエメラルドグリーンの海が広がるビーチ">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">FAQ</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="faq-breadcrumb">
      <div class="faq-breadcrumb_inner inner">
          <?php get_template_part('parts/breadcrumb'); ?>
      </div>
    </div><!-- breadcrumb -->

    <section class="faq__wrapper">
      <div class="faq__inner inner">
        <ul class="faq__list">
          <li class="faq__item faq-accordion">
            <div class="faq-accordion__header faq-accordion__header--is-open">
              <p>ここに質問が入ります。</p>
            </div>
            <div class="faq-accordion__panel faq-accordion__panel--is-open">
              <p class="faq-accordion__panel-text">
                ここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入りますここに質問の答えが入ります。
              </p>
            </div>
          </li>

        <?php
        // SCF で繰り返しフィールド「faq」を作成している前提
        // サブフィールド名は "question" と "answer"
        $faqs = SCF::get('faq');
        if ( $faqs && is_array($faqs) ) :
          foreach ( $faqs as $faq ) :
            $question = $faq['faq-question'] ?? '';
            $answer   = $faq['faq-answer'] ?? '';
            if ( $question || $answer ) :
        ?>
          <li class="faq__item faq-accordion">
            <div class="faq-accordion__header faq-accordion__header--is-open">
              <p><?php echo esc_html( $question ); ?></p>
            </div>
            <div class="faq-accordion__panel faq-accordion__panel--is-open">
              <p class="faq-accordion__panel-text">
                <?php echo nl2br( esc_html( $answer ) ); ?>
              </p>
            </div>
          </li>
        <?php
            endif;
          endforeach;
        endif;
        ?>

        </ul>
      </div>
    </section>


<?php get_footer(); ?>