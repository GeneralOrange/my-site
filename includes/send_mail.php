<?php
	if(!isset($_POST['submit'])):
		echo "There has been an error";
		exit();
	else:
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$question = $_POST['question'];

		$headers = 'From: orange-developer.nl | '.$email;

		$master = 'erik.17021995@gmail.com';

		mail($master, $subject, $headers, $question);
		echo "mail is verzonden";
		header('refresh:3;url=../contact.php');
	endif;
?>