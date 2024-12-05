<!DOCTYPE html>
<html lang="ja">


    <head>
        <meta charset="UTF-8">
        <title>管理サイトアカウント登録フォーム</title>
        <link rel="stylesheet" type="text/css" href="css/regist.css">
        
    </head>

<body>



<form method="post" action="kanri_regist_confirm.php" name="form">
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
                        <input type="text" class="text" input pattern="^[a-zA-Z0-9]+$" maxlength=" 20" size="35" name="password">
                        <p id="validate_msg5" style="color: red;"></p>
                    </div>

                    <div>
                        <label>社員番号　※半角数字のみ</label>
                        <br>
                        <input type="text" class="text" input pattern="^[0-9]+$" maxlength=" 7" size="35" name="employee_num">
                        <p id="validate_msg6" style="color: red;"></p>
                    </div>

                    <div>
                        <input type="submit" class="submit" value="確認する" onclick="return check();">
                    </div>
    </div>
                    
    </div>
</form>
</body>