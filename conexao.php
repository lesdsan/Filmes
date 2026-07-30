<?php 
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cine";

$conn = new mysqli($host, $usuario, $senha, $banco);

if($conn->connect_error){
	die("erro na conexão: ". $conn->connect_error);
}