<?php

class Calculator {
	var $_num1,$_num2;

	 public function __construct($var1,$var2){

		$this->_num1 = $var1;
		$this->_num2 = $var2;

	}


	public function add(){

		return $this->_num1 + $this->_num2;

	}
}



$num1 = 1;
$num2 = 1;


$calc = new Calculator($num1,$num2);
echo $calc->add();