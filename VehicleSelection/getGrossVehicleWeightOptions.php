<!DOCTYPE html>
<html>
<head>
	<title>VehicleSelectionService</title>
</head>
<body>
	<header>
		<h1>Vehicle Selection Service</h1>
	</header>
	<section>
		<article>
		<h1>getGrossVehicleWeightOptions</h1>
			<p>
			<?php
				require( "../includes/configure.php" );
				ini_set("display_errors", true);
				header("Content-Type: text/html");
				try {
					$wsdlDatei_eval = new SoapClient($host."/DATECodeSelection/services/Authentication?wsdl",
										array('features' => SOAP_WAIT_ONE_WAY_CALLS, 'trace' => true,
										'exceptions' => 1, 'cache_wsdl'=>'WSDL_CACHE_NONE','encoding' => 'UTF-8',
										'uri' => 'http://sphinx.dat.de/services/Authentication',
										'soap_version' => SOAP_1_1 ));

					$loginRequest = new SoapVar('<request>
									<customerLogin>'.$customerLogin.'</customerLogin>
									<customerNumber>'.$customerNumber.'</customerNumber>
									<customerSignature>'.$customerSignature.'</customerSignature>
									<interfacePartnerNumber>'.$interfacePartnerNumber.'</interfacePartnerNumber>
									<interfacePartnerSignature>'.$interfacePartnerSignature.'</interfacePartnerSignature>
									</request>', XSD_ANYXML); 

					$tag['doLogin'] = $loginRequest;
					$preLogin = new SoapVar($tag, SOAP_ENC_OBJECT);
					$getSessionId = array($preLogin);

					$objLogin = $wsdlDatei_eval -> __soapCall('doLogin',$getSessionId);
					$sessionID = $objLogin->sessionID;

					//echo "SessionID = ";
					//echo $sessionID;

					// Store all cookies that have been sent by the first call (including their path-component)
					$responseCookies = $wsdlDatei_eval->_cookies;
					$keys = array_keys($responseCookies);
					$requestCookies=array();
					foreach($keys as $k) {
						$requestCookies[$k] = $responseCookies[$k][0].";". $responseCookies[$k][1];
					}

					$wsdlDatei_eval2 = new SoapClient($host."/DATECodeSelection/services/VehicleSelectionService?wsdl",
										array('features' => SOAP_WAIT_ONE_WAY_CALLS, 'trace' => true,'exceptions' => 1,
										'cache_wsdl'=>'WSDL_CACHE_NONE','encoding' => 'UTF-8',
										'uri' => 'http://sphinx.dat.de/services/VehicleSelectionService',
										'soap_version' => SOAP_1_1));

					$constructionTimeFrom='1';
					$constructionTimeTo='9999';
					$restriction='ALL';
					$vehicleType='4';
					$manufacturer='285';
					$baseModel='6';
					$subModel='1';

					$request = new SoapVar('<request>
								<locale country="'.$country.'" datCountryIndicator="'.$datCountryIndicator.'" language="'.$language.'"/>
								<constructionTimeFrom>'.$constructionTimeFrom.'</constructionTimeFrom>
								<constructionTimeTo>'.$constructionTimeTo.'</constructionTimeTo>
								<restriction>'.$restriction.'</restriction>
								<vehicleType>'.$vehicleType.'</vehicleType>
								<manufacturer>'.$manufacturer.'</manufacturer>
								<baseModel>'.$baseModel.'</baseModel>
								<subModel>'.$subModel.'</subModel>
								</request>',XSD_ANYXML);

					$tag['getGrossVehicleWeightOptions'] = $request;
					$prerequest = new SoapVar($tag, SOAP_ENC_OBJECT);
					$getCardata = array($prerequest);

					// Set the previously stored cookie for the request
					foreach($keys as $k) {
						$wsdlDatei_eval2 -> __setCookie($k, $requestCookies[$k]);
					}

					$objConversions = $wsdlDatei_eval2 -> __soapCall('getGrossVehicleWeightOptions', $getCardata);

					if (is_soap_fault($objConversions)) {
						trigger_error("SOAP Fault: (faultcode: {$objConversions->faultcode}, faultstring: {$objConversions->faultstring})", E_USER_ERROR);
						print_r("REQUEST-Header2: " .$wsdlDatei_eval2->__getLastRequestHeaders() . "");
						print_r("Last-REQUEST2: " .$wsdlDatei_eval2->__getLastRequest() . "");
						print_r("Last-RESPONSE2: " . $wsdlDatei_eval2->__getLastResponseHeaders() . "");
					}

					echo "<pre>";
						print_r("REQUEST-Header2: " .$wsdlDatei_eval2->__getLastRequestHeaders() . "");
						print_r("Last-REQUEST2: " .$wsdlDatei_eval2->__getLastRequest() . "");
						print_r("Last-RESPONSE2: " . $wsdlDatei_eval2->__getLastResponseHeaders() . "");

						print_r($objConversions );
					echo "</pre>";

					$wsdlDatei_eval->doLogout(); 

				} catch (SoapFault  $e) {
						$errorHandled = false;
						$wsdlDatei_eval->doLogout();
						echo "<pre>";
						print_r($e);
						echo "</pre>";

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
		<a href="../index.php" target="_self">Startseite</a>
	</p>
</body>
</html>