
<section class="p-lg-5 p-4 bg-light" data-scroll-section>
    <div class="container">

        <!-- Section Heading -->
        <div class="mb-5 text-lg-center">
            <span class="badge gri-color mb-2 ps-3 pe-3 fs-5">
                <?php echo get_field('section_pricing_badge'); ?>
            </span>
            <h2 class="fw-bold text-secondary">
                <?php echo get_field('section_pricing_title'); ?>
            </h2>
        </div>

        <div class="row g-4">

            <!-- Pricing Box 1 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="<?php echo get_field('section_price1_icon'); ?> fs-1 text-primary"></i>
                        </div>
                        <h3 class="gri-color fw-bold"><?php echo get_field('section_price1_price'); ?></h3>
                        <h5 class="fw-bold"><?php echo get_field('section_price1_title'); ?></h5>
                        <p class="text-muted small"><?php echo get_field('section_price1_text'); ?></p>
                        <ul class="list-unstyled text-start">
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price1_feature1'); ?></li>
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price1_feature2'); ?></li>
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price1_feature3'); ?></li>
                        </ul>
                        <a href="<?php echo get_field('section_price1_button_link'); ?>" class="btn btn-lg mt-3">
                            <?php echo get_field('section_price1_button_text'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pricing Box 2 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="<?php echo get_field('section_price2_icon'); ?> fs-1 text-primary"></i>
                        </div>
                        <h3 class="gri-color fw-bold"><?php echo get_field('section_price2_price'); ?></h3>
                        <h5 class="fw-bold"><?php echo get_field('section_price2_title'); ?></h5>
                        <p class="text-muted small"><?php echo get_field('section_price2_text'); ?></p>
                        <ul class="list-unstyled text-start">
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price2_feature1'); ?></li>
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price2_feature2'); ?></li>
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price2_feature3'); ?></li>
                        </ul>
                        <a href="<?php echo get_field('section_price2_button_link'); ?>" class="btn btn-lg mt-3">
                            <?php echo get_field('section_price2_button_text'); ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Pricing Box 3 -->
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="600">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="<?php echo get_field('section_price3_icon'); ?> fs-1 text-primary"></i>
                        </div>
                        <h3 class="gri-color fw-bold"><?php echo get_field('section_price3_price'); ?></h3>
                        <h5 class="fw-bold"><?php echo get_field('section_price3_title'); ?></h5>
                        <p class="text-muted small"><?php echo get_field('section_price3_text'); ?></p>
                        <ul class="list-unstyled text-start">
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price3_feature1'); ?></li>
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price3_feature2'); ?></li>
                            <li><i class="text-primary fa-solid fa-check"></i> <?php echo get_field('section_price3_feature3'); ?></li>
                        </ul>
                        <a href="<?php echo get_field('section_price3_button_link'); ?>" class="btn btn-lg mt-3">
                            <?php echo get_field('section_price3_button_text'); ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

