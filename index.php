<?php get_header(); ?>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p>Przepraszamy, nie ma postów spełniających podane kryteria.</p>
        <?php endif; ?>

LASDLASKDKASKDLAS
<?php echo get_bloginfo('template_url');
?>

<?php get_footer(); ?>