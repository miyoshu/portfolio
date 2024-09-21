<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="css/login_confirm.css">

<?php
session_start();
try {
    
    $mail = $_POST['mail'];
    $dbh = new PDO("mysql:dbname=ecsite;host=localhost;","root","");
    $sql = "select password ,family_name,id from account where mail = :mail and delete_flag!=1" ;
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();
if ($result && password_verify($_POST['password'], $result['password'])) {
    $msg = 'ログインしました。';
    $_SESSION['family_name']= $result['family_name'];
    $_SESSION['id']= $result['id'];
    header('Location: '.$_POST["referrer"]);
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="login.php?referrer='.$_POST["referrer"].'">戻る</a>';
}

    
} catch (PDOException $e) {
    $msg = '<FONT COLOR="RED">エラーが発生したためログイン情報を取得できません。</FONT>';
    $link = '<a href="login.php">戻る</a>';
}
?>


<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
