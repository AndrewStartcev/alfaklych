<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'construct_house_carbon' );

function construct_house_carbon() {

	Container::make( 'post_meta', '01 Главный блок' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'constructHouse.php' )
		->add_fields(array(
      Field::make( 'text', 'construct_main_title', 'Заголовок' ),
      Field::make( 'rich_text', 'construct_main_content', 'Список под картинкой' )->set_width(70),
      Field::make( 'image', 'construct_main_image', 'Картинка' )->set_width(30),
	));

  Container::make( 'post_meta', '02 Преимущества' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'constructHouse.php' )
		->add_fields(array(
      Field::make( 'complex', 'construct_advantage_slider', 'Слайдер' )
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

  Container::make( 'post_meta', '03 Виды домостроение' )
		->where( 'post_type', '=', 'page' )
		->where( 'post_template', '=', 'constructHouse.php' )
		->add_tab( 'Каркасное домостроение', array(
      Field::make( 'text', 'construct_1_title', 'Заголовок' ),
      Field::make( 'rich_text', 'construct_1_content', 'Контент' )->set_width(70),
      Field::make( 'image', 'construct_1_image', 'Картинка' )->set_width(30),
      Field::make( 'complex', 'construct_1_product', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'category', 'Подзаголовок' )->set_width(33),
            Field::make( 'text', 'name', 'Название' )->set_width(33),
            Field::make( 'text', 'price', 'Цена' )
              ->set_width(30),
            Field::make( 'text', 'size', 'Размер (Площадь)' )
              ->set_width(25)
              ->set_required( true ),
            Field::make( 'text', 'loft', 'Этажей' )
              ->set_width(25),
            Field::make( 'text', 'room', 'Спален' )
              ->set_width(25),
            Field::make( 'text', 'bath', 'Санузлов' )
              ->set_width(25),
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
					<% if (category) { %>
						<%- category %> - <%- name %>
					<% } %>
				' ),
      Field::make( 'complex', 'construct_1_features_yes', 'Плюсы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        )),
      Field::make( 'complex', 'construct_1_features_no', 'Минусы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        ))
    ))
    ->add_tab( 'Блочное домостроение', array(
      Field::make( 'text', 'construct_2_title', 'Заголовок' ),
      Field::make( 'rich_text', 'construct_2_content', 'Контент' )->set_width(70),
      Field::make( 'image', 'construct_2_image', 'Картинка' )->set_width(30),
      Field::make( 'complex', 'construct_2_product', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'category', 'Подзаголовок' )->set_width(33),
            Field::make( 'text', 'name', 'Название' )->set_width(33),
            Field::make( 'text', 'price', 'Цена' )
              ->set_width(30),
            Field::make( 'text', 'size', 'Размер (Площадь)' )
              ->set_width(25)
              ->set_required( true ),
            Field::make( 'text', 'loft', 'Этажей' )
              ->set_width(25),
            Field::make( 'text', 'room', 'Спален' )
              ->set_width(25),
            Field::make( 'text', 'bath', 'Санузлов' )
              ->set_width(25),
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
					<% if (category) { %>
						<%- category %> - <%- name %>
					<% } %>
				' ),
      Field::make( 'complex', 'construct_2_features_yes', 'Плюсы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        )),
      Field::make( 'complex', 'construct_2_features_no', 'Минусы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        ))

    ))
    ->add_tab( 'Дом из клееного бруса', array(
      Field::make( 'text', 'construct_3_title', 'Заголовок' ),
      Field::make( 'rich_text', 'construct_3_content', 'Контент' )->set_width(70),
      Field::make( 'image', 'construct_3_image', 'Картинка' )->set_width(30),
      Field::make( 'complex', 'construct_3_product', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'category', 'Подзаголовок' )->set_width(33),
            Field::make( 'text', 'name', 'Название' )->set_width(33),
            Field::make( 'text', 'price', 'Цена' )
              ->set_width(30),
            Field::make( 'text', 'size', 'Размер (Площадь)' )
              ->set_width(25)
              ->set_required( true ),
            Field::make( 'text', 'loft', 'Этажей' )
              ->set_width(25),
            Field::make( 'text', 'room', 'Спален' )
              ->set_width(25),
            Field::make( 'text', 'bath', 'Санузлов' )
              ->set_width(25),
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
					<% if (category) { %>
						<%- category %> - <%- name %>
					<% } %>
				' ),
      Field::make( 'complex', 'construct_3_features_yes', 'Плюсы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        )),
      Field::make( 'complex', 'construct_3_features_no', 'Минусы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        ))

    ))
    ->add_tab( 'Панельное домостроение', array(
      Field::make( 'text', 'construct_4_title', 'Заголовок' ),
      Field::make( 'rich_text', 'construct_4_content', 'Контент' )->set_width(70),
      Field::make( 'image', 'construct_4_image', 'Картинка' )->set_width(30),
      Field::make( 'complex', 'construct_4_product', 'Карточки' )
        ->set_collapsed(true)
        ->set_layout('tabbed-horizontal')
        ->add_fields(array(
            Field::make( 'text', 'category', 'Подзаголовок' )->set_width(33),
            Field::make( 'text', 'name', 'Название' )->set_width(33),
            Field::make( 'text', 'price', 'Цена' )
              ->set_width(30),
            Field::make( 'text', 'size', 'Размер (Площадь)' )
              ->set_width(25)
              ->set_required( true ),
            Field::make( 'text', 'loft', 'Этажей' )
              ->set_width(25),
            Field::make( 'text', 'room', 'Спален' )
              ->set_width(25),
            Field::make( 'text', 'bath', 'Санузлов' )
              ->set_width(25),
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
					<% if (category) { %>
						<%- category %> - <%- name %>
					<% } %>
				' ),
      Field::make( 'complex', 'construct_4_features_yes', 'Плюсы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        )),
      Field::make( 'complex', 'construct_4_features_no', 'Минусы' )
        ->set_collapsed(true)
        ->set_width(50)
        ->add_fields(array(
          Field::make( 'rich_text', 'text', 'Описание' ),
        ))
    ));

}
