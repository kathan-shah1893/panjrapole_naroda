<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Login :: w3layouts</title>
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
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page"></h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
																<div class="buttons login">
																			<ul>
<!-- 																				<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
																				<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li> -->
																				<div class="clearfix"></div>
																			</ul>
																		</div>
																<form method="post">
																		<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" name=email>
																		<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="pass">
																		<div class="submit"><input type="submit" onclick="myFunction()" value="Login" name="clk"></div>
																		<div class="clearfix"></div>			
																</form>
														</div>
													</div>
												<!--//login-top-->
										   </div>
										  	<!--//login-->
										    <!--footer section start-->
										<div class="footer">
												<div class="error-btn">
<!-- 															<a class="read fourth" href="index.html">Return to Home</a> -->
															</div>
										   <p>&copy 2022 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">Kathan shah</a></p>
										</div>
									<!--footer section end-->
									<!--/404-->
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
<?php
 	include 'conn.php';
	if(isset($_POST['clk'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$query=("SELECT * FROM admin WHERE email='".$email."' AND password='".$pass."'");
		$run=mysqli_query($con,$query);
		$count=mysqli_num_rows($run);
		if($count==1)
		{
			session_start();
			$_SESSION['sess_user']=$uemail;
			$query2=("SELECT admin_id FROM admin WHERE email='".$email."'");
			$run2=mysqli_query($con,$query);
			if($run2)
			{
			  while($value= mysqli_fetch_array($run2))
			  {
       			$_SESSION['sess_uid']=$value['admin_id'];
       			echo $_SESSION['sess_uid'];
        	  }
			header("Location:dashboard.php");				
			}
			else
			{
				echo "<script> alert('someting want wrong');</script>";
			}
		}
		else
		{
			echo "<script>alert('SORRY YOU ENTER WRONG USER NAME AND PASSWORD');</script>";
					 	if (!isset($_GET['reload'])) 
					 	{
                           echo '<meta http-equiv=Refresh content="0;url=index.php">';
                        }
		}
	}
?>
</html>