<?php

$path = "/index";

if (isset($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
}

require __DIR__ . '/../app/View' . $path . ".php";

# jika URL = localhost:8080/login, maka path-nya
# require __DIR__ . '/../app/View/login.php";

# localhost:8080/index.php/category = localhost:8080/category. $_SERVER['PATH_INFO'] = /category
# localhost:8080/index.php/user/login = localhost:8080/user/login. $_SERVER['PATH_INFO'] = /user/login

# localhost:8080/index.php/category?name=gadget = localhost:8080/category?name=gadget. $_SERVER['PATH_INFO'] = /category
# localhost:8080/index.php/product?name=gadget = localhost:8080/product?name=gadget. $_SERVER['PATH_INFO'] = /product
# query parameter ga masuk ke path info.