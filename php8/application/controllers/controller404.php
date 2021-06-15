<?php
    class Controller404 extends Controller {

        function __construct(){
            $this->model = new Model404();
            $this->view = new View();
        }

        function actionIndex(){
            $this->view->generate('View404.php', MAIN_VIEW);
        }

    }