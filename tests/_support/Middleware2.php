<?php

namespace Tests;

use Phalcon\Mvc\User\Plugin;
use Sid\Phalcon\AuthMiddleware\MiddlewareInterface;

class Middleware2 extends Plugin implements MiddlewareInterface
{
    public function authenticate() : bool
    {
        $this->dispatcher->setReturnedValue("Goodbye cruel world");
        
        return true;
    }
}
