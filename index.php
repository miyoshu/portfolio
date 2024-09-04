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
<link rel = "stylesheet" href="index.css">
<title>ホーム画面</title>
</head>

<body>


	<table class="table1">
		<tr>
			<td class="td1">
				<a href="">
					<img src="img/20.png" alt="ホーム" class="HOME">
				</a>
			</td>

			<td class="td1">
				<a href="">
					<img src="img/19.png" alt="カート" class="CART">
				</a>
			</td>

			<td class="td1">
					

				<header class="header">
					<img src="img/21.png" alt="メニュー" class="hamburger-menu" id="js-hamburger-menu">
					<nav class="navigation">
    					<ul class="navigation__list">
     						<li class="navigation__list-item"><a href="login.php" class="navigation__link">マイページ</a></li>
    						<li class="navigation__list-item"><a href="#" class="navigation__link">お知らせ</a></li>
    						<li class="navigation__list-item"><a href="#" class="navigation__link">お問い合わせ</a></li>
   						 </ul>
  					</nav>
				</header>
			</td>

		</tr>
	</table>

	<div class="name">
		ブランド名
	</div>


	<img src="img/7.jpg" class="TOP">

	<div class="news">
		NEWS
	</div>

	<!-- ニュース内容 -->

	<div class="newitem">
		NEW ITEM
	</div>

	<img src="img/4.JPG" class="itemimg">

	Blanche Neige



</body>

</html>