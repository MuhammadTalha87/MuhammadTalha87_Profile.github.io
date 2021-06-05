<?php
        
	if(isset($_POST['submit'])){
	    require 'phpmailer/PHPMailerAutoload.php';
	    $mailer = new PHPMailer;
	    $mail->SMTPAuth   = true;
	    $mail->Host       = "smtp@live.com"; // sets the SMTP server
        $mail->Port       = 26;// set the SMTP port
        $mail->SMTPSecure = 'tls';
        $mail->Username   = "talha_khan_87@hotmail.com"; // SMTP accountusername
        $mail->Password   = "talha54692";
        $mail->setFrom($_Post['email'], $_Post['name']);
        $mail->addAddress('talha_khan_87@hotmail.com');
        $mail->addReplyTo($_Post['email'], $_Post['name']);
        $mail->isHTML(true);
        $mail->Subject='Form Submission: '.$_Post['subject'];
	    $mail->Body='<h1 align=center> Name : ' .$_Post['name']. '>br> Email : '
	    .$_Post['email']. '<br> Message :'.$_Post['message']. '<h1>';
	    
	    if(!mail->send()){
	        $result = "Something went wrong";
	        
	        echo $result;
	    }
	    else{
	        $result = "Your message was sent successfully";
	        echo $result;
	    }
	
	
	}
?>