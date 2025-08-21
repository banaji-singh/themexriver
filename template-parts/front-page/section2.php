<section class=" bg-color-gray  mt-5 mb-4 " style="padding-top:70px; padding-bottom:90px" data-scroll-section>
  <div class="container text-center mb-2 wow animate__animated animate__zoomIn" data-wow-delay="0.3s">

    <?php if(get_field('latest_news_subtitle')): ?>
      <p class="gri-color fw-bold mb-1">
        <?php the_field('latest_news_subtitle'); ?>
      </p>
    <?php endif; ?>

    <?php if(get_field('latest_news_title')): ?>
      <h2 class="section-title mb-5 theme-color wow animate__animated animate__bounceInDown"  data-wow-delay="0.6s">
        <?php the_field('latest_news_title'); ?>
      </h2>
    <?php endif; ?>

    <div class="row justify-content-evenly g-5 mt-5">

      <!-- Card 1 -->
      <?php if(get_field('latest_news1_title')): ?>
        <div class="col-md-5 ">
          <div class="position-relative">
            <div class="news-card text-start">
              <h5 class="animate__flipInX "><?php the_field('latest_news1_title'); ?></h5>
              <div class="blue-line"></div>
              <p><?php the_field('latest_news1_text'); ?></p>
              <?php if(get_field('latest_news1_link')): ?>
                <a href="<?php the_field('latest_news1_link'); ?>" class="btn-lg btn">Continue Reading →</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

      <!-- Card 2 -->
      <?php if(get_field('latest_news2_title')): ?>
        <div class="col-md-5">
          <div class="position-relative">
            <div class="news-card text-start">
              <h5><?php the_field('latest_news2_title'); ?></h5>
              <div class="blue-line"></div>
              <p><?php the_field('latest_news2_text'); ?></p>
              <?php if(get_field('latest_news2_link')): ?>
                <a href="<?php the_field('latest_news2_link'); ?>" class="btn-lg btn">Continue Reading →</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      <?php endif; ?>

    </div>
  </div>
</section>







