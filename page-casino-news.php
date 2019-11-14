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
                        <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'full' ) : null; ?>
                        <div class="h-full radius10 pt-55 pb-50 bg-action-2 color-white with_bg_img <?php if($image_attributes) echo 'with_bg_img'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"> 
                            <div class="row justify-content-center"> 
                                <div class="col-xl-9 col-10 news-bkg"> 
                                    <div class="mb-15 f-22 title">
                                        <?php the_title(); ?>
                                    </div>                                                     
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
<section id="testimonials" class="testimonial_6 bg-main pt-105 pb-75 color-white text-center text-sm-left"> 
    <div class="container px-xl-0">
        <?php the_content(); ?>
    </div>
</section>                

<?php get_footer(); ?>