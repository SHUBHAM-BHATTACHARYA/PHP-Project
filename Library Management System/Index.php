<html>
<head>
<center><img src="skfgi logo.jpg" style="width:150px;height:150px"></center>
<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY INFORMATION SYSTEM</b></u></center>  </font></head>
<hr />
<font face="Times New Roman, Times, serif" size="-1" color="#990000"><marquee><b>Supreme Knowledge Foundation Group Of Institution</b></marquee></font>
<hr />
<br>
<body style bgcolor="#FFFF99">
<font face="Verdana, Arial, Helvetica, sans-serif" size="+2" color="#0000FF"><u>

<form name="f1" method="post">

<table>
<tr>
<td>
USER NAME:<input type="text" name="n1" />
</td>
</tr>
</table>
<table>
<tr>
<td>
PASSWORD:<input type="password" name="n2" />
</td>
</tr>
</table>
<input type="radio" value="Admin" name="p1">Admin
<img src="administrator.jpg" style="width:200px;height:100px">
<input type="radio" value="Student" name="p1">Student
<img src="student.jpg" style="width:200px;height:100px">
<img src="galary.jpg" style="width:650px;height:150px">
<br />
<input type="submit" name="submit" value="submit" >

</form>

<img src="LibraryBook.jpg" style="width:650px;height:550px">

<img src="books.jpg" style="width:650px;height:550px">
<br />

<br />
<hr>
<br />
<br />
<font face="Courier New, Courier, monospace" size="+2" color="#CCCCCC">
<table border="1">
<tr align=center bgcolor="#FFFF33">
<td>

</td>
</tr>
</table>
<br /> 


<hr>
<hr>
<br /> 



</body>
</html>


<?php

include_once("database_connection.php");


if(!empty($_POST['submit']))
{
$User_Name=$_POST['n1'];
$Password=$_POST['n2'];
$user=$_POST['p1'];

$sql=mysqli_query($con,"select Password,tou from user_details where Username='$User_Name'");

	while($row=mysqli_fetch_row($sql))
	{
	if(strcmp($row[0],$Password)==0)
		{
		if(strcmp($row[1],$user)==0 && strcmp($user,"Student")==0)
			{
			header("location:home_page.html");
			}
			elseif(strcmp($row[1],$user)==0 && strcmp($user,"Admin")==0)
			{
			header("location:home_page_Admin.html");
			}
			echo "Wrong User";
		}
		else
		echo "Wrong Password";
	}
}



?>
