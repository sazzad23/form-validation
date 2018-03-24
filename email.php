<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	$yourEmail = "eresh24@gmail.com"; //Place your email here to receice form data
	
	$lName = "";
	$fName = trim(stripslashes(htmlspecialchars($_POST['fName'])));
	$lName = trim(stripslashes(htmlspecialchars($_POST['lName'])));
	$mobile = trim(stripslashes(htmlspecialchars($_POST['mobile'])));
	$address = trim(stripslashes(htmlspecialchars($_POST['address'])));
	$email = trim(stripslashes(htmlspecialchars($_POST['email'])));
	
	$msgBody = "First Name: $fName \n\n Last Name: $lName \n\n Mobile No.: $mobile \n\n Address: $address \n\n Email: $email "; //Email body
	
	if(mail("$yourEmail","Contact Message from $fName",$msgBody)){
		echo 'send';
	}else{
		echo 'error';
	}
}