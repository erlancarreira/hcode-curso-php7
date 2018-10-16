<?php 

$conn = new PDO("sqlsrv:Database=hcode_usuarios;server=localhost\SQLEXPRESS01;ConnectionPooling=0", "sa", "123456" );

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong>".$key.":</strong>".$value."<br/>";
	}

	echo "---------------------------------<br>";
}

