<?php get_header(); ?>

<div class="container">
    <main id="main-content">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_content(); ?>
                </article>
                <?php
            endwhile;
        else :
            echo '<p>No hay contenido para mostrar.</p>';
        endif;
        ?>
    </main>
</div>

<?php get_footer(); ?>