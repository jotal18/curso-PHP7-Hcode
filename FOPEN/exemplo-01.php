<?php
// O w+ zera as informações do arquivo
//o a+ mantém as informações salvas anteriormente
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

?>