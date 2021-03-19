/*
Slip no 1-3
Write a PHP program to create a simple calculator that can accept two numbers and perform operations like add, subtract, multiplication and divide (using Self Processing form)
*/

<html>
	<body>
		<FORM ACTION="<?php $_SERVER['PHP_SELF']; ?>" method="POST">

		<table>
			<tr><td><h3>Enter first no :</td><td><input type=text name=no1  ></h3></td></tr>
			<tr><td><h3>Enter second no :</td><td><input type=text name=no2></h3></td></tr>
			<tr><td><b>Select Operation which u have to perform :</b></td>

			<td><select name=cal>
			  <option value="1">Addition</option>
			  <option value="2">Substraction</option>
			  <option value="3">Multiplication</option>
			  <option value="4">Division</option>      
			  </select></td></tr>       
		
			<tr><td></td><td><input type=submit name=submit value=Calculate></td></tr>
		</table>
		
		</form>        
	</body>
</html>

<?php
  if(isset($_POST['submit']))
              {
                          $no1=$_POST['no1'];
                          $no2=$_POST['no2'];
                          $cal=$_POST['cal'];
             
                          if((!empty($no1)) && (!empty($no2)))
                          {
                                      switch($cal)
                                      {
                                                  case 1:$add=$no1+$no2;
                                                              echo "<h1>addition=".$add."</h1>";
                                                                          break;
 
                                                  case 2:$sub=$no1-$no2;
                                                              echo "<h1>subtraction=".$sub."</h1>";
                                                                          break;

                                                  case 3:$mult=$no1*$no2;
                                                              echo "<h1>multiplication=".$mult."</h1>";
                                                                          break; 
             
                                                                                     
                                                  case 4:$div=$no1/$no2;
                                                                          echo "<h1>division=".$div."</h1>";
                                                                          break;
 

                         
                                      }                                  
                          }
                          else echo "<b>Please enter both 2 nos</b>";     
              }
              else
              die("not able to acccess");
  ?>