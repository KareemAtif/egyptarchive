<?php
/**
* @package arc
* @since 2.0
* @name Search Form with Advanced Search for Documents
**/

if (!is_post_type_archive('document')): ?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <i class="fa fa-search"></i>
	<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'ادخل كلمات البحث', 'placeholder', 'arc' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
</form>
<?php else:
$advanced_search = new WP_Advanced_Search('advanced-search'); ?>
<aside id="advanced-search" class="sidebar" role="complementary">
  <?php $advanced_search->the_form(); ?>
</aside>
<?php endif; ?>
