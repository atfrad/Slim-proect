<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
//use Slim\Factory\AppFactory;
//$app = AppFactory::create();

require'../vendor/autoload.php';
require '../include/connectionDB.php';

$app = new \Slim\App();
$app->get('/db', function (Request $request, Response $response, array $args) {
        $dbconnection = new connectionDB();
        $response->getBody()->write($dbconnection->connectTodb());
        return $response;
    //$name = $args['name'];

});

$app->run();
