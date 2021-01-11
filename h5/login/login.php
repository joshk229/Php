<?php
$mailpiet = "piet@worldonline.nl";
$mailklaas = "klaas@carpets.nl";
$mailtruus = "truushendriks@wegweg.nl";
$passpiet = "doetje123";
$passklaas = "snoepje777";
$passtruus = "arkiearkie201";
$mail = $_POST["mail"];
$password = $_POST["wachtwoord"];

if ($mail == $mailklaas and $password == $passklaas or $mail == $mailpiet and $password == $passpiet or $mail == $mailtruus and $password == $passtruus) {
    echo "Hallo";
}

else {
    echo "Sorry, geen toegang!!";
}

function loginchecker() {
    if(isset($_POST[''])){
        $loggedIn = true;
    } else {
        $loggedIn = false;
    }
    return $loggedIn;
}
loginchecker();