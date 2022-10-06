<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'ipoteka_carbon' );

function ipoteka_carbon() {

	Container::make( 'post_meta', '01 Главный блок' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipoteka.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_main_title', 'Заголовок' ),
      Field::make( 'complex', 'ipoteka_main_number', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'title', 'Заголовок' )
              ->set_width(50)
              ->set_required( true ),
            Field::make( 'text', 'subtitle', 'Подзаголовок' )
              ->set_width(50)
              ->set_required( true ),
        ))
        ->set_header_template( '
					<% if (subtitle) { %>
						<%- subtitle %>
					<% } %>
				' ),
      Field::make( 'image', 'ipoteka_main_image', 'Картинка' )->set_width(30),
      Field::make( 'rich_text', 'ipoteka_main_content', 'Список под картинкой' )->set_width(70),
      Field::make( 'text', 'ipoteka_main_btn_text', 'Название кнопки' )->set_width(50),
      Field::make( 'text', 'ipoteka_main_btn_link', 'Ссылка кнопки' )->set_width(50),
	));

  Container::make( 'post_meta', '02 Оформление ипотеки' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipoteka.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_visual_title', 'Заголовок' ),
      Field::make( 'textarea', 'ipoteka_visual_subtitle', 'Подзаголовок' ),
      Field::make( 'text', 'ipoteka_visual_title_2', 'Заголовок второго уровня' ),
      Field::make( 'complex', 'ipoteka_visual_cards', 'Карточки' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
            Field::make( 'rich_text', 'text', 'Описание' )->set_required( true ),
        )),
      Field::make( 'rich_text', 'ipoteka_visual_footer', 'Описание под карточками' )->set_width(50),
      Field::make( 'text', 'ipoteka_visual_btn_text', 'Название кнопки' )->set_width(50),
      Field::make( 'text', 'ipoteka_visual_btn_link', 'Ссылка кнопки' )->set_width(50),
	));

  Container::make( 'post_meta', '03 Кто может рассчитывать на ипотеку' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipoteka.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_how_title', 'Заголовок' ),
      Field::make( 'complex', 'ipoteka_how_cards', 'Карточки' )
        ->set_collapsed(true)
        ->add_fields(array(
          Field::make( 'text', 'title', 'Заголовок' )->set_required( true ),
          Field::make( 'textarea', 'text', 'Описание' )->set_width(70),
          Field::make( 'image', 'icon', 'Иконка' )->set_width(30),
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
	));

  Container::make( 'post_meta', '04 Преимущества ипотеки без первого взноса' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipoteka.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_features_title', 'Заголовок' ),
      Field::make( 'complex', 'ipoteka_features_yes', 'Плюсы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'text', 'title', 'Заголовок' )->set_required( true ),
          Field::make( 'textarea', 'text', 'Описание' ),
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
      Field::make( 'complex', 'ipoteka_features_no', 'Минусы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'text', 'title', 'Заголовок' )->set_required( true ),
          Field::make( 'textarea', 'text', 'Описание' ),
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
      Field::make( 'rich_text', 'ipoteka_features_footer', 'Описание под списком' ),
      Field::make( 'text', 'ipoteka_features_btn_text', 'Название кнопки' )->set_width(50),
      Field::make( 'text', 'ipoteka_features_btn_link', 'Ссылка кнопки' )->set_width(50),
	));

  Container::make( 'post_meta', '05 Почему с нами выгодно' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipoteka.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_how_me_title', 'Заголовок' ),
      Field::make( 'complex', 'ipoteka_how_me', 'Блоки' )
        ->set_collapsed(true)
        ->add_fields(array(
          Field::make( 'image', 'icon', 'Иконка' ),
          Field::make( 'rich_text', 'text', 'Описание' ),
        )),
      Field::make( 'rich_text', 'ipoteka_how_me_footer', 'Описание под списком' ),
      Field::make( 'text', 'ipoteka_how_me_btn_text', 'Название кнопки' )->set_width(50),
      Field::make( 'text', 'ipoteka_how_me_btn_link', 'Ссылка кнопки' )->set_width(50),
	));

  Container::make( 'post_meta', '06 Как все будет происходить' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipoteka.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_how_start_title', 'Заголовок' ),
      Field::make( 'rich_text', 'ipoteka_how_me_text', 'Описание' ),
      Field::make( 'complex', 'ipoteka_how_start', 'Блоки' )
        ->set_collapsed(true)
        ->add_fields(array(
          Field::make( 'image', 'icon', 'Иконка' ),
          Field::make( 'rich_text', 'text', 'Описание' ),
        )),
	));

}
