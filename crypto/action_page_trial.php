<?php

  if (isset($_POST['to']) && isset($_POST['message']))  
  {	
	require_once "Mail.php";
 	
 	$from = "Smart Solar<admin@smartsolar.co.in>";
  	$to = $_POST['to'];
  	$subject = $_POST['subject'];
  	$message = $_POST['message'];
  	$headers="From:$from"."\r\n"."CC:iterjrm@gmail.com"."BCC:codingjrm@gmail.com"."Subject:$subject";
  	$host="ssl://mail.smartsolar.co.in";
  	$port="465";
  	$username="jrm@smartsolar.co.in";
  	$password="sikujyoti";
  	$smtp = Mail::factory('smtp',array ('host" => $host,'port' => $port,'auth' => true,'username' => $username,'password' => $password));
  	$mail = $smtp->send($to,$headers,$message);
 	
  	if(PEAR::isError($mail))
  	{
		    echo "Not done";
 	}
  	else  
  	{
	  	echo "Email Sent Successfully";
  	}
  }
?>
