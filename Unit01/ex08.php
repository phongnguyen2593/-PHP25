<?php 
echo "Tam giác vuông góc phải trên: <br>";
for ($i=10; $i>=0; $i--) { 
	for ($j=9; $j>=0; $j--) { 
		if ($i <= $j) {
			echo "&nbsp&nbsp";
		}else {
			echo "#";
		}
	}
	echo "<br>";
}

 ?>