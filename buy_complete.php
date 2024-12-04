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
<link rel = "stylesheet" href="css/buy_complete.css">
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
        <?php

mb_internal_encoding("utf8");


try{
	$set_name=$_SESSION['family_name'].$_SESSION['last_name'];

	
    $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");



	$sql = "SELECT cart.item_code,cart.item_num,item.price,item.name FROM cart JOIN item ON cart.item_code=item.item_code  WHERE id = :id";
	$sth = $pdo->prepare($sql);
	$params = array(':id' => $_SESSION['id']);
	$sth->execute($params);
				$result = $sth->fetchAll();
				foreach ($result as $row){
					$set_item_code=$row['item_code'];
					$set_item_num=$row['item_num'];
					$set_price=$row['price'];
					$set_item_name=$row['name'];

					if($_POST['addressee']==0){
						$sql = "select postal_code,prefecture,address_01,address_02 from account where id = :id";
						$sth = $pdo->prepare($sql);
						$params = array(':id' => $_SESSION['id']);
				
						$sth->execute($params);
								$result = $sth->fetchAll();
								foreach ($result as $row){
									
									
									$set_postal_code=$row['postal_code'];
									$set_prefecture=$row['prefecture'];
									$set_address_01=$row['address_01'];
									$set_address_02=$row['address_02'];
								}
				
						$pdo ->exec("insert into orderlist(name,user_id,addressee,postal_code,prefecture,address_01,address_02,paymethod,price,item_num,item_code,item_name)
							values('".$set_name."','".$_SESSION['id']."','".$_POST['addressee']."',$set_postal_code,
								   '$set_prefecture','".$set_address_01."','".$set_address_02."',
								   '".$_POST['paymethod']."',$set_price,$set_item_num,$set_item_code,'$set_item_name');");
				
								   $result = "購入手続きが完了しました。";
				
					}else{
					$pdo ->exec("insert into orderlist(name,user_id,addressee,postal_code,prefecture,address_01,address_02,paymethod,price,item_num,item_code,item_name)
							values('".$set_name."','".$_SESSION['id']."','".$_POST['addressee']."','".$_POST['postal_code']."',
								   '".$_POST['prefecture']."','".$_POST['address_01']."','".$_POST['address_02']."','".$_POST['paymethod']."',
								   $set_price,$set_item_num,$set_item_code,'$set_item_name');");
					
				
				
					
					$result = "購入手続きが完了しました。";
					}
				}




//在庫減らす処理
$sql='SELECT item_code,item_num FROM orderlist WHERE user_id =:id';
$sth = $pdo->prepare($sql);
$params = array(':id' => $_SESSION['id']);
$sth->execute($params);
$result1 = $sth->fetchAll();
	foreach ($result1 as $row){
		$set_item_num_cart=$row['item_num'];
		$set_item_code_cart=$row['item_code'];
	}



	$sql='SELECT item_code,quantity FROM item ';
	$sth = $pdo->prepare($sql);
	$sth->execute();
	$result1 = $sth->fetchAll();
		foreach ($result1 as $row){
			$set_quantity=$row['quantity'];
			$set_item_code=$row['item_code'];

			$sql = 'UPDATE item SET quantity = :quantity WHERE item_code = :item_code';
			$sth = $pdo->prepare($sql);
			$params=array(':item_code' => $set_item_code,':quantity' => $set_quantity - $set_item_num_cart);
			$sth->execute($params);
		}
		
	

		
			

    //cartテーブルの行を減らす（ユーザーIDで一致したものを削除）

		$sql ="DELETE FROM cart WHERE id=:id";
		$sth = $pdo->prepare($sql);
		$params = array(':id' => $_SESSION['id']);
		$sth->execute($params);
		








}catch(PDOException $e){
    $result = '<FONT COLOR="RED">エラーが発生したため購入できません。</FONT>';
}

?>
    <div class="complete">
    <p><?php echo $result; ?></p>
    </div>
