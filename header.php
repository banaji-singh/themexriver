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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon.svg" alt="My Image">

        </div>
        <nav>
            <?php wp_nav_menu(['theme_location' => 'Menu-Key']);?>
        </nav>
        <button id='first-btn'><span>REQUEST A QUOTE</span></button>
    </header>
    <hr>
    <script>
  let animated = false;

  function animateStrongCounter(element, end, speed) {
    let count = 0;
    const step = () => {
      element.textContent = `${count}%`;
      count++;
      if (count <= end) {
        setTimeout(step, speed);
      }
    };
    step();
  }

  function isInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top <= window.innerHeight &&
      rect.bottom >= 0
    );
  }

  window.addEventListener("scroll", function () {
    const section = document.querySelector(".s6-container-1");
    if (isInViewport(section) && !animated) {
      animated = true;

      // Counter 1
      const counter1 = document.querySelector(".scrollCount-1");
      animateStrongCounter(counter1, 95, 30);

      // Counter 2
      const counter2 = document.querySelector(".scrollCount-2");
      animateStrongCounter(counter2, 89, 28);

      // Counter 3
      const counter3 = document.querySelector(".scrollCount-3");
      animateStrongCounter(counter3, 92, 29);
    }
  });
</script>

    

</body>
<script src="scroll-animation.js"></script>
</html>