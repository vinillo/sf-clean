<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('twitter_homepage', new Route('/hello/{name}', array(
    '_controller' => 'TwitterBundle:Default:index',
)));

return $collection;
