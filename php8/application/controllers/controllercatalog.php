<?php
class ControllerCatalog extends Controller {

    function __construct(){
        $this->model = new ModelCatalog();
        $this->view = new View();
    }

    function actionIndex(){
        $data = $this->model->get_data();
        $this->view->generate('ViewCatalog.php', MAIN_VIEW, $data);
    }



    function actionAddBasket() {
        $id = $_POST['id_product'];
        $sql = "SELECT * FROM products WHERE id = '{$id}'";
        $result = DB::getOneResult($sql);

        BASKET::addProduct($result['id'], $result['name'], $result['price']);

        header('Location: /catalog/');
        //echo '<pre>';
        //print_r($result);
        //echo '</pre>';


    }


}