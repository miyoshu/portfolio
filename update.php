<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>アカウント削除画面</title>
        <link rel="stylesheet" type="text/css" href="css/update.css"> 
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
    
    <main>
        <h1>アカウント更新画面</h1>
        <?php

        //データベースに接続
            $pdo= new PDO("mysql:dbname=ecsite;host=localhost;","root","");
        //SQL文(アカウント情報取得するための変数)
            $sql = 'select id,family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_01,address_02 from account where id=:id';
        //SQLを実行するための準備
            $sth = $pdo->prepare($sql);
        //ログインユーザーのID(セッション情報のID)をバインド変数:IDに設定する
            $params = array(':id' => $_SESSION['id']);
        //SQL実行
            $sth->execute($params);
        //
            $result = $sth->fetchAll();
    

            foreach ($result as $row) {
        ?>

            <table>
                <tr>   
                    <td>
                        <form action="update_confirm.php" method="post" name="form">
                            
                        <input type="hidden" name="id" value="<?php echo  $row['id'] ?>">
                    </td>
                </tr>

                    <td>
                        <label for="family_name">名前(姓)</label>
                        <p>
                    </td>
                    <td>
                        <input type="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size=" 35"  name="family_name" value="<?php echo  $row['family_name'] ?>" >
                        <p id="validate_msg" style="color: red;"></p>
                    </td>
                <tr>
                    <td>
                        <label for="last_name">名前(名)</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" maxlength="10" size="35" name="last_name" value="<?php echo  $row['last_name'] ?>" >
                        <p id="validate_msg1" style="color: red;"></p>
                    </td>
                </tr>     
                <tr>
                    <td>
                        <label for="family_name_kana">カナ(姓)</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="family_name_kana" value="<?php echo  $row['family_name_kana'] ?>">
                        <p id="validate_msg2" style="color: red;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="last_name_kana">カナ(名)</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="[\u30A1-\u30FF]*" maxlength=" 10" size="35" name="last_name_kana" value="<?php echo  $row['last_name_kana'] ?>">
                        <p id="validate_msg3" style="color: red;"></p>
                </tr>
                <tr>
                    <td>
                        <label for="mail">メールアドレス</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" maxlength="100" input pattern="^[A-Za-z0-9][A-Za-z0-9_.\-]*@[A-Za-z0-9_.\-]+[.][A-Za-z0-9]+$" size="35" name="mail" value="<?php echo  $row['mail'] ?>">
                        <p id="validate_msg4" style="color: red;"></p>
                </tr>
                <tr>
                    <td>
                        <label for="password">パスワード</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="^[a-zA-Z0-9]+$" maxlength=" 10" size="35" name="password"  value="" placeholder="変更しない場合は未入力">
                        <p id="validate_msg5" style="color: red;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="gender">姓別</label>
                        <p>
                    </td>
                    <td>
                        <input type="radio" name="gender" value="0"<?php if($row['gender']=="0"){ ?> checked <?php } ?> > 男性
                        <input type="radio" name="gender" value="1"<?php if($row['gender']=="1"){ ?> checked <?php } ?> > 女性
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="postal_code">郵便番号</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="^[0-9]+$" maxlength=" 7" size="35" name="postal_code" value="<?php echo  $row['postal_code'] ?>">
                        <p id="validate_msg6" style="color: red;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="prefecture">住所(都道府県)</label>
                        <p>
                    </td>
                    <td>
                    <select name="prefecture">
                            <option value=""></option>
                            <option value="北海道"<?php if($row['prefecture']=="北海道"){ ?> selected <?php }?>>北海道</option>
                            <option value="青森県"<?php if($row['prefecture']=="青森"){ ?> selected <?php }?>>青森県</option>
                            <option value="秋田県"<?php if($row['prefecture']=="秋田県"){ ?> selected <?php }?>>秋田県</option>
                            <option value="岩手県"<?php if($row['prefecture']=="岩手県"){ ?> selected <?php }?>>岩手県</option>
                            <option value="山形県"<?php if($row['prefecture']=="山形県"){ ?> selected <?php }?>>山形県</option>
                            <option value="宮城県"<?php if($row['prefecture']=="宮城県"){ ?> selected <?php }?>>宮城県</option>
                            <option value="福島県"<?php if($row['prefecture']=="福島県"){ ?> selected <?php }?>>福島県</option>
	                        <option value="茨城県"<?php if($row['prefecture']=="茨城県"){ ?> selected <?php }?>>茨城県</option>
	                        <option value="栃木県"<?php if($row['prefecture']=="栃木県"){ ?> selected <?php }?>>栃木県</option>
	                        <option value="群馬県"<?php if($row['prefecture']=="群馬県"){ ?> selected <?php }?>>群馬県</option>
	                        <option value="埼玉県"<?php if($row['prefecture']=="埼玉県"){ ?> selected <?php }?>>埼玉県</option>
	                        <option value="神奈川県"<?php if($row['prefecture']=="神奈川県"){ ?> selected <?php }?>>神奈川県</option>
	                        <option value="千葉県"<?php if($row['prefecture']=="千葉県"){ ?> selected <?php }?>>千葉県</option>
	                        <option value="東京都"<?php if($row['prefecture']=="東京都"){ ?> selected <?php }?>>東京都</option>
	                        <option value="山梨県"<?php if($row['prefecture']=="山梨県"){ ?> selected <?php }?>>山梨県</option>
	                        <option value="長野県"<?php if($row['prefecture']=="長野県"){ ?> selected <?php }?>>長野県</option>
	                        <option value="新潟県"<?php if($row['prefecture']=="新潟県"){ ?> selected <?php }?>>新潟県</option>
	                        <option value="富山県"<?php if($row['prefecture']=="富山県"){ ?> selected <?php }?>>富山県</option>
	                        <option value="石川県"<?php if($row['prefecture']=="石川県"){ ?> selected <?php }?>>石川県</option>
	                        <option value="福井県"<?php if($row['prefecture']=="福井県"){ ?> selected <?php }?>>福井県</option>
                            <option value="岐阜県"<?php if($row['prefecture']=="岐阜県"){ ?> selected <?php }?>>岐阜県</option>
                            <option value="静岡県"<?php if($row['prefecture']=="静岡県"){ ?> selected <?php }?>>静岡県</option>
                            <option value="愛知県"<?php if($row['prefecture']=="愛知県"){ ?> selected <?php }?>>愛知県</option>
                            <option value="三重県"<?php if($row['prefecture']=="三重県"){ ?> selected <?php }?>>三重県</option>
                            <option value="滋賀県"<?php if($row['prefecture']=="滋賀県"){ ?> selected <?php }?>>滋賀県</option>
                            <option value="京都府"<?php if($row['prefecture']=="京都府"){ ?> selected <?php }?>>京都府</option>
                            <option value="大阪府"<?php if($row['prefecture']=="大阪府"){ ?> selected <?php }?>>大阪府</option>
                            <option value="兵庫県"<?php if($row['prefecture']=="兵庫県"){ ?> selected <?php }?>>兵庫県</option>
                            <option value="奈良県"<?php if($row['prefecture']=="奈良県"){ ?> selected <?php }?>>奈良県</option>
                            <option value="和歌山県"<?php if($row['prefecture']=="和歌山県"){ ?> selected <?php }?>>和歌山県</option>
                            <option value="鳥取県"<?php if($row['prefecture']=="鳥取県"){ ?> selected <?php }?>>鳥取県</option>
                            <option value="島根県"<?php if($row['prefecture']=="島根県"){ ?> selected <?php }?>>島根県</option>
                            <option value="岡山県"<?php if($row['prefecture']=="岡山県"){ ?> selected <?php }?>>岡山県</option>
                            <option value="広島県"<?php if($row['prefecture']=="広島県"){ ?> selected <?php }?>>広島県</option>
                            <option value="山口県"<?php if($row['prefecture']=="山口県"){ ?> selected <?php }?>>山口県</option>
                            <option value="徳島県"<?php if($row['prefecture']=="徳島県"){ ?> selected <?php }?>>徳島県</option>
                            <option value="香川県"<?php if($row['prefecture']=="香川県"){ ?> selected <?php }?>>香川県</option>
                            <option value="愛媛県"<?php if($row['prefecture']=="愛媛県"){ ?> selected <?php }?>>愛媛県</option>
                            <option value="高知県"<?php if($row['prefecture']=="高知県"){ ?> selected <?php }?>>高知県</option>
                            <option value="福岡県"<?php if($row['prefecture']=="福岡県"){ ?> selected <?php }?>>福岡県</option>
                            <option value="佐賀県"<?php if($row['prefecture']=="佐賀県"){ ?> selected <?php }?>>佐賀県</option>
                            <option value="長崎県"<?php if($row['prefecture']=="長崎県"){ ?> selected <?php }?>>長崎県</option>
                            <option value="熊本県"<?php if($row['prefecture']=="熊本県"){ ?> selected <?php }?>>熊本県</option>
                            <option value="大分県"<?php if($row['prefecture']=="大分県"){ ?> selected <?php }?>>大分県</option>
                            <option value="宮崎県"<?php if($row['prefecture']=="宮崎県"){ ?> selected <?php }?>>宮崎県</option>
                            <option value="鹿児島県"<?php if($row['prefecture']=="鹿児島県"){ ?> selected <?php }?>>鹿児島県</option>
                            <option value="沖縄県"<?php if($row['prefecture']=="沖縄県"){ ?> selected <?php }?>>沖縄県</option>
                        </select>
                        <p id="validate_msg7" style="color: red;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address_01">住所(市区町村)</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength=" 10" size="35" name="address_01" value="<?php echo  $row['address_01'] ?>">
                        <p id="validate_msg8" style="color: red;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="address_02">住所(番地)</label>
                        <p>
                    </td>
                    <td>
                    <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength=" 100" size="35" name="address_02" value="<?php echo  $row['address_02'] ?>">
                        <p id="validate_msg9" style="color: red;"></p>
                    </td>
                </tr>
                
            </table>
                        
        <?php
        }
        ?>

        <div class="submit">
            <input type="hidden" name="id" value= <?php echo $row['id'] ?>>
            <input type="submit" value="確認する" name="submit_update" onclick="return check();">
        </div>
        </form>
    </main>
          
    
</body>