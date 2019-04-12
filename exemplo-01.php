<?php

$cep = "013101000";
$link = "https://viacep.com.br/ws/$cep/json/";

//Iniciando a biblioteca 'cURL':
$ch = curl_init($link);

//Outro comando nescessário:
//Parâmetros: '$ch': Qual biblioteca', 
//             variável pré-definida': é esperado um retôrno em cima do que foi enviado',
//             (1)'ida e volta' ou '(0)': Só ida.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

//Outro comando nescessário:
//Parâmetros: '$ch': Qual biblioteca', 
//             variável pré-definida': é verificado o ssl, mas não verifica se está registrado numa AC válida,
//             (1)'ida e volta' ou '(0)': Só ida.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

//Disparando a execução e pegando a resposta:
$response = curl_exec($ch);

curl_close($ch);

//'json_decode()': A resposta virá como um array:
$data = json_decode($response, true);

//Imprimi na tela como um array:
print_r($data["localidade"]);

?>