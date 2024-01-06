<?php

namespace Noeka\Application;

use Psr\Container\ContainerInterface;
use Noeka\DI\Container;

class Application {
    protected ContainerInterface $container;

    public function __construct()
    {
        $this->container = new Container;
    }
}

