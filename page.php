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
<section class="call_to_action_11 bg-dark color-white text-center text-lg-left"> 
    <div class="container px-xl-0 pt-45 pb-45"> 
        <div class="row align-items-center justify-content-center"> 
            <div class="col-xl-7 col-lg-8" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                <h6 class="f-22 regular text-adaptive"><?php _e( 'Two hundred and eighty pages of freakiness 🎃', 'august19' ); ?></h6> 
            </div>                             
            <div class="col-xl-3 col-lg-4 text-lg-right" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                <a href="#" class="mt-30 mt-lg-0 btn lg action-1"><?php _e( 'I want a copy!', 'august19' ); ?></a> 
            </div>                             
        </div>                         
    </div>                     
</section>                

<?php get_footer(); ?>