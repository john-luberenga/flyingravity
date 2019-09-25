<?php
if(isset($_POST['submit'])){
	$mailFrom = $_POST['email'];
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailTo = "support@flyingravity.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an email from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact.php?mailsend");


}


?>