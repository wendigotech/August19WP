<?php get_header(); ?>

<div class="container px-xl-0 relative text-center text-md-left"> 
    <div class="pb-165 inner pt-230"> 
        <div class="mb-3 logo d-block d-xl-none logo_mobile">
            <a href="<?php echo esc_url( get_home_url() ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'logo1', esc_url( get_template_directory_uri() . '/imgs/frank-logo.svg' ) ), 'large' ) ?>" alt="Frankenstein logo" height="60"></a>
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

<?php get_footer(); ?>