<?php



class Router
{
    private $url;
    private $routes = [];
    private $namedRoutes = [];

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function index()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = explode('/', rtrim($url, '/'));

        if($url[1] != "api")
        {
            $this->acceuil();
        }
        else
        {
            $method = $_SERVER['REQUEST_METHOD'];

            switch ($method)
            {
                case 'DELETE':
                    $this->delete($url[2], $url[3]);
                    break;
                case 'POST':
                    $this->post($url[2], $url[3], $url[4], $url[5], $url[6]);
                    break;
                case 'GET':
                    $this->get($url[2], $url[3]);
                    break;
                default:
                    $this->response('Method Not Allowed', 405);
                    break;
            }
        }
    }

    public function get($path, $callable, $name = null)
    {
        return $this->add($path, $callable, $name, 'GET');
    }

    public function post($path, $callable, $name = null)
    {
        return $this->add($path, $callable, $name, 'POST');
    }

    public function add($path, $callable, $name, $method)
    {
        $route = new Route($path, $callable);
        $this->routes[$method][] = $route;

        if ($name)
        {
            $this->namedRoutes[$name] = $route;
        }
        return $route;
    }

    public function run()
    {
        if(!isset($this->routes[$_SERVER['REQUEST_METHOD']]))
        {
            throw new RouterException('REQUEST_METHOD does not exist');
        }

        foreach ($this->routes[$_SERVER['REQUEST_METHOD']] as $route)
        {
            if ($route->match($this->url))
            {
                return $route->call();
            }
        }
        throw new RouterException('No matching routes');
    }
}