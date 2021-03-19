<?php

  	$nm=$_GET['nm'];

	  $eid=$_GET['eid'];

	  echo "<br>Capitalization of each word of each name :".ucwords($nm);

	$e=explode('@',$eid);

	If (count($e)==2)
	  {
	       echo "<br>Email id contains @ symbol ";
	  }
	else  
	        echo "<br>email id doesn’t contains  @ symbol  or contains  more @ symbol";
?>