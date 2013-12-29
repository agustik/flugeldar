<?php

ini_set('display_errors',1);

error_reporting(E_ALL);


 include_once('config.php');
 $view = (array_key_exists('view', $_GET)) ? $_GET['view'] : "main.php";
 $type = (array_key_exists('type', $_GET)) ? $_GET['type'] : "cake";


/* Inclue the database */
include_once DIR_BASE . 'inc/class.db.php';
$db = new db;

/* Include MemCache */
include_once DIR_BASE . 'inc/class.memcache.php';
$memcache = new Mem;

$view = DIR_BASE . 'models/' . $view;
include_once $view;

?>