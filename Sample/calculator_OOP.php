<?php

class calculator {

	var $num1,$num2;

	public function __construct($var1,$var2){

		$this->num1 = $var1;
		$this->num2 = $var2;

	}

	public function add(){

		return $this->num1 + $this->num2;

	}


}


$calc = new calculator(2,2);

echo $calc->add();