/*
Slip no 8-3
Write a script to keep track of number of times the web page has been accessed
(use $_COOKIE).
*/

<?php
	if(isset($_COOKIE['cnt']))
	{
		$x=$_COOKIE['cnt'];
 		$x=$x+1;
  		setcookie('cnt',$x);
	}	
	else
	{
		setcookie('cnt',2);
		echo "you accessed this page 1st  time";
	}
	echo “You accessed this page  $_COOKIE['cnt']  times”;
?>