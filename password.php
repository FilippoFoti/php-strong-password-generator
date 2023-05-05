<?php
session_start()
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- MAIN -->
    <main>
        <h1>Strong Password Generator</h1>
        <h2>La tua nuova password è</h2>
        <h3><?php echo $_SESSION["new_pass"] ?></h3>
    </main>
    <!-- /MAIN -->
</body>

</html>