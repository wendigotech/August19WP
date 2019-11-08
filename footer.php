
            </div>
        </header>         
        <!-- Testimonial 6 -->         
        <!-- Call to Action 11 -->         
        <!-- Content 15 -->         
        <!-- Showcase 10 -->         
        <!-- Pricing Table 7 -->         
        <!-- Footer 13 -->         
        <footer class="footer_13 bg-dark pt-45 pb-60 color-white text-center text-lg-left"> 
            <div class="container px-xl-0"> 
                <?php if ( has_nav_menu( 'social' ) ) : ?>
                    <?php
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<a class="f-14 semibold text-uppercase sp-20 link color-white mr-10 {CLASSES}" id="{ID}" {ATTRS}>{TITLE}</a>';
                        wp_nav_menu( array(
                            'container' => '',
                            'theme_location' => 'social',
                            'items_wrap' => '<div class="lh-40 footer_links %2$s" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0" id="%1$s">%3$s</div>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                <?php endif; ?> 
                <div data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                    <div class="mt-35 mb-40 hr h-2 bg-white op-3"></div>                     
                </div>                 
                <div class="row"> 
                    <div class="col-lg-7"> 
                        <div class="row"> 
                            <div class="col-xl-4 col-lg-5" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                                <a href="<?php echo esc_url( get_home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/frank-logo-white.svg" alt="Frankenstein logo" height="70"> </a> 
                            </div>                             
                            <div class="mt-15 mb-15 my-lg-0 col-xl-8 col-lg-7" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                                <div class="text-adaptive">
                                    <?php echo get_theme_mod( 'footer_text', __( 'Victor Frankenstein, a young scientist who creates a hideous, sapient creature in an unorthodox scientific experiment.', 'august19' ) ); ?>
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="col-lg-5 text-lg-right" data-aos-duration="500" data-aos="fade-down" data-aos-delay="500"> 
                        <span class="socials d-flex"> <a href="<?php echo get_theme_mod( 'footer_img1_link', '#' ); ?>" class="link color-white mx-15"><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_img1', 'http://pinegrow.com/placeholders/img15.jpg' ), 'large' ) ?>" height="30"></a> <a href="<?php echo get_theme_mod( 'footer_img2_link', '#' ); ?>" class="link color-white mx-15"><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_img2', 'http://pinegrow.com/placeholders/img15.jpg' ), 'large' ) ?>" height="30"></a> <a href="<?php echo get_theme_mod( 'footer_img3_link', '#' ); ?>" class="link color-white ml-15"><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'footer_img3', 'http://pinegrow.com/placeholders/img15.jpg' ), 'large' ) ?>" height="30"></a> </span> 
                    </div>                     
                </div>                 
            </div>             
        </footer>         
        <!-- forms alerts -->         
        <div class="alert alert-success alert-dismissible alert-form-success" role="alert"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>             
            <?php _e( 'Thanks for your message!', 'august19' ); ?> 
        </div>         
        <div class="alert alert-warning alert-dismissible alert-form-check-fields" role="alert"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>             
            <?php _e( 'Please, fill in required fields.', 'august19' ); ?> 
        </div>         
        <div class="alert alert-danger alert-dismissible alert-form-error" role="alert"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>             
            <?php _e( 'An error occurred while sending data :(', 'august19' ); ?> 
        </div>         
        <!-- popup with video -->         
        <div class="overlay"></div>         
        <div class="video_popup"> 
            <a class="close"> <img srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/i/close_white@2x.png 2x" src="<?php echo esc_url( get_template_directory_uri() ); ?>/i/close_white.png" alt=""/> </a> 
            <div class="d-flex align-items-center justify-content-center w-full h-full iframe_container"></div>             
        </div>                                             
        <?php wp_footer(); ?>
    </body>     
</html>
