<?php
function mellany_customize_ads($wp_customize){

  //  =============================
  //  = AD 1 Image             =
  //  =============================
  $wp_customize->add_panel( 'mellany_ads', array(
    'priority'       => 310,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'    	=> esc_html__('Ads', 'mellany'),
    'description'    => '',
  ));

  $wp_customize->add_section('sidebar_ad_top', array(
    'title'    	=> esc_html__('Sidebar top ad', 'mellany'),
    'priority' => 5,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[sidebar_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[sidebar_ad_top]',
    'label'       => esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'sidebar_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('sidebar_ad_middle', array(
    'title'    	=> esc_html__('Sidebar middle ad', 'mellany'),
    'priority' => 6,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[sidebar_ad_middle]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[sidebar_ad_middle]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'sidebar_ad_middle',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('sidebar_ad_bottom', array(
    'title'    	=> esc_html__('Sidebar bottom ad', 'mellany'),
    'priority' => 7,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[sidebar_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[sidebar_ad_bottom]',
    'label'       => esc_html__('YOUR AD CODE', 'mellany' ),
    'section'     => 'sidebar_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('article_ad_bottom', array(
    'title'    	=> esc_html__('Article bottom ad', 'mellany'),
    'priority' => 8,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[article_ad_bottom]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[article_ad_bottom]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'article_ad_bottom',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('footer_ad_top', array(
    'title'    	=> esc_html__('Footer top ad', 'mellany'),
    'priority' => 9,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[footer_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[footer_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'footer_ad_top',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_1', array(
    'title'    	=> esc_html__('Custom ad 1', 'mellany'),
    'priority' => 11,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[custom_ad_1]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_1]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_1',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


  $wp_customize->add_section('custom_ad_2', array(
    'title'    	=> esc_html__('Custom ad 2', 'mellany'),
    'priority' => 12,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[custom_ad_2]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_2]',
    'label'       => esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_2',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_3', array(
    'title'    	=> esc_html__('Custom ad 3', 'mellany'),
    'priority' => 13,
    'panel'  => 'mellany_ads',
  ));


  Kirki::add_field( 'mellany_theme_options[custom_ad_3]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_3]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_3',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_4', array(
    'title'    	=> esc_html__('Custom ad 4', 'mellany'),
    'priority' => 14,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[custom_ad_4]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_4]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_4',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_5', array(
    'title'    	=> esc_html__('Custom ad 5', 'mellany'),
    'priority' => 15,
    'panel'  => 'mellany_ads',
  ));


  Kirki::add_field( 'mellany_theme_options[custom_ad_5]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_5]',
    'label'       => esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_5',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_6', array(
    'title'    	=> esc_html__('Custom ad 6', 'mellany'),
    'priority' => 16,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[custom_ad_6]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_6]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_6',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_7', array(
    'title'    	=> esc_html__('Custom ad 7', 'mellany'),
    'priority' => 17,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[custom_ad_7]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_7]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_7',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_8', array(
    'title'    	=> esc_html__('Custom ad 8', 'mellany'),
    'priority' => 18,
    'panel'  => 'mellany_ads',
  ));


  Kirki::add_field( 'mellany_theme_options[custom_ad_8]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_8]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_8',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));

  $wp_customize->add_section('custom_ad_9', array(
    'title'    	=> esc_html__('Custom ad 9', 'mellany'),
    'priority' => 19,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[custom_ad_9]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[custom_ad_9]',
    'label'       =>  esc_html__('YOUR AD CODE', 'mellany' ),
    'section'     => 'custom_ad_9',
    'default'     => '',
    'priority'    => 10,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));
  $wp_customize->add_section('header_ad_top', array(
    'title'    	=> esc_html__('Header Ad', 'mellany'),
    'priority' => 1,
    'panel'  => 'mellany_ads',
  ));

  Kirki::add_field( 'mellany_theme_options[header_ad_top]', array(
    'type'        => 'code',
    'settings'    => 'mellany_theme_options[header_ad_top]',
    'label'       =>  esc_html__( 'YOUR AD CODE', 'mellany' ),
    'section'     => 'header_ad_top',
    'default'     => '',
    'priority'    => 1,
    'option_type' => 'option',
    'choices'     => array(
      'language' => 'css, html, javascript',
      'theme'    => 'monokai',
      'height'   => 250,
    ),
  ));


}

add_action('customize_register', 'mellany_customize_ads');
?>
