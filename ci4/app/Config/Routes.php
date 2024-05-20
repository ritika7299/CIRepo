<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/user', 'User::index');
$routes->get('user/info', 'User::info');        //Information about user  
$routes->get('user/add', 'User::add');          //Add new user 
$routes->get('user/edit', 'User::edit');        //Update new user 
$routes->get('user/delete', 'User::delete');    //Delete user

