<?php
    class ControllerRegistration extends Controller {

        function __construct(){
            $this->model = new ModelRegistration();
            $this->view = new View();
        }

        function actionIndex(){
            $this->view->generate('ViewRegistration.php', MAIN_VIEW);
        }

        function actionCreate(){

            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = $_POST['login'];
            $id_role = '2';

            $sql = "INSERT INTO users (login, email, id_role, password) VALUES ( '{$login}', '{$email}', '{$id_role}', '{$password}' )";
            $result = DB::insertData($sql);
            if ($result) {
                header("Location: /");
            }





        }
    }