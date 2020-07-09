<html>
<head>

<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY</center> </u></b> </font>
<hr />
<hr />
<font face="Arial" size="+1" color="#3300FF" > <u> <b>Information of Books</center> </u></b> </font>
<hr />
<hr />
<A href="home_page_Admin.html">Home</A> 
<br />
<title> Insert Book</title>
<body style bgcolor="#FFFF99">
<img src="library.jpg">
<table border="2">
<tr align=center bgcolor="#999999">
<td>
<form name="f1" method="post">
<td>
ISBN NO:<input type="text" name="n1" />
<br />
</td>
<br />
<td>
BOOK NAME:<input type="text" name="n2"  />
<br />
</td>
<br />
<td>
AUTHOR NAME:<input type="text" name="n3" />
<br />
</td>
<br />
<td>
PUBLISHER NAME:<input type="text" name="n4" />
<br />
</td>
<br />
<td>
DEPERTMENT:<input type=" Text" name="n5" />
<br />
</td>
<br />
<td>
<input type="submit" value="submit" name="p1" />
<input type="submit"  value="cancel"name="p2" />
</td>
</form> 
<?php 
if(!empty($_POST['p1']))
{

		include_once("database_connection.php");
		$ISBN_NO=$_POST['n1'];
		$BOOK_NAME=$_POST['n2'];
		$AUTHER=$_POST['n3'];
		$PUBLISHER=$_POST['n4'];
		$DEPERTMENT=$_POST['n5'];
		$I=0;
		$sql="insert into library(ISBN_NO,BOOK_NAME,AUTHER,PUBLISHER,DEPERTMENT,ISSUED) values($ISBN_NO,'$BOOK_NAME','$AUTHER','$PUBLISHER','$DEPERTMENT',$I)";
		if(!mysqli_query($con,$sql))
		 {
			die("ISBN Number is Exist");
		 }
}


?>
</td>
</tr>
</table>
</head>

</body>
</html>