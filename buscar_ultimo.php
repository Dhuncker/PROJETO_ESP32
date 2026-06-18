<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("falha em conexão:" . mysqli_connect_error());
    }

$sql = 'SELECT * FROM table_motor ORDER BY id DESC LIMIT 1'; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();


echo json_encode([
"velocidade" => $row["vel"],
"rpm" => $row["RPM"]
]);
}



?>