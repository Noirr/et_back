<?php
acf_form_head(); 
get_header(); 
?>


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
                'post_content' => true,
                'uploader' => 'wp', 
            ));
            acf_form('edit-single'); 
            ?>


		</div><!-- #content -->
	</div><!-- #primary -->



        




<?php get_footer(); ?>