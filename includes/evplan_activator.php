<?php

global $wpdb;
        
        $table_name = $wpdb->get_blog_prefix() . 'eventplan';
        
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name)
		{
            
            $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
            
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            
            $sql = "CREATE TABLE {$table_name} (
            id_ev int(11) unsigned NOT NULL auto_increment,
            event_title varchar(255) NOT NULL default '',
			event_post_content longtext NULL DEFAULT NULL,
			start_date date NULL DEFAULT NULL,
		    end_date date NULL DEFAULT NULL,
			ev_url   VARCHAR(255) NOT NULL default '',
            PRIMARY KEY  (id_ev)
            ) {$charset_collate};";
           
            dbDelta($sql);
		}

		$table_names = $wpdb->get_blog_prefix() . 'newsplan';
        
        if ($wpdb->get_var("SHOW TABLES LIKE '$table_names'") != $table_names)
		{
            
            $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
            
            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            
            $sqls = "CREATE TABLE {$table_names} (
            id_nw int(11) unsigned NOT NULL auto_increment,
			news_title varchar(255) NOT NULL default '',
			news_post_content longtext NULL DEFAULT NULL,
			id_event int(11) unsigned NOT NULL,
            PRIMARY KEY  (id_nw)	
            ) {$charset_collate};";
           
            dbDelta($sqls);
		}


