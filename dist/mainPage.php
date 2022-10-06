<?php
	/* Template Name: NEW Главная
	*	 Template Post Type: page
	*/

  get_header();
?>

<div class="page new-style">
  <main class="content">
    <?php
      $main_slider = carbon_get_post_meta( get_the_ID(), 'main_slider' );

      if(!empty($main_slider)):
    ?>
    <section class="main-slider" id="main-slider">
      <div class="swiper-wrapper">
        <?php foreach($main_slider as $main_slide): ?>
          <div class="swiper-slide">
            <div class="main-slider__main"
              style="background: url('<?php echo wp_get_attachment_image_url($main_slide['background'], 'full') ?>') center center / cover no-repeat">
              <div class="container">
                <div class="main-slider__body">
                  <?php if($main_slide['subtitle']): ?>
                    <div class="main-slider__subtitle">
                      <p><?php echo $main_slide['subtitle'] ?></p>
                    </div>
                  <?php endif; ?>
                  <div class="main-slider__title">
                    <h2><?php echo $main_slide['title'] ?></h2>
                  </div>
                  <?php if($main_slide['text']): ?>
                    <div class="main-slider__text">
                      <?php echo apply_filters( 'the_content', $main_slide['text'] ); ?>
                    </div>
                  <?php endif; ?>
                  <a class="btn main-slider__btn" href="#callbackwidget"><?php echo $main_slide['btn_text'] ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="main-slider__footer">
        <div class="container">
          <div class="main-slider__pagination"></div>
          <div class="main-slider__btn-group">
            <button class="main-slider__button main-slider__button--prev"><svg fill="none" height="24"
                stroke-width="1.5" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
            <button class="main-slider__button main-slider__button--next"><svg fill="none" height="24"
                stroke-width="1.5" width="24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 6l-6 6 6 6" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php
      $advantage_slider = carbon_get_post_meta( get_the_ID(), 'advantage_slider' );

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
      $types_title = carbon_get_post_meta( get_the_ID(), 'types_title' );
      $types_cards = carbon_get_post_meta( get_the_ID(), 'types_cards' );

      if(!empty($types_cards)):
    ?>
    <section class="type-post">
      <div class="container">
        <h2 class="type-post__title"><?php echo $types_title ?></h2>
        <div class="type-post__body">
          <?php foreach($types_cards as $types_card): ?>
          <div class="type-post__item">
            <div class="type-post__marker"><?php echo $types_card['marker'] ?></div>
            <div class="type-post__icon">
              <?php echo wp_get_attachment_image($types_card['icon'], 'full'); ?>
            </div>
            <h3 class="type-post__name"><?php echo $types_card['title'] ?></h3>
            <p class="type-post__descr"><?php echo $types_card['text'] ?></p>
            <a class="btn type-post__btn" href="<?php echo get_permalink($types_card['link'][0]['id'])?>">Подробнее</a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <?php
      $about_cards = carbon_get_post_meta( get_the_ID(), 'about_cards' );
      $about_title = carbon_get_post_meta( get_the_ID(), 'about_title' );
      $about_text = carbon_get_post_meta( get_the_ID(), 'about_text' );
      $about_link = carbon_get_post_meta( get_the_ID(), 'about_link' );
    ?>
    <section class="main-about">
      <div class="container">
        <div class="main-about__body">
          <?php if(!empty($about_cards)): ?>
          <div class="main-about__numbers">
            <?php foreach($about_cards as $about_card): ?>
              <div class="main-about__item">
                <h3><?php echo $about_card['title'] ?></h3>
                <p><?php echo $about_card['text'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="main-about__content">
            <h2><?php echo $about_title ?></h2>
            <?php echo apply_filters( 'the_content', $about_text ); ?>

            <a class="btn" href="<?php echo get_permalink($about_link[0]['id'])?>">Подробнее</a>
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
      $banky_title = carbon_get_theme_option( 'banky_title' );
      $banky_gallery = carbon_get_theme_option( 'banky_gallery' );
    ?>
    <section class="parthers">
      <div class="container">
        <h2 class="parthers__title"><?php echo $banky_title ?></h2>
        <div class="parthers__wrapper">
          <?php foreach($banky_gallery as $banky_logo): ?>
            <?php echo wp_get_attachment_image($banky_logo, 'full'); ?>
          <?php endforeach; ?>
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
