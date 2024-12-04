<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>アカウント登録確認画面</title>
    <link rel="stylesheet" type="text/css" href="css/regist_confirm.css">
</head>

<body>

<div class="text1">

    <p class="title">アカウント登録確認画面<p>
<div class="confirm">
        <p>商品名
            <br>
            <?php echo $_POST['name'];  ?>
        </p>
        <p>商品価格
            <br>
            <?php echo $_POST['price'];  ?>
        </p>
        
      
        
<table class="table2">
    <tr>
        <td>
            <form action="kanri.php">
            <button type="button" onclick=history.back()> 戻る</button>
            </form>

        </td>
        <td>
            <form action="edit_complete.php" method="post">
                <input type="submit" class="button2" value="登録する">
                <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                <input type="hidden" value="<?php echo $_POST['price']; ?>" name="price">
                

            </form>
        </td>
    </tr>
    </table>    

    </div>
    </div>
</body>