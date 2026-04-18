<?php
/**
 * Funciones y definiciones para studio-sl-template.
 */

function studio_sl_customize_register( $wp_customize ) {
    // 1. Añadir una nueva sección en el Personalizador.
    $wp_customize->add_section( 'hero_banner_section' , array(
        'title'      => __( 'Hero Banner', 'studio-sl-template' ),
        'priority'   => 30,
    ) );

    // 2. Añadir el ajuste para la imagen de fondo.
    $wp_customize->add_setting( 'hero_banner_background_image' , array(
        'default'   => 'https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80',
        'transport' => 'refresh',
    ) );

    // 3. Añadir el control para que el usuario pueda subir la imagen.
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'hero_banner_background_image', array(
        'label'      => __( 'Imagen de Fondo del Banner', 'studio-sl-template' ),
        'section'    => 'hero_banner_section',
        'settings'   => 'hero_banner_background_image',
    ) ) );
}
add_action( 'customize_register', 'studio_sl_customize_register' );