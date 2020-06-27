<?php

/**
 * Fired during plugin activation
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
class You_code_Activator {
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
	public function activate() {
require_once(ABSPATH . "wp-admin/includes/upgrade.php");
global $wpdb;
if(count($wpdb->get_var("Show table like '". $this->tables->youcodetable()."'")) == 0){

	$sqlQuery='CREATE TABLE ' .$this->tables->youcodetable().'(
 			`id` int(11) NOT NULL AUTO_INCREMENT,
 			`name` varchar(50) NOT NULL,
			`email` varchar(50) NOT NULL,
			 `message` varchar(230) NOT NULL,
 			 `ville` varchar(30) NOT NULL,
 			PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4';
		dbDelta($sqlQuery);
		}
}


	public  function youcodetable() {
		global $wpdb;
		return $wpdb->prefix ."you_code_table";
}
}


