<?php 
	$db_server="localhost";
	$db_user="root";
	$db_password="";
	$db_name="bbitts";
	try{
	$db = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8", $db_user, $db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	catch(PDOException $ex) {
    echo "An Error occured!".$ex->getMessage(); 
	}
	
	try {
	 $sql ="CREATE TABLE IF NOT EXISTS account_users (
	 user_id int(11) NOT NULL AUTO_INCREMENT,
	 name varchar(255),
	 phone varchar(255),
	 email varchar(255),
	 password varchar(255),
	 salt varchar(255),
	 role varchar(255),
	 logintime varchar(255),
	 PRIMARY KEY (user_id)
	 );";
	 
	 $stmt = $db->prepare($sql);
		$stmt->execute();
	 
	 } catch(PDOException $ex) {
    echo "An Error occured!".$ex->getMessage();
}
	 
	/* 
	 if(exec($sql) !== false)
	 	return true;
	 return false;*/
	
	
	
?>