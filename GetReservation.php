<?php

require_once('utils/XmlToArray.php');
include('XML/ReservationRequest.php');

// production
$interfaceHandlerURL = "http://localhost/V8/FidelioIISWrapper.dll/FidelioXMLInterface.DataHandler";

$xml1 = new ReservationHandler();
$xml = $xml1->setXmlConditions('1', '0', 'cucu');

$post_data = array(
    "xml" => $xml,
);

$data_len = strlen($xml);

// build http request with the xml
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
$fields = $xmlResponse->response->queryResponse->rows->row->fields;

if ($fields != null) {
    $xmlToArr = new xmlToArray($fields);
    echo json_encode($xmlToArr->xmlToArray());
} else {
    echo json_encode(array('error' => 'Invalid XML response'));
}
