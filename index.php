<?php
error_reporting(E_ALL); 
session_start();

header('Content-Type: text/html; charset=UTF-8');


$seite =  $_GET['seite'];
if(isset($seite)){
	$filename = "./_pages/".$seite.".php";
	if (file_exists($filename)) {
		require("./_pages/".$seite.".php");  
	} else {
		require("./_pages/error.php");
	}
} else {
	require("./_pages/index.php"); 
} 
?>