<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Refresh" content="6;url=index.htm">
<link rel="shortcut icon" href="http://mark.mabucplus.com/img/favicon.ico" />
<link rel="alternate" type="application/rss+xml" title="RSS [Gallery]" href="http://feeds.feedburner.com/Mabucplus" />
<style>
	div.sendsuccess {
		margin:0 auto; font-family:Arial, Helvetica, sans-serif; font-size:13px; width:400px;
	}
	.sendsuccess p {
		line-height:18px;
	}
</style>
<title>Brown Affiliation</title>
</head>

<body>

<?php
	if($_POST['btsend']=='Submit') {
		 $name = $_POST['name']; //Fields in Contact Form
		 $email = $_POST['email'];  //Fields in Contact Form
		 $message = $_POST['message']; //Fields in Contact Form
		 $date = date("Y-m-d"); //Generate Date
		 
		 $to="markabucayon@gmail.com"; //Please change me...
		 $subject = "Prospect Client"; //Please Chamge me as your subject
		 $date = date('F d, Y'); 	
			
		 $mail_from="From:$email \n";
		 $mail_from .="Content-Type: text/html; charset=utf-8 \n";
		 $message="
			 <span style='color:#3096D9'>$date</span>
			 <p><strong>Name</strong>: $name </p>
			 <p><strong>Email</strong>: <a href='$email'>$email</a></p>
			 <p><strong>Message</strong>: $message</p>";
		
		 mail($to,$subject,$message,$mail_from);
		 
		 $message = "
		 			 <div class='sendsuccess'>
						 <p>Your contact information is successfully send.</p>
						 <p><img src='img/loading.gif'>&nbsp;Please wait while you are redirected to main page...</p>
					 </div>	 ";	
		 
		 echo $message;
	}		 
?>

</body>
</html>
