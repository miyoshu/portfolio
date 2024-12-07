<?php
session_start();
try {
    
    $mail = $_POST['mail'];
    $dbh = new PDO("mysql:dbname=ecsite;host=localhost;","root","");
    $sql = "select password , employee_num from kanri where mail = :mail";
    $stmt = $dbh->prepare($sql);
    $stmt->bindValue(':mail', $mail);
    $stmt->execute();
    $result = $stmt->fetch();
if (password_verify($_POST['password'], $result['password'])) {
    $msg = 'ログインしました。';
    $_SESSION['employee_num']= $result['employee_num'];
    $link = '<a href="kanri.php">管理者サイトへ</a>';
} else {
    $msg = 'メールアドレスもしくはパスワードが間違っています。';
    $link = '<a href="kanri_login.php">戻る</a>';
}

    
} catch (PDOException $e) {
    $msg = '<FONT COLOR="RED">エラーが発生したためログイン情報を取得できません。</FONT>';
    $link = '<a href="login.php">戻る</a>';
}
?>


<h1><?php echo $msg; ?></h1>
<?php echo $link; ?>
