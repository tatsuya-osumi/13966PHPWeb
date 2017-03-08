<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php
    // mysqlへのアクセス
    $mysqli = new mysqli("$hostname:$port","$username","$password", "$name");
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
	<table>
		<tr>
			<td style='width: 30%;'>
				<img class = 'newappIcon' src='images/newapp-icon.png'>
			</td>
			<td>
				<h1 id = "message"><?php echo "Hello World! IN PHP"; ?></h1>
				<p class='description'></p> Thanks for creating a <span class="blue">PHP Starter Application</span>.
			</td>
		</tr>
	</table>
</body>
</html>
