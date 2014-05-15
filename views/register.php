<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo $error;
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form --> 
<!--<form method="post" action="register.php" name="registerform">

     the user name input field uses a HTML5 pattern check 
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
    <br/>
     the email input field uses a HTML5 email type check 
    <label for="login_input_email">User's email</label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />

    <label for="login_input_password_new">Password (min. 6 characters)</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    <input type="submit"  name="register" value="Register" />

</form>-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title></title>
    </head>
    <body>
        <form class="main-form first" method="post" action="register.php">
            <div class="main-form__title">
                <h1>Sign-up</h1>
            </div>
            <div class="main-form__body">
               <input class="main-form__body--input" type="text" placeholder="Username" 
                       pattern="[a-zA-Z0-9]{2,64}" name="user_name" required="required" />
               <input class="main-form__body--input" type="email"
                      name="user_email" required="required" placeholder="Email Address" />
                <input class="main-form__body--input" type="password" name="user_password_new" 
                       pattern=".{6,}" required="required" autocomplete="off" placeholder="Password" />
                <input class="main-form__body--input" type="password" name="user_password_repeat" 
                       pattern=".{6,}" required="required" autocomplete="off" placeholder="Repeat Password" />
                <button class="btn">Clear</button>
                <button type="submit" name="register" class="btn">Register</button>
            </div>
        </form>  
        <!--Backlink-->
        <a href="index.php">Back to Login Page</a>
        
        
    </body>
</html>

