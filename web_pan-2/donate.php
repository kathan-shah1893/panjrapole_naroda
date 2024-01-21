<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.overlay {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1;
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

/* When you mouse over the container, fade in the overlay title */
.container:hover .overlay {
  opacity: 1;
}
.container {
  position: relative;
  text-align: center;
  color: white;
}
</style>
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
			function red()
			{
				window.location.href="donate_form.php";
			}
		</script>
<!---- start-smoth-scrolling---->
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
					// $(function() {
					// 	$('.moments-bottom a').Chocolat();
					// });
					</script>
			<h3>Donate Us</h3>
	<?php
	$sql="SELECT * FROM scheme";
  $ans=mysqli_query($con,$sql);
  $i=1;
  while($row=$ans->fetch_assoc())
   {
	?>		
			<div class="moments-bottom row">
					<div class="col-md-4 moments-left">
							<?php
							echo "<a onclick='red()' >".$row['file']."</a>";
							?>
						
					</div>
			</div>
			<?php 
		}
			?>
		</div>
</div>	
<!-- //portfolio -->
<!-- footer -->
<?php 
 include 'footer.php';
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