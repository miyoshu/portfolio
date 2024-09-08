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

<head>
<meta charset="UTF-8">
<link rel = "stylesheet" href="css/contact_confirm.css">
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

<body>
    <h1>お問合わせ内容確認</h1>
    <div class="confirm">
        <p>お問い合わせ内容はこちらで宜しいでしょうか。
            <br>よろしければ「送信する」を押してください。
        </p>
        <p>名前
            <br>
                <?php echo $_POST['name']; ?>
        </p>

        <p>メールアドレス
            <br>
            <?php  echo $_POST['mail']; ?>
        </P>
        <p>コメント
            <br>
                <?php echo $_POST['comments']; ?>
            </p>
        <form action="contact.php">
            <input type="submit" class="button1" value=" 戻って修正する" >
        </form>
            <form action="contact_complete.php" method="post">
            <input type="submit" class="button2" value=" 登録する" >
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>