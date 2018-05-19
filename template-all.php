<?php
/**
 * Template Name: All
 */
get_header(); 
if( !empty( $_GET["type"] ) )
{
   $type = $_GET["type"];
}


if( $_GET["do_action"] == "true" && $_GET["post_action"] == "remove" )
{
        wp_delete_post($_GET["post_id"], false);
}
if( $_GET["do_action"] == "true" && $_GET["post_action"] == "accepted" )
{
        wp_publish_post($_GET["post_id"]);
}


?>






<?php 

?>



        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
       
                <!-- Page header -->
                <div class="container px-xl-0">
                        <h1 class="text-uppercase et-section-title"><?php echo get_the_title(); echo ' ';  if(!empty($_GET["type"])){echo $_GET["type"];}; ?></h1>
                </div>

                 <!-- ####### Content ####### -->
                <div class="container px-xl-0">          
                        <div class="row">


                <?php 
                

                $actual_link = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
                    define(BACK_PAGE_ALL, "http://127.0.0.1/www/kompromix/et_back/?page_id=94");
                    $actual_link = BACK_PAGE_ALL;
                    ?>
                        <div class="col-md-12">
                            <ul class="nav text-uppercase et-categories-menu">
                                <li class="nav-item">
                                    <a class="nav-link <?php if($type=="mem"){echo 'et-menu-active';}; ?>" href="<?php echo $actual_link; ?>&type=mem">Memy</a>       
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($type=="news"){echo 'et-menu-active';}; ?>" href="<?php echo $actual_link; ?>&type=news">Newsy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($type=="video"){echo 'et-menu-active';}; ?>" href="<?php echo $actual_link; ?>&type=video">Video</a>
                                </li> 
                            </ul>
                        </div>
                    <?php
                    
                if( !empty( $_GET["type"] ) )
                {
                   $posts = et_get_last_posts( $_GET["type"], -1 );
                   show_posts( $posts, '<div class="col-md-3">', '</div>', 'edit' );
                }
                
                ?>


                 <!-- Vertical ad -->
                <img class="mx-auto et-ad-vertical" src="img/728x90.png" alt="">
                
                        </div>
                </div>
                <!-- ####### End of Content ####### -->



        <?php endwhile; else: ?>
        <p>Przepraszamy, nie ma postów spełniających podane kryteria.</p>
        <?php endif; ?>


<?php get_footer(); ?>