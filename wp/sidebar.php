<?php
/**
* @package arc
* @since 2.0
* @name Sidebar Template
**/

if (is_active_sidebar('sidebar-right')): ?>
 <aside id="secondary" class="sidebar">
   <?php dynamic_sidebar('sidebar-right'); ?>
 </aside>
<?php elseif(is_post_type_archive('document')):
  get_search_form();
endif; ?>
