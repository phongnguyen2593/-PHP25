<?php 
$arr = array(1,4,2,6,9,100,45,8,20);
foreach ($arr as $key => $value) {
	echo $key . " : " . $value . "<br>";
}
$n = 0;
for ($i=0; $i < count($arr); $i++) { 
	if ($n < $arr[$i]) {
		$n = $arr[$i];
	}
}
echo "========================== <br>";
echo "Giá trị lớn nhất trong mảng là: " . $n;

 ?>