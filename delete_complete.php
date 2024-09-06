<?php

try {

    $user = "root";
    $password = "";

    $dbh = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $stmt = $dbh->prepare('UPDATE account SET delete_flag = :delete_flag WHERE id = :id');

    $stmt->execute(array(':id' => $_POST["id"],':delete_flag' => $_POST['delete_flag']));

	$result= '削除完了しました';

} catch (Exception $e) {
		$result= 'エラーが発生しました' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>削除完了</title>
		<link rel="stylesheet" type="text/css" href="css/delete_complete.css">
	</head>
	<body> 
		<h1>アカウント削除完了画面</h1>
	
	<div class="complete">
    <p><?php echo $result; ?></p>
  	</div>

	<div class="button">
    <button onclick="location.href='index.php'">TOPページに戻る</button>
    </div>

  	</body>
</html>