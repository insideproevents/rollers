<?php get_header(); ?>

<main>
    <?php if (is_front_page()) : ?>
    
    <!-- Hero Section -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-cortinas.jpg');">
        <div class="hero-content">
            <h1 class="hero-title"><?php _e('Cortinas Lumos', 'lumos-rollers'); ?></h1>
            <p class="hero-subtitle"><?php _e('Expertos en protección solar y решения', 'lumos-rollers'); ?></p>
            <a href="<?php echo home_url('/contacto'); ?>" class="btn"><?php _e('Solicitar Cotización', 'lumos-rollers'); ?></a>
        </div>
    </section>
    
    <!-- Products Section -->
    <section class="section">
        <div class="container">
            <h2 class="section-title"><?php _e('Nuestros Productos', 'lumos-rollers'); ?></h2>
            
            <div class="products-grid">
                <?php
                $products = array(
                    array('image' => 'toldo-vela.jpg', 'title' => 'Toldo Vela', 'desc' => 'Protección solar versátil'),
                    array('image' => 'toldo-pivotante.jpg', 'title' => 'Toldo Pivotante', 'desc' => 'Diseño innovador'),
                    array('image' => 'toldo-riel.jpg', 'title' => 'Toldo de Riel', 'desc' => 'Cobertura completa'),
                    array('image' => 'toldo-florentino.jpg', 'title' => 'Toldo Florentino', 'desc' => 'Elegancia clásica'),
                    array('image' => 'toldo-retractil.jpg', 'title' => 'Toldo Retráctil', 'desc' => 'Flexibilidad total'),
                    array('image' => 'toldo-vertical.jpg', 'title' => 'Toldo Vertical', 'desc' => 'Protección lateral'),
                    array('image' => 'roller.jpg', 'title' => 'Roller', 'desc' => 'Minimalismo fonctionnel'),
                    array('image' => 'roller-ecolux.jpg', 'title' => 'Roller Ecolux', 'desc' => 'Ahorro energético'),
                    array('image' => 'roller-duo.jpg', 'title' => 'Roller Duo', 'desc' => 'Doble funcionalidad'),
                    array('image' => 'persianas-madera.jpg', 'title' => 'Persianas de Madera', 'desc' => 'Calidez natural'),
                    array('image' => 'persianas-seguridad.jpg', 'title' => 'Persianas de Seguridad', 'desc' => 'Protección máxima'),
                    array('image' => 'motorizacion.jpg', 'title' => 'Motorización', 'desc' => 'Control inteligente'),
                    array('image' => 'cierre-terraza.jpg', 'title' => 'Cierre de Terraza', 'desc' => 'Espacio protegido'),
                    array('image' => 'cierre-zipper.jpg', 'title' => 'Cierre Zipper', 'desc' => 'Sistema hermético'),
                    array('image' => 'shutters.jpg', 'title' => 'Shutters', 'desc' => 'Estilo americano'),
                    array('image' => 'pergola-bioclimatica.jpg', 'title' => 'Pérgola Bioclimática', 'desc' => 'Clima natural'),
                );
                
                foreach ($products as $product) :
                ?>
                <div class="product-card">
                    <div class="product-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/<?php echo esc_attr($product['image']); ?>');"></div>
                    <div class="product-info">
                        <h3 class="product-title"><?php echo esc_html($product['title']); ?></h3>
                        <p class="product-description"><?php echo esc_html($product['desc']); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    
    <!-- About Preview -->
    <section class="section" style="background: #f9f9f9;">
        <div class="container">
            <h2 class="section-title"><?php _e('Nosotros', 'lumos-rollers'); ?></h2>
            <p style="text-align: center; max-width: 700px; margin: 0 auto 30px;">
                <?php _e('Con más de años de experiencia, Lumos es líder en soluciones de protección solar. Nos dedicamos a crear espacios cómodos y elegantes para homes y negocios.', 'lumos-rollers'); ?>
            </p>
            <div style="text-align: center;">
                <a href="<?php echo home_url('/nosotros'); ?>" class="btn"><?php _e('Leer Más', 'lumos-rollers'); ?></a>
            </div>
        </div>
    </section>
    
    <!-- Projects Preview -->
    <section class="section">
        <div class="container">
            <h2 class="section-title"><?php _e('Proyectos', 'lumos-rollers'); ?></h2>
            
            <div class="projects-gallery">
                <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="project-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/proyecto-<?php echo $i; ?>.jpg');"></div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    
    <!-- Contact CTA -->
    <section class="section" style="background: #1a1a1a; color: #fff;">
        <div class="container" style="text-align: center;">
            <h2 class="section-title" style="color: #fff;"><?php _e('¿Listo para transformar tu espacio?', 'lumos-rollers'); ?></h2>
            <p style="margin-bottom: 30px; opacity: 0.8;"><?php _e('Contáctanos para una cotización personalizada', 'lumos-rollers'); ?></p>
            <a href="<?php echo home_url('/contacto'); ?>" class="btn"><?php _e('Contactar Ahora', 'lumos-rollers'); ?></a>
        </div>
    </section>
    
    <?php else : ?>
    
    <!-- Regular Page -->
    <section class="hero" style="height: 40vh; min-height: 300px; background: #1a1a1a;">
        <div class="hero-content">
            <h1 class="hero-title"><?php the_title(); ?></h1>
        </div>
    </section>
    
    <section class="section">
        <div class="container">
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </section>
    
    <?php endif; ?>
</main>

<?php get_footer(); ?>