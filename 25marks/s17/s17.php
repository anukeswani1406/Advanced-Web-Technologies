<?php
	$con=mysql_connect("localhost","root","") or die("I cannot connect");      //echo "connected successfuly";
	$d=mysql_select_db("bca_programs",$con);
	$q=mysql_query("select * from login");

	$emailid=$_REQUEST['emailid'];       //echo $emailid;
	$password=$_REQUEST['password'];    

	$n=0;
	while($row=mysql_fetch_array($q))
	{
	            if($row[0]==$emailid && $row[1]==$password)
		            $n=1;
	}

	if($n==1)
		echo "<center><h3>WELCOME USER</h3><center>";
	 else
	             echo "<i>Emailid or Password Missmatch</i>";
?>