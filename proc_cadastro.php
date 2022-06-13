<?php

$nome = $_GET["nome"];
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


$sql = "INSERT INTO tb_cadastro (nome, email, senha) VALUES ('$nome', '$email','$senha')";

if($conn->query($sql) === TRUE){
    echo "Cadastro realizado";
} else {
   echo "Erro:" . $sql . "<br>" . $conn->error;
}

$conn->close()

?>