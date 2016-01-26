<?php
	require("includes/application_top.php") ;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_SERVER["SERVER_NAME"]; ?></title>
</head>

<body>
<?php
    echo "<H1>Schnittstellenfunktionen der DAT-&euro;uropa-Code &copy; Fahrzeugauswahl</H1>";
    echo "<H2>Conversion Functions Service</H2>";
?> 
<p>
[ <a href='ConversionFunctions/constructionTime2Date.php' target='_self'>constructionTime2Date</a> ]
[ <a href='ConversionFunctions/date2ConstructionTime.php' target='_self'>date2ConstructionTime</a> ]
[ <a href='ConversionFunctions/getEquipmentFromManufacturerCodeN.php' target='_self'>getEquipmentFromManufacturerCodeN</a> ]
[ <a href='ConversionFunctions/getEquipmentGroups.php' target='_self'>getEquipmentGroups</a> ]
[ <a href='ConversionFunctions/getExistingEquipmentN.php' target='_self'>getExistingEquipmentN</a> ]
[ <a href='ConversionFunctions/getPossibleEquipmentN.php' target='_self'>getPossibleEquipmentN</a> ]
[ <a href='ConversionFunctions/valueCode2Description.php' target='_self'>valueCode2Description</a> ]
</p>
<?php
    echo "<H2>Vehicle Selection Service</H2>";
?> 
<p>
<H3>Beispiel Suchbaum</H3>
[ <a href='VehicleSelection/getVehicleTypes.php' target='_self'>getVehicleTypes</a> ]
[ <a href='VehicleSelection/getManufacturers.php' target='_self'>getManufacturers</a> ]
[ <a href='VehicleSelection/getBaseModels.php' target='_self'>getBaseModels</a> ]
[ <a href='VehicleSelection/getSubModels.php' target='_self'>getSubModels</a> ]
[ <a href='VehicleSelection/getClassificationGroups.php' target='_self'>getClassificationGroups</a> ]
[ <a href='VehicleSelection/getEngineOptions.php' target='_self'>getEngineOptions</a> ]
[ <a href='VehicleSelection/getCarBodyOptions.php' target='_self'>getCarBodyOptions</a> ]
[ <a href='VehicleSelection/getGearingOptions.php' target='_self'>getGearingOptions</a> ]
[ <a href='VehicleSelection/getEquipmentLineOptions.php' target='_self'>getEquipmentLineOptions</a> ]
</br>
[ <a href='VehicleSelection/compileDatECode.php' target='_self'>compileDatECode</a> ]
</br>
[ <a href='VehicleSelection/getPriceFocusCases.php' target='_self'>getPriceFocusCases</a> ]
[ <a href='VehicleSelection/getConstructionPeriods.php' target='_self'>getConstructionPeriods</a> ]
</br>
<H3>Volltext Suche</H3>
[ <a href='VehicleSelection/getSubModelsByTextSearch.php' target='_self'>getSubModelsByTextSearch</a> ]
<H3>Technische Daten</H3>
[ <a href='VehicleSelection/getVehicleData.php' target='_self'>getVehicleData</a> ]
<H3>Sonstige Funktionen</H3>
[ <a href='VehicleSelection/getConstructionOptions.php' target='_self'>getConstructionOptions</a> ]
[ <a href='VehicleSelection/getDriversCabOptions.php' target='_self'>getDriversCabOptions</a> ]
[ <a href='VehicleSelection/getGrossVehicleWeightOptions.php' target='_self'>getGrossVehicleWeightOptions</a> ]
[ <a href='VehicleSelection/getNumberOfAxleOptions.php' target='_self'>getNumberOfAxleOptions</a> ]
[ <a href='VehicleSelection/getOptionsbyClassification.php' target='_self'>getOptionsbyClassification</a> ]
[ <a href='VehicleSelection/getPriceFocusConstructionYears.php' target='_self'>getPriceFocusConstructionYears</a> ]
[ <a href='VehicleSelection/getSuspensionOptions.php' target='_self'>getSuspensionOptions</a> ]
[ <a href='VehicleSelection/getTypeOfDriveOptions.php' target='_self'>getTypeOfDriveOptions</a> ]
[ <a href='VehicleSelection/getVersion.php' target='_self'>getVersion</a> ]
[ <a href='VehicleSelection/getWheelBaseOptions.php' target='_self'>getWheelBaseOptions</a> ]
</p>
<?php
    echo "<H2>Vehicle Identification Service</H2>";
?> 
<p>
[ <a href='VehicleIdentification/getVehicleIdentification.php' target='_self'>getVehicleIdentification</a> ]
[ <a href='VehicleIdentification/getVehicleIdentificationByKba.php' target='_self'>getVehicleIdentificationByKba</a> ]
[ <a href='VehicleIdentification/getVehicleIdentificationByNationalCodeAustria.php' target='_self'>getVehicleIdentificationByNationalCodeAustria</a> ]
[ <a href='VehicleIdentification/getVehicleIdentificationByCodeSwitzerland.php' target='_self'>getVehicleIdentificationByCodeSwitzerland</a> ]
[ <a href='VehicleIdentification/getVinByLicencePlateItaly.php' target='_self'>getVinByLicencePlateItaly</a> ]
[ <a href='VehicleIdentification/getVehicleIdentificationByVin.php' target='_self'>getVehicleIdentificationByVin</a> ]
[ <a href='VehicleIdentification/getVehicleTranslation.php' target='_self'>getVehicleTranslation</a> ]
[ <a href='VehicleIdentification/getVinByOcr.php' target='_self'>getVinByOcr</a> ]
</p>
<?php
    echo "<H2>Vehicle Imagery</H2>";
?> 
<p>
[ <a href='VehicleImagery/getVehicleImages.php' target='_self'>getVehicleImages</a> ]
</p>
<?php
    echo "<H2>Hilfe</H2>";
?> 
<p>
[ <a href='http://www.dat.de' target='_blank'>DAT</a> ]
[ <a href='http://www.dat.de/fileadmin/media/download/download-KD/Schnittstellen-Kompendium/online/DAT_Schnittstellen/deutsch/SilverDAT%20Schnittstellen-Kompendium' target='_blank'>SilverDAT Schnittstellen-Kompendium</a> ]
[ <a href='https://github.com/DATGROUP' target='_blank'>GitHub</a> ]
</p>
</body>
</html>
