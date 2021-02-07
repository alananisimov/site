<?php 
	require 'http://localhost/forum/wordpress/wp-content/themes/twentytwenty/db.php';
	unset($_SESSION['logged_user']);
	header('Location: /authorization_php');
?>
