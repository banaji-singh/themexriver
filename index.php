get_header();
?>

<div class="news-container">
    <h1><?php the_title(); ?></h1>

    <?php
    // Only Business category posts
    $news_query = new WP_Query(array(
        'category_name'  => 'business', // yahan slug use hoga (Business ka slug)
        'posts_per_page' => 5           // jitne posts dikhane hain
    ));

    if ($news_query->have_posts()) :
        while ($news_query->have_posts()) : $news_query->the_post(); ?>
            
            <div class="single-news">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="news-thumb">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>

                <p><?php the_excerpt(); ?></p>
            </div>

        <?php endwhile;
        wp_reset_postdata();
    else :
        echo "<p>No Business posts found.</p>";
    endif;
    ?>
</div>

<?php get_footer(); ?>