<?php
@include('config.php');
session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$password' ";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['password'] = $password;
        echo 'login successfully!';
        header('location:main.php');
    }else {
        echo 'Password is Correct! ';
    }
}
?>


<html dir="rtl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="theme-color" content="#d2193f">
        <link rel="stylesheet" href="css/css.css" type="text/css" media="all" />
        <script src='js/jquery.min.js' type="text/javascript"></script>
        <script src='js/main.js' type="text/javascript"></script>

</head>
<body>
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
    <form action="login.php" method="post" accept-charset="utf-8">
        <h1>تسجيل الدخول </h1>
        <input type="text" name="name" id="name" value="" placeholder="إدخال الأسم....!"/>
        <input type="email" name="email" id="email" value="" placeholder="إدخال الإيميل....!"/>
        <input type="password" name="password" id="password" value="" placeholder="••••••••••••"/>
           <input type="submit" class='btn_submit' name="submit" value="تسجيل الدخول" />
              <div class="forget_password">
                <p>نسيت كلمة السر؟</p>  <a href="forget_password.php">تغيير كلمة السر</a>
        </div>
    </form>
    </div>
</body>
</html>