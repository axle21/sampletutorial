<?php
	
	class NewClass{

		public $info = "Hello worlf";

		public function add($num1,$num2){

			return $num1 + $num2;


		}

		public function Number($Number)
		   {
		     echo "Phone Number is $Number"."<br/>";
		   }
	}


$class = new NewClass();

echo "Anser is : " . $class->add(1,1);

	$class->Number("123223");
    $class-> Number("234324");
    $class-> Number("345435");




?>

<?php
/*
 * The input is semi-colon separated fields, with the first
 * field being an ID to use as a key.
 */

$input = <<<'EOF'
1;PHP;Likes dollar signs
2;Python;Likes whitespace
3;Ruby;Likes blocks
EOF;

function input_parser($input) {
    foreach (explode("\n", $input) as $line) {
        $fields = explode(';', $line);
        $id = array_shift($fields);

        yield $id => $fields;
    }
}

foreach (input_parser($input) as $id => $fields) {
    echo "$id:\n";
    echo "    $fields[0]\n";
    echo "    $fields[1]\n";
}
?>