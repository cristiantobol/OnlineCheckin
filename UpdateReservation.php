<?php

require_once('utils/XmlToArray.php');
include('UpdateReservationRequest.php');

$interfaceHandlerURL = "http://localhost/V8/FidelioIISWrapper.dll/FidelioXMLInterface.DataHandler";

// TODO: generate random string
$xml1 = new UpdateReservationRequest(2249, '2240HLT1234');
$xml = $xml1->updateReservation();

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

$xmlToArr = new xmlToArray($xmlResponse->response);
echo json_encode($xmlToArr->xmlToArray());
