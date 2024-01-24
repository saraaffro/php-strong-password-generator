<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            echo "<p>La tua Password: $generated_password</p>";
        }
        
        // funzione per generare la password
        function generate_password($length) {
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
            $password = '';

            if ($length < 5 || $length > 22) {
                return 'La password deve contenere tra i 5 e i 22 caratteri.';
            }

            for ($i = 0; $i < $length; $i++) {
                $password .= $alphabet[rand(0, strlen($alphabet) - 1)];
            }

            return $password;
        }
    ?>
</body>
</html>