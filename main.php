<?php
include('config.php');
session_start();
if (isset($_POST['login'])) {
    // code...
    session_destroy();
    header('location:login.php');
}

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="theme-color" content="#d2193f">
        <link rel="stylesheet" href="css/css.css" type="text/css" media="all" />
</head>
<body>
    <div class="main">
        <p>hi, <span> <?php echo $_SESSION['name'];?></span> <span><?php echo $_SESSION['email']; ?></span></p>
        
        <p>your password is : <span><?php echo $_SESSION['password']; ?></span> plz remember it.</p>
        <p>This is the main page.</p>
        <div class="btns">
        <a href="register.php" class='btn_submit' name="register" value="register" >register</a>
        <a href="login.php" class='btn_submit' name="login" value="Login" >website</a>
        <a href="login.php" class='btn_submit' name="logout" value="Logout" >Logout</a>
        </div>
    </div>
</body>
</html>