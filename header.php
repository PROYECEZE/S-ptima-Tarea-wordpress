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
                <a href="<?php echo esc_url(home_url('/')); ?>"
                    class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">
                    <? echo __('Inicio', 'aprendiendoezequiel'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/acerca-de-mi')); ?>"
                    class="nav-link <?php echo is_page('acerca-de-mi') ? 'active' : ''; ?>">
                    <? echo __('Acerca de mi', 'aprendiendoezequiel'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/proyectos')); ?>"
                    class="nav-link <?php echo is_page('proyectos') ? 'active' : ''; ?>">
                    <? echo __('Proyectos', 'aprendiendoezequiel'); ?>
                </a>
            </nav>
            <a href="<?php echo esc_url(home_url('/contacto')); ?>" class="header__contact">
                Contáctame
            </a>
        </div>
    </header>