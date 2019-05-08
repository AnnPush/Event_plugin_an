<?php
// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
global $wpdb;
 $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}eventplan");
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}newsplan");

