
        <ul class="page-voice-contents__voice-cards voice-cards voice-cards--subpage-voice">
            <?php if (have_posts()):
            while (have_posts()) : the_post(); ?>
          <li class="voice-cards__item">
            <div class="voice-card voice-card--subpage-voice">
              <div class="voice-card__wrapper">
                <div class="voice-card__header voice-card__header--subpage-voice">
                  <div class="voice-card__header-label">
                    <div class="voice-card__header-label-gender"><?php the_field('age'); ?>(<?php the_field('gender'); ?>)</div>
                    <div class="voice-card__header-label-category"><?php the_terms( get_the_ID(), 'voice_category'); ?></div>
                  </div>
                  <div class="voice-card__title">
                    <span><?php the_title(); ?></span>
                  </div>
                </div>

                <div class="voice-card__figure">
                    <?php $image = get_field('image'); if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                </div>
              </div>
              <div class="voice-card__text">
                <?php the_field('customer-voice'); ?>
              </div>
            </div>
          </li>
         <?php endwhile; endif; ?>
        </ul>