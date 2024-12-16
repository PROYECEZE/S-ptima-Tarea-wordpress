<footer class="footer">
    <div class="footer-content">
        <div class="footer-brand">
            <h2 class="footer-logo">EZEBLaMER</h2>
        </div>
        <div class="footer-nav">
            <div class="footer-column">
                <h3>Inicio</h3>
                <ul>
                    <li><a href="<?php echo get_permalink(get_page_by_path('acerca-de-mi')); ?>">Acerca de mi</a></li>
                    <li><a href="<?php echo get_permalink(get_page_by_path('proyectos')); ?>">Proyectos</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Contáctame</h3>
                <ul>
                    <li><a href="mailto:<?php echo get_theme_mod('contact_email', 'tu@email.com'); ?>">Correo</a></li>
                    <li><a href="<?php echo get_theme_mod('linkedin_url', '#'); ?>">LinkedIn</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Social</h3>
                <div class="social-icons">
                    <a href="<?php echo get_theme_mod('behance_url', '#'); ?>" target="_blank" rel="noopener noreferrer" class="social-icon behance">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/behance.svg" alt="Behance">
                    </a>
                    <a href="<?php echo get_theme_mod('linkedin_url', '#'); ?>" target="_blank" rel="noopener noreferrer" class="social-icon linkedin">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.svg" alt="LinkedIn">
                    </a>
                    <a href="<?php echo get_theme_mod('portfolio_url', '#'); ?>" target="_blank" rel="noopener noreferrer" class="social-icon portfolio">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio.svg" alt="Portfolio">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> Ezequiel Blanco</p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>