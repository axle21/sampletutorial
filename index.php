<?php
$arr = array('a','b','c','d');
echo count($arr);

for ($i = 0; $i <count($arr); $i++) {
     echo $arr[$i] . '<br />';
}


$explode = "1,2,3,4,5,6,7,8";

print_r (explode(",",$explode));
?>