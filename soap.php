<?php
define("DEBUG", TRUE);
$id_exp = "E";

ini_set('display_errors', 'On');
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 0);
ini_set('default_socket_timeout', 600);

$options = array(
	'location'				=> 'http://gprs.nacex.com/nacex_ws/soap',
	'trace'					=> 1,
	'exceptions'			=> 1,
	'style'					=> SOAP_DOCUMENT,
	'use'					=> SOAP_LITERAL,
	'soap_version'			=> SOAP_1_1,
	'encoding'				=> 'UTF-8',
	'connection_timeout'	=> 1000
);

$nacex = @new SoapClient("http://gprs.nacex.com/nacex_ws/soap?wsdl", $options);

$response = $nacex->getInfoEnvio(
	array(
		'String_1' => 'USUARIO',
		'String_2' => md5('PASSWORD'),
		'String_3' => 'E',
		'String_4' => '',
		'String_5' => 'NUM1',
		'String_6' => 'NUM2',
	)
);
echo('<pre>');
print_r($response);
echo('</pre>');
