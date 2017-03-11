<!DOCTYPE html>
<html>
 <head>
  <title>確認画面</title>
 </head>
 <body>
<center>
入力内容を確認してください。<br/>
問題なければ下部にある『登録ボタン』を押下してください。<p/>
<form acticon="comp.php" method="POST">
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
 <input type="submit" value="登録" />
 <input type="hidden" name="day" value="<?php echo $_POST["day"] ?>" />
 <input type="hidden" name="time" value="<?php echo $_POST["time"] ?>" />
 <input type="hidden" name="l_name1" value="<?php echo $_POST["l_name1"] ?>" />
 <input type="hidden" name="l_name2" value="<?php echo $_POST["l_name2"] ?>" />
 <input type="hidden" name="f_name1" value="<?php echo $_POST["f_name1"] ?>" />
 <input type="hidden" name="f_name2" value="<?php echo $_POST["f_name2"] ?>" /> 
 <input type="hidden" name="company1" value="<?php echo $_POST["company1"] ?>" />
 <input type="hidden" name="company2" value="<?php echo $_POST["company2"] ?>" />
 <input type="hidden" name="mail" value="<?php echo $_POST["mail"] ?>" />
 <input type="hidden" name="tel" value="<?php echo $_POST["tel"] ?>" />
 <input type="hidden" name="destination" value="<?php echo $_POST["destination"] ?>" />
 <input type="hidden" name="staff" value="<?php echo $_POST["staff"] ?>" />
 <input type="hidden" name="cont" value="<?php echo $_POST["cont"] ?>" />
 </form>
  <br/>
  </center>
 </body>
</html>
