<?php

$dom = new DOMDocument();
$dom->load(__DIR__ . '/xml/teste.xml');

chdir(__DIR__ . '/../xsd/v2');

if ($dom->schemaValidate('dados_gnre_v2.00.xsd')) {
    echo "XML válido!";
} else {
    echo "XML inválido!";
}
