<?php 
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);	
	unset($_SESSION['sess_user_id']);
	unset($_SESSION['sess_role']);
    unset($_SESSION['sess_email']);
	unset($_SESSION['sess_fullnames']);	
	//session_unset();
	//session_destroy();
	//$_SESSION['success']=" <b> Goodbye!!!! </b>";
	session_write_close();
	
	header("Location: index.php");




?>