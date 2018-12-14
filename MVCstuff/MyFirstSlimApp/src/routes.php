<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/user/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/admin','Admin');
$app->get('/contact','Contact');
$app->post('/{number1}/{number2}','Calculate');

//$app->post('/band/{name}/{lastName}', function (Request $request, Response $response, array $args) {
//    // Sample log message
//    $this->logger->info("Slim-Skeleton '/' route");
//
//    // Render index view
//    return $this->renderer->render($response, 'Admin.phtml', $args);
//});
