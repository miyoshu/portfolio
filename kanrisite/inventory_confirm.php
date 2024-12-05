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
    <title>在庫修正</title>
    <link rel="stylesheet" type="text/css" href="css/regist_confirm.css">
</head>

<body>


在庫修正