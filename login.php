<!DOCTYPE html>
<html lang="ja">
    
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel = "stylesheet" href="css/login.css">
<title>Login画面</title>
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
				<a href="item.php">
					<img src="img/18.png" alt="アイテム" class="ITEM">
				</a>
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
     						<li class="navigation__list-item"><a href="login.php" class="navigation__link">マイページ</a></li>
    						<li class="navigation__list-item"><a href="information.php" class="navigation__link">お知らせ</a></li>
    						<li class="navigation__list-item"><a href="contact.php" class="navigation__link">お問い合わせ</a></li>
   						 </ul>
  					</nav>
				</header>
			</td>

		</tr>
	</table>


	<div id="header1">
		<div id="pr">
		</div>
	</div>
	<div id="main">
		<div id="top">
		</div>
		<div>
			<h3>ログインしてください。</h3>
			<form action="login_confirm.php" method="post">
                <p>メールアドレス：<input type="text" name="mail"  required></p>
                <p>パスワード：<input type="password" name="password"  required></p>
                <p><input type="submit" name="login" value="ログイン"></p>
            </form>
			<br/>
			<div id="text-link">
				<p>新規ユーザー登録は
					<a href="regist.php">こちら</a>
				</p>
				<p>Homeへ戻る場合は
					<a href="index.php">こちら</a>
				</p>
			</div>
		</div>
	</div>
	<div>
		<div id="pr">
		</div>
	</div>


</body>
</html>