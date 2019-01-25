<?php


ini_set("SMTP","aspmx.l.google.com");
	
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: Molly<mollysdreamteam.com>" . "\r\n";
$fname = $_POST["FNAME"];
$subject = "Hey molly!! ". $fname . " wants to connect with you" ;
$currentPage=$_POST["currentPage"];
$page=(string)$_POST["page"];
$email = $_POST["EMAIL"];
$desc=$_POST["description"];
$desc.=$_POST["desc"];
$body = $desc. " is why he wants to connect with you!! Here is the email address:". $email;


if(mail("nikki.aone@gmail.com",$subject,$body,$headers)){
	echo "Curren page is:",$page;
	if($page == "aboutUs"){
		header("Location: http://mollysdreamteam.com/Dream Team/Dream-Team/about-us/index.html");
		die();
	}else if($page == "home"){
		header("Location: http://mollysdreamteam.com/Dream Team/Dream-Team/index.html");
		die();
	}else if($page == "services"){
		header("Location: http://mollysdreamteam.com/Dream Team/Dream-Team/services/index.html");
		die();
	}else if($page == "modelSubmission"){
		header("Location: http://mollysdreamteam.com/Dream Team/staff/model-submission/index.html");
		die();
	}
	else if($page == "contactUs"){
		header("Location: http://mollysdreamteam.com/Dream Team/Dream-Team/contact-us/index.html");
		die();
	}
	else if($page == "staff-your-event"){
		header("Location: http://mollysdreamteam.com/Dream Team/Dream-Team/staff-your-event/index.html");
		die();
	}
	else if($page == "past-events"){
		header("Location: http://mollysdreamteam.com/Dream Team/Dream-Team/past-events/index.html");
		die();
	}
	
}else{
	echo "not Done";
}

?>
