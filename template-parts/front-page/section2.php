<section class="py-5 bg-color-gray p-5 " data-scroll-section>
  <div class="container text-center">

    <?php if(get_field('latest_news_subtitle')): ?>
      <p class="gri-color fw-bold mb-1">
        <?php the_field('latest_news_subtitle'); ?>
      </p>
    <?php endif; ?>

    <?php if(get_field('latest_news_title')): ?>
      <h2 class="section-title mb-5 theme-color">
        <?php the_field('latest_news_title'); ?>
      </h2>
    <?php endif; ?>

    <div class="row justify-content-center g-5 mt-5">

      <!-- Card 1 -->
      <?php if(get_field('latest_news1_title')): ?>
        <div class="col-md-5">
          <div class="position-relative">
            <div class="news-card text-start">
              <h5><?php the_field('latest_news1_title'); ?></h5>
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







