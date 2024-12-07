<?php
    session_start();
    if(isset($_SESSION['employee_num'])) {
    } else {
        header('Location: kanri_login.php');
    }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>在庫編集</title>
    在庫修正　※半角数字のみ
    <br>
    <br>
    <?php
	//データベースに接続
            $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
        //SQL文(商品情報取得するための変数)
            $sql = 'select name,quantity,item_code  from item ';
        //SQLを実行するための準備
            $sth = $pdo->prepare($sql);
        //SQL実行
            $sth->execute();
        //
            $result = $sth->fetchAll();
            foreach ($result as $row){

                    $set_code=$row['item_code'];
                    $set_name=$row['name'];	
                    $set_quantity=$row['quantity'];

					echo $set_name;
					echo '<br>';
                    echo '現在個数　';
					echo $set_quantity;
					echo '<br>';
?>
                <form method="post" action="inventory_confirm.php" name="form">
                    <input type="radio" name="indecrease" value="0"checked>＋
                    <br>
                    <input type="radio" name="indecrease" value="1">－
                    <br>

                    <div>
                    <input type="text" class="text" input pattern="^[0-9]+$" maxlength=" 7" size="35" name="quantity">
                    </div>
                    <div>
                        <input type=hidden name="item_code" value= <?php echo $set_code; ?>>
                    </div>

                    <div>
                        <input type=hidden name="name" value= <?php echo $set_name; ?>>
                    </div>
                    <br>
                    <div>
                        <input type="submit" class="submit" value="修正" onclick="return check();">
                    </div>
                </form>
                <?php }

                
                
					
	?>


<body>


