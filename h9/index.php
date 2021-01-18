<?php
include('Dataophalen.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bakkerij Vlecht</title>
    <link rel="stylesheet" href="Css/broodje.css">
</head>
<body>
<header>
    <div class="container">
        <h2 style="color: white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<div class="start">
    <nav>
        <a href="index.php">Overzicht</a>
        <a href="broodjetoevoegen.php">Broodjes toevoegen</a>
    </nav>
    <h1>
        Broodjes weergeven
    </h1>
    <p class="lead">
        Globale informatie van de verschillende broodjes
    </p>
    <table border="2"  class="tabel">
        <tr id="namen">
            <td>
                Naam
            </td>
            <td>
                Vorm
            </td>
            <td>
                Soort
            </td>
            <td>
                Gewicht
            </td>
        </tr>
        <?php
        TabelMaken();
        ?>
    </table>
</div>
</body>
</html>