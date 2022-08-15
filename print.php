<?php

$host = "localhost";

$username = "root";

$password = "";

$conn = new PDO("mysql:host=$host;dbname=Control_panel", $username, $password);

$Front = $_GET['Front'];
$Back  = $_GET['Back'];
$Left  = $_GET['Left'];
$Right = $_GET['Right'];
$Stop  = $_GET['Stop'];


if(isset($Front)){
    echo "Front";
    $sql = "INSERT INTO Direction(Pvalues) VALUES('F')";
    $conn->query($sql);}
else if(isset($Back)){
    echo "Back";
    $sql = "INSERT INTO Direction(Pvalues) VALUES('B')";
    $conn->query($sql);}
else if(isset($Left)){
    echo "Left";
    $sql = "INSERT INTO Direction(Pvalues) VALUES('L')";
    $conn->query($sql);}
else if(isset($Right)){
    echo "Right";
    $sql = "INSERT INTO Direction(Pvalues) VALUES('R')";
    $conn->query($sql);}
else if(isset($Stop)){
    echo "Stop";
    $sql = "INSERT INTO Direction(Pvalues) VALUES('S')";
    $conn->query($sql);}
?>

<html>
    
    <body>

        <form action="main.php" method="GET"> </form>

    </body>

</html>