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
 include 'header.php';
?>
<!-- //header -->
<!-- banner -->
<div class="banner page-head">	
</div>
<!-- //banner -->
<!-- about-page -->
<div class="contact">
	<div class="container">
		<div class="contact-header">
			<h3>CONTACT</h3>
		</div>
		<form method="post">
		<div class="contact-gds">
			<div class="col-md-6 contact-top">
				<h3>Want to work with us?</h3>
				<br>
					<div class="con-text">
						<span>Your Name </span>		
						<input type="text" value="" name="name" required>						
					</div>
					<div class="con-text">
					  <span>Your Contact Number </span>		
					  <input type="text" value="" name="phone" required>						
					</div>
					<br>
					<div class="con-text">
					  <span>Subject</span>		
					  <input type="text" value="" name="subject" required>	
					</div>
					<div class="con-text">
					  <span>Your Message</span>		
					  <textarea name="msg" required> </textarea>	
					</div>
					<input type="submit" value="SEND" name="clk">
			</div>
			</form>
			<div class="col-md-6 contact-top">
				<h3 class="info">Info</h3>
					<p>PANJRAPOLE OFFICE:<br>
Near Mama Kalyan, Beside Padmawati Society,<br> Nikol Road, Naroda, Ahmedabad – 382330. Gujarat, India.</p>
					<p>Our Mission is to be one of the leading animal welfare and re-homing charities for the care and rehabilitation of animals</p>				
					<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.6857036872866!2d72.67644321444308!3d23.071981520270604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e874e86f9136d%3A0xb28b5e95cd5ffbee!2snaroda%20panjrapol!5e0!3m2!1sen!2sin!4v1658213121210!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about-page -->
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
<?php 
 if(isset($_POST['clk']))
 {
 	//echo "<script>alert('button click')</script>";
 	$name=$_POST['name'];
 	$phone=$_POST['phone'];
 	$subject=$_POST['subject'];
 	$msg=$_POST['msg'];
 	//echo "$name $email $subject $msg";
 	$sql="INSERT INTO contact_us(name,phone,subject,message) VALUES('$name','$phone','$subject','$msg')";
	$ans=mysqli_query($con,$sql);
	if($ans)
	{
	  echo "<script> alert('Response send');</script>";
	}
	else 
	{
	  echo "<script> alert('Response fail');</script>";	
	}  
 }
?>
		<div class="header-right">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
</body>
</html>