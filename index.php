<?php
// include './include/signup.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP OOP test</title>
</head>
<body>
    <div class="top-nav">
        <div class="container">
            <div class="left-nav">
                <div class="logo"><a href="#">OOP WEBSITE</a></div>
                <nav> 
                    <ul>
                        <li><a class="link" href="#">Home</a></li>
                        <li><a class="link" href="#">Products</a></li>
                        <li><a class="link" href="#">Current Sales</a></li>
                        <li><a class="link" href="#">members</a></li>
                    </ul>
                </nav>
            </div>
            <div class="right-nav">
                <a href="#" class="sign-up">Sign Up</a>
                <a href="#" class="login">Login</a>
            </div>
        </div>
    </div>

    <div class="header">
        <div class="container">
            <div class="sign-up-section">
                <h1>sign up</h1>
                <p>To create account you have to sign in first</p>
                <form action="./include/signup.inc.php" method="post">
                    <input name="uid" type="text" placeholder="Enter your name">
                    <input name="pwd" type="password" placeholder="Enter your Password">
                    <input name="pwdrepeat" type="password" placeholder="Check again Password">
                    <input name="email" type="email" placeholder="Email">
                    <button class="btn-input btn" name="submit"> Sign up</button>
                </form>
            </div>
            <div class="login-section">
                <h1>login</h1>
                <p>Don't have an acoount yet? sign-up now</p>
                <form action="" >
                    <input name="uid" type="text" placeholder="userName">
                    <input name="pwd" type="password" placeholder="Password">
                    <input name="submit" class="btn" name="submit" type="button" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>
</html>