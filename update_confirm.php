<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="update_confirm.css">
</head>

<body>
    <p>アカウント更新確認画面<p>
<div class="confirm">
<table>
                <tr>   
                    <td>
                        <input type="hidden" name="id" value="<?php echo  $_POST['id']." "; ?>">
                    </td>
                </tr>

                    <td>
                        名前(姓)
                    </td>
                    <td>
                        <?php echo  $_POST['family_name']." "; ?>
                    </td>
                <tr>
                    <td>
                        名前(名)
                    </td>
                    <td>
                        <?php echo  $_POST['last_name']." "; ?>
                    </td>
                </tr>     
                <tr>
                    <td>
                        カナ(姓)
                    </td>
                    <td>
                        <?php echo  $_POST['family_name_kana']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        カナ(名)
                    </td>
                    <td>
                        <?php echo  $_POST['last_name_kana']." "; ?>
                </tr>
                <tr>
                    <td>
                        メールアドレス
                    </td>
                    <td>
                        <?php echo  $_POST['mail']." "; ?>
                </tr>
                <tr>
                    <td>
                        パスワード
                    </td>
                    <td>
                    情報保護のためパスワードは画面に表示されません
                    </td>
                </tr>
                <tr>
                    <td>
                        姓別
                    </td>
                    <td>
                        <?php if($_POST['gender']=="0"){
                                echo "男性";}
                            else{
                                echo"女性";} ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        郵便番号
                    </td>
                    <td>
                        <?php echo  $_POST['postal_code']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        住所(都道府県)
                    </td>
                    <td>
                        <?php echo  $_POST['prefecture']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        住所(市区町村)
                    </td>
                    <td>
                        <?php echo  $_POST['address_01']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        住所(番地)
                    </td>
                    <td>
                        <?php echo  $_POST['address_02']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        アカウント権限
                    </td>
                    <td>
                    <?php if( $_POST['authority']=="0"){
                                echo "一般";}
                        else{
                                echo"管理者";} ?>
                    </td>
                </tr>
            </table>
            
            <table>
                <tr>   
                    <td>
                        <form action="update.php">
                            <button type="button" onclick=history.back()>戻る</button>
                        </form>
                    </td>
                    <td>
                        <form action="update_complete.php" method="post">
                            <input type="submit" class="button2" value="更新する">
                            <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                            <input type="hidden" value="<?php echo $_POST['address_01']; ?>" name="address_01">
                            <input type="hidden" value="<?php echo $_POST['address_02']; ?>" name="address_02">
                            <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">

                        </form>
                    </td>
                </tr>
            </table>

    </div>
</body>