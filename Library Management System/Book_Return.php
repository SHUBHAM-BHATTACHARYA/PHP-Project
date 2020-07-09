<html>
<head>

<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b> SKFGI LIBRARY</center> </u></b> </font>
<hr />
</head>
<hr />
<font face="Arial" size="+1" color="#3300FF" > <u> <b>Enter The ISBN No. to Return the book  </center> </u></b> </font>
<hr />
<hr />
<A href="home_page_Admin.html">Home</A> 
<br />
<title> Book Return</title>
<body style bgcolor="#FFFF99">
<form name="f1" method="post">
<br />
<br />

ISBN No.<input type="text" name="n1" />
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="s1" value="View Details" />
</form>

<form name="f2" method="post">
<?php
include_once("database_connection.php");
	
//for searching
session_start();
if(!empty($_POST['s1']))
{
		$ISBN=$_POST['n1'];
		$_SESSION['ISBN']=$ISBN;
		$s="select * from issue where ISBN_No=".$ISBN;
		$sql=mysqli_query($con,$s);
		$row=mysqli_fetch_row($sql);
		$s1="select * from library where ISBN_No=".$ISBN;
		$sql1=mysqli_query($con,$s1);
		$row1=mysqli_fetch_row($sql1);
		$s2="select * from user_details where Username='".$row[1]."'";
		$sql2=mysqli_query($con,$s2);
		$row2=mysqli_fetch_row($sql2);
		echo "<table border=1><tr align=center><td>ISBN NO</td><td> BOOK NAME </td><td> AUTHER</td><td> PUBLISHER</td><td> User name</td></tr>";
		
		echo "<tr align=center>";
		echo "<td>".$row1[0]."</td>";
		echo "<td>".$row1[1]."</td>";
		echo "<td>".$row1[2]."</td>";
		echo "<td>".$row1[3]."</td>";
		echo "<td>".$row2[0]."</td>";
		echo "</tr>";
		
		echo "</table>";
		echo "<br><br><input type=submit value=confirm name=s2>";
}

?>
</form>
</body>
</html>
<?php
if(!empty($_POST['s2']))
{
$ISBN=$_SESSION['ISBN'];
	$sql1="update library set ISSUED=0 where ISBN_NO=".$ISBN ;
	$sql="delete from issue where ISBN_NO=".$ISBN;
	if(mysqli_query($con,$sql1) && mysqli_query($con,$sql))
		 	echo "Return Successfully";
		else
		 echo " Try again";
	
}



?>