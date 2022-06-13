<?php

$email = $_GET["email"];
$senha = $_GET["senha"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";


$conn = new mysqli($servername,$username,$password, $dbname);

if($conn->connect_error){
    die("Connection failed". $connect_error);

}



$sql = "SELECT * FROM tb_cadastro where email='$email' and senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "login realizado";
} else {
    echo "Erro" . $sql . "<br>" . $conn->error;
}

/*if($conn->query($sql) === TRUE){
    echo "Login realizado";
} else {
   echo "Erro" . $sql . "<br>" . $conn->error;
}*/

$conn->close()

?>