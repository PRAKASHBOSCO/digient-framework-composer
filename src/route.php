<?php
namespace Digient\Framework;

use Digient\Framework\Request;

class Route
{

    private $routeUrl = [];

    public function __construct(Request $request)
    {
        require_once("/routes/route.php");

        $this->routeUrl = $routeUrl;

        self::set($this->routeUrl, $request);
    }

    public static function set(array $route, Request $request)
    {

        $url = ($request->input['url'] == 'index.php') ? '/' : '/'.$request->input['url'];

        if(isset($route[$url]))
        {
            // $function->__invoke();

            return $route[$url]($request);

        }

        echo 'Not Found';
        
    }
}

?>