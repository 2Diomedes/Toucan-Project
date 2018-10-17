<?php
/*
Plugin Name: Simalti Registration
Description: This plugin belong to save emails sent by button "notify me"
Version: 0.1
Author: Simalti
*/

function register_install () {
    global $wpdb;
    $table_name = $wpdb->prefix . "customers";
    $charset_collate = $wpdb->get_charset_collate();
    
    $sql = "CREATE TABLE `toucan-bdd`.`wp_customers` ( 
        `id` INT NOT NULL AUTO_INCREMENT , 
        `email` VARCHAR(50) NOT NULL UNIQUE, 
        `username` VARCHAR(50) NOT NULL UNIQUE, 
        PRIMARY KEY (`id`)) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'register_install' );
register_activation_hook( __FILE__, 'register_install_data' );

if (isset($_POST['username']) AND isset($_POST['email'])){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO `wp_customers` (`id`, `email`, `username`) 
    VALUES (NULL, '".$email."', '".$username."')";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );
}

add_action('admin_menu','test_plugin_setup_menu');

function test_plugin_setup_menu(){
    add_menu_page('Simalti Registration Page', 'Simalti Plugin', 'manage_options', 'simalti-plugin', 'display' );
}

function display(){
    global $wpdb;
    $resultats = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}customers", OBJECT);
    
    foreach ($resultats as $customs) {
        ?> 
        <p><?php echo $customs->username; echo $customs->email; ?></p>
        <?php   
    }
}