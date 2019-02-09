<!DOCTYPE html>
		<?php	
		$description="Techkny is a company dedicated to a range of service. These services include Website Designing, Computer Networking, Website Management, Graphics Designing, and Online Advertisement. These Plans Are very affordable with the lowest for as low as Ten Thousand Naira";
		$title="What We Do";
		$page="service.php";
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
					<h2 class="sectionTitle">Techkny Inc</h2>
					<h3 class="sectionTitle">Techkny Inc, is one of the subsidiaries of Quint Industries. To be prescise, it is the technological arm of Quint Industries. Below Are What we specialize in</h3>
				</div>
				<div class="productFeatures clearfix">
				<div class="productrow">
				
							<h3>Website Designing</h3>
							<img class="my-responsive" src="assets/img/web.jpg"/>
							<p>Actually, in today's world, it's rare to find a business or an organization that doesn't have a website. In fact, those who don't have an Internet presence are at an extreme disadvantage when it comes to exposure to potential customers and interested parties. The same is true for your school. Without a website, you are missing out on a wealth of opportunities that... <a href="website.php">more</a></p>
						</div>
						
				<div class="productrow">
							<h3>Graphic Designing</h3>
							<img class="my-responsive" src="assets/img/graphic1.jpg"/>
							<p>Graphics Have begun to speak volumes in every establishment of today. A little picture can go a long way in telling a lot about yourself or whatever you want to advertise and this is why when choosing your graphical designs to be used in whatever things you want to do, you should consider using graphics with high end properties such as sharp colours, clear ......<a href="graphic.php">more</a></p>
						</div>
				</hr>
				<div class="productrow clearline">
							<h3>Online Advertisement</h3>
							<img class="my-responsive" src="assets/img/advert.png"/>
							<p>The online presence doesnt just stop at getting a website for yourself or for your business, it also involves you creating awareness of your product. in other words, what you need next for a tangible success is advertisement. Show me a Business that doesnt have a good advertising plan and i will show you a business which is not a business. Now you must understand that when ..... <a href="advert.php">more</a></p>
						</div>
				
				<div class="productrow">
							<h3>Website Management</h3>
							<img class="my-responsive" src="assets/img/webmanager.jpg"/>
							<p>After Website Design what next..... You Guessed right.. Website management. Website management is a very crucial aspect of website generally. You can invest more than 3 million Dollars into a website but if the management is poor you might not manage to get a single dime out of it. This is why among our top priorities here Website management is a vital one. Management Includes Customer....   <a href="webmanagement.php">more</a></p>
						</div>
						
						<div class="productrow">
							<h3>Networking</h3>
							<img class="my-responsive" src="assets/img/networking.jpg"/>
							<p>Computer has made communication and a whole lot of other things easier and faster. Modern aspects of computer has made life better today. One of those modern aspect of Computer is Networking. Networking (by our definition) as the name suggests is the connection of two or more Computers together to achieve a common goal. Part Of advantages of Networking is that it promotes efficiency at affordable cost. What Do we mean by this? Take for example... <a href="networking.php">more</a></p>
						</div>
						
				
				</div>
				
			</div>
		</div>
	</div> <!-- /productWrap -->
	
		<!--Marquee Wrap-->
		<div class="disclaimer"> <h2>DISCLAIMER!!!</h2>
			<marquee>
				PLEASE NOTE THAT ALL OF OUR PLANS COMES WITH STANDARD SECURITY AND WE CAN ONLY GUARRANTEE STANDARD SECURITY FOR THEM. HOWEVER, IF YOU NEED EXTREME SECURITY THEN CONTACT US INDICATING YOUR PREFERENCES. 
			</marquee>
		</div><!-- End of Marquee Wrap-->
		
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