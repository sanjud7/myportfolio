<?php

if(empty($_POST['submit']))
{
	echo "Form is not submitted!";
	exit;
}
if(empty($_POST["name"]) ||
	empty($_POST["email"]))
	{
		echo "Please fill the form";
		exit;
	}
	
$name = $_POST["name"];
$email = $_POST["email"];
$subject=$_POST["subject"];
$message=$_POST["message"];

mail($email,$name,$subject,$message);



?>
