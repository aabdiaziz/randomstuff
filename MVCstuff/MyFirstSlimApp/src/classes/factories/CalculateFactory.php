<?php

namespace Classes\factories;

use Psr\Container\ContainerInterface;
use Classes\controllers as Controllers;


class CalculateFactory
{
    public function __invoke(ContainerInterface $container)  {
        $renderer = $container->get('renderer');
        return new Controllers\ContactController($renderer);
    }
}