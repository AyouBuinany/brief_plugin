<?php

/**
 * Fired during plugin  des tables section
 *
 * @link       http://wordpress.org/plugins/you_code/
 * @since      1.0.0
 *
 * @package    You_code
 * @subpackage You_code/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    You_code
 * @subpackage You_code/includes
 * @author     you code Mullenweg <ayoub.elbouinany99@gmail.com>
 */
class You_code_Tables {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public  function youcodetable() {
		global $wpdb;
		return $wpdb->prefix ."you_code_table";
}
}


