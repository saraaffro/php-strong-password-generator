<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra Password</title>
</head>
<body>
    <h1>Password Generata</h1>

    <?php
    if (isset($_SESSION['generated_password'])) {
        echo "<h3>{$_SESSION['generated_password']}</h3>";
    } else {
        echo "<h3>{$_SESSION['password_message']}</h3>";
    }
    
    session_destroy();
    ?>
</body>
</html>
