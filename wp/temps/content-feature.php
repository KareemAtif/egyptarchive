<?php
/**
* @package arc
* @since 2.0
* @name Content for Feature
**/
?>
<div class="header clearfix">
    <div class="title">
      <h2><?php _e('الوثائق الأحدث', 'arc'); ?></h2>
    </div>
    <div class="controls">
      <i class="fa fa-chevron-right" id="next"></i>
      <i class="fa fa-chevron-left" id="prev"></i>
    </div>
</div>
<?php if(have_posts()):?>
<div class="body">
  <?php query_posts('showposts=5');
      while(have_posts()): the_post();
        get_template_part('temps/content', get_post_format());
      endwhile; ?>
</div>
<?php endif; ?>
