<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除画面</title>
        <link rel="stylesheet" type="text/css" href="delete.css"> 
    </head>


    <main>

    <h1>アカウント削除画面</h1>
    <?php
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $sql = 'select id,family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_01,address_02,authority from account where id=:id';
    $sth = $pdo->prepare($sql);
    $params = array(':id' => $_POST['id']);
    $sth->execute($params);
    $result = $sth->fetchAll();
    

    foreach ($result as $row) {
    ?>
    <table>
        <tr>
            <td>名前(姓)</td>
            <td>
                <?php echo  $row['family_name']." "; ?>
            </td>
        </tr>
        <tr>
            <td>名前(名)</td>
            <td>
                <?php echo $row['last_name']." "; ?>
            </td>
        </tr>
        <tr>
            <td>カナ(名)</td>
            <td>
                <?php echo $row['family_name_kana']." "; ?>
            </td>
        </tr>
        <tr>
            <td>カナ(名)</td>
            <td>
                <?php echo $row['last_name_kana']." "; ?>
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>
                <?php echo $row['mail']." "; ?>
            </td>
        </tr>
        <tr>
            <td>パスワード</td>
            <td>
                <?php echo "情報保護のためパスワードは画面に表示されません" ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <?php if( $row['gender']=="0"){
                echo "男性";}
                else{
                    echo"女性";} ?>
            </td>
        </tr> 
        <tr>
            <td>郵便番号</td>
            <td>
                <?php echo $row['postal_code']." "; ?>
            </td>
        </tr>
        <tr>
            <td>住所(都道府県)</td>
            <td>
                <?php echo $row['prefecture']." "; ?>
            </td>
        </tr>
        <tr>
            <td>住所(市区町村)</td>
            <td>
                <?php echo $row['address_01']." "; ?>
            </td>
        </tr>
        <tr>
            <td>住所(番地)</td>
            <td>
                <?php echo $row['address_02']." "; ?>
            </td>
        </tr>
        <tr>
            <td>権限</td>
            <td>
                <?php if( $row['authority']=="0"){
                    echo "一般";}
                    else{
                    echo"管理者";} ?>
            </td>  
        </tr>
        </table>
    <?php
    }
    ?>
    <div class=submit>
    <form action="delete_confirm.php" method=post>
        <input type=hidden name=id value= <?php echo $row['id']; ?>>
        <input type=submit value=確認する>
    </form>
    </div>
</main>