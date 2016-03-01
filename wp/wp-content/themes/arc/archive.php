<?php
/**
* @package arc
* @since 2.0
* @name Archive Template
**/
get_header(); ?>
<div id="body "class="body">
  <?php if(have_posts()):
        if(is_post_type_archive('document')){ ?>
  <div class="header featured">
    <?php get_template_part('temps/content', 'feature'); ?>
  </div>
  <?php } ?>
  <div class="body">
    <div class="col8">
      <?php while(have_posts()): the_post();
            if (is_archive() || is_search()) {
              get_template_part('temps/content', get_post_format());
            }
      endwhile;

  endif; ?>
    </div>
    <div class="col4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
