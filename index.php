<?php

	session_start();
	include ('./lib/lib.php');
	include('./env.php');

	if(!isset($_SESSION[APP_NAME])){
		$_SESSION[APP_NAME] = array();
	}

	var_dump($_SESSION);


	// include('models/dbAbstract.php');
	// include 'models/userModel.php';
	/*include 'models/bookModel.php';*/
	// include('lib/enginetpl.php');

	// $_SECTION = explode("/", $_SERVER["REQUEST_URI"]);

	// unset($_SECTION[0]);

	// $_SECTION = array_values($_SECTION);
	$_ROUTE = explode("/",$_GET['section']);

	// var_dump($_SECTION);

	//router
	if($_ROUTE[0]!=""){
		$section = $_ROUTE[0];

	if(!file_exists("controllers/{$section}Controller.php")){
			$section = 'error404';
		}
	}else{
		$section = 'landing';
		
	}

	// Sesion iniciada
	if(isset($_SESSION[APP_NAME])){

		if($section=='landing' || $section=='login' || $section=='register'){
			$section='panel';
		}

	}else{ // Sesion no iniciada
		if($section=='panel' || $section=='logout'){
			$section='landing';
		}
	}
	
	// include "controllers/{$section}Controller.php";

 ?>