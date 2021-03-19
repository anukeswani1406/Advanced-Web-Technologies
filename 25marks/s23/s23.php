<?php
            $bno  =  $_GET['bno'];

            $con  =  mysql_connect("localhost","root","");
            $d  =  mysql_select_db("bca_programs",$con);

            $q  =  mysql_query("select * from bill_master where bill_no=$bno");

            echo "<center>";
            while($row  =  mysql_fetch_array($q))
            {
                        echo " <h3><br>Bill No : ".$row[0]."                             Bill Date : ".$row[2]."</h3>";
                        echo "<h3>Customer Name : ".$row[1]."</h3>";
            }

            $i=1;
            $gt=0;
            $q1=mysql_query("select item_name,qty,rate,discount from bill_details,bill_master where bill_details.bill_no=$bno and bill_details.bill_no=bill_master.bill_no");


            echo "<table border=1 width=30% height=10%>";
            echo "<tr><td><b> SrNo. </b></td> <td><b> Particular </b></td> <td><b> Quantity </b></td> <td><b> Rate </b></td> <td><b> Total </b></td></tr>";          
           
            while($row1=mysql_fetch_array($q1))
            {
                        $t=$row1[1]*$row1[2];
                        echo "<br><tr><td>".$i++."</td><td>".$row1[0]."</td><td>".$row1[1]."</td><td>".$row1[2]."</td><td>".$t."</td><tr>";
           
                        $gt+=$t;                       
            }          
           
            echo "</table>";
            echo "<br><b> Gross Ammount is :: ".$gt."</b>";
            echo "<center>";

            mysql_close();
?>