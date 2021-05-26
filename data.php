<!DOCTYPE html>
<html>
<body>

<?php
$input = "Bài thứ nhất	<br>
Anh ăn cơm chưa?	<br>
Tôi đã ăn rồi. Tài mới ăn xong.	<br>
Anh ăn cơm với gì?	<br>
Tối ăn với cá.Tôi ăn cơm mắm thôi, không có gì khác.	<br>
Bài thứ hai	<br>
Anh ăn cơm chưa?	<br>
Tới chưa ăn.	<br>
Mời anh ăn với gia-đình tới tối nay Được,	<br>
được	<br>
Bài thứ ba	<br>
Ăn thêm đi.	<br>
Cám ơn, tôi ăn no rồi.	<br>
Anh uống nước trà đi.	<br>
Cám ơn, tôi uống rồi.	<br>
";

setlocale(LC_ALL, "en_US.utf8");
$output = iconv("utf-8", "ascii//TRANSLIT", $input);

print($output);
?>

</body>
</html>
