/*
Slip no 26-4
Write a script to solve following questions (Use “Book.xml” file)
a) Create a DOM Document object and load this XML file.
b) Get the output of this Document to the browser
c) Save this [. XML] document in another format i.e. in [.doc]
d) Write a XML program to print the names of the books available in “Book.xml” file
*/

<?php
	$doc=new DOMDocument();
	$doc->load("s24.xml");
	$name=$doc->getElementsByTagName("book_name");

	echo "Books Names";
	foreach($name as $val)
	{
	            echo "<br>".$val->textContent;
	}
?>