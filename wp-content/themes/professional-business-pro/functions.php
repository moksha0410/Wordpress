<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'professional_business_pro_cfg_locale_css' ) ):
    function professional_business_pro_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'professional_business_pro_cfg_locale_css' );

if ( !function_exists( 'professional_business_pro_cfg_parent_css' ) ):
    function professional_business_pro_cfg_parent_css() {
        wp_enqueue_style( 'professional_business_pro_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'professional_business_pro_cfg_parent_css', 10 );
         

// END ENQUEUE PARENT ACTION

add_filter('best_shop_settings', 'professional_business_pro_settings');

function professional_business_pro_settings ($values){
    $values[ 'primary_color' ] = '#E50707';
    $values[ 'secondary_color' ] = '#efa32d';
    $values[ 'heading_font' ] = 'Cabin';
    $values[ 'body_font' ] = 'Poppins';
    
    $values['logo_width'] = 130 ;
    $values['layout_width'] = 1280 ;

    $values['enable_search'] = true ;
    $values['ed_social_links'] = true ;

    $values['subscription_shortcode'] = '' ;

    $values['header_layout'] = 'woocommerce-bar' ;
    $values['enable_top_bar'] = true ;
    $values['top_bar_left_content'] = 'contacts' ;    
    $values['top_bar_left_text'] = esc_html__('edit top bar text', 'professional-business-pro');
    $values['top_bar_right_content'] = 'menu_social' ; 
    
    $values['footer_text_color'] = '#eee' ; 
    $values['footer_color'] = '#1c1c1c' ; 
    $values['footer_link'] = 'https://gradientthemes.com/' ; 
    
    $values['page_sidebar_layout'] = 'right-sidebar' ; 
    $values['post_sidebar_layout'] = 'right-sidebar' ; 
    $values['layout_style'] = 'right-sidebar' ;     
    $values['woo_sidebar_layout'] = 'left-sidebar' ;     
    
    return $values;
    
}




if ( ! function_exists( 'professional_business_pro_customize_register' ) ) :
	/**
	 * Add postMessage support for site title and description for the Theme Customizer.
	 *
	 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
	 */
	function professional_business_pro_customize_register( $wp_customize ) {
		
      $wp_customize->add_section(
            'subscription_settings',
            array(
                'title'      => esc_html__( 'Email Subscription', 'professional-business-pro' ),
                'priority'   => 199,
                'capability' => 'edit_theme_options',
                'panel'    => 'theme_options',
                'description' => __( 'Add email subscription plugin shortcode. Email subscription form will appear on the footer.', 'professional-business-pro' ),

            )
        );

        /** Footer Copyright */
        $wp_customize->add_setting(
            'subscription_shortcode',
            array(
                'default'           => best_shop_default_settings('subscription_shortcode'),
                'sanitize_callback' => 'sanitize_text_field',
                'transport'         => 'postMessage'
            )
        );

        $wp_customize->add_control(
            'subscription_shortcode',
            array(
                'label'       => esc_html__( 'Subscription Plugin Shortcode', 'professional-business-pro' ),
                'section'     => 'subscription_settings',
                'type'        => 'text',
            )
        );        

        
	}
endif;
add_action( 'customize_register', 'professional_business_pro_customize_register' );


/*
 * Add default header image
 */

function professional_business_pro_header_style() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'professional_business_pro_custom_header_args',
			array(
				'default-text-color' => '#000000',
				'width'              => 1920,
				'height'             => 760,
				'flex-height'        => true,
				'video'         	 => true,
				'wp-head-callback'   => 'professional_business_pro_header_style',
			)
		)
	);


    add_theme_support( 'automatic-feed-links' );
    
	
}

add_action( 'after_setup_theme', 'professional_business_pro_header_style' );



