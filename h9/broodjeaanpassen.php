<?php
$host = "sql311.epizy.com";
$port = "3306";
$user = "epiz_27438245";
$pass = "UcIxn9Qa5oXEcnv";
$db = "epiz_27438245_XXX";
$id = $_GET['id'];

if(isset($_POST['knop'])) {
    try {
        $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);

        $naam = $_POST["naam"];
        $vorm = $_POST["vorm"];
        $soort = $_POST["soort"];
        $gewicht = $_POST["gewicht"];
        $id = $_GET['id'];

        $folder ="uploads/";
        $image = $_FILES['bestandaanpassen']['name'];
        $path = $folder.$image ;

        $target_file=$folder.basename($_FILES["bestandaanpassen"]["name"]);
        $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

        $allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['bestandaanpassen']['name'];
        $ext=pathinfo($filename, PATHINFO_EXTENSION);
        move_uploaded_file( $_FILES['bestandaanpassen'] ['tmp_name'], $path);

        $query = "UPDATE broodjes SET naam=:naam, vorm=:vorm, soort=:soort, gewicht=:gewicht,image=:image WHERE naam =:id";
        $result = $dbh->prepare($query);

        $execute = $result->execute(array(":naam" => $naam, ":vorm" => $vorm, ":soort" => $soort, ":gewicht" => $gewicht,":image" => $image,":id" => $id));
        if ($execute) {
            header("location:index.php");
        }
        else {
            echo "oopsie hij doet het niet :)";
        }

    } catch (PDOException $error) {
        $error = 'kan niet verbinden met database';
        echo $error;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Bakkerij Vlecht</title>
    <link href="Css/broodje.css" type="text/css" rel="stylesheet">
</head>
<body>
<header>
    <div class="container">
        <h2 style="color:white">Bakkerij Vlecht Beheer</h2>
    </div>
</header>
<nav>
    <a href="index.php">Overzicht</a>
    <a href="broodjetoevoegen.php">Broodjes toevoegen</a>
</nav>

<form method="post" enctype="multipart/form-data">
    <br>
    <br>
    <label for="userfile[]">Afbeelding</label>
    <input  type="file" class="input" name="bestandaanpassen">
    <br>
    <br>
    <label for="type">Naam:</label>
    <input type="text" class="input" name="naam" value="" required>
    <br>
    <br>
    <label for="type">Vorm:</label>
    <input type="text" class="input" name="vorm" value="" required>
    <br>
    <br>
    <label for="type">Soort:</label>
    <input type="text" class="input" name="soort" value="" required>
    <br>
    <br>
    <label for="type">Gewicht:</label>
    <input type="text" class="input" name="gewicht" value="" required>
    <br>
    <br>
    <button type="submit" name="knop">Submit</button>
</form>

</body>
</html>