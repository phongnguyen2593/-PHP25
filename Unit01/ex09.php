<?php 
echo "Tam giác vuông góc phải dưới: <br>";
for ($i=0; $i<=10; $i++) { 
	for ($j=0; $j<=10; $j++) { 
		if ($j < 10 - $i) {
			echo "&nbsp&nbsp";
		}else {
			echo "#";
		}
	}
	echo "<br>";
}

 ?>