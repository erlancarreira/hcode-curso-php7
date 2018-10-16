<?php 

$conn = new PDO("mysql:host=localhost;dbname=hcode_usuarios", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASS)");

$login = "jose";
$pass = "12323213123";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);

$stmt->execute();

echo "INSERIDO COM SUCESSO";

