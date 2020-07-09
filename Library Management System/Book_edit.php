<html>
<head>
<font face="Arial" size="+3" color="#3300FF" > <center> <u> <b>Library Information System</center> </u></b> </font>
<title>Library information system</title>
<body>
<br/>
<br/>
<hr/>
<hr/>

<br />
<br />
<body style bgcolor="#FFFF99">
<A href="home_page_Admin.html">Home</A> 
<br />
<br />
<br />
<br />

<form name="f1" method="post">
<input type="submit" value="Search" name="p1" />
</form>

<form name="f2" method="post">

<?php 


	
include_once("database_connection.php");
		
		
//for searching
if(!empty($_POST['p1']))
{
		$sql=mysqli_query($con,"select * from library order by ISBN_NO ");
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
		$p="p2";
		echo "</table>"."<input type=submit value=Edit name=".$p."/>";
}

?>
</form> 
 
 
<form name="f3" method="post" >
<?php


include_once("database_connection.php");
		
		
//for searching
if(!empty($_POST['r1']))
{
		$n=$_POST['r1'];
		$sql=mysqli_query($con,"select * from library where ISBN_NO='$n' ");
		$n1="n1";
		$n2="n2";
		$n3="n3";
		$n4="n4";
		$n5="n5";
		while($row=mysqli_fetch_row($sql))
		{
		echo "<table border=2><tr align=center bgcolor=#999999>";
		echo "<td>ISBN NO:<input type=text name=".$n1." value=".$row[0]." /><br/></td>";
		echo "<br />";
		echo "<td>BOOK NAME:<input type=text name=".$n2." value=".$row[1]." /><br/></td>";
		echo "<br />";
		echo "<td>AUTHOR NAME:<input type=text name=".$n3." value=".$row[2]." /><br/></td>";
		echo "<br />";
		echo "<td>PUBLISHER NAME:<input type=text name=".$n4." value=".$row[3]." /><br/></td>";
		echo "<br />";
		echo "<td>DEPERTMENT:<input type=Text name=".$n5." value=".$row[4]." /><br/></td>";
		echo "<br />";
		echo "</tr></table>";
		}
		$p="p3";
		echo "<input type=submit value=save name=".$p." />";
}
?>

</form>

<?php
include_once("database_connection.php");
if(!empty($_POST['p3']))
{	
		
		$ISBN_NO=$_POST['n1'];
		$BOOK_NAME=$_POST['n2'];
		$AUTHER=$_POST['n3'];
		$PUBLISHER=$_POST['n4'];
		$DEPERTMENT=$_POST['n5'];
		//for insert data in database
		$sql="update library set ISBN_NO=$ISBN_NO,BOOK_NAME='$BOOK_NAME',AUTHER='$AUTHER',PUBLISHER='$PUBLISHER',DEPERTMENT='$DEPERTMENT' where ISBN_NO=$ISBN_NO";
		if(!mysqli_query($con,$sql))
		 {
			die("connection failed");
		 }
		 else
		 echo "Updated Successfully";
	}
// AND
//AND AND  AND  

?>

</head>
</body>
</html>

