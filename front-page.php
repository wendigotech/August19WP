<?php get_header(); ?>

<section>
    <div class="relative container text-center text-md-left"> 
        <div class="inner pt-230 mw-570"> 
            <div class="mb-3 logo d-block d-xl-none logo_mobile">
                <a href="<?php echo esc_url( get_home_url() ); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/frank-logo.svg" alt="Frankenstein logo" height="60"></a>
            </div>                             
        </div>                         
    </div>
    <div class="container-fluid">
        <?php the_content(); ?>
    </div>
</section>
<section id="testimonials" class="testimonial_6 bg-main pt-105 pb-75 color-white text-center text-sm-left"> 
    <div class="pg-empty-placeholder"></div>
    <div class="pg-empty-placeholder"></div>                     
    <?php
        $editors_args = array(
            'category_name' => 'editors',
            'order' => 'DESC'
        )
    ?>
    <?php $editors = new WP_Query( $editors_args ); ?>
    <div class="container px-xl-0"> 
        <div class="row justify-content-center"> 
            <div class="col-xl-10 col-lg-12 col-md-10" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                <h2 class="mb-35 small"><?php _e( 'Our selection of best Casinos', 'august19' ); ?></h2> 
            </div>                             
        </div>                         
        <?php if ( $editors->have_posts() ) : ?>
            <div class="row align-items-stretch justify-content-center"> 
                <?php while ( $editors->have_posts() ) : $editors->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="mb-30 col-lg-6 d-flex col-xl-6 col-md-10" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                        <div class="d-flex radius10 block">
                            <?php the_content(); ?>
                        </div>                                         
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>                                  
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'august19' ); ?></p>
        <?php endif; ?> 
    </div>                     
</section>
<section class="call_to_action_11 bg-dark color-white text-center text-lg-left"> 
    <div class="container px-xl-0 pt-45 pb-45"> 
        <div class="row align-items-center justify-content-center"> 
            <div class="col-xl-7 col-lg-8" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                <h6 class="f-22 regular text-adaptive"><?php _e( 'Take a look at all Online Casinos', 'august19' ); ?></h6> 
            </div>                             
            <div class="col-xl-3 col-lg-4 text-lg-right" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                <a href="https://sizzlingcasinos.com/casinos/online-casinos/" class="mt-30 mt-lg-0 btn lg action-1"><?php _e( 'Click here', 'august19' ); ?></a> 
            </div>                             
        </div>                         
    </div>                     
</section>
<section class="color-white bonus-loop content_15"> 
    <?php
        $bestbonus_args = array(
            'category_name' => 'bestbonus',
            'order' => 'DESC'
        )
    ?>
    <?php $bestbonus = new WP_Query( $bestbonus_args ); ?>
    <div class="container px-xl-0">
        <div class="row justify-content-center"> 
            <div class="col-xl-10 col-lg-12 col-md-10 aos-init aos-animate" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                <h2 class="mb-35 small"><?php _e( 'Top Bonus sites', 'august19' ); ?></h2> 
            </div>                             
        </div>                         
        <?php if ( $bestbonus->have_posts() ) : ?>
            <div class="row align-items-stretch justify-content-center"> 
                <?php while ( $bestbonus->have_posts() ) : $bestbonus->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="mb-30 col-xl-5 col-lg-6 col-md-10 d-flex aos-init aos-animate" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                        <div class="d-flex radius10 block">
                            <?php the_content(); ?>
                        </div>                                         
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>                                  
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'august19' ); ?></p>
        <?php endif; ?>
    </div>                     
</section>
<section class="showcase_10 bg-light pt-100 pb-95"> 
    <?php
        $news_args = array(
            'category_name' => 'news',
            'order' => 'DESC'
        )
    ?>
    <?php $news = new WP_Query( $news_args ); ?>
    <div class="container px-xl-0"> 
        <div class="row justify-content-center align-items-center align-items-lg-end text-center"> 
            <div class="col-md-8 col-sm-7 text-sm-left" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                <h2 class="small"><?php _e( 'In the press', 'august19' ); ?></h2> 
            </div>                             
            <div class="col-md-4 col-sm-5 text-sm-right" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                <!-- <a href="#" class="mt-20 mt-sm-0 btn size50 border-gray color-main">Explore Showcase</a> -->                                 
            </div>                             
        </div>                         
        <?php if ( $news->have_posts() ) : ?>
            <div class="mt-40 row align-items-stretch"> 
                <?php $news_item_number = 0; ?>
                <?php while ( $news->have_posts() && $news_item_number++ < 4 ) : $news->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="col-md-6 mb-30" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                        <div class="h-full radius10 pt-55 pb-50 bg-action-2 color-white"> 
                            <div class="row justify-content-center"> 
                                <div class="col-xl-9 col-10 news-bkg"> 
                                    <a href="" class="text-light"><?php if ( is_singular() ) : ?><div class="mb-15 f-22 title">
                                                <?php the_title(); ?>
                                            </div><?php else : ?><div class="mb-15 f-22 title">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                            </div><?php endif; ?></a> 
                                    <div class="text-adaptive">
                                        <?php echo get_the_excerpt(); ?>
                                    </div>                                                     
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="mt-40 btn sm action-white f-16"><span class="color-main"><?php _e( 'Read the full story', 'august19' ); ?></span></a> 
                                </div>                                                 
                            </div>                                             
                        </div>                                         
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>                                                                                                    
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'august19' ); ?></p>
        <?php endif; ?> 
    </div>                     
</section>
<section id="pricingTable" class="pricing_table_7 bg-light pt-105 pb-100 text-center"> 
    <?php
        $guide_args = array(
            'category_name' => 'guide',
            'order' => 'DESC'
        )
    ?>
    <?php $guide = new WP_Query( $guide_args ); ?>
    <div class="container px-xl-0"> 
        <div class="row justify-content-center"> 
            <div class="col-xl-8 col-lg-10" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                <h2 class="mb-15 small"><?php _e( 'Get some tips from our Guides', 'august19' ); ?></h2> 
            </div>                             
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                <div class="mb-50 f-22 color-heading text-adaptive"> 
                    <!-- Use the Startup Framework for free with no limits. -->                                     
                </div>                                 
            </div>                             
        </div>                         
        <?php if ( $guide->have_posts() ) : ?>
            <div class="row justify-content-center"> 
                <?php while ( $guide->have_posts() ) : $guide->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="col-sm-6 col-xs-10" data-aos-duration="500" data-aos="fade-down" data-aos-delay="500"> 
                        <div class="pt-40 pb-45 radius10 inner"> 
                            <div class="row justify-content-center no-gutters"> 
                                <div class="col-xl-7 col-lg-8 col-sm-9 col-11"> 
                                    <div class="f-22 title">
                                        <?php the_title(); ?>
                                    </div>                                                     
                                    <div class="mt-10 color-heading f-18 medium text-adaptive">
                                        <?php echo get_the_excerpt(); ?>
                                    </div>                                                     
                                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="mt-35 btn lg action-2"><?php _e( 'Read more', 'august19' ); ?></a> 
                                </div>                                                 
                            </div>                                             
                        </div>                                         
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>                                  
            </div>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'august19' ); ?></p>
        <?php endif; ?> 
    </div>                     
</section>                

<?php get_footer(); ?>