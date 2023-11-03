<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <img src="/proje_guvenlik_kodu/guvenlik.php" alt=""> <br><br>
        <label for="guvenlik_kodu">
            <span>Guvenlik Kodunu Girin : </span> <br>
            <input type="text" name="captcha"id="guvenlik_kodu">
            <input type="submit" value="Gönder"> <br><br>
        </label>
    </form>

    <?php
    if($_POST){
        $captcha = $_POST["captcha"];
        if(! $captcha){
            echo'<span style="color:red;"> guvenlik kodu boş bırakılamaz ! </span>';

        }else{
            if($captcha == $_SESSION["captcha"]){
                echo'<span style="color:blue;"> guvenlik kodu doğru girildi ! </span>';

        }else{
            echo'<span style="color:red;"> guvenlik kodu yanlış girildi ! </span>';


        }
    }
}  
    ?>
    
</body>
</html>