<?php 
$a = 3;
$b = 5;
$c = 1;

echo "Giải phương trình bậc 2 ax^2 + bx + c = 0<br>";
echo "Với a = $a, b = $b, c = $c <br>";

if ($a == 0) {
	if ($b == 0 && $c == 0) {
		echo "Phương trình có vô số nghiệm.";
	} else if ($b == 0 && $c != 0){
		echo "Phương trình vô nghiệm.";
	} else {
		echo "Phương trình có nghiệm x = " . (-$c/$b);
	}
}else {
	$delta = $b *$b - 4 * $a * $c;
	if ($delta < 0) {
		echo "Phương trình vô nghiệm";
	} else if ($delta == 0) {
		echo "Phương trình có nghiệm kép x1 = x2 = " . (-$b/(2*$a));
	}else {
		$sqrtDelta = sqrt($delta);
		echo "Phương trình có hai nghiệm: <br> x1 = " . ((-$b + sqrt($delta))/(2 * $a)) . "<br>x2 = " . ((-$b - sqrt($delta))/(2 * $a));
	}
}
?>