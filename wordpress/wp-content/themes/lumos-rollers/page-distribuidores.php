<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/distribuidores-hero.jpg');">
        <div class="hero-content">
            <h1 class="hero-title"><?php _e('Distribuidores', 'lumos-rollers'); ?></h1>
        </div>
    </section>
    
    <!-- Info Section -->
    <section class="section">
        <div class="container">
            <p style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <?php _e('¿Te interesa ser distribuidor de Cortinas Lumos? Buscamos partners estratégicos para expandir nuestra presencia en nuevas regiones.', 'lumos-rollers'); ?>
            </p>
            
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/distribuidores-img.jpg');"></div>
                    <div class="product-info">
                        <h3 class="product-title"><?php _e('Conviértete en Distribuidor', 'lumos-rollers'); ?></h3>
                        <p class="product-description"><?php _e('Ofrecemos condiciones exclusivas para distribuidores autorizados', 'lumos-rollers'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Contact CTA -->
    <section class="section" style="background: #f9f9f9;">
        <div class="container" style="text-align: center;">
            <h2 class="section-title"><?php _e('¿Te interesa?', 'lumos-rollers'); ?></h2>
            <p style="margin-bottom: 30px;"><?php _e('Contáctanos para más información sobre cómo convertirte en distribuidor', 'lumos-rollers'); ?></p>
            <a href="<?php echo home_url('/contacto'); ?>" class="btn"><?php _e('Contactar', 'lumos-rollers'); ?></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>