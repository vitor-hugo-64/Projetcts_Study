<?php

require_once('vendor/autoload.php');

use \Slim\App;
use \ST\Page;
use \ST\Model\PageModel;

$config = array( 'settings' => array( 'addContentLengthHeader' => false), 'debug' => true);

$app = new App($config);

$app->get( '/', function ( $request, $response, $args) {

	$pageNumber = isset( $_GET['page']) ? $_GET['page'] : 1;

	$pageModel = new PageModel();
	$pagination = $pageModel->pagination( 'st_person', $pageNumber, 5);

	$page = new Page();

	$pagination = array( 
							'registers' => $pagination['registers'], 
							'all_pages' => $pagination['all_pages'], 
							'previous' => $pagination['previous'],
							'next' => $pagination['next'],
							'max' => $pagination['max'],
							'currentPage' => $pagination['currentPage']
						);

	// echo json_encode( $pagination);

	$page->drawPage( 'index', array( 'pagination' => $pagination));

});

$app->run();