<?php
//vincular o cep e o link
$cep = "86083570";
$linkk = "https://viacep.com.br/ws/$cep/json/";

//iniciar a bilbioteca curl
$ch = curl_init($linkk);

//paramero esperado um retorno
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//parametro ssl
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0 );

//disparando a execução
$response = curl_exec($ch);

//fechando
curl_close($ch);

//gerando um array da resposta, com json
$data = json_decode($response, true);

//imprimindo na tela
print_r($data["bairro"]);
print_r($data["localidade"]);
print_r($data["ibge"]);
print_r($data["logradouro"]);
print_r($data["uf"]);

?>