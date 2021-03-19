<?php
            $c_name   =   $_GET['cname'];

            $con   =   mysql_connect("localhost","root","");
            $d   =   mysql_select_db("bca_programs",$con);
            $q   =   mysql_query("select student_slip_13.stud_id,stud_name,stud_class from student_slip_13,compitition_slip_13,sc_slip_13 where student_slip_13.stud_id=sc_slip_13.stud_id and sc_slip_13.c_no=compitition_slip_13.c_no and c_name='$c_name' and rank=1");

            echo "<table>";
            echo "<tr><td>Student Id   |</td><td>Student Name   |</td><td>Student Class</td></tr>";
           
            while($row   =   mysql_fetch_array($q))
            {
                        echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
            }
           
            echo "</table>";

            mysql_close();

?>