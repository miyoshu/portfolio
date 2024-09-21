<?php
session_start();
?>


<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
    <meta charset="utf-8">
        <title>アカウント削除確認画面</title>
        <link rel="stylesheet" type="text/css" href="css/delete_confirm.css">
</head>

<body>

    <header>
        <p>ナビゲーションバー</p>
    </header>
    <main>
    <h2>アカウント削除確認画面</h2>

    <h1>本当に削除してよろしいですか？</h1>

    <table>
        <tr>   
            <td>
                <form action="delete.php">
                    <button type="button" onclick=history.back()>前に戻る</button>
                </form>
            </td>
            <td>
                <form action="delete_complete.php" method=post >
                    <input type=hidden name="id" value= <?php echo $_POST['id']; ?>>
                    <input type=hidden name= "delete_flag" value= "1">
                    <input type=submit value=削除する>
            </td>
                </form>
        </tr>
    </table>

    

</body>