<?php 

    function printuj( $txt )
    {
        echo '<br><div><pre>';
        print_r($txt);
        echo '</pre></div><br>';
    }

    function et_get_last_posts( $type, $n = 1 )
    {
        $args = array(
            'post_type'      => $type,
            'order'          => 'ASC',
            'orderby'        => 'menu_order',
            'posts_per_page' => $n,
        );
        $posts = new WP_Query( $args );
        return $posts->posts;
    }

    function et_section_title( $type )
    {
        if( $type == "memy" ){ return "NAJNOWSZE MEMY"; }
        if( $type == "video" ){ return "NAJNOWSZE VIDEO"; }
        if( $type == "news" ){ return "NEWSY Z OSTATNIEJ CHWILI"; }
    }

    function et_panel_last_posts( $type, $n )
    {
        $posts = et_get_last_posts( $type, $n );
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