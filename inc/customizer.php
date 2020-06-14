<?php
/*
================================================================================================
Leanna Theme Customizer
================================================================================================
@package        Leanna
@link           https://codex.wordpress.org/Theme_Customization_API
@copyright      Copyright (C) 2020. Samuel Guebo
@license        GNU General Public License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.ci/)
================================================================================================
*/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function leanna_kirki_customize_register () {
	
	// kirki configs
	Leanna_Kirki::add_config( 'leanna', array(
		'capability'    => 'edit_theme_options',
		'option_type'   => 'theme_mod',
	) );
	
	// Repeater section for slider settings
	Leanna_Kirki::add_section('slider_section', array(
		'title' => __('Sliders', 'leanna'),
		'priority' => 10,
	));

	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'repeater',
			'settings'      => 'slider_repeater',
			'label'         => esc_attr__( 'Create a slide', 'leanna' ),
			'description'   => esc_attr__( 'Set up the slide, define title, description, page, etc', 'leanna' ),
			'section'       => 'slider_section',
			'default'       => array(),
			'priority'      => 10,
			'row_label'     => array(
				'type'      => 'field',
				'value'     => 'row',
				'field'     => 'slide_description',
			),
			'fields' => array(
				// field: slide title
				'slide_title' => array(
					'type'              => 'text',
					//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
					'description'       => esc_attr__( 'Small upper text', 'leanna' ),
					'default'           => esc_attr__( 'For people who do real business', 'leanna' ),
					'sanitize_callback' => 'sanitize_text_field'
				),
				// field: slide description
				'slide_description' => array(
					'type'              => 'text',
					//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
					'description'       => esc_attr__( 'Big lower text', 'leanna' ),
					'default'           => esc_attr__( 'Simple, intuitive, creative', 'leanna' ),
					'sanitize_callback'	=> 'sanitize_text_field'
				),
				// field: button text 1
				'slide_button_text_1' => array(
						'type'        => 'text',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Text for button 1', 'leanna' ),
						'default'     => esc_attr__( 'Read more', 'leanna' ),
						'sanitize_callback' => 'sanitize_text_field'
				),
				// field: page 1
				'slide_page_1' => array(
						'type'        => 'dropdown-pages',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Page for button 1', 'leanna' ),
						'default'     => 0,
						'sanitize_callback' => 'absint'
				),
				// field: button text 2
				'slide_button_text_2' => array(
						'type'        => 'text',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Text for button 2', 'leanna' ),
						'default'     => esc_attr__( 'Read more', 'leanna' ),
						'sanitize_callback' => 'sanitize_text_field'
				),
                // field: page 2
				'slide_page_2' => array(
						'type'        => 'dropdown-pages',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Page for button 2', 'leanna' ),
						'default'     => 0,
						'sanitize_callback' => 'absint'
				),
				// field: background
				'slide_image' => array(
						'type'        => 'image',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Image of the slide', 'leanna' ),
				)
			)
		)
	);
		
	/**
     * Section for Services
     * Taking advantage of Kirki's repeater 
     * feature, and static fields: section title
     * and description
     */
    
	Leanna_Kirki::add_section('services_section', array(
		'title' => __('Services', 'leanna'),
		'priority' => 10,
	));

	// Field for services sections: title 
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'text',
			'settings'      => 'services_section_title',
			'label'         => __( 'Head text for services section', 'leanna' ),
			//'description'   => __( 'Add Head text for services section', 'leanna' ),
			'default'       => __( 'Our services', 'leanna' ),
			'section'       => 'services_section',
			'priority'      => 10,
			'sanitize_callback' => 'sanitize_text_field'
			)
	);
	// Field for services sections: description
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'textarea',
			'settings'      => 'services_section_description',
			'label'         => __( 'Head description for services section', 'leanna' ),
			//'description'   => __( 'Add Head description for services section', 'leanna' ),
			'default'         => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'leanna' ),
			'section'       => 'services_section',
			'priority'      => 10,
			'sanitize_callback' => 'sanitize_text_field'
			)
	);
    
	// Repeater for services
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'repeater',
			'settings'      => 'services_repeater',
			'label'         => __( 'Create a service', 'leanna' ),
			'description'   => __( 'Set up the service, define title, description, page, etc', 'leanna' ),
			'section'       => 'services_section',
			'default'       => array(),
			'priority'      => 10,
			'row_label'     => array(
				'type'      => 'field',
				'value'     => 'row',
				'field'     => 'service_title',
			),
			'fields' => array(
				// field: image
				'service_icon' => array(
						'type'        => 'text',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Fontawesome icon of the slide', 'leanna' ),
				),
				'service_title'	=> array(
					'type'              => 'text',
					//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
					'description'       => esc_attr__( 'Upper text', 'leanna' ),
					'default'           => 'Business strategy',
					'sanitize_callback' => 'sanitize_text_field'
				),
				// field: services_description
				'service_description' => array(
					'type'              => 'textarea',
					//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
					'description'       => esc_attr__( 'Description', 'leanna' ),
					'default'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
					'sanitize_callback'	=> 'sanitize_text_field'
				),
				// field: page
				'service_page'	=> array(
						'type'        => 'dropdown-pages',
						//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
						'description' => esc_attr__( 'Page of the service', 'leanna' ),
						'default'     => 0,
						'sanitize_callback' => 'absint'
				)
			)
		)
	);

	/**
     * Section for Biography
     * Taking advantage of Kirki's repeater
     * feature, and static fields: section title
     * and description
     */
	Leanna_Kirki::add_section('biography_section', array(
		'title' => __('Biography', 'leanna'),
		'priority' => 10,
	));

	// Field for biography sections: title
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'text',
			'settings'      => 'biography_section_title',
			'label'         => __( 'Head text for biography section', 'leanna' ),
			//'description'   => __( 'Add Head text for blog section', 'leanna' ),
			'default'       => __( 'Biography', 'leanna' ),
			'section'       => 'biography_section',
			'priority'      => 10,
			'sanitize_callback' => 'sanitize_text_field'
			)
	);
	// Field for biography sections: description
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'textarea',
			'settings'      => 'biography_section_description',
			'label'         => __( 'Head description for biography section', 'leanna' ),
			//'description'   => __( 'Add Head description for blog section', 'leanna' ),
			'default'         => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'leanna' ),
			'section'       => 'biography_section',
			'priority'      => 10,
			'sanitize_callback' => 'sanitize_text_field'
			)
	);

	// Field: blog page
	Leanna_Kirki::add_field( 'leanna', array(
		'type'        => 'dropdown-pages',
		'settings'      => 'biography_page',
		//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
		'description' => esc_attr__( 'Select biography page', 'leanna' ),
		'section'       => 'biography_section',
		'default'     => 0,
		'sanitize_callback' => 'absint'
		)
	);

	// Field: Background image
	Leanna_Kirki::add_field( 'biography_background', array(
		'type'               => 'image',
		'settings'           => 'biography_background',
    'label'              => esc_attr__('Background image for biography section', 'leanna'),
		'section'       => 'biography_section',
		'priority'           => 10,
	));


	/**
     * Section for Blog
     * Taking advantage of Kirki's repeater 
     * feature, and static fields: section title
     * and description
     */
    
	// Create a repeater section for blog
	Leanna_Kirki::add_section('blog_section', array(
		'title' => __('Blog', 'leanna'),
		'priority' => 10,
	));


	// Field for blog sections: title 
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'text',
			'settings'      => 'blog_section_title',
			'label'         => __( 'Head text for blog section', 'leanna' ),
			//'description'   => __( 'Add Head text for blog section', 'leanna' ),
			'default'       => __( 'Our blog', 'leanna' ),
			'section'       => 'blog_section',
			'priority'      => 10,
			'sanitize_callback' => 'sanitize_text_field'
			)
	);
	// Field for blog sections: description
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'textarea',
			'settings'      => 'blog_section_description',
			'label'         => __( 'Head description for blog section', 'leanna' ),
			//'description'   => __( 'Add Head description for blog section', 'leanna' ),
			'default'         => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'leanna' ),
			'section'       => 'blog_section',
			'priority'      => 10,
			'sanitize_callback' => 'sanitize_text_field'
			)
	);


	// Field: blog page
	Leanna_Kirki::add_field( 'leanna', array(
			'type'        => 'dropdown-pages',
			'settings'      => 'blog_page',
			//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
			'description' => esc_attr__( 'Select blog page', 'leanna' ),
			'default'     => 0,
			'sanitize_callback' => 'absint'
			)
		);
	
	// Field: blog post number
	Leanna_Kirki::add_field( 'leanna', array(
		'type'        => 'number',
		'settings'    => 'blog_post_number',
		'label'       => esc_attr__( 'How many posts to display on homepage?', 'leanna' ),
		'section'     => 'blog_section',
		'default'     => 3,
		'choices'     => array(
			'min'  => 3,
			'max'  => 12,
			'step' => 3,
		),
	) );

	/**
     * Section for Social medias
     * Taking advantage of Kirki's repeater 
     * feature, and static fields
     */
	
	// Create a repeater section for social networks
	Leanna_Kirki::add_section('social_section', array(
		'title' => __('Social medias', 'leanna'),
		'priority' => 10,
	));
	// Create a repeater for socials
	Leanna_Kirki::add_field( 'leanna', array(
			'type'          => 'repeater',
			'settings'      => 'social_repeater',
			'label'         => __( 'Add a social media', 'leanna' ),
			'section'       => 'social_section',
			'default'       => array(),
			'priority'      => 10,
			'row_label'     => array(
				'type'      => 'field',
				'value'     => 'row',
				'field'     => 'social_title',
			),
			'fields' => array(
				// field: social_title
				'social_title'	=> array(
					'type'              => 'text',
					//'label'       => esc_attr__( 'Display text for section', 'leanna' ),
					'description'       => esc_attr__( 'Title', 'leanna' ),
					'default'           => 'Social',
					'sanitize_callback' => 'sanitize_text_field'
				),
				
				// field: social_url
				'social_url'	=> array(
						'type'        => 'text',
						'description' => esc_attr__( 'Url of the social profile or page', 'leanna' ),
						'default'     => '#',
						'sanitize_callback' => 'sanitize_text_field'
				)
			)
		)
	);

}
function leanna_customize_register( $wp_customize ) {
	
	
	/*
	 * Theme colors using Customizer Custom Controls, 
	 * @link https://github.com/bueltge/Wordpress-Theme-Customizer-Custom-Controls
	 *
	 */
	require_once dirname(__FILE__) . '/class-category_dropdown_custom_control.php';
	require_once dirname(__FILE__) . '/class-palette_custom_control.php';
	
	
	// Add controls to existing Header Textcolor section
	$wp_customize->remove_control('header_textcolor'); // remove existing Headline color setting
	$wp_customize->add_setting(
		'leanna_theme_color', array(
			'default' => 'lavender',
			'sanitize_callback'	=> 'leanna_sanitize_colors'

		)
	);
	
	$wp_customize->add_control(
		new Palette_Custom_Control(
			$wp_customize, 'leanna_theme_color', array(
				'label' => __( 'Theme color', 'leanna' ),
				'section' => 'colors',
				'settings' => 'leanna_theme_color',
			)
		)
	);    
   
}
add_action( 'init', 'leanna_kirki_customize_register' );
add_action( 'customize_register', 'leanna_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function leanna_customize_preview_js() {
	wp_enqueue_script( 'leanna_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20200714', true );
}

/* Validate user input */
get_template_part('inc/customizer-sanitize'); 
