<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra Password</title>

    <?php

        session_start();
        $pws = $_GET["password"] ?? "";

    ?>

</head>
<body>
    <h1>
        La tua password è:
        <?php echo $pws; ?>
    </h1>
</body>
</html>
