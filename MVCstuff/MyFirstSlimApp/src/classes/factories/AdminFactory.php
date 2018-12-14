<?php

namespace Classes\factories;

use Psr\Container\ContainerInterface;
use Classes\controllers as Controllers;


class AdminFactory
{
    public function __invoke(ContainerInterface $container)  {
        $renderer = $container->get('renderer');
        return new Controllers\AdminController($renderer);
    }

}