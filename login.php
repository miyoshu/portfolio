<!DOCTYPE html>
<html lang="ja">
    
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login画面</title>
</head>
<body>
	<div id="header">
		<div id="pr">
		</div>
	</div>
	<div id="main">
		<div id="top">
			<p>Login</p>
		</div>
		<div>
			<h3>商品を購入する際にはログインをお願いします。</h3>
			<form action="login_confirm.php" method="post">
                <p>メールアドレス：<input type="text" name="mail"  required></p>
                <p>パスワード：<input type="password" name="password"  required></p>
                <p><input type="submit" name="login" value="ログイン"></p>
            </form>
			<br/>
			<div id="text-link">
				<p>新規ユーザー登録は
					<a href=>こちら</a>
				</p>
				<p>Homeへ戻る場合は
					<a href=>こちら</a>
				</p>
			</div>
		</div>
	</div>
	<div>
		<div id="pr">
		</div>
	</div>
	a


</body>
</html>