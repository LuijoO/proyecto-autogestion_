<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    
    <!-- Enlazamos tu archivo style.css principal para cargar los estilos -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    
    <?php wp_head(); // Gancho esencial: permite a WordPress cargar scripts y estilos adicionales ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <main>
        <?php 
        // Aquí llamamos al archivo hero-banner.php
        // Si más adelante decides crear la carpeta 'template-parts', deberás cambiar esto a:
        // get_template_part( 'template-parts/hero-banner' );
        get_template_part( 'hero-banner' ); 
        ?>

        <!-- Contenido temporal de prueba debajo del banner -->
        <section style="max-width: 800px; margin: 60px auto; padding: 0 20px; text-align: center;">
            <h2>¡Bienvenido a tu nuevo tema a medida!</h2>
            <p>Si estás viendo esto y el banner superior se muestra correctamente, la estructura básica de tu tema ya está funcionando.</p>
        </section>
    </main>

    <?php wp_footer(); // Gancho esencial: permite a WordPress cargar scripts al final de la página ?>
</body>
</html>