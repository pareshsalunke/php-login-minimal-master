<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<!--<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" />

</form>-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title></title>
    </head>
    <body>
        <form class="main-form first" method="post" action="index.php">
            <div class="main-form__title">
                <h1>Login</h1>
            </div>
            <div class="main-form__body">
              <input id="login_input_username" name="user_name" class="main-form__body--input" type="text" placeholder="Username" />
              <input id="login_input_password" class="main-form__body--input" 
                type="password" autocomplete="off" name="user_password" required="required" placeholder="Password" />
              <button name="login" type="submit" class="btn">Login</button>
            </div>
        </form>  
        <!--Backlink-->
        <a href="register.php">Register new account</a>
        
    </body>
</html>

