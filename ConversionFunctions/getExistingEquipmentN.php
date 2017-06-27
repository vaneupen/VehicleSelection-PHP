<!DOCTYPE html>
<html>
<head>
	<title>ConversionFunctionsService</title>
</head>
<body>
	<header>
		<h1>Conversion Functions Service</h1>
	</header>
	<section>
		<article>
		<h1>getExistingEquipmentN</h1>
			<p>
			<?php
				require( '../includes/configure.php' );
				ini_set('display_errors', true);
				header('Content-Type: text/html');
				try {
					// setzen der Credentials im HTTP-Header
					$aHTTP['http']['header'] = "User-Agent: PHP-SOAP/5.5.11\r\n";
					$aHTTP['http']['header'].= "productVariant: ".$productVariant."\r\n";
					$aHTTP['http']['header'].= "customerLogin: ".$customerLogin."\r\n";
					$aHTTP['http']['header'].= "customerNumber: ".$customerNumber."\r\n";
					$aHTTP['http']['header'].= "customerSignature: ".$customerSignature."\r\n";
					$aHTTP['http']['header'].= "interfacePartnerNumber: ".$interfacePartnerNumber."\r\n";
					$aHTTP['http']['header'].= "interfacePartnerSignature: ".$interfacePartnerSignature."\r\n";
					$context = stream_context_create($aHTTP);

					// WSDL-URL_Adresse 
					$client = new SoapClient($host.'/'.$product.'/'.$service.'/ConversionFunctionsService?wsdl',array('trace' => 1,'stream_context' => $context));

					// Änderung des Web Service Endpoints 
					$client->__setLocation($host.'/'.$product.'/'.$service.'/ConversionFunctionsService');

					// setzen der Parameter
					$constructionTimeFrom='1';
					$constructionTimeTo='9999';
					$restriction='ALL';
					$datECode='019050450050032';
					$container='DE00G';
					$constructionTime='3791';

					$parameter = new \stdClass();
					$parameter->request = new \stdClass();
					$parameter->request->locale = new \stdClass();
					$parameter->request->sessionID = '';
					$parameter->request->locale->country =  $country;
					$parameter->request->locale->datCountryIndicator = $datCountryIndicator;
					$parameter->request->locale->language = $language;
					$parameter->request->constructionTimeFrom = $constructionTimeFrom;
					$parameter->request->constructionTimeTo = $constructionTimeTo;
					$parameter->request->restriction = $restriction;
					$parameter->request->datECode = $datECode;
					$parameter->request->container = $container;
					$parameter->request->constructionTime = $constructionTime;

					// SOAP call
					$response = $client->getExistingEquipmentN($parameter);

					if (is_soap_fault($response)) {
						// Ausgabe des SOAP Fehlers
						trigger_error('SOAP Fault: (faultcode: {$objConversions->faultcode}, faultstring: {$objConversions->faultstring})', E_USER_ERROR);
						print_r('REQUEST-Header: ' .$client->__getLastRequestHeaders() );
						print_r('REQUEST: ' .$client->__getLastRequest() . '\n');
						print_r('RESPONSE-Header: ' . $client->__getLastResponseHeaders() . '\n');
					}

					echo '<pre>';
						// Ausgabe des SOAP Calls (Request, Header und Response
						print_r('REQUEST-Header:\n' .$client->__getLastRequestHeaders() );
						print_r('REQUEST:\n ' .htmlentities($client->__getLastRequest()) . '\n');
						print_r('RESPONSE-Header:\n ' . $client->__getLastResponseHeaders() . '\n');
						print_r('RESPONSE:\n' .htmlentities($client->__getLastResponse()) . '\n\n');
						print_r($response);
					echo '</pre>';

				} catch (SoapFault  $e) {
						// Error Handling
						$errorHandled = false;
						echo '<pre>';
						print_r($e);
						echo '</pre>';

						$exception = $e->getMessage();
				}
			?>
		</p>
	</article>
	</section>
	<footer>
		<h1>Fertig</h1>
	</footer>
	<p>
		<a href='../index.php' target='_self'>Startseite</a>
	</p>
</body>
</html>