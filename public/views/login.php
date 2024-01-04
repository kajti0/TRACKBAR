<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="/public/css/login.css">
</head>

<body>
    
<div class="login-container">
    <form class="login" action="login" method="POST">
        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <img src="public/img/logo.png" alt="Logo">
        <input name="email" type="text" placeholder="email" required>
        <input name="password" type="password" placeholder="password" required>
        <button type="submit">Login</button>
        <div class="signup-link">
            Don't have an account yet? <a href="register">Sign up!</a>
        </div>
    </form>
</div>

</body>
</html>
 