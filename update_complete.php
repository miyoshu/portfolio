<!doctype HTML>
<html lang="ja">

<head>
<meta charset="utf-8">
    <meta charset="utf-8">
        <title>アカウント登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="update_complete.css">
</head>

<body>
    <header>
        <p>ナビゲーションバー</p>
    </header>
    <main>
    <h1>アカウント更新完了画面</h1>

<?php

mb_internal_encoding("utf8");


try{
    $pdo= new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    if ($_POST['password']==""){
    $stmt = $pdo->prepare('UPDATE account SET family_name=:family_name,
                                            last_name=:last_name,
                                            family_name_kana=:family_name_kana,
                                            last_name_kana=:last_name_kana,
                                            mail=:mail,
                                            gender=:gender,
                                            postal_code=:postal_code,
                                            prefecture=:prefecture,
                                            address_01=:address_01,
                                            address_02=:address_02,
                                            authority=:authority
                                            WHERE id = :id');

    $stmt->execute(array(':family_name' => $_POST['family_name'],
                        ':last_name' => $_POST['last_name'],
                        ':family_name_kana' => $_POST['family_name_kana'],
                        ':last_name_kana' => $_POST['last_name_kana'],
                        ':mail' => $_POST['mail'],
                        ':gender' => $_POST['gender'],
                        ':postal_code' => $_POST['postal_code'],
                        ':prefecture' => $_POST['prefecture'],
                        ':address_01' => $_POST['address_01'],
                        ':address_02' => $_POST['address_02'],
                        ':authority' => $_POST['authority'],
                        ':id' => $_POST['id']
                    ));}
    else {
    $stmt = $pdo->prepare('UPDATE account SET family_name=:family_name,
                                                last_name=:last_name,
                                                family_name_kana=:family_name_kana,
                                                last_name_kana=:last_name_kana,
                                                mail=:mail,
                                                password=:password,
                                                gender=:gender,
                                                postal_code=:postal_code,
                                                prefecture=:prefecture,
                                                address_01=:address_01,
                                                address_02=:address_02,
                                                authority=:authority
                                                WHERE id = :id');
    
    $stmt->execute(array(':family_name' => $_POST['family_name'],
                            ':last_name' => $_POST['last_name'],
                            ':family_name_kana' => $_POST['family_name_kana'],
                            ':last_name_kana' => $_POST['last_name_kana'],
                            ':mail' => $_POST['mail'],
                            ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
                            ':gender' => $_POST['gender'],
                            ':postal_code' => $_POST['postal_code'],
                            ':prefecture' => $_POST['prefecture'],
                            ':address_01' => $_POST['address_01'],
                            ':address_02' => $_POST['address_02'],
                            ':authority' => $_POST['authority'],
                            ':id' => $_POST['id']
                        ));}

    $result = "更新完了しました。";
}catch(PDOException $e){
    $result = '<FONT COLOR="RED">エラーが発生したためアカウントを更新できません。</FONT>';
}

?>
    <div class="complete">
    <p><?php echo $result; ?></p>
    </div>

    <div class="button">
    <button onclick="location.href='index.php'">TOPページに戻る</button>
    </div>
    
    </main>