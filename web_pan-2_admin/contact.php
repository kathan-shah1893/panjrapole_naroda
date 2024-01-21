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
</style>
</head> 
<body>
<?php
 include 'header.php';
 include 'conn.php'
?>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
								<div class="outter-wp">
								<!--sub-heard-part-->
								   <div class="sub-heard-part">
								   <ol class="breadcrumb m-b-0">
										<li><a href="index.html">Home</a></li>
										<li class="active">Contact-us</li>
									</ol>
								   </div>
								  <!--//sub-heard-part-->
								<div class="graph-visual">
											<h2 class="inner-tittle">Contact Us Information</h2>
															
<table border="3">
  <tr>
  <th style="color : black">No.</th>
  <th>contact id</th>
  <th>name</th>
  <th>phone</th>
  <th>subject</th>
  <th>message</th>
  <th>Date</th>
  <th>Action  </th>
  </tr>
  <tr>
 <?php 
  $sql="SELECT * FROM contact_us";
  $ans=mysqli_query($con,$sql);
  $i=1;
  //$count=mysqli_num_rows($res);
  while($row=$ans->fetch_assoc())
   {
   	echo "<tr>";
   	echo "<td>".$i."</td>"; 
		echo "<td>".$row['contact_id']."</td>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['phone']."</td>";
		echo "<td>".$row['subject']."</td>";
		echo "<td>".$row['message']."</td>";
		echo "<td>".$row['date']."</td>";
		$i=$i+1;?>
		<td><a href='?del=<?php echo $row['contact_id']; ?>' onclick="return confirm('Are You Sure?');">DELETE</a></td>
										<!--//outer-wp-->
									</div>
								</div>
								</div>
							</div>
				<!--//content-inner-->
<?php
}
echo " </table>";
									 if(isset($_GET['del']))
									    {
                    					  $querya="DELETE FROM contact_us WHERE contact_id=".$_GET['del']."";
                    					  $resulta= mysqli_query($con,$querya);
					                       if($resulta)
					                       {
					      						 	if (!isset($_GET['reload'])) 
													 	{
                        					     echo '<meta http-equiv=Refresh content="0;url=contact.php">';
                       							 }
                    				 	      }
                					 }	
									?>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>