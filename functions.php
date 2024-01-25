<?php
    session_start();

    function generate_password($length) {
        $characters = '';
        for ($i=ord('a'); $i<=ord('z'); $i++){
            $characters .= chr($i);
        }
        for ($i=ord('A'); $i<=ord('Z'); $i++){
            $characters .= chr($i);
        }
        for ($i=ord('0'); $i<=ord('9'); $i++){
            $characters .= chr($i);
        }
        for ($i=ord('!'); $i<=ord('/'); $i++){
            $characters .= chr($i);
        }

        $password = '';
        for ($i=0; $i<$length; $i++){
            $randomCharacterIndex = rand(0, strlen($characters)-1);
            $randomCharacter = $characters[$randomCharacterIndex];

            $password .= $randomCharacter;
        }

        $_SESSION['generated_password'] = $password;
        
        return $password;

      
        
    }
?>
