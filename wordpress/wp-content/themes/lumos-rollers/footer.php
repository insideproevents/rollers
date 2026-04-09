<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-column">
                <h3 class="footer-title"><?php bloginfo('name'); ?></h3>
                <p><?php bloginfo('description'); ?></p>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title"><?php _e('Products', 'lumos-rollers'); ?></h3>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/toldos'); ?>"><?php _e('Toldos', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/persianas'); ?>"><?php _e('Persianas', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/rollers'); ?>"><?php _e('Rollers', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/motorizacion'); ?>"><?php _e('Motorización', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/pergola'); ?>"><?php _e('Pérgola Bioclimática', 'lumos-rollers'); ?></a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title"><?php _e('Company', 'lumos-rollers'); ?></h3>
                <ul class="footer-links">
                    <li><a href="<?php echo home_url('/nosotros'); ?>"><?php _e('About Us', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/proyectos'); ?>"><?php _e('Projects', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/distribuidores'); ?>"><?php _e('Distributors', 'lumos-rollers'); ?></a></li>
                    <li><a href="<?php echo home_url('/contacto'); ?>"><?php _e('Contact', 'lumos-rollers'); ?></a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h3 class="footer-title"><?php _e('Contact', 'lumos-rollers'); ?></h3>
                <ul class="footer-links">
                    <li><a href="mailto:<?php echo get_option('admin_email'); ?>"><?php _e('Email Us', 'lumos-rollers'); ?></a></li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved.', 'lumos-rollers'); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>