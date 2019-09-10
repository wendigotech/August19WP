
        </div>         
        <!-- Call to Action 11 -->         
        <!-- Content 15 -->         
        <!-- Showcase 10 -->         
        <!-- Pricing Table 7 -->         
        <!-- Footer 13 -->         
        <footer class="footer_13 bg-dark pt-45 pb-60 color-white text-center text-lg-left"> 
            <div class="container px-xl-0"> 
                <div class="lh-40 footer_links" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                    <!-- <div><a href="#aboutAuthor" class="f-18 link color-white mb-15">About the author</a></div>
			<div><a href="#testimonial" class="f-18 link color-white mb-15">Testimonials</a></div>
			<div><a href="#pricingTable" class="f-18 link color-white mb-15">Book prices</a></div> -->                     
                    <a href="#aboutAuthor" class="f-14 semibold text-uppercase sp-20 link color-white mr-10"><?php _e( 'About the author', 'august19' ); ?></a> 
                    <a href="#testimonial" class="f-14 semibold text-uppercase sp-20 link color-white mx-10"><?php _e( 'Testimonials', 'august19' ); ?></a> 
                    <a href="#pricingTable" class="f-14 semibold text-uppercase sp-20 link color-white mx-10"><?php _e( 'Book prices', 'august19' ); ?></a> 
                </div>                 
                <div data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                    <div class="mt-35 mb-40 hr h-2 bg-white op-3"></div>                     
                </div>                 
                <div class="row"> 
                    <div class="col-lg-7"> 
                        <div class="row"> 
                            <div class="col-xl-4 col-lg-5" data-aos-duration="500" data-aos="fade-down" data-aos-delay="0"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/imgs/frank-logo-white.svg" alt="Frankenstein logo" height="40"> 
                            </div>                             
                            <div class="mt-15 mb-15 my-lg-0 col-xl-8 col-lg-7" data-aos-duration="500" data-aos="fade-down" data-aos-delay="250"> 
                                <div class="text-adaptive"> 
                                    <?php _e( 'Victor Frankenstein, a young scientist who creates a hideous, sapient creature in an unorthodox scientific experiment.', 'august19' ); ?> 
                                </div>                                 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="col-lg-5 text-lg-right" data-aos-duration="500" data-aos="fade-down" data-aos-delay="500"> 
                        <span class="d-inline-block socials"> <a href="#" class="link color-white mx-15"><i class="fab fa-twitter"></i></a> <a href="#" class="link color-white mx-15"><i class="fab fa-facebook-f"></i></a> <a href="#" class="link color-white ml-15"><i class="fab fa-google-plus-g"></i></a> </span> 
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
