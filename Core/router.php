<?php

class Router {
    protected $routes = [];
    
    public function addToRoutes($url, $controller, $method, $middleware = null){
        $this->routes [] = [
            'url' => $url,
            'controller' => $controller,
            'method' => $method,
            'middleware' => $middleware
        ];

        return $this;
    }
    public function get($url, $controller){
        return $this->addToRoutes($url, $controller, 'GET');
    }

    public function post($url, $controller){
        return $this->addToRoutes($url, $controller, 'POST');
    }
    public function delete($url, $controller){
       return $this->addToRoutes($url, $controller, 'DELETE');
    } 

    public function only($middleware){
        $this->routes[array_key_last($this->routes)]['middleware'] = $middleware;
        dd($this);
    }

    public function routeTo($url, $method){
        foreach ($this->routes as $route) {
            if ($route['url'] === $url && $route['method'] === strtoupper($method)) {
                 require $route['controller'];
            }
        }
        abort();
    }
}