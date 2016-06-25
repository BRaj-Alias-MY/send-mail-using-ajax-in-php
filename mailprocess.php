<?php
$to = $_POST['fromMail']; //user entered email address from input
$message = $_POST['message']; //message entered by the user. 
$headers ="From:<contact@phptutorials.club>\n";
$headers.="MIME-Version: 1.0\n";
$headers.="Content-type: text/html; charset=iso 8859-1";
$subject = "Welcome to PHPTUTORIALS.CLUB Examples";
$message = "<div style='background:orange;color:white;font-size:20px'>". $message. "</div>";
if(mail($to,$subject,$message,$headers,"-fcontact@phptutorials.club"))
	echo "Mail Sent Successfully!";
else 
	echo "Not Sent!";
?>