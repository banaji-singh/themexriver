

<div class="section7">
    <div class="s7-main-container">
        <div class="s7-container-1">
            <div class="s7-background-img">
            <img src="<?php echo get_template_directory_uri();?>/assets/section7.webp" alt="section7-background-img">
            </div>
        </div>
        <div class="s7-container-2">
            <div class="s7-icon-box">
                <div class="s7-icon-box-background">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp" alt="">
                </div>
                <h3 class="s7-icon-box-subtitle">Contact US</h3>
            </div>
            <h1 class="s7-container-2-title-1"><?php the_field('s7-container-2-title-1');?></h1>
            <p class="s7-container-2-paragraph-1"><?php the_field('s7-container-2-paragraph-1');?></p>

            <div class="s7-container-2-child-1">
              <?php echo do_shortcode('[contact-form-7 id="4357891" title="my-contact-form"]'); ?>
            </div>

        </div>
    </div>
</div>