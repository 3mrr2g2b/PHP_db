<?php
@include 'config.php';
session_start();
$name  = $_POST['name'];
$email = $_POST['email'];
$opassword = $_POST['opassword'];
$npassword = $_POST['npassword'];
if (isset($_POST['submit'])) {
    // code...
$query  = mysqli_query($conn,'SELECT email,password from user_form where email = "$email" AND passwors = "$opassword"');
$num = mysqli_fetch_array($query);
if ($num > 0) {
    // code...
    $con = mysqli_query($conn ,'UPDATE user_form email,passwors set pass = "$npassword" where email = "$email"');
    $_SESSION['msg1'] = 'password change successfully ';
}else {
    // code...
    $_SESSION['msg1'] = 'password not change successfully ';
}
}
?>
<html dir="rtl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="theme-color" content="#d2193f">
        <link rel="stylesheet" href="fontawesome-free/css/all.min.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/css.css" type="text/css" media="all" />
        <script src='js/jquery.min.js' type="text/javascript"></script>
        <script src='js/main.js' type="text/javascript"></script>

</head>
<body>
    <p style="background:red;color:white:padding:10px;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION["msg1"] = ''?></p>
    <div class="warp">
        <a class="logo" href="#"><img src="imgs/logo.png"/></a>
            <div class="toggle">
                <span></span>
                    <span></span>
                <span></span>
            </div>
       </div>
    <nav class="nav">
        <ul class="ul">
            <li><a href="#" class="home">الرئيسية</a></li>
                <li><a href="#" class="Service">كورسات</a></li>
            <li><a href="#" class="home">إتصل بنا</a></li>
        </ul>
    </nav>
     <div class="con">
    <form action="forget_password.php" method="post" accept-charset="utf-8">
        <h1>تغيير كلمة المرور  </h1>
        <input type="text" name="name" id="name" value="" placeholder="أدخل اسمك....!"/>
        <input type="email" name="email" id="email" value="" placeholder="أدخل الإيميل....!"/>
        <input type="password" name="opassword" id="password" value="" placeholder="ادخل كلمة المرور االقديمة "/>
        <input type="password" name="npassword" id="password" value="" placeholder="ادخل كلمة المرور الجديدة "/>
           <input type="submit" class='btn_submit' name="submit" value="تغيير  " />
    </form>
    </div>
</html>