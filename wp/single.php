<?php
/**
* @package arc
* @since 2.0
* @name Single Page Template
**/
 ?>
 <?php get_header();
       while(have_posts()): the_post();
        get_template_part('temps/content', 'single');
       endwhile;
 get_sidebar(); ?>
 <?php get_footer(); ?>
