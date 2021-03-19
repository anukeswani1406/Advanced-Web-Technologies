<?php
	$nm=$_GET['n'];
	$ps=$_GET['p'];

	if($nm==$ps)
	{
		echo "correct";
	}
	else if(isset($_COOKIE['cnt']))
	{
		$x=$_COOKIE['cnt'];
		$x=$x+1;
		setcookie('cnt',$x);
		echo $_COOKIE['cnt'];

		if($_COOKIE['cnt']>=3)
			setcookie('cnt',1);                               
	}
	else
	{
		setcookie('cnt',1);
		echo "1";
	}
?>