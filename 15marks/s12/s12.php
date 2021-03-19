/*
Slip no 12-3

Write a PHP script for the following: Design a form to accept a number from the user. Perform the operations and  show the results. 
1)	Factorial of a number using Recursion. 
2)	Add the digits of that number to reduce it to single digit.
(use the concept of self processing page.)
*/

<html>
	<head>
		<title>slip12</title>
	</head>

	<body>
		<?php
			if($_SERVER['REQUEST_METHOD']=="GET")
			{
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']?>" method=POST>
		<input type name=txtnumber placeholder="Enter a number ">
		<input type=submit value="calculate">
		</form>

		<?php
			}

			else if($_SERVER['REQUEST_METHOD']=="POST")
			{	
			              function fact($n)
			              {
			                          if($n==1)
			                          {
		                                                  return 1;
			                           }
			                          else 
				       {
					 return($n*fact($n-1));
                                                             	       }
              			             }
		
			            function singleval($n)
			           {
			                          while($n>9)
			                          {
					$sum=0;
						while($n)                                      	                  
				                               {
			                                                  $r=$n%10;
                                                			  $sum=$sum+$r;
			                                                  $n=$n/10;
				                                }          
			                                 $n=$sum;                               
			                          }
		                          return $n;                    
			         }

		              echo fact($_POST['txtnumber']);
		              echo "</br>";
		              echo singleval($_POST['txtnumber']);
			}
		?>
	</body>
</html>