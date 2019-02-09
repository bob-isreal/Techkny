<?php
	$title="Request Successful";
	include"header.php";	
	echo $header;

	
	$surname=$_POST["surname"];
	$lastname=$_POST["lastname"];
	$email=$_POST["email"];
	$phone_number=$_POST["phone"];
	$address=$_POST["address"];
	$office_held=$_POST["officeHeld"];
	$organisation_name=$_POST["organisation"];
	$office_address=$_POST["officeAddress"];
	$description=$_POST["organisationDescription"];
	$other_message=$_POST["comments"];
	$service=$_POST["service"];
	$plan=$_POST["plan"];
	$refreeName=$_POST["refreeName"];
	$refreePhone=$_POST["refreePhone"];
        $refreeBankName=$_POST["refreeBankName"];
	$refreeAccountNumber=$_POST["refreeAccountNumber"];
	$refreeAccountName=$_POST["refreeAccountName"];
 
	
	$to      = "techkny@gmail.com";
        $subject = "A Purchase Request From $lastname";
        $message = "Mr/Mrs $surname $lastname whose phone number is $phone_number\n Email is $email \n Lives at 	$address has requested to purchase a $plan for our $service service. \r\n The said person works at $organisation_name  which is situated at $office_address as $office_held\r\n The description of the organisation is this\n $description \n Other message they would like to deliver are attached below.\n $other_message\r\n The said person was refered by $refreeName whose phone number is $refreePhone\r\n The Refree Bank Details are \r\n Uses $refreeBankName with account number $refreeAccountNumber\r\n Lastly Account name is $refreeAccountName";
        $headers = "From: $email' . '\r\n' .
                    'Reply-To: $email' . '\r\n' .";

	mail($to, $subject, $message, $headers);
	echo "
	<meta http-equiv='refresh' content='5; url=index.php'>
	
	<div id='productWrap' class='altWrap'>
		<div class='container'>
			<div class='row'>
		</br>
		<h2 class='purchaseFormHeading1'>Your Request Has Been Sent and Is Being Processed. We Would Get In Touch With You Soonest. Thanks!</h2>
		
		<h3 class ='inlineHeading'>if You are not automatically redirected please click <a onclick='redirect()'>here</a></h3>
		
		
			</div>
		</div>
	</div>
			";
			
		





	






	include"footer.php";	
	echo $footer;

?>
<script>function redirect() {
				window.location.assign('index.php')
			};
			</script>