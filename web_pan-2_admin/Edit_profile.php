<!DOCTYPE HTML>
<html>
<head>
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Graph Visualization :: w3layouts</title>
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
	<link href="css/atlas.css" rel='stylesheet' type='text/css' />
    <script src="js/atlas.js"></script>
	<script src="js/arbor.js"></script>

<!--clock init-->
<style type="text/css">
	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}
th
{
	background-color: #052963;
}
tr:nth-child(even) {background-color: #BC7E71;}
.cls{
	background: white;
	/*border: black;*/
	border-width: 3px;
	margin-bottom: 10px;
	width: 500px;
	color: blue;
}
</style>
</head> 
<body>
<?php
//session_start();
 include 'header.php';
 include 'conn.php';
 $q = "select *from admin where admin_id='".$_SESSION['sess_uid']."'"; 
 $sql = mysqli_query($con,$q);
 if($sql)
 {
   while($row=$sql->fetch_assoc())
   {
		$kname=$row['name'];
		$kemail=$row['email'];
		$kpassword=$row['password'];
		$kphone=$row['phone'];
		$post=$row['post'];
		$kimage=$row['image'];
	}
}		
?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
								<div class="outter-wp">
								<!--sub-heard-part-->
								   <div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="dashboard.php">Home</a></li>
										<li class="active">edit profile</li>
									</ol>
								   </div>
								  <!--//sub-heard-part-->
								<div class="graph-visual">
											<h2 class="inner-tittle">Edit profile</h2>
											<center>						
											<form method="post" enctype="multipart/form-data" class="cls">
												<input type="text"  name="ename" required="" class="cls" placeholder="enter a name" value='<?php echo"$kname"?>'><br>
												<input type="email" name="eemail" required="" class="cls" placeholder="enter a mail" value='<?php echo"$kemail" ?>'><br>
												<input type="password"  name="epassword" required="" class="cls" placeholder="enter a password" value='<?php echo"$kpassword"?>'><br>
												<input type="number"  name="ephone" required="" class="cls" placeholder="enter a phoen number"value='<?php echo "$kphone"?>'><br>
												<input type="text"  name="fetch_post" required="" class="cls" placeholder="enter a post" value='<?php echo "$post"?>'/><br>
		 										<h4>OLD Image</h4>
												<?Php echo"<img src='../web_pan-2_admin/Trusti/".$kimage."'width='100' height='100'>"; ?>
												<h4>Select Image</h4><input type="file" id="phone" name="eimage" accept="image/jpg,image/png,image/jpeg" style="color: black;" /><br> 
												<input type="submit" name="clk" value="Submit"><br/>
											</form>
											</center>
											<a href="http://localhost/web_pan-2/about.php">view all Trusti</a>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
<?php 
 if (isset($_POST['clk']))
  {
  	 $name=$_POST['ename'];
  	 $email=$_POST['eemail'];
  	 $pass=$_POST['epassword'];
  	 $phone=$_POST['ephone'];
  	 $hodo=$_POST['fetch_post'];
  	 if(isset($_FILES['eimage']))
  	 {
  	 	    $filename= addslashes($_FILES['eimage']['name']);
 	        $tmpname= addslashes($_FILES['eimage']['tmp_name']);
 					date_default_timezone_set("Asia/Calcutta");
 					$iname=(string)(date("YmdHis"));
 					$extension=pathinfo($filename,PATHINFO_EXTENSION);
 					$image_path="$iname.".$extension;
 					if(isset($filename)) 					
 					{
 						move_uploaded_file($_FILES['eimage']['tmp_name'],'Trusti/'.$image_path);
 					}
 			}
 			else
 			{
 				 $q = "select *from admin where admin_id='".$_SESSION['sess_uid']."'"; 
         $sql = mysqli_query($con,$q);
 				 if($sql)
 				 {
   				while($row=$sql->fetch_assoc())
   				{	
						$kimage=$row['image'];
						$image_path=$kimage;	
					}
				 }	
 			}		
 					$temp1=$_SESSION['sess_uid'];
 					$sql="UPDATE admin SET name='$name',password='$pass',phone='$phone',post='$hodo',image='$image_path' WHERE admin_id='".$temp1."'";
 					$ans=mysqli_query($con,$sql);
					 if($ans)
					 {
   					 	echo "<script> alert('profile edit successfully');</script>";
					 }
					 else
					 {
					 		echo "<script> alert('Transaction failed');</script>";
					 }	
   }
?>
</body>
</html>