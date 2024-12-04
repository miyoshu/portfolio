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
<link rel = "stylesheet" href="css/update_confirm.css">
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




    <p>アカウント更新確認画面<p>
<div class="confirm">
<table>
                <tr>   
                    <td>
                        <input type="hidden" name="id" value="<?php echo  $_POST['id']." "; ?>">
                    </td>
                </tr>

                    <td>
                        名前(姓)
                    </td>
                    <td>
                        <?php echo  $_POST['family_name']." "; ?>
                    </td>
                <tr>
                    <td>
                        名前(名)
                    </td>
                    <td>
                        <?php echo  $_POST['last_name']." "; ?>
                    </td>
                </tr>     
                <tr>
                    <td>
                        カナ(姓)
                    </td>
                    <td>
                        <?php echo  $_POST['family_name_kana']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        カナ(名)
                    </td>
                    <td>
                        <?php echo  $_POST['last_name_kana']." "; ?>
                </tr>
                <tr>
                    <td>
                        メールアドレス
                    </td>
                    <td>
                        <?php echo  $_POST['mail']." "; ?>
                </tr>
                <tr>
                    <td>
                        パスワード
                    </td>
                    <td>
                    情報保護のためパスワードは画面に表示されません
                    </td>
                </tr>
                <tr>
                    <td>
                        姓別
                    </td>
                    <td>
                        <?php if($_POST['gender']=="0"){
                                echo "男性";}
                            else{
                                echo"女性";} ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        郵便番号
                    </td>
                    <td>
                        <?php echo  $_POST['postal_code']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        住所(都道府県)
                    </td>
                    <td>
                        <?php echo  $_POST['prefecture']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        住所(市区町村)
                    </td>
                    <td>
                        <?php echo  $_POST['address_01']." "; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        住所(番地)
                    </td>
                    <td>
                        <?php echo  $_POST['address_02']." "; ?>
                    </td>
                </tr>
               
            </table>
            
            <table>
                <tr>   
                    <td>
                    <form action="update.php" method="post">
                            <input type="submit" class="button2" value="戻る">
                            <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                            <input type="hidden" value="<?php echo $_POST['address_01']; ?>" name="address_01">
                            <input type="hidden" value="<?php echo $_POST['address_02']; ?>" name="address_02">

                        </form>
                    </td>
                    <td>
                        <form action="update_complete.php" method="post">
                            <input type="submit" class="button2" value="更新する">
                            <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                            <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                            <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                            <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                            <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                            <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                            <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                            <input type="hidden" value="<?php echo $_POST['address_01']; ?>" name="address_01">
                            <input type="hidden" value="<?php echo $_POST['address_02']; ?>" name="address_02">

                        </form>
                    </td>
                </tr>
            </table>

    </div>
</body>