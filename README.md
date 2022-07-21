# php-better-router



I need some advice to sove the problem.

So, It's hard to exaplay what I want to. By the reason I'm gonna show you what I want to:

**I have this:**

    Route::get('/', 'IndexController::index')->name('index');
    Route::get('/news', 'NewsController::News')->name('news');

**Instead of** 

    $routes = new Route();
    $routes->get('/', 'IndexController::index')->name('index');
    $routes->get('/news', 'NewsController::News')->name('news');

**And I need to get the objects like this:**

    Route::get('/', 'IndexController::index')->name('index');
    Route::get('/news', 'NewsController::News')->name('news');
    Route::get('/about', 'AboutController::About')->name('about');
    
    $getTheObject = Route::getWholeObject();
    
    echo'<pre>';
    print_r($getTheObject);
    echo'</pre>';


**If I try to get the whole router object as I need But it returns an object with empty routes array:**

    Core\Router\Router Object
    (
        [routes] => Array
            (
                [names] => Array
                    (
                    )
    
                [paths] => Array
                    (
                    )
    
                [params] => Array
                    (
                    )
            )
    
        [uri] => /rfrfrfr
        [KeepPermamentPath] => 
    )





**If I try like this it returns the correct object but I don't want to write it that ugly way ($routes->etc...) :**

    $routes = new Route();
    $routes->get('/', 'IndexController::index')->name('index');
    $routes->get('/news', 'NewsController::News')->name('news');
    
    echo'<pre>';
    print_r($routes);
    echo'</pre>';

The object

    Core\Router\Router Object
    (
        [routes] => Array
            (
                [names] => Array
                    (
                        [index] => Array
                            (
                                [path] => /
                                [call] => IndexController::index
                                [methods] => Array
                                    (
                                        [0] => get
                                    )
    
                                [name] => index
                            )
    
                        [news] => Array
                            (
                                [path] => /news
                                [call] => NewsController::News
                                [methods] => Array
                                    (
                                        [0] => get
                                    )
    
                                [name] => news
                            )
    
                    )
    
                [paths] => Array
                    (
                        [/] => Array
                            (
                                [path] => /
                                [call] => IndexController::index
                                [methods] => Array
                                    (
                                        [0] => get
                                    )
    
                                [name] => index
                            )
    
                        [/news] => Array
                            (
                                [path] => /news
                                [call] => NewsController::News
                                [methods] => Array
                                    (
                                        [0] => get
                                    )
    
                                [name] => news
                            )
    
                    )
    
                [params] => Array
                    (
                    )
    
            )
    
        [uri] => /rfrfrfr
        [KeepPermamentPath] => /news
    )






