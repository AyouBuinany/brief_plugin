<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://wordpress.org/plugins/you_code/
 * @since      1.0.0
 *
 * @package    You_code
 * @subpackage You_code/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    You_code
 * @subpackage You_code/includes
 * @author     you code Mullenweg <ayoub.elbouinany99@gmail.com>
 */
 
class you_code_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public function activate() {

		global $wpdb;

		if($wpdb->get_var("SHOW tables like '".$this->wp_plugin_data()."'") != $this->wp_plugin_data()){
			$table_query = "CREATE TABLE `".$this->wp_plugin_data()."` (
				`Id` int(11) NOT NULL AUTO_INCREMENT,
				`name` varchar(50) NOT NULL,
				`Message` varchar(50) NOT NULL,
				`ville` varchar(50) NOT NULL,
				PRIMARY KEY (`Id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";

			require_once (ABSPATH.'wp-admin/includes/upgrade.php');
			dbDelta($table_query);
	    }
	}

	public function wp_plugin_data()
	{
		global $wpdb;
		return $wpdb->prefix."you_code_table";
	}
}


