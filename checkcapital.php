<?php

class check{

	var $checker;

	public function checkCapital(){

		if(ctype_upper($this->checker)){

			return "TRUE";

		} else {

			return "FAlSE";
		}
	}
}


$var = new check();

$var->checker = "abcd";


echo $var->checkCapital();