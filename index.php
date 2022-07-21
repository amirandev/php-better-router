<?php
require_once 'app/classes/Router.php';
use Core\Router\Router as Route;

/*
    I don't want to write like this:
    $routes = new Router()
    
    I want to write the router like Laravel Router
    But print_r(Route::Obj()) returns an empty object
    
    How is it possible to return the object with added routes?
*/

Route::get('/', 'IndexController::index')->name('index');
Route::get('/news', 'NewsController::News')->name('news');
Route::get('/about', 'AboutController::About')->name('about');

$getTheObject = Route::getWholeObject();

echo'<pre>';
    print_r($getTheObject);
echo'</pre>';

/*
    I don't wan't to write like this:
    
    $routes = new Route();
    $routes->get('/', 'IndexController::index')->name('index');
    $routes->get('/news', 'NewsController::News')->name('news');

    echo'<pre>';
    print_r($routes);
    echo'</pre>';
*/
