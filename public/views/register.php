<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>REGISTER PAGE</title>
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
</head>

<body>
    
<div class="register-container">
    <form class="register" action="register" method="POST">
        <img src="public/img/logo.png" alt="Logo">
        <div class="messages">
            <?php
            if(isset($messages)){
                foreach($messages as $message) {
                    echo $message;
                }
            }
            ?>
        </div>
        <input name="name" type="text" placeholder="Name" required>
        <input name="surname" type="text" placeholder="Surname" required>
        <input name="email" type="text" placeholder="E-Mail" required>
        <input name="phone" type="text" placeholder="Phone number" required>
        <input name="password" type="password" placeholder="Password" required>
        <input name="confirmedPassword" type="password" placeholder="Repeat Password" required>
        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>