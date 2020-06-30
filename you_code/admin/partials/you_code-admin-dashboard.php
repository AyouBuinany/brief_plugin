<?php

global $wpdb;
	$result= $wpdb->get_results("SELECT * FROM wp_you_code_table");


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
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>display plugin detail</title>
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
  
</body>
</html>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap col-md-8" style="margin: auto; margin-top:122px;">
  <h2 class="text-center">Affichage </h2><br>        
  <table class="table table-dark">
     
    <thead>
      <tr>
        <th> id </th>
        <th> name </th>
        <th> Message</th>
        <th> ville</th>

      </tr>
    </thead>
    <tbody>
    <?php
    foreach ($result as $row) { ?>
      <tr>
        <td><?php echo $row->Id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->Message; ?></td>
        <td><?php echo $row->ville; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
