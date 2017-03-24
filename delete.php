<?php 
	//session_id('mySessionID');
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);	
    //ob_start();//object start
	
	include "connect.php";
	$email = $_GET['email'];
	
	try {	
		$sql = "DELETE FROM users WHERE email=$email";
		$db->exec($sql);
		
		$_SESSION['success']="<b>User Deleted from User List</b>";
		session_write_close();
		header('Location: viewusers.php');
		
} catch(PDOException $ex) {
    echo "An Error occured!".$ex->getMessage();
}
$conn = null;

?>