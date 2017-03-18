<!DOCTYPE html>
<html>
 <head>
  <title>13966 OsumiWebsite</title>
 </head>
 <body>
  <?php
    // mysqlへのアクセス
    $mysqli = new mysqli("b1b8e502d991e6:3306","b1b8e502d991e6","e52e3992", "ad_0c532b3af6f2fe5");
    // sql文の発行
    $result = $mysqli->query("select * from test");
    // 取得した行分繰り返し
    while ($row = $result->fetch_row()) {
        //　テーブルの列分繰り返し 
　　　　　　　　　　　　　　　　for($i = 0; $i < mysqli_num_fields ( $result ); $i ++) {
            // 要素の表示
            echo "$row[$i]";
        }
    }
    // 結果を開放
    result->close();
    // 接続を閉じる
    $mysqli->close();
?>
  
  <h1>テストページです。</h1>
  <a href="form.htm">フォーム</a><br/>
  <a href="conf.htm">投稿後の画面</a><br/>
  <a href="comp.htm">確認画面</a><br/>
 </body>
</html>
