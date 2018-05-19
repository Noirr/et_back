<?php
acf_form_head(); 
get_header(); 
?>


<?php 

global $wp;  
$current_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$action_url = BACK_PAGE_SINGLE."&post_id=".$post->ID;



?>
        <br><br>
            <!-- ####### Panel ####### -->
            <div class="col-md-6">
               
                <!-- Panel menu -->
                <ul class="nav text-uppercase et-categories-menu">
                       
                    <li class="nav-item">
                        <a class="nav-link" 
                        href="<?php echo $action_url."&post_action=remove"; ?>"
                        >Usuń wpis</a>
                    </li>
                    <?php
                     $status = get_post_status( $post->ID );
                        if($status == "draft")
                        {
                            ?>
  <li class="nav-item">
                        <a class="nav-link" 
                        href="<?php echo $action_url."&post_action=accepted"; ?>"
                        >Zaakceptuj wpis wpis</a>
                    </li> 
                            <?php
                        }
                    
                    ?>
                  

                </ul>
                
             </div>



    <?php 
        /*
        tytul
        content (tylko news )
        image
        tagi 
        kategoria (jesli to news)
        data
        */
    ?>



	<div id="primary">
		<div id="content" role="main">

            <?php 
            acf_register_form(array(
                'id'		=> 'edit-single',
                'post_id'	=> $post->ID,
                'post_title'=> true,
                'uploader' => 'wp', 
            ));
            acf_form('edit-single'); 
            ?>


		</div><!-- #content -->
	</div><!-- #primary -->



        




<?php get_footer(); ?>