<?php

/*
* Register navigation menu.
*/


register_nav_menus( array(
    'main_menu' => 'Main Menu'

) );

/*
*   Include style sheets
*/

add_action( 'wp_head','wptheme_stylesheets');
function wptheme_stylesheets() {
    wp_enqueue_style( 
        'wptheme-styles',
        get_theme_file_uri( '/assets/css/main.css' )


     );
}

/*
* loop for the content
*/
/*
<?php if(have_posts()): while(have_posts()): the_post(); ?>
<article>
    <h3><?php the_title(); ?></h3>
    <em>
        Posted by <?php the_author(); ?> on <?php the_date(); ?>
    </em>
    <div class="post-body">
        <?php the_content(); ?>
    </div>
    </article>
<?php endwhile; endif; ?>
*/
