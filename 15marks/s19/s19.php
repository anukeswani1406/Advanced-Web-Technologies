/*
Slip no 19-3
Write a PHP script to accept a string and then display each word of string in reverse order.(use concept of self processing form)
*/

<html>
	<body>
		<form method=post action="<?php echo $_SERVER['PHP_SELF'] ?>">
		Enter String : <input type=text name=str1><br>
		<input type=submit name=submit>
		</form>

	<?php
		if(isset($_POST['submit']))
		{
		              $str=$_POST['str1'];
		              $nstr=strrev($str);
		              echo"<br>".$nstr;
		}
	?>
	</body>
</html>