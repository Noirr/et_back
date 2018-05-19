<?php
/**
 * Template Name: Single
 */
 acf_form_head(); 
get_header(); ?>




<?php 
$type = get_post_type( $_GET["post_id"] );
$current_url = BACK_PAGE_ALL."&post_action=".$_GET["post_action"]."&type=".$type."&post_id=".$_GET["post_id"];
if($_GET["post_action"] == "remove")
{
    ?>

        <div class="alert">
                <p>Czy napewno chcesz usunąć post <?php echo $_GET["post_id"]." - ".get_the_title($_GET["post_id"]); ?> ? </p>
                <a class="btn text-uppercase et-more-btn et-more-news-btn" href="<?php echo $current_url; ?>&do_action=true" role="button">TAK</a>
                <a class="btn text-uppercase et-more-btn et-more-news-btn" href="<?php echo get_permalink($_GET["post_id"]); ?>" role="button">NIE</a>
        </div>

    <?php
}
if($_GET["post_action"] == "accepted")
{
    ?>

        <div class="alert">
                <p>Czy napewno chcesz zaakceptować i wyświetlić na głównej stronie post <?php echo $_GET["post_id"]." - ".get_the_title($_GET["post_id"]); ?> ? </p>
                <a class="btn text-uppercase et-more-btn et-more-news-btn" href="<?php echo $current_url; ?>&do_action=true" role="button">TAK</a>
                <a class="btn text-uppercase et-more-btn et-more-news-btn" href="<?php echo get_permalink($_GET["post_id"]); ?>" role="button">NIE</a>
        </div>

    <?php
}

?>


<?php get_footer(); ?>