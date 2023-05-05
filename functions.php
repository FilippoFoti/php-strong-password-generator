<?php
function password() {
    $upper_letter = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $lower_letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $symbols_array = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    $numbers_array = ["!", "£", "$", "%", "&", "/", "(", ")", "=", "?", "^", ";", ",", ":", ".", "ç", "@", "-", "_", "°", "#", "[", "]", "*", "+", "{", "}", "§",];

    $user_pass = "";

    if (isset($_GET["number"])) {
        $length = $_GET["number"];

        $pass_array = array_merge($upper_letter, $lower_letter, $symbols_array, $numbers_array);

        for ($i = 0; $i < $length; $i++) {
            $random = rand(0, (count($pass_array) - 1));

            session_start();
            header("Location: password.php");

            $user_pass = $user_pass . $pass_array[$random];

            $_SESSION["new_pass"] = $user_pass;
        }
    }
    return $user_pass;
}
