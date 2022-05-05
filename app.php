<?php
define('API_BASE','http://localhost/api/index.php?Produtos=');

echo '<p>APLICAÇÃO API COM PHP PURO</p>';

$resultado = api_request('ProdutosDisponiveis'); 
echo '<pre>';

print_r($resultado);

function api_request($option){
    $client = curl_init(API_BASE.$option);
    curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
    $response=curl_exec($client);
    return json_decode($response,true);

}


?>