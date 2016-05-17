<?php
function oklookie_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'oklookie_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'oklookie_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'oklookie' ),
        'section'  => 'title_tagline',
        'settings' => 'oklookie_logo',
    ) ) );
}
add_action( 'customize_register', 'oklookie_customize_register' );
?>