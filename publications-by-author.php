<?php

/*
  Template Name: Publications by author
*/

get_header(); ?>
<h1><?php echo get_query_var('tag') ?>’s Publications</h1>
<?php

$author_id = get_user_by('login', get_query_var('tag'))->id;

$args = array(
    'author'        =>  $author_id,
    'orderby'       =>  'post_date',
    'order'         =>  'ASC',
    'posts_per_page' => 5
);

$sample_array = get_posts($args);
?>
<ul id="publications">
    <?php
    foreach ($sample_array as $post) { ?>
        <li>
            <a href="<?php echo $post->guid ?>"><?php echo $post->post_title ?></a>
            <p><?php echo $post->post_content ?></p>
        </li>
    <?php } ?>
</ul>
<?php get_footer(); ?>