<?php
session_start();

if (isset($_SESSION["username"])) {
    if ($_SESSION["username"] == "Josh" ) {
        echo "<h1>Welcome !!</h1>";
    }
    else {
        echo "<h1>Login SUCCESFUL,  " . $_SESSION["username"] . "</h1>";
    }
}
else {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
    <style>
        img {
            position: absolute;
            height: 200px;
            width: 200px;
            left: 46%;
            right: 46%;
        }
    </style>
</head>
<body>
<p><a href="admin.php">Ga naar de Admin page</a></p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>