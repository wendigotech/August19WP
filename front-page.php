<?php get_header(); ?>

<section>
    <div class="text-center relative text-md-left container"> 
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/green-frank-bg.jpg" class="d-none d-md-block ml-700 h-full absolute header_7_bg" alt="Frankenstein's monster. Source: https://wallpaperplay.com/board/frankenstein-wallpapers" data-aos-duration="500" data-aos="fade-down" data-aos-delay="750"/> 
        <div class="pt-230 pb-165 inner mw-570"> 
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
</section>
<section id="testimonials" class="testimonial_6 bg-main pt-105 pb-75 color-white text-center text-sm-left">
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
                <h2 class="mb-35 small"><?php _e( 'Our selection', 'august19' ); ?></h2> 
            </div>                             
        </div>                         
        <?php if ( $editors->have_posts() ) : ?>
            <div class="row align-items-stretch justify-content-center"> 
                <?php while ( $editors->have_posts() ) : $editors->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div class="mb-30 col-xl-5 col-lg-6 col-md-10 d-flex" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
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
                <a href="#" class="mt-30 mt-lg-0 btn lg action-1"><?php _e( 'Click here', 'august19' ); ?></a> 
            </div>                             
        </div>                         
    </div>                     
</section>
<section class="content_15 pt-580 pb-160 color-white"> 
    <div class="container px-xl-0"> 
        <div class="row"> 
            <div class="col-lg-1"></div>                             
            <div class="col-lg-7 col-md-10"> 
                <h2 data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"><?php _e( 'The child of love and light', 'august19' ); ?></h2> 
                <div class="mt-15 f-22 text-adaptive" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                    <?php _e( 'Mary Wollstonecraft Shelley (née Godwin; 30 August 1797 – 1 February 1851) was an English novelist who wrote the Gothic novel Frankenstein; or, The Modern Prometheus (1818). She also edited and promoted the works of her husband, the Romantic poet and philosopher Percy Bysshe Shelley. Her father was the political philosopher William Godwin, and her mother was the philosopher and feminist Mary Wollstonecraft.', 'august19' ); ?> 
                    <!-- Background image source: https://www.zedge.net/wallpaper/a8e4e1f3-5228-32ad-9ed8-08423e396b62 -->                                     
                </div>                                 
            </div>                             
        </div>                         
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