<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$firmName =$_POST['firmName'];
		$email=$_POST['email'];
		$subject =$_POST['subject'];
		$messag=$_POST['message'];

		$to='talha_khan_87@hotmail.com'; // Receiver Email ID, Replace with your email ID
		$subject= $subject;
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$messag;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Your message was sent Successfully! Thank you"." ".$name."</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>