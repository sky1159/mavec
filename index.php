<?php
header('Content-Type: text/html; charset=UTF-8');
if (file_exists('./admin/actions/precheck.php'))
{
	$testing_from = '';
	require_once './admin/actions/precheck.php';
}
$response = '';
try
{
	require_once 'admin/config/ProjectConfig.php';
	ProjectConfig::setup();
	$options = array();
	$application = new Moto_Html_Application($options);
	$response = $application->dispatch();
}
catch(Exception $e)
{
	echo '<b>Exception</b>: ';
	echo $e->getMessage();
}
echo $response;
