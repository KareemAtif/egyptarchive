<?php
/**
* @package arc
* @since 2.0
* @name 404 page Template
**/
 ?>
<img src="<?php echo esc_url(get_theme_mod('arc_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
<h1 class="lines"><span><?php _e('404', 'arc'); ?></span></h1>
<h2><?php _e('عذراً لم يتم العثور على هذه الصفحة', 'arc'); ?></h2>
<p>
  <?php _e('العودة إلى', 'arc'); ?><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php _e('الصفحة الرئيسية', 'arc'); ?></a>
</p>
