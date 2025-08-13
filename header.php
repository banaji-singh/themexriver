<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

  <!-- AOS Animation CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
 
  <!-- font family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/media.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/freamwork.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mobile-framework.css">
  <title>Themexriver</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.svg" alt="Logo">
    </div>
    
    <!-- Toggle Button on Right -->
    <button class="menu-toggle" id="menu-toggle">&#9776;</button>
  
    <!-- Desktop Menu -->
    <nav class="main-nav">
      <?php wp_nav_menu(['theme_location' => 'Menu-Key']); ?>
    </nav>
    
    <!-- Sidebar (Mobile Menu) -->
    <nav id="sidebar" class="sidebar">
      <button class="close-btn" id="close-btn">&times;</button>
      <?php wp_nav_menu(['theme_location' => 'Menu-Key']); ?>
    </nav>
    
  </header>
  <hr>
  <script>
document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("menu-toggle");
  const sidebar = document.getElementById("sidebar");
  const closeBtn = document.getElementById("close-btn");
  
  toggleBtn.addEventListener("click", function () {
    sidebar.classList.add("active");
  });
  
  closeBtn.addEventListener("click", function () {
    sidebar.classList.remove("active");
  });
  
  // Optional: Close sidebar when clicking outside
  document.addEventListener("click", function (event) {
    if (!sidebar.contains(event.target) && !toggleBtn.contains(event.target)) {
      sidebar.classList.remove("active");
    }
  });
});
</script>



<script>
  AOS.init({
    duration: 1000, // Animation speed in ms
    once: true      // Run animation only once
  });
</script>




<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".stat-number");

  const startCounter = (counter) => {
    let target = +counter.getAttribute("data-target");
    let count = 0;
    let speed = 30; // smaller = faster

    const updateCount = () => {
      if (count < target) {
        count++;
        counter.textContent = count;
        setTimeout(updateCount, speed);
      } else {
        counter.textContent = target;
      }
    };

    updateCount();
  };

  const observer = new IntersectionObserver((entries, obs) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounter(entry.target);
        obs.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counters.forEach(counter => {
    observer.observe(counter);
  });
});
</script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>