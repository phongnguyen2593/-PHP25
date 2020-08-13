<?php 
$a = 3;
$b = 5;

echo "Giải phương trình bậc nhất ax + b = 0 với a = $a, b = $b";
echo "<br><br>";
if ($a == 0) {
	if ($b == 0) {
		echo "Phương trình có vô số nghiệm.";
	}else {
		echo "Phương trình vô nghiệm.";
	}
}else {
	echo "Phương trình có nghiệm x = " . (-$b/$a);
	
} 
 ?>