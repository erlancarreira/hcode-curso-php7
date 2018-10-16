<?php 

$conn = new PDO("mysql:host=localhost;dbname=hcode_usuarios", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 8;

$stmt->execute(array($id));

// $conn->rollback();

$conn->commit();

echo "DELETADO COM SUCESSO";

