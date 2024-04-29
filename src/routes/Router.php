<?php

    class Router{

        public static function load(string $controller, string $action){


        }

        public static function routes():array{
            return [
                'get'=> [
                    '/' => self::load('login','loadLogin'),
                    '/home' => 'HomeController'
                ],
                'post'=> [],
                'put'=> [],
                'delete'=> [],
            ];
        }
    }


?>