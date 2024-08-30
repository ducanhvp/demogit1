<!DOCTYPE html>
<html lang="VN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 //bài 1
$x = "Tôi là Đức Anh";
$y = "Tôi là";
$f = "Xin chào";
echo "Số kí tự là: " ,strlen($x), "<br>";
//bài 2
echo "Số từ là: " ,str_word_count($x), "<br>";
//bài 3
echo "Đảo ngược: ",strrev($x), "<br>";
// bài 4
$z = strpos($x, $y);
if ($z !== false) {
    echo " Chuỗi con", $y, "được tìm thấy tại vị trí:", $z, "<br>";
}
else
{
    echo "không tìm thấy chuỗi con", $y, "<br>";
} 

// bài 7
echo "Chuỗi hoa là", strtoupper($x), "<br>";
// bài 9
echo "Viết hoa chữ cái đầu:", ucwords($x), "<br>";
//bài 14
$mang = array("Táo", "Cam", "Chuối");
$chuoi = implode(" ",$mang);

echo $chuoi, "<br>"; 
// bài 16
function endsWith($haystack, $needle) {
    $length = strlen($needle);
    if ($length > strlen($haystack)) {
      return false; // Nếu chuỗi con dài hơn chuỗi chính thì chắc chắn không thể kết thúc bằng chuỗi con
    }
    return substr($haystack, -1 * $length) === $needle;
  }
  
  $chuoi = "Xin chào thế giới";
  $chuoi_con = "giới";
  
  if (endsWith($chuoi, $chuoi_con)) {
    echo "Chuỗi kết thúc bằng chuỗi con", "<br>";
  } else {
    echo "Chuỗi không kết thúc bằng chuỗi con", "<br>";
  } 
  // bài 17
  function check_contains($haystack, $needle) {
    return strstr($haystack, $needle) !== true;
  }
  
  $chuoi = "Xin chào thế giới";
  $chuoi_con = "thế";
  
  if (check_contains($chuoi, $chuoi_con)) {
    echo "Chuỗi chứa chuỗi con", "<br>";
  } else {
    echo "Chuỗi không chứa chuỗi con", "<br>";
  }
  // bai 18
  function thaythe($str, $replacement) {
    return preg_replace('/[^a-zA-Z0-9]/', $replacement, $str);
  }
  
  $chuoi = "Tôi là 1 Đức Anh@^^^";
  $ky_tu_thay_the = "*";
  $chuoi_moi = thaythe($chuoi, $ky_tu_thay_the);
  
  echo $chuoi_moi;
    ?>
</body>
</html>