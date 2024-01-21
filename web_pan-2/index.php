<!DOCTYPE html>
<html>
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--webfont-->
<!--js-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
<!-- header -->
<?php 
 include 'conn.php';
 include 'header.php';
?>
<!-- //header -->
<!-- banner -->
<div class="banner">
	<div class="container">
		<!-- responsiveslides -->
								<script src="js/responsiveslides.min.js"></script>
									<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										 // Slideshow 4
										$("#slider3").responsiveSlides({
											auto: true,
											pager: false,
											nav: false,
											speed: 500,
											namespace: "callbacks",
											before: function () {
										$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
											}
											});
											});
									</script>
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>WE NEED YOUR SUPPORT</h3>
							<p>Sed ut perspiciatis unde omnis iste natus
							error sit voluptatem accusantium doloremque 
							laudantium, totam rem aperiam, eaque ipsa quae 
							ab illo inventore veritatis et quasi architecto 
							beatae vitae dicta sunt</p>
							<a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>HELP TURN TEARS TO SURES</h3>
							<p>Sed ut perspiciatis unde omnis iste natus
							error sit voluptatem accusantium doloremque 
							laudantium, totam rem aperiam, eaque ipsa quae 
							ab illo inventore veritatis et quasi architecto 
							beatae vitae dicta sunt </p>
							<a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-bottom -->
<div class="banner-bottom">
	<div class="container">
		<div class="bottom-grids">
			<div class="col-md-6 bottom-left">
					<img src="images/happy.jpg" alt=""/>
				<div class="bottom-pos">
					<h3 style="color: black;">WE CREATE A SPECIAL WORLD</h3>
					<p style="color: black;">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugi</p>
				</div>
			</div>
			<div class="col-md-6 bottom-right">
				<img src="images/happy.jpg" alt=""/>
				<div class="bottom-pos">
					<h3 style="color: black;">OUR MISSION IS TO HELP OLD</h3>
					<p style="color: black;">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugi</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-bottom -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<div class="welcome-head">
			<h3>WELCOME TO Naroda Khodadhor Panjrapole Trust</h3>
			<p>The basic tenet of jain Religion is Sanctity of Life: be it in the form of humans, animals, birds or insects. Particularly pitiable is the condition of abandoned animals by their owners once they become unviable. This Institution is established to nurse and nourish such helpless animals in their sunset period of existence - after all 'Life' is the noblest creation of the 'Creator' ".</p>
		</div>
		<div class="welcome-grids">
			<div class="col-md-6 welcome-left">
						<img src="images/welcome2.jpg" alt=""/>
			</div>
			<div class="col-md-6 welcome-right">
			<!-- 	<h3>ITS AN HONOUR FOR YOU TO SERVE YOU</h3> -->
				<p> Despite the depressing atmosphere of moral decline, there are some kind souls whose hearts pine for the unfortunate animals. Such persons are the lamps of hope that fight the darkness of greed and exploitation in society. When such persons join hands, Institutions like ours are born.</p>
				<p>Naroda Khodadhor Panjrapole Trust is working towords pity on unviable animals from last 55 years. Panrapole work more actively in last 13 years. Panjrapole accepting animals which are abandoned by their owner also accepting animal which are escaped from slaughter house including Cow, Bullock, buffalo, rabbit etc… And actually organization accept animals 24x7 / 365 days continuously without any hesitation.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //welcome -->
<!-- mission -->
<div class="mission">
	<div class="container">
		<div class="mission-header">
			<h3>OUR MISSION</h3>
		</div>
		<div class="mission-grids">
			<div class="col-md-6 mission-left">
				<img src="images/mission.png" alt="not available"/>
			</div>
			<div class="col-md-6 mission-right">
				<div class="mis-one">
					<div class="mis-left">
					</div>
					<div class="mis-right">
						<p>All essential medicines, injections etc. are kept in stock and a veterinary doctor visits the Institution regularly. In case of serious sickness of animals, consulting doctor who comes to the Institution twice a month. Even surgical treatment is done under expert hands at the Institution. The animals are regularly vaccinated. Help and guidance is also provided to the farmers of neighboring villages when their animals fall sick. Thus the Institution tries to alleviate the suffering of dumb and helpless animals which are abandoned by their owners.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mis-one">
					<div class="mis-left">
					</div>
					<div class="mis-right">
						<p>Organisation don't have any permanent fund. Panjrapole having average 300-500 animals. Organisation have average 10 to 15 lac expendutre per annum. Now due to rising cost of fodder, salaries of staff ,and other essential items, the Institution is facing difficulties in making ends meet. Even in this condition also, the Institution still accepts animals that may be diverted to slaughter houses, which defies the very purpose of this Institution.</p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mis-one">
					<div class="mis-left">
					</div>
					<div class="mis-right">
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //mission -->
<!-- success -->
<div class="success">
	<div class="container">
		<div class="success-info">
			<h3>OUR MISSION IS TO HELP & PLACE AN FOR ANIMALS</h3>
			<p>Naroda Khodadhor Panjrapole is unique organization in Ahmedabad for this type of Noblest Cause. Organisation is situated 8 kilometer in east of Ahmedabad. Organisation having 2500 Square yard space near jain temple at Naroda(Ahmedabad).</p>
		</div>
	</div>
</div>
<!-- //success -->
<!-- footer -->
<?php
 include 'footer.php';
?>
<!-- copy -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
		<div class="header-right">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
</body>
</html>