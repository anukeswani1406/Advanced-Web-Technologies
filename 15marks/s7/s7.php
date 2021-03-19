<html>
	<body>
		<form action="s71.php" method="post">

		<center>
			<h2>Enter LIC Information :</h2>

			<table>
				<tr><td>Policy no. : </td><td><input type="text" name="p_no"></td><tr>
				<tr><td>Policy Name : </td><td><input type="text" name="p_name"></td></tr>
				<tr><td>Premium : </td><td><input type="text" name="premium"></td></tr>
				<tr><td></td><td><input type="submit" value=Next></td></tr>
			</table>
		</center>

		</form>
	</body>
</html>

<?php
	setcookie("emp1",$_POST['name'],time()+3600);
	setcookie("emp2",$_POST['addr'],time()+3600);
	setcookie("emp3",$_POST['mob_no'],time()+3600);
?>