<?php

namespace Src;

use Src\Request;
use Src\Dispatcher;
use Src\RouteCollection;

class Router
{

<<<<<<< HEAD
    protected $route_collection;

    public function __construct()
    {

        $this->route_collection = new RouteCollection;
        $this->dispacher = new Dispatcher;
    }

    public function get($pattern, $callback)
    {

        $this->route_collection->add('get', $pattern, $callback);
        return $this;
    }

    public function post($pattern, $callback)
    {

        $this->route_collection->add('post', $pattern, $callback);
        return $this;
    }

    public function put($pattern, $callback)
    {

        $this->route_collection->add('put', $pattern, $callback);
        return $this;
    }

    public function delete($pattern, $callback)
    {

        $this->route_collection->add('delete', $pattern, $callback);
        return $this;
    }

    public function find($request_type, $pattern)
    {
        return $this->route_collection->where($request_type, $pattern);
    }

    protected function dispach($route, $params, $namespace = "App\\"){

        return $this->dispacher->dispach($route->callback, $params, $namespace);
    }

    protected function notFound()
    {
        return header("HTTP/1.0 404 Not Found", true, 404);
    }


    public function resolve($request){

        $route = $this->find($request->method(), $request->uri());

        if($route)
        {

            $params = $route->callback['values'] ? $this->getValues($request->uri(), $route->callback['values']) : [];

            return $this->dispach($route, $params);
        }
        return $this->notFound();

    }

    protected function strposarray(string $haystack, array $needles, int $offset = 0)
    {
        $result = false;
        if(strlen($haystack) > 0 && count($needles) > 0)
        {
            foreach($needles as $element){
                $result = strpos($haystack, $element, $offset);
                if($result !== false)
                {
                    break;
                }
            }
        }
        return $result;
    }


    protected function toMap($pattern)
    {

        $result = [];

        $needles = ['{', '[', '(', "\\"];

        $pattern = array_filter(explode('/', $pattern));

        foreach($pattern as $key => $element)
        {
            $found = $this->strposarray($element, $needles);

            if($found !== false)
            {
                if(substr($element, 0, 1) === '{')
                {
                    $result[preg_filter('/([\{\}])/', '', $element)] = $key - 1;
                } else {
                    $index = 'value_' . !empty($result) ? count($result) + 1 : 1;
                    array_merge($result, [$index => $key - 1]);
                }
            }
        }
        return count($result) > 0 ? $result : false;
    }

    protected function getValues($pattern, $positions)
    {
        $result = [];

        $pattern = array_filter(explode('/', $pattern));

        foreach($pattern as $key => $value)
        {
            if(in_array($key, $positions)) {
                $result[array_search($key, $positions)] = $value;
            }
        }

        return $result;

    }

    public function translate($name, $params)
    {
        $pattern = $this->route_collection->isThereAnyHow($name);

        if($pattern)
        {
            $protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
            $server = $_SERVER['SERVER_NAME'] . '/';
            $uri = [];

            foreach(array_filter(explode('/', $_SERVER['REQUEST_URI'])) as $key => $value)
            {
                if($value == 'public') {
                    $uri[] = $value;
                    break;
                }
                $uri[] = $value;
            }
            $uri = implode('/', array_filter($uri)) . '/';

            return $protocol . $server . $uri . $this->route_collection->convert($pattern, $params);
        }
        return false;
    }

=======
protected $route_collection;

public function __construct()
{

$this->route_collection = new RouteCollection;
$this->dispacher = new Dispatcher;
}

public function get($pattern, $callback)
{

$this->route_collection->add('get', $pattern, $callback);
return $this;
}

public function post($pattern, $callback)
{

$this->route_collection->add('post', $pattern, $callback);
return $this;
}

public function put($pattern, $callback)
{

$this->route_collection->add('put', $pattern, $callback);
return $this;
}

public function delete($pattern, $callback)
{

$this->route_collection->add('delete', $pattern, $callback);
return $this;
}

public function find($request_type, $pattern)
{
return $this->route_collection->where($request_type, $pattern);
}

protected function dispach($route, $params, $namespace = "App\\"){

return $this->dispacher->dispach($route->callback, $params, $namespace);
}

protected function notFound()
{
return header("HTTP/1.0 404 Not Found", true, 404);
}

public function resolve($request){

$route = $this->find($request->method(), $request->uri());

if($route)
{

$params = $route->callback['values'] ? $this->getValues($request->uri(), $route->callback['values']) : [];

return $this->dispach($route, $params);
}
return $this->notFound();

}

protected function getValues($pattern, $positions)
{
$result = [];

$pattern = array_filter(explode('/', $pattern));

foreach($pattern as $key => $value)
{
if(in_array($key, $positions)) {
$result[array_search($key, $positions)] = $value;
}
}

return $result;

}

public function translate($name, $params)
{
$pattern = $this->route_collection->isThereAnyHow($name);

if($pattern)
{
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$server = $_SERVER['SERVER_NAME'] . '/';
$uri = [];

foreach(array_filter(explode('/', $_SERVER['REQUEST_URI'])) as $key => $value)
{
if($value == 'public') {
$uri[] = $value;
break;
}
$uri[] = $value;
}
$uri = implode('/', array_filter($uri)) . '/';

return $protocol . $server . $uri . $this->route_collection->convert($pattern, $params);
}
return false;
}
>>>>>>> 05c1b2a74958ed8537afe0667872cab95725c04a
}