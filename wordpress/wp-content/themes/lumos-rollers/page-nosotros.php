<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/about-hero.jpg');">
        <div class="hero-content">
            <h1 class="hero-title"><?php _e('Sobre Nosotros', 'lumos-rollers'); ?></h1>
        </div>
    </section>
    
    <!-- About Content -->
    <section class="section">
        <div class="container">
            <div style="max-width: 800px; margin: 0 auto;">
                <h2 style="margin-bottom: 20px;"><?php _e('Nuestra Historia', 'lumos-rollers'); ?></h2>
                <p style="margin-bottom: 30px;">
                    <?php _e('Cortinas Lumos es una empresa líder en soluciones de protección solar, fundada con el propósito de crear espacios más cómodos y elegantes. Con años de experiencia en el sector, nos hemos convertido en referente de calidad e innovación.', 'lumos-rollers'); ?>
                </p>
                
                <h2 style="margin-bottom: 20px;"><?php _e('Nuestra Misión', 'lumos-rollers'); ?></h2>
                <p style="margin-bottom: 30px;">
                    <?php _e('Brindar soluciones de protección solar que mejoren la calidad de vida de nuestros clientes, ofreciendo productos de alta calidad con un servicio personalizado.', 'lumos-rollers'); ?>
                </p>
                
                <h2 style="margin-bottom: 20px;"><?php _e('Nuestros Valores', 'lumos-rollers'); ?></h2>
                <ul style="margin-bottom: 30px; padding-left: 20px;">
                    <li style="margin-bottom: 10px;"><?php _e('Calidad en cada producto', 'lumos-rollers'); ?></li>
                    <li style="margin-bottom: 10px;"><?php _e('Innovación constante', 'lumos-rollers'); ?></li>
                    <li style="margin-bottom: 10px;"><?php _e('Servicio al cliente excepcional', 'lumos-rollers'); ?></li>
                    <li style="margin-bottom: 10px;"><?php _e('Compromiso con el medio ambiente', 'lumos-rollers'); ?></li>
                </ul>
            </div>
        </div>
    </section>
    
    <!-- Why Choose Us -->
    <section class="section" style="background: #f9f9f9;">
        <div class="container">
            <h2 class="section-title"><?php _e('¿Por Qué Elegirnos?', 'lumos-rollers'); ?></h2>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-info" style="text-align: center;">
                        <h3 class="product-title"><?php _e('Experiencia', 'lumos-rollers'); ?></h3>
                        <p class="product-description"><?php _e('Años de experiencia en el sector', 'lumos-rollers'); ?></p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-info" style="text-align: center;">
                        <h3 class="product-title"><?php _e('Calidad', 'lumos-rollers'); ?></h3>
                        <p class="product-description"><?php _e('Productos de primera calidad', 'lumos-rollers'); ?></p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-info" style="text-align: center;">
                        <h3 class="product-title"><?php _e('Servicio', 'lumos-rollers'); ?></h3>
                        <p class="product-description"><?php _e('Atención personalizada', 'lumos-rollers'); ?></p>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-info" style="text-align: center;">
                        <h3 class="product-title"><?php _e('Garantía', 'lumos-rollers'); ?></h3>
                        <p class="product-description"><?php _e('Garantía en todos nuestros productos', 'lumos-rollers'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>