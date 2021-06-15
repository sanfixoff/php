<?php


    class Route {
        static function start(){

            $controller_name = 'index';
            $action_name = 'index';

            $routes = explode('/', $_SERVER['REQUEST_URI']);

            if ( !empty($routes[1]) ){
                $controller_name = strtolower($routes[1]);
            }

            if ( !empty($routes[2]) ){
                $action_name = strtok($routes[2], '?');;
            }

            $model_name = 'model'.$controller_name;
            $controller_name = 'controller'.$controller_name;
            $action_name = 'action'.$action_name;


            $model_file = $model_name.'.php';
            $model_path = "application/models/".$model_file;


            //echo $model_path.'<br>';

            if(file_exists($model_path)){
                include "application/models/".$model_file;
            } else {
                Route::ErrorPage404();
            }

            $controller_file = $controller_name.'.php';
            $controller_path = "application/controllers/".$controller_file;

            //echo $controller_path.'<br>';

            if(file_exists($controller_path)){
                include "application/controllers/".$controller_file;
            } else {
                Route::ErrorPage404();
            }

            $controller = new $controller_name;
            $action = $action_name;

            //echo $action_name.'<br>';

            if(method_exists($controller, $action)){
                $controller->$action();
            } else {
                Route::ErrorPage404();
            }





        }

        static function ErrorPage404() {
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
        }



    }