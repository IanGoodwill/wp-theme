<?php

get_header();

while( have_posts() ) :
    the_post();
    ?>

<h1><?php the_title(); ?> </h1>

<?php endwhile; ?>

<?php if(have_posts()): $postCount=0; while(have_posts()): $postCount++; the_post(); ?>
<?php if($postCount==1): ?>
    <article class="first-post">
         <em>
            Posted by <?php the_author(); ?> on <?php the_date(); ?>
        </em>
        <div class="post-body">
            <?php the_content(); ?>
        </div>
    </article>
    <?php else: ?>
    <article>
    <em>
            Posted by <?php the_author(); ?> on <?php the_date(); ?>
        </em>
        <div class="post-body">
            <?php the_content(); ?>
        </div>
    </article>
<?php  endif; ?>
<?php endwhile;
posts_nav_link(); 
endif; ?>

    <?php
get_footer();