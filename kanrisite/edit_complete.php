<?php
    session_start();
    if(isset($_SESSION['employee_num'])) {
    } else {
        header('Location: kanri_login.php');
    }
?>

<!doctype HTML>
<html lang="ja">

    <head>
        
        <meta charset="utf-8">
        <title>商品登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="css/regist_complete.css">
    </head>

    <body>

        <h1>商品登録完了画面</h1>

        <?php

            mb_internal_encoding("utf8");


            try{
                $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
    
                $pdo ->exec("insert into item(name,price)
                    values('".$_POST['name']."','".$_POST['price']."');");
                $result = "登録完了しました。";
            }catch(PDOException $e){
                $result = '<FONT COLOR="RED">エラーが発生したためアカウント登録できません。</FONT>';
            }

        ?>
        <div class="complete">
            <p><?php echo $result; ?></p>
        </div>

        <div class="button">
            <button onclick="location.href='kanri.php'">TOPページに戻る</button>
        </div>
    
    <footer>
    </footer>
    </body>

</html>