<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/proyectos-hero.jpg');">
        <div class="hero-content">
            <h1 class="hero-title"><?php _e('Proyectos', 'lumos-rollers'); ?></h1>
        </div>
    </section>
    
    <!-- Projects Gallery -->
    <section class="section">
        <div class="container">
            <p style="text-align: center; margin-bottom: 40px; max-width: 700px; margin-left: auto; margin-right: auto;">
                <?php _e('Conoce algunos de nuestros proyectos destacados. Cada instalación es única y diseñada a medida para satisfacer las necesidades de nuestros clientes.', 'lumos-rollers'); ?>
            </p>
            
            <div class="projects-gallery">
                <?php for ($i = 1; $i <= 8; $i++) : ?>
                <div class="project-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/proyecto-<?php echo $i; ?>.jpg');"></div>
                <?php endfor; ?>
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="section" style="background: #f9f9f9;">
        <div class="container" style="text-align: center;">
            <h2 class="section-title"><?php _e('¿Tienes un proyecto en mente?', 'lumos-rollers'); ?></h2>
            <p style="margin-bottom: 30px;"><?php _e('Contáctanos y te ayudamos a materializarlo', 'lumos-rollers'); ?></p>
            <a href="<?php echo home_url('/contacto'); ?>" class="btn"><?php _e('Solicitar Cotización', 'lumos-rollers'); ?></a>
        </div>
    </section>
</main>

<?php get_footer(); ?>