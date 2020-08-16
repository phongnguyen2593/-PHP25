<?php 
function sort_array($arr1){
	for ($i = 0; $i < count($arr1) - 1; $i++) { 
		for ($j = ($i + 1); $j < count($arr1); $j++) { 
			if ($arr1[$i] > $arr1[$j]) {
				$n = $arr1[$j];
				$arr1[$j] = $arr1[$i];
				$arr1[$i] = $n;
			}
		}
	}
	foreach ($arr1 as $key => $value) {
		echo $value . "\t";
	}
	
}

$arr = array(1,4,2,6,9,100,4,);

echo "Mảng đầu vào: ";
foreach ($arr as $key => $value) {
	echo $value . "\t";
}

echo "<br>-------------------------<br>";
echo "Mảng được sắp xếp: ";
sort_array($arr);

?>