<section class="section-3 container-fluid py-lg-5 py-sm-4 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 s3-icon-box-1" data-aos="fade-right" data-aos-delay="200">
                <figure>
                    <?php if(get_field('section3_icon')): ?>
                        <i class="<?php the_field('section3_icon'); ?> c-white"></i>
                    <?php endif; ?>
                </figure>

                <?php if(get_field('section3_subtitle')): ?>
                    <h2 class="subtitle" data-aos="fade-right" data-aos-delay="300">
                        <?php the_field('section3_subtitle'); ?>
                    </h2>
                <?php endif; ?>
            </div>

            <?php if(get_field('section3_title')): ?>
                <h1 class="main-heading-s3 sm-heading" data-aos="fade-right" data-aos-delay="500">
                    <?php the_field('section3_title'); ?>
                </h1>
            <?php endif; ?>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            
            <!-- Box 1 -->
            <div class="col-lg-4 s3-box-2" data-aos="zoom-in" data-aos-delay="200">
                <div class="shadow-lg p-4">
                    <figure>
                        <i class="<?php the_field('section3_box1_icon'); ?>"></i>
                    </figure>
                    <h1><?php the_field('section3_box1_title'); ?></h1>
                    <p><?php the_field('section3_box1_text'); ?></p>
                    <hr style="color:blue;">
                    <a href="<?php the_field('section3_box1_button_link'); ?>">
                        <button class="btn btn-lg c-white"><?php the_field('section3_box1_button_text'); ?><i class="fa-solid fa-right-to-bracket"></i></button>
                    </a>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="col-lg-4 s3-box-2 mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="400">
                <div class="shadow-lg p-4">
                    <figure>
                        <i class="<?php the_field('section3_box2_icon'); ?>"></i>
                    </figure>
                    <h1><?php the_field('section3_box2_title'); ?></h1>
                    <p><?php the_field('section3_box2_text'); ?></p>
                    <hr style="color:blue;">
                    <a href="<?php the_field('section3_box2_button_link'); ?>">
                        <button class="btn btn-lg c-white"><?php the_field('section3_box2_button_text'); ?> <i class="fa-solid fa-right-to-bracket"></i></button>
                    </a>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="col-lg-4 s3-box-2 mt-5 mt-lg-0" data-aos="zoom-in" data-aos-delay="600">
                <div class="shadow-lg p-4">
                    <figure>
                        <i class="<?php the_field('section3_box3_icon'); ?>"></i>
                    </figure>
                    <h1><?php the_field('section3_box3_title'); ?></h1>
                    <p><?php the_field('section3_box3_text'); ?></p>
                    <hr style="color:blue;">
                    <a href="<?php the_field('section3_box3_button_link'); ?>">
                        <button class="btn btn-lg c-white"><?php the_field('section3_box3_button_text'); ?> <i class="fa-solid fa-right-to-bracket"></i></button>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>





