<?php 
//Template Name: home?>

<?php   get_header();?>

<div class="top-section">

    <div class="icon-box-1">
        <div class="icon-bg-1"><img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp" alt="">
        </div>
        <p class="subtitle"><?php the_field('section_subtitle'); ?></p>
    </div>

    <h1 class="title animate-on-load animate-delay-1"><?php echo nl2br(get_field('section_title_1')); ?></h1>

</div>

<!-- Hero Section -->
<section class="hero-section"
    style="background: url('<?php echo get_template_directory_uri(); ?>/assets/background-image.jpg') no-repeat center center/cover;">
    <div class="container">

        <h1 class="title animate-on-load  animate-delay-2  "><?php echo nl2br(get_field('section_title_2')); ?></h1>

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
        <div class="settings-icon"><img src="<?php echo get_template_directory_uri();?>/assets/settings.png" alt="">
        </div>
        <h2><?php the_field('mission_heading'); ?></h2>
        <p class="mission_text"><?php the_field('mission_text'); ?></p>
        <!-- call and mail icon -->
        <div class="contact-info-call">
            <i class="fa-solid fa-phone"></i>
            <p><strong> 24/7 Support:</strong> <?php the_field('support_phone'); ?></p>
        </div>
        <div class="contact-info-mail">
            <i class="fa-solid fa-envelope"></i>
            <p><strong><?php the_field('support_email'); ?></strong></p>
        </div>


        <h3>Follow us</h3>
        <div class="social-icons">
            <a class="f-icon" href="<?php the_field('facebook_url'); ?>" target="_blank"><i
                    class="fa-brands fa-facebook-f"></i></a>
            <a class="t-icon" href="<?php the_field('pinterest_url'); ?>" target="_blank"><i
                    class="fa-brands fa-twitter"></i></a>
            <a class="p-icon" href="<?php the_field('twitter_url'); ?>" target="_blank"><i
                    class="fa-brands fa-pinterest-p"></i></a>
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
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
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
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
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
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- Section 2 --><!-- Section 2 --><!-- Section 2 -->

<section class="section2">
    <article class="three-box-article">
        <div class="content1 box hidden animate-delay-1">
            <h2>1</h2>
            <a href="<?php the_field('section2_heading_url_1');?>"><?php the_field('section2_heading_1');?></a>
            <p><?php the_field('section2_paragraph_1'); ?></p>
        </div>

        <div class="content2 box hidden animate-delay-2">
            <h2>2</h2>
            <a href="<?php the_field('section2_heading_url_2'); ?>">
                <?php the_field('section2_heading_2'); ?>
            </a>
            <p><?php the_field('section2_paragraph_2'); ?></p>
        </div>

        <div class="content3 box hidden animate-delay-3">
            <h2>3</h2>
            <a href="<?php the_field('section2_heading_url_3'); ?>">
                <?php the_field('section2_heading_3'); ?>
            </a>
            <p><?php the_field('section2_paragraph_3'); ?></p>
        </div>
    </article>
</section>

<!-- Section 3 --><!-- Section 3 --><!-- Section 3 -->

<section class="section3">

    <!-- top section icon box -->
    <div class="s3-top-box">
        <div class="icon-box">
            <div class="icon-bg"><img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp"
                    alt="">
            </div>
            <p class="subtitle"><?php the_field('section_subtitle'); ?></p>
        </div>
        <div class="s3-top-title">
            <h1 class="section3-title-1" data-aos="zoom-in" data-aos-delay="100"><?php the_field('section3-title-1');?></h1>
        </div>
    </div>



    <div class="s3-top-section-title">
        <div class="s3-container-1">
            <div class="bussiness-section-box-1" data-aos="flip-left" data-aos-delay="100">
                <!-- Icon -->
                <i class="fas fa-users-cog fa-3x" style="color: #3498db;"></i>
                <!-- Title -->
                <h1 class="section3-bussiness-section-title-1"><?php the_field('section3-bussiness-section-title-1');?>
                </h1>
                <!-- Paragraph -->
                <p class="section3-bussiness-section-paragraph-1">
                    <?php the_field('section3-bussiness-section-paragraph-1');?></p>
                <hr>
                <!-- for the link -->
                <a class="section3-bussiness-section-url-1"
                    href="<?php the_field('section3-bussiness-section-url-1');?>">View More &rarr;</a>
            </div>


            <div class="bussiness-section-box-2" data-aos="flip-left" data-aos-delay="300">
                <!-- Icon -->
                <i class="fas fa-chart-line fa-3x" style="color: #3498db;"></i>
                <!-- Title -->
                <h1 class="section3-bussiness-section-title-2"><?php the_field('section3-bussiness-section-title-2');?>
                </h1>
                <!-- Paragraph -->
                <p class="section3-bussiness-section-paragraph-2">
                    <?php the_field('section3-bussiness-section-paragraph-2');?></p>
                <hr>
                <!-- for the link -->
                <a class="section3-bussiness-section-url-2"
                    href="<?php the_field('section3-bussiness-section-url-2');?>">View More &rarr;</a>
            </div>


            <div class="bussiness-section-box-3" data-aos="flip-left" data-aos-delay="500">
                <!-- Icon -->
                <i class="fas fa-globe fa-3x" style="color: #3498db;"></i>
                <!-- Title -->
                <h1 class="section3-bussiness-section-title-3"><?php the_field('section3-bussiness-section-title-3');?>
                </h1>
                <!-- Paragraph -->
                <p class="section3-bussiness-section-paragraph-3">
                    <?php the_field('section3-bussiness-section-paragraph-3');?></p>
                <hr>
                <!-- for the link -->
                <a class="section3-bussiness-section-url-3"
                    href="<?php the_field('section3-bussiness-section-url-3');?>">View More &rarr;</a>
            </div>


            <div class="bussiness-section-box-4" data-aos="flip-left" data-aos-delay="700">
                <!-- icon -->
                <i class="fas fa-hand-sparkles fa-3x" style="color: #3498db;"></i>
                <!-- Title -->
                <h1 class="section3-bussiness-section-title-4"><?php the_field('section3-bussiness-section-title-4');?>
                </h1>
                <!-- Paragraph -->
                <p class="section3-bussiness-section-paragraph-4">
                    <?php the_field('section3-bussiness-section-paragraph-4');?></p>
                <hr>
                <!-- for the link -->
                <a class="section3-bussiness-section-url-4"
                    href="<?php the_field('section3-bussiness-section-url-4');?>">View More &rarr;</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 4 --><!-- Section 4 --><!-- Section 4 -->

