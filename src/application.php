<?php
namespace Digient\Framework;

use Digient\Framework\Session;
use Digient\Framework\Request;
use Digient\Framework\Route;

class Application
{
    public function run()
    {
        $session    = new Session();
        $user       = Session::checkLogin();

        $request    = new Request();

        $route      = new Route($request);
    }
}

?>