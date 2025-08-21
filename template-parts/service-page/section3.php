

<section class="container-fluid py-lg-5 py-sm-4 py-3 section4 m-top3">
    <div class="container"
        style="background:url('<?php echo esc_url(get_field('section4_left_bg')); ?>');">
        <div class="row">
            <div class="col-lg-6 col-0"></div>
            <div class="col-lg-6 col-12 p-0" data-aos="fade-up" data-aos-delay="300">
                <div style="background:url('<?php echo esc_url(get_field('section4_right_bg')); ?>')">
                    <div class="padding-4">
                        <div class="icon-box-left icon-box-left-lg">
                            <figure class="icon-box-bg icon-box-bg-lg">
                                <i class="<?php echo esc_attr(get_field('section4_icon')); ?> icon c-white"></i>
                            </figure>
                            <h2 class="icon-box-subtitle-lg icon-box-subtitle">
                                <?php the_field('section4_subtitle'); ?>
                            </h2>
                        </div>
                        <h1 class="heading-5-lg heading-2 c-white">
                            <?php the_field('section4_title'); ?>
                        </h1>

                        <p class="mt-4 mb-3 c-white">
                            Stratosphere Networks helps businesses bypass the traditional sales process and quickly identify leading Unified into Stratosphere Networks helps businesses bypass the traditional.
                        </p>

                        <p class="c-white p2 mt-lg-4 mt-3">
                            <i class="text-primary fa-solid fa-check"></i>
                            <?php the_field('section4_point1'); ?>
                        </p>
                        <p class="c-white p2">
                            <i class="text-primary fa-solid fa-check"></i>
                            <?php the_field('section4_point2'); ?>
                        </p>

                        <?php if(get_field('section4_button_link')): ?>
                            <a href="<?php the_field('section4_button_link'); ?>" class="btn-lg btn mt-lg-5 mt-3">
                                <?php the_field('section4_button_text'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

