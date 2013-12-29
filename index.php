<?php
	
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

 include_once('config.php');
 $view = (array_key_exists('page', $_GET)) ? $_GET['page'] : "main.php";
 include_once DIR_BASE . 'models/' . $view;
?>