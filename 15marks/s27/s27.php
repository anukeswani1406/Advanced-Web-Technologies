<?php
  $gm=$_GET['game'];

  $a=array("Hockey","Football","Cricket","Basket Ball","Kho-Kho","Tennis","Dough Ball");

  echo "<h3>List of Games<br></h3>";
  for($i=0;$i<count($a);$i++)
  {
              echo $a[$i]."<br>";
  }
?>