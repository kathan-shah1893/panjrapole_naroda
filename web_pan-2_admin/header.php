<!DOCTYPE html>
<html>
<head>
<?php
session_start();
include 'conn.php';
?>	
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
<style type="text/css">
	.sidebar-menu
	{
		-ms-overflow-style: none
		background: red;
		scrollbar-width:  none;
		overflow-y: scroll;
	}
	.sidebar-menu::-webkit-scrollbar-thumb:hover
	{
	display: none;
	}
</style>
</head>
<?php
 include 'conn.php';
?>
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
<!-- 		<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value="">
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							/profile_details-->
									   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	 
 							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
					<div class="sidebar-menu">
					<header class="logo">
					</a> <a href="dashboard.php"> <span id="logo"> <h1>Panjarapol</h1></span> 
					<!-- <img id="logo" src="" alt="Logo"/> -->
				  </a> 
				</header>
<?php
$id=$_SESSION['sess_user'];
  $sql="SELECT * FROM admin where admin_id=".$_SESSION['sess_uid'];
  $ans=mysqli_query($con,$sql);
  while($row=$ans->fetch_assoc())
   {
		$name=$row['name'];
	   $email=$row['email'];
		$pass=$row['password'];
		$phone=$row['phone'];
		$post=$row['post'];
		$date=$row['date'];
	}	
	?>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
							    	  <a href="dashboard.php"><span class=" name-caret"><?php echo "$name" ?></span></a>
									 <p><?php echo "$post"; ?></p>
									<ul>
									<li><a class="tooltips" href="edit_profile.php" style="color: blue;">Edit Profit</a></li>
										<li><a class="tooltips" href=logout.php style="color: blue;">Log out</a></li>
										</ul>
									</div>
							   <!--//down-->
                           <div class="menu">
									<ul id="menu" >
										<li><a href="dashboard.php"> <span>Dashboard</span></a></li>
										<li><a href="contact.php"> <span>Contact</span></a></li>
										<li><a href="donate.php"> <span>Donate</span></a></li>
										<li><a href="qr.php"> <span>Insert new QR code</span></a></li>
										<li><a href="trust.php"> <span>New trusti</span></a></li>
										<li><a href="scheme.php"> <span>new Schemes</span></a></li>
										<li><a href="edit_schem.php"> <span>edit Schemes</span></a></li>
										<li><a href="gallary.php"> <span>New Image</span></a></li>
										<li><a href="edit_gallary.php"> <span>edit Image</span></a></li>
										<?php
											if($_SESSION['sess_uid']==2)
											{
												?>
												<li><a href="list_trust.php"> <span>delete trusti</span></a></li>
										<?php		
											}								 
										?> 	
								</div>		
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>