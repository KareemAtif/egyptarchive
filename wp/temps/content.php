<?php
/**
* @package arc
* @since 2.0
* @name Content for Feature
**/
?>
<article>
  <a href="<?php the_permalink(); ?>">
    <h5><?php the_title(); ?></h5>
    <?php the_field('place_of_issue'); ?>
  </a>
</article>
