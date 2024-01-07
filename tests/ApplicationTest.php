<?php

use DI\Container as DIContainer;
use Noeka\Application\Application;
use Noeka\DI\Container;
use PHPUnit\Framework\TestCase;

final class ApplicationTest extends TestCase
{
    public function testCanResolveDefaultContainerForApplication(): void
    {
	$app = new Application();

	$this->assertTrue($app->container instanceof Container);	
    }

    public function testCanResolveAnotherContainerForApplication(): void
    {
	$container = new DIContainer;
	$app = new Application($container);

	$this->assertTrue($app->container instanceof DIContainer);
    }
}
