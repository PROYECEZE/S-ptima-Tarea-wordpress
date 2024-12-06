<?php get_header(); ?>

<main class="header-container">
    <div class="main-content">
    <?php
        // Method 1: Using img tag with get_template_directory_uri()
        ?>
        <img 
        src="<?php echo get_template_directory_uri(); ?>/ezequielBackground.jpg" 
        alt="Ezequiel Background"
        class="my-image"
        />
    </div>
</main>
<?php get_footer(); ?>