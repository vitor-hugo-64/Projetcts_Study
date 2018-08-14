<?php

require_once('vendor/autoload.php');

use \Slim\App;
use \CO\Page;
use \CO\Courier;

$config = array( 'settings' => array( 'addContentLengthHeader' => false), 'debug' => true);

$app = new App($config);

$app->get( '/', function ()
{
	$page = new Page();
	$page->drawPage( 'index');
});

$app->post( '/caculation-freight-deadline', function ()
{
	$courier = new Courier();
	$courier->setDatas( $_POST);
	$response = $courier->calculatePriceAndTerm();
	echo json_encode( $response);
});

$app->run();