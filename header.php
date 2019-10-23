<!DOCTYPE html> 
<!--  Converted from HTML to WordPress with Pinegrow Web Editor. https://pinegrow.com  -->
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>">          
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/i/favicon.png" type="image/x-icon">                                                       
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta content="Pinegrow Web Editor" name="generator">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?> 
        <!-- Navigation Mobile type 3 -->         
        <a class="open_menu bg-dark color-white radius_full"><i class="fas fa-bars lh-40"></i></a> 
        <div class="navigation_mobile bg-dark type3"> 
            <a class="close_menu color-white"><i class="fas fa-times"></i></a> 
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<div id="{ID}" class="{CLASSES}">
                                        <a class="f-18 link color-white mb-15" {ATTRS}>{TITLE}</a>
                                    </div>';
                    wp_nav_menu( array(
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<div class="px-40 pt-60 pb-60 inner %2$s" id="%1$s">%3$s</div>',
                        'walker' => new PG_Smart_Walker_Nav_Menu()
                ) ); ?>
            <?php endif; ?> 
        </div>         
        <!-- Header 7 -->         
        <header class="bg-light header_7"> 
            <!-- Header Menu 7 -->             
            <nav class="header_menu_7 pt-30 pb-30 mt-40"> 
                <div class="container px-xl-0"> 
                    <div class="mw-570"> 
                        <div class="row align-items-center"> 
                            <div class="col-lg-3" data-aos-duration="500" data-aos="fade-down" data-aos-delay="750"> 
                                <a href="<?php echo esc_url( get_home_url() ); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/frank-logo.svg" alt="Frankenstein logo" height="70"></a> 
                            </div>                             
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php
                                    PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="link color-heading medium ml-35 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                                    wp_nav_menu( array(
                                        'container' => '',
                                        'theme_location' => 'primary',
                                        'items_wrap' => '<div class="col-lg-9 text-right %2$s" data-aos-duration="500" data-aos="fade-down" data-aos-delay="1000" id="%1$s">%3$s</div>',
                                        'walker' => new PG_Smart_Walker_Nav_Menu()
                                ) ); ?>
                            <?php endif; ?> 
                        </div>                         
                    </div>                     
                </div>                 
            </nav>             
            <div class="container px-xl-0 relative text-center text-md-left"> 
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/green-frank-bg.jpg" class="d-none d-md-block ml-700 h-full absolute header_7_bg" alt="Frankenstein's monster. Source: https://wallpaperplay.com/board/frankenstein-wallpapers" data-aos-duration="500" data-aos="fade-down" data-aos-delay="750"/> 
                <div class="mw-570 pt-230 pb-165 inner"> 
                    <div class="mb-3 logo d-block d-xl-none logo_mobile">
                        <a href="<?php echo esc_url( get_home_url() ); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/frank-logo.svg" alt="Frankenstein logo" height="60"></a>
                    </div>                     
                    <h1 data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"><?php _e( 'What does it mean to be human?', 'august19' ); ?></h1> 
                    <div class="mt-20 mw-500 color-heading f-18 medium op-7 text-adaptive"> 
                        <span data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"><?php _e( 'Not only a terrifying story but one that raises profound, disturbing questions about the very nature of life and the place of humankind within the cosmos.', 'august19' ); ?></span> 
                    </div>                     
                    <div class="mt-70 d-block d-sm-flex flex-wrap justify-content-center justify-content-md-start buttons" data-aos-duration="500" data-aos="fade-down" data-aos-delay="500"> 
                        <a href="#pricingTable" class="btn lg action-1"><?php _e( 'Get a copy', 'august19' ); ?></a> 
                        <a href="#testimonials" class="ml-10 btn lg border-gray color-main"><?php _e( 'Read the reviews', 'august19' ); ?></a> 
                    </div>                     
                </div>                 
            </div>             
        </header>         
        <!-- Testimonial 6 -->         
        <div>