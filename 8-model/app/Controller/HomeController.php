<?php

namespace AriefKarditya\ModelPhp\Controller;

class HomeController
{
    function index()
    {
        $model = [
            "title" => "Belajar PHP MVC",
            "content" => "Selamat Belajar PHP MVC dari Arief Karditya Hermawan",
        ];
        echo "HomeController.index()";
    }

    function hello()
    {
        echo "HomeController.hello()";
    }

    function world()
    {
        echo "HomeController.world()";
    }

    function About()
    {
        echo "Author: Arief Karditya Hermawan";
    }

    function login()
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password'],
        ];

        $user = [];

        $response = [
            "message" => "Login Sukses",
        ];

        # Kirim response ke View
    }
}
