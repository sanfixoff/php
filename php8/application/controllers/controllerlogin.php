<?php
class ControllerLogin extends Controller {

    function __construct(){
        $this->model = new ModelLogin();
        $this->view = new View();
    }

    function actionIndex(){
        $this->view->generate('ViewLogin.php', MAIN_VIEW);
    }

    function actionAuth(){
        if (($_POST['email']) && ($_POST['password'])){

            $login = strip_tags(stripslashes($_POST['email']));
            $sql = "SELECT * FROM users WHERE email = '{$_POST['email']}'";
            $result = DB::getOneResult($sql);
            if ($result) {
                if ($_POST['password'] == $result['password']) {

                    $_SESSION['user']['id'] = $result['id'];
                    $_SESSION['user']['login'] = $login;
                    $_SESSION['user']['email'] = $result['email'];
                    $_SESSION['user']['role'] = self::roleById($result['id_role']);
                    header('Location: /');
                    die();
                }
            } else {
                echo 'Такогопользователя не существует';
            }

        } else {
            echo 'Введите поля формы';
        }

    }

    function roleById ($id){
        $sql = "SELECT * FROM roles WHERE id = '{$id}'";
        $result = DB::getOneResult($sql);
        if ($result) {
            return $result['name'];
        } else {
            return false;
        }
    }


    function actionLogout(){
        unset($_SESSION['user']);
        header('Location: /');
        die();
    }

}