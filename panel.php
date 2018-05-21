<?php
/**
 * Template Name: Panel2
 */?>
<?php get_header(); 
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


 if ( have_posts() ) : while ( have_posts() ) : the_post(); 

 $actual_link = 'http://'.$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI];
$panel_link = BACK_PAGE_ALL;
$action_url = BACK_PAGE_SINGLE."&post_id=".$post->ID;

?>

    <div class="wrapper" id="panel">
        <div class="sidebar" data-image="../assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo"><a href="<?php echo $actual_link; ?>" class="simple-text">ET Portal</a></div>
                <ul class="nav">
                    <li><a class="nav-link" href="<?php echo $panel_link.'&type=mem'; ?>">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Lista memów</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo $panel_link.'&type=video'; ?>">
                        <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Lista video</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $panel_link.'&type=news'; ?>">
                            <i class="nc-icon nc-bullet-list-67"></i>
                            <p>Lista Newsów</p>
                        </a>
                    </li>
                    <li>
                        <a></a>
                    </li>
                    <li><a class="nav-link" href="<?php echo $panel_link.'&panel=new&type=mem'; ?>">
                            <i class="nc-icon nc-simple-add"></i>
                            <p>Dodaj mema</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo $panel_link.'&panel=new&type=video'; ?>">
                        <i class="nc-icon nc-simple-add"></i>
                            <p>Dodaj video</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $panel_link.'&panel=new&type=news'; ?>">
                            <i class="nc-icon nc-simple-add"></i>
                            <p>Dodaj news</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> <?php echo get_the_title(); echo ' ';  if(!empty($_GET["type"])){echo $_GET["type"];}; ?> </a>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->


            <div class="content">
                <div class="container-fluid">

                    <?php
                        if( $_GET["panel"] == "new" )
                        {
                            require_once("inc/panel_content_new.php");
                        }
                        else if( $_GET["panel"] == "edit" ){
                            require_once("inc/panel_content_edit.php");
                        }
                        else if( $_GET["panel"] == "lista" ){
                            require_once("inc/panel_content_list.php");
                        }
                        else{
                            require_once("inc/panel_content_list.php");
                        }
                    ?>

                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <nav>
                        <p class="copyright text-center">
                            ©<script>document.write(new Date().getFullYear())</script> Kompromix
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
   


 <?php 
    endwhile; else: 
    echo '<p>Przepraszamy, nie ma postów spełniających podane kryteria.</p>';
    endif; 
 get_footer(); ?>