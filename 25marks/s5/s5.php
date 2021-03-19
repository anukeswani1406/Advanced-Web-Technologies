/*
Slip no 5-3
Define a class Employee having private members – id, name, department, salary. Define parameterized constructors. Create a subclass called “Manager” with private member bonus. Create 6 objects of the Manager class and display the details of the manager having the maximum total salary (salary + bonus).
*/

<?php
	class Employee
	{
		private $eid,$ename,$edept,$sal;
		
		function __construct($a,$b,$c,$d)
		{
			$this->eid=$a;
			$this->ename=$b;
			$this->edept=$c;
			$this->sal=$d;
		}

		public function getdata()
		{
			return $this->sal;
		}

		public function display()
		{
			echo $this->eid."</br>";
			echo $this->ename."</br>";
			echo $this->edept."</br>";
			//echo $this->ename."</br>";
		}
	}
	
	class Manager extends Employee
	{
		private $bonus;
		public static $total1=0;
	
		function __construct($a,$b,$c,$d,$e)
		{
			parent::__construct($a,$b,$c,$d);
			$this->bonus=$e;
		}

		public function max($ob)
		{
			$sal=$this->getdata();
			$total=$sal+$this->bonus;
			
			if($total>self::$total1)
			{
				self::$total1=$total;
				return $this;
			}
			else
			{
				return $ob;
			}
		}

		public function display()
		{
			parent::display();
			echo self::$total1;
		}
	}

$ob=new Manager(0,"ABC","",0,0);

$ob1=new Manager(1,"ramdas","computer",28000,2000);
$ob=$ob1->max($ob);

$ob2=new Manager(2,"ramdas1","computer",30000,2500);
$ob=$ob2->max($ob);

$ob3=new Manager(3,"ramdas2","computer",32000,3000);
$ob=$ob3->max($ob);

$ob4=new Manager(4,"ramdas","computer",28000,4000);
$ob=$ob4->max($ob);

$ob5=new Manager(5,"ramdas","computer",28000,5000);
$ob=$ob5->max($ob);

$ob->display();

?>