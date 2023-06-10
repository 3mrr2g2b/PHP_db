<?php
@include 'config.php';
$name =mysqli_real_escape_string( $conn,$_POST['name']);
$email =mysqli_real_escape_string($conn, $_POST['email']);
$password = ( $_POST['password']);
$cpassword = ($_POST['cpassword']);

if (isset($_POST['submit'])) {
    // code...

if ($password === $cpassword) {
$sql = "INSERT INTO `user_form`(name,email,password,cpassword) VALUE ('$name','$email','$password','$cpassword')";
$result = mysqli_query($conn,$sql);
$res = mysqli_fetch_array($result);
if ($res > 0) {
    // code...
        header('location:login.php');
}
else {
    // code...
    
}
    }
if($password != $cpassword)
        // code...
        $error[] = 'password is not matched!';
    {
        
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
    <form action="register.php" method="post" accept-charset="utf-8">
       <h1>تسجيل فى الموقع </h1>
       
       <?php 
           if (isset($error)) {
               foreach ($error as $error){
                   echo '<h3 class="error-msg">'.$error.'</h3>';
               }
           }
       ?>
       
        <input type="text" name="name" id="name" value="" placeholder="إدخال الأسم....!"/>
        <input type="email" name="email" id="email" value="" placeholder="إدخال الإيميل....!"/>
        <input type="password" name="password" id="password" value="" placeholder="••••••••••••"/>
        <input type="password" name="cpassword" id="cpassword" value="" placeholder="••••••••••••"/><br>
        <input type="submit" class='btn_submit' name="submit" value="تسجيل" />
     
    </form>
    </div>
</body>
</html>
