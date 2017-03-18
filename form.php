<?php

$dataFile = 'a.dat';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $day         = $_POST['day'];
    $time        = $_POST['time'];
    $l_name1     = $_POST['l_name1'];
    $f_name1     = $_POST['f_name1'];
    $l_name2     = $_POST['l_name2'];
    $f_name2     = $_POST['f_name2'];
    $company1    = $_POST['company1'];
    $company2    = $_POST['company2'];
    $mail        = $_POST['mail'];
    $tel         = $_POST['tel'];
    $destination = $_POST['destination'];
    $staff       = $_POST['staff7];
    $cont        = $_POST['cont'];

$newData = $day . "\t" . $time . "\t" . $l_name1 . "\t" . $l_name2 . "\t" $f_name1 . "\t" $f_name2 ."\t"
           $company1 . "\t" . $comppany2 . "\t" . $mail . "\t" . $tel . "\t" . $destination . "\t" . $staff . "\t" . $cont . "\n";
           
$fp = fopen($dataFile,'a');
fwrite($fp,$newData);
fclose($fp);

}

?>

<!DOCTYPE html>
<html lang="ja">
 <head>
  <title>入館予約受付画面</title>
  <meta charset="UTF-8"/>
 </head>
 <body>
 <center>
産経新聞社　入館予約登録
 <form action="" method="post">
  <table border="1">
   <tr><th>入館希望時間</th>
       <td><input type="date" name="day" autofocus> <input type="time" min="09：00" max="23：30" name="time" /></td>
   </tr>
   <tr>
    <th>ご芳名</th>
    <td>姓<input type="text" name="l_name1">名<input type="text" name="f_name1"></td>
   </tr>
   <tr>
    <th>ﾌﾘｶﾞﾅ</th>
    <td>ｾｲ<input type="text" name="l_name2">ﾒｲ<input type="text" name="f_name2"></td>
   </tr>
   <tr>
    <th>貴社名</th>
    <td><input type="text" size="50" name="company1"></td>
   </tr>
   <tr>
    <th>ﾌﾘｶﾞﾅ</th>
    <td><input type="text" size="50" name="company2"></td>
   </tr>
   <tr>
    <th>ﾒｰﾙｱﾄﾞﾚｽ</th>
    <td><input type="mail" name="mail"> <font size="-1">*受付完了メールが送信されます</font></td>
   </tr>
   <tr>
    <th>電話番号</th>
    <td><input type="tel" name="tel"></td>
   </tr>
   <tr>
    <th>訪問先</th>
    <td><input type="text" size="50" name="destination"></td>
   </tr>
   <tr>
    <th>担当者名</th>
    <td><input type="text" name="staff"></td>
   </tr>
   <tr>
    <th>ご用件</th>
    <td><input type="text" size="50" name="cont"></td>
   </tr>
  </table><br/>
  <input type="submit" value="確認画面へ">
  </form>
  </center>
 </body>
</html>
