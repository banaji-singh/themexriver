
<section class="container-fluid  bg-white py-lg-5 py-sm-4 py-3 header-section" data-scroll-section >
    <div class="container">
        <div class="row">

            <!-- HERO SECTION -->

            <div class="bannerContent-box-1 col-lg-8 ">
            <?php if(get_field('hero_icon')): ?>
               <div class="s3-icon-box-1 justify-content-start" data-aos="fade-right" data-aos-delay="200">
                <figure>
                    <i class="<?php the_field('hero_icon');?>" style="color:white;"></i>
                </figure>
                <h2 class="subtitle" data-aos="fade-right" data-aos-delay="300"><?php the_field('hero_subtitle');?></h2>
                </div>
            <?php endif; ?>


            <?php if(get_field('hero_title')): ?>
                <h1 class="bannerContent-heading sm-heading " data-aos="fade-left" data-aos-delay="100">
                    <?php the_field('hero_title');?>
                </h1>
            <?php endif; ?>
                
            <?php if(get_field('hero_point_1')): ?>
                <p data-aos="fade-left" data-aos-delay="300"><i class="text-primary fa-solid fa-check"></i>
                <?php the_field('hero_point_1');?> 
                </p>
            <?php endif; ?>

            <?php if(get_field('hero_point_2')): ?>
                <p data-aos="fade-left" data-aos-delay="500"><i class="text-primary fa-solid fa-check"></i>
                <?php the_field('hero_point_2');?> 
                </p>
            <?php endif; ?>

            <?php if(get_field('hero_point_3')): ?>
                <p data-aos="fade-left" data-aos-delay="700"><i class="text-primary fa-solid fa-check"></i>
                <?php the_field('hero_point_3');?> 
                </p>
            <?php endif; ?>

           <!-- button -->
            <?php if(get_field('hero_button_text')): ?>
                <button data-aos="zoom-in" data-aos-delay="300" class="btn btn-lg" >
                    <a href="<?php the_field('hero_button_link');?>" class="text-d-none c-white btn-hover" ><?php the_field('hero_button_text');?> </a>
                </button>
            </div>
            <?php endif; ?>

       
            <!-- MISSION SECTION -->
            
            <div class="bannerContent-box-2 mt-5 mt-lg-0 col-lg-4 shadow-lg bg-dark py-3">
            <?php if(get_field('mission_icon')): ?>
                <figure class="globel-icon">
                    <i class="<?php the_field('mission_icon');?> c-white"></i>
                </figure>
            <?php endif; ?>

                <?php if(get_field('mission_title')): ?>
                <h1><?php the_field('mission_title');?></h1>
                <?php endif; ?>

                <?php if(get_field('mission_text')): ?>
                <p><?php the_field('mission_text');?></p>
                <?php endif; ?>
                 
                <?php if(get_field('mission_phone')): ?>
                <div class="s1-icon-box-2">
                    <i class="fa-solid fa-phone text-primary"></i>
                    <a href="#" data-aos="fade-down" data-aos-delay="100"><?php the_field('mission_phone');?></a>
                </div>
                <?php endif; ?>

                <?php if(get_field('mission_email')): ?>
                <div class="s1-icon-box-3">
                    <i class="fa-solid fa-envelope text-primary"></i>
                    <a href="#" data-aos="fade-down" data-aos-delay="100"><?php the_field('mission_email');?></a>
                </div>
                <?php endif; ?>
              
                
                <h2 class="heading-2 mt-5 c-white">Follow us</h2>
                
                <div class="d-flex section-1-icon-box-4">
                    <?php if(get_field('mission_social_icon_1')): ?>
                    <div class="s1-icon-bg">
                        <i class="<?php the_field('mission_social_icon_1');?>"></i>
                    </div>
                    <?php endif; ?>

                     <?php if(get_field('mission_social_icon_2')): ?>
                    <div class="s1-icon-bg">
                        <i class="<?php the_field('mission_social_icon_2');?>"></i>
                    </div>
                    <?php endif; ?>

                     <?php if(get_field('mission_social_icon_3')): ?>
                    <div class="s1-icon-bg">
                        <i class="<?php the_field('mission_social_icon_3');?>"></i>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
   
    <!-- HERO FEATURE SECTION -->

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 section-2-box-1 " data-aos="fade-right" data-aos-delay="100">
                <div class="shadow-lg p-3 rounded-3 mt-2 mb-2 s2-box1-content">
                    <?php if(get_field('hero_feature1_number')): ?>
                    <h1><?php the_field('hero_feature1_number');?></h1>
                    <?php endif; ?>

                    <?php if(get_field('hero_feature1_title')): ?>
                    <h3><?php the_field('hero_feature1_title');?></h3>
                    <?php endif; ?>

                    <?php if(get_field('hero_feature1_text')): ?>
                    <p><?php the_field('hero_feature1_text');?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4 " data-aos="fade-right" data-aos-delay="300">
                <div class="shadow-lg p-3 rounded-3 mt-2 mb-2 s2-box2-content">
                   <?php if(get_field('hero_feature2_number')): ?>
                    <h1><?php the_field('hero_feature2_number');?></h1>
                    <?php endif; ?>

                    <?php if(get_field('hero_feature2_title')): ?>
                    <h3><?php the_field('hero_feature2_title');?></h3>
                    <?php endif; ?>

                    <?php if(get_field('hero_feature2_text')): ?>
                    <p><?php the_field('hero_feature2_text');?></p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-4" data-aos="fade-right" data-aos-delay="500">
                <div class="shadow-lg p-3 rounded-3 mt-2 mb-2 s2-box3-content">
                    <?php if(get_field('hero_feature3_number')): ?>
                    <h1><?php the_field('hero_feature3_number');?></h1>
                    <?php endif; ?>

                    <?php if(get_field('hero_feature3_title')): ?>
                    <h3><?php the_field('hero_feature3_title');?></h3>
                    <?php endif; ?>

                    <?php if(get_field('hero_feature3_text')): ?>
                    <p><?php the_field('hero_feature3_text');?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</section>