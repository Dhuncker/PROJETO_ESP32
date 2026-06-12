<?php
include("salvar_dados.php");

$sql = "SELECT...";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();


echo json_encode([
"id" => $row["1"],
"vel" => $row["12km/h"],
"RPM" => $row["130"]
]);
}
$conn->close();
?>