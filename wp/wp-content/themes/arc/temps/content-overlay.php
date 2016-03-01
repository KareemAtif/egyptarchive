<?php
/**
* @package arc
* @since 2.0
* @name Single Page overlay Content
**/
 ?>
<div class="col6 centered">
  <article class="text-center">
    <div class="header">
      <img src="<?php echo esc_url(get_theme_mod('arc_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
    </div>
    <div class="body">
      <?php the_content(); ?>
    </div>
   <?php if(is_page('about')){ ?>
     <div class="footer">
        <?php get_template_part('temps/content', 'credit'); ?>
     </div>
   <?php } ?>
  </article>
</div>
