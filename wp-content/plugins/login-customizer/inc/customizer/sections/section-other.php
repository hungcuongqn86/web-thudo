<?php
/**
 * Customizer controls for Other Section
 */

$wp_customize->add_section(
	'logincust_other_section', array(
		'priority' => 35,
		'title' => __( 'Other', 'login-customizer' ),
		'panel'  => 'logincust_panel',
	)
);

if ( get_option( 'users_can_register' ) ) {

	$wp_customize->add_setting(
		'login_customizer_options[logincust_field_register_link]', array(
			'default' => false,
			'type' => 'option',
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'absint',
			'transport' => 'postMessage',
		)
	);

	$wp_customize->add_control(
		new O2_Customizer_Toggle_Control(
			$wp_customize, 'login_customizer_options[logincust_field_register_link]', array(
				'label' => __( 'Disable Register Link?', 'login-customizer' ),
				'section' => 'logincust_other_section',
				'priority' => 5,
				'settings' => 'login_customizer_options[logincust_field_register_link]',
			)
		)
	);

}

$wp_customize->add_setting(
	'login_customizer_options[logincust_field_lost_password]', array(
		'default' => false,
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'absint',
		'transport' => 'postMessage',
	)
);

$wp_customize->add_control(
	new O2_Customizer_Toggle_Control(
		$wp_customize, 'login_customizer_options[logincust_field_lost_password]', array(
			'label' => __( 'Disable Lost Password?', 'login-customizer' ),
			'section' => 'logincust_other_section',
			'priority' => 10,
			'settings' => 'login_customizer_options[logincust_field_lost_password]',
		)
	)
);

$wp_customize->add_setting(
	'login_customizer_options[logincust_field_back_blog]', array(
		'default' => false,
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'absint',
		'transport' => 'postMessage',
	)
);

$wp_customize->add_control(
	new O2_Customizer_Toggle_Control(
		$wp_customize, 'login_customizer_options[logincust_field_back_blog]', array(
			'label' => __( 'Disable "Back to Website"?', 'login-customizer' ),
			'section' => 'logincust_other_section',
			'priority' => 15,
			'settings' => 'login_customizer_options[logincust_field_back_blog]',
		)
	)
);

$wp_customize->add_setting(
	'login_customizer_options[logincust_other_font_size]', array(
		'default' => '13px',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'esc_html',
		'transport' => 'postMessage',
	)
);

$wp_customize->add_control(
	new O2_Customizer_Range_Slider_Control(
		$wp_customize, 'login_customizer_options[logincust_other_font_size]', array(
			'label' => __( 'Font Size', 'login-customizer' ),
			'section' => 'logincust_other_section',
			'priority' => 15,
			'settings' => 'login_customizer_options[logincust_other_font_size]',
			'choices' => array(
				'percent' => false,
			),
			'input_attrs' => array(
				'min'    => 0,
				'max'    => 100,
				'step'   => 1,
			),
		)
	)
);

$wp_customize->add_setting(
	'login_customizer_options[logincust_other_color]', array(
		'default' => '#999',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 'login_customizer_options[logincust_other_color]', array(
			'label' => __( 'Text Color', 'login-customizer' ),
			'section' => 'logincust_other_section',
			'priority' => 20,
			'settings' => 'login_customizer_options[logincust_other_color]',
		)
	)
);

$wp_customize->add_setting(
	'login_customizer_options[logincust_other_color_hover]', array(
		'default' => '#2EA2CC',
		'type' => 'option',
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize, 'login_customizer_options[logincust_other_color_hover]', array(
			'label' => __( 'Text Color (Hover)', 'login-customizer' ),
			'section' => 'logincust_other_section',
			'priority' => 25,
			'settings' => 'login_customizer_options[logincust_other_color_hover]',
		)
	)
);
