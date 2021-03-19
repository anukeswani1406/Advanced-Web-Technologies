<?php
	$uname=$_GET['uname'];
	$password=$_GET['pwd'];

	$con=mysql_connect("localhost","root","") or die("I cannot connect");
	$d=mysql_select_db("bca_programs",$con);
	$q=mysql_query("select * from login");

	$n=0;
	while($row=mysql_fetch_array($q))
	{
	            if($row[0]==$uname && $row[1]==$password)
		            $n=1;
	}

	if($n==0)
		echo "invalid username or password";
?>