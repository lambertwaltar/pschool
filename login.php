<?php 
	//session_id('mySessionID');
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);	
    //ob_start();//object start
	
	require "connect.php";
	try{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email = $email;
	$date = date('m/d/Y h:i:s', time());
	
	
	$data = array('logintime' => $date);	
 	$query = "SELECT * FROM account_users WHERE email = ?;";
	$query1 = "UPDATE account_users SET logintime = :logintime WHERE email = '$email';";
	
	$params = array($_POST['email']);
	
 	$sql = $db->prepare($query);
	$sql->execute($params);
	$stmt = $db->prepare($query1);
	$stmt->execute($data);
	
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	$userData = $sql->fetch();
	
	/*if ($stmt->execute(array($_GET['name']))) {
	  while ($row = $stmt->fetch()) {
		print_r($row);
	  }
	}*/
	
	
    if($userData== 0) // User not found. So, redirect to login_form again.
    {
		
		$_SESSION['error']="<b>User not registered</b> ";
		session_write_close();
		header("Location: index.php");
		
    	
	
    }
     
    $hash = hash('sha256', $userData['salt'] . hash('sha256', $password) );
     
    if($hash != $userData['password']) // Incorrect password. So, redirect to login_form again.
    {	
		
		$_SESSION['error']="<b>Wrong password</b>";
		session_write_close();		
		header("Location: index.php");
		
	

 
    }else{ 
	
    
    $_SESSION['sess_user_id'] = $userData['user_id'];
    $_SESSION['sess_email'] = $userData['email'];
	$_SESSION['sess_role'] = $userData['role'];
	$_SESSION['sess_fullnames'] = $userData['name'];
	$_SESSION['success']="<b>Welcome ".$_SESSION['sess_fullnames']."</b>";
	session_write_close();
	//userprofile();
	//die($_SESSION['sess_user_id']);
	/*header('Location: home.php?action=userprofile');*/
	if($_SESSION['sess_role'] =="admin"){
	header('Location: viewusers.php');

	}
	/*else
		header('Location: viewstudents.php');*/
	
	
    }
	}
	catch(PDOException $ex) {
    echo "An Error occured!".$ex->getMessage(); 
	}
    ?>