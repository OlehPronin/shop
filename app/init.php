<?php
    require_once 'core/App.php';
    require_once 'core/Controller.php';

    use Pecee\SimpleRouter\SimpleRouter;

/* Load external routes file */ 
require_once 'routes.php';

/**
 * The default namespace for route-callbacks, so we don't have to specify it each time.
 * Can be overwritten by using the namespace config option on your routes.
 */

SimpleRouter::setDefaultNamespace('\Demo\Controllers');

// Start the routing
SimpleRouter::start(); 

