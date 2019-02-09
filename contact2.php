<?php	
		
	$title="Message Sent";
	include"header.php";	
	echo $header;

	
	
	
	
	
	$surname=$_POST["surname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$phone_number=$_POST["phone"];
	$address=$_POST["address"];
	$other_message=$_POST["comments"];


       $to      = "techkny@gmail.com";
        $subject = "Enquiries From $lastname";
        $message = "Mr/Mrs $surname $lastname whose phone number is $phone_number email is $email and lives at 	$address has requested to contact us Their message below. $other_message";
        $headers = "From: $email' . '\r\n' .
                    'Reply-To: $email' . '\r\n' .";

	mail($to, $subject, $message, $headers);
		
		echo "
	<meta http-equiv='refresh' content='5; url=index.php'>
	
	<div id='productWrap' class='altWrap'>
		<div class='container'>
			<div class='row'>
		</br>
		<h2 class='purchaseFormHeading1'>Request Successful!</h2>
		
		<h3 class ='inlineHeading'>if You are not automatically redirected please click <a onclick='redirect()'>here</a></h3>
		
		
			</div>
		</div>
	</div>
			";
			
		
		
?>
<script>function redirect() {
				window.location.assign('index.php')
			};
			</script>