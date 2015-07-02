<?php 
class Human {
	public $name;
	public function __construct($out_name){
		$this->name=$out_name;
	}
	public function sayHello(){
		echo "Hello, ".$this->name."<br>";
	}

	public function __clone(){
		echo "Chelovek ".$this->name." was cloned"."<br>";
	}

}
$John= new Human("John");
$Mike = new Human("Mike");
$John->sayHello();
$Mike->sayHello();
$mark= clone $Mike;
$mark->sayHello();
/***/
class KJK {
	public function __invoke($val){
		return $val * $val;
	}
	public function __toString()
	{
		return " ".__CLASS__;
	}
}
$x = new KJK();
echo $x;
echo "<br>";
echo $x(5);



