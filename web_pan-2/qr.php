<?php 
 //inclued "header.php";
 include 'header.php';
 include 'conn.php';
?>
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
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<br>
<?php 
	$q = "select *from qr_code"; 
	$sql = mysqli_query($con,$q);
	if($sql)
	{
		 while($value= mysqli_fetch_array($sql))
		 {
		 	$qr_id=$value['qr_id'];
		 	$log=$value['file'];
		 	$date=$value['date'];
		 	$admin_id=$value['admin_id'];
		 	$phone=$value['phone'];		    //echo $log;
		 }
	}
?>
<center><div><h3>Please contact at <a href="tel:+91<?php echo $phone; ?>"><?php echo $phone; ?></a> After payment</h3></div></center>
<?php 
  echo "<center><img src='../web_pan-2_admin/qr/".$log. "' height='500px'></center>"; 
?>
<br><br><br>
<div class="header-right">
	<a href="index.php"><img src="images/logo.png" alt=""></a>
</div>
<!-- <img src="/web_pan-2/images/qr.png" style="height: 500px;"></center> -->
</body>
</html>
<?php
 include "footer.php";
?>