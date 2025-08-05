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
    

</body>
<script src="scroll-animation.js"></script>
</html>