<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
    <meta charset="utf-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="regist_complete.css">
</head>

<body>
    <header>
        <p>ナビゲーションバー</p>
    </header>
    <main>
    <h1>アカウント登録完了画面</h1>

<?php

mb_internal_encoding("utf8");


try{
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    
    $pdo ->exec("insert into account(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_01,address_02,authority,delete_flag)
    values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_01']."','".$_POST['address_02']."','".$_POST['authority']."','0');");
    $result = "登録完了しました。";
}catch(PDOException $e){
    $result = '<FONT COLOR="RED">エラーが発生したためアカウント登録できません。</FONT>';
}

?>
    <div class="complete">
    <p><?php echo $result; ?></p>
    </div>

    <div class="button">
    <button onclick="location.href='index.php'">TOPページに戻る</button>
    </div>
    </main>
<footer>
</footer>
</body>

</html>
