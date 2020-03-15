<?php

require_once "vendor/autoload.php";

use Janaina\Desktop\Digital_cep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('01001000');

print_r($resultado);