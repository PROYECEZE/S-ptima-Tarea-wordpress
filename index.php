<?php
/*
Template Name: Portfolio Page
*/
get_header(); ?>
<main>
    <section class="portfolio">
        <?php
            ?>
          <img class="portfolio__image"
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
        <section class="portfolio__btn">
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
        </section>
        <section class="about-me">
            <h2 class="about-me__title"><?php echo get_theme_mod('about_title', 'Acerca de mi'); ?></h2>
            <div class="about-me__content">
                <div class="about-me__text">
                    <?php echo wpautop(get_theme_mod('about_description', 'Hola! mi nombre es Ezequiel Blanco (amo hacer todo tipos de retratos) tengo una gran afinidad hacia el trabajo colaborativo, me gusta crear diseños que inspiren e involucren a las personas. Como diseñador UI, considero que un buen producto no solo brinda una solución sino que permite crear una experiencia emocional en las personas que lo usan.')); ?>
                        <?php echo wpautop(get_theme_mod('about_tools', 'En mi proceso creativo utilizo herramientas como Figma, Adobe XD, Photoshop e Illustrator y en mi rol como developer front-end utilizo para programar Visual Studio Code y Sublime text. que me ayudan en el flujo de trabajo para la producción y creación de interfaces web. diseñadas y programadas.')); ?>
                        <a href="<?php echo get_theme_mod('about_button_url', '#'); ?>" class="about-me__button">
                            <?php echo get_theme_mod('about_button_text', 'Mas acerca de mi'); ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                </div>
                <div class="about-me__image">
                    <?php
                        $image_url = get_theme_mod('about_image', get_template_directory_uri() . '/image/photoAu.png');
                    ?>
                    <img src="<?php echo esc_url($image_url); ?>" alt="Author photo" />
                </div>
            </div>
        </section>
        <section class="portraits">
            <h2 class="portraits__title"><?php echo get_theme_mod('aprendiendoezequiel', 'Mis Retratos'); ?></h2>
            <div class="portraits__grid">
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <div class="portraits__item">
                        <?php
                        $image_url = get_theme_mod("portrait_image_$i", get_template_directory_uri() . "/image/painting.png");
                        ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="Retrato <?php echo $i; ?>" class="portraits__image">
                    </div>
                <?php endfor; ?>
            </div>

            <div class="portraits__button-wrapper">
                <a href="<?php echo get_theme_mod('portraits_link', '#'); ?>" class="portraits__button">
                    Ver mas Retratos
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </section>
</main>
<?php get_footer(); ?>