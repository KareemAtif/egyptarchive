<?php
/**
 *  @package arc
 *  @subpackage custom-posttype
 *  @since 2.0
 *  @name custom post type
*/

// Register Document CPT
function register_document() {
	$labels = array(
		"name" => "Documents",
		"singular_name" => "Document",
		"menu_name" => "Documents Archive",
		"all_items" => "All Documents",
		"add_new" => "Add New",
		"add_new_item" => "Add New Document",
		"edit" => "Edit",
		"edit_item" => "Edit Document",
		"new_item" => "New Document",
		"view" => "View",
		"view_item" => "View Document",
		"search_items" => "Search Documents",
		"not_found" => "No Documents found",
		"not_found_in_trash" => "No Documents found in Trash",
		"parent" => "Parent Document",
		);
	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "document", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-media-document",
		"supports" => array( "title", "editor", "revisions", "thumbnail", "author" ),
		"taxonomies" => array( "document_category" ),
	);
	register_post_type( "document", $args );
}
add_action( 'init', 'register_document' );
