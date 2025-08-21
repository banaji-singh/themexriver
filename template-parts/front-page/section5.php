
<section class="container-fluid section5 bg-color-gray py-lg-5 py-sm-4 py-3 m-top1" data-scroll-section>
    <div class="container">
        <div class="row">
            <!-- Left Content -->
            <div class="col-lg-6">
                <div class="s5-box-1">
                    <div class="icon-box-left icon-box-left-lg" data-aos="zoom-out-right" data-aos-delay="300">
                        <figure class="icon-box-bg icon-box-bg-lg">
                            <i class="<?php the_field('section5_icon'); ?> icon c-white"></i>
                        </figure>
                        <h2 class="icon-box-subtitle-lg icon-box-subtitle">
                            <?php the_field('section5_subtitle'); ?>
                        </h2>
                    </div>

                    <h1 class="heading-5-lg heading-2 fw-bold theme-color" data-aos="zoom-out-right" data-aos-delay="500">
                        <?php the_field('section5_title'); ?>
                    </h1>

                    <p class="p1-lg mt-3 mt-lg-4" data-aos="zoom-out-right" data-aos-delay="600">
                        <?php the_field('section5_text'); ?>
                    </p>

                    <div class="mt-lg-4 mt-3">
                        <p class="pointer pointer-lg" data-aos="zoom-out-right" data-aos-delay="200">
                            <i class="text-primary fa-solid fa-check"></i>
                            <?php the_field('section5_point1'); ?>
                        </p>
                        <p class="pointer pointer-lg" data-aos="zoom-out-right" data-aos-delay="400">
                            <i class="text-primary fa-solid fa-check"></i>
                            <?php the_field('section5_point2'); ?>
                        </p>
                        <p class="pointer pointer-lg" data-aos="zoom-out-right" data-aos-delay="600">
                            <i class="text-primary fa-solid fa-check"></i>
                            <?php the_field('section5_point3'); ?>
                        </p>
                    </div>

                    <?php if(get_field('section5_button_link')): ?>
                        <a href="<?php the_field('section5_button_link'); ?>" 
                           class="btn-lg btn mt-3" data-aos="zoom-in" data-aos-delay="500">
                            <?php the_field('section5_button_text'); ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-6 h-100 d-flex align-items-center mt-4 mt-lg-0" data-aos="slide-right" data-aos-delay="200">
        <div class="bannerForm shadow-lg p-lg-5 p-4 rounded bg-white w-100">
          <!-- Contact Form 7 Shortcode -->
          <?php echo do_shortcode('[contact-form-7 id="4357891" title="my-contact-form"]'); ?>
        </div>
      </div>
        </div>
    </div>
</section>

