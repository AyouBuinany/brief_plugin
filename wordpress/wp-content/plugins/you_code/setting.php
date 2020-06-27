<?php 
/**
* The plugin bootstrap file
*
* This file is read by WordPress to generate the plugin information in the plugin
* admin area. This file also includes all of the dependencies used by the plugin,
* registers the activation and deactivation functions, and defines a function
* that starts the plugin.
*
* @link              http://wordpress.org/plugins/you_code/
* @since             1.0.0
* @package           You_code
*
* @wordpress-plugin
* Plugin Name:       you code
* Plugin URI:        http://wordpress.org/plugins/you_code/
* Description:       This is my plugin.
* Version:           1.0.0
* Author:            you code Mullenweg
* Author URI:        http://wordpress.org/plugins/you_code/
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
* Text Domain:       you_code
* Domain Path:       /languages
*/
?>
<div class="container">

<?php settings_errors(); ?>  
		        <form method="POST" action="">
		        <div id="icon-themes" class="icon32"></div>  
		        <h2>YouCode Settings</h2>  
				<p><label for="name"> Name</label></p>
				<p><input name="name" type="text" id="blogname"  class="regular-text" placeholder="Name" /></p>
				<p><label for="email"> Email</label></p>
				<p><input name="email" type="email" id="blogname"  class="regular-text" placeholder="Email" /></p>
				<p><label for="Message"> Message</label></p>
                <p><textarea name="message"   id="blogdescription" aria-describedby="tagline-description" class="regular-text" > </textarea></p>
				<p><label for="ville"> Ville</label></p>
				<p><select name="ville" class="regular-text" placeholder="Ville"> 
				<option value="Safi"> Safi
				</option>
				<option value="Casa">Casa
				</option>
				<option value="Rabat">Rabat
				</option>
				</select>
				</p>
		         <!--NEED THE settings_errors below so that the errors/success messages are shown after submission - wasn't working once we started using add_menu_page and stopped using add_options_page so needed this-->
		          <p><button type="submit" name="save">Register</button></p>
		        </form>
</div>
<?php
//INSERT IN DATABASE
function insert_db(){
global $wpdb;
	$name=htmlspecialchars($_POST['name']);
	$email=htmlspecialchars($_POST['email']);
	$ville=htmlspecialchars($_POST['ville']);
	$message=htmlspecialchars($_POST['message']);
		$tableName= $wpdb->prefix."you_code_table";
		if(isset($_POST["save"])){
			echo "<h2 style='color:white;background-color:green;padding:10px;margin:auto; text-align:center;'>Your welcome <b> $name" . " </b></h2>";
		$wpdb->insert($tableName, array('name' => $name,
			'email'=>$email,
			'message'=>$message
			,'ville'=>$ville),
			 array('%s',
			 '%s',
			 '%s',
			 '%s')
);
}
}
?>
