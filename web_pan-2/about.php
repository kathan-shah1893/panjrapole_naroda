<!DOCTYPE html>
<html>
<head>
<title>Panjarapool</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Happy Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
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
 include 'header.php'
?>
<!-- //header -->
<!-- banner -->
<div class="banner page-head">	
</div>
<!-- //banner -->
<div class="about">
	<div class="container">
		<div class="about-text">
			<h3>ABOUT US</h3>
		</div>	
		<div class="about-info">
			<h5>Our Mission is to be one of the leading animal welfare and re-homing charities for the care and rehabilitation of animals 
				<br>The fundamental principle of our approach to animal welfare is that no healthy animal will be destroyed.</h5>
			<div class="about-gds">	
				<div class="col-md-5 about-info-left">
					<img src="https://vspca.org/wp-content/uploads/2021/01/cow_shelter.jpg" alt=""/>
				</div>
				<div class="col-md-7 about-info-right">
					<h4>Why Donate US</h4>
					<p>People will always help people, but what about animals? If you're willing to donate money, you should consider being one of the few of us who donate to help animals.<br> <span>We are working towards a future where no animal is refused help. Where every animal entering our care is found a suitable and loving home and whilst in our care all animals are looked after in line with our values.<br></span>There are many ways to help save animal lives. You can get involved with the Naroda Khodadhor Panjrapole Trust through charitable contributions. Your kind contributions help ensure that the homeless animals in our care receive the best care possible.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
			<div class="about-grid">
				<div class="col-md-4 about-text-info">
			<!-- 		<h4>Development</h4>
					<h5>nobis est eligendi opti</h5>
					<p class="about-pgh">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,  to generate Lorem Ipsum which looks.</p> -->
				</div>
				<div class="col-md-4 about-text-info">
					<!-- <h4>Foundation</h4>
					<h5>repudiandae sint et mo</h5>
					<p class="about-pgh">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, to generate Lorem Ipsum which looks reasonable or randomised.</p> -->
				</div>
				<div class="col-md-4 about-text-info">
					<!-- <h4>DONATIONS</h4>
					<h5>consequatur aut perfere</h5>
					<p class="about-pgh">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some to generate Lorem Ipsum which looks reasonable.</p> -->
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="about-team">
				<div class="about-text">
					<h3 class="ind">Our Volunteers</h3>
				</div>	
				<div class="row">
<?php
  $sql="SELECT * FROM admin";
  $ans=mysqli_query($con,$sql);
  while($row=$ans->fetch_assoc())
   {
		?>
		<div class="col-sm-6 col-md-3 about-team-grids">
						<div class="thumbnail">
							<?php
							  echo "<img src='../web_pan-2_admin/trusti/".$row['image']. "'class='img-responsive'>"; ?>
							<div class="caption">
								<h4><a href=""><?php echo "<h4>".$row['name']."</h4>"; ?></a></h4>
								<p><?php echo "<h4>".$row['post']."</h4>"; ?></p>
							</div>
						</div>
					</div>
<?php					
}	
?>
<!-- 					<div class="col-sm-6 col-md-3 about-team-grids">
						<div class="thumbnail">
							<img src="images/18.jpg" alt="" class="img-responsive" />
							<div class="caption">
								<h4><a href="#">Dignissimos</a></h4>
								<p>vero eos et accusamus et iusto odio dignissimos ducimus</p>
							</div>
						</div>
					</div> -->
				<!-- 	<div class="col-sm-6 col-md-3 about-team-grids">
						<div class="thumbnail">
							<img src="images/17.jpg" alt="" class="img-responsive" />
							<div class="caption">
								<h4><a href="#">Accusamus EtIu</a></h4>
								<p>vero eos et accusamus et iusto odio dignissimos ducimus</p>
							</div>
						</div>
					</div> -->
<!-- 					<div class="col-sm-6 col-md-3 about-team-grids">
						<div class="thumbnail">
							<img src="images/16.jpg" alt=""class="img-responsive" />
							<div class="caption">
								<h4><a href="#">Dignissimos Duc</a></h4>
								<p>vero eos et accusamus et iusto odio dignissimos ducimus</p>
							</div>
						</div>
					</div> -->
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
</div>
<!-- //about-page -->
<!-- footer -->
<?php 
 include 'footer.php'
?>
<!-- //footer -->
<!-- copy -->
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