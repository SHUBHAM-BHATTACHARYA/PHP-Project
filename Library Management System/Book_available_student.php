<html>
<head>
<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY</center> </u></b> </font>
<hr />
<hr />
<font face="Arial" size="+1" color="#3300FF" > <u> <b>Available Book</center> </u></b> </font>
<hr />
<hr />
<title> Avilable Book</title>
<body style bgcolor="#FFFF99">
<A href="home_page.html">Home</A> 
<br />
<br />
<br />
<br />
<form name="f1" method="post">
<table border="2">
<tr align=center bgcolor="#999999">
<td>
BOOK_NAME:<select name="n2">
<?php
		include_once("database_connection.php");
		$sql=mysqli_query($con,"select BOOK_NAME from library order by BOOK_NAME");
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
</head>
</body>
</html>

<?php 
include_once("database_connection.php");
	
//for searching
if(!empty($_POST['a1']))
{
		$BOOK_NAME=$_POST['n2'];
		$sql=mysqli_query($con,"select * from library where BOOK_NAME='$BOOK_NAME'");
		echo "<table border=1><tr align=center><td>ISBN NO</td><td> BOOK NAME </td><td> AUTHER</td><td> PUBLISHER</td><td> DEPARTMENT</td></tr>";
		while($row=mysqli_fetch_row($sql))
		{
		echo "<tr align=center>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "</tr>";
		}
		echo "</table>";
}

?>