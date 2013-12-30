<?php

 include_once('config.php');
 $view 		= (array_key_exists('view', $_GET)) 	? $_GET['view'] 		: "main.php";
 $type 		= (array_key_exists('type', $_GET)) 	? $_GET['type'] 		: "cake";
 $video 	= (array_key_exists('video', $_GET)) 	? $_GET['video'] 		: false;
 $autoplay 	= (array_key_exists('autoplay', $_GET)) ? $_GET['autoplay'] 	: 'false';
 $debug 	= (array_key_exists('debug', $_GET)) 	? $_GET['debug'] 		: false;

if($debug){
	ini_set('display_errors',1);
	error_reporting(E_ALL);	
}

 function CurrentUrl(){
 	return  "http://". $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 }

 function PrettyPrintCurrency($input){
 	return number_format($input, 0,',','.');
 }

/* Inclue the database */
include_once DIR_BASE . 'inc/class.db.php';
$db = new db;

/* Include MemCache */
include_once DIR_BASE . 'inc/class.memcache.php';
$memcache = new Mem;

$view = DIR_BASE . 'models/' . $view;
include_once $view;

?>