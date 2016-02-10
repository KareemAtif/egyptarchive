<?php
/**
 *  @package arc
 *  @subpackage custom-taxonomy
 *  @since 2.0
 *  @name custom post type
*/
// Register Category for Document
function register_document_category() {
	$labels = array(
		"name" => "Document Categories",
		"label" => "Document Categories",
		);
	$args = array(
		"labels" => $labels,
		"hierarchical" => false,
		"label" => "Document Categories",
		"show_ui" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'document_category', 'with_front' => true ),
		"show_admin_column" => true,
	);
	register_taxonomy( "document_category", array( "document" ), $args );
}
add_action( 'init', 'register_document_category' );
