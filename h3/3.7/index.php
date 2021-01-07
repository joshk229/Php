<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kapperzaak de kapsalon</title>
    <style>
        body {
            text-align: center;
            font-size: 30px;
            background: black;
            color: white;
        }
    </style>
</head>
<body>
<?php
$tijdstip["09.15"] = "Mevr. Pietersen";
$tijdstip["09.30"] = "Mevr. Willems";
$tijdstip["09.45"] = "";
$tijdstip["10.00"] = "Paul van den Broek";
$tijdstip["10.15"] = "Karel de Meeuw";
$tijdstip["10.30"] = "";


print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach($tijdstip as $tijd => $klanten ) {
    if($klanten == "") {
        print("<li>".$tijd."</li>") ;
    }
}

print("</ul>");
?>


</body>
</html>