<?php

function tabelmaken()
{
    $host = "sql311.epizy.com";
    $port = "3306";
    $user = "epiz_27438245";
    $pass = "UcIxn9Qa5oXEcnv";
    $db = "epiz_27438245_XXX";

    $dbh = mysqli_connect($host, $user, $pass, $db, $port) or die('Database kan niet connecten!!');

    $query = "select * from broodjes";

    $result = mysqli_query($dbh, $query) or die ("Database fout !!");

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>";
        echo $row["naam"];
        echo "</td>";
        echo "<td>";
        echo $row["vorm"];
        echo "</td>";
        echo "<td>";
        echo $row["soort"];
        echo "</td>";
        echo "<td>";
        echo $row["gewicht"];
        echo "</td>";
        echo "<td>";
        echo "<nav> <a href=\"details.php?id=" . $row['naam'] . "\">details</a></nav>";
        echo "</td>";
        echo "<tr>";
    }
}