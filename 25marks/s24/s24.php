/*
Slip no 24-4
Create  an application that reads “Book.xml” file into simple XML object. Display attributes and elements(Hint: use simple_xml_load_file() function)
*/

<?php
$xml=simplexml_load_file("s24.xml") or die("eror:cannot create object");
var_dump($xml);
?>