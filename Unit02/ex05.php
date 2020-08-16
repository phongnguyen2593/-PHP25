<?php 
function split_name($fullName){
	//cắt bỏ khỏng trống 2 đầu, viết hoa chữ cái đầu tiên
	$fullName = trim(ucwords($fullName));
	//chia các từ trong họ tên cho vào mảng
	$arr_name = explode(" ", $fullName);
	
	$firstName = $arr_name[count($arr_name) - 1];
	$lastName = $arr_name[0];
	
	$middleName = "";
	for ($i=1; $i < count($arr_name) -1 ; $i++) { 
		$middleName = $middleName . $arr_name[$i] . " ";
	}

	echo "Họ: " . $lastName . "<br>";
	echo "Tên đệm: " . $middleName . "<br>";
	echo "Tên: " . $firstName;
}


$str = "nguyen ngoc phong";
echo "Họ tên đầu vào: " . $str;
echo "<br>---------------------<br>";
split_name($str);

 ?>