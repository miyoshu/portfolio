
<?php
    session_start();
    if(isset($_SESSION['employee_num'])) {
    } else {
        header('Location: kanri_login.php');
    }
?>

<!DOCTYPE html>
<html lang="ja">

    <head>
        <meta charset="UTF-8">
        <title>商品登録</title>
        <link rel="stylesheet" type="text/css" href="css/regist.css">
        <script>
            function check(){
                let check_result = true;
                document.getElementById("validate_msg").innerHTML = "";
                document.getElementById("validate_msg1").innerHTML = "";                
               
                if(document.form.name.value == "" ){
                    var validate = "商品名が未入力です。";
                    document.getElementById("validate_msg").innerHTML = validate;
                    check_result = false;
                }
                if(document.form.price.value == "" ){
                    var validate = "商品価格が未入力です。";
                    document.getElementById("validate_msg1").innerHTML = validate;
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


        <form method="post" action="edit_confirm.php" name="form">
            <div class="content">
                    
                <p>商品登録画面<p>
                <div>
                    <label>商品名</label>
                    <br>
                    <input type="text" class="text" input pattern="^[\u30a0-\u30ff\u3040-\u309f\u3005-\u3006\u30e0-\u9fcf\0-9\u220D\u0020]*$" maxlength="10" size=" 35"  name="name" >
                    <p id="validate_msg" style="color: red;"></p>
                </div>
                <div>
                    <label>商品価格</label>
                    <br>
                    <input type="text" class="text" input pattern="^[0-9]+$" maxlength="10" size="35" name="price">
                    <p id="validate_msg1" style="color: red;"></p>
                </div>
                   
                <div>
                    <input type="submit" class="submit" value="確認する" onclick="return check();">
                </div>
            </div>
        </form>
    </body>
</html>