<?php
// Общии блоки и настройки
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'settings_carbon' );

function settings_carbon() {

  $basic_all_blocks =  Container::make( 'theme_options', 'Общие блоки' )
		->set_page_menu_position(28)
		->set_page_file( 'crb_all_blocks' )
		->add_fields( array(
        Field::make( 'text', 'crb_facebook_url', __( 'Facebook URL' ) ),
        Field::make( 'textarea', 'crb_footer_text', __( 'Footer Text' ) ),
    ) );

  Container::make( 'theme_options', 'Калькулятор' )
    ->set_page_parent( $basic_all_blocks )
    ->set_page_file( 'crb_banky' )
    ->add_fields( array(
        Field::make( 'text', 'calc_title', 'Заголовок' ),
        Field::make( 'complex', 'calc_programs', 'Программы' )
          ->set_collapsed(true)
          ->set_layout('tabbed-vertical')
          ->add_fields(array(
              Field::make( 'text', 'name', 'Название' )->set_width(50),
              Field::make( 'text', 'number', 'Процент (2.3 - Только числа!)' )->set_width(50),
              Field::make( 'complex', 'text', 'По программе можно:' )
                ->set_collapsed(true)
                ->add_fields(array(
                    Field::make( 'text', 'name', 'Текст' ),
              ))
              ->set_header_template( '
                <% if (name) { %>
                  <%- name %>
                <% } %>
              ' ),
              ))
        ->set_header_template( '
					<% if (name) { %>
						<%- name %>
					<% } %>
				' ),
  ));

  Container::make( 'theme_options', 'Форма Косультация' )
    ->set_page_parent( $basic_all_blocks )
    ->add_fields( array(
        Field::make( 'text', 'offer_title', 'Заголовок' )->set_width(50),
        Field::make( 'text', 'offer_shortcode', 'Шорт-код формы' )->set_width(50),
        Field::make( 'textarea', 'offer_text', 'Описание' )->set_width(50),
    ) );

  Container::make( 'theme_options', 'Бесплатную консультацию' )
    ->set_page_parent( $basic_all_blocks )
    ->add_fields( array(
        Field::make( 'text', 'offer_2_title', 'Заголовок' )->set_width(50),
        Field::make( 'text', 'offer_2_shortcode', 'Шорт-код формы' )->set_width(50),
        Field::make( 'textarea', 'offer_2_text', 'Описание' )->set_width(50),
    ) );

  Container::make( 'theme_options', 'Отзывы' )
    ->set_page_parent( $basic_all_blocks )
    ->set_page_file( 'crb_feedbacks' )
    ->add_fields( array(
        Field::make( 'text', 'feedback_title', 'Заголовок' ),
        Field::make( 'complex', 'feedback_cards', 'Отзывы' )
          ->set_collapsed(true)
          ->set_layout('tabbed-vertical')
          ->add_fields(array(
              Field::make( 'text', 'name', 'ФИО' ),
              Field::make( 'text', 'date', 'Дата' ),
              Field::make( 'textarea', 'text', 'Описание' ),
              Field::make( 'file', 'file', 'Видео файл' )
                ->set_value_type( 'url' )
                ->set_width(50),
              Field::make( 'image', 'photo', 'или фото файл' )
                ->set_width(30),
        ))
        ->set_header_template( '
					<% if (name) { %>
						<%- name %>
					<% } %>
				' ),
        Field::make( 'text', 'feedback_link', 'Ссылка на отзывы' ),
  ));



  Container::make( 'theme_options', 'Банки и партнеры' )
    ->set_page_parent( $basic_all_blocks )
    ->set_page_file( 'crb_banky_and_partners' )
    ->add_fields( array(
        Field::make( 'text', 'banky_title', 'Заголовок' ),
        Field::make( 'media_gallery', 'banky_gallery', 'Логотипы')
          ->set_type( array( 'image' ) ),
  ));

  Container::make( 'theme_options', 'Контакты' )
    ->set_page_parent( $basic_all_blocks )
    ->set_page_file( 'crb_contats' )
    ->add_fields( array(
        Field::make( 'text', 'contacts_title', 'Заголовок' ),
        Field::make( 'complex', 'contacts_links', 'Контакты' )
          ->set_collapsed(true)
          ->set_layout('tabbed-vertical')
          ->add_fields(array(
              Field::make( 'text', 'name', 'Название' )->set_width(50),
              Field::make( 'text', 'link', 'Ссылка' )->set_width(50),
              Field::make( 'rich_text', 'text', 'Описание' )->set_width(50),
              Field::make( 'image', 'icon', 'Иконка' )
                ->set_width(50),
        ))
        ->set_header_template( '
					<% if (name) { %>
						<%- name %>
					<% } %>
				' ),
        Field::make( 'complex', 'contacts_address', 'Адреса' )
          ->set_collapsed(true)
          ->set_layout('tabbed-vertical')
          ->add_fields(array(
              Field::make( 'text', 'name', 'Название' )->set_width(50),
              Field::make( 'image', 'icon', 'Иконка' )
                ->set_width(50),
        ))
        ->set_header_template( '
					<% if (name) { %>
						<%- name %>
					<% } %>
				' ),
        Field::make( 'complex', 'contacts_socials', 'Соц-сети' )
          ->set_collapsed(true)
          ->set_layout('tabbed-vertical')
          ->add_fields(array(
              Field::make( 'text', 'name', 'Название' )->set_width(50),
              Field::make( 'text', 'link', 'Ссылка' )->set_width(50),
              Field::make( 'image', 'icon', 'Иконка' )
                ->set_width(50),
        ))
        ->set_header_template( '
					<% if (name) { %>
						<%- name %>
					<% } %>
				' ),
        Field::make( 'textarea', 'contacts_map', 'Код карты' ),
  ));

}
// Главная страница
require get_stylesheet_directory() . '/inc/carbonFields/pages/main.php';
// Ипотека
require get_stylesheet_directory() . '/inc/carbonFields/pages/ipoteka.php';
