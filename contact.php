<?php 
iff(isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "riverpadgett@yahoo.com";
$headers = "From: ".$mailFrom;
$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);
header("Location: contact.html?mailsent");

}

?>