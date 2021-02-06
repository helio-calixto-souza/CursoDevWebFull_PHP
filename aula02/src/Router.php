<?php
 
namespace Src;
 
use Src\Request;
use Src\Dispatcher;
use Src\RouteCollection;
 
class Router 
{
     
    protected $route_collection;
 
    public function __construct()
    {
 
        $this->route_collection = new RouteCollection;
        $this->Dispatcher = new Dispatcher;
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
}