<!DOCTYPE html>
<html lang="ja">    
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link rel = "stylesheet" href="css/login.css">
		<title>Login画面</title>
	</head>
	<body>
		<div id="header1">
			<div id="pr">
			</div>
		</div>
		<div id="main" class="main">
			<div id="top">
			</div>
			<div>
				<h3>管理サイトログイン画面</h3>
				<form action="kanri_login_confirm.php" method="post">
                	<p>メールアドレス：<input type="text" name="mail"  required></p>
            	    <p>パスワード：<input type="password" name="password"  required></p>
            	    <p><input type="submit" name="login" value="ログイン"></p>
            	</form>
				<br/>
				<div id="text-link">
					<p>管理アカウント登録は
						<a href="kanri_regist.php">こちら</a>
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