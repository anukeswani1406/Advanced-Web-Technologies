/*
Slip no 25-4

Create a XML file which gives details of books available in “ABC Bookstore” from following categories. 
1) Technical
                    	2) Cooking
                    	3) Yoga
and elements in each category are in  the following  format
<Book>
	<Book_PubYear>	--------------</Book_PubYear>
	<Book_Title>	--------------</Book_Title>
	<Book_Author>	---------------</Book_Author>
</Book>
Save the file as “Book.xml” 
Create an application that reads “Book.xml” file into simple XML object. Display attributes and elements.
(Hint: Use simple_xml_load_file() function)	
*/


<?php
	$xml=simplexml_load_file("s25.xml") or die("eror:cannot create object");
	var_dump($xml);
?>