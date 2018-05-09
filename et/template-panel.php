<?php
/**
 * Template Name: Panel
 */
get_header(); ?>



        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
       
                <!-- Page header -->
                <div class="container px-xl-0">
                        <h1 class="text-uppercase et-section-title"><?php echo get_the_title(); ?></h1>
                </div>

                 <!-- ####### Content ####### -->
                <div class="container px-xl-0">          
                        <div class="row">

                <?php require_once("inc/sidebar-left.php"); ?>

                <?php require_once("inc/content-panel.php"); ?>

                <?php require_once("inc/sidebar-right.php"); ?>

                 <!-- Vertical ad -->
                <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">
                
                        </div>
                </div>
                <!-- ####### End of Content ####### -->



        <?php endwhile; else: ?>
        <p>Przepraszamy, nie ma postów spełniających podane kryteria.</p>
        <?php endif; ?>


<?php get_footer(); ?>