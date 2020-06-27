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
class You_code_Deactivator {
private $tables;
public function __construct($table){
	$this->tables=$table;
}
	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
		public function deactivate() {
			global $wpdb;
			$wpdb->query("DROP TABLE IF EXISTS " . $this->tables->youcodetable());
		}
		public  function youcodetable() {
			global $wpdb;
			return $wpdb->prefix ."you_code_table";
	}

}
