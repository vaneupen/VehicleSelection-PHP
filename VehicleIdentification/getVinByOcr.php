<!DOCTYPE html>
<html>
<head>
	<title>VehicleIdentificationService</title>
</head>
<body>
	<header>
		<h1>Vehicle Identification Service</h1>
	</header>
	<section>
		<article>
		<h1>getVinByOcr</h1>
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
					$client = new SoapClient($host.'/'.$product.'/'.$service.'/VehicleIdentificationService?wsdl',array('trace' => 1,'stream_context' => $context));

					// Änderung des Web Service Endpoints 
					$client->__setLocation($host.'/'.$product.'/'.$service.'/VehicleIdentificationService');

					// setzen der Parameter
					$imageBase64='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';

					$parameter = new \stdClass();
					$parameter->request = new \stdClass();
					$parameter->request->sessionID = '';
					$parameter->request->imageBase64 = $imageBase64;

					// SOAP call
					$response = $client->getVinByOcr($parameter);

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