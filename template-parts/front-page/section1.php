<div class="top-section">

    <div class="icon-box-1">
        <div class="icon-bg-1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp" alt="">
        </div>
        <p class="subtitle"><?php the_field('section_subtitle'); ?></p>
    </div>

    <h1 class="title" data-aos="fade-left" data-aos-delay="100"><?php echo nl2br(get_field('section_title_1')); ?></h1>

</div>

<!-- Hero Section -->
<section class="hero-section"
    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/background-image.jpg') no-repeat center center/cover;">
    <div class="container">

        <h1 class="title" data-aos="fade-right" data-aos-delay="100"><?php echo nl2br(get_field('section_title_2')); ?></h1>

        <div class="service-points">
            <p class="p1">✔️ <?php the_field('service_point_1'); ?></p>
            <p class="p2">✔️ <?php the_field('service_point_2'); ?></p>
            <p class="p3">✔️ <?php the_field('service_point_3'); ?></p>
        </div>

        <a href="<?php the_field('left_btn_url'); ?>" class="btn btn-primary">
            <?php the_field('left_btn_text'); ?>
        </a>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section">



    <div class="container dark-box">
        <div class="settings-icon">
            <img src="<?php echo get_template_directory_uri();?>/assets/settings.png" alt="">
        </div>
        <h2 data-aos="fade-left"  data-aos-delay="100" ><?php the_field('mission_heading'); ?></h2>
        <p class="mission_text" data-aos="fade-up"  data-aos-delay="300"><?php the_field('mission_text'); ?></p>
        <!-- call and mail icon -->
        <div class="contact-info-call" data-aos="fade-left"  data-aos-delay="500">
            <i class="fa-solid fa-phone"></i>
            <p><strong> 24/7 Support:</strong> <?php the_field('support_phone'); ?></p>
        </div>
        <div class="contact-info-mail" data-aos="fade-left"  data-aos-delay="700">
            <i class="fa-solid fa-envelope"></i>
            <p><strong><?php the_field('support_email'); ?></strong></p>
        </div>


        <h3>Follow us</h3>
        <div class="social-icons">
            <a class="f-icon" href="<?php the_field('facebook_url'); ?>" target="_blank" ><i
                    class="fa-brands fa-facebook-f" data-aos="fade-left"  data-aos-delay="100"></i></a>
            <a class="t-icon" href="<?php the_field('pinterest_url'); ?>" target="_blank"><i
                    class="fa-brands fa-twitter" data-aos="fade-left"  data-aos-delay="300"></i></a>
            <a class="p-icon" href="<?php the_field('twitter_url'); ?>" target="_blank"><i
                    class="fa-brands fa-pinterest-p" data-aos="fade-left"  data-aos-delay="500"></i></a>
        </div>

        <a href="<?php the_field('right_btn_url'); ?>" class="btn btn-secondary">
            <?php the_field('right_btn_text'); ?>
        </a>

        <!-- Review container -->
        <div class="review-container">
            <div class="reviewbox-1">
                <div class="box1">
                    <img src="<?php echo get_template_directory_uri();?>/assets/jonarthan-jan.webp" alt="jonarthan-jan">
                </div>
                <article>
                    <h1>jonarthan Jan</h1>
                    <p>Merits Health Products</p>
                    <div class="star-rating">
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="100"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="300"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="500"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="700"></i>
                        <i class="far fa-star" data-aos="fade-left"  data-aos-delay="900"></i>
                    </div>
                </article>
            </div>
            <hr>

            <div class="reviewbox-2">
                <div class="box2">
                    <img src="<?php echo get_template_directory_uri();?>/assets/mahakamal.webp" alt="jonarthan-jan">
                </div>
                <article>
                    <h1>jonarthan Jan</h1>
                    <p>Merits Health Products</p>
                    <div class="star-rating">
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="100"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="300"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="500"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="700"></i>
                        <i class="far fa-star" data-aos="fade-left"  data-aos-delay="900"></i>
                    </div>
                </article>
            </div>


            <hr>
            <div class="reviewbox-3">
                <div class="box3">
                    <img src="<?php echo get_template_directory_uri();?>/assets/Methw.webp" alt="jonarthan-jan">
                </div>
                <article>
                    <h1>jonarthan Jan</h1>
                    <p>Merits Health Products</p>
                    <div class="star-rating">
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="100"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="300"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="500"></i>
                        <i class="fas fa-star" data-aos="fade-left"  data-aos-delay="700"></i>
                        <i class="far fa-star" data-aos="fade-left"  data-aos-delay="900"></i>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>