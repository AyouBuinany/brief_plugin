

<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://medmestery.xzy
 * @since      1.0.0
 *
 * @package    My_plugin
 * @subpackage My_plugin/admin/partials
 */
//INSERT IN DATABASE
global $wpdb;
  $name=htmlspecialchars($_POST['name']);
  $message=htmlspecialchars($_POST['message']);
	$ville=htmlspecialchars($_POST['ville']);
		$tableName= $wpdb->prefix."you_code_table";
		if(isset($_POST["save"])){
			echo "<h2 style='color:white;background-color:green;padding:10px;margin:auto; text-align:center;'>Your welcome <b> $name" . " </b></h2>";
		$wpdb->insert($tableName, array('name' => $name,
			'Message'=>$message
			,'ville'=>$ville)
);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>setting</title>
</head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<body>
<div class="container">

<?php settings_errors(); ?>  
		        <form method="POST" action="">
		        <div id="icon-themes" class="icon32"></div>  
		        <h2>YouCode Settings</h2>  
				<p><label for="name"> Name</label></p>
				<p><input name="name" type="text" id="blogname"  class="regular-text" placeholder="Name" /></p>
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
		          <p><button type="submit" class="btn btn-primary" name="save">Register</button></p>
		        </form>
</div>