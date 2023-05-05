<?php
include_once __DIR__ . "./functions.php";
if (isset($_GET["number"])) {
    $result = password($_GET["number"]);
}
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

    <!-- BOOTSTRAP -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->

</head>

<body>

    <!-- MAIN -->
    <main>
        <h1>Strong Password Generator</h1>
        <h2>Genera una password sicura</h2>
        <div class="container">
            <form action="index.php" method="GET">
                <div class="row">
                    <div class="col">
                        <label for="number">Lunghezza password:</label>
                        <!-- <label for="radio">Consenti ripetizioni di uno o più caratteri:</label> -->
                    </div>
                    <div class="small">
                        <input type="text" id="number" name="number" placeholder="Scrivi un numero da 1 a 10">
                        <!-- <div class="radio">
                            <input type="radio" id="radio" name="">
                            <label for="radio">Si</label><br>
                            <input type="radio" id="radio" name="">
                            <label for="radio">No</label><br>
                        </div> -->
                    </div>
                    <div class="big">
                        <button type="submit">Invia</button>
                        <button type="reset">Annulla</button>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- /MAIN -->

</body>

</html>