<!DOCTYPE html>
	
		<?php	

		$description="Whenever a client(referee) refers another client(referred) to us, if the client which was referred does business with us, then the referee gets a percentage off whatever profit the company realizes. The Percentage ranges from 10%-30% of the profit depending on the service rendered 
		Below are The percentages distribution according to the plans";
		$title="Promo";
		$page="promo.php";
		include"header.php";	
		echo $header;
?>
				<meta name='description' content='We are a Technology Company dedicated to serving in capacities like Computer networking, Website Management and others. All this you can get for as low as 10,000 Naira..O Yes..This is what we are... Much From Little'>

			<div id="pricingWrap">
				<div class="container">
					<div class="row" id="fullText"></br>
					<h4 style="color:red;">Please Note That every Offer here is valid and there is no case of fraud here. To clarify yourself about any information, contact us using the contact form provided at the bottom of this page</h4>
					<h2 class="sectionTitle">List Of All Promo Are Available Below</h2>
					
				<article class="sectionText">														
					<h3>20% OFF</h3>
					
					
					
					
					<p>August 1st makes it a year since Techkny has been offering her service. To this effect, we are giving a discount of 20% on any of our plan. This Promo runs Through the month of August</p>
					
					<h3>Techkny Commission Package</h3>
					
					 
					<p>We are still celebrating a year of service hence the introduction of this promo. TCP aka Techkny Commission Package is a Commission based promotional program. It is aimed at enabling our prospective customers benefit from referral of other customers.</p>

					
					<h4>Here is how it Works</h4>
					
					<p>Whenever a client<em>(referee)</em> refers another client<em>(referred)</em> to us, if the client which was referred patronizes us, then the referee gets a percentage off whatever profit the company realizes. The Percentage ranges from 10%-30% of the profit depending on the service rendered </br>
					Below are The percentages distribution according to the plans</br>
					<li>Web Design - 30%</li>
					<li>Web Management - 20%</li>
					<li>Online Advert - 10%</li>
					
					</p>
			<h4>Benefit Of This Package</h4>
                                      <li>It is totally Free. No Start Up Capital Required</li>
                                      <li>Just Refer Your Client.. Nothing More</li>
                                      <li>Its Is Risk Free</li>
                                      <li>Nothing Like Networking</li>
                                      <li>Not a Ponzi Scheme Where those at the bottom find it difficult to meet up</li>
                                      <li>Easy Method of Payment is  Available</li>
					<p><br><br></p>
					<p style="text-align:center" class="red purchaseFormHeading2">So what are you waiting for? <br>Start referring customers and start earning !</p>
				</article>
										<h4>For All Inquires regarding this Offer or general inquires, Please Kindly Fill the contact form provided below</h4>

					</div>
				</div>
			</div>
	
	<?php	include"contact1.php";
			include"footer.php";	
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