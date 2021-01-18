?php
$id = $_GET['id'];
function details($detail)
{
$host = "sql311.epizy.com";
$port = "3306";
$user = "epiz_27438245";
$pass = "UcIxn9Qa5oXEcnv";
$db = "epiz_27438245_XXX";

$id = $_GET['id'];
$dbh = mysqli_connect($host, $user, $pass, $db, $port) or die('Error connecting.');
$query = "SELECT $detail FROM broodjes WHERE naam = '$id'";
$result = mysqli_query($dbh, $query) or die ("Error querying.");
while($row = $result->fetch_assoc()) {
echo $row[$detail];
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bakkerij Vlecht</title>
    <link href="Css/broodje.css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <h2 style="color:white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<div class="start">
    <nav>
        <a href="index.php">Overzicht</a>
        <a href="broodjetoevoegen.php">Broodjes toevoegen</a>
        <a href="broodjeaanpassen.php?id=<?php echo $id?>">Broodjes aanpassen</a>
    </nav>
    <h1>
        De details van dit Broodje
    </h1>
    <p class="lead">
        Alle gegevens van dit heerlijke broodje
    </p>

    <h3>
        De naam van dit heerlijke broodje is: <?php details("naam"); ?><br>
    </h3>
    <p>
        De Broodjes vorm is   <?php details("vorm"); ?><br><br>

        Het soort meel is <?php details("soort"); ?><br><br>

        Het gewicht van het broodje is  <?php details("gewicht"); ?><br>
    </p>
    <img src="<?php details("image"); ?>">
</div>
</body>
</html>