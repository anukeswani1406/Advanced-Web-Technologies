<?php
            $ename=$_GET['ename'];

            $con=mysql_connect("localhost","root","");   
            $d=mysql_select_db("bca_programs",$con);    
            $q=mysql_query("select * from employee where ename='$ename'");  
           
            echo "<table border=1>";
            echo "<tr><th>Eno</th><th>Ename</th><th>Designation</th><th>salary</th></tr>";

            while($row=mysql_fetch_array($q))
            {
                        echo "<tr>";
                        echo "<td>".$row[0]."</td>";
                        echo "<td>".$row[1]."</td>";
                        echo "<td>".$row[2]."</td>";
                        echo "<td>".$row[3]."</td>";
                        echo "</tr>";
            }

            echo "</table>";
?>