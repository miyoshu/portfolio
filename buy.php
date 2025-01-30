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
    <link rel = "stylesheet" href="css/buy.css">
    <title>ホーム画面</title>
    </head>

    <body>
        <table class="table1">
            <tr>
                <td class="td1">
                    <a href="index.php">
                        <img src="img/20.png" alt="ホーム" class="HOME">
                    </a>
                </td>
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
            }else{
                echo "<a href='login.php?referrer=item.php'>ログイン</a>";                
            }
        ?>
        <form method="post" action="buy_confirm.php" name="form">
            <h1>配送先</h1>
            <input type="radio" name="addressee" value="0"checked>ご登録住所
            <br>
            <br>
            <input type="radio" name="addressee" value="1">別のご指定先住所
            <br> 
            <div>
                <label>郵便番号  ※半角数字のみ</label>
                <br>
                <input type="text" class="text" input pattern="^[0-9]+$" maxlength=" 7" size="35" name="postal_code">
            </div>
            <div>
                <label>住所(都道府県)</label>
                <br>
                <select name="prefecture">
                    <option value=""></option>
                    <option value="北海道">北海道</option>
                    <option value="青森県">青森県</option>
                    <option value="秋田県">秋田県</option>
                    <option value="岩手県">岩手県</option>
                    <option value="山形県">山形県</option>
                    <option value="宮城県">宮城県</option>
                    <option value="福島県">福島県</option>
                    <option value="茨城県">茨城県</option>
                    <option value="栃木県">栃木県</option>
                    <option value="群馬県">群馬県</option>
                    <option value="埼玉県">埼玉県</option>
                    <option value="神奈川県">神奈川県</option>                        
                    <option value="千葉県">千葉県</option>
                    <option value="東京都">東京都</option>
                    <option value="山梨県">山梨県</option>
                    <option value="長野県">長野県</option>
                    <option value="新潟県">新潟県</option>
                    <option value="富山県">富山県</option>
                    <option value="石川県">石川県</option>
                    <option value="福井県">福井県</option>
                    <option value="岐阜県">岐阜県</option>
                    <option value="静岡県">静岡県</option>
                    <option value="愛知県">愛知県</option>
                    <option value="三重県">三重県</option>
                    <option value="滋賀県">滋賀県</option>
                    <option value="京都府">京都府</option>
                    <option value="大阪府">大阪府</option>
                    <option value="兵庫県">兵庫県</option>
                    <option value="奈良県">奈良県</option>
                    <option value="和歌山県">和歌山県</option>
                    <option value="鳥取県">鳥取県</option>
                    <option value="島根県">島根県</option>
                    <option value="岡山県">岡山県</option>
                    <option value="広島県">広島県</option>
                    <option value="山口県">山口県</option>
                    <option value="徳島県">徳島県</option>
                    <option value="香川県">香川県</option>
                    <option value="愛媛県">愛媛県</option>
                    <option value="高知県">高知県</option>
                    <option value="福岡県">福岡県</option>
                    <option value="佐賀県">佐賀県</option>
                    <option value="長崎県">長崎県</option>
                    <option value="熊本県">熊本県</option>
                    <option value="大分県">大分県</option>
                    <option value="宮崎県">宮崎県</option>
                    <option value="鹿児島県">鹿児島県</option>
                    <option value="沖縄県">沖縄県</option>
                </select>
            </div>
            <div>
                <label>住所(市区町村)　※ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ</label>
                <br>
                <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength=" 10" size="35" name="address_01">
            </div>
            <div>
                <label>住所(番地)　※ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ</label>
                <br>
                <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength=" 100" size="35" name="address_02">
            </div>
            <br>
            <br>
            <div>
                <h1><label>お支払い方法</label></h1>
                <br>
                <input type="radio" name="paymethod" value="0"checked>コンビニ払い
                <input type="radio" name="paymethod" value="1">クレジットカード
                <input type="radio" name="paymethod" value="2">代金引換
                <input type="radio" name="paymethod" value="3">銀行振込
                <input type="radio" name="paymethod" value="4">電子マネー
            </div>
            <h1>ご請求金額</h1>
            <?php
                $sum=0;
                $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
                $sql = 'SELECT * FROM item JOIN cart ON item.item_code=cart.item_code WHERE id=:id ';
                $sth = $pdo->prepare($sql);
                $params = array(':id' => $_SESSION['id']);
                $sth->execute($params);
                $result = $sth->fetchAll();
                    foreach ($result as $row){
                        $set_item_code = $row['item_code'];
                        $set_item_num = $row['item_num'];
                        $set_name = $row['name'];
                        $set_price = $row['price'];
                        $sum += $set_item_num*$set_price;	
                        echo $sum.'円';
                        echo '<br>';
                    }
            ?>
            <br>
            <br>
            <div>
                <input type="hidden" name="totalamount" value= "<?php echo $sum ;  ?>">
            </div>
            <div>
                <input type="submit" class="submit" value="確認する" onclick="return check();">
            </div>
        </form>
    </body>
</html>
        