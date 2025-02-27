<?php

  namespace App;

  class Route {

    private $routes;

    public function __construct() {
      $this->initRoutes();
    }

    public function getRtoutes() {
    }

    public function setRoutes(array $routes) {
      $this->routes = $routes;
    }


    public function initRoutes() {

        $routes ['home'] = array(
          'route' => '/',
          'controller' => 'indexController',
          'action' => 'index'
        );

        $routes ['sobre_nos'] = array(
          'route' => '/sobre_nos',
          'controller' => 'indexController',
          'action' => 'sobre_nos'
        );

        $this->setRoutes($routes);

    }
    public function getUrl() {
      return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
  }

?>