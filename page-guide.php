<?php get_header(); ?>

<div class="container px-xl-0 relative text-center text-md-left"> 
    <div class="pb-165 inner pt-230"> 
        <div class="mb-3 logo d-block d-xl-none logo_mobile">
            <a href="<?php echo esc_url( get_home_url() ); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/frank-logo.svg" alt="Frankenstein logo" height="40"></a>
        </div>                         
        <h1 data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"><?php the_title(); ?></h1> 
        <div class="mt-20 mw-500 color-heading f-18 medium op-7 text-adaptive"> 
            <span data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"><?php echo get_the_excerpt(); ?></span> 
        </div>                         
    </div>                     
</div>
<section id="testimonials" class="testimonial_6 bg-main pt-105 pb-75 color-white text-center text-sm-left">
    <div class="pg-empty-placeholder"></div>                     
    <div class="container px-xl-0">
        <?php the_content(); ?>
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