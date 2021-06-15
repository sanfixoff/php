<?php
    class ControllerOrder extends Controller {

        function __construct(){
            $this->model = new ModelOrder();
            $this->view = new View();
        }

        function actionIndex(){
            $data = BASKET::getBasket();
            $this->view->generate('ViewOrder.php', MAIN_VIEW, $data);
        }


        function actionCreate() {
            $result = [];
            $_SESSION['order'] = $_POST;
            $name = $_POST['firstName'];
            $sername = $_POST['lastName'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $comment = $_POST['comment'];
            $order_status = '1';


            foreach ($_SESSION['cart'] as $ind => $val){
                $mas1[] = implode(",", $val);
                $items_cart = implode("||", $mas1);
            }

            /*$firstDimension = explode('|', $items_cart); // Divide by | symbol
            foreach($firstDimension as $temp) {
                // Take each result of division and explode it by , symbol and save to result
                $res[] = explode(',', $temp);
            }*/
            //e($res);


            $sql = "INSERT INTO orders (name, sername, phone, email, address, comment, cart_items, id_status) VALUES ( '{$name}', '{$sername}', '{$phone}', '{$email}', '{$address}', '{$comment}', '{$items_cart}', '{$order_status}' )";
            $result = DB::insertData($sql);
            if ($result) {
                unset($_SESSION['cart']);
                unset($_SESSION['order']);
                header("Location: /");
            }
        }



    }
