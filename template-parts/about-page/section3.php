<section class="container-fluid py-5 mt-5">
  <div class="container">
    <div class="row align-items-center">

      <!-- Left Content -->
      <div class="col-lg-6 mb-4 mb-lg-0 px-4 bg-color-gray p-4 rounded">
        <h1 class="theme-color fw-bold mb-4">
          <?php echo esc_html(get_field('about_section3_headline')); ?>
        </h1>
        <p class="mb-4">
          <?php echo esc_html(get_field('about_section3_paragraph')); ?>
        </p>

        <!-- Pointers -->
        <ul class="list-unstyled">
          <li data-aos="fade-left" data-aos-delay="300" class="mb-2">
            <i class="fa-solid fa-check text-primary me-2"></i> <?php echo esc_html(get_field('about_section3_pointer1')); ?>
          </li>
          <li data-aos="fade-left" data-aos-delay="500" class="mb-2">
            <i class="fa-solid fa-check text-primary me-2"></i> <?php echo esc_html(get_field('about_section3_pointer2')); ?>
          </li>
          <li data-aos="fade-left" data-aos-delay="700" class="mb-2">
            <i class="fa-solid fa-check text-primary me-2"></i> <?php echo esc_html(get_field('about_section3_pointer3')); ?>
          </li>
        </ul>

        <!-- Button -->
        <a href="<?php echo esc_url(get_field('about_section3_button_link')); ?>" 
           class="btn btn-lg mt-3 wow animate__animated animate__bounceInRight"  
           data-wow-delay="0.5s">
          <?php echo esc_html(get_field('about_section3_button_text')); ?> <span class="circle"></span>
        </a>
      </div>

      <!-- Right Image -->
      <div class="col-lg-6">
        <img src="<?php echo esc_url(get_field('about_section3_image')); ?>" 
             class="img-fluid rounded w-100" 
             alt="Managed IT Services">
      </div>

    </div>
  </div>
</section>
