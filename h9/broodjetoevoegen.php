<?php
$host = "sql311.epizy.com";
$port = "3306";
$user = "epiz_27438245";
$pass = "UcIxn9Qa5oXEcnv";
$db = "epiz_27438245_XXX";

if(isset($_POST['knop'])) {
    try {
        $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);

        $naam = $_POST["naam"];
        $vorm = $_POST["vorm"];
        $soort = $_POST["soort"];
        $gewicht = $_POST["gewicht"];
        $folder ="uploads/";
        $image = $_FILES['userfile']['name'];
        $path = $folder.$image ;

        $target_file=$folder.basename($_FILES["userfile"]["name"]);
        $imageFileType=pathinfo($target_file,PATHINFO_EXTENSION);

        $allowed=array('jpeg','png' ,'jpg'); $filename=$_FILES['userfile']['name'];
        $ext=pathinfo($filename, PATHINFO_EXTENSION);
        move_uploaded_file( $_FILES['userfile'] ['tmp_name'], $path);

        $query = "INSERT INTO `broodjes`(`naam`, `vorm`, `soort`, `gewicht`,`image`) VALUES (:naam,:vorm,:soort, :gewicht,:image)";

        $result = $dbh->prepare($query);

        $execute = $result->execute(array(":naam"=>$naam,":vorm"=>$vorm,":soort"=>$soort, ":gewicht" => $gewicht,":image" => $image));

        if ($execute) {
            header("location:index.php");
        }
        else {
            echo "FOR FUCK SAKES";
        }

    } catch (PDOException $error) {
        $error = "Database kan niet verbinden";
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
<nav>
    <a href="index.php">Overzicht</a>
</nav>
<form method="post" action="broodjetoevoegen.php" enctype="multipart/form-data">
    <br>
    <label for="type">Afbeelding</label>
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    <input type="file" name="userfile" id="userfile">
    <br>
    <br>
    <label for="type">Naam:</label>
    <input type="text" class="input" name="naam" required>
    <br>
    <br>
    <label for="type">Vorm:</label>
    <input type="text" class="input" name="vorm" required>
    <br>
    <br>
    <label for="type">Soort meel:</label>
    <input type="text" class="input" name="soort" required>
    <br>
    <br>
    <label for="type">Gewicht:</label>
    <input type="text" class="input" name="gewicht" required>
    <br>
    <br>
    <button type="submit" name="knop" >Submit</button>
</form>
<br>
</body>
</html>