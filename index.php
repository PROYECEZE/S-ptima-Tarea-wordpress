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
        src="<?php echo get_template_directory_uri(); ?>/ezequielBackground.jpg" 
        alt="Ezequiel Background"
        />
    </section>
    <section class="portfolio__section">
        <h1 class="portfolio__Iam">
            <span><?php echo esc_html__('Soy', 'theme-textdomain'); ?></span> 
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
</main>
<?php get_footer(); ?>