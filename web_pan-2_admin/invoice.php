<?php
  $donate_id=$_GET['did'];
  session_start();
  include 'conn.php';
  $q = "select *from admin where admin_id='".$_SESSION['sess_uid']."'"; 
  $sql = mysqli_query($con,$q);
  $row=$sql->fetch_assoc();
  $temp=$row['admin_id'];
  $sql2="INSERT INTO invoice(donate_id,admin_id) VALUES ($donate_id,'$temp')";
  $ans=mysqli_query($con,$sql2);
  echo "<script type='text/javascript'>
			window.location.href='donate.php';
	</script>";
?>