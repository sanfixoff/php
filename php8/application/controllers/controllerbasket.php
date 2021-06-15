<?php
    class ControllerBasket extends Controller {

        function __construct(){
            $this->model = new ModelBasket();
            $this->view = new View();
        }

        function actionIndex(){
            $data = $this->model->get_data();
            $this->view->generate('ViewBasket.php', MAIN_VIEW, $data);
        }

        function actionClear(){
            BASKET::clearCart();

            header('Location: /basket/');
        }

        function actionDelete() {
            BASKET::deleteProduct($_POST['cart_item_id']);
            header('Location: /basket/');
        }

    }