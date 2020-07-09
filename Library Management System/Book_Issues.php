<html>
<head>
<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY</center> </u></b> </font>
<hr />
<hr />
<font face="Arial" size="+1" color="#3300FF" > <u> <b>Book Issues</center> </u></b> </font>
<hr />
<hr />
<title>Book Issues</title>
<body style bgcolor="#FFFF99">
<A href="home_page_Admin.html">Home</A> 
<br />
<img src="Book Issues.jpg" style="width:1300px;height:228px">
<form name="f3" method="post">
<table>
<tr>
<td>
User_Id:<input type="text" name="n2" />
<input type="submit" value="Enter" name="a2" />
<?php 	
include_once("database_connection.php");		
//for searching 3
session_start();
if(!empty($_POST['a2']))
{	
	{
		$Student_Id=$_POST['n2'];
		$sql=mysqli_query($con,"select * from user_details where username='$Student_Id'");
		echo "<table border=1><tr align=center><td> User Name </td><td>Phone Number</td></tr>";
		while($row=mysqli_fetch_row($sql))
		{
		echo "<tr align=center>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[8]."</td>";
		echo "</tr>";
		$_SESSION['uid']=$row[3];
		$_SESSION['name']=$row[0];
		}
		echo "</table>";
		}
}
//print_r($_SESSION);

?>
</form>

<form name="f1" method="post">
<table border="2">
<tr align=center bgcolor="#999999">
<td>
BOOK_NAME:<select name="n2">
<?php
//session_start();

		include_once("database_connection.php");
		$sql=mysqli_query($con,"select DISTINCT(BOOK_NAME) from library order by BOOK_NAME");
		while($row=mysqli_fetch_row($sql))
		{
		echo "<option value='$row[0]'>";
		echo $row[0];
		echo "</option>";
		}
	
?>
	</select>

<br />
<br />
<br />
<br/>
<input type="submit" value="Search" name="a1" />
</form>

</td>
</tr>
</table>
<br />


</body>
</html>
<form name="f2" method="post">
<?php 
include_once("database_connection.php");
	
//for searching
//print_r($_SESSION);
if(!empty($_POST['a1']))
{
echo "HI ".$_SESSION['name']."</br>";
		$BOOK_NAME=$_POST['n2'];
		$sql=mysqli_query($con,"select * from library where BOOK_NAME='$BOOK_NAME' AND ISSUED=0");
		echo "<table border=1><tr align=center><td>ISBN NO</td><td> BOOK NAME </td><td> AUTHER</td><td> PUBLISHER</td><td> DEPARTMENT</td><td> Select</td></tr>";
		$r="r1";
		while($row=mysqli_fetch_row($sql))
		{
		echo "<tr align=center>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "<td><input type=radio name=".$r." value=".$row[0]."></td>";
		echo "</tr>";
		}
		echo "</table>";
		$a="a";
echo "<input type=submit value=Issues name=".$a." />";
}


?>
</form>

<?php 	
include_once("database_connection.php");		
//for searching 4
if(!empty($_POST['a']))
{	
	{
		$ISBN_NO=$_POST['r1'];
		$uid=$_SESSION['uid'];
		$sql="insert into issue(ISBN_NO,Username) values($ISBN_NO,'$uid')";
		$sql1="update library set ISSUED=1 where ISBN_NO=".$ISBN_NO ;
		if(mysqli_query($con,$sql) && mysqli_query($con,$sql1))
		 	echo "Issued Successfully";
		else
		 echo " Not Issued Successfully";
	}
		session_destroy();
}


?>
</form>

</td>
</tr>
</table>
</form>