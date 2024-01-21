<!DOCTYPE html>
<html>
<head>
<title>Happy Home a Society and People Category Flat Bootstrap Responsive Website Template| Portfolio :: w3layouts</title>
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
<style type="text/css">
	.kk{
		height: 100;
		width: 100;
	}
</style>
</head>
<body>
<!-- header -->
<?php
 include 'header.php';
 include 'conn.php';
?>
<!-- //header -->
<!-- banner -->
<div class="banner page-head">	
</div>
<!-- //banner -->
<!-- portfolio -->
<div class="moments">
		<div class="container">
				<script src="js/jquery.chocolat.js"></script>
					<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen" charset="utf-8" />
					<!--light-box-files -->
					<script type="text/javascript" charset="utf-8">
					$(function() {
						$('.moments-bottom a').Chocolat();
					});
					</script>
			<h3>GALLERY</h3>
			<div class="moments-bottom">
				<?php
  $sql="SELECT * FROM gallary";
  $ans=mysqli_query($con,$sql);
  while($row=$ans->fetch_assoc())
   {
   	 $temp=$row['file'];
		?>
					<div class="col-md-2 moments-left">
						<a class="mask1" href="../web_pan-2/gallary/<?php echo $temp; ?>">
							  <img src='../web_pan-2/gallary/<?php echo "$temp"; ?>' class='img-responsive' onmouseover='go()' height=100 width=100>
						</a>
					</div>
		<?php 
	}
		?>			
					<!-- <div class="col-md-4 moments-left">
						<a class="mask1" class="mask1" href="https://www.careforcow.org/assets/img/gallery/img2.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img2.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img3.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img3.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img4.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img4.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img5.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img5.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img6.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img6.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img7.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img7.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img8.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img8.jpg" alt="name" />
						</a>
					</div>
					<div class="col-md-4 moments-left">
						<a class="mask1" href="https://www.careforcow.org/assets/img/gallery/img9.jpg">
							<img class="img-responsive zoom-img" src="https://www.careforcow.org/assets/img/gallery/img9.jpg" alt="name" />
						</a>
					</div> -->
					<div class="clearfix"> </div>
			</div>
		</div>
</div>	
<!-- //portfolio -->
<!-- footer -->
<div class="footer-top">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-3 footer-grid">
<!-- 				<h3>PRAESENTIUM</h3>
				<ul>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
				</ul> -->
			</div>
			<div class="col-md-3 footer-grid">
				<!-- <h3>DIGNISSIMOS</h3>
				<ul>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
				</ul> -->
			</div>
			<div class="col-md-3 footer-grid">
				<!-- <h3>PRAESENTIUM</h3>
				<ul>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
				</ul> -->
			</div>
			<div class="col-md-3 footer-grid">
				<!-- <h3>DIGNISSIMOS</h3>
				<ul>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
					<li><a href="#">Distinctio</a></li>
					<li><a href="#">Excepturim</a></li>
				</ul> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //footer -->
<!-- copy -->
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