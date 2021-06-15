<?php
    class auth {


        static function hash($password) {
            if ($password) {
                $hash = sha1($password);
                return $hash;
            }
        }

        static function isauth() {
            if (!empty($_SESSION['user']['login'])) {
                return true;
            } else {
                return false;
            }
        }

        static function isadmin() {
            if (($_SESSION['user']['role']) == 'admin') {
                return true;
            } else {
                return false;
            }
        }


    }