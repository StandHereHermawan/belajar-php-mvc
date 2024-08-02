<?php

echo "<h1>Hello PHP MVC!</h1>" . PHP_EOL;

if (isset($_SERVER['PATH_INFO'])) {
    echo "<h2>" . $_SERVER['PATH_INFO'] . "</h2>" . PHP_EOL;
} else {
    echo "<h2>TIDAK-ADA-PATH-INFO</h2>" . PHP_EOL;
}

# localhost:8080/index.php/category = localhost:8080/category. $_SERVER['PATH_INFO'] = /category
# localhost:8080/index.php/user/login = localhost:8080/user/login. $_SERVER['PATH_INFO'] = /user/login

# localhost:8080/index.php/category?name=gadget = localhost:8080/category?name=gadget. $_SERVER['PATH_INFO'] = /category
# localhost:8080/index.php/product?name=gadget = localhost:8080/product?name=gadget. $_SERVER['PATH_INFO'] = /product
# query parameter ga masuk ke path info.