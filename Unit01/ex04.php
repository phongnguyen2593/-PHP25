<?php 

echo "<b>BẢNG CỬU CHƯƠNG<b><br>";
for ($i = 1; $i <= 10; $i++) { 
	for ($j = 2; $j < 10; $j++) { 
		echo "$j x $i = " . ($i * $j);
		echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
	}
	
	echo "<br>";
}
 ?>