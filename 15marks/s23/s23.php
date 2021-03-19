<?php

	echo "Links data posted";
	$ele=$_GET['txtTitle'];
	$att=$_GET['publ'];

	$xmltags="<?xml version=1.0?>";
	$xmltags=$xmltags."<Bookstore>";
	$xmltags=$xmltags."<Books>";
	$xmltags=$xmltags."<PHP>";
	$xmltags=$xmltags."<title>";
	$xmltags=$xmltags.$ele;
	$xmltags=$xmltags."</title>";
	$xmltags=$xmltags."<publication>";
	$xmltags=$xmltags.$att;
	$xmltags=$xmltags."</attrib>";
	$xmltags=$xmltags."</PHP>";
	$xmltags=$xmltags."</Books>";
	$xmltags=$xmltags."</Bookstore>";

	if($fp=fopen("books.xml","w"))
	{
	            if($wt=fwrite($fp,$xmltags))
	            {
			echo "File created";
	            }
	            else
		              echo "Not write";
	}
	else
		echo "Not opened";
?>