<?php
	$search=$_GET['s'];
	$con=mysql_connect("localhost","root","rsb");
	mysql_select_db("s13db",$con);
	$r=mysql_query("select * from slip13 where des='$search'");

	echo "<table align=center">
	while($row=mysql_fetch_array($r))
	{
		echo "<tr><td>".$row[0]."</td></tr>";
	}
	echo "</table>";
?>