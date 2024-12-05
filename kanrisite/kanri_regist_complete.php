<!doctype HTML>
<html lang="ja">



<head>
<meta charset="utf-8">
    <meta charset="utf-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="css/regist_complete.css">
</head>

<body>

   
    <h1>管理サイトアカウント登録完了画面</h1>

<?php

mb_internal_encoding("utf8");


try{
    $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
    
    $pdo ->exec("insert into kanri(family_name,last_name,family_name_kana,last_name_kana,mail,password,employee_num)
    values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['employee_num']."');");
    $result = "登録完了しました。";
}catch(PDOException $e){
    $result = '<FONT COLOR="RED">エラーが発生したためアカウント登録できません。</FONT>';
}

?>
    <div class="complete">
    <p><?php echo $result; ?></p>
    </div>

    <div class="button">
    <button onclick="location.href='kanri.php'">TOPページに戻る</button>
    </div>
    </main>
<footer>
</footer>
</body>

</html>
