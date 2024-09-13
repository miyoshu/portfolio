<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="css/regist_confirm.css">
</head>

<body>
    <p>アカウント登録確認画面<p>
<div class="confirm">
        <p>名前(姓)
            <br>
            <?php echo $_POST['family_name'];  ?>
        </p>
        <p>名前(名)
            <br>
            <?php echo $_POST['last_name'];  ?>
        </p>
        <p>カナ(姓)
            <br>
            <?php echo $_POST['family_name_kana']; ?>
        </p>
        <p>カナ(名)
            <br>
            <?php echo $_POST['last_name_kana']; ?>
        </p>
        <p>メールアドレス
            <br>
            <?php echo $_POST['mail']; ?>
        </p>
        <p>パスワード
            <br>
            情報保護のためパスワードは画面に表示されません
        </p>
        <p>性別
            <br>
            <?php if($_POST['gender']=="0"){
                echo "男性";}
                else{
                    echo"女性";}
             ?>
        </p>
        <p>郵便番号
            <br>
            <?php echo $_POST['postal_code']; ?>
        </p>
        <p>住所(都道府県)
            <br>
            <?php echo $_POST['prefecture']; ?>
        </p>
        <p>住所(市区町村)
            <br>
            <?php echo $_POST['address_01']; ?>
        </p>
        <p>住所(番地)
            <br>
            <?php echo $_POST['address_02']; ?>
        </p> 
        

        <form action="regist.php">
        <button type="button" onclick=history.back()>戻る</button>
        </form>
 
        <form action="regist_complete.php" method="post">
            <input type="submit" class="button2" value="登録する">
            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo password_hash($_POST['password'], PASSWORD_DEFAULT); ?>" name="password">
            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
            <input type="hidden" value="<?php echo $_POST['address_01']; ?>" name="address_01">
            <input type="hidden" value="<?php echo $_POST['address_02']; ?>" name="address_02">

        </form>

    </div>
</body>