<?php
    class basket {


        static function addProduct($id, $product_name, $product_price) {
            if ($_SESSION['cart'][$id]) {
                $old_count = $_SESSION['cart'][$id]['count'];
                $_SESSION['cart'][$id]['count'] = $old_count  + 1;
            } else {
                $_SESSION['cart'][$id] = array(
                    'id' => $id,
                    'count' => 1,
                    'name' => $product_name,
                    'price' => $product_price,
                );
            }
        }

        static function deleteProduct($id) {
            unset($_SESSION['cart'][$id]);
        }


        static function clearCart(){
            unset($_SESSION['cart']);
        }

        static function getCountBasket() {
            if (is_array($_SESSION['cart'])) {
                return count($_SESSION['cart']);
            } else {
                return false;
            }

        }


        static function getTotalProduct($id) {
            if ($_SESSION['cart'][$id]) {
                $total = $_SESSION['cart'][$id]['count'] * $_SESSION['cart'][$id]['price'];
                return $total;
            }
        }

        static function getTotal() {
            $total = 0;
            $cart = $_SESSION['cart'];
            if (is_array($cart)) {
                foreach ($cart as $item) {
                    $sum = BASKET::getTotalProduct($item['id']);
                    $total = $total + $sum;
                }
                return $total;
            }
        }

        static function getBasket() {
            if ($_SESSION['cart']) {
                $basket = $_SESSION['cart'];
                return $basket;
            }
        }

    }