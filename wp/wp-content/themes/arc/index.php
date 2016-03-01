<?php
/**
* @package arc
* @since 2.0
* @name Main Index Page
**/

get_header();
 while (have_posts()): the_post();
  get_template_part('temps/content', get_post_format());
 endwhile; ?>

 <?php get_footer(); ?>
