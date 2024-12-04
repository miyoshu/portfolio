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
<link rel = "stylesheet" href="css/delete.css">
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


        <title>アカウント削除画面</title>



    <main>

    <h1>アカウント削除画面</h1>
    <?php
    $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
    $sql = 'select id,family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_01,address_02 from account where id=:id';
    $sth = $pdo->prepare($sql);
    $params = array(':id' => $_SESSION['id']);
    $sth->execute($params);
    $result = $sth->fetchAll();
    

    foreach ($result as $row) {
    ?>
    <table>
        <tr>
            <td>名前(姓)</td>
            <td>
                <?php echo  $row['family_name']." "; ?>
            </td>
        </tr>
        <tr>
            <td>名前(名)</td>
            <td>
                <?php echo $row['last_name']." "; ?>
            </td>
        </tr>
        <tr>
            <td>カナ(名)</td>
            <td>
                <?php echo $row['family_name_kana']." "; ?>
            </td>
        </tr>
        <tr>
            <td>カナ(名)</td>
            <td>
                <?php echo $row['last_name_kana']." "; ?>
            </td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td>
                <?php echo $row['mail']." "; ?>
            </td>
        </tr>
        <tr>
            <td>パスワード</td>
            <td>
                <?php echo "情報保護のためパスワードは画面に表示されません" ?>
            </td>
        </tr>
        <tr>
            <td>性別</td>
            <td>
                <?php if( $row['gender']=="0"){
                echo "男性";}
                else{
                    echo"女性";} ?>
            </td>
        </tr> 
        <tr>
            <td>郵便番号</td>
            <td>
                <?php echo $row['postal_code']." "; ?>
            </td>
        </tr>
        <tr>
            <td>住所(都道府県)</td>
            <td>
                <?php echo $row['prefecture']." "; ?>
            </td>
        </tr>
        <tr>
            <td>住所(市区町村)</td>
            <td>
                <?php echo $row['address_01']." "; ?>
            </td>
        </tr>
        <tr>
            <td>住所(番地)</td>
            <td>
                <?php echo $row['address_02']." "; ?>
            </td>
        </tr>
       
        </table>
    <?php
    }
    ?>
    <div class=submit>
    <form action="delete_confirm.php" method=post>
        <input type=hidden name=id value= <?php echo $row['id']; ?>>
        <input type=submit value=確認する>
    </form>
    </div>
</main>