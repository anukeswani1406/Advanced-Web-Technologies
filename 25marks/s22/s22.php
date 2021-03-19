<?php
            $r  =  $_GET['a'];
           
            $con  =  mysql_connect("localhost","root","");
            $d  =  mysql_select_db("bca_programs",$con);

            if($r == 1)
            {
                        $actor_name  =  $_GET['nm'];
                        $q  =  mysql_query("select m_name from movie,actor,movie_actor where movie.m_no=movie_actor.m_no and actor.a_no=movie_actor.a_no and a_name='$actor_name'");

                        echo "<br>Movie Name </br>";
                        while($row=mysql_fetch_array($q))
                        {
                                    echo $row[0]."<br>";
                        }
            }
                        else if($r == 2)
                        {
                                    $m_no  =  $_GET['m_no'];
                                    $m_name  =  $_GET['m_nm'];
                                    $r_yr  =  $_GET['r_yr'];
                                    $a_no  =  $_GET['a_no'];
                                    $a_name  =  $_GET['a_nm'];

                                    $q  =  mysql_query("insert into movie values($m_no,'$m_name',$r_yr)");
                                    $q1  =  mysql_query("insert into actor values($a_no,'$a_name')");
                                   
		echo "Value Inserted";
                        }

            mysql_close();
?>