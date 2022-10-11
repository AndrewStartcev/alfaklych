<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'ipoteka_now_carbon' );

function ipoteka_now_carbon() {

	Container::make( 'post_meta', '01 Главный блок' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipotekaHome.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_now_main_title', 'Заголовок' ),
      Field::make( 'complex', 'ipoteka_now_main_number', 'Карточки' )
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
      Field::make( 'image', 'ipoteka_now_main_image', 'Картинка' )->set_width(30),
      Field::make( 'rich_text', 'ipoteka_now_main_content', 'Список под картинкой' )->set_width(70),
      Field::make( 'text', 'ipoteka_now_main_btn_text', 'Название кнопки' )->set_width(50),
      Field::make( 'text', 'ipoteka_now_main_btn_link', 'Ссылка кнопки' )->set_width(50),
	));

  Container::make( 'post_meta', '01 Новостройки' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'ipotekaHome.php' )
		->add_fields(array(
      Field::make( 'text', 'ipoteka_now_title', 'Заголовок' ),
      Field::make( 'complex', 'ipoteka_now', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-vertical')
        ->add_fields(array(
            Field::make( 'text', 'title', 'Название' )
              ->set_width(50)
              ->set_required( true ),
            Field::make( 'text', 'price', 'Цена' )
              ->set_width(50),
            Field::make( 'text', 'time', 'Время до' )
              ->set_width(50)
              ->set_required( true ),
            Field::make( 'text', 'name', 'Название' )
              ->set_width(50)
              ->set_required( true ),
            Field::make( 'image', 'image', 'Фото' )
              ->set_width(50)
              ->set_required( true ),
            Field::make( 'association', 'link', 'Ссылка' )
              ->set_required( true )
              ->set_max( 1 )
              ->set_types( array(
                  array(
                      'type'      => 'post',
                      'post_type' => 'page',
                  )
              ) ),
        ))
        ->set_header_template( '
					<% if (title) { %>
						<%- title %>
					<% } %>
				' ),
	));

}
