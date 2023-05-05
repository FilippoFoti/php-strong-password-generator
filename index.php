<?php
$upper_letter = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$lower_letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$symbols_array = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
$numbers_array = ["!", "£", "$", "%", "&", "/", "(", ")", "=", "?", "^", ";", ",", ":", ".", "ç", "@", "-", "_", "°", "#", "[", "]", "*", "+", "{", "}", "§",];

$user_pass = "";

if (isset($_GET["number"])) {
    $length = $_GET["number"];
    // var_dump("number");

    $pass_array = array_merge($upper_letter, $lower_letter, $symbols_array, $numbers_array);

    for ($i = 0; $i < $length; $i++) {
        $random = rand(0, (count($pass_array) - 1));
        $user_pass = $user_pass . $pass_array[$random];
    }
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
    <!-- HEADER -->
    <!-- /HEADER -->

    <!-- MAIN -->
    <main>
        <div class="container">
            <h1>Strong Password Generator</h1>
            <h2>Genera una password sicura</h2>
            <form action="index.php" method="GET">
                <div class="row">
                    <div class="col">
                        <label for="number">Lunghezza password:</label>
                        <!-- <label for="radio">Consenti ripetizioni di uno o più caratteri:</label> -->
                    </div>
                    <div class="col small">
                        <input type="text" id="number" name="number" placeholder="Scrivi un numero da 1 a 10">
                        <!-- <div class="radio">
                            <input type="radio" id="radio" name="">
                            <label for="radio">Si</label><br>
                            <input type="radio" id="radio" name="">
                            <label for="radio">No</label><br>
                        </div>
                        <div class="box">
                            <input type="checkbox" id="box" name="">
                            <label for="box">Lettere</label><br>
                            <input type="checkbox" id="box" name="">
                            <label for="box">Numeri</label><br>
                            <input type="checkbox" id="box" name="">
                            <label for="box">Simboli</label><br>
                        </div> -->
                    </div>
                    <div class="col big">
                        <div class="button">
                            <button type="submit">Invia</button>
                            <button type="reset">Annulla</button>
                        </div>
                        <div class="result">
                            <h3>La tua nuova password è: <?php echo $user_pass ?></h3>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- /MAIN -->

    <!-- FOOTER -->
    <!-- /FOOTER -->
</body>

</html>