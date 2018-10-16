<?php 
$ts = strtotime("2001-09-11");

echo "Data\r";
echo date("d/m/Y ")."\r\r";


echo "Data e hora\r";
echo date("d/m/Y H:i:s")."\r\r";

echo "Timestamp\r";
echo time()."\r\r";

echo "Converte string para timestamp\r";
echo strtotime("2001-09-11"). "\r \r";

echo date("l, d/m/Y", $ts). "\r \r";

echo "---------------------------------------". "\r \r";

// LC_ALL Mude toda a localizacao que eu tenho para a qual eu setei.
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

echo ucwords(strftime("%A %B")) . "\r\r";

echo "---------------------------------------". "\r \r";

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s"). "\r \r";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s"). "\r \r";