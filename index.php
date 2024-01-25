<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di password</title>

    <?php
        require_once __DIR__ . '/functions.php';

        session_start();
    ?>
</head>
<body>
    <h1>Generatore di Password</h1>

    <form>
        <label for="password_length">Lunghezza Password:</label>
        <input type="number" name="password_length" required>
        <input type="submit" value="Genera Password">
    </form>

    <?php
    
        $length = $_GET['password_length'] ?? -1;

        if($length > 0){

            $generated_password = generate_password($length);
            header("Location: ./generatedpws.php?password=$generated_password");

        }
       
    ?>
</body>
</html>