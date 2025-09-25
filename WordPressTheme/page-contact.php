<?php get_header(); ?>
<main>
    <div class="mv-individual">
      <picture class="mv-individual__img">
        <source srcset="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/appendix-mv.jpg" media="(min-width: 767px)">
        <img src="<?php echo esc_url( get_theme_file_uri() ); ?>/assets/images/appendix-mv-sp.jpg" alt="カラフルな熱帯魚たちがサンゴ礁のまわりを泳ぐ美しい海中の様子">
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
              <form method="post" action="mail.php" class="contact-form">
                <div class="contact-form__answer">※必須項目が入力されていません。<br class="contact-form__md-none">入力してください。</div>

                <dl class="contact-form__body">
                  <div class="contact-form__unit">
                    <dt class="contact-form__unit-head"><label for="name">お名前<span
                          class="contact-form__required">必須</span></label></dt>
                    <dd class="contact-form__unit-contents">
                      <input id="name" name="name" type="text" placeholder="沖縄　太郎" class="contact-form__input">
                    </dd>
                  </div>
                  <div class="contact-form__unit">
                    <dt class="contact-form__unit-head"><label for="mail">メールアドレス<span
                          class="contact-form__required">必須</span></label></dt>
                    <dd class="contact-form__unit-contents">
                      <input id="mail" name="email" type="text" placeholder="aaa000@ggmail.com"
                        class="contact-form__input">
                    </dd>
                  </div>
                  <div class="contact-form__unit">
                    <dt class="contact-form__unit-head"><label for="phone">電話番号<span
                          class="contact-form__required">必須</span></label></dt>
                    <dd class="contact-form__unit-contents">
                      <input id="phone" name="phone" type="text" placeholder="000-0000-0000" class="contact-form__input"
                        pattern="\d{2,4}-?\d{2,4}-?\d{4}">
                    </dd>
                  </div>
                  <!-- チェックボックス -->
                  <div class="contact-form__unit contact-form__unit--checkbox">
                    <dt class="contact-form__unit-head">お問合せ項目<span class="contact-form__required">必須</span></dt>
                    <dd class="contact-form__unit-contents contact-form__unit-contents--checkbox">
                      <ul class="contact-form__checkbox-list">
                        <li class="contact-form__checkbox-item">
                          <input type="checkbox" name="contact-type[]" id="diving-course"
                            class="contact-form__form-checkbox">
                          <label for="diving-course" class="contact-form__form-label">ダイビング講習について</label>
                        </li>
                        <li class="contact-form__checkbox-item">
                          <input type="checkbox" name="contact-type[]" id="fundiving"
                            class="contact-form__form-checkbox">
                          <label for="fundiving" class="contact-form__form-label">ファンダイビングについて</label>
                        </li>
                        <li class="contact-form__checkbox-item">
                          <input type="checkbox" name="contact-type[]" id="trial" class="contact-form__form-checkbox">
                          <label for="trial" class="contact-form__form-label">体験ダイビングについて</label>
                        </li>
                      </ul>
                    </dd>
                  </div>
                  <!-- セレクトボックス -->
                  <div class="contact-form__unit contact-form__unit--selectbox">
                    <dt class="contact-form__unit-head">キャンペーン</dt>
                    <dd class="contact-form__unit-contents contact-form__unit-contents--select">
                      <select name="campaign" id="campaign" class="contact-form__form-select">
                        <option value="" hidden selected>キャンペーン内容を選択</option>
                        <option value="ライセンス取得">ライセンス取得</option>
                        <option value="貸切体験ダイビング">貸切体験ダイビング</option>
                        <option value="ナイトダイビング">ナイトダイビング</option>
                        <option value="貸切ファンダイビング">貸切ファンダイビング</option>
                      </select>
                    </dd>
                  </div>
                  <!-- テキストボックス -->
                  <div class="contact-form__unit contact-form__unit--textarea">
                    <dt class="contact-form__unit-head">お問合せ内容<span class="contact-form__required">必須</span></dt>
                    <dd class="contact-form__unit-contents contact-form__unit-contents--textarea">
                      <textarea name="message" rows="6" cols="30" class="contact-form__textarea"></textarea>
                    </dd>
                  </div>
                </dl>

                <!-- 送信する　チェックボックス -->
                <div class="contact-form__confirm-area">
                  <input type="checkbox" id="consent1" autocomplete="off"
                    class="contact-form__form-checkbox contact-form__form-checkbox--consent">
                  <label for="consent1"
                    class="contact-form__form-label contact-form__form-label--consent">個人情報の取り扱いについて同意のうえ送信します。</label>
                  <button type="submit" class="button-entry button button--consent" disabled>
                    <span class="button__front">Send</span>
                    <span class="button__arrow">
                      <svg viewBox="0 0 42 8" fill="none">
                        <path d="M1 7H41L34 1" stroke-linecap="round" stroke-linejoin="round" />
                      </svg>
                    </span>
                  </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer(); ?>