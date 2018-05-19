<?php get_header(); ?>


<main>
<div class="container">
<div class="wp_page_content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p>Przepraszamy, nie ma postów spełniających podane kryteria.</p>
        <?php endif; ?>
</div>
</div>
</main>


<?php get_footer(); ?>