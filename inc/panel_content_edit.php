<div class="row">
<div class="col-md-12">


<?php 

if( $_GET["type"] = "mem" )
{
    ?>


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
}




$type = get_post_type($_GET["post_id"]);


if( $type == "news" )
{
    acf_register_form(array(
        'id'		=> 'new-item',
        'post_id'	=> $_GET["post_id"],
        'post_title'=> true,
        'post_content'=> true,
        'uploader' => 'basic',
    ));
    acf_form('new-item'); 
}else{
    acf_register_form(array(
        'id'		=> 'new-item',
        'post_id'	=> $_GET["post_id"],
        'post_title'=> true,
        'uploader' => 'basic',
    ));
    acf_form('new-item'); 
}
    
?>



</div>
</div>