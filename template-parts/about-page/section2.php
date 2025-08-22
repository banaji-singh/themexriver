<section class="section2  container-fluid p-lg-5 p-4">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 flex-box-between">
            <div>
                <!-- Subheadline -->
                <p class="text-primary mt-3">
                    <?php echo esc_html(get_field('subheadline')); ?>
                </p>

                <!-- Headline -->
                <h1 class="theme-color fw-bold" data-aos="fade-down" data-aos-delay="100">
                    <?php echo esc_html(get_field('headline')); ?>
                </h1>

                <!-- Text -->
                <p class="mt-3 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <?php echo esc_html(get_field('text')); ?>
                </p>

                <!-- Button -->
                <a href="<?php echo esc_url(get_field('button_link')); ?>" class="btn btn-lg wow animate__animated animate__bounceInRight" data-wow-delay="0.5s">
                    <?php echo esc_html(get_field('button_text')); ?>
                    <span class="circle"></span>
                </a>
            </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
    <!-- Background Image -->
    <div class="bg-img bg-img-lg margin-left-1-lg"
        style="background: url('<?php echo esc_attr(get_field('about_section2_image')); ?>') center/cover no-repeat;">
    </div>
</div>
</div>
</div>

<div class="container my-5 ">
    <div class="row g-4 justify-content-center">

        <!-- Card 1 -->
        <div class="col-12 col-sm-6 col-lg-3" data-aos="flip-right" data-aos-delay="100">
            <div class="info-card p-4 h-100">
                <div class="icon-box mb-3 wow animate__animated animate__bounceInDown" data-wow-delay="0.3s">
                    <i class="<?php echo esc_attr(get_field('about_section2_card1_icon')); ?>"></i>
                </div>
                <h6 class="fw-bold"><?php echo esc_html(get_field('about_section2_card1_title')); ?></h6>
                <p class="mb-0"><?php echo esc_html(get_field('about_section2_card1_text')); ?></p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-12 col-sm-6 col-lg-3" data-aos="flip-right" data-aos-delay="300">
            <div class="info-card p-4 h-100">
                <div class="icon-box mb-3 wow animate__animated animate__bounceInDown" data-wow-delay="0.5s">
                    <i class="<?php echo esc_attr(get_field('about_section2_card2_icon')); ?>"></i>
                </div>
                <h6 class="fw-bold"><?php echo esc_html(get_field('about_section2_card2_title')); ?></h6>
                <p class="mb-0"><?php echo esc_html(get_field('about_section2_card2_text')); ?></p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-12 col-sm-6 col-lg-3" data-aos="flip-right" data-aos-delay="500">
            <div class="info-card p-4 h-100">
                <div class="icon-box mb-3 wow animate__animated animate__bounceInDown" data-wow-delay="0.7s">
                    <i class="<?php echo esc_attr(get_field('about_section2_card3_icon')); ?>"></i>
                </div>
                <h6 class="fw-bold"><?php echo esc_html(get_field('about_section2_card3_title')); ?></h6>
                <p class="mb-0"><?php echo esc_html(get_field('about_section2_card3_text')); ?></p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="col-12 col-sm-6 col-lg-3" data-aos="flip-right" data-aos-delay="700">
            <div class="info-card p-4 h-100">
                <div class="icon-box mb-3 wow animate__animated animate__bounceInDown" data-wow-delay="0.9s">
                    <i class="<?php echo esc_attr(get_field('about_section2_card4_icon')); ?>"></i>
                </div>
                <h6 class="fw-bold"><?php echo esc_html(get_field('about_section2_card4_title')); ?></h6>
                <p class="mb-0"><?php echo esc_html(get_field('about_section2_card4_text')); ?></p>
            </div>
        </div>

    </div>
</div>

</section>

