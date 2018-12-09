<?php
function RentIt_Mobile_customizer($wp_customize){
	
		/*MYEDIT>*/
    /*******************************************************************
     * mobile
     *******************************************************************/
	    $tmp_panelname = "mobile_app_panel";
	    $tmp_sectionname = "mobile_app";

	$wp_customize->add_panel( $tmp_panelname, array(
	  'title' => __( 'Mobile App', 'rentit' ),
	  'description' => 'This section is dedicated for showing or hiding header and footer on mobile or tablet devices.', // Include html tags such as <p>.
	  'priority' => 99, // Mixed with top-level-section hierarchy.
	) );

  /**************************header*****************************/

    $wp_customize->add_section($tmp_sectionname . '_header_section', array(
        'title' => esc_html__('Header Visibility', 'rentit'),
        'priority' => 10,
        'description' => esc_html__('This section is dedicated for showing or hiding header and footer on mobile or tablet devices.', 'rentit'),
		'panel' => $tmp_panelname,
	));



	$tmp_settingname = $tmp_sectionname . '_header_mobile';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide header on mobile', 'rentit'),
        'section' => $tmp_sectionname . "_header_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	$tmp_settingname = $tmp_sectionname . '_header_tablet';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide header on tablet', 'rentit'),
        'section' => $tmp_sectionname . "_header_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	$tmp_settingname = $tmp_sectionname . '_header_desktop';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide header on desktop', 'rentit'),
        'section' => $tmp_sectionname . "_header_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	
	$tmp_settingname = $tmp_sectionname . '_admin_bar';
//	var_dump($tmp_settingname);
    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide wordpress admin bar', 'rentit'),
        'section' => $tmp_sectionname . "_header_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

  /**************************footer*****************************/
	
    $wp_customize->add_section($tmp_sectionname . '_footer_section', array(
        'title' => esc_html__('Footer Visibility', 'rentit'),
        'priority' => 10,
        'description' => esc_html__('This section is dedicated for showing or hiding header and footer on mobile or tablet devices.', 'rentit'),
		'panel' =>  $tmp_panelname,
));
    $tmp_settingname = $tmp_sectionname . '_footer_mobile';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide footer on mobile', 'rentit'),
        'section' => $tmp_sectionname . "_footer_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	$tmp_settingname = $tmp_sectionname . '_footer_tablet';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide footer on tablet', 'rentit'),
        'section' => $tmp_sectionname . "_footer_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	$tmp_settingname = $tmp_sectionname . '_footer_desktop';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide footer on desktop', 'rentit'),
        'section' => $tmp_sectionname . "_footer_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));
  /***************************footer_widgets****************************/


    $wp_customize->add_section($tmp_sectionname . '_footer_widgets_section', array(
        'title' => esc_html__('Footer Widgets Visibility', 'rentit'),
        'priority' => 31,
        'description' => esc_html__('This section is dedicated for showing or hiding header and footer on mobile or tablet devices.', 'rentit'),
		'panel' =>  $tmp_panelname,
));
    $tmp_settingname = $tmp_sectionname . '_footer_widgets_mobile';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide footer widgets on mobile', 'rentit'),
        'section' => $tmp_sectionname . "_footer_widgets_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	$tmp_settingname = $tmp_sectionname . '_footer_widgets_tablet';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide footer widgets on tablet', 'rentit'),
        'section' => $tmp_sectionname . "_footer_widgets_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	$tmp_settingname = $tmp_sectionname . '_footer_widgets_desktop';

    $wp_customize->add_setting($tmp_settingname, array('default' => NULL,
        'sanitize_callback' => 'wp_kses_post'));

    $wp_customize->add_control($tmp_settingname . '_control', array(
        'label' => esc_html__('Hide footer widgets on desktop', 'rentit'),
        'section' => $tmp_sectionname . "_footer_widgets_section",
        'settings' => $tmp_settingname,
        'type' => 'checkbox',
    ));

	/*<MYEDIT*/
}
add_action('customize_register', 'RentIt_Mobile_customizer');