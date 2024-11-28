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
<link rel = "stylesheet" href="css/buy_confirm.css">
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
	<br>
	<h1>お届け先住所</h1>
	<?php
		if($_POST['addressee']==0){
			echo "ご登録住所";


		}else{

			echo '郵便番号';
			echo '<br>';
			echo $_POST['postal_code'];
			echo '<br>';
			echo '<br>';
			echo 'ご住所';
			echo '<br>';
			echo $_POST['prefecture'];
			echo $_POST['address_01'];
			echo $_POST['address_02'];
		}
		echo '<br>';
		echo '<br>';
		echo'<h1>支払い方法</h1>';
		if ($_POST['paymethod']==0){
			echo 'コンビニ払い';
		}elseif($_POST['paymethod']==1){
			echo 'クレジットカード';
		}elseif($_POST['paymethod']==2){
			echo '代金引換';
		}elseif($_POST['paymethod']==3){
			echo '銀行振込';
		}elseif($_POST['paymethod']==4){
			echo '電子マネー';
		}

		echo '<br>';
		echo '<br>';
		echo'<h1>ご請求金額</h1>';
		echo $_POST['totalamount'];
	?>

	<form action="buy_complete.php" method="post">
	<?php if($_POST['addressee']==0){ ?>
        <input type="hidden" value="<?php echo $_POST['addressee']; ?>" name="addressee">
	<?php }else{  ?>
		<input type="hidden" value="<?php echo $_POST['addressee']; ?>" name="addressee">
        <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
        <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
        <input type="hidden" value="<?php echo $_POST['address_01']; ?>" name="address_01">
        <input type="hidden" value="<?php echo $_POST['address_02']; ?>" name="address_02">
		<?php } ?>
        <input type="hidden" value="<?php echo $_POST['paymethod']; ?>" name="paymethod">
        <input type="hidden" value="<?php echo $_POST['totalamount']; ?>" name="totalamount">
        <input type="submit" class="button2" value="購入する">
    </form>