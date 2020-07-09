<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>

<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY</center> </u></b> </font>
<hr />
<hr />
<font face="Arial" size="+1" color="#3300FF" > <u> <b>REGISTRATION FORM </center> </u></b> </font>
<hr />
<hr />
<body style bgcolor="#FFFF99">

<A href="home_page_Admin.html">Home</A> 
<img src="registration.jpg" style="width:1300px;height:228px">
<table>
<tr align=center bgcolor="#FFFFFF">
<td>
<p align="right"></p>

<form name="f1" method="post">
<p align="left">
Name:
<br />
<input type="text" name="n1" value="first" /> <input type="text" name="n2" value="Last" />
</p>
<p align="left">
Address:<input type="text" name="n3"  />
</p>
<p align="left">
DOB:<input type="text" name="n4" />
</p>
<p align="left">
Gender:<input type="radio" value="Male" name="n5" >Male
<input type="radio" value="FeMale" name="n5" >FeMale
</p>
<p align="left">
Phone:<input type="text" name="n6" />
</p>
<p align="left">
Location:<input type="text" name="n7" />
</p>
<p align="left">
Username:<input type="text" name="n8" />
</p>
<p align="left">
Password:<input type="password" name="n9" />
</p>
<p align="left">
Confirm Password:<input type="password" name="n10" />
</p>
<br />
Type of User   <select name="s">
				<option value="Admin">Admin</option>
				<option value="Student">Student</option>
			</select>
</td>
</tr>
</table>
<br />
<br />
<input type="submit" value="submit" name="p1" />
<input type="submit"  value="cancel"name="p2" />
</form> 
<img src="registration1.jpeg" style="width:304px;height:228px">
<?php 
if(!empty($_POST['p1']))
{
	include_once("database_connection.php");

		$N=$_POST['n1'];
		$l=$_POST['n2'];
		$Name=$N." ".$l;
		$Address=$_POST['n3'];
		$DOB=$_POST['n4'];
		$Gender=$_POST['n5'];
		$Phone=$_POST['n6'];
		$Location=$_POST['n7'];
		$Username=$_POST['n8'];
		$Password=$_POST['n9'];
		$Confirm_Password=$_POST['n10'];
		$tou=$_POST['s'];
		
		$sql="insert into user_details(Name,Address,Dob,Username,Password,tou,location,Gender,Phone) values('$Name','$Address','$DOB','$Username','$Password','$tou','$Location','$Gender',$Phone)";
		
		if(!mysqli_query($con,$sql))
		 {
			die("Give different username");
		 }
	}
?>
</head>
</body>
</html>