<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>Foto's Apen</title>
    <style>
        body{
            text-align: center;
        }
        .border {
            border: red 5px solid;
        }
    </style>
</head>
<body>
<?php
for ($i = 1; $i <=9; $i++) {
    if ($i % 2) {
        $class = "";
    }
    else {
        $class = "class='border'";
    }
    echo "<img ".$class." src='img/aap".$i.".jpg'>";
}
?>

</body>
</html>