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
<link rel = "stylesheet" href="css/orderhistory.css">
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
	//データベースに接続
            $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
        //SQL文(商品情報取得するための変数)
            $sql = 'select name,addressee,postal_code,prefecture,address_01,address_02,paymethod,price,item_num,item_code,item_name  from orderlist ';
        //SQLを実行するための準備
            $sth = $pdo->prepare($sql);
        //SQL実行
            $sth->execute();
        //
            $result = $sth->fetchAll();
            foreach ($result as $row){
                $set_name = $row['name'];
                $set_addressee = $row['addressee'];
                $set_postal_code = $row['postal_code'];
                $set_prefecture = $row['prefecture'];
                $set_address_01 = $row['address_01'];
                $set_address_02 = $row['address_02'];
                $set_paymethod = $row['paymethod'];
                $set_price = $row['price'];
                $set_item_num = $row['item_num'];
                $set_item_code = $row['item_code'];
                $set_item_name = $row['item_name'];

                echo '<br>';
                echo '<br>';
                echo "郵便番号";
                echo '<br>';
                echo $set_postal_code;
                echo '<br>';
                echo '<br>';
                echo "住所";
                echo '<br>';
                echo $set_prefecture;
                
                echo $set_address_01;
                
                echo $set_address_02;
                echo '<br>';
                echo '<br>';
                echo "支払方法";
                echo '<br>';
                if ($set_paymethod==0){
                    echo 'コンビニ払い';
                }elseif($set_paymethod==1){
                    echo 'クレジットカード';
                }elseif($set_paymethod==2){
                    echo '代金引換';
                }elseif($set_paymethod==3){
                    echo '銀行振込';
                }elseif($set_paymethod==4){
                    echo '電子マネー';
                }
                echo '<br>';
                echo '<br>';
                echo "合計";
                echo '<br>';
                echo $set_price*$set_item_num ;
                echo "円";
                echo '<br>';
                echo '<br>';
                echo $set_item_name;
                echo '<br>';
                echo '<br>';
                echo "購入個数";
                echo '<br>';
                echo $set_item_num;
                echo '<br>';
            }

               
               
            ?>

            <form action="mypage.php" method="post">
				
        			<button type="submit">マイページに戻る</button>
    			</form>