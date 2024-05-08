<?php
    include "server/server.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?v=<?php echo time() ?>" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js?v=<?php echo time() ?>" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <title>LOGIN</title>
    <link rel="stylesheet" href="Login.css?v=<?php echo time() ?>">
</head>

<body>
    <div class="login-container">
    <div class="logo-container">
    <div class="img-container1">
    <img src="TUALOGO.png" alt="TUALOGO" class="logo-image1">
    </div>
            
    <div class="img-container2">
    <img src="TUACARESLOGO.png" alt="TUACARESLOGO" class="logo-image2">
    </div>
    </div>

    <form action="index.php" id="loginForm" method="POST">
        <div>
            <input type="text" id="username" name="username" placeholder="ID Number" required>
            <i class="bi bi-person"></i>
        </div>
        
        <div>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class="bi bi-key"></i>
        </div>
        
        <?php include "server/login_errors.php" ?>
        <div>
        <button type="submit" name="login">LOGIN</button>
        <!-- onclick="validateLogin()" -->
        </div>
    </form>
    </div>

    <script src="Login.js"></script>
</body>
</html>