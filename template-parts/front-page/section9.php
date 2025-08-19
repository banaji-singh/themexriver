<section class="stats-section container-fluid p-lg-5 p-4" data-scroll-section>
    <div class="container">
        <div class="row">
           
           <!-- Stat 1 -->
           <div class="col-lg-4 ">
             <div class="stat-card" data-aos="fade-up">
                <div class="stat-icon flex-box">
                  <i class="fas fa-globe"></i> 
                  <div class="stat-number" data-target="96">0</div>
                </div>
                <div class="stat-text heading-1">
                    <?php the_field('stat_text_1'); ?>
                </div>
            </div>
           </div>

           <!-- Stat 2 -->
           <div class="col-lg-4 mt-5 mt-lg-0">
             <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-icon flex-box">
                    <i class="fas fa-chart-line"></i>
                    <div class="stat-number" data-target="89">0</div>
                </div>
                <div class="stat-text heading-1">
                    <?php the_field('stat_text_2'); ?>
                </div>
            </div>
           </div>

           <!-- Stat 3 -->
           <div class="col-lg-4 mt-5 mt-lg-0">
              <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                <div class="stat-icon flex-box">
                    <i class="fas fa-users"></i>
                    <div class="stat-number" data-target="92">0</div>
                </div>
                <div class="stat-text heading-1">
                    <?php the_field('stat_text_3'); ?>
                </div>
            </div>
           </div>

        </div>
    </div>
</section>

