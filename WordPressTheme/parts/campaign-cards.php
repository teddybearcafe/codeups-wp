        <ul class="campaign-contents__card-list">
            <?php if (have_posts()):
            while (have_posts()) : the_post(); ?>
            <li class="campaign-contents__card-item">
            <div class="campaign-card">
              <figure class="campaign-card__figure campaign-card__figure--large">
                <?php $image = get_field('image'); if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                <?php endif; ?>
              </figure>
              <div class="campaign-card__body">
                <div class="campaign-card__header">
                  <div class="campaign-card__category">
                    <span><?php the_terms( get_the_ID(), 'campaign_category'); ?></span>
                  </div>
                  <div class="campaign-card__title campaign-card__title--large">
                    <span><?php the_title(); ?></span>
                  </div>
                </div>
                <div class="campaign-card__price campaign-card__price--subpage">
                  <div class="campaign-card__price-description">全部コミコミ（お一人様）</div>
                  <div class="campaign-card__prices campaign-card__prices--subpage">
                    <?php
                    $normal_price = get_field('campaign_normal_price');
                    $off_price = get_field('campaign_off_price');
                    ?>
                      <div class="campaign-card__cancell-price">&yen;<?php echo number_format_i18n( (int) $normal_price ); ?></div>
                      <div class="campaign-card__selling-price">&yen;<?php echo number_format_i18n( (int) $off_price ); ?></div>
                    </div>
                </div>

                <div class="campaign-card__content-wrapper">
                  <div class="campaign-card__text">
                    <p><?php echo get_field('campaign_text') ?></p>
                  </div>
                  <div class="campaign-card__contact-section">
                    <div class="campaign-card__contact-note">
                      <p class="campaign-card__contact-date"><?php echo get_field('campaign_start') ?>-<?php echo get_field('campaign_end') ?></p>
                      <p class="campaign-card__contact-text">ご予約・お問い合わせはコチラ</p>
                    </div>
                    <div class="campaign-card__contact-button">
                      <a href="./contact.html" class=" button">
                        <span class="button__front">Contact us</span>
                        <span class="button__arrow">
                          <svg viewBox="0 0 42 8" fill="none">
                            <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                        </span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </li>
            <?php endwhile; endif; ?>
        </ul>