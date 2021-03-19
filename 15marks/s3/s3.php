/*
Slip no 3-3
Write a PHP script to demonstrate the introspection for examining class(use function get_declared_classes() ,get_class_methods() and get_class_vars()). 
*/


<?php
class intro
{
              var $i;
              function f1()    {}
              function f2()    {}
}

class intro_1 extends intro
{
              var $j,$k;
              function f3()    {}
              function f4()    {}
}

echo class_exists('intro');         //returns true if class is exist
var_dump(get_declared_classes());       //returns an array of all the class are define & declared in php including classes name
var_dump(get_class_methods('intro_1'));      //returns an array of methods in class intro_1
var_dump(get_class_methods('Exception'));     //returns an array of methods in class Exception
var_dump(get_class_vars('intro_1'));     //returns parent class of given class intro_1 if it is exists
var_dump(get_parent_class('intro_1'));      //reurns parent class of given class if it exist
var_dump(get_object_vars($ob));    //retuns an array of parameter / variables for given object
?>