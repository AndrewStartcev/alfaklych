<?php
	/* Template Name: NEW Ипотека в новостройках
	*	 Template Post Type: page
	*/

  get_header();
?>
<div class="page new-style">
  <main class="content">
    <?php
      $ipoteka_now_main_title = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_main_title' );
      $ipoteka_now_main_numbers = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_main_number' );
      $ipoteka_now_main_image = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_main_image' );
      $ipoteka_now_main_content = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_main_content' );
      $ipoteka_now_main_btn_text = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_main_btn_text' );
      $ipoteka_now_main_btn_link = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_main_btn_link' );
    ?>
    <section class="ipoteka-main">
      <div class="container">
        <h1><?php echo $ipoteka_now_main_title ?></h1>
        <div class="ipoteka-main__body">
          <?php if(!empty($ipoteka_now_main_numbers)): ?>
          <div class="ipoteka-main__numbers">
            <?php foreach($ipoteka_now_main_numbers as $ipoteka_now_main_number): ?>
              <div class="ipoteka-main__item">
                <h2><?php echo $ipoteka_now_main_number['title'] ?></h2>
                <p><?php echo $ipoteka_now_main_number['subtitle'] ?></p>
              </div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="ipoteka-main__block">
            <?php if($ipoteka_now_main_image): ?>
              <div class="ipoteka-main__image">
                <?php echo wp_get_attachment_image($ipoteka_now_main_image, 'full'); ?>
              </div>
            <?php endif; ?>
            <?php if($ipoteka_now_main_content): ?>
              <div class="ipoteka-main__content">
                <?php echo apply_filters( 'the_content', $ipoteka_now_main_content ); ?>
                <a class="btn ipoteka-main__btn" href="<?php echo $ipoteka_now_main_btn_link ?>">
                  <?php echo $ipoteka_now_main_btn_text ?>
                </a>
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
              <div class="calculator__callout callout" data-theme="<?php echo $calc_program['name'] ?>"><b>По программе можно:</b>
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
      $ipoteka_now_title = carbon_get_post_meta( get_the_ID(), 'ipoteka_now_title' );
      $ipoteka_now = carbon_get_post_meta( get_the_ID(), 'ipoteka_now' );
    ?>
    <section class="now-complex">
        <div class="container">
          <h2><?php echo $ipoteka_now_title ?></h2>
          <div class="now-complex__cards">
            <?php foreach($ipoteka_now as $now): ?>
              <div class="now-complex__card">
                <div class="now-complex__cover">
                  <?php echo wp_get_attachment_image($now['image'], 'full'); ?>
                </div>
                <div class="now-complex__content">
                  <div class="now-complex__head">
                    <p class="now-complex__time"><?php echo $now['time'] ?></p>
                    <p class="now-complex__address"><?php echo $now['name'] ?></p>
                  </div>
                  <h3><?php echo $now['title'] ?></h3>
                  <div class="now-complex__price"><?php echo $now['price'] ?></div>
                  <a class="btn" href="<?php echo get_permalink($now['link'][0]['id'])?>">Посмотреть проект</a>
                </div>
              </div>
            <?php endforeach; ?>
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
