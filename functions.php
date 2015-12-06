<?php

	if(isset($_POST['addEvent'])){
		if( $_POST['zipCode'] = '12601') { $_POST['zipCode'] = 1; }else{ $_POST['zipCode'] = rand(1,86); } 
		$eventTime = strtotime($_POST['year']."/".$_POST['month']."/".$_POST['day']." ". $_POST['hour'].":".$_POST['minute']." ".$POST['ampm']);
	   	$results = mysql_query("REPLACE INTO `lonelydadmeetup.com`.`events` (`id`, `event_name`, `event_category`, `event_num_dads`, `event_info`, `event_tags`, `event_time`, `loc_address`, `loc_city`, `loc_state`, `loc_zip`, `uid`) VALUES (NULL, '".$_POST['eventName']."', '".$_POST['eventType']."', '".$_POST['numberOfDads']."', '".$_POST['eventInfo']."', '".$_POST['tags']."', '".$eventTime."', '".$_POST['address']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['zipCode']."', '".$_SESSION['uid']."')");
	   	header('Location: index.php#MyEvents&message=Event%20Sucessfully%20Created');
	}
   if(isset($_POST['JoinEvent'])){
   	$results = mysql_query("REPLACE INTO `lonelydadmeetup.com`.`whosgoing` (`uid`, `id`) VALUES ('".$_SESSION['uid']."', '".$_POST['eventID']."');");
	   	header('Location: index.php#MyEvents&message=Event%20Sucessfully%20Created');
   }

   if(isset($_POST['DeleteAcc'])){
   	// Make the query
    //Execute the query
    	$results = mysql_query("DELETE FROM users WHERE uid= ".$_SESSION['uid'].";");
    	$_SESSION['authorized'] = false;
    	header('Location: index.php#login');
   }

if(!$_SESSION['authorized']){
   if(isset($_POST['Login'])){ // if login form submitted
	   if($_POST['login_user'] !== ""){
			header('Location: index.php#login&error=No+User+Given');
	   }

	   if($_POST['pass'] !== ""){
			header('Location: index.php#login&error=No+Pass');
	   }
	   $numRecords = mysql_result(mysql_query("SELECT COUNT(*) FROM `users` WHERE `username` = '".$_POST['login_user']."'"), 0, 'COUNT(*)');
	   if($numRecords == "0"){
			header('Location: index.php#login&error=User+Does+Not+Exist');
		}
      $pass = $_POST['pass']; //sets password variable
	  $Password = mysql_result(mysql_query("SELECT `password` FROM `users` WHERE `username` = '".$_POST['login_user']."'"), 0, 'password');
		  if (md5($pass) === $Password) { //error, wrong password
			$_SESSION['authorized'] = TRUE;
			$_SESSION['uid'] = mysql_result(mysql_query("SELECT uid FROM `users` WHERE `username` = '".$_POST['login_user']."'"), 0, 'uid');
			header('Location: index.php#Home');
		  }else{ 
			header('Location: index.php#login&error=Wrong+Password+or+Username');
		  }
   }
   if(isset($_POST['Register'])){
   	// Make the query
    //Execute the query
    	$results = mysql_query( "INSERT INTO users (username, password, zip, fname, lname) VALUES ('".$_POST["username"]."', '".md5($_POST["password"])."', '".$_POST["zipcode"]."', '".$_POST["fname"]."', '".$_POST["lname"]."')");
    	//$_SESSION['authorized'] = TRUE;
    	header('Location: index.php#AccountCreated');
   }

}

?>
