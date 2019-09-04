<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
foreach ($cars as $element) {
   echo "<h1>".$element."</h1>";;
}


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

//asort ksort arsort krsort

arsort($age);

foreach ($age as $key => $value) {
   echo "<h1>".$key."-----".$value."</h1>";
}

?> 