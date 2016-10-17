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
        'title'          => __('postpress General Settings', 'postpress'),
        'description'    => __('Change your colors and fonts', 'postpress'),
    ) );

    //postpress fonts

    //Prepare the array of fonts to select from
    $google_fonts = array(
                    'Abel' => __('Abel','postpress'),
                    'News_Cycle' => __('News Cycle','postpress'),
                    'Open_Sans_Condensed' => __('Open Sans Condensed','postpress'),
                    'Oswald' => __('Oswald','postpress'),
                    'Quicksand' => __('Quicksand','postpress'),
                    'Shadow' => __('Shadow','postpress'),
                );

    $wp_customize->add_section( 'postpress_fonts_section' , array(
        'title'      => __( 'postpress Fonts', 'postpress' ),
        'priority'   => '31',
        'panel'      => 'postpress_general'
    ) );
    $wp_customize->add_setting( 'paragraphs_fonts' , array(
        'default' => 'Abel',
        'sanitize_callback'  => 'sanitize_text_field'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'paragraphs_fonts', array(
                'label'          => __( 'Change the font of your paragraphs', 'postpress' ),
                'section'        => 'postpress_fonts_section',
                'settings'       => 'paragraphs_fonts',
                'type'           => 'select',
                'description'    => __('change the font of your paragraphs and buttons', 'postpress'),
                'choices'        => $google_fonts
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
        'title'          => __('postpress Social Media Icons','postpress'),
        'description'    => __('Link your website to your social media','postpress'),
    ) );

    // Facebook section
    $wp_customize->add_section( 'postpress_icon1_section' , array(
        'title'      => __( 'Facebook', 'postpress' ),
        'priority'   => '1',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 1
        $wp_customize->add_setting( 'icon1_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon1_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon1_section',
                   'settings'   => 'icon1_link'
               )
       );

    // Twitter section
    $wp_customize->add_section( 'postpress_icon2_section' , array(
        'title'      => __( 'Twitter', 'postpress' ),
        'priority'   => '2',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 2
        $wp_customize->add_setting( 'icon2_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon2_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon2_section',
                   'settings'   => 'icon2_link'
               )
       );

    // Google+ section
    $wp_customize->add_section( 'postpress_icon3_section' , array(
        'title'      => __( 'Googleplus', 'postpress' ),
        'priority'   => '3',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 3
        $wp_customize->add_setting( 'icon3_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon3_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon3_section',
                   'settings'   => 'icon3_link'
               )
       );

    // Instagram section
    $wp_customize->add_section( 'postpress_icon4_section' , array(
        'title'      => __( 'Instagram', 'postpress' ),
        'priority'   => '4',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 4
        $wp_customize->add_setting( 'icon4_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon4_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon4_section',
                   'settings'   => 'icon4_link'
               )
       );

    // Linkedin section
    $wp_customize->add_section( 'postpress_icon5_section' , array(
        'title'      => __( 'Linkedin', 'postpress' ),
        'priority'   => '5',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 5
        $wp_customize->add_setting( 'icon5_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon5_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon5_section',
                   'settings'   => 'icon5_link'
               )
       );

    // Youtube section
    $wp_customize->add_section( 'postpress_icon6_section' , array(
        'title'      => __( 'Youtube', 'postpress' ),
        'priority'   => '6',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 6
        $wp_customize->add_setting( 'icon6_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon6_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon6_section',
                   'settings'   => 'icon6_link'
               )
       );
    // pinterest section
    $wp_customize->add_section( 'postpress_icon7_section' , array(
        'title'      => __( 'Pinterest', 'postpress' ),
        'priority'   => '7',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 7
        $wp_customize->add_setting( 'icon7_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon7_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon7_section',
                   'settings'   => 'icon7_link'
               )
       );

    // Tumblr section
    $wp_customize->add_section( 'postpress_icon8_section' , array(
        'title'      => __( 'Tumblr', 'postpress' ),
        'priority'   => '8',
        'panel'      => 'postpress_icons_panel'
    ) );
        // icon 7
        $wp_customize->add_setting( 'icon8_link' , array(
            'default' => '',
            'sanitize_callback' => 'postpress_sanitize_url'
        ) );
        $wp_customize->add_control( 'icon8_link', array(
                   'label'      => '',
                   'section'    => 'postpress_icon8_section',
                   'settings'   => 'icon8_link'
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
        'Abel' => array(
            'name' => 'Abel',
            'css' => 'Abel',
            'query' => 'Abel'
        ),
        'News_Cycle' => array(
            'name' => 'News Cycle',
            'css' => 'News Cycle',
            'query' => 'News+Cycle'
        ),
        'Open_Sans_Condensed' => array(
            'name' => 'Open Sans Condensed',
            'css' => 'Open Sans Condensed',
            'query' => 'Open+Sans+Condensed:300,700'
        ),
        'Oswald' => array(
            'name' => 'Oswald',
            'css' => 'Oswald',
            'query' => 'Oswald:400,300,700'
        ),   
        'Quicksand' => array(
            'name' => 'Quicksand',
            'css' => 'Quicksand',
            'query' => 'Quicksand:400,300,700'
        ),
        'Shadow' => array(
            'name' => 'Shadow',
            'css' => 'Shadows Into Light',
            'query' => 'Shadows+Into+Light'
        )
    );
    $paragraphs_font = get_theme_mod('paragraphs_fonts', 'Abel'); 

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family='.$fonts[$paragraphs_font]['query']);  

    ?>
    <style type='text/css'>
        body {font-family:<?php echo $fonts[$paragraphs_font]['css']; ?>}
    </style>
    <?php
}
add_action( 'wp_head', 'postpress_change_google_fonts');
?>