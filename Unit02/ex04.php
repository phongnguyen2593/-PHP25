<?php 
function standardize($str){
	$str = trim($str);
	//Hàm ucwords: viết hoa chữ cái đầu của mỗi từ được ngăn bởi space
	$str = ucwords(strtolower($str));
	echo $str;

}
$str =  "  vU vaN thUoNg  ";
echo "Chuỗi đầu vào: " . $str;
echo "<br>--------------------<br>";
echo "Chuỗi được chuẩn hóa: ";
standardize($str);

// Chữ có dấu mình thử nhưng không thể từ chữ hoa thành chữ thường 
// thế nên mình để toàn bộ chữ không dấu.
 ?>