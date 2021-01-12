<?php
$host = "sql311.epizy.com";
$port = "3306";
$user = "epiz_27438245";
$pass = "UcIxn9Qa5oXEcnv";
$db = "epiz_27438245_maakeendatabaseeenrandomnaam";
$message = "";

try {
    $dbh = new PDO("mysql:host=" . $host . ";dbname=" . $db . ";port=" . $port, $user, $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage()."<br/>";
    die();
}