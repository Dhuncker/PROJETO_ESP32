<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "motor";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("falha em conexão:" . mysqli_connect_error());
    }
    
    echo "Connected successfully!";

    if (isset($_POST['velocidade']) && isset($_POST['rpm'])) {
        $vel = $_POST['velocidade'];
        $rpm = $_POST['rpm'];
    }
        
$sql = "insert into table_motor (id, nome) values ('$vel', '$rpm')";

mysqli_query($conn, $sql);

mysqli_close($conn);
?>  