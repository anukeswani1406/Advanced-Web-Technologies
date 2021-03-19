<?php
	define('pi',3.14);

	abstract class shape
	{
		abstract function calc_area($r,$h);
 		abstract function calc_vol($r,$h);
	}

	class sphere extends shape
	{
  		function calc_area($r,$r)
  		{
		              return 4*pi*$r*$r;        
		}

  		function calc_vol($r,$r)
  		{
		              return (4/3)*pi*$r*$r*$r;
  		}
	}

	class cylinder extends shape
	{
  		function calc_area($r,$h)
  		{
		              return 2*pi*$r*($r+$h);           
  		}

  		function calc_vol($r,$h)
  		{
		              return pi*$r*$r*$h;
  		}
	}

	class cone extends shape
	{
		function calc_area($r,$h)
		{
		              return 0.5*$r*$r*$h;    
		}

		function calc_vol($r,$h)
		{
		              return $r*$r*$r*$h;
		}
	}

	$r=$_GET['r'];
	$h=$_GET['h'];
	
	$ob=new cone();
	echo "Area of cone ".$ob->calc_area($r,$h);
	echo "</br>";
	echo "Volume of cone ".$ob->calc_vol($r,$h);
	echo "</br>";
	
	$ob=new cylinder();
	echo "Area of cylinder ".$ob->calc_area($r,$h);
	echo "</br>";
	echo "Volume of cylinder".$ob->calc_vol($r,$h);
	echo "</br>";

	$ob=new sphere();
	echo "Area of sphere ".$ob->calc_area($r,$r);
	echo "</br>";
	echo "Volume of sphere ".$ob->calc_vol($r,$r);
?>