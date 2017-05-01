<?php
/**
 * Set up the PostPress customizer
 *
 * @since 1.0.0
 */

function postpress_customize_register( $wp_customize ) {

	/*****************************
	postpress general settings
	******************************/

	//general settings panel
	$wp_customize->add_panel( 'postpress_general', array(
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'title'          => __( 'PostPress General Settings', 'postpress' ),
		'description'    => __( 'Change your colors and fonts', 'postpress' ),
	) );

	//Postpress colors scheme
		$wp_customize->add_section( 'postpress_colors_section' , array(
				'title'       => __( 'PostPress Colors', 'postpress' ),
				'priority'    => '30',
				'panel'       => 'postpress_general',
				'description' => __( 'Choose one color theme to change the look and feel of your site', 'postpress' ),
		) );
		$wp_customize->add_setting( 'css_sheet' , array(
				'default' 				=> 'default',
				'sanitize_callback'  	=> 'postpress_sanitize_select',
		) );
		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize, 'css_sheet', array(
						'label'          => __( 'Change the colors of your theme', 'postpress' ),
						'section'        => 'postpress_colors_section',
						'settings'       => 'css_sheet',
						'type'           => 'select',
						'choices'        => array(
							//'default' 		=> __( 'Default (Gold Yellow)', 'postpress' ),
							'default' 		=> __( 'Default (Airy Blue)', 'postpress' ),
							'gold' 			=> __( 'Gold', 'postpress' ),
							'bubblegum' 	=> __( 'Bubblegum', 'postpress' ),
							'pinky' 		=> __( 'Pinky', 'postpress' ),
							'plum' 			=> __( 'Plum', 'postpress' ),
							'ruby' 			=> __( 'Ruby', 'postpress' ),
							'pumpkin' 		=> __( 'Pumpkin', 'postpress' ),
							'lime' 			=> __( 'Lime', 'postpress' ),
							'apple' 		=> __( 'Apple', 'postpress' ),
							'sky' 			=> __( 'Sky', 'postpress' ),
							'navy' 			=> __( 'Navy', 'postpress' ),
							'gray' 			=> __( 'Gray', 'postpress' ),
							'cocoa' 		=> __( 'Cocoa', 'postpress' ),
							'black' 		=> __( 'Black', 'postpress' ),
						),
				)
			)
		);

	//postpress fonts

	//Prepare the array of fonts to select from
	$google_fonts = array(
		'Covered' => __( 'Covered By Your Grace', 'postpress' ),
		'Shadows' => __( 'Shadows Into light Two', 'postpress' ),
		'Kalam' => __( 'Kalam', 'postpress' ),
		'Patrick' => __( 'Patrick Hand', 'postpress' ),
		'Neucha' => __( 'Neucha', 'postpress' ),
		'Delius' => __( 'Delius', 'postpress' ),
		'Delius_Caps' => __( 'Delius Swash Caps', 'postpress' ),
		'Caveat' => __( 'Caveat Brush', 'postpress' ),
		'Itim' => __( 'Itim', 'postpress' ),
		'Dekko' => __( 'Dekko', 'postpress' ),
	);

	$wp_customize->add_section( 'postpress_fonts_section' , array(
		'title'      => __( 'PostPress Fonts', 'postpress' ),
		'priority'   => '31',
		'panel'      => 'postpress_general',
	) );
	$wp_customize->add_setting( 'paragraphs_fonts' , array(
		'default' => 'Delius',
		'sanitize_callback'  => 'sanitize_text_field',
	) );
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize, 'paragraphs_fonts', array(
				'label'          => __( 'Change the font of your paragraphs', 'postpress' ),
				'section'        => 'postpress_fonts_section',
				'settings'       => 'paragraphs_fonts',
				'type'           => 'select',
				'description'    => __( 'change the font of your paragraphs and buttons', 'postpress' ),
				'choices'        => $google_fonts,
			)
		)
	);

	/*****************************
	postpress Social Media Icons
	******************************/

	// Icons settings panel
	$wp_customize->add_panel( 'postpress_icons_panel', array(
		'priority'       => 9,
		'capability'     => 'edit_theme_options',
		'title'          => __( 'postpress Social Media Icons','postpress' ),
		'description'    => __( 'Link your website to your social media','postpress' ),
	) );

	// Facebook section
	$wp_customize->add_section( 'postpress_icon1_section' , array(
		'title'      => __( 'Facebook', 'postpress' ),
		'priority'   => '1',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 1
	$wp_customize->add_setting( 'icon1_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon1_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon1_section',
			   'settings'   => 'icon1_link',
		   )
	);
	// Twitter section
	$wp_customize->add_section( 'postpress_icon2_section' , array(
		'title'      => __( 'Twitter', 'postpress' ),
		'priority'   => '2',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 2
	$wp_customize->add_setting( 'icon2_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon2_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon2_section',
			   'settings'   => 'icon2_link',
		   )
	);
	// Google+ section
	$wp_customize->add_section( 'postpress_icon3_section' , array(
		'title'      => __( 'Googleplus', 'postpress' ),
		'priority'   => '3',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 3
	$wp_customize->add_setting( 'icon3_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon3_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon3_section',
			   'settings'   => 'icon3_link',
		   )
	);
	// Instagram section
	$wp_customize->add_section( 'postpress_icon4_section' , array(
		'title'      => __( 'Instagram', 'postpress' ),
		'priority'   => '4',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 4
	$wp_customize->add_setting( 'icon4_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon4_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon4_section',
			   'settings'   => 'icon4_link',
		   )
	);
	// Linkedin section
	$wp_customize->add_section( 'postpress_icon5_section' , array(
		'title'      => __( 'Linkedin', 'postpress' ),
		'priority'   => '5',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 5
	$wp_customize->add_setting( 'icon5_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon5_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon5_section',
			   'settings'   => 'icon5_link',
		   )
	);
	// Youtube section
	$wp_customize->add_section( 'postpress_icon6_section' , array(
		'title'      => __( 'Youtube', 'postpress' ),
		'priority'   => '6',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 6
	$wp_customize->add_setting( 'icon6_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon6_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon6_section',
			   'settings'   => 'icon6_link',
		   )
	);
	// pinterest section
	$wp_customize->add_section( 'postpress_icon7_section' , array(
		'title'      => __( 'Pinterest', 'postpress' ),
		'priority'   => '7',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 7
	$wp_customize->add_setting( 'icon7_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon7_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon7_section',
			   'settings'   => 'icon7_link',
		)
	);

	// Tumblr section
	$wp_customize->add_section( 'postpress_icon8_section' , array(
		'title'      => __( 'Tumblr', 'postpress' ),
		'priority'   => '8',
		'panel'      => 'postpress_icons_panel',
	) );
	// icon 7
	$wp_customize->add_setting( 'icon8_link' , array(
		'default' => '',
		'sanitize_callback' => 'postpress_sanitize_url',
	) );
	$wp_customize->add_control( 'icon8_link', array(
			   'label'      => '',
			   'section'    => 'postpress_icon8_section',
			   'settings'   => 'icon8_link',
		   )
	);
}
add_action( 'customize_register', 'postpress_customize_register' );

/*****************************
postpress General Settings.
Load the fonts selected
******************************/

function postpress_change_google_fonts() {
	$fonts = array(
		'Covered' => array(
			'name' => 'Covered By Your Grace',
			'css' => 'Covered By Your Grace',
			'query' => 'Covered+By+Your+Grace',
		),
		'Shadows' => array(
			'name' => 'Shadows Into Light Two',
			'css' => 'Shadows Into Light Two',
			'query' => 'Shadows+Into+Light+Two',
		),
		'Kalam' => array(
			'name' => 'Kalam',
			'css' => 'Kalam',
			'query' => 'Kalam',
		),
		'Patrick' => array(
			'name' => 'Patrick Hand',
			'css' => 'Patrick Hand',
			'query' => 'Patrick+Hand',
		),
		'Neucha' => array(
			'name' => 'Neucha',
			'css' => 'Neucha',
			'query' => 'Neucha',
		),
		'Delius' => array(
			'name' => 'Delius',
			'css' => 'Delius',
			'query' => 'Delius',
		),
		'Delius_Caps' => array(
			'name' => 'Delius Swash Caps',
			'css' => 'Delius Swash Caps',
			'query' => 'Delius+Swash+Caps',
		),
		'Caveat' => array(
			'name' => 'Caveat Brush',
			'css' => 'Caveat Brush',
			'query' => 'Caveat+Brush',
		),
		'Itim' => array(
			'name' => 'Itim',
			'css' => 'Itim',
			'query' => 'Itim',
		),
		'Dekko' => array(
			'name' => 'Dekko',
			'css' => 'Dekko',
			'query' => 'Dekko',
		),
	);
	$paragraphs_font = get_theme_mod( 'paragraphs_fonts', 'Delius' );

	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family='.$fonts[ $paragraphs_font ]['query'] );

	?>
	<style type='text/css'>
		body {font-family:<?php echo esc_html( $fonts[ $paragraphs_font ]['css'] ); ?>}
	</style>
	<?php
}
add_action( 'wp_head', 'postpress_change_google_fonts' );


/*****************************
PostPress Social General Settings
Load css selected
******************************/
function postpress_load_css_colors() {
	$css = array(
		'default' => array(
			'file' => 'airy.css',
		),
		'gold' => array(
			'file' => 'gold.css',
		),
		'bubblegum' => array(
			'file' => 'bubblegum.css',
		),
		'pinky' => array(
			'file' => 'pinky.css',
		),
		'plum' => array(
			'file' => 'plum.css',
		),
		'ruby' => array(
			'file' => 'ruby.css',
		),
		'pumpkin' => array(
			'file' => 'pumpkin.css',
		),
		'lime' => array(
			'file' => 'lime.css',
		),
		'apple' => array(
			'file' => 'apple.css',
		),
		'sky' => array(
			'file' => 'sky.css',
		),
		'navy' => array(
			'file' => 'navy.css',
		),
		'gray' => array(
			'file' => 'gray.css',
		),
		'cocoa' => array(
			'file' => 'cocoa.css',
		),
		'black' => array(
			'file' => 'black.css',
		),
	);
	$css_id = get_theme_mod( 'css_sheet', 'default' );
	wp_enqueue_style( $css[ $css_id ]['file'], get_template_directory_uri().'/css/colors/'.$css[ $css_id ]['file'] );

}
add_action( 'wp_head', 'postpress_load_css_colors' );

?>
