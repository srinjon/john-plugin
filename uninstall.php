<?php 

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package johnPlugin
 */
if( ! defined( 'WP_UNISTALL_PLUGIN')){
    die;
}
// Clear Database stored data
// $books = get_posts( array( 'post_type'=> 'book', 'numberposts'=>-1 ) );
// foreach($books as $data ){
//     wp_delete_post( $book->ID, false );
// }
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'book'" );
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts)" );