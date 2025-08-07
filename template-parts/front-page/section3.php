<!-- Section 3 -->
<!-- Section 3 -->
<!-- Section 3 -->

<section class="section3 py-5 bg-light">

    <div class="container">

        <!-- Top icon + subtitle + title -->
        <div class="s3-top-box">
            <div class="icon-box">
                <div class="icon-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp"
                        alt="">
                </div>
                <p class="subtitle"><?php the_field('section_subtitle'); ?></p>
            </div>
            <div class="s3-top-title">
                <h1 class="section3-title-1" data-aos="zoom-in" data-aos-delay="100">
                    <?php the_field('section3-title-1');?>
                </h1>
            </div>



            <!-- Cards Grid -->
            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3" data-aos="flip-left" data-aos-delay="100">
                    <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
                        <i class="fas fa-users-cog fa-3x mb-3 text-primary"></i>
                        <h5 class="fw-bold"><?php the_field('section3-bussiness-section-title-1'); ?></h5>
                        <p><?php the_field('section3-bussiness-section-paragraph-1'); ?></p>
                        <hr>
                        <a class="fw-bold text-decoration-none"
                            href="<?php the_field('section3-bussiness-section-url-1'); ?>">
                            View More →
                        </a>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3" data-aos="flip-left" data-aos-delay="300">
                    <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
                        <i class="fas fa-chart-line fa-3x mb-3 text-primary"></i>
                        <h5 class="fw-bold"><?php the_field('section3-bussiness-section-title-2'); ?></h5>
                        <p><?php the_field('section3-bussiness-section-paragraph-2'); ?></p>
                        <hr>
                        <a class="fw-bold text-decoration-none"
                            href="<?php the_field('section3-bussiness-section-url-2'); ?>">
                            View More →
                        </a>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3" data-aos="flip-left" data-aos-delay="500">
                    <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
                        <i class="fas fa-globe fa-3x mb-3 text-primary"></i>
                        <h5 class="fw-bold"><?php the_field('section3-bussiness-section-title-3'); ?></h5>
                        <p><?php the_field('section3-bussiness-section-paragraph-3'); ?></p>
                        <hr>
                        <a class="fw-bold text-decoration-none"
                            href="<?php the_field('section3-bussiness-section-url-3'); ?>">
                            View More →
                        </a>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3" data-aos="flip-left" data-aos-delay="700">
                    <div class="p-4 bg-white rounded shadow-sm h-100 text-center">
                        <i class="fas fa-hand-sparkles fa-3x mb-3 text-primary"></i>
                        <h5 class="fw-bold"><?php the_field('section3-bussiness-section-title-4'); ?></h5>
                        <p><?php the_field('section3-bussiness-section-paragraph-4'); ?></p>
                        <hr>
                        <a class="fw-bold text-decoration-none"
                            href="<?php the_field('section3-bussiness-section-url-4'); ?>">
                            View More →
                        </a>
                    </div>
                </div>

            </div>
        </div>
</section>