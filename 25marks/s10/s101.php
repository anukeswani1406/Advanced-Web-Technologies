<html>
	<body>
		<form action="s102.php" method="post">

		<center>
			<h2>Enter Marks for Student:</h2>
			<table>
				<tr><td>Java : </td><td><input type="text" name="m1"></td><tr>
				<tr><td>PHP : </td><td><input type="text" name="m2"></td></tr>
				<tr><td>ST : </td><td><input type="text" name="m3"></td></tr>
				<tr><td>IT : </td><td><input type="text" name="m4"></td></tr>
				<tr><td>Practical : </td><td><input type="text" name="m5"></td></tr>
				<tr><td>Project : </td><td><input type="text" name="m6"></td></tr>
				<tr><td></td><td><input type="submit" value=Next></td></tr>
			</table>
		</center>
		
		</form>
	</body>
</html>

<?php
	setcookie("stud1",$_POST['name'],time()+3600);
	setcookie("stud2",$_POST['addr'],time()+3600);
	setcookie("stud3",$_POST['class'],time()+3600);
?>