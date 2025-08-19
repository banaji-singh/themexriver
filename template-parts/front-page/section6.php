
<section class="p-lg-5 p-4 m-top2" data-scroll-section>
    <div class="container">
        <div class="row ">
            <div class="col-lg-6 mb-4 mb-lg-0 ">

                <div class="icon-box-left icon-box-left-lg">
                    <figure class="icon-box-bg icon-box-bg-lg">
                        <i class="<?php the_field('section6_icon'); ?> icon c-white"></i>
                    </figure>
                    <h2 class="icon-box-subtitle-lg icon-box-subtitle">
                        <?php the_field('section6_subtitle'); ?>
                    </h2>
                </div>

                <h2 class="fw-bold heading-2 heading-5-lg theme-color">
                    <?php the_field('section6_title'); ?>
                </h2>
                

                <p class="p2 p2-lg mt-lg-4 mt-3">
                    <?php the_field('section6_text'); ?>
                </p>

                <ul class="list-unstyled mt-lg-4">
                    <li class="pointer-lg"><?php the_field('section6_list1'); ?></li>
                    <li class="pointer-lg"><?php the_field('section6_list2'); ?></li>
                    <li class="pointer-lg"><?php the_field('section6_list3'); ?></li>
                </ul>

                <?php if(get_field('section6_button_text') && get_field('section6_button_link')): ?>
                    <a href="<?php the_field('section6_button_link'); ?>" class="btn btn-lg  mt-lg-4 mt-4">
                        <?php the_field('section6_button_text'); ?>
                    </a>
                <?php endif; ?>

            </div>

            <!-- Right Image -->
            <div class="col-lg-6 text-center">
                <?php 
                if( get_field('section6_image')):
                 ?>
                    <img src="<?php the_field('section6_image') ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid rounded">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

