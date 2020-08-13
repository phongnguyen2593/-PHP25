<?php 
$count = 0;
$i = 1;
$sum = 0;

echo "Tổng 10 số đầu tiên tính từ $i = " ;
while ($count < 10) {
	if ($i % 2 == 0) {
		$sum+=$i;
		$count++;
	}
	$i++;
}
echo $sum;

 ?>