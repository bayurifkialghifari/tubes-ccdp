<?php

use App\Utils\Route;

$route = Route::getInstance();
$route->get('/', \App\Controller\HomeController::class, 'index');

// Authentication
$route->get('/login', \App\Controller\LoginController::class, 'index')->middleware('guest');
$route->post('/login', \App\Controller\LoginController::class, 'authenticate')->middleware('guest');
$route->post('/logout', \App\Controller\LoginController::class, 'logout');

$route->get('/dashboard', \App\Controller\DashboardController::class, 'index')->middleware('auth');


$route->checkRoute();