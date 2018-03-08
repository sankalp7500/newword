<?php
session_start();
include 'db_connect.php'; 
$con=connect();

$name=trim($name=$con->real_escape_String($_REQUEST['name']));
$section=trim($section=$con->real_escape_String($_REQUEST['sec']));
$branch=trim($branch=$con->real_escape_String($_REQUEST['bran']));
$rollno=trim($rollno=$con->real_escape_String($_REQUEST['roll_no']));
$stuid=trim($stuid=$con->real_escape_String($_REQUEST['student_id']));
$passwd=trim($passwd=$con->real_escape_String($_REQUEST['password']));

if(isset($name) && isset($section) && isset($branch) && isset($rollno) && isset($stuid) && isset($passwd)) 
{
	if(!empty($name) && !empty($section) && !empty($branch) && !empty($rollno) && !empty($stuid) && !empty($passwd))
	{
		$sql="SELECT roll_no FROM members WHERE roll_no=$rollno";
		$res=mysqli_query($con,$sql);
		$count=mysqli_num_rows($res);
		if($count===1)
		{
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Member already exisits');\n";
			echo "window.location='admin.php'";
			echo "</script>";
		}
		else
		{
			$sql="INSERT INTO members (name, branch, section, roll_no, stu_id, password) VALUES ('$name', '$branch', '$section', $rollno, $stuid, '$passwd')";
			$res=mysqli_query($con,$sql);
			if($res)
			{
				echo "<script language=\"JavaScript\">\n";
				echo "alert('Record created');\n";
				echo "window.location='admin.php'";
				echo "</script>";
			}
			else
			{
				echo "<script language=\"JavaScript\">\n";
				echo "alert('Record  not created');\n";
				echo "window.location='admin.php'";
				echo "</script>";
			}
		}
	}
	else
	{
		echo "<script language=\"JavaScript\">\n";
		echo "alert('Fill all the details!');\n";
		echo "window.location='admin.php'";
		echo "</script>";
	}
}
else
{
	echo "<script language=\"JavaScript\">\n";
echo "alert('Error in form processing. Please fill again!');\n";
echo "window.location='admin.php'";
echo "</script>";
}
 
disconnect($con); 
?>