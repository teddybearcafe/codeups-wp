<?php get_header(); ?>
<main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/information-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/information-mv-sp.jpg" alt="青い海のなか蝶々魚が泳ぐ様子">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">information</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="information-breadcrumb">
      <div class="information-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
      </div>
    </div><!-- breadcrumb -->

    <!-- main contents -->
    <div class="information-contents__wrapper">
      <div class="information-contents__inner inner">
        <div class="information-contents__tab-box tab-box">
          <ul class="tab-box__tabs tab-area">
            <li class="tab-area__item tab-button tab-button--active" data-tab="tab-license">
              <div class="tab-button__link">
                <img class="tab-button__link-icon tab-button__link-icon--active"
                  src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-button-icon-license.svg" alt="">ライセンス<br class="md-none">講習
              </div>
            </li>
            <li class="tab-area__item tab-button" data-tab="tab-fundiving">
              <div class="tab-button__link">
                <img class="tab-button__link-icon" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-button-icon-fundiving.svg" alt="">ファン<br
                  class="md-none">ダイビング
              </div>
            </li>
            <li class="tab-area__item tab-button" data-tab="tab-diving">
              <div class="tab-button__link">
                <img class="tab-button__link-icon" src="<?php echo get_theme_file_uri(); ?>/assets/images/tab-button-icon-diving.svg" alt="">体験<br
                  class="md-none">ダイビング
              </div>
            </li>
          </ul>
          <div class="tab-box__panels panel-area">
            <div data-tab="tab-license" class="panel-area__item tab-panel tab-panel--active">
              <div class="tab-panel__body">
                <h2 class="tab-panel__title">ライセンス講習</h2>
                <div class="tab-panel__text">
                  泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                </div>
              </div>
              <div class="tab-panel__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-license.jpg" alt="ダイビングライセンス講習の様子">
              </div>
            </div>
            <div data-tab="tab-fundiving" class="panel-area__item tab-panel">
              <div class="tab-panel__body">
                <h2 class="tab-panel__title">ファンダイビング</h2>
                <div class="tab-panel__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </div>
              </div>
              <div class="tab-panel__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-fundiving.jpg" alt="海の中をたくさんの魚が泳ぐ様子">
              </div>
            </div>
            <div data-tab="tab-diving" class="panel-area__item tab-panel">
              <div class="tab-panel__body">
                <h2 class="tab-panel__title">体験ダイビング</h2>
                <div class="tab-panel__text">
                  ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
                </div>
              </div>
              <div class="tab-panel__image">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/info-diving.jpg" alt="海の中を蝶々ウオが泳ぐ様子">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>