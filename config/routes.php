<?php
use Cake\Routing\Router;

Router::scope('/', ['plugin' => 'FullCalendar'], function ($routes) {
    $routes->extensions(['json', 'xml']);
    $routes->connect('/full-calendar', ['controller' => 'FullCalendar']);
    $routes->connect('/full-calendar/index', ['controller' => 'FullCalendar', 'action' => 'index']);
    $routes->connect('/events', ['controller' => 'Events', 'action' => 'index']);
    $routes->connect('/events/index', ['controller' => 'Events', 'action' => 'index']);
    $routes->connect('/events/add', ['controller' => 'Events', 'action' => 'add']);
    $routes->connect('/events/feed', ['controller' => 'Events', 'action' => 'feed']);
    $routes->connect('/events/view/*', ['controller' => 'Events', 'action' => 'view']);
    $routes->connect('/events/edit/*', ['controller' => 'Events', 'action' => 'edit']);
    $routes->connect('/events/delete/*', ['controller' => 'Events', 'action' => 'delete']);
    $routes->connect('/events/update/*', ['controller' => 'Events', 'action' => 'update']);
    $routes->connect('/event-types', ['controller' => 'EventTypes', 'action' => 'index']);
    $routes->connect('/event-types/index', ['controller' => 'EventTypes', 'action' => 'index']);
    $routes->connect('/event-types/add', ['controller' => 'EventTypes', 'action' => 'add']);
    $routes->connect('/event-types/view/*', ['controller' => 'EventTypes', 'action' => 'view']);
    $routes->connect('/event-types/edit/*', ['controller' => 'EventTypes', 'action' => 'edit']);
    $routes->connect('/event-types/delete/*', ['controller' => 'EventTypes', 'action' => 'delete']);
    $routes->connect('/pages/*', ['plugin' => null, 'controller' => 'Pages', 'action' => 'display']);
    $routes->fallbacks('DashedRoute');
});