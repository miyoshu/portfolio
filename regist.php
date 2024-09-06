<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="css/regist.css">
        <script>
            function check(){
                let check_result = true;
                document.getElementById("validate_msg").innerHTML = "";
                document.getElementById("validate_msg1").innerHTML = "";
                document.getElementById("validate_msg2").innerHTML = "";
                document.getElementById("validate_msg3").innerHTML = "";
                document.getElementById("validate_msg4").innerHTML = "";
                document.getElementById("validate_msg5").innerHTML = "";
                document.getElementById("validate_msg6").innerHTML = "";
                document.getElementById("validate_msg7").innerHTML = "";
                document.getElementById("validate_msg8").innerHTML = "";
                document.getElementById("validate_msg9").innerHTML = "";
                if(document.form.family_name.value == "" ){
                    var validate = "名前(姓)が未入力です。";
                    document.getElementById("validate_msg").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.last_name.value == "" ){
                    var validate = "名前(名)が未入力です。";
                    document.getElementById("validate_msg1").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.family_name_kana.value == "" ){
                    var validate = "カナ(姓)が未入力です。";
                    document.getElementById("validate_msg2").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.last_name_kana.value == "" ){
                    var validate = "カナ(名)が未入力です。";
                    document.getElementById("validate_msg3").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.mail.value == "" ){
                    var validate = "メールアドレスが未入力です。";
                    document.getElementById("validate_msg4").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.password.value == "" ){
                    var validate = "パスワードが未入力です。";
                    document.getElementById("validate_msg5").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.postal_code.value == "" ){
                    var validate = "郵便番号が未入力です。";
                    document.getElementById("validate_msg6").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.prefecture.value == "" ){
                    var validate = "住所(都道府県)が未入力です。";
                    document.getElementById("validate_msg7").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.address_01.value == "" ){
                    var validate = "住所(市区町村)が未入力です。";
                    document.getElementById("validate_msg8").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.address_02.value == "" ){
                    var validate = "住所(番地)が未入力です。";
                    document.getElementById("validate_msg9").innerHTML = validate;
                    check_result = false;
                }


                if(check_result){
                    return true;
                }else{
                    return false;
                }
            }
        </script>
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

<form method="post" action="regist_confirm.php" name="form">
    <div class="content">
                    
                    <p>アカウント登録画面<p>
                    <div>
                        <label>名前(姓)　※ひらがな、漢字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size=" 35"  name="family_name" >
                        <p id="validate_msg" style="color: red;"></p>
                    </div>
                    <div>
                        <label>名前(名)　※ひらがな、漢字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size="35" name="last_name">
                        <p id="validate_msg1" style="color: red;"></p>
                    </div>
                    <div>
                        <label>カナ(姓)</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="family_name_kana">
                        <p id="validate_msg2" style="color: red;"></p>
                    </div>
                    <div>
                        <label>カナ(名)</label>
                        <br>
                        <input type="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="last_name_kana">
                        <p id="validate_msg3" style="color: red;"></p>
                    </div>
                    <div>
                        <label>メールアドレス　※半角のみ</label>
                        <br>
                        <input type="text" class="text" maxlength="100" input pattern="^[A-Za-z0-9][A-Za-z0-9_.\-]*@[A-Za-z0-9_.\-]+[.][A-Za-z0-9]+$" size="35" name="mail">
                        <p id="validate_msg4" style="color: red;"></p>
                    </div>
                    <div>
                        <label>パスワード　※半角英数字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="^[a-zA-Z0-9]+$" maxlength=" 10" size="35" name="password">
                        <p id="validate_msg5" style="color: red;"></p>
                    </div>
                    <div>
                        <label>性別</label>
                        <br>
                        <input type="radio" name="gender" value="0"checked> 男性
                        <input type="radio" name="gender" value="1" >　女性
                    </div>
                    <div>
                        <label>郵便番号　※半角数字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="^[0-9]+$" maxlength=" 7" size="35" name="postal_code">
                        <p id="validate_msg6" style="color: red;"></p>
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
                        <p id="validate_msg7" style="color: red;"></p>
                    </div>
                    <div>
                        <label>住所(市区町村)　※ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength=" 10" size="35" name="address_01">
                        <p id="validate_msg8" style="color: red;"></p>
                    </div>
                    <div>
                        <label>住所(番地)　※ひらがな、漢字、数字、カタカナ、記号(ハイフンとスペース)のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength=" 100" size="35" name="address_02">
                        <p id="validate_msg9" style="color: red;"></p>
                    </div>
                    <div>
                        <label>アカウント権限</label>
                        <br>
                        <select name="authority">
                            <option value="0"selected>一般</option>
                            <option value="1">管理者</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" class="submit" value="確認する" onclick="return check();">
                    </div>
    </div>
</form>
</body>