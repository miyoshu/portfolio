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
        <link rel = "stylesheet" href="css/mypage.css">
        <title>ホーム画面</title>
    </head>
    
    <body>
        社員番号　
        <?php
            if(isset($_SESSION['employee_num'])) {
                echo $_SESSION['employee_num'];
            } 
        ?>
        <br>
        <br>
        <table class="button">
            <tr>
                <td>
                    <form action="edit.php" method="post">
                        <button type="submit">商品登録</button>
                    </form>
                </td>
                <td>
                    <form action="inventory_management.php" method="post">
                    
                        <button type="submit">在庫管理</button>
                    </form>
                </td>

                <td>
                    <form action="kanri_logout.php" method="post">
                    
                        <button type="submit">ログアウト</button>
                    </form>
                </td>
               
    
            <tr>
        </table>
    </body>
</html>