<?php 

$n = 4;
$sum = 0;
$giaiThua = 1;
echo "Tính S = 1/1! + 2/2! + ... n/n! với n = $n <br>";
for ($i=1; $i <= $n; $i++) { 
	$giaiThua*=$i;
	$sum+=($i/$giaiThua);
}
echo "S = $sum";
 ?>