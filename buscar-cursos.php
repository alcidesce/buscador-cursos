<?php

use \GuzzleHttp\Client;

$client = new Client();

$resposta = $client->request('GET','https://www.alura.com.br/formacao-desenvolvedor-php');

$html = $resposta->getBody();
