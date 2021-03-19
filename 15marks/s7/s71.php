<?php
	echo "<h3>Employee Details</h3> ";

	echo "<b>Name : </b>".$_COOKIE['emp1']."<br>";
	echo "<b>Address : </b>".$_COOKIE['emp2']."<br>";
	echo "<b>Mobile No. : </b>".$_COOKIE['emp3']."<br>";

	echo "<b>Policy no. : </b>".$_POST['p_no']."<br>";
	echo "<b>Policy Name : </b>".$_POST['p_name']."<br>";
	echo "<b>Premium : </b>".$_POST['premium']."<br>";
?>