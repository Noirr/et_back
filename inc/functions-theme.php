<?php 

    $url_page_single = "http://127.0.0.1/www/kompromix/et_back/?page_id=92";

    function printuj( $txt )
    {
        echo '<br><div><pre>';
        print_r($txt);
        echo '</pre></div><br>';
    }

    function et_get_last_posts( $type, $n = 1, $publish = "publish" )
    {
        $args = array(
            'post_type'      => $type,
            'order'          => 'ASC',
            'orderby'        => 'menu_order',
            'posts_per_page' => $n,
            'post_status' => $publish,

        );
        $posts = new WP_Query( $args );
        return $posts->posts;
    }

    function et_section_title( $type )
    {
        if( $type == "mem" ){ return "NAJNOWSZE MEMY"; }
        if( $type == "video" ){ return "NAJNOWSZE VIDEO"; }
        if( $type == "news" ){ return "NEWSY Z OSTATNIEJ CHWILI"; }
    }
    function et_add_new_text( $type )
    {
        if( $type == "mem" ){ return "Dodaj mema"; }
        if( $type == "video" ){ return "Dodaj video"; }
        if( $type == "news" ){ return "Dodaj news"; }
    }

    function show_posts( $posts, $before = '', $after = '', $option = "show" ) //$option - show/edit
    {
        foreach( $posts as $post )
        {
            et_show_single_post($post,$before,$after,$option);
        }
    }
    function et_show_single_post( $post, $before = '', $after = '', $option = "show" )
    {
        $option = "show";
        $date = $post->post_date;
        global $url_page_single;
        $title = $post->post_title;
       // $img = get_the_post_thumbnail_url( $post->ID );
        $img = get_field( "image", $post->ID )['url'];
        if( empty($img) )
        {
            $img = get_the_post_thumbnail_url( $post->ID ); 
        }
        $link = get_permalink($post->ID);
        if($option == "show")
        {
            $link = $link;
        }else if( $option == "edit" )
        {
            $link = $url_page_single."&id=".$post->ID;
        }

        $subtype = '';

        echo $before;
        ?>
            <!-- Sidebar latest small card -->
            <div class="card bg-dark text-white et-card">
                <img class="card-img" src="<?php echo $img; ?>" alt="Zdjęcie">
                <div class="card-img-overlay">
                    <h3 class="card-title et-card-small-title"><?php echo $title; ?></h3>
                    <p class="card-text et-card-date">
                        10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                    </p>
                    <?php if($type == "video"){echo '<i class="far fa-play-circle et-card-video-icon"></i>';} ?>
                    <?php if($type == "news"){echo '<a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>';} ?>
                    <a class="et-card-link" href="<?php echo $link; ?>" ></a>
                </div>
            </div>
        <?php
        echo $after;

    }

    function et_panel_last_posts( $type, $n, $publish = "publish" )
    {
        $posts = et_get_last_posts( $type, $n, $publish );
        foreach( $posts as $post )
        {
            $date = $post->post_date;
            $title = $post->post_title;
            $img = get_the_post_thumbnail_url( $post->ID );

            $subtype = '';

            ?>
                <!-- Sidebar latest small card -->
                <div class="card bg-dark text-white et-card">
                    <img class="card-img" src="<?php echo $img; ?>" alt="Zdjęcie">
                    <div class="card-img-overlay">
                        <h3 class="card-title et-card-small-title"><?php echo $title; ?></h3>
                        <p class="card-text et-card-date">
                            10 stycznia 2018 <i class="fas fa-comment et-card-comments"></i><span class="et-card-comments-number">1</span>
                        </p>
                        <?php if($type == "video"){echo '<i class="far fa-play-circle et-card-video-icon"></i>';} ?>
                        <?php if($type == "news"){echo '<a class="card-link text-lowercase text-white et-card-category-news" href="#">Wywiady</a>';} ?>
                        <a class="et-card-link" href="#" ></a>
                    </div>
                </div>
            ';
            <?php
        }
        //printuj($posts);
    }


         
   


?>