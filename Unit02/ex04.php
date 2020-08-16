<?php 
function standardize($str){
	$str = trim($str);
	//Hàm ucwords: viết hoa chữ cái đầu của mỗi từ được ngăn bởi space
	$str = ucwords(mb_strtolower($str, 'UTF-8'));
	echo $str;

}
$str =  "  vŨ văN thƯơNg  ";
echo "Chuỗi đầu vào: " . $str;
echo "<br>--------------------<br>";
echo "Chuỗi được chuẩn hóa: ";
standardize($str);

// Chữ có dấu mình thử nhưng không thể từ chữ hoa thành chữ thường 
// thế nên mình để toàn bộ chữ không dấu.
 ?>