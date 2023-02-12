<?php

/*
  Template Name: Publications
*/

get_header(); ?>
<h1>PARCC’s Publications</h1>
<?php
// wp-query to get all published posts without pagination
$allPostsWPQuery = new WP_Query(array('post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => -1)); ?>

<?php if ($allPostsWPQuery->have_posts()) : ?>

    <ul id="publications">
        <?php while ($allPostsWPQuery->have_posts()) : $allPostsWPQuery->the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <p><?php the_content(); ?></p>
            </li>
        <?php endwhile; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p><?php _e('There no posts to display.'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>