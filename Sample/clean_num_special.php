<?php 

class clean{
	var $clean;

	public function remove(){

		$numr =  preg_replace('/[^A-Za-z0-9\-]/', '', $this->clean);
		$chracterr =  preg_replace('/[0-9]+/', '' , $numr);

		return $chracterr;
	}
}


$var = new clean();

$var->clean =  "chah1212   %%$##2323a";

echo $var->remove();