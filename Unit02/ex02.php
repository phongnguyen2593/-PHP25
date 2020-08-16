<?php 
$arr = array(1,4,2,6,9,100,4,);

echo "Mảng đầu vào: ";
foreach ($arr as $key => $value) {
	echo $value . "\t";
}

echo "<br>";
echo "-------------------------<br>";
echo "Mảng in ra: ";
for ($i=(count($arr) - 1); $i >=0 ; $i--) { 
	echo $arr[$i] . "\t";
}
 ?>