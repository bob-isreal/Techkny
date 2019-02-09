<?php
    $description ="Redirect";
    $page ="Redirect";
	$title="Page Loading";
	include"header.php";	
	echo $header;

	
	$address=$_GET["address"];
	
 echo "$address";
	

	echo "
	<meta http-equiv='refresh' content='2; url=$address'>
	
	<div id='productWrap' class='altWrap'>
		<div class='container'>
			<div class='row'>
		</br>
		<h2 class='purchaseFormHeading1'>The Page You Requested is Being Fetched. <img src='loading.gif'/></h2>
		
		<h3 class ='inlineHeading'>if You are not automatically redirected please click <a onclick='redirect()'>here</a></h3>
		
		
			</div>
		</div>
	</div>
			";
			
		





	






	include"footer.php";	
	echo $footer;

?>
<script>function redirect() {
				window.location.assign('<?php$address?>')
			};
			</script>