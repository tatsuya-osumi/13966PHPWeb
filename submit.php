<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>アドレス登録</title>
</head>
<body>
<?php

$con = mysql_connect('us-cdbr-iron-east-03.cleardb.net:3306', 'b1b8e502d991e6', 'e52e3992');
if (!$con) {
  exit('データベースに接続できませんでした。');
}

$result = mysql_select_db('phpdb', $con);
if (!$result) {
  exit('データベースを選択できませんでした。');
}

$result = mysql_query('SET NAMES utf8', $con);
if (!$result) {
  exit('文字コードを指定できませんでした。');
}

$day         = $_REQUEST['day'];
$time        = $_REQUEST['time'];
$l_name1     = $_REQUEST['l_name1'];
$f_name1     = $_REQUEST['f_name1'];
$l_name2     = $_REQUEST['l_name2'];
$f_name2     = $_REQUEST['f_name2'];
$company1    = $_REQUEST['company1'];
$company2    = $_REQUEST['company2'];
$mail        = $_REQUEST['mail'];
$tel         = $_REQUEST['tel'];
$destination = $_REQUEST['destination'];
$staff       = $_REQUEST['staff'];
$cont        = $_REQUEST['cont'];

$result = mysql_query("INSERT INTO address(day, time, l_nama1, f_name1, l_name2,f_name2, company1, company2, mail, tel, destination, staff, cont) VALUES('$day', '$time', '$l_nama1', '$f_name1', '$l_name2','$f_name27, '$company1', '$company2', '$mail', '$tel', '$destination', '$staff', '$cont')", $con);
if (!$result) {
  exit('データを登録できませんでした。');
}

$con = mysql_close($con);
if (!$con) {
  exit('データベースとの接続を閉じられませんでした。');
}

?>
<p>登録が完了しました。<br /><a href="top.php">戻る</a></p>
</body>
</html>
