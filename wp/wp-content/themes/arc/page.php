<?php
/**
* @package arc
* @since 2.0
* @name Page Template
**/
 ?>
<?php get_header(); ?>
<?php while (have_posts()): the_post();
        if (is_page(array('about', 'contribute'))){
            get_template_part('temps/content', 'overlay');
        }else{
            get_template_part('temps/content', 'page');
        }
      endwhile; ?>
<?php get_footer(); ?>
