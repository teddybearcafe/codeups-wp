<?php get_header(); ?>
<main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-mv-sp.jpg" alt="海辺に浮かぶダイバー">
      </picture>
      <div class="mv-individual__body">
        <h1 class="mv-individual__title">price</h1>
      </div>
    </div>

    <!-- breadcrumb -->
    <div class="price-breadcrumb">
      <div class="price-breadcrumb__inner inner">
      <?php get_template_part('parts/breadcrumb'); ?>
      </div>
    </div><!-- breadcrumb -->

    <div class="price-body">
      <div class="price-body__inner inner">
        <ul class="price-body__table-list">
          <?php
          // グループごとの見出しタイトル（日本語ラベルをここで定義）
          $price_groups = [
            'price-certificate' => 'ライセンス講習',
            'price-experience'  => '体験ダイビング',
            'price-fun'         => 'ファンダイビング',
            'price-special'     => 'スペシャルダイビング',
          ];

        foreach ( $price_groups as $group_key => $group_label ) :
          $group_data = SCF::get( $group_key );
          if ( !empty($group_data) && is_array($group_data) ) : ?>
            <li class="price-body__table-item price-table">
              <div class="price-table__category-title-box">
                <img class="price-table__icon" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-table-icon.svg" alt="料金表のアイコン">
                <div class="price-table__category-title"><?php echo esc_html( $group_label ); ?></div>
              </div>
              <dl class="price-table__price-list">
                <?php foreach ( $group_data as $row ) :
                  // サブフィールド名は SCF 管理画面で設定したもの
                  $index = $row[ $group_key . '-index' ] ?? '';
                  $price = $row[ $group_key . '-price' ] ?? '';
                  if ( $index || $price ) : ?>
                    <div class="price-table__price-items">
                      <dt class="price-table__price-item"><?php echo nl2br( esc_html( $index ) ); ?></dt>
                      <dd class="price-table__price">&yen;<?php echo number_format_i18n( (int) $price ); ?></dd>
                    </div>
                  <?php endif;
                endforeach; ?>
              </dl>
            </li>
          <?php endif;
        endforeach;
        ?>

      </ul>          
          



          <!-- <li class="price-body__table-item price-table">
            <div class="price-table__category-title-box">
              <img class="price-table__icon" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-table-icon.svg" alt="料金表のアイコン">
              <div class="price-table__category-title">ライセンス講習</div>
            </div>
            <dl class="price-table__price-list">
              <div class="price-table__price-items">
                <dt class="price-table__price-item">オープンウォーター<br class="md-none">ダイバーコース</dt>
                <dd class="price-table__price">¥50,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">アドバンスド<br class="md-none">オープンウォーターコース</dt>
                <dd class="price-table__price">¥60,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">レスキュー＋EFRコース</dt>
                <dd class="price-table__price">¥70,000</dd>
              </div>
            </dl>
          </li>
          <li class="price-body__table-item price-table">
            <div class="price-table__category-title-box">
              <img class="price-table__icon" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-table-icon.svg" alt="料金表のアイコン">
              <div class="price-table__category-title">体験ダイビング</div>
            </div>
            <dl class="price-table__price-list">
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ビーチ体験ダイビング<br class="md-none">（半日）</dt>
                <dd class="price-table__price">¥7,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ビーチ体験ダイビング<br class="md-none">（1日）</dt>
                <dd class="price-table__price">¥14,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ボート体験ダイビング<br class="md-none">（半日）</dt>
                <dd class="price-table__price">¥10,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ボート体験ダイビング<br class="md-none">（1日）</dt>
                <dd class="price-table__price">¥18,000</dd>
              </div>
            </dl>
          </li>
          <li class="price-body__table-item price-table">
            <div class="price-table__category-title-box">
              <img class="price-table__icon" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-table-icon.svg" alt="料金表のアイコン">
              <div class="price-table__category-title">ファンダイビング</div>
            </div>
            <dl class="price-table__price-list">
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ビーチダイビング<br class="md-none">（2ダイブ）</dt>
                <dd class="price-table__price">¥14,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ボートダイビング<br class="md-none">（2ダイブ）</dt>
                <dd class="price-table__price">¥18,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">スペシャルダイビング<br class="md-none">（2ダイブ）</dt>
                <dd class="price-table__price">¥24,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ナイトダイビング<br class="md-none">（1ダイブ）</dt>
                <dd class="price-table__price">¥10,000</dd>
              </div>
            </dl>
          </li>
          <li class="price-body__table-item price-table">
            <div class="price-table__category-title-box">
              <img class="price-table__icon" src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/price-table-icon.svg" alt="料金表のアイコン">
              <div class="price-table__category-title">スペシャルダイビング</div>
            </div>
            <dl class="price-table__price-list">
              <div class="price-table__price-items">
                <dt class="price-table__price-item">貸切ダイビング<br class="md-none">（2ダイブ）</dt>
                <dd class="price-table__price">¥24,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">1日ダイビング<br class="md-none">（3ダイブ）</dt>
                <dd class="price-table__price">¥32,000</dd>
              </div>
              <div class="price-table__price-items">
                <dt class="price-table__price-item">ナイトダイビング<br class="md-none">（2ダイブ）</dt>
                <dd class="price-table__price">¥14,000</dd>
              </div>
            </dl>
          </li>
        </ul> -->
      </div>
    </div>
<?php get_footer(); ?>