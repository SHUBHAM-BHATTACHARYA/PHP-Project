<html>
<head>

<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY</center> </u></b> </font>
<hr />
</head>
<hr />
<font face="Arial" size="+1" color="#3300FF" > <u> <b>Select The ISBN No. to delete the details of the book  </center> </u></b> </font>
<hr />
<hr />
<A href="home_page_Admin.html">Home</A> 
<br />
<title> Delete the details the Book</title>
<body style bgcolor="#FFFF99">
<form name="f1" method="post">
<table border="2">
<tr align=center bgcolor="#999999">
<td>
ISBN_NO:<select name="n1">
<?php
include_once("database_connection.php");

		$sql=mysqli_query($con,"select ISBN_NO from library order by ISBN_NO");
		
		while($row=mysqli_fetch_row($sql))
		{
		echo "<option value='$row[0]'>";
		echo $row[0];
		echo "</option>";
		}
	?>
	</select>
<br />
</td>
<td>
<br />
<input type="submit" value="Delete" name="d1" />

</td>
</tr>
</table>
</form>

<form name="f2" method="post"> 
<?php 
if(!empty($_POST['d1']))
{
	
include_once("database_connection.php");
		$ISBN_NO=$_POST['n1'];
		//for delete
if(!empty($_POST['d1']))
{
	$sql=mysqli_query($con,"select * from library where ISBN_NO='$ISBN_NO'");
		echo "<table border=1><tr align=center><td> Select</td><td>ISBN NO</td><td> BOOK NAME </td><td> AUTHER</td><td> PUBLISHER</td><td> DEPARTMENT</td></tr>";
		while($row=mysqli_fetch_row($sql))
		{
		echo "<tr align=center>";
		echo "<td><input type=radio value=$row[0] name=r1 >";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "</tr>";
		}
		echo "</table>"; 
echo "<input type=submit value=CONFIRM name=c1 />";
}
}
?>


</form>
<?php
include_once("database_connection.php");
if(!empty($_POST['c1']))
{
	$ISBN_NO=$_POST['r1'];
	$sql="delete from library where ISBN_NO=$ISBN_NO";
		if(!mysqli_query($con,$sql))
		{
			die("connection failed");
		}
}
?>

</body>
</html>