<!DOCTYPE html>
	<?php	
		include "purchase2.php";
		$title="$plan for $message";
		include"header.php";	
		echo $header;
?>
			<div id="topWrap" class="jumbotron">
			<div class="container">
				<div class="col-md-6 col-md-push-6 jumboText">
					<h1>Technology is Our Slogan</h1>
					<h2>Discovering and Expanding Technology</h2>
					<a class="btn btn-lg btn-success actionBtn" href="#"><i class="fa fa-mobile fa-4x pull-left"></i><span class="line1">Available soon on the</span><br/><span class="line2">App Store</span></a>
				</div>
				<div class="col-md-6 col-md-pull-6 hidden-xs">
					<div class="mobile">
						<div class="mobileSlider">
							<ul class="slides">
								<li>
									<img src="assets/img/screen1.jpg"/>
								</li>
								<li>
									<img src="assets/img/screen2.jpg"/>
								</li>
                                                                <li>
									<img src="assets/img/screen3.jpg"/>
								</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			</div>

	
	<div id="productWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">Techkny Limited</h2>
					<h3 class="sectionTitle">Techkny is one of the subsidiaries of Quint Industries. To be prescise, it is the technological arm of Quint Industries. Below Are What we specialize in</h3>
				</div>
				
<?php
			
			
			
				

				for($x = 0; $x < $arrlength; $x++) {
					if($currentSelection == $allPlanValue[$x]){
						echo("
						
						<div>
						<h2 class='purchaseFormHeading2'>Welcome and thank You for patronizing us.</br> You Have Decided To Choose the <em class='red'>$plan </em> for <em class='red'>$message.</em>
						</h2></br></br> 
						<h2 class='purchaseFormHeading2'>please fill in the form provided below indicating your preferences to proceed<p>Please note That the fields asterisked <span class='red'>*</span> red are compulsory</p>
						</h2>
						</div>
						
						
																		
						<form action ='contact.php' method='post' >
						
						<fieldset class='col-sm-8 col-sm-offset-2'>
						
						<legend class='purchaseFormHeading1'>PERSONAL DETAIL</legend>

						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Surname<span class='red'>*</span></label>
								<input type='text' name='surname' id='surname' class='form-control' autocomplete='off' max-length='20' placeholder='20 Letters max' required/>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Lastname<span class='red'>*</span></label>
								<input type='text' name='lastname' id='lastname' class='form-control' autocomplete='off' max-length='20' placeholder='20 Character Max' required/>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Email<span class='red'>*</span></label>
								<input type='email' name='email' id='contactEmail' class='form-control' autocomplete='off' max-length='50' placeholder='Email' />
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Phone No<span class='red'>*</span></label>
								<input type='tel' name='phone' id='phone' value='' class='form-control' autocomplete='off' max-length='13' placeholder='' />
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Address</label>
								<textarea  name='address' id='address' class='form-control formdetail' autocomplete='off'></textarea>
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Office Handled In Organisation</label>
								<textarea  name='officeHeld' id='officeHeld' class='form-control formdetail' autocomplete='off'></textarea>
							</div>
						</div>
						</fieldset>
						
						<fieldset class='col-sm-8 col-sm-offset-2'>
						<legend class='purchaseFormHeading1'>ORGANISATION DETAIL</legend>

						
						
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Name Of Organisation<span class='red'>*</span></label>
								<textarea  name='organisation' id='organisation' class='form-control formdetail' autocomplete='off'></textarea>
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Office Address<span class='red'>*</span></label>
								<textarea  name='officeAddress' id='organisation' class='form-control formdetail' autocomplete='off'></textarea>
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Brief Description of Organisation(e.g What You Do, What You Specialize in e.t.c)<span class='red'>*</span> </label>
								<textarea  name='organisationDescription' id='organisationDescription' class='form-control' autocomplete='off'></textarea>
							</div>
						</div>
						<div class='col-sm-12'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Any Other Message</label>
								<textarea name='comments' id='commentsText' class='form-control' autocomplete='off'></textarea>
							</div>
						</div>
						</fieldset>
						
						
						<fieldset class='col-sm-8 col-sm-offset-2'>
						<legend class='purchaseFormHeading1'>PLAN DETAIL</legend>
						
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Service Selected<span class='red'>*</span></label>
								<input type='text' name='service' id='service' value='$message' class='form-control' autocomplete='off'  readonly/>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Plan Selectced<span class='red'>*</span></label>
								<input type='text' name='plan' id='plan' value='$plan' class='form-control' autocomplete='off' readonly/>
							</div>
						</div>
						
						
						
																								
						</fieldset>
						
						<fieldset class='col-sm-8 col-sm-offset-2'>
						<legend class='purchaseFormHeading1'>PROMO DETAIL</legend>
						<div>Please Fill this field if your were referred by someone</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Refree's Name<span class='red'>*</span></label>
								<input type='text' name='refreeName' id='refreeName' value='' class='form-control' autocomplete='off' />
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Refree's Phone No<span class='red'>*</span></label>
								<input type='text' name='refreePhone' id='refreePhone' value='' class='form-control' autocomplete='off'/>
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Refree's Account Name<span class='red'>*</span></label>
								<input type='text' name='refreeAccountName' id='refreeAccountName' value='' class='form-control' autocomplete='off' />
							</div>
						</div>
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label>Refree's Account No<span class='red'>*</span></label>
								<input type='text' name='refreeAccountNumber' id='refreeAccountNumber' value='' class='form-control' autocomplete='off'/>
							</div>
						</div>
						
						<div class='col-sm-6'>
							<div class='inputContainer'>
							<label class='screen-reader-text'>Refree's Bank Name<span class='red'>*</span></label>
								<input type='text' name='refreeBankName' id='refreeBankName' value='' class='form-control' autocomplete='off' />
							</div>
						</div>
						
						
						
						
						
						
						
																								
						</fieldset>
						<div class='col-sm-8 col-sm-offset-2'></br>
							<button name='submit' type='submit'  class='btn btn-primary btn-lg'>Send</button>
						</div>
						</form>
					
						
						
						
						");
					}
										
					
					}
							
?>
			
			
			
				</div>
				
			</div>
		</div>
	</div> <!-- /productWrap -->
	
	
	<div id="testimonialsWrap" class="altWrap">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2 class="sectionTitle">What people say</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="quote">"Techkny is the best website designing company I've come across so far."</div>
								<div class="author">Adedunye Aderonke</div>
							</li>
							<li>
								<div class="quote">"Techkny Ltd proves to be a whole lot of stress free organisation and also trust worthy."</div>
								<div class="author">Ebenepsalm Children School</div>
							</li>
							<li>
								<div class="quote">"Techkny is Just Too Unique in everything."</div>
								<div class="author">Ayeni Timilehin</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /testimonialsWrap -->
	
	<?php	include"footer.php";	
			include"contact1.php";
		echo $contact;
		echo $footer;
?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/flexslider.js"></script>
	
<script type="text/javascript">
$(document).ready(function() {

	$('.mobileSlider').flexslider({
		animation: "slide",
		slideshowSpeed: 3000,
		controlNav: false,
		directionNav: true,
		prevText: "&#171;",
		nextText: "&#187;"
	});
	$('.flexslider').flexslider({
		animation: "slide",
		directionNav: false
	});
		
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if ($(window).width() < 768) {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar-header').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}
			else {
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top - $('.navbar').outerHeight(true) + 1
					}, 1000);
					return false;
				}
			}

		}
	});
	
	$('#toTop').click(function() {
		$('html,body').animate({
			scrollTop: 0
		}, 1000);
	});
	
	var timer;
    $(window).bind('scroll',function () {
        clearTimeout(timer);
        timer = setTimeout( refresh , 50 );
    });
    var refresh = function () {
		if ($(window).scrollTop()>100) {
			$(".tagline").fadeTo( "slow", 0 );
		}
		else {
			$(".tagline").fadeTo( "slow", 1 );
		}
    };
		
});
</script>
  </body>
</html>