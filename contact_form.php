<?php
$name=$_POST["name"];
$email=$_POST["email"];
$subject=$_POST["subject"];
$msg=$_POST["message"];


// Create connection
$conn = mysqli_connect("localhost","root","","portfolio");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 else {
		$stmt = $conn->prepare("insert into contact(Name,Email,Subject,Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name,$email, $subject, $msg);
		$execval = $stmt->execute();
		echo $execval;
		
    header('location: index.html');
		$stmt->close();
		$conn->close();
	}
?>


