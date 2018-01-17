<?php
class house{

	public static $abdul = "abdul wali is a blogger";
	public static $name ="abdul wali";

	public $age = 28;

	public static function hello(){

		return self::$abdul;

	}

}
class shop extends house {

public function bye(){

	return parent::$name ;

}

}

echo shop::$name ;

?>