<?php
    session_start();

    function generate_password($length) {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
        $password = '';

        if ($length < 5 || $length > 22) {
            $_SESSION['password_message'] = 'La password deve contenere tra i 5 e i 22 caratteri.';
            return;
        }

        for ($i = 0; $i < $length; $i++) {
            $password .= $alphabet[rand(0, strlen($alphabet) - 1)];
        }

        $_SESSION['generated_password'] = $password;
    }
?>
