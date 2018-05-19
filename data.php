<?php 

require_once('inc/class_data.php');
require_once('config.php');
$data = new DATA;

    if( $_GET["data"] == 'true' )
    {
        $data = $_POST;
        $file = $_FILES['file'];

       // printuj( $data );
       // printuj( $file );
       // echo API_URL;

        $api_response = wp_remote_post( API_URL_POSTS, array(
            'headers' => array(
               'Authorization' => 'Basic ' . base64_encode( 'root:160645' )
           ),
           'body' => array(
                'title'   => 'My test',
               'status'  => 'draft', 
               'content' => 'lalala',
               'date' => '2015-05-05T10:00:00',
               'excerpt' => 'Read this awesome post',
               'password' => '12$45',
               'slug' => 'new-test-post' 
           )
       ) );
       $body = json_decode( $api_response->body );
        
       echo API_URL_POSTS;
        //printuj( $body ); 
        printuj( $api_response );
        
       if( wp_remote_retrieve_response_message( $api_response ) === 'Created' ) {
           "ss";
           echo 'The post ' . $body->title->rendered . ' has been created successfully';
       }




    } 


?>