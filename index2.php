<?php
/* FUNCTION
1. Tác dụng của function: hàm có thể tái sử dụng nhiều lần, nên tránh khỏi việc viết code lặp đi lặp lại. Khi sử dụng hàm code nhìn sẽ rõ ràng, dễ đọc hơn
*/
// function với tham số không bắt buộc
 function myFullname($firstname = "Việt", $lastname = "Bắc") {
    echo "$firstname $lastname";
 }
 myFullname();

 // function với tham số bắt buộc
 function Fullname($firstname , $lastname ) {
    echo "$firstname $lastname";
 }
 Fullname("Việt", "Bắc");

 // function với giá trị trả về
 function Myname($firstname , $lastname ) {
    $name = "$firstname $lastname";
    return $name;
 }
 echo Myname("Việt", "Bắc");


// mảng
$color = array(
   'Black',
   'Red',
   'Blue',
   'yelow'
);
$value = $color[2];
echo $value;
unset($color[2]); // xóa phần tử khỏi mảng
$color[] = 'Bac'; // thêm phần từ vào mảng
echo '<pre>';
var_dump(implode(' ', $color)); // biến mảng thành chuỗi

$colorA = ("Do Xuan Bac");
var_dump(explode(' ', $colorA)); //biến chuỗi thành mảng

// chuỗi
$str = ('do xuan bac');
echo (addcslashes($str, 'a..z')."<br/>"); //chèn dấu /
echo strlen($str)."<br/>"; // đếm chuỗi
echo str_replace('xuan', 'viet', $str); // tìm và thay thế
echo str_repeat($str, 3);

