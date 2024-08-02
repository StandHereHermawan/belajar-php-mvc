<?php

require_once __DIR__ . "/../vendor/autoload.php";

use AriefKarditya\RouterPhp\App\Router;

Router::add('GET', '/', 'HomeController', 'index');
Router::add('GET', '/hello', 'HelloController', 'hello');
Router::add('GET', '/world', 'WorldController', 'world');

Router::run();

# jika URL = localhost:8080/login, maka path-nya
# require __DIR__ . '/../app/View/login.php";

# localhost:8080/index.php/category = localhost:8080/category. $_SERVER['PATH_INFO'] = /category
# localhost:8080/index.php/user/login = localhost:8080/user/login. $_SERVER['PATH_INFO'] = /user/login

# localhost:8080/index.php/category?name=gadget = localhost:8080/category?name=gadget. $_SERVER['PATH_INFO'] = /category
# localhost:8080/index.php/product?name=gadget = localhost:8080/product?name=gadget. $_SERVER['PATH_INFO'] = /product
# query parameter ga masuk ke path info.