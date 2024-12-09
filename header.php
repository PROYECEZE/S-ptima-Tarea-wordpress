<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__branding">
                EZEBLaMER
            </a>
            <nav class="header__navigation">
                <?php
                $current_page = is_front_page() ? 'inicio' : '';
                ?>
                <a href="<?php echo esc_url(home_url('/')); ?>" 
                   class="nav-link <?php echo $current_page === 'inicio' ? 'active' : ''; ?>">
                    Inicio
                </a>
                <a href="<?php echo esc_url(home_url('/acerca-de-mi')); ?>" 
                   class="nav-link <?php echo is_page('acerca-de-mi') ? 'active' : ''; ?>">
                    Acerca de mi
                </a>
                <a href="<?php echo esc_url(home_url('/proyectos')); ?>" 
                   class="nav-link <?php echo is_page('proyectos') ? 'active' : ''; ?>">
                    Proyectos
                </a>
            </nav>

            <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="header__contact">
                Contáctame
            </a>
        </div>
    </header>