<?php
/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\GrafanaDelAmor\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
return [
    'routes' => [
	['name' => 'page#index', 'url' => '/', 'verb' => 'GET'],
        ['name' => 'file#index', 'url' => '/files', 'verb' => 'GET'],
        ['name' => 'file#show', 'url' => '/files/{id}', 'verb' => 'GET'],
        ['name' => 'file#create', 'url' => '/files', 'verb' => 'POST'],
        ['name' => 'file#update', 'url' => '/files/{id}', 'verb' => 'PUT'],
        ['name' => 'file#destroy', 'url' => '/files/{id}', 'verb' => 'DELETE']
    ]
];
