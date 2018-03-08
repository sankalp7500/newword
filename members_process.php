<?php
session_start();
include 'db_connect.php'; 
$con=connect();
$name=preg_replace('/\s+/', '', $name=$con->real_escape_String($_REQUEST['memname']));
$password=preg_replace('/\s+/', '', $password=$con->real_escape_String($_REQUEST['pass']));

$_SESSION['name']=$name;
$_SESSION['passwd']=$password;

$sql="SELECT * FROM members WHERE name='$name' AND password='$password'";
$result=mysqli_query($con,$sql);
$c=mysqli_num_rows($result);
echo $c;

if($c==1)
{
	header('Location: members.php');
}
else
{
	echo "<script language=\"JavaScript\">\n";
	echo "alert('Username or Password was incorrect!');\n";
	echo "window.location='public.html'";
	echo "</script>";
	
}
 
 
disconnect($con); 
?>