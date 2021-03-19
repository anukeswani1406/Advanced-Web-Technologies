<?php
            $ptitle  =  $_GET['ptitle'];

            $con  =  mysql_connect("localhost","root","");
            $d  =  mysql_select_db("bca_programs",$con);
            $q  =  mysql_query("select s_name from student_slip19,project where project_title='$ptitle' && student_slip19.p_group_no=project.p_group_no");

            echo "Student Name :<br>";
        
	while($row  =  mysql_fetch_array($q))
	{
                        echo $row['s_name'];
                   }

	mysql_close();

?>