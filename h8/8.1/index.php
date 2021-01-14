<?php
$Monkeys = array("Baviaan", "Guereza", "Langoer", "Neusaap",  "Tamarin", "Brulaap","Halfaap", "Mandrill", "Oeakari","Faunaap","Hoelman","Meerkat","Oormaki", "Gorilla", "Kuifaap", "Mensaap","Spinaap");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Monkey Business</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<img src="img/monkey-business.jpg" alt="monkeybusiness">
<h1>Select your Monkey</h1>
<img src="img/monkey_swings.png" alt="monkeyswing">
<?php
asort($Monkeys);

foreach($Monkeys as $monkey) {
    echo  "<h2><a href='https://www.google.nl/search?q=$monkey&source=lnms&tbm=isch&sa=X&ved=0ahUKEwia6Zj0otLXAhXDKcAKHQ19CV8Q_AUICigB&biw=1920&bih=984'>$monkey</a></h2>";
}
?>
<hr>
</body>
</html>
