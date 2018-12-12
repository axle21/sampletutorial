<?php

class check{

	var $checker;

	public function checkCapital(){

		$var = ctype_upper($this->checker);

		return $var ? "True" : "False";

	}
}


$var = new check();

$var->checker = "ABC";


echo $var->checkCapital();