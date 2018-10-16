<?php 

$conn = new PDO("mysql:host=localhost;dbname=hcode_usuarios", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASS WHERE idusuario = :ID");

$login = "juao";
$pass = "6532145";
$id = 4;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASS", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "ALTERADO COM SUCESSO";

