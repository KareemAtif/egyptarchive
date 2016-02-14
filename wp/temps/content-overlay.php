<?php
/**
* @package arc
* @since 2.0
* @name Single Page overlay Content
**/
 ?>
 <img src="<?php echo esc_url(get_theme_mod('arc_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
 <?php the_content(); ?>
<?php if(is_page('about')){ ?>
 <?php get_template_part('temps/content', 'credit'); ?>
<?php } ?>
