<!DOCTYPE html>
<html>
 <head>
  <title>登録完了</title>
 </head>
 <body>
  <?php

$con = mysql_connect("$hostname:$port","$username","$password", "$name");
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
<center>
入館の予約を受け付けました。<BR/>
ご登録いただきましたメールアドレスに<br/>入館予約用のＱＲコードを送らせていただきます。<BR/><br/>
来館当日、受付にて<br/>
ＱＲコードを印刷したものを提出していただくか、<br/>
スマートフォンの画面にて表示させてください。<BR/><br/>
ご利用ありがとうございました。<p/>
<input type="submit" value="戻る">
 </center>
  <br/>
 </body>
</html>
