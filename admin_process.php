<?php
session_start();
include 'db_connect.php'; 
$con=connect();

$admin_name=$con->real_escape_String($_REQUEST['username']);
$password=$con->real_escape_String($_REQUEST['password']);
$_SESSION['name']=$admin_name;
$_SESSION['passwd']=$password;
$sql="SELECT * FROM admins WHERE name='$admin_name' AND password='$password'";
$res=mysqli_query($con,$sql);
$count=mysqli_num_rows($res);
if($count!=1)
{   
	echo "<script language=\"JavaScript\">\n";
echo "alert('Username or Password was incorrect!');\n";
echo "window.location='public.html'";
echo "</script>";
	
}
else if($count==1)
{
	header('Location: admin.php');
}
 

 
disconnect($con); 
?>