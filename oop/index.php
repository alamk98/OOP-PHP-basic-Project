<?php

class house
{	
	public $name = "abdul wali";
	public $age = 28;

protected $dude = "abdul wali";

private $dud = "abdul wali is youtuber";
	function hello()
	{
		echo "hello world ";
	}
}

class door extends house{

	public function fullname(){

		return $this->dude ;
	}
}

$obj = new house();
$ob = new door();


echo $obj->name ." is ".$obj->age ." years old <br>";
echo $obj->hello();

echo $obj->name ." is ".$ob->age ." years old <br>";
echo $ob->fullname();



?>