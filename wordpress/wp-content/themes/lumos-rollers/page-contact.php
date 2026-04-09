<?php get_header(); ?>

<main>
    <!-- Hero -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/contact-hero.jpg');">
        <div class="hero-content">
            <h1 class="hero-title"><?php _e('Contacto', 'lumos-rollers'); ?></h1>
        </div>
    </section>
    
    <!-- Contact Form -->
    <section class="section">
        <div class="container">
            <div class="contact-form">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
                
                <form class="contact-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>">
                    <?php wp_nonce_field('lumos_contact', 'lumos_nonce'); ?>
                    <input type="hidden" name="action" value="lumos_contact_form">
                    
                    <div class="form-group">
                        <label for="name"><?php _e('Nombre', 'lumos-rollers'); ?> *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><?php _e('Email', 'lumos-rollers'); ?> *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone"><?php _e('Teléfono', 'lumos-rollers'); ?></label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                    
                    <div class="form-group">
                        <label for="service"><?php _e('Servicio de Interés', 'lumos-rollers'); ?></label>
                        <select id="service" name="service">
                            <option value=""><?php _e('Seleccionar...', 'lumos-rollers'); ?></option>
                            <option value="toldos"><?php _e('Toldos', 'lumos-rollers'); ?></option>
                            <option value="rollers"><?php _e('Rollers', 'lumos-rollers'); ?></option>
                            <option value="persianas"><?php _e('Persianas', 'lumos-rollers'); ?></option>
                            <option value="motorizacion"><?php _e('Motorización', 'lumos-rollers'); ?></option>
                            <option value="pergola"><?php _e('Pérgola Bioclimática', 'lumos-rollers'); ?></option>
                            <option value="otro"><?php _e('Otro', 'lumos-rollers'); ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message"><?php _e('Mensaje', 'lumos-rollers'); ?> *</label>
                        <textarea id="message" name="message" rows="6" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn"><?php _e('Enviar Mensaje', 'lumos-rollers'); ?></button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>