<section class="section4">
    <div class="s4-main-box"
        style="background: url('<?php echo get_template_directory_uri();?>/assets/background-img-section-4.webp');">
        <!-- Container1 -->
        <div class="s4-container-1">
        </div>

        <!-- Container2 -->
        <div class="s4-contaienr-2" data-aos="zoom-in" data-aos-delay="100" style="background: url('<?php echo get_template_directory_uri();?>/assets/section-4-container-2-background-img.webp');">
            <div class="s4-contaienr-2-child">
                <!-- Icon Box -->
                <div class="s4-icon-box" >
                    <div class="s4-icon-circle">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/subtitle-icon.webp" alt="">
                    </div>
                    <h1 class="s4-icon-subtitle"><?php the_field('section4-image-box-subtitle');?></h1>
                </div>
                <!-- Content -->
                <h1 class="section4-title-1"><?php the_field('section4-title-1');?></h1>
                <p class="section4-service-point-1">✔️<?php the_field('section4-service-point-1');?></p>
                <p class="section4-service-point-2">✔️<?php the_field('section4-service-point-2');?></p>
                <a class="section4-url-1" href="<?php the_field('section4-url-1');?>"><?php the_field('section4-url-heading-1');?></a>
            </div>
        </div>


    </div>

</section>

<!-- Section 5 --><!-- Section 5 --><!-- Section 5 -->

<section class="section5">
    <div class="s5-main-container">
        <div class="s5-container-1">
            <!-- Icon Box -->
            <div class="s5-icon-box">
                <div class="s5-icon-circle">
                    <img src="<?php echo get_template_directory_uri();?>/assets/subtitle-icon.webp" alt="s5-icon">
                </div>
                <h1 class="s5-icon-box-subtitle"><?php the_field('s5-icon-box-subtitle');?></h1>
            </div>

            <!-- Main Heading -->
            <h1 class="s5-title-1" data-aos="zoom-in" data-aos-delay="100"><?php the_field('s5-title-1');?></h1>
            <!-- Paragraph -->
            <!-- Service point -->
            <p class="s5-service-point-1" data-aos="zoom-in" data-aos-delay="300">✔️<?php the_field('s5-service-point-1');?></p>
            <p class="s5-service-point-2" data-aos="zoom-in" data-aos-delay="300">✔️<?php the_field('s5-service-point-2');?></p>
            <p class="s5-service-point-3" data-aos="zoom-in" data-aos-delay="300">✔️<?php the_field('s5-service-point-3');?></p>

            <!-- Button -->
            <a class="s5-url-1" data-aos="zoom-in-right" data-aos-delay="100" href="<?php the_field('s5-url-1');?>">MORE SERVICE</a>
        </div>
        <div class="s5-container-2" style="background:url('<?php echo get_template_directory_uri();?>/assets/section5-container2-bg-img.webp');">
            <div class="s5-container-2-child">
                <h1 data-aos="zoom-in-left" data-aos-delay="100">System upgrades</h1>
                <h1 data-aos="zoom-in-left" data-aos-delay="100">Digital transfer</h1>
                <h1 data-aos="zoom-in-left" data-aos-delay="100">IT development</h1>
                <h1 data-aos="zoom-in-left" data-aos-delay="100">No hard contracts</h1>
            </div>
            
        </div>
    </div>
</section>



<?php get_footer();?>