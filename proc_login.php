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
 //query
$sql = "SELECT * FROM tb_cadastro where email='$email' and senha='$senha'";

//armazena resultado da query
$result = $conn->query($sql);

//checa se tem retorno no select, se tiver, login realizado
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