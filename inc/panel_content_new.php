            <div class="row">
            <div class="col-md-12">




 

<?php 
    acf_register_form(array(
        'id'		=> 'new-item',
        'post_id'	=> 'new_post',
        'new_post'	=> array(
            'post_type'		=> $_GET["type"],
            'post_status'	=> 'publish'
        ),
        'post_title'=> true,
        'uploader' => 'basic',
    ));
    acf_form('new-item'); 
?>








            </div>
            </div>