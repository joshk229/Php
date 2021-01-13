<?php
session_start();

if (isset($_SESSION["username"])) {
    if ($_SESSION["username"] == "admin" ) {
        echo "<h1>jij bent een Admin !! ".$_SESSION["username"]."</h1>";
    }
    else if ($_SESSION["username"] == "Josh") {
        echo "<h1>jij bent een bezoeker !! geen admin ".$_SESSION["username"]."</h1>";
    }
    else {
        echo "<h1>Geen toegang!!" . $_SESSION["username"] . "</h1>";
    }
}
else {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Site</title>
</head>
<body>
<p><a href="index.php">Ga terug</a></p>
<p><a href="logout.php">Logout</a></p>
</body>
</html>