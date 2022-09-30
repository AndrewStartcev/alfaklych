<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'main_carbon' );

function main_carbon() {

	Container::make( 'post_meta', '01 Главный блок' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'mainPage.php' )
		->add_fields(array(
      Field::make( 'complex', 'main_slider', 'Слайдер' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'subtitle', 'Подзаголовок' )
              ->set_width(30),
            Field::make( 'text', 'title', 'Заголовок' )
              ->set_width(70)
              ->set_required( true ),
            Field::make( 'text', 'btn_text', 'Название кнопки' )
              ->set_width(30)
              ->set_required( true ),
            Field::make( 'textarea', 'rich_text', 'Описание' )
              ->set_width(70)
            Field::make( 'image', 'background', 'Фоновая картинка' )
              ->set_required( true ),
        ))
        ->set_header_template( '
					<% if (subtitle) { %>
						<%- subtitle %>
					<% } %>
				' ),
	));

  Container::make( 'post_meta', '02 Преимущества' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'mainPage.php' )
		->add_fields(array(
      Field::make( 'complex', 'advantage_slider', 'Слайдер' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->set_max(4)
        ->add_fields(array(
            Field::make( 'text', 'title', 'Заголовок' )
              ->set_required( true ),
            Field::make( 'image', 'icon', 'Иконка' )
              ->set_required( true )
              ->set_width(50),
            Field::make( 'rich_text', 'text', 'Описание' )
              ->set_width(50),
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
	));
  Container::make( 'post_meta', '03 Виды кредитов' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'mainPage.php' )
		->add_fields(array(
      Field::make( 'text', 'types_title', 'Заголовок' )
        ->set_required( true ),
      Field::make( 'complex', 'types_cards', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-vertical')
        ->add_fields(array(
            Field::make( 'text', 'marker', 'Метка' ),
            Field::make( 'text', 'title', 'Заголовок' )
              ->set_required( true ),
            Field::make( 'image', 'icon', 'Иконка' )
              ->set_required( true )
              ->set_width(50),
            Field::make( 'textarea', 'text', 'Описание' )
              ->set_width(50),
            Field::make( 'association', 'link', 'Ссылка для Подробнее' )
              ->set_required( true )
              ->set_max( 1 )
              ->set_types( array(
                  array(
                      'type'      => 'post',
                      'post_type' => 'page',
                  )
              ) )
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
	));

  Container::make( 'post_meta', '04 О компании' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'mainPage.php' )
		->add_fields(array(
      Field::make( 'complex', 'about_cards', 'Карточки' )
        ->set_collapsed(true)
        ->set_max(4)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'title', 'Заголовок' )
              ->set_required( true ),
            Field::make( 'textarea', 'text', 'Описание' )
              ->set_required( true ),
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
      Field::make( 'text', 'about_title', 'Заголовок' )
        ->set_required( true ),
      Field::make( 'rich_text', 'about_text', 'Описание' )
        ->set_required( true ),
      Field::make( 'association', 'about_link', 'Ссылка для Подробнее' )
        ->set_required( true )
        ->set_max( 1 )
        ->set_types( array(
            array(
                'type'      => 'post',
                'post_type' => 'page',
            )
        ) )
	));

}
