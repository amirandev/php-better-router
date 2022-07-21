<?php
namespace Core\Router;

// In this router there will be only required params
class Router {
    // $routes variable will keep all the routes
    public $routes = [
        'names'  => [],
        'paths'  => [],
        'params' => []
    ];
    
    // $uri returns the URI
    public $uri;
    
    // Keep the route path permamently
    public $KeepPermamentPath;
    
    public function __construct(){
        $this->uri = $_SERVER['REQUEST_URI'];
    }
    
    public function __call($method, $args)
    {
        return $this->call($method, $args);
    }

    public static function __callStatic($method, $args)
    {
        return (new static())->call($method, $args);
    }

    private function call($method, $args)
    {
        if (! method_exists($this , '_' . $method)) {
            throw new Exception('Call undefined method ' . $method);
        }

        return $this->{'_'.$method}(...$args);
    }
    
    public function _get(string $setPath, string $setControllerMethod){
        $setPath = rtrim(trim($setPath), '/');
        $setPath = empty($setPath) ? '/' : $setPath;
        $setControllerMethod = trim($setControllerMethod);
        
        $this->routes['paths'][$setPath] = [
            'path' => $setPath,
            'call' => $setControllerMethod,
            'methods' => ['get']
        ];
        
        $this->KeepPermamentPath = $setPath;
        
        return $this;
    }
    
    public function name(string $setName){
        // How can we touch 
        $setName = trim($setName);
        
        // set name to the route
        $this->routes['paths'][$this->KeepPermamentPath]['name'] = $setName;
        
        // set the array to `route by names`
        $this->routes['names'][$setName] = $this->routes['paths'][$this->KeepPermamentPath];
        
        return $this;
    }
    
    public function _getWholeObject(){

        return $this;
    }
    
    
}