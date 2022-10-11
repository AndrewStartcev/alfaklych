<?php
	/* Template Name: NEW Строительство домов
	*	 Template Post Type: page
	*/

  get_header();
?>

<div class="page new-style">
    <main class="content">
        <?php
          $construct_main_title = carbon_get_post_meta( get_the_ID(), 'construct_main_title' );
          $construct_main_content = carbon_get_post_meta( get_the_ID(), 'construct_main_content' );
          $construct_main_image = carbon_get_post_meta( get_the_ID(), 'construct_main_image' );
        ?>
        <section class="building-main">
          <div class="container">
            <h1><?php echo $construct_main_title ?></h1>
            <div class="building-main__body">
              <div class="building-main__content">
                <?php echo apply_filters( 'the_content', $construct_main_content ); ?>
              </div>
              <div class="building-main__block"><?php echo wp_get_attachment_image($construct_main_image, 'full'); ?></div>
            </div>
          </div>
        </section>

        <?php
          $advantage_slider = carbon_get_post_meta( get_the_ID(), 'construct_advantage_slider' );

          if(!empty($advantage_slider)):
        ?>
        <section class="main-features">
          <div class="container">
            <div class="main-features__body">
              <?php foreach($advantage_slider as $advantage_slide): ?>
                <div class="main-features__item">
                  <div class="main-features__icon">
                    <?php echo wp_get_attachment_image($advantage_slide['icon'], 'full'); ?>
                  </div>
                  <h3><?php echo $advantage_slide['title'] ?></h3>
                  <?php echo apply_filters( 'the_content', $advantage_slide['text'] ); ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php
          $construct_1_title= carbon_get_post_meta( get_the_ID(), 'construct_1_title' );
          $construct_1_content = carbon_get_post_meta( get_the_ID(), 'construct_1_content' );
          $construct_1_image = carbon_get_post_meta( get_the_ID(), 'construct_1_image' );
          $construct_1_product = carbon_get_post_meta( get_the_ID(), 'construct_1_product' );
          $construct_1_features_yes = carbon_get_post_meta( get_the_ID(), 'construct_1_features_yes' );
          $construct_1_features_no = carbon_get_post_meta( get_the_ID(), 'construct_1_features_no' );
        ?>
        <section class="building-product">
          <div class="container">
            <h2><?php echo $construct_1_title ?></h2>
            <div class="building-product__body">
              <div class="building-product__image">
                <?php echo wp_get_attachment_image($construct_1_image, 'full'); ?>
              </div>
              <div class="building-product__content">
                <?php echo apply_filters( 'the_content', $construct_1_content ); ?>
                <a class="btn" href="#callbackwidget">Узнать условия кредита</a>
              </div>
            </div>
            <?php if(!empty($construct_1_product)): ?>
            <div class="building-product__items">
              <?php foreach($construct_1_product as $c1_product): ?>
              <div class="building-product__card building-card">
                <div class="building-card__cover">
                  <?php echo wp_get_attachment_image($c1_product['image'], 'full'); ?>
                </div>
                <div class="building-card__content">
                  <div class="building-card__head">
                    <p class="building-card__size"><?php echo $c1_product['size'] ?></p>
                    <p class="building-card__loft"><?php echo $c1_product['loft'] ?></p>
                    <p class="building-card__room"><?php echo $c1_product['room'] ?></p>
                    <p class="building-card__bath"><?php echo $c1_product['bath'] ?></p>
                  </div>
                  <p class="subtitle"><?php echo $c1_product['category'] ?></p>
                  <h3><?php echo $c1_product['name'] ?></h3>
                  <div class="building-card__price"><?php echo $c1_product['price'] ?></div>
                  <a class="btn" href="<?php echo get_permalink($c1_product['link'][0]['id'])?>">Посмотреть проект</a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="building-product__features">
              <h3>Преимущества и недостатки</h3>
              <div class="building-product__list">
                <?php if(!empty($construct_1_features_yes)): ?>
                  <div class="building-product__column yes">
                    <?php foreach($construct_1_features_yes as $c1_yes): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$c1_yes['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <?php if(!empty($construct_1_features_no)): ?>
                  <div class="building-product__column no">
                    <?php foreach($construct_1_features_no as $c1_no): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$c1_no['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

        <?php
          $offer_title = carbon_get_theme_option( 'offer_title' );
          $offer_shortcode = carbon_get_theme_option( 'offer_shortcode' );
          $offer_text = carbon_get_theme_option( 'offer_text' );
        ?>
        <section class="offer">
          <div class="container">
            <div class="offer__wrapper">
              <div class="offer__content">
                <h2><?php echo $offer_title ?></h2>
                <p><?php echo  $offer_text ?></p>
              </div>
              <div class="offer__form">
                <?php echo do_shortcode($offer_shortcode) ?>
              </div>
            </div>
          </div>
        </section>

        <?php
          $construct_2_title= carbon_get_post_meta( get_the_ID(), 'construct_2_title' );
          $construct_2_content = carbon_get_post_meta( get_the_ID(), 'construct_2_content' );
          $construct_2_image = carbon_get_post_meta( get_the_ID(), 'construct_2_image' );
          $construct_2_product = carbon_get_post_meta( get_the_ID(), 'construct_2_product' );
          $construct_2_features_yes = carbon_get_post_meta( get_the_ID(), 'construct_2_features_yes' );
          $construct_2_features_no = carbon_get_post_meta( get_the_ID(), 'construct_2_features_no' );
        ?>
        <section class="building-product">
          <div class="container">
            <h2><?php echo $construct_2_title ?></h2>
            <div class="building-product__body">
              <div class="building-product__image">
                <?php echo wp_get_attachment_image($construct_2_image, 'full'); ?>
              </div>
              <div class="building-product__content">
                <?php echo apply_filters( 'the_content', $construct_2_content ); ?>
                <a class="btn" href="#callbackwidget">Узнать условия кредита</a>
              </div>
            </div>
            <?php if(!empty($construct_2_product)): ?>
            <div class="building-product__items">
              <?php foreach($construct_2_product as $c2_product): ?>
              <div class="building-product__card building-card">
                <div class="building-card__cover">
                  <?php echo wp_get_attachment_image($c2_product['image'], 'full'); ?>
                </div>
                <div class="building-card__content">
                  <div class="building-card__head">
                    <p class="building-card__size"><?php echo $c2_product['size'] ?></p>
                    <p class="building-card__loft"><?php echo $c2_product['loft'] ?></p>
                    <p class="building-card__room"><?php echo $c2_product['room'] ?></p>
                    <p class="building-card__bath"><?php echo $c2_product['bath'] ?></p>
                  </div>
                  <p class="subtitle"><?php echo $c2_product['category'] ?></p>
                  <h3><?php echo $c2_product['name'] ?></h3>
                  <div class="building-card__price"><?php echo $c2_product['price'] ?></div>
                  <a class="btn" href="<?php echo get_permalink($c2_product['link'][0]['id'])?>">Посмотреть проект</a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="building-product__features">
              <h3>Преимущества и недостатки</h3>
              <div class="building-product__list">
                <?php if(!empty($construct_2_features_yes)): ?>
                  <div class="building-product__column yes">
                    <?php foreach($construct_2_features_yes as $c2_yes): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$c2_yes['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <?php if(!empty($construct_2_features_no)): ?>
                  <div class="building-product__column no">
                    <?php foreach($construct_2_features_no as $c2_no): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$c2_no['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

        <?php
            $calc_title = carbon_get_theme_option( 'calc_title' );
            $calc_programs = carbon_get_theme_option( 'calc_programs' );

            if(!empty($calc_programs)):
          ?>
          <section class="calculator">
            <div class="container">
              <h2 class="calculator__title"><?php echo $calc_title ?></h2>
              <div class="calculator__body">
                <div class="calculator__form">
                  <h4>Ипотечные программы</h4>
                  <div class="calculator__radio-group">
                    <?php foreach($calc_programs as $key => $calc_program): ?>
                    <div class="calculator__radio">
                      <input id="radio_<?php echo $key?>" type="radio" name="radio_name" data-name="<?php echo $calc_program['name'] ?>" value="<?php echo $calc_program['number'] ?>" checked="checked"/>
                      <label for="radio_<?php echo $key?>"><?php echo $calc_program['name'] ?> <span>от <?php echo $calc_program['number'] ?>%</span></label>
                    </div>
                    <?php endforeach; ?>
                  </div>
                  <?php foreach($calc_programs as $key => $calc_program): ?>
                  <div class="calculator__callout callout show" data-theme="<?php echo $calc_program['name'] ?>"><b>По программе можно:</b>
                    <ul>
                      <?php foreach($calc_program['text'] as $text): ?>
                      <li>- <?php echo $text['name'] ?></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                  <?php endforeach; ?>
                  <div class="calculator__slider">
                    <div class="calculator__slider-item">
                      <label for="">Стоимость недвижимости</label><input type="text" id="amount-1" readonly>
                      <div id="slider-range-1" data-min="353000" data-max="100000000" ></div>
                    </div>
                    <div class="calculator__slider-footer">
                      <p>от 353 000</p>
                      <p>до 100 000 000</p>
                    </div>
                  </div>
                  <div class="calculator__slider">
                    <div class="calculator__slider-item">
                      <label for="">Первоначальный взнос</label><input type="text" id="amount-2" readonly>
                      <div id="slider-range-2" data-min="95000" data-max="900000"></div>
                    </div>
                    <div class="calculator__slider-footer">
                      <p>от 95 000</p>
                      <p>до 900 000</p>
                    </div>
                  </div>
                  <div class="calculator__slider">
                    <div class="calculator__slider-item">
                      <label for="">Срок кредита</label><input type="text" id="amount-3" readonly>
                      <div id="slider-range-3" data-min="1" data-max="30"></div>
                    </div>
                    <div class="calculator__slider-footer">
                      <p>от 1 года</p>
                      <p>до 30 лет</p>
                    </div>
                  </div>
                </div>
                <div class="calculator__wrapper">
                  <div class="calculator__tablo tablo">
                    <div class="tablo__wrapper">
                      <div class="tablo__item">
                        <h3>Ежемесячный платеж</h3>
                        <p id="tablo-1">36 200 ₽</p>
                      </div>
                      <div class="tablo__item blue">
                        <h3>Процентная ставка</h3>
                        <p id="tablo-2"></p>
                      </div>
                      <div class="tablo__item">
                        <h3>Сумма кредита</h3>
                        <p id="tablo-3">5 350 000 ₽</p>
                      </div>
                      <div class="tablo__item">
                        <h3>Необходимый доход</h3>
                        <p id="tablo-4">50 680 ₽</p>
                      </div>
                    </div>

                    <span class="su-lightbox" data-mfp-src="#forma" data-mfp-type="inline" data-mobile="yes"><button class="btn" >Получить одобрение</button></span>
                  </div>
                </div>
              </div>
            </div>
          </section>
        <?php endif; ?>

        <?php
          $construct_3_title= carbon_get_post_meta( get_the_ID(), 'construct_3_title' );
          $construct_3_content = carbon_get_post_meta( get_the_ID(), 'construct_3_content' );
          $construct_3_image = carbon_get_post_meta( get_the_ID(), 'construct_3_image' );
          $construct_3_product = carbon_get_post_meta( get_the_ID(), 'construct_3_product' );
          $construct_3_features_yes = carbon_get_post_meta( get_the_ID(), 'construct_3_features_yes' );
          $construct_3_features_no = carbon_get_post_meta( get_the_ID(), 'construct_3_features_no' );
        ?>
        <section class="building-product">
          <div class="container">
            <h2><?php echo $construct_3_title ?></h2>
            <div class="building-product__body">
              <div class="building-product__image">
                <?php echo wp_get_attachment_image($construct_3_image, 'full'); ?>
              </div>
              <div class="building-product__content">
                <?php echo apply_filters( 'the_content', $construct_3_content ); ?>
                <a class="btn" href="#callbackwidget">Узнать условия кредита</a>
              </div>
            </div>
            <?php if(!empty($construct_3_product)): ?>
            <div class="building-product__items">
              <?php foreach($construct_3_product as $с3_product): ?>
              <div class="building-product__card building-card">
                <div class="building-card__cover">
                  <?php echo wp_get_attachment_image($с3_product['image'], 'full'); ?>
                </div>
                <div class="building-card__content">
                  <div class="building-card__head">
                    <p class="building-card__size"><?php echo $с3_product['size'] ?></p>
                    <p class="building-card__loft"><?php echo $с3_product['loft'] ?></p>
                    <p class="building-card__room"><?php echo $с3_product['room'] ?></p>
                    <p class="building-card__bath"><?php echo $с3_product['bath'] ?></p>
                  </div>
                  <p class="subtitle"><?php echo $с3_product['category'] ?></p>
                  <h3><?php echo $с3_product['name'] ?></h3>
                  <div class="building-card__price"><?php echo $с3_product['price'] ?></div>
                  <a class="btn" href="<?php echo get_permalink($с3_product['link'][0]['id'])?>">Посмотреть проект</a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="building-product__features">
              <h3>Преимущества и недостатки</h3>
              <div class="building-product__list">
                <?php if(!empty($construct_3_features_yes)): ?>
                  <div class="building-product__column yes">
                    <?php foreach($construct_3_features_yes as $с3_yes): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$с3_yes['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <?php if(!empty($construct_3_features_no)): ?>
                  <div class="building-product__column no">
                    <?php foreach($construct_3_features_no as $с3_no): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$с3_no['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

        <?php
          $feedback_title = carbon_get_theme_option( 'feedback_title' );
          $feedback_cards = carbon_get_theme_option( 'feedback_cards' );
          $feedback_link = carbon_get_theme_option( 'feedback_link' );
        ?>
        <?php if(!empty($feedback_cards)): ?>
        <section class="feedbacks">
          <div class="container">
            <h2 class="feedbacks__title"><?php echo $feedback_title ?></h2>

            <div class="feedbacks__slider">
              <div class="swiper-wrapper">
                <?php foreach($feedback_cards as $feedback_card): ?>
                <div class="swiper-slide">
                  <div class="feedbacks__item">
                    <?php if($feedback_card['file'] || $feedback_card['photo']): ?>
                    <div class="feedbacks__video">
                      <?php if($feedback_card['file']): ?>
                        <video src="<?php echo $feedback_card['file'] ?>" autoplay="autoplay" controls="controls"></video>
                      <?php else: ?>
                        <?php echo wp_get_attachment_image($feedback_card['photo'], 'full'); ?>
                      <?php endif; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($feedback_card['text']): ?>
                    <div class="feedbacks__content">
                      <p><?php echo $feedback_card['text'] ?></p>
                    </div>
                    <?php endif; ?>
                  </div>
                  <div class="feedbacks-item__footer">
                    <h3><?php echo $feedback_card['name'] ?></h3>
                    <span><?php echo $feedback_card['date'] ?></span>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
            <div class="feedbacks__footer">
              <a class="btn feedbacks__btn" href="<?php echo $feedback_link ?>">Все отзывы</a>

              <div class="feedbacks__btn-group">
                <button class="feedbacks__button feedbacks__button--prev">
                  <svg fill="none" height="24" stroke-width="1.5"
                    width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <button class="feedbacks__button feedbacks__button--next">
                  <svg fill="none" height="24" stroke-width="1.5"
                    width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </section>
        <?php endif; ?>

        <?php
          $construct_4_title= carbon_get_post_meta( get_the_ID(), 'construct_4_title' );
          $construct_4_content = carbon_get_post_meta( get_the_ID(), 'construct_4_content' );
          $construct_4_image = carbon_get_post_meta( get_the_ID(), 'construct_4_image' );
          $construct_4_product = carbon_get_post_meta( get_the_ID(), 'construct_4_product' );
          $construct_4_features_yes = carbon_get_post_meta( get_the_ID(), 'construct_4_features_yes' );
          $construct_4_features_no = carbon_get_post_meta( get_the_ID(), 'construct_4_features_no' );
        ?>
        <section class="building-product">
          <div class="container">
            <h2><?php echo $construct_4_title ?></h2>
            <div class="building-product__body">
              <div class="building-product__image">
                <?php echo wp_get_attachment_image($construct_4_image, 'full'); ?>
              </div>
              <div class="building-product__content">
                <?php echo apply_filters( 'the_content', $construct_4_content ); ?>
                <a class="btn" href="#callbackwidget">Узнать условия кредита</a>
              </div>
            </div>
            <?php if(!empty($construct_4_product)): ?>
            <div class="building-product__items">
              <?php foreach($construct_4_product as $с4_product): ?>
              <div class="building-product__card building-card">
                <div class="building-card__cover">
                  <?php echo wp_get_attachment_image($с4_product['image'], 'full'); ?>
                </div>
                <div class="building-card__content">
                  <div class="building-card__head">
                    <p class="building-card__size"><?php echo $с4_product['size'] ?></p>
                    <p class="building-card__loft"><?php echo $с4_product['loft'] ?></p>
                    <p class="building-card__room"><?php echo $с4_product['room'] ?></p>
                    <p class="building-card__bath"><?php echo $с4_product['bath'] ?></p>
                  </div>
                  <p class="subtitle"><?php echo $с4_product['category'] ?></p>
                  <h3><?php echo $с4_product['name'] ?></h3>
                  <div class="building-card__price"><?php echo $с4_product['price'] ?></div>
                  <a class="btn" href="<?php echo get_permalink($с4_product['link'][0]['id'])?>">Посмотреть проект</a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <div class="building-product__features">
              <h3>Преимущества и недостатки</h3>
              <div class="building-product__list">
                <?php if(!empty($construct_4_features_yes)): ?>
                  <div class="building-product__column yes">
                    <?php foreach($construct_4_features_yes as $с4_yes): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$с4_yes['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
                <?php if(!empty($construct_4_features_no)): ?>
                  <div class="building-product__column no">
                    <?php foreach($construct_4_features_no as $с4_no): ?>
                    <div class="building-product__item">
                      <?php echo apply_filters( 'the_content',$с4_no['text'] ); ?>
                    </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </section>

        <?php
          $contacts_title = carbon_get_theme_option( 'contacts_title' );
          $contacts_links = carbon_get_theme_option( 'contacts_links' );
          $contacts_address = carbon_get_theme_option( 'contacts_address' );
          $contacts_socials = carbon_get_theme_option( 'contacts_socials' );
          $contacts_map = carbon_get_theme_option( 'contacts_map' );
        ?>
        <section class="contacts">
          <div class="contacts__map">
            <?php echo $contacts_map ?>
          </div>
          <div class="container">
            <div class="contacts__item">
              <h2> <?php echo $contacts_title ?></h2>
              <?php foreach($contacts_links as $contacts_link): ?>
                <div class="contacts-group">
                  <div class="contacts-group__icon">
                    <?php echo wp_get_attachment_image($contacts_link['icon'], 'full'); ?>
                  </div>
                  <div class="contacts-group__content"><a href="<?php echo $contacts_link['link'] ?>"><?php echo $contacts_link['name'] ?></a>
                    <?php echo apply_filters( 'the_content', $contacts_link['text'] ); ?>
                  </div>
                </div>
              <?php endforeach; ?>
              <?php foreach($contacts_address as $contacts_addres): ?>
              <div class="contacts-address">
                <div class="contacts-group">
                  <div class="contacts-group__icon">
                    <?php echo wp_get_attachment_image($contacts_addres['icon'], 'full'); ?>
                  </div>
                  <div class="contacts-group__content"><span><?php echo $contacts_addres['name'] ?></span></div>
                </div>
              </div>
              <?php endforeach; ?>
              <div class="contacts__social">
              <?php foreach($contacts_socials as $contacts_social): ?>
                <a href="<?php echo $contacts_social['link'] ?>">
                  <?php echo wp_get_attachment_image($contacts_social['icon'], 'full'); ?>
                </a>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>

<?php get_footer(); ?>
