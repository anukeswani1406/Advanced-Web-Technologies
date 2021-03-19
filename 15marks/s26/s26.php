<?php
	$rno=$_GET['rno'];
	$s_name=$_GET['s_name'];
	$cls=$_GET['cls'];

	$con=mysql_connect("localhost","root","");
	$d=mysql_select_db("bca_programs",$con);
	$q=mysql_query("insert into stud values($rno,'$s_name','$cls')");

	$q1=mysql_query("select * from stud order by sname");

	echo "<table>";
		echo "<tr><td>Roll no.</td><td>Name</td><td>Class</td></tr>";
		while($row=mysql_fetch_array($q1))
		{
		  echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
		}
	echo "</table>";

	mysql_close();
?>