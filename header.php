<!DOCTYPE html>
<html lang="en">
  
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- AOS Animation CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  
  <!-- font family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
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
</body>

</html>