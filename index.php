<?php get_header(); ?>


<main>
<div class="container">
<div class="wp_page_content">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
        <?php endwhile; else: ?>
        <p>Przepraszamy, nie ma postów spełniających podane kryteria.</p>
        <?php endif; ?>


 <?php
                  $args = array(
                    'echo'           => true,
                    'remember'       => false,
                    'redirect'       => $blg . '/panel',
                    'form_id'        => 'loginform',
                    'id_username'    => 'user_login',
                    'id_password'    => 'user_pass',
                    'id_remember'    => 'rememberme',
                    'id_submit'      => 'wp-submit',
                    'label_username' => __( 'Username' ),
                    'label_password' => __( 'Password' ),
                    'label_remember' => __( 'Remember Me' ),
                    'label_log_in'   => __( 'Log In' ),
                    'value_username' => '',
                    'value_remember' => true
                  );
                  wp_login_form( $args );

                  // check if logged in and admin
function check_panel_login() {
        if ( !is_user_logged_in() || !current_user_can('administrator') ) {
          wp_redirect( get_bloginfo( 'url' ) . 'URL_LOGOWANIA' );
          exit;
        }
      }
                ?>
        LOGOWANIE 
</div>
</div>
</main>


<?php get_footer(); ?>