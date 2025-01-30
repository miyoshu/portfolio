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
        <title>在庫修正</title>
        <link rel="stylesheet" type="text/css" href="css/regist_confirm.css">
    </head>

    <body>


        <?php
            //データベースに接続
    	    $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
            $sql= 'SELECT quantity FROM item WHERE item_code=:item_code and name=:name';
            $sth = $pdo->prepare($sql);
            $params = array(':item_code' => $_POST['item_code'],':name'=>$_POST['name']);
            $sth->execute($params);
			$result = $sth->fetchAll();
			    foreach ($result as $row){
				    $set_quantity=$row['quantity'];
			    }

            $sql = 'UPDATE item SET quantity = :quantity WHERE item_code = :item_code and name = :name';
            $sth=$pdo->prepare($sql);

            if($_POST['indecrease']==0){
   		        $params=array('name' =>$_POST['name'],'item_code' => $_POST['item_code'],'quantity' => $set_quantity + $_POST['quantity']);
            }else{
                $params=array('name' =>$_POST['name'],'item_code' => $_POST['item_code'],'quantity' => $set_quantity - $_POST['quantity']);
            }
		    $sth->execute($params);

            echo '修正しました。';
        ?>

        <form action="inventory_management.php" method="post">
            <button type="submit">在庫修正</button>
        </form>
    </body>
</html>