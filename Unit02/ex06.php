<?php 

function check_palindrome($str){
	if (strrev($str) == $str) { //strrev: đảo ngược chuỗi
		echo "Palindrome.";
	}else {
		echo "false";
	}
}
$str = "ABBA";
echo "Chuỗi đầu vào: ".$str;
echo "<br>---------------------<br>";
check_palindrome($str);
 ?>