<?php

ini_set('display_errors',1);

error_reporting(E_ALL);


 include_once('config.php');
 $view = (array_key_exists('page', $_GET)) ? $_GET['page'] : "main.php";
 $type = (array_key_exists('type', $_GET)) ? $_GET['type'] : "cake";

 /*
	Do some cleaning.
 */
 //$view = str_replace($view, '#', "");

 // include_once DIR_BASE . 'inc/class.db.php';
 // $db = new db;
 include_once DIR_BASE . 'models/' . $view;

?>