<?php
/**
* @package arc
* @subpackage customizer
* @since 2.0
**/

// Add Logo uploader
function arc_theme_customizer( $wp_customize ){
  $wp_customize->add_section( 'arc_logo_section' , array(
    'title'       => __( 'Logo', 'arc' ),
    'priority'    => 30,
    'description' => 'Upload a logo to replace the default site name and description in the header'
));
  $wp_customize->add_setting( 'arc_logo' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'arc_logo', array(
    'label'    => __( 'Logo', 'arc' ),
    'section'  => 'arc_logo_section',
    'settings' => 'arc_logo',
)));
}
add_action('customize_register', 'arc_theme_customizer');
