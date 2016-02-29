<?php
/**
* @package arc
* @since 2.0
* @name 404 page Template
**/
get_header(); ?>
<div class="col6 centered clearfix">
  <article class="text-center">
    <div class="header">
      <img src="<?php echo esc_url(get_theme_mod('arc_logo')); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
    </div>
    <div class="body">
      <h1 class="lines"><span><?php _e('404', 'arc'); ?></span></h1>
      <h2><?php _e('عذراً لم يتم العثور على هذه الصفحة', 'arc'); ?></h2>
      <p>
        <?php _e('العودة إلى ', 'arc'); ?><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php _e('الصفحة الرئيسية', 'arc'); ?></a>
      </p>
    </div>
  </article>
</div>
<?php get_footer(); ?>
