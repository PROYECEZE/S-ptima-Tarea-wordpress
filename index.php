<?php
/*
Template Name: Portfolio Page
*/
get_header(); ?>
<main>
    <section class="portfolio">
        <?php
            ?>
            <img 
                src="<?php echo get_template_directory_uri() . '/image/ezequielBackground.jpg'; ?>" 
                alt="Ezequiel Background"
            />
    </section>
    <section class="portfolio__section">
        <h1 class="portfolio__Iam">
            <span><?php echo esc_html__('Soy', 'aprendiendoezequiel'); ?></span> 
            <span class="portfolio__author"><?php echo esc_html(get_theme_mod('portfolio_name', 'EZEQUIEL BLANCO')); ?></span>
        </h1>
        <?php
        $titles = get_theme_mod('portfolio_titles', array('Diseñador UI/UX', 'Pintor(retratos)', 'Front-end developer'));
        if (!empty($titles)) : ?>
            <ul class="portfolio__professions">
                <?php foreach ($titles as $title) : ?>
                    <li><?php echo esc_html($title); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <p class="portfolio__description ">
            <?php echo esc_html(get_theme_mod('portfolio_description', 'Este es mi portfolio y CV hecho en Figma, acá puedes ver mi estilo de prototipado a la hora de diseñar interfaces.')); ?>
        </p>
        <p class="portfolio__greeting">
            <?php echo esc_html(get_theme_mod('portfolio_greeting', '¡Espero te guste!')); ?>
        </p>
    </section>
    <?php
        $cv_obtaining_id = attachment_url_to_postid(wp_get_upload_dir()['baseurl'] . '/portafolio/CVEZE.pdf');
        $cv_url = wp_get_attachment_url($cv_obtaining_id);
        ?>
        <div class="portfolio__btn">
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('aprendiendoezequiel'))); ?>" class="portfolio__proyect">
                Ver proyectos
            </a>
            <a href="<?php echo esc_url($cv_url); ?>" class="portfolio__cv" download="CVEZE.pdf">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="portfolio__icon">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Descargar CV
            </a>
        </div>
</main>
<?php get_footer(); ?>