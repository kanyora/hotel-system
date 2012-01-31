<?php

	require_once('inpatient/urls.php');
	require_once('outpatient/urls.php');

	$patient_index = new Route("$BASE_URL/patients/");
	$patient_index->setMapClass('Patient')->setMapMethod('index');
	$router->addRoute('patient-index', $patient_index);

?>