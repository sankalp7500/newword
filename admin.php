<?php
session_start();
if(isset($_SESSION['name']) && isset($_SESSION['passwd']))
{ 
echo '
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body { background-color: #2a2727;
	color: white;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif; }
hr { color: #ffffff;  }
.wraphead { width: 100%; 
			height: 100%;}
.ubody { background-color: white;
		width: 100%;
		height: 200px;
		margin: 0;}
img { width: 80%;
		height: 170px;
		margin-left: 10%;
		}
#navig { position: fixed;
	height: 120px;
	width: 100%; }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
	background: linear-gradient(rgb(42,101,247), blue);
    
}
li {
    float: right;
}
li a { 
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #000000;
	font-size: 120%;
}
ul { width: 100%;
		border-radius: 8px;}

.lbody {margin: 0; 
		width:100%;
		height: auto; }
.col1{ width: 13%;
		height: 100%;
		float: left;
		border-radius: 8px;
		background-color: #2a2727;
		text-align: center;
		}
.col2{ width: 47%; height: auto;
		background-color: #302f2f;
		border-radius: 8px;
		float: left;
		text-align: center;
		}
.col4{ width: 40%; 
		background-color: #e8f1f2;
		border-radius: 8px;
		float: right;
		text-align: center;
		}
.col3{ width: 40%; 
		background-color: #202626;
		border-radius: 8px;
		float: left;
		text-align: center;
		}
form.inputform,input { color: black; 
				border-radius: 3px;
				font-weight: bold;}

footer { 
		clear: both;
		border-radius: 8px;
		background-color: #3a3f3f; }
header { background: linear-gradient(red, maroon);
		margin: 0;
		border-radius: 8px;
		width: 100%; height: 25px; 
		font-size: 1.2em;
		font-weight: bold; }
header.blogbody { background: linear-gradient(rgb(42,101,247), #2a2727);
		margin: 0;
		border-radius: 8px;
		width: 100%; height: 30px; 
		font-size: 1.2em;
		font-weight: bold; }
form.sort_by{float: right;
			font-size: 0.9em;
			 }
input.bloginp, select.bloginp { color: black;
		height: 70%;
		border-radius: 3px;
		font-weight: bold;}
table { cellpadding: 2px;
		cellspacing: 2px;
		color: black; 
		font-weight: bold;
		font-size: 0.9em; }
canvas
	{
	width: 60%;
	height: 550px;
	margin-top:1px;
	background-color:#2a2727;
	}
</style>
</head>
<body>

<div id="navig">
<ul>
<li><a href=""><i class="fa fa-question-circle-o" style="color: white;"></i></a></li>
<li><a href="logout.php"><i class="fa fa-sign-out" style="color: white;"></i>&nbsp;Log Out</a></li>
<li><a href=""><i class="fa fa-id-badge" style="color: white;"></i>&nbsp;Profile</a></li>
</ul>
</div>

<div class="ubody"  style="border-radius: 4px;">
<img src="logodit.jpg"></img>
</div>

<article class="lbody">

<div class="col1">
<header><strong>LINKS</strong></header>
<canvas>
<script type="text/javascript" src="demo7.js"></script>
</canvas>
<br><br><br><br><br><br><br><br>
</div>

<div class="col4">
<header class="manage"><center>MANAGE...</center></header><br>
<center>

<form class="inputform" action="addmember_process" method="post" name="form1">
<p style="color: black;"><em><strong>Add new member.</strong></em></p><br>
<table>
<tr><td>Name: </td><td><input type="text" name="name" value=" " /><td></tr>
<tr><td>Branch: </td><td><select class="bloginp" name="bran">
  <option value="branch">branch</option>
  <option value="CS">CS</option>
  <option value="CS-BDA">CS-BDA</option>
  <option value="CS-CCV">CS-CCV</option>
  <option value="MEC">MEC</option>
  <option value="CIVIL">CIVIL</option>
</select></td></tr>
<tr><td>Section: </td><td><select class="bloginp" name="sec">
  <option value="section">section</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
  <option value="F">F</option>
  <option value="G">G</option>
  <option value="H">H</option>
</select></td></tr>
<tr><td>Roll No.: </td><td><input type="number" name="roll_no" value=" " /><td></tr>
<tr><td>Student ID: </td><td><input type="number" name="student_id" value=" " /><td></tr>
<tr><td>Set OTP: </td><td><input type="text" name="password" value=" " /><td></tr>
</table>
<br>
<input type="submit" value="Add" name="Add" />
<br></form><hr>

<form class="inputform" action="remove_member.php" method="post" name="form2">
<p style="color: black;"><em><strong>Remove existing member.</strong></em></p><br>
<table>
<tr><td>*Name: </td><td><input type="text" name="name" value=" " /><td></tr>
<tr><td>*Roll No.: </td><td><input type="number" name="roll_no" value=" " /><td></tr>
<tr><td>Student ID: </td><td><input type="number" name="student_id" value=" " /><td></tr>
</table>
<br>
<input type="submit" value="Remove" name="Remove" />
<br></form><hr>

<form class="inputform" action=" " method="post" name="form3">
<p style="color: black;"><em><strong>Remove an Article</strong></em></p><br>
<table>
<tr><td>Article ID: </td><td><input type="number" name="article_id" value=" " /><td></tr>
</table>
<br>
<input type="submit" value="Remove" name="Remove" />
<br></form><hr>

<form class="inputform" action=" " method="post" name="form4">
<p style="color: black;"><em><strong>Remove Notes</strong></em></p><br>
<table>
<tr><td>Notes ID: </td><td><input type="number" name="notes_id" value=" " /><td></tr>
</table>
<br>
<input type="submit" value="Remove" name="Remove" />
<br>
<br><br>
</form>

</center>
</div>

<div class="col2">
<header class="blogbody">
<form class="sort_by" action=" " method="post" name="body_form">
Sort By: <select class="bloginp" name="bran" form="branform">
  <option value="year">year</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
<select class="bloginp" name="branch">
  <option value="branch">branch</option>
  <option value="CS">CS</option>
  <option value="CS-BDA">CS-BDA</option>
  <option value="CS-CCV">CS-CCV</option>
  <option value="MEC">MEC</option>
  <option value="CIVIL">CIVIL</option>
</select>
<select class="bloginp" name="sec" form="secform">
  <option value="section">section</option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
  <option value="E">E</option>
  <option value="F">F</option>
  <option value="G">G</option>
  <option value="H">H</option>
</select>
<input type="submit" class="bloginp" value="Go" name="submit_sort" />
</form>

</header><br>
<h2>body here</h2><br><p>every post comes in<br>a seperate division element<br>in white background<br>from backend<br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<div class="col3"><h2>events here</h2><br><p>events blocks<br>float here in time<br>sequence set in<br>
javascript <br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

</article>
<footer>This is Footer</footer>
</body>
</html>
';
}
else
	echo "<script language=\"JavaScript\">\n";
echo "alert('Log in please!');\n";
echo "window.location='public.html'";
echo "</script>";
?>
