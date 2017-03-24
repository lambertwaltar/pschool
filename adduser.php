<?php 
	//session_id('mySessionID');
	session_start();
	error_reporting(E_ALL ^ E_NOTICE);
	error_reporting(E_STRICT);	
    //ob_start();//object start
	
	include "connect.php";
	try {
		if(isset($_FILES['sfile'])){
			$class = $_POST['class'];
			$sfile = $_FILES['sfile'];
			$description = $_POST['description'];
			$date = date('m/d/Y h:i:s', time());
			
			$path = "/uploads/" . basename($_FILES['sfile']['name']);
			
			$exts = array('xlsx', 'xls');
			$ext1 = explode('.', $_FILES['sfile']['name']);
			$ext2 = end($ext1);
			$ext = strtolower($ext2);
			
			if(in_array($ext,$exts)){
				//upload
				print "Uploading files . . .";
				if(move_uploaded_file($_FILES['sfile']['tmp_name'], "uploads/{$_FILES['sfile']['name']}")){
					echo "the file has been uploaded";
					
					$data = array('path' => $path , 'date' => $date, 'description' => $description);	
					$query="INSERT INTO $class (path, date, description) VALUES (:path, :date, :description)";
					
					$stmt = $db->prepare($query);
					$stmt->execute($data);
					$_SESSION['success']="<b>New Marksheet Uploaded</b>";
					session_write_close();
					header('Location: students.php');
				
				
				
			}
			else{
				
				//show message
				echo "Wrong file type, please upload an excel file";
				}
				
			}
			
			else{
			$_SESSION['error']=" <b>Please fill in the form </b>";
			session_write_close();
			header("Location: students.php");
			
			}
		}
		/*$role = $role;
		$password =$password;*/
		/*$data = array('email' => $email , 'fullnames' => $fullnames, 'password' => $hash, 'salt' => $salt, 'role' => $role);	
		$query="INSERT INTO users (email, fullnames, password, salt, role) VALUES (:email, :fullnames, :password, :salt, :role)";
		
		$stmt = $db->prepare($query);
		$stmt->execute($data);
		$_SESSION['success']="<b>New User successfully Added</b>";
		session_write_close();
		header('Location: user.php');
		*/
} catch(PDOException $ex) {
    echo "An Error occured!".$ex->getMessage();
}
$conn = null;
	/*//die($email);
	$query= "INSERT INTO admin 	VALUES('null','$fullnames','$email','$hash', '$salt', '$role')"; 
	//$query = $db->exec("INSERT INTO admin email='$email', password='$hash', role='$role', salt='$salt'");
			//die("thats how far i went 3");
	if($mysql_run=mysql_query($query))
		{
		//die("thats how far i went 2");
		$to = $email;
		$subject = "ICMS Account";
		$txt = "Your ICMS account has been Created.".PHP_EOL." Please use your email ".$email." and Your password is ".$password. PHP_EOL ."log into your account fcbmuganda.org/icms";
		$headers = "From: www//fcbmuganda.org/icms" . "\r\n";
		mail($to,$subject,$txt,$headers);
		$_SESSION['success']="<b>Club Member Information Recorded</b>";
		session_write_close();
		header('Location: user.php');
								
				}
	
	else
		{	
		die(mysql_error());
		$_SESSION['error']="<b>Error saving user/b>";
		session_write_close();
		header('Location: user.php');
			
					
		}*/




?>