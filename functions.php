<?php
if ( ! function_exists( 'kjgmuggensturm_setup' ) ) :
  /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
  function kjgmuggensturm_setup() {

    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-logo' );

    add_theme_support( 'wp-block-styles' );

    add_filter( 'excerpt_length', function($length) {
      return 30;
    });

    add_filter( 'img_caption_shortcode_width', '__return_false' );

    //add_theme_support( 'title-tag' ); 

    register_nav_menu('header-menu',__( 'Header Menu' ));

  }
endif;
add_action( 'after_setup_theme', 'kjgmuggensturm_setup' );

function kjgmuggensturm_scripts() {
  wp_enqueue_style( 'kjgmuggensturm-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), wp_get_theme()->get( 'Version' ), true);
}
add_action( 'wp_enqueue_scripts', 'kjgmuggensturm_scripts' );

function kjgmuggensturm_customizer( $wp_customize ) {
  $wp_customize->add_panel( 'kjgMuggensturmOptions', array(
    'priority'       => 10,
    'title'          => 'KJG Muggensturm Theme Options',
    'description'    => ''
  ));

  $wp_customize->add_section( 'eventPopup' , array(
    'title'    => 'Startseite Event Popup',
    'priority' => 30,
    'panel' => 'kjgMuggensturmOptions'
  ));

  $wp_customize->add_setting( 'popup_enable_setting' , array(
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('popup_enable_control', array(
    'label'    => 'Popup aktivieren?',
    'section'  => 'eventPopup',
    'settings' => 'popup_enable_setting',
    'type'     => 'checkbox',
  ));

  $wp_customize->add_setting( 'popup_type_setting' , array(
      'default'   => 'text',
      'transport' => 'refresh',
  ));

  $wp_customize->add_control('popup_type_control', array(
    'label'    => 'Popup Typ',
    'section'  => 'eventPopup',
    'settings' => 'popup_type_setting',
    'type'     => 'radio',
		'choices'  => array(
      'text' => 'Text',
      'date' => 'Datum',
		),
  ));

  $wp_customize->add_setting( 'popup_dateTitle_setting' , array(
    'default'   => "Überschrift",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('popup_dateTitle_control', array(
    'label'    => 'Titel (Nur bei Datum)',
    'section'  => 'eventPopup',
    'settings' => 'popup_dateTitle_setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'popup_date_setting' , array(
    'default' => '2020-08-28',
    'transport' => 'refresh',
  ));

  $wp_customize->add_control( new WP_Customize_Date_Time_Control( $wp_customize, 'popup_date_setting',
    array(
      'label' => 'Datum',
      'section' => 'eventPopup',
      'include_time' => false,
      'allow_past_date' => false,
      'max_year' => '2030'
    )
  ) );

  $wp_customize->add_setting( 'popup_text_setting' , array(
    'default'   => "Beispiel text 1234",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('popup_text_control', array(
    'label'    => 'Text (Nur bei Text)',
    'section'  => 'eventPopup',
    'settings' => 'popup_text_setting',
    'type'     => 'textarea',
  ));
  
  $wp_customize->add_panel( 'frontPageCustomSections', array(
    'priority'       => 10,
    'title'          => 'KJG Startseite Options',
    'description'    => '',
    'panel'          => 'kjgMuggensturmOptions'
  ));

  // FIRST SECTION

  $wp_customize->add_section( 'firstCustomSection' , array(
    'title'    => 'First Section',
    'priority' => 30,
    'panel' => 'frontPageCustomSections'
  ));

  $wp_customize->add_setting( 'firstSectionTitleSetting' , array(
    'default'   => "Überschrift",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionTitleCtrl', array(
    'label'    => 'Titel',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionTitleSetting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'firstSectionTextSetting' , array(
    'default'   => "Beispiel Text",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionTextCtrl', array(
    'label'    => 'Text',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionTextSetting',
    'type'     => 'textarea',
  ));

  $wp_customize->add_setting( 'firstSectionPicSetting' , array(
    'default'   => false,
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(
    new WP_Customize_Media_Control( $wp_customize, 'firstSectionPicSetting', array(
      'label' => 'Bild',
      'section' => 'firstCustomSection', 
      'mime_type' => 'image',
  )	)	);

  // BTN 1

  $wp_customize->add_setting( 'firstSectionBtn1Setting' , array(
    'default'   => "",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionBtn1Ctrl', array(
    'label'    => 'Button 1 Titel',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionBtn1Setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'firstSectionBtn1LinkSetting' , array(
    'default'   => "www.example.com",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionBtn1LinkCtrl', array(
    'label'    => 'Button 1 Link',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionBtn1LinkSetting',
    'type'     => 'text',
  ));

  // BTN 2

  $wp_customize->add_setting( 'firstSectionBtn2Setting' , array(
    'default'   => "",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionBtn2Ctrl', array(
    'label'    => 'Button 2 Titel',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionBtn2Setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'firstSectionBtn2LinkSetting' , array(
    'default'   => "www.example.com",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionBtn2LinkCtrl', array(
    'label'    => 'Button 2 Link',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionBtn2LinkSetting',
    'type'     => 'text',
  ));

  // BTN 3

  $wp_customize->add_setting( 'firstSectionBtn3Setting' , array(
    'default'   => "",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionBtn3Ctrl', array(
    'label'    => 'Button 3 Titel',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionBtn3Setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'firstSectionBtn3LinkSetting' , array(
    'default'   => "www.example.com",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('firstSectionBtn3LinkCtrl', array(
    'label'    => 'Button 3 Link',
    'section'  => 'firstCustomSection',
    'settings' => 'firstSectionBtn3LinkSetting',
    'type'     => 'text',
  ));

  // SECOND SECTION

  $wp_customize->add_section( 'secondCustomSection' , array(
    'title'    => 'Second Section',
    'priority' => 40,
    'panel' => 'frontPageCustomSections'
  ));

  $wp_customize->add_setting( 'secondSectionTitleSetting' , array(
    'default'   => "Überschrift",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionTitleCtrl', array(
    'label'    => 'Titel',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionTitleSetting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'secondSectionTextSetting' , array(
    'default'   => "Beispiel Text",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionTextCtrl', array(
    'label'    => 'Text',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionTextSetting',
    'type'     => 'textarea',
  ));

  $wp_customize->add_setting( 'secondSectionPicSetting' , array(
    'default'   => false,
    'transport' => 'refresh',
  ));

  $wp_customize->add_control(
    new WP_Customize_Media_Control( $wp_customize, 'secondSectionPicSetting', array(
      'label' => 'Bild',
      'section' => 'secondCustomSection', 
      'mime_type' => 'image',
  )	)	);

  // BTN 1

  $wp_customize->add_setting( 'secondSectionBtn1Setting' , array(
    'default'   => "",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionBtn1Ctrl', array(
    'label'    => 'Button 1 Titel',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionBtn1Setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'secondSectionBtn1LinkSetting' , array(
    'default'   => "www.example.com",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionBtn1LinkCtrl', array(
    'label'    => 'Button 1 Link',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionBtn1LinkSetting',
    'type'     => 'text',
  ));

  // BTN 2

  $wp_customize->add_setting( 'secondSectionBtn2Setting' , array(
    'default'   => "",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionBtn2Ctrl', array(
    'label'    => 'Button 2 Titel',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionBtn2Setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'secondSectionBtn2LinkSetting' , array(
    'default'   => "www.example.com",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionBtn2LinkCtrl', array(
    'label'    => 'Button 2 Link',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionBtn2LinkSetting',
    'type'     => 'text',
  ));

  // BTN 3

  $wp_customize->add_setting( 'secondSectionBtn3Setting' , array(
    'default'   => "",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionBtn3Ctrl', array(
    'label'    => 'Button 3 Titel',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionBtn3Setting',
    'type'     => 'text',
  ));

  $wp_customize->add_setting( 'secondSectionBtn3LinkSetting' , array(
    'default'   => "www.example.com",
    'transport' => 'refresh',
  ));

  $wp_customize->add_control('secondSectionBtn3LinkCtrl', array(
    'label'    => 'Button 3 Link',
    'section'  => 'secondCustomSection',
    'settings' => 'secondSectionBtn3LinkSetting',
    'type'     => 'text',
  ));
}
add_action( 'customize_register', 'kjgmuggensturm_customizer' );