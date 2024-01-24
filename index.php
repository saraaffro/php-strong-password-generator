<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>

    <?php
        require_once __DIR__ . '/functions.php';
    ?>
</head>
<body>
    <h1>Generatore di Password</h1>

    <form>
        <label for="password-length">Lunghezza Password:</label>
        <input type="number" name="password_length" min="0" max="100" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php
        if (isset($_GET['password_length'])) {
    
            $password_length = $_GET['password_length'];

            // visualizzo la password
            $generated_password = generate_password($password_length);
            
            header("Location: generatedpws.php");
        }
    ?>
</body>
</html>