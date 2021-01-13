<?php
session_start();

$host = "sql311.epizy.com";
$port = "3306";
$user = "epiz_27438245";
$pass = "UcIxn9Qa5oXEcnv";
$db = "epiz_27438245_XXX";
$message = "";

try {
    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    if (isset($_POST["knop"])) {
        $password = $_POST["password"];

        // salt en password hash
        $salt = "@!--778gh#00!jjs";
        $passwordWithSalt = $password . $salt;
        $hash = hash("sha256", $passwordWithSalt);


        $query = "SELECT * FROM gebruikers WHERE username = :username AND password = :password";
        $statement = $dbh->prepare($query);
        $statement->execute(
            array(
                'username' => $_POST["username"], 'password' => $hash
            )
        );
        $count = $statement->rowCount();

        if ($count > 0) {
            $_SESSION["username"] = $_POST["username"];
            header("location:index.php");
        }
        else {
            $message = "<label>Username of Password is verkeerd</label>";
        }
    }
}

catch(PDOException $error) {
    $error = "Database kan niet verbinden";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .input {
            position: absolute;
            left: 150px;
        }
    </style>
</head>
<body>
<?php
if (isset($message)) {
    echo $message;
}
?>
<h1>Login</h1>
<a> username = admin  username = gert <br> <br> password = Admin  password = gertdebeste</a>
<form method="post">
    <br><br>
    Gebruikersnaam <input class="input" type="text" id="username" name="username" value="" required>
    <br> <br>
    Wachtwoord <input class="input" type="password" id="password" name="password" value="" required>
    <br> <br>
    <input type="submit" class="knop" name="knop" value="Send">
</form>
</body>
</html>
