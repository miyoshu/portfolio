<?php
session_start();
?>



<!DOCTYPE html>
<html lang="ja">

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>


<script>
$(function () {
  $('#js-hamburger-menu, .navigation__link').on('click', function () {
    $('.navigation').slideToggle(500)
    $('.hamburger-menu').toggleClass('hamburger-menu--open')
  });
});
</script>

<script>
$(function () {
  $('#js-hamburger-menu2, .navigation__link2').on('click', function () {
    $('.navigation2').slideToggle(500)
    $('.hamburger-menu2').toggleClass('hamburger-menu2--open')
  });
});
</script>

<head>
<meta charset="UTF-8">
<link rel = "stylesheet" href="css/contact.css">
<title>ホーム画面</title>
</head>

<body>


<table class="table1">
		<tr>
			<td class="td1">
				<a href="index.php">
					<img src="img/20.png" alt="ホーム" class="HOME">
				</td>
			</a>

			<td class="td1">
				<header class="header2">
					<img src="img/18.png" alt="アイテム" class="hamburger-menu2" id="js-hamburger-menu2">
					<nav class="navigation2">
    					<ul class="navigation__list2">
							<li class="navigation__list-item2"><a href="item_apparel.php" class="navigation__link2">アパレル</a></li>
							<li class="navigation__list-item2"><a href="item_jewelry.php" class="navigation__link2">ジュエリー</a></li>
    						<li class="navigation__list-item2"><a href="item_fragrance.php" class="navigation__link2">フレグランス</a></li>
    						<li class="navigation__list-item2"><a href="item_watch.php" class="navigation__link2">ウォッチ</a></li>
							<li class="navigation__list-item2"><a href="item_gift.php" class="navigation__link2">ギフト</a></li>
   						 </ul>
  					</nav>
				</header>
			</td>


			<td class="td1">
				<a href="cart.php">
					<img src="img/19.png" alt="カート" class="CART">
				</a>
			</td>

			<td class="td1">
					

				<header class="header">
					<img src="img/21.png" alt="メニュー" class="hamburger-menu" id="js-hamburger-menu">
					<nav class="navigation">
    					<ul class="navigation__list">
     						<li class="navigation__list-item"><a href="mypage.php" class="navigation__link">マイページ</a></li>
							<li class="navigation__list-item"><a href="regist.php" class="navigation__link">アカウント登録</a></li>
    						<li class="navigation__list-item"><a href="information.php" class="navigation__link">お知らせ</a></li>
    						<li class="navigation__list-item"><a href="contact.php" class="navigation__link">お問い合わせ</a></li>
							<li class="navigation__list-item"><a href="logout.php" class="navigation__link">ログアウト</a></li>
   						 </ul>
  					</nav>
				</header>
			</td>

		</tr>
</table>



<?php
	if(isset($_SESSION['family_name'])){
		echo "ようこそ、".$_SESSION['family_name']."さん！";
	  }
	else{
		echo "<a href='login.php?referrer=item.php'>ログイン</a>";
		
	}
	?>

	<br>
	<h1>アパレル</h1>

<?php
			$set_item_num=null;
	//データベースに接続
            $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
        //SQL文(アカウント情報取得するための変数)
            $sql = 'select item_num from cart where id=:id and item_code=:item_code';
			$sth = $pdo->prepare($sql);
		//ログインユーザーのID(セッション情報のID)をバインド変数:IDに設定する
				$params = array(':id' => $_SESSION['id'],':item_code'=>$_POST['item_code']);
			//SQL実行
				$sth->execute($params);
			//
				$result = $sth->fetchAll();
				foreach ($result as $row){
						$set_item_num=$row['item_num'];
					
				}

		?>

	<?php

	if(is_null($set_item_num)){
		try{

            $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
            $pdo ->exec("insert into cart(id,item_code,item_num) values('".$_SESSION['id']."','".$_POST['item_code']."','".$_POST['item_num']."')");
			$result = "カートに追加しました。";

		}catch(PDOException $e){
			$result = '<FONT COLOR="RED">エラーが発生したためカートに追加できません。</FONT>';
		}

	echo $result;
	}
	else{try{
            $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
            $pdo ->exec("UPDATE cart SET item_num = item_num + ".$_POST['item_num']."  where id= ".$_SESSION['id']." and item_code=".$_POST['item_code']);
			$result = "カートに追加しました。";
			
		}catch(PDOException $e){
			$result = '<FONT COLOR="RED">エラーが発生したためカートに追加できません。</FONT>';
		}
		echo $result;

	}
	?>