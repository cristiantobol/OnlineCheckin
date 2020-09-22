<?php

require_once('utils/XmlToArray.php');

$interfaceHandlerURL = "http://localhost/V8/FidelioIISWrapper.dll/FidelioXMLInterface.DataHandler";
$xml = file_get_contents('XML/CountriesRequest.xml', null);

$post_data = array(
    "xml" => $xml,
);

$data_len = strlen($xml);

function prepare_headers($headers)
{
    return
        implode('', array_map(function ($key, $value) {
            return "$key: $value\r\n";
        }, array_keys($headers), array_values($headers)));
}

$headers = array(
    'Content-Type' => 'application/xml',
    'Accept' => 'application/xml',
    'Content-Length' => $data_len
);

$context = stream_context_create(array(
    'http' => array(
        'method' => 'POST',
        'header' => prepare_headers($headers),
        'content' => $xml
    )
));

$response = file_get_contents($interfaceHandlerURL, null, $context);
$xmlResponse = simplexml_load_string($response);

$xmlToArr = new xmlToArray($xmlResponse->response->queryResponse->rows);

//var_dump($xmlToArr->xmlToArray());
echo json_encode($xmlToArr->xmlToArray());

?>