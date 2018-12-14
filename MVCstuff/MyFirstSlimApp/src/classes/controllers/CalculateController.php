<?php

namespace Classes\controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use Slim\Views\PhpRenderer;

class CalculateController
{
    private $renderer;

    function __construct(PhpRenderer $renderer)
    {
        $this->renderer = $renderer;

    }
    function __invoke(Request $request, Response $response, $args)
    {
        return $this->renderer->render($response, 'contact.phtml', $args);
    }

}