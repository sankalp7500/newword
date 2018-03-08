<?php
include 'db_connect.php';
$con=connect();

$name=trim($name=$con->real_escape_String($_REQUEST['name']));
$rollno=trim($rollno=$con->real_escape_String($_REQUEST['roll_no']));
$studid=trim($studid=$con->real_escape_String($_REQUEST['student_id']));

if(isset($name) && isset($rollno) && isset($studid))
{
	if(!empty($name) && !empty($rollno) && !empty($studid))
	{
		$sql="SELECT roll_no FROM members WHERE roll_no=$rollno";
		$res=mysqli_query($con,$sql);
		$count=mysqli_num_rows($res);
		if($count==0)
		{
			echo "<script language=\"JavaScript\">\n";
			echo "alert('Member does not exists');\n";
			echo "window.location='admin.php'";
			echo "</script>";
		}
		else
		{
			$sql="DELETE FROM members where name='$name' AND roll_no=$rollno AND stu_id=$studid";
			$res=mysqli_query($con,$sql);
			if($res)
			{
				echo "<script language=\"JavaScript\">\n";
				echo "alert('Record deleted');\n";
				echo "window.location='admin.php'";
				echo "</script>";
			}
			else
			{
				echo "<script language=\"JavaScript\">\n";
				echo "alert('Record  not deleted');\n";
				echo "window.location='admin.php'";
				echo "</script>";
			}
		}
	}
	else
	{
		echo "<script language=\"JavaScript\">\n";
		echo "alert('Fill in the details!');\n";
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