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
    $staff       = $_POST['staff];
    $cont        = $_POST['cont'];

$newData = $day . "\t" . $time . "\t" . $l_name1 . "\t" . $l_name2 . "\t" $f_name1 . "\t" $f_name2 ."\t"
           $company1 . "\t" . $comppany2 . "\t" . $mail . "\t" . $tel . "\t" . $destination . "\t" . $staff . "\t" . $cont . "\n";
           
$fp = fopen($dataFile.'a');
fwrite($fp,$newData);
fclose($fp);

}
?>
<!DOCTYPE html>
<html>
 <head>
  <title>確認画面</title>
 </head>
 <body>
<center>
入力内容を確認してください。<br/>
問題なければ下部にある『登録ボタン』を押下してください。<p/>
<form action="submit.php">
<table border="1"><tr><td>
  <table>
   <tr><th>入館希望時間:</th><td><?php echo $_POST["day"] ?> <?php echo $_POST["time"] ?></td></tr>
   <tr><th>ご芳名:</th><td><?php echo $_POST["l_name1"] ?> <?php echo $_POST["f_name1"] ?></td></tr>
   <tr><th>ﾌﾘｶﾞﾅ:</th><td>ｾｲ:<?php echo $_POST["l_name2"] ?>　ﾒｲ:<?php echo $_POST["f_name2"] ?></td></tr>
   <tr><th>貴社名:</th><td><?php echo $_POST["company1"] ?></td></tr>
   <tr><th>ﾌﾘｶﾞﾅ:</th><td><?php echo $_POST["company2"] ?></td></tr>
   <tr><th>ﾒｰﾙｱﾄﾞﾚｽ:</th><td><?php echo $_POST["mail"] ?></td></tr>
   <tr><th>電話番号:</th><td><?php echo $_POST["tel"] ?></td></tr>
   <tr><th>訪問先:</th><td><?php echo $_POST["destination"] ?></td></tr>
   <tr><th>担当者名:</th><td><?php echo $_POST["staff"] ?></td></tr>
   <tr><th>ご用件:</th><td><?php echo $_POST["cont"] ?></td></tr>
  </table></td></tr>
</table><br/>
<input type="submit" value="登録"/>
</form>
  <br/>
  </center>
 </body>
</html>
