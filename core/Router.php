<?php

namespace app\core;


class router
{
    public Request $request;
    protected array $routes = [];


    //contsruct
    public function __construct(\app\core\Request $request)
    {
      $this->request = $request;
    }



    public function get($path,$callback)
    {
          $this->routes[$path] = $callback;
    }


    public function resolve()
    {
        $this->request->getPath();
    }
}