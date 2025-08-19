
<section class="p-lg-5 p-4 m-top1" data-scroll-section>
    <div class="container">
        <div class="row ">

            <!-- Left Side Image -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <?php if ($img = get_field('section_testimonial_image')): ?>
                    <img src="<?php echo esc_url($img); ?>" alt="Client"
                        class="img-fluid testimonial-img rounded">
                <?php endif; ?>

                <div class="p-3 bg-light mt-3 rounded d-flex align-items-center">
                    <?php if ($author_img = get_field('section_testimonial_author_image')): ?>
                        <img src="<?php echo esc_url($author_img); ?>" alt="Client"
                            class="client-img me-5 rounded-circle">
                    <?php endif; ?>
                    <div>
                        <h6 class="mb-0"><?php the_field('section_testimonial_author_name'); ?></h6>
                        <small class="text-muted">
                            <?php the_field('section_testimonial_author_designation'); ?>
                        </small>
                        <div class="rating mt-1">
                            <?php
                            $rating = get_field('section_testimonial_rating');
                            if ($rating) {
                                for ($i = 1; $i <= $rating; $i++) {
                                    echo '<i class="fas fa-star"></i>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Content -->
            <div class="col-lg-7 mt-4 mt-lg-0 shadow-lg p-3 py-5"
                 data-aos="flip-right" data-aos-delay="200">

                <small class="text-primary fw-bold text-uppercase heading-1-lg">
                    <?php the_field('section_testimonial_subtitle'); ?>
                </small>

                <h2 class="fw-bold mt-2 mb-5 heading-6-lg theme-color">
                    <?php the_field('section_testimonial_title'); ?>
                </h2>

                <p class="text-muted p1-lg">
                    <?php the_field('section_testimonial_text'); ?>
                </p>

                <div class="quote-box mt-3 bg-color-gray p-3">
                    <?php the_field('section_testimonial_quote'); ?>
                </div>

                <!-- Client Avatars -->
                <div class="d-lg-flex mt-lg-4 img-circle-box mt-3">
                    <?php if ($avatar1 = get_field('section_testimonial_avatar1')): ?>
                        <img src="<?php echo esc_url($avatar1); ?>"
                             class="rounded-circle me-2 img-cb img-cb-lg" alt="">
                    <?php endif; ?>

                    <?php if ($avatar2 = get_field('section_testimonial_avatar2')): ?>
                        <img src="<?php echo esc_url($avatar2); ?>"
                             class="rounded-circle me-2 img-cb img-cb-lg" alt="">
                    <?php endif; ?>

                    <?php if ($avatar3 = get_field('section_testimonial_avatar3')): ?>
                        <img src="<?php echo esc_url($avatar3); ?>"
                             class="rounded-circle me-2 img-cb img-cb-lg" alt="">
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>
