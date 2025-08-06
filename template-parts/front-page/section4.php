
<!-- Section 4 -->
<!-- Section 4 -->
<!-- Section 4 -->

<section class="section4">
    <div class="s4-main-box"
        style="background: url('<?php echo get_template_directory_uri();?>/assets/background-img-section-4.webp');">
        <!-- Container1 -->
        <div class="s4-container-1">
        </div>

        <!-- Container2 -->
        <div class="s4-contaienr-2" data-aos="zoom-in" data-aos-delay="100"
            style="background: url('<?php echo get_template_directory_uri();?>/assets/section-4-container-2-background-img.webp');">
            <div class="s4-contaienr-2-child">
                <!-- Icon Box -->
                <div class="s4-icon-box">
                    <div class="s4-icon-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp" alt="">
                    </div>
                    <h1 class="s4-icon-subtitle"><?php the_field('section4-image-box-subtitle');?></h1>
                </div>
                <!-- Content -->
                <h1 class="section4-title-1"><?php the_field('section4-title-1');?></h1>
                <p class="section4-service-point-1">✔️<?php the_field('section4-service-point-1');?></p>
                <p class="section4-service-point-2">✔️<?php the_field('section4-service-point-2');?></p>
                <a class="section4-url-1"
                    href="<?php the_field('section4-url-1');?>"><?php the_field('section4-url-heading-1');?></a>
            </div>
        </div>


    </div>

</section>