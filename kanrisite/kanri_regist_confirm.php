<!DOCTYPE html>
<html lang="ja">



<head>
    <meta charset="UTF-8">
    <title>管理サイトアカウント登録確認画面</title>
    <link rel="stylesheet" type="text/css" href="css/regist_confirm.css">
</head>

<body>



<div class="text1">

    <p class="title">アカウント登録確認画面<p>
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
        <p>社員番号
            <br>
            <?php echo $_POST['employee_num']; ?>
            
        </p>
        
        
<table class="table2">
    <tr>
        <td>
            <form action="kanri_regist.php">
            <button type="button" onclick=history.back()> 戻る</button>
            </form>

        </td>
        <td>
            <form action="kanri_regist_complete.php" method="post">
                <input type="submit" class="button2" value="登録する">
                <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                <input type="hidden" value="<?php echo password_hash($_POST['password'], PASSWORD_DEFAULT); ?>" name="password">
                <input type="hidden" value="<?php echo $_POST['employee_num']; ?>" name="employee_num">
              

            </form>
        </td>
    </tr>
    </table>    

    </div>
    </div>
</body>